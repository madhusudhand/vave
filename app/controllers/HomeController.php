<?php

class HomeController extends BaseController {

    private function checkAppConfig(){
        try{
            $scripts = DB::table('migrations')->count();
            return true;
        }catch(Exception $ex){
            return false;
        }
    }
    
    public function index(){
        if($this->checkAppConfig()){
            if(!Auth::check()) return Redirect::intended('/login');
            
            return View::make('app.index');
        }else{
            return Redirect::to('setup');
        }
    }
    
    
    public function login(){
        return View::make('home.login');
    }
    
    public function logout(){
        Auth::logout();
        return Redirect::intended('/');
    }
    
    public function checkLogin(){
        $inputs = Input::all();
        
        $attempt = Auth::attempt([
            'email'=>$inputs['email'],
            'password'=>$inputs['password']
        ]);
        
        if($attempt){
            return Redirect::intended('/');
        }
        
        return Redirect::route('login',['email'=>$inputs['email']]);
    }
	
}

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
        if($this->checkAppConfig())
            return View::make('hello');
        else
            return Redirect::to('configure');
    }
	
}

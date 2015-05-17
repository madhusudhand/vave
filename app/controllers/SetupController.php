<?php

class SetupController extends BaseController {
    
    public function index(){
        return View::make('setup.setup');
    }
}
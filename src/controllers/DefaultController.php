<?php

require_once "AppController.php";

class DefaultController extends AppController {
  
    public function index(){
        #TODO display login html
        $this->render('login');
        #die('index method');
    }

    public function adverts(){
        #TODO diplay adverts
        $this->render('adverts');
        #die('adverts method');
    }
};
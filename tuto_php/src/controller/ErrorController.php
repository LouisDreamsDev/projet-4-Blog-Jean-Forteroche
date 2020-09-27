<?php

namespace App\src\controller;

class ErrorController extends Controller

{

    public function error_not_found () 
    {
        return $this->view->render('error_404');
    }

    public function error_server ()
    {
        return $this->view->render('error_500');
    }

}
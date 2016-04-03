<?php

namespace Controllers;

use App\Controller;

class homeController extends Controller
{
    public function __construct ()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $model = [
            'title' => 'Testing Framework App',
            'parraph' => '<h2>Hello World</h2>',
        ];
        $this->view->render('index', $model);
    }
}
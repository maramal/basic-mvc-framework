<?php

namespace App;

class View
{
    private $controller;
    private $_model;
    
    public function __construct (Request $request)
    {
        $this->controller = $request->getController();
    }
    
    public function render ($view, $model = false)
    {
        $viewPath = ROOT . 'views' . DS . $this->controller . DS . $view . '.view';
        
        if (is_readable($viewPath))
        {
            $this->_model = $model;
            
            include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'header.php';
            include_once $viewPath;
            include_once ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'footer.php';
        }
        else
        {
            throw new Exception ('Error: View not found');
        }
    }
}
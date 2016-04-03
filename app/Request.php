<?php

namespace App;

class Request
{
    private $controller;
    private $method;
    private $args;
    
    public function __construct ()
    {
        if (isset ($_GET['url']))
        {
            $url = filter_input (INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = strtolower ($url);
            $url = explode ('/', $url);
            $url = array_filter ($url);
        }
        
        $this->controller = array_shift ($url);
        $this->method =     array_shift ($url);
        $this->args =       $url;
                
        if (!$this->controller || ($this->controller === 'index.php'))
        {
            $this->controller = DEFAULT_CONTROLLER;
        }
        
        if (!$this->method)
        {
            $this->method = DEFAULT_METHOD;
        }
        
        if (!$this->args)
        {
            $this->args = array();
        }
    }
    
    public function getController ()
    {
        return $this->controller;
    }
    
    public function getMethod ()
    {
        return $this->method;
    }
    
    public function getArguments ()
    {
        return $this->args;
    }
}
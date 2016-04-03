<?php

namespace App;

use Controllers\Controller;

class Bootstrap
{
    public static function run (Request $request)
    {
        $controller = $request->getController() . 'Controller';
        $controllerPath = ROOT . 'controllers' . DS . $controller . '.php';
        $method = $request->getMethod();
        $args = $request->getArguments();
        
        if (is_readable ($controllerPath))
        {
            require_once $controllerPath;
            
            $controller = "Controllers\\" . $controller;
            $controller = new $controller;
            
            if (!is_callable (array ($controller, $method)))
            {
                $method = 'index';
            }
            
            if ($args !== null)
            {
                call_user_func_array (array(
                    $controller,
                    $method
                ), $args);
            }
            else
            {
                call_user_func (array(
                    $controller,
                    $method
                ));
            }
        }
    }
}
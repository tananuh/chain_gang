<?php
namespace chain_gang;
class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        
        Router::parse($this->request->url, $this->request);
        if($this->request->check){
            foreach($this->request->controller as $value){
                $controller = $this->loadController($value);
                call_user_func_array([$controller, $this->request->action], $this->request->params);
            }  
        }else {
            $controller = $this->loadController($this->request->controller);
            call_user_func_array([$controller, $this->request->action], $this->request->params);
        }
        
        
    }

    public function loadController($controllerName)
    {
        $name = $controllerName . "Controller";
        $name = ucfirst($name);
        $controller = "chain_gang\\Controllers\\".$name;
        return new $controller;
    }

}
?>
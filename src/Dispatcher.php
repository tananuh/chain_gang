<?php
namespace chain_gang;
class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        
        Router::parse($this->request->url, $this->request);
        
        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        // $file = ROOT . 'src/Core/' . $name . '.php';
        // require($file);
        $name = ucfirst($name);
        $controller = "chain_gang\\Controllers\\".$name;
        return new $controller;
    }

}
?>
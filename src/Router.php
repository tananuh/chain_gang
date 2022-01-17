<?php
Namespace chain_gang;
class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);

        if ($url == "/chain_gang/")
        {
            $request->controller = "Bicycles";
            $request->action = "index";
            $request->params = [];
        }
        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->controller = $explode_url[0];
            $request->action = $explode_url[1];
            $request->params = array_slice($explode_url, 2);
        }
        

    }
}
?>
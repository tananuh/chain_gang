<?php
namespace chain_gang\Core;

    class Controller
    {
        var $vars = [];
        var $layout = "default";

        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);
        }

        function render($filename)
        {
            extract($this->vars);
            
            ob_start();
            require(ROOT . "src/Views/" . ucfirst(str_replace('Controller', '', str_replace('chain_gang\Controllers\\', '', get_class($this)))) . '/' . $filename . '.phtml');
            $content_for_layout = ob_get_clean();
            
            if ($this->layout == false)
            {
                $content_for_layout;
            }
            else
            {
                require(ROOT . "src/Views/Layouts/" . $this->layout . '.phtml');
            }
        }

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }
        }

    }
?>
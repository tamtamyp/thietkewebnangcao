<?php
    class App {
        protected $controller;
        protected $action = "Index";
        protected $params;

        function getURL() {
            if (isset($_GET['url'])) {
                return explode('/', trim($_GET['url'], '/'));    
            }
        }
        function __construct() {
            $uRLs = $this->getURL();
            if ((isset($uRLs[0])) && file_exists("Controllers/{$uRLs[0]}Controller.php")) {
                $this->controller = "{$uRLs[0]}Controller";
                unset($uRLs[0]);
            }
            require_once("Core/Controller.php");
            require_once("Controllers/{$this->controller}.php");
            if (isset($uRLs[1])) {
                if (method_exists(new $this->controller, $uRLs[1])) {
                    $this->action = $uRLs[1];
                }
                unset($uRLs[1]);
            }
            $this->params = $uRLs ? array_values($uRLs) : [];
            call_user_func_array([new $this->controller, $this->action], $this->params);
        }
    }
?>
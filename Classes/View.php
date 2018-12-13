<?php




    class View {
        public static function make($viewName){
            $viewPath = "./Views/{$viewName}.php";
            $controllerPath = "./Controllers/{$viewName}.php";
            if(file_exists($controllerPath)){
                require_once($controllerPath);
            }
            if(file_exists($viewPath)){
                require_once($viewPath);
            }
        }
    }
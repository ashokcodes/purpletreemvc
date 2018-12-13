<?php





class Template
{
    public static function get($templatePart)
    {
        $templatePath = "./Template/{$templatePart}.php";
        if (file_exists($templatePath)) {
            require_once($templatePath);
        }
    }
}
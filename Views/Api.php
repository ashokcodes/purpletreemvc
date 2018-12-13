<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

class User 
{
    public $name;
    public $job;
    function __construct($name, $company)
    {
        $this->name = $name;
        $this->job = $job;
    }
}



$response[] = new User("Ashok Mohanakumar","Programmer");



echo json_encode($response);
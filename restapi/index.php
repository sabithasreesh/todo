<?php
/**
 *  File name : index.php
 * This file routes the request to a Controller
 * @author Sabitha 
 */
//get the path from the request  
$request = $_GET['req'];
$request_array = explode('/', trim($request));
//get the controller name from the first array item
$controller_name = $request_array[0];
//get the id from the second array item
$id = "";
if(isset($request_array[1])) {
   $id = $request_array[1]; 
}

// Create the controller object only if the controller file is existing
if($controller_name != '' && file_exists("controller/" . $controller_name . "Controller.php")) {
    require_once ("controller/" . $controller_name . "Controller.php");
    $method = $_SERVER['REQUEST_METHOD'];
    $class_name = $controller_name . "Controller";
    $obj = new $class_name();
    // call the index method of the controller
    $obj->index($method,$id);
} 









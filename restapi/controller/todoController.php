<?php

/**
 * File name : todoController.php
 * Implementaion of todoController
 * @author Sabitha 
 */
require_once ("model/Connection.php");
require_once ("model/todoModelClass.php");

class todoController {

    /**
     * CRUD methods for todo      
     *
     * @param string $method  HTTP Request Method
     * @param string $id  id of the idividual todo tem
     * @return void
     */
    function index($method, $id = "") {
        $modelObj = new ModelClass();
        switch ($method) {
            case 'GET':
                if ($id != "") {
                    $results = $modelObj->getListById($id);
                } else {
                    $results = $modelObj->getList();
                }
                echo (json_encode($results)) ;
                break;
            case 'PUT':
                parse_str(file_get_contents("php://input"), $data);
                $results = $modelObj->insertList($data);
                break;
            case 'POST':
                $data = $_POST;
                $results = $modelObj->updateList($id,$data);
                break;
            case 'DELETE':
                $results = $modelObj->deleteList($id);
                break;
        }
    }

}

<?php

/**
 * File name : todoModelClass.php
 * Implementaion of todo model
 * @author Sabitha 
 */
class ModelClass extends Connection {

    /**
     * Select all the todo records     
     * @return Array result array
     */
    function getList() {
        $sql = "SELECT * FROM todo";
        return $this->get($sql);
    }

    /**
     * Insert a new todo record   
     * @return Boolean
     */
    function insertList($data) {
        $betreff = mysqli_real_escape_string(self::$con, $data["betreff"]);
        $beschreibung = mysqli_real_escape_string(self::$con, $data["beschreibung"]);
        $sql = "INSERT INTO todo (betreff, beschreibung, erstellung_datum) VALUES ('$betreff', '$beschreibung', now() )";
        $this->execute($sql);
        return true;
    }

    /**
     * Select one  todo record
     * @return Array result array
     */
    function getListById($id) {
        $sql = "SELECT * FROM todo WHERE id_todo = $id";
        return $this->get($sql);
    }

    /**
     * Update a todo record   
     * @return Boolean
     */
    function updateList($id, $data) {
        $betreff = mysqli_real_escape_string(self::$con, $data["betreff"]);
        $beschreibung = mysqli_real_escape_string(self::$con, $data["beschreibung"]);
        $sql = "UPDATE todo SET betreff = '$betreff', beschreibung = '$beschreibung' WHERE id_todo = $id";
        $this->execute($sql);
        return true;
    }

    /**
     * Delete a todo record   
     * @return Boolean
     */
    function deleteList($id) {
        $sql = "DELETE FROM todo WHERE id_todo = $id";
        $this->execute($sql);
        return true;
    }

}

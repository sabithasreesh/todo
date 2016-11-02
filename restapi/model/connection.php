<?php

/**
 * File name : Connection.php
 * Implementaion of DataBase Connection
 * @author Sabitha 
 */
class Connection {

    protected static $con;

    /**
     * Establish a database connection    
     */
    function connection() {
        if (!isset(self::$con)) {
            self::$con = mysqli_connect('localhost', 'root', '', 'todo');
        }
    }

    /**
     * Get the resultset from table using select query
     * @param string $query  Mysql Query
     * @return Array $results resultset from the table
     */
    public function get($query) {
        $this->connection();
        $result = mysqli_query(self::$con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }
        return $results;
    }

    /**
     * Execute the query for insert, update, delete  
     * @param string $query  Mysql Query
     * @return void
     */
    public function execute($query) {
        $this->connection();
        $result = mysqli_query(self::$con, $query);
    }

}

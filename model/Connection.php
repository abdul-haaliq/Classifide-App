<?php

class Database
{

    public static $connection;

    public static function setUpConnection()
    {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", "Abdul200311@ALH", "final_project", "3306");
        }
    }

    public static function iud($query)
    {
        Database::setUpConnection();
        Database::$connection->query($query);
    }

    public static function search($query)
    {
        Database::setUpConnection();
        $resultSet = Database::$connection->query($query);
        return $resultSet;
    }
}

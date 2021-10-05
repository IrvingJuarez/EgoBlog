<?php

function dbConnection(){
    $connection = new mysqli("localhost", "root", "", "gallery", 8080);
    return $connection;
}
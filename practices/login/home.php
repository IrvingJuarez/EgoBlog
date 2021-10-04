<?php

session_start();

if(!$_SESSION['user']){
    header("Location: index.php");
}

require "views/home.view.php";
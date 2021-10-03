<?php

session_start();

if( isset($_SESSION['user']) ){
    header("Location: home.php");
}else{
    header("Location: register.php");
}
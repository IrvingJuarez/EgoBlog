<?php

function emptiness($variable, $msg){
    if(empty($variable)){
        return "<span>Please add a $msg</span>";
    }else{
        return null;
    }
}

require "index.view.php";
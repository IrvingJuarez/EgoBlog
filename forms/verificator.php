<?php

// First method

// if($_SERVER['REQUEST_METHOD'] == 'GET'){
//     echo "The data was sent by the GET method";
// }else{
//     echo "The data was sent by the POST method";
// }

// The second one (my favorite one)

if(isset($_POST['basic-info'])){
    echo "The data was sent successfully";
}else{
    echo "The data was not sent successfully";
}

?>
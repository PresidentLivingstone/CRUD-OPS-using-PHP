<?php

$conn = new mysqli('localhost', 'root', '', 'crudoperation');

if(!$conn){
    die(mysqli_connect_error($conn)); 
};


?>
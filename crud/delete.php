<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
    $id= $_GET['deleteid'];


    $sql = "delete from `crud`  where id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        // echo "Deleted Succefully";
        header('location:display.php');
    }else{
        die(mysqli_connect_error($conn)); 
    }
}


?>
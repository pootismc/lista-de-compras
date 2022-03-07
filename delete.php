<?php
include 'connect.php';
$name=$_GET['deletename'];
if(isset($_GET['deletename'])){
    $sql="delete from 'crud' where name='$name'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Deleted successfull";
    }else{
        die(mysqli_error($con));
    }
}

?>


if(isset($_POST['submit'])){
    $name=$_POST['name'];

    $sql = "INSERT INTO crud "."(name) "."VALUES "."('$name')";

    $result =mysqli_query($con,$sql);
           

    if($result){
        // echo "Data inserted";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
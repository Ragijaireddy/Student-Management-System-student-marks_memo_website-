<?php
include 'admin.php';

if(isset($_GET['deleteid'])){
    $htNo=$_GET['deleteid'];

    $sql="delete from `students` where htNo='$htNo'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "delete successful";
       header('location:adminhome.php');
    }
    else{
        die(mysqli_error($con));
    }
}


?>
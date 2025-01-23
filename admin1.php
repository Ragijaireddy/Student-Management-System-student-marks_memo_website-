<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
body{text-align: center;
    margin: 50px;
padding: 50px;}


</style>
</head>
<body >
    <h1>login page</h1>
    <form action="admin1.php" method="post">
    name: <br>
    <input type="text"name="username"><br>
    password: <br>
    <input type="password" name="password"><br>
    <button type="submit">login</button>
    <br>
    <br>
    <br>
    <br>
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'admin.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from `admin` where name='$username' and password='$password'";
    $result=mysqli_query($con,$sql);

    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "valid data";
      $login=1;
     session_start();
     $_SESSION['username']=$username;
     header('location:adminhome.php');
    }
    else{
         echo "invalid data";
    }
}
}

?>
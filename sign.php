<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <style>
body{text-align: center;
    margin: 50px;
padding: 50px;}


</style>
</head>
<body >
    <h1>sign up page</h1>
    <form action="sign.php" method="post">
    name: <br>
    <input type="text"name="username"><br>
    password: <br>
    <input type="password" name="password"><br>
    <button type="submit">submit</button>
    <br>
    <br>
    <a href="admin1.php">already have account?</a>
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

    $sql="insert into `admin`(name,password) values('$username','$password')";
    $result=mysqli_query($con,$sql);

    if($result){
        echo ". data inserted succefully";
    }
    else{
        die(mysqli_error($con));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new records</title>

</head>
<body>
    <form action="insert.php" method="post">
        name:
        <input type="text" placeholder="your name" name="name"required> <br>
        <br>
        HTNo:
        <input type="text" placeholder="your hallticket no" name="htno" required> <br> <br>
        math1:
        <input type="text"placeholder="maths1 marks" name="math1"required> <br>
        stat1:
        <input type="text"placeholder="stat1 marks" name="stat1"required> <br>
        cs1:
        <input type="text"placeholder="cs1 marks" name="cs1"required> <br> <br>
        math2:
        <input type="text"placeholder="math2 marks" name="math2"required> <br>
        stat2:
        <input type="text"placeholder="stat2 marks" name="stat2"required> <br>
        cs2:
        <input type="text"placeholder="cs2 marks" name="cs2"required> <br>
        statpr1:
        <input type="text"placeholder="statpr1 marks" name="statpr1"required> <br>
        cspr1:
        <input type="text"placeholder="cspr1 marks" name="cspr1"required> <br>
        statpr2:
        <input type="text"placeholder="statpr2 marks" name=" statpr2"required> <br>
        cspr2:
        <input type="text"placeholder="cspr2 marks" name="cspr2"required> <br>
       <br>   <br>
        <button type="submit">submit</button>
     
    </form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'admin.php';
    $name=$_POST['name'];
    $hallticket=$_POST['htno'];
    $math1=$_POST['math1'];
    $stat1=$_POST['stat1'];
    $cs1=$_POST['cs1'];
    $math2=$_POST['math2'];
    $stat2=$_POST['stat2'];
    $cs2=$_POST['cs2'];
    $statpr1=$_POST['statpr1'];
    $cspr1=$_POST['cspr1'];
    $statpr2=$_POST['statpr2'];
    $cspr2=$_POST['cspr2'];
   // $grou=$_POST['grou'];
    $sql1="insert into `students`(name,htNo,math1,stat1,cs1,math2,stat2,cs2,statpr1,cspr1,statpr2,cspr2)
    values('$name','$hallticket','$math1','$stat1','$cs1','$math2','$stat2','$cs2',' $statpr1','$cspr1',' $statpr2','$cspr2')";
    $result=mysqli_query($con,$sql1);

    if($result){
     echo ". data inserted succefully";
      header('location:adminhome.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>
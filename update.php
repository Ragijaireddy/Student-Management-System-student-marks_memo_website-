<?php
include 'admin.php';
$htNo=$_GET['updateid'];
$sql="select * from `students` where htNo='$htNo'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$ht=$row['htNo'];
$math1=$row['math1'];
$stat1=$row['stat1'];
$cs1=$row['cs1'];
$math2=$row['math2'];
$stat2=$row['stat2'];
$cs2=$row['cs2'];
$statpr1=$row['statpr1'];
$cspr1=$row['cspr1'];
$statpr2=$row['statpr2'];
$cspr2=$row['cspr2'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $htNo=$_POST['htno'];
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
    
    $sql="update `students` set name='$name',HTNo='$htNo',math1='$math1',
    stat1='$stat1',cs1='$cs1',math2='$math2',stat2='$stat2',cs2='$cs2',statpr1='$statpr1',cspr1='$cspr1',statpr2='$statpr2',cspr2='$cspr2'
     where htNo='$htNo'";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "update successful";
       header('location:adminhome.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>

</head>
<body>
    <form method="post">
        name:
        <input type="text" placeholder="your name" name="name" value=<?php echo $name;?> > <br>
        <br>
        HTNo:
        <input type="text" placeholder="your hallticket no" name="htno" value=<?php echo $ht;?>> <br> <br>
        math1:
        <input type="text"placeholder="maths1 marks" name="math1" value=<?php echo $math1;?>> <br> <br>
       <br>   <br>
       stat1:
        <input type="text"placeholder="stat1 marks" name="stat1" value=<?php echo $stat1;?>> <br> <br>
       <br>   <br>
       cs1:
        <input type="text"placeholder="cs1 marks" name="cs1" value=<?php echo $cs1;?>> <br> <br>
       <br>   <br>
       math2:
        <input type="text"placeholder="maths2 marks" name="math2" value=<?php echo $math2;?>> <br> <br>
       <br>   <br>
       stat2:
        <input type="text"placeholder="stat2 marks" name="stat2" value=<?php echo $stat2;?>> <br> <br>
       <br>   <br>
       cs2:
        <input type="text"placeholder="cs2 marks" name="cs2" value=<?php echo $cs2;?>> <br> <br>
       <br>   <br>
       statpr1:
        <input type="text"placeholder="statpr1 marks" name="statpr1" value=<?php echo $statpr1;?>> <br> <br>
       <br>   <br>
       cspr1:
        <input type="text"placeholder="cspr1 marks" name="cspr1" value=<?php echo $cspr1;?>> <br> <br>
       <br>   <br>
       statpr2:
        <input type="text"placeholder="statpr2 marks" name="statpr2" value=<?php echo $statpr2;?>> <br> <br>
       <br>   <br>
       cspr2:
        <input type="text"placeholder="cspr2 marks" name="cspr2" value=<?php echo $cspr2;?>> <br> <br>
       <br>   <br>
        <button type="submit" name="submit">update</button>
     
    </form>
</body>
</html>

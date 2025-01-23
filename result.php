<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student results</title>
    <style>
body{text-align: center;
    margin: 50px;
padding: 50px;}


</style>
</head>
<body >
    <h1>results</h1>
    <form method="post">
    name: <br>
    <input type="text"name="name"><br>
   Hallticket NO: <br>
    <input type="password" name="htNo"><br><br>
    <button type="submit">submit</button>
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
    $name=$_POST['name'];
    $htNo=$_POST['htNo'];

    $sql="select * from `students` where name='$name' and htNo='$htNo'";
    $result=mysqli_query($con,$sql);

    if($result){
        while($row=mysqli_fetch_assoc($result)){

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
//       display the student results in table formate
     echo '<table border="1" style="width:50%" > <tr>
<tr><th scope="col"><B>NAME:</B></th>
 <th scope="row">'.$name.'</th></tr> </br>
<tr><th scope="col"><B>HTNo:</B></th>
<th scope="col">'.$ht.'</th></tr>     </br>         
</tr>
<br>
<tr>
<th scope="col">subject</th>
<th scope="col">marks</th>
</tr></br>
<tr>
<tr> <td>math1</td>
<th scope="col">'.$math1.'</th></tr></br>
<tr> <td>stat1</td>
<th>'.$stat1.'</th></tr></br>
<tr> <td>cs1</td>
<th>'.$cs1.'</th></tr></br>
<tr> <td>math2</td>
<th>'.$math2.'</th></tr></br>
<tr> <td>stat2</td>
<th>'.$stat2.'</th></tr></br>
<tr> <td>cs2</td>
<th>'.$cs2.'</th></tr></br>
<tr> <td>statpr1</td>
<th>'.$statpr1.'</th></tr></br>
<tr> <td>cspr1</td>   
<th>'.$cspr1.'</th></tr></br>
<tr> <td>statpr2</td>
<th>'.$statpr2.'</th></tr></br>
<tr> <td>cspr2</td>
<th>'.$cspr2.'</th></tr></br>
<br>
</tr>
</table>';
    }
}
   else{
        echo 'invalid data';

}
}

?>
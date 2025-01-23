
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'admin.php';
?>
   <div class="cont">
<button name="new" class="new"><a href="insert.php">new data</a></button>
<table class="table">
    <thead>
    <tr>
    <th scope="col"><B>HTNo</B></th>
    <th scope="col"><B>NAME</B></th>
    <th>math1</th>
    <th>stat1</th>
    <th>cs1</th>
    <th>math2</th>
    <th>stat2</th>
    <th>cs2</th>
    <th>statpr1</th>
    <th>cspr1</th>
    <th>statpr2</th>
    <th>cspr2</th>
    </tr> 
    </thead>
    <tbody>
   
        <?php
            $sql="select * from `students`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $name=$row['name'];
                    $htNo=$row['htNo'];
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
                  echo ' <tr>
               <td scope="col">'.$htNo.'</td>  
              <td scope="row">'.$name.'</td> 
               <td scope="col">'.$math1.'</td>  
               <td>'.$stat1.'</td> 
               <td>'.$cs1.'</td> 
                <td scope="col">'.$math2.'</td>  
               <td>'.$stat2.'</td> 
               <td>'.$cs2.'</td>   
               <td>'.$statpr1.'</td> 
               <td>'.$cspr1.'</td>
               <td>'.$statpr2.'</td> 
               <td>'.$cspr2.'</td> 
                 <td>
           <button class="update"><a href="update.php? updateid='.$htNo.'">update</a></button>
        <button class="delete"><a href="delete.php? deleteid='.$htNo.'">delete</a></button>
           </td>   
        </tr>';
                }
            }
        ?> 
    </tbody>
</table>
   </div>
    <a href="admin1.php">logout</a> <br>
    <a href="sign.php">create new account?</a>
</body>
</html>
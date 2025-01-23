<?php
$HOSTNAME='localhost';
$USERNAME='';
$PASSWORD='';
$DATABASE='result';

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if($con){
//echo "connection successfull";
}else{
    die(mysqli_error($con));
}
?>
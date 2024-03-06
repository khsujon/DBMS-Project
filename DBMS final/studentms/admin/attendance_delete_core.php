<?php
require_once('config.php');

if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    
}

$deleteQuery="DELETE FROM `tblattendance` WHERE id='$id'";
$runQuery=mysqli_query($connect,$deleteQuery);

if($runQuery){
    header("location:attendance.php");
}else{
    echo "something went wrong";
}
?>
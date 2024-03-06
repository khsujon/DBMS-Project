<?php
require_once('config.php');

if(isset($_REQUEST['id'])){
    $id=$_REQUEST['id'];
    
}

$deleteQuery="DELETE FROM `grade` WHERE id='$id'";
$runQuery=mysqli_query($connect,$deleteQuery);

if($runQuery){
    header("location:gread.php");
}else{
    echo "something went wrong";
}
?>
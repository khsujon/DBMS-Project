<?php
require_once('config.php');

$student_id=$_REQUEST['student_id'];
$student_class=$_REQUEST['student_class'];
$student_name=$_REQUEST['student_name'];
$student_status=$_REQUEST['student_status'];

$query="INSERT INTO `tblattendance`(`student_id`, `student_class`, `student_name`, `student_status`) 
VALUES ('$student_id','$student_class','$student_name','$student_status')";

$runQuery=mysqli_query($connect,$query);

if($runQuery){
    header("location:attendance.php");
}else{
    echo "something went wrong";
}


?>
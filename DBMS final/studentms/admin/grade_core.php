<?php
require_once('config.php');

$student_id=$_REQUEST['student_id'];
$student_class=$_REQUEST['student_class'];
$student_name=$_REQUEST['student_name'];
$student_grade=$_REQUEST['student_grade'];

$query="INSERT INTO `grade`(`student_id`, `student_class`, `student_name`, `student_grade`) 
VALUES ('$student_id','$student_class','$student_name','$student_grade')";

$runQuery=mysqli_query($connect,$query);

if($runQuery){
    header("location:gread.php");
}else{
    echo "something went wrong";
}


?>
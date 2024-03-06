<?php

$connect=mysqli_connect('localhost','root','','studentmsdb');

if($connect==false){
    echo 'Database Connection Not Established';
}

?>
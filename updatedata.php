<?php

require("connect.php");

$id = $_POST['id'];
$stu_id = $_POST["stu_id"];
$stu_name = $_POST["stu_name"];
$stu_email = $_POST["stu_email"];
$stu_tel = $_POST["stu_tel"];
$stu_date = $_POST["stu_date"];

$sql = "UPDATE data_student SET 
    stu_id='$stu_id',
    stu_name='$stu_name',
    stu_email='$stu_email',
    stu_tel='$stu_tel',
    stu_date='$stu_date'
   WHERE id=$id ";
    
$result = mysqli_query($con, $sql);

if ($result) {
    header("location:index.php");
    exit(0);
} else {
    echo "ไม่สามารถแก้ไขข้อมูลได้" . mysqli_error($con);
}

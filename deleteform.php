<?php 
require("connect.php");

$id= $_GET["id"];
$sql = "DELETE FROM data_student WHERE id=$id";

$result = mysqli_query($con,$sql);
if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "ไม่สามารถลบข้อมูลได้";
}

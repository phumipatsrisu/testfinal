<?php
    require("connect.php");
    $id = $_GET["id"];

    $sql = "SELECT * FROM data_student WHERE id=$id ";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    // if($result){
    //     echo"1111";
    // }else{
    //    echo mysqli_error($con);
    // }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>แก้ไขข้อมูล</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">แก้ไขข้อมูล</h1>
        <hr>
        <form action="updatedata.php" method="POST">
            <input type="hidden" name="id"  id="" value="<?php echo $row["id"]; ?>">
            <label for="stu_id">รหัสนักเรียน :</label>
            <input class="form-control" type="number" name="stu_id" id="stu_id" value="<?php echo $row["stu_id"]  ?>" required>

            <label for="stu_id">ชื่อ-นามสกุล:</label>
            <input class="form-control" type="text" name="stu_name" id=""value="<?php echo $row["stu_name"]  ?>"  required>

            <label for="stu_id">อีเมลล์:</label>
            <input class="form-control" type="email" name="stu_email" id=""value="<?php echo $row["stu_email"]  ?>"  required>

            <label for="stu_id">หมายเลขโทรศัพท์ :</label>
            <input class="form-control" type="number" name="stu_tel" id="" value="<?php echo $row["stu_tel"]  ?>" required>

            <label for="stu_id">วันที่ลงทะเบียน :</label>
            <input class="form-control" type="date" name="stu_date" id=""value="<?php echo $row["stu_date"]  ?>"   required> <br>

            <input type="submit" name="" id="" value="แก้ไขข้อมูล" class="btn btn-success">
            <a class="btn btn-info" href='index.php'>กลับสู่หน้าหลัก</a>
             
            
        </form>
    </div>
</body>
</html>
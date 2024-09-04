<?php
    require("connect.php");
    $edit_id = $_GET["edit_id"];

    $sql = "SELECT * FROM data_student WHERE edit_id=$edit_id ";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ลงทะเบียน</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">แก้ไขข้อมูล</h1>
        <hr>
        <form action="updatedata.php" method="POST">
            <input type="hidden" value="<?php echo "$row[id]"; ?>" name="edit_id" id=""> //ซ้อนข้อมูลเมื่อกด

            <label for="stu_id">รหัสนักเรียน :</label>
            <input class="form-control" type="number" name="stu_id" id="" required>

            <label for="stu_id">ชื่อ-นามสกุล:</label>
            <input class="form-control" type="text" name="stu_name" id=""  required>

            <label for="stu_id">อีเมลล์:</label>
            <input class="form-control" type="email" name="stu_email" id=""  required>

            <label for="stu_id">หมายเลขโทรศัพท์ :</label>
            <input class="form-control" type="number" name="stu_tel" id=""  required>

            <label for="stu_id">วันที่ลงทะเบียน :</label>
            <input class="form-control" type="date" name="stu_date" id=""  required> <br>
            <input type="submit" name="" id="" class="btn btn-success" value="บันทึก">
        </form>
    </div>
</body>
</html>
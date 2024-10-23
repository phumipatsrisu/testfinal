<?php
    require("connect.php");
    $stu_search = $_POST['stu_search'];

    $sql = "SELECT *  FROM data_student where stu_name LIKE '%$stu_search%' OR stu_id LIKE '%$stu_search%' ORDER BY stu_id ASC";
    $result = mysqli_query($con,$sql);

    $count = mysqli_num_rows($result);
    $order = 1;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ข้อมูลของนักเรียน</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">ระบบลงทะเบียน</h1>
        <form action="searchdata.php" class="form-group my-3" method="post">
            <div class="row">
                <div class="col-6">
                    <input type="text" name="stu_search" id="" placeholder="ค้นหาข้อมูลนักเรียน" class="form-control" required>
                </div>
                <div class="col-6">
                    <input  class="btn btn-info" type="submit" name="" id="" value="ค้นหาข้อมูลนักเรียน">
                </div>
            </div>
        </form>
        <hr>
        <?php  if($count > 0) {?>
        <table class="table">
            <thead class="table-dark">  
                <tr>
                    <th>ลำดับ</th>
                    <th>รหัสนักเรียน</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>อีเมลล์</th>
                    <th>หมายเลขโทรศัพท์</th>
                    <th>วันที่ลงทะเบียน</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td><?php echo $order++; ?></td>
                        <td><?php echo "$row[id]"?></td>
                        <td><?php echo "$row[stu_id]"?></td>
                        <td><?php echo "$row[stu_name]" ?></td>
                        <td><?php echo "$row[stu_email]"?></td>
                        <td><?php echo "$row[stu_tel]" ?></td>
                        <td><?php echo "$row[stu_date]" ?></td>
                        <td><a class="btn btn-primary" href="editdataform.php?id=<?php echo"$row[id]" ?>">แก้ไข</a></td>
                        <td><a class="btn btn-danger" href="deleteform.php?id=<?php echo "$row[id]" ?>">ลบ</a></td>
                    </tr>
                    <?php } ?>
            </tbody>         
        </table>
        <?php }else{ ?>
            <div class="alert alert-danger">
                <b>ไม่พบข้อมูลที่ค้นหา</b>
            </div>
            <?php  } ?>
        <a class="btn btn-warning" href="register.php">เพิ่มข้อมูล</a>
    </div>
</body>

</html>

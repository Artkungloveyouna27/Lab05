<?php
require('dbconnect.php');
$sql = "SELECT * FROM employee"; //เลือกข้อมูลจากตาราง employee ออกมาแสดง
$result = mysqli_query($con, $sql); //รันคำสั่งที่ถูกเก็บไว้ในตัวแปร $sql

$count = mysqli_num_rows($result); //เก็บผลที่ได้จากคำสั่ง $result เก็บไว้ในตัวแปร $count
$order = 1; //ให้เริ่มนับแถวจากเลข 1
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>รายชื่อพนักงานทั้งหมด</title>

  <!-- Custom CSS for Pirate Theme -->
  <style>
    /* ทำให้ body และ html ครอบคลุมเต็มหน้าจอ */
    html, body {
      height: 100%;
      margin: 0;
    }

    /* พื้นหลังภาพโจรสลัด */
    body {
      background-image: url('https://images6.alphacoders.com/695/thumb-1920-695391.jpg');
      background-size: cover;  /* ทำให้ภาพพื้นหลังเต็มหน้าจอ */
      background-position: center;
      font-family: 'Garamond', serif;
      color: #3e2723;
    }

    h1 {
      color: #f4a261;
      font-family: 'Georgia', serif;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }

    .btn-info {
      background-color: #2c3e50;
      border-color: #34495e;
    }

    .btn-info:hover {
      background-color: #34495e;
      border-color: #2c3e50;
    }

    .table-dark {
      background-color: rgba(0, 0, 0, 0.7); /* พื้นหลังตารางมืด */
    }

    .table-dark th, .table-dark td {
      color: #f1c40f;
    }

    .container {
      border: 5px solid #8e44ad;
      padding: 20px;
      border-radius: 10px;
      background-color: rgba(255, 255, 255, 0.8);
      max-width: 100%;
      margin: 20px auto;
    }

    .table-bordered {
      border: 2px solid #8e44ad;
    }

    .table-bordered td, .table-bordered th {
      border-color: #8e44ad;
    }

    .navbar {
      background-color: #2c3e50;
      color: #fff;
    }

    .navbar a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    .navbar a:hover {
      color: #f4a261;
    }
  </style>

</head>

<body>
  <div class="container">
    <?php
    require("nav.php"); // Include your navbar
    ?>
    <h1 class="text-center mt-3">รายชื่อพนักงานทั้งหมด</h1>
    <form action="searchdata.php" class="form-group my-3" method="POST">
      <div class="row">
        <div class="col-6">
          <input type="text" placeholder="กรอกชื่อหรือนามสกุลที่ต้องการค้น" class="form-control" name="emp_data" required>
        </div>
        <div class="col-6">
          <input type="submit" value="ค้นหาข้อมูลพนักงาน" class="btn btn-info">
        </div>
      </div>
    </form>
    <table class="table table-bordered">
      <thead class="table-dark">
        <tr>
          <th>#</th>
          <th>คำนำหน้า</th>
          <th>ชื่อ</th>
          <th>สกุล</th>
          <th>วันเกิด</th>
          <th>ที่อยู่ปัจจุบัน</th>
          <th>ทักษะความสามารถ</th>
          <th>เบอร์โทรศัพท์</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
              <td><?php echo $order++; ?></td>
              <td><?php echo $row["emp_title"]; ?></td>
              <td><?php echo $row["emp_name"]; ?></td>
              <td><?php echo $row["emp_surname"]; ?></td>
              <td><?php echo $row["emp_birthday"]; ?></td>
              <td><?php echo $row["emp_adr"]; ?></td>
              <td><?php echo $row["emp_skill"]; ?></td>
              <td><?php echo $row["emp_tel"]; ?></td>
            </tr>
        <?php
          }
        } else {
          echo "<tr><td colspan='8' class='text-center'>ไม่พบข้อมูลพนักงาน</td></tr>";
        }
        ?>
      </tbody>
    </table>

    <a href="insertform.php" class="btn btn-success">กรอกข้อมูลพนักงาน</a>

  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>

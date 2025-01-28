<?php
require('dbconnect.php');

$emp_id = $_GET["emp_id"];

$sql = "SELECT * FROM employee WHERE emp_id=$emp_id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <style>
    /* กำหนดพื้นหลังเป็นธีมโจรสลัด */
    body {
      background-image: url('https://s7g10.scene7.com/is/image/barcelo/famous-pirates_historical-pirates?&&fmt=webp-alpha&qlt=75&wid=1300&fit=crop,1'); /* รูปพื้นหลังไม้ */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      height: 100vh;
      margin: 0;
    }

    /* สไตล์ฟอร์มแก้ไขข้อมูล */
    .form-edit {
      width: 100%;
      max-width: 700px;
      padding: 30px;
      margin: auto;
      background-color: rgba(0, 0, 0, 0.7); /* พื้นหลังสีดำโปร่งแสง */
      color: #f4a261; /* สีทอง */
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
    }

    h2 {
      color: #f4a261; /* สีทอง */
      font-family: 'Georgia', serif;
      text-align: center;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }

    /* ฟอร์มอินพุต */
    .form-control {
      background-color: rgba(255, 255, 255, 0.8);
      color: #3e2723; /* สีของตัวอักษร */
      border-radius: 10px;
    }

    /* ปุ่ม */
    .btn {
      width: 100%;
      font-weight: bold;
      padding: 12px;
      border-radius: 10px;
    }

    .btn-success {
      background-color: #27ae60; /* สีเขียวเข้ม */
      border: none;
    }

    .btn-danger {
      background-color: #e74c3c; /* สีแดง */
      border: none;
    }

    .btn-primary {
      background-color: #2980b9; /* สีน้ำเงิน */
      border: none;
    }

    .btn:hover {
      opacity: 0.9;
    }

    .text-center a {
      color: #f4a261; /* สีทอง */
      text-decoration: none;
      font-weight: bold;
    }

    .text-center a:hover {
      color: #d35400; /* สีส้ม */
    }
  </style>
  <title>แก้ไขข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container">
    <div class="form-edit">
      <h2><i class='bx bxs-user-pin'></i> แก้ไขข้อมูลพนักงาน</h2>
      <hr>
      <form action="updatedata.php" method="POST">
        <input type="hidden" value="<?php echo $row["emp_id"]; ?>" name="emp_id">
        
        <div class="form-group">
          <label for="emp_title">คำนำหน้า :</label>
          <select name="emp_title" class="form-control" required>
            <option value="นาย" <?php if ($row["emp_title"] == "นาย") { echo "SELECTED"; } ?>>นาย</option>
            <option value="นาง" <?php if ($row["emp_title"] == "นาง") { echo "SELECTED"; } ?>>นาง</option>
            <option value="นางสาว" <?php if ($row["emp_title"] == "นางสาว") { echo "SELECTED"; } ?>>นางสาว</option>
          </select>
        </div>

        <div class="form-group">
          <label for="emp_name">ชื่อ :</label>
          <input type="text" name="emp_name" class="form-control" value="<?php echo $row["emp_name"]; ?>" required>
        </div>

        <div class="form-group">
          <label for="emp_surname">นามสกุล :</label>
          <input type="text" name="emp_surname" class="form-control" value="<?php echo $row["emp_surname"]; ?>" required>
        </div>

        <div class="form-group">
          <label for="emp_birthday">วันเดือนปีเกิด :</label>
          <input type="date" name="emp_birthday" class="form-control" value="<?php echo $row["emp_birthday"]; ?>" required>
        </div>

        <div class="form-group">
          <label for="emp_adr">ที่อยู่ปัจจุบัน :</label>
          <textarea name="emp_adr" class="form-control" required><?php echo $row["emp_adr"]; ?></textarea>
        </div>

        <div class="form-group">
          <label for="emp_skill">ทักษะความสามารถ :</label>
          <textarea name="emp_skill" class="form-control" required><?php echo $row["emp_skill"]; ?></textarea>
        </div>

        <div class="form-group">
          <label for="emp_tel">เบอร์โทรศัพท์ :</label>
          <input type="tel" name="emp_tel" class="form-control" value="<?php echo $row["emp_tel"]; ?>" required>
        </div>

        <div class="my-3">
          <input type="submit" value="แก้ไขข้อมูล" class="btn btn-success">
          <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
          <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>

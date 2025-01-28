<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  
  <!-- Boxicons for Icons -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  
  <style>
    /* Background for pirate theme */
    body {
      background-image: url('https://images3.alphacoders.com/177/thumb-1920-177189.jpg');
      background-size: cover;  /* ทำให้ภาพพื้นหลังเต็มหน้าจอ */
      background-position: center;
      font-family: 'Garamond', serif;
      color: #3e2723;
    }

    .form-signin {
      width: 100%;
      max-width: 600px;
      padding: 30px;
      margin: auto;
      background-color: rgba(0, 0, 0, 0.7); /* Dark background for form */
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    h2 {
      font-family: 'Georgia', serif;
      font-size: 2.5rem;
      color: #f4a261; /* Gold color */
      text-align: center;
      text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
    }

    .form-group label {
      font-size: 1.2rem;
      color: #f4a261; /* Gold color */
    }

    .form-control {
      background-color: rgba(255, 255, 255, 0.8); /* Light background for inputs */
      color: #3e2723; /* Dark brown color */
      border-radius: 10px;
      border: 2px solid #f4a261; /* Gold border */
    }

    /* Buttons */
    .btn {
      width: 100%;
      font-weight: bold;
      padding: 12px;
      border-radius: 10px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .btn-success {
      background-color: #27ae60; /* Dark green for "Save" button */
      border: none;
    }

    .btn-danger {
      background-color: #e74c3c; /* Red for "Reset" button */
      border: none;
    }

    .btn-primary {
      background-color: #2980b9; /* Blue for "Back to Home" button */
      border: none;
    }

    .btn:hover {
      opacity: 0.9;
    }

    .my-3 a {
      color: #f4a261;
      text-decoration: none;
      font-weight: bold;
    }

    .my-3 a:hover {
      color: #d35400; /* Orange on hover */
    }

    /* Icons */
    .form-group i {
      color: #f4a261;
      margin-right: 8px;
    }

  </style>
  
  <title>บันทึกข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container">
    <h2><i class='bx bxs-user-pin'></i> บันทึกข้อมูลพนักงาน</h2>
    <hr>
    <form action="insertdata.php" method="POST" class="form-signin">
      <div class="form-group">
        <label for="emp_title"><i class='bx bxs-user'></i> คำนำหน้า :</label>
        <select name="emp_title" class="form-control" required>
          <option value="นาย">นาย</option>
          <option value="นาง">นาง</option>
          <option value="นางสาว">นางสาว</option>
        </select>
      </div>
      <div class="form-group">
        <label for="emp_name"><i class='bx bxs-id-card'></i> ชื่อ :</label>
        <input type="text" name="emp_name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_surname"><i class='bx bxs-id-card'></i> นามสกุล :</label>
        <input type="text" name="emp_surname" class="form-control">
      </div>
      <div class="form-group">
        <label for="emp_birthday"><i class='bx bx-calendar'></i> วันเดือนปีเกิด :</label>
        <input type="date" name="emp_birthday" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_adr"><i class='bx bx-map'></i> ที่อยู่ :</label>
        <textarea name="emp_adr" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="emp_skill"><i class='bx bx-briefcase'></i> ทักษะพิเศษ :</label>
        <textarea name="emp_skill" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label for="emp_tel"><i class='bx bx-phone'></i> เบอร์โทรศัพท์ :</label>
        <input type="tel" name="emp_tel" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_user"><i class='bx bxs-user'></i> ชื่อเข้าระบบ :</label>
        <input type="text" name="emp_user" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_pass"><i class='bx bxs-lock'></i> รหัสผ่าน :</label>
        <input type="password" name="emp_pass" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="emp_level"><i class='bx bxs-crown'></i> ระดับผู้ใช้งาน :</label>
        <select name="emp_level" class="form-control" required>
          <option value="">--เลือกระดับผู้ใช้งาน--</option>
          <option value="a">ผู้ดูแลระบบ</option>
          <option value="u">ผู้ใช้งาน</option>
        </select>
      </div>
      <div class="my-3">
        <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
        <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
        <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
      </div>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>

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
      background-image: url('https://wallpapers.com/images/hd/pirates-of-the-caribbean-3840-x-2160-background-ssjusdurk90vu6gy.jpg'); /* รูปพื้นหลังไม้ */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      height: 100vh;
      margin: 0;
    }

    /* สไตล์ฟอร์มล็อกอิน */
    .form-login {
      width: 100%;
      max-width: 600px;
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

    /* ปรับไอคอน */
    h2 i {
      font-size: 30px;
      margin-right: 10px;
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

    .btn-warning {
      background-color: #e67e22; /* สีส้ม */
      border: none;
    }

    .btn-info {
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
  <title>เข้าสู่ระบบจัดการข้อมูลพนักงาน</title>
</head>

<body>
  <div class="container">
    <div class="form-login">
      <h2><i class='bx bxs-user-pin'></i> เข้าสู่ระบบจัดการข้อมูลพนักงาน</h2>
      <form method="POST" action="chk.php">
        <div class="mb-3">
          <label for="username" class="form-label text-light">ชื่อเข้าระบบ</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label text-light">รหัสผ่าน</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-success">เข้าสู่ระบบ</button>
        <button type="reset" class="btn btn-warning">ล้างข้อมูล</button>
      </form>
      <div class="text-center mt-3">
        <a href="index.php" class="btn btn-info">กลับหน้าหลัก</a>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

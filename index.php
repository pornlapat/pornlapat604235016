<?php
if(isset($_POST['submit'])){
  require_once 'db.php'; 
  $empno = $_POST['empno'];
  $ename = $_POST['ename'];
  $username = $_POST['username'];
  $password = MD5($_POST['password']);
  $sql = "INSERT INTO emp (EMPNO, ENAME, USERNAME, PASSWORD) 
  VALUES (?,?,?,?)";
  $statement = $connection->prepare($sql);
  if ($statement->execute([$empno, $ename, $username, $password]));
  echo 'ลงทะเบียนเสร็จเรียบร้อย';
}
?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
  <center> <h1> Create new account </h1>
<form name="register" action="" method="post">
<div>
  <input type="text"class="alert alert-primary" role="alert" name="empno" placeholder="รหัสพนักงาน" required>
</div>
<br>
<div>
  <input type="text" class="alert alert-primary" role="alert" name="ename" placeholder="ชื่อ" required>
</div>
<div>
<br>
  <input type="text" class="alert alert-primary" role="alert" name="username" placeholder="อีเมลล์" required>
</div>
<div>
<br>
  <input type="password" class="alert alert-primary" role="alert" name="password" placeholder="รหัสผ่าน" required>
</div>
<div>
<br>
  <input type="submit"class="btn btn-info" role="alert" name="submit" value="สมัคร">
 
</div>
 </form></center>
<?php require 'footer.php'; ?>
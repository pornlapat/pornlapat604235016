<?php
require 'db.php';
$EMPNO = $_GET['EMPNO'];
$sql = 'SELECT * FROM emp WHERE EMPNO = :EMPNO';
$statement = $connection->prepare($sql);
$statement->execute([':EMPNO' => $EMPNO ]);
$emp = $statement->fetch(PDO::FETCH_OBJ);

if (isset($_POST['EMPNO']) && isset($_POST['ENAME']) && isset($_POST['JOB']) 
&& isset($_POST['MGR']) && isset($_POST['HIREDATE']) 
&& isset($_POST['SAL']) && isset($_POST['COMM']) && isset($_POST['DEPTNO']) ) {  
  $EMPNO = $_POST['EMPNO'];
  $ENAME = $_POST['ENAME'];
  $JOB = $_POST['JOB'];
  $MGR = $_POST['MGR'];
  $HIREDATE = $_POST['HIREDATE'];
  $SAL = $_POST['SAL'];
  $COMM = $_POST['COMM'];
  $DEPTNO = $_POST['DEPTNO'];
  $sql = 'UPDATE emp SET ENAME=:ENAME, JOB=:JOB, MGR=:MGR, HIREDATE=:HIREDATE, SAL=:SAL, COMM=:COMM, DEPTNO=:DEPTNO WHERE EMPNO=:EMPNO';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':EMPNO' => $EMPNO,':ENAME' => $ENAME, ':JOB' => $JOB, ':MGR' => $MGR, ':HIREDATE' => $HIREDATE, ':SAL' => $SAL, ':COMM' => $COMM, ':DEPTNO' => $DEPTNO])) {
    header("Location: index.php");
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
    </div>
        <div class="form-group">
          <label for="EMPNO">รหัสพนักงาน</label>
          <input value="<?= $emp->EMPNO; ?>" type="text" name="EMPNO" id="EMPNO" class="form-control">
        </div>
        <div class="form-group">
          <label for="ENAME">ชื่อ-นามสกุล</label>
          <input value="<?= $emp->ENAME; ?>" type="text" name="ENAME" id="ENAME" class="form-control">
        </div>
        <div class="form-group">
          <label for="JOB">ตำแหน่ง</label>
          <input value="<?= $emp->JOB; ?>" type="text" name="JOB" id="JOB" class="form-control">
        </div>
        <div class="form-group">
          <label for="MGR">ผู้จัดการ</label>
          <select name="MGR" class="form-control">
          <?php  
            $sql = "SELECT GRADE, LOSAL FROM salgrade" ;
            $statement = $connection->prepare($sql);
            $statement->execute();
            $salgrade = $statement->fetchAll(PDO::FETCH_OBJ);
            foreach($salgrade as $salgrade):
          ?>
            <option value ="<?=$salgrade->GRADE?>"><?=$salgrade->LOSAL?> </option>
            
          <?php endforeach;?>
          </select>
        </div>        
        <div class="form-group">
          <label for="HIREDATE">วันที่เข้าทำงาน</label>
          <input value="<?= $emp->HIREDATE; ?>" type="date" name="HIREDATE" id="HIREDATE" class="form-control">
        </div>
        <div class="form-group">
          <label for="SAL">เงินเดือน</label>
          <input value="<?= $emp->SAL; ?>" type="number" name="SAL" id="SAL" class="form-control">
        </div>
          <div class="form-group">
          <label for="COMM">ค่าคอมมิชชั่น</label>
          <input value="<?= $emp->COMM; ?>" type="number" name="COMM" id="COMM" class="form-control">
        </div>
        <div class="form-group">
          <label for="DEPTNO">แผนก</label>
          <select name="DEPTNO" class="form-control">
          <?php  
            $sql = "SELECT DEPTNO, DNAME FROM dept" ;
            $statement = $connection->prepare($sql);
            $statement->execute();
            $dept = $statement->fetchAll(PDO::FETCH_OBJ);
            foreach($dept as $dept):
          ?>
            <option value ="<?=$dept->DEPTNO?>"><?=$dept->DNAME?> </option>
            
          <?php endforeach;?>
          </select>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">บันทึกการแก้ไข</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
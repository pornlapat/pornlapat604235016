<?php
require 'db.php';
$EMPNO = $_GET['EMPNO'];
$sql = 'DELETE FROM emp WHERE EMPNO=:EMPNO';
$statement = $connection->prepare($sql);
if ($statement->execute([':EMPNO' => $EMPNO])) {
  header("Location: /crud/");
}
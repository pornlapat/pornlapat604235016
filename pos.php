<?php
//1. start session
session_start();
$empno=  $_SESSION['empno'];
//2. connect database
require_once 'db.php';
//3. query string
$sql = "SELECT * FROM emp WHERE EMPNO = ?";
$statement = $connection->prepare($sql);
$statement->execute([$empno]);
$emp = $statement->fetch(PDO::FETCH_OBJ);
$ename = $emp->ENAME;
echo $ename;
?>

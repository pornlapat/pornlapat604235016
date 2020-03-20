<?php

require_once 'db.php';

$username =$_POST['username'];
$password = MD5($_POST['password']);

$sql = "SELECT EMPNO, USERNAME, PASSWORD, ROLE FROM emp
WHERE USERNAME = ? AND PASSWORD = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);
$emp = $statement->fetch(PDO::FETCH_OBJ);

session_start();
$_SESSION['empno'] = $emp->EMPNO;

echo $emp->USERNAME;
if($emp){
    if($emp->ROLE=='admin'){
        header ("Location:display_emp.php");
    }elseif($emp->ROLE=='sale'){
        header ("Location:pos.php");
    }
}else{
    header ("Location:index.php");
}
?>
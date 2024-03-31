<?php
$dsn = 'mysql:dbname=php_db;host=mysql;charset';
$user = 'root';
$password = 'password';

if(isset($_GET['id'])){
  try {
    $pdo = new PDO($dsn, $user, $password);

    $sql = 'DELETE FROM users WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();

    header('Location: users.php');
  } catch(PDOException $e){
    exit($e->getMessage());
  }
} else {
  exit('idパラメータの値が存在しません。');
}
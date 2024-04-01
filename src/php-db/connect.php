<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP+DB</title>
</head>
<body>
  <p>
    <?php
    $dsn = 'mysql:dbname=php_db;host=mysql;charset=utf8mb4';
    $user = 'root';
    $password = 'password';

    try {
      $pdo = new PDO($dsn, $user, $password);
      echo '接続に成功しました。';
    } catch(PDOException $e) {
      exit('データベースに接続できませんでした。' . $e->getMessage());
    }
    ?>
  </p>
</body>
</html>
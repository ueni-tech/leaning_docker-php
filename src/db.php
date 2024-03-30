<?php
$host = 'mysql';
$dbname = $_ENV['MYSQL_DATABASE'];
$username = 'root';
$password = $_ENV['MYSQL_ROOT_PASSWORD'];

$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$stmt = $db->prepare("SELECT * FROM mytable");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $result){
    echo $result['id'] . ' . ' . $result['name'] . PHP_EOL;
}
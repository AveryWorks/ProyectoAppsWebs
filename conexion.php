<?php
$host = 'bl5kioqvakcwe5ondzsl-mysql.services.clever-cloud.com';
$db   = 'bl5kioqvakcwe5ondzsl';
$user = 'uxedxshandegzmdk';
$pass = 'ZaEy1j1xwsmA4Im2Q3gx';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>

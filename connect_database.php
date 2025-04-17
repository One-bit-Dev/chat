<?php
$host = 'dpg-d00gpj2dbo4c73923hag-a';      // exemplo: dpg-xxxxxx.render.internal
$db   = 'dbchat_bl2u';
$user = 'garrafa';
$pass = 'nLAJnGx6kpzN6d098mwyzWQHrAf0gFHY';
$port = '5432';

$dsn = "pgsql:host=$host;port=$port;dbname=$db;";
try {
    $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

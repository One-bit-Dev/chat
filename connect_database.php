<?php
$host = 'dpg-d00gpj2dbo4c73923hag-a';      // exemplo: dpg-xxxxxx.render.internal
$dbname = 'dbchat_bl2u';
$user = 'garrafa';
$password = 'nLAJnGx6kpzN6d098mwyzWQHrAf0gFHY';
$port = '5432';

$conn_string = "host=$host dbname=$dbname user=$user password=$password port=$port";

$conn = connect_database($conn_string);

if (!$conn) {
    die("Erro ao conectar ao banco de dados.");
}
?>

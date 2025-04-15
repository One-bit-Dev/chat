<?php

// Configurações do banco
$host = "localhost";
$dbname = "seu_banco";
$user = "root";
$pass = "";

// Conectar ao PostgreSQL
try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Capturar os dados do formulário
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $chooseColor = $_POST["chooseColor"] ?? "";
        $dateTime = $_POST["dateTime"] ?? "";
        $date = $_POST["nome"] ?? "";
        $time = $_POST["nome"] ?? "";
        $email = $_POST["email"] ?? "";

        // Inserir no banco de dados
        $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":nome" => $nome,
            ":email" => $email
        ]);

        echo "Cadastro realizado com sucesso!";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

?>
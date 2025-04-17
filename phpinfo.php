<?php
include 'connect_database.php';


// Criar tabela (caso não exista)
pg_query($conn, "CREATE TABLE IF NOT EXISTS usuarios (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100)
);");

// Inserir um dado de teste
pg_query($conn, "INSERT INTO usuarios (nome, email) VALUES ('Usuário Teste', 'teste@email.com');");

// Buscar e exibir todos os usuários
$result = pg_query($conn, "SELECT * FROM usuarios;");
while ($row = pg_fetch_assoc($result)) {
    echo "ID: {$row['id']} | Nome: {$row['nome']} | Email: {$row['email']}<br>";
}

// Fechar conexão
pg_close($conn);
?>

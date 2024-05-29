<!-- <h1>Oi 2.0</h1> -->
<h1>Lista de Usuários</h1>
<?php

// echo "Docker é massa!";
// echo 1 + 3

$pdo = new PDO("mysql:dbname=meudb;host=db", 'admin', 'root');


$sql = $pdo->query("SELECT * FROM TABELA");

if ($sql->rowCount() > 0) {
    $usuarios = $sql->fetchAll();
    echo "<ul>";
    foreach ($usuarios as $usuario) {
        echo "<li>" . $usuario['nome'] . "</li>";
    }

    echo "</ul>";
} else {
    echo "Não há usuários cadastrados!";
}
?>
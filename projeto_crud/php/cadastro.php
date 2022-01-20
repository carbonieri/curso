<!-- MYSQLi è mais rapido pois trabalha somente com sql
PDO trabalha com varios banco de dados e por isso è mais lento.
MVC junta os dois acima -->

<?php
require 'connect.php';

$nome = ($_GET['nome']);
$telefone = ($_GET['telefone']);
$email = ($_GET['email']);

$sql = "INSERT INTO USUARIO (nome, email, telefone) values ('$nome', '$email', '$telefone')"; /* aspas duplas na query psrs envio de variaveis que requer aspas simples*/

if($conn->query($sql) == true){
    echo ' dados inseridos com sucesso';
}else{
    echo "erro ao inserir o dado $conn->error";
}
?>
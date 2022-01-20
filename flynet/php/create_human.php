<!-- MYSQLi è mais rapido pois trabalha somente com sql
PDO trabalha com varios banco de dados e por isso è mais lento.
MVC junta os dois acima -->

<?php
require 'connect.php';

$name = ($_GET['name']);
$surname = ($_GET['surname']);
$login = ($_GET['login']);
$password = ($_GET['password']);
$signature = ($_GET['signature']);
$birthdate = ($_GET['birthdate']);
$level = ($_GET['level']);
$status = ($_GET['status']);

$sql = "INSERT INTO human (name_hum, surname_hum, login_hum, password_hum, signature_hum, birthdate_hum, level_hum, status_hum )
 values ('$name', '$surname', '$login', '$password', '$signature', '$birthdate', '$level', '$status')"; /* aspas duplas na query psrs envio de variaveis que requer aspas simples*/

if($conn->query($sql) == true){
    echo ' dados inseridos com sucesso';
}else{
    echo "erro ao inserir o dado $conn->error";
}
?>
<?php /* se na pagina tiver so php nao precisa fechar */

$conn = new mysqli('localhost', 'root', '', 'flynet');

if($conn->connect_error){
    die("Falha ao conectar $conn->connect_error"); /* aspas duplas te deixa colocar uma variavel dentro de um comentario evitando inserir o " . "*/
}
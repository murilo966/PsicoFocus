<?php 
include "conexão.php";

$email= $_POST ['email'];
$nome = $_POST ['nome'];
$senha = $_POST ['senha'];

$sql = "INSERT INTO `usuarios` (id, email, nome, senha) VALUES (NULL, '$email','$nome','$senha')";

mysqli_query($conn, $sql);

?>
     <div class="pika">
        <li><a href="index.html">volte para o menu</a></li>
        </div>




<?php 
include "conexão.php";

$email= $_POST ['email'];
$nome = $_POST ['nome'];
$senha = $_POST ['senha'];

$sql = "INSERT INTO `usuarios` (id, email, nome, senha) VALUES (NULL, '$email','$nome','$senha')";

mysqli_query($conn, $sql);

echo "<meta http-equiv='refresh' content='0; url=../home'>";

?>




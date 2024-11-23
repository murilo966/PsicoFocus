<?php
// Conexão com o banco de dados (substitua pelos seus dados)
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "cadastro";

// Cria a conexão
if ( $conn = mysqli_connect($servername, $user, $password, $dbname)) {
    echo "<meta http-equiv='refresh' content='0; url=../home'>";
}
else
echo "erro";

?>
<?php
// Conexão com o banco de dados (substitua pelos seus dados)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Validação básica dos dados (adicione mais validações conforme necessário)
    if ($senha !== $confirmar_senha) {
        echo "As senhas não coincidem.";
    } else {
        // Hash da senha para segurança (recomendado usar um algoritmo mais forte como bcrypt)
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        // Insere os dados no banco de dados
        $sql = "INSERT INTO usuarios VALUES ('$email', '$nome', '$sobrenome', '$senha_hash')";

        if ($conn->query($sql) === TRUE) {
            echo "Novo usuário criado com sucesso!";
        } else {
            echo "Erro ao criar usuário: " . $conn->error;
        }
    }
}

// Fecha a conexão
$conn->close();
?>
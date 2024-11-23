<?php
include('conexão.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form de Registro com validações em JS</title>
  <link rel="stylesheet" href="cad.css">
</head>

<body>
  <div id="main-container">
    <h1>Cadastre-se </h1>
    <form action="cadastro_script.php" method="POST">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate required>
      </div>
      <div class="half-box spacing">
          <label for="name">Nome</label>
          <input type="text" name="nome" id="name" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16" required>
      </div>
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input type="password" name="senha" id="password" placeholder="Digite sua senha" data-password-validate data-required>
      </div>
    
      <div>
        <input type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="Termos.html">termos de uso</a></label>
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Registrar">
      </div>
      <div class="pika">
        <li><a href="../home/">volte para o menu</a></li>
        </div>
    </form>
  </div>
  <p class="error-validation template"></p>

  
</body>
</html>








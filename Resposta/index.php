

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href= "style.css">
		<title>Psico Focus</title>
		
	</head>
	<header>
		<nav>
			<div class="nav-container">
				
				<a href="../home/">
					<img id="logo"src="../imagens/PsicoFocus.png" alt="Psico"
					width="150px"
					height="100px"
					>
				</a>
				<ul>
			
					<li><a href="../sobre/"><input class="BtnCab" type="button" value="Sobre"></a></li>
					<li><a href="../contato/"><input class="BtnCab" type="button" value="Contato"></a></li>

				</ul>

			</div>
		</nav>
	</header>
	<body>
		<br><br><br><br><br><br><br><br><br>
		<div class="validator">
			<h1 style="color:rgb(115, 82, 143);">Achou algo oculto?</h1>
			<form id="formulario" action="" method="post">
				<textarea required class ="palpite" name="validator" placeholder="Insira sua resposta"></textarea>
				<input class="botao" type="submit" value="enviar">
			</form>
			<script>
				const form = document.getElementById('formulario');
				const textarea = form.querySelector('.palpite');
				form.querySelector('.palpite').addEventListener('keydown', function(event) {
					if (event.key == "Enter") {
						if (textarea.value.trim().length > 0) {
							form.submit();
						} else {
							alert("Por favor, insira uma resposta.");
						}
					}
				});
			</script>
			<?php 
				if ($_SERVER["REQUEST_METHOD"] === "POST") {
					$valor = strtoupper($_POST["validator"]);

					if ($valor == "SIGMUND FREUD") {
						echo "<p>[1/3] Parabéns, você resolveu o enigma fácil 🎉🎉  (+1 ponto)</p>";
					} elseif ($valor == "A PIOR SOLIDAO E NAO ESTAR CONFORTAVEL CONSIGO MESMO") {
						echo "<p>[2/3] Parabéns, você resolveu o enigma médio 🎉🎉  (+1 ponto)</p>";
					} elseif ($valor == "WILHELM WUNDT") {
						echo "<p>[3/3] Parabéns, você resolveu o enigma difícil 🎉🎉  (+1 ponto)</p>";
					} else {
						echo "<p>Será que você só está vendo coisas 🤔?</p>";
					}
				}
			?>
			
		</div>
		<br><br><br><br><br><br><br><br><br>
	</body>
	<div class="rodape">
		<footer>
			<div class="container">
				<p>&copy; 2024 PsicoFocus. Todos os direitos reservados.</p>
				<br>
				<nav>
					<ul>
						<li><a href="../sobre/">Sobre Nós</a></li>
						<li><a href="../contato/">Contato</a></li>
					</ul>
				</nav>
				<br>
				<p>Endereço: Rua Engenheiro Saint Martin, 10-12 - Centro, Bauru - SP</p>
			</div>
		</footer>
		
	</div>
	
	
</html>
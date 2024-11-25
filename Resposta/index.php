

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href= "index.css">
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
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="validator">
			<h1 style="color:rgb(115, 82, 143);">Achou algo oculto?</h1>
			<?php
				echo "<input type='text' name='validator' placeholder='Insira sua resposta' value=a>";
				if ($value == "a") {
					echo "certo";
				}
			?>
			
		</div>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
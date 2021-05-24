<html>
<head>
	<title>Informações</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	
</head>
<body>
	<?php
		include "includes/navegacao.php";
	?>
	<main>
	<h2>Contato:</h2>
	<p class="rd">
		Endereço: Avenida Dom Luiz Guanela, N°580<br>
		Cidade: Canela, Rio Grande do Sul<br>
		CEP: 95680-000<br>
		País: Brasil<br>
		Telefone para contato: +55 51 99947-8277</p>

		<hr>
	<h3>Você deseja enviar alguma mensagem?</h3>

	<form method="POST" action="cadastro.php">
		<textarea name="comentário"rows="10" cols="50" maxlength="1000" placeholder="Comente aqui!"></textarea><br>
		<button type="submit">Enviar</button>
		<input type="reset" name="reset">
	</form>

	<br>
	</main>
	<?php
		include "includes/rodape.php";
	?>	
</body>
</html>
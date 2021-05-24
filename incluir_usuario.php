<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
</head>
<body>
	<?php
	//para imprimir o valor das var na tela
	echo "Olá " .$_POST["name"]." (email: " .$_POST["emailcadastro"]."),";
	echo " sua senha é " . $_POST["senha"];
	$bd_local='localhost';
	$usuario='root';
	$senha='';
	$bd='bd_inf3at';
	$link = mysqli_connect($bd_local,$usuario,$senha,$bd);
	if (mysqli_connect_errno()) 
	{
		echo "erro de conexão:".mysqli_connect_error();
	}
	?>

</body>
</html>
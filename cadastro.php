<?php
session_start();
$link=mysqli_connect("localhost","root","","cadastro");

function VerificaUsuario($link,$Email,$Senha){

   $query = "select * 
             from usuarios
             where email LIKE '$Email' AND senha LIKE '$Senha'";

   $resultado = mysqli_query($link,$query);

   if(mysqli_num_rows($resultado) == 1){
   	setcookie("Logado",1,time()+60*10);
   	$_SESSION["Email"] = $Email;
   	return TRUE;
   }
   else {
   	return FALSE;
   }


}
	
function IncluirUsuario($link,$Nome,$Email,$Senha){
		$query = "insert into usuarios
		(id,email,senha,nome)
		values
		(NULL,'$Email','$Senha','$Nome')";
	    mysqli_query($link,$query);
}

if (!empty($_POST["Cadastrar"])){
	IncluirUsuario($link,$_POST["Nome"],$_POST["Email"],$_POST["Senha"]);
}

if(!empty($_POST["Logar"])){
	if(VerificaUsuario($link,$_POST["Email"],$_POST["Senha"])){
      header("Location:informacoes.php");
	}
}

?>
<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta charset="utf-8">
</head>
<body>
	<?php
		include "includes/navegacao.php";
	?>
	<main>
		<h2>Cadastro</h2>
		<p>Para inserir um comentário é necessário se cadastrar</p>
		<form name="cadastro" action=cadastro.php method="POST">
			Nome:<input type="text" name="Nome"><br>
			E-mail:<input type="email" name="Email"><br>
			Senha:<input type="password" name="Senha"><br>
			<input type="submit" name="Cadastrar">
			<input type="reset" name="Redefinir">
		</form>
		<hr>
			<h2>Login</h2>
			<form name="login" action=cadastro.php method="POST">
			E-mail:<input type="email" name="Email"><br>
			Senha:<input type="password" name="Senha"><br>
			<input type="submit" name="Logar">
			<input type="reset" name="Limpar">
		</form>
		<br>
	</main>
	<?php
		include "includes/rodape.php";
	?>	
</body>
</html>
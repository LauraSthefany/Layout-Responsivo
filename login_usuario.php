<?php
session_start();
$Cadastro = array(array("email" => "fabio3268@gmail.com","psw" => "12345"),
                  array("email" => "fulanodetal@gmail.com","psw" => "987205"),
 				  array("email" => "joaosilva@gmail.com","psw" => "asdasd"));
	/*if(empty($_POST['name'])|| empty($_POST['emailcadastro'])|| empty($_POST['senha'])){
	header('Location: cadastro.php');
	exit;
	}*/
	foreach ($Cadastro as $valor) {
	  
	  if($valor["email"] == $_POST["email"] && $valor["psw"] == $_POST["psw"])  {
	  	$_SESSION['email']=$_POST['email'];
	   setcookie("logado",1,time()+60*10);
	   break;
	  }	
	}
	
	
	
	/*if (empty($_COOKIE['logado'])||empty($_SESSION['email'])){
		header("location:cadastro.php");
	}*/
?>
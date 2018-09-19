<?php
	session_start();

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$valorEmprestimo = $_POST['valorEmprestimo'];
	$mensagem = $_POST['mensagem'];


	$_SESSION["nome"] = $nome;
	$_SESSION["email"] = $email;
	$_SESSION["telefone"] = $telefone;
	$_SESSION["valorEmprestimo"] = $valorEmprestimo;
	$_SESSION["mensagem"] = $mensagem;

	$ip = $_SERVER['REMOTE_ADDR'];


	$emaildestinatario = 'loopcredit@gmail.com';

	$subj = "Dados / IP: $ip - Empréstimo";

	$mensagemHTML = '
	<p>------------- |Chegou Empréstimo| ------------</p>

	<p><b>Nome:</b> '.$nome.'<br>
	<p><b>Email:</b> '.$email.'<br>
	<p><b>Telefone:</b> '.$telefone.'<br>
	<p><b>Valor do Empréstimo:</b> '.$valorEmprestimo.'<br>
	<p><b>Mensagem:</b> '.$mensagem.'<br>

	<p>----------------- |BY MK| ------------------</p>

	';

	$headers = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: loopcredit@gmail.com \r\n";
	$headers .= "Return-Path: loopcredit@gmail.com \r\n";
	$envio = mail("loopcredit@gmail.com", $subj, $mensagemHTML, $headers);

	if($envio){
		echo "<script>alert('Obrigado ! Em breve um de nossos especialistas irá entrar em contato !');location='../index.html';</script>";
	}else{ 
		echo "<script>alert('Desculpe, algo deu errado. Tente novamente !');location='../index.html';</script>";
	}

?>
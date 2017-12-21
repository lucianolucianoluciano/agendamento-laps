<?php
	$host = "mysql.lucianoautopecas.com"; //computador onde o servidor de banco de dados esta instalado
	$user = "lucianoautopec"; //seu usuario para acessar o banco
	$pass = "laps201"; //senha do usuario para acessar o banco
	$banco = "lucianoautopec"; //banco que deseja acessar

	$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
	mysql_select_db($banco);
?>
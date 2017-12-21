<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Listas de Entrada de Veiculos</title>
</head>
<body>
<?php
	$conexao = mysql_connect("mysql.lucianoautopecas.com", "lucianoautopec", "laps201") or die (mysql_error());
	$banco = mysql_select_db("lucianoautopec");
?>
<?php
$sql = "SELECT * FROM ficha";
$resultado = mysql_query($sql)
or die (mysql_error());

while ($linha=mysql_fetch_array($resultado)) {
        $id   = $linha["id"] ;
	$data = $linha["data"];
	$nome = $linha["nome"];
	
	echo "$data - <a href='lista_entrada.php?id=$id'>$nome</a><br>";
	}
?>
</body>
</html>
		
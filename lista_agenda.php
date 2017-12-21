<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Listas de Agendametos</title>
<style type="text/css">
	body {
		background: #000 url(../laps.jpg) no-repeat;	
	}
	a {
		font: 16px "Trebuchet MS", Arial, Helvetica, sans-serif;
		color: #fff;
		text-decoration: none ;
		text-transform: uppercase ;		
	}
	a:hover {
		color:#06C ;
		text-decoration: underline ;
	}
	.data {
		font:18px "Trebuchet MS", Arial, Helvetica, sans-serif ;
		color: #F00 ;
	}
</style>
</head>
<body>
<?php
require("conexao.php") ;
$sql = "SELECT * FROM agendamento ORDER BY id DESC LIMIT 20";
$resultado = mysql_query($sql)
or die (mysql_error());

while ($linha=mysql_fetch_array($resultado)) {
	$id = $linha["id"];
	$nome = $linha["nome"];
	$carroano = $linha["carroano"] ;
	$data = $linha["data"] ;
	$telefone = $linha["telefone"] ;
	$celular = $linha["celular"] ;
	$endereco = $linha["endereco"] ;
	$bairro = $linha["bairro"] ;
	$informacoes = $linha["informacoes"] ;	
    $explode = explode("-", $carroano);
    $a = array_reverse($explode);
    $carro = $a[1] ;
	$ano = $a[0] ;
	?>
        
		<table width="468" border="0" >
		  <tr>
		    <td width="133" class="data"><?php echo $data ; ?></td>
		    <td width="319"><?php echo "<a href='gera_ficha.php?nome=$nome&carro=$carro&ano=$ano&telefone=$telefone&celular=$celular&endereco=$endereco&bairro=$bairro&inf=$informacoes'>$nome</a>" ; ?></td>
	      </tr>
</table>
<?php } ?>
    
</body>
</html>
<!-- <a href='gera_ficha.php?nome=$nome&carro=$carro&ano=$ano&telefone=$telefone&celular=$celular&endereco=$endereco&bairro=$bairro&inf=$informacoes'>$nome</a> -->
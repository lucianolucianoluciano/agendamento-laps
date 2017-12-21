<?php require("conexao.php") ;
	if(isset($_POST['carro'])) {
		$defeitos = $_POST['defeitos'] ;
		$nome     = $_POST['nome'] ;	
		$carro    = $_POST['carro'] ;
		$ano      = $_POST['ano'] ;
		$tel      = $_POST['tel'] ;
		$cel      = $_POST['celular'] ;
		$end      = $_POST['endereco'] ;
		$bairro   = $_POST['bairro'] ;
		$data     = date("d/m/Y") ;
		$placa    = $_POST['placa'] ;
		$km       = $_POST['km'] ; 
		
		
		$sgl = "INSERT INTO ficha (nome, carro, ano, telefone, celular, endereco, bairro, defeitos, data, placa, km) values ('$nome', '$carro', '$ano', '$tel', '$cel', '$end', '$bairro', '$defeitos', '$data', '$placa', '$km')";	
		$con = mysql_query($sgl) ;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ficha de Entrada - <?php echo $nome ?></title>
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style2 {
	font-size: 20px;
	font-weight: bold;
}
.table {
    border-top-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #000000;
    border-right-color: #000000;
    border-bottom-color: #000000;
    border-left-color: #000000;
}
#campo {
	font-family:Calibri ;
	font-size:13px ;
	
}
#campo1 {
	font-family:Calibri ;
	font-size:14px ;
	font-weight:bold ;
	
	
}
-->
</style>
<style media="print">
.pri {
display: none;
}
</style>
</head>

<body>
<table width="700" border="0">
  <tr>
    <td width="138"><div align="center"><img src="logomini.png" width="134" height="93" /></div></td>
    <td colspan="2" valign="top"><p align="center" class="style1">LUCIANO AUTO PE&Ccedil;AS E SERVI&Ccedil;OS<br />
    AVENIDA JUSCELINO KUBITSCHEK N&deg; 699 - CRUZEIRO<br />
    CAMPINA GRANDE - PB - (83)3335-1678<br />
    LUCIANO DE OLIVEIRA -ME</p>    </td>
  </tr>
  <tr>
    <td colspan="3"><div align="center" class="style2">FICHA DE ENTRADA DE VE&Iacute;CULO</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="314" >&nbsp;</td>
    <td width="234">&nbsp;</td>
  </tr>
</table>
  <table width="700">
  <tr>
    <td width="96" class="table"><div align="right" id="campo">Nome do cliente:</div></td>
    <td width="371" class="table"><div id="campo1"><?php echo $nome ; ?></div></td>
    <td width="217" class="table"><div align="left" id="campo">Defeitos e informa&ccedil;&otilde;es:</div></td>
  </tr>
  <tr>
    <td class="table"><div align="right" id="campo">Carro-Ano:</div></td>
    <td class="table"><div id="campo1"><?php echo $carro."-".$ano ; ?></div></td>
    <td width="217" rowspan="7" valign="top" class="table"><div align="left" id="campo1"><?php echo $defeitos ; ?></div></td>
  </tr>
  <tr>
    <td class="table"><div align="right" id="campo">Telefone:</div></td>
    <td class="table"><div id="campo1"><?php echo $tel ; ?></div></td>
    </tr>
  <tr>
    <td class="table"><div align="right" id="campo">Celular:</div></td>
    <td class="table"><div id="campo1"><?php echo $cel ; ?></div></td>
    </tr>
  <tr>
    <td class="table"><div align="right" id="campo">Endere&ccedil;o:</div></td>
    <td class="table"><div id="campo1"><?php echo $end ; ?></div></td>
    </tr>
  <tr>
    <td class="table"><div align="right" id="campo">Bairro:</div></td>
    <td class="table"><div id="campo1"><?php echo $bairro ; ?></div></td>
    </tr>
  <tr>
    <td class="table"><div align="right" id="campo">Data:</div></td>
    <td class="table"><div id="campo1"><?php echo $data ; ?></div></td>
    </tr>
  <tr>
    <td colspan="2" class="table"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="20%" ><div align="right" id="campo">Placa:</div></td>
        <td width="26%"><div id="campo1"><?php echo $placa ; ?></div></td>
        <td width="26%" ><div align="right" id="campo">Km:</div></td>
        <td width="28%"><div id="campo1"><?php echo $km ; ?></div></td>
      </tr>
    </table></td>
    </tr>
</table>
<div class="pri"><input type="button" value="Imprimir" class="button" onclick="javascript:window.print()" /></div>
</body>
</html>

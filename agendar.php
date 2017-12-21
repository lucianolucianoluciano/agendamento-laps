<?php 
require("conexao.php") ;
	if (isset($_POST['confirma']) && $_POST['confirma'] == 'ok') {
			$nome      = $_POST['nome'] ;
			$carro     = $_POST['carro'] ;
			$ano       = $_POST['ano'] ;
			$tel       = $_POST['tel'] ;
			$celular   = $_POST['celular'] ;
			$endereco  = $_POST['endereco'] ;
			$bairro    = $_POST['bairro'] ;
			$defeitos  = $_POST['defeitos'] ;
			$carroano  = $carro."-".$ano ;
			$data = $_POST['data'] ;
			$query = "INSERT INTO agendamento (nome,carroano, telefone, celular, endereco, bairro, data, informacoes)
			          VALUES ('$nome', '$carroano', '$tel', '$celular', '$endereco', '$bairro', '$data', '$defeitos')" ;
			$consulta = mysql_query($query) 
						or die (mysql_error()) ;
			header("Location: http://www.lucianoautopecas.com/loja/lista_agenda.php") ;
		
			
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gera Ficha e Entrada</title>
<style type="text/css">
	*{margin:0; padding:0;}
body {background:#000 url(../laps.jpg) no-repeat; margin:50px;}

#formulario form {width:300px; display:block; margin:0 auto;}
#formulario fieldset {border:0; padding:0 15px 10px 15px;}
#formulario legend {font:18px Tahoma, Geneva, sans-serif; color:#ccc; font-weight:bold; padding:10px 0; border-bottom:2px;}
#formulario label {display: block; padding:3px 0;}
#formulario span {display:block; font:16px "Trebuchet MS", Arial, Helvetica, sans-serif; color:#fff; font-weight:bold;}
#formulario input {padding:3px; width:260px; border:1px solid #069; font:16px Tahoma, Geneva, sans-serif; color:#069; font-weight:bold;}
#formulario textarea {padding:3px; width:260px; border:1px solid #069; font:16px Tahoma, Geneva, sans-serif; color:#069; font-weight:bold;}
#formulario .send {width:120px; display:block; margin:10px auto; cursor:pointer; border:0; background:#fff; color:#000;}
#formulario .send:hover {background:#ccc;}
.yes {padding:3px; background:#EAFFD5; border:1px solid #0F0;}
.no {padding:3px; background:#FDD; border:1px solid #F00;}
.style2 {font-size: x-small}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="http://cloud.github.com/downloads/digitalBush/jquery.maskedinput/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
 jQuery(function($){
 $("#data").mask("99/99/2012");
 $("#tel").mask("(83)9999-9999");
 $("#cel").mask("(83)9999-9999");
 $("#ano").mask("9999/9999");
 });
</script>

</head>
<body>
<div id="formulario">
<form action="" method="post" >
	<fieldset>
   	<legend>Agendamentos Futuros</legend>
    <label>
        	<span id="texto">Nome do cliente</span>
            <input type="text" name="nome" />
        </label>  
        
        <label>
        	<span id="texto">Carro</span><span class="style2"></span>
            <input type="text" name="carro" />
</label> 
        
        <label>
        	<span id="texto">Ano</span>
            <input type="text" name="ano" id="ano" />
        </label>  
        
        <label>
        	<span id="texto">Telefone</span>
			<input type="text" name="tel" id="tel"/>
        </label>  
        
        <label>
        	<span id="texto">Data para agendar</span>
			<input type="text" name="data" id="data"/>
        </label>
        
        <label>
        	<span id="texto">Celular</span>
			<input type="text" name="celular" id="cel" />
        </label> 
		
		<label>
			<span id="texto">Endereço</span>
			<input type="text" name="endereco" />
        </label> 
		
		<label>
        	<span id="texto">Bairro</span>
			<input type="text" name="bairro" />
        </label> 
        
                
        <label>
        	<span id="texto">Defeitos ou informa&ccedil;&otilde;es*</span>
            <textarea name="defeitos" rows="4"></textarea>
        </label>  
        <input type="hidden" name="confirma" value="ok" />        
        <input type= "submit" class="send" value="Enviar" />
        
        
    </fieldset>
    </form>
    </div>
</body>
</html>

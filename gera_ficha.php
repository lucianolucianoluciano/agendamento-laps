<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gera Ficha e Entrada</title>
<style type="text/css">
	*{margin:0; padding:0;}
body {background:#000 url(../laps.jpg) no-repeat; margin:50px;}

#formulario form {width:300px;  display:block; margin:0 auto;}
#formulario fieldset {border:0; padding:0 15px 10px 15px;}
#formulario legend {font:18px Tahoma, Geneva, sans-serif; color:#ccc; font-weight:bold; padding:10px 0; border-bottom:2px;}
#formulario label {display: block; padding:3px 0;}
#formulario span {display:block; font:16px "Trebuchet MS", Arial, Helvetica, sans-serif; color:#fff; font-weight:bold;}
#formulario input {padding:3px; width:260px; border:1px solid #069; font:16px Tahoma, Geneva, sans-serif; color:#069; font-weight:bold;}
#formulario textarea {padding:3px; width:260px; border:1px solid #069; font:16px Tahoma, Geneva, sans-serif; color:#069; font-weight:bold;}
#formulario .send {width:120px; display:block; margin:10px auto; cursor:pointer; border:0; background:#fff; color:#000;}
#formulario .send:hover {background:#666;}
.yes {padding:3px; background:#EAFFD5; border:1px solid #0F0;}
.no {padding:3px; background:#FDD; border:1px solid #F00;}
.style2 {font-size: x-small}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="http://cloud.github.com/downloads/digitalBush/jquery.maskedinput/jquery.maskedinput-1.3.min.js" type="text/javascript"></script>
<script type="text/javascript">
 jQuery(function($){
 
 $("#tel").mask("(83)9999-9999");
 $("#cel").mask("(83)9999-9999");
 $("#ano").mask("9999/9999");
 });
</script>

</head>
<body>
<div id="formulario">
<form action="ficha.php" method="post" >
	<fieldset>
   	<legend>Gera Ficha de Entrada</legend>
    <label>
        	<span id="texto">Nome do cliente</span>
            <input type="text" name="nome" value="<?php echo utf8_encode($_GET['nome']) ; ?>"/>
        </label>  
        
        <label>
        	<span id="texto">Carro</span>
            <input type="text" name="carro" value="<?php echo utf8_encode($_GET['carro']) ; ?>" />
</label> 
        
        <label>
        	<span id="texto">Ano</span>
            <input type="text" name="ano" id="ano" value="<?php echo utf8_encode($_GET['ano']) ; ?>" />
        </label>  
        
        <label>
        	<span id="texto">Telefone</span>
        <input type="text" name="tel" id="tel" value="<?php echo utf8_encode($_GET['telefone']) ; ?>"/>
        </label>  
        
        <label>
        	<span id="texto">Celular</span>
        <input type="text" name="celular" id="cel" value="<?php echo utf8_encode($_GET['celular']) ; ?>"/>
        </label>  
        
        <label>
        	<span id="texto">Endereço(rua e numero)</span>
        <input type="text" name="endereco" value="<?php echo utf8_encode($_GET['endereco']) ; ?>"/>
        </label>         
        
        <label>
        	<span id="texto">Bairro</span>
            <input type="text" name="bairro" value="<?php echo utf8_encode($_GET['bairro']) ; ?>"/>
        </label>                  
        
                
        <label>
        	<span id="texto">Defeitos ou informa&ccedil;&otilde;es*</span>
            <textarea name="defeitos" rows="4"><?php echo utf8_encode($_GET['inf']) ; ?></textarea>
        </label>  
        
        <input type= "submit" class="send" value="Enviar" />
        
        
    </fieldset>
    </form>
    </div>
</body>
</html>

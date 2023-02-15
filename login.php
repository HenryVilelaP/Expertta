<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.:Expertta:. | Sistema de Gesti&oacute;n de Recuperaci&oacute;n y Cobros de Impagados</title>
<link rel="stylesheet" type="text/css" href="web/css/panel.css"/>
<link rel="stylesheet" type="text/css" href="web/css/form1.css"/>
<script type="text/javascript" src="include/function/objetoAjax.js"></script>
<script>
function loading(){
if (navigator.appName.indexOf("Microsoft")==-1){	
	 document.getElementById("browser").value="1";
 }else{
 document.getElementById("browser").value="0";
 }

} 

function validarlogin(){

var MiForm=document.frm_login;
var error=false; 

/*
if (MiForm.browser.value=="0"){
 alert('El Browser No Soporta Algunas Funciones Permitidas\r\nAconsejamos Utilizar Mozilla Firefox');
 error=true;
 return false;
}*/
 

var user=document.frm_login.vNombre_Usuario.value;
var pass=document.frm_login.cPassword_Usuario.value;

/* if (pass==''){
 	alert('Debe Ingresar Contraseña');
	document.frm_login.cPassword_Usuario.focus();
	return false
 }*/
 
 if (pass.length>0){
	 if (pass.length<8){
		alert('Debe Ingresar 8 caracteres como minimo');
		document.frm_login.cPassword_Usuario.focus();
		return false
	 }
 } 
//return false;
// onload="loading();"
}

function mensaje() {
    alert("Solo los clientes pueden usar IE \nse le recomienda usar Firefox Mozilla");
}
</script>
</head>
<?php
    if ($_GET['msg'] == 'errorBrowser') {
        $mensaje = "onload='mensaje()'";
    }
?>
<body <?php echo $mensaje;?> >
<?php 
include_once('include/function/funcionphp.php'); 
include_once('include/define/config.php'); 
include_once('class/conexion.class.php');

?>
<br><br><br><br><br>
<table width="235" height="55" border="0" align="center" cellpadding="0" cellspacing="0" class="fondlogo">
  <tr>
    <td width="285"></td>
  </tr>
  <tr>
    <td height="37">&nbsp;</td>
  </tr>
</table><br>
<form id="frm_login" name="frm_login" method="post" action="login/datos/login.iniciar.php">
  <table id="logincolumn"  width="422" height="215" border="0" align="center">
    <tr>
      <td width="409" colspan="3" align="center" class="check"><table width="88%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="3"><div align="center"><strong>Por Favor Ingrese su Usuario y Password</strong></div></td>
          </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
          </tr>
        <tr>
          <td colspan="3"><div align="center"><strong style="color:#900">
            <?php	  echo ManejoError($_GET['msg']); ?>
          </strong></div></td>
          </tr>
        <tr>
          <td width="23%">&nbsp;</td>
          <td width="33%">&nbsp;</td>
          <td width="44%">&nbsp;</td>
        </tr>
        <tr>
          <td height="33"><div align="center"><img src="./web/images/User_3d.png" alt="" width="25" height="25" /></div></td>
          <td><strong>Usuario</strong></td>
          <td><label>
            <input name="vNombre_Usuario" type="text" id="vNombre_Usuario" size="40" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="33"><table width="20" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="25" class="iconologin2">&nbsp;</td>
              </tr>
          </table></td>
          <td><strong>Contrase&ntilde;a</strong></td>
          <td><label>
            <input name="cPassword_Usuario" type="password" id="cPassword_Usuario" size="40" />
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"><div align="center">
		  	<input type="hidden" value="<?php echo $_GET["us"]?>" name="idUsuario" id="idUsuario"></input>
            <input type="hidden" value="<?php echo $_GET["error"]?>" name="contador" id="contador"></input>
            <input type="submit" name="button2" style="height:24px"  onclick="return validarlogin()" id="button2"  value="Ingresar" class="button" />
		    <input type="hidden" name="browser" id="browser">
          </div></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="3"><div align="center"><strong style="float:left"><a href="recuperarPassword.php">&iquest;Olvido su Contrase&ntilde;a?</a></strong>
                    <strong style="float:right"><a href="loginReiniciar.php">Cambiar Contrase&ntilde;a</a></strong></div></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
  </table>
  <p><?php
// echo "$br->Platform, $br->Name version $br->Version";
    $br = new Browser;
    if (("$br->Name version")!='Firefox version'){?>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td><div align="center" class="descargfire">Esta p&aacute;gina recomienda el navegador <a href="http://www.mozilla-europe.org/es/firefox/" target="_blank">mozilla/firefox</a></div></td>
  </tr>
</table>
	<?php }
?></p>
  <p><br>
    <br>
  </p>
  <div >
  <table width="337" height="40" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td background="web/images/footerlogin.jpg"><div align="center">
        <table width="120" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><div align="center">&copy; <?php echo substr(MIFECHA,6,4);?> - Expertta </div></td>
          </tr>
        </table>
      </div></td>
    </tr>
  </table>
</div>
</form>
<p>&nbsp;</p>
</body>
</html>
<script>
		var ObjectHandlerLogin = new Object();
		ObjectHandlerLogin.IdLogin = document.getElementById("vNombre_Usuario");
		ObjectHandlerLogin.IdLogin.focus();
		delete(ObjectHandlerLogin.IdLogin)
</script>
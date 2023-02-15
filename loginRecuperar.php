<?php include_once('include/function/funcionphp.php'); 
include_once('class/conexion.class.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sistema de Gesti&oacute;n de Recobros e Impagos - Expertta 2010</title>
<link rel="stylesheet" type="text/css" href="web/css/panel.css"/>
<link rel="stylesheet" type="text/css" href="web/css/form1.css"/>
<script type="text/javascript" src="include/function/objetoAjax.js"></script>
<script>
function validonuevouserx(){

var user1=document.frm_login.vNombre_Usuario.value;

var pass1=document.frm_login.cPassword_Usuario.value;
var pass12=document.frm_login.cPassword_Usuario2.value;

 if (pass1==''){
 	alert('Debe Ingresar Contraseña');
	document.frm_login.cPassword_Usuario.focus();
	return false
 }
 
	 if (pass1.length>0){
		 if (pass1.length<9){
			alert('Debe Ingresar 8 caracteres como minimo');
			document.frm_login.cPassword_Usuario.focus();
			return false
		 }
	 } 

	 if (pass12.length>0){
		 if (pass12.length<9){
			alert('Debe Ingresar 8 caracteres como minimo');
			document.frm_login.cPassword_Usuario2.focus();
			return false
		 }
	 } 	 
	//return false;
}
</script>
</head>
<body>

<br><br><br><br><br>
<table width="235" height="57" border="0" align="center" cellpadding="0" cellspacing="0" class="fondlogo">
  <tr>
    <td width="285"></td>
  </tr>
  <tr>
    <td height="57">&nbsp;</td>
  </tr>
</table>
<br>
<form id="frm_login" name="frm_login" method="post" action="login/datos/login.nuevo.php">
<div >
  <table id="logincolumn" width="422" height="215" border="0" align="center">
    <tr>
      <td colspan="3" align="center" class="check">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" align="center" class="check"><strong>Por Favor Ingrese su Usuario y Password</strong></td>
    </tr>
    <tr>
      <td height="14" colspan="3" align="center">
      <strong style="color:#900">
	  <?php
	  echo ManejoError($_GET['msg']);
	  ?></strong></td>
    </tr>
    </tr>
    <tr>
      <td width="57" height="34"><div align="center"><img src="./web/images/User_3d.png" alt="" width="25" height="25" /></div></td>
      <td width="109"><strong>Usuario</strong></td>
      <td width="242"><label>
        <input name="vNombre_Usuario" type="text" id="vNombre_Usuario" size="40" value="<?php echo $_REQUEST['us'] ?>" />
      </label></td>
    </tr>
    <tr>
      <td height="29"><div align="center"><img src="web/images/lock.png" alt="" width="25" height="25" /></div></td>
      <td><strong>Nueva Contrase&ntilde;a</strong></td>
      <td><label>
        <input name="cPassword_Usuario" type="password" id="cPassword_Usuario" size="40" />
        </label></td>
    </tr>
    <tr>
      <td width="57" height="28"><div align="center"><img src="web/images/lock.png" alt="" width="25" height="25" /></div></td>
      <td width="109"><strong>Repetir Contrase&ntilde;a</strong></td>
      <td width="242"><label>
        <input name="cPassword_Usuario2" type="password" id="cPassword_Usuario2" size="40" />
        </label></td>
    </tr>
    <tr>
      <td height="39" colspan="3">
      <div align="center">
        <input type="submit" name="btnRecuperar" onclick="return validonuevouserx();" id="btnRecuperar" value="Ingresar al Sistema" class="button" />
      </div></td>
    </tr>
    <tr>
      <td height="14" colspan="3" align="center"><strong><a href="login.php">Regresar a Login</a></strong></td>
    </tr>
  </table>
 <p>
   <?php
// echo "$br->Platform, $br->Name version $br->Version";
    $br = new Browser;
    if (("$br->Name version")!='Firefox version'){?>
</p>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><div align="center" class="descargfire">Esta p&aacute;gina recomienda el navegador <a href="http://www.mozilla-europe.org/es/firefox/" target="_blank">mozilla/firefox</a></div></td>
    </tr>
  </table>
  <?php }
?>
  </p>
<p><br>
    <br>
  </p>
  <div >
  <table width="337" height="40" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td background="web/images/footerlogin.jpg"><div align="center">
        <table width="120" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td><div align="center">&copy; 2009 - Expertta </div></td>
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
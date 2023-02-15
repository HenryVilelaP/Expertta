<?php include('include/function/funcionphp.php'); 
include_once('class/conexion.class.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sistema de Gesti&oacute;n de Recobros e Impagos - Expertta 2010</title>
<link rel="stylesheet" type="text/css" href="web/css/panel.css"/>
<link rel="stylesheet" type="text/css" href="web/css/form1.css"/>
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
</table><br>
<form id="frm_recuperar" method="post" action="login/datos/login.recuperar.php">

  <table id="logincolumn" width="422" height="215" border="0" align="center">
    <tr>
      <td colspan="3" align="center" class="check">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" align="center" class="check"><strong>Por Favor Ingrese su Usuario</strong></td>
    </tr>
    <tr>
      <td height="14" colspan="3" align="center">
      <strong style="color:#900"><?php	  echo ManejoError($_GET['msg']);  ?></strong></td>
    </tr>
    <tr>
      <td width="62" height="40"><div align="center"><img src="./web/images/User_3d.png" alt="" width="25" height="25" /></div></td>
      <td width="79"><strong>Usuario</strong></td>
      <td width="271"><label>
        <input name="vNombre_Usuario" type="text" id="vNombre_Usuario" size="40" />
        </label></td>
    </tr>
    <tr>
      <td height="39" colspan="3">
        <div align="center">
          <input type="submit" name="btnRecuperar" id="button" value="Recuperar  Contraseña" class="button" />
        </div></td>
    </tr>
    <tr>
      <td height="14" colspan="3" align="center"><a href="login.php">Regresar a Login</a></td>
    </tr>
    <tr>
      <td height="54" colspan="3">&nbsp;</td>
    </tr>
  </table><p> <?php
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
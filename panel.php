<?php 
session_start();
include_once('login/datos/login.validar.php');
include_once('include/define/config.php');


$vigencia = $_SESSION['iPeriodo_Caducidad'] + $_SESSION['diasCaducidad'];

if ($vigencia <= 5) {
    $mensaje = "alert('Su&nbsp;cuenta&nbsp;vence&nbsp;en&nbsp;".$vigencia."&nbsp;dias');";
} else {
    $mensaje = "";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>.:Expertta:. | Sistema de Gesti&oacute;n de Recuperaci&oacute;n y Cobros de Impagados</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<link rel="stylesheet" type="text/css" href="web/css/panel.css"/>
<link rel="stylesheet" type="text/css" href="web/css/form1.css"/>
<link rel="stylesheet" type="text/css" href="web/css/tabla.css"/>
<link rel="stylesheet" type="text/css" href="web/css/tabs.css"/>
<link rel="stylesheet" type="text/css" href="web/css/gestor.css"/>
<link rel="stylesheet" type="text/css" href="web/css/botones.css"/>
<link rel="stylesheet" type="text/css" href="calendar/dhtmlgoodies_calendar.css"/>
<link rel="stylesheet" type="text/css" href="web/css/contrato.css"/>
<link rel="stylesheet" type="text/css" href="web/css/estructura.css"/>
<link rel="stylesheet" type="text/css" href="web/css/facturacion.css"/>
<link href="web/images/greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />
<!-- IMPORTACION DATA -->
<link rel="stylesheet" type="text/css" href="calendar/dhtmlgoodies_calendar.css"/>
<!--extec¡ncion js-->

<!--  RUTA AGREGADO POR MUÑOZ CUZCO JAIME ADAN --->
<!--  FUNCION : GENERAR LA BASE DE  STYLESHEET PARA LOS TAB (CONTROLES GESTION AGENDA )--->
<link rel="stylesheet" type="text/css" href="apps/gestor/ClaseTabSel/ToolBtn.css"/>
<!--  CLASS JAVASCRIPT  : PARA LAS CARTAS --->
<script type="text/javascript" language="javascript" src="apps/clientes/ajax/LoadMail_JK.js"></script>

<script type="text/javascript" language="javascript" src="apps/Buscador/ClassHandler_find.js"></script>

<script type="text/javascript" language="javascript" src="Util.js"></script>
<!--  CLASS JAVASCRIPT  : GLOBAL --->

<!---- ----------------------------------------------------------------  ----->


<script language="javascript" type="text/javascript" src="include/function/jquery-1.3.2.js"></script>
<script language="javascript" type="text/javascript" src="include/function/objetoAjax.js"></script>
<script language="javascript" type="text/javascript" src="include/function/xscriptbase.js"></script>
<script language="javascript" type="text/javascript" src="include/function/xscriptdepen.js"></script>
<script language="javascript" type="text/javascript" src="include/function/gestor.js"></script>
<script language="javascript" type="text/javascript" src="include/function/cliente.js"></script>
<script language="javascript" type="text/javascript" src="include/function/contratos.js"></script>
<script language="javascript" type="text/javascript" src="include/function/estructura.js"></script>
<script language="javascript" type="text/javascript" src="include/function/TDCliente.js"></script>
<script language="javascript" type="text/javascript" src="include/function/facturacion.js"></script>
<script language="javascript" type="text/javascript" src="include/function/nifcif.js"></script>
<!--**ESTRUCTURA PARA TABLAS INTERMEDIAS**-->
<script language="javascript" type="text/javascript" src="include/function/estructura/core.js"></script>
<script language="javascript" type="text/javascript" src="include/function/estructura/events.js"></script>
<script language="javascript" type="text/javascript" src="include/function/estructura/css.js"></script>
<script language="javascript" type="text/javascript" src="include/function/estructura/coordinates.js"></script>
<script language="javascript" type="text/javascript" src="include/function/estructura/drag.js"></script>
<script language="javascript" type="text/javascript" src="include/function/estructura/dragsort.js"></script>
<script language="javascript" type="text/javascript" src="include/function/estructura/cookies.js"></script>
<script language="javascript" type="text/javascript" src="include/function/estructura/inicio.js"></script>
<script language="javascript" type="text/javascript" src="include/function/funciones.js"></script>
<script language="javascript" type="text/javascript" src="include/function/masked_javascript.js"></script>

<script language="javascript" type="text/javascript" src="apps/BuscarExpediente/ajax/expediente.autocompletar.js"></script>

<script language="javascript" type="text/javascript" src="apps/Expediente/ajax/expediente.ajax.js"></script>

<script language="javascript" type="text/javascript" src="apps/UsuarioSistema/mantenimiento/ajax/ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/utilidades/delegacion/form/aDelegacion.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/BuscarExpediente/ajax/tabs.ajax.js"></script>
<script language="javascript" type="text/javascript" src="include/function/jquery.js"></script>
<script language="javascript" type="text/javascript" src="calendar/dhtmlgoodies_calendar.js"></script>
<script language="javascript" type="text/javascript" src="apps/mantenimiento/ajax/ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/diccionario/ajax/ajax.js"></script>

<!-- Contenido Ajax del modulo de Utilidades-->
<script language="javascript" type="text/javascript" src="apps/UsuarioSistema/cargo/ajax/cargo.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/UsuarioSistema/acceso/ajax/acceso.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/UsuarioSistema/modulo/ajax/modulo.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/UsuarioSistema/perfil/ajax/perfil.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/UsuarioSistema/usuario/ajax/usuario.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/UsuarioSistema/sistema/ajax/sistema.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/UsuarioSistema/delegacion/ajax/delegacion.ajax.js">
<script language="javascript" type="text/javascript" src="apps/UsuarioSistema/personal/ajax/personal.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/UsuarioSistema/gestor/ajax/gestor.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/UsuarioSistema/grupo/ajax/grupo.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/busquedaSucursales/busquedaSucursales.js"></script>

<!-- Contenido Ajax del modulo de Agenda-->
<script language="javascript" type="text/javascript" src="apps/gestor/ajax/agenda.js"></script>
<script language="javascript" type="text/javascript" src="apps/gestor/ajax/alerta.js"></script>

<!-- Contenido Ajax del modulo de Argumentario-->
<script language="javascript" type="text/javascript" src="apps/clientes/ajax/argumentario.ajax.js"></script>

<!-- Contenido Ajax del modulo de Administracion-->
<script language="javascript" type="text/javascript" src="apps/administracion/formaCobro/ajax/formaCobro.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/calificacion/ajax/calificacion.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/gestion/ajax/gestion.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/respuesta/ajax/respuesta.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/tipoContratoCliente/ajax/tipoContratoCliente.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/tipoDeuda/ajax/topoDeuda.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/tipoDevolucion/ajax/tipoDevolucion.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/tipoDomicilio/ajax/tipoDomicilio.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/tipoEnvio/ajax/tipoEnvio.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/tipoEstado/ajax/tipoEstado.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/tipoMovimiento/ajax/tipoMovimiento.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/caducidadClave/ajax/caducidad.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/tipoTelefono/ajax/tipoTelefono.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/tipoTitular/ajax/tipoTitular.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/asignacionGestoresCartera/ajax/asignacionGestoresCartera.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/administracion/asignacionSupervisorCartera/ajax/asignacionSupervisorCartera.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/informes/informe.ajax.js"></script>
<script language="javascript" type="text/javascript" src="apps/informes/ajax/ajax.js"></script>
<!-- IMPORTACION DATA -->
<script language="javascript" type="text/javascript" src="include/function/funciones.js"></script>
<script language="javascript" type="text/javascript" src="include/function/objetoAjax.js"></script>
<script language="javascript" type="text/javascript" src="calendar/dhtmlgoodies_calendar.js"></script>
<script language="javascript" type="text/javascript" src="include/function/jquery.js"></script>
<script language="javascript" type="text/javascript" src="include/function/upload.js"></script>
<script language="javascript" type="text/javascript" src="Interface/uploadinterf.js"></script>
<!-- -->

<script src="include/function/jquery.js" type="text/javascript"></script>
<script src="include/function/jquery.tooltip.js" type="text/javascript"></script>

<Script language="javascript">
/*function checkKeyCode(evt)
{

var evt = (evt) ? evt : ((event) ? event : null);
var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
if(event.keyCode==116)
{
evt.keyCode=0;
return false
}
}
document.onkeydown=checkKeyCode;*/
</script>

<style type="text/css">
td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}
</style>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}



//-->
</script>
</head>
<div id="transp" class="transp"></div>
<div  id="principal" class="principal">
<div id="CapaModal"></div>

<?php 
//echo $_SESSION['iId_Usuario'].'---<br>';
//echo $_SESSION['iId_LogAccesoSession'].'---<br>';
	//$mises=Session_id();
	$iduser=$_SESSION['iId_Usuario'];
	$ses=str_replace("'",'',$_SESSION["Session"]);
	$logsesi=str_replace("'",'',$_SESSION['iId_LogAccesoSession']);		
	$cadenasession=$ses.'|'.$iduser.'|'.$logsesi;
	
	/*
	
	*/
?>
<body onunload="cerrarsystema();" onload="<?php echo $mensaje; ?> SessionLifeInit('<?php echo $cadenasession;?>',0);" onKeyDown="if(event.keyCode == 116){return false;} " >
<div onmousemove="Movimiento();" id="as">

<input type="hidden" id="iId_UsuarioSession" value="<?php echo $iduser;?>" />
<input type="hidden" id="vsession" value="<?php echo $ses;?>" />
<input type="hidden" id="conx" value="<?php if (isset($iduser)){echo '1';}else{echo '0';}?>" />
<input type="hidden" id="misesiongeneral" value="<?php echo $ses.'|'.$iduser.'|'.$logsesi;?>" />
<?php
// echo "$br->Platform, $br->Name version $br->Version";
    $br = new Browser;
    if (("$br->Name version")!='Firefox version'){?>

	<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#003366">
  <tr>
    <td><div align="center" class="descargfireerror">Esta página recomienda  el navegador <a class="descargfireerror" href="http://www.mozilla-europe.org/es/firefox/" target="_blank">mozilla/firefox</a></div></td>
  </tr>
</table>
	<?php }
?>
<div id="popup">

</div>

<!-- Inicio Wrapper -->
<div id="wrapper">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="fondoheader">
    <!--DWLayoutTable-->
    <tr>
      <td width="630" height="59" valign="top"><div id="info">
       <img src="web/images/dermenu/logo.jpg" alt="" width="235" height="56" /> 
      </div></td>
      <td width="477" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><div id="usuario">
            <table width="480" border="0" align="right" cellpadding="0" cellspacing="0">
              <!-- fwtable fwsrc="menuderecha.png" fwbase="menuderecha.jpg" fwstyle="Dreamweaver" fwdocid = "471602246" fwnested="0" -->
              <tr>
                <td><img src="web/images/m_derecha/exp_m_derecha/spacer.gif" alt="" width="218" height="1" border="0" id="undefined_2" /></td>
                <td><img src="web/images/m_derecha/exp_m_derecha/spacer.gif" alt="" width="85" height="1" border="0" id="undefined_2" /></td>
                <td><img src="web/images/m_derecha/exp_m_derecha/spacer.gif" alt="" width="1" height="1" border="0" id="undefined_2" /></td>
                <td><img src="web/images/m_derecha/exp_m_derecha/spacer.gif" alt="" width="63" height="1" border="0" id="undefined_2" /></td>
                <td><img src="web/images/m_derecha/exp_m_derecha/spacer.gif" alt="" width="1" height="1" border="0" id="undefined_2" /></td>
                <td><img src="web/images/m_derecha/exp_m_derecha/spacer.gif" alt="" width="65" height="1" border="0" id="undefined_2" /></td>
                <td><img src="web/images/m_derecha/exp_m_derecha/spacer.gif" alt="" width="47" height="1" border="0" id="undefined_2" /></td>
                <td><img src="web/images/m_derecha/exp_m_derecha/spacer.gif" alt="" width="1" height="1" border="0" id="undefined_2" /></td>
              </tr>
              <tr>
                <td colspan="7"><img src="web/images/m_derecha/exp_m_derecha/menuderecha_r1_c1.jpg" width="480" height="2" border="0" id="menuderecha_r1_c1" alt="" /></td>
                <td><img src="web/images/m_derecha/exp_m_derecha/spacer.gif" alt="" width="1" height="2" border="0" id="undefined_2" /></td>
              </tr>
              <tr>
                <td rowspan="2" background="web/images/m_derecha/exp_m_derecha/menuderecha_r2_c1.jpg"><table width="217" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><strong>&nbsp;&nbsp;Usuario:</strong> 
				
					<?php 	if($_SESSION['bCliente']==1){
						echo utf8_encode($_SESSION['vNombre_Cliente']); }
						else{echo utf8_encode($_SESSION['vNombre_Personal']);}?></td>
                  </tr>
                  <tr>
                    <td width="213" height="8"></td>
                  </tr>
                  <tr><?php 
				  $dp=split(' ',utf8_encode($_SESSION['vDescripcion_Perfil']));
				  $tg=split(' ',utf8_encode($_SESSION['vNombre_Delegacion']));
				  ?>
                    <td><strong>&nbsp;&nbsp;Perfil</strong>:
					<?php echo utf8_encode($_SESSION['vDescripcion_Perfil']); ?> <strong>&nbsp;</strong></td>
                  </tr>
                </table></td>
                <td><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','navbar1','menuderechar2c2','web/images/m_derecha/exp_m_derecha/menuderecha_r2_c2_f3.jpg',1)" onmouseover="MM_nbGroup('over','menuderechar2c2','web/images/m_derecha/exp_m_derecha/menuderecha_r2_c2_f2.jpg','web/images/m_derecha/exp_m_derecha/menuderecha_r2_c2_f4.jpg',1)" onmouseout="MM_nbGroup('out');"><img src="web/images/m_derecha/exp_m_derecha/menuderecha_r2_c2.jpg" alt="" name="menuderechar2c2" width="85" height="22" border="0" id="menuderecha_r2_c2" /></a></td>
                <td colspan="2"><a href="#" onclick="BloqueoSystem('','0');" ><img onclick="MM_nbGroup('down','navbar1','menuderechar2c3','web/images/m_derecha/exp_m_derecha/menuderecha_r2_c3_f3.jpg',1)" onmouseover="MM_nbGroup('over','menuderechar2c3','web/images/m_derecha/exp_m_derecha/menuderecha_r2_c3_f2.jpg','web/images/m_derecha/exp_m_derecha/menuderecha_r2_c3_f4.jpg',1); " onmouseout="MM_nbGroup('out');" src="web/images/m_derecha/exp_m_derecha/menuderecha_r2_c3.jpg" alt="" name="menuderecha_r2_c3" width="64" height="22" border="0" id="menuderecha_r2_c3" /></a></td>
                <td colspan="2"><a href="javascript:;" target="_top" onclick="MM_nbGroup('down','navbar1','menuderechar2c5','web/images/m_derecha/exp_m_derecha/menuderecha_r2_c5_f3.jpg',1)" onmouseover="MM_nbGroup('over','menuderechar2c5','web/images/m_derecha/exp_m_derecha/menuderecha_r2_c5_f2.jpg','web/images/m_derecha/exp_m_derecha/menuderecha_r2_c5_f4.jpg',1)" onmouseout="MM_nbGroup('out');"><img src="web/images/m_derecha/exp_m_derecha/menuderecha_r2_c5.jpg" alt="" name="menuderechar2c5" width="66" height="22" border="0" id="menuderecha_r2_c5" /></a></td>
                <td rowspan="2" background="web/images/m_derecha/exp_m_derecha/menuderecha_r2_c7.jpg">&nbsp;</td>
                <td><img src="web/images/m_derecha/exp_m_derecha/spacer.gif" alt="" width="1" height="22" border="0" id="undefined_2" /></td>
              </tr>
              <tr>
                <td colspan="5" background="web/images/m_derecha/exp_m_derecha/menuderecha_r3_c2.jpg">&nbsp;|&nbsp;<strong>Fecha:&nbsp;</strong>[ <?php echo MIFECHA; ?> ] | <strong>Hora:</strong> <?php echo  '[ '.MIHORA.' ]'; ?></td>
                <td><img src="web/images/m_derecha/exp_m_derecha/spacer.gif" alt="" width="1" height="22" border="0" id="undefined_2" /></td>
              </tr>
              <tr>
                <td colspan="7"><table width="100%" height="22" border="0" cellpadding="0" cellspacing="0">
                <?php if($_SESSION['bCliente']!=1){?>
                  <tr>
                    <td width="55%" background="web/images/m_derecha/exp_m_derecha/menuderecha_r3_c2.jpg"><strong>&nbsp;&nbsp;Delegación</strong>: <?php echo ' '.utf8_encode($_SESSION['vNombre_Delegacion']).' '; ?></td>
                    <td width="45%" background="web/images/m_derecha/exp_m_derecha/menuderecha_r3_c2.jpg">&nbsp;</td>
                  </tr>
                  <?php }?>
                <?php if($_SESSION['bCliente']==1){?>
                  <tr>
                    <td colspan="2" background="web/images/m_derecha/exp_m_derecha/menuderecha_r3_c2.jpg"><table width="424" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="133"><strong>&nbsp;&nbsp;<a href="#" onclick="reiniciarestadousuario('<?php echo $_SESSION['iId_Usuario'];?>');">Reiniciar Contraseña </a></strong> </td>
                          <td width="291"><div id="estadousuario"> </div></td>
                        </tr>
                      </table></td>
                    </tr>
                  <?php }?>				  
                </table></td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </div></td>
        </tr>
      </table>
      </td>
    </tr>
  </table>
  <!-- Fin Info -->
  <!-- Inicio Header -->
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr class="derechafondomenu" >
      <td width="76%">
      <?php 
	  /*if($_SESSION['bCliente']==1){

	  include_once("menu_cliente.php");
	  }
	  else{*/
	  include_once("menu_principal.php");
	  //}
	  ?>
      
      </td>
      <td  width="24%">&nbsp;</td>
    </tr>
    <tr>
      <td height="20" class="fondoabajomenu">&nbsp;</td>
      <td class="fondoabajomenu">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><table  width="100%" height="28" border="0" cellpadding="0" cellspacing="0">

        <tr bgcolor="#eeeeee">


          <td width="9%">
        <?php if($_SESSION['bCliente']!=1){?>
		  <table width="186" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="25%"><div align="center"><img src="web/images/iconos/usuarios.gif" alt="" width="14" height="14" /></div></td>
              <td width="75%" class="desaccrapido"><div align="center">
			  <strong><?php if($row=mssql_fetch_assoc($usuarios))
			  echo utf8_encode($row['Usuarios_Conectados']);
			  ?></strong></div></td>
            </tr>
          </table><?php }?>
		  </td>
          <td width="0%"><div class="separador" align="center">|</div></td>
          <td width="7%"><table width="79" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="44%"><div align="center"><img src="web/images/iconos/folder.gif" alt="" width="16" height="12" /></div></td>
              <td width="56%" class="desaccrapido"><div align="center">Reportes</div></td>
            </tr>
          </table></td>
          <td width="1%"><div class="separador" align="center">|</div></td>
          <td width="66%">&nbsp;</td>
          <td width="10%">&nbsp;</td>
        </tr>
        <tr>
          <td height="1" colspan="9" bgcolor="#999999"></td>
          </tr>
        <tr>
          <td height="7" colspan="7"></td>
        </tr>
      </table></td>
    </tr>
  </table>
  <!-- Fin Header -->
  <!-- Inicio Footer --><!-- Fin Footer -->
  <!-- Inicio Left Column -->
  <!-- Fin Left Column -->
  <!-- Inicio Right Column -->

  <!-- Fin Right Column -->
  <!-- Inicio Footer -->
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><div id="uprightcolumn">
			<div id="contenidoRespuesta">   
			<iframe src="apps/Estadisticas/Datos/Estadistica_Expediente.php" class="iframastyel" ></iframe>
            </div>
  </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
  </table>
  <div id="footer">
    <div>
      <div align="center">Terms &amp; Conditions | Privacy | Security Policy | Trademark Info | Contact us
        <!--  <a href="/crm/products/faq.html">FAQs</a>  | <a href="http://www.sugarcrm.com/home/component/option,com_sitemap/">Sitemap</a>  -->
        |   Expertta Inc. © 2009 - <?php echo substr(MIFECHA,6,4);?> All rights reserved.</div>
    </div>
  </div>
  <!-- Fin Footer -->
</div>
<!-- Fin Wrapper -->
</div>
</body>

</html>

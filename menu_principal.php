<?php
include_once("class/conexion.class.php");
include_once("include/function/funcionphp.php");
//$error = new AdminError; 
$objDelegacionConsultar = new BDManager();
$resultado_consulta = $objDelegacionConsultar->spConsultarTablaId("bdGestionAdmSistema..Ga_Perfil", "cAcceso_Panel",'iId_Perfil',$_SESSION['iId_Perfil']);
$resultado = mssql_fetch_assoc($resultado_consulta);
$acceso = str_split($resultado['cAcceso_Panel']);
//print_r($acceso) ;

?>

<style type="text/css">

td img {display: block;}td img {display: block;}
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
<body onLoad="MM_preloadImages('web/images/menu/menu_r2_c2_f3.gif','web/images/menu/menu_r2_c2_f2.gif','web/images/menu/menu_r2_c2_f4.gif','web/images/menu/menu_r2_c5_f3.gif','web/images/menu/menu_r2_c5_f2.gif','web/images/menu/menu_r2_c5_f4.gif','web/images/menu/menu_r2_c7_f3.gif','web/images/menu/menu_r2_c7_f2.gif','web/images/menu/menu_r2_c7_f4.gif','web/images/menu/menu_r1_c3_f3.gif','web/images/menu/menu_r1_c3_f2.gif','web/images/menu/menu_r1_c3_f4.gif','web/images/menu/menu_r2_c3_f2.gif','web/images/menu/menu_r2_c3_f4.gif','web/images/menu/menu_r2_c3_f3.gif','web/images/menu/menu_r2_c9_f3.gif','web/images/menu/menu_r2_c9_f2.gif','web/images/menu/menu_r2_c9_f4.gif','web/images/menu/menu_r1_c11_f3.gif','web/images/menu/menu_r1_c11_f2.gif','web/images/menu/menu_r1_c11_f4.gif','web/images/menu/menu_r2_c11_f2.gif','web/images/menu/menu_r2_c11_f4.gif','web/images/menu/menu_r2_c11_f3.gif','web/images/menu/menu_r2_c13_f3.gif','web/images/menu/menu_r2_c13_f2.gif','web/images/menu/menu_r2_c13_f4.gif','web/images/menu/menu_r1_c15_f3.gif','web/images/menu/menu_r1_c15_f2.gif','web/images/menu/menu_r1_c15_f4.gif','web/images/menu/menu_r1_c18_f3.gif','web/images/menu/menu_r1_c18_f2.gif','web/images/menu/menu_r1_c18_f4.gif')">
<table width="100%" height="1" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
</table>
<table width="30" border="0" cellspacing="0" cellpadding="0">
  <!--DWLayoutTable-->
  
  <tr>
    <td width="20"><img name="menu_r2_c1" src="web/images/menu/menu_r2_c1.gif" width="20" height="58" border="0" id="menu_r2_c1" alt="" /></td>
	<?php if ($acceso[0]!=0){?>
    <td width="58" rowspan="2"><a href="panel.php" target="_top" onClick="MM_nbGroup('down','navbar1','menur2c2','web/images/menu/menu_r2_c2_f3.gif',1)" onMouseOver="MM_nbGroup('over','menur2c2','web/images/menu/menu_r2_c2_f2.gif','web/images/menu/menu_r2_c2_f4.gif',1)" onMouseOut="MM_nbGroup('out');"><img src="web/images/menu/menu_r2_c2.gif" alt="" name="menur2c2" width="58" height="58" border="0" id="menu_r2_c2"   /></a></td>
		<?php }?>
        <?php if ($acceso[1]!=0){?>
	<td width="72"><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','menu_r2_c3','web/images/menu/menu_r1_c3_f3.gif','menu_r2_c3','web/images/menu/menu_r2_c3_f3.gif',1)" onMouseOver="MM_nbGroup('over','menu_r2_c3','web/images/menu/menu_r1_c3_f2.gif','web/images/menu/menu_r1_c3_f4.gif','menu_r2_c3','web/images/menu/menu_r2_c3_f2.gif','web/images/menu/menu_r2_c3_f4.gif',1)" onMouseOut="MM_nbGroup('out');"><img name="menu_r2_c3" src="web/images/menu/menu_r2_c3.gif" width="72" height="58" border="0" onClick=" mostrarPagina('apps/BuscarExpediente/index.php','contenidoRespuesta','','','0');" id="menu_r2_c3" alt="" /></a></td><?php }?>
	
    <?php if ($acceso[2]!=0){?>
    <td width="58" rowspan="3"><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','menu_r2_c5','web/images/menu/menu_r2_c5_f3.gif',1);" onMouseOver="MM_nbGroup('over','menu_r2_c5','web/images/menu/menu_r2_c5_f2.gif','web/images/menu/menu_r2_c5_f4.gif',1);" onMouseOut="MM_nbGroup('out');"><img onClick="mostrarPagina('apps/gestor/index.php?id=<?php echo $_SESSION['iId_Usuario']; ?>&perfil=<?php echo $_SESSION['iId_Perfil'];?>&delegacion=<?php echo $_SESSION['iId_Delegacion'];?>','contenidoRespuesta','','','0');" name="menu_r2_c5" src="web/images/menu/menu_r2_c5.gif" width="58" height="58" border="0" id="menu_r2_c5" alt="" /></a></td>
		<?php }?>
    <?php if ($acceso[3]!=0){?>
    <td width="58"  rowspan="3"><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','menu_r2_c7','web/images/menu/menu_r2_c7_f3.gif',1);" onMouseOver="MM_nbGroup('over','menu_r2_c7','web/images/menu/menu_r2_c7_f2.gif','web/images/menu/menu_r2_c7_f4.gif',1);" onMouseOut="MM_nbGroup('out');"><img onClick=" mostrarPagina('apps/informes/informes.prinicpal.php?id=<?php echo $_SESSION['iId_Usuario'];?>','contenidoRespuesta','','','0');"  name="menu_r2_c7" src="web/images/menu/menu_r2_c7.gif" width="58" height="58" border="0" id="menu_r2_c7" alt="" /></a></td>
	<?php }?>
    <?php if ($acceso[4]!=0){?>
    <td width="58"  rowspan="3"><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','menu_r2_c9','web/images/menu/menu_r2_c9_f3.gif',1);" onMouseOver="MM_nbGroup('over','menu_r2_c9','web/images/menu/menu_r2_c9_f2.gif','web/images/menu/menu_r2_c9_f4.gif',1);" onMouseOut="MM_nbGroup('out');"><img onClick=" mostrarPagina('apps/clientes/index.php?id=<?php echo $_SESSION['iId_Usuario'];?>','contenidoRespuesta','','','0');" name="menu_r2_c9" src="web/images/menu/menu_r2_c9.gif" width="58" height="58" border="0" id="menu_r2_c9" alt="" /></a></td>
	<?php }?>
    <?php if ($acceso[5]!=0){?>
    <td width="85"  rowspan="3"><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','menu_r2_c11','web/images/menu/menu_r1_c11_f3.gif','menu_r2_c11','web/images/menu/menu_r2_c11_f3.gif',1)" onMouseOver="MM_nbGroup('over','menu_r2_c11','web/images/menu/menu_r1_c11_f2.gif','web/images/menu/menu_r1_c11_f4.gif','menu_r2_c11','web/images/menu/menu_r2_c11_f2.gif','web/images/menu/menu_r2_c11_f4.gif',1)" onMouseOut="MM_nbGroup('out');"><img name="menu_r2_c11" src="web/images/menu/menu_r2_c11.gif" width="85" height="58" onClick="mostrarPagina('apps/administracion.php','contenidoRespuesta','','','0');"  border="0" id="menu_r2_c11" alt="" /></a></td>
	<?php }?>
    <?php if ($acceso[6]!=0){?>
    <td width="58"  rowspan="3"><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','menu_r2_c13','web/images/menu/menu_r2_c13_f3.gif',1);" onMouseOver="MM_nbGroup('over','menu_r2_c13','web/images/menu/menu_r2_c13_f2.gif','web/images/menu/menu_r2_c13_f4.gif',1);" onMouseOut="MM_nbGroup('out');"><img name="menu_r2_c13" onClick="mostrarPagina('apps/utilidades.php?id=<?php echo $_SESSION['iId_Usuario']; ?>&amp;perfil=<?php echo $_SESSION['iId_Perfil'];?>&amp;delegacion=<?php echo $_SESSION['iId_Delegacion'];?>','contenidoRespuesta','','','0');" src="web/images/menu/menu_r2_c13.gif" width="58" height="58" border="0" id="menu_r2_c13" alt="" /></a></td>
	<?php }?>
    <?php if ($acceso[7]!=0){?>
    <td width="68"  rowspan="3"><a href="javascript:;" target="_top" onClick="MM_nbGroup('down','navbar1','menu_r1_c15','web/images/menu/menu_r1_c15_f3.gif',1);" onMouseOver="MM_nbGroup('over','menu_r1_c15','web/images/menu/menu_r1_c15_f2.gif','web/images/menu/menu_r1_c15_f4.gif',1);" onMouseOut="MM_nbGroup('out');"><img onClick="mostrarPagina('apps/facturacion/index.php?id=<?php echo $_SESSION['iId_Usuario']; ?>&perfil=<?php echo $_SESSION['iId_Perfil'];?>&delegacion=<?php echo $_SESSION['iId_Delegacion'];?>','contenidoRespuesta','','','0');" name="menu_r1_c15" src="web/images/menu/menu_r1_c15.gif" width="68" height="59" border="0" id="menu_r1_c15" alt="" /></a></td>
	<?php }?>
	<td width="10"><img src="web/images/separadorlinea.jpg" width="1" height="58"></td>
	
    <td width="378"><a href="login/datos/login.cerrar.php" target="_top" onClick="MM_nbGroup('down','navbar1','menu_r1_c18','web/images/menu/menu_r1_c18_f3.gif',1);" onMouseOver="MM_nbGroup('over','menu_r1_c18','web/images/menu/menu_r1_c18_f2.gif','web/images/menu/menu_r1_c18_f4.gif',1);" onMouseOut="MM_nbGroup('out');"><img name="menu_r1_c18" src="web/images/menu/menu_r1_c18.gif" width="79" height="59" border="0" id="menu_r1_c18" alt="" /></a></td>
  </tr>
</table>

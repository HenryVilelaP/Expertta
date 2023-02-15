<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Copyright (c) 2003-2009, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Sample - CKEditor</title>
	<meta content="text/html; charset=utf-8" http-equiv="content-type"/>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script language="javascript" type="text/javascript" src="apps/utilidades/delegacion/form/aDelegacion.ajax.js"></script>
<script language="javascript" type="text/javascript" src="include/function/gestor.js"></script>	
	<script id="headscript" type="text/javascript">

CKEDITOR.on( 'instanceReady', function( ev )
	{
		document.getElementById('eMessage').innerHTML = '' ;
		document.getElementById('eButtons').style.visibility = '' ;
	});

function InsertHTML()
{
	var oEditor = CKEDITOR.instances.editor1 ;
	var value = document.getElementById( 'plainArea' ).value ;
	if (oEditor.mode == 'wysiwyg' )
	{
		oEditor.insertHtml( value ) ;
	}
	else
		alert( 'You must be on WYSIWYG mode!' ) ;
}

function SetContents()
{
	var oEditor = CKEDITOR.instances.editor1 ;
	var value = document.getElementById( 'plainArea' ).value ;
	oEditor.setData( value ) ;
}

function GetContents()
{
	var oEditor = CKEDITOR.instances.editor1 ;
        var descripcion = oEditor.getData();
	parent.salvarArgumentario(descripcion);
}

function ExecuteCommand( commandName )
{
	var oEditor = CKEDITOR.instances.editor1 ;

	if (oEditor.mode == 'wysiwyg' )
	{
		oEditor.execCommand( commandName ) ;
	}
	else
		alert( 'You must be on WYSIWYG mode!' ) ;
}

function CheckDirty()
{
	var oEditor = CKEDITOR.instances.editor1 ;
	alert( oEditor.checkDirty() ) ;
}

function ResetDirty()
{
	var oEditor = CKEDITOR.instances.editor1 ;
	oEditor.resetDirty() ;
	alert( 'The "IsDirty" status has been reset' ) ;
}
	</script>
</head>
<body>
<?php
include_once('class/conexion.class.php');
include_once('include/function/funcionphp.php');
$objConsulta = new BDManager();
$param_tabla = "bdGestionCliente..GC_Argumentario";
$param_campos[] = "iId_Argumentario";
$param_campos[] = "iId_FormaCobro";
$param_campos[] = "iId_CarteraCliente";
$param_valor[] = $_GET["cobro"];
$param_valor[] = $_GET["cartera"];

$param_idkey = "iId_FormaCobro";
$param_idvalue = $_GET["cobro"];
$param_idkey2 = "iId_CarteraCliente";
$param_idvalue2 = $_GET["cartera"];

$argumentario = $objConsulta->spConsultarTablaId($param_tabla,armarConsulta($param_campos),$param_idkey,$param_idvalue,$param_idkey2,$param_idvalue2);
$encontro = mssql_num_rows($argumentario);
$fila = mssql_fetch_assoc($argumentario);
if ($encontro == 0) {
    $param_tabla = "bdGestionCliente..GC_Argumentario";
    $campos[] = "iId_FormaCobro";
    $campos[] = "iId_CarteraCliente";
    $valor[] = $_GET["cobro"];
    $valor[] = $_GET["cartera"];
    $resultado = $objConsulta->spInsertarTabla($param_tabla,armarConsulta($campos),armarConsulta($valor));
   
} else {
    $tabla = "bdGestionCliente..GC_ArgumentarioDetalle";
    $campo[] = "iId_Argumentario";
    $campo[] = "convert(text,SUBSTRING(tDescripcion_Argumentario,1,5000)) as Descripcion";
    $campo[] = "convert(text,SUBSTRING(tDescripcion_Argumentario,5001,5000)) as Descripcion1";
    $campo[] = "convert(text,SUBSTRING(tDescripcion_Argumentario,10001,5000)) as Descripcion2";
    $campo[] = "convert(text,SUBSTRING(tDescripcion_Argumentario,15001,5000)) as Descripcion3";
    $campo[] = "convert(text,SUBSTRING(tDescripcion_Argumentario,20001,5000)) as Descripcion4";
    $campo[] = "convert(text,SUBSTRING(tDescripcion_Argumentario,25001,5000)) as Descripcion5";
    $campo[] = "iItem_Argumentario";

    $param_idkey = "iId_Argumentario";
    $param_idvalue = $fila["iId_Argumentario"];

    $ArgumentarioDetalle = $objConsulta->spConsultarTablaId($tabla,armarConsulta($campo),$param_idkey,$param_idvalue);
    $filaDetalle = mssql_fetch_assoc($ArgumentarioDetalle);
    $row_detalle = mssql_num_rows($ArgumentarioDetalle);

    if ($row_detalle!=0) {
        $concatena = $filaDetalle["Descripcion"].$filaDetalle["Descripcion1"].$filaDetalle["Descripcion2"].$filaDetalle["Descripcion3"].$filaDetalle["Descripcion4"].$filaDetalle["Descripcion5"];
        $cadena = str_replace("_a_", "&", $concatena);
        $valor = htmlentities($cadena);
    } else {
        $valor = null;
    }
}
?>
	<div id="alerts">
		<noscript>
			<p>
				<strong>CKEditor requires JavaScript to run</strong>. In a browser with no JavaScript
				support, like yours, you should still see the contents (HTML data) and you should
				be able to edit it normally, without a rich editor interface.
			</p>
		</noscript>
	</div>

	<form action="sample_posteddata.php" method="post">
	
                <input onclick="GetContents();" type="button" value="Grabar" style="width:150px"/>
                <input type="button" value="Cancelar" style="width:150px" onclick="parent.mostrarEditor(); mostrarPagina('apps/clientes/index.php','contenidoRespuesta','','','0');"/>
                <textarea cols="80" id="editor1" name="editor1" rows="10"><?php echo $valor?></textarea>
		<script type="text/javascript">
	
			var editor = CKEDITOR.replace( 'editor1');
		
		</script>
		<div id="eMessage">

		</div>
		<div id="eButtons" style="visibility: hidden">
	
                        <input onclick="GetContents();" type="button" value="Grabar" style="width:150px"/>
                        <input type="button" value="Cancelar" style="width:150px" onclick="parent.mostrarEditor(); parent.mostrarPagina('apps/clientes/index.php','contenidoRespuesta','','','0');"/>
		
		</div>
                
</form>

</body>
</html>

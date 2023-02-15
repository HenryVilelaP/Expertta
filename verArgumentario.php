<?php
    session_start();

    include_once('/class/conexion.class.php');
    include_once('/include/function/funcionphp.php');

    $objConsulta = new BDManager();
    $param_tabla = "bdGestionAdmSistema..GA_TipoDeuda";
    $campo1[] = "iId_TipoDeuda";
    $campoOrden = "cCodigo_TipoDeuda";

    $comboCobro = $objConsulta->spConsultarTabla($param_tabla, armarConsulta($campo1), $campoOrden);

    while($resultado = mssql_fetch_assoc($comboCobro)) {
        $cadena .= ",".$resultado["iId_TipoDeuda"];
    }

    $cadena = substr($cadena, 1);
    $ids = split(",", $cadena);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Sample - CKEditor</title>
        <meta content="text/html; charset=utf-8" http-equiv="content-type"/>
        <script type="text/javascript" src="ckeditorb/ckeditor.js"></script>
        <script id="headscript" type="text/javascript">
            //<![CDATA[

            // The instanceReady event is fired when an instance of CKEditor has finished
            // its initialization.
            CKEDITOR.on( 'instanceReady', function( ev )
            {
                // Show the editor name and description in the browser status bar.
                document.getElementById('eMessage').innerHTML = '' ;

                // Show this sample buttons.
                document.getElementById('eButtons').style.visibility = '' ;
            });

            function InsertHTML()
            {
                // Get the editor instance that we want to interact with.
                var oEditor = CKEDITOR.instances.editor1 ;
                var value = document.getElementById( 'plainArea' ).value ;

                // Check the active editing mode.
                if (oEditor.mode == 'wysiwyg' )
                {
                    // Insert the desired HTML.
                    oEditor.insertHtml( value ) ;
                }
                else
                    alert( 'You must be on WYSIWYG mode!' ) ;
            }

            function SetContents()
            {
                // Get the editor instance that we want to interact with.
                var oEditor = CKEDITOR.instances.editor1 ;
                var value = document.getElementById( 'plainArea' ).value ;

                // Set the editor contents (replace the actual one).
                oEditor.setData( value ) ;
            }

            function GetContents()
            {
                // Get the editor instance that we want to interact with.
                var oEditor = CKEDITOR.instances.editor1 ;
                var descripcion = oEditor.getData();

                parent.salvarArgumentario(descripcion);

                //alert( oEditor.getData() ) ;
            }

            function ExecuteCommand( commandName )
            {
                // Get the editor instance that we want to interact with.
                var oEditor = CKEDITOR.instances.editor1 ;

                // Check the active editing mode.
                if (oEditor.mode == 'wysiwyg' )
                {
                    // Execute the command.
                    oEditor.execCommand( commandName ) ;
                }
                else
                    alert( 'You must be on WYSIWYG mode!' ) ;
            }

            function CheckDirty()
            {
                // Get the editor instance that we want to interact with.
                var oEditor = CKEDITOR.instances.editor1 ;
                alert( oEditor.checkDirty() ) ;
            }

            function ResetDirty()
            {
                // Get the editor instance that we want to interact with.
                var oEditor = CKEDITOR.instances.editor1 ;
                oEditor.resetDirty() ;
                alert( 'The "IsDirty" status has been reset' ) ;
            }

            //]]>
        </script>
    </head>
    <body style="margin:0; padding:0;">
<?php

$sig = $_GET["cobro"];
$aux = $ids[$sig];

include_once('class/conexion.class.php');
include_once('include/function/funcionphp.php');

$objConsulta = new BDManager();
$param_tabla = "bdGestionCliente..GC_Argumentario";
$param_campos[] = "iId_Argumentario";
$param_campos[] = "iId_FormaCobro";
$param_campos[] = "iId_CarteraCliente";

$param_idkey = "iId_FormaCobro";
$param_idvalue = $aux;
$param_idkey2 = "iId_CarteraCliente";
$param_idvalue2 = $_GET["cartera"];

$argumentario = $objConsulta->spConsultarTablaId($param_tabla,armarConsulta($param_campos),$param_idkey,$param_idvalue,$param_idkey2,$param_idvalue2);
$encontro = mssql_num_rows($argumentario);
$fila = mssql_fetch_assoc($argumentario);

if ($encontro != 0) {
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
        $gestor = str_replace("NOMBREGESTOR", $_SESSION['Nombre_Gestor'], $cadena);
        $titular = str_replace("NOMBRETITULAR", $_SESSION['Nombre_Titular'], $gestor);
        $titular1 = str_replace("APELLIDOTITULAR", $_SESSION['Apellido_Titular'], $titular);
        $cliente = str_replace("CLIENTE", $_SESSION['Nombre_Cliente'], $titular1);
        $domicilio = str_replace("DOMICILIO", $_SESSION['Domicilio'], $cliente);
        $valor = htmlentities($domicilio,ENT_COMPAT,"UTF-8");
    } else {
        $valor = null;
    }
}
	$ant = $sig - 1;
	$sig++;
?>	
		<?php if ($ant >= 0) { ?>
		<a href="verArgumentario.php?cartera=<?php echo $_GET["cartera"]?>&cobro=<?php echo $ant;?>"> <img src="web/images/iconos/paginado/anterior.png" width="25" height="15" border="0" alt="Anterior" /></a>
		<?php } ?>
		<a href="verArgumentario.php?cartera=<?php echo $_GET["cartera"]?>&cobro=<?php echo $sig;?>"><img src="web/images/iconos/paginado/siguiente.jpg" width="25" height="15" border="0" alt="siguiente"/></a>
        <div id="alerts">
            <noscript>
                <p>
                    <strong>CKEditor requires JavaScript to run</strong>. In a browser with no JavaScript
				support, like yours, you should still see the contents (HTML data) and you should
				be able to edit it normally, without a rich editor interface.
                </p>
            </noscript>
        </div>
        <!-- This <fieldset> holds the HTML that you will usually find in your
	     pages. -->
        <form action="sample_posteddata.php" method="post">
            <textarea cols="80" id="editor2" name="editor2" rows="10" disabled="disabled"><?php echo $valor; ?></textarea>
            <script type="text/javascript">
                //<![CDATA[
                // Replace the <textarea id="editor1"> with an CKEditor instance.
                var editor = CKEDITOR.replace( 'editor2');
                //]]>
            </script>
            <div id="eMessage">

            </div>
            <div id="eButtons" style="visibility: hidden">
            </div>
        </form>
    </body>
</html>

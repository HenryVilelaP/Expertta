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
    <body>
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
            <input onclick="GetContents();" type="button" value="Grabar" style="width:150px" disabled="disabled"/>
            <input type="button" value="Cancelar" style="width:150px" onclick="parent.mostrarEditor(); parent.mostrarPagina('apps/clientes/index.php','contenidoRespuesta');"/>
            <textarea cols="80" id="editor2" name="editor2" rows="10"></textarea>
            <script type="text/javascript">
                //<![CDATA[
                // Replace the <textarea id="editor1"> with an CKEditor instance.
                var editor = CKEDITOR.replace( 'editor2');
                //]]>
            </script>
            <div id="eMessage">

            </div>
            <div id="eButtons" style="visibility: hidden">
                <input onclick="GetContents();" type="button" value="Grabar" style="width:150px" disabled="disabled"/>
                <input type="button" value="Cancelar" style="width:150px" onclick="parent.mostrarEditor(); parent.mostrarPagina('apps/clientes/index.php','contenidoRespuesta');"/>
            </div>
        </form>
    </body>
</html>

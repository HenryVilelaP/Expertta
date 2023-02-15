<?php
include_once('class/conexion.class.php');
include_once('include/function/funcionphp.php');
$objConsultaId = new BDManager();

$tabla_combo1 = "bdGestionCliente..GC_Domicilio";
$campo_combo1[] = "iId_Ubigeo"; 
$campo_combo1[] = "cCodigo_Postal"; 
$campo_combo1[] = "iId_Domicilio"; 

$rs= $objConsultaId->spConsultarTabla($tabla_combo1,armarConsulta($campo_combo1),'iid_domicilio','asc');
while($mirs=mssql_fetch_assoc($rs)){
  unset($campoact2x);      
  unset($valoract2x);

  if (strlen(trim($mirs['cCodigo_Postal']))==4){
  	$mipo='0'.trim($mirs['cCodigo_Postal']);
  }
  else{
  	$mipo=trim($mirs['cCodigo_Postal']);  
  }
    echo $mipo.'--';
	$tablaact2x = 'bdGestionCliente..GC_Domicilio';
	$campoact2x[] = 'iId_Ubigeo';
	$valoract2x[] = _sql(substr($mipo,0,2),'text');
	$id='iId_Domicilio';
	$va=$mirs['iId_Domicilio'];
						
	$objConsultaId->spActualizaTabla($tablaact2x,armarUpdate($campoact2x,$valoract2x),$id,$va);	
			echo '<br>';
}
?>
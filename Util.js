/** ************************************************************************
 * ARCHIVO PROGRAMADOR POR :                                               *
 * @author    : MUÑOZ CUZCO JAIME ADAN                                     *             
 * @category  : ANALISTA PROGRAMADOR DE SISTEMAS WEB                       *
 * @copyright : TODOS LOS DERECHOS RESERVADOS 2010 - JK  DEVELOPER         *
 * @license   : gitano1991@hotmail.com - 996698390 // 980568871            *
 * ************************************************************************/ 

/* --------------------------------------------------------*
 function ValidateNumber
 valor Event return
 Param  :
 		this 	-> ObjectHandler
		event	-> ControllerHandler
 Note   :
		entry only type labels input	
*/
	function ValidateNumber(myfield, e){
		var dec = '';
		var key;
		var keychar;
		if (window.event)	
			key = window.event.keyCode;	
		else if (e)	
			key = e.which;
		else	
			return true;
		keychar = String.fromCharCode(key);
		if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27) )	
			return true;
		if (dec && (keychar == "." || keychar == ","))  
		{ 
			var temp=""+myfield.value;	
			if(temp.indexOf(keychar) > -1) 
				return false;  
		}  
		else if ((("0123456789").indexOf(keychar) > -1))  
			return true;
		else  
			return false;  
	}


	function ValidateString(myfield, e){
		var dec = '';
		var key;
		var keychar;
		if (window.event)	
			key = window.event.keyCode;	
		else if (e)	
			key = e.which;
		else	
			return true;
		keychar = String.fromCharCode(key);
		if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27) )	
			return true;
		if (dec && (keychar == "." || keychar == ","))  
		{ 
			var temp=""+myfield.value;	
			if(temp.indexOf(keychar) > -1) 
				return false;  
		}  
		else if ((("QWERTYUIOPÑLKJHGFDSAZXCVBNM qwertyuiopñlkjhgfdsazxcvbnmáéíóú").indexOf(keychar) > -1))  
			return true;
		else  
			return false;  
	}
	
	function ValidateCadena(myfield, e){
				var dec = '';
		var key;
		var keychar;
		if (window.event)	
			key = window.event.keyCode;	
		else if (e)	
			key = e.which;
		else	
			return true;
		keychar = String.fromCharCode(key);
		if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27) )	
			return true;
		if (dec && (keychar == "." || keychar == ","))  
		{ 
			var temp=""+myfield.value;	
			if(temp.indexOf(keychar) > -1) 
				return false;  
		}  
		else if ((("QWERTYUIOPÑLKJHGFDSAZXCVBNM qwertyuiopñlkjhgfdsazxcvbnmáéíóú0123456789").indexOf(keychar) > -1))  
			return true;
		else  
			return false;  	
	}
	
	function IsFoco(_event , Oyente){
		if(_event.keyCode == 13){		
			document.getElementById(Oyente).focus();
		}
	}
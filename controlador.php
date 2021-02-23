<?php
	$directorio = opendir("."); //ruta actual
	$i=0;
	while ($archivo = readdir($directorio)){ //obtenemos un archivo y luego otro sucesivamente	
	    if (is_dir($archivo)){//verificamos si es o no un directorio
	        //echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
	       	//$myObj->$i =$archivo;
	        
	    }
	    else{
	    	$extencion = explode(".", $archivo);
	    	if($extencion[1]=="mp4"){
		        $myObj->$i = $archivo;
		        $i=$i+1;
	    	}
	    }
	}
	echo json_encode($myObj);
?>
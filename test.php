<?php
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");


    header('Content-Type: application/json');

    


    
		$hola="sannca";



    echo json_encode($hola); // MUESTRA EL JSON GENERADO

?>

  
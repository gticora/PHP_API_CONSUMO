<?php

require_once("model_prueba.php");

$URL	= 'https://develop.datacrm.la/anieto/anietopruebatecnica/webservice.php';
$rs 	= API::Authentication($URL);
$array  = API::JSON_TO_ARRAY($rs);

$token 	= $array['result']['token'];

$loguin  = API::POST($URL,$token);
$array1  = API::JSON_TO_ARRAY($loguin);

$sessionName = $array1['result']['sessionName'];
$data  = API::consulta($sessionName);

echo  $data;


?>
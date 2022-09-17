<?php


class API{

	/**
	 * autenticación de acceso básica (Basic Auth)
	 * Ejemplo Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ==
	 *
	 * @param string $URL url para acceder y obtener un token
	 * @param string $usuario usuario
	 * @param string $password clave
	 * @return JSON
	 */
	static function Authentication($URL){

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,'https://develop.datacrm.la/anieto/anietopruebatecnica/webservice.php?operation=getchallenge&username=prueba');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		$result = curl_exec($ch);
		curl_close($ch);  
		return $result;
	}

	

	/**
	 * Consultar a un servidor a través del protocolo HTTP (GET).
	 * Se utiliza para consultar recursos en una API REST
	 *
	 * @param string $URL URL recurso, ejemplo: https://develop.datacrm.la/anieto/anietopruebatecnica/webservice.php no obligatorio
	 * @param string $TOKEN token de autenticación
	 * @return JSON
	 */
	static function POST($URL,$TOKEN){

		$headers 	= array(
            "Content-Type: application/x-www-form-urlencoded"
        );
        $accessKey=md5($TOKEN."3DlKwKDMqPsiiK0B");

		$ch 		= curl_init();
		curl_setopt($ch,CURLOPT_URL,$URL);
        curl_setopt($ch,CURLOPT_POST, 1);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_TIMEOUT, 20);
        curl_setopt($ch,CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 'operation=login&username=prueba&accessKey='.$accessKey.'');
		$response = curl_exec($ch);
		curl_close ($ch);
		return $response;
	}

    /**
	 * Consultar a un servidor a través del protocolo HTTP (POST).
	 * Se utiliza para consultar recursos en una API REST
	 *
	 * @param string $URL url para acceder y obtener un token
	 * @param string $usuario usuario
	 * @param string $password clave
	 * 
	 */
	static function consulta($sessionName){
        
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,'https://develop.datacrm.la/anieto/anietopruebatecnica/webservice.php?operation=query&sessionName='.$sessionName.'&query=select%20*%20from%20Contacts;');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		$result = curl_exec($ch);
		curl_close($ch);  
		return $result;
	}



	/**
	 * Convertir JSON a un ARRAY
	 *
	 * @param json $json Formato JSON
	 * @return ARRAY
	 */
	static function JSON_TO_ARRAY($json){
		return json_decode($json,true);
	}
}













?>
<?php
use GuzzleHttp\Client;
<<<<<<< HEAD

function getAuxReply($url) {
	
	$baseUrl = explode('?', $url)[0];
	$stringGetRequest = '?' . explode('?', $url)[1];
	
	$client = new Client ( [
			'base_uri' => $baseUrl
	] );
	
	file_put_contents ( "php://stderr", '[sendMessageToServer]' . $baseUrl . $stringGetRequest . PHP_EOL );
	
	$response = $client->request ( 'GET', $stringGetRequest );
	$bodyMsg = $response->getBody ()->getContents ();
	$data = json_decode ( $bodyMsg, true );
=======

function getAuxReply($auxAPI) {
	file_put_contents("php://stderr", "auxAPI: \n" . print_r($auxAPI, true) . PHP_EOL);
	
	$apiURL = $auxAPI['apiURL'];
	
	$baseUrl = explode('?', $apiURL)[0];
	$stringGetRequest = '?' . explode('?', $apiURL)[1];
	
	$client = new Client ([
			'base_uri' => $baseUrl
	]);
	
	$response = null;
	
	if ($auxAPI['parameters'] == null) { // E' una richiesta GET

		file_put_contents("php://stderr", '[auxAPI GET] ' . $baseUrl . $stringGetRequest . PHP_EOL);
		
		$response = $client->request('GET', $stringGetRequest);
		
	} else { // E' una richiesta POST
		
		file_put_contents("php://stderr", '[auxAPI POST] ' . $baseUrl . $stringGetRequest . PHP_EOL);
		
		$response = $client->request('POST', $stringGetRequest, [
				'json' => $auxAPI['parameters']
		]);
	}
	
	$bodyMsg = $response->getBody()->getContents();
	$data = json_decode($bodyMsg, true);
>>>>>>> branch 'master' of https://github.com/m-altieri/bookrecsysaltieri.git
	
	return $data;
}
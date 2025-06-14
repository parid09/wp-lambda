<?php
require( dirname( __FILE__ ) . '/vendor/autoload.php' );
/*
 * Main serverless functions
 */

function serv_wptexturize($text){
	$client = new GuzzleHttp\Client();
	$totexturize = urlencode($text);
	$response = $client->get('https://aet7i4bu4h.execute-api.us-east-1.amazonaws.com/Prod/?totexturize=' . $totexturize, ['verify' => false]);
	$texturized = json_decode($response->getBody(), true);
	return $texturized['texturized'];
}

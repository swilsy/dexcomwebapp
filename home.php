<?php
session_start();
error_reporting(1); 
ini_set('display_errors', 'on');


include('functions.php');

$isOauthToken = isset($_GET['code']);

if($isOauthToken){
	$curlRequest =  curlRequest(true);
	$_SESSION['mytoken'] = $curlRequest->access_token;
	$_SESSION['refreshToken'] = $curlRequest->refresh_token;
	header('Location: http://dexcomreadingsfor.us/view.php');
}
else{
	$curlRequest = curlRequest(false);
	// echo json_encode($curlRequest);
}
		

		

 ?>









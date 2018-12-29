<?php
session_start();
error_reporting(1); 
ini_set('display_errors', 'on');
// header("Access-Control-Allow-Origin: *");

include_once('functions.php');

$isOauthToken = isset($_GET['code']);


if(isset($_GET['fetchaccess'])){

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://sandbox-api.dexcom.com/v2/oauth2/token",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "client_secret=sN4BnYmjY5nEVTzC&client_id=BQYyHD7vcTAcQAVrO4LPACFmYMM6ifmC&refresh_token=".$_SESSION['refreshToken']."&grant_type=refresh_token&redirect_uri=http://dexcom.swilsycloud.com/home.php",
	  CURLOPT_HTTPHEADER => array(
	    "cache-control: no-cache",
	    "content-type: application/x-www-form-urlencoded"
	  ),
	));
	// header('Location: http://localhost:3000/dexcomwebapp/view');
	$response = curl_exec($curl);
	$err = curl_error($curl);
	
	curl_close($curl);
	echo 
	var_dump($_SESSION['refreshToken']);
	

}

if($isOauthToken){
	$curlRequest =  curlRequest(true);
	$_SESSION['mytoken'] = $curlRequest->access_token;
	$_SESSION['refreshToken'] = $curlRequest->refresh_token;

	header('Location: http://dexcom.swilsycloud.com/view.php');
	// header('Location: http://localhost:3000/dexcomwebapp/view');
}
else{
	$curlRequest = curlRequest(false);
	// echo json_encode($curlRequest);
}
		

		

 ?>





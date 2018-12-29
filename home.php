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
	  CURLOPT_URL => "https://api.dexcom.com/v1/oauth2/token",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "client_secret=VneGEXrb4GNhsfOJ&client_id=Vjiko00BljSRCuHxSgYU3JV80D3ZQzWR&refresh_token=".$_SESSION['refreshToken']."&grant_type=refresh_token&redirect_uri=http://localhost/dev/beetus/dexcomwebapp/home",
	  CURLOPT_HTTPHEADER => array(
	    "cache-control: no-cache",
	    "content-type: application/x-www-form-urlencoded"
	  ),
	));
	// header('Location: http://localhost/dev/beetus/dexcomwebapp/view');
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

	//header('Location: http://www.dexcomreadingsfor.us/view');
	 header('Location: http://localhost/dev/beetus/dexcomwebapp/view');
}
else{
	$curlRequest = curlRequest(false);
	// echo json_encode($curlRequest);
}
		

		

 ?>





<?php 

	


	function curlRequest ($token, $query_string='' ){
		
		if($token){
			$code = $_GET['code'];
			$setopt_array = array(
				CURLOPT_URL => "https://api.dexcom.com/v1/oauth2/token",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => "client_secret=foO4xOf0kZIgI2AJ&client_id=XE15nFWB4ACRnGY7JwUEcJG1Lizhhzxm&code=".$code."&grant_type=authorization_code&redirect_uri=http://localhost:3000/dexcomapi/home.php",
			  CURLOPT_HTTPHEADER => array(
			    "cache-control: no-cache",
			    "content-type: application/x-www-form-urlencoded"
			  ),
			);
		}
		else{
			$setopt_array = array(
				CURLOPT_URL => "https://api.dexcom.com/v1/users/self/egvs?startDate=2017-09-22T15:30:00&endDate=2017-09-28T20:45:00",
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "authorization: Bearer ".$_SESSION['mytoken']
		  	),
			);
		}

		$curl = curl_init();
		curl_setopt_array($curl, $setopt_array);
		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);


		return json_decode($response);


	}



 ?>
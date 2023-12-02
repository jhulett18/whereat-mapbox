<?php
	
	require_once "vendor/autoload.php";

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', 'where_at');
	define('DBHOST', 'localhost:8889');
	define('DBUSER', 'root');
	define('DBPASS', 'root');
	define('DBDRIVER', '');
	
	define('ROOT', 'https://whereat.top');

}else
{
	/** database config **/
	define('DBNAME', 'whereat_main');
	define('DBHOST', 'localhost:3306');
	define('DBUSER', 'whereat_admin');
	define('DBPASS', 'QMdGfr2m%m7B');
	define('DBDRIVER', '');
	define('MAPAPI', 'AIzaSyCDeAzZKkmJmYcfNR9OJTDEfLJrFru4nVc');
	
	
	define('ROOT', "https://whereat.top");

}

define('APP_NAME', "Where At");
define('APP_DESC', "Best website on the planet");

/** true means show errors **/
define('DEBUG', true);

define('DB_USER_TBL', 'users');

// Google API configuration
define('GOOGLE_CLIENT_ID', '788794903880-vkvdjp93e8k8ad0oroj6a3h7t33pkif9.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_REDIRECT_URL', 'https://www.whereat.top/login');

// Start session
if(!session_id()){
	session_start();
}

// Include Google API client library
// 	require 'vendor';
// //
// // // Call Google API
// $gClient = new Google_Client();
// $gClient->setApplicationName('Login to CodexWorld.com');
// $gClient->setClientId(GOOGLE_CLIENT_ID);
// $gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
// $gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

// $google_oauthV2 = new Google_Oauth2Service($gClient);


// // Start session
// if(!session_id()){
// 	session_start();
// }

// $client = new Google\Client();
// $client->setApplicationName("Where At");
// $client->setDeveloperKey("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");


// Include Google API client library
// require_once 'google-api-php-client/Google_Client.php';
// require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
// $gClient = new Google_Client();
// $gClient->setApplicationName('Login to coderglass.com');
// $gClient->setClientId(GOOGLE_CLIENT_ID);
// $gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
// $gClient->setRedirectUri(GOOGLE_REDIRECT_URL);
//
// $google_oauthV2 = new Google_Oauth2Service($gClient);

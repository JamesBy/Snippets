<?php


//<?php


//define("MY_INC_CODE", 1);
//define("LAYOUT_PATH", "layout");
//define("LIBRARY_PATH", "lib");

//session_start();
//require 'secret_tokens.php';

error_reporting(-1);

define("MY_INC_CODE", 1);
define("APPLICATION_PATH", "application");
define("TEMPLATE_PATH", APPLICATION_PATH . "/views");
define("LIBRARY_PATH", "lib");

//Load the facebook access codes

require (APPLICATION_PATH . "/config/app_tokens_twitter.inc.php");
require (APPLICATION_PATH . "/config/twitteroauth.php");

// This code is from the referenced facebook example

session_start();

//die($twit_app_key.$twit_app_secret);

//$twit_app_url


/* Code from twitteroauth sample files. */

/* Build TwitterOAuth object with client credentials. */
$connection = new TwitterOAuth($twit_app_key, $twit_app_secret);

/* Get temporary credentials. */
$request_token = $connection->getRequestToken($twit_app_url);

/* Save temporary credentials to session. */
$_SESSION['oauth_token'] = $token = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

/* If last connection failed don't display authorization link. */
switch ($connection->http_code) {
    case 200:
        /* Build authorize URL and redirect user to Twitter. */
        $url = $connection->getAuthorizeURL($token);
        header('Location: ' . $url);
        break;
    default:
        /* Show notification if something went wrong. */
        echo 'Could not connect to Twitter. Refresh the page or try again later.';
}



?>

<?php
/*
 * Sample application for Google+ client to server authentication.
 * Remember to fill in the OAuth 2.0 client id and client secret,
 * which can be obtained from the Google Developer Console at
 * https://code.google.com/apis/console
 *
 * Copyright 2013 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

//require_once __DIR__.'/vendor/autoload.php';

//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;


error_reporting(-1);

define("MY_INC_CODE", 1);
define("APPLICATION_PATH", "application");
define("TEMPLATE_PATH", APPLICATION_PATH . "/views");
define("LIBRARY_PATH", "lib");

//Load the facebook access codes

require (APPLICATION_PATH . "/config/app_tokens.inc.php");
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_PlusService.php';

// Set your cached access token. Remember to replace $_SESSION with a
// real database or memcached.
session_start();





$client = new Google_Client();
$client->setApplicationName('Social App');
$client->setClientId(CLIENT_ID);
$client->setClientSecret(CLIENT_SECRET);
$client->setRedirectUri('http://localhost/php/socialite/index.php?action=ggsuccess');

//$client->setRedirectUri('insert_your_oauth2_redirect_uri');
$client->setDeveloperKey('thejamiebyrne@gmail.com');//insert_your_simple_api_key');
$plus = new Google_PlusService($client);

if (isset($_GET['code'])) {
  $client->authenticate();
  $_SESSION['token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
  $client->setAccessToken($_SESSION['token']);
}

if ($client->getAccessToken()) {
  $activities = $plus->activities->listActivities('me', 'public');
  print 'Your Activities: <pre>' . print_r($activities, true) . '</pre>';

  // We're not done yet. Remember to update the cached access token.
  // Remember to replace $_SESSION with a real database or memcached.
  $_SESSION['token'] = $client->getAccessToken();
} else {
  $authUrl = $client->createAuthUrl();
  header('Location: '.$authUrl);
  //print "<a href='$authUrl'>Connect Me!</a>";
}




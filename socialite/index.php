<!--
-----------------------------------------------------------------------------------------
--
-- index.php
--
-----------------------------------------------------------------------------------------
-- Project: social app
--
-- Description: Webelevate 2.1 FPS Corona Symester 2 Project
-- 
-- Developer:James Byrne - James.Byrne@webelevate.ie
--	
-- Student Number - D12127553
--
-- Version: 1.0
-- 
--
-----------------------------------------------------------------------------------------
-----------------------------------------------------------------------------------------




<?php

// Define path to application directory
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
set_include_path(APPLICATION_PATH . "/vendor/smarty/libs" . PATH_SEPARATOR . get_include_path());
set_include_path(APPLICATION_PATH . "/models" . PATH_SEPARATOR . get_include_path());
include_once('smartysocial.inc.php');
require_once (APPLICATION_PATH . "/config/myfunctions.inc.php");
require (APPLICATION_PATH . "/config/app_tokens_facebook.inc.php");

$smarty = new Smarty_Stuff();
$smarty->assign('apikey', $app_id);

session_start();


if (isset($_GET['action'])) {
    $pageAction = $_GET['action'];
} else {
    session_destroy(); //clear the session variable on first load
    $pageAction = 'noAction';
    //echo'<h1>SESSION DESTROYED</h1>';
}

//some operations sent using the actionurl
switch ($pageAction) {
    case 'fblogout':
        if(isset($_SESSION['fbLoggedIn'])){
            $_SESSION['fbLoggedIn'] = 0;
        }
        //die('logging you out');
        //echo'<h1>FACEBOOK LOGGED OUT</h1>';
    break;
    case 'twlogout':
        if(isset($_SESSION['twLoggedIn'])){
            $_SESSION['twLoggedIn'] = 0;
        }
        //die('logging you out');
        //echo'<h1>TWITTER LOGGED OUT</h1>';
    break;
     case 'gglogout':
        if(isset($_SESSION['ggLoggedIn'])){
            $_SESSION['ggLoggedIn'] = 0;
        }
        //die('logging you out');
        //echo'<h1>TWITTER LOGGED OUT</h1>';
    break;
    case 'ggsuccess':
        $_SESSION['ggLoggedIn'] = 1;
       
    break;
    default :
}


//check login ststus
$smarty->assign('twitterLoggedIn', FALSE);
$twLoggedIn = FALSE;
if (isset($_SESSION['twLoggedIn']) && $_SESSION['twLoggedIn'] == 1) {
    //die('logged in: '. $pageAction);
    $smarty->assign('twitterLoggedIn', TRUE);
    $twLoggedIn = TRUE;
}


$smarty->assign('facebookLoggedIn', FALSE);
$fbLoggedIn = FALSE;
if (isset($_SESSION['fbLoggedIn']) && $_SESSION['fbLoggedIn'] == 1) {
    //die('logged in: '. $pageAction);
    $smarty->assign('facebookLoggedIn', TRUE);
    $fbLoggedIn = TRUE;
}

$smarty->assign('googleLoggedIn', FALSE);
$ggLoggedIn = FALSE;
if (isset($_SESSION['ggLoggedIn']) && $_SESSION['ggLoggedIn'] == 1) {
    //die('logged in: '. $pageAction);
    //echo('<h1>Google Logged In</h1>');
    $smarty->assign('googleLoggedIn', TRUE);
    $ggLoggedIn = TRUE;
}



//Make a string to output for debug
$strLi = ($fbLoggedIn) ? 'FB Yes' : 'FB No';
//echo '<h4>logged in????: ' . $strLi . '</h4>';

$strLi .= ($twLoggedIn) ? '  TW Yes' : '   TW No';

$strLi .= ($ggLoggedIn) ? '  GG Yes' : '   GG No';

//echo '<h4 text-color="white"> STATUS: ' . $pageAction .', '.$strLi . '</h4>';



$smarty->assign('pageTitle', 'Social Stuff');
$smarty->assign('contentarea', 'landingcontent.tpl');
//$smarty->assign('page', 'page1.tpl');
//Call th custom facebook api function
$fbReturnString = getMotoGpString($app_id,$app_secret);
$smarty->assign('motogpfeed', $fbReturnString);


$smarty->display('master.tpl', $pageAction);

?>

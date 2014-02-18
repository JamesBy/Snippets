<?php /* Smarty version Smarty-3.1.15, created on 2013-11-07 16:58:03
         compiled from "application\views\smarty\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146735269997eae1c65-11253907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30d891df56873dc0eb6d625d1bbb8ef57b854331' => 
    array (
      0 => 'application\\views\\smarty\\templates\\header.tpl',
      1 => 1383829474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146735269997eae1c65-11253907',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5269997eaf1665_03688267',
  'variables' => 
  array (
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269997eaf1665_03688267')) {function content_5269997eaf1665_03688267($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->

        <link href="assets/css/myStyles.css" rel="stylesheet">
        <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../../assets/js/html5shiv.js"></script>
          <script src="../../assets/js/respond.min.js"></script>
        
        <![endif]>
        <div id="fb-root"></div-->
        <!--this is the face book script-->
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=321056964699651";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

             </script>
            <script>
            function fbLogOut() {
                // initialize the library with your Facebook API key
                //FB.init(apiKey:');//(apiKey: 'b65c1efa72f570xxxxxxxxxxxxxxxxx'});

                //Fetch the status so that we can log out.
                //You must have the login status before you can logout,
                //and if you authenticated via oAuth (server side), this is necessary.
                //If you logged in via the JavaScript SDK, you can simply call FB.logout()
                //once the login status is fetched, call handleSessionResponse
                FB.getLoginStatus(handleSessionResponse);
            }

            //handle a session response from any of the auth related calls
            function handleSessionResponse(response) {
                //if we dont have a session (which means the user has been logged out, redirect the user)
                if (!response.session) {
                    window.location = "index.php?action=fblogout";
                    return;
                }

                //if we do have a non-null response.session, call FB.logout(),
                //the JS method will log the user out of Facebook and remove any authorization cookies
                FB.logout(handleSessionResponse);
            }
            function twLogOut() {

                window.location = "index.php?action=twlogout";



            }
            function ggLogOut() {

                window.location = "index.php?action=gglogout";



            }
        </script>




    </head>
    <body class="darkblue">
        <h1 style="text-align: center; color:white;font:arial black bold">Motogp News</h1><?php }} ?>

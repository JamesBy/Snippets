<?php /*%%SmartyHeaderCode:78005269997ea419e6-87369629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9a9eaa20307a3a7d7207eee8bf975fab56afdac' => 
    array (
      0 => 'application\\views\\smarty\\templates\\master.tpl',
      1 => 1383827916,
      2 => 'file',
    ),
    '30d891df56873dc0eb6d625d1bbb8ef57b854331' => 
    array (
      0 => 'application\\views\\smarty\\templates\\header.tpl',
      1 => 1383829474,
      2 => 'file',
    ),
    'afe17942c0ca42a57efd020ad298a3504de00cd5' => 
    array (
      0 => 'application\\views\\smarty\\templates\\navbar.tpl',
      1 => 1383828840,
      2 => 'file',
    ),
    '0be42c05ebd5115fc1121d2a2410c6daef75e0ae' => 
    array (
      0 => 'application\\views\\smarty\\templates\\landingcontent.tpl',
      1 => 1383829855,
      2 => 'file',
    ),
    '98fbd8b02af138aa30db498c6a780d7243428b94' => 
    array (
      0 => 'application\\views\\smarty\\templates\\footer.tpl',
      1 => 1383601196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78005269997ea419e6-87369629',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_527bbeddec1581_31077383',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527bbeddec1581_31077383')) {function content_527bbeddec1581_31077383($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/ico/favicon.png">

        <title>Social Stuff</title>

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
        <h1 style="text-align: center; color:white;font:arial black bold">Motogp News</h1>
<div class="container">
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">My Social Website</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
                        <li class="fbLoggedin"><a href="javascript://" onclick="fbLogOut()">Facebook Log Out</a></li>
            
                                    <li class="fbLoggedin"><a href="javascript://" onclick="twLogOut()">Twitter Log Out</a></li>
            
                       
                        <li><a href="loginGoogle.php">Google Log In</a></li>
            
        </ul>
        <form class="navbar-form navbar-left" role="search">

        </form>
        <ul class="nav navbar-nav navbar-right">

            <!--li><a href="/users/sign_up">Sign Up</a></li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
                <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                    <form action="[YOUR ACTION]" method="post" accept-charset="UTF-8">
                        <label for="user_username">User Name</label>
                        <input id="user_username" style="margin-bottom: 15px;" type="text" name="user[username]" size="30" />
                        <label for="user_password">Password</label>
                        <input id="user_password" style="margin-bottom: 15px;" type="password" name="user[password]" size="30" />
                        

                        <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
                    </form>
                </div>
            </li-->

        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</div>    
<!--
-----------------------------------------------------------------------------------------
--
-- landing content.tpl
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
--The basic structure of the content (below the navbar) is 2 rows
--if we are logged in to any of the social networks the top row displays the buttons for that 
--social network based on the corresponding smarty variables twitterLoggedIn, FacebookLoggedin GoogleLoggedIn

--the lower row has 4 cols with the apps in each

-->
<div class="row">
     
        <div class="col-md-2 col-md-offset-2">
            <div class= "fb-like" data-href="http://www.soreleg.biz" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
            <hr><div class= "fb-share-button" data-href="http://www.soreleg.biz" data-type="button_count"></div>
            <hr><div class="fb-follow" data-href="http://www.facebook.com/zuck" data-colorscheme="light" data-layout="button_count" data-show-faces="false"></div>    
        </div>
        <div class="col-md-2">
            <div class= "fb-comments" data-href="http://www.soreleg.biz" data-numposts="1" data-width="100px"></div>
        </div>
        
            <div class="col-md-2"><!--col 2-->
            <script>!function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');</script>
                <a href="https://twitter.com/share" class="twitter-share-button" data-via="waxogg">Tweet</a>
                <hr><a href="https://twitter.com/waxogg" class="twitter-follow-button" data-show-count="false">Follow @waxogg</a>
                <hr><a href="https://twitter.com/intent/tweet?button_hashtag=TwitterStories" class="twitter-hashtag-button" data-related="waxogg">Tweet #TwitterStories</a>
                <hr><a href="https://twitter.com/intent/tweet?screen_name=waxogg" class="twitter-mention-button" data-related="waxogg">Tweet to @waxogg</a>
            </div><!--col 2-->
                                    <div class="col-md-2"><!--col 4--></div><!--col 4-->
                        <div class="col-md-2"><!--col 4--></div><!--col 5-->

    
        </div><!--row-->
<div class="row">
    
            <div class="col-md-2 col-md-offset-2 lightgrey"><!--col 1-->
                <h4 style="text-align:center">Facebook Custom Feed</h4><hr>
                <br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-c.ak.fbcdn.net/hphotos-ak-ash3/1456645_10152082408100769_230525413_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152082408100769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">#LorenzoVsMarquez: Marquez gets some extra practice ahead of Valencia</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQD5W9tABOQYJZrh&w=130&h=130&url=http%3A%2F%2Fi1.ytimg.com%2Fvi%2FO9iMOX07id8%2Fmaxresdefault.jpg%3Ffeature%3Dog" alt="Smiley face"><br><br>Description: On the eve of the 18th round of the 2013 MotoGP™ World Championship, Marc Marquez practices his "elbow down" on a new simulator aimed at build-up fitness spe...<br><br><form action="http://www.youtube.com/watch?v=O9iMOX07id8"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">www.youtube.com</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQBmGAubZqIDGBaj&w=130&h=130&url=http%3A%2F%2Fi1.ytimg.com%2Fvi%2Fh-S0b1ylF54%2Fhqdefault.jpg%3Ffeature%3Dog" alt="Smiley face"><br><br><form action="http://www.youtube.com/watch?v=h-S0b1ylF54"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">motogp.com · Honda Racing Corporation unveils RCV1000R for 2014</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQA8ykEG6egT1vKl&w=154&h=154&url=http%3A%2F%2Fphotos.motogp.com%2F2013%2F11%2F07%2Frcv1000_02_preview_big_169.jpg" alt="Smiley face"><br><br>Description: On Thursday at Valencia Honda Racing Corporation introduced the Honda RCV1000R prototype machine to be used from 2014 in the MotoGP "Open" Class.<br><br><form action="http://www.motogp.com/en/news/2013/Honda+Racing+Corporation+unveils+RCV1000R+for+2014"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-g.ak.fbcdn.net/hphotos-ak-ash3/1005385_10152082009100769_179708160_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152082009100769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-a.ak.fbcdn.net/hphotos-ak-ash3/1452338_10152081803775769_446917918_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152081803775769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">Instagram</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQDj5YTK0qDMXpSA&w=154&h=154&url=http%3A%2F%2Fdistilleryimage10.ak.instagram.com%2F54aa956e478f11e3a84e22000a9e5ad6_8.jpg" alt="Smiley face"><br><br>Description: hrc_motogp's photo on Instagram<br><br><form action="http://instagram.com/p/gaJEVMmgAi/"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">Instagram</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQD3Z201Q6WVw2k7&w=154&h=154&url=http%3A%2F%2Fdistilleryimage2.ak.instagram.com%2Fa7023b0e47a411e3908d12b14a07c504_7.jpg" alt="Smiley face"><br><br>Description: motogp's photo on Instagram<br><br><form action="http://instagram.com/p/gaaiMyPN8W/"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">Instagram</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQBWNssKzAtXVdMK&w=154&h=154&url=http%3A%2F%2Fdistilleryimage6.ak.instagram.com%2Fa022300c47a211e39c0112bd6055b4f2_7.jpg" alt="Smiley face"><br><br>Description: motogp's photo on Instagram<br><br><form action="http://instagram.com/p/gaY37xPN6m/"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-d.ak.fbcdn.net/hphotos-ak-ash4/1394191_10152081556760769_219250575_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152081556760769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-f.ak.fbcdn.net/hphotos-ak-frc3/1463395_10152081467580769_543717264_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152081467580769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">motogp.com · Johann Zarco joins Caterham Moto Racing Team</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQBtGs6oHa4x6usA&w=154&h=154&url=http%3A%2F%2Fphotos.motogp.com%2F2013%2F11%2F07%2F05zarco_s5d1531_preview_big_169.jpg" alt="Smiley face"><br><br>Description: Caterham Moto Racing Team has confirmed that Johann Zarco will join Josh Herrin to complete the newly formed Moto2™ team’s rider line-up for its debut season in 2014.<br><br><form action="http://www.motogp.com/en/news/2013/Johann+Zarco+Joins+Caterham+Moto+Racing+Team"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-b.ak.fbcdn.net/hphotos-ak-ash3/1455115_10152081388440769_836406055_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152081388440769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-c.ak.fbcdn.net/hphotos-ak-frc3/1456098_10152081336615769_862881728_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152081336615769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-d.ak.fbcdn.net/hphotos-ak-frc3/1461177_10152079384290769_1499885495_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152079384290769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-e.ak.fbcdn.net/hphotos-ak-ash3/1452377_10152079025290769_1971449614_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152079025290769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">Instagram</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQBHwT8SeKQsoKXi&w=154&h=154&url=http%3A%2F%2Fdistilleryimage7.ak.instagram.com%2F73b0965646dc11e3807c22000a1fba57_7.jpg" alt="Smiley face"><br><br>Description: circuitvalencia's photo on Instagram<br><br><form action="http://instagram.com/p/gX2h7inXxz/"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">Ride Through Magazine #18</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQCexwDPpey_CsWp&w=154&h=154&url=http%3A%2F%2Fridethrough.motogp.com%2FlastIssue.jpg" alt="Smiley face"><br><br>Description: The best motorbike magazine you've ever imagine. Best bikes, best riders, best vídeos, best pictures and best readers. #EnjoyTheRide<br><br><form action="http://ridethrough.motogp.com/"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-a.ak.fbcdn.net/hphotos-ak-frc3/1460985_10152078326140769_33544347_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152078326140769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">motogp.com · Lorenzo: ‘It’s going to be exciting…’</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQBSg3Jmk_SWDTlq&w=154&h=154&url=http%3A%2F%2Fphotos.motogp.com%2F2013%2F11%2F05%2F99lorenzo_s1d4562_preview_big_169.jpg" alt="Smiley face"><br><br>Description: Jorge Lorenzo heads into this weekend’s MotoGP™ finale in Valencia with a chance of becoming the tenth rider to claim three premier class world title. The Yamaha Factory Racing man will be up against Repsol Honda Team’s Marc Marquez.<br><br><form action="http://www.motogp.com/en/news/2013/Lorenzo+Its+going+to+be+exciting"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">motogp.com · Marquez neck ‘much better’ ahead of finale</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQCRTJC2OX3UA8dp&w=154&h=154&url=http%3A%2F%2Fphotos.motogp.com%2F2013%2F11%2F05%2F93marquez_s1d1025_preview_big_169.jpg" alt="Smiley face"><br><br>Description: Marc Marquez is poised to make history in Valencia this weekend, heading to the Ricardo Tormo circuit with a final chance to become the first rookie premier class World Champion in 35 years. He is suffering less pain in his neck, having crashed heavily in Sunday morning practice for the Japanese Gra...<br><br><form action="http://www.motogp.com/en/news/2013/Marquez+neck+much+better+ahead+of+finale"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">motogp.com · Aprilia to return to MotoGP™ in 2016</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQCP2fswh4DGhz-T&w=154&h=154&url=http%3A%2F%2Fphotos.motogp.com%2F2013%2F11%2F05%2Faprilia-logo_preview_big_169.jpg" alt="Smiley face"><br><br>Description: Aprilia will return to the MotoGP™ World Championship as a factory entrant in 2016, it has been announced by parent company Piaggio.<br><br><form action="http://www.motogp.com/en/news/2013/aprilia+back+to+MotoGP+from+2016"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-h.ak.fbcdn.net/hphotos-ak-ash3/545970_10152075946540769_2079799378_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152075946540769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">motogp.com · Pedrosa aims for fourth win in Valencia</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQASxCYnPjlPE0Xi&w=154&h=154&url=http%3A%2F%2Fphotos.motogp.com%2F2013%2F11%2F05%2F26pedrosa_s1d1877_preview_big_169.jpg" alt="Smiley face"><br><br>Description: Should Dani Pedrosa triumph in Valencia this weekend, the Repsol Honda Team rider would have won the season-closing MotoGP™ event on no less than four occasions.<br><br><form action="http://www.motogp.com/en/news/2013/Pedrosa+aims+for+fourth+win+in+Valencia"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-b.ak.fbcdn.net/hphotos-ak-prn2/1390746_10152073013400769_1033500903_s.png" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152073013400769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr>

            </div><!--col 1-->

            <div class="col-md-2 lightgrey"><!--col 2-->
                <h4 style="text-align:center">Facebook Like Box</h4><hr>
                <div id="dvFb1" style="width:100%;">
                    <div class="fb-like-box" data-href="http://www.facebook.com/motogp" data-width="600" data-height="2000" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>
                </div>
            </div><!--col 2-->

            <div class="col-md-2 lightgrey"><!--col 3-->
                <h4 style="text-align:center">Twitter List</h4><hr>    
                <a class="twitter-timeline" href="https://twitter.com/waxogg/motogp" data-chrome="noheader transparent" data-height="2000" data-widget-id="398346130703912960">Tweets from @waxogg/motogp</a>
                <script>!function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>

                </div><!--col 3-->
                <div class="col-md-2 lightgrey"><!--col 4-->
                    <h4 style="text-align:center">Twitter Search</h4><hr>    
                 <a class="twitter-timeline" href="https://twitter.com/search?q=%23motogp" data-chrome="noheader transparent" data-height="2000" data-widget-id="398347465310482432">Tweets about "#motogp"</a>
                <!--script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script-->



    </div><!--col 4-->

</div>


  <hr>

      <footer>
        <p text-align="center">&copy;Soreleg.biz</p>
      </footer>
    </div> <!-- /container -->


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/bootstrap/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>


<?php }} ?>

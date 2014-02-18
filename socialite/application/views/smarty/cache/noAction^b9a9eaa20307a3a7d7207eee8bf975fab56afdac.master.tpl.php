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
  'unifunc' => 'content_528015de5c8545_61182326',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528015de5c8545_61182326')) {function content_528015de5c8545_61182326($_smarty_tpl) {?><!DOCTYPE html>
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
                        <li><a href="loginfacebook.php">Facebook Log In</a></li>
                                    <li><a href="loginTwitter.php">Twitter Log In</a></li>
                       
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
        
    
        </div><!--row-->
<div class="row">
    
            <div class="col-md-2 col-md-offset-2 lightgrey"><!--col 1-->
                <h4 style="text-align:center">Facebook Custom Feed</h4><hr>
                <br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-b.ak.fbcdn.net/hphotos-ak-frc3/1461820_10152090486515769_184252930_s.png" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152090486515769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">2013 FIM MotoGP™ Awards Ceremony</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQCW2rV3qE_KZNdb&w=130&h=130&url=http%3A%2F%2Fi1.ytimg.com%2Fvi%2F_8hDaNGHt0o%2Fhqdefault.jpg%3Ffeature%3Dog" alt="Smiley face"><br><br>Description: Following the final round of the 2013 MotoGP™ World Championship held on Sunday afternoon at the Ricardo Tormo Circuit near Valencia, the FIM MotoGP™ Awards ...<br><br><form action="http://www.youtube.com/watch?v=_8hDaNGHt0o"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">motogp.com · Follow MotoGP™ testing live from Valencia</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQAFArqfugeu-wnV&w=154&h=154&url=http%3A%2F%2Fphotos.motogp.com%2F2013%2F11%2F10%2Faerial_valencia_preview_big_169.jpg" alt="Smiley face"><br><br>Description: Marc Marquez may have amazingly wrapped up the world title in only his first season, but MotoGP™ will be back in action this week as pre-season testing begins for 2014. Every wheel turn and all of the novelties can be enjoyed on motogp.com.<br><br><form action="http://www.motogp.com/en/news/2013/Follow+MotoGP+testing+live+from+Valencia"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-h.ak.fbcdn.net/hphotos-ak-prn2/1450213_10152090006010769_896125004_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152090006010769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-f.ak.fbcdn.net/hphotos-ak-ash3/536979_10152089922075769_808458473_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152089922075769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-d.ak.fbcdn.net/hphotos-ak-frc1/1000268_10152089839620769_1206141273_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152089839620769&set=a.10150677276000769.422908.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-a.ak.fbcdn.net/hphotos-ak-prn2/1465279_10152089838410769_60343574_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152089838410769&set=a.10150677276000769.422908.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-c.ak.fbcdn.net/hphotos-ak-prn2/1425529_10152089706605769_1642947476_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152089706605769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-g.ak.fbcdn.net/hphotos-ak-frc1/1426618_10152089601595769_209761506_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152089601595769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-a.ak.fbcdn.net/hphotos-ak-ash3/1441502_10152089590190769_1068464027_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152089590190769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">Instagram</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQDJblpKCCrxiXnW&w=154&h=154&url=http%3A%2F%2Fdistilleryimage11.ak.instagram.com%2Fffdd48fa4a0f11e3ac3e12e658c54b75_7.jpg" alt="Smiley face"><br><br>Description: motogp's photo on Instagram<br><br><form action="http://instagram.com/p/giV50wvN9D/"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">Marc Marquez 2013 Moto3™ World Champion</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQAP0r73AHxLAn_k&w=130&h=130&url=http%3A%2F%2Fi1.ytimg.com%2Fvi%2FKdCTVZ-y2RQ%2Fmaxresdefault.jpg%3Ffeature%3Dog" alt="Smiley face"><br><br>Description: Marc Marquez 2013 Moto3™ World Champion<br><br><form action="http://www.youtube.com/watch?v=KdCTVZ-y2RQ"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-c.ak.fbcdn.net/hphotos-ak-prn2/1380361_10152089483585769_2071036971_s.png" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152089483585769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">LorenzoVsMarquez: Lorenzo clashes with Pedrosa</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQCSMRpFeUNgUz8h&w=130&h=130&url=http%3A%2F%2Fi1.ytimg.com%2Fvi%2F0Uyis1hz_mE%2Fmaxresdefault.jpg%3Ffeature%3Dog" alt="Smiley face"><br><br>Description: The start of the final Grand Prix of the season sees Jorge Lorenzo and Dani Pedrosa fighting for the lead, with a contact between the two riders to be invest...<br><br><form action="http://youtu.be/0Uyis1hz_mE"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">Instagram</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQDfURt5YVhu9Xn_&w=154&h=154&url=http%3A%2F%2Fdistilleryimage11.ak.instagram.com%2F692560624a0c11e39b120a26978b387e_7.jpg" alt="Smiley face"><br><br>Description: motogp's photo on Instagram<br><br><form action="http://instagram.com/p/giS9q9vN5D/"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-e.ak.fbcdn.net/hphotos-ak-frc3/996663_10152089286755769_2086479784_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152089286755769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">motogp.com · The ultimate Online Test for MotoGP™ Experts, MotoGP™ League</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQAuUUlYe_qvSdsT&w=154&h=154&url=http%3A%2F%2Fcss.motogp.com%2Fimg%2Ffanzone%2Fleague%2Fmotogp_league_header.jpg%3Fversion%3D2013-11-10.r00fd85bcd4" alt="Smiley face"><br><br>Description: The official website of MotoGP, Moto2 and Moto3, includes Live Video coverage, premium content and all the latest news.<br><br><form action="http://www.motogp.com/en/Fan+Zone/MotoGP+League"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-h.ak.fbcdn.net/hphotos-ak-prn1/644348_10152089267880769_1495481931_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152089267880769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-d.ak.fbcdn.net/hphotos-ak-ash3/578115_10152089163510769_1966757177_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152089163510769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-f.ak.fbcdn.net/hphotos-ak-prn2/988761_10152088969460769_1074012572_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152088969460769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">motogp.com · Terol fastest as Espargaro crashes in Warm-Up</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQCU4bBeGlSLxDHK&w=154&h=154&url=http%3A%2F%2Fphotos.motogp.com%2F2013%2F11%2F10%2F18terol_s5d8148_preview_big_169.jpg" alt="Smiley face"><br><br>Description: It was Nico Terol who topped Sunday morning’s Moto2™ Warm-Up in Valencia, while World Champion and pole-sitter Pol Espargaro unexpectedly crashed at Turn 2.<br><br><form action="http://www.motogp.com/en/news/2013/terol+moto2+warmup+valencia"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://photos-a.ak.fbcdn.net/hphotos-ak-frc3/1452018_10152088895920769_1383264447_s.jpg" alt="Smiley face"><br><br><form action="http://www.facebook.com/photo.php?fbid=10152088895920769&set=a.10150706659035769.427460.58201805768&type=1&relevant_count=1"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">motogp.com · Viñales tops Warm-Up ahead of title shootout</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQB_xmzB1TtyRORx&w=154&h=154&url=http%3A%2F%2Fphotos.motogp.com%2F2013%2F11%2F10%2F25vinales_s5d7198_preview_big_169.jpg" alt="Smiley face"><br><br>Description: Maverick Viñales was quickest as the Moto3™ field enjoyed its last track action in Valencia ahead of Sunday’s title-decider. The Team Calvo rider topped the Warm-Up session from Jonas Folger, while fellow title battlers Alex Rins and Luis Salom ended proceedings in respective third and fifth places.<br><br><form action="http://www.motogp.com/en/news/2013/vinales+moto3+warm+up+valencia"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr><h3 style="text-align:center">Instagram</h3><hr><br><img style="display: block; margin-left: auto; margin-right: auto" src="http://external.ak.fbcdn.net/safe_image.php?d=AQDze-VF6TYZT_gQ&w=154&h=154&url=http%3A%2F%2Fdistilleryimage9.ak.instagram.com%2F3d8ca47849db11e3a52d0eccbb6729d6_7.jpg" alt="Smiley face"><br><br>Description: motogp's photo on Instagram<br><br><form action="http://instagram.com/p/ghqru2vNwR/"><button type="submit" class="btn btn-primary btn-sm btn-lg btn-block">Go to story</button></form><hr>

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

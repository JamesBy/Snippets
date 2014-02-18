<?php /* Smarty version Smarty-3.1.15, created on 2013-11-07 16:58:04
         compiled from "application\views\smarty\templates\landingcontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55775272a9e23af4a8-51324142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0be42c05ebd5115fc1121d2a2410c6daef75e0ae' => 
    array (
      0 => 'application\\views\\smarty\\templates\\landingcontent.tpl',
      1 => 1383829855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55775272a9e23af4a8-51324142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5272a9e23b71a6_47374051',
  'variables' => 
  array (
    'facebookLoggedIn' => 0,
    'twitterLoggedIn' => 0,
    'googleLoggedIn' => 0,
    'motogpfeed' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5272a9e23b71a6_47374051')) {function content_5272a9e23b71a6_47374051($_smarty_tpl) {?><!--
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
    <?php if ($_smarty_tpl->tpl_vars['facebookLoggedIn']->value) {?> 
        <div class="col-md-2 col-md-offset-2">
            <div class= "fb-like" data-href="http://www.soreleg.biz" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
            <hr><div class= "fb-share-button" data-href="http://www.soreleg.biz" data-type="button_count"></div>
            <hr><div class="fb-follow" data-href="http://www.facebook.com/zuck" data-colorscheme="light" data-layout="button_count" data-show-faces="false"></div>    
        </div>
        <div class="col-md-2">
            <div class= "fb-comments" data-href="http://www.soreleg.biz" data-numposts="1" data-width="100px"></div>
        </div>
    <?php }?>    
    <?php if ($_smarty_tpl->tpl_vars['twitterLoggedIn']->value&&$_smarty_tpl->tpl_vars['facebookLoggedIn']->value) {?>
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
            <?php if ($_smarty_tpl->tpl_vars['googleLoggedIn']->value) {?>
                <div class="col-md-2"><!--col 3-->
                    <!-- Place this tag where you want the +1 button to render. -->
                    <div class="g-plusone"></div>
                     <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                    
                        <!-- Place this tag after the last +1 button tag. -->
                        <script type="text/javascript">
                            (function() {
                                var po = document.createElement('script');
                                po.type = 'text/javascript';
                                po.async = true;
                                po.src = 'https://apis.google.com/js/plusone.js';
                                var s = document.getElementsByTagName('script')[0];
                                s.parentNode.insertBefore(po, s);
                            })();
                        </script> 
                    </div><!--col 3-->
                <?php }?>
                        <div class="col-md-2"><!--col 4--></div><!--col 4-->
                        <div class="col-md-2"><!--col 4--></div><!--col 5-->

    <?php } elseif ($_smarty_tpl->tpl_vars['twitterLoggedIn']->value) {?>
        <div class="col-md-2 col-md-offset-2"><!--col 3--></div><!--col 3-->
        <div class="col-md-2"><!--col 4--></div><!--col 4-->
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
        <?php if ($_smarty_tpl->tpl_vars['googleLoggedIn']->value) {?>
        <div class="col-md-2"><!--col 3-->
            <!-- Place this tag where you want the +1 button to render. -->
            <div class="g-plusone"></div>
             <div class="g-plus" data-action="share" data-annotation="bubble"></div>
            
                <!-- Place this tag after the last +1 button tag. -->
                <script type="text/javascript">
                    (function() {
                        var po = document.createElement('script');
                        po.type = 'text/javascript';
                        po.async = true;
                        po.src = 'https://apis.google.com/js/plusone.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(po, s);
                    })();
                </script> 
            </div><!--col 3--><?php }?>
            <div class="col-md-2"><!--col 4-->


            </div><!--col 5-->


    <?php } elseif ($_smarty_tpl->tpl_vars['googleLoggedIn']->value) {?>
        <div class="col-md-2 col-md-offset-2"><!--col 3--></div><!--col 3-->
        <div class="col-md-2"><!--col 4--></div><!--col 4-->
        <div class="col-md-2"><!--col 2--></div>
        <div class="col-md-2"><!--col 3-->
        <!-- Place this tag where you want the +1 button to render. -->
        <div class="g-plusone"></div>
        <div class="g-plus" data-action="share" data-annotation="bubble"></div>
        
            <!-- Place this tag after the last +1 button tag. -->
            <script type="text/javascript">
                (function() {
                    var po = document.createElement('script');
                    po.type = 'text/javascript';
                    po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(po, s);
                })();
            </script> 
        </div><!--col 3-->

        <?php }?>

        </div><!--row-->
<div class="row">
    
            <div class="col-md-2 col-md-offset-2 lightgrey"><!--col 1-->
                <h4 style="text-align:center">Facebook Custom Feed</h4><hr>
                <?php echo $_smarty_tpl->tpl_vars['motogpfeed']->value;?>


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
<?php }} ?>

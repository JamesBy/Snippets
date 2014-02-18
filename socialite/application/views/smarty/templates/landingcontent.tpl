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
    {if $facebookLoggedIn} 
        <div class="col-md-2 col-md-offset-2">
            <div class= "fb-like" data-href="http://www.soreleg.biz" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
            <hr><div class= "fb-share-button" data-href="http://www.soreleg.biz" data-type="button_count"></div>
            <hr><div class="fb-follow" data-href="http://www.facebook.com/zuck" data-colorscheme="light" data-layout="button_count" data-show-faces="false"></div>    
        </div>
        <div class="col-md-2">
            <div class= "fb-comments" data-href="http://www.soreleg.biz" data-numposts="1" data-width="100px"></div>
        </div>
    {/if}    
    {if $twitterLoggedIn and $facebookLoggedIn}
        <div class="col-md-2"><!--col 2-->
            {literal}<script>!function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');</script>{/literal}
                <a href="https://twitter.com/share" class="twitter-share-button" data-via="waxogg">Tweet</a>
                <hr><a href="https://twitter.com/waxogg" class="twitter-follow-button" data-show-count="false">Follow @waxogg</a>
                <hr><a href="https://twitter.com/intent/tweet?button_hashtag=TwitterStories" class="twitter-hashtag-button" data-related="waxogg">Tweet #TwitterStories</a>
                <hr><a href="https://twitter.com/intent/tweet?screen_name=waxogg" class="twitter-mention-button" data-related="waxogg">Tweet to @waxogg</a>
            </div><!--col 2-->
            {if $googleLoggedIn}
                <div class="col-md-2"><!--col 3-->
                    <!-- Place this tag where you want the +1 button to render. -->
                    <div class="g-plusone"></div>
                     <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                    {literal}
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
                    </div><!--col 3-->{/literal}
                {/if}
                        <div class="col-md-2"><!--col 4--></div><!--col 4-->
                        <div class="col-md-2"><!--col 4--></div><!--col 5-->

    {elseif $twitterLoggedIn}
        <div class="col-md-2 col-md-offset-2"><!--col 3--></div><!--col 3-->
        <div class="col-md-2"><!--col 4--></div><!--col 4-->
        <div class="col-md-2"><!--col 2-->
        {literal}<script>!function(d, s, id) {
               var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = p + '://platform.twitter.com/widgets.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'twitter-wjs');</script>{/literal}
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="waxogg">Tweet</a>
        <hr><a href="https://twitter.com/waxogg" class="twitter-follow-button" data-show-count="false">Follow @waxogg</a>
        <hr><a href="https://twitter.com/intent/tweet?button_hashtag=TwitterStories" class="twitter-hashtag-button" data-related="waxogg">Tweet #TwitterStories</a>
        <hr><a href="https://twitter.com/intent/tweet?screen_name=waxogg" class="twitter-mention-button" data-related="waxogg">Tweet to @waxogg</a>
        </div><!--col 2-->
        {if $googleLoggedIn}
        <div class="col-md-2"><!--col 3-->
            <!-- Place this tag where you want the +1 button to render. -->
            <div class="g-plusone"></div>
             <div class="g-plus" data-action="share" data-annotation="bubble"></div>
            {literal}
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
            </div><!--col 3-->{/literal}{/if}
            <div class="col-md-2"><!--col 4-->


            </div><!--col 5-->


    {elseif $googleLoggedIn}
        <div class="col-md-2 col-md-offset-2"><!--col 3--></div><!--col 3-->
        <div class="col-md-2"><!--col 4--></div><!--col 4-->
        <div class="col-md-2"><!--col 2--></div>
        <div class="col-md-2"><!--col 3-->
        <!-- Place this tag where you want the +1 button to render. -->
        <div class="g-plusone"></div>
        <div class="g-plus" data-action="share" data-annotation="bubble"></div>
        {literal}
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
        </div><!--col 3-->{/literal}

        {/if}

        </div><!--row-->
<div class="row">
    
            <div class="col-md-2 col-md-offset-2 lightgrey"><!--col 1-->
                <h4 style="text-align:center">Facebook Custom Feed</h4><hr>
                {$motogpfeed}

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
                {literal}<script>!function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>{/literal}

                </div><!--col 3-->
                <div class="col-md-2 lightgrey"><!--col 4-->
                    <h4 style="text-align:center">Twitter Search</h4><hr>    
                 <a class="twitter-timeline" href="https://twitter.com/search?q=%23motogp" data-chrome="noheader transparent" data-height="2000" data-widget-id="398347465310482432">Tweets about "#motogp"</a>
                {literal}<!--script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script-->{/literal}



    </div><!--col 4-->

</div>

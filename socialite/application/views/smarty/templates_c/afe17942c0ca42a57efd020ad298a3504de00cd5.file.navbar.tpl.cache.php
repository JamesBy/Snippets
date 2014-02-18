<?php /* Smarty version Smarty-3.1.15, created on 2013-11-07 13:54:17
         compiled from "application\views\smarty\templates\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178465269997eb10a65-69708885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe17942c0ca42a57efd020ad298a3504de00cd5' => 
    array (
      0 => 'application\\views\\smarty\\templates\\navbar.tpl',
      1 => 1383828840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178465269997eb10a65-69708885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5269997eb148e3_89822058',
  'variables' => 
  array (
    'facebookLoggedIn' => 0,
    'twitterLoggedIn' => 0,
    'googleLoggedIn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269997eb148e3_89822058')) {function content_5269997eb148e3_89822058($_smarty_tpl) {?><div class="container">
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
            <?php if ($_smarty_tpl->tpl_vars['facebookLoggedIn']->value==false) {?>
            <li><a href="loginfacebook.php">Facebook Log In</a></li>
            <?php } else { ?>
            <li class="fbLoggedin"><a href="javascript://" onclick="fbLogOut()">Facebook Log Out</a></li>
            
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['twitterLoggedIn']->value==false) {?>
            <li><a href="loginTwitter.php">Twitter Log In</a></li>
            <?php } else { ?>
            <li class="fbLoggedin"><a href="javascript://" onclick="twLogOut()">Twitter Log Out</a></li>
            
            <?php }?>
           
            <?php if ($_smarty_tpl->tpl_vars['googleLoggedIn']->value==false) {?>
            <li><a href="loginGoogle.php">Google Log In</a></li>
            <?php } else { ?>
            <li class="fbLoggedin"><a href="javascript://" onclick="ggLogOut()">Google Log Out</a></li>
            
            <?php }?>

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
</div>    <?php }} ?>

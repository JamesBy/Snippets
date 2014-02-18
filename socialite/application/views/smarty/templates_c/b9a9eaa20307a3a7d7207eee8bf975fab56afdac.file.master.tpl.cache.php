<?php /* Smarty version Smarty-3.1.15, created on 2013-11-07 13:38:44
         compiled from "application\views\smarty\templates\master.tpl" */ ?>
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
  ),
  'nocache_hash' => '78005269997ea419e6-87369629',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5269997eac2862_72700196',
  'variables' => 
  array (
    'contentarea' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269997eac2862_72700196')) {function content_5269997eac2862_72700196($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['contentarea']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>

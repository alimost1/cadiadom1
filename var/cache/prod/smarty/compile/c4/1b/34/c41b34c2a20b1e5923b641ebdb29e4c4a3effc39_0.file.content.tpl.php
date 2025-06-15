<?php
/* Smarty version 4.3.4, created on 2025-06-13 21:35:41
  from '/var/www/html/admin426lb4zyhofmuvrwrg3/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_684c7d8dad2d90_99175579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c41b34c2a20b1e5923b641ebdb29e4c4a3effc39' => 
    array (
      0 => '/var/www/html/admin426lb4zyhofmuvrwrg3/themes/default/template/content.tpl',
      1 => 1739192952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684c7d8dad2d90_99175579 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}

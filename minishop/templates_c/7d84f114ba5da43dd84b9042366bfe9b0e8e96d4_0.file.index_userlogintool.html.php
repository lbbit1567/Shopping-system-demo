<?php
/* Smarty version 3.1.32, created on 2019-03-26 17:37:40
  from 'C:\UNISERVER\UniServerZ\www\minishop\templates\user_login\index_userlogintool.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c99f2e40b13e8_85538798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d84f114ba5da43dd84b9042366bfe9b0e8e96d4' => 
    array (
      0 => 'C:\\UNISERVER\\UniServerZ\\www\\minishop\\templates\\user_login\\index_userlogintool.html',
      1 => 1547837378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user_login/index_usertool.html' => 1,
    'file:user_login/index_userlogin.html' => 1,
  ),
),false)) {
function content_5c99f2e40b13e8_85538798 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card card-primary bg-secondary">
  <h5 class="card-header text-white">功能表</h5>
  <div class="card-body text-white">
    <?php if (isset($_smarty_tpl->tpl_vars['user_id']->value)) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:user_login/index_usertool.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
      <?php $_smarty_tpl->_subTemplateRender('file:user_login/index_userlogin.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
  </div>
</div>
<?php }
}

<?php
/* Smarty version 3.1.32, created on 2019-01-19 02:39:42
  from 'C:\UNISERVER\UniServerZ\www\minishop\templates\user_login\index_usertool.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c421d6e840929_74436692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a21ef256e0ea804b0d8cca26541c5c785d07220e' => 
    array (
      0 => 'C:\\UNISERVER\\UniServerZ\\www\\minishop\\templates\\user_login\\index_usertool.html',
      1 => 1547836733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c421d6e840929_74436692 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='alert alert-success text-white'  style='background-color:#808A87; border:0px #FFFFFF'><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
 歡迎登入</div>
<a href="index.php" id="loginbtn" class="btn btn-block btn-secondary">回首頁</a>
<a href="tool.php?op=goods_form" id="loginbtn" class="btn btn-block btn-secondary">發佈商品</a>
<a href="index.php?op=user_logout" id="loginbtn" class="btn btn-block btn-secondary">登出</a>
<?php }
}

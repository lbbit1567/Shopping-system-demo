<?php
/* Smarty version 3.1.32, created on 2019-01-10 18:00:28
  from 'C:\UNISERVER\UniServerZ\www\minishop\templates\user_login\index_userlogin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c3717bc8559a9_08485828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf005bf310d0c49353f62f4b58c649476deccc9b' => 
    array (
      0 => 'C:\\UNISERVER\\UniServerZ\\www\\minishop\\templates\\user_login\\index_userlogin.html',
      1 => 1547114417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3717bc8559a9_08485828 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form" action="user.php" method="post" role="form" class="form-horizontal">

  <div class="form-group row">
    <label class="col-md-4 col-form-label">帳號:</label>
    <div class="col-md-8">
      <input type="text" name="user_id" id="user_id"  placeholder="請輸入帳號" value="" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-4 col-form-label">密碼:</label>
    <div class="col-md-8">
      <input type="password" name="user_passwd" id="user_passwd"  placeholder="請輸入密碼" value=""  class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-4">
      <a href="user.php?op=user_form" class="btn btn-info">註冊</a>
    </label>
    <div class="col-md-8">
      <input type="hidden" name="op" value="user_login">
      <button type="submit" name="button" class="btn btn-primary btn-block">確認</button>
    </div>
  </div>

  </form>
<?php }
}

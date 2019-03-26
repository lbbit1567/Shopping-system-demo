<?php
/* Smarty version 3.1.32, created on 2018-06-28 16:36:25
  from 'C:\UNISERVER\UniServerZ\www\minishop\templates\index_userlogin.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b349e09c75b14_80443795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4503524da984e476da6fa791aba2be905633072d' => 
    array (
      0 => 'C:\\UNISERVER\\UniServerZ\\www\\minishop\\templates\\index_userlogin.html',
      1 => 1530174952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b349e09c75b14_80443795 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card card-primary bg-secondary">
  <h5 class="card-header text-white">功能表</h5>
  <div class="card-body text-white">
    <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
      <div class='alert alert-success text-white'  style='background-color:#808A87; border:0px #FFFFFF'><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 歡迎登入</div>
      <a href="index.php" id="loginbtn" class="btn btn-block btn-secondary">回首頁</a>
      <a href="tool.php" id="loginbtn" class="btn btn-block btn-secondary">發佈商品</a>
      <a href="index.php?op=user_logout" id="loginbtn" class="btn btn-block btn-secondary">登出</a>
    <?php } else { ?>
    <div class="card-title">帳號</div>
      <form class="form" action="index.php" method="post" role="form" class="form-horizontal">
        <input type="text" name="username"  placeholder="請輸入帳號" value="">
        <input type="hidden" name="op" value="user_login">
        <br><br><button type="submit" name="button" class="btn btn-primary">確認</button>
      </form>
    <?php }?>
  </div>
</div>
<?php }
}

<?php
/* Smarty version 3.1.32, created on 2019-01-10 17:06:22
  from 'C:\UNISERVER\UniServerZ\www\minishop\templates\display_user.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c370b0ebe8bd6_62083223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6661f7556d4335b2aa3cd268f0de5e57f53dc5b' => 
    array (
      0 => 'C:\\UNISERVER\\UniServerZ\\www\\minishop\\templates\\display_user.html',
      1 => 1546764355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c370b0ebe8bd6_62083223 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>會員資料</h1>
<table class="table table-hover table-bordered table-responsive">
  <tr>
    <td>姓名</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
  </tr>
  <tr>
    <td>帳號</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
  </tr>
  <tr>
    <td>Email</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
</td>
  </tr>
  <tr>
    <td>性別</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_sex'];?>
</td>
  </tr>
  <tr>
    <td>電話</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_tel'];?>
</td>
  </tr>
  <tr>
    <td>地址</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_zip'];
echo $_smarty_tpl->tpl_vars['user']->value['user_county'];
echo $_smarty_tpl->tpl_vars['user']->value['user_district'];
echo $_smarty_tpl->tpl_vars['user']->value['user_address'];?>
</td>
  </tr>
</table>

  <div class="text-center">
    <a href="user.php?op=user_form&user_sn=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
" class="btn btn-primary">編輯帳號</a>
  </div>
<?php }
}

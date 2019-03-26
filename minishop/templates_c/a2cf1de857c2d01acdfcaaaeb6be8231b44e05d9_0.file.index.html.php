<?php
/* Smarty version 3.1.32, created on 2018-07-25 17:22:27
  from 'C:\UNISERVER\UniServerZ\www\minishop\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b584153a14d14_70086301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2cf1de857c2d01acdfcaaaeb6be8231b44e05d9' => 
    array (
      0 => 'C:\\UNISERVER\\UniServerZ\\www\\minishop\\templates\\index.html',
      1 => 1532510545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:goods_form.html' => 1,
    'file:goods_display.html' => 1,
    'file:user_form.html' => 1,
    'file:display_user.html' => 1,
    'file:goods_list.html' => 1,
    'file:user_login/index_userlogintool.html' => 1,
  ),
),false)) {
function content_5b584153a14d14_70086301 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang=zh-Hant dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>測試BOOTSTARP</title>
    <?php echo '<script'; ?>
 src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" charset="utf-8">
  </head>
  <body>
    <div class="container">
      <div id="shop_head">
        <a href="index.php"><img src="images/banner3.jpg" alt="測試標題" class="img-responsive" style="display:block; margin:auto;"></a>
      </div>

      <div id="shop_main" class="row">
        <div class="col-md-9 col-sm-8">
          <?php if ($_smarty_tpl->tpl_vars['op']->value == "goods_form") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:goods_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "goods_display") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:goods_display.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "user_form") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:user_form.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "display_user") {?>
            <?php $_smarty_tpl->_subTemplateRender("file:display_user.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender("file:goods_list.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            共有 <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 件商品
            <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

          <?php }?>
        </div>
        <div class="col-md-3 col-sm-4">
          <?php $_smarty_tpl->_subTemplateRender('file:user_login/index_userlogintool.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
      </div>

      <div id="shop_foot">
        <div>網頁開發:劉思祺</div>
        <div>版權所有 Copyright © 劉思祺 All Rights Reserved.</div>
      </div>

    </div>

  </body>
</html>
<?php }
}

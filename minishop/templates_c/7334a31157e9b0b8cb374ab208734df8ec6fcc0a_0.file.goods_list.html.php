<?php
/* Smarty version 3.1.32, created on 2018-07-22 17:30:20
  from 'C:\UNISERVER\UniServerZ\www\minishop\templates\goods_list.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b544eace93333_01840984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7334a31157e9b0b8cb374ab208734df8ec6fcc0a' => 
    array (
      0 => 'C:\\UNISERVER\\UniServerZ\\www\\minishop\\templates\\goods_list.html',
      1 => 1532251817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b544eace93333_01840984 (Smarty_Internal_Template $_smarty_tpl) {
?><!--自改格式 -->
<div class="row">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_goods']->value, 'goods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
?>
  <div  class="col-sm-6 col-md-4">
    <div class="card border-secondary mb-3 bg-secondary">
        <a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
"></a>
        <div class="card-body">
          <h5 class="card-title"><a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" style="color:white;"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</a></h5>
          <div class="row">
            <div class="col-md-6 text-white">售價: <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
</div>
            <div class="col-md-6 text-white">人氣: <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</div>
          </div>
        </div>
    </div>
  </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<!-- 原書格式 -->
<!--
<div class="row">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_goods']->value, 'goods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->value) {
?>
    <div class="card col-sm-6 col-md-4">
      <div class="card boder-secondary mb-3 " style="max-width: 18rem;">
        <a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
"></a>
        <div class="caption">
          <div style="height : 60px;">
            <h3><a href="index.php?goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</a></h3>
          </div>
          <div class="row">
            <div class="col-md-6">售價: <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
</div>
          </div>
        </div>
      </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
-->
<?php }
}

<?php
/* Smarty version 3.1.32, created on 2018-07-22 19:58:40
  from 'C:\UNISERVER\UniServerZ\www\minishop\templates\goods_form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5471700e5e91_79726063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d6f34fe286693d0f723456e20820a772884527' => 
    array (
      0 => 'C:\\UNISERVER\\UniServerZ\\www\\minishop\\templates\\goods_form.html',
      1 => 1532260160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5471700e5e91_79726063 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['goods']->value['goods_sn']) && $_smarty_tpl->tpl_vars['goods']->value['goods_sn'] > 0) {?>
<h1>編輯商品</h1>
<?php } else { ?>
<h1>發佈商品</h1>
<?php }?>
<form action="tool.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
  <?php echo '<script'; ?>
 src="ckeditor4/ckeditor.js"><?php echo '</script'; ?>
> <!-- ck編輯器引入 -->

  <div class="form-group row">
    <label class="col-md-2 control-label text-right">商品名稱: </label>
    <div class="col-md-8">
      <input type="text" class="form-control" name="goods_title" id="goods_title" placeholder="請輸入商品名稱" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-2 control-label text-right">商品說明: </label>
    <div class="col-md-8">
      <textarea class="form-control" name="goods_content" id="goods_content" placeholder="請輸入商品說明"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</textarea>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-2 text-right">價格: </label>
    <div class="col-md-8">
      <input type="text" class="form-control" name="goods_price" id="goods_price" placeholder="請輸入商品價格" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-2 control-label text-right">商品圖片: </label>
    <div class="col-md-8">
      <input type="file" name="goods_pic" id="goods_pic">
      <?php if (isset($_smarty_tpl->tpl_vars['goods']->value['pic'])) {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
">
      <?php }?>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-2 control-label"></label>
    <div class="col-md-10">
      <!-- 判斷是新增或是編輯 -->
      <?php if (isset($_smarty_tpl->tpl_vars['goods']->value['goods_sn']) && $_smarty_tpl->tpl_vars['goods']->value['goods_sn'] > 0) {?>
        <input type="hidden" name="op" value="update_goods">
        <input type="hidden" name="goods_sn" value="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
">
      <?php } else { ?>
        <input type="hidden" name="op" value="insert_goods">
      <?php }?>
      <button type="submit" class="btn btn-primary">儲存商品</button>
    </div>
  </div>

</form>
<!-- ck5編輯器 -->
<!--
<?php echo '<script'; ?>
>
ClassicEditor
    .create( document.querySelector( '#goods_content' ) )
    .then( goods_content => {
        console.log( goods_content );
    } )
    .catch( error => {
        console.error( error );
    } );
<?php echo '</script'; ?>
>
-->

<!-- ck4編輯器 -->
<?php echo '<script'; ?>
>
  CKEDITOR.replace( 'goods_content' );
<?php echo '</script'; ?>
>
<?php }
}

<?php
/* Smarty version 3.1.32, created on 2018-07-22 17:33:04
  from 'C:\UNISERVER\UniServerZ\www\minishop\templates\goods_display.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b544f502d4b34_04106976',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a775aa851bced121828d1d138a2fe9ef5f48749f' => 
    array (
      0 => 'C:\\UNISERVER\\UniServerZ\\www\\minishop\\templates\\goods_display.html',
      1 => 1532251794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b544f502d4b34_04106976 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
  <div class="col-md-6">
    <img class="img-thumbnail"  src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['pic'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
">
  </div>
  <div class="col-md-6">
    <h2><span class="badge badge-secondary"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_title'];?>
</span></h2>
    <p>售價: <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
 元</p>
    <p>人氣: <?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_counter'];?>
</p>
      <?php if (isset($_smarty_tpl->tpl_vars['username']->value)) {?>
      <div class="pt-5 mt-5 offset-md-6">
        <div class="pt-5 mt-2">
          <a href="tool.php?op=goods_form&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-warning">編輯商品</a>
          <a href="tool.php?op=delete_goods&goods_sn=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sn'];?>
" class="btn btn-danger" onclick="deletewarging()">刪除商品</a>
        </div>
      </div>
      <?php }?>
  </div>
</div>



<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item ">
        <a class="nav-link active" id="goods-tab" data-toggle="pill" href="#goods" role="tab" aria-controls="goods" aria-selected="true">商品介紹</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="return-tab" data-toggle="pill" href="#return" role="tab" aria-controls="return" aria-selected="false">退換須知</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="service-tab" data-toggle="pill" href="#service" role="tab" aria-controls="service" aria-selected="false">售後服務</a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="goods" role="tabpanel" aria-labelledby="goods-tab"><p><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</p></div>
      <div class="tab-pane fade" id="return" role="tabpanel" aria-labelledby="return-tab"><p>如您需要退換商品 請填單</p></div>
      <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab"><p>目前沒有售後服務</p></div>
    </div>
  </div>
</div>
<?php }
}

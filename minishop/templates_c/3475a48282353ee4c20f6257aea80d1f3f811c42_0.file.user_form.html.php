<?php
/* Smarty version 3.1.32, created on 2019-01-06 17:00:07
  from 'C:\UNISERVER\UniServerZ\www\minishop\templates\user_form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c31c397da4398_60575258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3475a48282353ee4c20f6257aea80d1f3f811c42' => 
    array (
      0 => 'C:\\UNISERVER\\UniServerZ\\www\\minishop\\templates\\user_form.html',
      1 => 1546765202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c31c397da4398_60575258 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>會員註冊</h1>

<?php echo '<script'; ?>
 language="javascript" src="jQuery-TWzipcode-master/jquery.twzipcode.min.js"><?php echo '</script'; ?>
>  <!--引用地址套件的JS-->
<?php echo '<script'; ?>
 language="javascript" src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-zh_TW.js"><?php echo '</script'; ?>
> <!--引用檢查表格JS -->
<?php echo '<script'; ?>
 language="javascript" src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
> <!--引用檢查表格JS的中文語系 -->
<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"> <!--引用檢查表格JS的外觀 -->

<?php echo '<script'; ?>
 type="text/javascript">
  $(document).ready(function(){
    $("#addr_form").twzipcode();
    $("#user_form").validationEngine({});
  });
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['user']->value['user_sn'] > 0) {?>
  <input type="hidden" name="op" value="update_user">
  <input type="hidden" name="user_sn" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_sn'];?>
">
<?php } else { ?>
  <input type="hidden" name="op" value="insert_user">
<?php }?>

<form action="user.php" id="user_form" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">

  <div class="form-group row">
    <label class="col-md-2 col-form-label text-right" for="user_name">姓名: </label>
    <div class="col-md-4">
      <input type="text" class="form-control validate[required]" name="user_name" id="user_name" placeholder="請輸入姓名" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
">
    </div>
    <label class="col-md-2 col-form-label text-right" for="user_email">Email: </label>
    <div class="col-md-4">
      <input type="text" class="form-control validate[required,custom[email]]" name="user_email" id="user_email" placeholder="請輸入Email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
">
    </div>
  </div>

  <div class="form-group row">
    <label class="col-md-2 col-form-label text-right" for="user_id">帳號: </label>
    <div class="col-md-4">
      <input type="text" class="form-control validate[required,custom[onlyLetterNumber]]" name="user_id" id="user_id" placeholder="請輸入帳號" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
">
    </div>
    <label class="col-md-2 col-form-label text-right" for="user_passwd">密碼: </label>
    <div class="col-md-4 has-error">
      <input type="password" class="form-control <?php if ($_smarty_tpl->tpl_vars['user']->value['user_passwd'] == '') {?>validate[required,custom[onlyLetterNumber]]<?php }?>" name="user_passwd" id="user_passwd" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_passwd'];?>
"
      placeholder="<?php if ($_smarty_tpl->tpl_vars['user']->value['user_passwd']) {?>需要改密碼時填寫<?php } else { ?>請輸入密碼<?php }?>">
    </div>
  </div>


  <div class="form-group row">
    <label class="col-md-2 col-form-label text-right" for="user_tel">電話: </label>
    <div class="col-md-4">
      <input type="text" class="form-control validate[required,custom[phone]]" name="user_tel" id="user_tel" placeholder="請輸入電話號碼" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_tel'];?>
">
    </div>
    <label class="col-md-2 col-form-label text-right" for="user_sex">性別: </label>
    <div class="col-md-4">
      <label class="radio-inline col-form-label col-md-4 ">
        <input type="radio" name="user_sex" id="user_sex_1" required="required" value="先生"<?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex'] == '先生') {?>checked<?php }?>>先生
      </label>
      <label class="radio-inline col-form-label col-md-4">
        <input type="radio"  name="user_sex" id="user_sex_0" required="required" value="女士"<?php if ($_smarty_tpl->tpl_vars['user']->value['user_sex'] == '女士') {?>checked<?php }?>>女士
      </label>
    </div>
  </div>

  <div class="form-group row" id="addr_form">
    <label class="col-md-2 col-form-label text-right" for="user_address">地址: </label>
      <div class="col-md-2">
        <div data-role="zipcode" data-name="user_zip" data-value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_zip'];?>
" data-required="1|0" data-style="form-control"></div>
      </div>
      <div class="col-md-2">
        <div data-role="county" data-name="user_county" data-value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_county'];?>
" data-required="1|0" data-style="form-control"></div>
      </div>
      <div class="col-md-2">
        <div data-role="district" data-name="user_district" data-value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_district'];?>
" data-required="1|0" data-style="form-control"></div>
      </div>

      <div class="col-md-4">
        <input type="text" class="form-control validate[required]" name="user_address" id="user_address" placeholder="請輸入地址" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_address'];?>
">
      </div>
  </div>


    <div class="text-center">
      <input type="hidden" name="op" value="insert_user">
      <button type="submit" class="btn btn-primary">註冊</button>
    </div>

</form>
<?php }
}

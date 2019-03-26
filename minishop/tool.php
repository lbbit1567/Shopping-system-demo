<?php
  require_once 'header.php';

  if (!isset($_SESSION['user_id'])) {
    header("location:index.php");
    exit();
  }
  /* 流程控制 */
  $op = isset($_REQUEST['op']) ? my_fliter($_REQUEST['op'],"string") : '';
  $goods_sn = isset($_REQUEST['goods_sn']) ? my_fliter($_REQUEST['goods_sn'],"int") : 0;

  switch ($op) {
    case 'goods_form':
      goods_form($goods_sn);
      break;

    case 'update_goods':
      update_goods($goods_sn);
      header("location:index.php?goods_sn={$goods_sn}");
      exit;
      break;

    case 'delete_goods':
      delete_goods($goods_sn);
      header("location:index.php");
      exit;
      break;

    case 'insert_goods':
      $goods_sn = insert_goods();
      save_goods_pic($goods_sn);
      header("location:index.php");
      break;
  }

  /* 輸出 */
  require_once 'display.php';

  //tool.php之發布商品
  function goods_form($goods_sn=""){ //複製index.php的display_goods函數做修改
    global $mysqli,$smarty;
    if (empty($goods_sn)){
      return;
    }

    $sql ="SELECT * FROM `goods` WHERE `goods_sn` = '{$goods_sn}' ";
    $result = $mysqli->query($sql) or die ($mysqli->connect_error);
    $goods = $result->fetch_assoc();
    $goods['pic'] = get_goods_pic($goods_sn,'thumbs');
    $smarty->assign('goods',$goods);
  }

  function insert_goods(){
    global $mysqli;

    foreach ($_POST as $var_name => $var_val){
      $$var_name = $mysqli->real_escape_string($var_val);
    }
    $goods_date = date("Y-m-d H:i:s");

    $sql = "INSERT INTO `goods` (`goods_title` , `goods_content` , `goods_price` , `goods_counter` , `goods_date`) VALUES
    ('{$goods_title}' , '{$goods_content}' , '{$goods_price}' , '0' , '{$goods_date}') ";

    $mysqli->query($sql) or die ($mysqli->connect_error);
    $goods_sn = $mysqli->insert_id;

    return  $goods_sn;
  }

  function update_goods($goods_sn){
    global $mysqli;

    foreach ($_POST as $var_name => $var_val){
      $$var_name = $mysqli->real_escape_string($var_val);
    }
    $goods_date = date("Y-m-d H:i:s");

    $sql = "UPDATE `goods` SET
    `goods_title` = '{$goods_title}',
    `goods_content` = '{$goods_content}',
    `goods_price` = '{$goods_price}',
    `goods_date` = '{$goods_date}'
    WHERE `goods_sn` = '{$goods_sn}'";
    $mysqli->query($sql) or die ($mysqli->connect_error);
    save_goods_pic($goods_sn);

  }
  //刪除
  function delete_goods($goods_sn){
    global $mysqli;

    $sql = "DELETE FROM `goods` WHERE `goods_sn` = '{$goods_sn}'";
    $mysqli->query($sql) or die ($mysqli->connect_error);
    delete_goods_pic($goods_sn);
  }

?>

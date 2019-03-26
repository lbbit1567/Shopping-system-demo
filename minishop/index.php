<?php
  /* 引入 */
  require_once 'header.php';

  /* 流程控制 */
  $op = isset($_REQUEST['op']) ? my_fliter($_REQUEST['op'],"string") : '';
  $goods_sn = isset($_REQUEST['goods_sn']) ? my_fliter($_REQUEST['goods_sn'],"int") : 0 ;

  switch ($op) {
    case 'user_login':
      user_login();
      header("location:{$_SERVER['PHP_SELF']}");
      exit();
      break;

    case 'user_logout':
      unset($_SESSION['user_id']);
      header("location:{$_SERVER['PHP_SELF']}");
      exit();
      break;


    default:
      if($goods_sn){
        $op = 'goods_display';
        display_goods($goods_sn);
      }else{
        list_goods();
      }
      break;
  }

  /* 輸出 */
  require_once 'display.php';

  /* 函數區 */
  function user_login() {   //登入
    global $smarty;
    if (isset($_POST['user_id'])) {
        $_SESSION['user_id']=$_POST['user_id'];
        $smarty->assign('user_id',$_POST['user_id']);
    }
  }

  function list_goods() {   //商品列表
    global $smarty,$mysqli;
    include_once "PageBar.php";
    $sql = "SELECT * FROM `goods` ORDER BY `goods_date` desc";
    $PageBar  = getPageBar($sql , 6 , 15);
    $bar      = $PageBar['bar'];
    $sql      = $PageBar['sql'];
    $total    = $PageBar['total'];
    $result=$mysqli->query($sql) or die($mysqli->connect_error);
    $i = 0;

    while($goods = $result->fetch_assoc()){
      $all_goods[$i]  =$goods;
      $all_goods[$i]['pic'] = get_goods_pic($goods['goods_sn'],'thumbs');
      $i++;
    }
    $smarty->assign('all_goods',$all_goods);
    $smarty->assign('total',$total);
    $smarty->assign('bar',$bar);
  }


  function display_goods($goods_sn=""){
    global $mysqli,$smarty;

    add_goods_counter($goods_sn);
    $sql ="SELECT * FROM `goods` WHERE `goods_sn` = '{$goods_sn}' ";
    $result = $mysqli->query($sql) or die ($mysqli->connect_error);
    $goods = $result->fetch_assoc();
    $goods['pic'] = get_goods_pic($goods_sn);
    $smarty->assign('goods',$goods);
  }

?>

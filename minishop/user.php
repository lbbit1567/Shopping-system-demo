<?php
  /* 引入 */
  require_once 'header.php';


  /* 流程控制 */
  $op = isset($_REQUEST['op']) ? my_fliter($_REQUEST['op'],"string") : '';
  $goods_sn = isset($_REQUEST['goods_sn']) ? my_fliter($_REQUEST['goods_sn'],"int") : 0 ;
  $user_sn = isset($_REQUEST['user_sn']) ? my_fliter($_REQUEST['user_sn'],"int") : 0 ;
  $user_id = isset($_REQUEST['user_id']) ? my_fliter($_REQUEST['user_id'],"string") : 0 ;

  
  switch ($op) {
    case 'user_form':
      user_form($user_sn);
      break;

    case 'insert_user':
      $user_sn = insert_user();
      header("location:{$_SERVER['PHP_SELF']}?op=display_user&user_sn=$user_sn");
      exit;
      break;

    case 'display_user':
      display_user($user_sn);
      break;

    case 'update_user':
      update_user();
      header("location:{$_SERVER['PHP_SELF']}?op=display_user&user_sn=$user_sn");
      exit;
      break;

    case "delete_user":
      delete_user();
      header("location:{$_SERVER['PHP_SELF']}");
      exit();
      break;

    case 'user_login':
      $login = user_login($user_id);
      if($login){
        header("location:{$_SERVER['PHP_SELF']}");
      }else{
        header("location:index.php");
      }
      exit();
      break;

    case 'user_logout':
      unset($_SESSION['user_id']);
      header("location:{$_SERVER['PHP_SELF']}");
      exit();
      break;

    default:
    break;


  }

  /* 輸出 */
  require_once 'display.php';

  /* 函數區 */

  //註冊
  function user_form($user_sn){

  }

  //儲存
  function insert_user(){
    global $mysqli;
    foreach($_POST as $var_name => $var_val){
      $$var_name=$mysqli->real_escape_string($var_val);
    }

    $user_passwd = password_hash($_POST['user_passwd'],PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users` (`user_name` , `user_id` , `user_passwd` , `user_email` , `user_sex` , `user_tel` , `user_zip` , `user_county` , `user_district` , `user_address`) VALUES
    ('{$user_name}' , '{$user_id}' , '{$user_passwd}' ,'{$user_email}' ,'{$user_sex}' ,'{$user_tel}' ,'{$user_zip}' ,'{$user_county}' ,'{$user_district}' ,'{$user_address}')";

    $mysqli->query($sql) or die ($mysqli->connect_error);
    $user_sn              = $mysqli->insert_id;
    $_SESSION['user_sn']  = $user_sn;
    $_POST['user_sn']     = $user_sn;
    $_SESSION['user']     = $_POST;
    return $user_sn;
  }

  //觀看
  function display_user(){
    global $mysqli,$smarty;
    $sql    = "SELECT * FROM `users` WHERE `user_sn` = '{$user_sn}'";
    $result = $mysqli->query($sql) or die ($mysqli->connect_error);
    $user   = $result->fetch_assoc();
    $smarty->assign('user',$user);
  }

  //更新
  function update_user(){
    global $mysqli;
    foreach ($_POST as $var_title => $var_value){
      $$var_title = $mysqli->real_escape_string($_POST[$var_title]);
    }
    $passwd_update = '';
    if (!empty($_POST['user_passwd'])){
      $user_passwd = password_hash($_POST['user_passwd'],PASSWORD_DEFAULT);
      $passwd_update = "`user_passwd` = `{$user_passwd}`,";
    }
    $sql = "UPDATE `users` SET
    `user_name` = '{$user_name}',
    `user_id` = '{$user_id}',
    {$passwd_update}
    `user_email` = '{$user_email}',
    `user_sex` = '{$user_sex}',
    `user_tel` = '{$user_tel}',
    `user_zip` = '{$user_zip}',
    `user_county` = '{$user_county}',
    `user_district` = '{$user_district}',
    `user_address` = '{$user_address}'
    WHERE `user_sn` = '{$user_sn}'";
    $mysqli->query($sql) or die ($mysqli->connect_error);
  }

  //刪除
  function delete_user($user_sn){

  }


  function user_login($user_id) {   //登入
    global $smarty;
    global $mysqli;

    if(empty($user_id)){
       return false;
    }

    $sql    ="SELECT * FROM `users` WHERE `user_id` = '{$user_id}'";
    $result = $mysqli->query($sql) or die($mysqli->connect_error);
    $user   = $result->fetch_assoc();

    if(!empty($user)){
      if(password_verify($_POST['user_passwd'],$user['user_passwd'])){
        $_SESSION['user_sn'] = $user['user_sn'];
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user']    = $user;
        return true;
      }
    }



    return false;
  }



?>

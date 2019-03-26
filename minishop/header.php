<?php
  session_start();
  require_once "config.php";  //儲存admin管理員帳號和資料庫設定
  require_once "function.php"; //過濾字串等函式
  require_once 'smarty/libs/smarty.class.php'; //引入smarty引擎
  $smarty = new Smarty;

  $mysqli = new mysqli(_DB_HOST , _DB_ID , _DB_PW , _DB_NAME);
  if($mysqli->connect_error){
    die('連接失敗 ('.$mysqli->connect_errno.')'.$mysqli->connect_error);
  }
  $mysqli->set_charset("utf-8");
?>

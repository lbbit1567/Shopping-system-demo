<?php
  $isAdmin = $isUser = false;
  if(isset($_SESSION['user_sn'])){
    $isUser = true;
    $smarty->assign('user_id',$user_id);
    if(in_array($_SESSION['user']['user_id'],$admin_array)){
      $isAdmin = true;
    }
  }
  $smarty->assign('op',$op);
  $smarty->display('index.html');
?>

<?php
  function my_fliter($var,$type){
    switch ($type){
      case 'string':
          $var = isset($var) ? filter_var($var,FILTER_SANITIZE_MAGIC_QUOTES) : '';
          break;
      case 'url':
          $var = isset($var) ? filter_var($var,FILTER_SANITIZE_URL) : '';
          break;
      case 'email':
          $var = isset($var) ? filter_var($var,FILTER_SANITIZE_EMAIL) : '';
          break;
      case 'int':
      default:
          $var = isset($var) ? filter_var($var,FILTER_SANITIZE_NUMBER_INT) : '';
          break;
    }
    return $var;
  }

  function save_goods_pic($goods_sn = ""){
    include_once "uploads/class.upload.php";
    $pic = new Upload($_FILES['goods_pic'], 'zh-TW');

    //大圖
    if($pic->uploaded){
      $pic->file_new_name_body  = $goods_sn;
      $pic->file_overwrite      = true;
      $pic->image_resize        = true;
      $pic->image_x             = 600;
      $pic->image_y             = 400;
      $pic->image_convert       = 'png';
      $pic->Process('uploads/goods/');
      if(!$pic->processed){
        return 'error : '.$pic->error;
      }
    //縮圖
      $pic->file_new_name_body  = $goods_sn;
      $pic->file_overwrite      = true;
      $pic->image_resize        = true;
      $pic->image_x             = 300;
      $pic->image_y             = 200;
      $pic->image_convert       = 'png';
      $pic->image_ratio_crop    = true;
      $pic->Process('uploads/thumbs/');
      if(!$pic->processed){
        $pic->Clean();
      }else{
        return 'error : '.$pic->error;
      }
    }
  }

  function mk_dir($dir=""){
    if(empty($dir)) die ("無目錄名稱");

    if(!is_dir($dir)){
      umask(000);

      if(!mkdir($dir,0777)) die ("建立目錄失敗");
    }
  }

  function get_goods_pic($goods_sn="",$type="goods"){
    $filename = "uploads/{$type}/{$goods_sn}.png";
    if(file_exists($filename)){
      return $filename;
    }else{
      $size = ($type == 'thumbs') ? "300x200" : "600x400";
      return "https://dummyimage.com/{$size}/526969/efeff2.gif&text=無商品照片";
    }
  }

  function delete_goods_pic($goods_sn=""){
    if (file_exists("uploads/goods/{$goods_sn}.png")){
      unlink("uploads/goods/{$goods_sn}.png");
    }
    if (file_exists("uploads/thumbs/{$goods_sn}.png")){
      unlink("uploads/thumbs/{$goods_sn}.png");
    }

  }

  function add_goods_counter($goods_sn){ //利用COOKIE統計人氣不重複 12小時重置一次
    global $mysqli;

    if($_COOKIE[${goods_sn}] != "true"){
      $sql="UPDATE `goods` SET `goods_counter` = `goods_counter` + 1 WHERE `goods_sn` = '{$goods_sn}'";
      $mysqli->query($sql) or die($mysqli->connect_error);
      setcookie(${goods_sn},"true",time()+43200);
    }

  }

?>

  <!--刪除商品時的按鈕-->
  <script>
    function deletewarging() {
        if (confirm("確定要刪除嗎?")) {
          window.event.returnValue=true;
        } else {
          window.event.returnValue=false;
        }
    }
  </script>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>第一測試</title>
  </head>
  <body>
    <h1>第一標題</h1>
    <?php echo "現在時間是".date("Y-m-d h:i:s");
      $temp = "新的字串";
      echo "以下測試為{$temp}";
      echo "<br>歡迎你 {$_REQUEST['gname']}";
      echo "<br>這個地方為 {$_REQUEST['place']}";
    ?>
  </body>
</html>

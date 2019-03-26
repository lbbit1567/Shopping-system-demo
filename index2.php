<!DOCTYPE html>
<html lang=zh-Hant dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>測試BOOTSTARP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <div calss="row">
        <div class="col-md-9 col-sm-8">主內容區</div>
        <div class="col-md-3 col-sm-4">工具列區</div>
      </div>
    <form class="form" action="index.php" method="post">
    帳號:  <input type="text" name="username"  value="">
      <button type="submit" name="button">送出</button>
    </form>
    <?php
      if (isset($_POST['username'])) {
        echo "{$_POST['username']} 歡迎光臨";
      }
     ?>
  </body>
</html>

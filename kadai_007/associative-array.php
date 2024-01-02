<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <p>
      <?php
      //連想配列に値を代入する
      $vege_data = ['name' => 'onion', 'price' => 200, 'weight' => 160];
      print_r ($vege_data);
      ?>
    </p>
  </body>
</html>
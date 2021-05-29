<?php
    // スーパーグローバル変数にデータは格納される
    if (!empty($_GET) && isset($_GET['text'])){
        $text = $_GET['text'];
      }
    //   $_GET送信が存在し、textの中身が空ではない時

    //   データベースと接続
      $dsn = 'mysql:dbname=chatform;host=localhost';
      $user = 'root';
      $password='';
      $dbh = new PDO($dsn, $user, $password);
      $dbh->query('SET NAMES utf8');

    //   SQL文の実行
      $sql = 'INSERT INTO `chats` SET `content` = ?';
    //   ?⇨プリテイトステートメント SQLインジェクションから身を守るために使用
    // サイバー攻撃
      $content[] =  $text;
    //   $dontentの配列を作り出している
      $stmt = $dbh->prepare($sql);
      $stmt->execute($content);
    //   ⇨executeの特徴（引数には配列を入れる）

      $stmt2 = $dbh->prepare('SELECT * FROM chats');
      $stmt2->execute();
      $records = $stmt2->fetchAll(PDO::FETCH_ASSOC);
      var_dump($records)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="">
  <input type=" text" name="text"><br>
  <input type="submit" value="送信ボタン">
  </form>

  <?phpforeach
  <div>
   <p><?php echo $record['content'];?></p>
  </div>
</body>
</html>
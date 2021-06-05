<?php
    // $_POST,$_GET ⇨　スーパーグローバル変数
    // formにデータが送信された時
    // ['nickname'⇨'ikemi','email'⇨'hiroshi.ikemi@gmail.com','content'⇨'おはよう']
    // nickname,email,content ⇨　formタグの中のname属性値
    // 連想配列
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];
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
        <h1>入力確認画面</h1>
        <h2>以下の内容でお間違えなければ次へ進むを押してください</h2>
        <p><?php echo $nickname;?></p>
        <p><?php echo $email;?></p>
        <p><?php echo $content;?></p>

        <form action="thanks.php" method="post">
          <input type="hidden" name='nickname' value="<?php echo $nickname?>">
          <input type="hidden" name='email' value="<?php echo $email?>">
          <input type="hidden" name='content' value="<?php echo $content?>">
          <input type="submit" value="次へ進む">
        </form>
    </body>
    </html>
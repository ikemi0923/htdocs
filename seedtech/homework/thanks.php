<?php
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    // var_dump($nickname);
    // デバック
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
        <h1>お問い合わせありがとうございました</h1>
        <h2>お問い合せ詳細</h2>
        <p><?php echo $nickname;?></p>
        <p><?php echo $email;?></p>
        <p><?php echo $content;?></p>
    </body>
    </html>
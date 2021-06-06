<?php
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    // １．データベースに接続する
    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    // ２．SQL文を実行する
    $sql = 'INSERT INTO `survey`(`nickname`,`email`, `content`) VALUES ("'. $nickname.'", "'.$email.'", "'.$content.'")';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    // ３．データベースを切断する
    $dbh = null;
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
        <h3>
        <input type="button" onclick="location.href='index.php';" value="戻る">
        </h3>
    </body>
    </html>
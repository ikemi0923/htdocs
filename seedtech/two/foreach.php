<?php
    $products_name = ['ジーパン', 'スカート','ビール'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- コロン構文 -->
    <?php foreach($products_name as $product_name): ?>
        <div>
        <h1>商品名</h1>
        <span><?php echo $product_name;?></span>
        </div>
    <?php endforeach;?>
</body>
</html>
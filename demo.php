<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<?php
require_once 'fruit.php';
// print_r($arr);
?>
<?php 
// 1. 把html改成php 
// 2. 引入fruit.php文件,可以获取到我们需要的数据
// require_once 'fruit.php';

// echo '<pre>';
// print_r($arr);
// echo '</pre>';


?>

<body>
    <div class="header">
        传智网上水果超市
    </div>
    <div class="container">
        <p>
            <a href="#">水果</a>
            <a href="#">干果</a>
            <a href="#">蔬菜</a>
        </p>

        <ul>
            <?php foreach ($arr as $v) { ?>
            <li>
                <img src="<?php echo $v['path'] ?>" alt="">
                <a href=" #"><?php echo $v['name'] ?></a>
            </li>
            <?php 
          } ?>
        </ul>

    </div>
    <div class="footer">
        传智播客 版权所有
    </div>
</body>

</html> 
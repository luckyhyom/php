<?php require('libs/print.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php require('libs/header.php'); ?>

    <?php 
    $list = scandir('./data');
    $a = 0;
    while ($a <= count($list)) {
        if(!isset($list['.'])){
            if(!isset($list['..'])){
                echo "<li><a href=\"index.php?id=$list[$a]\">$list[$a]</a></li>";
            }
        }
        $a +=1;
    }
    ?>

    <h2> <?php  print_title(); ?></h2>
    
    

    <?php 
    function sum2($left, $right){
        return $left+$right;
    }
    //페이지에 접속했을때 함수가 실행되면서 파일이 생성된다.
    file_put_contents('test.txt',sum2(1,2));
    ?>

    <a href="./create.php">Create</a>
    <!-- php 띄워서 -->
    <?php if(isset($_GET['id'])){ ?>
    <a href="./update.php">update</a>
    <?php }?>

    <form action="./create.php" method="post">
        <input type="text" name="title"></br>
        <textarea name="description"></textarea>
        <input type="submit">
    </form>

</body>
</html>
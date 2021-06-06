<?php 
function print_title(){
    if(isset($_GET['id'])){ echo $_GET['id']; }else{ echo "WELCOME!";}
}
function print_content(){
    if(isset($_GET['id'])){ echo file_get_contents('./data/'.$_GET['id'],true); }else{ echo "WELCOME!";}
}
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
    <h2> <?php  print_content(); ?></h2>
    

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

    <form action="./update_process.php.php" method="post">
        <input name="old_title" type="hidden" value="<?php $_GET['id'] ?>">
        <input type="text" name="title" value="<?php $_GET['id'] ?>"></br>
        <textarea name="description">
            <?php file_get_contents($_GET['id'],true); ?>
        </textarea>
        <input type="submit">
    </form>

</body>
</html>
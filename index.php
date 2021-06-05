<?php 

function print_title(){
    if(isset($_GET['id'])){ echo $_GET['id']; }else{ echo "WELCOME!";}
}

echo $_GET['describe'];
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
        # code...
        echo "<li><a href=\"index.php?id=$list[$a]\">$list[$a]</a></li>";
        $a +=1;
    }

    

    ?>
    <h2> <?php  print_title(); ?></h2>

    <?php 
    function sum($left, $right){
        print($left+$right);
    }
    sum(1,2);
    ?>

    <?php 
    function sum2($left, $right){
        return $left+$right;
    }

    //페이지에 접속했을때 함수가 실행되면서 파일이 생성된다.
    file_put_contents('test.txt',sum2(1,2));
    ?>


    <h1> <?php print_title() ?> </h1>

    <a href="./create.php">Create</a>

    <form action="./create.php" method="post">
        <input type="text" name="title"></br>
        <textarea name="description"></textarea>
        <input type="submit">
    </form>

</body>
</html>
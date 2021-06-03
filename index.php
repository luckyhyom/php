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

    <h2>
    <?php 
    
    if(isset($_GET['id'])){
        echo $_GET['id'];
    }else{
        echo "WELCOME!";
    }


    ?>
    </h2>
</body>
</html>
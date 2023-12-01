<?php
    error_reporting (0);
    if(isset($_POST['sub'])){
        $num=$_POST['num'];
        $count=1;
        for($i=1;$i<=$num;$i++){
            $count=$count*$i;
            $res=$count;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <lable>Emter a number</lable>
        <input type="number" name="num"><br>
        <button type="submit" name="sub">Calculate Factorial</button>
    </form>
    <p>Result is:<?php echo $res;?></p>
</body>
</html>
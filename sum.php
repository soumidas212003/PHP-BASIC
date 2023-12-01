<?php
    error_reporting (0);
    if(isset($_POST['sum'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $res=$num1+$num2;
    }else if(isset($_POST['sub'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $res=$num1-$num2;
    }else if(isset($_POST['mult'])){
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $res=$num1*$num2;
    }else{
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $res=$num1/$num2;
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
        <lable>Emter 1st number</lable>
        <input type="number" name="num1"><br>
        <lable>Emter 2nd number</lable>
        <input type="number" name="num2"><br>
        <button type="submit" name="sum">ADD</button>
        <button type="submit" name="sub">SUB</button>
        <button type="submit" name="mult">MUL</button>
        <button type="submit" name="div">DIV</button>
    </form>
    <p>Result is:<?php echo $res;?></p>
</body>
</html>
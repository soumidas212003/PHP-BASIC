
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
        <button type="submit" name="sub">Submit</button>
    </form>
    <p>Result is:</p>
</body>
<?php
    error_reporting (0);
    if(isset($_POST['sub'])){
        $num=$_POST['num'];
        $a=0;
        $b=1;
        $c=0;
        for($i=1;$i<=$num;$i++){
            echo $a."<br>";
            $c=$a+$b;
            $a=$b;
            $b=$c;
        }      
    }
?>
</html>
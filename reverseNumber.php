<?php
    error_reporting (0);
    if(isset($_POST['sub'])){
        $num=$_POST['num'];
        $res=0;
        $temp=$num;
        while($num>0){
            $r=$num%10; 
            $res=($res*10)+$r; 
            $num=(int)($num/10);
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
        <button type="submit" name="sub">Submit</button>
    </form>
    <p>Result is:<?php echo $res;?></p>
</body>
</html>
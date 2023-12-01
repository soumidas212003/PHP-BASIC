<?php
    error_reporting (0); #153
    if(isset($_POST['sub'])){
        $num=$_POST['num'];
        $sum=0;
        $count=strlen($num);
        $temp=$num;
        while($num>0){
            $r=$num%10;  
            $sum+=$r**$count;
            $num=$num/10;
        }
        if($temp==$sum){
            $show = "Armstrong Number";
        }else{
            $show = "Not an Armstrong Number";
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
        <button type="submit" name="sub">Calculate Armstrong</button>
    </form>
    <p>Result is:<?php echo $show;?></p>
</body>
</html>
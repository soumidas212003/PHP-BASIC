<?php
    error_reporting (0);
    if(isset($_POST['sub'])){
        $num=$_POST['num'];
        for($i=2;$i<$num/2;$i++){
            if($num%$i==1){
                $res= "Prime Number";
            }else{
                $res= "Not prime Number";
            }
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
        <button type="submit" name="sub">Prime or Not Prime</button>
    </form>
    <p>Result is:<?php echo $res;?></p>
</body>
</html>
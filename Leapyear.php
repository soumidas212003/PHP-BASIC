<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <lable>Emter a year</lable>
        <input type="number" name="num"><br>
        <button type="submit" name="sub">Submit</button>
    </form>
    <p>Result is:</p>
</body>
<?php
    error_reporting (0);
    if(isset($_POST['sub'])){
        $num=$_POST['num'];
        if(($num%4==0 && $num%100!=0) || ($num%400==0) ){
            echo "Leapyear";
        }  else{
            echo "Not Leapyear";
        }  
    }
?>
</html>
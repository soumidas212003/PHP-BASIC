<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <lable>Emter a string</lable>
        <input type="text" name="text"><br>
        <button type="submit" name="sub">Submit</button>
    </form>
    <p>Result is:</p>
    <?php
    error_reporting (0);
    if(isset($_POST['sub'])){
        $text=$_POST['text'];
        $len=strlen($text);
        for($i=$len-1;$i>=0;$i--){
            echo $text[$i];
        }             
    }
?>
</body>
</html>
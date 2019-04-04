<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
function isPrimenumber($n)
{
    if ($n < 2) {
        return false;
    } else  {
        for ($index = 2; $index < $n; $index++) {
            if ($n % $index == 0) {
                return false;
            }
        }
        return true;
    }
}
for($index=0;$index<100;$index++){
    if(isPrimenumber($index)){
        echo "So nguyen to".$index."<br>";
    }
}

?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$files = glob('../jpg/*.jpg');

//foreach ($files as $key => $value) {
//	echo '<img src='.$value . ' width=300px>';
//    echo $value.'<br>';
//}


echo '<ul>';
echo '<img id = "pic" src = ""  width = 30% height = 30%  >';
echo '<script>';
echo 'const img = [';

    foreach ($files as $key => $value) {
        echo '"'.$value.'",';
    }

    echo '];';
    echo 'let count = -1;';
    echo 'jpgChange();';
    echo 'function jpgChange()';
    echo '{';
        echo 'count++;';
        echo 'if (count == img.length) count = 0;';
        echo 'pic.src = img[count];';
        echo 'setTimeout("jpgChange()",1000);';
        echo '}';
        echo '</script>';
        echo '</ul>';

?>
</body>
</html>
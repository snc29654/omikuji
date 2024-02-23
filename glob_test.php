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

foreach ($files as $key => $value) {
	echo '<img src='.$value . ' width=300px>';
    echo $value.'<br>';
}
?>
</body>
</html>
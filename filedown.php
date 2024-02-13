<?php
// ファイル
$file_name = './jpg/0.jpg';  //仮に同一フォルダに「img1.jpg」の画像ファイルを置く
$type = 'image/jpeg';
 
// base64エンコード
$img = base64_encode(file_get_contents($file_name));

file_put_contents("./debug.log", $img);

// JSONデータを出力

echo json_encode($img);
exit();
?>
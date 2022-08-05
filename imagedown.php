<?php
// ファイル
$ran=rand(0,3);
if($ran==0){
    $file_name = './wait.jpg';  //仮に同一フォルダに「img1.jpg」の画像ファイルを置く
}
if($ran==1){
    $file_name = './wait.jpg';  //仮に同一フォルダに「img1.jpg」の画像ファイルを置く
}
if($ran==2){
    $file_name = './wait.jpg';  //仮に同一フォルダに「img1.jpg」の画像ファイルを置く
}
if($ran==3){
    $file_name = './wait.jpg';  //仮に同一フォルダに「img1.jpg」の画像ファイルを置く
}
$type = 'image/jpeg';
 
// base64エンコード
$img = base64_encode(file_get_contents($file_name));
// Ajax応答データ
$list = array("img" => $img, "type" => $type);
// JSONデータを出力
sleep(1);
echo json_encode($list);
exit();
?>
<?php
// ファイル
$ran=rand(0,4);
if($ran==0){
    $file_name = './0.jpg';  //仮に同一フォルダに「img1.jpg」の画像ファイルを置く
}
if($ran==1){
    $file_name = './1.jpg';  //仮に同一フォルダに「img1.jpg」の画像ファイルを置く
}
if($ran==2){
    $file_name = './2.jpg';  //仮に同一フォルダに「img1.jpg」の画像ファイルを置く
}
if($ran==3){
    $file_name = './3.jpg';  //仮に同一フォルダに「img1.jpg」の画像ファイルを置く
}
if($ran==4){
    $file_name = './4.jpg';  //仮に同一フォルダに「img1.jpg」の画像ファイルを置く
}


$type = 'image/jpeg';
 
// base64エンコード
$img = base64_encode(file_get_contents($file_name));
// Ajax応答データ
$list = array("img" => $img, "type" => $type);
// JSONデータを出力
sleep(5);
echo json_encode($list);
exit();
?>
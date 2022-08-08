<?php
// ファイル
$ran=rand(0,8);
if($ran==0){
    $file_name = './0.jpg';  //大吉
}
if(($ran==1)||($ran==2)){
    $file_name = './1.jpg';  //吉
}
if(($ran==3)||($ran==4)||($ran==5)||($ran==6)){
    $file_name = './2.jpg';  //小吉
}
if($ran==7){
    $file_name = './3.jpg';  //凶
}
if($ran==8){
    $file_name = './4.jpg';  //大凶
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
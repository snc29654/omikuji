<?php
// ファイル

$files = glob('./jpg/*.jpg');
$imax=count($files)-1;


$ran=rand(0,$imax);
$i=0;
foreach ($files as $key => $value) {
    
    if($i==$ran){
        $file_name=$value;
        break;
    }
    $i++;
}


$type = 'image/jpeg';
 
// base64エンコード
$img = base64_encode(file_get_contents($file_name));
// Ajax応答データ
$list = array("img" => $img, "type" => $type);
// JSONデータを出力
//sleep(5);
echo json_encode($list);
exit();
?>
<?php
// $id = $_POST['id']; ・・・古い記述方法
$id = filter_input(INPUT_POST, 'id');	

   $file_name = '1.jpg';
   $data = base64_encode(file_get_contents($file_name));
   $base64_src = 'data: ' . $file_ext . ';base64,' . $data;
$array = [ $file_name , $base64_src];

header("Content-type: application/json; charset=UTF-8");
echo json_encode($array);
exit;
?>
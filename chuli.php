<?php

//接收来的文件
$fileinfo = $_FILES['wenjian'];

//查看文件信息
//print_r($fileinfo);

//获取文件临时路径
$filetmp_path = $fileinfo["tmp_name"];

//把文件从临时路径移动到正经路径         
move_uploaded_file($filetmp_path,"./pic/".$filename);

?>
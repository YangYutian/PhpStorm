<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/19/2018
 * Time: 8:39 AM
 */
$allowedExts = array("gif","jpeg","jpg","png","txt");
$temp = explode(".",$_FILES["file"]["name"]);
$extension = end($temp);
if (in_array($extension,$allowedExts)){
    if ($_FILES["file"]["error"] > 0){
        echo "错误: " . $_FILES["file"]["error"] . "<br>";
    }else{
        echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
        echo "文件类型：" . $_FILES["file"]["type"] . "<br>";
        echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
        if (file_exists("upload/" . $_FILES["file"]["name"])){
            echo $_FILES["file"]["name"] . "文件已经存在.";
        }else{
            move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
            echo "文件存储在：" . "upload/" . $_FILES["file"]["name"];
        }
    }
}else{
    echo "非法的文件格式";
}
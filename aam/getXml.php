<?php
$users = array(
array('username'=>"Jay Chou","age"=>32),
array('username'=>'Lakers','age'=>21),
array('username'=>'Bruce Lee','age'=>24)
    );
//把数组拼接xml格式的字符串进行输出
$xml = "";
$xml .= "<?xml version='1.0' encoding='utf-8' ?>";
$xml .= "<persons>";
//循环创建person节点
foreach($users as $user){
    $xml .= "<person>";
    $xml .= "<username>".$user['username']."</username>";
    $xml .= "<age>".$user['age']."</age>";
    $xml .= "</person>";

}
$xml .= "</persons>";

//设置一个响应头,xml格式的数据
header("Content-type:text/html;charset=utf-8");
//把拼接好的xml格式的数据输出
echo $xml;
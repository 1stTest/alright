<?php
//组装php数据
$users = array(
array('username'=>'BruceLee','age'=>24),
array('username'=>'Lakers','age'=>21),
array('username'=>'JayChou','age'=>32)
    );
//把数组拼接成一个xml格式的字符串
    $xml = "<?xml version = '1.0' encoding='utf-8' ?>";
    $xml .= "<persons>";
foreach($users as $k => $v){
    //循环拼接person节点
    $xml .= "<person>";
    //子标签username,age
    $xml .= "<username>".$v['username']."</username>";
    $xml .= "<age>".$v['age']."</age>";
    $xml .= "</person>";
    
    }
$xml .= "</persons>";
header("Content-type:text/xml;charset=utf-8");


echo $xml;
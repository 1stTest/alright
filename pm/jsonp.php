<?php
// echo 'Jay Chou,hello World';
// 接收参数
$callback = $_GET['callback'];//此值作为js函数名
$users = array(
array('username'=>'BruceLee','age'=>24),
array('username'=>'Lakers','age'=>21),
array('username'=>'JayChou','age'=>32)
    );
$data = json_encode($users);
echo "$callback('$data')";//输出一个js的函数执行     此函数需要在请求的html文件定义好
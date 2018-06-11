<?php
$users = array(
array('username'=>"Jay Chou","age"=>32),
array('username'=>'Lakers','age'=>21),
array('username'=>'Bruce Lee','age'=>24)
    );
//把数组以json格式的字符串输出
echo json_encode($users);
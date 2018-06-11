<?php

$users = array(
array('username'=>'BruceLee','age'=>24),
array('username'=>'Lakers','age'=>21),
array('username'=>'JayChou','age'=>32)
    );
    //数组变为json格式输出
    echo json_encode($users);
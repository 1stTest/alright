<?php

mysql_connect("localhost",'root','root');
mysql_query("use test");
mysql_query("set names utf8 -- UTF-8 Unicode");

//接受pid的参数，找出对应的子级地区
$sql = "select * from region where pid = {$_GET['pid']}";
$res = mysql_query($sql);

$result = array();
//把数据取出来放到数组中去
while($row = mysql_fetch_assoc($res)){
    $result[] = $row;
}

//把数组以json字符串输出
echo json_encode($result);

/*$con = mysql_connect("localhost","root","root");
if (!$con) { die('Could not connect: ' . mysql_error()); } // some code*/

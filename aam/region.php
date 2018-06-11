<?php
header("Content-type:text/html;charset=utf-8");
mysql_connect('localhost','root','root');
mysql_query('set names utf8');
mysql_query('use test');

$sql = "select * from region where pid = {$_GET['pid']}";
$res = mysql_query($sql);
$result = array();

while($row = mysql_fetch_assoc($res)){
    $result[] = $row;
}

echo  json_encode($result);
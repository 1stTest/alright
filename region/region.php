<?php
 header("Content-type:text/html;charset=utf-8");
 mysql_connect('localhost','root','root');
 mysql_query('set names utf8');
 mysql_query('use test');
 //接收对应的pid参数
 $sql = "select * from region where pid = {$_GET['pid']}";
 $res = mysql_query($sql);

 $result = array();
 //把数据取出来放到数组中
 while($row = mysql_fetch_assoc($res)){
     $result[] = $row;
 }


// 把数组以json字符串输出
 echo json_encode($result);

//$url = "http://www.weather.com.cn/adat/sk/101010300.html";
//echo file_get_contents($url);
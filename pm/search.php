<?php
$keyword = $_GET['keyword'];

mysql_connect("localhost",'root','dflr0.11');
mysql_query("use test");
mysql_query("set names gbk");

//模糊查询
$sql = "select * from goods where goods_name like '%{$keyword}%'";
$res = mysql_query($sql);
$result = array();
while($row = mysql_fetch_assoc($res)){
    $result[] = $row;
}
//把数据已json格式输出
echo json_encode($result);
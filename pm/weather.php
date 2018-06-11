<?php
header("Content-type:text/html;charset=utf-8");
$url = "http://www.weather.com.cn/data/sk/101280101.html";
//模拟get请求
echo file_get_contents($url);//此接口是返回json格式的字符串
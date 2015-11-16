<?php
//打开会话设置
session_start();  
//输入UTF-8文档类型
header('Content-Type: text/html; charset=utf-8');
//包含网站配置文件和通用的函数文件
include_once 'config.inc.php';
include_once 'common.function.php';
$page = intval($_POST['pageNum']);   //获取分页的页码数
$total = getGuestbookCount();        //总记录数
$pageSize = 6;                       //每页显示数
$totalPage = ceil($total/$pageSize); //总页数
$startPage = $page*$pageSize;        //计算起始记录位置
$arr['total'] = $total;              //构建一个PHP数组
$arr['pageSize'] = $pageSize;
$arr['totalPage'] = $totalPage;
//调用getGuestbookList获取指定位置的记录
$arr['list']= getGuestbookList($startPage,$pageSize);
//返回被json序列化后的数组数据到客户端
echo json_encode($arr);
?>
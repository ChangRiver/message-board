<?php
//打开会话设置
session_start();  
//输入UTF-8文档类型
header('Content-Type: text/html; charset=utf-8');
//包含网站配置文件和通用的函数文件
include_once 'config.inc.php';
include_once 'common.function.php';
//如果包含了提交的数据
if(isset($_POST['ipt_jrating'])){  
	$record = array(                        //构造更新数组
		'rating_title'			=>$_POST ['ipt_title'],
		'rating_value'			=>$_POST ['ipt_jrating'],
		'rating_content'		=>$_POST ['ipt_content'],
	);
	$id = $db->insert('rating',$record);   //调用insert方法进行更新
	if($id){
		echo "<script>alert('评分成功！')
		window.location='bookdetail.php';</script>";
	}
}
  $rating=getAvgRating();               //获取评分平均值
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="bookstyle.css">
<!--在这里包含jRating要使用的 -->
<!-- CSS文件 -->
<link rel="stylesheet" type="text/css" href="jquery/jRating.jquery.css" media="screen" />
<!-- jQuery文件 -->
<script type="text/javascript" src="jquery/jquery.js"></script>
<!--jRating插件文件-->
<script type="text/javascript" src="jquery/jRating.jquery.js"></script>
<title>图书详细信息页面</title>
</head>

<body>
<div id="main">
  <div id="header">
     <div id="logo">
        <div id="logo_text">
          <h1><a href="guestbook_old.php">我的留言本<span class="logo_colour"></span></a></h1>
          <h2>jQuery.form无刷新表单应用示例</h2>
      </div>
    </div>
  </div>
  <div id="site_content">
    <div id="content">
      <!-- insert the page content here -->
      <h1>留言列表</h1>
      <a href="#">添加新留言</a>
        <p>
          <?php
		//查询rating表中已经存在的评论
        $mlist = getRatingList();
		//循环查询结果
		foreach($mlist as $list){
		?>
        </p>
        <table width="515" border="0" cellpadding="0" cellspacing="0">
          <tr>
              <!--输出评论标题-->
              <th width="261" height="30" align="left">
              <span>评论标题：</span>
			  <?php echo $list['rating_title']?></th>
              <th width="437" align="left">
               <!--输出评分值-->              
              <span>评分：</span>                           
			  <?php echo $list['rating_value']?>分;
          </tr>
            <tr>
              <!--输出评论内容内容-->
              <td height="50" colspan="2" align="left" valign="top">
			  <?php echo $list['rating_content']?>&nbsp;</td>
          </tr>
      </table>        
		<?php
		}
		?>
    </div>
    </div>
</div>


</body>
</html>
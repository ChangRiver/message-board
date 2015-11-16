<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--页面使用的CSS样式-->
<link rel="stylesheet" type="text/css" href="bookstyle.css">
<!--在这里包含jRating要使用的 -->
<!-- jRating使用的CSS文件 -->
<link rel="stylesheet" type="text/css" href="jquery/jRating.jquery.css" media="screen" />
<!-- jQuery文件 -->
<script type="text/javascript" src="jquery/jquery.js"></script>
<!--jRating插件文件-->
<script type="text/javascript" src="jquery/jRating.jquery.js"></script>
<title>图书点评页面</title>
</head>

<body>
<div id="main">
  <div id="header">
     <div id="logo">
        <div id="logo_text">
          <h1><a href="guestbook_old.php">留言页面<span class="logo_colour"></span></a></h1>
          <h2>jQuery.form插件使用示例</h2>
      </div>
      </div>
    </div>
  <div id="site_content">
    <div id="content">
      <!-- insert the page content here -->
      <h1>写留言</h1>
        <form action="guestbooklist_old.php" method="post">
        <div class="form_settings">
          <p><span>评论标题:</span>
            <input class="contact" type="text" name="ipt_title" value="" /></p>
            <p><span>评论内容:</span>
            <textarea class="contact textarea" rows="8" cols="50" name="ipt_content"></textarea>
            <input type="hidden" name="ipt_jrating" id="ipt_jrating">
            </p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="提交留言" /></p>
          </div>
        </form>
        <p>&nbsp;</p>
      </div>
    </div>
</div>

</body>
</html>
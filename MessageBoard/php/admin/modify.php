<?php
     //连接数据库
@mysql_connect('localhost','root','') or die(mysql_error);
   //选择数据库（方法一）
mysql_query('use data');
     //设置环境的符号编码
mysql_query('set names utf8');
$rs=mysql_query('select * from leavewords');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>瑞曼-留言本</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="../style/skin.css" />
</head>
    <body>
        <div id="body">
            <h3>RainMan-留言本 后台管理</h3>
            <div id="nav">
                <ul>
                    <li><a href="../admin/manage.php">留言管理</a></li>
                    <li><a href="../index.php">前台首页</a></li>
                </ul>
            </div>
            <div id="cont" style="padding-bottom:10px;">

                <div class="mes" style="padding-bottom:0px;">
                    <div id="lev" style="display:block;border:none;">
                        <form action="" method="POST" style="margin:15px;">
                            昵称：<input type="text" value="" /><br />
                            标题：<input type="text" value="" /><br />
                            内容：<br />
                            <textarea name="modify"></textarea><br />
                            <input class="c1" type="submit" value="提交" />
							<input class="c1" type="reset" value="重填" />
                            <input class="c1" type="button" value="返回" onclick="location.href='manage.php'" />
                        </form>
                    </div>
                </div>


            </div>
            <div id="foot">
                <p>RainMan-留言本 e-mail:zyc521008@sina.com</p>
                <p>Powered by 瑞曼留言本 V1.0 瑞曼科技 www.rain-man.cn</p>
            </div>
        </div>
    </body>
</html>
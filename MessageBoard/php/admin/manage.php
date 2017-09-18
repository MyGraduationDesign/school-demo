<?php
     //连接数据库
@mysql_connect('localhost','root','') or die('连接失败');
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
<script type="text/javascript">
    function deal(arg,n) {
        //var det = document.getElementsByClassName('detail')[n];
        if(arg == 'cha') {
			var det = document.getElementById('detail'+n)
            det.style.display = 'block';	//显示
        }
        if(arg == 'close') {
			var det = document.getElementById('detail'+n)
            det.style.display = 'none';		//隐藏
        }
    }
</script>
</head>
    <body>
        <div id="body">
            <h3>RainMan-留言本 后台管理</h3>
            <div id="nav">
                <ul>
                    <li><a href="../index.php">前台首页</a></li>
                </ul>
            </div>
            <div id="cont" style="padding-bottom:0px;">
                <div class="mes">
                    <span id="del"><a href="#">!删除全部</a></span>
					<?php
				    while($rows=mysql_fetch_assoc($rs))
				    {
				    ?>

					<!-- 留言区域开始 -->
                    <div class="contr">
                        <div class="list">
                            <ul>
                                <li>编号：<?php echo $rows['id']?></li>
                                <li>时间：<?php echo $rows['date']?></li>
                                <li>姓名：<?php echo $rows['name']?></li>
                                <li>标题:<?php echo $rows['title']?></li>
                            </ul>
                        </div>
                        <ul>
                            <li><a href="javascript:void(0)" onclick="deal('cha',<?php echo $rows['id']?>)">查看内容</a></li>
                            <li><a href="reply.php?id=<?php echo $rows['id']?>">回复</a></li>
 
                            <li><a href="javascript:void(0)" onclick="if(confirm('确定要删除吗？'))location.href='del.php?id=<?php echo $rows['id']?>'">删除</a></li>
                        </ul>
                        <div class="detail" id="detail<?php echo $rows['id']?>">
                            <span onclick="deal('close',<?php echo $rows['id']?>);">X关闭</span>
                            <p><?php echo $rows['content']?></p>
                        </div>
                    </div>
					<!-- 留言区域止 -->
                    <?php
					}
                    ?>

                </div>
                <div id="page">
                    <span><a href="#">首页</a></span>
                    <ul>
                        <li><a href="#">上一页</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">下一页</a></li>
                        <li>总共有:0页</li>
                        <li>当前是第:0页</li>
                    </ul>
                </div>
            </div>
            <div id="foot">
                <p>RainMan-留言本 e-mail:zyc521008@sina.com</p>
                <p>Powered by 瑞曼留言本 V1.0 瑞曼科技 www.rain-man.cn</p>
            </div>
        </div>
    </body>
</html>
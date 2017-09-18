<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>瑞曼-留言本</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="style/skin.css">
<script type="text/javascript">
    function lev() {
        var lev_mes = document.getElementById('lev');
        lev_mes.style.display = 'block';
        location.href = '#form';
    }
</script>
<?php
     //连接数据库
@mysql_connect('localhost','root','') or die('连接失败');
   //选择数据库（方法一）
mysql_query('use data');
     //设置环境的符号编码
mysql_query('set names utf8');
  //--------插入留言--------
if(!empty($_POST))
{
	$name=htmlspecialchars($_POST['name']);    //htmlspecialchars     防止xss攻击
	$title=htmlspecialchars($_POST['title']);
	$content=htmlspecialchars($_POST['content']);
	$sql="insert into leavewords values (null,'$name','$title','$content','',now())";
	//echo $sql;
	mysql_query($sql);
}
     //查询所有的留言
$rs=mysql_query('select * from leavewords');
/*
while($rows=mysql_fetch_row($rs))   //将资源中的一条记录匹配成索引数组
{
	echo $rows[1],'-',$rows[3],'<br>';
}

while($rows=mysql_fetch_assoc($rs))   //将资源中的一条记录匹配成关联数组
{
	echo $rows['name'],'-',$rows['content'],'<br>';
}
*/
?>
<style type="text/css">

</style>
</head>
    <body>
        <div id="body">
            <h3>RainMan-留言本</h3>
            <div id="nav">
                <ul>
                    <li><a href="javascript:void(0)"onclick="lev();">发表留言</a></li>
                    <li><a href="admin/manage.php">后台管理</a></li>
                </ul>
            </div>
            <div id="cont">
				<?php
				while($rows=mysql_fetch_assoc($rs))
				{
				?>
                <!-- 留言区域开始 -->
                <div class="mes">
                    <div class="title">
                        <ul>
                            <li>序号：<?php echo $rows['id']?></li> 
                            <li>时间:<?php echo $rows['date']?></li>
                            <li>姓名：<?php echo $rows['name']?></li>
                            <li>标题:<?php echo $rows['title']?></li>
                        </ul>
                    </div>
                    <div class="txt">
                        <span>内容：</span><p><?php echo $rows['content']?></p>
                    </div>
                    <div class="rep">
                        <span style="font-weight:bold">管理员回复：</span><p><?php echo $rows['reply']?></p>
                    </div>
                </div>
                <!-- 留言区域止 -->
                <?php
				}
                ?>
				
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


                <a name="form">
                <div id="lev" style="display:block;">
                    <form action="" method="POST">
                        昵称：<input type="text" name="name" /><br />
                        标题：<input type="text" name="title" /><br />
                        内容：(囧,-_-||不能写作文哦)<br />
                        <textarea name="content"></textarea><br />
                        
						<input class="c1" type="submit" value="提交" name="button"/>
						
						<input class="c1" type="reset" value="重填" />
                    </form>
                </div>
            </div>
            <div id="foot">
                <p>RainMan-留言本 e-mail:zyc521008@sina.com</p>
                <p>Powered by 瑞曼留言本 V1.0 瑞曼科技 www.rain-man.cn</p>
            </div>
        </div>
    </body>
</html>
<?php
session_start();
include_once 'conn.php';

?>
<html>
<head>
<title>企业信息</title><script language="javascript" src="js/Calendar.js"></script>

<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
body {
	background-color: #999999;
}
.STYLE1 {color: #FFFFFF}
.STYLE3 {color: #FFFFFF; font-weight: bold; }
.STYLE7 {color: #993300; font-weight: bold; }
-->
</style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="990" height="1333" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table width="990" height="797" border="0" cellpadding="0" cellspacing="0" bgcolor="#323232" id="__01">
          <tr>
            <td valign="top"><?php include_once 'qtleft.php';?></td>
            <td valign="top"><table id="__01" width="766" height="797" border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td valign="top"><table id="__01" width="766" height="217" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="766" height="29" background="qtimages/1_02_02_02_01.gif"><table width="100%" height="22" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="28%" align="center" valign="bottom"><span class="STYLE3">企业信息</span></td>
                        <td width="72%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="766" height="188" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="55" background="">&nbsp;</td>
                        <td width="651" height="816" valign="top" bgcolor="#4F4F4F">
						
						
						
						
						<form id="form1" name="form1" method="post" action="">
  搜索: 企业编号：<input name="qiyebianhao" type="text" id="qiyebianhao" style='border:solid 1px #000000; color:#666666' size="10" /> 企业名称：<input name="qiyemingcheng" type="text" id="qiyemingcheng" style='border:solid 1px #000000; color:#666666' size="10" /> 类别：<span style="color: #FFFFFF">
  <select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666'>
    <option value="">所有</option>
	<option value="装修公司">装修公司</option>
    <option value="建材公司">建材公司</option>
  </select>
  </span> 联系电话：
  <input name="lianxidianhua" type="text" id="lianxidianhua" style='border:solid 1px #000000; color:#666666' size="10" />
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />&nbsp;<input type="button" name="Submit3" value="切换视图" style='border:solid 1px #000000; color:#666666' onClick="location.href='qiyexinxilisttp.php';" />
</form>
<table width="98%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66FF00" style="border-collapse:collapse">  
  <tr bgcolor="#99CCCC">
    <td width="25">序号</td>
    <td>企业编号</td>
    <td>企业名称</td>
    <td>类别</td>
    <td>联系电话</td>
    <td>地址</td>
    <td>负责人</td>
    <td>主营业务</td>
    <td>门面照片</td>
    <td>密码</td>
    <td width="120" align="center">添加时间</td>
    <td width="30" align="center">操作</td>
  </tr>
  <?php 
    $sql="select * from qiyexinxi where issh='是'";
  
if ($_POST["qiyebianhao"]!=""){$nreqqiyebianhao=$_POST["qiyebianhao"];$sql=$sql." and qiyebianhao like '%$nreqqiyebianhao%'";}
if ($_POST["qiyemingcheng"]!=""){$nreqqiyemingcheng=$_POST["qiyemingcheng"];$sql=$sql." and qiyemingcheng like '%$nreqqiyemingcheng%'";}
if ($_POST["leibie"]!=""){$nreqleibie=$_POST["leibie"];$sql=$sql." and leibie like '%$nreqleibie%'";}
if ($_POST["lianxidianhua"]!=""){$nreqlianxidianhua=$_POST["lianxidianhua"];$sql=$sql." and lianxidianhua like '%$nreqlianxidianhua%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,qiyebianhao);?></td><td><?php echo mysql_result($query,$i,qiyemingcheng);?></td><td><?php echo mysql_result($query,$i,leibie);?></td><td><?php echo mysql_result($query,$i,lianxidianhua);?></td><td><?php echo mysql_result($query,$i,dizhi);?></td><td><?php echo mysql_result($query,$i,fuzeren);?></td><td><?php echo mysql_result($query,$i,zhuyingyewu);?></td><td width='80'><a href="<?php echo mysql_result($query,$i,menmianzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,menmianzhaopian) ?>' width='80' height='88' border='0'></a></td><td><?php echo mysql_result($query,$i,mima);?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="30" align="center"><a href="qiyexinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>">详细</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>以上数据共<?php echo $rowscount;?>条</p>
<p align="center"><a href="qiyexinxilist.php?pagecurrent=1">首页</a>, <a href="qiyexinxilist.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="qiyexinxilist.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="qiyexinxilist.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>


  
  
  
  
  
  					</td><td width="60" background="">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              
            </table></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td><?php include_once 'qtdown.php';?></td>
	</tr>
</table>
</body>
</html>

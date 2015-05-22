<?php
session_start();
include_once 'conn.php';
?>
<html>
<head>
<title>贵州装修行业信息平台</title>
<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
body {
	background-color: #999999;
}
.STYLE1 {color: #FFFFFF}
.STYLE3 {color: #FFFFFF; font-weight: bold; }
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
                        <td width="28%" align="center" valign="bottom"><span class="STYLE3">装修问答</span></td>
                        <td width="55%">&nbsp;</td>
                        <td width="17%" valign="bottom"><a href="lyb.php"><span class="STYLE3">我要提问</span></a></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="766" height="188" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="55" background="">&nbsp;</td>
                        <td width="651" height="816" valign="top" bgcolor="#4F4F4F"><table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#ACACAC" style="border-collapse:collapse">
                          <?php
					$sql="select * from liuyanban where 1=1";
					$sql=$sql." order by id desc";
  					$query=mysql_query($sql);
	 				 $rowscount=mysql_num_rows($query);
					 if($rowscount==0)
  {}
  else
  {
  $pagelarge=5;//每页行数；
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
                            <td width="11" rowspan="3" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                            <td width="85" rowspan="3" align="center" valign="middle"><img width='70'height='70' src=<?php echo mysql_result($query,$i,"zhaopian");?> border=0> </td>
                            <td height="20" colspan="2" align="left" valign="middle" class="STYLE1">&nbsp; &nbsp; 留言于:<?php echo mysql_result($query,$i,"addtime");?> &nbsp;</td>
                            <td width="12" rowspan="3" valign="top" style="width: 10px"><!--DWLayoutEmptyCell-->&nbsp;</td>
                          </tr>
                          <tr>
                            <td height="78" align="left" valign="top" class="STYLE1">&nbsp;<?php echo mysql_result($query,$i,"liuyan");?></td>
                            <td align="left" valign="top"><p class="STYLE1">回复：</p>
                                <p class="STYLE1"><?php echo mysql_result($query,$i,"huifu");?></p></td>
                          </tr>
                          <tr>
                            <td colspan="2" align="left" valign="middle" style="height: 25px">&nbsp; <span class="STYLE1">&nbsp;账号：<?php echo mysql_result($query,$i,"zhanghao");?> &nbsp; &nbsp;姓名：<?php echo mysql_result($query,$i,"xingming");?>&nbsp;&nbsp;</span></td>
                          </tr>
                          <?php
						  }
  	}
  ?>
                        </table>
                          <p align="center"><a href="lyblist.php?pagecurrent=1" ><font class="STYLE1">首页</font></a>, <a href="lyblist.php?pagecurrent=<?php echo $pagecurrent-1;?>" class="STYLE1"><font class="STYLE1">前一页</font></a> ,<a href="lyblist.php?pagecurrent=<?php echo $pagecurrent+1;?>"><font class="STYLE1">后一页</font></a>, <a href="lyblist.php?pagecurrent=<?php echo $pagecount;?>"><font class="STYLE1">末页</font></a><font class="STYLE1">, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 以上数据共
                            <?php
		echo $rowscount;
	?>
                            条</font></p>
                          <p align="center">&nbsp;</p></td><td width="60" background="">&nbsp;</td>
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
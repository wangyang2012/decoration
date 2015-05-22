<?php
session_start();
include_once 'conn.php';
$lb=$_GET["lb"];
if($lb=="")
{
	$lb=$_POST["lb"];
}
$biaoti=$_POST["biaoti"];
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
                        <td width="28%" align="center" valign="bottom"><span class="STYLE3"><?php echo $lb?></span></td>
                        <td width="72%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="766" height="188" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="55" background="">&nbsp;</td>
                        <td width="651" height="816" valign="top" bgcolor="#4F4F4F"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                          <?php 
    $sql="select * from xinwentongzhi where leibie='$lb'";
  
if ($biaoti!=""){$sql=$sql." and biaoti like '%$biaoti%'";}
if($lb!=""){$sql=$sql." and leibie='$lb'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=20;//每页行数；
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
                          <tr height="25">
                            <td width="27%" height="138" rowspan="2" align="left" class="newsline"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><img src="<?php echo mysql_result($query,$i,"shouyetupian");?>" width="158" height="145"></a></td>
                            <td width="73%" height="33" class="newsline"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><font color="#FFFFFF"><?php echo mysql_result($query,$i,"biaoti");?></font></a></td>
                          </tr>
                          <tr height="25">
                            <td height="138" class="newsline"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"addtime");?></a></td>
                          </tr>
                          <?php
						}
					  }
					  ?>
                        </table>
                          <p align="center"><a href="news2.php?pagecurrent=1&lb=<?php echo $lb;?>">首页</a>, <a href="news2.php?pagecurrent=<?php echo $pagecurrent-1;?>&lb=<?php echo $lb;?>">前一页</a> ,<a href="news2.php?pagecurrent=<?php echo $pagecurrent+1;?>&lb=<?php echo $lb;?>">后一页</a>, <a href="news2.php?pagecurrent=<?php echo $pagecount;?>&lb=<?php echo $lb;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 以上数据共
                            <?php
		echo $rowscount;
	?>
                            条                          </td>
                        <td width="60" background="">&nbsp;</td>
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
<?php
session_start();
include_once 'conn.php';

?>
<html>
<head>
<title>�б���Ϣ</title><script language="javascript" src="js/Calendar.js"></script>

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
                        <td width="28%" align="center" valign="bottom"><span class="STYLE3">�б���Ϣ</span></td>
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
                          <span class="STYLE1">����: ���⣺
                          <input name="biaoti" type="text" id="biaoti" style='border:solid 1px #000000; color:#666666' size="10" /> 
                          ��ֹ���ڣ�
                          <input name="jiezhiriqi1" type="text" id="jiezhiriqi1"  value='' onClick="getDate(form1.jiezhiriqi1,'2')" size="10" need="1" style='border:solid 1px #000000; color:#666666' />
                          -
                          <input name="jiezhiriqi2" type="text" id="jiezhiriqi2"  value='' onClick="getDate(form1.jiezhiriqi2,'2')" size="10" need="1" style='border:solid 1px #000000; color:#666666' /> 
                          �����ˣ�
                          <input name="faburen" type="text" id="faburen" style='border:solid 1px #000000; color:#666666' size="10" />
                          </span>
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />&nbsp;
                        </form>
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" class="newsline" style="border-collapse:collapse">  
  <tr bgcolor="#66FF99">
    <td width="25">���</td>
    <td>����</td>
    <td>��ֹ����</td>
    <td>Ԥ�����</td>
    <td>������</td>
    <td width="120" align="center">���ʱ��</td>
    <td width="30" align="center">����</td>
  </tr>
  <?php 
    $sql="select * from zhaobiaoxinxi where 1=1";
  
if ($_POST["biaoti"]!=""){$nreqbiaoti=$_POST["biaoti"];$sql=$sql." and biaoti like '%$nreqbiaoti%'";}
if ($_POST["jiezhiriqi1"]!=""){$nreqjiezhiriqi1=$_POST["jiezhiriqi1"];$sql=$sql." and jiezhiriqi >= '$nreqjiezhiriqi1'";}
if ($_POST["jiezhiriqi2"]!=""){$nreqjiezhiriqi2=$_POST["jiezhiriqi2"];$sql=$sql." and jiezhiriqi <= '$nreqjiezhiriqi2'";}
if ($_POST["faburen"]!=""){$nreqfaburen=$_POST["faburen"];$sql=$sql." and faburen like '%$nreqfaburen%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
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
    <td width="25"><span class="STYLE1"><?php echo $i+1;?></span></td>
    <td><span class="STYLE1"><?php echo mysql_result($query,$i,biaoti);?></span></td>
    <td><span class="STYLE1"><?php echo mysql_result($query,$i,jiezhiriqi);?></span></td>
    <td><span class="STYLE1"><?php echo mysql_result($query,$i,yusuanqijia);?></span></td>
    <td><span class="STYLE1"><?php echo mysql_result($query,$i,faburen);?></span></td>
    <td width="120" align="center"><span class="STYLE1"><?php echo mysql_result($query,$i,"addtime");?></span></td>
    <td width="30" align="center"><a href="zhaobiaoxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>" class="STYLE1"><font color="#FFFFFF">��ϸ</font></a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p class="STYLE1">�������ݹ�<?php echo $rowscount;?>��</p>
<p align="center"><a href="zhaobiaoxinxilist.php?pagecurrent=1">��ҳ</a>, <a href="zhaobiaoxinxilist.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="zhaobiaoxinxilist.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="zhaobiaoxinxilist.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>


  
  
  
  
  
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

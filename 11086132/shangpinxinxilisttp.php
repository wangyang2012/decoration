<?php
session_start();
include_once 'conn.php';
?>
<html>
<head>
<title>����װ����ҵ��Ϣƽ̨</title>
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
                        <td width="28%" align="center" valign="bottom"><span class="STYLE3">���Ĳ�Ʒ</span></td>
                        <td width="72%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="766" height="188" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="55" background="">&nbsp;</td>
                        <td width="651" height="816" valign="top" bgcolor="#4F4F4F"><form id="form1" name="form1" method="post" action="">
                          &nbsp;<span class="STYLE1">����: ��ţ�
                          <input name="bianhao" type="text" id="bianhao" style='border:solid 1px #000000; color:#666666' size="10" />
                          ���ƣ�
                          <input name="mingcheng" type="text" id="mingcheng" style='border:solid 1px #000000; color:#666666' size="10" />
                          ���
                          <select name='leibie' id='leibie'>
                            <option value="">����</option>
                            <?php getoption("shangpinleibie","leibie")?>
                                </select>
                          </span>
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
                        </form>
                          <table width="98%" height="7%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <?php 
    $sql="select * from shangpinxinxi where 1=1";
  
if ($_POST["bianhao"]!=""){$nreqbianhao=$_POST["bianhao"];$sql=$sql." and bianhao like '%$nreqbianhao%'";}
if ($_POST["mingcheng"]!=""){$nreqmingcheng=$_POST["mingcheng"];$sql=$sql." and mingcheng like '%$nreqmingcheng%'";}
if ($_POST["leibie"]!=""){$nreqleibie=$_POST["leibie"];$sql=$sql." and leibie like '%$nreqleibie%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=20;//ÿҳ������
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
$k=0;
	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
$k=$k+1;
  ?>
                              <td height="165" align="center"><table width="150" height="160" border="0" cellpadding="0" cellspacing="0">
                                  <tr>
                                    <td height="123" align="center"><a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,id);?>"><img src="<?php echo mysql_result($query,$i,tupian);?>" width="133" height="135" border="0" /></a></td>
                                  </tr>
                                  <tr>
                                    <td height="25" align="center"><font color="#FFFFFF"><?php echo mysql_result($query,$i,mingcheng);?></font></td>
                                  </tr>
                              </table></td>
                              <?php
								if ($k==4)
									{
										echo "</tr><tr>";
										$k=0;
									}
	}
}
?>
                            </tr>
                          </table>
                          <p> </p>
                          <P align=center><a href="shangpinxinxilisttp.php?pagecurrent=1">��ҳ</a>, <a href="shangpinxinxilisttp.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="shangpinxinxilisttp.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="shangpinxinxilisttp.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, �������ݹ�<?php echo $pagecount;?>ҳ,��ǰ��<?php echo $pagecurrent;?>ҳ,<?php echo $pagelarge;?>��ÿҳ                          </P></td>
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
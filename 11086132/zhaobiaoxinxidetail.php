<?php
session_start();
include_once 'conn.php';
 if($_SESSION["username"]=="")
 {
	echo "<script>javascript:alert('�Բ��������ȵ�½��');location.href='index.php';</script>";
	exit;
 }
$id=$_GET["id"];
?>
<html>
<head>
<title>�б���Ϣ</title>
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
                        <td width="28%" align="center" valign="bottom"><span class="STYLE3">�б���Ϣ��ϸ</span></td>
                        <td width="72%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="766" height="188" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="55" background="">&nbsp;</td>
                        <td width="651" height="816" valign="top" bgcolor="#4F4F4F">
						
						
						
						
						 <?php
$sql="select * from zhaobiaoxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#3399FF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'><span class="STYLE1">���⣺</span></td><td colspan="3"><span class="STYLE1"><?php echo mysql_result($query,0,biaoti);?></span></td></tr>
      <tr>
        <td><span class="STYLE1">�����ˣ�</span></td>
        <td><span class="STYLE1"><?php echo mysql_result($query,0,faburen);?></span></td>
        <td><span class="STYLE1">��ֹ���ڣ�</span></td>
        <td><span class="STYLE1"><?php echo mysql_result($query,0,jiezhiriqi);?></span></td>
      </tr>
      <tr><td width='11%'><span class="STYLE1">������</span></td>
	  <td width='39%'><a href="<?php echo mysql_result($query,0,fujian);?>" ><font class="STYLE1">�������</font></a></td>
	  <td width='11%'><span class="STYLE1">Ԥ����ۣ�</span></td><td width='39%'><span class="STYLE1"><?php echo mysql_result($query,0,yusuanqijia);?></span></td></tr><tr><td width='11%' height="80"><span class="STYLE1">��Ŀ���ݣ�</span></td>
	  <td colspan="3"><span class="STYLE1"><?php echo mysql_result($query,0,xiangmuneirong);?></span></td>
	  </tr><tr><td colspan=4 align=center><input type=button name=Submit5 value=���� onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  />
	      <input type=button name=Submit52 value=Ͷ�� onClick="javascript:location.href='toubiaojiluadd.php?id=<?php echo $id?>';" style='border:solid 1px #000000; color:#666666'  /></td></tr>
  </table>

<?php
	}
?>
  
  
  
  
  
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

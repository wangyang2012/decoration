<?php
session_start();
include_once 'conn.php';
//xuyaodenglxu if($_SESSION["username"]=="")
//xuyaodenglxu {
//xuyaodenglxu	echo "<script>javascript:alert('对不起，请您先登陆！');location.href='index.php';/script>";
//xuyaodenglxu	exit;
//xuyaodenglxu }
$id=$_GET["id"];
?>
<html>
<head>
<title>企业信息</title>
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
                        <td width="28%" align="center" valign="bottom"><span class="STYLE3">企业信息详细</span></td>
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
$sql="select * from qiyexinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%' height=44>企业编号：</td><td width='39%'><?php echo mysql_result($query,0,qiyebianhao);?></td><td  rowspan=8 align=center><a href=<?php echo mysql_result($query,0,menmianzhaopian);?> target=_blank><img src=<?php echo mysql_result($query,0,menmianzhaopian);?> width=228 height=215 border=0></a></td></tr><tr><td width='11%' height=44>企业名称：</td><td width='39%'><?php echo mysql_result($query,0,qiyemingcheng);?></td></tr><tr><td width='11%' height=44>类别：</td><td width='39%'><?php echo mysql_result($query,0,leibie);?></td></tr><tr><td width='11%' height=44>联系电话：</td><td width='39%'><?php echo mysql_result($query,0,lianxidianhua);?></td></tr><tr><td width='11%' height=44>地址：</td><td width='39%'><?php echo mysql_result($query,0,dizhi);?></td></tr><tr><td width='11%' height=44>负责人：</td><td width='39%'><?php echo mysql_result($query,0,fuzeren);?></td></tr><tr><td width='11%' height=44>主营业务：</td><td width='39%'><?php echo mysql_result($query,0,zhuyingyewu);?></td></tr><tr><td width='11%' height=44>密码：</td><td width='39%'><?php echo mysql_result($query,0,mima);?></td></tr><tr><td width='11%' height=100  >备注：</td><td width='39%' colspan=2 height=100 ><?php echo mysql_result($query,0,beizhu);?></td></tr><tr><td colspan=3 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /></td></tr>
    
     
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

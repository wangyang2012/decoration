<?php
session_start();
include_once 'conn.php';

$id=$_GET["id"];
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
                        <td width="28%" align="center" valign="bottom"><span class="STYLE3">建材详细</span></td>
                        <td width="72%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="766" height="188" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="55" background="">&nbsp;</td>
                        <td width="651" height="816" valign="top" bgcolor="#4F4F4F"><?php
$sql="select * from shangpinxinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
                          <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66FF00" style="border-collapse:collapse">
                            <tr>
                              <td width='11%' height=44><span class="STYLE1">编号：</span></td>
                              <td width='39%'><span class="STYLE1"><?php echo mysql_result($query,0,bianhao);?></span></td>
                              <td  rowspan=5 align=center><a href=<?php echo mysql_result($query,0,tupian);?> target=_blank class="STYLE1"><img src=<?php echo mysql_result($query,0,tupian);?> width=228 height=215 border=0></a></td>
                            </tr>
                            <tr>
                              <td width='11%' height=44><span class="STYLE1">名称：</span></td>
                              <td width='39%'><span class="STYLE1"><?php echo mysql_result($query,0,mingcheng);?></span></td>
                            </tr>
                            <tr>
                              <td width='11%' height=44><span class="STYLE1">类别：</span></td>
                              <td width='39%'><span class="STYLE1"><?php echo mysql_result($query,0,leibie);?></span></td>
                            </tr>
                            <tr>
                              <td width='11%' height=44><span class="STYLE1">价格：</span></td>
                              <td width='39%'><span class="STYLE1"><?php echo mysql_result($query,0,jiage);?></span></td>
                            </tr>
                            <tr>
                              <td width='11%' height=44><span class="STYLE1">库存：</span></td>
                              <td width='39%'><span class="STYLE1"><?php echo mysql_result($query,0,kucun);?></span></td>
                            </tr>
                            <tr>
                              <td width='11%' height=100  ><span class="STYLE1">备注：</span></td>
                              <td width='39%' colspan=2 height=100 ><span class="STYLE1"><?php echo mysql_result($query,0,beizhu);?></span></td>
                            </tr>
                            
                            <tr>
                              <td colspan=3 align=center><input type=button name=Submit5 value=返回 onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /></td>
                            </tr>
                          </table>
                          <?php
	}
?></td>
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
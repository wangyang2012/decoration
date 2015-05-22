<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
mysql_query("update xinwentongzhi set dianjilv=dianjilv+1 where id=$id");
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
                        <td width="28%" align="center" valign="bottom"><span class="STYLE3">内容详细</span></td>
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
					$sql="select * from xinwentongzhi where id=".$id;
					$query=mysql_query($sql);
					 $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
					?>
                            <table width="97%" border="0" align="center" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" class="newsline" style="border-collapse:collapse">
                              <tr>
                                <td height="33" align="center"><span class="STYLE3"><?php echo mysql_result($query,0,"biaoti"); ?> (被点击<?php echo mysql_result($query,0,"dianjilv"); ?>次)</span></td>
                              </tr>
                              <tr>
                                <td height="104"><font class="style1"><?php echo mysql_result($query,0,"neirong");?></font></td>
                              </tr>
                              <tr>
                                <td align="right"><a href="#" onClick="javascript:history.back();"><font class="style1">返回</font></a></td>
                              </tr>
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
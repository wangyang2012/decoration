<?php
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('对不起，请您先登陆！');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$zhaopian=$_POST["zhaopian"];$xingming=$_POST["xingming"];$liuyan=$_POST["liuyan"];
	$sql="insert into liuyanban(zhanghao,zhaopian,xingming,liuyan) values('$zhanghao','$zhaopian','$xingming','$liuyan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('留言成功!');location.href='lyblist.php';</script>";
}
?>
<html>
<head>
<title>贵州装修行业信息平台</title>
<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
body {
	background-color:#CCCCCC;
}
.STYLE1 {color: #FFFFFF}
.STYLE3 {color: #FFFFFF; font-weight: bold; }
.STYLE7 {color: #993300; font-weight: bold; }
-->
</style>
</head>
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("请输入账号");document.form1.zhanghao.focus();return false;}if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}if(document.form1.liuyan.value==""){alert("请输入留言");document.form1.liuyan.focus();return false;}
}

</script>
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
                              <td width="17%" valign="bottom"><a href="lyblist.php"><span class="STYLE3">查看已有问题</span></a></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table width="766" height="188" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" id="__01">
                            <tr>
                              <td width="55" background="" bgcolor="#333333">&nbsp;</td>
                              <td width="651" height="816" valign="top" bgcolor="#4F4F4F"><table width="96%" border="1" align="left" cellpadding="3" cellspacing="1" bordercolor="#B8D8E8" style="border-collapse:collapse">
                                  <form name="form1" method="post" action="">
                                    <tr>
                                      <td class="STYLE1">账号：</td>
                                      <td class="STYLE1"><input name='zhanghao' type='text' id='zhanghao' value='<?php echo $_SESSION["username"];?>' />
                                        &nbsp;*</td>
                                    </tr>
                                    <tr>
                                      <td class="STYLE1">照片：</td>
                                      <td class="STYLE1"><input name='zhaopian' type='hidden' id='zhaopian' value='<?php echo $_SESSION["zp"];?>' />
                                          <img src="<?php echo $_SESSION["zp"];?>" width="131" height="102"></td>
                                    </tr>
                                    <tr>
                                      <td class="STYLE1">姓名：</td>
                                      <td class="STYLE1"><input name='xingming' type='text' id='xingming' value='<?php echo $_SESSION["xm"];?>' />
                                        &nbsp;*</td>
                                    </tr>
                                    <tr>
                                      <td class="STYLE1">留言：</td>
                                      <td class="STYLE1"><textarea name='liuyan' cols='50' rows='8' id='liuyan'></textarea>
                                        &nbsp;*</td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                      <td><input type="hidden" name="addnew" value="1" />
                                          <input type="submit" name="Submit" value="添加" onClick="return check();" />
                                          <input type="reset" name="Submit2" value="重置" /></td>
                                    </tr>
                                  </form>
                              </table>
                                  <p align="center">&nbsp;</p>
                                <p align="center">&nbsp;</p></td>
                              <td width="60" background="" bgcolor="#333333">&nbsp;</td>
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
		<td bgcolor="#CCCCCC"><?php include_once 'qtdown.php';?></td>
	</tr>
</table>
</body>
</html>
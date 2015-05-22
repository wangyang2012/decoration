<?php
session_start();

include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$qiyebianhao=$_POST["qiyebianhao"];$qiyemingcheng=$_POST["qiyemingcheng"];$leibie=$_POST["leibie"];$lianxidianhua=$_POST["lianxidianhua"];$dizhi=$_POST["dizhi"];$fuzeren=$_POST["fuzeren"];$zhuyingyewu=$_POST["zhuyingyewu"];$menmianzhaopian=$_POST["menmianzhaopian"];$beizhu=$_POST["beizhu"];$mima=$_POST["mima"];
	ischongfu("select id from qiyexinxi where qiyebianhao='".$qiyebianhao."'");
	$sql="insert into qiyexinxi(qiyebianhao,qiyemingcheng,leibie,lianxidianhua,dizhi,fuzeren,zhuyingyewu,menmianzhaopian,beizhu,mima) values('$qiyebianhao','$qiyemingcheng','$leibie','$lianxidianhua','$dizhi','$fuzeren','$zhuyingyewu','$menmianzhaopian','$beizhu','$mima') ";
	mysql_query($sql);
	echo "<script>javascript:alert('操作成功!');location.href='qiyexinxiadd.php';</script>";
}
?>
<html>
<head>
<title>企业信息</title><script language="javascript" src="qtimages/qkjs.js"></script><script language="javascript" src="js/Calendar.js"></script>

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
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<script language="javascript">
	function check()
{
	if(document.form1.qiyebianhao.value==""){alert("请输入企业编号");document.form1.qiyebianhao.focus();return false;}if(document.form1.qiyemingcheng.value==""){alert("请输入企业名称");document.form1.qiyemingcheng.focus();return false;}if(document.form1.lianxidianhua.value==""){alert("请输入联系电话");document.form1.lianxidianhua.focus();return false;}if(document.form1.mima.value==""){alert("请输入密码");document.form1.mima.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
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
                              <td width="28%" align="center" valign="bottom"><span class="STYLE3">企业信息</span></td>
                              <td width="72%">&nbsp;</td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="766" height="188" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="55" background="">&nbsp;</td>
                              <td width="651" height="816" valign="top" bgcolor="#4F4F4F"><?php
//islbdq $sql="select * from melieibaoduqubiaoiguo where id=".$_GET["id"];
//islbdq $query=mysql_query($sql);
//islbdq $rowscount=mysql_num_rows($query);
//islbdq if($rowscount>0)
//islbdq {
//islbdq 	lelelelelele
//islbdq }
?>
                                  <form id="form1" name="form1" method="post" action="">
                                    <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#3399FF" style="border-collapse:collapse">
                                      <tr>
                                        <td><span class="STYLE1">企业编号：</span></td>
                                        <td><span style="color: #FFFFFF">
                                          <input name='qiyebianhao' type='text' id='qiyebianhao' value='' style='border:solid 1px #000000; color:#666666' />
                                          &nbsp;*</span></td>
                                      </tr>
                                      <tr>
                                        <td><span class="STYLE1">企业名称：</span></td>
                                        <td><span style="color: #FFFFFF">
                                          <input name='qiyemingcheng' type='text' id='qiyemingcheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  />
                                          &nbsp;*</span></td>
                                      </tr>
                                      <tr>
                                        <td><span class="STYLE1">类别：</span></td>
                                        <td><span style="color: #FFFFFF">
                                          <select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666'>
                                            <option value="装修公司">装修公司</option>
                                            <option value="建材公司">建材公司</option>
                                          </select>
                                        </span></td>
                                      </tr>
                                      <tr>
                                        <td><span class="STYLE1">联系电话：</span></td>
                                        <td><span style="color: #FFFFFF">
                                          <input name='lianxidianhua' type='text' id='lianxidianhua' value='' style='border:solid 1px #000000; color:#666666' />
                                          &nbsp;*</span></td>
                                      </tr>
                                      <tr>
                                        <td><span class="STYLE1">地址：</span></td>
                                        <td><input name='dizhi' type='text' id='dizhi' value='' size='50' style='border:solid 1px #000000'  /></td>
                                      </tr>
                                      <tr>
                                        <td><span class="STYLE1">负责人：</span></td>
                                        <td><input name='fuzeren' type='text' id='fuzeren' value='' style='border:solid 1px #000000' /></td>
                                      </tr>
                                      <tr>
                                        <td><span class="STYLE1">主营业务：</span></td>
                                        <td><input name='zhuyingyewu' type='text' id='zhuyingyewu' value='' size='50' style='border:solid 1px #000000'  /></td>
                                      </tr>
                                      <tr>
                                        <td><span class="STYLE1">门面照片：</span></td>
                                        <td><span style="color: #FFFFFF">
                                          <input name='menmianzhaopian' type='text' id='menmianzhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />
                                          &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=menmianzhaopian',460,180)"><font color=white>上传</font></a></span></td>
                                      </tr>
                                      <tr>
                                        <td><span class="STYLE1">备注：</span></td>
                                        <td><span style="color: #FFFFFF">
                                          <textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea>
                                        </span></td>
                                      </tr>
                                      <tr>
                                        <td><span class="STYLE1">密码：</span></td>
                                        <td><span style="color: #FFFFFF">
                                          <input name='mima' type='text' id='mima' value='' style='border:solid 1px #000000; color:#666666' />
                                          &nbsp;*</span></td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                        <td><input type="hidden" name="addnew" value="1" />
                                            <input type="submit" name="Submit" value="确定" onClick="return check();"  style='border:solid 1px #000000; color:#666666' />
                                            <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
                                      </tr>
                                    </table>
                                  </form>
                                <p>&nbsp;</p>
                                <?php
	function ischongfu($sql)
	{
		$query=mysql_query($sql);
 		$rowscount=mysql_num_rows($query);
		if($rowscount>0)
		{
			echo "<script>javascript:alert('对不起，该企业编号已经存在，请换其他企业编号!');history.back();</script>";
			exit;
		}
		
	}
?>                              </td>
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

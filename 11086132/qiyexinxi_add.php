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
	echo "<script>javascript:alert('添加成功!');location.href='qiyexinxi_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<body>
<p>添加企业信息： 当前日期： <?php echo $ndate; ?></p>
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
 <?php
//islbdq $sql="select * from melieibaoduqubiaoiguo where id=".$_GET["id"];
//islbdq $query=mysql_query($sql);
//islbdq $rowscount=mysql_num_rows($query);
//islbdq if($rowscount>0)
//islbdq {
//islbdq 	lelelelelele
//islbdq }
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66FF00" style="border-collapse:collapse">    
	<tr><td>企业编号：</td><td><input name='qiyebianhao' type='text' id='qiyebianhao' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>企业名称：</td><td><input name='qiyemingcheng' type='text' id='qiyemingcheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr><tr><td>类别：</td><td><span style="color: #FFFFFF">
	  <select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666'>
        <option value="装修公司">装修公司</option>
        <option value="建材公司">建材公司</option>
      </select>
	</span></td>
	</tr><tr><td>联系电话：</td><td><input name='lianxidianhua' type='text' id='lianxidianhua' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>地址：</td><td><input name='dizhi' type='text' id='dizhi' value='' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr><tr><td>负责人：</td><td><input name='fuzeren' type='text' id='fuzeren' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>主营业务：</td><td><input name='zhuyingyewu' type='text' id='zhuyingyewu' value='' size='50' style='border:solid 1px #000000; color:#666666'  /></td></tr><tr><td>门面照片：</td><td><input name='menmianzhaopian' type='text' id='menmianzhaopian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=menmianzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td></tr><tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="添加" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
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
?>
</body>
</html>


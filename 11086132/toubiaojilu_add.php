<?php
session_start();
include_once 'conn.php';

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$biaoti=$_POST["biaoti"];$faburen=$_POST["faburen"];$yusuanqijia=$_POST["yusuanqijia"];$toubiaojine=$_POST["toubiaojine"];$toubiaoshuneirong=$_POST["toubiaoshuneirong"];$fujian=$_POST["fujian"];$toubiaoren=$_POST["toubiaoren"];
	//ischongfu("select id from toubiaojilu where toubiaoren='".$toubiaoren."'");
	$sql="insert into toubiaojilu(biaoti,faburen,yusuanqijia,toubiaojine,toubiaoshuneirong,fujian,toubiaoren) values('$biaoti','$faburen','$yusuanqijia','$toubiaojine','$toubiaoshuneirong','$fujian','$toubiaoren') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='toubiaojilu_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ͷ���¼</title>
<link rel="stylesheet" href="kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="kindeditor-4.1.10/plugins/code/prettify.css" />
	<script charset="utf-8" src="kindeditor-4.1.10/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="toubiaoshuneirong"]', {
				cssPath : 'kindeditor-4.1.10/plugins/code/prettify.css',
				uploadJson : 'kindeditor-4.1.10/php/upload_json.php',
				fileManagerJson : 'kindeditor-4.1.10/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
<script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>���Ͷ���¼�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.biaoti.value==""){alert("���������");document.form1.biaoti.focus();return false;}if(document.form1.faburen.value==""){alert("�����뷢����");document.form1.faburen.focus();return false;}if(document.form1.toubiaojine.value==""){alert("������Ͷ����");document.form1.toubiaojine.focus();return false;}if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.toubiaojine.value))){}else{alert("Ͷ�������������");document.form1.toubiaojine.focus();return false;}if(document.form1.toubiaoren.value==""){alert("������Ͷ����");document.form1.toubiaoren.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
 <?php
 $sql="select * from zhaobiaoxinxi where id=".$_GET["id"];
 $query=mysql_query($sql);
 $rowscount=mysql_num_rows($query);
 if($rowscount>0)
 {
 	$biaoti=mysql_result($query,0,biaoti);
$faburen=mysql_result($query,0,faburen);
$yusuanqijia=mysql_result($query,0,yusuanqijia);

 }
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66FF00" style="border-collapse:collapse">    
	<tr><td>���⣺</td><td><input name='biaoti' type='text' id='biaoti' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr><script language="javascript">document.form1.biaoti.value='<?php echo $biaoti?>';</script><tr><td>�����ˣ�</td><td><input name='faburen' type='text' id='faburen' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><script language="javascript">document.form1.faburen.value='<?php echo $faburen?>';</script><tr><td>Ԥ����ۣ�</td><td><input name='yusuanqijia' type='text' id='yusuanqijia' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><script language="javascript">document.form1.yusuanqijia.value='<?php echo $yusuanqijia?>';</script><tr><td>Ͷ���</td><td><input name='toubiaojine' type='text' id='toubiaojine' value='' style='border:solid 1px #000000; color:#666666' />&nbsp;*&nbsp;����������</td></tr><tr><td>Ͷ�������ݣ�</td><td><textarea name="toubiaoshuneirong" style="width:670px;height:200px;visibility:hidden;"></textarea></td></tr><tr><td>������</td><td><input name='fujian' type='text' id='fujian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=fujian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>Ͷ���ˣ�</td><td><input name='toubiaoren' type='text' id='toubiaoren' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="���" onclick="return check();"  style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
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
			echo "<script>javascript:alert('�Բ��𣬸�Ͷ�����Ѿ����ڣ��뻻����Ͷ����!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>


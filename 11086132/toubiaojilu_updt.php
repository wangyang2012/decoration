<?php
session_start(); 
$id=$_GET["id"];
include_once 'conn.php';

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$biaoti=$_POST["biaoti"];$faburen=$_POST["faburen"];$yusuanqijia=$_POST["yusuanqijia"];$toubiaojine=$_POST["toubiaojine"];$toubiaoshuneirong=$_POST["toubiaoshuneirong"];$fujian=$_POST["fujian"];$toubiaoren=$_POST["toubiaoren"];
	$sql="update toubiaojilu set biaoti='$biaoti',faburen='$faburen',yusuanqijia='$yusuanqijia',toubiaojine='$toubiaojine',toubiaoshuneirong='$toubiaoshuneirong',fujian='$fujian',toubiaoren='$toubiaoren' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('�޸ĳɹ�!');location.href='toubiaojilu_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�޸�Ͷ���¼</title>
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

<link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>�޸�Ͷ���¼�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<?php
$sql="select * from toubiaojilu where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
$editor->Value=mysql_result($query,$i,toubiaoshuneirong);
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66FF00" style="border-collapse:collapse"> 
      <tr><td>���⣺</td><td><input name='biaoti' type='text' id='biaoti' size='50' value='<?php echo mysql_result($query,$i,biaoti);?>' /></td></tr><tr><td>�����ˣ�</td><td><input name='faburen' type='text' id='faburen' value='<?php echo mysql_result($query,$i,faburen);?>' /></td></tr><tr><td>Ԥ����ۣ�</td><td><input name='yusuanqijia' type='text' id='yusuanqijia' value='<?php echo mysql_result($query,$i,yusuanqijia);?>' /></td></tr><tr><td>Ͷ���</td><td><input name='toubiaojine' type='text' id='toubiaojine' value='<?php echo mysql_result($query,$i,toubiaojine);?>' /></td></tr><tr><td>Ͷ�������ݣ�</td><td><textarea name="toubiaoshuneirong" style="width:700px;height:200px;visibility:hidden;"><?php echo mysql_result($query,$i,toubiaoshuneirong);?></textarea></td></tr><tr><td>������</td><td><input name='fujian' type='text' id='fujian' size='50'  value='<?php echo mysql_result($query,$i,fujian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=fujian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>Ͷ���ˣ�</td><td><input name='toubiaoren' type='text' id='toubiaoren' value='<?php echo mysql_result($query,$i,toubiaoren);?>' /></td></tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="�޸�" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="����" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
</body>
</html>


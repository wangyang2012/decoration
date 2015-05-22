<?php
session_start();
include_once 'conn.php';

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$biaoti=$_POST["biaoti"];$jiezhiriqi=$_POST["jiezhiriqi"];$xiangmuneirong=$_POST["xiangmuneirong"];$yusuanqijia=$_POST["yusuanqijia"];$fujian=$_POST["fujian"];$faburen=$_POST["faburen"];
	//ischongfu("select id from zhaobiaoxinxi where faburen='".$faburen."'");
	$sql="insert into zhaobiaoxinxi(biaoti,jiezhiriqi,xiangmuneirong,yusuanqijia,fujian,faburen) values('$biaoti','$jiezhiriqi','$xiangmuneirong','$yusuanqijia','$fujian','$faburen') ";
	mysql_query($sql);
	echo "<script>javascript:alert('添加成功!');location.href='zhaobiaoxinxi_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>招标信息</title>
<link rel="stylesheet" href="kindeditor-4.1.10/themes/default/default.css" />
	<link rel="stylesheet" href="kindeditor-4.1.10/plugins/code/prettify.css" />
	<script charset="utf-8" src="kindeditor-4.1.10/kindeditor.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/lang/zh_CN.js"></script>
	<script charset="utf-8" src="kindeditor-4.1.10/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="xiangmuneirong"]', {
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
<p>添加招标信息： 当前日期： <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.biaoti.value==""){alert("请输入标题");document.form1.biaoti.focus();return false;}if(document.form1.jiezhiriqi.value==""){alert("请输入截止日期");document.form1.jiezhiriqi.focus();return false;}if(document.form1.faburen.value==""){alert("请输入发布人");document.form1.faburen.focus();return false;}
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
	<tr><td>标题：</td><td><input name='biaoti' type='text' id='biaoti' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;*</td></tr><tr><td>截止日期：</td><td><input name='jiezhiriqi' type='text' id='jiezhiriqi' value='' onclick="getDate(form1.jiezhiriqi,'2')" need="1" style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr><tr><td>项目内容：</td><td><textarea name="xiangmuneirong" style="width:670px;height:200px;visibility:hidden;"></textarea></td></tr><tr><td>预算起价：</td><td><input name='yusuanqijia' type='text' id='yusuanqijia' value='' style='border:solid 1px #000000; color:#666666' /></td></tr><tr><td>附件：</td><td><input name='fujian' type='text' id='fujian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=fujian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>发布人：</td><td><input name='faburen' type='text' id='faburen' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' />&nbsp;*</td></tr>

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
			echo "<script>javascript:alert('对不起，该发布人已经存在，请换其他发布人!');history.back();</script>";
			exit;
		}
		
	}
?>
</body>
</html>


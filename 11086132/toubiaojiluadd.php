<?php
session_start();
 if($_SESSION["username"]=="")
 {
	echo "<script>javascript:alert('�Բ��������ȵ�½��');location.href='index.php';</script>";
	exit;
 }
include_once 'conn.php';

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$biaoti=$_POST["biaoti"];$faburen=$_POST["faburen"];$yusuanqijia=$_POST["yusuanqijia"];$toubiaojine=$_POST["toubiaojine"];$toubiaoshuneirong=$_POST["toubiaoshuneirong"];$fujian=$_POST["fujian"];$toubiaoren=$_POST["toubiaoren"];
	$sql="insert into toubiaojilu(biaoti,faburen,yusuanqijia,toubiaojine,toubiaoshuneirong,fujian,toubiaoren) values('$biaoti','$faburen','$yusuanqijia','$toubiaojine','$toubiaoshuneirong','$fujian','$toubiaoren') ";
	mysql_query($sql);
	echo "<script>javascript:alert('�����ɹ�!');location.href='index.php';</script>";
}
?>
<html>
<head>
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

<script language="javascript" src="qtimages/qkjs.js"></script><script language="javascript" src="js/Calendar.js"></script>

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
	if(document.form1.biaoti.value==""){alert("���������");document.form1.biaoti.focus();return false;}if(document.form1.faburen.value==""){alert("�����뷢����");document.form1.faburen.focus();return false;}if(document.form1.toubiaojine.value==""){alert("������Ͷ����");document.form1.toubiaojine.focus();return false;}if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.toubiaojine.value))){}else{alert("Ͷ�������������");document.form1.toubiaojine.focus();return false;}if(document.form1.toubiaoren.value==""){alert("������Ͷ����");document.form1.toubiaoren.focus();return false;}
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
                        <td width="28%" align="center" valign="bottom"><span class="STYLE3">Ͷ���¼</span></td>
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
	<tr><td><span class="STYLE1">���⣺</span></td>
	<td><span style="color: #FFFFFF">
	  <input name='biaoti' type='text' id='biaoti' value='' size='50' style='border:solid 1px #000000; color:#666666'  />
	  &nbsp;*</span></td>
	</tr><script language="javascript">document.form1.biaoti.value='<?php echo $biaoti?>';</script><tr><td><span class="STYLE1">�����ˣ�</span></td>
	<td><span style="color: #FFFFFF">
	  <input name='faburen' type='text' id='faburen' value='' style='border:solid 1px #000000; color:#666666' />
	  &nbsp;*</span></td>
	</tr><script language="javascript">document.form1.faburen.value='<?php echo $faburen?>';</script><tr><td><span class="STYLE1">Ԥ����ۣ�</span></td>
	<td><input name='yusuanqijia' type='text' id='yusuanqijia' value='' style='border:solid 1px #000000' /></td>
	</tr><script language="javascript">document.form1.yusuanqijia.value='<?php echo $yusuanqijia?>';</script><tr><td><span class="STYLE1">Ͷ���</span></td>
	<td><span style="color: #FFFFFF">
	  <input name='toubiaojine' type='text' id='toubiaojine' value='' style='border:solid 1px #000000; color:#666666' />
	  &nbsp;*&nbsp;����������</span></td>
	</tr><tr><td colspan="2"><p class="STYLE1">Ͷ�������ݣ�</p>
	    <span style="color: #FFFFFF">
	    <textarea name="toubiaoshuneirong" style="width:470px;height:200px;visibility:hidden;"></textarea>
	    </span></td>
	  </tr><tr><td><span class="STYLE1">������</span></td>
	<td><span style="color: #FFFFFF">
	  <input name='fujian' type='text' id='fujian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />
	  &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=fujian',460,180)"><font color=white>�ϴ�</font></a></span></td>
	</tr><tr><td><span class="STYLE1">Ͷ���ˣ�</span></td>
	<td><span style="color: #FFFFFF">
	  <input name='toubiaoren' type='text' id='toubiaoren' value='<?php echo $_SESSION['username'];?>' style='border:solid 1px #000000; color:#666666' />
	  &nbsp;*</span></td>
	</tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="ȷ��" onClick="return check();"  style='border:solid 1px #000000; color:#666666' />
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

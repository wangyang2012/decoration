<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$bianhao=$_POST["bianhao"];$mingcheng=$_POST["mingcheng"];$leibie=$_POST["leibie"];$tupian=$_POST["tupian"];$jiage=$_POST["jiage"];$kucun=$_POST["kucun"];$beizhu=$_POST["beizhu"];
	ischongfu("select id from shangpinxinxi where bianhao='".$bianhao."'");
	$sql="insert into shangpinxinxi(bianhao,mingcheng,leibie,tupian,jiage,kucun,beizhu) values('$bianhao','$mingcheng','$leibie','$tupian','$jiage','$kucun','$beizhu') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='shangpinxinxi_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�ޱ����ĵ�</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>��ӼҾ���Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.bianhao.value==""){alert("��������");document.form1.bianhao.focus();return false;}if(document.form1.mingcheng.value==""){alert("����������");document.form1.mingcheng.focus();return false;}if(document.form1.jiage.value==""){alert("������۸�");document.form1.jiage.focus();return false;}if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.jiage.value))){}else{alert("�۸����������");document.form1.jiage.focus();return false;}if(document.form1.kucun.value==""){alert("��������");document.form1.kucun.focus();return false;}if((/^(\+|-)?(0|[1-9]\d*)(\.\d*[1-9])?$/.test(document.form1.kucun.value))){}else{alert("������������");document.form1.kucun.focus();return false;}
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
    <tr>
      <td>��ţ�</td>
      <td><input name='bianhao' type='text' id='bianhao' value='' style='border:solid 1px #000000; color:#666666' />
        &nbsp;*</td>
    </tr>
    <tr>
      <td>���ƣ�</td>
      <td><input name='mingcheng' type='text' id='mingcheng' value='' size='50' style='border:solid 1px #000000; color:#666666'  />
        &nbsp;*</td>
    </tr>
    <tr>
      <td>���</td>
      <td><select name='leibie' id='leibie'>
        <?php getoption("shangpinleibie","leibie")?>
      </select></td>
    </tr>
    <tr>
      <td>ͼƬ��</td>
      <td><input name='tupian' type='text' id='tupian' value='' size='50' style='border:solid 1px #000000; color:#666666'  />
        &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=tupian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td>
    </tr>
    <tr>
      <td>�۸�</td>
      <td><input name='jiage' type='text' id='jiage' value='' style='border:solid 1px #000000; color:#666666' />
        &nbsp;*&nbsp;����������</td>
    </tr>
    <tr>
      <td>��棺</td>
      <td><input name='kucun' type='text' id='kucun' value='' style='border:solid 1px #000000; color:#666666' />
        &nbsp;*&nbsp;����������</td>
    </tr>
    <tr>
      <td>��ע��</td>
      <td><textarea name='beizhu' cols='50' rows='8' id='beizhu' style='border:solid 1px #000000; color:#666666'></textarea></td>
    </tr>
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
			echo "<script>javascript:alert('�Բ��𣬸ñ���Ѿ����ڣ��뻻�������!');history.back();</script>";
		}
		
	}
?>
</body>
</html>


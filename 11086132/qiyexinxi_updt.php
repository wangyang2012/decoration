<?php 
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$qiyebianhao=$_POST["qiyebianhao"];$qiyemingcheng=$_POST["qiyemingcheng"];$leibie=$_POST["leibie"];$lianxidianhua=$_POST["lianxidianhua"];$dizhi=$_POST["dizhi"];$fuzeren=$_POST["fuzeren"];$zhuyingyewu=$_POST["zhuyingyewu"];$menmianzhaopian=$_POST["menmianzhaopian"];$beizhu=$_POST["beizhu"];$mima=$_POST["mima"];
	$sql="update qiyexinxi set qiyebianhao='$qiyebianhao',qiyemingcheng='$qiyemingcheng',leibie='$leibie',lianxidianhua='$lianxidianhua',dizhi='$dizhi',fuzeren='$fuzeren',zhuyingyewu='$zhuyingyewu',menmianzhaopian='$menmianzhaopian',beizhu='$beizhu',mima='$mima' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='qiyexinxi_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改企业信息</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>修改企业信息： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from qiyexinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#33FF33" style="border-collapse:collapse"> 

      <tr><td>企业编号：</td><td><input name='qiyebianhao' type='text' id='qiyebianhao' value='<?php echo mysql_result($query,$i,qiyebianhao);?>' readonly='readonly' /> 此项主键，不得修改</td></tr><tr><td>企业名称：</td><td><input name='qiyemingcheng' type='text' id='qiyemingcheng' size='50' value='<?php echo mysql_result($query,$i,qiyemingcheng);?>' /></td></tr><tr><td>类别：</td><td><span style="color: #FFFFFF">
        <select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666'>
          <option value="装修公司">装修公司</option>
          <option value="建材公司">建材公司</option>
        </select>
      </span></td>
      </tr><script language="javascript">document.form1.leibie.value='<?php echo mysql_result($query,$i,leibie);?>';</script><tr><td>联系电话：</td><td><input name='lianxidianhua' type='text' id='lianxidianhua' value='<?php echo mysql_result($query,$i,lianxidianhua);?>' /></td></tr><tr><td>地址：</td><td><input name='dizhi' type='text' id='dizhi' size='50' value='<?php echo mysql_result($query,$i,dizhi);?>' /></td></tr><tr><td>负责人：</td><td><input name='fuzeren' type='text' id='fuzeren' value='<?php echo mysql_result($query,$i,fuzeren);?>' /></td></tr><tr><td>主营业务：</td><td><input name='zhuyingyewu' type='text' id='zhuyingyewu' size='50' value='<?php echo mysql_result($query,$i,zhuyingyewu);?>' /></td></tr><tr><td>门面照片：</td><td><input name='menmianzhaopian' type='text' id='menmianzhaopian' size='50'  value='<?php echo mysql_result($query,$i,menmianzhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=menmianzhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>备注：</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,$i,beizhu);?></textarea></td></tr><tr><td>密码：</td><td><input name='mima' type='text' id='mima' value='<?php echo mysql_result($query,$i,mima);?>' /></td></tr>
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" style='border:solid 1px #000000; color:#666666' />
      <input type="reset" name="Submit2" value="重置" style='border:solid 1px #000000; color:#666666' /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>


<?php 
include_once 'conn.php';
session_start();

$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	
	$zhanghao=$_POST["zhanghao"];$mima=$_POST["mima"];$xingming=$_POST["xingming"];$xingbie=$_POST["xingbie"];$diqu=$_POST["diqu"];$Email=$_POST["Email"];$zhaopian=$_POST["zhaopian"];
	$sql="select id from yonghuzhuce where zhanghao='".$zhanghao."'";
	$query=mysql_query($sql);
	$rowscount=mysql_num_rows($query);
	if($rowscount>0)
	{
		echo "<script>javascript:alert('�Բ��𣬸��˺��Ѿ����ڣ��뻻�����˺����ԣ���');history.back();</script>";
	}
	else
	{
		$sql="insert into yonghuzhuce(zhanghao,mima,xingming,xingbie,diqu,Email,zhaopian) values('$zhanghao','$mima','$xingming','$xingbie','$diqu','$Email','$zhaopian') ";
		mysql_query($sql);
		
		echo "<script>javascript:alert('ע��ɹ�!�������Ա��˺󷽿�������½��');location.href='index.php';</script>";
	}
}
?>
<html>
<head>
<title>����װ����ҵ��Ϣƽ̨</title>
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
<script language="javascript">
	function check()
{
	if(document.form1.zhanghao.value==""){alert("�������˺�");document.form1.zhanghao.focus();return false;}
	if(document.form1.mima.value==""){alert("����������");document.form1.mima.focus();return false;}
	if(document.form1.mima.value!=document.form1.mima2.value){alert("�Բ����������벻һ�£�������");document.form1.mima.focus();return false;}
	if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}
	if(document.form1.Email.value==""){alert("������Email");document.form1.Email.focus();return false;}
	if(document.form1.zhaopian.value==""){alert("��������Ƭ");document.form1.zhaopian.focus();return false;}
	var strEmail = document.getElementById("Email").value;  
  var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
  var email_Flag = reg.test(strEmail);
  if(email_Flag){
  
  }
  else{
   alert("�Բ���������������ַ��ʽ����");
   return false;
  }

}
	
</script>
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
                        <td width="28%" align="center" valign="bottom"><span class="STYLE3">�û�ע��</span></td>
                        <td width="72%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="766" height="188" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="55" background="">&nbsp;</td>
                        <td width="651" height="816" valign="top" bgcolor="#4F4F4F"><table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66CCCC" style="border-collapse:collapse">
                          <form name="form1" method="post" action="">
                            <tr>
                              <td class="STYLE1">�˺ţ�</td>
                              <td class="STYLE1"><input name='zhanghao' type='text' id='zhanghao' value='' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td class="STYLE1">���룺</td>
                              <td class="STYLE1"><input name='mima' type='password' id='mima' value='' />
                                &nbsp;* ȷ�����룺
                                <input name='mima2' type='password' id='mima2' value='' /></td>
                            </tr>
                            <tr>
                              <td class="STYLE1">������</td>
                              <td class="STYLE1"><input name='xingming' type='text' id='xingming' value='' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td class="STYLE1">�Ա�</td>
                              <td class="STYLE1"><select name='xingbie' id='xingbie'>
                                  <option value="��">��</option>
                                  <option value="Ů">Ů</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td class="STYLE1">������</td>
                              <td class="STYLE1"><select name='diqu' id='diqu'>
                                  <option value="����">����</option>
                                  <option value="����">����</option>
                                  <option value="��˳">��˳</option>
                                  <option value="����">����</option>
                              </select></td>
                            </tr>
                            <tr>
                              <td class="STYLE1">Email��</td>
                              <td class="STYLE1"><input name='Email' type='text' id='Email' value='' />
                                &nbsp;*</td>
                            </tr>
                            <tr>
                              <td class="STYLE1">��Ƭ��</td>
                              <td class="STYLE1"><input name='zhaopian' type='text' id='zhaopian' value='' size='50'  />
                                &nbsp;* <a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input type="hidden" name="addnew" value="1" />
                                  <input type="submit" name="Submit" value="ע��" onClick="return check();" />
                                  <input type="reset" name="Submit2" value="����" /></td>
                            </tr>
                          </form>
                        </table>
                          <p align="center">&nbsp;</p></td><td width="60" background="">&nbsp;</td>
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
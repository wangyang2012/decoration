<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=�Ҿ���Ϣ.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�Ҿ���Ϣ</title>
</head>

<body>

<p>���мҾ���Ϣ�б�</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66FF00" style="border-collapse:collapse">  
  <tr bgcolor="#66FF66">
    <td width="25">���</td>
    <td>���</td>
    <td>����</td>
    <td>���</td>
    <td>ͼƬ</td>
    <td>�۸�</td>
    <td>���</td>
    <td width="120" align="center">���ʱ��</td>
  </tr>
  <?php 
    $sql="select * from shangpinxinxi order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,bianhao);?></td><td><?php echo mysql_result($query,$i,mingcheng);?></td><td><?php echo mysql_result($query,$i,leibie);?></td><td width='80'><a href="<?php echo mysql_result($query,$i,tupian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,tupian) ?>' width='80' height='88' border='0'></a></td><td><?php echo mysql_result($query,$i,jiage);?></td><td><?php echo mysql_result($query,$i,kucun);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>


<?php
session_start();
include_once 'conn.php';
?>
<html>
<head>
<title>贵州装修行业信息平台</title>
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
                <td><table id="__01" width="766" height="265" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table id="__01" width="299" height="265" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><img src="qtimages/1_02_02_01_01_01.gif" width="299" height="17" alt=""></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="299" height="240" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td><img src="qtimages/1_02_02_01_01_02_01.gif" width="20" height="240" alt=""></td>
                            <td width="276" height="240">
							<SCRIPT type=text/javascript>
var focus_width=275;
var focus_height=208;
var text_height=20;
var swf_height = focus_height+text_height;
var pics="";
var links="";
var texts="";
<?php
$sql="select id,biaoti,shouyetupian from xinwentongzhi where shouyetupian<>'' order by id desc";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
for($i=0;$i<5;$i++)
{
	$pics=$pics.mysql_result($query,$i,"shouyetupian")."|";
	$links=$links."gg_detail.php?id=".mysql_result($query,$i,"id")."|";
	$texts=$texts.mysql_result($query,$i,"biaoti")."|";
}
$pics=substr($pics,0,strlen($pics)-1);
$links=substr($links,0,strlen($links)-1);
$texts=substr($texts,0,strlen($texts)-1);
?>

pics="<?php echo $pics;?>";
links="<?php echo $links;?>";
texts="<?php echo $texts;?>";

document.write('<embed src="qtimages/pixviewer.swf" wmode="opaque" FlashVars="pics='+pics+'&links='+links+'&texts='+texts+'&borderwidth='+focus_width+'&borderheight='+focus_height+'&textheight='+text_height+'" menu="false" bgcolor="#ffffff" quality="Best" width="'+ focus_width +'" height="'+ swf_height +'" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">');

</SCRIPT>
							</td>
                            <td><img src="qtimages/1_02_02_01_01_02_03.gif" width="3" height="240" alt=""></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/1_02_02_01_01_03.gif" width="299" height="8" alt=""></td>
                      </tr>
                    </table></td>
                    <td><table id="__01" width="467" height="265" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="467" height="42" background="qtimages/1_02_02_01_02_01.gif"><table width="100%" height="34" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="28%" height="31" align="center" valign="bottom"><a href="news.php?lb=站内新闻"><span class="STYLE3">站内新闻</span></a></td>
                            <td width="72%">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td width="467" height="219" valign="top" bgcolor="#323232"><table width="94%" border="0" align="left" cellpadding="0" cellspacing="0" class="newsline">
                          <?php 
					  $sql="select biaoti,id,addtime from xinwentongzhi where leibie='站内新闻' order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							if($i==8)
							{
								break ;
							}
						?>
                          <tr height="25">
                            <td width="4%" align="center" class="newslist"><img src="qtimages/1.jpg"  /></td>
                            <td width="82%" class="newslist"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><font class="STYLE1">
                              <?php 
								if (strlen(mysql_result($query,$i,"biaoti"))>54)
								{
									echo substr(mysql_result($query,$i,"biaoti"),0,54);
								}
								else
								{
									echo mysql_result($query,$i,"biaoti");
								}
								
								?></font>
                            </a></td>
                            <td width="14%" align="right" class="newslist"><font class="STYLE1"><?php echo date("Y-m-d",strtotime(mysql_result($query,$i,"addtime")));?></font></td>
                          </tr>
                          <?php
						}
					  }
					  ?>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/1_02_02_01_02_03.gif" width="467" height="4" alt=""></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="766" height="217" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="766" height="29" background="qtimages/1_02_02_02_01.gif"><table width="100%" height="22" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="28%" align="center" valign="bottom"><a href="yonghuzhucelist.php"><span class="STYLE3">经典案例</span></a></td>
                        <td width="72%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="766" height="188" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><img src="qtimages/1_02_02_02_02_01.gif" width="55" height="188" alt=""></td>
                        <td width="651" height="188" bgcolor="#4F4F4F"><table width="96%" height="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <?php 
    $sql="select * from xinwentongzhi where shouyetupian<>'' and leibie='装修案例'";
 
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  
	 for($i=0;$i<$rowscount;$i++)
{
	if($i<4)
	{
	
  ?>
                            <td height="181" align="center"><table width="20%" height="175" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td height="149" align="center"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><img src="<?php echo mysql_result($query,$i,"shouyetupian");?>" width="131" height="143" border="0"></a></td>
                                </tr>
                                <tr>
                                  <td height="25" align="center"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>
                                </tr>
                            </table></td>
                            <?php
							}
  	}
  ?>
                          </tr>
                        </table></td>
                        <td><img src="qtimages/1_02_02_02_02_03.gif" width="60" height="188" alt=""></td>
                      </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="766" height="315" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table id="__01" width="381" height="315" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="381" height="27" background="qtimages/1_02_02_03_01_01.gif"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="46%" align="center" valign="bottom"><a href="news.php?lb=装修日志"><span class="STYLE3">装修日志</span></a></td>
                            <td width="54%">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="381" height="280" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td><img src="qtimages/1_02_02_03_01_02_01.gif" width="19" height="280" alt=""></td>
                            <td width="358" height="280" valign="top"><table width="98%" border="0" align="left" cellpadding="0" cellspacing="0" class="newsline">
                              <?php 
					  $sql="select biaoti,id,addtime from xinwentongzhi where leibie='装修日志' order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							if($i==12)
							{
								break ;
							}
						?>
                              <tr height="25">
                                <td width="7%" align="center" class="newslist"><img src="qtimages/1.jpg"  /></td>
                                <td width="93%" class="newslist"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><font class="STYLE1">
                                  <?php 
								if (strlen(mysql_result($query,$i,"biaoti"))>52)
								{
									echo substr(mysql_result($query,$i,"biaoti"),0,52);
								}
								else
								{
									echo mysql_result($query,$i,"biaoti");
								}
								
								?>
                                </font> </a></td>
                                </tr>
                              <?php
						}
					  }
					  ?>
                            </table></td>
                            <td><img src="qtimages/1_02_02_03_01_02_03.gif" width="4" height="280" alt=""></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/1_02_02_03_01_03.gif" width="381" height="8" alt=""></td>
                      </tr>
                    </table></td>
                    <td><table id="__01" width="385" height="315" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="385" height="27" background="qtimages/1_02_02_03_02_01.gif"><table width="100%" height="20" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="39%" align="center" valign="bottom"><a href="news.php?lb=通知通告"><span class="STYLE3">通知通告</span></a></td>
                            <td width="61%">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="385" height="280" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td><img src="qtimages/1_02_02_03_02_02_01.gif" width="4" height="280" alt=""></td>
                            <td width="358" height="280" valign="top"><table width="98%" border="0" align="left" cellpadding="0" cellspacing="0" class="newsline">
                              <?php 
					  $sql="select biaoti,id,addtime from xinwentongzhi where leibie='通知通告' order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							if($i==12)
							{
								break ;
							}
						?>
                              <tr height="25">
                                <td width="8%" align="center" class="newslist"><img src="qtimages/1.jpg"  /></td>
                                <td width="92%" class="newslist"><a href="gg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><font class="STYLE1">
                                  <?php 
								if (strlen(mysql_result($query,$i,"biaoti"))>52)
								{
									echo substr(mysql_result($query,$i,"biaoti"),0,52);
								}
								else
								{
									echo mysql_result($query,$i,"biaoti");
								}
								
								?>
                                </font> </a></td>
                                </tr>
                              <?php
						}
					  }
					  ?>
                            </table></td>
                            <td><img src="qtimages/1_02_02_03_02_02_03.gif" width="23" height="280" alt=""></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="qtimages/1_02_02_03_02_03.gif" width="385" height="8" alt=""></td>
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
<script language="javascript">
function checklog()
{
	if(document.userlog.username.value=="" || document.userlog.pwd1.value=="" || document.userlog.yzm.value=="")
	{
		alert("请输入完整");
		return false;
	}
}
</script>
<table id="__01" width="224" height="797" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><table id="__01" width="224" height="211" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="224" height="48" background="qtimages/1_02_01_01_01.gif"><table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="69%" align="center" valign="bottom"><span class="STYLE3">系统公告</span></td>
                        <td width="31%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="224" height="159" background="qtimages/1_02_01_01_02.gif"><marquee border="0" direction="up" height="148" onMouseOut="start()" onMouseOver="stop()"
                scrollamount="1" scrolldelay="50"><TABLE width="92%" height="100%" 
            border=0 align=center 
      cellPadding=0 cellSpacing=5>
                      <TBODY><TR><TD><font class="STYLE1"><P><?php 
					  $sql="select * from dx where leibie='系统公告'";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	echo mysql_result($query,0,"content");
					  	}
						?></P></font></TD></TR></TBODY></TABLE></marquee></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_01_01_03.gif" width="224" height="4" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="224" height="211" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="224" height="48" background="qtimages/1_02_01_01_01.gif"><table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="69%" align="center" valign="bottom"><span class="STYLE3">用户登陆</span></td>
                        <td width="31%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="224" height="159" background="qtimages/1_02_01_01_02.gif"><?php 
					if ($_SESSION['cx']=="" )
					{
				?>
                      <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
                        <form action="userlog_post.php" method="post" name="userlog" id="userlog">
                          <tr>
                            <td width="12" height="28">&nbsp;</td>
                            <td width="49" height="28"><font class="style1">用户名:</font></td>
                            <td width="109" height="28"><input name="username" type="text" id="username" size="12" style="width:100px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                          </tr>
                          <tr>
                            <td height="28">&nbsp;</td>
                            <td height="28"><font class="style1">密码:</font></td>
                            <td height="28"><input name="pwd1" type="password" id="pwd1" size="12" style="width:100px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                          </tr>
                          <tr >
                            <td height="28">&nbsp;</td>
                            <td height="28"><font class="style1">权限:</font></td>
                            <td height="28"><select name="cx" id="cx">
                                <option value="个人会员">个人会员</option>
								<option value="装修公司">装修公司</option>
								<option value="建材公司">建材公司</option>
                              </select>
                            </td>
                          </tr>
                          <tr>
                            <td height="38" colspan="3" align="center"><input type="submit" name="Submit" value="登陆" style=" height:19px; border:solid 1px #000000; color:#666666" />
                                <input type="reset" name="Submit2" value="重置" style=" height:19px; border:solid 1px #000000; color:#666666" /></td>
                          </tr>
                        </form>
                      </table>
                      <?php 
							}
				  else
				  {
				 ?>
                      <table width="93%" height="68%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="28" align="left"><font class="style1">当前用户：<?php echo $_SESSION['username']?></font></td>
                        </tr>
                        <tr>
                          <td height="28" align="left"><font class="style1">您的权限：<?php echo $_SESSION['cx']?></font></td>
                        </tr>
                        <tr>
                          <td height="28" align="left"><font class="style1">欢迎您的到来!!!</font></td>
                        </tr>
                        <tr>
                          <td height="28" align="center"><input type="button" name="Submit3" value="退出" onclick="javascript:location.href='logout.php';" style=" height:19px; border:solid 1px #000000; color:#666666" />
                              <input type="button" name="Submit22" value="个人后台" onclick="javascript:location.href='main.php';" style=" height:19px; border:solid 1px #000000; color:#666666" /></td>
                        </tr>
                      </table>
                    <?php } ?></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_01_01_03.gif" width="224" height="4" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="224" height="211" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="224" height="48" background="qtimages/1_02_01_01_01.gif"><table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="69%" align="center" valign="bottom"><span class="STYLE3">站内搜索</span></td>
                        <td width="31%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="224" height="159" background="qtimages/1_02_01_01_02.gif"><table width="93%" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                      <form action="news.php" method="post" name="formsearch" id="formsearch">
                        <tr>
                          <td width="19%"><font class="style1">标题</font></td>
                          <td width="81%"><input name="biaoti" type="text" id="biaoti" size="20" style="width:130px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                        </tr>
                        <tr>
                          <td><font class="style1">类别</font></td>
                          <td><select name="lb" style="width:130px; height:20px; border:solid 1px #000000; color:#666666">
                              <?php
								  $sql="select distinct(leibie) from xinwentongzhi";
								  $query=mysql_query($sql);
								$rowscount=mysql_num_rows($query);
								if($rowscount>0)
								{
								for($i=0;$i<$rowscount;$i++)
	 							{
								  ?>
								  <option value="<?php echo mysql_result($query,$i,"leibie")?>"><?php echo mysql_result($query,$i,"leibie")?></option>
								  <?php
								  }
								  }
								  ?>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><input type="submit" name="Submit4" value="提交" style=" height:19px; border:solid 1px #000000; color:#666666" /></td>
                        </tr>
                      </form>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_01_01_03.gif" width="224" height="4" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="224" height="211" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="224" height="48" background="qtimages/1_02_01_01_01.gif"><table width="100%" height="26" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="69%" align="center" valign="bottom"><span class="STYLE3">友情连接</span></td>
                        <td width="31%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td width="224" height="159" valign="top" background="qtimages/1_02_01_01_02.gif"><table class="newsline" cellspacing="0" cellpadding="0" width="94%" 
                  align="center" border="0">
                      <tbody>
                        <?php 
					  $sql="select * from youqinglianjie order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
						?>
                        <tr>
                          <td width="12%" height="25" align="center"><span class="STYLE2"><img src="qtimages/1.jpg" /></span></td>
                          <td width="20%" height="25"><a href="<?php echo mysql_result($query,$i,"wangzhi");?>" target="_blank" ><font class="style1"><?php echo mysql_result($query,$i,"wangzhanmingcheng");?></font></a></td>
                          <td width="68%" height="25"><a href="<?php echo mysql_result($query,$i,"wangzhi");?>" target="_blank" ><font class="style1"><?php echo mysql_result($query,$i,"wangzhi");?></font></a></td>
                        </tr>
                        <?php
						}
					  }
					  ?>
                      </tbody>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="qtimages/1_02_01_01_03.gif" width="224" height="4" alt=""></td>
                  </tr>
                </table></td>
              </tr>
            </table>
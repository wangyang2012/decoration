-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1:3306
-- 生成日期: 2015 年 05 月 22 日 10:17
-- 服务器版本: 5.1.28
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `11086132php`
--

create database if not exists 11086132php;
use 11086132php;

-- --------------------------------------------------------

--
-- 表的结构 `allusers`
--

CREATE TABLE IF NOT EXISTS `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `allusers`
--

INSERT INTO `allusers` (`id`, `username`, `pwd`, `cx`, `addtime`) VALUES
(2, 'yx', 'yx', '系统管理员', '2015-03-19 19:46:56'),
(3, 'admin', 'admin', '普通管理员', '2015-03-19 19:46:56');

-- --------------------------------------------------------

--
-- 表的结构 `dx`
--

CREATE TABLE IF NOT EXISTS `dx` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `dx`
--

INSERT INTO `dx` (`ID`, `leibie`, `content`, `addtime`) VALUES
(1, '关于我们', '<p>\r\n	首页：站内新闻、经典案例、建材超市、装修问答、关于我们、通知通告、个人注册、企业注册、后台<br />\r\n<br />\r\n普通用户：信息浏览、搜索<br />\r\n个人会员：发布招标、发布疑问、装修日志、信息修改<br />\r\n装修公司：查看招标、在线投标、装修答疑、案例管理、信息修改<br />\r\n建材公司：查看招标、产品管理、信息修改<br />\r\n系统管理员：个人会员管理、企业会员管理\r\n</p>', '2015-05-21 15:07:51'),
(2, '系统公告', '<p>\r\n	欢迎大家登录本信息平台，希望大家能够在本网站找到自己需要的资源，谢谢！\r\n</p>\r\n<p>\r\n	资源丰富，应有尽有！\r\n</p>', '2015-05-20 18:00:57');

-- --------------------------------------------------------

--
-- 表的结构 `liuyanban`
--

CREATE TABLE IF NOT EXISTS `liuyanban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `liuyan` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `huifu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=29 ;

--
-- 导出表中的数据 `liuyanban`
--

INSERT INTO `liuyanban` (`id`, `zhanghao`, `zhaopian`, `xingming`, `liuyan`, `addtime`, `huifu`) VALUES
(27, 'yf', 'uploadfile/1427809594z9mp.jpg', '杨枫', '100平多少钱啊？', '2015-05-20 19:03:19', '价格很实惠'),
(28, 'yf', 'uploadfile/1427809594z9mp.jpg', '杨枫', '我想装修田园风格的，价格怎么样？', '2015-05-20 19:03:55', '40000元左右');

-- --------------------------------------------------------

--
-- 表的结构 `pinglun`
--

CREATE TABLE IF NOT EXISTS `pinglun` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `wenzhangID` varchar(255) DEFAULT NULL,
  `pinglunneirong` varchar(1000) DEFAULT NULL,
  `pinglunren` varchar(255) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `biao` varchar(50) DEFAULT NULL,
  `pingfen` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `pinglun`
--


-- --------------------------------------------------------

--
-- 表的结构 `qiyexinxi`
--

CREATE TABLE IF NOT EXISTS `qiyexinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qiyebianhao` varchar(50) DEFAULT NULL,
  `qiyemingcheng` varchar(300) DEFAULT NULL,
  `leibie` varchar(50) DEFAULT NULL,
  `lianxidianhua` varchar(50) DEFAULT NULL,
  `dizhi` varchar(300) DEFAULT NULL,
  `fuzeren` varchar(50) DEFAULT NULL,
  `zhuyingyewu` varchar(300) DEFAULT NULL,
  `menmianzhaopian` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(255) DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `qiyexinxi`
--

INSERT INTO `qiyexinxi` (`id`, `qiyebianhao`, `qiyemingcheng`, `leibie`, `lianxidianhua`, `dizhi`, `fuzeren`, `zhuyingyewu`, `menmianzhaopian`, `beizhu`, `mima`, `addtime`, `issh`) VALUES
(3, '01', '贵州中骏建材有限公司', '建材公司', '0855-6881792', '贵州省贵阳市花溪道63号', '暮景城', '石材', 'uploadfile/1427862910ilfh.jpg', '本公司现有纯白大理石（水晶白），纯黑玄武岩（类似山西黑），褐色大理石（水晶黑）矿山各一座。分别位于江西，贵州及云南。三个矿山分别达到了120亩，500亩及280亩。本公司现正在矿山建立大型石材加工厂。', '01', '2015-04-01 12:37:40', '是'),
(4, '001', '贵州典范装饰设计有限公司', '装修公司', '0851-27735488', '贵州遵义市北京路中建大厦9楼', '张先生 ', '装饰设计、施工、家具建材', 'uploadfile/1427864121xs4p.jpg', '贵州典范装饰设计有限公司是集装饰设计、施工、家具建材一体化的公司，自始至终不让客户花一分冤枉钱的公司宗旨，以朴实严谨的敬业精神赢得客户赞誉。以专业化，个性化服务，公司拥有一支实力强大优秀的设计团队和施工团队。', '001', '2015-04-01 12:54:44', '是'),
(5, '002', '贵州佳品装饰公司', '装修公司', '0851-86967716 ', '贵阳市贵乌北路15号E景天厦M整层 ', '刘先生', '室内、外装饰装修设计和施工', 'uploadfile/1427864792hjb6.jpg', '贵州佳品建筑装饰工程有限公司正式成立于2009年4月，注册资金100万。其前身“波波工作室”成立于1999年，期间积累了丰富的家装、工装经验。佳品建筑装饰工程有限公司主要从事室内、外装饰装修设计和施工的企业，拥有室内外装饰装修设计、施工乙级资质，是集设计、工程施工、工程监理、材料配送、售后服务为一体的专业室内外装饰企业。', '002', '2015-04-01 13:07:08', '是');

-- --------------------------------------------------------

--
-- 表的结构 `shangpinleibie`
--

CREATE TABLE IF NOT EXISTS `shangpinleibie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=23 ;

--
-- 导出表中的数据 `shangpinleibie`
--

INSERT INTO `shangpinleibie` (`id`, `leibie`, `addtime`) VALUES
(19, '木料类', '2015-03-26 00:26:12'),
(20, '石灰类', '2015-03-26 00:26:39'),
(21, '钢金类', '2015-03-26 00:26:49'),
(22, '油漆类', '2015-03-26 00:30:28');

-- --------------------------------------------------------

--
-- 表的结构 `shangpinxinxi`
--

CREATE TABLE IF NOT EXISTS `shangpinxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bianhao` varchar(50) DEFAULT NULL,
  `mingcheng` varchar(50) DEFAULT NULL,
  `leibie` varchar(50) DEFAULT NULL,
  `tupian` varchar(50) DEFAULT NULL,
  `jiage` varchar(50) DEFAULT NULL,
  `kucun` varchar(50) DEFAULT NULL,
  `beizhu` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `xl` int(11) DEFAULT '0',
  `pinpai` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=30 ;

--
-- 导出表中的数据 `shangpinxinxi`
--

INSERT INTO `shangpinxinxi` (`id`, `bianhao`, `mingcheng`, `leibie`, `tupian`, `jiage`, `kucun`, `beizhu`, `addtime`, `xl`, `pinpai`) VALUES
(25, '001', 'A油漆', '油漆类', 'uploadfile/1427301053tg1o.jpg', '680', '453', 'gwgweweh', '2015-03-26 00:30:59', 0, NULL),
(26, '002', 'B钢金', '钢金类', 'uploadfile/1427301089bkcy.jpg', '632', '436', 'egwegwhew', '2015-03-26 00:31:34', 0, NULL),
(27, '003', 'C', '石灰类', 'uploadfile/1427301111f0ix.jpg', '46', '63', 'gwehw', '2015-03-26 00:31:55', 0, NULL),
(28, '004', 'D木板地砖', '木料类', 'uploadfile/1427301142in5w.jpg', '765', '85865', 'hreherh', '2015-03-26 00:32:27', 0, NULL),
(29, '005', 'rhrehe', '石灰类', 'uploadfile/1427304785v9tl.jpg', '563', '643', 'gehre', '2015-03-26 01:33:09', 0, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `toubiaojilu`
--

CREATE TABLE IF NOT EXISTS `toubiaojilu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(300) DEFAULT NULL,
  `faburen` varchar(50) DEFAULT NULL,
  `yusuanqijia` varchar(50) DEFAULT NULL,
  `toubiaojine` varchar(50) DEFAULT NULL,
  `toubiaoshuneirong` text,
  `fujian` varchar(50) DEFAULT NULL,
  `toubiaoren` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `toubiaojilu`
--

INSERT INTO `toubiaojilu` (`id`, `biaoti`, `faburen`, `yusuanqijia`, `toubiaojine`, `toubiaoshuneirong`, `fujian`, `toubiaoren`, `addtime`) VALUES
(5, 'dds ', 'yf', '2323', '4000', '本装修公司装修实惠，另你满意', '', '001', '2015-05-20 19:13:52'),
(6, 'ddfccc', 'yf', '22334', '39988', '可以满足您的要求', '', '001', '2015-05-20 19:14:31');

-- --------------------------------------------------------

--
-- 表的结构 `xinwentongzhi`
--

CREATE TABLE IF NOT EXISTS `xinwentongzhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(500) CHARACTER SET gb2312 DEFAULT NULL,
  `leibie` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `neirong` text CHARACTER SET gb2312,
  `tianjiaren` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shouyetupian` varchar(50) DEFAULT NULL,
  `dianjilv` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=271 ;

--
-- 导出表中的数据 `xinwentongzhi`
--

INSERT INTO `xinwentongzhi` (`id`, `biaoti`, `leibie`, `neirong`, `tianjiaren`, `addtime`, `shouyetupian`, `dianjilv`) VALUES
(205, '地中海风格案例', '装修案例', '<ul class="fa_list2">\r\n	<li>\r\n		户型结构：普通住宅&nbsp;1室2厅1卫\r\n	</li>\r\n	<li>\r\n		房屋面积：95平米\r\n	</li>\r\n	<li>\r\n		装修类型：家庭装修&nbsp;/&nbsp;全包\r\n	</li>\r\n	<li>\r\n		装修费用：3~4万\r\n	</li>\r\n	<li>\r\n		人气指数：<img src="http://tj.zxzhijia.com/Public/nimage/xin_ico.jpg" width="14" height="12" alt="" /> 1063\r\n	</li>\r\n	<li>\r\n		设计风格：地中海风格\r\n	</li>\r\n	<li>\r\n		开工时间：2014-07-22\r\n	</li>\r\n	<li>\r\n		完工时间：2014-08-31\r\n	</li>\r\n</ul>', '001', '2015-03-26 00:15:00', 'uploadfile/1427300281zh4t.jpg', 4),
(206, '欧式奢华风格案例', '装修案例', '<p style="text-indent:2em;">\r\n	<br />\r\n</p>\r\n<ul class="fa_list2">\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">户型结构：普通住宅&nbsp;3室2厅1卫</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">房屋面积：250平米</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">装修类型：家庭装修&nbsp;/&nbsp;全包</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">装修费用：10~12万</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">人气指数：</span><img src="http://tj.zxzhijia.com/Public/nimage/xin_ico.jpg" width="14" height="12" alt="" /><span style="font-family:SimSun;font-size:12px;"> 391</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">设计风格：欧式奢华风格</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">开工时间：2014-08-01</span> \r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">完工时间：2014-11-01<span style="font-size:12px;"><span style="font-family:SimSun;"></span></span></span> \r\n	</li>\r\n</ul>\r\n<p>\r\n	<br />\r\n</p>', '001', '2015-03-26 00:16:53', 'uploadfile/1427300268oyad.jpg', 7),
(207, '现代亮丽风格案例', '装修案例', '<ul class="fa_list2">\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">户型结构：普通住宅&nbsp;2室2厅1卫</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">房屋面积：88平米</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">装修类型：家庭装修&nbsp;/&nbsp;全包</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">装修费用：4~6万</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">人气指数：</span><img src="http://tj.zxzhijia.com/Public/nimage/xin_ico.jpg" width="14" height="12" alt="" /><span style="font-family:SimSun;font-size:12px;"> 461</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">设计风格：现代亮丽风格</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">开工时间：2014-05-01</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">完工时间：2014-10-04</span>\r\n	</li>\r\n</ul>', '001', '2015-03-26 00:19:32', 'uploadfile/1427300370i6fh.jpg', 5),
(208, '清爽自然风格案例', '装修案例', '<ul class="fa_list2">\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">户型结构：普通住宅&nbsp;3室2厅1卫</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">房屋面积：125平米</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">装修类型：家庭装修&nbsp;/&nbsp;全包</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">装修费用：8~10万</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">人气指数：</span><img src="http://tj.zxzhijia.com/Public/nimage/xin_ico.jpg" width="14" height="12" alt="" /><span style="font-family:SimSun;font-size:12px;"> 684</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">设计风格：清爽自然风格</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">开工时间：2015-03-11</span>\r\n	</li>\r\n	<li>\r\n		<span style="font-family:SimSun;font-size:12px;">完工时间：2015-04-28</span>\r\n	</li>\r\n</ul>', '001', '2015-03-26 00:19:42', 'uploadfile/1427300380sbh7.jpg', 6),
(216, '2015年第二届中国家居产业发展年会通知', '通知通告', '<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style="font-family:SimSun;font-size:12px;">2015年1月16日，第二届中国家居产业发展年会在北京国家会议中心隆重召开。本次盛会由中国室内装饰协会、中国林产工业协会、中国建筑装饰装修材料协会、全国工商联家具装饰业商会、北京市家居行业协会、广东省家居业联合会等6家协会联合主办。</span> \r\n</p>\r\n<p>\r\n	<span style="font-family:SimSun;font-size:12px;">400家家居企业，100位企业领袖，1400名行业嘉宾及20余家主流媒体汇聚一堂。本届年会延续了首届中国家居产业发展年会精神，继续系统的总结中国家居产业发展现状，进行了精彩绝伦的专家讲演及家居领袖人物高峰论坛，并对在2014年中为家居行业发展做出突出贡献的企业和个人进行表彰，颁发2014年度中国家居产业百强榜“大雁奖”，堪称中国家居产业中唯一“奥斯卡”地位的产业颁奖盛典。</span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<!--advertisement code begin--><!--advertisement code end-->\r\n<p>\r\n	<br />\r\n</p>', 'yx', '2015-03-26 00:48:05', '', 2),
(218, '关于召开“2015中国家装商业模式创新峰会”的通知', '通知通告', '<p align="center">\r\n	<span style="font-size:12px;">中国室内装饰协会</span><span style="font-size:12px;">中室协〔2015〕6号</span> \r\n</p>\r\n<p align="center">\r\n	<span style="font-size:12px;">关于召开“2015中国家装商业模式创新峰会”的通知</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:12px;">各家装企业及会员单位：</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:12px;">改革开放30多年来，我国家装行业蓬勃发展，取得了一系列令人瞩目的成就。一批优秀企业脱颖而出，为提高人民生活水平作出了贡献。随着经济发展进入新常态，家装行业的新理念、新思维、新模式、新业态不断涌现，尤其是互联网思维席卷而来，行业发展格局与趋势将产生新的调整和变化。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:12px;">家装行业市场潜力大，与百姓生活息息相关。而全国几十万家家装企业，发展参差不齐，行业集成度低，市场规范性差，产品、服务、营销均呈现出高度的同质化。探索一条真正符合时代要求的商业模式和发展道路，对于提高人们生活品质，促进行业良性发展和企业可持续发展意义重大。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:12px;">为推动家装行业转型升级，适应经济发展新常态，中国室内装饰协会决定联合网易家居和新浪家居，共同举办“2015中国家装商业模式创新峰会”。峰会将于2015年5月8日在北京亮马河饭店举行。届时我们将邀请300余名全国知名家装企业家，共同把脉行业发展。通过行业领袖的交流、分享、碰撞，共同探讨家装的未来发展之路。通过家装商业模式创新、营销模式创新、资源整合、信息化建设等热门话题的研讨，寻找提升企业核心竞争力，推动中国家装行业进一步向规范化、成熟化方向的思路。请广大家装企业及会员单位积极支持参与。</span> \r\n</p>\r\n<div align="left">\r\n	<span></span><span></span><span></span><span></span><span></span><span></span><span></span> \r\n</div>', 'yx', '2015-03-26 00:48:05', '', 6),
(219, '文明上网 共建和谐”网上征文和知识竞赛活动', '通知通告', '<p align="center">\r\n	<table cellspacing="20" cellpadding="0" align="center">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<a href="http://wenming.people.com.cn/GB/index.html" target="_blank"><img alt="" src="http://pic2.66wz.com/0/10/26/16/10261643_262695.jpg" border="0" /></a>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n<a href="http://wenming.people.com.cn/GB/index.html" target="_blank">点击进入活动专题页面</a> \r\n</p>\r\n<p>\r\n	为推动网络文明建设，营造遵守法律和社会公德的网络环境，抵制庸俗、低俗、媚俗之风，“文明上网，共建和谐”网上征文和知识竞赛活动今天隆重推出。活动邀请广大网民畅谈文明上网体会，讲述亲身经历的上网故事，抒写文明上网的体验和心得，积极参与网上知识竞赛答题，为共同营造纯净、和谐的网络空间贡献心智、共享心得。\r\n</p>', 'yx', '2015-03-26 00:48:06', '', 5),
(220, '中国室内装饰协会2014入会通知', '通知通告', '<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<div style="text-align:center;">\r\n	<span style="font-family:SimSun;line-height:1.5;"></span><span style="font-family:SimSun;line-height:1.5;">关于发展中国室内装饰协会</span> \r\n</div>\r\n<span style="font-family:SimSun;">团体会员、个人会员、理事单位的通知</span><br />\r\n<span style="font-family:SimSun;">行业内各有关企业：</span><br />\r\n<span style="font-family:SimSun;"> 中国室内装饰协会（CIDA）是根据中华人民共和国国务院指示，由政府批准组建的室内装饰行业全国性组织。成立于1988年,是具有法人地位的社会经济团体和自律性行业管理组织。业务上受政府有关部门指导和监督，并受政府委托承担行业管理工作。2004年成为国际室内设计师/室内建筑师联盟（IFI）国家级团体成员。</span><br />\r\n<span style="font-family:SimSun;"> 我会的宗旨是贯彻国家政策法令，联合全国从事室内装饰、室内设计、环境艺术设计行业的企业事业单位、社会团体和从业人员，发展内需经济，推动室内装饰及家居产业发展，成为政府和企业间的桥梁和纽带，为政府服务，为行业服务，为企业服务，为室内设计师服务。维护从业者和消费者的合法权益，建立室内装饰及家居产业市场秩序，促进室内装饰企业持续、快速、健康发展。 </span><br />\r\n<span style="font-family:SimSun;"> 我们热诚欢迎全国室内装饰行业产业链中的各企事业单位和个人加入中国室内装饰协会，现将入会有关事项通知如下：</span> \r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<span style="font-family:SimSun;"> 一、 本协会的会员分为团体会员、个人会员和理事单位</span><br />\r\n<span style="font-family:SimSun;"> 凡从事室内装饰设计、施工、科研教学、中介服务、装饰材料和用品生产经营的团体和个人均可申请加入本协会。</span><br />\r\n<span style="font-family:SimSun;"> 二、 申请加入本协会的会员，须具备下列条件：</span><br />\r\n<span style="font-family:SimSun;"> 入会需拥护本协会的章程并提出自愿申请，入会者在业内应具有一定品牌影响力和诚信度，个人会员应具备从业资格，无不良社会记录。团体会员须取得工商登记执照或法人地位。</span><br />\r\n<span style="font-family:SimSun;"> 申请理事单位须为本协会会员，另具备下列条件：</span><br />\r\n<span style="font-family:SimSun;"> 1.企业的社会信誉优良，全国知名度高，具有较高的公信力、号召力、影响力、有良好的信誉、口碑和知名度；</span><br />\r\n<span style="font-family:SimSun;"> 2.企业在产品质量、环保、技术创新、诚信经营等方面表现优异或作出贡献；</span><br />\r\n<span style="font-family:SimSun;"> 3.企业主营业务、规模、产业技术水平等方面应居同行业前列，综合竞争力突出，在产品研发、设计以及市场销量和用户口碑方面表现优异；</span><br />\r\n<span style="font-family:SimSun;"> 4.企业每年的市场增长率、销售总量、利润等方面都有突出业绩； </span><br />\r\n<span style="font-family:SimSun;"> 5.自觉遵守中国室内装饰协会章程，执行协会决议，维护协会合法权益，按时交纳会费；</span><br />\r\n<span style="font-family:SimSun;"> 6.热心本协会工作，积极参加协会组织的各类活动，按期参加理事会等相关会议，主动向本会反映相关情况，提供有关信息，承担并完成本会委托的工作。</span><br />\r\n<span style="font-family:SimSun;"> 三、 会员入会的程序：</span><br />\r\n<span style="font-family:SimSun;"> 入会者须向秘书处提交入会申请表；经理事会备案并授权秘书处颁发会员证书。</span><br />\r\n<span style="font-family:SimSun;"> 申请理事单位须为本会会员，向秘书处提交理事单位申请表；经理事会备案审批并授权秘书处颁发理事单位铜牌；同时理事单位的法人代表将被推荐为中国室内装饰协会理事会理事候选人。</span><br />\r\n<span style="font-family:SimSun;"> 四、 会员享有下列权利：</span><br />\r\n<span style="font-family:SimSun;"> 1、本协会的选举权、被选举权和表决权；2、参加本协会的活动；3、获得本协会服务的优先权；4、享有对本协会工作的批评建议权和监督权；5、有提请本协会保护其合法权益不受侵害的权力；5、退会自由。</span><br />\r\n<span style="font-family:SimSun;"> 五、会员履行下列义务：</span><br />\r\n<span style="font-family:SimSun;"> 1、承认本协会章程，执行本协会决议，遵守行规行约；2、维护本协会的合法权益；3、完成本协会交办的工作；4、向本协会反应情况，提供有关资料；5、按规定交纳会费。</span><br />\r\n<span style="font-family:SimSun;"> 六、 会员退会应书面通知本协会，并交回会员证。会员如果1年不交纳会费或不参加本协会活动的，视为自动退会。</span><br />\r\n<span style="font-family:SimSun;"> 七、 会员如有严重违反本协会章程的行为，经常务理事会表决通过，予以除名。</span><br />\r\n<span style="font-family:SimSun;"> 八、中国室内装饰协会个人会员分为两类，第一类为专业会员，第二类为普通会员。</span><br />\r\n<span style="font-family:SimSun;"> 1、专业会员：凡具有大专以上文化水平，从事室内设计工作二年以上的专业设计人员，或已取得中国室内装饰协会评定的助理室内设计师以上职业资格的专业室内设计人员，均可申请成为中国室内装饰协会专业会员。</span><br />\r\n<span style="font-family:SimSun;"> 2、普通会员：凡从事室内装饰工程施工、生产经营、科研教育、中介服务和管理工作的人员，均可申请成为中国室内装饰协会普通会员。</span><br />\r\n<span style="font-family:SimSun;">九、中国室内装饰协会个人会员，由中国室内装饰协会颁发《中国室内装饰协会会员证》，会员可使用“中国室内装饰协会会员”或“中国室内装饰协会专业会员”名衔。</span><br />\r\n<span style="font-family:SimSun;"> 十、中国室内装饰协会个人会员的权利与义务同团体会员。</span><br />\r\n<span style="font-family:SimSun;"> 十一、财务手续：</span><br />\r\n<span style="font-family:SimSun;"> 1、团体或个人如需入会，请填写申请表、签名盖章后邮寄或传真至协会秘书处。</span><br />\r\n<span style="font-family:SimSun;"> 2、会费：团体会员会费每年1500元；个人会员会费每年300元；理事单位会费每年3000元；团体会员、理事单位铜牌费400元。</span><br />\r\n<span style="font-family:SimSun;"> 3、协会帐户：</span><br />\r\n<span style="font-family:SimSun;"> 户名：中国室内装饰协会</span><br />\r\n<span style="font-family:SimSun;"> 帐号：0200003609014400248 </span><br />\r\n<span style="font-family:SimSun;"> 开户行：中国工商银行北京礼士路支行</span><br />\r\n<span style="font-family:SimSun;"> 十二、通讯联络：</span><br />\r\n<span style="font-family:SimSun;"> 我们致于发展更多的业内优秀企业加入中国室内装饰协会。我们将帮助广大的会员企业在协会大家庭里认识更多的室内设计师、装饰企业家朋友和合作伙伴与您共同成长进步。欢迎各有关企业和个人与我们联络。</span> \r\n</p>\r\n<p>\r\n	<span style="font-family:SimSun;"> 地址：北京市朝阳区北四环东路65号居然之家1号馆7层-7005室</span><br />\r\n<span style="font-family:SimSun;"> 邮编：100101 </span><br />\r\n<span style="font-family:SimSun;"> 联系电话：13581915000 </span><br />\r\n<span style="font-family:SimSun;"> 传真：010-84631620&nbsp;&nbsp;&nbsp; 联系人：蒋佳丽 </span><br />\r\n</p>\r\n<p align="right">\r\n	<span style="font-family:SimSun;">中国室内装饰协会</span><br />\r\n2013年2月\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<!--advertisement code begin--><!--advertisement code end-->\r\n<p>\r\n	<br />\r\n</p>', 'yx', '2015-03-26 00:48:06', '', 3),
(221, '墙纸墙布专业委员会发展会员的通知', '通知通告', '<p align="center">\r\n	<span style="font-family:SimSun;font-size:12px;">关于发展中国室内装饰协会墙纸墙布专业委员会会员的通知</span> \r\n</p>\r\n<p>\r\n	<span style="font-family:SimSun;font-size:12px;">各地方协会、行业内各有关企业：</span> \r\n</p>\r\n<p>\r\n	<span style="font-family:SimSun;font-size:12px;">中国室内装饰协会(CIDA)是根据中华人民共和国国务院指示，由政府批准组建的室内装饰行业全国性组织。成立于1988年,是具有法人地位的社会经济团体和自律性行业管理组织。业务上受政府有关部门指导和监督，并受政府委托承担行业管理工作。中国室内装饰协会墙纸墙布专业委员会是中国室内装饰协会下属的分支机构，在中国室内装饰协会的领导下开展工作。墙纸墙布专业委员会是由墙纸墙布生产和销售企业、原材料商、事业单位和相关社会团体自愿组成。英文全称： China National Interior Decoration Association Wallcovering Association。英文缩写：CIDAWA，简称中室协墙纸委。本会实行单位会员制，凡依法取得工商登记的墙纸墙布相关企业以及具有法人资格的相关事业单位、社会团体提出申请，遵守本会章程，均可加入本会。</span> \r\n</p>\r\n<p>\r\n	<span style="font-family:SimSun;font-size:12px;">我会的宗旨是贯彻国家政策法令，联合全国从事墙纸墙布行业生产、经营企业与室内装饰、室内设计、环境艺术设计、室内陈设艺术行业的企业事业单位、社会团体和从业人员，发展内需经济，推动墙纸墙布产业与室内装饰及家居产业发展，成为政府和企业间的桥梁和纽带，为政府提供咨询，为行业服务，为墙纸墙布企业服务。维护从业者和消费者的合法权益，建立墙纸墙布产业与室内装饰及家居产业市场秩序，促进墙纸墙布企业与室内装饰企业持续、快速、健康发展。</span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p align="right">\r\n	<span style="font-family:SimSun;font-size:12px;">中国室内装饰协会代章</span> \r\n</p>\r\n<p align="right">\r\n	<span style="font-family:SimSun;font-size:12px;">2015年2月6日</span> \r\n</p>', 'yx', '2015-03-26 00:48:06', '', 8),
(248, '简约风格案例', '装修案例', '设计师以欧式新古典凸显空间的堂皇与奢华之美，同时也融合了多元化的简约元素。整个设计以深咖色为基调，香槟金色的线条作为雕饰，暖色系的皮革和墙纸为填充材质，而皮纹元素始终贯穿于每个空间，呈现的是唯美舒适温馨感。每一房间的空间布置都合理恰当，略带奢侈的皮袍地毯给这个简约空间提升了档次。更衣室的鸭蛋型木藤椅可以让整个人蜷缩进去，独享一人世界，但是如果在软装上花点小心思就会呈现出不一样的时尚和个性。本案例中，设计师在灰色米色的基调下大胆搭配了鲜艳的黄色、红色、蓝色点缀，顿时让整个简约的家焕发了活力。', '001', '2015-03-26 01:32:43', 'uploadfile/14273047625sar.jpg', 26),
(250, ' 贵阳家装选择竹地板装修业主应该知道的选材知识', '站内新闻', '<p class="MsoNormal" style="text-align:center;">\r\n	<strong><span style="font-size:12px;">&nbsp;</span></strong><strong><span style="font-size:12px;">贵阳家装选择竹地板装修业主应该知道的选材知识</span></strong><b></b>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">&nbsp; 家庭装修过程中选择地板很重要，选择很多装修业主都在选择竹地板，竹地板环保、低碳，竹地板以其优良的内在品质和赏心悦目的外观，逐渐受到消费者的青睐。竹地板近年在我国南方和东南亚一些国家较为流行。它的天然色泽十分美观、富有弹性、防潮、不发霉、硬度强、冬暖夏凉，用竹子的弧面作为外观面，有一种独特的韵味。</span><span style="font-size:12px;">贵阳家装</span><span style="font-size:12px;">板装修业主应该知道的选材知识。</span><span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">&nbsp;</span><img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401071658_27429.jpg" alt="" width="570" height="335" title="" align="" />\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">1、看产品资料是否齐全。正规产品国家明文规定应有一套完整的产品资料，包括生产厂家、品牌、产品标准、检验等级、使用说明、售后服务等资料，资料齐备产品，说明该生产企业是具有一定规模的正规企业，即使出现问题消费者也有据可查。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">2、产品外观质量先观其地板色泽，本色地板色泽金黄色，通体透亮；碳化竹地板是古铜色或褐色，颜色均匀而有光泽感。将地板置于光线好处，看其表面有无气泡、麻点、桔皮现象，再看其漆面是否丰厚、饱满、平整。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">3、内在质量观地板结构是否对称平衡：可从竹地板的两端断面，是否符合对称平衡原则，若符合结构就稳定。地板层与层间胶合是否紧密：用两手掰，是否会出现分层。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">4、竹地板加工精度可以随机抽取几块将其进行嵌入拼合，就能判断出来，方法是随机到</span><span style="font-size:12px;">4-5</span><span style="font-size:12px;">块竹地板，用砌砖式的错位拼合竹地板，看看两边的妆缝是否密实，两头是否由于角度误差产生拼缝，用手摸一摸结合处是否存在高低不平的现象等等。</span><span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">&nbsp;</span><img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401071719_62193.jpg" alt="" width="570" height="458" title="" align="" />\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">5、望，看颜色等。首先看表面，漆上无气泡，是否清新亮丽，竹节是否太黑，表面有无胶线，然后看四周有无裂缝，有无批灰痕迹，是否干净整洁，再就是看背面有无竹青竹黄剩余，是否干净整洁。一切看完后还要验货，看样品与实物是否有差距。总之好的竹地板给人以新鲜亮丽的感觉，竹纹清晰、纤维活跃；而次的竹地板则给人以浑浊模糊的感觉；质量好的竹地板同一板中竹片与竹片之间色差较小。此外，选择竹地板时还要注意看面漆底下是否有灰色霉斑及虫眼等缺陷。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">6、闻，闻气味。好的竹地板仍旧会保留有竹子的香气，一般的竹地板没有香气，而差的竹地板则有霉味。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">7、触摸与观察横切面。运用手和足去触摸竹地板，看是否舒适、平整等</span><span style="font-size:12px;">;</span><span style="font-size:12px;">观察横切面，看是否为全竹产品，现在有一些仿竹的地板，要学会观察，避免以次充好。</span><span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">&nbsp;</span><img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401071736_58757.jpg" alt="" width="570" height="380" title="" align="" />\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">贵州装修行业信息平台</span><a href="http://127.0.0.1/11086132/index.php" target="_blank"><span style="color:#CC33E5;font-size:12px;">http://127.0.0.1/11086132</span></a><span style="font-size:12px;">为业主提供免费发布装修招标、免费量房、免费装修设计、免费装修预算的装修服务，为业主装修精打细算排忧解难。</span><span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">&nbsp;</span>\r\n</p>', 'yx', '2015-04-01 15:21:27', 'uploadfile/1427872885qxjt.jpg', 5),
(251, '小户型住房的玄关设计装修搭配', '站内新闻', '<p class="MsoNormal" align="center" style="text-align:center;background:white;">\r\n	<b><span style="font-size:12px;">小户型住房的玄关设计装修搭配</span></b>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">&nbsp;小户型住房的玄关一般也就那么几平方米，一个有限的小空间你要怎样合理利用空间对小户型玄关进行装修搭配呢？</span><span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">&nbsp;</span><img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401073018_73921.jpg" alt="" width="580" height="405" title="" align="" />\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">小户型玄关装修搭配推荐一：</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;font-size:12px;">玄关的装修搭配风格要与家居整体装修风格相搭配。如地中海风格的家居装修，玄关的装修风格也应该是地中海风格，白色的撞墙、蓝色的玄关柜、很有的特色的小吊灯，让人们一进门就知道是地中海风格的家居装修。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">小户型玄关装修搭配推荐二：</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">有些小户型玄关比较狭长，对于狭长型的玄关要怎样进行合理的装修呢？合理利用有限的空间也是能够放置玄关柜的。玄关柜的形状尽量简约化，不宜太宽而占用更多的地面空间，选用扁长的玄关柜比较合适，还可以放置一些装饰物在柜子顶部起到装饰作用。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">小户型玄关装修搭配推荐三：</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">小户型玄关空间小，合理利用空间，巧妙应用饰品的装饰。每一件小小的装饰品都是家居装修中的一个小细节，从细节中品味家居主人的生活气息。简单饰品的组合却能够给人们带来不简单的视觉效果和内心感触。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">&nbsp;小户型玄关装修搭配推荐四：</span><span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">玄关墙壁挂衣物、包包之类的家居用品，地面上摆放鞋子的玄关装饰搭配最适合小户型玄关装修。墙壁上固定几个挂钩用于挂衣服、包、围巾，搭建几块隔板用于放置和收纳东西，在安置一个合适的换鞋凳，凳子下面放置鞋子，所有东西井然有序。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">小户型玄关装修搭配推荐六：</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">一进门便是客厅全景，没有玄关会让人感觉居室环境过于太单调。根据居室格局大小为一进的空间打造合适的玄关造型，搭配合适的吊顶更能体现室内玄关的功能性。这样的玄关装修让整个居室更饱满更有生活情趣。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;">贵州装修行业信息平台</span><a href="http://127.0.0.1/11086132/index.php" target="_blank"><span style="color:#CC33E5;font-size:12px;">http://127.0.0.1/11086132</span></a><span style="font-size:12px;">为业主提供免费发布装修招标、免费量房、免费装修设计、免费装修预算的装修服务，为业主装修精打细算排忧解难。</span>\r\n</p>', 'yx', '2015-04-01 15:30:43', 'uploadfile/1427873441wc4p.jpg', 4),
(252, '不规则形状吊顶造型怎么设计', '站内新闻', '<p class="MsoNormal" style="text-align:center;">\r\n	<b>不规则形状吊顶造型怎么设计</b> \r\n</p>\r\n<p class="MsoNormal">\r\n	现代住宅中，一些不规则户型受到个性一族业主的青睐，有趣的弧线角度、尖顶斜墙等，外观虽然不如常规方正户型空间利用方便，但处理得当，也别有一番意境。不规则形状的户型中的吊顶造型是不容忽视的，那么，怎么设计不规则形状吊顶好呢？<span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401073348_97604.jpg" alt="" width="580" height="387" title="" align="" /> \r\n</p>\r\n<p class="MsoNormal">\r\n	1.楼梯下的空间，不管是怎样的不规则，至少会有<span>3-5</span>平米的空间，一般多为三角形，除了可封闭起来做贮藏间外，还可以利用此不规则区域做成展示区域，楼梯下的吊顶造型，可以沿着狭长的走线，做成夸张斜线吊顶，形成斜线的延续，也少了普通吊顶做法的生硬；\r\n</p>\r\n<p class="MsoNormal">\r\n	2.对于有斜顶天窗的卧室空间，一般面积不大，通风采光条件较好。这种不规则空间，可以在房梁上设计一段弧形吊顶，有效缓解视觉上的压迫感，美观卧室的同时，有能耐防风遮光。弧形吊顶设计好后，将弧形的落地窗加上弧形木窗格和帷幔，环绕卧室大床，突出弧形卧室的主题。对于这种斜顶小阁楼式的空间，都会有多处斜面处理，吊顶设计的时候，还可将斜屋顶下安排为安静的工作区域，如：书房、音乐屋等。\r\n</p>\r\n<p class="MsoNormal" style="text-indent:14.25pt;">\r\n	小结：对于一些多边形或者梯形等不规则形状空间，会给主人造成不良的感觉，设计时首先应合理分割空间，可以将整体分割成几个功能区域，运用半透明玻璃、沙发、柜子等实体界面划分；吊顶造型部分设计尽量采用圆弧形状化解尖锐的感觉，通过柔和灯光设置配合，是不规则空间显得不那么突兀及古怪。\r\n</p>\r\n<p class="MsoNormal">\r\n	贵州装修行业信息平台<span><a href="http://127.0.0.1/11086132/index.php" target="_blank"><span style="color:#CC33E5;">http://127.0.0.1/11086132</span></a></span>为业主提供免费发布装修招标、免费量房、免费装修设计、免费装修预算的装修服务，为业主装修精打细算排忧解难。\r\n</p>', 'yx', '2015-04-01 15:35:29', 'uploadfile/1432038597kkkv.jpg', 4),
(253, '&#8203;卫生间防水施工工艺及注意', '站内新闻', '<p class="MsoNormal" style="text-align:center;">\r\n	<b><span style="font-size:12px;">卫生间防水施工工艺及注意</span><span></span></b> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;"> <span style="line-height:1.5;">一、施工准备</span></span><span class="apple-converted-space" style="font-size:12px;"><span style="font-size:12px;"> </span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">（一）作业条件</span><span class="apple-converted-space" style="font-size:12px;"><span style="font-size:12px;"> </span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">1．厨厕间楼地面垫层已完成，穿过厨厕间地面及楼面的所有立管、套管已完成，并己固定牢固，经过验收。管周围缝隙用</span><span style="font-size:12px;line-height:1.5;">1</span><span style="font-size:12px;line-height:1.5;">∶2∶4 豆石混凝土填塞密实（楼板底需吊模板）。</span><span class="apple-converted-space" style="font-size:12px;"><span style="font-size:12px;"> </span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">2．厨厕间楼地面找平层已完成，标高符合要求，表面应抹平压光、坚实。平整，无空鼓、裂缝、起砂等缺陷，含水率不大于</span><span style="font-size:12px;line-height:1.5;">9</span><span style="font-size:12px;line-height:1.5;">％。</span><span class="apple-converted-space" style="font-size:12px;"><span style="font-size:12px;"> </span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">3．找平层的泛水坡度应在</span><span style="font-size:12px;line-height:1.5;">2</span><span style="font-size:12px;line-height:1.5;">％ （即</span><span style="font-size:12px;line-height:1.5;">1</span><span style="font-size:12px;line-height:1.5;">∶50），以上不得局部积水，与墙交接处及转角处、管根部，均要抹成半径为</span><span style="font-size:12px;line-height:1.5;">100mm </span><span style="font-size:12px;line-height:1.5;">的均匀一致、平整光滑的小圆角、要用专用抹子。凡是靠墙的管根处均要抹出</span><span style="font-size:12px;line-height:1.5;">5</span><span style="font-size:12px;line-height:1.5;">％（</span><span style="font-size:12px;line-height:1.5;">1</span><span style="font-size:12px;line-height:1.5;">∶20）坡度，避免此处积水。</span><span class="apple-converted-space"><span></span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">4．涂刷防水层的基层表面，应将尘土、杂物清扫干净，表面残留灰浆硬块及高出部分应刮平，扫。对管根周围不易清扫的部位，应用毛刷将灰尘等清除，如有坑洼不平处或阴阳角未抹成圆弧处，可用众霸胶∶水泥∶砂＝</span><span style="font-size:12px;line-height:1.5;">1</span><span style="font-size:12px;line-height:1.5;">∶1.5∶2.5 砂浆修补。</span><span class="apple-converted-space" style="font-size:12px;"><span style="font-size:12px;"> </span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">5．基层做防水涂料之前，在突出地面和墙面的管根、地漏。排水口、阴阳角等易发生渗漏的部位，应做附加层增补。</span><span class="apple-converted-space" style="font-size:12px;"><span style="font-size:12px;"> </span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">6．厨厕间墙面按设计要求及施工规定</span><span style="font-size:12px;line-height:1.5;">(</span><span style="font-size:12px;line-height:1.5;">四周至少上卷</span><span style="font-size:12px;line-height:1.5;">300mm)</span><span style="font-size:12px;line-height:1.5;">有防水的部位，墙面基层抹灰要压光，要求平整，无空鼓、裂缝、起砂等缺陷。穿过防水层的管道及固定卡具应提前安装，并在距管</span><span style="font-size:12px;line-height:1.5;">50mm </span><span style="font-size:12px;line-height:1.5;">范围内凹进表层</span><span style="font-size:12px;line-height:1.5;">5mm</span><span style="font-size:12px;line-height:1.5;">，管根做成半径为</span><span style="font-size:12px;line-height:1.5;">10mm </span><span style="font-size:12px;line-height:1.5;">的圆弧。</span><span class="apple-converted-space" style="font-size:12px;"><span style="font-size:12px;"> </span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">7．根据墙上的</span><span style="font-size:12px;line-height:1.5;">50cm </span><span style="font-size:12px;line-height:1.5;">标高线，弹出墙面防水高度线，标出立管与标准地面的交界线，涂料涂刷时要与此线平。</span><span class="apple-converted-space" style="font-size:12px;"><span style="font-size:12px;"> </span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">8．厨厕间做防水之前必须设置足够的照明设备</span><span style="font-size:12px;line-height:1.5;">(</span><span style="font-size:12px;line-height:1.5;">安全低压灯等</span><span style="font-size:12px;line-height:1.5;">)</span><span style="font-size:12px;line-height:1.5;">和通风设备。</span><span class="apple-converted-space" style="font-size:12px;"><span style="font-size:12px;"> </span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">9．防水材料一般为易燃有毒物品，储存、保管和使用要远离火源，施工现场要备有足够的灭火器材，施工人员要着工作服，穿软底鞋，并设专业工长监管。</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">10．环境温度保持在</span><span style="font-size:12px;line-height:1.5;">+5</span><span style="font-size:12px;line-height:1.5;">℃以上。</span><span class="apple-converted-space"><span></span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">11．操作人员应经过专业培训，持证上岗，先做样板间，经检查验收合格，方可全面施工。</span><span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;"> <img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401073946_86514.jpg" alt="" width="580" height="380" title="" align="" /></span> \r\n</p>\r\n<p class="MsoNormal" align="left">\r\n	<br />\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">（二）材质要求</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">HB</span><span style="line-height:1.5;">厨卫专用防水涂料是在防水涂料市场中的一次飞跃，它既具有</span><span style="line-height:1.5;">SBS</span><span style="line-height:1.5;">改性沥青卷材良好的耐候性、防水性、稳定性等优点，又易于成型为一整体防水膜，是理想的防水材料。该产品是以石油沥青为基料，高分子聚合物改性</span><span style="line-height:1.5;">,</span><span style="line-height:1.5;">与增塑剂和填充料制成的高性能、低价格的厚质涂料。</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">其性能指标如下：</span><span style="line-height:1.5;">HB</span><span style="line-height:1.5;">厨卫专用防水涂料性能技术指标</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">性能指标</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">固 含 量：</span><span style="line-height:1.5;">% ≥ 43</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">低温柔性：℃</span><span style="line-height:1.5;"> -10 -15</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">耐 热 性：℃</span><span style="line-height:1.5;"> 80</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">不透水性：</span><span style="line-height:1.5;">MPa 0.1,30min</span><span style="line-height:1.5;">不透水</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">粘结强度：</span><span style="line-height:1.5;"> ≥ 0.2</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">延 伸 性</span><span style="line-height:1.5;">: mm </span><span style="line-height:1.5;">无处理</span><span style="line-height:1.5;">≥ 5 </span><span style="line-height:1.5;">热、紫、碱</span><span style="line-height:1.5;">≥ 3.5</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">耐 碱 性</span><span style="line-height:1.5;">:23±2</span><span style="line-height:1.5;">℃温度下</span><span style="line-height:1.5;">,Ca(OH)2</span><span style="line-height:1.5;">饱和液浸泡</span><span style="line-height:1.5;">7d</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">耐 酸 性：</span><span style="line-height:1.5;">23±2</span><span style="line-height:1.5;">℃温度下</span><span style="line-height:1.5;">,2%H2SO4</span><span style="line-height:1.5;">溶液浸泡</span><span style="line-height:1.5;">7d</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">干燥时间：</span><span style="line-height:1.5;">h ≤ </span><span style="line-height:1.5;">表干</span><span style="line-height:1.5;">2 </span><span style="line-height:1.5;">实干</span><span style="line-height:1.5;">10</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">（三）工器具</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">主要机具：电动搅拌器、搅拌捅、小漆桶、塑料刮板、铁皮小刮板、橡胶刮板、弹簧秤、毛刷、滚刷、小抹子、油工铲刀、笤帚等。</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;">贵州装修行业信息平台</span><span><span style="line-height:1.5;"><a href="http://127.0.0.1/11086132/index.php" target="_blank"><span style="color:#CC33E5;">http://127.0.0.1/11086132</span></a></span></span><span style="line-height:1.5;">为业主提供免费发布装修招标、免费量房、免费装修设计、免费</span><span style="line-height:1.5;"> </span><span style="line-height:1.5;">装修预算的装修服务，为业主装修精打细算排忧解难。</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;"> </span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;"> </span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;"> </span> \r\n</p>', 'yx', '2015-04-01 15:41:36', 'uploadfile/14278740665n7j.jpg', 4),
(254, '贵阳室内装饰为你讲解艺术漆的妙用', '站内新闻', '<p class="MsoNormal" style="text-align:center;">\r\n	<b>贵阳室内装饰为你讲解艺术漆的妙用<span></span></b> \r\n</p>\r\n<p class="MsoNormal">\r\n	<b> </b><span style="line-height:1.5;">艺术漆的全名就是墙面艺术涂料，它与传统的油漆料不同之处在于它体现的是自然性。</span> \r\n</p>\r\n<p class="MsoNormal" style="text-indent:14.25pt;">\r\n	随着人们购房热潮的出现使得家居装修业也变得热火朝天起，对于装修行业来说，要想成为装修行业的领军人物，不仅要以产品的质量为保障，还要以产品的新颖为前提。艺术漆是应人们高质量的生活要求而产生的，下面我就给大家全面的介绍一下艺术漆。\r\n</p>\r\n<p class="MsoNormal" style="text-indent:14.25pt;">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401075123_72715.jpg" alt="" width="580" height="435" title="" align="" /> \r\n</p>\r\n<p class="MsoNormal" style="text-indent:14.25pt;">\r\n	其实艺术漆的全名就是墙面艺术涂料，它与传统的油漆料不同之处在于它体现的是自然性。传统的油漆料虽然五颜六色的十分好看，但是却给人一种庸俗烦躁的感觉，而且这种油漆料的购买价格非常的昂贵。而艺术漆却能给人们一种自然纯朴的感觉。如今表现自然特色的艺术漆越来越受到大众的喜爱。\r\n</p>\r\n<p class="MsoNormal" style="text-indent:14.25pt;">\r\n	<span style="line-height:1.5;"> 如今一些商业产房里的墙壁装修都采用的是艺术漆进行装修的，艺术漆越来越受众喜爱的原因有很多。首先艺术漆表现的自然风格，人们长久生活在都市里，每天承受着各种生活以及工作方面的压力，不仅脱离了自然也使得他们变得麻木起来。艺术漆最大的特点之一就是可以让人们感受到大自然的风情。艺术漆把传统艺术与现代科技相结合，生产出一种可以给人们产生视觉效应的涂料，这种涂料能够营造出一种立体的涂膜，这些涂膜摸上去不仅有着实物的手感而且还有实物的光泽感。</span> \r\n</p>\r\n<p class="MsoNormal" style="text-indent:14.25pt;">\r\n	对于一些喜欢大自然的人来说，家里墙壁装饰采用艺术漆是最合适不过的啦。艺术漆涂抹在墙上可以绘画出流水的小河以及高大的树木等，虽然传统油漆也可以营造出这种效果来，不过艺术漆却可以把这些树木以及石头之类的刻画出纹路来，摸上去就像是摸到真正的实物一样。\r\n</p>\r\n<p class="MsoNormal" style="text-indent:14.25pt;">\r\n	我们都知道当我们房子装修以后暂时不能住人，这是因为传统油漆里面含有过多的甲醛，如果装修后立刻住进去的话就会对人体产生伤害。而艺术漆装饰墙壁以后不仅可以立即住进去而且对人体一点也没有伤害。\r\n</p>\r\n贵州装修行业信息平台<span><a href="http://127.0.0.1/11086132/index.php" target="_blank"><span style="color:#CC33E5;">http://127.0.0.1/11086132</span></a></span>为业主提供免费发布装修招标、免费量房、免费装修设计、免费装修预算的装修服务，为业主装修精打细算排忧解难。', 'yx', '2015-04-01 15:51:40', 'uploadfile/1427874697tpoq.jpg', 6);
INSERT INTO `xinwentongzhi` (`id`, `biaoti`, `leibie`, `neirong`, `tianjiaren`, `addtime`, `shouyetupian`, `dianjilv`) VALUES
(255, '如何通过装修给家降温节能', '站内新闻', '<p class="MsoNormal" style="text-align:center;">\r\n	<b>如何通过装修给家降温节能<span></span></b> \r\n</p>\r\n<p class="MsoNormal">\r\n	随着夏天的到来，空调的使用大大增加，耗费电力，会使人容易得空调病。但是通过合理的装饰装修也可以达到降温节能的目的。<span></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401075707_31513.jpg" alt="" width="580" height="380" title="" align="" /> \r\n</p>\r\n<p class="MsoNormal" align="left">\r\n	<br />\r\n</p>\r\n<p class="MsoNormal">\r\n	多种绿色攀爬植物\r\n</p>\r\n<p class="MsoNormal">\r\n	夏季楼房的阳台或室外花园经过暴晒后会产生很多热量，是室内温度增高的主要来源。除了注意阳台与室内门的密封，加装隔热窗帘外，最好在阳台或者花园靠墙处多种些绿色植物，尤其是那种攀爬生长的绿萝、爬墙虎、金银花和各种瓜类、豆类植物。植物生长过程中会吸收热量，而且茂盛的叶子恰好可以抵挡阳光直接照射地面或墙壁，不但可以有效消热降温，同时又可以产生新鲜空气、美化室内环境。\r\n</p>\r\n<p class="MsoNormal">\r\n	加装防紫外线窗帘和遮光帘\r\n</p>\r\n<p class="MsoNormal">\r\n	一般家庭中应该备有冬夏两套不同厚度不同色系的窗帘，冬季使用厚窗帘可以保温防寒，而夏季适合挂薄一些的看起来淡雅清爽的窗帘。\r\n</p>\r\n<p class="MsoNormal">\r\n	可是如果你家有东向和西向的窗户，太阳的毒烤会让房子迅速升温，由于薄的窗帘和纱帘的透光性强而遮光性弱，所以，在薄窗帘上再加装一层具有显著的隔热功能的防紫外线窗帘非常有必要。据测试，如果早上出门时把窗户关好，把防紫外线窗帘拉严实，到了晚上下班回家，室内温度可以比室外低３摄氏度至５摄氏度，会感觉比较凉爽。\r\n</p>\r\n<p class="MsoNormal">\r\n	如果家中白天有人，除了安装防紫外线窗帘，还可以考虑安装竹帘或卷帘，它们既有透光性又有遮光功能，会让家里既不憋得慌又能得到凉爽的感觉。\r\n</p>\r\n<p class="MsoNormal">\r\n	通风：把握好开窗通风的时机\r\n</p>\r\n<p class="MsoNormal">\r\n	夏季通风也是有讲究的，如果中午通风，不但不会让家里凉爽，还会让更多热气进屋。正确的通风方法是早上一起来，最好七点前，就进行一次对流通风，然后出门上班前要记得关闭阳面窗户，并拉严窗帘。等到晚上六七点钟，下班回来后，再进行一次对流通风，就可以让室内温度相对凉爽。\r\n</p>\r\n<p class="MsoNormal">\r\n	更换低瓦数的冷光节能灯\r\n</p>\r\n<p class="MsoNormal">\r\n	夏季一般白天比较长，阳光充足，如果室内灯光太亮过多，特别是一些家庭选择了暖光灯，夏季会使人感觉室内比较热和烦躁。可以在保证必需阅读亮度的前提下，使用局部照明的台灯和落地灯，用低瓦数的冷光灯替换暖光灯，这样一来可以省电，二来也可以营造凉爽氛围。\r\n</p>\r\n<p class="MsoNormal">\r\n	更换夏凉竹木制品和家具\r\n</p>\r\n<p class="MsoNormal">\r\n	现在很多家庭都喜欢布艺沙发，柔软的棉垫子，但这些东西在夏季都会让人觉得热，而且夏天如果身体直接靠在这些软制品上，会更容易出汗。不妨考虑摆放一些造型简洁、色调偏冷的藤、竹制、木制和玻璃等家具家饰，不仅可以在视觉触觉上让人感到凉爽，而且还可以吸收室内部分热量，对降温起到辅助作用。\r\n</p>\r\n<p class="MsoNormal">\r\n	贵州装修行业信息平台<span><a href="http://127.0.0.1/11086132/index.php" target="_blank"><span style="color:#CC33E5;">http://127.0.0.1/11086132</span></a></span>为业主提供免费发布装修招标、免费量房、免费装修设计、免费装修预算的装修服务，为业主装修精打细算排忧解难。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span> </span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span> </span> \r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'yx', '2015-04-01 15:57:30', 'uploadfile/1427875047tq62.jpg', 1),
(257, '贵阳别墅装修中的重要因素有哪些呢？', '站内新闻', '<p class="MsoNormal" style="text-align:center;">\r\n	<b>贵阳别墅装修中的重要因素有哪些呢？<span></span></b>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 贵阳别墅装修设计看似简单，其中包含很多的环节，每个环节密不可分，如果忽略了其中一项，就无法完美的呈现出舒适的生活家园，也无法满足业主精神文化和居住文化的需求。那么，贵阳别墅装修设计的重要因素具体体现在哪里呢？贵阳别墅装饰在此给出了专业的解答。<span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401080546_34595.jpg" alt="" width="580" height="435" title="" align="" />\r\n</p>\r\n<p class="MsoNormal" align="left">\r\n	&nbsp; &nbsp; &nbsp; 贵阳别墅装修设计重要因素一：别墅户型分析\r\n</p>\r\n<p class="MsoNormal" align="left" style="text-indent:13.5pt;">\r\n	&nbsp; &nbsp; &nbsp;别墅由于种类多，户型结构上有很大的差异，所以要在设计前期进行户型分析与规划。专业的别墅设计师会为业主进行深入的户型分析、建筑本体缺陷分析和空间布局的规划等，让业主了解到自家别墅存在的问题。这样在别墅设计时可以避免很多的问题，也帮助业主规划好各功能空间。\r\n</p>\r\n<p class="MsoNormal" align="left" style="text-indent:13.5pt;">\r\n	&nbsp;户型分析是设计中最重要的环节，如果前期的分析、规划没有做到位，那么在设计时会带来很多的麻烦。贵阳别墅装饰提醒别墅业主在前期设计时，一定要进行别墅户型分析，有助于更好的规划、设计您的家园。\r\n</p>\r\n<p class="MsoNormal" align="left" style="text-indent:13.5pt;">\r\n	<span style="line-height:1.5;">贵阳别墅装修设计重要因素二：别墅设计风格定位</span>\r\n</p>\r\n<p class="MsoNormal" align="left" style="text-indent:13.5pt;">\r\n	&nbsp; &nbsp; &nbsp;别墅的室内风格直接影响整体的品位和内涵，选择风格相当于选择其特有的文化，如何让室内散发其独特的文化，这就需要专业的别墅设计师为您打造。对于风格定位如何把握，需要设计师前期与业主进行深入的沟通，从沟通中了解业主的需求与喜好，为业主定制适合的设计风格。\r\n</p>\r\n<p class="MsoNormal" align="left" style="text-indent:13.5pt;">\r\n	&nbsp;&nbsp;&nbsp; 风格的定位不准确，会影响后期的效果，贵阳别墅装饰提醒别墅业主，风格不仅是体现家的美感，也是体现业主的品味，所以在选择上要谨慎，不要盲目。\r\n</p>\r\n<p class="MsoNormal" align="left" style="text-indent:13.5pt;">\r\n	<span style="line-height:1.5;">&nbsp;贵阳别墅装修设计重要因素三：别墅生活方式</span>\r\n</p>\r\n<p class="MsoNormal" align="left" style="text-indent:13.5pt;">\r\n	&nbsp; &nbsp; &nbsp; 无论别墅设计的多么奢华，多么典雅，无法让业主享受到舒适的生活方式，这个作品也不算成功。贵阳别墅装修设计的灵魂所在就是体现舒适的别墅生活，让业主尊享到在普通住宅中无法实现的功能，真正的体现出别墅本身的价值。\r\n</p>\r\n<p class="MsoNormal" align="left" style="text-indent:13.5pt;">\r\n	&nbsp; 贵州装修行业信息平台<a href="http://127.0.0.1/11086132/index.php" target="_blank"><span style="color:#CC33E5;">http://127.0.0.1/11086132</span></a>为业主提供免费发布装修招标、免费量房、免费装修设计、免费装修预算的装修服务，为业主装修精打细算排忧解难。<span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp;\r\n</p>', 'yx', '2015-04-01 16:08:08', 'uploadfile/14278756861vwx.jpg', 5),
(258, '小户型室内吊顶装修一定要注意的事', '站内新闻', '<p class="MsoNormal" style="text-align:center;">\r\n	<b>小户型室内吊顶装修一定要注意的事<span></span></b>\r\n</p>\r\n<p class="MsoNormal">\r\n	<b>&nbsp; &nbsp; &nbsp;&nbsp;</b><span style="line-height:1.5;">一般按照装修规格来说，小户型的居室都会相对的矮一些。因此这里就发现问题了，小户型的装修的时候，一样也会吊顶，但是吊顶就要悠着点了，学会适可而止，不然装修出来，会显得居室很压抑了。至于具体是什么原因，今天我们贵阳装饰公司就在这里给大家说一说。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;"><img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401081310_66280.jpg" alt="" width="590" height="380" title="" align="" /><br />\r\n</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 首先，小户型的吊顶因为空间视觉效果的不大，在吊顶的时候，会显得空间更加的窄小。一半其实我们会选择不吊顶直接造型。从这样来说，不仅是材料上面的节约并且在视觉的空间上面来说，也不会直接把天花板压下来。直接的扩大了整个空间的视觉效果。这是我们首选的第一个因素。\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 其次小户型，大部分都是以小巧为主的，那么在选择家具的时候，肯定不会去选择宽大的饰品。原理就是直接依靠一些小巧的饰品扩充房间的大小，在相应的地方直接能够溅射出房间其实还是<span>“</span>很大<span>”</span>的。\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp;而小户型的房子，千万不要盲目的去拆除墙壁。风道，烟道等，这样有可能会因为房间的扩充而造成房子被破坏。影响整栋楼。因此拆墙的时候，切记要注意，小心。\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; &nbsp;对于小户型的房子，我们贵阳装饰公司有着非常丰富的经验。不便在这里多说，但是有兴趣的朋友可以直接咨询我们的专业设计师。网站在线客服直接联系我们。\r\n</p>\r\n&nbsp; &nbsp;&nbsp;&nbsp; 贵州装修行业信息平台<a href="http://127.0.0.1/11086132/index.php" target="_blank"><span style="color:#CC33E5;">http://127.0.0.1/11086132</span></a>为业主提供免费发布装修招标、免费量房、免费装修设计、免费装修预算的装修服务，为业主装修精打细算排忧解难', 'yx', '2015-04-01 16:14:20', 'uploadfile/1427876055ie1f.jpg', 13),
(261, '美式混搭九十平两居婚房', '装修日志', '<p>\r\n	<span style="font-size:12px;line-height:1.5;"><img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401094033_79123.jpg" alt="" width="580" height="435" title="" align="" /><br />\r\n</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">装修时间：</span><span style="font-size:12px;line-height:1.5;">201412-2015.03 </span><span style="font-size:12px;line-height:1.5;">（硬装期间经历过年以及一些小问题，装修队是在</span><span style="font-size:12px;line-height:1.5;">3</span><span style="font-size:12px;line-height:1.5;">月份退场的，网购家具</span><span style="font-size:12px;line-height:1.5;">4</span><span style="font-size:12px;line-height:1.5;">月份到货，软装到</span><span style="font-size:12px;line-height:1.5;">5</span><span style="font-size:12px;line-height:1.5;">月份基本完成）</span><span></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">户型：</span><span style="font-size:12px;line-height:1.5;">94</span><span style="font-size:12px;line-height:1.5;">平两居 全阳户型</span><span></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">类型：婚房，</span><span style="font-size:12px;line-height:1.5;">2</span><span style="font-size:12px;line-height:1.5;">人居住</span><span></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">预算：硬装</span><span style="font-size:12px;line-height:1.5;">+</span><span style="font-size:12px;line-height:1.5;">软装</span><span style="font-size:12px;line-height:1.5;">+</span><span style="font-size:12px;line-height:1.5;">家具十万，电器三万</span><span></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">实际花费：总计十五万，电器控制在预算之内，家具超支一万，装修超支一万五，主材本地采购，家具除三人位沙发及主卧家具外均为网购，其它软装等均为网购</span><span></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">风格及装修原则：自主设计，简装修重装饰，主要靠家具风格、软装以及色彩搭配达到效果（在确定了美式家具的风格后一切就都围绕着家具风格来</span><span style="font-size:12px;line-height:1.5;">“</span><span style="font-size:12px;line-height:1.5;">混搭</span><span style="font-size:12px;line-height:1.5;">”</span><span style="font-size:12px;line-height:1.5;">啦）</span><span></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">材质运用：</span><span></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">喜欢木质的温暖感，所以阳台吊顶，主次卧飘窗都选择了木质材质，甚至马桶圈都淘宝了个实木的换掉。。。细心观察会发现很多家具都经过了做旧处理；</span><span></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">满铺木地板，选择了纹理比较旧的宽板；</span><span></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">满铺壁纸，主卧按照女朋友的意思选择了带花纹的壁纸，其它房间选择了米黄色略带纹理的素色壁纸；</span><span></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">家具，主次卧大部分选择了实木家具，其它为板木结合；</span><span></span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12px;line-height:1.5;">灯具及窗帘杆选择镀铜材质，颜色尽量统一（全铜的买不起。。。）</span><span style="font-size:12px;line-height:1.5;">&nbsp;</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="font-size:12px;line-height:1.5;">\r\n	<p>\r\n		户型图及功能布局：\r\n	</p>\r\n	<p>\r\n		<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401093910_92040.jpg" alt="" width="400" height="283" title="" align="" />\r\n	</p>\r\n	<p>\r\n		<span><a href="http://home.focus.cn/photoshow/1728/105242183.html" target="_blank"></a></span>\r\n	</p>\r\n	<p>\r\n		自从决定装修，开始泡搜狐装修论坛，寻找合适的风格以及恶补装修知识，如今虽未入住但小家已基本成形，故奉上毕业照与各位分享以此感谢论坛在我装修过程中给予的帮助。\r\n	</p>\r\n	<p class="MsoNormal">\r\n		<br />\r\n	</p>\r\n</span>\r\n</p>', 'tmd', '2015-04-01 17:41:23', 'uploadfile/1427881281g5ul.jpg', 3),
(262, '瓷砖全混搭，喜欢最重要', '装修日志', '<p class="MsoNormal" align="left" style="text-indent:21pt;">\r\n	在瓷砖选购上，没想花太多心思。我是一个非常不会搭配的人，什么色调和谐，风格统一，对我来说挺难搞定的。只能借助一下互联网或者宜家手册做个参考，我的主张就是喜欢最重要。先前找了朋友，他认识诺贝尔的经理，可以给个工程价。只要到店里看看款式，记下型号就不用管了。真到了那里一看，即使打折的价格，也不便宜，而且都是大砖。我记得曾经看到装大一位前辈说过，大厨房、大卫生间就要用大砖，小的就得选小砖，不仅省砖而且也协调。看来我只得另谋他路了。\r\n</p>\r\n<p class="MsoNormal" align="left" style="text-indent:21pt;">\r\n	还好在朋友介绍诺贝尔之前，我已经下过一个美陶的单子，既然来了闽龙顺道一起看吧。大体转了一圈，我需要的款式基本都有。这里的样板间很多，对于像我这样没有设计思路的人还是很有帮助的。厨房不外乎选择大众喜欢九宫格砖，厕所先前看上了一款艺术造型砖，到了现场直接推翻，换成现在这种长条砖。客厅选的是木纹砖，也采用了样板间的拼花，卧室就是最普通的米色砖。<span></span>\r\n</p>\r\n<p class="MsoNormal" align="left" style="text-indent:21pt;">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401094650_13666.jpg" alt="" width="530" height="389" title="" align="" />\r\n</p>\r\n<p class="MsoNormal" align="left" style="text-indent:21pt;">\r\n	回家汇报了一下我们的新战果，结果家里还为这事引起了一场风波，说我们巴掌大点地，就五种颜色的地砖。不管大家怎么做思想工作，我们还是坚持自己的选择。后来气的我妈说以后再不管了，你家你做主吧。我们相信他们的想法终究会改变，只是还需要点时间。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp; &nbsp; &nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401094758_66285.jpg" alt="" width="550" height="360" title="" align="" /></span>\r\n</p>', 'tmd', '2015-04-01 17:49:02', 'uploadfile/1427881737nsbw.jpg', 2),
(263, '装修完晒家――人与自然与动物世界的和谐小家', '装修日志', '<p class="MsoNormal">\r\n	<span style="line-height:1.5;"> 我家两室共</span><span style="line-height:1.5;">88</span><span style="line-height:1.5;">点几的面积就直接忽略成</span><span style="line-height:1.5;">88</span><span style="line-height:1.5;">好了又吉利。\r\n无论是当初看房型样板间还是收房后第一眼看到犹如巴掌大的灰色墙地，都真心没有觉得它小过。对于一直在外上学，工作，生活的我们来说，重要的是它是真正属于我们自己的家。</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span> </span><span style="line-height:1.5;">任何没有生命的物件，在它只是一个物件而不是谁谁的的时候，都会显得空洞。一件衣服也只有赋予它体温以后才能完整。</span> \r\n</p>\r\n<p class="MsoNormal">\r\n	装修完好，收拾也干净整洁。但好像还是空落落的。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span> <img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401100106_63756.jpg" alt="" /></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	在装修前一片空白的时候，你下意识肯定是去搜装修图片，看别人都装成什么样子。于是我知道了有种风格叫美式乡村。\r\n</p>\r\n<p class="MsoNormal">\r\n	鉴于我的装修原则：可以小可以拥挤可以不豪华但绝不可以不温馨。\r\n</p>\r\n<p class="MsoNormal">\r\n	秉承的关键词：暖色调\r\n木地板 古朴质感，当然也是偏爱。\r\n</p>\r\n<p class="MsoNormal">\r\n	整面墙书架是来自网路一个别人家（明星）的图片，只是经济和技术原因没能达到那样厚重大气的效果。之所以在我家寸土寸金的面积上硬生生挤出这个位置来做个书架，除了个人非常喜欢这种感觉之外，再就是看到一句话，大概意思是，我们的家里都应该有个书架，上面放满了书。就算自己不看，将来我们的孩子还可以随手翻翻。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span> <img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401100140_25196.jpg" alt="" /></span> \r\n</p>\r\n<p class="MsoNormal">\r\n	目前的书架比较空，长期的迁徙和搬家，书越来越少了。以后慢慢添置，等<span>uu</span>长大可以读很多书的时候我们把它塞满应该不是问题了。\r\n</p>\r\n<p class="MsoNormal">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401100211_50830.jpg" alt="" /> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span> </span>\r\n</p>\r\n<p class="MsoNormal">\r\n	看到这个树，一直被呵护的绿油油的树。我必须要先默哀下。暖气来以后不知道隔开已经烤死了，我昨天刚问的卖花的得知原因。罪孽呀！\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p class="MsoNormal">\r\n	<span> </span> \r\n</p>\r\n<p class="MsoNormal">\r\n	<span> </span> \r\n</p>', 'mnn', '2015-04-01 18:03:38', 'uploadfile/1427882616daoi.jpg', 3),
(264, '我家的多功能房长成记', '装修日志', '<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401101044_37331.jpg" alt="" width="598" height="346" title="" align="" />\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; 我家的次卧位于整间房子的西侧，是一个很不规则的形状，把门向左侧推<span>50cm</span>之后，就形成了一个<span>350*250cm</span>的长方形，外加一个突出于这个长方形之外的窗户部分，<span>130*78cm</span>的小长方形。\r\n</p>\r\n<p class="MsoNormal">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401100721_79609.jpg" alt="" width="600" height="367" title="" align="" />\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp;这个不足<span>10</span>平米的小空间要担负多重功能――里面要有电脑桌和书柜，家里来“重要客人”时它还要担当起卧室的重任。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp; &nbsp; &nbsp;不常住人的房间无论是做地台还是放一张床，在大多数时间里都是“接灰”的，而且闲置的床具使空间看起来更狭小……经过反复比较我决定在那里做一张隐形壁挂床。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401100804_71328.jpg" alt="" width="590" height="261" title="" align="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<br />\r\n</p>\r\n<p class="MsoNormal">\r\n	<p class="MsoNormal">\r\n		&nbsp; &nbsp; &nbsp; 先来普及“隐形床”的知识――这是一种占空间最小的床，百度百科这样解释“隐形床又称为壁床，翻板床。隐形床就是装在墙上的床。平时外观如同衣柜，睡觉时将柜门翻下，就是一张标准的席梦思。”\r\n	</p>\r\n	<p class="MsoNormal">\r\n		&nbsp;<span style="line-height:1.5;">结合图片来认识一下，这样的床有两种打开方式：正翻和侧翻。</span>\r\n	</p>\r\n	<p class="MsoNormal">\r\n		&nbsp;<span style="line-height:1.5;">正翻壁挂床――</span>\r\n	</p>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401100834_44799.jpg" alt="" width="590" height="297" title="" align="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<br />\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;</span>\r\n</p>', 'mnn', '2015-04-01 18:11:06', 'uploadfile/14278830625ew5.jpg', 2),
(265, '小户型二手房装修 70平温馨日式风格家', '装修日志', '<p class="MsoNormal">\r\n	在现代装修中，许多人都选择了<span style="color:#000000;">混搭风格</span>装修，而以前经常看到整体风格逐渐被摒弃。本期介绍的日式房中，在传统的日式装饰风格中，融入欧洲风格的元素，让小家充满浪漫温馨的气息。今天小编就带你走进日本新婚夫妇的甜蜜爱巢。<span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	户主：<span>&nbsp;N</span>先生<span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	居住人口：<span>2</span>人<span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	面积：<span>70</span>平方米<span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	装饰<span>Tips</span>：落地窗美观大气，让<span>客厅</span>的气质一下子就脱俗起来。白色的窗纱到灰色<span>窗帘</span>，与整体的空间和谐一致，尽显高档优雅之感。绿葱葱的植物，带来了一抹<span>大自然</span>气息。<span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401101642_10774.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	装饰<span>Tips</span>：白色的沙发，<span>搭配</span>民族风格的红色抱枕，让原本单调沙发显得更加靓丽。黑色的木质茶几，散发出简约经典的魅力。黑色收纳筐，可以放置杂志等，便于拿取。<span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401101657_24268.jpg" alt="" />\r\n</p>', 'mnn', '2015-04-01 18:17:14', 'uploadfile/14278834327qpf.jpg', 1),
(266, '迷你小户型卧室装修日记 打造浪漫家居', '装修日志', '<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp;无论是大户型还是小户型，只要布置得温馨舒适就好，小户型卧室设计空间虽然不大，但我们也能够很好的利用每寸空间哦<span>!</span>我们要把自己的卧室不仅设计成可以休息睡觉的，更可以设计成浪漫温馨的一个场所。<span>&nbsp;&nbsp; </span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span><span style="line-height:1.5;">&nbsp; &nbsp; &nbsp;紫色的浪漫与温馨装修总是让人留恋</span><span style="line-height:1.5;">!</span><span style="line-height:1.5;">本款案例设计中，用紫色灯光和窗帘</span><span style="line-height:1.5;">(</span><span style="line-height:1.5;">窗帘装修效果图</span><span style="line-height:1.5;">)</span><span style="line-height:1.5;">为房间增添了一种迷人的神秘气息，小小的窗户是卧室与外界交流的一个小小平台，简单不失大方。</span></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401112932_95407.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;"><span>&nbsp; &nbsp; &nbsp; 白色的卧室吊顶</span><span>(</span><span>吊顶装修效果图</span><span>)</span><span>四周围绕着一圈小壁灯，使柔和的灯光充满了无数的每一个角落，为卧室穿上一件温暖舒适的外衣。床头的壁纸</span><span>(</span><span>壁纸装修效果图</span><span>)</span><span>为居室增添了一抹绿意。</span><br />\r\n</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span style="line-height:1.5;"><img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401112947_94597.jpg" alt="" /><br />\r\n</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp;&nbsp;<span>整款设计到处充满绿色青春般的气息，让人不自觉就想到《青青河边草》，甜美单纯可爱的羞涩女子的家居梦想。卧室</span><span>(</span><span>卧室装修效果图</span><span>)</span><span>兼具书房</span><span>(</span><span>书房装修效果图</span><span>)</span><span>、客厅功能。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401113005_27374.jpg" alt="" />\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp; &nbsp; &nbsp; &nbsp;如果你是一个“书迷”，这一款是不错的选择哦</span><span>!</span><span>吊顶</span><span>(</span><span>吊顶装修效果图</span><span>)</span><span>出安置一个书架，不仅可以节省空间，还为读书提供了方便。床头对着窗户，光线极佳</span><span>!</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401113021_39330.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp;\r\n</p>', 'yf', '2015-04-01 19:32:18', 'uploadfile/1427887936m12h.jpg', 8),
(267, '餐厅装修日记 欧式风格餐厅装修效果图大全', '装修日志', '<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 欧式风格是现代装修中最常用的风格，尤其在餐厅这种注重气氛的场合，欧式风格灵活多变，不仅浪漫，而且还非常的时尚，深受现在年轻人的喜爱。近日，一名网友把自己的餐厅装修风格日记给分享出来。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp; &nbsp; &nbsp;</span><span style="line-height:1.5;">镜子墙面让整个餐厅空间更宽敞明亮。造型简单别致的玻璃吊灯，与餐桌上的玻璃餐具相得益彰，为简介严谨的餐厅增添了华丽感。</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401113917_47364.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; &nbsp;奢华吊灯为冷色调为主的餐厅带来暖意，与暖色调的地毯相呼应，奢华木质餐具彰显着主人的品味与身份。\r\n</p>\r\n<p class="MsoNormal">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401114058_61012.jpg" alt="" />\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 餐厅作为客厅和卧室的过渡地带，总体用灰蓝主色，家具田园风格的木质家具为主。餐厅与开放式厨房靠近，更有情调。而复古老木头餐边柜配合水晶吊灯，营造优雅的古典风情。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401114118_17212.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; &nbsp;这里的餐厅采用了开放式设计，餐厅也融入客厅设计中，塑造了开放又紧密的空间关系。长方形的餐桌加上灰白色格纹餐椅，使欧式氛围更加浓厚。餐厅与客厅的开放式空间更显得家居的宽阔。\r\n</p>\r\n<p class="MsoNormal">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401114233_39759.jpg" alt="" />\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp;窗户和白色窗帘营造了浪漫的餐厅主题，白色调的家具与主色调相呼应，造型古典的吊灯则成了点睛之笔，透露着主人浓厚的浪漫法式情怀。\r\n</p>\r\n<p class="MsoNormal">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401114252_99692.jpg" alt="" />\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 同样是一款浪漫典雅的欧式餐厅设计，黑白的线面搭配使整个空间显得典雅整洁，但黑白的色调搭配多少会显得过于单调，而天花板的一盏温馨贵气的吊灯很好缓和了气氛。\r\n</p>\r\n<p class="MsoNormal">\r\n	<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401114314_77876.jpg" alt="" />\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>\r\n	<p class="MsoNormal">\r\n		&nbsp; &nbsp; &nbsp; 餐厅设计以奢华高贵为主，设计师采用了奢华的金色为主色调对整个空间进行了装饰，天花板的金色花纹更如金箔般奢华大气。\r\n	</p>\r\n<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401114507_16015.jpg" alt="" /></span>\r\n</p>', 'yf', '2015-04-01 19:45:30', 'uploadfile/14278887174d67.jpg', 3),
(268, '业主装修日记――住房装修知识', '装修日志', '<p class="MsoNormal">\r\n	&nbsp; &nbsp; 在绝大多数的业主装修日记中，除了记载了装修工程的工期排定，还有很多的住房装修知识。那这些住房装修知识都是业主自己亲身经历记载下来的，今天就把这个装修日记中的住房装修知识分享给大家哦<span>!</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401115206_87802.jpg" alt="" width="580" height="435" title="" align="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	业主装修日记――住房装修知识：厨卫\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 检查水龙头的开关是否灵活有效，其中冲水马桶、淋浴房、面盆等\r\n都是涵盖在里面的。其次，下水的通畅性也是需要留意的。可以通过向洗菜池、浴缸、面盆里放满水，接着再将排出去，以此检查排水的速度。如果是检查冲水马桶的下水情况，那么就需要进行多次的反复排水测试，借此观察排水效果。\r\n</p>\r\n<p class="MsoNormal">\r\n	业主装修日记――住房装修知识：门窗\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp;&nbsp;用手推拉开门就可以检测出室内门的开关是否顺畅了。同时，还可以检测出门锁、合页是否灵活有效。另外，对室外的门窗，尤其是封闭式阳台的门窗一定检查其合格性和灵活性。\r\n</p>\r\n<p class="MsoNormal">\r\n	业主装修日记――住房装修知识：暖气\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 房屋装修的过程中，如果安装了暖气，那么就需要检测暖气的管路是否畅通。同时，还需要检测散发的温度是否达到标准，而且有无漏水问题。\r\n</p>\r\n<p class="MsoNormal">\r\n	业主装修日记――住房装修知识：通风\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 除了需要检查排风口的通风情况是否顺畅之外，还需要对厨房和卫生间的回风阀进行测试，看看能否正常发挥作用。一旦发现自家的厨房内总是飘来别人家的味道，或者卫生间出现异味倒灌的问题，这就说明回风阀失效了。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401115229_43277.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	业主装修日记――住房装修知识：金工\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>1. </span>金属体的构造要平直。如果是窗体部分的金属体一定要确保胶条等封闭件的完整性。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>2. </span>金属窗体的操作要灵活，不可以存在任何的阻碍。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>3. </span>如果是防盗网防盗门等管体的焊点要经过抛光，确保落点的牢固性，不可以存在松动的问题。\r\n</p>\r\n<p class="MsoNormal">\r\n	业主装修日记――住房装修知识：杂项\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>1. </span>需要按照合同项目的规定，逐一检查工程项目是否已经全部完成。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>2. </span>打开电源开关，观察室内的照明设备是否都可以正常工作。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>3. </span>检查装修工程产生的垃圾是否都已经清除完毕了。\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp;&nbsp;业主装修日记中的住房装修知识全部都是经过业主亲身实践才总结出来的。所以这些住房装修知识对于绝大多数的装修业主来说都是真实、有效的。如果对你有效的话，那不妨收藏起来吧<span>!</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;</span>\r\n</p>', 'yf', '2015-04-01 19:52:49', 'uploadfile/1427889166zd35.jpg', 5),
(269, '别墅装修日记 300平中国式别墅设计', '装修日志', '<p class="MsoNormal">\r\n	<span>&nbsp; &nbsp; &nbsp; 300</span>平别墅装修真的要花费不少的心思呀<span>!</span>如今的室内设计，传统与现代、东方与西方的巧妙融合，具备了独特的魅力。一位业主分享了别墅装修日记，我们就一起来欣赏下吧<span>!</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401121327_98324.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 欧式的居室有的不只是豪华大气，更多的是惬意和浪漫。通过完美的典线，精益求精的细节处理，带给家人不尽的舒服触感，实际上和谐是欧式风格的最高境界。同时，欧式装饰风格最适用于大面积房子，若空间太小，不但无法展现其风格气势，反而对生活在其间的人造成一种压迫感。当然，还要具有一定的美学素养，才能善用欧式风格，否则只会弄巧成拙<span>!</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401121410_66598.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; &nbsp;对于优化设计，较多业主也有一些疑问，是否整体美观，局部不美观和实用，其实整体和局部也是辩证的关系，互为联系的。局部的空间在整体的效果下开放、通畅、实用饱满，不管是家中哪个角度，都让人舒心宜居，其实优化设计就是一种哲学化科学化实用化的设计创新<span>!</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401121422_38333.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 美轮美奂的视觉效果，穿透的空间效果，融于自然的文艺味道，早已在优化设计的整体布局下显得如此的生动。本案的户型本不完善，楼上楼下的格局都是依照着原先的户型做着大同小异的设计，如同水泥森林的寂寥，也似沙漠般的无聊，现代生活在模式化的常规室内设计下显得如此苍白。优化设计如同一抹变幻着的色彩，美丽多姿，宜居实用，也似一颗内心的明珠，让我们的生活走向幸福和美好<span>!</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401121436_10409.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp;&nbsp;以空间创意为核心，风格、色彩、品位如同围绕在旁的星辰，共同绘成一幅美丽的画卷<span>!</span>本案非常具有法式的文艺腔调，但是小资却不故作姿态，不孤傲，而是一种生活化的文艺味，或许就是普罗旺斯的味道吧。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401121449_70232.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal">\r\n	&nbsp; &nbsp; &nbsp; 优化设计也许一般坊间会认为是一种空间上的创意设计，与风格、色彩、品位无关，其实万事万物都是有关联的，牵一发而动全身，莫不是如此。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;</span>\r\n</p>', 'tmd', '2015-04-01 20:15:09', 'uploadfile/1427890506mecv.jpg', 8),
(270, '我的贵阳花果园舒适套房成长记', '装修日志', '<p style="margin-left:0cm;">\r\n	一、交房篇\r\n</p>\r\n<p style="margin-left:0cm;">\r\n	话说交房那天，流水线上交完各种钱，签完各种字，扛着一堆不知名的材料然后跟着物业上楼验了房，本来约了装修公司一起验，因为同事选了他们家装修，还不错的样子，没有多要他们钱。结果那厮等到物业不耐烦的验完了才来，算了，我也不耐烦的让物业走了，心想难道不合格我还找物业吵呀还是闹呀还是打呀。谁耗得起这精力。一眼望过去没大的毛病就算了。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401122118_72020.jpg" alt="" /></span>\r\n</p>\r\n<p style="margin-left:0cm;">\r\n	二、装修公司选择篇\r\n</p>\r\n<p style="margin-left:0cm;">\r\n	为了能尽早进行新房的装修和入住，在交房前就已经开始寻觅装修公司了。一共挑了3家装修公司。话说三家的服务都还是不错的，比较牛气一点，工程什么的看似都还挺让人放心的，口碑挺不错的一家，设计师虽然水平不敢恭维但是人还是不错的，只是我老爸看了工地后就死活不想用他家了，说是做工不好，话说他家给的优惠真的还是蛮多的。也许我们运气好，遇到一个总监设计师，呵呵水平高人也不错，最让人惊叹的是他对施工工程具体细节都十分了解，给了我们很多有用的建议。由于对设计师的相当满意，最后决定就用了。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401122130_80867.jpg" alt="" /></span>\r\n</p>\r\n<p class="MsoNormal" align="left">\r\n	三、选定设计方案篇\r\n</p>\r\n<p class="MsoNormal" align="left">\r\n	两套设计方案，不得不说设计师还是经过精心设计了谈话方案，先给你看正常设计的，在房型上没啥变化的，半包，厅还是那个厅，房还是那个房，阳台还是那个阳台，半包，包括两个衣橱和三个门，水泥黄沙人工费吊顶涂料开关，约四万上下。一听挺便宜，符合预期。然后，又掏出一个方案，改动超多，敲各墙封各种墙，还把承重墙开了门洞，又活生生的把三个房间封住改门方向为了在中间那块地方做个储物间。因为我一直想要个储物间，所以觉得蛮好。。初次装修的我居然觉得这样蛮好，储物空间多呀。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401122146_36880.jpg" alt="" /></span>\r\n</p>\r\n<p style="margin-left:0cm;">\r\n	四、正式动工篇\r\n</p>\r\n<p style="margin-left:0cm;">\r\n	设计首期款后，我留意了下合同，出预算和方案是一周内，我等呀等呀，等了七天，小冉说快好了，但是没好，我心里觉得算合理么算合理么拖延呀？不过，这个没有太纠结，最后大概是十天后给我了方案，我看了下图纸，CAD什么还是学过的，图纸看懂还是不困难的，无非是敲墙建墙图，开关插座和橱柜图。\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;<img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401122157_89694.jpg" alt="" /></span>\r\n</p>\r\n<p style="margin-left:0cm;">\r\n	五、完工篇\r\n</p>\r\n<p style="margin-left:0cm;">\r\n	我想有个台盆柜，一个美式风格的，要实用，不要那种大肚子陶瓷盆，想有个大理石台面，台上盆或台下盆都无所谓，下面的柜体要有开门，可以放的进去小厨宝，还想要几个小抽屉，可以放些化妆品，上面的镜柜可以储物，放我们全家的牙具！图片给大家看看，不过我想要个白色的\r\n</p>\r\n<p class="MsoNormal">\r\n	<span><img src="/11086132/kindeditor-4.1.10/attached/image/20150401/20150401122210_56892.jpg" alt="" />&nbsp;</span>\r\n</p>\r\n<p class="MsoNormal">\r\n	<span>&nbsp;</span>\r\n</p>', 'tmd', '2015-04-01 20:22:31', 'uploadfile/1427890943i956.jpg', 11);

-- --------------------------------------------------------

--
-- 表的结构 `yonghuzhuce`
--

CREATE TABLE IF NOT EXISTS `yonghuzhuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `diqu` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=34 ;

--
-- 导出表中的数据 `yonghuzhuce`
--

INSERT INTO `yonghuzhuce` (`id`, `zhanghao`, `mima`, `xingming`, `xingbie`, `diqu`, `Email`, `zhaopian`, `addtime`, `issh`) VALUES
(31, 'yf', 'yf', '杨枫', '男', '凯里', 'yangfeng@163.com', 'uploadfile/1427809594z9mp.jpg', '2015-03-31 21:46:37', '是'),
(32, 'tmd', 'tmd', '田茂丹', '女', '贵阳', 'tianmd@163.com', 'uploadfile/1427809692ficp.jpg', '2015-03-31 21:48:15', '是'),
(33, 'mnn', 'mnn', '莫南南', '男', '安顺', 'monan@126.com', 'uploadfile/1427809749y428.jpg', '2015-03-31 21:49:11', '是');

-- --------------------------------------------------------

--
-- 表的结构 `youqinglianjie`
--

CREATE TABLE IF NOT EXISTS `youqinglianjie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wangzhanmingcheng` varchar(50) DEFAULT NULL,
  `wangzhi` varchar(50) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=27 ;

--
-- 导出表中的数据 `youqinglianjie`
--

INSERT INTO `youqinglianjie` (`id`, `wangzhanmingcheng`, `wangzhi`, `addtime`, `logo`) VALUES
(16, '百度', 'http://www.baidu.com', '2015-03-23 19:46:56', 'uploadfile/baidu.gif'),
(17, '谷歌', 'http://www.google.cn', '2015-03-23 19:48:12', 'uploadfile/google.png'),
(18, '新浪', 'http://www.sina.com', '2015-03-23 19:52:34', 'uploadfile/sina.gif'),
(19, 'QQ', 'http://www.qq.com', '2015-03-23 19:56:13', 'uploadfile/qq.jpg'),
(20, '网易', 'http://www.163.com', '2015-03-23 19:59:19', 'uploadfile/163.png'),
(21, '贵装', 'http://www.66zxw.com/', '2015-04-01 20:25:39', NULL),
(22, '百装', 'http://0851.100zhuang.com/', '2015-04-01 20:26:36', NULL),
(24, '人才', 'http://www.bxtrcw.com/', '2015-04-01 20:28:33', NULL),
(25, '建装', 'http://www.ccd.com.cn/', '2015-04-01 20:30:32', NULL),
(26, '装一', 'http://www.zxdyw.com/', '2015-04-01 20:30:57', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `zhaobiaoxinxi`
--

CREATE TABLE IF NOT EXISTS `zhaobiaoxinxi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(300) DEFAULT NULL,
  `jiezhiriqi` varchar(50) DEFAULT NULL,
  `xiangmuneirong` text,
  `yusuanqijia` varchar(50) DEFAULT NULL,
  `fujian` varchar(50) DEFAULT NULL,
  `faburen` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=8 ;

--
-- 导出表中的数据 `zhaobiaoxinxi`
--

INSERT INTO `zhaobiaoxinxi` (`id`, `biaoti`, `jiezhiriqi`, `xiangmuneirong`, `yusuanqijia`, `fujian`, `faburen`, `addtime`) VALUES
(6, 'ddfccc', '2015-05-20', 'xccvccc', '22334', '', 'yf', '2015-05-20 19:01:11'),
(7, 'dds ', '2015-05-21', 'fhbhbbgv', '2323', '', 'yf', '2015-05-20 19:01:31');

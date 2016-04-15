-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- 主机: w.rdc.sae.sina.com.cn:3307
-- 生成日期: 2016 年 04 月 16 日 01:33
-- 服务器版本: 5.6.23
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `app_jiangxincc`
--

-- --------------------------------------------------------

--
-- 表的结构 `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(15) COLLATE utf8_bin NOT NULL,
  `a_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `a_city` varchar(10) COLLATE utf8_bin NOT NULL,
  `a_detail` varchar(200) COLLATE utf8_bin NOT NULL,
  `a_phone` varchar(11) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `address`
--

INSERT INTO `address` (`a_id`, `u_name`, `a_name`, `a_city`, `a_detail`, `a_phone`) VALUES
(2, 'admin', 'admin', '上海', '华东师范大学', '11111111111');

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `u_name` varchar(15) COLLATE utf8_bin NOT NULL,
  `g_id` int(11) NOT NULL,
  `cart_time` date NOT NULL,
  PRIMARY KEY (`u_name`,`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `cart`
--

INSERT INTO `cart` (`u_name`, `g_id`, `cart_time`) VALUES
('admin', 0, '2016-04-16');

-- --------------------------------------------------------

--
-- 表的结构 `collection`
--

DROP TABLE IF EXISTS `collection`;
CREATE TABLE IF NOT EXISTS `collection` (
  `g_id` int(11) NOT NULL,
  `u_name` varchar(15) COLLATE utf8_bin NOT NULL,
  `c_time` date NOT NULL,
  PRIMARY KEY (`g_id`,`u_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `collection`
--


-- --------------------------------------------------------

--
-- 表的结构 `craftsman`
--

DROP TABLE IF EXISTS `craftsman`;
CREATE TABLE IF NOT EXISTS `craftsman` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_pic` varchar(256) COLLATE utf8_bin NOT NULL,
  `c_des` varchar(256) COLLATE utf8_bin NOT NULL,
  `c_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `c_craft` varchar(2000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `craftsman`
--

INSERT INTO `craftsman` (`c_id`, `c_pic`, `c_des`, `c_name`, `c_craft`) VALUES
(1, 'images/ygc1.png', 'ygc', 'ygc', 'lala');

-- --------------------------------------------------------

--
-- 表的结构 `evaluate`
--

DROP TABLE IF EXISTS `evaluate`;
CREATE TABLE IF NOT EXISTS `evaluate` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `g_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `u_nickname` int(11) NOT NULL,
  `u_icon` int(11) NOT NULL,
  `e_pic` int(11) NOT NULL,
  `e_des` int(11) NOT NULL,
  `e_date` date NOT NULL,
  `e_eval` enum('好评','中评','差评') COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`e_id`),
  KEY `g_id` (`g_id`),
  KEY `u_id` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `evaluate`
--


-- --------------------------------------------------------

--
-- 表的结构 `good`
--

DROP TABLE IF EXISTS `good`;
CREATE TABLE IF NOT EXISTS `good` (
  `g_id` int(11) NOT NULL,
  `g_pic` varchar(256) COLLATE utf8_bin NOT NULL,
  `g_des` varchar(500) COLLATE utf8_bin NOT NULL,
  `g_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `g_tag` varchar(200) COLLATE utf8_bin NOT NULL,
  `g_price` decimal(10,1) NOT NULL,
  `g_date` date NOT NULL,
  `g_note` varchar(256) COLLATE utf8_bin NOT NULL,
  `g_sell` int(11) NOT NULL,
  `g_craft` varchar(2000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `good`
--

INSERT INTO `good` (`g_id`, `g_pic`, `g_des`, `g_name`, `g_tag`, `g_price`, `g_date`, `g_note`, `g_sell`, `g_craft`) VALUES
(0, 'images/small-product4.png', '苗族银饰', '银簪 ', '', 39.0, '0000-00-00', '', 52, ''),
(1, 'images/feature-1_03.png', '黔南绿釉陶瓷', '浅韵牙舟陶 ', '', 260.0, '0000-00-00', '', 52, ''),
(2, 'images/feature-2_03.png', '秦汉纹饰手工制作', '苗韵蜡染画', '', 268.0, '0000-00-00', '', 26, ''),
(3, 'images/feature-3_03.png', '苗族银饰', '银牛首饰', '', 168.5, '0000-00-00', '', 35, ''),
(4, 'images/feature-4_03.png', '苗族银饰', '银簪', '', 138.0, '0000-00-00', '', 80, ''),
(5, 'images/latest1.png', '苗族银饰', '银冠', '', 862.0, '0000-00-00', '', 16, ''),
(6, 'images/latest2.png', '苗族扎染', '碎花巾', '', 26.0, '0000-00-00', '', 126, ''),
(7, 'images/latest3.png', '苗族孔染', '头巾', '', 35.0, '0000-00-00', '', 26, ''),
(8, 'images/hot-small.png', '扎染', '方巾', '', 48.0, '0000-00-00', '', 65, '');

-- --------------------------------------------------------

--
-- 表的结构 `good_order`
--

DROP TABLE IF EXISTS `good_order`;
CREATE TABLE IF NOT EXISTS `good_order` (
  `o_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(30) COLLATE utf8_bin NOT NULL,
  `g_id` int(11) NOT NULL,
  `o_addr` varchar(256) COLLATE utf8_bin NOT NULL,
  `o_state` enum('待付款','待发货','待收货','待评价') COLLATE utf8_bin NOT NULL,
  `o_trans` varchar(50) COLLATE utf8_bin NOT NULL,
  `o_time` date NOT NULL,
  `o_num` int(11) NOT NULL DEFAULT '1',
  `o_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `o_msg` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`o_id`),
  KEY `g_id` (`g_id`),
  KEY `u_id` (`u_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `good_order`
--

INSERT INTO `good_order` (`o_id`, `u_name`, `g_id`, `o_addr`, `o_state`, `o_trans`, `o_time`, `o_num`, `o_name`, `o_msg`) VALUES
(1, 'admin', 0, 'shanghai', '待付款', '', '2016-04-15', 1, 'admin', 'hahaha'),
(2, 'admin', 0, '', '', '', '2016-04-15', 1, '', ''),
(3, 'admin', 0, 'shanghai', '待付款', '', '2016-04-15', 1, 'admin', 'hahaha'),
(4, 'admin', 0, '', '', '', '2016-04-15', 1, '', ''),
(5, 'admin', 0, '', '', '', '2016-04-15', 1, '', ''),
(6, 'admin', 0, '上海华东师范大学', '', '', '2016-04-15', 1, 'admin', ''),
(7, 'admin', 0, '上海华东师范大学', '', '', '2016-04-15', 1, 'admin', '33'),
(8, 'admin', 0, '上海华东师范大学', '', '', '2016-04-16', 1, 'admin', ''),
(9, 'default', 0, '', '', '', '2016-04-16', 1, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `information`
--

DROP TABLE IF EXISTS `information`;
CREATE TABLE IF NOT EXISTS `information` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_img` varchar(256) COLLATE utf8_bin NOT NULL,
  `i_text` varchar(512) COLLATE utf8_bin NOT NULL,
  `g_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `information`
--

INSERT INTO `information` (`i_id`, `i_img`, `i_text`, `g_id`, `c_id`) VALUES
(1, 'images/ygc1.png', '纯银打造\\n大约2kg~4kg重\\n来源云南苗族', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `j_id` int(11) NOT NULL AUTO_INCREMENT,
  `j_pic` varchar(50) COLLATE utf8_bin NOT NULL,
  `j_text` varchar(500) COLLATE utf8_bin NOT NULL,
  `g_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`j_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `job`
--

INSERT INTO `job` (`j_id`, `j_pic`, `j_text`, `g_id`, `c_id`) VALUES
(1, 'images/step9.jpg', '汉族人常喜欢用剪纸来表达节日的喜庆和对来年的祝福，苗族却喜欢用剪纸来记录祖先的传说和刺绣的图样。和蜡染或印花不同，一幅剪纸从不是简单的纹样重复或装饰，都承载着一个故事。待细细瞧过，我们发现，即使是同一个故事，每一幅在细节处有时也略有不同，并无雷同之处。\r\n曾有学者说，“苗族是最擅长用古歌和古老的图画来进述历史的。反映到民间剪纸上，便是那日月星辰、先民生息的江河湖泊、迁涉过的崇山峻岭，与生存紧密相联的花草鸟兽等一系列具体实在的形象，它魁历史足迹的音符，是怀乡认祖的一种精神象征符号。”而这些故事中，最多的就是记叙苗族祖先姜央兄妹的坎坷遭遇的内容。这既是对远古社会遗风的追溯，又是隐射远古时代人类常与各种野兽接触的史实，以及人类为求生存而与各种野兽和自然灾害进行生死搏斗的形象记录。\r\n', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `process`
--

DROP TABLE IF EXISTS `process`;
CREATE TABLE IF NOT EXISTS `process` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_img` varchar(50) COLLATE utf8_bin NOT NULL,
  `p_text` varchar(500) COLLATE utf8_bin NOT NULL,
  `g_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `process`
--

INSERT INTO `process` (`p_id`, `p_img`, `p_text`, `g_id`, `c_id`) VALUES
(1, 'images/step1.jpg', '第一步：铸炼\\n将各种银子和银料放入瓶状的“银窝”（坩埚）中，将坩埚放在加热的器皿上。以前是放在炉子上用木炭全部盖好，用扇子或人工嘴吹来增加温度，一次熔银花费超过一小时。如今有了专门的加热机器，上面不仅显示着加热温度，也大大节省了时间。五六分钟过后，我们就看见白色的固体就变成火红的液体。', 0, 0),
(2, 'images/step2.jpg', '第二步：冷却\\n银料熔成液体后，把它倒入卡条状的糠槽内。等待冷却后拿出，就成了最原始的银条。', 0, 0),
(3, 'images/step3.jpg', '第三步：捶打\\n待银料凝而不冷，就取出而趁热捶打。捶打是先将热银捶打成四方形长条。若需制银片，就把它摊宽。若需制银丝，就锤成细圆条待用。\r\n如今有了机器，可以代替手工进行这一步的粗加工。\r\n', 0, 0),
(4, 'images/step4.jpg', '第四步：拉丝\\n锤好的细圆条的头部用锉刀磨尖，用丝眼板拉丝。用镊子将银丝从另一头拉出，用原始的劲道将银丝拉细拉长。苗家人掌握了熟练的抽丝技艺，一个丝眼板有粗、细、方、圆。既可拉出4毫米直径的粗丝，也可拉出电光丝般的细丝。丝眼板上52个孔，各不相同。做出一根粗细合适均匀的拉丝，至少反复穿插20-30个丝孔。', 0, 0),
(5, 'images/step5.jpg', '第五步：盘丝\\n重新拉好的丝每20几根为一排，烧铸形成胶布式的形状。以便能大量地复制同一拉丝的花纹。', 0, 0),
(6, 'images/step6.jpg', '第六步：塑形\\n将只制好的拉丝塑造弯曲成想要的形状。或龙或凤，或鸟或蝶。苗族人没有文字，银饰也没有图谱，所有的图案纹样都只能记在老师傅心里，代代传承。', 0, 0),
(7, 'images/step7.jpg', '第七步：焊接\\n将拉丝放在银片上，并用苗家保密的药水用羽毛刷在银片和拉丝的边框上，用喷火枪由下至上加热（防止拉丝熔化），表面用木头轻轻按压。', 0, 0),
(8, 'images/step8.jpg', '第八步：冷却\\n用手将拉丝的银片轻轻拍平，压实，等待微微冷却。', 0, 0),
(9, 'images/step9.jpg', '第九步：重新加热\\n金色的硼砂粉抖重新加热焊接，使拉丝与银片严丝合缝，紧密无间。', 0, 0),
(10, 'images/step10.jpg', '第十步：去杂质\\n将成品银片泡入明矾或硫酸中加热，用以去除表面杂质和铜。我们看到锅里的银片由黑变白，逐渐发出银原本的光彩。', 0, 0),
(11, 'images/step11.jpg', '第十一步：制成\\n沿着拉丝花纹用剪刀剪下来形状。这一步虽简单，但工作量巨大。', 0, 0),
(12, 'images/step12.jpg', '第十二步：组合\\n组合花纹，形成饰品。', 0, 0),
(13, 'images/step13.jpg', '一套银饰，是匠人的手艺，更是娘家人的心意。银做得细、做得巧，是为体现银匠工艺的高超。银用得多、用得好，是为即将出家的女儿撑腰。\r\n我们常常在谈一个叫“情怀”的词，然而实际上，它又很难捉摸。苗银的情怀，大概就是当初苗家男人把在外奔波得来的银元银锭熔化成苗家女人身上一件件银饰的令人艳羡；大概就是每一个家庭作坊里的老匠人捶捶打打，父传子，子传孙；大概就是实心的银项圈，镂空的银步摇，装点一个苗家姑娘对婚姻和爱情全部希望的美好。\r\n用心，有爱，想必便是情怀。\r\n', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `story`
--

DROP TABLE IF EXISTS `story`;
CREATE TABLE IF NOT EXISTS `story` (
  `s_id` int(11) NOT NULL,
  `s_pic` varchar(50) COLLATE utf8_bin NOT NULL,
  `s_text` varchar(500) COLLATE utf8_bin NOT NULL,
  `g_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `story`
--

INSERT INTO `story` (`s_id`, `s_pic`, `s_text`, `g_id`, `c_id`) VALUES
(0, 'images/story1.jpg', '“刻道”（kiei dex）系苗语称谓，即“歌棒”或“刻木”。主要流传于施秉县境内的苗族村寨（俗称高坡苗），是当地苗族歌师最喜爱的传统酒歌之一。同时，也是苗族群众开亲、送新娘回门时演唱的一路民歌。这根古老神秘的苗族歌棒，一般以圆型和方型为主，三面刻有符号，每格以横、竖、叉等符号组成苗族刻道歌各段的主要内容。歌棒，通常多采用枫木制作，共27格，每格以简略的符号记载苗族古老舅权制度下的婚姻文化。据清乾隆<镇远府志>记载，苗族俗无文字，交质用竹木刻数寸，名为"刻木"。婚嫁则"姑之女定为舅媳。倘无子，必重献于舅，谓之外甥钱，否则终身不得嫁或招少年往来"。', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(15) COLLATE utf8_bin NOT NULL,
  `u_pwd` varchar(32) COLLATE utf8_bin NOT NULL,
  `u_mobile` varchar(11) COLLATE utf8_bin NOT NULL,
  `u_icon` varchar(256) COLLATE utf8_bin NOT NULL DEFAULT 'images/head.png',
  `u_sex` enum('male','female') COLLATE utf8_bin NOT NULL,
  `u_nickname` varchar(15) COLLATE utf8_bin NOT NULL,
  `u_birthday` date NOT NULL,
  `u_addr` varchar(256) COLLATE utf8_bin NOT NULL,
  `u_email` varchar(256) COLLATE utf8_bin NOT NULL,
  `u_money` decimal(9,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`u_id`,`u_name`),
  UNIQUE KEY `u_name` (`u_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=137 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_pwd`, `u_mobile`, `u_icon`, `u_sex`, `u_nickname`, `u_birthday`, `u_addr`, `u_email`, `u_money`) VALUES
(129, 'admin', 'admin', '', '', '', '', '0000-00-00', '', '', 0.00),
(134, 'admin123', 'admin', '', '', 'male', '', '0000-00-00', '', '', 0.00),
(136, '小明', 'xiaoming', '15221456012', 'images/head.png', 'male', '明明', '1996-05-15', '上海市普陀区华东师范大学', '', 0.00);

--
-- 限制导出的表
--

--
-- 限制表 `collection`
--
ALTER TABLE `collection`
  ADD CONSTRAINT `collection_ibfk_2` FOREIGN KEY (`g_id`) REFERENCES `good` (`g_id`);

--
-- 限制表 `evaluate`
--
ALTER TABLE `evaluate`
  ADD CONSTRAINT `evaluate_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `good` (`g_id`),
  ADD CONSTRAINT `evaluate_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);

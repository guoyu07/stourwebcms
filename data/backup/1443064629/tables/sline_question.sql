CREATE TABLE `sline_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeid` int(2) unsigned DEFAULT NULL COMMENT '栏目类型',
  `productid` int(11) DEFAULT NULL COMMENT '文章所在表的id',
  `content` text COMMENT '提问内容',
  `replycontent` mediumtext COMMENT '回复内容',
  `replytime` int(10) unsigned DEFAULT NULL COMMENT '回复日期',
  `nickname` varchar(25) DEFAULT '' COMMENT '评论人昵称',
  `ip` varchar(23) DEFAULT NULL COMMENT '评论人ip地址',
  `status` int(2) unsigned DEFAULT '0' COMMENT '回复状态',
  `memberid` int(11) unsigned DEFAULT NULL COMMENT '会员id',
  `addtime` int(10) unsigned DEFAULT NULL COMMENT '添加时间',
  `kindlist` varchar(255) DEFAULT NULL COMMENT '目的地',
  `qq` varchar(50) DEFAULT NULL,
  `webid` int(11) DEFAULT '0',
  `phone` varchar(255) DEFAULT NULL,
  `weixin` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `questype` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_productid` (`productid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='问答表'
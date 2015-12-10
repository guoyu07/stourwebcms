CREATE TABLE `sline_advertise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webid` int(11) unsigned DEFAULT '0' COMMENT 'sline网站标识用于区分多网站',
  `typeid` int(3) DEFAULT '0' COMMENT '栏目标识',
  `tagname` varchar(255) DEFAULT NULL COMMENT '广告关联名称',
  `adposition` varchar(255) DEFAULT NULL COMMENT '广告位置',
  `normalbody` text,
  `expirebody` varchar(255) DEFAULT NULL COMMENT '过期广告显示内容',
  `starttime` int(10) unsigned DEFAULT NULL,
  `endtime` int(11) unsigned DEFAULT NULL COMMENT '广告结束时间',
  `addtime` int(10) unsigned DEFAULT NULL COMMENT '添加广告时间',
  `modtime` int(10) unsigned DEFAULT NULL COMMENT '广告更新时间',
  `picurl` varchar(255) DEFAULT NULL COMMENT '广告图片路径',
  `linkurl` varchar(255) DEFAULT NULL COMMENT '链接地址',
  `adtype` int(3) DEFAULT '0' COMMENT '广告类型，0为全局，1为首页，2为栏目，',
  `litpic` varchar(255) DEFAULT NULL COMMENT '缩略图地址',
  `linktext` varchar(255) DEFAULT NULL,
  `displayorder` int(11) DEFAULT NULL,
  `kindlist` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC
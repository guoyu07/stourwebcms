<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-24 17:55:44 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2015-09-24 17:55:44 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /www/web/testdata_souxw_com/public_html/newtravel/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', 'Model_Spot', Array)
#1 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/model/line.php(33): Kohana_ORM->get_all()
#5 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/controller/line.php(1225): Model_Line->autoGetSpot('<p>????????????...', '8', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 /www/web/testdata_souxw_com/public_html/newtravel/index.php(121): Kohana_Request->execute()
#11 {main}
2015-09-24 17:58:35 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2015-09-24 17:58:35 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /www/web/testdata_souxw_com/public_html/newtravel/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', 'Model_Spot', Array)
#1 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/model/line.php(33): Kohana_ORM->get_all()
#5 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/controller/line.php(1225): Model_Line->autoGetSpot('<p>????????????...', '8', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 /www/web/testdata_souxw_com/public_html/newtravel/index.php(121): Kohana_Request->execute()
#11 {main}
2015-09-24 18:02:04 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2015-09-24 18:02:04 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /www/web/testdata_souxw_com/public_html/newtravel/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', 'Model_Spot', Array)
#1 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/model/line.php(33): Kohana_ORM->get_all()
#5 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/controller/line.php(1225): Model_Line->autoGetSpot('<p>????????????...', '8', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 /www/web/testdata_souxw_com/public_html/newtravel/index.php(121): Kohana_Request->execute()
#11 {main}
2015-09-24 18:04:06 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2015-09-24 18:04:06 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /www/web/testdata_souxw_com/public_html/newtravel/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', 'Model_Spot', Array)
#1 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/model/line.php(33): Kohana_ORM->get_all()
#5 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/controller/line.php(1225): Model_Line->autoGetSpot('<p>????????????...', '8', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 /www/web/testdata_souxw_com/public_html/newtravel/index.php(121): Kohana_Request->execute()
#11 {main}
2015-09-24 18:11:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2015-09-24 18:11:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /www/web/testdata_souxw_com/public_html/newtravel/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', 'Model_Spot', Array)
#1 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/model/line.php(33): Kohana_ORM->get_all()
#5 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/controller/line.php(1225): Model_Line->autoGetSpot('<p>????????????...', '8', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 /www/web/testdata_souxw_com/public_html/newtravel/index.php(121): Kohana_Request->execute()
#11 {main}
2015-09-24 18:12:01 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2015-09-24 18:12:01 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_spot`.`id` AS `id`, `sline_spot`.`webid` AS `webid`, `sline_spot`.`aid` AS `aid`, `sline_spot`.`title` AS `title`, `sline_spot`.`shortname` AS `shortname`, `sline_spot`.`seotitle` AS `seotitle`, `sline_spot`.`isspotarea` AS `isspotarea`, `sline_spot`.`price` AS `price`, `sline_spot`.`litpic` AS `litpic`, `sline_spot`.`content` AS `content`, `sline_spot`.`addtime` AS `addtime`, `sline_spot`.`modtime` AS `modtime`, `sline_spot`.`shownum` AS `shownum`, `sline_spot`.`author` AS `author`, `sline_spot`.`tagword` AS `tagword`, `sline_spot`.`keyword` AS `keyword`, `sline_spot`.`description` AS `description`, `sline_spot`.`lng` AS `lng`, `sline_spot`.`lat` AS `lat`, `sline_spot`.`kindlist` AS `kindlist`, `sline_spot`.`themelist` AS `themelist`, `sline_spot`.`attrid` AS `attrid`, `sline_spot`.`piclist` AS `piclist`, `sline_spot`.`booknotice` AS `booknotice`, `sline_spot`.`friendtip` AS `friendtip`, `sline_spot`.`getway` AS `getway`, `sline_spot`.`sellpoint` AS `sellpoint`, `sline_spot`.`address` AS `address`, `sline_spot`.`iconlist` AS `iconlist`, `sline_spot`.`ishidden` AS `ishidden`, `sline_spot`.`satisfyscore` AS `satisfyscore`, `sline_spot`.`bookcount` AS `bookcount`, `sline_spot`.`supplierlist` AS `supplierlist`, `sline_spot`.`templet` AS `templet`, `sline_spot`.`recommendnum` AS `recommendnum` FROM `sline_spot` AS `sline_spot` WHERE litpic !='' or piclist !='' GROUP BY `title` ORDER BY `displayorder` ASC ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /www/web/testdata_souxw_com/public_html/newtravel/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_s...', 'Model_Spot', Array)
#1 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1188): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1043): Kohana_ORM->_load_result(true)
#3 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1054): Kohana_ORM->find_all()
#4 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/model/line.php(33): Kohana_ORM->get_all()
#5 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/controller/line.php(1225): Model_Line->autoGetSpot('<p>????????????...', '8', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 /www/web/testdata_souxw_com/public_html/newtravel/index.php(121): Kohana_Request->execute()
#11 {main}
2015-09-24 18:16:13 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'where clause' [ select count(*) as num from sline_line_dayspot where lineid='8' and title='九寨沟' and day=1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2015-09-24 18:16:13 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'where clause' [ select count(*) as num from sline_line_dayspot where lineid='8' and title='九寨沟' and day=1 ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /www/web/testdata_souxw_com/public_html/newtravel/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(1, 'select count(*)...', false, Array)
#1 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('select count(*)...', 1)
#3 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/model/line.php(78): Kohana_ORM->query('select count(*)...', 1)
#4 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/model/line.php(62): Model_Line->insertDaySpot('8', '?????????', '/uploads/2015/0...', '1', '3')
#5 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/controller/line.php(1225): Model_Line->autoGetSpot('<p>????????????...', '8', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 /www/web/testdata_souxw_com/public_html/newtravel/index.php(121): Kohana_Request->execute()
#11 {main}
2015-09-24 18:17:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ insert into sline_line_dayspot(lineid,title,spotid,litpic,day) values('8','九寨沟','3','/uploads/2015/0923/b9eca56686a67ee01c3e22991c28bd68.png','1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2015-09-24 18:17:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'title' in 'field list' [ insert into sline_line_dayspot(lineid,title,spotid,litpic,day) values('8','九寨沟','3','/uploads/2015/0923/b9eca56686a67ee01c3e22991c28bd68.png','1') ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /www/web/testdata_souxw_com/public_html/newtravel/modules/database/classes/kohana/database/query.php(251): Kohana_Database_MySQL->query(2, 'insert into sli...', false, Array)
#1 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1075): Kohana_Database_Query->execute()
#2 /www/web/testdata_souxw_com/public_html/newtravel/modules/orm/classes/kohana/orm.php(1103): Kohana_ORM->get_sql('insert into sli...', 2)
#3 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/model/line.php(83): Kohana_ORM->query('insert into sli...', 2)
#4 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/model/line.php(62): Model_Line->insertDaySpot('8', '?????????', '/uploads/2015/0...', '1', '3')
#5 /www/web/testdata_souxw_com/public_html/newtravel/application/classes/controller/line.php(1225): Model_Line->autoGetSpot('<p>????????????...', '8', '1')
#6 [internal function]: Controller_Line->action_ajax_getspot()
#7 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Line))
#8 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /www/web/testdata_souxw_com/public_html/newtravel/system/classes/kohana/request.php(1160): Kohana_Request_Client->execute(Object(Request))
#10 /www/web/testdata_souxw_com/public_html/newtravel/index.php(121): Kohana_Request->execute()
#11 {main}
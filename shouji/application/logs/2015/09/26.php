<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-09-26 14:36:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_article`.`id` AS `id`, `sline_article`.`webid` AS `webid`, `sline_article`.`aid` AS `aid`, `sline_article`.`title` AS `title`, `sline_article`.`seotitle` AS `seotitle`, `sline_article`.`comefrom` AS `comefrom`, `sline_article`.`fromsite` AS `fromsite`, `sline_article`.`author` AS `author`, `sline_article`.`content` AS `content`, `sline_article`.`litpic` AS `litpic`, `sline_article`.`addtime` AS `addtime`, `sline_article`.`modtime` AS `modtime`, `sline_article`.`shownum` AS `shownum`, `sline_article`.`tagword` AS `tagword`, `sline_article`.`keyword` AS `keyword`, `sline_article`.`description` AS `description`, `sline_article`.`kindlist` AS `kindlist`, `sline_article`.`themelist` AS `themelist`, `sline_article`.`attrid` AS `attrid`, `sline_article`.`ad_productid` AS `ad_productid`, `sline_article`.`ad_kindid` AS `ad_kindid`, `sline_article`.`redirecturl` AS `redirecturl`, `sline_article`.`ishidden` AS `ishidden`, `sline_article`.`iconlist` AS `iconlist`, `sline_article`.`templet` AS `templet`, `sline_article`.`summary` AS `summary`, `sline_article`.`isoffical` AS `isoffical`, `sline_article`.`piclist` AS `piclist`, `sline_article`.`attachment` AS `attachment`, `sline_article`.`downnum` AS `downnum` FROM `sline_article` AS `sline_article` WHERE litpic is not NULL and litpic'' and find_in_set(44,kindlist) and ishidden=1 ORDER BY `displayorder` ASC LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 14:36:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_article`.`id` AS `id`, `sline_article`.`webid` AS `webid`, `sline_article`.`aid` AS `aid`, `sline_article`.`title` AS `title`, `sline_article`.`seotitle` AS `seotitle`, `sline_article`.`comefrom` AS `comefrom`, `sline_article`.`fromsite` AS `fromsite`, `sline_article`.`author` AS `author`, `sline_article`.`content` AS `content`, `sline_article`.`litpic` AS `litpic`, `sline_article`.`addtime` AS `addtime`, `sline_article`.`modtime` AS `modtime`, `sline_article`.`shownum` AS `shownum`, `sline_article`.`tagword` AS `tagword`, `sline_article`.`keyword` AS `keyword`, `sline_article`.`description` AS `description`, `sline_article`.`kindlist` AS `kindlist`, `sline_article`.`themelist` AS `themelist`, `sline_article`.`attrid` AS `attrid`, `sline_article`.`ad_productid` AS `ad_productid`, `sline_article`.`ad_kindid` AS `ad_kindid`, `sline_article`.`redirecturl` AS `redirecturl`, `sline_article`.`ishidden` AS `ishidden`, `sline_article`.`iconlist` AS `iconlist`, `sline_article`.`templet` AS `templet`, `sline_article`.`summary` AS `summary`, `sline_article`.`isoffical` AS `isoffical`, `sline_article`.`piclist` AS `piclist`, `sline_article`.`attachment` AS `attachment`, `sline_article`.`downnum` AS `downnum` FROM `sline_article` AS `sline_article` WHERE litpic is not NULL and litpic'' and find_in_set(44,kindlist) and ishidden=1 ORDER BY `displayorder` ASC LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\HTML\instest\shouji\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_a...', 'Model_Article', Array)
#1 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1033): Kohana_ORM->_load_result(true)
#3 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->find_all()
#4 D:\HTML\instest\shouji\application\classes\controller\mdd.php(72): Kohana_ORM->get_all()
#5 [internal function]: Controller_Mdd->action_city()
#6 D:\HTML\instest\shouji\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Mdd))
#7 D:\HTML\instest\shouji\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\HTML\instest\shouji\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#9 D:\HTML\instest\shouji\index.php(120): Kohana_Request->execute()
#10 {main}
2015-09-26 14:36:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_article`.`id` AS `id`, `sline_article`.`webid` AS `webid`, `sline_article`.`aid` AS `aid`, `sline_article`.`title` AS `title`, `sline_article`.`seotitle` AS `seotitle`, `sline_article`.`comefrom` AS `comefrom`, `sline_article`.`fromsite` AS `fromsite`, `sline_article`.`author` AS `author`, `sline_article`.`content` AS `content`, `sline_article`.`litpic` AS `litpic`, `sline_article`.`addtime` AS `addtime`, `sline_article`.`modtime` AS `modtime`, `sline_article`.`shownum` AS `shownum`, `sline_article`.`tagword` AS `tagword`, `sline_article`.`keyword` AS `keyword`, `sline_article`.`description` AS `description`, `sline_article`.`kindlist` AS `kindlist`, `sline_article`.`themelist` AS `themelist`, `sline_article`.`attrid` AS `attrid`, `sline_article`.`ad_productid` AS `ad_productid`, `sline_article`.`ad_kindid` AS `ad_kindid`, `sline_article`.`redirecturl` AS `redirecturl`, `sline_article`.`ishidden` AS `ishidden`, `sline_article`.`iconlist` AS `iconlist`, `sline_article`.`templet` AS `templet`, `sline_article`.`summary` AS `summary`, `sline_article`.`isoffical` AS `isoffical`, `sline_article`.`piclist` AS `piclist`, `sline_article`.`attachment` AS `attachment`, `sline_article`.`downnum` AS `downnum` FROM `sline_article` AS `sline_article` WHERE litpic is not NULL and litpic'' and find_in_set(42,kindlist) and ishidden=1 ORDER BY `displayorder` ASC LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 14:36:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_article`.`id` AS `id`, `sline_article`.`webid` AS `webid`, `sline_article`.`aid` AS `aid`, `sline_article`.`title` AS `title`, `sline_article`.`seotitle` AS `seotitle`, `sline_article`.`comefrom` AS `comefrom`, `sline_article`.`fromsite` AS `fromsite`, `sline_article`.`author` AS `author`, `sline_article`.`content` AS `content`, `sline_article`.`litpic` AS `litpic`, `sline_article`.`addtime` AS `addtime`, `sline_article`.`modtime` AS `modtime`, `sline_article`.`shownum` AS `shownum`, `sline_article`.`tagword` AS `tagword`, `sline_article`.`keyword` AS `keyword`, `sline_article`.`description` AS `description`, `sline_article`.`kindlist` AS `kindlist`, `sline_article`.`themelist` AS `themelist`, `sline_article`.`attrid` AS `attrid`, `sline_article`.`ad_productid` AS `ad_productid`, `sline_article`.`ad_kindid` AS `ad_kindid`, `sline_article`.`redirecturl` AS `redirecturl`, `sline_article`.`ishidden` AS `ishidden`, `sline_article`.`iconlist` AS `iconlist`, `sline_article`.`templet` AS `templet`, `sline_article`.`summary` AS `summary`, `sline_article`.`isoffical` AS `isoffical`, `sline_article`.`piclist` AS `piclist`, `sline_article`.`attachment` AS `attachment`, `sline_article`.`downnum` AS `downnum` FROM `sline_article` AS `sline_article` WHERE litpic is not NULL and litpic'' and find_in_set(42,kindlist) and ishidden=1 ORDER BY `displayorder` ASC LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\HTML\instest\shouji\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_a...', 'Model_Article', Array)
#1 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1033): Kohana_ORM->_load_result(true)
#3 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->find_all()
#4 D:\HTML\instest\shouji\application\classes\controller\mdd.php(72): Kohana_ORM->get_all()
#5 [internal function]: Controller_Mdd->action_city()
#6 D:\HTML\instest\shouji\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Mdd))
#7 D:\HTML\instest\shouji\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\HTML\instest\shouji\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#9 D:\HTML\instest\shouji\index.php(120): Kohana_Request->execute()
#10 {main}
2015-09-26 14:38:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`wholesalel` AS `wholesalel`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE find_in_set(42,kindlist) and ishidden=0 ORDER BY `displayorder` ASC LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 14:38:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`wholesalel` AS `wholesalel`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE find_in_set(42,kindlist) and ishidden=0 ORDER BY `displayorder` ASC LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\HTML\instest\shouji\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_l...', 'Model_Line', Array)
#1 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1033): Kohana_ORM->_load_result(true)
#3 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->find_all()
#4 D:\HTML\instest\shouji\application\classes\controller\mdd.php(82): Kohana_ORM->get_all()
#5 [internal function]: Controller_Mdd->action_city()
#6 D:\HTML\instest\shouji\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Mdd))
#7 D:\HTML\instest\shouji\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\HTML\instest\shouji\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#9 D:\HTML\instest\shouji\index.php(120): Kohana_Request->execute()
#10 {main}
2015-09-26 14:38:30 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`wholesalel` AS `wholesalel`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE find_in_set(42,kindlist) and ishidden=0 ORDER BY `displayorder` ASC LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 14:38:30 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'displayorder' in 'order clause' [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`wholesalel` AS `wholesalel`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE find_in_set(42,kindlist) and ishidden=0 ORDER BY `displayorder` ASC LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\HTML\instest\shouji\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_l...', 'Model_Line', Array)
#1 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1033): Kohana_ORM->_load_result(true)
#3 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->find_all()
#4 D:\HTML\instest\shouji\application\classes\controller\mdd.php(82): Kohana_ORM->get_all()
#5 [internal function]: Controller_Mdd->action_city()
#6 D:\HTML\instest\shouji\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Mdd))
#7 D:\HTML\instest\shouji\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\HTML\instest\shouji\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#9 D:\HTML\instest\shouji\index.php(120): Kohana_Request->execute()
#10 {main}
2015-09-26 14:39:03 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESCS LIMIT 4' at line 1 [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`wholesalel` AS `wholesalel`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE find_in_set(42,kindlist) and ishidden=0 ORDER BY `modtime` DESCS LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 14:39:03 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESCS LIMIT 4' at line 1 [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`wholesalel` AS `wholesalel`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE find_in_set(42,kindlist) and ishidden=0 ORDER BY `modtime` DESCS LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\HTML\instest\shouji\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_l...', 'Model_Line', Array)
#1 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1033): Kohana_ORM->_load_result(true)
#3 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->find_all()
#4 D:\HTML\instest\shouji\application\classes\controller\mdd.php(82): Kohana_ORM->get_all()
#5 [internal function]: Controller_Mdd->action_city()
#6 D:\HTML\instest\shouji\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Mdd))
#7 D:\HTML\instest\shouji\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\HTML\instest\shouji\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#9 D:\HTML\instest\shouji\index.php(120): Kohana_Request->execute()
#10 {main}
2015-09-26 14:39:04 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESCS LIMIT 4' at line 1 [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`wholesalel` AS `wholesalel`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE find_in_set(42,kindlist) and ishidden=0 ORDER BY `modtime` DESCS LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 14:39:04 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'DESCS LIMIT 4' at line 1 [ SELECT `sline_line`.`id` AS `id`, `sline_line`.`webid` AS `webid`, `sline_line`.`aid` AS `aid`, `sline_line`.`title` AS `title`, `sline_line`.`wholesalel` AS `wholesalel`, `sline_line`.`seotitle` AS `seotitle`, `sline_line`.`startcity` AS `startcity`, `sline_line`.`overcity` AS `overcity`, `sline_line`.`linedate` AS `linedate`, `sline_line`.`price` AS `price`, `sline_line`.`lineday` AS `lineday`, `sline_line`.`linenight` AS `linenight`, `sline_line`.`litpic` AS `litpic`, `sline_line`.`linedoc` AS `linedoc`, `sline_line`.`tagword` AS `tagword`, `sline_line`.`keyword` AS `keyword`, `sline_line`.`jieshao` AS `jieshao`, `sline_line`.`biaozhun` AS `biaozhun`, `sline_line`.`beizu` AS `beizu`, `sline_line`.`payment` AS `payment`, `sline_line`.`feeinclude` AS `feeinclude`, `sline_line`.`features` AS `features`, `sline_line`.`description` AS `description`, `sline_line`.`shownum` AS `shownum`, `sline_line`.`seatleft` AS `seatleft`, `sline_line`.`storeprice` AS `storeprice`, `sline_line`.`transport` AS `transport`, `sline_line`.`linebefore` AS `linebefore`, `sline_line`.`addtime` AS `addtime`, `sline_line`.`modtime` AS `modtime`, `sline_line`.`reserved1` AS `reserved1`, `sline_line`.`reserved2` AS `reserved2`, `sline_line`.`reserved3` AS `reserved3`, `sline_line`.`color` AS `color`, `sline_line`.`childrule` AS `childrule`, `sline_line`.`kindlist` AS `kindlist`, `sline_line`.`themelist` AS `themelist`, `sline_line`.`attrid` AS `attrid`, `sline_line`.`satisfyscore` AS `satisfyscore`, `sline_line`.`bookcount` AS `bookcount`, `sline_line`.`ishidden` AS `ishidden`, `sline_line`.`isstyle` AS `isstyle`, `sline_line`.`sellpoint` AS `sellpoint`, `sline_line`.`piclist` AS `piclist`, `sline_line`.`distance` AS `distance`, `sline_line`.`zijiaseat` AS `zijiaseat`, `sline_line`.`zijiaprice` AS `zijiaprice`, `sline_line`.`zijiacar` AS `zijiacar`, `sline_line`.`showrepast` AS `showrepast`, `sline_line`.`paytype` AS `paytype`, `sline_line`.`templet` AS `templet`, `sline_line`.`iconlist` AS `iconlist`, `sline_line`.`supplierlist` AS `supplierlist`, `sline_line`.`insuranceids` AS `insuranceids`, `sline_line`.`islinebefore` AS `islinebefore`, `sline_line`.`recommendnum` AS `recommendnum` FROM `sline_line` AS `sline_line` WHERE find_in_set(42,kindlist) and ishidden=0 ORDER BY `modtime` DESCS LIMIT 4 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\HTML\instest\shouji\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `sline_l...', 'Model_Line', Array)
#1 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1151): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1033): Kohana_ORM->_load_result(true)
#3 D:\HTML\instest\shouji\modules\orm\classes\kohana\orm.php(1043): Kohana_ORM->find_all()
#4 D:\HTML\instest\shouji\application\classes\controller\mdd.php(82): Kohana_ORM->get_all()
#5 [internal function]: Controller_Mdd->action_city()
#6 D:\HTML\instest\shouji\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Mdd))
#7 D:\HTML\instest\shouji\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 D:\HTML\instest\shouji\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#9 D:\HTML\instest\shouji\index.php(120): Kohana_Request->execute()
#10 {main}
2015-09-26 14:46:43 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.allow' in 'field list' [ select a.id,a.litpic,a.allow,a.aid,a.title,a.attrid,a.kind,a.kindlist,a.litpic,a.content,a.isindex,a.webid,a.addtime,a.ishidden,a.themelist,a.iconlist,b.isjian,b.displayorder,b.isding,a.modtime from sline_article as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=4) where a.id is not null and ishidden=0 order by a.modtime desc limit 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 14:46:43 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.allow' in 'field list' [ select a.id,a.litpic,a.allow,a.aid,a.title,a.attrid,a.kind,a.kindlist,a.litpic,a.content,a.isindex,a.webid,a.addtime,a.ishidden,a.themelist,a.iconlist,b.isjian,b.displayorder,b.isding,a.modtime from sline_article as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=4) where a.id is not null and ishidden=0 order by a.modtime desc limit 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\HTML\instest\shouji\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.l...', false, Array)
#1 D:\HTML\instest\shouji\application\classes\controller\raider.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Raider->action_list()
#3 D:\HTML\instest\shouji\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Raider))
#4 D:\HTML\instest\shouji\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\HTML\instest\shouji\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\HTML\instest\shouji\index.php(120): Kohana_Request->execute()
#7 {main}
2015-09-26 14:47:47 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.kind' in 'field list' [ select a.id,a.litpic,a.aid,a.title,a.attrid,a.kind,a.kindlist,a.litpic,a.content,a.isindex,a.webid,a.addtime,a.ishidden,a.themelist,a.iconlist,b.isjian,b.displayorder,b.isding,a.modtime from sline_article as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=4) where a.id is not null and ishidden=0 order by a.modtime desc limit 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 14:47:47 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.kind' in 'field list' [ select a.id,a.litpic,a.aid,a.title,a.attrid,a.kind,a.kindlist,a.litpic,a.content,a.isindex,a.webid,a.addtime,a.ishidden,a.themelist,a.iconlist,b.isjian,b.displayorder,b.isding,a.modtime from sline_article as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=4) where a.id is not null and ishidden=0 order by a.modtime desc limit 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\HTML\instest\shouji\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.l...', false, Array)
#1 D:\HTML\instest\shouji\application\classes\controller\raider.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Raider->action_list()
#3 D:\HTML\instest\shouji\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Raider))
#4 D:\HTML\instest\shouji\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\HTML\instest\shouji\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\HTML\instest\shouji\index.php(120): Kohana_Request->execute()
#7 {main}
2015-09-26 14:49:16 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'a.isindex' in 'field list' [ select a.id,a.litpic,a.aid,a.title,a.attrid,a.kindlist,a.litpic,a.content,a.isindex,a.webid,a.addtime,a.ishidden,a.themelist,a.iconlist,b.isjian,b.displayorder,b.isding,a.modtime from sline_article as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=4) where a.id is not null and ishidden=0 order by a.modtime desc limit 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2015-09-26 14:49:16 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'a.isindex' in 'field list' [ select a.id,a.litpic,a.aid,a.title,a.attrid,a.kindlist,a.litpic,a.content,a.isindex,a.webid,a.addtime,a.ishidden,a.themelist,a.iconlist,b.isjian,b.displayorder,b.isding,a.modtime from sline_article as a left join sline_allorderlist b on (a.id=b.aid and b.typeid=4) where a.id is not null and ishidden=0 order by a.modtime desc limit 0,10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\HTML\instest\shouji\modules\database\classes\kohana\database\query.php(251): Kohana_Database_MySQL->query(1, 'select a.id,a.l...', false, Array)
#1 D:\HTML\instest\shouji\application\classes\controller\raider.php(99): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Raider->action_list()
#3 D:\HTML\instest\shouji\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Raider))
#4 D:\HTML\instest\shouji\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\HTML\instest\shouji\system\classes\kohana\request.php(1158): Kohana_Request_Client->execute(Object(Request))
#6 D:\HTML\instest\shouji\index.php(120): Kohana_Request->execute()
#7 {main}
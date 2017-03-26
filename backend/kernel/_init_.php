<?php
/*
Author: Borzyh Stanislav Al'bertovich Email: ff.0xff@yandex.ru
This is a common initialization file, it includes all the 
project files and creates instances of classes
*/
require('./Config.php');
require('./kernel/Connectiondb.php');
require('./kernel/QueryBuilder.php');
require('./kernel/Statistic.php');


$Config = new Config();
$statistic = new statistic();


?>

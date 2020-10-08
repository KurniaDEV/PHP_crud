<?php

// echo date('D d/M/Y',strtotime('tanggal pertama di bulan ini'));//-1 = - seminggu||2 = + seminggu//firstday of last month dan sebaliknya untuk bulan#

$date="06/11/2020";// yang ingin di explode#
$result=explode("/",$date);// meng explode atau memecah menjadi array#
//  var_dump(checkdate($result[1],$result[0],$result[2]));

echo date('l JS \of F Y h:i:s A');

date_default_timezone_set('UTC+7');
 










<?php
/*
*这里的日期从数据库中提取出来，如果是time生成的时间
*戳则许转换成这种日期格式，因为time时间戳默认带有十
*分秒，没有计算的必要
 * powerd by yzq
*/
$birthday="2015-08-11";
$dayNumber=birthday($birthday);
if ($dayNumber<=3) {
	echo "距离XX员工的生日还有".$dayNumber."天<br/>";
	echo "HAPPY BIRTHDAY TO XXXXX";
}
/*计算距离今天还有多少天*/
function birthday($birthday){
	$temp=explode("-", $birthday);
	$month=$temp[1];
	$day=$temp[2];
	$num1=mktime(0,0,0,$month,$day);//用户生日的时间戳  月-日
	$num2=mktime(0,0,0,date('m',time()),date('d',time()));//当前时间戳   月-日
	$days=$num1-$num2;
	return ceil($days/3600/24);
}
?>

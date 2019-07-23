<?php 
	$redis=new  Redis();
	$redis->connect('127.0.0.1',6379);
	//string操作
	$redis->delete("string");//先删除防止之前有
	$redis->set('string','val');//设置string中的值
	echo  $redis->get('sting');





 ?>
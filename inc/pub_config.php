<?php
define('lbh','https://lbh6154.cafe24.com/nosmoke');

function nav($str){ 
	global $_dep;
	$exp = explode(',',$str);
	$exp_count = count($exp);
	$act = 0;
	for($i=0;$i<count($exp);$i++){ 
		if($_dep[$i] == $exp[$i]){ 
			$act ++;
		}
	}
	if($act==$exp_count){ 
		echo 'select';
	}
}


?>
<?php

	$dir = $cwd = getcwd();
	$regno = 123456789;
	$reg = md5($regno);
    $cwd = getcwd();
    $target_dir =  $cwd.'/upload/'.$reg;

// Sort in ascending order - this is default
$a = scandir($target_dir);
foreach ($a as $val){ 
    echo $val;
    
} 
?>

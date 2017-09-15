<?php

$file="example.txt";

if($handle=fopen($file, 'r')){
	echo fread($handle, filesize($file));
	
	
fclose($handle);	

}else{
	echo "The application could not write the folder";
}





?>
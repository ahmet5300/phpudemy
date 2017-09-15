<?php

$file="example.txt";

if($handle=fopen($file, 'w')){
	fwrite($handle, 'This is my first folder!');
	fclose($handle);	
}else{
	echo "The application could not write the folder";
}





?>
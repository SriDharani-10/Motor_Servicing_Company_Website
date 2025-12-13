<?php
$a='localhost';
$b='root';
$c='';
$d='starkmotors';

$connect=mysqli_connect($a,$b,$c,$d);
if(!$connect){
	die("Not connected");
}
?>
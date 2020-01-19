<?php
session_start();
$file=fopen('file.txt','a');
$name=$_POST['name'];
$sub=$_POST['sub'];
$mark=$_POST['mark'];
if(is_numeric($mark)){
	fwrite($file, $name."*".$sub."*".$mark."\n");
	fclose($file);
	header('Location: form.php');

}else{
	$_SESSION['msg']= "Mark will be number";
	header('Location: form.php');
}

?>
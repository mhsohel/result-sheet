<?php
$code=$_GET['code'];
$data=file('reset_pass.txt');
if(isset($_POST['ok'])){
	$file=fopen('images/user.csv', 'r');
	$dd=array();
	while ($d=fgetcsv($file)) {
    	array_push($dd, $d);
    }
	$file1=fopen('images/user.csv', 'w');
	fwrite($file1, '');
	$file2=fopen('images/user.csv', 'a');
    foreach ($dd as  $d) {
    	if($_POST['name']==$d[0]){
    		fwrite($file2, $d[0].','.$_POST['password'].PHP_EOL);
    	}else{
    		fwrite($file2, $d[0].','.$d[1].PHP_EOL);
    	}
    }
    header('Location: login.php');
    	
}
if (in_array((int)$code, $data)) {
	?>
<form action="" method="post">
	username: <input type="text" name="name"><br>
	username: <input type="password" name="password"><br>
	<input type="submit" name="ok">
</form>
	<?php
}else{
	header("Location: login.php");
}

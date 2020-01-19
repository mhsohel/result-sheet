
<?php
$rand=rand();
$file=fopen('reset_pass.txt', 'a');
fwrite($file, $rand.PHP_EOL);
fclose($file);



$file1 = fopen("images/user.csv", 'r');
$usr = array();
while ($u = fgetcsv($file1)) {

    array_push($usr, $u[0]);
}

fclose($file1);



?>


<form action="" method="post" enctype="multipart/form-data">
	
	username: <br> <input type="text" name="unam" placeholder="Enter your username"><br>
	<input type="submit" name="ok" value="Send">

</form>

<?php 
// 1. create a form to get username from user
// 2. read the user.csv file and check whether the username match or not 
// 3. if matched then echo the following url 
// 4. otherwise redirect to the login page 
if(isset($_POST['ok'])){


	//if($_POST['unam']==)

	
 	if(in_array($_POST['unam'], $usr)){

	

 	 echo $url='<a href="http://localhost/Samun_Mollik/16-01-2020/Student_result/get_code.php?code='.$rand.'">http://localhost/Samun_Mollik/16-01-2020/Students_result/get_code.php?code='.$rand.'</a>';
			
}

else{
	header("Location: login.php");
}
}
	





// header('Location: get_code.php');
?>
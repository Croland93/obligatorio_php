<?php
//check.php
$connect = mysqli_connect("localhost","root","","jukebox");

if (isset($_POST['nickname'])){
	$nickname = $_POST['nickname'];
	$long = strlen($nickname);
	if (!empty($nickname) && $long>3){
		$sql = "SELECT * FROM usuarios WHERE nickname ='$nickname'";
		$query = mysqli_query($connect,$sql); 
		$nickname_result = mysqli_num_rows($query);

		if ($nickname_result==0){
			echo '<span class="text-success">Nickname disponible</span>';
		} else {
			echo '<span class="text-danger">Nickname no disponible</span>';
		}
	}
}
?>
﻿<?php
	require "db.php";
	require "functions.php";

	if(isset($_POST["do_vip"])){
		get_vips($connection, $_POST["count"]);
	}

	if(isset($_POST["activate_code"])){
		$arr = activate_code($connection, $_POST["code"]);
	}

	if(isset($arr['message'])){
		echo $arr['message'];
	}

	if(isset($arr['status'])){
		if($arr['status'] == FALSE)
			echo "TRUE";
		if($arr['status'] == TRUE)
			echo "FALSE";
	}
?>

<a href="account.php">Личный кабинет</a></br>
<?php if(isset($_SESSION['logged_user'])){
echo '<a href="logout.php">Выход</a></br>';
}
else{
	echo '<a href="registration.php">Регистрация</a></br>';
	echo '<a href="auth.php">Авторизация </a></br>';
}
?>

<form method="post">
	<input type="number" class="" name="count" placeholder="Колличество кодов" required value = "">
	<input type="submit" name="do_vip" value="Сгенерировать коды">
</form>
<form method = "post">
	<input type="text" class="" name="code" placeholder="VIP-код" required value="">
	<input type = "submit" name = "activate_code" value = "Активировать VIP-код">
</form>

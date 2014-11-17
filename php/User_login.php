<?php
	ini_set('display_errors', 'On');
	ini_set('display_errors', 1);
	//permite incializar una sesion con el servidor siempre va al principio de todo
	session_start();
	include('conexion.php');
	if(isset($_POST['user']) && !empty($_POST['user']) &&
		isset($_POST['pass']) && !empty($_POST['pass'])){
		$query = mysqli_query($con, "SELECT * from user where uUser='$_POST[user]'") or die("Error en: $query" . mysqli_error($con));;
		
		$sesion = mysqli_fetch_array($query);

		if($_POST['pass'] == $sesion['uPassword']){
			$_SESSION['id'] = $sesion['uId'];
			$_SESSION['name_user'] = $sesion['uName'];
			$_SESSION['user_name'] = $sesion['uUser'];
			$_SESSION['image'] = $sesion['uImg'];
			echo "Sesion Exitosa";
			header('Location: ../Admin');
		}else{
			echo "Sesion Erronea";
			session_unset();
			session_destroy();
			header('Location: ../Inicio_sesion?mensaje=1');
		}
	}else{
		echo "Debes llenar ambos campos";
	}
?>
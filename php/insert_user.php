<?php
	ini_set('display_errors', 'On');
ini_set('display_errors', 1);
	ini_set('upload_max_filesize', '20M');
	ini_set('post_max_size', '200M');
	ini_set('max_execution_time','120');
		include "conexion.php";

	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['pass'];
	$title = $_POST['title'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	//$image = $_POST['image'];

	$image = $_FILES['image']['tmp_name'];

	$result = mysqli_query($con,"SELECT * FROM user WHERE uUser='$username'")or die("Problemas enla consulta: ".mysqli_error($con));

	$total = mysqli_num_rows($result);	
	if($total==0){//valida que El usuario no exista	
		$nuevodirectorio = "../img/pic/";

			$archivo_subir_1 = $nuevodirectorio .$_FILES['image']['name'];;

			//separamos los trozos del archivo, nombre extension
		    $trozos = explode(".", $_FILES['image']['name']);
		    //obtenemos la extension
		    $extension = end($trozos);
		    //Inicia inserccion de portada++++++++++++++++++++++++++++++++++++++++++++++++++
		    //si la extensión es una de las permitidas
		    if(checkExtension($extension) === TRUE){	
				if (move_uploaded_file($image, $archivo_subir_1)) {
					
					$resultado = substr($archivo_subir_1, 3);//elimina el ../ de la ruta
					$query1 = "INSERT INTO user(uUser,uPassword,uName,uLastname,uTitle,uMail,uPhone,uAddress,uStatus,uImg,uHide) VALUES ('$username','$password','$firstname','$lastname','$title','$phone','$address','$email','1','$resultado','1')";  
					
					$result = mysqli_query($con,$query1);

					if (!$result){
						echo 'La consulta SQL contiene errores.'.mysqli_error($con)."\n";
					}else {
						echo "DATOS INSERTADOS CORRECTAMENTE\n";
					}
				}else{
					echo "error al subir archivo";
				}
			}else{
				echo 'Incorrect file type, Try Again';
			}		
		}else{
			echo "El usuario Ya existe";
		}	

function checkExtension($extension){
    //aqui podemos añadir las extensiones que deseemos permitir
    $extensiones = array("jpg","jpeg","JPG","JPEG","gif","GIF");
    if(in_array(strtolower($extension), $extensiones))
    {
        return TRUE;
    }else{
        return FALSE;
    }
}

?>
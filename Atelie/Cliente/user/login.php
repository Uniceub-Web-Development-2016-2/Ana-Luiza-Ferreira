<?php
session_start();
include('httpful.phar');
if($_POST["cpf_user"] != null && $_POST["password_user"] != null)
{
	$login_array = array('cpf_user' => $_POST["cpf_user"], 'password_user' =>$_POST["password_user"]);
	$url = "http://localhost/Atelie/Servidor/tb_user/login";
	$body = json_encode($login_array);
	$response = \Httpful\Request::post($url)->sendsJson()->body($body)->send(); 
	var_dump($response);  
	
	$array = json_decode($response->body, true)[0];
	if(!empty($array) && $array["cpf_user"] == $_POST["cpf_user"] && $array["password_user"] == $array["password_user"]){
 		$_SESSION["cpf_user"] = $array["cpf_user"];
		
		header("Location: perfil.php");
	}
	else
		echo "Não foi dessa vez!";
		//chamar página de erro
}
?>

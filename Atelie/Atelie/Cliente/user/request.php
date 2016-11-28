<?php
include('httpful.phar');
$get_request = 'http://localhost/Atelie/user/login/search?cpf_user="'.$_GET['search'].'"';
$response = \Httpful\Request::get($get_request)->send();
echo  $response->body;
?>

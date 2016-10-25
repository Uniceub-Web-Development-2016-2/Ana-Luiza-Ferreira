
<?php
include('httpful.phar');
$get_request = 'http://172.22.51.134/aula8/user/search?first_name="'.$_GET['search'].'"';
$response = \Httpful\Request::get($get_request)->send();
echo  $response->body;


$get_request = 'http://172.22.51.134/aula8/user/create';
$teste = json_encode($_POST);
$response = \Httpful\Request::post($get_request)->sendsJson()->body($teste)->send();
echo  $response->body;

<?php
<<<<<<< HEAD
class Request{
=======

class Request{

>>>>>>> fdb48517228385abdcbdadfd3b0c0e248d1721b5
	private $protocol;
	private $ip;
	private $resource;
	private $parameters;
	private $method; 
<<<<<<< HEAD
public function __construct($protocol, $ip, $resource, $parameters,$method){ 
	$this-> protocol->$vProtocol;
	$this->ip->$vIp;
	$this->resource->$vResource;
	$this->parameters->$vParameters;
	$this->method->$vMethod;
}
public function setProtocol($vProtocol){
$this->vProtocol = $vProtocol;
}
public function getProtocol(){
return $this->protocol;
}
public function setIp($vIp){
$this->vIp = $vIp;
}
public function getIp(){
return $this->ip;
}
public function setResource($vResource){
$this->vResource = $vResource;
}
public function getResource(){
return $this->resource;
}
public function setParameters($vParameters){
$this->vParameters = $vParameters;
}
public function getParameters(){
return $this->parameters;
}
public function setMethod($vMethod){
$this->vMethod = $vMethod;
}
public function getMethod(){
return $this->method;
}
=======

public function __construct($protocol, $ip, $resource, $parameters,$method){ 
	setProtocol->$vProtocol;
	setIp->$vIp;
	setResource->$vResource;
	setParameters->$vParameters;
	setMethod->$vMethod;

}

public function setProtocol($vProtocol){
$this->vProtocol = $vProtocol;

}
public function getProtocol(){
return $this->protocol;

}
public function setIp($vIp){
$this->vIp = $vIp;

}

public function getIp(){
return $this->ip;
}

public function setResource($vResource){
$this->vResource = $vResource;

}

public function getResource(){
return $this->resource;
}

public function setParameters($vParameters){
$this->vParameters = $vParameters;

}

public function getParameters(){
return $this->parameters;
}


public function setMethod($vMethod){
$this->vMethod = $vMethod;

}

public function getMethod(){
return $this->method;
}


>>>>>>> fdb48517228385abdcbdadfd3b0c0e248d1721b5
public function toString(){
	$request = $this->protocol."://".$this->ip."/".$this->resource"?".$this->parameters;
		return $request;
}
<<<<<<< HEAD
}
$parameters = array(ana, fe, jader);
$request = new Request("http", "172.22.51.139", "resource", $parameters, "POST");
=======

}

$parameters = array(ana, fe, jader);
$request = new Request("http", "172.22.51.151", "resource", $parameters, "POST");
>>>>>>> fdb48517228385abdcbdadfd3b0c0e248d1721b5
echo $request->toString();

<?php
class Request{
        private $protocol;
        private $server_ip;
        private $remote_ip;
        private $resource;
        private $parameters;
        private $method;
public function __construct($vProtocol, $vServer_ip, $vRemote_ip, $vResource, $vParameters,$vMethod){
        $this->protocol= $vProtocol;
        $this->server_ip= $vServer_ip;
        $this->remote_ip= $vRemote_ip;
        $this->resource= $vResource;
        $this->parameters= $vParameters;
        $this->method= $vMethod;
}

public function setProtocol($vProtocol){
$this->vProtocol = $vProtocol;
}
public function getProtocol(){
return $this->protocol;
}
public function setServerIp($vServer_ip){
$this->vServer_ip = $vServer_ip;
}
public function getServer_Ip(){
return $this->Server_ip;
}

public function setRemote_ip($vRemote_ip){
$this->vRemote_ip = $vRemote_ip;
}

public function getRemote_ip(){
return $this->Remote_ip;
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
public function toString(){
        $request = $this->protocol."://".$this->server_ip."/".$this->resource."?";

                foreach ($this->parameters as $key=>$value){

                $request=$request.$key.'='.$value.'&amp';
                }

                $request=substr($request,0,-4);

        return $request;
}
}
$parameters = array("ana", "fe", "jader");
$request = new Request("http", "172.22.51.139","172.22.51.139", "resource", $parameters, "POST");
echo $request->toString();

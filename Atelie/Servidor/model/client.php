<?php
class Client
{
	private $id_client;
	private $name_client;
	private $cpf_client;
	private $password_client;
	private $email_client;
	private $phonenumber_client;

	public function __construct( $id_client, $name_client, $cpf_client, $password_client, $email_client, $phonenumber_client)
	{
		$this->id_client= $id_client;
		$this->name_client = $name_client;
		$this->cpf_client = $cpf_client;
		$this->password_client = $password_client;
		$this->email_client = $email_client;
		$this->phonenumber_client = $phonenumber_client;
	}
	public function getIdClient()
	{
		return $this->id_client;
	}
	public function getNameClient()
	{
		return $this->name_client;
	}
	public function getCpfClient()
	{
		return $this->cpf_client;
	}
	public function getPassword_client()
	{
		return $this->password_client;
	}
	public function getEmailClient()
	{
		return $this->email_client;
	}
	public function getPhoneNumberClient()
	{
		return $this->phonenumber_client;
	}
}


<?php
class User
{
	private $id_user;
	private $name_user;
	private $cpf_user;
	private $password_user;
	private $email_user
	;
	public function __construct( $id_user, $name_user, $cpf_user, $password_user, $email_user)
	{
		$this->id_user = $id_user;
		$this->name_user = $name_user;
		$this->cpf_user = $cpf_user;
		$this->password_user = $password_user;
		$this->email_user = $email_user;
	}
	public function getIdUser()
	{
		return $this->id_user;
	}
	public function getNameUser()
	{
		return $this->name_user;
	}
	public function getCpfUser()
	{
		return $this->cpf_user;
	}
	public function getPasswordUser()
	{
		return $this->password_user;
	}
	public function getEmailUser()
	{
		return $this->email_user;
	}
}

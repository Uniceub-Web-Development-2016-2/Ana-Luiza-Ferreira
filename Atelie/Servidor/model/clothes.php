<?php
class Clothes
{
	private $cod_client;
	private $datedelivery_clothes;
	private $datereturn_clothes;
	private $id_clothes;
	;
	public function __construct( $cod_client, $datedelivery_clothes, $datereturn_clothes, $id_clothes)
	{
		$this->cod_client = $cod_client;
		$this->datedelivery_clothes = $datedelivery_clothes;
		$this->datereturn_clothes = $datereturn_clothes;
		$this->id_clothes = $id_clothes;
		
	}
	public function getCodClient()
	{
		return $this->cod_client;
	}
	public function getDateDeliveryClothes()
	{
		return $this->datedelivery_clothes;;
	}
	public function getDateReturnclothes()
	{
		return $this->datereturn_clothes;
	}
	public function getIdClothes()
	{
		return $this->id_clothes;
	}
}
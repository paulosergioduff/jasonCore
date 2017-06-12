<?php 

interface JasonCore{
	public function dataAccess($type,$server,$dataBase,$user,$password);
	public function sendMensage($serverOrigin, $serverDestiny, $type, $autor, $mensage);
	public function vote($type, $valueVote);
}


abstract Class JasonSN implements jasonCore{ // JasonSN - Jason Social Network
	private $server;
	private $type;
	private $dataBase;
	private $user;
	private $password;
	public function dataAccess($type,$server,$dataBase,$user,$password)
		{
			
		}

		public function sendMensage($serverOrigen, $serverDestiny, $type, $autor, $mensage){

		}
		public function vote($type, $valueVote){

		}

}

Class herança extends jasonSN{
	public function dataAccess($type,$server,$dataBase,$user,$password){

	}
}
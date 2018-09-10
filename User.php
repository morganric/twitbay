<?php


class User {

	private $id;
	private $name;
	private $email;
	private $password;

	public function __construct($id, $name, $email)
	{
		$this->name = $name;
		$this->email = $email;
	}

	 public function getUserName(){
	 	return $this->name;
	 }

}
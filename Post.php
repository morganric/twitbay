<?php


// include('User.php');

class Post {


	private $id;
	private $user_id;
	private $title;
	private $body;
	private $images;

	public function __construct($id, $user_id, $title, $body, $images)
	{
		$this->title = $title;
		$this->body = $body;
		$this->user_id = $user_id;
		//default images as an array, ready for urls
		$this->images = [];

	}

	 public function getTitle(){
	 	return $this->title;
	 }

	 public function getUserId() {
	 	return $this->user_id;
	 }

	 public function getUser() {

	 	include('database.php');
	 	$user_id = $this->user_id;

	

	 	$result = $mysqli->query("SELECT * FROM users WHERE id=" . $user_id . "");

	 	if ($result) 
	 	{

	 		$row = $result->fetch_assoc();


            if ($row != null ) {
                $user = new User($row['id'], $row['name'], $row['email']);
            	return $user;
        	}
   
        } else {
        	echo  $mysqli->error;
        	
        }

	 }

}
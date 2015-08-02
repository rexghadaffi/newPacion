<?php
class User
{
	// Properties
	private $id;
	private $username;
	private $password;
	private $status;
	private $typeid;
	
	// Setters
	public function SetID($userid)
	{
		// Parser goes here.. parser makes sure that $userid is an integer. 
		// If the value came from the database no need to parse.

		$this->id = $userid;
	}
	
	public function SetUsername($user_name)
	{
		$this->username = $user_name;
	}
	
	public function SetPassword($user_password)
	{
		$this->password = $user_password;
	}
	
	public function SetStatus($user_status)
	{
		$this->status = $user_status;
	}
	
	public function SetTypeID($user_typeid)
	{
		$this->typeid = $user_typeid;
	}	
		
	//Getters
	
    public function GetID()
	{
		return $this->id;
	}
	
	public function GetUsername()
	{
		return $this->username;
	}
	
	public function GetPassword()
	{
		return $this->password;
	}
	
	public function GetStatus()
	{
		return $this->status;
	}
	
	public function GetTypeID()
	{
		return $this->typeid;
	}
	
}

?>

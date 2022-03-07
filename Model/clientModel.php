<?php
class ClientModel
{
	var $connect;
	function __construct()
	{
		$this->connect = mysqli_connect("localhost", "root", "", "funzone");
		mysqli_set_charset($this->connect, 'UTF8');
	}

	function getBrandFood()
	{
		return $this->connect->query("SELECT * From brand_food where status = 1");
	}

	function getFoods()
	{
		$query = "SELECT * FROM foods WHERE status=1";

		if (isset($_GET['brandid'])) :
			$result = $this->connect->query($query . " and brand_id=" . $_GET['brandid']);
		else :
			$result = $this->connect->query($query);
		endif;

		return $result;
	}

	function getCharacters()
	{
		return $this->connect->query("SELECT * FROM park_character WHERE status = 1");
	}

	function getGame()
	{
		return $this->connect->query("SELECT * FROM games WHERE status = 1");
	}

	function getEvents() {
		return $this->connect->query("SELECT * FROM events ORDER BY open_date DESC");
	}

	function sendFeedback() {
		$name = htmlentities($_POST['name']);
		$email = htmlentities($_POST['email']);
		$message = htmlentities($_POST['message']);
		date_default_timezone_set("Asia/Ho_Chi_Minh");
		$send_time = date("Y-m-d H:i:s");
		return $this->connect->query("INSERT INTO feedback(name, email, message, send_time) VALUES('$name', '$email', '$message', '$send_time')");
	}

}

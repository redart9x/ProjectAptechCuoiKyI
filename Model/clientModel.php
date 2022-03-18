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
		$limit = 9;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;
		$curPage = $curPage < 1 ? 1 : $curPage;
		$totalResult = $this->connect->query("SELECT COUNT(f.id) AS total FROM foods f LEFT JOIN brand_food b on f.brand_id = b.id where b.status = 1 AND f.status = 1");
		$numberRow = mysqli_fetch_assoc($totalResult)['total'];
		$total = ceil($numberRow / $limit);
		$limitQuery = '';
		if ($numberRow > $limit) {
			$limitQuery = "LIMIT " . ($curPage - 1) * $limit . ", " . $limit;
		}
		// $query = "SELECT * FROM foods WHERE status=1";
		$query = "SELECT f.* FROM foods f LEFT JOIN brand_food b on f.brand_id = b.id where b.status = 1 AND f.status = 1";
		if (isset($_GET['brandid'])) :
			$totalResult = $this->connect->query("SELECT COUNT(f.id) AS total FROM foods f LEFT JOIN brand_food b on f.brand_id = b.id where b.status = 1 AND f.status = 1 AND f.brand_id =" . $_GET['brandid']);
			$numberRow = mysqli_fetch_assoc($totalResult)['total'];
			$total = ceil($numberRow / $limit);
			$data = $this->connect->query($query . " AND f.brand_id=" . $_GET['brandid'] . " ORDER BY name ASC " . $limitQuery);
		else :
			$data = $this->connect->query($query . " ORDER BY name ASC " . $limitQuery);
		endif;

		// return $result;
		return ['result'=>$data, 'total'=>$total];

	}

	function getCharacters()
	{
		$limit = 12;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;
		$curPage = $curPage < 1 ? 1 : $curPage;
		$totalResult = $this->connect->query("SELECT COUNT(id) AS total FROM park_character where status = 1");
		$numberRow = mysqli_fetch_assoc($totalResult)['total'];
		$total = ceil($numberRow / $limit);
		$limitQuery = '';
		if ($numberRow > $limit) {
			$limitQuery = "LIMIT " . ($curPage - 1) * $limit . ", " . $limit;
		}
		$data = $this->connect->query("SELECT * FROM park_character WHERE status = 1 ORDER BY name ASC " . $limitQuery);
		return ['result'=>$data, 'total'=>$total];
	}

	function getGame()
	{
		$limit = 12;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;
		$curPage = $curPage < 1 ? 1 : $curPage;
		$totalResult = $this->connect->query("SELECT COUNT(id) AS total FROM games where status = 1");
		$numberRow = mysqli_fetch_assoc($totalResult)['total'];
		$total = ceil($numberRow / $limit);
		$limitQuery = '';
		if ($numberRow > $limit) {
			$limitQuery = "LIMIT " . ($curPage - 1) * $limit . ", " . $limit;
		}
		$data = $this->connect->query("SELECT * FROM games WHERE status = 1 ORDER BY name ASC " . $limitQuery);
		return ['result'=>$data, 'total'=>$total];

	}

	function getEvents() {
		$where = '';
		$limit = 10;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;
		$curPage = $curPage < 1 ? 1 : $curPage;
		$totalResult = $this->connect->query("SELECT COUNT(id) as total FROM events");
		$numberRow = mysqli_fetch_assoc($totalResult)['total'];
		$total = ceil($numberRow / $limit);
		$limitQuery = '';
		if ($numberRow > $limit) {
			$limitQuery = "LIMIT " . ($curPage - 1) * $limit . ", " . $limit;
		}
		$curDate = date("Y-m-d H:i:s");
		if (isset($_GET['status'])) {
			if ($_GET['status'] == 'upcoming') {
				$where = " WHERE '$curDate' < open_date";
			} else if ($_GET['status'] == 'openning') {
				$where = " WHERE '$curDate' >= open_date AND '$curDate' <= end_date";
			} else if ($_GET['status'] == 'end') {
				$where = " WHERE '$curDate' > end_date";
			}
		}
		$data = $this->connect->query("SELECT * FROM events" . $where . " ORDER BY open_date DESC " . $limitQuery);
		return ['result'=>$data, 'total'=>$total];
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

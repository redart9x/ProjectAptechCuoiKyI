<?php

class adminModel
{
	var $connect;

	function __construct()
	{
		$this->connect = mysqli_connect("localhost", "root", "", "funzone");
		mysqli_set_charset($this->connect, 'UTF8');
		header("Content-type: text/html; charset=utf-8");
	}

	function checkSignInAdmin()
	{
		$username = addslashes($_POST['username']);
		$password = md5($_POST['password']);
		$result = $this->connect->query("SELECT * FROM admin where username ='$username' and password ='$password'");
		if (mysqli_num_rows($result) > 0) :
			return true;
		else :
			return false;
		endif;
	}

	function getFeedback()
	{
		$limit = 3;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;
		$curPage = $curPage < 1 ? 1 : $curPage;
		$totalResult = $this->connect->query("SELECT COUNT(id) AS total FROM feedback");
		$numberRow = mysqli_fetch_assoc($totalResult)['total'];
		$total = ceil($numberRow / $limit);
		$limitQuery = '';
		if ($numberRow > $limit) {
			$limitQuery = "LIMIT " . ($curPage - 1) * $limit . ", " . $limit;
		}
		$data = $this->connect->query("SELECT * FROM feedback ORDER BY send_time DESC");
		return ['result' => $data, 'total' => $total];
	}

	function getEvent()
	{
		$limit = 10;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;
		$curPage = $curPage < 1 ? 1 : $curPage;
		$totalResult = $this->connect->query("SELECT COUNT(id) AS total FROM events");
		$numberRow = mysqli_fetch_assoc($totalResult)['total'];
		$total = ceil($numberRow / $limit);
		$limitQuery = '';
		if ($numberRow > $limit) {
			$limitQuery = "LIMIT " . ($curPage - 1) * $limit . ", " . $limit;
		}
		$data =  $this->connect->query("SELECT * FROM events ORDER BY open_date DESC " . $limitQuery);
		return ['result' => $data, 'total' => $total];
	}

	function deleteFeedback()
	{
		$id = $_POST['id'];
		$result = $this->connect->query("DELETE FROM feedback where id = '$id'");
		return $result;
	}
	function deleteEvent()
	{
		$folder = "../image/events/";
		$fileName = $_POST['image'];
		$fullFileName = $folder . $fileName;
		if (file_exists($fullFileName)) {
			unlink($fullFileName);
		}
		$id = $_POST['id'];
		$result = $this->connect->query("DELETE FROM events where id = '$id'");
		return $result;
	}
	function updateEvent()
	{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$content = $_POST['content'];
		$openDate = $_POST['open_date'];
		$slogan = $_POST['slogan'];
		if (strtotime($_POST['end_date'])) :
			$endDate = $_POST['end_date'];
		endif;
		if (isset($_POST['imageUrl'])) {
			$image = $_POST['imageUrl'];
		}
		$fileName = $_FILES['image']['name'];
		$fileTempt = $_FILES['image']['tmp_name'];
		$folder = "../image/events/";
		$imageName = basename(time() . '_' . $fileName);
		$file_parts = explode('.', $fileName);
		$file_ext = strtolower(end($file_parts));
		$expensions = array("jpeg", "jpg", "png", "gif");
		if (in_array($file_ext, $expensions) === false && $fileName != '') :
			return 0;
		elseif ($fileName == '') :
			$result = $this->connect->query("UPDATE events SET name = '$name', content='$content', open_date='$openDate', slogan='$slogan', end_date='$endDate' WHERE id = '$id'");
			return 1;
		else :
			unlink($folder . $image);
			move_uploaded_file($fileTempt, $folder . $imageName);
			$result = $this->connect->query("UPDATE events SET name = '$name', content='$content', image='$imageName', open_date='$openDate', slogan='$slogan', end_date='$endDate' WHERE id = '$id'");
			return 1;
		endif;
	}
	function addEvent()
	{
		$name = $_POST['name'];
		$content = $_POST['content'];
		// $image = $_POST['image'];
		$openDate = $_POST['open_date'];
		$slogan = $_POST['slogan'];
		if (strtotime($_POST['end_date'])) :
			$endDate = $_POST['end_date'];
		endif;
		$fileName = $_FILES['image']['name'];
		$fileTempt = $_FILES['image']['tmp_name'];
		$folder = "../image/events/";
		$imageName = basename(time() . '_' . $fileName);
		$file_parts = explode('.', $fileName);
		$file_ext = strtolower(end($file_parts));
		$expensions = array("jpeg", "jpg", "png", "gif");
		if (in_array($file_ext, $expensions) === false) :
			return 0;
		else :
			move_uploaded_file($fileTempt, $folder . $imageName);
			$result = $this->connect->query("INSERT INTO events(name, content, image, open_date, slogan, end_date) VALUES('$name', '$content', '$imageName', '$openDate', '$slogan', '$endDate')");
			return 1;
		endif;
	}

	function showBrands()
	{
		$limit = 10;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;
		$curPage = $curPage < 1 ? 1 : $curPage;
		$totalResult = $this->connect->query("SELECT COUNT(id) AS total FROM brand_food");
		$numberRow = mysqli_fetch_assoc($totalResult)['total'];
		$total = ceil($numberRow / $limit);
		$limitQuery = '';
		if ($numberRow > $limit) {
			$limitQuery = "LIMIT " . ($curPage - 1) * $limit . ", " . $limit;
		}
		$data = $this->connect->query("SELECT * FROM brand_food " . $limitQuery);
		return ['result' => $data, 'total' => $total];
	}

	function checkDuplicateBrand()
	{
		if (isset($_POST['brandName'])) :
			$result = $this->connect->query("SELECT * FROM brand_food WHERE name = '" . $_POST['brandName'] . "'");
			if (mysqli_num_rows($result) != 0) :
				return true;
			else :
				return false;
			endif;
		endif;
	}

	function addBrand()
	{
		return $this->connect->query("INSERT INTO brand_food (name, status) VALUES ('" . $_POST['brandName'] . "','" . $_POST['brandStatus'] . "')");
	}

	function getBrandById()
	{
		$result = $this->connect->query("SELECT * FROM brand_food where id = " . $_GET['brandid']);
		return mysqli_fetch_array($result);
	}


	function checkSameNameBrand()
	{
		$name = addslashes($_POST['brandName']);
		$id = $_GET['brandid'];
		$result = $this->connect->query("SELECT * from brand_food where name = '$name' and id != '$id'");
		if (mysqli_num_rows($result) != 0) :
			return true;
		else :
			return false;
		endif;
	}

	function updateBrand()
	{
		$name = addslashes($_POST['brandName']);
		$status = $_POST['brandStatus'];
		$id = $_GET['brandid'];
		return $this->connect->query("UPDATE brand_food SET name ='$name' , status = '$status' where id = '$id'");
	}

	function deleteBrand()
	{
		$result = $this->connect->query("SELECT * from foods where brand_id =" . $_GET['brandid']);
		if (mysqli_num_rows($result) != 0) :
			// return $this->connect->query("UPDATE brand_food SET status=0 where id=" . $_GET['brandid']);
			return 2;
		else :
			return $this->connect->query("DELETE FROM brand_food where id=" . $_GET['brandid']);
		endif;
	}

	function showProducts()
	{
		$limit = 10;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;
		$curPage = $curPage < 1 ? 1 : $curPage;
		$totalResult = $this->connect->query("SELECT COUNT(id) AS total FROM foods");
		$numberRow = mysqli_fetch_assoc($totalResult)['total'];
		$total = ceil($numberRow / $limit);
		$limitQuery = '';
		if ($numberRow > $limit) {
			$limitQuery = "LIMIT " . ($curPage - 1) * $limit . ", " . $limit;
		}
		$data = $this->connect->query("SELECT * FROM foods " . $limitQuery);
		return ['result' => $data, 'total' => $total];
	}

	function checkDuplicateNameFood()
	{
		$name = addslashes($_POST['foodname']);
		$result = $this->connect->query("SELECT * from foods where name = '$name'");
		if (mysqli_num_rows($result) != 0) :
			return true;
		else :
			return false;
		endif;
	}

	function addFood()
	{
		$brandid = $_POST['brandid'];
		$foodname = addslashes($_POST['foodname']);
		$price = $_POST['price'];
		$details = addslashes($_POST['details']);
		$status = $_POST['status'];
		$fileName = $_FILES['image']['name'];
		$fileTempt = $_FILES['image']['tmp_name'];
		$folder = "../image/foods/";
		$imageName = basename(time() . '_' . $fileName);
		$file_parts = explode('.', $fileName);
		$file_ext = strtolower(end($file_parts));
		$expensions = array("jpeg", "jpg", "png", "gif");
		if (in_array($file_ext, $expensions) === false) :
			return 0;
		else :
			move_uploaded_file($fileTempt, $folder . $imageName);
			$this->connect->query("INSERT INTO foods (brand_id, name, price, image, detail, status) VALUES('$brandid','$foodname','$price','$imageName','$details','$status')");
			return 1;
		endif;
	}

	function deleteFood()
	{
		return $this->connect->query("DELETE FROM foods WHERE id =" . $_GET['foodid']);
	}
	function getFoodByID()
	{
		return mysqli_fetch_array($this->connect->query("SELECT * FROM foods WHERE id=" . $_GET['foodid']));
	}
	function checkSameNameFood()
	{
		$name = addslashes($_POST['foodname']);
		$id = $_POST['foodid'];
		$result = $this->connect->query("SELECT * from foods where name = '$name' and id != '$id'");
		if (mysqli_num_rows($result) != 0) :
			return true;
		else :
			return false;
		endif;
	}

	function updateFood()
	{
		$id = $_POST['foodid'];
		$brandid = $_POST['brandid'];
		$foodname = addslashes($_POST['foodname']);
		$price = $_POST['price'];
		$details = addslashes($_POST['details']);
		$status = $_POST['status'];
		if ($_FILES['image']['size'] !== 0) :
			$newfileName = $_FILES['image']['name'];
			$newimageName = time() . '_' . $newfileName;
			$newfileTempt = $_FILES['image']['tmp_name'];
			$folder = "../image/foods/";
			// $file_parts =explode('.',$newfileName);
			// $file_ext=strtolower(end($file_parts));
			// $expensions= array("jpeg","jpg","png","gif");
			// if(in_array($file_ext,$expensions)):
			move_uploaded_file($newfileTempt, $folder . $newimageName);
			//unlink(filename)
			$this->connect->query("UPDATE foods SET brand_id = '$brandid', name='$foodname', price='$price', image = '$newimageName', detail ='$details',status='$status' WHERE id = '$id' ");
		// else:
		// 	echo "Only supports PNG JPEG JPG or GIF file format";
		// endif;
		else :
			$this->connect->query("UPDATE foods SET brand_id = '$brandid', name='$foodname', price='$price', detail ='$details', status='$status' WHERE id = '$id' ");
		endif;
	}

	function showCharacter()
	{
		$limit = 10;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;
		$curPage = $curPage < 1 ? 1 : $curPage;
		$totalResult = $this->connect->query("SELECT COUNT(id) AS total FROM park_character");
		$numberRow = mysqli_fetch_assoc($totalResult)['total'];
		$total = ceil($numberRow / $limit);
		$limitQuery = '';
		if ($numberRow > $limit) {
			$limitQuery = "LIMIT " . ($curPage - 1) * $limit . ", " . $limit;
		}
		$data = $this->connect->query("SELECT * FROM park_character " . $limitQuery);
		return ['result' => $data, 'total' => $total];
	}

	function checkDuplicateNameCharacter()
	{
		$name = addslashes($_POST['characterName']);
		$result = $this->connect->query("SELECT * from park_character where name = '$name'");
		if (mysqli_num_rows($result) != 0) :
			return true;
		else :
			return false;
		endif;
	}

	function addCharacter()
	{
		$characterName = addslashes($_POST['characterName']);
		$story = addslashes($_POST['story']);
		$status = $_POST['status'];
		$fileName = $_FILES['image']['name'];
		$fileTempt = $_FILES['image']['tmp_name'];
		$folder = "../image/character/";
		$imageName = basename(time() . '_' . $fileName);
		$file_parts = explode('.', $fileName);
		$file_ext = strtolower(end($file_parts));
		$expensions = array("jpeg", "jpg", "png", "gif");
		if (in_array($file_ext, $expensions) === false) :
			return 0;
		else :
			move_uploaded_file($fileTempt, $folder . $imageName);
			$this->connect->query("INSERT INTO park_character (name,image, story, status) VALUES('$characterName','$imageName','$story','$status')");
			return 1;
		endif;
	}

	function deleteCharacter()
	{
		return $this->connect->query("DELETE FROM park_character WHERE id =" . $_GET['id']);
	}
	function getCharacterById()
	{
		$result = $this->connect->query("SELECT * FROM park_character WHERE id=" . $_GET['id']);
		return mysqli_fetch_array($result);
	}

	function checkSameNameCharacter()
	{
		$name = addslashes($_POST['name']);
		$id = $_GET['id'];
		$result = $this->connect->query("SELECT * from park_character where name = '$name' and id != '$id'");
		if (mysqli_num_rows($result) != 0) :
			return true;
		else :
			return false;
		endif;
	}


	function updateCharacter()
	{
		$id = $_GET['id'];

		$name = addslashes($_POST['name']);
		$story = addslashes($_POST['story']);
		$status = $_POST['status'];
		if ($_FILES['image']['size'] !== 0) :
			$newfileName = $_FILES['image']['name'];
			$newimageName = time() . '_' . $newfileName;
			$newfileTempt = $_FILES['image']['tmp_name'];
			$folder = "../image/character/";
			// $file_parts =explode('.',$newfileName);
			// $file_ext=strtolower(end($file_parts));
			// $expensions= array("jpeg","jpg","png","gif");
			// if(in_array($file_ext,$expensions)):
			move_uploaded_file($newfileTempt, $folder . $newimageName);
			//unlink(filename)
			$this->connect->query("UPDATE park_character SET name='$name',image='$newimageName',story ='$story',status='$status' WHERE id = '$id' ");
		// else:
		// 	echo "Only supports PNG JPEG JPG or GIF file format";
		// endif;
		else :
			$this->connect->query("UPDATE park_character SET name='$name',story ='$story',status='$status' WHERE id= '$id' ");
		endif;
	}

	function showGame()
	{
		$limit = 10;
		$curPage = isset($_GET['page']) ? $_GET['page'] : 1;
		$curPage = $curPage < 1 ? 1 : $curPage;
		$totalResult = $this->connect->query("SELECT COUNT(id) AS total FROM games");
		$numberRow = mysqli_fetch_assoc($totalResult)['total'];
		$total = ceil($numberRow / $limit);
		$limitQuery = '';
		if ($numberRow > $limit) {
			$limitQuery = "LIMIT " . ($curPage - 1) * $limit . ", " . $limit;
		}
		$data = $this->connect->query("SELECT * FROM games " .$limitQuery);
		return ['result' => $data, 'total' => $total];
	}
	function checkDuplicateNameGame()
	{
		$name = addslashes($_POST['name']);
		$result = $this->connect->query("SELECT * from games where name = '$name'");
		if (mysqli_num_rows($result) != 0) :
			return true;
		else :
			return false;
		endif;
	}
	function addGame()
	{
		$name = addslashes($_POST['name']);
		$details = addslashes($_POST['details']);
		$status = $_POST['status'];
		$fileName = $_FILES['image']['name'];
		$fileTempt = $_FILES['image']['tmp_name'];
		$folder = "../image/game/";
		$imageName = basename(time() . '_' . $fileName);
		$file_parts = explode('.', $fileName);
		$file_ext = strtolower(end($file_parts));
		$expensions = array("jpeg", "jpg", "png", "gif");
		if (in_array($file_ext, $expensions) === false) :
			return 0;
		else :
			move_uploaded_file($fileTempt, $folder . $imageName);
			$this->connect->query("INSERT INTO games (name,image,detail,status) VALUES('$name','$imageName','$details','$status')");
			return 1;
		endif;
	}
	function deleteGame()
	{
		return $this->connect->query("DELETE FROM games WHERE id =" . $_GET['id']);
	}
	function getGameById()
	{
		$result = $this->connect->query("SELECT * FROM games WHERE id=" . $_GET['id']);
		return mysqli_fetch_array($result);
	}

	function checkSameNameGame()
	{
		$name = addslashes($_POST['name']);
		$id = $_GET['id'];
		$result = $this->connect->query("SELECT * from games where name = '$name' and id != '$id'");
		if (mysqli_num_rows($result) != 0) :
			return true;
		else :
			return false;
		endif;
	}


	function updateGame()
	{
		$id = $_GET['id'];

		$name = addslashes($_POST['name']);
		$details = addslashes($_POST['details']);
		$status = $_POST['status'];
		if ($_FILES['image']['size'] !== 0) :
			$newfileName = $_FILES['image']['name'];
			$newimageName = time() . '_' . $newfileName;
			$newfileTempt = $_FILES['image']['tmp_name'];
			$folder = "../image/game/";
			move_uploaded_file($newfileTempt, $folder . $newimageName);
			//unlink(filename)
			$this->connect->query("UPDATE games SET name='$name',image='$newimageName',detail ='$details',status='$status' WHERE id = '$id' ");
		else :
			$this->connect->query("UPDATE games SET name='$name',detail ='$details',status='$status' WHERE id = '$id' ");
		endif;
	}
}

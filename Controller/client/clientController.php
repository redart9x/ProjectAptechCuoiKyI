<?php
include "Model/clientModel.php";
class ClientController
{
	var $cm;
	function __construct()
	{
		$this->cm = new ClientModel();
	}

	function routes()
	{
		if (isset($_GET['request'])) :
			switch ($_GET['request']):
				case 'experience':
					$res = $this->cm->getGame();
					$maxPage = $res['total'];
					$result = $res['result'];
					include "./views/client/experience.php";
					break;
				case 'dinning':
					// $cc = $this;
					$res = $this->cm->getFoods();
					$maxPage = $res['total'];
					$result = $res['result'];
					$brand = $this->cm->getBrandFood();
					include "./views/client/leisure_dinning.php";
					break;
				case 'parkcharacters':
					$res = $this->cm->getCharacters();
					$maxPage = $res['total'];
					$result = $res['result'];
					include "./views/client/parkcharacters.php";
					break;
				case 'parkinformation':
					if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['email'])) :
						$result = $this->cm->sendFeedback();
						header("location: ?request=parkinformation&send=1");
					endif;
					ob_end_flush();
					include "./views/client/parkinformation.php";
					break;
				case 'whatsup':
					$res = $this->cm->getEvents();
					$maxPage = $res['total'];
					$result = $res['result'];
					// var_dump(mysqli_fetch_array($result));
					include "./views/client/whatsup.php";
					break;
				case 'businessopportunities':
					include "./views/client/business-opportunities.php";
					break;
			endswitch;
		else :
			$res = $this->cm->getGame();
			$maxPage = $res['total'];
			$result = $res['result'];
			include "views/client/experience.php";
		endif;
	}

	function brands()
	{
		return $this->cm->getBrandFood();
	}
}

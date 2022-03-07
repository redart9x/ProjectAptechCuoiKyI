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
					$result = $this->cm->getGame();
					include "./views/client/experience.php";
					break;
				case 'dinning':
					// $cc = $this;
					$result = $this->cm->getFoods();
					$brand = $this->cm->getBrandFood();
					include "./views/client/leisure_dinning.php";
					break;
				case 'parkcharacters':
					$result = $this->cm->getCharacters();
					include "./views/client/parkcharacters.php";
					break;
				case 'parkinformation':
					if (isset($_POST['name']) && isset($_POST['message']) && isset($_POST['email'])) :
						$result = $this->cm->sendFeedback();
						header("location: ?request=parkinformation");
					endif;
					ob_end_flush();
					include "./views/client/parkinformation.php";
					break;
				case 'whatsup':
					$result = $this->cm->getEvents();
					// var_dump(mysqli_fetch_array($result));
					include "./views/client/whatsup.php";
					break;
				case 'sign-in':
					if (isset($_POST['username']) && isset($_POST['password'])) :
						$this->cm->checkSignIn();
					endif;
					include "./views/client/sign-in.php";
					break;
				case 'businessopportunities':
					include "./views/client/business-opportunities.php";
					break;
			endswitch;
		else :
			$result = $this->cm->getGame();
			include "views/client/experience.php";
		endif;
	}

	function brands()
	{
		return $this->cm->getBrandFood();
	}
}

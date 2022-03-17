<?php
include "../Model/adminModel.php";
class adminController
{
    var $am;
    function __construct()
    {
        $this->am = new adminModel();
    }
    function routes()
    {
        if (isset($_GET['request'])) :
            switch ($_GET['request']):
                case 'brands':
                    $res = $this->am->showBrands();
                    $maxPage = $res['total'];
                    $brands = $res['result'];
                    include "../views/admin/brands/showbrands.php";
                    break;
                case 'product':
                    $res = $this->am->showProducts();
                    $maxPage = $res['total'];
                    $products = $res['result'];
                    include "../views/admin/products/showProducts.php";
                    break;
                case 'character':
                    $res = $this->am->showCharacter();
                    $maxPage = $res['total'];
                    $character = $res['result'];
                    include "../views/admin/character/showCharacter.php";
                    break;
                case 'game':
                    $res = $this->am->showGame();
                    $maxPage = $res['total'];
                    $game = $res['result'];
                    include "../views/admin/game/showGame.php";
                    break;
                case 'editBrands':
                    $brands = $this->am->getBrandById();
                    if (isset($_POST['brandName'])) :
                        if ($this->am->checkSameNameBrand() == true) :
                            $alert = "The Brand Already Exists!";
                            include "../views/admin/brands/editBrands.php";
                        else :
                            $result = $this->am->updateBrand();
                            if ($result) {
                                header("location: ?request=brands&update=1");
                            } else if ($result == 0) {
                                header("location: ?request=brands&update=0");
                            }
                        endif;
                    else :
                        include "../views/admin/brands/editBrands.php";
                    endif;
                    break;
                case 'deletebrands':
                    $result = $this->am->deleteBrand();
                    if ($result) {
                        header("location: ?request=brands&delete=1");
                    } else if ($result == 0) {
                        header("location: ?request=brands&delete=0");
                    } else if ($result == 2) {
                        header("location: ?request=brands&reason=brand-has-food");
                    }
                    break;
                case 'addBrands':
                    if (isset($_POST['brandName'])) :
                        if ($this->am->checkDuplicateBrand() == true) :
                            $alert = "The Brand Already Exists!";
                            include "../views/admin/brands/addBrands.php";
                        else :
                            $result = $this->am->addBrand();
                            if ($result) {
                                header("location: ?request=brands&create=1");
                            } else if ($result == 0) {
                                header("location: ?request=brands&create=0");
                            }
                        endif;
                    else :
                        include "../views/admin/brands/addBrands.php";
                    endif;
                    break;
                case 'addproduct':
                    $brands = $this->am->showBrands();
                    if (isset($_POST['foodname'])) :
                        if ($this->am->checkDuplicateNameFood() == true) :
                            $alert = "This dish already exists";
                            include "../views/admin/products/addproduct.php";
                        else :
                            if ($this->am->addFood() == 1) :
                                header("location: ?request=product&create=1");
                            else :
                                $alert = "Only supports PNG JPEG JPG or GIF file format";
                                include "../views/admin/products/addproduct.php";
                            endif;
                        endif;
                    else :
                        include "../views/admin/products/addproduct.php";
                    endif;
                    break;
                case 'deleteFood':
                    $this->am->deleteFood();
                    header("location: ?request=product&delete=1");
                    break;
                case 'updateFood':
                    $brands = $this->am->showBrands();
                    $result = $this->am->getFoodByID();
                    if (isset($_POST['foodid'])) :
                        if ($this->am->checkSameNameFood() == true) :
                            $alert = "This Dish already exists";
                            include "../views/admin/products/updateFood.php";
                        else :
                            $this->am->updateFood();
                            header("location: ?request=product&update=1");
                        // else:
                        //  	$alert = "Only supports PNG JPEG JPG or GIF file format";
                        //  	include "../views/admin/products/updateFood.php";
                        endif;
                    else :
                        include "../views/admin/products/updateFood.php";
                    endif;
                    break;

                case 'addCharacter':
                    if (isset($_POST['characterName'])) :
                        if ($this->am->checkDuplicateNameCharacter() == true) :
                            $alert = "This character already exists";
                            include "../views/admin/character/addCharacter.php";
                        else :
                            if ($this->am->addCharacter() == 1) :
                                header("location: ?request=character&create=1");
                            else :
                                $alert = "Only supports PNG JPEG JPG or GIF file format";
                                include "../views/admin/character/addCharacter.php";
                            endif;
                        endif;
                    else :
                        include "../views/admin/character/addCharacter.php";
                    endif;
                    break;
                case 'deleteCharacter':
                    $this->am->deleteCharacter();
                    header("location: ?request=character&delete=1");
                    break;
                case 'updateCharacter':
                    $result = $this->am->getCharacterById();
                    if (isset($_POST['name'])) :
                        if ($this->am->checkSameNameCharacter() == true) :
                            $alert = "This Character already exists";
                            include "../views/admin/character/updateCharacter.php";
                        else :
                            $this->am->updateCharacter();
                            header("location: ?request=character&update=1");
                        // else:
                        //  	$alert = "Only supports PNG JPEG JPG or GIF file format";
                        //  	include "../views/admin/products/updateFood.php";
                        endif;
                    else :
                        include "../views/admin/character/updateCharacter.php";
                    endif;
                    break;
                case 'addGame':
                    if (isset($_POST['name'])) :
                        if ($this->am->checkDuplicateNameGame() == true) :
                            $alert = "This Game already exists";
                            include "../views/admin/game/addGame.php";
                        else :
                            if ($this->am->addGame() == 1) :
                                header("location: ?request=game&create=1");
                            else :
                                $alert = "Only supports PNG JPEG JPG or GIF file format";
                                include "../views/admin/game/addGame.php";
                            endif;
                        endif;
                    else :
                        include "../views/admin/game/addGame.php";
                    endif;
                    break;
                case 'deleteGame':
                    $this->am->deleteGame();
                    header("location: ?request=game&delete=1");
                    break;
                case 'updateGame':
                    $result = $this->am->getGameById();
                    if (isset($_POST['name'])) :
                        if ($this->am->checkSameNameGame() == true) :
                            $alert = "This Game already exists";
                            include "../views/admin/game/updateGame.php";
                        else :
                            $this->am->updateGame();
                            header("location: ?request=game&update=1");
                        endif;
                    else :
                        include "../views/admin/game/updateGame.php";
                    endif;
                    break;
                case 'feedback':
                    if (isset($_POST['id'])) {
                        $isDelete = $this->am->deleteFeedback();
                        if ($isDelete) {
                            header("location: ?request=feedback&delete=1");
                        } else {
                            header("location: ?request=feedback&delete=0");
                        }
                    }
                    $res = $this->am->getFeedback();
                    $maxPage = $res['total'];
                    $data = $res['result'];
                    include "../views/admin/feedback/feedback.php";
                    break;
                case 'event':
                    if (isset($_POST['id']) && $_POST['id'] != null) {
                        if (isset($_POST['name']) && isset($_POST['content']) && isset($_FILES['image']) && isset($_POST['open_date']) && isset($_POST['slogan'])) {
                            $isUpdate = $this->am->updateEvent();
                            if ($isUpdate) {
                                header("location: ?request=event&update=1");
                            } else {
                                header("location: ?request=event&update=0");
                            }
                        } else {
                            $isDelete = $this->am->deleteEvent();
                            if ($isDelete) {
                                header("location: ?request=event&delete=1");
                            } else {
                                header("location: ?request=event&delete=0");
                            }
                        }
                        // header("location: ?request=event");
                    } else if (isset($_POST['name']) && isset($_POST['content']) && isset($_POST['open_date']) && isset($_POST['slogan']) && isset($_FILES['image'])) {
                        $isCreate = $this->am->addEvent();
                        if ($isCreate) {
                            header("location: ?request=event&create=1");
                        } else {
                            header("location: ?request=event&create=0");
                        }
                    }
                    $res = $this->am->getEvent();
                    $maxPage = $res['total'];
                    $result = $res['result'];
                    include "../views/admin/events/events.php";
                    break;
                case 'logout':
                    unset($_SESSION['admin']);
                    header("location: index.php");
            endswitch;

        else :
            $res = $this->am->showBrands();
            $maxPage = $res['total'];
            $brands = $res['result'];
            include "../views/admin/brands/showbrands.php";
        endif;
    }


    function SignInAdmin()
    {
        if (isset($_POST['username'])) :
            if ($this->am->checkSignInAdmin() == false) :
                $alert = "Wrong username or password";
                include "../views/admin/signin.php";
            else :
                $_SESSION['admin'] = $_POST['username'];
                header("location: .");
            endif;
        else :
            if (empty($_SESSION['admin'])) :
                include "../views/admin/signin.php";
            else :
                include "../views/admin/controlpanel.php";
            endif;
        endif;
    }
}

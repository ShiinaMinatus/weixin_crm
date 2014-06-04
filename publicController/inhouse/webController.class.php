<?php

class webController {

    public $pageSize = 5;

    // 用户列表 界面
    public function stylistIntroduction() {



        if (!empty($_REQUEST['page'])) {

            $page = $_REQUEST['page'];
        } else {

            $page = 1;
        }

        $pageSize = $this->pageSize;

        $dateCount = $pageSize * ($page - 1);

        $info = new stylistModel();

        $info->addOrderBy('stylist_create_time DESC');

        $info->initialize("state = '0'");

        $number = $info->vars_number;

        $info->addOffset($dateCount, $pageSize);

        $info->initialize();

        $result = $info->vars_all;

        $_ENV['smarty']->setDirTemplates('web');

        $_ENV['smarty']->assign('userInfo', $result);

        $url = WebSiteUrl . "/pageredirst.php?action=web&functionname=stylistIntroduction";

        $page = $_ENV['smarty']->getPages($url, 1, $number, $pageSize);

        $_ENV['smarty']->assign('pages', $page);



        $_ENV['smarty']->display('stylistIntroduction');
    }

    public function addstylist() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $stylist = new stylistModel();
            if (!empty($_POST['stylist_name']) && !empty($_POST["stylist_info"]) && !empty($_POST["specialty"]) && !empty($_POST["stylist_image"])) {
                $postData["stylist_name"] = $_POST['stylist_name'];
                $postData["stylist_info"] = $_POST['stylist_info'];
                $postData["stylist_image"] = $_POST['stylist_image'];
                $postData["specialty"] = $_POST['specialty'];
                $postData["stylist_create_time"] = time();
                $stylist->insert($postData);
                $this->stylistIntroduction();
            } else {
                
            }
        } else {
            $_ENV['smarty']->setDirTemplates('web');

            $_ENV['smarty']->display('addstylist');
        }
    }

    public function stylistItemDelete() {
        if (!empty($_REQUEST['ItemId'])) {
            $stylist = new stylistModel();
            $stylist->initialize("stylist_id='" . $_REQUEST['ItemId'] . "'");
            $upData["state"] = "1";
            $stylist->update($upData);
            $this->stylistIntroduction();
        }
    }

    public function editStylistItem() {
        if (isset($_GET['ItemId'])) {
            $itemId = $_GET['ItemId'];
            $stylist = new stylistModel();
            $stylist->initialize("stylist_id='" . $itemId . "'");
            $stylistValue = $stylist->vars;
            $_ENV['smarty']->setDirTemplates('web');
            $_ENV['smarty']->assign('stylistValue', $stylistValue);
            $_ENV['smarty']->display('stylistEdit');
        }
    }

    public function stylistUpdate() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_GET["ItemId"])) {
                $updateVal['stylist_name'] = $_POST['stylist_name'];
                $updateVal['stylist_info'] = $_POST['stylist_info'];
                $updateVal['specialty'] = $_POST['specialty'];
                $updateVal['stylist_create_time'] = time();
                if ($_POST['stylist_image'] != "") {
                    $updateVal['stylist_image'] = $_POST['stylist_image'];
//                    $imageRedata = $this->addImage("exampleInputFile");
//                    $updateVal['exchange_image'] = $imageRedata["message"];
                }
                $this->updateStylist($updateVal, $_GET["ItemId"]);
                $this->stylistIntroduction();
            } else {
                $this->stylistIntroduction();
            }
        }
    }

    public function updateStylist($data, $id) {

        $stylist = new stylistModel();

        $stylist->initialize('stylist_id = ' . $id);

        if ($stylist->vars_number > 0) {

            $stylist->update($data);
        }
    }

}

?>
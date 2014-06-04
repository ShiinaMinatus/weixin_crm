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

        $info->initialize();

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

        $_ENV['smarty']->setDirTemplates('web');

        $_ENV['smarty']->display('addstylist');
    }

}

?>
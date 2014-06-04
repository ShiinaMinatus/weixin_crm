<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of areaModel
 *
 * @author Administrator
 */
class areaModel extends Basic {

    public function __construct() {

        $this->child_name = 'area';

        $this->dbname = 'weixin';

        parent::__construct();
    }

}

?>

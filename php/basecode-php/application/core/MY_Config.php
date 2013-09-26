<?php

/*
 * MY_Config.php
 *
 * Created on 15/12/2011 13:45:55
 *
 * Copyright(c) 2011 PT Sagara Xinix Solusitama.  All Rights Reserved.
 * This software is the proprietary information of PT Sagara Xinix Solusitama.
 *
 * History
 * =======
 * (dd/mm/yyyy hh:mm) (name)
 * 15/12/2011 13:45   chalid
 *
 */

class MY_Config extends CI_Config {

    function __construct() {
        parent::__construct();
        $this->_config_paths = array(APPPATH,ICODEPATH);
    }

}
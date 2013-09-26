<?php

/**
 * Description of ARCH_Exceptions
 *
 * @author jafar
 */
class ARCH_Exceptions extends CI_Exceptions {

    function __construct() {
        parent::__construct();
        if (class_exists('CI_Controller')) {
            $CI = &get_instance();
            if (!empty($CI)) {
                $CI->lang->load_gettext();
            } else {
                $GLOBALS['LANG']->load_gettext();
            }
        } else {
            require_once ICODEPATH . 'helpers/x_helper' . EXT;
        }
    }

}


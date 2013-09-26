<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hook {

    
    function post_controller_constructor() {
        $CI = &get_instance();
        if (method_exists($CI, '_post_controller_constructor')) {
            $CI->_post_controller_constructor();
        }
    }

    function post_controller() {
        $CI = &get_instance();
        if (method_exists($CI, '_post_controller')) {
            $CI->_post_controller();
        }
    }

    function pre_system() {
        // define('ARCHPATH', 'arch/');
        define('MODPATH', 'modules/');
        define('THEMEPATH', 'themes/');
        spl_autoload_register(array($this, '_autoload_class'));
    }

    function _autoload_class($class) {
        $class = strtolower($class);
        $matches = null;
        $match = preg_match('/(controller|model)$/i', $class, $matches);
        if ($match) {
            foreach (array(BASEPATH, APPPATH, ICODEPATH) as $path) {
                $file_path = $path . $matches[0] . 's/' . $class . EXT;
                if (file_exists($file_path)) {
                    require_once $file_path;
                }
            }
        }
    }

}

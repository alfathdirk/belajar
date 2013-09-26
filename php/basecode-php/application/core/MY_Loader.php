<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Loader
 *
 * @author jafar
 */
class MY_Loader extends CI_Loader {

//    var $_ci_view_paths;
//    
    public function __construct() {
        $this->_ci_ob_level = ob_get_level();
        $this->_ci_library_paths = array(APPPATH, ICODEPATH, BASEPATH);
        $this->_ci_helper_paths = array(APPPATH, ICODEPATH, BASEPATH);
        $this->_ci_model_paths = array(APPPATH, ICODEPATH);
        $this->_ci_view_paths = array(APPPATH . 'views/' => TRUE, ICODEPATH . 'views/' => TRUE);
    }

//
//    function _fetch_view_paths() {
//        if (empty($this->_ci_view_paths)) {
//            $CI = &get_instance();
//
//            $this->_ci_view_paths = array(
//                THEMEPATH . $CI->config->item('theme') . '/views/',
//                APPPATH . 'views/',
//            );
//
//            if ($CI->router->is_module) {
//                $this->_ci_view_paths[] = $CI->router->base_dir . 'views/';
//            }
//
//            $this->_ci_view_paths[] = ARCHPATH . 'views/';
//        }
//    }
//
//    function view($view, $vars = array(), $return = FALSE) {
//        $this->_fetch_view_paths();
//
//        $file = $view;
//        foreach ($this->_ci_view_paths as $view_path) {
//            $exploded = explode('/', trim($view, '/'));
//            $trim_view = $exploded[count($exploded) - 1];
//
//            if (file_exists($view_path . $view . EXT)) {
//                $file = $view_path . $view . EXT;
//                break;
//            } elseif (file_exists($view_path . $trim_view . EXT)) {
//                $file = $view_path . $trim_view . EXT;
//                break;
//            }
//        }
//        return $this->_ci_load(array('_ci_path' => $file, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
//    }

    function view($view, $vars = array(), $return = FALSE) {
        foreach ($this->_ci_view_paths as $view_path => $show) {
            $exploded = explode('/', trim($view, '/'));
            $trim_view = $exploded[count($exploded) - 1];
            if (file_exists($view_path . $view . '.php')) {
                $view = $view;
                break;
            } elseif (file_exists($view_path . $trim_view . '.php')) {
                $view = $trim_view;
                break;
            }
        }
        return parent::view($view, $vars, $return);
    }

}
<?php

/*
 * x_helper.php
 *
 * Created on 21/06/2011 16:17:47
 *
 * Copyright(c) 2011 PT Sagara Xinix Solusitama.  All Rights Reserved.
 * This software is the proprietary information of PT Sagara Xinix Solusitama.
 *
 * History
 * =======
 * (dd/mm/yyyy hh:mm) (name)
 * 21/06/2011 16:17   jafar
 *
 */

if (!function_exists('xdebug')) {

    function xdebug($data, $to_screen = false) {
        if ($to_screen) {
            echo '<pre class="-debug prettyprint">';
            print_r($data);
            echo '</pre>' . "\n";
        }

        log_message('info', print_r($data, true));
    }

}

if (!function_exists('theme_url')) {

    function theme_url($uri = '') {
        $CI = & get_instance();
        $CI->load->helper('url');
        $uri = trim($uri);

        if (!preg_match("/^(http(s?):\/\/|ftp:\/\/{1})/i", $uri)) {
            if ($CI->config->item('debug')) {
                $tstamp = mktime();
                return base_url() . 'themes/' . $CI->config->item('theme') . '/' . $uri . '?' . $tstamp;
            } else {
                return base_url() . 'themes/' . $CI->config->item('theme') . '/' . $uri;
            }
        }
        return $uri;
    }

}

if (!function_exists('data_url')) {

    function data_url($uri = '') {
        $CI = & get_instance();
        $CI->load->helper('url');
        $uri = trim($uri);
        if (!preg_match("/^(http(s?):\/\/|ftp:\/\/{1})/i", $uri)) {
            $uri = base_url() . 'data/' . $uri;
        }
        return $uri;
    }

}

if (!function_exists('widget_ajax')) {

    function widget_ajax($url, $id = null, $attrs = null, $callback = 'null') {
        if ($id == null) {
            $id = uniqid('widget_');
        }

        $attr_str = '';
        if (!empty($attrs)) {
            foreach ($attrs as $key => $value) {
                $attr_str .= ' ' . $key . '="' . $value . '"';
            }
        }

        $data = array(
            'id' => $id,
            'url' => $url,
            'callback' => $callback,
            'attr_str' => $attr_str,
        );

        $CI = &get_instance();
        return $CI->load->view('helpers/widget_ajax', $data, true);
    }

}

if (!function_exists('widget_view')) {

    function widget_view($view, $data = null, $ret = false) {
        $CI = &get_instance();
        if (empty($data)) {
            $data = $CI->_data;
        }
        $data['CI'] = $CI;
        return $CI->load->view($view, $data, $ret);
    }

}

if (!function_exists('fetch_uri')) {

    function fetch_uri($uri) {
        if ($uri == '/') {
            return $uri;
        }
        $segments = explode('/', $uri);
        return $segments[0] . ( (empty($segments[1])) ? '' : '/' . $segments[1] );
    }

}

if (!function_exists('xview_filter')) {

    function xview_filter($filter, $extra = '') {
        $CI = &get_instance();
        return $CI->load->view('helpers/xview_filter', array(
            'filter' => $filter,
            'extra' => $extra,
                ), true);
    }

}

if (!function_exists('xview_error')) {

    function xview_error() {
        $errors = get_errors();

        if (!empty($errors)) {
            echo '<div class="error">' . $errors . '</div>';
        }
    }

    function is_error_exists() {
        $errors = get_errors();
        return!empty($errors);
    }

    function get_errors() {
        $CI = &get_instance();

        $errors = @$CI->_data['errors'];
        $flash = $CI->session->flashdata('validation::errors');
        $CI->session->set_flashdata('validation::errors', null);

        if ($errors != $flash && !empty($flash)) {
            $CI->_data['errors'] = @$CI->_data['errors'] . $flash;
        }
        return @$CI->_data['errors'];
    }

    
    function add_error($error) {
        $CI = &get_instance();
        $errors = get_errors();
        $errors .= '<p>' . $error . '</p>';
        $CI->session->set_flashdata('validation::errors', $errors);
    }

}

if (!function_exists('xview_info')) {

    function xview_info() {
        $infos = get_infos();

        if (!empty($infos)) {
            echo '<div class="info">' . $infos . '</div>';
        }
    }

    function is_info_exists() {
        $infos = get_infos();
        return!empty($infos);
    }

    function get_infos() {
        $CI = &get_instance();

        $infos = @$CI->_data['infos'];
        $flash = $CI->session->flashdata('validation::infos');

        if ($infos != $flash && !empty($flash)) {
            @$CI->_data['infos'] .= $flash;
        }
        return @$CI->_data['infos'];
    }

    function add_info($info) {
        $CI = &get_instance();
        $infos = get_infos();
        $infos .= '<p>' . $info . '</p>';
        $CI->session->set_flashdata('validation::infos', $infos);
    }

}

if (!function_exists('xview_current_date')) {

    function xview_current_date() {
        return gmdate('d/m/Y', time() + 25200);
    }

}

if (!function_exists('human_current_date')) {

    function human_current_date() {
        return gmdate(l('format.short_date'), time() + 25200);
    }

}

if (!function_exists('mysql_current_date')) {

    function mysql_current_date() {
        return gmdate(l('format.mysql_datetime'), time() + 25200);
    }

}

if (!function_exists('date_parse_from_format')) {

    function date_parse_from_format($format, $date) {
        if ($format == 'Y-m-d H:i:s') {
            $date = explode(' ', @$date);
            $date[0] = explode('-', @$date[0]);
            $date[1] = explode(':', @$date[1]);
            return array(
                'year' => intval($date[0][0]),
                'month' => intval($date[0][1]),
                'day' => intval($date[0][2]),
                'hour' => intval(@$date[1][0]),
                'minute' => intval(@$date[1][1]),
                'second' => intval(@$date[1][2]),
            );
        }
        $dMask = array(
            'H' => 'hour',
            'i' => 'minute',
            's' => 'second',
            'y' => 'year',
            'm' => 'month',
            'd' => 'day'
        );
        $format = preg_split('//', $format, -1, PREG_SPLIT_NO_EMPTY);
        $date = preg_split('//', $date, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($date as $k => $v) {
            if ($dMask[$format[$k]])
                $dt[$dMask[$format[$k]]] .= $v;
        }
        return $dt;
    }

}

if (!function_exists('human_to_mysql')) {

    function human_to_mysql($d) {
        if (empty($d)) {
            return '';
        }
        $parsed = date_parse_from_format(l('format.short_date'), $d);
        $unix = mktime($parsed['hour'], $parsed['minute'], $parsed['second'], $parsed['month'], $parsed['day'], $parsed['year']);
        return date(l('format.mysql_datetime'), $unix);
    }

}

if (!function_exists('mysql_to_human')) {

    function mysql_to_human($d) {
        if (substr($d, 0, 10) == '0000-00-00') {
            return '';
        }
        $parsed = date_parse_from_format(l('format.mysql_datetime'), $d);
        $unix = mktime($parsed['hour'], $parsed['minute'], $parsed['second'], $parsed['month'], $parsed['day'], $parsed['year']);
        return date(l('format.short_date'), $unix);
    }

}

if (!function_exists('_l')) {

    function _l($key) {
        $CI = &get_instance();
        $CI->lang->load('messages');
        $val = $CI->lang->line($key);
        if (empty($val)) {
            $val = $key;
        }
        return $val;
    }

}


if (!function_exists('l')) {

    function l($key, $params = array()) {
        $CI = &get_instance();
        if (strpos($key, 'format.') !== 0 && $CI->config->item('lang_use_gettext')) {
            $func = '_';
        } else {
            $func = '_l';
        }

        if (is_string($params)) {
            $params = array($params);
        } elseif (empty($params)) {
            $params = array();
        }

        $params = array_merge(array($func($key)), $params);
        if (count($params) == 1) {
            return $params[0];
        } else {
            return call_user_func_array('sprintf', $params);
        }
    }

}
if (!function_exists('get_image_path')) {

    function get_image_path($img, $type = 'thumb', $def = 'img/arch/transparent.gif', $basedir = './data/', $baseurl = 'data/') {
        if (empty($img)) {
            return theme_url($def);
        }

        $baseurl = base_url() . $baseurl;

        $d = explode('/', $img);
        $a = array();
        $count = count($d);
        for ($i = 0; $i < $count - 1; $i++) {
            $a[] = $d[$i];
        }
        $a[] = $type;
        $a[] = $d[$count - 1];

        $uri = implode('/', $a);
        if (file_exists($basedir . $uri)) {
            return $baseurl . $uri;
        } else {
            return theme_url($def);
        }
    }

}

if (!function_exists('fork')) {

    function fork($shellCmd) {
        exec("nice $shellCmd > /dev/null 2>&1 &");
    }

}
<?php

/*
 * ARCH_Lang.php
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

/**
 * Description of ARCH_Lang
 *
 * @author jafar
 */
class ARCH_Lang extends CI_Lang {

    function load_gettext($language = null, $domain = 'messages') {
        require_once ICODEPATH . '/helpers/x_helper' . EXT;

        @include APPPATH . 'config/' . ENVIRONMENT . '/config' . EXT;
        $tmp = $config;
        $inc = @include(ICODEPATH . 'config/app' . EXT);
        if ($inc) {
            $config = array_merge($tmp, $config);
            $tmp = $config;
        }
        $inc = @include(APPPATH . 'config/' . ENVIRONMENT . '/app' . EXT);
        if ($inc) {
            $config = array_merge($tmp, $config);
        }

        if (!empty($config['language'])) {
            $default_langs = array($config['language'] . '.' . $config['charset']);
        }

        $languages = array();
        if (isset($config['lang_force']) && $config['lang_force']) {
            $languages[] = $config['language'];
        } else {
            if (!empty($language)) {
                if (is_array($language)) {
                    $languages = array_merge($languages, $language);
                } else {
                    $languages[] = $language;
                }
            }

            $t = explode(',', @$_SERVER['HTTP_ACCEPT_LANGUAGE']);
            foreach ($t as &$data) {
                $t1 = explode(';', $data);
                $data = $t1[0];
            }
            $accept_lang = $t;

            if (!empty($accept_lang)) {
                $to_merge = array();
                foreach ($accept_lang as $lang) {
                    $to_merge[] = implode('_', explode('-', $lang));
                }
                $languages = array_merge($languages, $to_merge);
            }
            $languages = array_merge($languages, $default_langs);
        }

        // get current timestamp
        $current_domain = '';
        foreach ($languages as &$language) {
            $language = $this->_fix_lang($language);

            // TODO reekoheek charset is forced to UTF-8
//            $http_charsets = explode(',', $accept_charset[0]);
            $default_charset = 'UTF-8';

            if (count(explode('.', $language)) <= 1) {
                $language = $language . '.' . $default_charset;
            }

            if (empty($current_domain)) {
                $l = explode('.', $language);
                $domains = glob(APPPATH . 'language/locale/' . $l[0] . '/LC_MESSAGES/messages-*.mo');
                if (!empty($domains)) {
                    $current = basename($domains[0], '.mo');
                    $timestamp = preg_replace('{messages-}i', '', $current);
                    $current_domain = $current;
                }
            }
        }

        if (empty($current_domain)) {
            $current_domain = $domain;
        }
        
//        foreach($languages as &$lang) {
//            $lang = strtolower($lang);
//        }
        
        // TODO reekoheek to get support multi language fallback with putenv 
        $lang = (is_array($languages)) ? $languages[0] : $languages;

        
        putenv("LC_ALL=" . $lang);
//        $CI = &get_instance();
//        if (!empty($CI)) {
//            if (!(isset($config['lang_force']) && $config['lang_force'])) {
//                $lang = explode('.', $lang);
//                $CI->config->set_item('language', $lang[0]);
//            }
//        }

        // FIXME force first lang only, harusnya semuanya
        setlocale(LC_ALL, $lang);
        bindtextdomain($current_domain, APPPATH . 'language/locale');
        textdomain($current_domain);
    }

    function _fix_lang(&$lang) {
        if ($lang == 'id') {
            $lang = 'id_ID';
        }
        return $lang;
    }

}


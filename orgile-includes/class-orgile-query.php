<?php

ChromePhp::info('load class-orgile-query');

class ORGILE_Query {
    public $is_404      = false;
    public $is_search   = false;
    public $is_home     = false;
    public $is_single   = false;
    public $is_page     = false;
    public $is_singular = false;
    public $is_category = false;
    public $is_tag      = false;
    public $is_author   = false;
    public $is_date     = false;
    public $is_archive  = false;
    
    function __construct() {
        ChromePhp::info('create ORGILE_query');

        $request = urldecode($_SERVER['REQUEST_URI']);
        $url = parse_url($request);
        $req_path = array_slice(explode('/', $url['path']), 1);
        parse_str($url['query'], $req_params);
        
        ChromePhp::warn($request);
        ChromePhp::warn($req_path, $req_params);

        $this->parse_request($req_path, $req_params);
    }

    function parse_request($path, $params) {
        $type = ['archive', 'search', '404', ''];
        
        foreach ($type as $target) {
            if ($path[0] == $target) {
                call_user_func_array([$this, "parse_" . $target . "_handler"], [$path, $params]);
                return;
            }
        }

        // not match
        call_user_func_array([$this, "parse_undefined_handler"], [$path, $params]);
    }
    
    function parse_archive_handler($path, $params) {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse_search_handler($path, $params) {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse_404_handler($path, $params) {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse__handler($path, $params) {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse_undefined_handler($path, $params) {
        ChromePhp::info("handler: " . __FUNCTION__);
    }
}

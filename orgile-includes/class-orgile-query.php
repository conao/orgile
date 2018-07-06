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
    }
}

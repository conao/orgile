<?php

ChromePhp::info('load class-orgile-query');

class ORGILE_Query {
    public $is_404       = false;
    public $is_archive   = false;
    public $is_search    = false;
    public $is_page      = false;
    public $is_category  = false;
    public $is_tag       = false;
    public $is_author    = false;
    public $is_date      = false;
    public $is_          = false;
    public $is_undefined = false;
    
    private $types = ['404', 'archive', 'search', 'page', 'category', 'tag', 'author', 'date', ''];
    private $req_inx;
    private $req_type;
    private $req_path;
    private $req_params;
    
    function __construct() {
        ChromePhp::info('create ORGILE_query');

        $request = urldecode($_SERVER['REQUEST_URI']);
        $url = parse_url($request);
        $this->req_path = array_slice(explode('/', $url['path']), 1);
        parse_str($url['query'], $this->req_params);
        
        ChromePhp::warn($request);
        ChromePhp::warn($this->req_path, $this->req_params);

        $this->parse_request();
    }

    function parse_request() {
        $this->req_inx = array_search($this->req_path[0], $this->types);

        $this->req_type = $this->req_inx !== false ? $this->types[$this->req_inx] : 'undefined';

        call_user_func_array([$this, "parse_" . $this->req_type . "_handler"], []);
        $this->{'is_' . $this->req_type} = true;
        ChromePhp::warn($this);
    }
    
    function parse_404_handler() {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse_archive_handler() {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse_search_handler() {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse_page_handler() {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse_category_handler() {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse_tag_handler() {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse_author_handler() {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse_date_handler() {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse__handler() {
        ChromePhp::info("handler: " . __FUNCTION__);
    }

    function parse_undefined_handler() {
        ChromePhp::info("handler: " . __FUNCTION__);
    }
}

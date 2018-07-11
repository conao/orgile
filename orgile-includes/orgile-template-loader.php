<?php

ChromePhp::info('load orgile-template-loader.php');

global $orgile_query;
$orgile_query = new ORGILE_Query();

$orgile_query->parse_request();
$orgile_query->exec_reqest_hander();

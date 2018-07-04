<?php
echo($_SERVER['REQUEST_URI']);

define('ORGILE_INC', dirname(__FILE__) . '/');

include(ORGILE_INC . 'orgile-chromephp.php');
include(ORGILE_INC . 'orgile-config.php');

ChromePhp::log($_SERVER['REQUEST_URI']);
ChromePhp::info($_SERVER['REQUEST_URI']);
ChromePhp::warn($_SERVER['REQUEST_URI']);
ChromePhp::error($_SERVER['REQUEST_URI']);

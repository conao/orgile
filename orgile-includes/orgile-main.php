<?php
// ChromePhp::log('test');
// ChromePhp::info('test');
// ChromePhp::warn('test');
// ChromePhp::error('test');
// ChromePhp::groupCollapsed('MyGroup');
// for ($i = 1; $i <= 10; $i++) {
//     ChromePhp::log('log' . $i);
// }
// ChromePhp::groupEnd();


// define include folder
define('ORGILE_INC', dirname(__FILE__) . '/');

// include chrome logger
include(ORGILE_INC . 'orgile-chromephp.php');

// include orgile class
include(ORGILE_INC . 'class-orgile-query.php');

// include orgile sources
include(ORGILE_INC . 'orgile-config.php');
include(ORGILE_INC . 'orgile-query.php');
include(ORGILE_INC . 'orgile-template.php');

// load template
include(ORGILE_INC . 'orgile-template-loader.php');

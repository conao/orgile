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

define('ORGILE_INC', dirname(__FILE__) . '/');

include(ORGILE_INC . 'orgile-chromephp.php');
include(ORGILE_INC . 'orgile-config.php');
include(ORGILE_INC . 'orgile-query.php');
include(ORGILE_INC . 'orgile-template-loader.php');

<?php

ChromePhp::info('load orgile-template-loader.php');

global $orgile_query;
$orgile_query = new ORGILE_Query();

$orgile_query->parse_request();
$orgile_query->exec_reqest_hander();

if     ($orgile_query->is_404):      $template = ['404',      'index'];
elseif ($orgile_query->is_search):   $template = ['search',   'index'];
elseif ($orgile_query->is_home):     $template = ['home',     'index'];
elseif ($orgile_query->is_single):   $template = ['single',   'singular', 'index'];
elseif ($orgile_query->is_page):     $template = ['page',     'singular', 'index'];
elseif ($orgile_query->is_singular): $template = ['singular', 'index'];
elseif ($orgile_query->is_category): $template = ['category', 'archive', 'index'];
elseif ($orgile_query->is_tag):      $template = ['tag',      'archive', 'index'];
elseif ($orgile_query->is_author):   $template = ['author',   'archive', 'index'];
elseif ($orgile_query->is_date):     $template = ['date',     'archive', 'index'];
elseif ($orgile_query->is_archive):  $template = ['archive',  'index'];
else:   $template = ['index'];
endif;

ChromePhp::info($template);

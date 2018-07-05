<?php

ChromePhp::info('load orgile-template-loader.php');

global $orgile_query;
$orgile_query = new ORGILE_Query();

if     ($orgile_query->is_404      && load_template('404')):
elseif ($orgile_query->is_search   && load_template('search')):
elseif ($orgile_query->is_home     && load_template('home')):
elseif ($orgile_query->is_single   && load_template('single')):
elseif ($orgile_query->is_page     && load_template('page')):
elseif ($orgile_query->is_singular && load_template('singular')):
elseif ($orgile_query->is_category && load_template('category')):
elseif ($orgile_query->is_tag      && load_template('tag')):
elseif ($orgile_query->is_author   && load_template('author')):
elseif ($orgile_query->is_date     && load_template('date')):
elseif ($orgile_query->is_archive  && load_template('archive')):
else:  load_index_template();
endif;

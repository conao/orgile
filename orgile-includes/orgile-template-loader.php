<?php

ChromePhp::info('load orgile-template-loader.php');

global $orgile_query;
$orgile_query = new ORGILE_Query();

if     ($orgile_query->is_404      && load_404_template()):
elseif ($orgile_query->is_search   && load_search_template()):
elseif ($orgile_query->is_home     && load_home_template()):
elseif ($orgile_query->is_single   && load_single_template()):
elseif ($orgile_query->is_page     && load_page_template()):
elseif ($orgile_query->is_singular && load_singular_template()):
elseif ($orgile_query->is_category && load_category_template()):
elseif ($orgile_query->is_tag      && load_tag_template()):
elseif ($orgile_query->is_author   && load_author_template()):
elseif ($orgile_query->is_date     && load_date_template()):
elseif ($orgile_query->is_archive  && load_archive_template()):
else:  load_index_template();
endif;

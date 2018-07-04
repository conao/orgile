<?php

ChromePhp::info('load orgile-template-loader.php');

if     (is_404()      && $template = get_404_template()):
elseif (is_search()   && $template = get_search_template()):
elseif (is_home()     && $template = get_home_template()):
elseif (is_single()   && $template = get_single_template()):
elseif (is_page()     && $template = get_page_template()):
elseif (is_singular() && $template = get_singular_template()):
elseif (is_category() && $template = get_category_template()):
elseif (is_tag()      && $template = get_tag_template()):
elseif (is_author()   && $template = get_author_template()):
elseif (is_date()     && $template = get_date_template()):
elseif (is_archive()  && $template = get_archive_template()):
else:  $template = get_index_template();
endif;

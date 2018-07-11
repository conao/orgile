<?php

ChromePhp::info('load orgile-general-template.php');

function get_header($name = '') {
    // Load header template.
    
    $templates = array();
    if ($name) {
        $templates[] = "header-{$name}.php";
    }

    $templates[] = 'header.php';

    locate_template($templates);
}

function get_footer($name = '') {
    // Load footer template.

    $templates = array();
    if ($name) {
        $templates[] = "footer-{$name}.php";
    }

    $templates[] = 'footer.php';

    locate_template($templates);
}

function get_sidebar($name = '') {
    // Load sidebar template.

    $templates = array();
    if ($name) {
        $templates[] = "sidebar-{$name}.php";
    }

    $templates[] = 'sidebar.php';

    locate_template($templates);
}

function get_template_part($slug, $name = '') {
    // Loads a template part into a template.

    $templates = array();
    if ($name){
        $templates[] = "{$slug}-{$name}.php";
    }
    
    $templates[] = "{$slug}.php";

    locate_template($templates, true, false);
}

function locate_template($template_names, $load = false, $require_once = true) {
    // Retrieve the name of the highest priority template file that exists.
    
    $located = '';
    foreach ((array)$template_names as $template_name) {
        if (file_exists(THEMEDIR . $template_name)) {
            $located = $template_name;
            break;
        }
    }

    if ($load && $located !== '') {
        load_template($located, $require_once);
    }

    return $located;
}

function load_template($template_name, $require_once = true) {
    // Require the template file.

    if ($require_once) {
        require_once($template_name);
    } else {
        require($template_name);
    }
}

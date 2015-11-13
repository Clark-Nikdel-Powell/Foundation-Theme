<?php
/*
** No PHP here
** Only all require_once() calls
** to files in /functions
*/

// Theme Essentials (functions that must come first)
require_once get_template_directory() . '/functions/wrapper.php';

// CNP Modules, installed via Bower
// require_once get_template_directory() . '/bower_components/cnp-print-on-present/print-on-present.php';
// require_once get_template_directory() . '/bower_components/cnp-nav-menu-filters/nav-filters.php';
require_once get_template_directory() . '/bower_components/cnp-acf-modules/acf-modules.php';
// require_once get_template_directory() . '/bower_components/cnp-subnav/subnav.php';

// Theme Basics
require_once get_template_directory() . '/functions/setup.php';
require_once get_template_directory() . '/functions/enqueues.php';
require_once get_template_directory() . '/functions/filters.php';

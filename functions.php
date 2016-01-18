<?php
/*
** No PHP here
** Only all require_once() calls
** to files in /functions
*/

// Theme Essentials (functions that must come first)
require_once get_template_directory() . '/functions/wrapper.php';

// CNP Modules installed via Composer and autoloaded.
require_once get_template_directory() . '/lib/cnp/wp-acf-flex-content/acf-modules.php';
require_once get_template_directory() . '/lib/cnp/wp-highest-ancestor/highest-ancestor.php';
require_once get_template_directory() . '/lib/cnp/wp-nav-filters/nav-filters.php';
require_once get_template_directory() . '/lib/cnp/wp-print-on-present/print-on-present.php';
require_once get_template_directory() . '/lib/cnp/wp-subnav/subnav.php';
require_once get_template_directory() . '/lib/cnp/wp-queried-object-parser/queried-object-parser.php';
require_once get_template_directory() . '/lib/cnp/cnp-haversine/haversine.php';
require_once get_template_directory() . '/lib/cnp/wp-atom-builder/cnp-atom-builder.php';
require_once get_template_directory() . '/lib/cnp/wp-molecule-builder/cnp-molecule-builder.php';

// Theme Basics
require_once get_template_directory() . '/functions/setup.php';
require_once get_template_directory() . '/functions/enqueues.php';
require_once get_template_directory() . '/functions/filters.php';


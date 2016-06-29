<?php
/*
** No PHP here
** Only all require_once() calls
** to files in /functions
*/

// Theme Essentials (functions that must come first)
require_once get_template_directory() . '/functions/wrapper.php';

// CNP Modules installed via Composer and autoloaded.
require_once get_template_directory() . '/lib/cnp/php-utilities/utility-functions.php';
require_once get_template_directory() . '/lib/cnp/wp-highest-ancestor/highest-ancestor.php';
require_once get_template_directory() . '/lib/cnp/wp-nav-filters/nav-filters.php';
require_once get_template_directory() . '/lib/cnp/wp-queried-object-parser/queried-object-parser.php';
require_once get_template_directory() . '/lib/cnp/wp-atom-builder/cnp-atom-builder.php';
require_once get_template_directory() . '/lib/cnp/pattern-library/includes.php';

// Theme Utilities
require_once get_template_directory() . '/functions/theme-utilities.php';

// Admin / Setup
require_once get_template_directory() . '/functions/theme-setup.php';
require_once get_template_directory() . '/functions/filter-acf-flexible-content-layouts-title.php';

// Enqueues
require_once get_template_directory() . '/functions/enqueues.php';

// Layout assembly functions
require_once get_template_directory() . '/functions/function-get-content-template-array.php';
require_once get_template_directory() . '/functions/theme-hooks.php';

// Front-end functions/filters
require_once get_template_directory() . '/functions/filter-wp-title.php';
require_once get_template_directory() . '/functions/filter-screen-reader-class.php';
require_once get_template_directory() . '/functions/filter-add-acf-organisms-to-content.php';
require_once get_template_directory() . '/functions/filter-add-icons-to-social-nav.php';

// Patterns

// Layout-Specific Actions/Filters
require_once get_template_directory() . '/layouts/front-page.php';
require_once get_template_directory() . '/layouts/interior.php';

// Widgets
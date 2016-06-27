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
require_once get_template_directory() . '/functions/theme_utilities.php';

// Admin / Setup
require_once get_template_directory() . '/functions/setup.php';
require_once get_template_directory() . '/functions/filter_acf_flexible_content_layouts_title.php';

// Enqueues
require_once get_template_directory() . '/functions/enqueues.php';

// Layout assembly functions
require_once get_template_directory() . '/functions/function_get_content_template_array.php';
require_once get_template_directory() . '/functions/theme_hooks.php';

// Front-end functions/filters
require_once get_template_directory() . '/functions/function_content_class.php';

require_once get_template_directory() . '/functions/filter_wp_title.php';
require_once get_template_directory() . '/functions/filter_screen_reader_class.php';
require_once get_template_directory() . '/functions/filter_add_acf_organisms_to_content.php';
require_once get_template_directory() . '/functions/filter-add-icons-to-social-nav.php';

// Patterns

// Layout-Specific Actions/Filters
require_once get_template_directory() . '/layouts/front-page.php';
require_once get_template_directory() . '/layouts/interior.php';

// Widgets
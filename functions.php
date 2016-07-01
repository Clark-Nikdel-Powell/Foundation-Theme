<?php
// Autoloaded Composer Modules
require_once get_template_directory() . '/lib/autoload.php';

// Theme Utilities
require_once get_template_directory() . '/functions/theme-utilities.php';

// Admin / Setup
require_once get_template_directory() . '/functions/theme-setup.php';

// Enqueues
require_once get_template_directory() . '/functions/enqueues.php';

// Layout assembly functions

// Front-end functions/filters
require_once get_template_directory() . '/functions/action-add-svg-icon-sprite.php';
require_once get_template_directory() . '/functions/filter-add-icons-to-social-nav.php';

// Patterns

// Layout-Specific Actions/Filters
require_once get_template_directory() . '/layouts/default.php';
require_once get_template_directory() . '/layouts/front-page.php';
require_once get_template_directory() . '/layouts/interior.php';
require_once get_template_directory() . '/layouts/search.php';

// Widgets

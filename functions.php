<?php
/*
 * Autoloaded Composer Modules
 */
require_once get_template_directory() . '/lib/autoload.php';

/*
 * Theme Utilities
 */
require_once get_template_directory() . '/functions/theme-utilities.php';

/*
 * Admin / Setup
 */
require_once get_template_directory() . '/functions/theme-setup.php';

/*
 * Enqueues
 */
require_once get_template_directory() . '/functions/enqueues.php';

/*
 * Layout assembly functions
 */

// Front-end functions/filters.
require_once get_template_directory() . '/functions/action-add-svg-icon-sprite.php';
require_once get_template_directory() . '/functions/filter-add-icons-to-social-nav.php';

// Layout-Specific Actions/Filters.
require_once get_template_directory() . '/ui/default/default-layout.php';
require_once get_template_directory() . '/ui/front-page/front-page-layout.php';
require_once get_template_directory() . '/ui/interior/interior.php';
require_once get_template_directory() . '/ui/search/search-layout.php';

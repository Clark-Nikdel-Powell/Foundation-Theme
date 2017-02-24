<?php
/*
 * Autoloaded Composer Modules
 */
require_once 'lib/autoload.php';

/*
 * Theme Utilities
 */
require_once 'functions/theme-utilities.php';

/*
 * Admin / Setup
 */
require_once 'functions/theme-setup.php';

/*
 * Enqueues
 */
require_once 'functions/enqueues.php';

/*
 * Layout assembly functions
 */

// Front-end functions/filters.
require_once 'ui/icons/icons-output-svg-sprites-before-webpage.php';
require_once 'ui/nav-social/filter-add-icons-to-social-nav.php';

// Layout-Specific Actions/Filters.
require_once 'ui/default/default-layout.php';
require_once 'ui/front-page/front-page-layout.php';
require_once 'ui/interior/interior.php';
require_once 'ui/search/search-layout.php';

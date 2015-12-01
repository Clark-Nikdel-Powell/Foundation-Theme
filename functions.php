<?php
/*
** No PHP here
** Only all require_once() calls
** to files in /functions
*/

// Theme Essentials (functions that must come first)
require_once get_template_directory() . '/functions/wrapper.php';

// CNP Modules installed via Composer and autoloaded.
require_once get_template_directory() . '/lib/autoload.php';

// Theme Basics
require_once get_template_directory() . '/functions/setup.php';
require_once get_template_directory() . '/functions/enqueues.php';
require_once get_template_directory() . '/functions/filters.php';

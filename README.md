## New Foundation Project <small>Let’s get started</small>

### Quick-Start

1.  Copy the repo files into your theme directory.
2.  In Terminal, `cd` into the theme directory.
3.  Run `npm install`.
4.  Run `composer install`.
5.  See the Gulp section to link your gems into the project.

If you're using VVV, update the `proxy` on `line 82` in gulpfile.js to use your local development url.

This should take care of everything you need to get started.

### Settings

1.  PHP Settings are located in 'functions/setup.php'.
2.  CSS Settings are located in 'assets/css/pre/_site-settings.scss'.
3.  CSS Imports are handled in 'assets/css/pre/styles.scss'.

## What's Included

### via package.json

*   Foundation v6
*   Slick Carousel

### via Composer

*   Module-WP-ACF-Flex-Content-Modules
*   Module-WP-Print-on-Present
*   Module-WP-Highest-Ancestor
*   Module-WP-Subnav
*   Module-WP-Nav-Filters

### Gulp

The included gulp file and package.json assumes you have the following gems installed globally.

*   gulp
*   browser-sync
*   streamqueue
*   gulp-concat
*   gulp-uglify
*   gulp-sass
*   gulp-autoprefixer

Link your globally installed gems into the theme directory as follows:

`npm link <package-name>`

```
npm link gulp
npm link browser-sync
npm link streamqueue
npm link gulp-concat
npm link gulp-uglify
npm link gulp-sass
npm link gulp-autoprefixer
```

#### Gulp Tasks

*   `gulp watch`: CSS and JS compilation and browser sync.
*   `gulp build-styles`: compile CSS.
*   `gulp build-scripts`: compile JS.

## How This Theme Works

### Base.php

This theme uses a file called `base.php` that serves as a wrapper for all theme layout files: e.g., `index.php`, `front-page.php`, `archive-$post_type.php`, etc. This means you'll never need to call `get_header()` or `get_footer()`, and that div elements that normally open and close in the header and footer files are safely contained inside base.php.

If you need to add a secondary header or footer, use `get_template_part()`, or else WordPress will throw a PHP warning.

### Composer Libraries

Front-end PHP modules are located in 'lib/'. This includes a number of CNP-built PHP modules, which are in turn included in 'functions.php' via Composer's autoload.

Please do not modify anything in the Composer directory directly. If you need different output, open up an issue on the module's Github repo.

### File & Folder Structure

#### Folders

1.  **Assets**: Contains css, js, img, and fonts directories.
2.  **Content**: Files that display content from the editor for various post types _(content-search, content-news, etc.)_.
3.  **Functions**:
4.  **Modules**: Page components that can be used more than once per page, as well as site-wide _(slideshow, post-list, gallery, map etc.)_. Generic modules will be installed via Composer, but local modules (modules that are too specific to warrant breaking out in to their own repo) live here.
5.  **Partials**: Page components that are used only once per page _(head, header, nav-breadcrumbs, sectionheader, etc.)_.

#### Files

Pages can be assembled from a layout file or from a combination of partial, module and content files. Any WordPress layout files, like `front-page.php`, `archive-$name.php`, `single-$name.php`, etc. belong in the root directory. Styles for these layouts belong in `assets/css/pre/layouts`.

### What is this Foundation?

Last but not least, this theme is built on the [Zurb Foundation Framework](http://foundation.zurb.com/docs). Check out their docs for assistance while you're writing the front-end code for the site.
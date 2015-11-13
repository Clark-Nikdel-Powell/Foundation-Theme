/*——————————————————————————————————————————————————————————
/  Plugins
——————————————————————————————————————————————————————————*/

var gulp = require('gulp');
var browserSync = require('browser-sync').create();

var streamqueue = require('streamqueue');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

/*——————————————————————————————————————————————————————————
/  Commands
——————————————————————————————————————————————————————————*/

/**
 * @summary Build Scripts.
 *
 * Imports the Foundation scripts from the Bower Components directory,
 * concatenates and minifies into /js/site.min.js.
 *
 * Runs on gulp 'build-scripts', 'automate', and 'browser-sync'
 *
 * @since 0.1.0
 */
gulp.task('build-scripts', function() {
    return streamqueue({ objectMode: true },
      gulp.src('./bower_components/modernizr/modernizr.js'),
      gulp.src('./bower_components/foundation/js/foundation.js'),
      gulp.src('./bower_components/foundation/js/foundation/foundation.tab.js'),
      gulp.src('./bower_components/foundation/js/foundation/foundation.clearing.js'),
      gulp.src('./bower_components/slick/slick/slick.js'),
      gulp.src('./assets/js/pre/**/*.js')
    )
    .pipe(concat('site.min.js'))
    .pipe(gulp.dest('./assets/js'))
    //.pipe(uglify())
    //.pipe(gulp.dest('./assets/js'))
    .pipe(browserSync.stream());
});

/**
 * @summary Build Styles.
 *
 * Compiles the main SCSS file at /css/pre/styles.css. This
 * file imports the Foundation styles and settings, so all
 * configuration and imports are run through this one file.
 *
 * Runs on gulp 'build-styles', 'automate', and 'browser-sync'
 *
 * @since 0.1.0
 */
gulp.task('build-styles', function() {
  gulp.src('./assets/css/pre/styles.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('./assets/css'))
    .pipe(browserSync.stream());
});

/**
 * @summary Browser Sync.
 *
 * Watches for changes in the theme CSS & JS directories,
 * and compiles styles and scripts based on what changed.
 *
 * Runs on gulp 'automate' and 'browser-sync'
 *
 * @since 0.1.0
 *
 * @param proxy The local site domain.
 */
gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "foundation.dev"
    });
});

/**
 * @summary Automate.
 *
 * Watches for changes in the theme CSS & JS directories,
 * and compiles styles and scripts based on what changed.
 *
 * Runs on gulp 'automate' and 'browser-sync'
 *
 * @since 0.1.0
 */
gulp.task('automate', function() {
    gulp.watch(['assets/css/**/*.scss'], ['build-styles']);
    gulp.watch(['assets/js/**/*.js'], ['build-scripts']);
    gulp.watch('*.php').on('change', browserSync.reload);
});

gulp.task('default', ['build-scripts', 'build-styles']);
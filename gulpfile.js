/*——————————————————————————————————————————————————————————
 /  Plugins
 ——————————————————————————————————————————————————————————*/

var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var inline_svg = require('postcss-inline-svg');
var cssnano = require('cssnano');

var gulp = require('gulp');

var browserSync = require('browser-sync').create();
var streamqueue = require('streamqueue');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var combineMq = require('gulp-combine-mq');

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
gulp.task('build-scripts', function () {
    return streamqueue({objectMode: true},
        gulp.src('./node_modules/foundation-sites/dist/foundation.js'),
        gulp.src('./node_modules/slick-carousel/slick/slick.js'),
        //gulp.src('./node_modules/foundation-sites/js/foundation.core.js'),
        //gulp.src('./node_modules/foundation-sites/js/foundation.util.mediaQuery.js'),
        //gulp.src('./node_modules/foundation-sites/js/foundation.tabs.js'),
        //gulp.src('./node_modules/foundation-sites/js/foundation.util.keyboard.js'),
        //gulp.src('./node_modules/foundation-sites/js/foundation.util.timerAndImageLoader.js'),
        gulp.src('./assets/js/pre/vendor/*.js'),
        gulp.src('./assets/js/pre/*.js')
    )
        .pipe(concat('site.min.js'))
        .pipe(gulp.dest('./assets/js'))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js'))
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
gulp.task('build-styles', function () {

    var processors = [
        autoprefixer({browsers: ['last 1 version']}),
        inline_svg(),
        cssnano({
            mergeLonghand: false
        })
    ];

    gulp.src(['./assets/css/pre/styles.scss', './assets/css/pre/print.scss', './assets/css/pre/editor-style.scss', './assets/css/pre/styles.critical.scss'])
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(combineMq({
            beautify: false
        }))
        .pipe(postcss(processors))
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
gulp.task('watch', function () {

    browserSync.init({
        proxy: "http://localsite.dev"
    });

    gulp.watch(['assets/css/**/*.scss'], ['build-styles']);
    gulp.watch(['assets/js/**/*.js'], ['build-scripts']);
    gulp.watch("**/*.php").on('change', browserSync.reload);
});

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
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var combineMq = require('gulp-combine-mq');

/*——————————————————————————————————————————————————————————
 /  Commands
 ——————————————————————————————————————————————————————————*/

/**
 * @summary Build Scripts.
 *
 * Imports the Foundation scripts from the node_modules directory,
 * concatenates and minifies into /js/site.min.js.
 *
 * Runs on gulp 'build-scripts' and 'watch'
 *
 * @since 0.1.0
 */
gulp.task('build-scripts', function () {
    return streamqueue({objectMode: true},
        gulp.src('./node_modules/foundation-sites/dist/js/foundation.js'),
        gulp.src('./ui/_required/js/foundation.js'),
        gulp.src('./ui/_required/js/class-switcher.js')
    )
        .pipe(concat('site.min.js'))
        .pipe(gulp.dest('./assets/js'))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js'))
        .pipe(browserSync.stream());
});

/**
 * @summary Build Typekit.
 *
 * Builds the Typekit JS for serving Typekit fonts from localstorage.
 *
 * Runs on gulp 'build-typekit'
 *
 * @since 2.0.0
 */
gulp.task('build-typekit', function () {
    return streamqueue({objectMode: true},
        gulp.src('./node_modules/cnp-load-typekit-fonts/load-typekit-fonts.js'),
        gulp.src('./ui/_required/js/typekit.js')
    )
        .pipe(concat('typekit.min.js'))
        .pipe(gulp.dest('./assets/js'))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js'))
        .pipe(browserSync.stream());
});

/**
 * @summary Build Styles.
 *
 * Compiles the main SCSS file(s) at /ui/styles.css. This
 * file imports the Foundation styles and settings, so all
 * configuration and imports are run through this one file.
 *
 * Runs on gulp 'build-styles' and 'watch'
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

    gulp.src(['./ui/styles.scss', './ui/print.scss', './ui/editor-style.scss', './ui/admin.scss'])
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(sourcemaps.write())
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
 * Runs on gulp 'watch'
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

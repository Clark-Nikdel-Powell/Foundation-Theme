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
var combineMq = require('gulp-combine-mq');

/*var request = require('request');
 var path = require( 'path' );
 var criticalcss = require("criticalcss");
 var fs = require('fs');
 var tmpDir = require('os').tmpdir();

 gulp.task( 'inline-critical-css', function() {

 var cssUrl = 'http://sfsc.dev/wp-content/themes/sfsc_arts/assets/css/styles.css';
 var cssPath = path.join( tmpDir, 'styles.css' );
 request(cssUrl).pipe(fs.createWriteStream(cssPath)).on('close', function() {
 criticalcss.getRules(cssPath, function(err, output) {
 if (err) {
 throw new Error(err);
 } else {
 criticalcss.findCritical(
 "http://localhost:3000/",
 {
 rules: JSON.parse(output),
 ignoreConsole: true
 },
 function(err, output) {
 if (err) {
 throw new Error(err);
 } else {
 fs.writeFileSync( './assets/css/critical.css', output );
 //console.log(output);
 console.log('Critical Complete');
 }
 }
 );
 }
 });
 });
 });*/

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
        // gulp.src('./node_modules/fg-loadcss/src/loadCSS.js'),
        gulp.src('./node_modules/foundation-sites/dist/foundation.js'),
        gulp.src('./node_modules/slick-carousel/slick/slick.js'),
        gulp.src('./node_modules/waypoints/lib/jquery.waypoints.js'),
        gulp.src('./node_modules/vide/dist/jquery.vide.js'),
        gulp.src('./node_modules/mixitup/src/jquery.mixitup.js'),
        gulp.src('./node_modules/fuse.js/src/fuse.js'),
        //gulp.src('./node_modules/foundation-sites/js/foundation.core.js'),
        //gulp.src('./node_modules/foundation-sites/js/foundation.util.mediaQuery.js'),
        //gulp.src('./node_modules/foundation-sites/js/foundation.tabs.js'),
        //gulp.src('./node_modules/foundation-sites/js/foundation.util.keyboard.js'),
        //gulp.src('./node_modules/foundation-sites/js/foundation.util.timerAndImageLoader.js'),
        gulp.src('./assets/js/pre/**/*.js')
    )
        .pipe(concat('site.min.js'))
        .pipe(gulp.dest('./assets/js'))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js'))
        .pipe(browserSync.stream());
});

// 18QqWxA14sQc

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

    gulp.src(['./assets/css/pre/styles.scss', './assets/css/pre/print.scss', './assets/css/pre/editor-style.scss'])
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(combineMq({
            beautify: false
        }))
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
gulp.task('watch', function() {

    browserSync.init({
        proxy: "http://localsite.dev"
    });

    gulp.watch(['assets/css/**/*.scss'], ['build-styles']);
    gulp.watch(['assets/js/**/*.js'], ['build-scripts']);
    gulp.watch("**/*.php").on('change', browserSync.reload);
});

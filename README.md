<h2>New Foundation Project <small>Let&rsquo;s get started</small></h2>

<p>You can find the <a href="http://docs.cnp.io/docs/foundation-theme">docs for this theme</a> on the <a href="http://docs.cnp.io">CNP Dev Team Docs site</a>. But since you're already here, here are a few tips:</p>

<h3 class="subheader">Quick-Start</h3>
<ol>
	<li>Copy the repo files into your theme directory.</li>
	<li>In Terminal, <code>cd</code> into the theme directory.</li>
	<li>Run <code>npm install</code>.</li>
	<li>Run <code>composer install</code>.</li>
	<li>See the Gulp section to link your gems into the project.</li>
</ol>

<p>If you're using VVV (you are right?), update the <code>proxy</code> on <code>line 82</code> in gulpfile.js to use your local development url.</p>

<p>This should take care of everything you need to get started.</p>

<h3 class="subheader">Settings</h3>

<ol>
	<li>PHP Settings are located in 'functions/setup.php'.</li>
	<li>CSS Settings are located in 'assets/css/pre/_site-settings.scss'.</li>
	<li>CSS Imports are handled in 'assets/css/pre/styles.scss'.</li>
</ol>

<h2>What's Included</h2>

<h3>via package.json</h3>
<ul>
	<li>Foundation v6</li>
	<li>Slick Carousel</li>
</ul>

<h3>via Composer</h3>
<ul>
	<li>Module-WP-ACF-Flex-Content-Modules</li>
	<li>Module-WP-Print-on-Present</li>
	<li>Module-WP-Highest-Ancestor</li>
	<li>Module-WP-Subnav</li>
	<li>Module-WP-Nav-Filters</li>
</ul>

<h3>Gulp</h3>

<p>The included gulp file and package.json assumes you have the following gems installed globally.</p>
<ul>
	<li>gulp</li>
	<li>browser-sync</li>
	<li>streamqueue</li>
	<li>gulp-concat</li>
	<li>gulp-uglify</li>
	<li>gulp-sass</li>
	<li>gulp-autoprefixer</li>
</ul>

<p>Link your globally installed gems into the theme directory as follows:</p>

<p><code>npm link &lt;package-name&gt;</code></p>

<h4>Gulp Tasks</h4>
<ul>
	<li><code>gulp watch</code>: CSS and JS compilation and browser sync.</li>
	<li><code>gulp build-styles</code>: compile CSS.</li>
	<li><code>gulp build-scripts</code>: compile JS.</li>
</ul>

<h2>How This Theme Works</h2>

<h3 class="subheader">Base.php</h3>

<p>This theme uses a file called <code>base.php</code> that serves as a wrapper for all theme layout files: e.g., <code>index.php</code>, <code>front-page.php</code>, <code>archive-$post_type.php</code>, etc. This means you'll never need to call <code>get_header()</code> or <code>get_footer()</code>, and that div elements that normally open and close in the header and footer files are safely contained inside base.php.</p>

<p>If you need to add a secondary header or footer, use <code>get_template_part()</code>, or else WordPress will throw a PHP warning.</p>

<h3 class="subheader">Composer Libraries</h3>

<p>Front-end modules are located in 'lib/'. This includes a number of CNP-built PHP modules, which are in turn included in 'functions.php' via Composer's upload.</p>

<p>Please do not modify anything in the Composer directory directly. If you need different output, open up an issue on the module's Github repo.</p>

<h3 class="subheader">What is this Foundation?</h3>

<p>Last but not least, this theme is built on the <a href="http://foundation.zurb.com/docs" target="_blank">Zurb Foundation Framework</a>. Check out their docs for assistance while you're writing the front-end code for the site.</p>


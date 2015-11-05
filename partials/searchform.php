<form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>"><div>
	<label class="screen-reader-text" for="s">Search for:</label>
	<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="1" placeholder="Search" />
	<input type="submit" id="searchsubmit" value="Search" />
</div></form>
<form role="search" method="get" class="searchform" action="<?php echo apply_filters( 'cnp_searchform_url', home_url( '/' ) ); ?>">
	<div class="searchform__inside">
		<label class="show-for-sr" for="s">Search for:</label>
		<input class="searchform__input" type="text" value="<?php the_search_query(); ?>" name="s" id="s" size="1" placeholder="<?php echo apply_filters( 'cnp_searchform_placeholder', 'Search' ); ?>"/>
		<button class="searchform__submit" type="submit" id="searchsubmit"><span class="show-for-sr">Search</span><?php echo \CNP\Utility::get_svg_icon( 'icon-ion-android-search' ); ?></button>
	</div>
</form>

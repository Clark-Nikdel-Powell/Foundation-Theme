<?php
global $post;
echo apply_filters('the_content', $post->post_content);
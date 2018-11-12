<?php
	get_header( );

	while(have_posts()) {
		the_post();
	?>
		<header style="background-image:url(<?php echo get_theme_file_uri('/images/paperBoats.jpeg'); ?>); background-size:cover; background-position: center; height: 300px;">
		</header>
		<h2 class="pt-5"><?php the_title(); ?></h2>
		<div class="p-5">
			<p><?php the_content(); ?></p>
		</div>
	<?php }

	get_footer();

?>


<!-- 
wp_head()
wp_footer()

get_header()
get_footer()

site_url()
site_url('/about-us')

get_permalink()
get_theme_file_uri('/images/myImg.jpg')

the_title()
get_the_title()

get_pages()
get_the_ID()

add_action()


wp_get_post_parent_id()
wp_list_pages()

associate arrays

 -->
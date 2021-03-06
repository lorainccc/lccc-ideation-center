<?php 

/* 
This template is for search results. 
*/

get_header(); 

?>
			
<div id="search-content">
	
	<?php 
	
	if (have_posts()) :  
	
		get_template_part( 'template-parts/content', 'search-banner' );
		
	?>
	
	<div class="row">
	
		<main id="main" role="main" class="small-12 columns">
			
			<?php 
			
			while (have_posts()) : the_post();
            
            switch_to_blog($post->blog-id);
			
				get_template_part( 'template-parts/loop', 'search');
				
            endwhile;
				
			?>

		</main>
		
	</div>
	
	<?php  endif; ?>
	
</div>

<?php get_footer(); ?>
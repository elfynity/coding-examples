<?php /* Template Name: Flexible Content */ ?>

<?php get_header(); 
get_template_part('layouts/bits', 'functions'); 
get_template_part('layouts/classes/class', 'scroll-effect'); 
get_template_part('layouts/classes/class', 'margin'); 
get_template_part('layouts/classes/class', 'padding'); 
get_template_part('layouts/classes/class', 'flex-box'); 


?>



<div id="flexible-content">





	<?php if( have_rows('flexible') ): ?>
		<?php while ( have_rows('flexible') ) : the_row(); ?>
		
		
			<?php if( get_row_layout() == 'banner' ): ?>
				<?php get_template_part('layouts/section', 'banner'); ?>
			<?php endif; ?>
			
			<?php if( get_row_layout() == 'main_content' ): ?>
				<?php get_template_part('layouts/section', 'main-content'); ?>
			<?php endif; ?>
			

			<?php if( get_row_layout() == 'image_blocks' ): ?>
				<?php get_template_part('layouts/section', 'image-blocks'); ?>
			<?php endif; ?>
			
			<?php if( get_row_layout() == 'slider' ): ?>
				<?php get_template_part('layouts/section', 'slider'); ?>
			<?php endif; ?>

			
		<?php  endwhile;?>
	<?php endif; ?>


	
<div class="image-change">
	<a href="#">
		<img src="<?php bloginfo("template_url")?>/images/img1.jpg" />
		<img src="<?php bloginfo("template_url")?>/images/img2.jpg" />

	</a>
</div><!--images-change-->	
	
	

</div><!---devgirl-flexible-content-->




<?php get_footer(); ?>
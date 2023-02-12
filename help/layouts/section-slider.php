<?php
$blocks = get_sub_field('content');

?>


<section id="gz-slider" class="<?php the_sub_field('classes'); ?>">
	<div class="<?php the_sub_field('wrapper'); ?>">


		<div id="gz-slider-wrapper">
			
			
			
			<ul class="slides-container" id="slides-container"> 
				<button class="slide-arrow" id="slide-arrow-prev">
					&#8249;
				</button>
				
				<button class="slide-arrow" id="slide-arrow-next">
					&#8250;
				</button>
						
				<?php  
				foreach($blocks as $block): 
				?>		
						
					<li class="slide">
						<div class="slide-inner">
						
							<div class="image">
							</div><!-- image -->
							
							<div class="title">
							</div><!-- title-->
							<?php echo $block['something']; ?>
							<?php echo wp_get_attachment_image( $block['image'], get_sub_field('image_size') ); ?>
						
						
						</div><!--slide-inner-->
					</li>

							
				<?php  
				endforeach; 
				?>					
							
				
			</ul><!-- slides-container-->
		</div><!-- gz-slider-wrapper-->
		
		<div id="stuff"></div>


	</div><!--wrapper-->
</section>


<?php echo get_sub_field('timing'); ?>
<?php echo get_sub_field('name'); ?>

<script>
window.onload = function() {
	const timing = <?php echo json_encode(get_sub_field('timing')); ?>;
	const slider = new Slider(timing);
};
</script>




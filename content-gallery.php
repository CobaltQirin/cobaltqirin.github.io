<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="featured-media">	
		
		<?php hoffman_flexslider( 'post-image' ); ?>
		
	</div><!-- .featured-media -->
	
	<?php 
	if ( is_sticky() ) { 
		echo '<a class="is-sticky" href="' . get_permalink() . '" title="' . __( 'Sticky post', 'hoffman' ) . '"><span class="genericon genericon-pinned"></span></a>'; 
	} 
	?>
	
	<div class="post-inner section-inner thin">
		
		<div class="post-header">
			
			<div class="post-meta top">
			
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a>
				
				<?php 
				if ( comments_open() ) {
					echo '<span class="sep">/</span> '; 
					comments_popup_link( __( '0 Comments', 'hoffman' ), __( '1 Comment', 'hoffman' ), __( '% Comments', 'hoffman' ) );
				}
				
				if ( is_sticky() ) echo '<span class="sep">/</span> ' . __( 'Sticky', 'hoffman' );
				
				edit_post_link( __( 'Edit', 'hoffman' ), '<span class="sep">/</span> ', '' ); ?>
				
			</div>
			
		    <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		    	    
		</div><!-- .post-header -->
		
		<div class="post-content">
		
			<?php the_content(); ?>
		
		</div>
	
	</div><!-- .post-inner -->

</div><!-- .post -->
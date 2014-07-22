<?php
/*
 * Template Name: About Us
 * Description: A Page Template with a darker design.
 */

//

?>

<?php get_header(); ?>

 <div class="theater"> <!-- start row -->
    <!-- starting the WordPress loop -->               
    <div class="row">

        <div class="medium-8 columns">
            <h2><?php the_title(); ?></h2>
            <p><?php get_the_content(); ?></p>
        </div>

        <div class="medium-4 columns">
            <h4></h4> 
            <ul class="post-meta">

		
			<?php $my_post_meta = get_post_meta($post->ID, 'director', true); ?>
    			<?php if ( ! empty ( $my_post_meta ) ) { ?> 

    			<?php echo wpautop($my_post_meta); ?>
    		<?php } ?>  
    		<?php $my_post_meta = get_post_meta($post->ID, 'producer', true); ?>
    			<?php if ( ! empty ( $my_post_meta ) ) { ?> 

    			<?php echo wpautop($my_post_meta); ?>
    		<?php } ?> 
       		<?php $my_post_meta = get_post_meta($post->ID, 'post_production', true); ?>
    			<?php if ( ! empty ( $my_post_meta ) ) { ?> 

    			<?php echo wpautop($my_post_meta); ?>
    		<?php } ?> 
    		 		 
            </ul>
        </div>

    </div>
</div>
	
<div class="stage-single"> <!-- curtain pull -->
	<div class="filter">
        <div class="row">
            <ul class="filter-nav">
                <a href="http://www.google.com"><li class="button float">Branded Content</li></a>
                <li class="button float">Documentaries</li>
                <li class="button float">Narrative</li>
            </ul>
        </div>
    </div> 

	<div class="wrap"> <!-- start wrap -->
        <div class="row"> <!-- start row -->            

            <?php query_posts(''); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->

                <div class="medium-6 columns">
                    <a href="<?php the_permalink(); ?>"> <!-- link wrap -->
                        <div class="view view-tenth">
                            <div class="hover-effect"><h2><?php the_title(); ?></h2></div>
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            } 
                            ?>
                        </div>
                    </a> <!-- link end wrap -->
                </div>

            <?php endwhile; ?>

            <?php else : ?>
                <p>Whoops! We are working on it.</p>

            <?php endif; ?> <!-- end loop -->

             <!-- starting the WordPress loop -->

  		</div> <!-- end row -->

  	</div> <!-- end wrap -->

<div class="wrap">

 
</div>


  		</div>
		</div>
</div>


</div>

<?php get_footer(); ?>
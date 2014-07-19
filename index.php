<?php get_header(); ?>

<div class="stay-put"> <!-- bio content -->
	
	<div class="row">
  		<div class="medium-6 medium-push-4 columns">
  			<h2>Lily Featherston</h2>
 			<h3><?php bloginfo('description'); ?></h3>
 			<p>I am a 2012 graduate from Rhode Island School of Design with a BFA in animation. <br />I currently reside in my home state of New Hampshire, where every day I am overwhelmed with beautiful scenery and funny people.</p>
  		</div>
 		<div class="medium-4 small-7 small-pull-5 medium-pull-7 columns">
 			<div class="circular-image">
                <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            } 
                            ?>
 			</div>
 		</div>
	</div>
</div>

<div class="stage"> <!-- curtain pull -->
	<div class="wrap"> <!-- start wrap -->
        <div class="row"> <!-- start row -->

            <?php query_posts('cat=2'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->

                

                <div class="medium-4 columns">
                    <a href="<?php the_permalink(); ?>"> <!-- link wrap -->
                        <div class="view view-tenth">
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            } 
                            ?>
                            <div class="mask">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p> 
                                <div class="liner"></div>
                                <a href="<?php the_permalink() ?>" class="info">Watch Animation</a>
                            </div>
                        </div>
                    </a> <!-- link end wrap -->
                </div>

            <?php endwhile; ?>

            <?php else : ?>
                <p>Whoops! We are working on it.</p>

            <?php endif; ?> <!-- end loop -->

  		</div> <!-- end row -->

  	</div> <!-- end wrap -->

<div class="wrap">
<div class="the-sketch-book">
    <div class="sketching">My Illustrations</div>
            <div class="row"> <!-- start row -->

            <?php query_posts('cat=3&tag=animal'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->

            <div class="medium-6 columns">
                    <a href="index.php?page_id=85"> <!-- link wrap -->
                        <div class="view view-tenth">
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            } 
                            ?>
                            <div class="mask">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p> 
                                <div class="liner"></div>
                                <a href="index.php?page_id=85" class="info">View More</a>
                            </div>
                        </div>
                    </a> <!-- link end wrap -->
                </div>

            <?php endwhile; ?>

            <?php else : ?>
                <p>Whoops! We are working on it.</p>

            <?php endif; ?> <!-- end loop -->

            <?php query_posts('cat=3&tag=human'); if(have_posts()) : while(have_posts()) : the_post(); ?> <!-- starting the WordPress loop -->

            <div class="medium-6 columns">
                    <a href="index.php?page_id=88"> <!-- link wrap -->
                        <div class="view view-tenth">
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail();
                            } 
                            ?>
                            <div class="mask">
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p> 
                                <div class="liner"></div>
                                <a href="index.php?page_id=88" class="info">View more</a>
                            </div>
                        </div>
                    </a> <!-- link end wrap -->
                </div>

            <?php endwhile; ?>

            <?php else : ?>
                <p>Whoops! We are working on it.</p>

            <?php endif; ?> <!-- end loop -->

        </div> <!-- end row -->
</div> 
</div>


  		</div>
		</div>
</div>


</div>

<?php get_footer(); ?>
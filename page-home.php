<?php
/*
 * Template Name: Homepage
 * Description: A Page Template with a darker design.
 */

//

?>

<?php get_header(); ?>


<div class="stay-put"> <!-- bio content -->
                    <video width="530" height="400" muted="" loop="none" autoplay="none" id="video">
                        <source type="video/ogg" src="http://workbysam.com/video/deys.ogg" preload="none"></source>
                    </video>
 <!-- starting the WordPress loop -->
	
	<div class="row">
  		<div class="medium-12 columns">
  			<h1><a href="page-about.html">Arbiter Productions</a> is a multimedia production company specializing in <a href="page-projects.html">video content</a> for visual artists</h1>
            <ul class="call-two-action">
                <li><a href="page-about.html">About Us</a></li>
                <li><a href="page-projects.html">Projects</a></li>
            </ul>


  		</div>
	</div>
</div>


 <!-- end loop -->

<div class="stage"> <!-- curtain pull -->
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

            <!-- starting the WordPress loop -->               

                <div class="medium-12 columns">
                    <a href="page-video.html"> <!-- link wrap -->
                        <div class="view view-tenth">
                            <?php
                                // Get the video URL and put it in the $video variable
                                $videoID = get_post_meta($post->ID, 'video_url', true);
                                // Check if there is in fact a video URL
                                if ($videoID) {
                                    echo '<div class="videoContainer">';
                                    // Echo the embed code via oEmbed
                                    echo wp_oembed_get( 'http://vimeo.com/' . $videoID ); 
                                    echo '</div>';
                                }
                                ?>                        
                        </div>
                    </a> <!-- link end wrap -->
                </div>


      
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
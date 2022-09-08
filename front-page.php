<?php get_header();?>

<main class="content">

<?php
if ( have_posts() ) :
   while ( have_posts() ) : the_post();
      the_content();
   endwhile;
else :
   _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
?>
</main>

<?php get_footer();?>

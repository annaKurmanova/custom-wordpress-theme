<?php
// load wp classnames (advanced options -> add custom class name)

$className = 'faq';

if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

?>


<?php if(have_rows('question')) : ?>
  <div class="<?php echo esc_attr($className)?>">
<h3>Frequently asked questions</h3>
<?php while (have_rows('question')) : the_row(); ?>
<div class="faq__block">

<div class="faq__question">
  <p><?php the_sub_field('question_body'); ?></p>
  <div class="faq__category">
     &num;<?php the_sub_field('category'); ?>
  </div>
</div>
<div class="faq__answer">
  <?php the_sub_field('answer'); ?>
</div>
</div>



<?php endwhile; ?>
</div>
<?php endif;?>


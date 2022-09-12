<?php
// load wp classnames (advanced options -> add custom class name)

$className = 'faq';

if( !empty($block['className']) ) {
  $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
  $className .= ' align' . $block['align'];
}

$category = get_field('category');
$question = get_field('question');
$answer   = get_field('answer');
$avatar   = get_field('avatar');


?>

<div class="<?php echo esc_attr($className)?>">
<?php if(have_rows('faq')) : ?>
<h1>Frequently asked questions</h1>
<?php while (have_rows('faq')) : the_row(); ?>
<div class="faq">
  <div class="faq__category">
  <?php echo $category; ?>
  </div>
<div class="question">
<?php echo $question; ?>
<?php echo $answer; ?>
</div>
</div>


<?php endwhile; ?>

<?php endif;?>
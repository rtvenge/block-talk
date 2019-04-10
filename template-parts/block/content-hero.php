<?php
  $image = get_field('image');
  $cta = get_field('call_to_action');
?>

<section class="hero align<?php echo $block['align']; ?>" style="background-image: url(<?php echo $image['sizes']['hero']; ?>);">
  <div class="hero__text">
    <h2 class="hero__title">
      <?php the_field('title'); ?>
    </h2>

    <div class="hero__body">
      <?php the_field('body'); ?>
    </div>

    <a href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>" class="hero__cta">
      <?php echo $cta['title']; ?>
    </a>
  </div>
</section>
<?php
  $image = get_field('image');
  $call_to_action = get_field('call_to_action');
?>

<section class="hero alignfull" style="background-image: url(<?php echo $image['sizes']['hero']; ?>);">
  <div class="hero__overlay"></div>

  <div class="hero__text">
    <?php if(get_field('body')) { ?>
      <h2 class="hero__title">
        <?php the_field('title'); ?>
      </h2>
    <?php } ?>

    <?php if(get_field('body')) { ?>
      <div class="hero__body">
        <?php the_field('body'); ?>
      </div>
    <?php } ?>

    <?php if($call_to_action) { ?>
      <a target="<?php echo $call_to_action['target']; ?>" href="<?php echo $call_to_action['title']; ?>" class="hero__cta">
        <?php echo $call_to_action['title']; ?>
      </a>
    <?php } ?>
  </div>
</section>
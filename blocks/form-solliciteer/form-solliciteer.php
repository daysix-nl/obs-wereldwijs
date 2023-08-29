<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class="<?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> <?php the_field("background_color") ?> relative z-10 gravity-form-style">
          <div class="container max-w-[645px]">
            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
          </div>
    </section>



<?php endif; ?>
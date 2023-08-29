<?php
    if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

        echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

    else: /* rendering in editor body */
    ?>

    <section class="<?php the_field("background_color") ?> relative  <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?>">
          <div class="container">
            <h4 class="text-red <?php echo get_field("tekst_size") ? "text-33 leading-38 md:text-80 md:leading-90" : " text-40 leading-48 md:text-91 md:leading-109"; ?>  w-full  text-center max-w-[310px] md:max-w-[1200px] m-auto"><?php the_field("titel") ?></h4>
          </div>
    </section>



<?php endif; ?>
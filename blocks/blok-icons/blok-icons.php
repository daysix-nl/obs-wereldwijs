<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class="<?php the_field("background_color") ?> relative z-10">
      <div class="container grid grid-cols-3 gap-4 max-w-[1041px] <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> ">
        <?php if( have_rows('icons') ): ?>
            <?php while( have_rows('icons') ): the_row();  ?>
                  <div class="col-span-1 flex first-of-type:items-start items-center last-of-type:items-end flex-col">
                      <div class=" flex flex-col">
                        <img class=" max-h-[85px] md: md:max-h-[160px] w-full h-full" src="<?php echo get_template_directory_uri(); ?>/img/icons-acf/<?php the_sub_field('icon'); ?>.svg" alt="">
                        <p class="text-center text-blue text-11 leading-14 md:text-25 md:leading-36  lg:text-29 lg:leading-36 mt-2  md:mt-3  md:w-full md:max-w-[220px] mx-auto"><?php the_sub_field('tekst'); ?></p>
                      </div>
                  </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </section>

<?php endif; ?>
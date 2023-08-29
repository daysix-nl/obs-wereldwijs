<?php
    if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

        echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

    else: /* rendering in editor body */

    ?>

    <section class="<?php the_field("background_color") ?> relative z-10 <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?>">
        <?php if( have_rows('team_lid') ): ?>
            <div class="container grid grid-cols-2 md:grid-cols-3 gap-2 lg:gap-6 max-w-[284px] md:max-w-[1118px]">
            <?php while( have_rows('team_lid') ): the_row();  ?>
                <div class="col-span-1 relative overflow-hidden rounded-[10px] md:rounded-[15px]">
                    <?php 
                    $image = get_sub_field('afbeelding');
                    if( !empty( $image ) ): ?>
                        <img class="w-full object-cover h-[161px] md:h-[326px] xl:h-[426px]" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="background-image-blue w-full h-[65px] md:h-[173px] absolute bottom-0 right-0 left-0"></div>
                    <div class="absolute bottom-2 -translate-x-1/2 left-1/2">
                        <p class="max-w-[120px] text-center text-white  text-11 leading-14  md:text-20 md:leading-26"><?php the_sub_field("naam"); ?></p>
                        <p class="max-w-[120px] text-center text-white  text-11 leading-14  md:text-20 md:leading-26"><?php the_sub_field("functie"); ?></p>
                        <p class="max-w-[120px] text-center text-white  text-11 leading-14  md:text-20 md:leading-26"><?php the_sub_field("groep"); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </section>

<?php endif; ?>
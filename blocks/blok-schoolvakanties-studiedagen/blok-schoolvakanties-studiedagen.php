<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class=" z-10 relative <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> <?php the_field("background_color") ?>">
        <div class="container gap-6 md:gap-8 lg:gap-[140px] grid grid-cols-1 md:grid-cols-2">
            <div class="col-span-1">
                <div class="flex flex-row space-x-1 md:space-x-3">
                    <div class="h-[17px] md:h-[44px] bg-[#054F9C]/[0.2] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto">
                        <p class="text-11 leading-17 md:text-20 md:leading-28 font-bold  text-blue text-center">Schoolvakanties</p>
                    </div>
                          <div class="h-[17px] md:h-[44px] bg-[#054F9C]/[0.2] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto">
                        <p class="text-11 leading-17 md:text-20 md:leading-28 font-bold  text-blue text-center">Datum</p>
                    </div>
                </div>
                <?php if( have_rows('schoolvakanties') ): ?>
                    <?php while( have_rows('schoolvakanties') ): the_row(); ?>
                        <div class="gap-1 md:gap-3 grid grid-cols-2 py-[15px] border-b-[1px] border-[#A2A2A2]/[0.25] first-of-type:border-[0px]">
                            <p class="text-11 leading-17 md:text-20 md:leading-28  text-blue  col-span-1 pr-[15px]"><?php the_sub_field("schoolvakanties"); ?></p>
                            <p class="text-11 leading-17 md:text-20 md:leading-28  text-blue  col-span-1 pr-[15px]"><?php the_sub_field("datum"); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-span-1">
                <div class="flex flex-row space-x-1 md:space-x-3">
                    <div class="h-[17px] md:h-[44px] bg-[#054F9C]/[0.2] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto">
                        <p class="text-11 leading-17 md:text-20 md:leading-28 font-bold  text-blue text-center">Studiedagen</p>
                    </div>
                          <div class="h-[17px] md:h-[44px] bg-[#054F9C]/[0.2] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto">
                        <p class="text-11 leading-17 md:text-20 md:leading-28 font-bold  text-blue text-center">Datum</p>
                    </div>
                </div>
                <?php if( have_rows('studiedagen') ): ?>
                    <?php while( have_rows('studiedagen') ): the_row(); ?>
                        <div class="gap-1 md:gap-3 grid grid-cols-2 py-[15px] border-b-[1px] border-[#A2A2A2]/[0.25] first-of-type:border-[0px]">
                            <p class="text-11 leading-17 md:text-20 md:leading-28  text-blue  col-span-1 pr-[15px]"><?php the_sub_field("studiedagen"); ?></p>
                            <p class="text-11 leading-17 md:text-20 md:leading-28  text-blue  col-span-1 pr-[15px]"><?php the_sub_field("datum"); ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>


<?php endif; ?>
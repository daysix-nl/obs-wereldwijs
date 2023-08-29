<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class="bg-white <?php the_field("background_color") ?> relative z-10 <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> mt-[-7px] mb-[-7px]">
        <div class="container max-w-[623px] grid grid-cols-2 gap-1 md:gap-[15px]">
            <div class="col-span-1">
                <div class="h-[17px] md:h-[44px] bg-[#054F9C]/[0.2] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28 font-bold  text-blue text-center">Dagen</p>
                </div>
                <div class="h-[17px] md:h-[44px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center">Maandag</p>
                </div>
                <div class="h-[17px] md:h-[44px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center">Dinsdag</p>
                </div>
                <div class="h-[17px] md:h-[44px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center">Woensdag</p>
                </div>
                <div class="h-[17px] md:h-[44px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center">Donderdag</p>
                </div>
                <div class="h-[17px] md:h-[44px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center">Vrijdag</p>
                </div>
            </div>
            <div class="col-span-1">
                <div class="h-[17px] md:h-[44px] bg-[#054F9C]/[0.2] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28 font-bold  text-blue text-center">Tijden</p>
                </div>
                <div class="h-[17px] md:h-[44px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center"><?php the_field("maandag"); ?></p>
                </div>
                <div class="h-[17px] md:h-[44px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center"><?php the_field("dinsdag"); ?></p>
                </div>
                <div class="h-[17px] md:h-[44px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center"><?php the_field("woensdag"); ?></p>
                </div>
                <div class="h-[17px] md:h-[44px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center"><?php the_field("donderdag"); ?></p>
                </div>
                <div class="h-[17px] md:h-[44px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center"><?php the_field("vrijdag"); ?></p>
                </div>
            </div>
        </div>
    </section>


<?php endif; ?>
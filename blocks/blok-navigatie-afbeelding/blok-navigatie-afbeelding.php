<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class=" <?php the_field("background_color") ?> relative z-10 <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?>">
        <div class="container">
          <div class="relative pr-1 md:px-0">
            <?php 
            $image = get_field('afbeelding');
            if( !empty( $image ) ): ?>
                <img class="w-full h-[224px] md:h-[415px]  md:px-0 object-cover rounded-[10px] md:rounded-[15px]" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <a class="bg-blue min-h-[50px]  md:h-[95px] px-[15px] md:px-[35px] w-fit md:w-max lg:w-fit flex justify-center items-center text-12 leading-14 md:text-30 md:leading-36 text-white rounded-[7px] md:rounded-[15px] absolute bottom-[-10px] md:bottom-[-20px] right-[0px] md:left-1/2 md:transform md:-translate-x-1/2 button-underline__withicon" href="<?php the_field("link"); ?>">
              <span class="mr-[15px] md:mr-3 icon">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/download-white.php'; ?>
              </span>
              <div class="flex flex-col">
                <span class="underline-text w-fit">Bekijk hier</span>
                <span class="underline-text w-fit">alle documentens</span>
              </div>
            </a>
          </div>
        </div>
    </section>

<?php endif; ?>
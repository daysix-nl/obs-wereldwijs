<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class="<?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> <?php the_field("background_color") ?> relative z-10 gravity-form-style">
          <div class="container max-w-[1096px] grid grid-cols-3 lg:grid-cols-5 gap-3">
            <div class="col-span-3">
                <?php echo do_shortcode('[gravityform id="6" title="false" description="false" ajax="true"]'); ?>
            </div>
            <div class="col-span-2 hidden lg:block">
              <div class="rounded-[9px] bg-[#CDDCEB] p-5 mt-3">
                  <h4 class="text-20 leading-28 text-blue font-bold  mb-3">Obs Wereldwijs</h4>
                  <p class="text-20 leading-28 text-blue">| Eendracht 7</p>
                  <p class="text-20 leading-28 text-blue"> &nbsp; 3641 ML Mijdrecht</p>
                  <p class="text-20 leading-28 text-blue"><a href="tel:+31297285586">| +31 (0)297 - 285 586</a></p>
                  <p class="text-20 leading-28 text-blue"><a href="mailto:info@obswereldwijs-mijdrecht.nl">| info@obswereldwijs-mijdrecht.nl</a></p>
                  <p class="text-20 leading-28 text-blue"><a href="#">| www.obswereldwijs.nl</a></p>
              </div>
            </div>
          </div>
    </section>



<?php endif; ?>
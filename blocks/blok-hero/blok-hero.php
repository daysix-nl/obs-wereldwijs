<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <!-- hero -->
    <section class="sticky top-0 overflow-x-hidden">
      <div class="relative">
          <div class=" w-screen h-[390px] md:h-[100vh] bg-cream"></div>
          <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-screen  md:w-[90vw] " src="/wp-content/themes/obs-wereldwijs/img/local/hero.png" alt="">
          <h1 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-blue text-40 leading-48 md:text-91 w-full max-w-[300px] md:max-w-[782px] md:leading-109 z-2 text-center mix-blend-multiply pb-5"><?php the_field("titel"); ?></h1>
      </div>
    </section>

<?php endif; ?>
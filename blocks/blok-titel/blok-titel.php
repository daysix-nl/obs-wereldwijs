<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <!-- Welkom -->
    <section id="down" class="<?php echo get_field("swoosh") ? "w-screen mt-[-80px]  md:mt-[-180px]" : "" ?>  relative z-10 ">
      <?php if(get_field("swoosh")): ?>
        <div class="w-screen ">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1441.84 113.47"  xml:space="preserve">
              <path d="M950.51 53.85C417.98 175.16-.24 73.8-.24 73.8v39.67h1442.08V6.04c-283.77-2.36-464.86 41.01-491.33 47.81z" style="fill:#fff"/>
          </svg>
        </div>

        <a href="#down" class="absolute z-10 top-[50px] left-1/2 transform -translate-x-1/2 hidden md:flex cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54">
              <g id="Group_24" data-name="Group 24" transform="translate(-810 -889)">
                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(810 889)" fill="none" stroke="#df4550" stroke-width="3">
                  <circle cx="27" cy="27" r="27" stroke="none"/>
                  <circle cx="27" cy="27" r="25.5" fill="none"/>
                </g>
                <g id="Group_13" data-name="Group 13" transform="translate(-2050.5 -1051.214)">
                  <rect id="Rectangle_21" data-name="Rectangle 21" width="5" height="15" rx="1" transform="translate(2885 1961)" fill="#df4550"/>
                  <rect id="Rectangle_22" data-name="Rectangle 22" width="5" height="13" rx="1" transform="translate(2887.328 1958.429) rotate(45)" fill="#df4550"/>
                  <rect id="Rectangle_23" data-name="Rectangle 23" width="5" height="13" rx="1" transform="translate(2884.136 1961.965) rotate(-45)" fill="#df4550"/>
                </g>
              </g>
            </svg>
          </a>
      <?php endif; ?>

        <div class="<?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> <?php the_field("background_color") ?> mt-[-1px]">
          <div class="container">
            <?php if(get_field('icon')): ?>
              <img class="w-full max-w-[76px] md:max-w-[178px] mx-auto mb-1" src="<?php echo get_template_directory_uri(); ?>/img/icons-acf/<?php the_field('icon'); ?>.svg" alt="">
            <?php endif; ?>
            <h2 class="text-red text-30 leading-36 md:leading-82 md:text-68 text-center w-full <?php echo get_field("tekst") ? (get_field("swoosh")  ? get_field('icon') ? "md:mb-1 mb-2" : "md:mb-4 mb-2" : "md:mb-1 mb-2") : ""; ?>"><?php the_field("titel"); ?></h2>
            <div class="text-editor max-w-[380px] md:max-w-[890px] mx-auto"><?php the_field("tekst"); ?></div>
          </div>
        </div>
    </section>

<?php endif; ?>
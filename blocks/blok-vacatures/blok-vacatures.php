<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class="<?php the_field("background_color") ?> relative z-10 <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?>">
        <div class="container relative  grid grid-cols-1 lg:gap-y-4 max-w-[942px]">
                <?php
                  $loop = new WP_Query( array(
                      'post_type' => 'vacature',
                      'posts_per_page' => -1,
                      'orderby' => 'date',
                      'order' => 'DECS',
                      'offset' => 0,
                  )
                  );

                    while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID();
                ?>

                    <div class="col-span-1 mb-1 last-of-type:mb-0">
                        <div class="max-w-[250px] md:max-w-[416px] lg:max-w-[unset] mx-auto lg:m-0">
                            <a href="<?php the_permalink(); ?>" class="w-full md:w-[416px] h-fit bg-blue rounded-[7px] md:rounded-[15px] py-1 md:py-[25px] px-1 md:px-[35px] flex space-x-1 md:space-x-3 lg:w-full  items-center justify-between">

                                <span class="flex flex-col items-start">
                                    <span class="text-11 leading-13 md:text-20 md:leading-24 text-white text-left md-[5px] mb-1"><?php the_title(); ?></span>
                                    <span class="text-11 leading-13 md:text-16 md:leading-24 text-white"><?php the_field("functie_specificaties", $post_id) ?></span>
                                </span>
                                <span class="block w-[17px]  md:w-[unset]">
                                            <svg class="w-[17px]  md:w-[28px] h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.571 18.728">
                                            <g id="Group_13" data-name="Group 13" transform="translate(1976 -2878.136) rotate(90)">
                                                <rect id="Rectangle_21" data-name="Rectangle 21" width="5" height="15" rx="1" transform="translate(2885 1961)" fill="#fff"/>
                                                <rect id="Rectangle_22" data-name="Rectangle 22" width="5" height="13" rx="1" transform="translate(2887.328 1958.429) rotate(45)" fill="#fff"/>
                                                <rect id="Rectangle_23" data-name="Rectangle 23" width="5" height="13" rx="1" transform="translate(2884.136 1961.965) rotate(-45)" fill="#fff"/>
                                            </g>
                                            </svg>

                                </span>
                            </a>
                        </div>
                    </div>

            <?php
                endwhile;
                wp_reset_query();
            ?>
        </div>
    </section>


<?php endif; ?>
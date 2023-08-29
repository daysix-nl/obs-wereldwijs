<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class="<?php the_field("background_color") ?> relative z-10 <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?>">
        <div class="container relative  grid grid-cols-1 lg:grid-cols-2 lg:gap-x-4 max-w-[945px]">
                <?php
                  $loop = new WP_Query( array(
                      'post_type' => 'documenten',
                      'posts_per_page' => 3,
                      'orderby' => 'date',
                      'order' => 'DECS',
                      'offset' => 0,
                  )
                  );

                    while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID();
                ?>

                    <div class="col-span-1 mb-1 md:mb-[15px] last-of-type:mb-0">
                        <div class="max-w-[200px] md:max-w-[416px] lg:max-w-[unset] mx-auto lg:m-0">
                            <a target="_blank" href="<?php the_field("document", $post_id); ?>" class="w-[200px] md:w-[416px] h-[38px] md:h-[65px] bg-blue rounded-[7px] md:rounded-[15px] py-1 md:py-[25px] px-1 md:px-[35px] flex space-x-1 md:space-x-3 lg:w-full  items-center">
                                <span class="block w-[20px]  md:w-[35px]">
                                    <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/download-white.php'; ?>
                                </span>
                                <span class="flex flex-col items-start">
                                    <span class="text-11 leading-13 md:text-20 md:leading-24 text-white text-left md-[5px]"><?php the_title(); ?></span>
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
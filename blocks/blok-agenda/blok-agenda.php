<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class=" <?php the_field("background_color") ?> relative z-10 <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> mt-[-7px] mb-[-7px]">
        <div class="container max-w-[1164px] grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 md:gap-[15px]">
            <?php
            // Array met Nederlandse maandnamen, startend met augustus
            $maand_namen = array("augustus", "september", "oktober", "november", "december", "januari", "februari", "maart", "april", "mei", "juni", "juli");

            foreach ($maand_namen as $maand_naam) :
            ?>
                <div class="col-span-1">
                    <div class="h-[23px] md:h-[44px] bg-[#054F9C]/[0.2] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                        <p class="text-11 leading-6 md:text-20 md:leading-28 font-bold  text-blue text-center"><?php echo $maand_naam; ?></p>
                    </div>

                    <?php
                    $loop = new WP_Query(array(
                        'post_type' => 'agenda',
                        'posts_per_page' => -1,  // Pas dit aan indien nodig
                        'orderby' => 'date',
                        'order' => 'DESC',  // Moet dit 'DESC' zijn of bedoelde je 'ASC'?
                        'meta_query' => array(
                            array(
                                'key' => 'welke_maand',
                                'value' => $maand_naam,
                                'compare' => '=',
                            ),
                        ),
                    ));

                    while ($loop->have_posts()) : $loop->the_post(); $post_id = get_the_ID();
                    ?>
                        <div class="h-[38px] md:h-[70px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex w-full mx-auto last-of-type:mb-0 mb-[15px] flex-col p-1 justify-center">
                            <p class="text-11 leading-16 md:text-20 md:leading-28  text-blue"><?php the_title(); ?></p>
                            <p class="text-11 leading-16 md:text-20 md:leading-28  text-blue">| <?php the_field("datum", $post_id); ?></p>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>

                </div>
            <?php
            endforeach;
            ?>

        </div>
    </section>


<?php endif; ?>
<?php 
/**
 * The template for displaying the footer
 * 
 * @package Day Six theme
 */
 ?>



<?php wp_footer(); ?>

<footer class="relative  overflow-[revert]">

        <a onclick="scrollToTop()" class="absolute z-10 top-[-70px] right-2  md:hidden cursor-pointer">
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

    <section class="relative  flex flex-col">
        <div>
            <svg class="w-screen h-auto flex" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1442.289 104.501">
                <path id="Path_268" data-name="Path 268" d="M1496,2412.117c-1.374,42.453,0,38.832,0,38.832s1105.237-.253,1441.678.048V2367.03s-447.156-51.866-841.883,9.383C2032.546,2384.68,1558.138,2441.857,1496,2412.117Z" transform="translate(-1495.389 -2346.526)" fill="#fff9ec"/>
            </svg>
        </div>

        <div class="bg-cream relative py-8">
          <div class="absolute top-1/2  md:top-[37%] transform right-0 -translate-y-1/2 w-full md:h-full z-[2]">
            <svg class="md:h-[300px] ml-auto" fill="#fff" version="1.1" id="Laag_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 1483 663.5" style="enable-background:new 0 0 1483 663.5" xml:space="preserve">
                <path fill="#fff" class="st0" d="M286.5 178.6c0 50 20.6 95.2 53.6 127.6H223.4v52.3h42.9v-.6h764.3c74.3 0 124.5 56.9 124.5 126.9s-50.1 126.9-124.5 126.9H266.3v-.6h-42.9v52.3h807.2c98 0 177.7-80.1 177.7-178.6 0-50-20.6-95.2-53.6-127.6h116.7V305h-42.9v.6H464.1c-74.3 0-124.5-56.9-124.5-126.9S389.7 51.8 464.1 51.8h764.3v.6h42.9V0H464.1c-97.9 0-177.6 80.1-177.6 178.6z"/>
                <path fill="#fff" class="st0" d="M497.1 149.5h712.4v55.7H497.1zM1346.7 79.9v4.2c16.1 3.3 28.4 21.2 28.4 43s-12.3 39.7-28.4 43v16.6c16.1 3.3 28.4 21.2 28.4 43s-12.3 39.7-28.4 43v4.9l136.3-98.7-136.3-99zM285.2 458.3h712.4V514H285.2zM136.3 580.2V576c-16.1-3.3-28.4-21.2-28.4-43s12.3-39.7 28.4-43v-16.6c-16.1-3.3-28.4-21.2-28.4-43s12.3-39.7 28.4-43v-4.9L0 481.4l136.3 98.8z"/>
            </svg>
          </div>
          <div class=" container px-3 relative grid grid-cols-2">
            <div class="col-span-1 grid grid-cols-1 lg:grid-cols-5 z-10">
              <p class="col-span-1 lg:col-span-5 text-13 leading-16 lg:text-20 lg:leading-24 text-blue font-bold mb-1 md:mb-[35px]">Obs Wereldwijs</p>
              <div class="col-span-1 lg:col-span-2 flex flex-col max-w-[180px]">
                <p class="text-11 leading-14 lg:text-17 lg:leading-28 text-blue font-normal mb-1">| <?php the_field('straat_+_huisnummer', 'option'); ?></p>
                <p class="text-11 leading-14 lg:text-17 lg:leading-28 text-blue font-normal mb-1">&nbsp; <?php the_field('postcode_+_plaats', 'option'); ?></p>
                <p class="text-11 leading-14 lg:text-17 lg:leading-28 text-blue font-normal mb-1 md:mb-0"><a href="tel:<?php the_field('telefoonnummer', 'option'); ?>">| <?php the_field('telefoonnummer', 'option'); ?></a></p>
              </div>
              <div class="col-span-1 lg:col-span-3 flex flex-col">
                <a class="text-11 leading-14 lg:text-17 lg:leading-28 text-blue font-normal mb-1 w-full" href="mailto:<?php the_field('e-mail', 'option'); ?>">| <?php the_field('e-mail', 'option'); ?></a>
                <a class="text-11 leading-14 lg:text-17 lg:leading-28 text-blue font-normal w-full" href="<?php the_field('website', 'option'); ?>">| <?php the_field('website', 'option'); ?></a>
              </div>
            </div>
            <div class="col-span-1 grid grid-cols-1 lg:grid-cols-3 z-10">
              <div class="col-span-2 hidden lg:grid grid-cols-2">
                <p class="col-span-2 text-20 leading-24 text-blue font-bold mb-[35px]">Menu</p>
                <div class="col-span-1 flex flex-col space-y-[1px]">
                      <?php if( have_rows('rij_1_footer', 'option') ): ?>
                        <?php while( have_rows('rij_1_footer', 'option') ): the_row();  ?>
                            <?php 
                            $link = get_sub_field('pagina');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>

                                    <a class="text-11 lg:text-17 leading-28 text-blue font-normal" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">| <?php echo esc_html( $link_title ); ?></a>

                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-span-1 flex flex-col space-y-[1px]">
                      <?php if( have_rows('rij_2_footer', 'option') ): ?>
                        <?php while( have_rows('rij_2_footer', 'option') ): the_row();  ?>
                            <?php 
                            $link = get_sub_field('pagina');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>

                                    <a class="text-11 lg:text-17 leading-28 text-blue font-normal" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">| <?php echo esc_html( $link_title ); ?></a>

                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
              </div>
              <div class="grid grid-cols-1 col-span-1">
                <p class="text-13 lg:text-17 leading-14 lg:leading-28 text-blue font-bold max-w-[124px] md:max-w-[unset]"><?php the_field('stichting_auro', 'option'); ?></p>
                <a href="https://stichtingauro.nl/">
                  <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/auro.php'; ?>
                </a>
            </div>
          </div>
        </div>


    </section>
    <section class="bg-blue flex justify-center items-center h-[19px] md:h-[48px] z-10 relative">
        <p class="text-9 leading-7 md:text-16 md:leading-26 text-white text-center"><?php echo date("Y"); ?> obs Wereldwijs | <a href="https://www.studiosnoek.nl/">Created by Studio Snoek</a> </p>
    </section>
</footer>
</body>
</html>
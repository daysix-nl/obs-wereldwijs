<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class="<?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> <?php the_field("background_color") ?> relative z-10">
      <div class="container">
          <div class="grid-cols-1 md:grid-cols-2 grid gap-4">
              <div class="col-span-1 relative">
                <div class="pr-1">
                    <?php 
                    $image = get_field('afbeelding_1');
                    if( !empty( $image ) ): ?>
                        <img class="w-full object-cover rounded-[15px]  md:px-0" src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php endif; ?>

                      <?php 
                      $link = get_field('link_1');
                      if( $link ): 
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target'] ? $link['target'] : '_self';
                          ?>
                          <a class="bg-blue h-[38px] w-[134px] md:h-[66px] md:w-[247px] lg:h-[85px] lg:w-[335px] flex justify-center items-center text-12 leading-14 md:text-30 md:leading-36 text-white rounded-[7px]  lg:rounded-[15px] absolute bottom-[40px] right-[0px] md:right-[-15px] md:bottom-[-15px] button-underline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
                      <?php endif; ?>

                      <?php 
                      $link = get_field('link_2');
                      if( $link ): 
                          $link_url = $link['url'];
                          $link_title = $link['title'];
                          $link_target = $link['target'] ? $link['target'] : '_self';
                          ?>
                          <a class="bg-blue h-[38px] w-[134px] md:h-[85px] md:w-[335px] flex justify-center items-center text-12 leading-14 md:text-30 md:leading-36 text-white rounded-[7px]  md:rounded-[15px] absolute bottom-[-5px] right-[0px] md:bottom-[-15px] md:right-[-15px] md:hidden button-underline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span></a>
                      <?php endif; ?>

                </div>
              </div>
              <div class="col-span-1 relative hidden md:block">
                <div>
                  <?php 
                  $image = get_field('afbeelding_2');
                  if( !empty( $image ) ): ?>
                      <img src="<?php echo esc_url($image['url']); ?>"  alt="<?php echo esc_attr($image['alt']); ?>" class="w-full object-cover rounded-[15px]" >
                  <?php endif; ?>

                  <?php 
                  $link = get_field('link_2');
                  if( $link ): 
                      $link_url = $link['url'];
                      $link_title = $link['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                      ?>
                      <a class="bg-blue h-[38px] w-[134px] md:h-[66px] md:w-[247px] lg:h-[85px] lg:w-[335px] flex justify-center items-center text-12 leading-14 md:text-30 md:leading-36 text-white rounded-[7px]  lg:rounded-[15px] absolute bottom-[40px] right-[0px] md:right-[-15px] md:bottom-[-15px] button-underline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></a></span></a>
                  <?php endif; ?>

                </div>
              </div>
          </div>
        </div>
    </section>

<?php endif; ?>
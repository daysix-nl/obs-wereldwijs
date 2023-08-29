<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

   <section class="relative z-10 <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> <?php the_field("background_color") ?> gravity-form-style">
          <div class="container max-w-[1015px]">
            <div>
              <p class="text-20 text-blue">Type aanmelding*</p>

              <div class="flex flex-row space-x-1 md:space-x-4 mt-1">
                <button class="tab-button active"  data-target="form-1">Uw kind inschrijven</button>
                <button  class="tab-button" data-target="form-2">Aanmelden voor rondleiding</button>
              </div>
                            <div class="h-[1px] bg-[#A2A2A2]/[0.25] w-full my-[25px]"></div>
            </div>
              <div id="form-1">
                  <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
              </div>
              <div id="form-2" style="display: none;">
                  <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]'); ?>
              </div>
          </div>
    </section>

    <script>
        try {
          gform.addFilter(
            "gform_datepicker_options_pre_init",
            function (optionsObj, formId, fieldId) {
              if (formId == 3 && fieldId == 7) {
                optionsObj.firstDay = 1;

                optionsObj.beforeShowDay = function (date) {
                  const subscribeDays = [
                    <?php 
                      $rows = get_field('datum_van_rondleiding', 'option');
                      if( $rows ) {
                        $jsArray = [];
                        foreach( $rows as $row ) {
                          $image = $row['date'];
                          $jsArray[] = '"' . $image . '"';
                        }
                        echo implode(',', $jsArray);
                      }
                    ?>
                  ];

                  const stringDate = jQuery.datepicker.formatDate("dd-mm-yy", date);

                  if (subscribeDays.includes(stringDate)) {
                    return [true];
                  }

                  return [false];
                };
              }
              return optionsObj;
            }
          );

          function formatDate(date) {
            var day = date.getDate().toString().padStart(2, "0");
            var month = (date.getMonth() + 1).toString().padStart(2, "0");
            var year = date.getFullYear();
            return day + "-" + month + "-" + year;
          }
        } catch (error) {}
    </script>



<?php endif; ?>
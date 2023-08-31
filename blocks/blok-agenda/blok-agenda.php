<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

<section class="<?php the_field("background_color") ?> relative z-10 <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> mt-[-7px] mb-[-7px]">
    <div class="container max-w-[1164px] grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-1 md:gap-[15px]">
        <?php
        // Array met Nederlandse maandnamen, startend met augustus
        $maand_namen = array("augustus", "september", "oktober", "november", "december", "januari", "februari", "maart", "april", "mei", "juni", "juli");

        // Fetch events data
        $url_event = "https://api.socialschools.eu/apiv1/public/194801398/event/";
        $response_event = file_get_contents($url_event);
        $data_event = json_decode($response_event);

        foreach ($maand_namen as $index => $maand_naam):
        ?>
            <div class="col-span-1">
                <div class="h-[23px] md:h-[44px] bg-[#054F9C]/[0.2] rounded-[3px] md:rounded-[9px] flex  justify-center items-center w-full mx-auto mb-1">
                    <p class="text-11 leading-6 md:text-20 md:leading-28 font-bold  text-blue text-center"><?php echo $maand_naam; ?></p>
                </div>

                <?php
                if($response_event !== false && $data_event !== null){
                    foreach($data_event->results as $result_event){
                        $date_event = new DateTime($result_event->start_date);
                        $event_month = (int) $date_event->format('n');
                        $event_year = (int) $date_event->format('Y');

                        // Determine the academic year based on the month
                        if ($event_month >= 8) {
                            $event_academic_year = $event_year;
                        } else {
                            $event_academic_year = $event_year - 1;
                        }

                        // Determine the current academic year
                        $current_month = (int) date('n');
                        $current_year = (int) date('Y');
                        if ($current_month >= 8) {
                            $academic_year = $current_year;
                        } else {
                            $academic_year = $current_year - 1;
                        }

                        // Skip events that are not in the current academic year
                        if ($event_academic_year !== $academic_year) {
                            continue;
                        }

                        // Convert the month index to match your custom year that starts in August
                        $adjusted_month_index = ($index + 8) % 12;

                        $formattedDate_event = $date_event->format('d.m.Y');

                        // Check if the month matches
                        if ($event_month === $adjusted_month_index) {
                            $title_event = $result_event->title;
                ?>
                            <div class="h-[38px] md:h-[70px] bg-[#F8F8F8] rounded-[3px] md:rounded-[9px] flex w-full mx-auto last-of-type:mb-0 mb-[15px] flex-col p-1 justify-center">
                                <p class="text-11 leading-16 md:text-20 md:leading-28  text-blue"><?= $title_event ?></p>
                                <p class="text-11 leading-16 md:text-20 md:leading-28  text-blue">| <?=  $formattedDate_event ?></p>
                            </div>
                <?php
                        }
                    }
                }
                ?>

            </div>
        <?php
        endforeach;
        ?>

    </div>
</section>




<?php endif; ?>
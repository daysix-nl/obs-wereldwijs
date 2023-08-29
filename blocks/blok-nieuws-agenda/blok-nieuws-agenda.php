<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>
    <section class="<?php the_field("background_color") ?> z-[80]">
      <div class="container max-w-[1041px] relative  grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-[200px] <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> ">
        <div class="col-span-1 flex flex-col relative">
          <h2 class="text-red text-30 leading-36 md:leading-82 md:text-68 w-full md:mb-7 mb-[15px] text-center lg:text-left">Nieuws</h2>
          <div class="max-w-[200px] md:max-w-[416px] lg:max-w-[unset] mx-auto lg:m-0">
            <?php

              $url = "https://api.socialschools.eu/apiv1/public/194801398/post/";
              
              $response = file_get_contents($url);

                if (!function_exists('truncateText')) {
                    function truncateText($text, $maxLength) {
                        if (strlen($text) <= $maxLength) {
                            return $text;
                        }
                        return substr($text, 0, $maxLength - 1) . '…';
                    }
                }
              
              if($response !== false){
                  $data = json_decode($response);
                  $counter = 0;
                  $max = 3;
                  if($data !== null){
                      foreach($data->results as $result){

                        $counter++;
                        if($counter > $max){
                          break;
                        }

                        $title = $result->title;
                        $truncatedText = truncateText( $title, 25);
                        $description = $result->description;
                        $date = new DateTime($result->date_created);
                        $formattedDate = $date->format('d.m.Y');
                        $posted_by = $result->posted_by->last_name;
                        $posted_by_img = $result->posted_by->picture;
              
                        $response_document = file_get_contents($result->documents);
                        $data_document;
                        if($response_document !== false){
                          $data_document = json_decode($response_document);
                        } else {
                          break;
                        }
                        $document = $data_document->results[0]->document;
                        ?>
                              <button data-modal-id="modal-<?= $counter ?>" class="w-[200px] md:w-[416px] h-[50px] md:h-[85px] bg-blue rounded-[7px] md:rounded-[15px] py-1 md:py-[25px] px-1 md:px-[35px] flex space-x-1 md:space-x-3 lg:w-full mb-1 md:mb-[45px] last-of-type:mb-0 items-center">
                                <span class="block w-[17px]  md:w-[35px]">
                                  <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/vergrootglas.php'; ?>
                                </span>
                                <span class="flex flex-col items-start">
                                  <span class="text-11 leading-13 md:text-20 md:leading-24 text-white text-left md-[5px] md:mb-[10px]"><?= ucfirst($truncatedText) ?></span>
                                  <span class="text-8 leading-10 md:text-16 md:leading-19 text-white">| <?= $formattedDate ?></span>
                                </span>
                              </button>

                              <div id="modal-<?= $counter ?>" class="modal hidden  fixed top-0 left-0 right-0 w-screen h-screen bg-[#707070]/[0.5] z-[80] close-modals">
                                  <div class="modal-content max-w-[95vw] w-[718px] max-h-[70vh] md:max-h-[80vh] overflow-scroll bg-white p-2 md:p-4 rounded-[15px] m-auto">
                                        <div>
                                          <div class="flex justify-between pb-2">
                                            <h4 class="text-red text-20 leading-25 md:text-30 md:leading-36 font-bold max-w-[420px]"><?= $title ?></h4>
                                            <button class="close-modals">
                                                <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/close.php'; ?>
                                            </button>
                                          </div>
                                          <p class="text-blue font-bold pb-2">Publicatie op <?= $formattedDate ?></p>
                                        </div>
                                        <div class="border-y-[1px] py-2 border-[#A2A2A2]/[0.25] flex space-x-4 items-center">
                                          <img class="h-[109px] w-[109px] object-cover rounded-full" src="<?= $posted_by_img ?>" alt="">
                                          <p class="text-blue font-bold"><?= $posted_by ?></p>
                                        </div>
                                        <p class="text-blue py-5 border-b-[1px] border-[#A2A2A2]/[0.25]"><?= nl2br(htmlspecialchars($description)) ?></p>
                                        <div class="pt-4"></div>
                                        <a class="font-bold text-blue px-[25px] bg-blue/20 h-[44px] flex justify-center items-center w-fit rounded-[9px]" href="<?= $document ?>" target="_blank" rel="noopener noreferrer">
                                          <span class="block mr-2">
                                            <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/download.php'; ?>
                                          </span>
                                          <span class="block">Download bijlage</span>
                                        </a>
                                  </div>
                              </div>
                        <?php
                      }
                  }
              }
            ?>
          </div>
        </div>
        <div class="col-span-1 flex flex-col relative">
          <h2 class="text-red text-30 leading-36 md:leading-82 md:text-68 w-full md:mb-7 mb-[15px] text-center lg:text-left">Agenda</h2>
          <div class="max-w-[200px] md:max-w-[416px] lg:max-w-[unset] mx-auto lg:m-0">
              <?php
                  $loop = new WP_Query( array(
                      'post_type' => 'agenda',
                      'posts_per_page' => 3,
                      'orderby' => 'date',
                      'order' => 'DECS',
                      'offset' => 0,
                  )
                  );

                  // Zet de tijdzone, bijvoorbeeld naar de Nederlandse tijdzone
                  date_default_timezone_set('Europe/Amsterdam');
                    // Huidige maand als getal (1 voor januari, 12 voor december)
                    $huidige_maand = date("n");

                    // Huidig jaar
                    $huidig_jaar = date("Y");

                    // Array met Nederlandse maandnamen
                    $maand_namen = array("", "januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");

                    // Array om de komende 3 maanden op te slaan
                    $komende_drie_maanden = [];

                    // Loop om de komende 3 maanden te vinden
                    for ($i = 0; $i < 3; $i++) {
                      $komende_maand = $huidige_maand + $i;

                      // Als de komende maand groter is dan 12, reset de maandtelling
                      if ($komende_maand > 12) {
                        $komende_maand = $komende_maand - 12;
                      }

                      // Voeg toe aan de array
                      $komende_drie_maanden[] = $maand_namen[$komende_maand];
                    }
              ?>
          
              <?php $gevonden = false; while  ( $loop->have_posts()  ) : $loop->the_post(); $post_id = get_the_ID();  
              
                $welke_maand = get_field("welke_maand", $post_id);

                // Als de waarde van welke_maand in de array met komende maanden zit, toon de post
                if (in_array($welke_maand, $komende_drie_maanden)) :
                  $gevonden = true;
              ?>
                <div class="w-[200px] md:w-[416px] h-[50px] md:h-[85px] bg-blue rounded-[7px] md:rounded-[15px] py-1 md:py-[25px] px-1 md:px-[35px] flex space-x-1 md:space-x-3 lg:w-full mb-1 md:mb-[45px] last-of-type:mb-0 items-center">
                  <span class="block w-[17px]  md:w-[35px]">
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/agenda.php'; ?>
                  </span>
                  <span class="flex flex-col items-start">
                    <span class="text-11 leading-13 md:text-20 md:leading-24 text-white text-left md-[5px] md:mb-[10px]"><?php the_title(); ?></span>
                    <span class="text-8 leading-10 md:text-16 md:leading-19 text-white">| <?php the_field("datum", $post_id); ?></span>
                  </span>
                </div>
              <?php  
              endif;
              endwhile; wp_reset_query(); ?>

              <?php if(!$gevonden): ?>
                <p class="text-blue text-center md:text-left">Er zijn geen agenda items gevonden voor de komende 3 maanden.</p> 
             <?php  endif; ?>

         
          </div>
        </div>
      </div>
  </section>

<?php endif; ?>
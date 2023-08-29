<?php
/**
 * Template name: Homepage
 */


 get_header(); ?>
 
 <main class="">
    <!-- hero -->
    <section class="sticky top-0 overflow-x-hidden">
      <div class="relative">
          <div class=" w-screen h-[390px] md:h-[100vh] bg-cream"></div>
          <img class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-screen  md:w-[90vw] " src="/wp-content/themes/obs-wereldwijs/img/local/hero.png" alt="">
          <h1 class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-blue text-40 leading-48 md:text-91 w-full max-w-[300px] md:max-w-[642px] md:leading-109 z-2 text-center mix-blend-multiply">Kinderen wijs de wereld in</h1>
      </div>
    </section>
    <!-- Welkom -->
    <section class="w-screen mt-[-80px]  md:mt-[-180px] relative z-10">
      <div class="w-screen ">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1441.84 113.47"  xml:space="preserve">
            <path d="M950.51 53.85C417.98 175.16-.24 73.8-.24 73.8v39.67h1442.08V6.04c-283.77-2.36-464.86 41.01-491.33 47.81z" style="fill:#fff"/>
        </svg>
      </div>

        <div class="pt-[45px] pb-[35px] md:py-11 bg-white mt-[-1px]">
          <div class="container">
            <h2 class="text-red text-30 leading-36 md:leading-82 md:text-68 text-center w-full md:mb-4 mb-2 ">Welkom</h2>
            <p class="text-center text-blue text-11 leading-14 md:text-18 md:leading-28 w-full max-w-[380px] md:max-w-[930px] mx-auto font-normal">Wereldwijs is een eigentijdse school waar het accent ligt op prettig leren en waar kinderen de kans krijgen hun talenten te ontwikkelen. De school legt een stevig fundament op de basisvaardigheden van rekenen,
                taal en lezen. Hiervoor gebruiken we lesmethodes, die onderwijs op maat bieden, zodat ieder kind op zijn eigen niveau wordt aangesproken. Naast vijf reguliere groepen bieden wij dit ook aan in drie taalklassen voor kinderen nieuwkomers. We dagen kinderen uit om hun talenten op verschillende terreinen
                te ontwikkelen. ‘Op Wereldwijs leer je over de wereld en in de wereld komen’.
            </p>
          </div>
        </div>
        <div class="bg-white">
          <div class="container grid grid-cols-3 gap-4 max-w-[1036px] pb-[35px] md:pb-7">
            <div class="col-span-1 flex items-center flex-col">
                <div class="max-w-[85px] md:max-w-[243px] w-full flex flex-col">
                  <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/icons-acf/leren.svg" alt="">
                  <p class="text-center text-blue text-11 leading-14 md:text-25 md:leading-36  lg:text-29 lg:leading-36 mt-2  md:mt-3  md:w-full md:max-w-[200x] mx-auto">Hier leren wij rekenen, lezen en schrijven</p>
                </div>
            </div>
            <div class="col-span-1 flex items-center flex-col">
              <div class="max-w-[85px] md:max-w-[243px] w-full flex flex-col">
                  <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/icons-acf/wereld.svg" alt="">
                  <p class="text-center text-blue text-11 leading-14 md:text-25 md:leading-36  lg:text-29 lg:leading-36 mt-2  md:mt-3  md:w-full md:max-w-[200x] mx-auto">Hier leren wij over de wereld</p>
              </div>
            </div>
            <div class="col-span-1 flex items-center flex-col">
              <div class="max-w-[85px] md:max-w-[243px] w-full flex flex-col">
                  <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/icons-acf/samen.svg" alt="">
                  <p class="text-center text-blue text-11 leading-14 md:text-25 md:leading-36  lg:text-29 lg:leading-36 mt-2  md:mt-3  md:w-full md:max-w-[200x] mx-auto">Hier leren wij kiezen & samen te werken</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- Over ons -->
    <section class="bg-white relative z-10">
      <div class="container pb-4 md:pb-11">
          <h2 class="text-red text-30 leading-36 md:leading-82 md:text-68 text-center w-full md:pb-10 pb-[35px]">Over ons</h2>
          <div class="grid-cols-1 md:grid-cols-2 grid gap-4">
              <div class="col-span-1 relative">
                <div class="pr-1">
                  <img class="w-full object-cover rounded-[15px]  md:px-0" src="<?php echo get_template_directory_uri(); ?>/img/local/onderwijs.jpg" alt="">
                    <a class="bg-blue  h-[38px] w-[134px] md:h-[66px] md:w-[247px] lg:h-[85px] lg:w-[335px] flex justify-center items-center text-12 leading-14 md:text-30 md:leading-36 text-white rounded-[7px]  lg:rounded-[15px] absolute bottom-[40px] right-[0px] md:right-[-15px] md:bottom-[-15px] button-underline" href=""><span>Ons onderwijs</span></a>
                    <a class="bg-blue  h-[38px] w-[134px] md:h-[85px] md:w-[335px] flex justify-center items-center text-12 leading-14 md:text-30 md:leading-36 text-white rounded-[7px]  md:rounded-[15px] absolute bottom-[-5px] right-[0px] md:bottom-[-15px] md:right-[-15px] md:hidden button-underline" href=""><span>Ons team</span></a>
                </div>
              </div>
              <div class="col-span-1 relative hidden md:block">
                <div>
                  <img class="w-full object-cover rounded-[15px]" src="<?php echo get_template_directory_uri(); ?>/img/local/onderwijs.jpg" alt="">
                  <a class="bg-blue  h-[38px] w-[134px] md:h-[66px] md:w-[247px] lg:h-[85px] lg:w-[335px] flex justify-center items-center text-12 leading-14 md:text-30 md:leading-36 text-white rounded-[7px]  lg:rounded-[15px] absolute bottom-[40px] right-[0px] md:right-[-15px] md:bottom-[-15px] button-underline" href=""><span>Ons team</span></a>
                </div>
              </div>
          </div>
        </div>
    </section>
    <!-- Data - tijden -->
    <section class=" bg-white relative z-10">
        <div class="container pb-4  md:pb-7">
          <h2 class="text-red text-30 leading-36 md:leading-82 md:text-68 text-center w-full md:mb-1 mb-2 ">Data & Tijden</h2>
          <p class="text-center text-blue text-11 leading-14 md:text-18 md:leading-28 w-full md:mx-auto md:max-w-[450px]">“Neque porro quisquam est qui dolorem ipsum
                quia dolor sit amet, consectetur, adipisci velit…”
          </p>
        </div>
        <div class="container grid grid-cols-3 gap-4 max-w-[1036px] pb-[35px] md:pb-10">
          <div class="col-span-1 flex items-center flex-col ">
              <div class="max-w-[85px] md:max-w-[243px] w-full flex flex-col">
                <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/icons-acf/klok.svg" alt="">
                <p class="text-center text-blue text-11 leading-14 md:text-25 md:leading-36  lg:text-29 lg:leading-36 mt-2  md:mt-3  md:w-full md:max-w-[200x] mx-auto">Schooltijden</p>
              </div>
          </div>
          <div class="col-span-1 flex items-center flex-col">
            <div class="max-w-[85px] md:max-w-[243px] w-full flex flex-col">
                <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/icons-acf/zon.svg" alt="">
                <p class="text-center text-blue text-11 leading-14 md:text-25 md:leading-36  lg:text-29 lg:leading-36 mt-2  md:mt-3  md:w-full md:max-w-[200x] mx-auto">Schoolvakanties & Studiedagen</p>
            </div>
          </div>
          <div class="col-span-1 flex items-center flex-col">
            <div class="max-w-[85px] md:max-w-[243px] w-full flex flex-col">
                <img class="w-full" src="<?php echo get_template_directory_uri(); ?>/img/icons-acf/agenda.svg" alt="">
                <p class="text-center text-blue text-11 leading-14 md:text-25 md:leading-36  lg:text-29 lg:leading-36 mt-2  md:mt-3  md:w-full md:max-w-[200x] mx-auto">Agenda</p>
            </div>
          </div>
        </div>
    </section>
     <!-- Nieuws en agenda -->
    <section class="bg-[#F8F8F8] relative z-10">
      <!-- START --- background swoosh -->
        <div class="w-screen gardient__backround">
            <svg fill="#F8F8F8" version="1.1" id="Laag_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
              viewBox="0 0 1441.57 74.39" style="enable-background:new 0 0 1441.57 74.39;" xml:space="preserve">
            <path fill="#F8F8F8" class="st0" d="M1441.68,72.63V14.48c0,0-447.16-43.22-841.88,7.82C536.55,29.19,62.14,76.83,0,52.05
              c-0.11,2.84-0.2,9.94-0.28,20.58H1441.68z"/>
            </svg>
        </div>
        <div class="max-w-[400px] md:max-w-[900px] lg:max-w-[1036px] absolute top-12 lg:top-1/2 left-1/2 transform -translate-x-1/2 lg:-translate-y-1/2 z-[-2] w-full h-auto">
          <svg fill="#fff" version="1.1" id="Laag_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 1483 663.5" style="enable-background:new 0 0 1483 663.5" xml:space="preserve">
              <path fill="#fff" class="st0" d="M286.5 178.6c0 50 20.6 95.2 53.6 127.6H223.4v52.3h42.9v-.6h764.3c74.3 0 124.5 56.9 124.5 126.9s-50.1 126.9-124.5 126.9H266.3v-.6h-42.9v52.3h807.2c98 0 177.7-80.1 177.7-178.6 0-50-20.6-95.2-53.6-127.6h116.7V305h-42.9v.6H464.1c-74.3 0-124.5-56.9-124.5-126.9S389.7 51.8 464.1 51.8h764.3v.6h42.9V0H464.1c-97.9 0-177.6 80.1-177.6 178.6z"/>
              <path fill="#fff" class="st0" d="M497.1 149.5h712.4v55.7H497.1zM1346.7 79.9v4.2c16.1 3.3 28.4 21.2 28.4 43s-12.3 39.7-28.4 43v16.6c16.1 3.3 28.4 21.2 28.4 43s-12.3 39.7-28.4 43v4.9l136.3-98.7-136.3-99zM285.2 458.3h712.4V514H285.2zM136.3 580.2V576c-16.1-3.3-28.4-21.2-28.4-43s12.3-39.7 28.4-43v-16.6c-16.1-3.3-28.4-21.2-28.4-43s12.3-39.7 28.4-43v-4.9L0 481.4l136.3 98.8z"/>
          </svg>
        </div>
        <div class="max-w-[400px] md:max-w-[900px] lg:max-w-[1036px] absolute bottom-12 md:bottom-12 left-1/2 transform -translate-x-1/2 z-[-2] w-full h-auto lg:hidden">
          <svg fill="#fff" version="1.1" id="Laag_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 1483 663.5" style="enable-background:new 0 0 1483 663.5" xml:space="preserve">
              <path fill="#fff" class="st0" d="M286.5 178.6c0 50 20.6 95.2 53.6 127.6H223.4v52.3h42.9v-.6h764.3c74.3 0 124.5 56.9 124.5 126.9s-50.1 126.9-124.5 126.9H266.3v-.6h-42.9v52.3h807.2c98 0 177.7-80.1 177.7-178.6 0-50-20.6-95.2-53.6-127.6h116.7V305h-42.9v.6H464.1c-74.3 0-124.5-56.9-124.5-126.9S389.7 51.8 464.1 51.8h764.3v.6h42.9V0H464.1c-97.9 0-177.6 80.1-177.6 178.6z"/>
              <path fill="#fff" class="st0" d="M497.1 149.5h712.4v55.7H497.1zM1346.7 79.9v4.2c16.1 3.3 28.4 21.2 28.4 43s-12.3 39.7-28.4 43v16.6c16.1 3.3 28.4 21.2 28.4 43s-12.3 39.7-28.4 43v4.9l136.3-98.7-136.3-99zM285.2 458.3h712.4V514H285.2zM136.3 580.2V576c-16.1-3.3-28.4-21.2-28.4-43s12.3-39.7 28.4-43v-16.6c-16.1-3.3-28.4-21.2-28.4-43s12.3-39.7 28.4-43v-4.9L0 481.4l136.3 98.8z"/>
          </svg>
        </div>
      <div class="container relative  grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-[200px] py-4 md:py-10">
        <!-- END --- background swoosh -->
        <div class="col-span-1 flex flex-col relative">
          <h2 class="text-red text-30 leading-36 md:leading-82 md:text-68 w-full md:mb-7 mb-[15px] text-center lg:text-left">Nieuws</h2>
          <div class="max-w-[200px] md:max-w-[416px] lg:max-w-[unset] mx-auto lg:m-0">
            <?php

              $url = "https://api.socialschools.eu/apiv1/public/194801398/post/";
              
              $response = file_get_contents($url);

              function truncateText($text, $maxLength) {
                  if (strlen($text) <= $maxLength) {
                      return $text;
                  }
                  return substr($text, 0, $maxLength - 1) . '…';
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
                        $truncatedText = truncateText( $title, 20);
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

                              <div id="modal-<?= $counter ?>" class="modal hidden  fixed top-0 left-0 right-0 w-screen h-screen bg-[#707070]/[0.5] z-[60] close-modals">
                                  <div class="modal-content w-[718px] max-h-[80vh] overflow-scroll bg-white p-4 rounded-[15px] m-auto">
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
              <button class="w-[200px] md:w-[416px] h-[50px] md:h-[85px] bg-blue rounded-[7px] md:rounded-[15px] py-1 md:py-[25px] px-1 md:px-[35px] flex space-x-1 md:space-x-3 lg:w-full mb-1 md:mb-[45px] last-of-type:mb-0 items-center">
                <span class="block w-[17px]  md:w-[35px]">
                  <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/agenda.php'; ?>
                </span>
                <span class="flex flex-col items-start">
                  <span class="text-11 leading-13 md:text-20 md:leading-24 text-white text-left md-[5px] md:mb-[10px]">Eindfeest groep 8</span>
                  <span class="text-8 leading-10 md:text-16 md:leading-19 text-white">| 05.07.2023</span>
                </span>
              </button>
              <button class="w-[200px] md:w-[416px] h-[50px] md:h-[85px] bg-blue rounded-[7px] md:rounded-[15px] py-1 md:py-[25px] px-1 md:px-[35px] flex space-x-1 md:space-x-3 lg:w-full mb-1 md:mb-[45px] last-of-type:mb-0 items-center">
                <span class="block w-[17px]  md:w-[35px]">
                  <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/agenda.php'; ?>
                </span>
                <span class="flex flex-col items-start">
                  <span class="text-11 leading-13 md:text-20 md:leading-24 text-white text-left md-[5px] md:mb-[10px]">Eindfeest groep 8</span>
                  <span class="text-8 leading-10 md:text-16 md:leading-19 text-white">| 05.07.2023</span>
                </span>
              </button>
               <button class="w-[200px] md:w-[416px] h-[50px] md:h-[85px] bg-blue rounded-[7px] md:rounded-[15px] py-1 md:py-[25px] px-1 md:px-[35px] flex space-x-1 md:space-x-3 lg:w-full mb-1 md:mb-[45px] last-of-type:mb-0 items-center">
                <span class="block w-[17px]  md:w-[35px]">
                  <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/agenda.php'; ?>
                </span>
                <span class="flex flex-col items-start">
                  <span class="text-11 leading-13 md:text-20 md:leading-24 text-white text-left md-[5px] md:mb-[10px]">Eindfeest groep 8</span>
                  <span class="text-8 leading-10 md:text-16 md:leading-19 text-white">| 05.07.2023</span>
                </span>
              </button>
          </div>
        </div>
      </div>
      <div class="bg-[#F8F8F8] w-screen">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1441.84 113.47" style="enable-background:new 0 0 1441.84 113.47" xml:space="preserve">
            <path d="M950.51 53.85C417.98 175.16-.24 73.8-.24 73.8v39.67h1442.08V6.04c-283.77-2.36-464.86 41.01-491.33 47.81z" style="fill:#fff"/>
        </svg>
      </div>
    </section>
    <!-- Documenten -->
    <section class=" bg-white relative z-10 pb-5 md:pb-11">
        <div class="container pt-4 md:pt-11">
          <h2 class="text-red text-30 leading-36 md:leading-82 md:text-68 text-center w-full md:mb-1 mb-2 ">Documenten</h2>
          <p class="text-center text-blue text-11 leading-14 md:text-18 md:leading-28 w-full md:max-w-[939px] md:mx-auto mb-[35px] md:mb-[95px]">Download hier belangrijke documenten van obs Wereldwijs.</p>
          <div class="relative pr-1 md:px-0">
            <img class="w-full h-[224px] md:h-[415px]  md:px-0 object-cover rounded-[10px] md:rounded-[15px]" src="/wp-content/themes/obs-wereldwijs/img/local/documenten.png" alt="">
            <a class="bg-blue min-h-[50px]  md:h-[85px] px-[15px] md:px-[35px] w-fit md:w-max lg:w-fit flex justify-center items-center text-12 leading-14 md:text-30 md:leading-36 text-white rounded-[7px] md:rounded-[15px] absolute bottom-[-10px] md:bottom-[-20px] right-[0px] md:left-1/2 md:transform md:-translate-x-1/2 button-underline__withicon" href="">
              <span class="mr-[15px] md:mr-3 icon">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/download-white.php'; ?>
              </span>
              <div class="flex flex-col">
                <span class="underline-text w-fit">Bekijk hier</span>
                <span class="underline-text w-fit">alle documentens</span>
              </div>
            </a>
          </div>
        </div>
    </section>
    <!-- Call to action -->
    <section class="pb-5 md:pb-11 bg-white relative z-10">
          <div class="container">
            <h4 class="text-red text-40 leading-48 md:text-91 w-full md:leading-109 text-center max-w-[276px] md:max-w-[1200px] m-auto">Kinderen wijs de wereld in!</h4>
          </div>
    </section>




 </main>

  <?php get_footer(); ?>
<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>

    <section class="<?php the_field("background_color") ?> relative z-10 <?php the_field("padding_top") ?> <?php the_field("padding_bottom") ?> ">
        <div class="container relative max-w-[873px]  grid grid-cols-1 lg:grid-cols-2 gap-1 lg:gap-4">
            <div class="col-span-1">
                <div class="h-[17px] md:h-[44px] bg-[#054F9C]/[0.2] rounded-[3px] md:rounded-[9px] flex  justify-center items-center mb-1 max-w-[200px] md:max-w-[416px] lg:max-w-[unset] mx-auto">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center">Nieuwe updates</p>
                </div>
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
                    $max = 4;
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
                                <button data-modal-id="modal-<?= $counter ?>" class="w-[200px] md:w-[416px] h-[50px] md:h-[85px] bg-blue rounded-[7px] md:rounded-[15px] py-1 md:py-[25px] px-1 md:px-[35px] flex space-x-1 md:space-x-3 lg:w-full mb-1 last-of-type:mb-0 items-center">
                                    <span class="block w-[17px]  md:w-[35px]">
                                    <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/vergrootglas.php'; ?>
                                    </span>
                                    <span class="flex flex-col items-start">
                                    <span class="text-11 leading-13 md:text-20 md:leading-24 text-white text-left md-[5px] md:mb-[10px]"><?= ucfirst($truncatedText) ?></span>
                                    <span class="text-8 leading-10 md:text-16 md:leading-19 text-white">| <?= $formattedDate ?></span>
                                    </span>
                                </button>

                                <div id="modal-<?= $counter ?>" class="modal hidden  fixed top-0 left-0 right-0 w-screen h-screen bg-[#707070]/[0.5] z-[60] close-modals">
                                    <div class="modal-content max-w-[95vw] w-[718px] max-h-[80vh] overflow-scroll bg-white p-2 md:p-4 rounded-[15px] m-auto">
                                            <div>
                                            <div class="flex justify-between pb-2">
                                                <h4 class="text-red text-20 leading-25 md:text-30 md:leading-36 font-bold max-w-[420px]"><?= ucfirst($title) ?></h4>
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
            <div class="col-span-1">
                <div class="h-[17px] md:h-[44px] bg-[#054F9C]/[0.2] rounded-[3px] md:rounded-[9px] flex  justify-center items-center mb-1 max-w-[200px] md:max-w-[416px] lg:max-w-[unset] mx-auto">
                    <p class="text-11 leading-6 md:text-20 md:leading-28  text-blue text-center">Oudere berichten</p>
                </div>
                <div class="max-w-[200px] md:max-w-[416px] lg:max-w-[unset] mx-auto lg:m-0">
                <?php

                $url = "https://api.socialschools.eu/apiv1/public/194801398/post?number_of_items=4&page=2&community_and_descendants=False&only_descendants=False";
                
                $response = file_get_contents($url);
                
                if($response !== false){
                    $data = json_decode($response);
                    $counter = 0;
                    $max = 4;
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
                                if ($response_document !== false) {
                                    $data_document = json_decode($response_document);
                                } else {
                                    // Handle the error here
                                    echo "Error: Failed to retrieve document data.";
                                    exit;
                                }

                                if (isset($data_document->results[0]->document)) {
                                    $document = $data_document->results[0]->document;
                                } else {
                                    $document = null;
                                }
                            ?>
                                <button data-modal-id="modal-<?= $counter ?>" class="w-[200px] md:w-[416px] h-[50px] md:h-[85px] bg-blue rounded-[7px] md:rounded-[15px] py-1 md:py-[25px] px-1 md:px-[35px] flex space-x-1 md:space-x-3 lg:w-full mb-1 last-of-type:mb-0 items-center">
                                    <span class="block w-[17px]  md:w-[35px]">
                                    <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/vergrootglas.php'; ?>
                                    </span>
                                    <span class="flex flex-col items-start">
                                    <span class="text-11 leading-13 md:text-20 md:leading-24 text-white text-left md-[5px] md:mb-[10px]"><?= ucfirst($truncatedText) ?></span>
                                    <span class="text-8 leading-10 md:text-16 md:leading-19 text-white">| <?= $formattedDate ?></span>
                                    </span>
                                </button>

                                <div id="modal-<?= $counter ?>" class="modal hidden  fixed top-0 left-0 right-0 w-screen h-screen bg-[#707070]/[0.5] z-[60] close-modals">
                                    <div class="modal-content max-w-[95vw] w-[718px] max-h-[80vh] overflow-scroll bg-white p-2 md:p-4 rounded-[15px] m-auto">
                                            <div>
                                            <div class="flex justify-between pb-2">
                                                <h4 class="text-red text-20 leading-25 md:text-30 md:leading-36 font-bold max-w-[420px]"><?= ucfirst($title) ?></h4>
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
                                            <?php if (isset($document)) { ?>
                                                <div class="pt-4"></div>
                                                <a class="font-bold text-blue px-[25px] bg-blue/20 h-[44px] flex justify-center items-center w-fit rounded-[9px]" href="<?= $document ?>" target="_blank" rel="noopener noreferrer">
                                                    <span class="block mr-2">
                                                        <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/download.php'; ?>
                                                    </span>
                                                    <span class="block">Download bijlage</span>
                                                </a>
                                            <?php } ?>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                }
                ?>
                </div>
            </div>
        </div>
    </section>


<?php endif; ?>
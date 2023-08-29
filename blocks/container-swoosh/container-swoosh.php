<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>


     <!-- Nieuws en agenda -->
    <section class="bg-[#F8F8F8] relative z-[20] ">
      <a onclick="scrollToTop()" class="absolute top-0 left-1/2 transform -translate-x-1/2 hidden md:flex cursor-pointer">
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
        <!-- END --- background swoosh -->

        <!-- inner blocks  -->
       <div class="min-h-[50vh]">
         <?php include get_template_directory() . '/componenten/innerblocks.php'; ?>
       </div>


      <div class="bg-[#F8F8F8] w-screen">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1441.84 113.47" style="enable-background:new 0 0 1441.84 113.47" xml:space="preserve">
            <path d="M950.51 53.85C417.98 175.16-.24 73.8-.24 73.8v39.67h1442.08V6.04c-283.77-2.36-464.86 41.01-491.33 47.81z" style="fill:#fff"/>
        </svg>
      </div>
    </section>


<?php endif; ?>
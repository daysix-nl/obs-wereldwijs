<?php
if (isset($block['data']['preview_image_help'])): /* rendering in inserter preview  */

    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';

else: /* rendering in editor body */

    ?>


<!-- SUBTITEL -->
<section>
    <section class="pt-[60px] md:pt-[80px]"></section>
</section>


<?php endif; ?>
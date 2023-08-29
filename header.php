<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="stylesheet" href=https://use.typekit.net/rck3ktr.css>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset='UTF-8'>
</head>
<body <?php body_class( 'page-block relative' ); ?>>

<header  class="flex justify-between px-3 md:px-[45px] py-1 lg:py-[25px] fixed z-40 w-screen top-0 right-0 left-0 ">
            <div class="mx-auto lg:mx-0 pl-2 md:pl-0 lg:hidden">
                <a href="/">
                    <?php  include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/logo.php'; ?>
                </a>
            </div>
        <div class="lg:flex space-x-5 hidden">
            <div class="mx-auto lg:mx-0 pl-2 md:pl-0">
                <a href="/">
                    <?php  include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/logo.php'; ?>
                </a>
            </div>
            <nav class="hidden lg:flex">
                <ul class="flex flex-row space-x-3 xl:space-x-4">
                    <?php if( have_rows('navbar_url', 'option') ): ?>
                        <?php while( have_rows('navbar_url', 'option') ): the_row();  ?>
                            <?php 
                            $link = get_sub_field('pagina');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <li>
                                    <a class="text-18 leading-22 font-normal text-blue hover:outline-1 hover:transition-all hover:underline underline-offset-4 decoration-red" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    <div class="flex-col hidden lg:flex space-y-1">
        <?php 
        $link = get_field('button_aanmelden', 'option');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="relative bg-blue flex justify-center items-center h-3 w-[160px] text-white rounded-[3px] text-13 leading-16" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"> 
                <span class="absolute -translate-y-1/2 top-1/2 left-1">
                    <?php  include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/ster.php'; ?>
                </span>
                <span class=""><?php echo esc_html( $link_title ); ?></span>
            </a>
        <?php endif; ?>

        <?php 
        $link = get_field('button_verlofaanvraag', 'option');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="relative bg-blue flex justify-center items-center h-3 w-[160px] text-white rounded-[3px] text-13 leading-16" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"> 
                <span class="absolute -translate-y-1/2 top-1/2 left-1">
                    <?php  include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/ster.php'; ?>
                </span>
                <span class=""><?php echo esc_html( $link_title ); ?></span>
            </a>
        <?php endif; ?>
    </div>
    
    <button class="flex lg:hidden w-[20px] modal-mobile-nav-open mt-[15px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="23.498" height="17.46" viewBox="0 0 23.498 17.46">
            <g id="Group_334" data-name="Group 334" transform="translate(-326.638 -29)">
                <line id="Line_28" data-name="Line 28" x2="20.498" transform="translate(328.138 30.5)" fill="none" stroke="#054f9c" stroke-linecap="round" stroke-width="3"/>
                <line id="Line_29" data-name="Line 29" x2="20.498" transform="translate(328.138 37.73)" fill="none" stroke="#054f9c" stroke-linecap="round" stroke-width="3"/>
                <line id="Line_30" data-name="Line 30" x2="20.498" transform="translate(328.138 44.96)" fill="none" stroke="#054f9c" stroke-linecap="round" stroke-width="3"/>
            </g>
        </svg>
    </button>
</header>

<div class="fixed top-0 right-0 z-50 w-full h-full bg-[#707070]/[0.5] overlay-mobile-navbar modal-mobile-nav-overlay lg:hidden"></div>

<div class="bg-white z-[60] rounded-[10px] fixed top-2 md:top-[25px] right-2 left-2 md:left-4 md:right-4 pt-2 px-2 pb-[25px] modal-mobile-nav lg:hidden">
    <nav class="relative">
        <button class="absolute top-1 right-1 modal-mobile-nav-close">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/close.php'; ?>
        </button>
        <ul class="flex flex-col">
            <?php if( have_rows('navbar_url', 'option') ): ?>
                <?php while( have_rows('navbar_url', 'option') ): the_row();  ?>
                    <?php 
                    $link = get_sub_field('pagina');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <li class="h-[40px] flex items-center first-of-type:border-t-[0px] border-t-[1px] border-[#A2A2A2]/[0.25]"><a class="text-18 leading-22 font-normal text-red" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></li>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php 
            $link = get_field('button_aanmelden', 'option');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <li class="h-[40px] flex items-center border-t-[1px]">
                    <a class="text-18 leading-22 font-normal text-blue flex items-center space-x-[15px]" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/ster-blue.php'; ?>
                        <span class="block"><?php echo esc_html( $link_title ); ?></span>
                    </a>
                </li>
            <?php endif; ?>

            <?php 
            $link = get_field('button_verlofaanvraag', 'option');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <li class="h-[40px] flex items-center border-t-[1px]">
                    <a class="text-18 leading-22 font-normal text-blue flex items-center space-x-[15px]" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php include $_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/obs-wereldwijs/img/icons/ster-blue.php'; ?>
                        <span class="block"><?php echo esc_html( $link_title ); ?></span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>

<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package MagCrunch
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="/view/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/view/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/view/favicons/favicon-16x16.png">
    <link rel="manifest" href="/view/favicons/site.webmanifest">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport"
          content="initial-scale=1.0,width=device-width,user-scalable=no,minimum-scale=1.0,maximum-scale=1.0">
    <meta http-equiv="cleartype" content="on">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <script type="text/javascript"
            src="//platform-api.sharethis.com/js/sharethis.js#property=58bd3a51171794001245044d&product=sticky-share-buttons"></script>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <?php /* was <?php echo home_url() ?> for referencing css */ ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri();?>/js/html5.js"></script><![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'magcrunch'); ?></a>
<div class="body-wrp">
<header id="dark">
    <div class="wrapper headerWrapper">
        <div class="logo">
            <a href="https://trembit.com/">
                <img alt="logo" id="whiteLogo" class="logoImage" src="/blog/wp-content/themes/magcrunch/view/images/logo@2x.svg" width="151" height="24">
            </a>
            <div class="stand-by">
                <a href="https://standforukraine.com/"><img alt="logo" src="/blog/wp-content/themes/magcrunch/view/images/fl_ua_n.png"></a>
                <a href="https://standforukraine.com/"><span>Stand For Ukraine</span></a>
            </div>
        </div>
        <div class="toggle header-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav>
            <ul id="nav" class="hide">
                <li class="menu-item drop-el drop-els1">
                    <a class="drop-r">Services</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="mob drop-tr drop-r" width="22.276" height="12" viewBox="0 0 22.276 12">
                        <defs>
                            <style>
                                .a {
                                    fill: #fff;
                                }
                            </style>
                        </defs>
                        <g transform="translate(22.275 -102.296) rotate(90)"><g transform="translate(102.298 0)"><path class="a" d="M104.367,11.144l9.68-9.68A.857.857,0,0,0,112.835.251L102.548,10.537a.857.857,0,0,0,0,1.212l10.286,10.286a.857.857,0,0,0,1.212-1.212Z" transform="translate(114.296 22.275) rotate(180)" /></g></g>
                    </svg>
                    <ul class="mob">
                        <li><a href="https://trembit.com/web-development.html"><img alt="web" src="/blog/wp-content/themes/magcrunch/view/images/computer.svg" height="16" style="padding-right:12px; height: 16px;">Web development</a></li>
                        <li><a href="https://trembit.com/mobile-development.html"><img alt="mobile development" src="/blog/wp-content/themes/magcrunch/view/images/software-development.svg" height="16" style="padding-right:17px; height: 16px;">Mob development</a></li>
                        <li><a href="https://trembit.com/software-development.html"><img alt="sowtwar development" src="/blog/wp-content/themes/magcrunch/view/images/setting.svg" height="16" style="padding-right:15px; height: 16px;">Web Development kit</a></li>
                        <li><a href="https://trembit.com/ui-ux.html"><img alt="art-and-design" src="/blog/wp-content/themes/magcrunch/view/images/art-and-design.svg" height="16" style="padding-right:15px; height: 16px;">UX/UI</a></li>
                        <li><a href="https://trembit.com/qa.html"><img alt="qa" src="/blog/wp-content/themes/magcrunch/view/images/virus-warning(1).svg" height="16" style="padding-right:15px; height: 16px;">QA</a></li>
                        <li><a href="https://trembit.com/rd.html"><img alt="rd" src="/blog/wp-content/themes/magcrunch/view/images/search(2).svg" height="16" style="padding-right:15px; height: 16px;">R&amp;D </a></li>
                    </ul>
                    <div class="drop-it">
                        <div class="wrapper headerWrapper">
                            <div class="dr-ul ind-r">
                                <ul>
                                    <li>
                                        <a href="https://trembit.com/web-development.html">
                                            <img alt="computer" src="/blog/wp-content/themes/magcrunch/view/images/computer.svg" height="16" style="padding-right:15px; height: 16px;">Web development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://trembit.com/mobile-development.html">
                                            <img alt="software development" src="/blog/wp-content/themes/magcrunch/view/images/software-development.svg" height="16" style="padding-right:21px; height: 16px;">Mob development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://trembit.com/software-development.html">
                                            <img alt="setting" src="/blog/wp-content/themes/magcrunch/view/images/setting.svg" height="16" style="padding-right:19px; height: 16px;">Web Development kit
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="https://trembit.com/ui-ux.html">
                                            <img alt="art-and-design" src="/blog/wp-content/themes/magcrunch/view/images/art-and-design.svg" height="16" style="padding-right:15px; height: 16px;">UX/UI
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://trembit.com/qa.html">
                                            <img alt="qa" src="/blog/wp-content/themes/magcrunch/view/images/virus-warning(1).svg" height="16" style="padding-right:15px; height: 16px;">QA
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://trembit.com/rd.html">
                                            <img alt="rd" src="/blog/wp-content/themes/magcrunch/view/images/search(2).svg" height="16" style="padding-right:15px; height: 16px;">R&D
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item"><a class="menuItem" href="https://trembit.com/portfolio.html">Case studies</a></li>
                <li class="menu-item drop-el drop-els3">
                    <a class="drop-r3">Industries</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="mob drop-tr drop-r3" width="22.276" height="12" viewBox="0 0 22.276 12">
                        <defs>
                            <style>
                                .a {
                                    fill: #fff;
                                }
                            </style>
                        </defs>
                        <g transform="translate(22.275 -102.296) rotate(90)"><g transform="translate(102.298 0)"><path class="a" d="M104.367,11.144l9.68-9.68A.857.857,0,0,0,112.835.251L102.548,10.537a.857.857,0,0,0,0,1.212l10.286,10.286a.857.857,0,0,0,1.212-1.212Z" transform="translate(114.296 22.275) rotate(180)" /></g></g>
                    </svg>
                    <ul class="mob">
                        <li><a class="menuItem" href="https://trembit.com/industries/webrtc-development.html"><img alt="webrtc development" src="/blog/wp-content/themes/magcrunch/view/images/computer.svg" height="16" style="padding-right:12px; height: 16px;">WebRTC</a></li>
                        <li><a href="https://trembit.com/industries/telemedicine-app-development.html"><img alt="telemedicine app development" src="/blog/wp-content/themes/magcrunch/view/images/software-development.svg" height="16" style="padding-right:17px; height: 16px;">Telemedicine App Development</a></li>
                        <li><a href="https://trembit.com/industries/fitness-app-development.html"><img alt="fitness app development" src="/blog/wp-content/themes/magcrunch/view/images/setting.svg" height="16" style="padding-right:15px; height: 16px;">Fitness App Development</a></li>
                        <li><a href="https://trembit.com/industries/dating-app-development.html"><img alt="dating app development" src="/blog/wp-content/themes/magcrunch/view/images/art-and-design.svg" height="16" style="padding-right:15px; height: 16px;">Dating App Development</a></li>
                        <li><a href="https://trembit.com/industries/video-chat-app-development.html"><img alt="video chat app" src="/blog/wp-content/themes/magcrunch/view/images/virus-warning(1).svg" height="16" style="padding-right:15px; height: 16px;">Video Chat App Development</a></li>
                    </ul>
                    <div class="drop-it">
                        <div class="wrapper headerWrapper">
                            <div class="dr-ul ind-r">
                                <ul>
                                    <li>
                                        <a href="https://trembit.com/industries/webrtc-development.html">
                                            <img alt="webrtc" src="/blog/wp-content/themes/magcrunch/view/images/webrtc.svg" height="16" style="padding-right:15px; height: 16px;">WebRTC
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://trembit.com/industries/telemedicine-app-development.html">
                                            <img alt="telemedicine app" src="/blog/wp-content/themes/magcrunch/view/images/telemedicine-app.svg" height="16" style="padding-right:21px; height: 16px;">Telemedicine App Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://trembit.com/industries/fitness-app-development.html">
                                            <img alt="fitness app" src="/blog/wp-content/themes/magcrunch/view/images/fitness-app.svg" height="16" style="padding-right:19px; height: 16px;">Fitness App Development
                                        </a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="https://trembit.com/industries/dating-app-development.html">
                                            <img alt="datying app" src="/blog/wp-content/themes/magcrunch/view/images/datying-app.svg" height="16" style="padding-right:15px; height: 16px;">Dating App Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://trembit.com/industries/video-chat-app-development.html">
                                            <img alt="video chat" src="/blog/wp-content/themes/magcrunch/view/images/video-chat.svg" height="16" style="padding-right:15px; height: 16px;">Video Chat App Development
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item drop-el drop-els2">
                    <a class="menuItem drop-r2">Solutions</a>
                    <svg xmlns="http://www.w3.org/2000/svg" class="mob drop-tr drop-r2" width="22.276" height="12" viewBox="0 0 22.276 12">
                        <defs>
                            <style>
                                .a {
                                    fill: #fff;
                                }
                            </style>
                        </defs>
                        <g transform="translate(22.275 -102.296) rotate(90)"><g transform="translate(102.298 0)"><path class="a" d="M104.367,11.144l9.68-9.68A.857.857,0,0,0,112.835.251L102.548,10.537a.857.857,0,0,0,0,1.212l10.286,10.286a.857.857,0,0,0,1.212-1.212Z" transform="translate(114.296 22.275) rotate(180)" /></g></g>
                    </svg>
                    <ul class="mob">
                        <li><a href="https://trembit.com/vatra.html"><img alt="vatra" src="/blog/wp-content/themes/magcrunch/view/images/LOGOVatra.png" height="16" style="padding-right:12px; height: 16px;"></a></li>
                        <li><a href="https://trembit.com/stusan.html"><img alt="stusan" src="/blog/wp-content/themes/magcrunch/view/images/Stusanlogo.svg" height="16" style="padding-right:17px; height: 16px;"></a></li>
                    </ul>
                    <div class="drop-it">
                        <div class="wrapper headerWrapper">
                            <div class="dr-ul">
                                <ul class="sol-n">
                                    <li style="height: 58px;">
                                        <a href="https://trembit.com/vatra.html" style="margin-bottom: 10px;">
                                            <img alt="LOGOVatra" src="/blog/wp-content/themes/magcrunch/view/images/LOGOVatra.png" height="39" style="padding-right:15px;">
                                        </a>
                                    </li>
                                    <li style="width: 210px;"><a href="https://trembit.com/vatra.html" style=" font: normal normal normal 14px/19px Lato;">A White Label video conferencing solution suitable for large calls - up to 30 participants.</a></li>
                                </ul>
                                <ul class="sol-n">
                                    <li>
                                        <a href="https://trembit.com/stusan.html" style="margin-bottom: 10px;">
                                            <img alt="LogoStusan" src="/blog/wp-content/themes/magcrunch/view/images/LogoStusan.png" height="39" style="padding-right:15px;">
                                        </a>
                                    </li>
                                    <li style="width: 210px;"><a href="https://trembit.com/stusan.html" style="font: normal normal normal 14px/19px Lato;">A White Label WebRTC P2P video conferencing solution. Suitable for 1 on 1 calls, and up to 5 participants.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item"><a class="menuItem" href="https://trembit.com/about.html">About us</a></li>
                <li class="menu-item"><a class="menuItem" href="/blog/">Blog</a></li>
                <li class="menu-item"><a class="menuItem" href="https://trembit.com/contacts.html">Contacts</a></li>
            </ul>
        </nav>

    </div>
</header>
<?php // <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_id' => 'nav', 'menu_class' => 'nav')); ?>

<?php if (of_get_option('announcement')) : ?>
    <div class="announcement announcement-grey-background">
        <div class="lc">
            <div class="announcement-bg">
                <div class="announcement_left">
                    <a href="<?php echo esc_url(of_get_option('announcement_link')); ?>">
							<span class="announcement-text">
								<strong class="announcement-headline"><?php echo of_get_option('announcement_title'); ?></strong>&nbsp;<?php echo of_get_option('announcement_subtitle'); ?>
                                <span class="announcement-link-text"></span>
							</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div role="main" <?php ct_wrapper_class(); ?>>

<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

?>
<section class="footer-wrapper">
    <footer class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-3 offset-lg-1 offset-0">
                        <div class="ist-section-title-1">International <br> School of Tianjin</div>
                    </div>
                    <div class="col-12 col-lg-3 offset-lg-1 offset-0 p-md-t-40">
                        <ul>
                            <li class="footer-label">CONTACT</li>
                            <li class="footer-txt">
                                <a target="_blank" href="https://www.google.it/maps/place/%E5%A4%A9%E6%B4%A5%E7%BB%8F%E6%B5%8E%E6%8A%80%E6%9C%AF%E5%BC%80%E5%8F%91%E5%8C%BA%E5%9B%BD%E9%99%85%E5%AD%A6%E6%A0%A1%E5%A4%A9%E6%B4%A5%E5%88%86%E6%A0%A1/@39.0318881,117.2732761,17z/data=!3m1!4b1!4m5!3m4!1s0x35ee07d4c5507081:0x9b43ae43ed0288f7!8m2!3d39.031884!4d117.275851">
                                    <span>22 Weishan Nan Lu, Shanggang</span><br>
                                    <span>Jinan District, Tianjin</span><br>
                                    People's Republix of China, 300350 <br>
                                </a>
                                <a target="_blank" href="tel:+862228592001">
                                    <div class="footer-num">Tel. +86 22 2859 2001</div>
                                </a>

                            </li>
                            <li class="p-b-30">
                                <div class="footer-label">SCHOOL HOURS</div>
                                <div class="footer-txt">8:10 am -3:10 pm</div>
                            </li>
                            <li>
                                <div class="footer-label">ADMINISTRATOR</div>
                                <div class="footer-txt">7:30 am - 4:30 pm</div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-2 p-md-t-40">
                        <ul class="social-links">
                            <li class="footer-label">RESOURCES</li>
                            <li>
                                <a href="<?= get_permalink(217); ?>">Contact us</a>
                            </li>
                            <li>
                                <a href="<?= get_permalink(219); ?>">
                                    Work with us
                                </a>
                            </li>
                            <li>
                                <a href="<?= get_permalink(231); ?>">
                                    News & Events
                                </a>
                            </li>
                            <li>
                                <a href="<?= get_permalink(215); ?>">
                                    Downloads
                                </a>
                            </li>
                            <li>
                                <a href="<?= get_permalink(221); ?>">
                                    School Calendar
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-12 p-md-t-40">
                        <ul class="social-links">
                            <li class="footer-label">
                                FOLLOW US
                            </li>
                            <li>
                                <a id="weChatBtn">
                                    WeChat
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.facebook.com/internationalschooltianjin">
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.youtube.com/channel/UCs433tTYaQLRXTNEs0X0J4g">
                                    YouTube
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://twitter.com/I_S_Tianjin">
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://cn.linkedin.com/school/international-school-of-tianjin/">
                                    Linkedin
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.instagram.com/istianjin/">
                                    Instagram
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="conteiner-fluid" style="position:relative;bottom:1px;">
        <div class="row">
            <div class="col-12" style="background-color:#fff;">
                <img style="margin-top:60px;" class="w-100 lazy d-md-block d-none" data-src="<?= get_template_directory_uri() . '/resources/gifs/footer_gif_desktop.gif'; ?>" alt="gif">
                <img style="margin-top:60px;" class="w-100 lazy d-block d-md-none" data-src="<?= get_template_directory_uri() . '/resources/gifs/footer_gif_mobile.gif'; ?>" alt="gif">
            </div>
        </div>
    </div>
    <div class="container-fluid p-t-20 p-b-20" style="background-color:#fff;">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xs-12">
                <div class="row align-items-center justify-content-between post-footer">
                    <div class="cookie-container col-lg-4 col-xs-12 order-lg-1 order-2">
                        <div>
                            <a href="">Privacy</a> & <a href="">Policy Statements</a>
                        </div>
                        <div>
                            <a href="">Credits</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-lg-end justify-content-center align-items-center col-lg-8 col-xs-12 order-1 order-lg-2">
                        <a class="footer-svgs" target="_blank" href="https://www.ibo.org/">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/icons/ib-logo.svg' ?>" alt="">
                        </a>
                        <a class="footer-svgs" target="_blank" href="https://www.cois.org/">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/icons/cis-logo.svg' ?>" alt="">
                        </a>
                        <a class="footer-svgs" target="_blank" href="https://www.acswasc.org/">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/icons/wasc-footer-logo.svg' ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="qr-code-wechat-modal">
    <div class="layover"></div>
    <div class="content">
        <div class="close-qr-code-modal">
            <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/xmark-solid.svg'; ?>" alt="">
        </div>
        <img src="<?= get_field('field_6374abaef7fac' , 'option') ?>" alt="">
    </div>
</div>

</div>

<?php wp_footer(); ?>

</body>

</html>
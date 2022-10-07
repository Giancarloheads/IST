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
        <div class="col-lg-10 col-xs-11">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="ist-section-title-1">International <br> School of Tianjin</div>
                </div>
                <div class="col-12 col-lg-4 p-md-t-40">
                    <ul>
                        <li class="footer-label">CONTACT</li>
                        <li class="footer-txt">
                            <span>22 Weishan Nan Lu, Shanggang</span><br>
                            <span>Jinan District, Tianjin</span><br>
                            People's Republix of China, 300350 <br>
                            <div class="footer-num">Tel. +86 22 2859 2001</div>

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
                        <li class="footer-label" >RESOURCES</li>
                        <li>
                            <a href="">Contact us</a>
                        </li>
                        <li>
                            <a href="">
                                Work with us
                            </a>
                        </li>
                        <li>
                            <a href="">
                                News & Events
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Downloads
                            </a>
                        </li>
                        <li>
                            <a href="">
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
                            <a href="">
                                WeChat
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="">
                                YouTube
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Twitter
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Linkedin
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Instagram
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="conteiner-fluid">
    <div class="row">
        <div class="col-12 d-none d-lg-block" style="background-color:#fff;">
            <img class="w-100" src="<?= get_template_directory_uri() .'/resources/img/footer-bg.png'; ?>" alt="">
        </div>
        <div class="col-12 d-lg-none d-block" style="background-color:#fff;">
            <img class="w-100" src="<?= get_template_directory_uri() .'/resources/img/footer-mobile-img.png'; ?>" alt="">
        </div>
    </div>
</div>
<div class="container-fluid p-t-40 p-b-40" style="background-color:#fff;">
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
                    <img src="<?= get_template_directory_uri() . '/resources/icons/ib-logo.svg' ?>" alt="">
                    <img src="<?= get_template_directory_uri() . '/resources/icons/cis-logo.svg' ?>" alt="">
                    <img src="<?= get_template_directory_uri() . '/resources/icons/wasc-footer-logo.svg' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</section>

</div>

<?php wp_footer(); ?>

</body>
</html>

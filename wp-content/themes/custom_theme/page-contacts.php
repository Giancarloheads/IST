<?php
get_header();
?>

<section class="container-fluid p-t-180">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 col-12 text-center title-nav-section ist-section-title-2 p-b-md-40">
                    Contact us
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-120">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="row">
                <div class="col-lg-4 col-12 order-2 order-lg-1">
                    <ul class="contacts-list">
                        <li>ADDRESS</li>
                        <li class="lang-contacts p-b-5">English</li>
                        <li>22 Weishan Nan Lu</li>
                        <li>Shuanggang</li>
                        <li>Jinnan District</li>
                        <li>Tianjin, 300350</li>
                        <li>People's Republic of China</li>
                        <li class="lang-contacts p-t-20 p-b-5">Chinese</li>
                        <li class="p-b-15">天津经济技术开发区国际学校天津分校</li>
                        <li class="p-b-15">中国天津市津南区 (双港) 微山南路22号 </li>
                        <li class="p-b-15">邮编: 300350</li>
                        <li class="lang-contacts p-t-20 p-b-5">Korean</li>
                        <li>톈진 진난취(솽강) 웨이샨난루 300350</li>
                    </ul>
                    <ul class="contacts-list">
                        <li>CONTACTS</li>
                        <li>
                            Email: <a href="info@istianjin.org.cn">info@istianjin.org.cn</a>
                        </li>
                        <li>Tel: +86 22 2859 2001</li>
                    </ul>
                    <ul class="contacts-list">
                        <li>SCHOOL HOURS</li>
                        <li>8:10 am - 3:10 pm </li>
                    </ul>
                    <ul class="contacts-list">
                        <li>ADMINISTRATION</li>
                        <li>7:30 am - 4:30 pm</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-12 order-1 order-lg-2">
                    <div class="form-title">
                        Fill out the form to request any information about the institute, programs, organization or enrollment process. We will get back to you as soon as possible!
                    </div>
                    <form id="contacts-page-form" action="" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-6 col-12">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group col-lg-6 col-12">
                                <input type="text" class="form-control" placeholder="Surname">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="mail" class="form-control" placeholder="E-mail address">
                        </div>
                        <div class="form-group">
                            <textarea name="message" cols="30" rows="5" placeholder="Your message"></textarea>
                        </div>
                        <div class="form-group">
                            <a class="p-b-25 d-flex policy-anchor" href="<?= get_permalink(); ?>">
                                Read the Privacy Policy    
                            </a>
                            <div class="form-check p-b-25 d-flex justify-content-start">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                   I have read the Privacy Policy and consent to processing of my personal data
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary contacts-submit">
                            SEND
                            <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include 'elements/about-pre-footer.php';
get_footer();
?>
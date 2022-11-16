<?php
get_header();
include_once 'elements/nav-pages-programs.php';
?>

<section class="container-fluid p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-lg-6 col-12 ist-par-about-1">
                    IST is proud to be the only three program IB World School in Tianjin. The IB offers high quality programs to a worldwide community of more than 5400 schools in 158 countries. IST was ranked #6 in China and #69 in the world on the basis of its IB Diploma results.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-t-60 p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row g-4 programs-container">
                <div class="col-lg-4 col-12 d-flex">
                    <div class="programme-container">
                        <div>
                            <img src="<?= get_template_directory_uri() . '/resources/programs/primary.svg' ?>" alt="">
                            <div class="par">
                                for students aged 3 to 11 years, focuses on the development of the whole child as an inquirer, both in the classroom and in the world outside.
                            </div>
                        </div>
                        <div class="p-t-40 p-b-20">
                            <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 d-flex">
                    <div class="programme-container">
                        <div>
                            <img src="<?= get_template_directory_uri() . '/resources/programs/middle.svg' ?>" alt="">
                            <div class="par">
                                for students aged 12 to 16 years, provides a framework of academic challenge that encourages students to embrace and understand the connection between traditional subjects and the real world, and become critical and reflective thinkers.
                            </div>
                        </div>
                        <div class="p-t-40 p-b-20">
                            <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 d-flex">
                    <div class="programme-container">
                        <div>
                            <img src="<?= get_template_directory_uri() . '/resources/programs/diploma.svg' ?>" alt="">
                            <div class="par">
                                for students aged 17 and above, is an academically challenging and balanced program of education with final examinations that prepares students for success at university and in life beyond.
                            </div>
                        </div>
                        <div class="p-t-40 p-b-20">
                            <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-60">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row p-t-60">
                <div class="col-lg-8 offset-lg-2 col-12 offset-0 text-center">
                    <h1 style="color:#000;position:relative;z-index:9999">INQUIRY-DRIVEN, STUDENT-CENTERED LEARNING</h1>
                </div>
                <div class="col-12 scrreveal d-lg-block d-none" style="position:relative;bottom:40px;">
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/programs/overview-top-img.jpg'; ?>" alt="">
                </div>
                <div class="col-12 d-lg-none d-block scrreveal" style="position:relative;bottom:40px;">
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/about/overview-mobile-1.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-lg-6 col-12 p-b-60">
                    <div class="collapse-container-single">
                        <div data-bs-toggle="collapse" href="#elementary-collapse-single" role="button" aria-expanded="false" aria-controls="elementary-collapse-single">
                            <div class="single-collapse-par-big-txt">
                                IST is divided into two divisions: Elementary (0 years to Grade 5) and Secondary (Grade 6 to Grade 12), with the elementary school housed primarily in the Qin Buidling and the secondary school primarily based in the Han Building. <br>
                            </div>
                        </div>
                        <div class="collapse" id="elementary-collapse-single">
                            <div class="beliefs-collapse-par single-collapse-par">
                                Each school division is headed by a principal who is supported by his or her own leadership team, including IB Coordinators, school-wide coordinators, subject chairs and sub-divisional coordinators. One of the principals acts as the Deputy Director. Both principals report to the Director.
                            </div>
                        </div>
                        <div class="single-collapse-trigger d-flex justify-content-start align-items-center" data-bs-toggle="collapse" href="#elementary-collapse-single" role="button" aria-expanded="false" aria-controls="elementary-collapse-single">
                            Read more
                            <img class="collapse-single-svg-plus" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/plus.svg' ?>" alt="">
                            <img class="collapse-single-svg-minus" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/minus.svg' ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="overview-edu-container">
                        <div>
                            <div class="title">Elementary <br> Education </div>
                            <div class="subtitle">0 to 11 years</div>
                        </div>
                        <div class="link-list">
                            <ul>
                                <li>
                                    <a class="ist-cta" href="<?= get_permalink(144); ?>">
                                        Baby Dragon Playgroup 0-3 years
                                        <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="ist-cta" href="<?= get_permalink(145); ?>">
                                        PYP Early Years KG1 - KG2
                                        <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="ist-cta" href="<?= get_permalink(143); ?>">
                                        PYP KG3 - Grade 5
                                        <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="overview-edu-container">
                        <div>
                            <div class="title">Secondary <br> Education </div>
                            <div class="subtitle">11 to 19 years</div>
                        </div>
                        <div class="link-list">
                            <ul>
                                <li>
                                    <a class="ist-cta" href="<?= get_permalink(146); ?>">
                                        MYP Grades 6 - 10
                                        <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a class="ist-cta" href="<?= get_permalink(147); ?>">
                                        DP Grades 11 - 12
                                        <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--EXPANDED IMG -->
<section style="background-color:#fff!important">
    <div class="expand-img-container container-1-expand">
        <div id="img-1-home" style="background-image:url('<?= get_template_directory_uri() . '/resources/programs/overview-expand.jpg';  ?>')"></div>
        <div class="img-1-overlay"></div>
        <div class="img-1-caption">
            <div class="title">LEARNING SUPPORT</div>
            <div class="img-2-cta">
                <a href="#" class="ist-cta justify-content-center" href="">Learn more<img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt=""> </a>
            </div>
        </div>
    </div>
</section>


<?php
include_once 'elements/key-resources.php';
include_once 'elements/section-related.php';
?>

<?php
include_once 'elements/about-pre-footer.php';
get_footer();
?>
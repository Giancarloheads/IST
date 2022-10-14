<?php
get_header();
include_once 'elements/nav-pages-infos.php';
?>

<section class="container-fluid p-b-60">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <div class="col-6 ist-par-about-1">
                    Our school’s programmes and operations are fully accredited and endorsed by three of the world’s foremost international school educational agencies: The Council of International Schools, The Western Association of Schools and Colleges, and The International Baccalaureate, or IB.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-60">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <div class="col-12">
                    <div class="accreditation-collapse" data-collapse-pos="1" style="border-top: solid 1px black">
                        <div class="row" data-bs-toggle="collapse" href="#accreditation-collapse-1" role="button" data-collapse-pos="1" aria-expanded="false" aria-controls="accreditation-collapse-1">
                            <div class="col-6">
                                <img src="<?= get_template_directory_uri() . '/resources/icons/ib_blue.svg' ?>" alt="">
                            </div>
                            <div class="accreditation-collapse-title-container col-6">
                                <div class="accreditation-collapse-title">
                                    International Baccalaureate Authorization
                                </div>
                                <img id="accreditation-collapse-1-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="accreditation-collapse-1">
                        <div class="row">
                            <div class="offset-6 col-6 p-0">
                                <div class="acr-par">IST is the only fully authorized, three program ‘International Baccalaureate (IB) World School’ in Tianjin. The IB, based in Geneva, is the provider of the world’s most prestigious curriculum for international schools. There are three IB programs, as follows:</div>
                                <a href="" class="acr-cta">Primary Years Program <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt=""></a>
                                <div class="acr-subtitle">for student aged 3 to 11 years</div>
                                <a href="" class="acr-cta">Middle Years Program <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt=""></a>
                                <div class="acr-subtitle">for student aged 12 to 16</div>
                                <a href="" class="acr-cta">Diploma Program <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt=""> </a>
                                <div class="acr-subtitle">for student aged 17 and above</div>
                                <div class="acr-par">Schools seeking to teach any of the IB programs must undertake a rigorous process called Authorization, which is similar to Accreditation but with a focus on curriculum and teaching standards only. The process of authorization takes approximately 2 years for each IB program. IST has been authorized since May 2002</div>
                            </div>
                        </div>
                    </div>
                    <div class="accreditation-collapse" data-collapse-pos="2" style="border-top: solid 1px black">
                        <div class="row" data-bs-toggle="collapse" href="#accreditation-collapse-2" role="button" data-collapse-pos="2" aria-expanded="false" aria-controls="accreditation-collapse-2">
                            <div class="col-6 d-flex flex-column align-items-start justify-content-start">
                                <img style="height:55px; width:auto;" src="<?= get_template_directory_uri() . '/resources/icons/cis-logo.svg' ?>" alt="">
                                <img class="m-t-60" style="height:50px; width:auto;" src="<?= get_template_directory_uri() . '/resources/icons/wasc-logo.svg'; ?>" alt="">
                            </div>
                            <div class="accreditation-collapse-title-container col-6">
                                <div class="accreditation-collapse-title">
                                    International School Accreditation
                                </div>
                                <img id="accreditation-collapse-2-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="accreditation-collapse-2">
                        <div class="row">
                            <div class="offset-6 col-6 p-0">
                                <div class="acr-par">
                                    The only sure guarantee of the quality of an international or overseas school is called Accreditation. The process of accreditation normally takes a period of about two years, and includes preliminary inspection, the writing of a self-study, a full inspection by a team of assessors, followed by a final decision by the accrediting agency. Once accredited, the process of accreditation renewal is ongoing.
                                    Accreditation and inspection are not normally mandatory for international and overseas schools, but are considered essential by schools seeking excellence.
                                </div>
                                <div class="acr-par p-0">
                                    IST HAS DUAL INTERNATIONAL SCHOOL ACCREDITATION <br>
                                    The International School of Tianjin is firmly established as one of the premier international schools in China. A significant factor in the development of this reputation has been the school’s efforts and achievements in gaining international accreditation by not just one, but by two of the world’s leading accreditation agencies. IST is accredited both by the Western Association of Schools and Colleges (WASC) in the USA and the Council of International Schools (CIS) in Europe.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accreditation-collapse" data-collapse-pos="3" style="border-top: solid 1px black">
                        <div class="row" data-bs-toggle="collapse" href="#accreditation-collapse-3" role="button" data-collapse-pos="3" aria-expanded="false" aria-controls="accreditation-collapse-3">
                            <div class="col-6 d-flex flex-column align-items-start justify-content-start">
                                <div class="d-flex align-items-center justify-content-between w-75 p-b-30">
                                    <img style="height:120px; width:auto;" src="<?= get_template_directory_uri() . '/resources/icons/ear-cos-icon.svg' ?>" alt="">
                                    <img class="m-l-60" style="height:100px; width:auto;" src="<?= get_template_directory_uri() . '/resources/icons/acaris.svg'; ?>" alt="">
                                </div>
                                <div class="d-flex justify-content-between align-items-center w-75 p-b-30">
                                    <img style="height:90px; width:auto;" src="<?= get_template_directory_uri() . '/resources/icons/isac.svg' ?>" alt="">
                                    <img class="m-l-60" style="height:70px; width:auto;" src="<?= get_template_directory_uri() . '/resources/icons/iscot.svg'; ?>" alt="">
                                </div>
                                <div class="d-flex align-items-start justify-content-between w-75">
                                    <img style="height:100px; width:auto;" src="<?= get_template_directory_uri() . '/resources/icons/acmibs.svg' ?>" alt="">
                                </div>
                            </div>
                            <div class="accreditation-collapse-title-container col-6">
                                <div class="accreditation-collapse-title">
                                    Membership in Regional
                                </div>
                                <img id="accreditation-collapse-3-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="accreditation-collapse-3">
                        <div class="row">
                            <div class="offset-6 col-6 p-0">
                                <div class="acr-par">
                                    IST is a member of the East Asia Regional Council of Overseas Schools (EARCOS). <br>
                                    The school is also an active member of other regional organizations, including the Association of China and Mongolia International Schools (ACAMIS), the International Schools Athletic Conference Beijing/Tianjin (ISAC), the International Schools Conference of Tianjin (ISCOT) and the Association of China and Mongolia IB Schools (ACMIBS).
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include 'elements/section-related.php';

    include_once 'elements/about-pre-footer.php';
get_footer()
?>
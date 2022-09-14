<?php
get_header();
?>

<!-- JUMBOTRON -->
<section class="container-fluid jumbotron" style="background-image:url('<?= get_template_directory_uri() . '/resources/img/jumbotron.jpg'; ?>')">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <div class="row">
                <div class="col-6">
                    <div class="jumbotron-caption-container">
                        <h1 class="p-b-60 p-r-40">WORKING LEARNING ACTING TOGETHER</h1>
                        <div class="col-md-10 col-sm-11 col-xs-12">
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                    <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/ib-logo.svg'; ?>" alt="">
                                </div>
                                <div class="col-10">
                                    <div class="jumbotron-caption p-l-30">
                                        Find out why IST is a <br>
                                        premier IB World School
                                        <div id="jumbotron-arrow" class="jumbotron-arrow p-b-5 p-l-20">
                                            <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="first-section" class="main-section p-t-100 p-b-100">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-12 d-flex flex-column align-items-start justify-content-start p-md-b-60">
                        <div class="ist-section-title p-b-20">
                            Tianjin's most accredited highest ranked school
                        </div>
                        <div class="ist-caption-1">
                            Accredited by world's leading agencies
                        </div>
                    </div>
                    <div class="col-lg-7 offset-lg-1 col-md-12 offset-md-0 d-flex flex-column align-items-end justify-content-start">
                        <div class="main-top-container">
                            <div>
                                TOP 2%
                            </div>
                            <div>
                                IB schools worlwide among 5500 IB schools in 160 countries
                            </div>
                        </div>
                        <div class="main-top-container">
                            <div>
                                TOP 10
                            </div>
                            <div>
                                IB schools in china
                            </div>
                        </div>
                        <div class="main-logos-container">
                            <div class="grey-logo-container">
                                <img style="width:82px; height:82px" class="grey-svg dis-block" src="<?= get_template_directory_uri() . '/resources/icons/ib-grey.svg'; ?>" alt="">
                                <img style="width:82px; height:82px" class="grey-svg dis-none" src="<?= get_template_directory_uri() . '/resources/icons/ib-logo.svg'; ?>" alt="">
                            </div>
                            <div class="grey-logo-container">
                                <img style="width:185px; height: 40px;" class="grey-svg dis-block" src="<?= get_template_directory_uri() . '/resources/icons/cis-grey.svg'; ?>" alt="">
                                <img style="width:185px; height: 40px;" class="grey-svg dis-none" src="<?= get_template_directory_uri() . '/resources/icons/cis-logo.svg'; ?>" alt="">
                            </div>
                            <div class="grey-logo-container">
                                <img style="width:110px; height:35px;" class="grey-svg dis-block" src="<?= get_template_directory_uri() . '/resources/icons/wasc-grey.svg'; ?>" alt="">
                                <img style="width:110px; height:35px;" class="grey-svg dis-none" src="<?= get_template_directory_uri() . '/resources/icons/wasc-logo.svg'; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!--EXPANDED IMG -->
<section class="p-md-t-0" style="background-color:#fff;">
    <div class="expand-img-container">
        <div id="img-1-home" style="background-image:url('<?= get_template_directory_uri() . '/resources/img/home-1.jpg'; ?>')"></div>
        <div class="img-1-overlay"></div>
        <div class="img-1-caption">
            <div class="title">WORLD CLASS FACILITIES</div>
            <div class="img-1-cta">
                <a class="ist-cta" href="">Explore our Campus <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt=""> </a>
            </div>
        </div>
    </div>
</section>

<!-- SLIDER CLASSI -->
<section id="slider-classes-container" class="container-fluid p-t-100 p-b-100 d-lg-block d-none">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <div class="row">
                <div class="col-12">
                    <div class="slider-cta-container">
                        <div class=" active-slide-cta dots-classes-slider-1">ELEMENTARY EDUCATION</div>
                        <div class="dots-classes-slider-2">SECONDARY EDUCATION</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-100 bg-grey d-lg-block d-none">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <div class="row justify-content-center">
                <div class="col-12 classes-slider">
                    <div>
                        <div class="row justify-content-between align-items-center">
                            <div class="col-4">
                                <img style="width:100%;height:auto;" src="<?= get_template_directory_uri() . '/resources/img/classes_1.svg' ?>" alt="">
                            </div>
                            <div class="col-6 offset-2">
                                <div class="title p-b-30">ELEMENTARY EDUCATION</div>
                                <div class="par p-b-100">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra amet pellentesque adipiscing sagittis, hac sit. Blandit nunc, arcu fusce at proin scelerisque auctor nibh.
                                </div>
                                <div class="link-list">
                                    <ul>
                                        <li>
                                            <a class="ist-cta" href="">
                                                Baby Dragon Playgroup 0-3 years
                                                <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ist-cta" href="">
                                                PYP Early Years KG1 - KG2
                                                <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ist-cta" href="">
                                                PYP KG3 - Grade 5
                                                <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-4 ">
                                <img style="width:100%;height:auto;" src="<?= get_template_directory_uri() . '/resources/img/classes_2.svg' ?>" alt="">
                            </div>
                            <div class="col-6 offset-2">
                                <div class="title p-b-30">SECONDARY EDUCATION</div>
                                <div class="par p-b-100">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Viverra amet pellentesque adipiscing sagittis, hac sit. Blandit nunc, arcu fusce at proin scelerisque auctor nibh.
                                </div>
                                <div class="link-list">
                                    <ul>
                                        <li>
                                            <a class="ist-cta" href="">
                                                MYP GRADES 6 - 10
                                                <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a class="ist-cta" href="">
                                                DP GRADES 11 - 12
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
        </div>
    </div>
</section>
<!-- SLIDER CLASSI MOBILE -->
<section class="container-fluid d-lg-none d-block bg-grey p-b-100">
    <div class="row jutify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="class-mobile-container">
                    <img src="<?= get_template_directory_uri() . '/resources/img/classes_1.svg'; ?>" alt="">
                    <div class="title">ELEMENTARY <br>
                        EDUCATION
                    </div>
                    <div class="link-list">
                        <ul>
                            <li>
                                <a class="ist-cta" href="">
                                    Baby Dragon Playgroup 0-3 years
                                    <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="ist-cta" href="">
                                    PYP Early Years KG1 - KG2
                                    <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="ist-cta" href="">
                                    PYP KG3 - Grade 5
                                    <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="class-mobile-container">
                    <img src="<?= get_template_directory_uri() . '/resources/img/classes_2.svg'; ?>" alt="">
                    <div class="title">SECONDARY <br>
                        EDUCATION
                    </div>
                    <div class="link-list">
                        <ul>
                            <li>
                                <a class="ist-cta" href="">
                                    MYP Grades 6 - 10
                                    <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="ist-cta" href="">
                                    DP Grades 11 -12
                                    <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-t-80 p-b-80 bg-white">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-12 p-md-b-40">
                    <div class="ist-section-title">
                        How Our Graduates Compare
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3 col-12 offset-0 compare-section">
                    <ul>
                        <li>
                            <div>
                                37 pts
                            </div>
                            <div class="col-12">
                                Average <strong> IB diploma score </strong>
                                <br>
                                (vs 31 worldwide)
                            </div>
                        </li>
                        <li>
                            <div>
                                24%
                            </div>
                            <div>
                                Score <strong>40+ points</strong> <br>
                                (vs 9% worldwide)
                            </div>
                        </li>
                        <li>
                            <div>
                                6%
                            </div>
                            <div>
                                Score <strong>44+ points</strong>
                                <br>
                                (vs 0,3% worldwide)
                            </div>
                        </li>
                        <li>
                            <div>
                                90%
                            </div>
                            <div>
                                Meet or exceed orld average
                                <br>
                                (vs 0,8% worldwide)
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="height:100vh!important;" id="student-section" class="student-section container-fluid p-t-60 scrreveal pin-section">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-center m-auto txt-white" style="width:80%;">
                        <h1>
                            OUR STUDENTS ATTEND THE WORLS'S TOP UNIVERSITY
                        </h1>
                    </div>
                </div>
                <div class="col-12 students-video-container">
                    <!-- <img class="w-100" src="<?= get_template_directory_uri() . '/resources/img/students.jpg'; ?>" alt=""> -->
                    <img class="d-lg-block d-none w-100" src="https://via.placeholder.com/2450x400" alt="">
                    <img class="d-md-block d-lg-none w-100" src="https://via.placeholder.com/600x400" alt="">
                </div>
            </div>
        </div>
        <!-- COLLEGE SLIDER -->
        <div class="col-12">
            <div class="college-slider-home">
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/cornell.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/mcgill.png' ?>" alt="">
                </div>
                <div>
                    <img src="<?= get_template_directory_uri() . '/resources/home/stanford.png' ?>" alt="">
                </div>
            </div>
        </div>
        <!-- MOBILE ONLY SECTION  !!!!!-->
        
       <!--  <div class="col-12 only-mobile-section p-t-60">
            100% <br>
            <span>Collage acceptance</span>            
        </div>
        <div class="col-12 only-mobile-section">
            $ 2.9M <br>
            <span>Collage acceptance</span>
        </div>
        <div class="col-12 only-mobile-section">
            12+ <br>
            <span>Countries where graduates attend university</span>
        </div> -->
    </div>
</section>
<div class="slide-2-container">
    <section class="community-section p-b-100 container-fluid bg-grey rounded-section pos-rel">
        <div class="row justify-content-center">
            <div class="col-md-10 col-xs-12">
                <div class="row">
                    <div class="col-12">
                        <div class="ist-section-title-2 p-b-50">WHAT OUR <br> COMMUNITY SAYS</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 community-slider">
                <?php
                $reviews = get_field('reviews', get_the_ID());
                foreach ($reviews as $r) :
                ?>
                    <div class="community-item">
                        <div>
                            <div class="title"><?= $r['review_title'] ?></div>
                            <div class="par"><?= $r['review_text'] ?></div>
                            <div class="name-container">
                                <img src="<?= $r['review_image']; ?>" alt="">
                                <div class="name">
                                    <?= $r['name'] . ', ' . $r['role']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </section>
    <section style="background-color:#fff;" class="pt-anim">
        <div class="expand-img-container">
            <div id="img-2-home" style="background-image:url('<?= get_template_directory_uri() . '/resources/img/home-2.jpg'; ?>')"></div>
            <div class="img-2-overlay"></div>
            <div class="img-2-caption">
                <div style="color:#fff" class="ist-subtitle-1 text-center p-b-10">Tianjin's</div>
                <div class="title">MOST DIVERSE LEARNING COMMUNITY</div>
                <div class="img-2-cta">
                    <a href="#" class="ist-cta" href="">Learn more <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt=""> </a>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-grey p-t-100 p-b-100">
        <div class="row justify-content-center">
            <div class="col-md-10 col-xs-12">
                <div class="row align-items-center p-b-100">
                    <div class="col-lg-5 col-sx-12">
                        <div class="ist-section-title-2">
                            LEARNING BEYOND THE CLASSROOM
                        </div>
                        <div class="ist-caption-1 p-t-25">
                            We offer a variety of experiences and activities intended to meet the different interest in development levels of our student body.
                        </div>
                        <ul class="beyond-list d-lg-block d-none">
                            <li>
                                <a class="ist-cta" href="">
                                    Co-curricular activities <img class="cta-black" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="ist-cta" href="">
                                    Athletics <img class="cta-black" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="ist-cta" href="">
                                    Community & Service <img class="cta-black" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="ist-cta" href="">
                                    Trips & Events <img class="cta-black" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 offset-lg-1 offset-0 col-12 p-md-t-60">
                        <img style="padding:80px; margin:auto!important;" src="<?= get_template_directory_uri() . '/resources/home/home-3.png' ?>" alt="">
                    </div>
                    <div class="col-12">
                        <ul class="beyond-list d-lg-none d-block p-t-40">
                            <li>
                                <a class="ist-cta" href="">
                                    Co-curricular activities <img class="cta-black" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="ist-cta" href="">
                                    Athletics <img class="cta-black" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="ist-cta" href="">
                                    Community & Service <img class="cta-black" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="ist-cta" href="">
                                    Trips & Events <img class="cta-black" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="ist-section-title-2 p-b-50">RECENT UPDATES</div>
                    </div>
                </div>
                <div class="row">

                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'postsnumber' => 4,
                        'order' => 'DESC',
                        'orderBy' => 'date'
                    );
                    /* $posts = wp_get_posts($args); */

                    $posts = array(
                        array(
                            'title' => 'Titolo 1',
                            'data' => "24 May, 2022",
                            'img' => "https://via.placeholder.com/350",
                            'cat' => 1,
                            'caption' => 'lorem ipsum sit dolor amet consetetur'
                        ),
                        array(
                            'title' => 'Title 2',
                            'data' => '22 May, 2022',
                            'img' => "https://via.placeholder.com/350/FF00FF",
                            'cat' => 2,
                            'caption' => 'lorem ipsum sit dolor amet consetetur'
                        ),
                        array(
                            'title' => 'Title 3',
                            'data' => '20 May, 2022',
                            'img' => 'https://via.placeholder.com/350/FFFF00',
                            'cat' => 3,
                            'caption' => 'lorem ipsum sit dolor amet consetetur'
                        ),
                        array(
                            'title' => 'Title 4',
                            'data' => '10 May, 2022',
                            'img' => 'https://via.placeholder.com/350/000FFF',
                            'cat' => 4,
                            'caption' => 'lorem ipsum sit dolor amet consetetur '
                        )
                    );
                    foreach ($posts as $p) :
                        $cat_color;

                        switch ($p['cat']) {
                            case '1':
                                $cat_color = 'hover-yellow';
                                break;
                            case '2':
                                $cat_color = 'hover-white';
                                break;
                            case '3':
                                $cat_color = 'hover-green';
                                break;
                            default:
                                $cat_color = 'hover-red';
                                break;
                        }
                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 g-4">
                            <div class="recent-news">
                                <div class="news-cover">
                                    <div class="news-img">
                                        <img src="<?= $p['img']; ?>" alt="">
                                    </div>
                                    <div class="news-caption">
                                        <div class="news-title">
                                            <?= $p['title'] ?>
                                        </div>
                                        <div class="news-date">
                                            <?= $p['data'] ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden-side-news  <?= ' ' . $cat_color; ?>">
                                    <div class="news-title-hidden">
                                        <?= $p['caption']; ?>
                                    </div>
                                    <div class="news-caption">
                                        <div class="news-title"><?= $p['title']; ?></div>
                                        <div class="news-date"><?= $p['data']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="container-fluid pre-footer bg-orange pin-section">
    <div class="row h-100">
        <div class="col-12 h-100 d-flex justify-content-center align-items-center pos-rel">
            <img class="pre-footer-img" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/home/pre-footer-img.svg'; ?>" alt="">
            <div class="pre-footer-title w-100">
                <div class="ist-title-3">
                    JOIN OUR COMMUNITY
                </div>
            </div>
            <div class="pre-footer-cta-container w-100">
                <div class="w-100">
                    <div class="row w-50 d-flex align-items-center justify-content-evenly">
                        <div class="cta-pre-footer ist-cta-1 m-md-b-40 col-lg-5 col-md-10">
                            <div>
                                INQUIRE NOW
                            </div>
                            <div>
                                <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </div>
                        <div class="cta-pre-footer ist-cta-1  col-lg-5 col-md-10">
                            <div>
                                WORK WITH US
                            </div>
                            <img onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="pre-footer-cta-2">
                    OR <div class="d-mg-block d-lg-none p-b-20"><br></div> <span>LEARN MORE ABOUT OUR PROGRAMMES</span> <img class="m-l-10 " onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();
?>
<?php
get_header();
?>

<div class="menu-open-layover"></div>
<!-- JUMBOTRON -->

<section class="container-fluid jumbotron">
    <div class="video-container">
        <div style="background-image:url('<?= get_template_directory_uri() . '/resources/img/jumbotron.jpg'; ?>')"></div>
        <!-- <iframe src="https://www.youtube.com/embed/rUWxSEwctFU?mute=1&modestbranding=0&autoplay=1&autohide=1&rel=0&showinfo=0&controls=0&disablekb=1&enablejsapi=1&iv_load_policy=3&loop=1&playsinline=1&fs=0&playlist=rUWxSEwctFU"></iframe> -->
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-11">
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
                                    <div class="jumbotron-caption p-l-20 p-md-l-0">
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
<section id="first-section" class="main-section p-t-60 p-b-100">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-11">
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
                                <a href="">
                                    <img class="ib-logo-home grey-svg dis-block" src="<?= get_template_directory_uri() . '/resources/icons/ib-grey.svg'; ?>" alt="">
                                    <img class="ib-logo-home grey-svg dis-none" src="<?= get_template_directory_uri() . '/resources/icons/ib-logo.svg'; ?>" alt="">
                                </a>
                            </div>
                            <div class="grey-logo-container">
                                <a href="">
                                    <img class="cis-logo-home grey-svg dis-block" src="<?= get_template_directory_uri() . '/resources/icons/cis-grey.svg'; ?>" alt="">
                                    <img class="cis-logo-home grey-svg dis-none" src="<?= get_template_directory_uri() . '/resources/icons/cis-logo.svg'; ?>" alt="">
                                </a>
                            </div>
                            <div class="grey-logo-container">
                                <a href="">
                                    <img class="wasc-logo-home grey-svg dis-block" src="<?= get_template_directory_uri() . '/resources/icons/wasc-grey.svg'; ?>" alt="">
                                    <img class="wasc-logo-home grey-svg dis-none" src="<?= get_template_directory_uri() . '/resources/icons/wasc-logo.svg'; ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--EXPANDED IMG -->
<section class="p-md-t-0" style="background-color:#fff;height:100vh;border-radius:0;">
    <div class="expand-img-container">
        <div id="img-1-home" style="background-image:url('<?= get_template_directory_uri() . '/resources/img/home-1.jpg'; ?>');object-fit:fill; background-position:center;"></div>
        <div class="img-1-overlay"></div>
        <div class="img-1-caption">
            <div class="title">WORLD CLASS FACILITIES</div>
            <div class="img-1-cta">
                <a class="ist-cta justify-content-center" href="">Explore our Campus <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt=""> </a>
            </div>
        </div>
    </div>
</section>

<!-- SLIDER CLASSI -->
<section id="slider-classes-container" class="container-fluid p-t-40 p-b-40 d-lg-block d-none">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-11">
            <div class="row">
                <div class="col-12">
                    <div class="slider-cta-container">
                        <div class=" active-slide-cta dots-classes-slider-1 class-dot">ELEMENTARY SCHOOL</div>
                        <div class="class-dot dots-classes-slider-2">SECONDARY SCHOOL</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-100 d-lg-block d-none">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-11">
            <div class="row justify-content-center">
                <div class="col-12 classes-slider">
                    <div>
                        <div class="row justify-content-between align-items-center">
                            <div class="col-5">
                                <img style="width:100%;height:auto;" src="<?= get_template_directory_uri() . '/resources/img/classes_1.svg' ?>" alt="">
                            </div>
                            <div class="col-6 offset-1">
                                <div class="title p-b-25">ELEMENTARY SCHOOL</div>
                                <div class="par p-b-60">
                                    Our Elementary School is fully authorized to offer the International Baccalaureate Primary Years Program (IB-PYP) and an internationally celebrated curriculum framework for children from KG1 (Nursery) to Grade 5 specifically designed to facilitate a smooth transition between both international and national school systems.
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
                            <div class="col-5">
                                <img style="width:100%;height:auto;" src="<?= get_template_directory_uri() . '/resources/img/classes_2.svg' ?>" alt="">
                            </div>
                            <div class="col-6 offset-1">
                                <div class="title p-b-30">SECONDARY SCHOOL</div>
                                <div class="par p-b-100">
                                    Our Secondary School offers a dynamic, academically rigorous and holistic curriculum aimed to prepare students to become life-long learners. IST is fully authorized to offer the International Baccalaureate Middle Years (IB-MYP) and Diploma (IB-DP) curriculum frameworks.
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
<section class="container-fluid p-t-80 p-b-80 bg-red bg-wh-mobile">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-11">
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
<section id="student-section" class="student-section container-fluid p-t-20">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-sm-12">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="scrreveal2 text-center m-auto txt-white var-width-section-h1">
                        <h1>
                            OUR STUDENTS ATTEND THE WORLS'S TOP UNIVERSITY
                        </h1>
                    </div>
                </div>
                <div class="col-12 students-video-container scrreveal3">
                    <img class="d-none d-lg-block w-100" src="<?= get_template_directory_uri() . '/resources/img/students.jpg'; ?>" alt="">
                    <img class="d-md-block d-lg-none w-100" src="https://via.placeholder.com/600x850" alt="">
                </div>
            </div>
        </div>
        <!-- COLLEGE SLIDER -->
        <div class="col-12">
            <div class="college-slider-home">
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni2.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni3.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni2.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni3.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni2.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni3.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni2.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni3.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni2.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni3.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni2.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni3.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni2.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni3.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni2.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni3.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni2.svg' ?>" alt="">
                </div>
                <div>
                    <img style="width:200px;height:50px;" src="<?= get_template_directory_uri() . '/resources/home/uni3.svg' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<div class="slide-2-container">
    <section class="community-section p-b-100 container-fluid rounded-section pos-rel">
        <div class="row justify-content-center">
            <div class="col-md-10 col-sm-11">
                <div class="row">
                    <div class="col-12">
                        <div class="ist-section-title-2">WHAT OUR <br> COMMUNITY SAYS</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="review-container" class="container-fluid p-b-100">
        <div class="row">
            <div class="col-12 community-slider">
                <?php
                $reviews = get_field('reviews', get_the_ID());
                foreach ($reviews as $i => $r) :
                ?>
                    <div class="community-item" style="<?= $i == 0 ? 'padding-left:9%;width:calc(52% + 9%);' : ''; ?> <?= $i == count($reviews) - 1 ? 'padding-right:9%;width:calc(52% + 9%);' : ''; ?>">
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
    </div>
</div>
<section style="background-color:#fff" class="pt-anim">
    <div class="expand-img-container">
        <div id="img-2-home" style="background-image:url('<?= get_template_directory_uri() . '/resources/img/home-2.jpg'; ?>')"></div>
        <div class="img-2-overlay"></div>
        <div class="img-2-caption">
            <div style="color:#fff" class="ist-subtitle-1 text-center p-b-10 d-none d-lg-block">Tianjin's</div>
            <div class="title">MOST DIVERSE LEARNING COMMUNITY</div>
            <div class="img-2-cta">
                <a href="#" class="ist-cta justify-content-center" href="">Learn more <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt=""> </a>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid bg-white learning-section">
    <div class="row justify-content-center">
        <div class="col-md-10 col-xs-11">
            <div class="row align-items-center p-lg-b-100">
                <div class="col-lg-6 col-sx-12">
                    <div class="ist-section-title-2">
                        LEARNING BEYOND THE CLASSROOM
                    </div>
                    <div class="ist-caption-1 caption-padding-r p-t-25 p-b-90 p-md-b-30">
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
                <div class="scrreveal col-lg-6 col-12 p-md-t-30">
                    <img style="margin:auto!important;" src="<?= get_template_directory_uri() . '/resources/home/home-3.png' ?>" alt="">
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
        </div>
    </div>
</section>

<section class="container-fluid bg-white p-t-60">
    <div class="row justify-content-center">
        <div class="col-md-10 col-xs-11">
            <div class="row">
                <div class="col-12">
                    <div class="ist-section-title-2">RECENT UPDATES</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recent-news-slider-section">
    <div class="recent-news-slider-container">
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
                'img' => "https://via.placeholder.com/320x400",
                'cat' => 1,
                'caption' => 'lorem ipsum sit dolor amet consetetur'
            ),
            array(
                'title' => 'Title 2',
                'data' => '22 May, 2022',
                'img' => "https://via.placeholder.com/320x400",
                'cat' => 2,
                'caption' => 'lorem ipsum sit dolor amet consetetur'
            ),
            array(
                'title' => 'Title 3',
                'data' => '20 May, 2022',
                'img' => "https://via.placeholder.com/320x400",
                'cat' => 3,
                'caption' => 'lorem ipsum sit dolor amet consetetur'
            ),
            array(
                'title' => 'Title 4',
                'data' => '10 May, 2022',
                'img' => "https://via.placeholder.com/320x400",
                'cat' => 1,
                'caption' => 'lorem ipsum sit dolor amet consetetur '
            ),
            array(
                'title' => 'Title 4',
                'data' => '10 May, 2022',
                'img' => "https://via.placeholder.com/320x400",
                'cat' => 3,
                'caption' => 'lorem ipsum sit dolor amet consetetur '
            ),
            array(
                'title' => 'Title 4',
                'data' => '10 May, 2022',
                'img' => "https://via.placeholder.com/320x400",
                'cat' => 2,
                'caption' => 'lorem ipsum sit dolor amet consetetur '
            ),
            array(
                'title' => 'Title 4',
                'data' => '10 May, 2022',
                'img' => "https://via.placeholder.com/320x400",
                'cat' => 1,
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
            <div class="recent-news-slider-item">
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
</section>
<section style="border-radius:25px 25px 0 0" class="container-fluid pre-footer bg-orange pin-section pin-section-border pin-section-mobile">
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
                    <div class="row d-flex align-items-center">
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
                    OR <div class="d-block d-lg-none p-md-b-20"><br></div> <span>LEARN MORE ABOUT OUR PROGRAMMES</span> <img class="m-l-10 " onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();
?>
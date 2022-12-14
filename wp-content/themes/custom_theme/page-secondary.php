<?php
/*
*
*Template Name: Education
*
*/
get_header();
include 'elements/nav-pages-programs.php';
?>

<section class="container-fluid p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row align-items-start justify-content-between">
                <div class="col-lg-6 col-12 ist-par-about-1 order-2 order-lg-1">
                    Our Secondary School offers a dynamic, academically rigorous and holistic curriculum aimed to prepare students to become life-long learners. IST is fully authorized to offer the International Baccalaureate Middle Years (IB-MYP) and Diploma (IB-DP) curriculum frameworks.
                </div>
                <div class="col-lg-6 col-12 logo-container-programs order-1 order-lg-2">
                    <a target="_blank" href="https://www.ibo.org/programmes/middle-years-programme/">
                        <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/programs/logo-secondary-1.svg'; ?>" alt="">
                    </a>
                    <a target="_blank" href="https://www.ibo.org/programmes/diploma-programme/">
                        <img class="m-t-md-30" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/programs/logo-secondary-2.svg'; ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-t-md-60 p-b-110">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <div class="row g-3 edu-container">
                <div class="offset-1 col-10 offset-lg-0 col-lg-4 edu-box">
                    <div class="edu-content">
                        <div>
                            <img onload="SVGInject(this);" class="edu-box-img" src="<?= get_template_directory_uri() . '/resources/education/myp.svg' ?>" alt="">
                        </div>
                        <a class="ist-cta" href="<?= get_permalink(); ?>">
                            MYP
                            <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                        </a>
                        <div>
                            <div>12-18 years</div>
                            <div>
                                Grades 6 - 10
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-1 col-10 offset-lg-0 col-lg-4 edu-box">
                    <div class="edu-content">
                        <div>
                            <img onload="SVGInject(this);" class="edu-box-img" src="<?= get_template_directory_uri() . '/resources/education/dp.svg' ?>" alt="">
                        </div>
                        <a class="ist-cta" href="">
                            DP
                            <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                        </a>
                        <div>
                            <div>17 - 19 years</div>
                            <div>Grades 11 - 12</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-120">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-12 beliefs-collapse-container">
                    <div class="elementary-collapse beliefs-collapse" data-collapse-pos="1">
                        <div class="d-flex justify-content-between align-items-center d-sm-wrap" data-bs-toggle="collapse" href="#secondary-collapse-1" role="button" data-collapse-pos="1" aria-expanded="false" aria-controls="secondary-collapse-1">
                            <div class="collapse-title-about">
                                Secondary principal's Welcome
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <img id="elementary-collapse-1-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                        <div class="collapse" id="secondary-collapse-1">
                            <div class="row p-t-40">
                                <div class="col-lg-6 col-12 order-2 order-lg-1">
                                    <p class="secondary-collapse-content">
                                        Our environment is a happy one in which 'trust' is the keyword!
                                        <br>
                                        <br>
                                        Dear IST Families and Prospective Families,
                                        <br>
                                        <br>
                                        It is my pleasure to welcome you to the secondary area of the IST website, serving the needs of students from Grade 6 to Grade 12. I am confident in affirming that you have chosen an excellent environment for your child to learn and develop. We are advocates of all that 21st century learning involves; we particularly believe that we must educate students to be flexible learners who know how to develop the right questions.
                                        <br>
                                        <br>
                                        Our students want to learn but also need to be aware of how they learn. We consider social and emotional learning to be a significant component of our programme.
                                        <br>
                                        <br>
                                        Our environment is a happy one in which 'trust' is the keyword. The facilities are superb and our team of international educators enthusiastic and inspiring. We recognise that students moving to a new country, and often working in an unfamiliar language, face challenges. We are used to helping students make the most of the opportunities here. I look forward to meeting you in the near future.
                                        <br>
                                        <br>
                                        Warm Regards,
                                        <br>
                                        <br>
                                        Michael Conway <br>
                                        Secondary Principal & Deputy Director
                                    </p>
                                </div>
                                <div class="col-lg-6 col-12 flex-md-center order-lg-2 order-1 p-b-md-30">
                                    <img class="lazy" src="<?= get_template_directory_uri() . '/resources/programs/justin-lobsey.jpg' ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="border-bottom:solid 1px #C0C0C0!important" class="elementary-collapse beliefs-collapse" data-collapse-pos="2">
                        <div class="d-flex justify-content-between align-items-center d-sm-wrap" data-bs-toggle="collapse" href="#elementary-collapse-2" role="button" aria-expanded="false" aria-controls="elementary-collapse-2">
                            <div class="collapse-title-about">
                                IB Learner Profile
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <img id="elementary-collapse-2-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                        <div class="collapse" id="elementary-collapse-2">
                            <div class="row p-t-40">
                                <div class="col-lg-6 col-12 beliefs-collapse-par">
                                    <p class="secondary-collapse-content-bold">
                                        The IST Secondary School offers a dynamic, academically rigorous and holistic curriculum aimed to prepare students to become life-long learners. <br>
                                        The values of the IB Learner Profile describe the characteristics of model IB students and IST graduates who are good communicators, internationally and globally minded young people. <br>
                                        <br>
                                        <br>
                                        Throughout their secondary years, IST students build skills as independent, reflective and collaborative learners; they develop a global perspective, intercultural awareness and an appreciation of our host country, China.
                                    </p>
                                </div>
                                <div class="col-lg-6 col-12 p-t-sm-30 beliefs-collapse-par">
                                    <p class="secondary-collapse-content-bold">
                                        They learn from interaction with people within and beyond the school and Tianjin through regular community and service projects and the annual Week Without Walls trips, which takes them to different destinations in China.
                                        <br>
                                        <br>
                                        Secondary students are encouraged to take on leadership roles through Student Council, extra-curricular activities, Model United Nations, committee work and leadership retreats.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-60 p-t-lg-60">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 offset-0 col-12 text-center">
                    <h1 style="color:#000;position:relative;z-index:9999">LOREM ISPSUM DOLOR SIT AMET LOREM</h1>
                </div>
                <div class="col-12 scrreveal" style="position:relative;bottom:40px;">
                    <img class="w-100 d-lg-block d-none lazy" src="<?= get_template_directory_uri() . '/resources/programs/secondary-img-1.jpg'; ?>" alt="">
                    <img class="w-100 d-lg-none d-block lazy" src="<?= get_template_directory_uri() . '/resources/programs/secondary-mobile-1.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-lg-6 offset-lg-6 col-12 offset-0">
                    <div class="collapse-container-single p-t-40 p-b-40">
                        <div data-bs-toggle="collapse" href="#elementary-collapse-single" role="button" aria-expanded="false" aria-controls="elementary-collapse-single">
                            <div class="single-collapse-par-big-txt" style="font-size:30px;">
                                The Secondary School comprises Grades 6 to 12. Grade 6 to 8 is termed ‘Middle School’ for pastoral purposes while Grade 9 to 12 is termed ‘High School.’

                            </div>
                        </div>
                        <div class="collapse" id="elementary-collapse-single">
                            <div class="beliefs-collapse-par single-collapse-par">
                                Each grade is divided into two teaching units named homerooms and indicated by the initial of the homeroom teacher.
                                The schedule is organized on a 10-day cycle (Week A and Week B). The Secondary School is housed in the ‘Han’ building for all academic activities other than Visual Art, Design, and PE/Health.
                            </div>
                        </div>
                        <div class="single-collapse-trigger d-flex align-items-center" data-bs-toggle="collapse" href="#elementary-collapse-single" role="button" aria-expanded="false" aria-controls="elementary-collapse-single">
                            Read more
                            <img class="collapse-single-svg-plus" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/plus.svg' ?>" alt="">
                            <img class="collapse-single-svg-minus" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/minus.svg' ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <div class="row align-items-center programs-layout-row p-t-120 g-0 d-lg-flex d-none">
                <div class="col-lg-6 col-12 p-md-80">
                    <div class="title">
                        STUDENT <br class="d-lg-block d-none"> SUPPORT
                    </div>
                    <p>
                        Second language learners and students with individual needs receive support both inside and outside the classroom from specialist teachers. ELA specialists and regular subject teachers meet to collaborate on lesson planning to ensure the differentiation of instruction and ELA teaching in the mainstream.
                    </p>
                </div>
                <div class="col-lg-6 col-12">
                    <img class="w-100 lazy" src="<?= get_template_directory_uri() . '/resources/education/support.jpg' ?>" alt="">
                </div>
            </div>
            <div class="row align-items-center programs-layout-row p-t-md-0 g-0 d-lg-none d-flex">
                <div class="col-lg-12">
                    <div class="title">
                        STUDENT <br class="d-lg-block d-none"> SUPPORT
                    </div>
                </div>
                <div class="col-12 p-t-10 p-b-10">
                    <img class="w-100 lazy" src="<?= get_template_directory_uri() . '/resources/education/support.jpg' ?>" alt="">
                </div>
                <div class="col-12 p-t-30">
                    <p>
                        Second language learners and students with individual needs receive support both inside and outside the classroom from specialist teachers. ELA specialists and regular subject teachers meet to collaborate on lesson planning to ensure the differentiation of instruction and ELA teaching in the mainstream.
                    </p>
                </div>
            </div>
            <div class="row align-items-center programs-layout-row programs-last-lay-row g-0 d-lg-flex d-none">
                <div class="col-6">
                    <img class="w-100 lazy" src="<?= get_template_directory_uri() . '/resources/education/beyond-2.jpg'; ?>" alt="">
                </div>
                <div class="col-6 p-md-80">
                    <div class="title">
                        BEYOND THE CURRICULUM
                    </div>
                    <p>
                        IST offers a wide range of clubs and activities allowing students to display their talents as well as to develop new interests. The Secondary School has a strong sporting and extra-curricular programme, with students participating in China wide international school sports tournaments, cultural conventions and Model United Nations.
                    </p>
                </div>
            </div>
            <div class="row align-items-center programs-layout-row programs-last-lay-row g-0 d-lg-none d-flex">
                <div class="col-12">
                    <div class="title p-t-10 p-b-10">
                        BEYOND THE CURRICULUM
                    </div>
                </div>
                <div class="col-12 p-t-10 p-b-10">
                    <img class="w-100 lazy" src="<?= get_template_directory_uri() . '/resources/education/beyond-2.jpg'; ?>" alt="">
                </div>
                <div class="col-12 p-t-30">
                    <p>
                        IST offers a wide range of clubs and activities allowing students to display their talents as well as to develop new interests. The Secondary School has a strong sporting and extra-curricular programme, with students participating in China wide international school sports tournaments, cultural conventions and Model United Nations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'elements/key-resources.php';
?>

<?php
include_once 'elements/section-related.php';
?>


<?php
include_once 'elements/about-pre-footer.php';
?>

<?php
get_footer();
?>
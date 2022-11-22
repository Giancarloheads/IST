<?php
get_header();
include 'elements/nav-pages-students.php';
?>


<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 p-b-60">
            <img src="<?= get_template_directory_uri() . '/resources/img/co-curricular.jpg'; ?>" alt="" class="w-100">
        </div>
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-12 ist-par-about-1 p-b-60">
                    <div class="collapse-container-single">
                        <div data-bs-toggle="collapse" href="#elementary-collapse-single" role="button" aria-expanded="false" aria-controls="elementary-collapse-single">
                            <div class="single-collapse-par-big-txt">
                                We believe in the balanced development of each and every one of our students and in order to complement our academic program and further achieve this goal we offer a wide variety of experiences and activities intended to meet the differing interests and developmental levels of our student body.

                            </div>
                        </div>
                        <div class="collapse" id="elementary-collapse-single">
                            <div class="beliefs-collapse-par single-collapse-par">
                                Co-Curricular-Activities (CCAs) provide a fun and engaging extension to the academic curriculum for students in grades K-12.
                                A schedule with details for each CCA isprovided to students and parents as part of the registration process prior to each session. IST uses the online platform SchoolsBuddy for CCA registration. Sessions run from 3:25 until 4:25pm. Secondary sports sessions run from 3:25 until 5:00pm. There are limited activity offerings on Wednesdays, when teachers are involved in after-school meetings.
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
<section class="container-fluid bg-grey p-t-60 p-b-150">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-7 ist-section-title-2 p-b-25">
                    A WIDE VARIETY OF <br>
                    EXPERIENCES
                </div>
                <div class="col-lg-6 ist-caption-1 p-b-50">
                    IST offer three 10-week seasons of CCAs across the school year, with activities falling into five main categories:
                </div>
                <div class="col-12 d-lg-block d-none">
                    <div class="co-curricular-activities-container">
                        <div class="activity-container">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-1.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                <a href="<?= get_permalink(186); ?>" class="d-flex align-items-center justify-content-center">
                                    Sport
                                    <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="activity-container">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-2.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Performing Arts
                            </div>
                        </div>
                        <div class="activity-container">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-3.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Active Pursuit
                            </div>
                        </div>
                        <div class="activity-container">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-4.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Classroomw Extension
                            </div>
                        </div>
                        <div class="activity-container">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-5.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Life Skills
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="row justify-content-center mobile-activities-co-curricular-container">
                        <div class="col-8">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-2.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Performing Arts
                            </div>
                        </div>
                        <div class="col-8">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-2.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Performing Arts
                            </div>
                        </div>
                        <div class="col-8">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-2.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Performing Arts
                            </div>
                        </div>
                        <div class="col-8">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-2.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Performing Arts
                            </div>
                        </div>
                        <div class="col-8">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-2.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Performing Arts
                            </div>
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
            <div class="row align-items-center programs-layout-row g-0">
                <div class="col-lg-6 col-12">
                    <img class="m-0" src="<?= get_template_directory_uri() . '/resources/education/beyond.jpg'; ?>" alt="">
                </div>
                <div class="col-lg-6 col-12 p-md-80">
                    <div class="title">
                        ELEMENTARY <br class="d-lg-block d-none"> FIELD TRIPS

                    </div>
                    <p class="m-0">
                        Elementary students participate in regular fieldtrips throughout the course of each school year. The majority of these excursions will be day outings in the Tianjin area associated with ‘Units of Inquiry’; however, as students become older they will venture further away from Tianjin until eventually they participate in a mini ‘Week Without Walls’ preparation trip which will involve them spending two to three nights away from their homes with their classmates and teachers.
                    </p>
                </div>
            </div>
            <div class="row align-items-center programs-layout-row programs-last-lay-row g-0" style="border-bottom: none!important; ">
                <div class="col-lg-6 col-12 order-2 order-lg-1 p-md-80">
                    <div class="title">
                        SECONDARY 'WEEK WITHOUT FALLS'
                    </div>
                    <p class="m-0">
                        The Secondary school operates a ‘Week Without Walls’ outdoor education program each year. The focus of the trips is for students to explore connections between their learning and the world around them. Each grade level has its own destination and a program designed to maximize the experience for the students. These trips take place during the first quarter of the school year and also provides opportunities for the classes to grow as a group and to develop bonds that will last throughout the year.
                    </p>
                </div>
                <div class="col-lg-6 col-12 order-1 order-lg-2">
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/education/student-support.jpg'; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'elements/section-related.php';
include 'elements/about-pre-footer.php';
get_footer();
?>
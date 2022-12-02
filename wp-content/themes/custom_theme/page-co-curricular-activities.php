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
<section class="container-fluid bg-grey p-t-60 p-b-100">
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
                                <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </div>
                        <div class="activity-container">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-3.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Active Pursuit
                                <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </div>
                        <div class="activity-container">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-4.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Classroom Extension
                                <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </div>
                        <div class="activity-container">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-5.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Life Skills
                                <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="row justify-content-center mobile-activities-co-curricular-container">
                        <div class="col-md-7 col-10">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-1.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                <a href="<?= get_permalink(186); ?>">
                                    Sport
                                    <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 col-10">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-2.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Performing Arts
                                <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-10">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-3.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Active Pursuits
                                <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-10">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-4.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Classroom Extension
                                <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-7 col-10">
                            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/co-curricular/activity-5.jpg'; ?>" alt="">
                            <div class="ist-caption-1">
                                Life Skills
                                <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-t-120 p-b-60">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center d-lg-flex d-none">
                <div class="col-lg-4 offset-lg-1 col-12 offset-0">
                    <div class="ist-section-title-2 p-b-25">
                        ATHLETICS <br> AND ACTIVITIES OFFICE
                    </div>
                    <div class="ist-caption-1">
                        IST has a fully staffed Athletic and Activities Office to support the Athletics, CCAs, Field Trips, and other necessary local contacts for educational purposes.
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-12 offset-0">
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/img/co-curricular.jpg'; ?>" alt="">
                </div>
            </div>
            <div class="row align-items-center d-lg-none d-block">
                <div class="col-12">
                    <div class="ist-section-title-2 p-b-25">
                        ATHLETICS <br> AND ACTIVITIES OFFICE
                    </div>
                </div>
                <div class="col-12">
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/img/co-curricular.jpg'; ?>" alt="">
                </div>
                <div class="col-12 p-t-40">
                    <div class="ist-caption-1">
                        IST has a fully staffed Athletic and Activities Office to support the Athletics, CCAs, Field Trips, and other necessary local contacts for educational purposes.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-12 beliefs-collapse-container">
                    <div class="beliefs-collapse" data-collapse-pos="1">
                        <div class="d-flex justify-content-between align-items-center d-sm-wrap" data-bs-toggle="collapse" href="#beliefs-collapse-1" role="button" data-collapse-pos="1" aria-expanded="false" aria-controls="beliefs-collapse-1">
                            <div class="collapse-title-about">
                                What does the Activities and Athletics Office do?
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="plus-icon-collapse" class="plus-icon-collapse" id="beliefs-collapse-1-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                        <div class="collapse" id="beliefs-collapse-1">
                            <div class="container-fluid p-t-40">
                                <div class="row">
                                    <div class="col-lg-6 col-12 collapse-co-curricular-list">
                                        <ul>
                                            <li>
                                                Supports Athletic programs and assists the two Athletics and Activity Directors
                                            </li>
                                            <li>
                                                Arranges transportation and accommodation for events
                                            </li>
                                            <li>
                                                Supports tournament planning and management
                                            </li>
                                            <li>
                                                Facilitates CCAs, field trips, and community service
                                            </li>
                                            <li>
                                                Coordinate the Co-Curricular Activities Program, including hiring instructors and local facilities, liaise with the community, conduct surveys, visit facilities; etc.
                                            </li>
                                            <li>
                                                Research and collect information of potential field trip destinations, conduct IST Risk-Assessment policy and procedure
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-12 collapse-co-curricular-list">
                                        <ul>
                                            <li>
                                                Consult with leading teachers to develop itineraries for Week Without Walls school trips
                                            </li>
                                            <li>
                                                Arrange and liaise accommodation and activities for field trips; develop contracts for overnight trips as necessary
                                            </li>
                                            <li>
                                                Facilitate IST Safeguarding policies and procedures for all IST community members and external providers
                                            </li>
                                            <li>
                                                Coordinate with community service programs to build partnerships with local organizations and provide administrative support
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
    </div>
</section>
<section class="container-fluid p-t-60 p-b-120">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-10">
            <div class="ist-par-about-1 text-center">
                Families are welcome to contact the IST Athletics and Activities Office via telephone or via e-mail.
            </div>
        </div>
    </div>
    <div class="row justify-content-center p-t-50">
        <div class="col-lg-4">
            <div class="single-key-resources">
                <a target="_blank" href="mailto:studentservice@isttianjin.org.cn">
                    <div class="">Telephone</div>
                    <a href="tel:285920018150" class="key-resources-cta c-red">
                        2859-2001 ext.8150
                    </a>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="single-key-resources">
                <a target="_blank" href="mailto:studentservice@isttianjin.org.cn">
                    <div class="">E-mail</div>
                    <a href="mailto:ying_gou@istisnjin.org.cn" class="key-resources-cta c-red">
                        ying_gou@istisnjin.org.cn
                    </a>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
include 'elements/section-related.php';
include 'elements/about-pre-footer.php';
get_footer();
?>
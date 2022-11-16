<?php
get_header();
include 'elements/nav-pages-students.php';
?>


<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-lg-6 col-12 ist-par-about-1 p-b-60">
                    <div class="collapse-container-single">
                        <div data-bs-toggle="collapse" href="#elementary-collapse-single" role="button" aria-expanded="false" aria-controls="elementary-collapse-single">
                            <div class="single-collapse-par-big-txt">
                                As a part of the total learning experience, all classes participate in a variety of fieldtrips and events.
                            </div>
                        </div>
                        <div class="collapse" id="elementary-collapse-single">
                            <div class="beliefs-collapse-par single-collapse-par">
                                As students mature the length and challenges associated with these excursions will increase accordingly. Please note that IST Admission ‘Form C’ includes a standing parental agreement for children to participate in fieldtrips that take place within Tianjin during the school day. Additional permissions are required for out of town and/or overnight field trips. Please note that IST tuition feed cover the costs of the vast majority of fieldtrips, including overnight Week Without Walls excursions.
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
            <div class="row align-items-center programs-layout-row g-0">
                <div class="col-lg-6 col-12">
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/education/beyond.jpg'; ?>" alt="">
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
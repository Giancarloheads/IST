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
                <div class="col-lg-6 col-12 p-t-30 p-b-30">
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/education/beyond.jpg'; ?>" alt="">
                </div>
                <div class="col-lg-6 col-12 p-md-80">
                    <div class="title">
                        ELEMENTARY <br class="d-lg-block d-none"> SCHOOL SPORTS

                    </div>
                    <p>
                        IST Elementary School students participate in formal sporting activities and events in football (soccer), badminton, table-tennis, athletics and cross-country through the International School Conference of Tianjin (ISCOT). Elementary sports offerings are scheduled in alignment with the regular CCA schedule, with afternoon sessions scheduled between 3:25PM until 4:25PM.
                    </p>
                </div>
            </div>
            <div class="row align-items-center programs-layout-row programs-last-lay-row g-0">
                <div class="col-lg-6 col-12 order-2 order-lg-1 p-md-80">
                    <div class="title">
                        SECONDARY <br class="d-lg-block d-none"> SCHOOL SPORTS 
                    </div>
                    <p>
                        Secondary School students participate in the three core team-based competitive sports of football, basketball and volleyball. Additionally, students also have the opportunity to participate in individual and paired competitive sporting experiences in table-tennis, track and field, cross-country, and Ultimate Frisbee. <br>
                        In addition to the standard practice sessions that run from 3:25PM until 5:00PM, Secondary students attend matches and tournaments that are scheduled during the weekend, and in the case of High School ACAMIS sports, may involve travel to other locations in China.
                    </p>
                </div>
                <div class="col-lg-6 col-12 order-1 order-lg-2 p-t-30 p-b-30">
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/education/student-support.jpg'; ?>" alt="">
                </div>
            </div>
            <div class="row align-items-center programs-layout-row g-0">
                <div class="col-lg-6 col-12 p-t-30 p-b-30">
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/education/beyond.jpg'; ?>" alt="">
                </div>
                <div class="col-lg-6 col-12 p-md-80">
                    <div class="title">
                        ATHLETICS <br class="d-lg-block d-none"> AWARDS
                    </div>
                    <p>
                    At the conclusion of each school year, IST hosts an annual Athletic Awards celebration in recognition of student and team achievement. <br>
                    Awards include Most Valuable player-MVP, Most Improved Player-MIP, and Outstanding Team Player for each team across the core sports and badminton.  <br>
                    The IST Athletic Excellence Award is presented to a male and female recipient in both Middle School and High School for their honorable athletic and personal contributions to the IST Athletics program in a given school year.
                    </p>
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
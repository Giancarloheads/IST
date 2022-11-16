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
                                At IST, we consider Service – whether offered to a friend, a class, the local community or the world beyond – to be both an indispensable learning experience for every student and an expected outcome of an international education.
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
<section class="x-pad-section">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="row align-items-center programs-layout-row">
                    <div class="col-lg-6 col-12">
                        <img src="<?= get_template_directory_uri() . '/resources/education/beyond.jpg'; ?>" alt="">
                    </div>
                    <div class="col-lg-6 col-12 p-md-80">
                        <div class="title">
                            STUDENT <br class="d-lg-block d-none"> GOVERNMENT
                        </div>
                        <p>
                            IST’s school philosophy explicitly identifies the need for us all to look beyond our immediate needs so as to safeguard our common future. For this reason our students engage in learning experiences aimed at helping them understand that they have a duty to the wider community. One such experience is active participation of students in government. IST students are therefore participate in, and are represented by, the Elementary and Secondary School Student Councils.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center programs-layout-row programs-last-lay-row" style="border-bottom: none!important; ">
                    <div class="col-lg-6 col-12 order-2 order-lg-1 p-md-80">
                        <div class="title">
                        SECONDARY 'WEEK WITHOUT FALLS'
                        </div>
                        <p>
                        The Secondary school operates a ‘Week Without Walls’ outdoor education program each year. The focus of the trips is for students to explore connections between their learning and the world around them. Each grade level has its own destination and a program designed to maximize the experience for the students. These trips take place during the first quarter of the school year and also provides opportunities for the classes to grow as a group and to develop bonds that will last throughout the year.
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 order-1 order-lg-2">
                        <img src="<?= get_template_directory_uri() . '/resources/education/student-support.jpg'; ?>" alt="">
                    </div>
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
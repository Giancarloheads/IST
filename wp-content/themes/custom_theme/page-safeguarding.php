<?php
get_header();
?>
<?php
include_once 'elements/nav-campus.php';
?>

<section class="container-fluid p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="ist-caption-2">
                        IST has strict safeguarding policies in place to ensure the safety, health, security and wellbeing of students and community members participating in school activities or using school facilities. Our policies adhere to the requirements and regulations set by the government of China.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-60">
    <div class="row justify-content-center align-items-center">
        <div class="col-12">
            <div class="row align-items-center programs-layout-row g-0" style="padding-top:60px;border:none; border-top:1px solid #C0C0C0;padding-bottom:0;">
                <div class="col-lg-6 col-12 p-0">
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/child-protection.jpg' ?>" alt="">
                </div>
                <div class="col-lg-5 col-12 p-md-80">
                    <div class="title">
                        CHILD PROTECTION
                    </div>
                    <p class="single-collapse-par p-t-0">
                        Child Protection provides child-centered, family-focused services to protect children and young people from significant harm caused by abuse or neglect within the family or by others. It aims to ensure that children and young people receive support and services to deal with the effects of abuse and neglect on their wellbeing and development.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-12 beliefs-collapse-container">
                    <div class="safeguard-collapse" data-collapse-pos="1">
                        <div class="d-flex justify-content-between align-items-center d-sm-wrap" data-bs-toggle="collapse" href="#safeguard-1" role="button" data-collapse-pos="1" aria-expanded="false" aria-controls="safeguard-1">
                            <div class="collapse-title-about single-collapse-par-big-txt">
                                Mission and Objectives
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <img id="safeguard-1-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                        <div class="collapse" id="safeguard-1">
                            <div class="row p-t-40">
                                <div class="col-lg-6 col-12 p-r-md-30 beliefs-collapse-par collapse-list-container">
                                    <ul class="safeguard-collapse-list single-collapse-par">
                                        <li>
                                            <span>
                                                Our school provides an environment where students feel safe, learn, develop and have a voice.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                Our school promotes community awareness of, and provides training for, safeguarding students.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                Our teachers equip and develop in students, the agency, skills and knowledge needed to keep them safe.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                Our school has procedures for the identification and reporting of cases where harm or risk of harm to a student is suspected and ensures that all staff are aware of such procedures.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                Our staff supports students who have suffered abuse or who may be at risk.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                Our Child Protection Officer monitors and reviews child protection practices and procedures.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                Our school has procedures in place to facilitate and promote the safe use of technology.
                                            </span>
                                        </li>
                                        <li>
                                            <span>
                                                Our administration ensures safe practices to verify the suitability of staff, volunteers and visitors.
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-12 beliefs-collapse-par collapse-list-container">
                                    <p class="single-collapse-par p-t-0">
                                        If any community member suspects any harm or risk of harm to a student, they should immediately report this to the Child Protection Officer (School Counselor), Principal or Director, who will take action following the IST Safeguarding and Child Protection Policies and Guidelines.
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
<?php
include 'elements/key-resources.php';
include 'elements/section-related.php';
include 'elements/about-pre-footer.php';
get_footer();
?>
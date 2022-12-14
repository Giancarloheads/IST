<?php
get_header();
?>


<?php
get_header();
?>

<section class="container-fluid p-t-180">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10 col-12 text-center title-nav-section ist-section-title-2 p-b-md-40">
                    Join the IST team
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-90">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="form-title" style="font-size:20px!important;">
                        Thank you for your interest in teaching at our school!
                    </div>
                    <a class="ist-cta-1 cta-wwu"> Our employment policies <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt=""> </a>
                    <div class="form-title p-t-30 d-lg-none d-block">
                        Please complete the following interest form below. We will get back to you as soon as possible.
                    </div>
                </div>
                <div class="col-lg-7 col-12 offset-lg-1 offset-0">
                    <div class="p-t-0 d-none d-lg-block form-title ">
                        Please complete the following interest form below. We will get back to you as soon as possible.
                    </div>
                    <form id="contacts-page-form" action="" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-6 col-12">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group col-lg-6 col-12">
                                <input type="text" class="form-control" placeholder="Surname">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="mail" class="form-control" placeholder="E-mail address">
                        </div>
                        <div class="form-group">
                            <textarea name="message" cols="30" rows="5" placeholder="Your message"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="d-none" type="file" name="cv">
                            <div class="" id="drop-area">
                                <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                                <div id="dropareatxt">
                                    Drop your resume here or click in this area
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a class="p-b-25 p-t-25 d-flex policy-anchor" href="<?= get_permalink(); ?>">
                                Read the Privacy Policy
                            </a>
                            <div class="form-check p-b-25 d-flex align-items-start">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    I have read the Privacy Policy and consent to processing of my personal data
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary contacts-submit m-0">
                            SUBMIT
                            <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-60">
    <div class="row g-0">
        <div class="col-lg-9 col-12">
            <img src="<?= get_template_directory_uri() . '/resources/img/wwu.jpg'; ?>" alt="Work with us" class="w-100 lazy">
        </div>
    </div>
</section>

<section class="container-fluid d-lg-none d-block">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-12 ist-par-about-1">
                    <div class="collapse-container-single p-t-20 p-b-60 bor-t">
                        <div data-bs-toggle="collapse" href="#elementary-collapse-single" role="button" aria-expanded="false" aria-controls="elementary-collapse-single">
                            <div class="single-collapse-par-big-txt c-red" style="border: none!important;">
                                Child protection
                            </div>
                            <div class="beliefs-collapse-par single-collapse-par">
                                The International School of Tianjin is committed to safeguarding and promoting the welfare of children and young people, and expects all employees, volunteers and other community members to share this commitment.
                            </div>
                        </div>
                        <div class="collapse" id="elementary-collapse-single">
                            <div class="beliefs-collapse-par single-collapse-par">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui molestias similique possimus aspernatur distinctio eius corrupti quisquam quo recusandae aperiam voluptates provident, totam quasi! Hic porro rerum doloribus quibusdam quis?
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
<section class="container-fluid d-lg-none d-block">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-12 ist-par-about-1">
                    <div class="collapse-container-single p-t-20 p-b-60 bor-t">
                        <div data-bs-toggle="collapse" href="#elementary-collapse-single-3" role="button" aria-expanded="false" aria-controls="elementary-collapse-single-3">
                            <div class="single-collapse-par-big-txt c-red" style="border: none!important;">
                                Equal opportunity employment policy
                            </div>
                            <div class="beliefs-collapse-par single-collapse-par">
                                It is the policy of the Board that all Board and management decisions about staff assignments, promotion, demotion, transfer, determination of salaries and benefits, and selection for training, shall be taken without regard to race, color, ....
                            </div>
                        </div>
                        <div class="collapse" id="elementary-collapse-single-3">
                            <div class="beliefs-collapse-par single-collapse-par">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui molestias similique possimus aspernatur distinctio eius corrupti quisquam quo recusandae aperiam voluptates provident, totam quasi! Hic porro rerum doloribus quibusdam quis?
                            </div>
                        </div>
                        <div class="single-collapse-trigger d-flex align-items-center" data-bs-toggle="collapse" href="#elementary-collapse-single-3" role="button" aria-expanded="false" aria-controls="elementary-collapse-single-3">
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
<section class="container-fluid d-lg-none d-block">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-12 ist-par-about-1">
                    <div class="collapse-container-single p-t-20 p-b-60 bor-t">
                        <div data-bs-toggle="collapse" href="#elementary-collapse-single-2" role="button" aria-expanded="false" aria-controls="elementary-collapse-single-2">
                            <div class="single-collapse-par-big-txt c-red" style="border: none!important;">
                                Staffing philosophy and goals
                            </div>
                            <div class="beliefs-collapse-par single-collapse-par">
                                The purpose of the International School of Tianjin is to provide the highest quality education for our students. To that end, we recognize that the personnel employed by IST constitute our single most important resource. The school therefore strives to recruit and retain only high quality staff at all levels.
                            </div>
                        </div>
                        <div class="collapse" id="elementary-collapse-single-2">
                            <div class="beliefs-collapse-par single-collapse-par">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui molestias similique possimus aspernatur distinctio eius corrupti quisquam quo recusandae aperiam voluptates provident, totam quasi! Hic porro rerum doloribus quibusdam quis?
                            </div>
                        </div>
                        <div class="single-collapse-trigger d-flex align-items-center" data-bs-toggle="collapse" href="#elementary-collapse-single-2" role="button" aria-expanded="false" aria-controls="elementary-collapse-single-2">
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
<section class="container-fluid d-lg-none d-block">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-12 ist-par-about-1">
                    <div class="collapse-container-single p-t-20 p-b-60 bor-t">
                        <div data-bs-toggle="collapse" href="#elementary-collapse-single-4" role="button" aria-expanded="false" aria-controls="elementary-collapse-single-4">
                            <div class="single-collapse-par-big-txt c-red" style="border: none!important;">
                                Professional staff compensation policy
                            </div>
                            <div class="beliefs-collapse-par single-collapse-par">
                                The International School of Tianjin seeks to recruit and retain professional staff of the highest caliber. The school compensates staff according to their qualifications and professional experience. It further recognizes and rewards professional.
                            </div>
                        </div>
                        <div class="collapse" id="elementary-collapse-single-4">
                            <div class="beliefs-collapse-par single-collapse-par">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui molestias similique possimus aspernatur distinctio eius corrupti quisquam quo recusandae aperiam voluptates provident, totam quasi! Hic porro rerum doloribus quibusdam quis?
                            </div>
                        </div>
                        <div class="single-collapse-trigger d-flex align-items-center" data-bs-toggle="collapse" href="#elementary-collapse-single-4" role="button" aria-expanded="false" aria-controls="elementary-collapse-single-4">
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

<section class="container-fluid d-lg-block d-none">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row criteria-row p-b-60">
                <div class="col-lg-3 col-12">
                    <div class="criteria-title">
                        Child protection
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <p>
                        The International School of Tianjin is committed to safeguarding and promoting the welfare of children and young people, and expects all employees, volunteers and other community members to share this commitment.
                        <br>
                        The school has a detailed code of conduct and child protection policies and safeguarding procedures to guide its actions and those of current and potential IST community members, including:
                    </p>
                    <ul>
                        <li>
                            verifyng the identity of all employees
                        </li>
                        <li>
                            requiring valid and authenticated certifications and credentials
                        </li>
                        <li>
                            screening candidates by actively seeking and following-up confidential references for all new employees
                        </li>
                        <li>
                            undertaking a security clearance involving the submission of criminal references for all new employees
                        </li>
                        <li>
                            conducting internet searches to verify information
                        </li>
                        <li>
                            requiring the signing of the IST Disclosure document
                        </li>
                    </ul>    
                </div>
            </div>
            <div class="row criteria-row p-b-60">
                <div class="col-lg-3 col-12">
                    <div class="criteria-title p-b-md-30">
                        Equal oppurunity <br>
                        employment policy
                    </div>
                </div>
                <div class="col-lg-9 col-12 d-lg-block d-none">
                    <p>
                        It is the policy of the Board that all Board and management decisions about staff assignments, promotion, demotion, transfer, determination of salaries and benefits, and selection for training, shall be taken without regard to race, color, religion, national origin, gender, sexual orientation or disability. Individual merit and suitability for the particular job shall be the only considerations. Applicable laws will be strictly observed.
                    </p>
                </div>
            </div>
            <div class="row criteria-row p-b-60">
                <div class="col-lg-3 col-12">
                    <div class="criteria-title">
                        Staffing philosophy and goals
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <p>
                        The purpose of the International School of Tianjin is to provide the highest quality education for our students. To that end, we recognize that the personnel employed by IST constitute our single most important resource. The school therefore strives to recruit and retain only high quality staff at all levels. <br>
                        The school will endeavor to employ a dynamic, effective, well-qualified, and efficient staff to carry out a constantly improving educational program. <br>
                        The Board???s specific personnel service goals are to:
                    </p>
                    <ul>
                        <li>
                            Recruit, select, employ, and retain the best qualified personnel available to staff the school in furtherance of the school???s philosophy and school-wide performance indicators;
                        </li>
                        <li>
                            Provide equal employment opportunities for all candidates for positions, in accordance with the Board???s non-discrimination policy;
                        </li>
                        <li>
                            Develop a quality of human relationships conducive to high levels of staff performance and satisfaction;
                        </li>
                        <li>
                            Deploy available staff in such a way as to use them as effectively as possible to achieve the school???s stated philosophy and school-wide performance indicators;
                        </li>
                        <li>
                            Develop and manage staff compensation, leave, and benefit programs in ways that attract and retain qualified employees;
                        </li>
                        <li>
                            Manage the development and updating of job descriptions;
                        </li>
                        <li>
                            Oversee an employee appraisal program that contributes to the improvement of staff performance and professional development;
                        </li>
                        <li>
                            Develop and maintain a dynamic program of professional development for all employees;
                        </li>
                        <li>
                            Effectively administer contracts and personnel policies with the aim of safeguarding good relations between the board and its staff.
                        </li>
                    </ul>    
                </div>
            </div>
            <div class="row criteria-row p-b-60">
                <div class="col-lg-3 col-12">
                    <div class="criteria-title p-b-md-30">
                        Professional staff <br>
                        compensation policy
                    </div>
                </div>
                <div class="col-lg-9 col-12 d-lg-block d-none">
                    <p>
                        The International School of Tianjin seeks to recruit and retain professional staff of the highest caliber. The school compensates staff according to their qualifications and professional experience. It further recognizes and rewards professional staff for excellent professional practice both inside and beyond the classroom, for assuming positions of professional leadership, for commitment to the spirit of collegiality, for the promotion of internationalism, and for excellence as role models for young people.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    include 'elements/key-resources.php';
    include 'elements/about-pre-footer.php';
get_footer();
?>
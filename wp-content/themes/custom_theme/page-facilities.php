<?php
get_header();
?>

<?php
include_once 'elements/nav-campus.php';
?>

<section class="container-fluid d-lg-block d-none">
    <div class="row">
        <div class="col-12 placeholder-3d-container">
            <img class="placeholder-3d" src="https://via.placeholder.com/1920x900/?text=placeholder_3d" alt="">
        </div>
    </div>
</section>
<section class="container-fluid d-block d-lg-none">
    <div class="row">
        <div class="col-12">
            <img class="w-100" src="https://via.placeholder.com/500x800/?text=placeholder_3d" alt="">
        </div>
    </div>
</section>
<section class="container-fluid p-t-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-lg-6 col-12 ist-par-about-1 p-b-60 p-b-md-0">
                    <div class="collapse-container-single">
                        <div data-bs-toggle="collapse" href="#elementary-collapse-single" role="button" aria-expanded="false" aria-controls="elementary-collapse-single">
                            <div class="single-collapse-par-big-txt">
                                Accompanying IST’s dynamic curriculum development has been the construction and expansion of our world class, purpose-built school campus, the first in Tianjin.
                            </div>
                        </div>
                        <div class="collapse" id="elementary-collapse-single">
                            <div class="beliefs-collapse-par single-collapse-par">
                                The school is situated on approximately 7.2 hectares of park-like grounds and has 30,000 m2 of outstanding facilities for its academic, cultural and sporting programs. The school has two main buildings: the original 12,000 m2 ‘Qin’ Building and the new 18,000 m2 ‘Han’ Building.
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
<section class="container-fluid p-t-60 p-b-60 p-b-md-0">
    <div class="row align-items-center p-b-60 d-lg-flex d-none">
        <div class="col-6">
            <div class="slider-facilities-1 w-100 h-100">
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_1.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_2.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_3.jpg' ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-4 offset-1">
            <div class="ist-section-title-2 p-b-25" style="font-weight:300;margin-right:-50px;">THE HAN BUILDING</div>
            <div class="ist-caption-1">
                The Han Building was completed in 2011 and has established a reputation in Tianjin and beyond for its stunning architecture.
                The design celebrates the use of natural light, space, and color and provides an inspiring and calming oasis beyond the bustle of life in a city of 12 million people.
                It is primarily dedicated to the secondary school but also houses school-wide facilities ensuring that students across the Nursery to Grade 12 age spectrum have opportunities to come together as one school.
            </div>
        </div>
    </div>
    <div class="row align-items-center p-b-60 d-lg-none d-flex">
        <div class="col-12">
            <div class="ist-section-title-2 p-b-25 p-t-md-25" style="font-weight:300;margin-right:-50px;">THE HAN BUILDING</div>
        </div>
        <div class="col-12">
            <div class="slider-facilities-1-mobile">
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_1.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_2.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_3.jpg' ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 p-t-30">
            <div class="ist-caption-1">
                The Han Building was completed in 2011 and has established a reputation in Tianjin and beyond for its stunning architecture.
                The design celebrates the use of natural light, space, and color and provides an inspiring and calming oasis beyond the bustle of life in a city of 12 million people.
                It is primarily dedicated to the secondary school but also houses school-wide facilities ensuring that students across the Nursery to Grade 12 age spectrum have opportunities to come together as one school.
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="top-building-collapse" data-collapse-pos="1">
                <div class="d-flex justify-content-between align-items-center d-sm-wrap" data-bs-toggle="collapse" href="#collapse-top-building-1" role="button" aria-expanded="false" aria-controls="collapse-top-building-1">
                    <div class="single-collapse-par-big-txt">
                        What the Han Building includes
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <img id="facilities-collapse-1-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                    </div>
                </div>
                <div class="collapse" id="collapse-top-building-1">
                    <div>
                        <ul class="p-b-md-30 single-collapse-par">
                            <li>
                                <span>
                                    Main and secondary administrative offices
                                </span>
                            </li>
                            <li>
                                <span>
                                    Conseling suites
                                </span>
                            </li>
                            <li>
                                <span>
                                    Student and teacher centers
                                </span>
                            </li>
                            <li>
                                <span>
                                    Extensive internal and external gardens and leisure and private study spaces
                                </span>
                            </li>
                            <li>
                                <span>
                                    30 general classrooms (equipped with computers ad digital projectors)
                                </span>
                            </li>
                        </ul>
                        <ul class="single-collapse-par">
                            <li>
                                <span>
                                    Magnificent library with resources, specialists and accomodations for all age groups
                                </span>
                            </li>
                            <li>
                                <span>
                                    4 science laboratories
                                </span>
                            </li>
                            <li>
                                <span>
                                    520-seat theater
                                </span>
                            </li>
                            <li>
                                <span>
                                    Black Box theater
                                </span>
                            </li>
                            <li>
                                <span>
                                    Extendive music suites
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid p-t-60 p-b-60 p-b-md-0">
    <div class="row align-items-center justify-content-center p-b-60 d-lg-flex d-none">
        <div class="offset-1 col-4">
            <div class="ist-section-title-2 p-b-25" style="font-weight:300;margin-right:-50px;">THE QIN BUILDING</div>
            <div class="ist-caption-1">
                The original Qin Building was completed in 2001 and was fully renovated in 2012.
                Its architectual design celebrates natural light, internal gardens, a vibrant color scheme, and shared spaces for student learning and collaboration. The Qin Building is primarily dedicated to the elementary school but also houses school-wide facilities ensuring that students across the KG 1 (Nursery) to Grade 12 (Year 13) age spectrum have opportunities to come together as one school.
            </div>
        </div>
        <div class="col-6 offset-1">
            <div class="slider-facilities-2">
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_2.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_1.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_3.jpg' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center p-b-60 d-lg-none d-flex">
        <div class="col-12">
            <div class="ist-section-title-2 p-b-25 p-t-md-25" style="font-weight:300;margin-right:-50px;">THE QIN BUILDING</div>
        </div>
        <div class="col-12">
            <div class="slider-facilities-2-mobile">
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_2.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_1.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_3.jpg' ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 p-t-30">
            <div class="ist-caption-1">
                The original Qin Building was completed in 2001 and was fully renovated in 2012.
                Its architectual design celebrates natural light, internal gardens, a vibrant color scheme, and shared spaces for student learning and collaboration. The Qin Building is primarily dedicated to the elementary school but also houses school-wide facilities ensuring that students across the KG 1 (Nursery) to Grade 12 (Year 13) age spectrum have opportunities to come together as one school.
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="top-building-collapse" data-collapse-pos="2">
                <div class="d-flex justify-content-between align-items-center d-sm-wrap" data-bs-toggle="collapse" href="#collapse-top-building-2" role="button" aria-expanded="false" aria-controls="collapse-top-building-2">
                    <div class="single-collapse-par-big-txt">
                        What the Qin Building includes
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <img id="facilities-collapse-2-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                    </div>
                </div>
                <div class="collapse" id="collapse-top-building-2">
                    <div>
                        <ul class="single-collapse-par">
                            <li>
                                <span>
                                    Elementary administrative offices
                                </span>
                            </li>
                            <li>
                                <span>
                                    Internal and external gardens and play spaces
                                </span>
                            </li>
                            <li>
                                <span>
                                    Whole school high tech Design Center including MAchine room, CAD and robotics
                                </span>
                            </li>
                            <li>
                                <span>
                                    Extensive internal and external gardens and leisure and private study spaces
                                </span>
                            </li>
                            <li>
                                <span>
                                    30 general classrooms (equipped with computers ad digital projectors)
                                </span>
                            </li>
                        </ul>
                        <ul class="single-collapse-par">
                            <li>
                                <span>
                                    Magnificent library with resources, specialists and accomodations for all age groups
                                </span>
                            </li>
                            <li>
                                <span>
                                    4 science laboratories
                                </span>
                            </li>
                            <li>
                                <span>
                                    520-seat theater
                                </span>
                            </li>
                            <li>
                                <span>
                                    Black Box theater
                                </span>
                            </li>
                            <li>
                                <span>
                                    Extendive music suites
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid p-t-60 p-b-60">
    <div class="row align-items-center p-b-60 d-lg-flex d-none">
        <div class="col-6">
            <div class="slider-facilities-3">
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_3.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_2.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_1.jpg' ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-4 offset-1">
            <div class="neg-m-r ist-section-title-2 p-b-25 " style="font-weight:300;">THE CAMPUS GROUNDS</div>
            <div class="ist-caption-1">
                IST’s magnificent buildings are designed to ensure that virtually every classroom window looks directly into either an internal garden or the school’s extensive park-like grounds and outdoor recreational spaces.
            </div>
        </div>
    </div>
    <div class="row align-items-center p-b-60 d-lg-none d-flex">
        <div class="col-12">
            <div class="neg-m-r ist-section-title-2 p-b-25 " style="font-weight:300;">THE CAMPUS GROUNDS</div>
        </div>
        <div class="col-12">
            <div class="slider-facilities-3-mobile">
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_3.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_2.jpg' ?>" alt="">
                </div>
                <div>
                    <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_1.jpg' ?>" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 p-t-30">
            <div class="ist-caption-1">
                IST’s magnificent buildings are designed to ensure that virtually every classroom window looks directly into either an internal garden or the school’s extensive park-like grounds and outdoor recreational spaces.
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="top-building-collapse" data-collapse-pos="3">
                <div class="d-flex justify-content-between align-items-center d-sm-wrap" data-bs-toggle="collapse" href="#collapse-top-building-3" role="button" aria-expanded="false" aria-controls="collapse-top-building-3">
                    <div class="single-collapse-par-big-txt">
                        What the campus ground includes
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <img id="facilities-collapse-3-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                    </div>
                </div>
                <div class="collapse" id="collapse-top-building-3">
                    <div>
                        <ul class="single-collapse-par">
                            <li>
                                <span>
                                    Eight delightful internal gardens and play areas
                                </span>
                            </li>
                            <li>
                                <span>
                                    A central, full-sized, FIFA recognized artificial soccer pitch
                                </span>
                            </li>
                            <li>
                                <span>
                                    A FIFA recognized artificial soccer pitch
                                </span>
                            </li>
                            <li>
                                <span>
                                    A 400m running track
                                </span>
                            </li>
                        </ul>
                        <ul class="single-collapse-par">
                            <li>
                                <span>
                                    An additional full-sized grass field
                                </span>
                            </li>
                            <li>
                                <span>
                                    Multiple outdoor basketball courts
                                </span>
                            </li>
                            <li>
                                <span>
                                    A range of outdoor pplay, spaces and equipment
                                </span>
                            </li>
                            <li>
                                <span>
                                    Extensive wooded area, pathways, and gardens
                                </span>
                            </li>
                        </ul>
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
<?php
get_header();
?>

<?php
include_once 'elements/nav-campus.php';
?>

<section class="container-fluid">
    <div class="row">
        <div class="col-12 placeholder-3d-container">
            <img class="placeholder-3d" src="https://via.placeholder.com/1920x900/?text=placeholder_3d" alt="">
        </div>
    </div>
</section>
<section class="container-fluid p-t-80 ">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <div class="col-6">
                    <div class="ist-subtitle-1 p-b-80">
                        Accompanying IST’s dynamic curriculum development has been the construction and expansion of our world class, purpose-built school campus, the first in Tianjin. <br> The school is situated on approximately 7.2 hectares of park-like grounds and has 30,000 m2 of outstanding facilities for its academic, cultural and sporting programs. The school has two main buildings: the original 12,000 m2 ‘Qin’ Building and the new 18,000 m2 ‘Han’ Building.
                    </div>
                </div>
            </div>
        </div>
        <hr style="width:calc(100vw - 80px); margin:auto;">
    </div>
</section>
<section class="container-fluid p-l-20 p-r-20 p-t-80 p-b-80">
    <div class="row align-items-center p-b-80">
        <div class="col-6">
            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_1.jpg' ?>" alt="">
        </div>
        <div class="col-4 offset-1">
            <div class="ist-section-title-2 p-b-25">THE HAN BUILDING</div>
            <div class="ist-caption-1">
                The Han Building was completed in 2011 and has established a reputation in Tianjin and beyond for its stunning architecture.
                The design celebrates the use of natural light, space, and color and provides an inspiring and calming oasis beyond the bustle of life in a city of 12 million people.
                It is primarily dedicated to the secondary school but also houses school-wide facilities ensuring that students across the Nursery to Grade 12 age spectrum have opportunities to come together as one school.
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="top-building-collapse">
                <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapse-top-building" role="button" aria-expanded="false" aria-controls="collapse-top-building">
                    <div>
                        What the Han Building includes
                    </div>
                    <div>
                        <img id="facilities-collapse-1-icon" style="width:20px; height:20px;" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                    </div>
                </div>
                <div class="collapse" id="collapse-top-building">
                    <div>
                        <ul>
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
                        <ul>
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

<section class="container-fluid p-l-20 p-r-20 p-t-80 p-b-80">
    <div class="row align-items-center p-b-80">
        <div class="col-4">
            <div class="ist-section-title-2 p-b-25">THE QIN BUILDING</div>
            <div class="ist-caption-1">
                The original Qin Building was completed in 2001 and was fully renovated in 2012.
                Its architectual design celebrates natural light, internal gardens, a vibrant color scheme, and shared spaces for student learning and collaboration. The Qin Building is primarily dedicated to the elementary school but also houses school-wide facilities ensuring that students across the KG 1 (Nursery) to Grade 12 (Year 13) age spectrum have opportunities to come together as one school.
            </div>
        </div>
        <div class="col-6 offset-1">
            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/campus/facilities_1.jpg' ?>" alt="">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="top-building-collapse">
                <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#collapse-top-building" role="button" aria-expanded="false" aria-controls="collapse-top-building">
                    <div>
                        What the Qin Building includes
                    </div>
                    <div>
                        <img id="facilities-collapse-1-icon" style="width:20px; height:20px;" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                    </div>
                </div>
                <div class="collapse" id="collapse-top-building">
                    <div>
                        <ul>
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
                                    Whole school high tech Design Center including  MAchine room, CAD and robotics 
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
                        <ul>
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

<style>
    .placeholder-3d-container {
        width: 100%;
        height: 80vh;
        padding-left: 20px;
        padding-right: 20px;
    }

    .placeholder-3d {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>


<?php
get_footer();
?>
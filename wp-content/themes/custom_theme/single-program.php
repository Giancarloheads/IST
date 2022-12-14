<?php
get_header();
include_once 'elements/nav-programs.php';
$id = get_the_ID();
$term = get_the_terms($id, 'division')[0]->name;
?>


<section class="container-fluid p-t-60 p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-md-3 col-12 p-b-sm-60">
                    <ul class="program-info-list">
                        <li>
                            Program:
                        </li>
                        <li>
                            <?= get_the_Title(); ?>
                        </li>
                        <li>
                            Division
                        </li>
                        <li>
                            <?= $term; ?>
                        </li>
                        <li>
                            Age:
                        </li>
                        <li>
                            <?= get_field('years'); ?>
                        </li>
                        <li>
                            Grades:
                        </li>
                        <li>
                            <?= get_field('grades_range'); ?>
                        </li>
                    </ul>
                </div>
                <div class="offset-md-1 col-md-8 col-12 offset-0 single-program-par">
                    <?= get_field('text_intro');  ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="row">
        <div class="col-lg-9 col-12">
            <img class="lazy" style="min-width:100%; max-width:100%;" src="<?= get_the_post_thumbnail_url(); ?>" alt="err">
        </div>
    </div>
</section>
<section class="container-fluid p-t-60 p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <?php
                $grades = get_field('grades');
                if($grades != '') :
                foreach ($grades as $index => $grade) :
                ?>
                    <div class="single-program-collapse" data-collapse-pos="<?= $index + 1 ?>" style="border-bottom:#C0C0C0 1px solid!important">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#single-program-collapse-<?= $index + 1 ?>" role="button" data-collapse-pos="<?= $index + 1; ?>" aria-expanded="false" aria-controls="single-program-collapse-<?= $index + 1;  ?>">
                            <div class="collapse-title-program">
                                <?= $grade['title'] ?>
                            </div>
                            <div>
                                <img id="single-program-<?= $index + 1 ?>-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                        <div class="collapse" id="single-program-collapse-<?= $index + 1 ?>">
                            <div class="row p-t-40 p-b-60">
                                <div class="col-6 beliefs-collapse-par">
                                    <p class="secondary-collapse-content-bold p-b-40">
                                        The Kindergarten, or Year 1 program, at IST is the first formal year of elementary schooling and as such it is an important link year between the productive play-based pre-school and the more structured academic programs of the elementary school. <br>
                                        A blend of developmentally appropriate directed and self-directed activities promote a love of learning and encourage social, emotional, physical and academic development within a supportive, lively environment that effectively bridges the pre-school and lower elementary school years.
                                    </p>
                                    <div>
                                        <a download href="<?= get_permalink(210); ?>" class="single-program-cta">
                                            Download KG3 units of inquiry <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 secondary-collapse-content-bold">
                                    In addition to the learning program provided in the homeroom,
                                    students in Kindergarten attend the following Specialist classes: <br><br>
                                    Art: one period per week <br>
                                    Music: two period per weeek <br>
                                    Physical Education: two period of sport, one session of fitness <br>
                                    Chinese or Mother Tongue language: 4 periods per week
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
            endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php 
    include 'elements/section-related.php';
?>

<?php 
    include 'elements/about-pre-footer.php';
?>

<?php
    get_footer();
?>
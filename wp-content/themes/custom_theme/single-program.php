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
            <img style="min-width:100%; max-width:100%;" src="<?= get_the_post_thumbnail_url(); ?>" alt="err">
        </div>
    </div>
</section>
<section class="container-fluid p-t-60 p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <?php
                $grades = get_field('grades');
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
                            <div class="row p-t-40">
                                <div class="col-12 beliefs-collapse-par">
                                    <p class="secondary-collapse-content-bold">
                                        <?= $grade['description']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
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
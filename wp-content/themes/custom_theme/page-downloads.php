<?php 
    get_header();
?>

<section class="container-fluid p-t-180 p-b-60">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12 text-center title-nav-section ist-section-title-2">
                    <?= get_the_Title(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-80">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="row justify-content-center">
                <div class="col-12 ist-section-title p-b-60 p-t-5">
                    <hr class="team-hr">
                    School Publications 
                    <div class="download-subtitle">
                        All the latest official IST school publications delivered straight to your screen
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    $args = array(
                        'post_type' => 'download',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'downloads_cat',
                                'field' => 'slug',
                                'terms' => array('publications'),
                                'operator' => 'IN'
                            ),
                        ),
                    );

                    $school_publication = get_posts($args);
                    /* echo '<pre>'; print_r($school_publication); echo '</pre>'; */
                    foreach($school_publication as $p): 
                ?>
                <div class="g-3 col-lg-4 col-md-6 col-12">
                    <div class="single-key-resources">
                        <a download href="<?= get_field('file',$p -> ID) ; ?>">
                            <div class=""><?= get_the_Title($p -> ID); ?></div>
                            <div class="key-resources-cta">
                                Donwload <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-80">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="row justify-content-center">
                <div class="col-12 ist-section-title p-b-60 p-t-5">
                    <hr class="team-hr">
                    School Application Documents
                    <div class="download-subtitle">
                        Download, fillout and return
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    $args = array(
                        'post_type' => 'download',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'downloads_cat',
                                'field' => 'slug',
                                'terms' => array('applications'),
                                'operator' => 'IN'
                            ),
                        ),
                    );

                    $applications = get_posts($args);
                    /* echo '<pre>'; print_r($school_publication); echo '</pre>'; */
                    foreach($applications as $a): 
                ?>
                <div class="g-3 col-lg-4 col-md-6 col-12">
                    <div class="single-key-resources">
                        <a download href="<?= get_field('file',$a -> ID) ; ?>">
                            <div class=""><?= get_the_Title($a -> ID); ?></div>
                            <div class="key-resources-cta">
                                Donwload <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-80">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="row justify-content-center">
                <div class="col-12 ist-section-title p-b-60 p-t-5">
                    <hr class="team-hr">
                    Board of Governors Documents
                    <div class="download-subtitle">
                        For the consideration of BOG candidates
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    $args = array(
                        'post_type' => 'download',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'downloads_cat',
                                'field' => 'slug',
                                'terms' => array('board'),
                                'operator' => 'IN'
                            ),
                        ),
                    );

                    $board = get_posts($args);
                    /* echo '<pre>'; print_r($school_publication); echo '</pre>'; */
                    foreach($board as $a): 
                ?>
                <div class="g-3 col-lg-4 col-md-6 col-12">
                    <div class="single-key-resources">
                        <a download href="<?= get_field('file',$a -> ID) ; ?>">
                            <div class=""><?= get_the_Title($a -> ID); ?></div>
                            <div class="key-resources-cta">
                                Donwload <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-80">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="row justify-content-center">
                <div class="col-12 ist-section-title p-b-60 p-t-5">
                    <hr class="team-hr">
                    Other

                </div>
            </div>
            <div class="row">
                <?php 
                    $args = array(
                        'post_type' => 'download',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'downloads_cat',
                                'field' => 'slug',
                                'terms' => array('other'),
                                'operator' => 'IN'
                            ),
                        ),
                    );

                    $board = get_posts($args);
                    /* echo '<pre>'; print_r($school_publication); echo '</pre>'; */
                    foreach($board as $a): 
                ?>
                <div class="g-3 col-lg-4 col-md-6 col-12">
                    <div class="single-key-resources">
                        <a download href="<?= get_field('file',$a -> ID) ; ?>">
                            <div class=""><?= get_the_Title($a -> ID); ?></div>
                            <div class="key-resources-cta">
                                Donwload <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </a>
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
    include 'elements/about-pre-footer.php';
    get_footer();
?>
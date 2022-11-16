<?php 
    get_header();
?>

<section class="container-fluid p-t-120 p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-12 ist-section-title p-b-60">
                    <?= get_the_Title(); ?>
                </div>
                <div class="col-12">
                    <img src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="w-100">
                </div>
                <div class="col-12 p-t-60">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid bg-white p-t-60">
    <div class="row justify-content-center">
        <div class="col-md-10 col-xs-11">
            <div class="row">
                <div class="col-12">
                    <div class="ist-section-title-2">RECENT UPDATES</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recent-news-slider-section p-b-60">
    <div class="recent-news-slider-container">
        <?php
        $args = array(
            'post_type' => 'post',
            'postsnumber' => 4,
            'order' => 'DESC',
            'orderBy' => 'date',
            'exclude' => array(get_the_ID()),
        );
        $posts = get_posts($args);

        foreach ($posts as $index => $p) :
            switch ($index) {
                case 0:
                    $cat_color = 'hover-green';
                    break;
                case 1:
                    $cat_color = 'hover-yellow';
                    break;
                case 2:
                    $cat_color = 'hover-red';
                    break;
                case 3:
                    $cat_color = 'hover-white';
                    break;
                default:
                    $cat_color = 'hover-yellow'; 
                    break;
            }
        ?>
            <a class="recent-news-slider-item" href="<?= get_permalink($p -> ID); ?>"> 
                <div class="recent-news">
                    <div class="news-cover">
                        <div class="news-img">
                            <img src="<?= get_the_post_thumbnail_url($p -> ID); ?>" alt="">
                        </div>
                        <div class="news-caption">
                            <div class="news-title">
                                <?= get_the_Title($p -> ID); ?>
                            </div>
                            <div class="news-date">
                                <?= get_the_date("Y-m-d H:i:s" , $p -> ID); ?>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-side-news  <?= ' ' . $cat_color; ?>">
                        <div class="news-title-hidden">
                            <?= get_the_excerpt($p -> ID); ?>
                        </div>
                        <div class="news-caption-hidden">
                            <div class="news-title"><?= get_the_Title($p -> ID); ?></div>
                            <div class="news-date"><?= get_the_date("Y-m-d H:i:s" , $p -> ID); ?></div>
                        </div>
                    </div>
                </div>
            </a>
        <?php
        endforeach;
        ?>
    </div>
</section>


<?php 
    include 'elements/section-related.php';
?>
<?php 
    get_footer();
?>
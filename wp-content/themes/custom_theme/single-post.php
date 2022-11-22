<?php
get_header();
?>

<section class="container-fluid p-t-120 p-b-60">
    <div class="row">
        <div class="col-12">
            <div class="ist-section-title p-b-10">
                <?= get_the_Title(); ?>
            </div>
            <div class="single-news-date p-b-60"><?= get_the_date("Y-m-d H:i:s", get_the_ID()); ?></div>
        </div>
        <div class="col-lg-7 col-12">
            <div class="row">
                <?php
                $thumbnail = get_the_post_thumbnail_url(get_the_ID());
                if ($thumbnail != '') :
                ?>

                    <div class="col-12">
                        <img src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" class="w-100">
                    </div>
                <?php endif; ?>
                <div class="col-12 single-post-content <?= $thumbnail != '' ?  'p-t-60' : ''; ?>">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3 offset-lg-1 col-12 offset-0 p-sm-t-60">
            <?php
            $args = array(
                'post_type' => 'post',
                'numberposts' => 3,
                'exclude' => array(get_the_ID()),
                'orderBy' => 'date',
                'order' => 'DESC'
            );

            $related = get_posts($args);

            foreach ($related as $p) :
            ?>
                <div class="related-single-post">
                    <a href="<?= get_permalink($p->ID); ?>">
                        <div class="title"><?= $p->post_title; ?></div>
                        <div class="date"><?= get_the_date("Y-m-d H:i:s", $p->ID);  ?></div>
                    </a>
                </div>
            <?php
            endforeach;
            ?>
        </div>
</section>

<?php
$previous = get_adjacent_post(false, '', true);
$next = get_adjacent_post(true, '', false);
?>
<section class="container-fluid p-b-60">
    <div class="row g-0 p-t-25" style="border-top : solid 1px #C0C0C0;">

        <div class="col-6 d-flex">
            <?php
            if ($previous != '') :
            ?>
                <a class="adjacent-post-anchor-prev p-r-20" href="<?= get_permalink($previous->ID); ?>">
                    <div class="d-flex justify-content-start align-items-baseline">
                        <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                        <div>
                            PREVIOUS
                        </div>
                    </div>
                    <div class="title">
                        <?= $previous->post_title; ?>
                    </div>
                </a>
            <?php
            endif;
            ?>
        </div>
        <div class="col-6 txt-right d-flex justify-content-end">
            <?php
            if ($next != '') :
            ?>
                <a class="adjacent-post-anchor-next p-l-20" href="<?= get_permalink($next->ID); ?>">
                    <div class="d-flex justify-content-end align-items-baseline">
                        <div>
                            NEXT
                        </div>
                        <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                    </div>
                    <div class="title">
                        <?= $next->post_title; ?>
                    </div>
                </a>
            <?php
            endif;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
<section class="container-fluid p-b-30 p-t-90">
    <div class="row">
        <div class="col-12">
            <div class="ist-about-title related-section-title">EXPLORE MORE</div>
        </div>
    </div>
</section>

<?php

$args = array(
    'post_type' => 'page',
    'orderby' => 'rand',
    'order' => 'ASC',
    'posts_per_page' => 6,
    'exclude' => array(get_the_ID())
);

$pages = get_posts($args);


?>
<div class="related-slider-container p-b-120 p-l-10" style="position:relative;">
    <div class="related-slider">
        <?php
        foreach ($pages as $key => $p) :
            
        ?>
            <div class="p-10" style="position:relative;">
                <a class="related-item" href="<?= get_permalink($p -> ID); ?>">
                <div class="related-img"  style="background-image:url('<?= get_the_post_thumbnail_url($p -> ID); ?>') , url('<?= get_template_directory_uri() . '/resources/img/placeholder.jpg'; ?>'); background-position:center; background-size:cover;background-repeat:no-repeat;"></div>
                    <div class="layover-related"></div>
                    <div class="related-title">
                        <?= $p->post_title; ?> <img class="related-cta-img" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
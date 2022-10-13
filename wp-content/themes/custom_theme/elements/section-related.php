<section class="container-fluid p-t-60 p-b-60" style="background-color:#F5F5F5;">
    <div class="row">
        <div class="col-12">
            <div class="ist-about-title" style="padding-left:calc(100% / 12)">EXPLORE MORE</div>
        </div>
    </div>
</section>

<?php

$args = array(
    'post_type' => 'page',
    'order_by' => 'rand',
    'posts_per_page' => 6,
    'exclude' => array(get_the_ID())
);

$pages = get_posts($args);


?>
<div class="related-slider-container p-b-60" style="background-color:#F5F5F5!important;">
    <div class="related-slider">
        <?php
        foreach ($pages as $key => $p) :
        ?>
            <div class="p-10">
                <!-- background-image: url('<?php /* get_the_post_thumbnail_url($p) */; ?>') -->
                <a class="related-item" href="<?= get_permalink($p -> ID); ?>">
                    <div class="related-img" style="background-image:url('http://via.placeholder.com/800/FF00FF'); background-position:center; background-size:cover;background-repeat:no-repeat;"></div>
                    <div class="related-title">
                        <?= $p->post_title; ?> <img class="related-cta-img" onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
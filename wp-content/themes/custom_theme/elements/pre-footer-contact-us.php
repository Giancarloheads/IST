<section class="container-fluid bg-grey p-t-180 p-b-md-120">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <div class="row">
                <div class="col-12 p-b-10">
                    EXPLORE MORE
                </div>
            </div>
        </div>
    </div>
    <div class="row p-b-100">
        <div class="related-content-container col-12">
            <?php
            $args = array(
                'post_type' => 'page',
                'order' => 'random',
                'postsnumber' => 4,
                'exclude' => array(get_the_ID() , 7)
            );
            $related_pages = get_posts($args);
            $index = 0;
            foreach ($related_pages as $p) :
                $index++;
            ?>
                <a href="<?= get_permalink($p->ID) ?>" class="p-5">
                    <div class="related-box" style="background-position:center;background-size:cover;background-image:url('<?= get_the_post_thumbnail_url($p->ID); ?>'); height:250px; width:100%;">
                        <div class="related-title">
                            <?= get_the_Title($p->ID) . $index; ?>
                        </div>
                    </div>
                </a>
            <?php
            endforeach;
            ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="w-50 m-auto text-center p-b-70" style="color:#000;">
                    <?php 
                        if(is_page(11)){
                    ?>
                        WANT TO JOIN OUR SCHOOL?
                    <?php
                        }else if(is_page(13)){
                    ?>
                    WANT TO JOIN OUR SCHOOL?
                    <?php 
                        }
                    ?>
                    </h1>
                    <div class="contact-us-link ist-cta cta-black">
                        INQUIRE NOW <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
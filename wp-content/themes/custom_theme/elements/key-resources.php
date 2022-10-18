<section class="container-fluid p-t-60 p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row justify-content-center">
                <?php if(!is_page(39)){ ?>
                <div class="p-b-60 col-12 text-center key-resource-title">
                    <?php if(is_page(162)){ ?>
                        Candidates can download the required documents:
                    <?php } else if(is_page(164)){ ?>
                        
                    <?php } else { ?>
                        Key resources
                    <?php } ?>
                </div>
                <?php
                };
                if (!is_page(39)) {

                    $key_resources = get_field('key_resources', get_the_ID());

                    if ($key_resources) {
                        foreach ($key_resources as $k) : ?>
                            <div class="g-3 col-4">
                                <div class="single-key-resources">
                                    <a href="<?= get_permalink($k); ?>">
                                        <div class=""><?= get_the_Title($k); ?></div>
                                        <div class="key-resources-cta">
                                            Donwload <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>

                    <?php
                        endforeach;
                    }
                } else {
                    ?>
                    <div class="g-3 col-4">
                        <div class="single-key-resources">
                            <a href="">
                                <div class="">Counselors's Contacts</div>
                                <a href="mailto:StudentService@isttianjin.org.cn" class="key-resources-cta">
                                    StudentService@isttianjin.org.cn
                                </a>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
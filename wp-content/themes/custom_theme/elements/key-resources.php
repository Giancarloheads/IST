<?php 
    $key_resources = get_field('key_resources', get_the_ID());
    if($key_resources != '' || is_page(39)) :
?>
<section class="container-fluid p-t-60 p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row <?= is_page(219) ? 'justify-content-center' : ''; ?>">
                <?php if(!is_page(39)){ ?>
                <div class="<?= get_the_ID() == 164 || get_the_ID() == 219 ? '' : 'p-b-60'; ?> col-12 text-center key-resource-title">
                    <?php if(is_page(162)){ ?>
                        Candidates can download the required documents:
                    <?php } else if(is_page(164)){ ?>
                        
                    <?php } else if(is_page(219)) { ?>
                        <div class="text-center m-auto p-b-30 wwu-key-resources-title">
                            Click on the heading above to download and read the document containing the full set of IST Teacher Job Description
                        </div>
                    <?php } else { ?>
                        Key resources
                    <?php } ?>
                </div>
                <?php
                };
                if (!is_page(39)) {
                    if ($key_resources) {
                        foreach ($key_resources as $k) : 
                            $acf_file = get_field('file' , $k);
                            if($acf_file){
                        ?>
                            <div class="g-3 col-lg-4 col-md-6 col-12">
                                <div class="single-key-resources">
                                    <a download href="<?= get_field('file',$k); ?>">
                                        <div class=""><?= get_the_Title($k); ?></div>
                                        <div class="key-resources-cta">
                                            Donwload <img onload="SVGInject(this)" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>

                    <?php
                            }
                        endforeach;
                    }
                } else {
                    ?>
                    <div class="g-3 col-lg-5 col-md-8 col-10">
                        <div class="single-key-resources">
                            <a target="_blank" href="mailto:studentservice@isttianjin.org.cn">
                                <div class="">Counselors's Contacts</div>
                                <a href="mailto:StudentService@isttianjin.org.cn" class="key-resources-cta c-red">
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

<?php 
    endif;
?>
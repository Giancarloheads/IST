<?php 

    $id= strval(get_the_ID());

    switch ($id) {
        case '35' :
            $svg = get_template_directory_uri() . '/resources/programs/elementary-pre-footer.svg';
            $mod_height = '80%';
            $title = 'JOIN OUR <br> ELEMENTARY SCHOOL';
            $bg = 'bg-orange';
            $cta_color = 'inherit';
            $cta_class= '';
            break;
        case '37' :
            $svg = get_template_directory_uri() . '/resources/programs/secondary-pre-footer.svg';
            $mod_height = '80%';
            $title = "JOIN OUR <br> SECONDARY SCHOOL";
            $bg = 'bg-orange';
            $cta_color = 'inherit';
            $cta_class= '';
            break;
        default:
            $svg = get_template_directory_uri() . '/resources/history/about-prefooter-img.svg';
            $title = 'JOIN OUR SCHOOL';
            $bg = 'bg-orange';
            $cta_color = 'inherit';
            $cta_class= '';
            break;
    };

    if(is_single()){
        $svg = get_template_directory_uri() . '/resources/programs/programs-footer.svg';
        $mod_height = '80%';
        $title = 'WANT TO APPLY FOR PYP?';
        $bg = 'bg-red';
        $cta_color = '#000';
        $cta_class = 'red-bg-cta';
    }
?>

<section style="border-radius:25px 25px 0 0" class="container-fluid pre-footer <?= $bg; ?> pin-section pin-section-border pin-section-mobile">
    <div class="row h-100">
        <div class="col-12 h-100 d-flex justify-content-center align-items-center pos-rel">
            <img style="height:<?= $mod_height; ?>" class="pre-footer-img" onload="SVGInject(this);" src="<?= $svg ?>" alt="">
            <div class="pre-footer-title w-100">
                <div class="ist-title-3">
                    <?= $title; ?>
                </div>
                <div class="m-md-b-40 col-lg-5 col-md-10 m-auto">
                    <div>
                        <div class="about-cta-prefooter">
                            <div class="<?= $cta_class; ?>">
                                INQUIRE NOW
                            </div>
                            <div>
                                <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
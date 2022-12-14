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
            $cta_text = 'INQUIRE NOW';
            $cta_anchor = 'contacts';
            break;
        case '37' :
            $svg = get_template_directory_uri() . '/resources/programs/secondary-pre-footer.svg';
            $mod_height = '80%';
            $title = "JOIN OUR <br> SECONDARY SCHOOL";
            $bg = 'bg-orange';
            $cta_color = 'inherit';
            $cta_class= '';
            $cta_text = 'INQUIRE NOW';
            $cta_anchor = 'contacts';
            break;
        case '217' :
            $svg = false;
            $title = 'WOULD YOU LIKE TO JOIN THE IST TEAM?';
            $bg = 'bg-orange';
            $cta_color = 'inherit';
            $cta_class= '';
            $mod_height = '';
            $cta_text = 'WORK WITH US';
            $cta_anchor = 'work-with-us';
            break;
        default:
            $svg = get_template_directory_uri() . '/resources/history/about-prefooter-img.svg';
            $title = 'JOIN OUR SCHOOL';
            $bg = 'bg-orange';
            $cta_color = 'inherit';
            $cta_class= '';
            $mod_height = '';
            $cta_text = 'INQUIRE NOW';
            $cta_anchor = 'contacts';
            break;
    };

    if(!is_single()){
        
    
?>

<section class="container-fluid border-radius-section pre-footer <?=' ' . $bg . ' '; ?> pin-section pin-section-border pin-section-mobile overview-last-pin-section">
    <div class="row h-100">
        <div class="col-12 h-100 d-flex justify-content-center align-items-center pos-rel">
            <?php 
                if($svg){
            ?>
            <img style="height:<?= $mod_height; ?>" class="pre-footer-img" onload="SVGInject(this);" src="<?= $svg ?>" alt="">
            <?php 
                };
            ?>
            <div class="pre-footer-title w-100">
                <div class="ist-title-3 scropacity w-75 m-auto w-sm-100">
                    <?= $title; ?>
                </div>
                <div class="m-md-b-40 col-lg-5 col-md-10 m-auto">
                    <div>
                        <a href="<?= get_home_url() . '/' . $cta_anchor ?>" class="about-cta-prefooter scropacity d-flex align-items-center justify-content-center">
                            <div class="<?= $cta_class; ?>">
                                <?= $cta_text; ?>
                            </div>
                            <div>
                                <img style="width:" class="cta-arrow" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    } else {
        $svg = false;
        $mod_height = '80%';
        $title = 'WANT TO APPLY FOR PYP?';
        $bg = 'bg-red';
        $cta_color = '#000';
        $cta_class = 'red-bg-cta';
        $cta_text = 'INQUIRE NOW';
        $cta_anchor = 'contacts';

        switch ($id) {
            case '144':
                $bg_image = 'baby.jpg'; 
                $title = 'WANT TO APPLY FOR BABY DRAGON PLAYGROUND';
                break;
            case '145':
                $bg_image = 'primary.jpg';
                $title = 'WANT TO APPLY FOR PYP EARLY YEARS';
                break;
            case '143':
                $bg_image = 'kg3.jpg';
                $title = 'WANT TO APPLY FOR PYP';
                break;
            case '147':
                $bg_image = 'd-program.jpg';
                $title = 'WANT TO APPLY FORM DP';
                break;
            case '146':
                $bg_image = 'm-program.jpg';
                $title = 'WANT TO APPLY FOR MYP';
                break;
        };
?>


<section class="container-fluid border-radius-section pre-footer <?=' ' . $bg . ' '; ?> pin-section pin-section-border pin-section-mobile overview-last-pin-section" style="background-position: center;background-size: cover; background-image:url('<?= get_template_directory_uri() . '/resources/programs/pre-footer/' . $bg_image; ?>')">
    <div class="row h-100">
        <div class="col-12 h-100 d-flex justify-content-center align-items-center pos-rel">
            <?php 
                if($svg){
            ?>
            <img style="height:<?= $mod_height; ?>" class="pre-footer-img" onload="SVGInject(this);" src="<?= $svg ?>" alt="">
            <?php 
                };
            ?>
            <div class="pre-footer-title w-100">
                <div class="ist-title-3 scropacity w-75 m-auto w-sm-100">
                    <?= $title; ?>
                </div>
                <div class="m-md-b-40 col-lg-5 col-md-10 m-auto">
                    <div>
                        <a href="<?= get_home_url() . '/' . $cta_anchor ?>" class="about-cta-prefooter scropacity d-flex align-items-center justify-content-center">
                            <div class="<?= $cta_class; ?>">
                                <?= $cta_text; ?>
                            </div>
                            <div>
                                <img style="width:" class="cta-arrow" onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php  
    }
?>
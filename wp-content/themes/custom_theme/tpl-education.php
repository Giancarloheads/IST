<?php
/*
*
*Template Name: Education
*
*/
get_header();
include 'elements/nav-pages-programs.php';
?>

<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                    The IST Elementary School offers an inquiry based, child centered and academically rigorous curriculum that addresses the intellectual, social and emotional needs of each child. Our goal is to develop young people who are open minded, caring, good communicators and ready to take responsibility for making a difference to the world around them.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <div class="row g-5">
                <div class="col-lg-4 col-12 edu-box">
                    <div>
                        <img src="<?= get_template_directory_uri() . '/resources/education/edu-1.png' ?>" alt="">
                    </div>
                    <a class="ist-cta" href="">
                        Baby Dragon Playgroup
                        <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                    </a>
                    <div>
                        <div>0-3 years</div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 edu-box">
                    <div>
                        <img src="<?= get_template_directory_uri() . '/resources/education/edu-1.png' ?>" alt="">
                    </div>
                    <a class="ist-cta" href="">
                        Baby Dragon Playgroup
                        <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                    </a>
                    <div>
                        <div>0-3 years</div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 edu-box">
                    <div>
                        <img src="<?= get_template_directory_uri() . '/resources/education/edu-1.png' ?>" alt="">
                    </div>
                    <a class="ist-cta" href="">
                        Baby Dragon Playgroup
                        <img class="cta-black" onload="SVGInject(this); " src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                    </a>
                    <div>
                        <div>0-3 years</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- LAYOUTS DA PANNELLO -->
<?php
$layouts = get_field('layouts', get_the_ID());
if ($layouts) :
?>
    <section class="x-pad-section">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <?php
                    foreach ($layouts as $l) :
                        if ($l['type'] == 'sx') {
                    ?>
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-12 order-2 order-lg-1">
                                    <div class="title">
                                        <?= $l['title']; ?>
                                    </div>
                                    <p>
                                        <?= $l['text']; ?>
                                    </p>
                                </div>
                                <div class="col-lg-6 col-12 order-1 order-lg-2">
                                    <img src="<?= $l['image']['url']; ?>" alt="">
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <img src="<?= $l['image']['url']; ?>" alt="">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="title">
                                        <?= $l['title']; ?>
                                    </div>
                                    <p>
                                        <?= $l['text']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php
                        }
                    endforeach;
                        ?>
                </div>
            </div>
        </div>
    </section>
    <!-- KEY RESOURCES -->
    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <?php 
                    $key_resources = get_field('key_resources' , get_the_ID());
                    echo '<pre>'; print_r($key_resources); echo '</pre>';
                    foreach($key_resources as $k ){
                        echo get_the_Title($k) . '<br><br>';
                        echo'<a href="'.get_field('file' , $k).'" target="_blank" >Download</a>';
                    };
                ?>
            </div>
        </div>               
    </section>

<?php
endif;
?>

<?php
get_footer();
?>
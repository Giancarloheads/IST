<section class="container-fluid p-t-120">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="program-title text-center">
                        <?= get_the_Title(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="nav-slider-container">
                        <div class="program-slider-prev">
                            <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                        </div>
                        <nav class="program-nav-slider page-nav">
                            <div class="<?= get_the_ID() == 144 ? 'active-nav-program' : '' ?> program-link">
                                <a href="<?= get_permalink(144); ?>">
                                    BABY DRAGON PLAYGROUND
                                </a>
                            </div>
                            <div class="<?= get_the_ID() == 145 ? 'active-nav-program' : '' ?> program-link">
                                <a href="<?= get_permalink(145); ?>">
                                    PYP EARLY YEARS KG1 - KG2
                                </a>
                            </div>
                            <div class="<?= get_the_ID() == 143 ? 'active-nav-program' : '' ?> program-link">
                                <a href="<?= get_permalink(143); ?>">
                                    PYP KG3 - KG2
                                </a>
                            </div>
                            <div class="<?= get_the_ID() == 146 ? 'active-nav-program' : '' ?> program-link">
                                <a href="<?= get_permalink(146); ?>">
                                    MYP (Grades 6 - 10)
                                </a>
                            </div>
                            <div class="<?= get_the_ID() == 147 ? 'active-nav-program' : '' ?> program-link">
                                <a href="<?= get_permalink(147); ?>">
                                    DP (Grades 11 - 12)
                                </a>
                            </div>
                        </nav>
                        <div class="program-slider-next">
                            <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid p-t-180 p-b-md-120">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10 col-12">
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
            <div class="row justify-content-center d-flex ">
                <div class="col-lg-8 col-md-10 col-sm-10">
                    <div class="nav-slider-container">
                        <div class="program-slider-prev d-flex align-items-center justify-content-center pos-rel">
                            <?php 
                            $id = get_the_ID();
                            if($id == 144 || $id == 145 || $id == 143){
                                $href = get_permalink(35);
                            } else if($id == 146 || $id == 147){
                                $href = get_permalink(37);
                            }
                            ?>
                            <a class="prev-slider-anchor" href="<?= $href; ?>">
                                <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg' ?>" alt="">
                            </a>
                        </div>
                        <nav class="program-nav-slider page-nav">
                            <?php 
                                if(get_the_ID() == 144 || get_the_ID() == 145 || get_the_ID() == 143) :
                            ?>
                            <div class="<?= get_the_ID() == 144 ? 'active-nav-program' : '' ?> program-link">
                                <a disabled>
                                    BABY DRAGON PLAYGROUND
                                </a>
                            </div>
                            <div class="<?= get_the_ID() == 145 ? 'active-nav-program' : '' ?> program-link">
                                <a disabled>
                                    PYP EARLY YEARS KG1 - KG2
                                </a>
                            </div>
                            <div class="<?= get_the_ID() == 143 ? 'active-nav-program' : '' ?> program-link">
                                <a href="<?= get_permalink(143); ?>">
                                    PYP KG3 - KG2
                                </a>
                            </div>
                            <?php 
                                endif; 
                                if(get_the_ID() == 146 || get_the_ID() == 147) : 
                            ?>
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
                            <?php 
                            endif;
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row d-none">
                <div class="col-12">
                    <nav class="nav-admission-mob">
                        <ul class="row">
                            <li class="col-12 <?= get_the_ID() == 144 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(144); ?>">BABY DRAGON PLAYGROUND</a>
                            </li>
                            <li class="col-12 <?= get_the_ID() == 145 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(145); ?>"> PYP EARLY YEARS KG1 - KG2</a>
                            </li>
                            <li class="col-12 <?= get_the_ID() == 143 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(143); ?>">PYP KG3 - KG2</a>
                            </li>
                            <li class="col-12 <?= get_the_ID() == 146 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(146); ?>">MYP (Grades 6 - 10)</a>
                            </li>
                            <li class="col-12 <?= get_the_ID() == 147 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(147); ?>">DP (Grades 11 - 12)</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


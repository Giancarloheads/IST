<section class="container-fluid p-t-180 p-b-md-120">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-12 text-center d-block d-lg-none breadcrumbs-mobile p-b-30">
                    <?php 
                        
                        switch (get_the_ID()) {
                            case 15:
                                echo 'ACCREDITATION';
                                break;
                            case 13:
                                echo 'BELIEFS & VALUES';
                                break;
                            case 11:
                                echo 'HISTORY';
                                break;
                        };
                    ?>
                </div>
                <div class="col-lg-6 col-md-10 col-12 text-center title-nav-section ist-section-title-2">
                    <?php 
                        if(is_page(15)){
                    ?>
                        Accredited by world’s leading agencies.
                    <?php 
                        }else if(is_page(13)){
                    ?>
                        The school of choice where students come first.
                    <?php 
                        }else if(is_page(11)){
                    ?>
                        Over 25 years of educational excellence.
                    <?php } ?>
                </div>
            </div>
            <div class="row justify-content-center d-none d-lg-block">
                <div class="col-12 text-center">
                    <nav class="page-nav">
                        <ul>
                            <li class="<?= get_the_ID() == 11 ? 'active-link-nav' : ''; ?>" >
                                <a href="<?= get_permalink(11); ?>"> HISTORY</a>
                            </li>
                            <li class="<?= get_the_ID() == 13 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(13); ?>">BELIEFS & VALUES</a>
                            </li>
                            <li class="<?= get_the_ID() == 15 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(15); ?>">ACCREDITATION</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center d-none">
                <div class="col-12 text-center">
                    <nav class="nav-admission-mob">
                        <ul class="row">
                            <li class="col-12 <?= get_the_ID() == 11 ? 'active-link-nav' : ''; ?>" >
                                <a href="<?= get_permalink(11); ?>"> HISTORY</a>
                            </li>
                            <li class="col-12 <?= get_the_ID() == 13 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(13); ?>">BELIEFS & VALUES</a>
                            </li>
                            <li class="col-12 <?= get_the_ID() == 15 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(15); ?>">ACCREDITATION</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
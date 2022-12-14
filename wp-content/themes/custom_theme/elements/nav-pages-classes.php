<section class="container-fluid p-t-180 p-b-md-120 bg-grey">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row justify-content-center">
                <div class="col-6 text-center p-b-120 ist-section-title-2">
                    <?= get_the_Title(); ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <nav class="page-nav">
                        <ul>
                            <li class="<?= get_the_ID() == 23 ? 'active-link-nav' : ''; ?>" >
                                <a href="<?= get_permalink(11); ?>"> OVERVIEW</a>
                            </li>
                            <li class="<?= get_the_ID() == 35 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(35); ?>">ELEMENTARY EDUCATION</a>
                            </li>
                            <li class="<?= get_the_ID() == 37 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(37); ?>">SECONDARY EDUCATION</a>
                            </li>
                            <li class="<?= get_the_ID() == 39 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(39); ?>">LEARNING SUPPORT</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
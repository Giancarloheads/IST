<section class="container-fluid p-t-240 p-b-120 bg-grey">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row justify-content-center">
                <div class="col-6 text-center p-b-120 ist-section-title-2">
                    <!-- INSERIRE ACF -->
                    Twenty-eight years of educational excellence.
                </div>
            </div>
            <div class="row justify-content-center">
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
        </div>
    </div>
</section>
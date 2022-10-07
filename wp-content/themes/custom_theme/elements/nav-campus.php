<section class="container-fluid p-t-240 p-b-120">
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
                            <li class="<?= get_the_ID() == 108  ? 'active-link-nav' : ''; ?>" >
                                <a href="<?= get_permalink(108); ?>">FACILITIES</a>
                            </li>
                            <li class="<?= get_the_ID() == 111 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(111); ?>">SCHOOL SERVICES</a>
                            </li>
                            <li class="<?= get_the_ID() == 113 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(113); ?>">SAFEGUARDING</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
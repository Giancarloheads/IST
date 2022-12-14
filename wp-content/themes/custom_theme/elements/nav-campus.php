<section class="container-fluid p-t-180 p-b-md-120">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row p-b-60 g-0">
                <div class="col-12 text-center d-block d-lg-none breadcrumbs-mobile p-b-30">
                    <?php
                    switch (get_the_ID()) {
                        case 108:
                            echo 'World class facilities: <br> modern, bright, extensive';
                            break;
                        case 111:
                            echo 'SCHOOL SERVICE';
                            break;
                        case 113:
                            echo 'SAFEGUARDING';
                            break;
                    };
                    ?>
                </div>
                <div class="col-12 text-center ist-section-title-2">
                    <?php 
                        $id = get_the_ID();
                        switch ($id) {
                            case 108:
                                echo 'World class facilities <br> modern, bright, extensive';
                                break;
                            case 111:
                                echo 'School services <br> for stundents';
                                break;
                            case 113:
                                echo 'Safeguarding';
                                break;
                        };
                    ?>

                </div>
            </div>
            <div class="row d-lg-block d-none justify-content-center p-t-60">
                <div class="col-12 text-center">
                    <nav class="page-nav">
                        <ul>
                            <li class="<?= get_the_ID() == 108  ? 'active-link-nav' : ''; ?>">
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
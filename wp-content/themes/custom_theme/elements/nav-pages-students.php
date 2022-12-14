<section class="container-fluid p-t-180 p-b-md-120">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row justify-content-center">
                <div class="col-10 text-center d-block d-lg-none breadcrumbs-mobile p-b-30">
                    <?php

                    switch (get_the_ID()) {
                        case 184:
                            echo 'CO-CURRICULAR ACTIVITIES';
                            break;
                        case 186:
                            echo 'ATHLETICS';
                            break;
                        case 188:
                            echo 'COMMUNITY & SERVICE';
                            break;
                        case 190:
                            echo 'TRIPS & EVENTS';
                            break;
                        default:
                            echo 'Error: not this page';
                            break;
                    };
                    ?>
                </div>
                <div class="col-10 text-center ist-section-title-2">
                    <?php
                    switch (get_the_ID()) {
                        case '184':
                            echo 'Co-curricular activities Program';
                            break;
                        case '186':
                            echo 'Sports at IST';
                            break;
                        case '188':
                            echo 'Community Service and Student Government';
                            break;
                        case '190':
                            echo 'Trips & Events';
                            break;
                        default:
                            echo get_the_Title();
                            break;
                    };
                    ?>
                </div>
            </div>
            <div class="row justify-content-center d-lg-block d-none p-t-60">
                <div class="col-12 text-center">
                    <nav class="page-nav">
                        <ul>
                            <li class="<?= get_the_ID() == 184 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(184); ?>">CO-CURRICULAR ACTIVITIES</a>
                            </li>
                            <li class="<?= get_the_ID() == 186 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(186); ?>">ATHLETICS</a>
                            </li>
                            <li class="<?= get_the_ID() == 188 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(188); ?>">COMMUNITY & SERVICE</a>
                            </li>
                            <li class="<?= get_the_ID() == 190 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(190); ?>">TRIPS & EVENTS</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
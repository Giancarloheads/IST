<?php
$id = strval(get_the_ID());
switch ($id) {
    case '178':
        $title = 'Largest school in Tianjin with over 400 students';
        break;
    case '171':
        $title = 'The team at IST';
        break;
    case '174':
        $title = 'Parent Faculty Organization (PFO)';
        break;
    case '176':
        $title = 'IST Alumni';
        break;
    default:
        $title = get_the_Title();
        break;
}
?>

<section class="container-fluid p-t-180 p-b-md-120">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row justify-content-center g-0">
                <div class="col-12 text-center d-block d-lg-none breadcrumbs-mobile p-b-30">
                    <?php

                    switch (get_the_ID()) {
                        case 178:
                            echo 'STUDENTS';
                            break;
                        case 171:
                            echo 'TEAM';
                            break;
                        case 174:
                            echo 'PARENT FACULTY ORGANIZATION';
                            break;
                        case 176 :
                            echo 'ALUMNI';
                            break;
                    };
                    ?>
                </div>
                <div class="col-lg-8 col-md-10 col-12 text-center title-nav-section ist-section-title-2">
                    <?= $title; ?>
                </div>
            </div>
            <div class="row justify-content-center d-lg-block d-none">
                <div class="col-12 text-center">
                    <nav class="page-nav">
                        <ul>
                            <li class="<?= get_the_ID() == 178 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(178); ?>"> STUDENTS</a>
                            </li>
                            <li class="<?= get_the_ID() == 171 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(171); ?>">TEAM</a>
                            </li>
                            <li class="<?= get_the_ID() == 174 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(174); ?>">PARENT FACULTY ORGANIZATION</a>
                            </li>
                            <li class="<?= get_the_ID() == 176 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(176); ?>">ALUMNI</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
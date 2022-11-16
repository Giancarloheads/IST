<?php
$id = strval(get_the_ID());
?>

<section class="container-fluid p-t-240 p-b-60 d-lg-block d-none">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="row justify-content-center p-b-60">
                <div class="col-lg-6 col-12 text-center ist-section-title-2">
                    <?php

                    switch ($id) {
                        case '158':
                            $title = 'Enrollment and <br> Placement Policies';
                            break;
                        case '160':
                            $title = 'School Fees <br> 2022-2023';
                            break;
                        case '162':
                            $title = '2022/2024 IST <br> Scholarship Program';
                            break;
                        case '164':
                            $title = 'Application <br> Forms';
                            break;
                        default:
                            $title = get_the_Title();
                            break;
                    }
                    ?>
                    <?= $title; ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <nav class="page-nav">
                        <ul>
                            <li class="<?= get_the_ID() == 158  ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(158); ?>">SELECTION POLICIES</a>
                            </li>
                            <li class="<?= get_the_ID() == 160 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(160); ?>">FEES</a>
                            </li>
                            <li class="<?= get_the_ID() == 162 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(162); ?>">SCHOLARSHIPS</a>
                            </li>
                            <li class="<?= get_the_ID() == 164 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(164); ?>">APPLICATION FORMS</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid p-t-180 d-block d-lg-none">
    <div class="row justify-content-center">
        <div class="col-md-10 col-12">
            <div class="row justify-content-center p-b-60">
                <div class="col-12 text-center breadcrumbs-mobile p-b-30">
                    <?php
                        switch ($id) {
                            case '158':
                                echo 'SELECTION POLICIES';
                                break;
                            case '160':
                                echo 'FEES';
                                break;
                            case '162':
                                echo 'SCHOLARSHIPS';
                                break;
                            case '164':
                                echo 'APPLICATION FORMS';
                                break;
                        };

                    ?>
                </div>
                <div class="col-12 text-center ist-section-title-2">
                    <?php

                    switch ($id) {
                        case '158':
                            $title = 'Enrollment and <br> Placement Policies';
                            break;
                        case '160':
                            $title = 'School Fees <br> 2022-2023';
                            break;
                        case '162':
                            $title = '2022/2024 IST <br> Scholarship Program';
                            break;
                        case '164':
                            $title = 'Application <br> Forms';
                            break;
                        default:
                            $title = get_the_Title();
                            break;
                    }
                    ?>
                    <?= $title; ?>
                </div>
            </div>
        </div>
    </div>
</section>
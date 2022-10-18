<?php 
    $id = strval(get_the_ID());
?>

<section class="container-fluid p-t-200 <?= $id == 164 ? '' : 'p-b-120'; ?>">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row justify-content-center">
                <div class="col-6 text-center p-b-120 ist-section-title-2">
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
                            <li class="<?= get_the_ID() == 158  ? 'active-link-nav' : ''; ?>" >
                                <a href="<?= get_permalink(158); ?>">SELECTION POLICIES</a>
                            </li>
                            <li class="<?= get_the_ID() == 160 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(160); ?>">FEED</a>
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
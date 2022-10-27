<section class="container-fluid p-t-240 p-b-md-120">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-12 text-center title-nav-section ist-section-title-2">
                    <?php 
                    if(get_the_ID() == 23){
                    ?>
                        The only 3 Program IB <br>
                        World School in Tianjin
                    <?php 
                    } else if(get_the_ID() == 35) {
                    ?>
                        Elementary School <br>
                        at IST 
                    <?php 
                    } else if(get_the_ID() == 37){
                    ?>
                        Secondary School <br>
                        at IST
                    <?php
                    } else if(get_the_ID() == 39){
                    ?>
                        Student Support <br>
                        Services Departments
                    <?php 
                    }
                    ?>
                </div>
            </div> 
            <div class="row justify-content-center d-lg-block d-none">
                <div class="col-12 text-center">
                    <nav class="page-nav">
                        <ul>
                            <li class="<?= get_the_ID() == 23 ? 'active-link-nav' : ''; ?>" >
                                <a href="<?= get_permalink(23); ?>"> OVERVIEW</a>
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
            <div class="row d-block d-lg-none">
                <div class="col-12">
                    <nav class="nav-admission-mob">
                        <ul class="row">
                            <li class="col-12 <?= get_the_ID() == 23 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(23); ?>">OVERVIEW</a>
                            </li>
                            <li class="col-12 <?= get_the_ID() == 35 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(35); ?>">ELEMENTARY EDUCATION</a>
                            </li>
                            <li class="col-12 <?= get_the_ID() == 37 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(37); ?>">SECONDARY EDUCATION</a>
                            </li>
                            <li class="col-12 <?= get_the_ID() == 39 ? 'active-link-nav' : ''; ?>">
                                <a href="<?= get_permalink(39); ?>">LEARNING SUPPORT</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
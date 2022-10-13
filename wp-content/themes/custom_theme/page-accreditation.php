<?php
get_header();
include_once 'elements/nav-pages-infos.php';
?>

<section class="container-fluid p-b-60">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <div class="col-6 ist-par-about-1">
                    Our school’s programmes and operations are fully accredited and endorsed by three of the world’s foremost international school educational agencies: The Council of International Schools, The Western Association of Schools and Colleges, and The International Baccalaureate, or IB.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-60">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <div class="col-12">
                    <div class="accreditation-collapse" data-collapse-pos="1">
                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#accreditation-collapse-1" role="button" data-collapse-pos="1" aria-expanded="false" aria-controls="accreditation-collapse-1">
                            <div class="collapse-title-about">
                                Our school is a friendly place where the needs of the student come first.
                            </div>
                            <div>
                                <img id="accreditation-collapse-1-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                        <div class="collapse" id="accreditation-collapse-1">
                            <div class="accreditation-collapse-par">
                                We all agree that the school and the family must work closely together to help each child achieve his or her unique potential. We help our students develop resilience and self-confidence, expecting them to be respectful of others and to recognize that everybody is entitled to his or her own point of view.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'elements/section-related.php';
include_once 'elements/about-pre-footer.php';
get_footer()
?>
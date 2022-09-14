<?php
    get_header();
    include_once 'elements/nav-pages-infos.php';
?>
<section class="container-fluid bg-grey">
    <div class="row justify-content-center">
        <div class="col-12 gx-3">
            <img class="w-100" src="<?= get_template_directory_uri() . '/resources/history/jumbotron.jpg' ?>" alt="">
        </div>
        <div class="col-10">
            <div class="row">
                <div class="col-6">
                    <div class="ist-par-1 p-t-70 p-b-70">
                        The International School of Tianjin opened the doors of a converted downtown Tianjin villa to some 20 children in Grades 1 to 4 on 5 September 1994. <br>
                        In 2001 IST relocated to purpose built facilities on a 7.2-hectare campus in Weishan Nan Lu in the city’s southeast. Student enrollment currently averages between 400 and 500 students.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid slider-history-section p-t-80 p-b-80">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <div class="col-12 text-left ist-section-title-2">
                    SCHOOL HISTORY
                </div>
                <div class="col-12 p-t-80 p-b-80">
                    <hr>
                    <div class="years-container">
                        <div data-slider="0" >
                            1994
                        </div>
                        <div data-slider="1">
                            1997
                        </div>
                        <div data-slider="2">
                            2000
                        </div>
                        <div data-slider="3">
                            2004
                        </div>
                        <div data-slider="4">
                            2007
                        </div>
                        <div data-slider="5">
                            2010
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="history-slider-container">
                        <div class="history-slide">
                            <div class="row">
                                <div class="col-4">
                                    1994 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, consequuntur sed? Et vitae amet ex illum, molestiae nesciunt dolore error deleniti beatae velit iusto a adipisci doloribus iure officiis itaque.
                                </div>
                                <div class="col-6 offset-2">
                                    <img src="<?= get_template_directory_uri() . '/resources/history/slide_1.jpg' ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="history-slide">
                            <div class="row">
                                <div class="col-4">
                                    19997 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, consequuntur sed? Et vitae amet ex illum, molestiae nesciunt dolore error deleniti beatae velit iusto a adipisci doloribus iure officiis itaque.
                                </div>
                                <div class="col-6 offset-2">
                                    <img src="<?= get_template_directory_uri() . '/resources/history/slide_1.jpg' ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="history-slide">
                            <div class="row">
                                <div class="col-4">
                                    2000 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, consequuntur sed? Et vitae amet ex illum, molestiae nesciunt dolore error deleniti beatae velit iusto a adipisci doloribus iure officiis itaque.
                                </div>
                                <div class="col-6 offset-2">
                                    <img src="<?= get_template_directory_uri() . '/resources/history/slide_1.jpg' ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="history-slide">
                            <div class="row">
                                <div class="col-4">
                                    2004 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, consequuntur sed? Et vitae amet ex illum, molestiae nesciunt dolore error deleniti beatae velit iusto a adipisci doloribus iure officiis itaque.
                                </div>
                                <div class="col-6 offset-2">
                                    <img src="<?= get_template_directory_uri() . '/resources/history/slide_1.jpg' ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="history-slide">
                            <div class="row">
                                <div class="col-4">
                                    2007 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, consequuntur sed? Et vitae amet ex illum, molestiae nesciunt dolore error deleniti beatae velit iusto a adipisci doloribus iure officiis itaque.
                                </div>
                                <div class="col-6 offset-2">
                                    <img src="<?= get_template_directory_uri() . '/resources/history/slide_1.jpg' ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="history-slide">
                            <div class="row">
                                <div class="col-4">
                                    2010 Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, consequuntur sed? Et vitae amet ex illum, molestiae nesciunt dolore error deleniti beatae velit iusto a adipisci doloribus iure officiis itaque.
                                </div>
                                <div class="col-6 offset-2">
                                    <img src="<?= get_template_directory_uri() . '/resources/history/slide_1.jpg' ?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once 'elements/pre-footer-contact-us.php';
get_footer()
?>
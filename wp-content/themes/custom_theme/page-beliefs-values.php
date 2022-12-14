<?php
get_header();
include_once 'elements/nav-pages-infos.php';
?>

<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-lg-6 col-12 ist-par-about-1 p-b-90">
                    The International School of Tianjin is a not-for-profit school offering an outstanding education for the students of the international community of Tianjin. <br>
                    <i>
                        Working together, <br>
                        Learning together, <br>
                        Acting together <br>
                        for our common future.
                    </i>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-l-md-30 p-r-md-30 p-b-60">
    <div class="row g-0">
        <div class="col-lg-9 col-12">
            <img class="w-100 lazy d-lg-block d-none" src="<?= get_template_directory_uri() . '/resources/about/beliefs-img-1.jpg'  ?>" alt="">
            <img class="w-100 lazy d-block d-lg-none" src=<?= get_template_directory_uri() . '/resources/about/beliefs-mobile-1.jpg'; ?>" alt="">
        </div>
    </div>
</section>
<section class="container-fluid p-b-60">
    <div class="row justify-content-center p-t-90 p-b-100">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-12 beliefs-collapse-container">
                    <div class="beliefs-collapse" data-collapse-pos="1">
                        <div class="d-flex justify-content-between align-items-center d-sm-wrap" data-bs-toggle="collapse" href="#beliefs-collapse-1" role="button" data-collapse-pos="1" aria-expanded="false" aria-controls="beliefs-collapse-1">
                            <div class="collapse-title-about">
                                Our school is a friendly place where the needs of the student come first.
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="plus-icon-collapse" class="plus-icon-collapse" id="beliefs-collapse-1-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                        <div class="collapse w-lg-50" id="beliefs-collapse-1">
                            <div class="beliefs-collapse-par">
                                We all agree that the school and the family must work closely together to help each child achieve his or her unique potential. We help our students develop resilience and self-confidence, expecting them to be respectful of others and to recognize that everybody is entitled to his or her own point of view.
                            </div>
                        </div>
                    </div>
                    <div class="beliefs-collapse" data-collapse-pos="2">
                        <div class="d-flex justify-content-between align-items-center d-sm-wrap" data-bs-toggle="collapse" href="#beliefs-collapse-2" role="button" aria-expanded="false" aria-controls="beliefs-collapse-2">
                            <div class="collapse-title-about">
                                Our students love to learn.
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="plus-icon-collapse" id="beliefs-collapse-2-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                        <div class="collapse w-lg-50" id="beliefs-collapse-2">
                            <div class="beliefs-collapse-par">
                                They learn to think for themselves, but they also understand the benefit of working together in teams. Our students learn how to think creatively and critically, how to make sound judgments, and how to apply their knowledge in real life situations. Teachers and parents have high social, moral and academic expectations of our students. Together, they challenge students to make the most of their abilities, and help them to make meaningful connections between the different branches of human knowledge. Our teachers appreciate that individual students learn differently, so they provide a variety of learning experiences and use a wide range of teaching resources, technologies, methods and assessment strategies. Our community promotes balance and wellbeing, celebrates all kinds of student success and appreciates that adults, too, are learners.
                            </div>
                        </div>
                    </div>
                    <div class="beliefs-collapse" data-collapse-pos="3">
                        <div class="d-flex justify-content-between align-items-center d-sm-wrap" data-bs-toggle="collapse" href="#beliefs-collapse-3" role="button" aria-expanded="false" aria-controls="beliefs-collapse-3">
                            <div class="collapse-title-about">
                                Our common future requires that we all look beyond our immediate needs.
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="plus-icon-collapse" id="beliefs-collapse-3-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                        <div class="collapse w-lg-50" id="beliefs-collapse-3">
                            <div class="beliefs-collapse-par">
                                For this reason, our students learn that they have a duty to the wider community and to the environment. They learn to take part in government, to give service to others, and to work towards a better and more peaceful world. They learn about our host country, China, embrace multilingualism, and reflect on how different people in the world can learn from each other. Our students learn to be honest, to persevere in everything they do, and to have the courage to defend their views while making informed and ethical choices as future leaders in our changing world.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-t-60 bg-grey">
    <div class="row justify-content-center-lg">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-lg-8 col-12 ist-about-title">
                    LEARNING OBJECTIVE <br>
                    STATEMENTS
                </div>
                <div class="col-12 ist-about-subtitle p-t-20">
                    Learners at IST strive to be:
                </div>
            </div>
        </div>
    </div>
</section>
<div class="beliefs-slider-container bg-grey d-lg-block d-none">
    <div class="beliefs-slider">
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-1.jpg' ?>)"></div>
                <div class="title" style="line-height:2;">Friendly</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-2.jpg' ?>)"></div>
                <div class="title" style="line-height:2;">Courageous</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-3.jpg' ?>)"></div>
                <div class="title" style="line-height:2;">Inquirers</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-4.jpg' ?>)"></div>
                <div class="title" style="line-height:2;">Knowledgeable</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-5.jpg' ?>)"></div>
                <div class="title">Thinkers</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-6.jpg' ?>)"> </div>
                <div class="title" style="line-height:2;">Communicators</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-7.jpg' ?>)"> </div>
                <div class="title"style="line-height:2;">Principled</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-8.jpg' ?>)"> </div>
                <div class="title" style="line-height:2;">Open-Minded</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-9.jpg' ?>)"> </div>
                <div class="title" style="line-height:2;">Caring</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-10.jpg' ?>)"> </div>
                <div class="title" style="line-height:2;">Balanced</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-11.jpg' ?>)"> </div>
                <div class="title" style="line-height:2;">Reflective</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-12.jpg' ?>)"> </div>
                <div class="title">International <br> Mindedness</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="beliefs-slider-container bg-grey d-lg-none d-block p-l-12 p-r-12 pos-rel">
    <div class="slick-prev-mobile-beliefs">
        <img id="mobile-beliefs-prev" src="<?= get_template_directory_uri() . '/resources/icons/bk_arrow.svg'; ?>" alt="">
    </div>
    <div class="slick-next-mobile-beliefs">
        <img id="mobile-beliefs-next" src="<?= get_template_directory_uri() . '/resources/icons/bk_arrow.svg'; ?>" alt="">
    </div>
    <div class="beliefs-slider-mobile">
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-1.jpg' ?>)"></div>
                <div class="title" style="line-height:2;">Friendly</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-2.jpg' ?>)"></div>
                <div class="title" style="line-height:2;">Courageous</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-3.jpg' ?>)"></div>
                <div class="title" style="line-height:2;">Inquirers</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-4.jpg' ?>)"></div>
                <div class="title" style="line-height:2;">Knowledgeable</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-5.jpg' ?>)"></div>
                <div class="title">Thinkers</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-6.jpg' ?>)"> </div>
                <div class="title" style="line-height:2;">Communicators</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-7.jpg' ?>)"> </div>
                <div class="title"style="line-height:2;">Principled</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-8.jpg' ?>)"> </div>
                <div class="title" style="line-height:2;">Open-Minded</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-9.jpg' ?>)"> </div>
                <div class="title" style="line-height:2;">Caring</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-10.jpg' ?>)"> </div>
                <div class="title" style="line-height:2;">Balanced</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-11.jpg' ?>)"> </div>
                <div class="title" style="line-height:2;">Reflective</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
        <div class="beliefs-slider-item">
            <div>
                <div class="img-container" style="background-image:url(<?= get_template_directory_uri() . '/resources/about/slide-belief/belief-slider-12.jpg' ?>)"> </div>
                <div class="title">International <br> Mindedness</div>
                <div class="par">
                    We approach uncertainty with forethought and determination; we work independently and cooperatively to explore new ideas and innovative strategies. We are resourceful and resilient in the face of challenges and change.
                </div>
            </div>
        </div>
    </div>
</div>

<section class="container-fluid p-t-110 p-b-110">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center">
                <div class="offset-lg-1 col-lg-4 offset-0 col-12 d-lg-block d-none order-1">
                    <div class="ist-about-title">
                        HIGH QUALITY LEARNING
                    </div>
                    <div class="ist-about-subtitle p-t-25">
                        Learning at IST is an inquiry-based, conceptually-driven process guided by our school Philosophy and the IB programmes where we cultivate and deepen knowledge, skills, understandings and dispositions through engaging, meaningful and diverse experiences repeated over time.
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-4 offset-0 col-12 order-1 d-lg-none d-block">
                    <div class="ist-about-title p-t-30">
                        HIGH QUALITY LEARNING
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-10 offset-0 col-12 order-lg-2 order-3 d-lg-none d-block">
                    <div class="ist-about-subtitle p-t-25">
                        Learning at IST is an inquiry-based, conceptually-driven process guided by our school Philosophy and the IB programmes where we cultivate and deepen knowledge, skills, understandings and dispositions through engaging, meaningful and diverse experiences repeated over time.
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-12 offset-0 p-t-sm-30 order-2">
                    <img class="lazy" src="<?= get_template_directory_uri() . '/resources/about/beliefs-img-2.jpg' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid p-b-60">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="row">
                <div class="col-12 beliefs-collapse-container">
                    <div class="beliefs-collapse" data-collapse-pos="4">
                        <div class="d-flex justify-content-between align-items-center d-sm-wrap" data-bs-toggle="collapse" href="#beliefs-collapse-4" role="button" data-collapse-pos="4" aria-expanded="false" aria-controls="beliefs-collapse-4">
                            <div class="collapse-title-about">
                                What does high quality learning allow?
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="plus-icon-collapse" id="beliefs-collapse-4-icon" style="width:20px; height:20px;" src="<?= get_template_directory_uri() . '/resources/icons/plus_collapse.svg' ?>" alt="">
                            </div>
                        </div>
                        <div class="collapse" id="beliefs-collapse-4">
                            <div class="beliefs-collapse-par w-100">
                                <div class="d-flex beliefs-ul-container">
                                    <ul class="belief-ul-collapse">
                                        <li>Nurtures curiosity, enthusiasm and courage</li>
                                        <li>Builds on prior experiences and is guided by a clear purpose</li>
                                        <li>Explores ideas, issues and topics of personal, local and global signigicance and extends learning to new situations and contexts</li>
                                        <li>Applies critical, creative and ethical thinking to evaluate ideas and situations</li>
                                        <li>Uses diverse literacy skills for effective communucation</li>
                                    </ul>
                                    <ul class="belief-ul-collapse">
                                        <li>Draws upon transidisciplinary skills and disciplinary knowledge, processes and structures</li>
                                        <li>Inspires innovative ideas and solutions utilizing relevant technologies and media</li>
                                        <li>Includes modeled, guided, independent and iterdependent learning experiences</li>
                                        <li>Relies on frequent and diverse forms of feedback, assessment and reflection</li>
                                        <li>Ensure students have choice, voice and ownership and opportunities for action</li>
                                    </ul>
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
    include_once 'elements/section-related.php';
    get_footer();
?>
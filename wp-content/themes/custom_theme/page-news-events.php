<?php
get_header();
?>

<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'postsnumber' => -1
);

$posts = get_posts($args);
?>

<section class="container-fluid p-t-180 p-b-60">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1 style="color: #000;" class="ist-section-title-2">
                <?php the_Title(); ?>
            </h1>
        </div>
    </div>
</section>
<main class="mix-container">
    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row g-0">
                    <div class="news-filter-container">
                        <div data-filter=".school-news">
                            <button>
                                School news
                            </button>
                        </div>
                        <div data-filter=".library-news">
                            <button>
                                Library news
                            </button>
                        </div>
                        <div data-filter=".sport-news">
                            <button>
                                Sport news
                            </button>
                        </div>
                        <div data-filter=".events">
                            <button>
                                Events
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid p-t-60 p-b-60">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <div class="row gy-4">
                    <?php
                    foreach ($posts as $i => $p) :

                        switch ($i) {
                            case 0:
                                $cat_color = 'hover-red';
                                break;
                            case 1:
                                $cat_color = 'hover-yellow';
                                break;
                            case 2:
                                $cat_color = 'hover-red';
                                break;
                            case 3:
                                $cat_color = 'hover-white';
                                break;
                            default:
                                $cat_color = 'hover-yellow';
                                break;
                        };

                        $thumbnail = get_the_post_thumbnail_url($p);
                        $cats = get_the_terms($p, 'category');
                        $catsClass = "";
                        foreach ($cats as $c) {
                            $catsClass .=  $c->slug . ' ';
                        };
                        $title = get_the_Title($p);
                        if (strlen($title) > 35) {
                            $title = substr($title, '0', '35') . '...';
                        }
                    ?>
                        <div class="col-lg-3 col-md-6 col-12 news-item <?= $catsClass; ?>">
                            <a class="recent-news-slider-item" href="<?= get_permalink($p); ?>">
                                <div class="recent-news">
                                    <div class="news-cover">
                                        <div class="news-img news-img-archive">
                                            <?php
                                            if ($thumbnail != '') {
                                            ?>
                                                <div class="news-img news-img-archive" style="background-image:url('<?= $thumbnail; ?>'); background-position:center; background-repeat: no-repeat; background-size: cover; object-fit:cover;"></div>
                                            <?php
                                            } else {
                                            ?>
                                                <div class="p-25 news-title-hidden news-title-hidden-archive">
                                                    <?= substr(get_the_excerpt($p), 0, 130) . '...';  ?>
                                                </div>
                                            <?php }; ?>
                                        </div>
                                        <div class="news-caption">
                                            <div class="news-title news-title-archive">
                                                <?= $title; ?>
                                            </div>
                                            <div class="news-date">
                                                <?= get_the_date("Y-m-d H:i:s", $p); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden-side-news <?= $cat_color; ?> hide-side-news-archive ">
                                        <div class="news-title-hidden news-title-hidden-archive">
                                            <?= substr(get_the_excerpt($p), 0, 130) . '...'; ?>
                                        </div>
                                        <div class="news-caption-hidden news-caption-hidden-archive">
                                            <div class="news-title"><?= get_the_Title($p); ?></div>
                                            <div class="news-date"><?= get_the_date("Y-m-d H:i:s", $p); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<section class="container-fluid p-t-60 p-b-60">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row g-0">
                <div class="col-12 teacher-blog-container p-b-50 p-t-10 p-l-0">
                    Teacher Blogs
                </div>
                <div class="col-12">
                    <div class="row row-cols-5">
                        <?php

                        $blog_array = array(
                            'Nursery' => 'https://blog.seesaw.me/istnursery',
                            'Pre-K' => 'https://blog.seesaw.me/istprek',
                            'KD' => 'https://blog.seesaw.me/msdingle',
                            'KM' => 'https://blog.seesaw.me/charlottekm',
                            '1R' => 'https://blog.seesaw.me/istgrade1r',
                            '1S' => 'https://blog.seesaw.me/istgrade1s',
                            '2V' => 'https://blog.seesaw.me/istgrade2v',
                            '2M' => 'https://blog.seesaw.me/istgrade2m',
                            '3S' => 'https://blog.seesaw.me/istgrade3s',
                            '3P' => 'https://blog.seesaw.me/istgrade3p',
                            '4L' => 'https://blog.seesaw.me/istgrade4l',
                            '4C' => 'https://blog.seesaw.me/istgrade4c',
                            '4P' => 'https://blog.seesaw.me/istgrade4p',
                            '5M' => 'https://blog.seesaw.me/istgrade5m',
                            '5B' => 'https://blog.seesaw.me/istgrade5b'
                        );

                        foreach ($blog_array as $name => $link) :
                        ?>
                            <div class="col-auto d-flex align-items-start justify-content-start flex-column teacher-blog-item">
                                <?= $name ?> <br>
                                <a href="<?= $link; ?>">Read blog <img onload="SVGInject(this);" src="<?= get_template_directory_uri() . '/resources/icons/arrow.svg'; ?>" alt=""></a>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
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

<section class="container-fluid p-t-120 p-b-60">
    <div class="row justify-content-center">
        <div class="col-12">
            <?php
                echo '<pre>';
                print_r($posts);
                echo '</pre>';
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
?>
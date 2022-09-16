<?php
/*
*
*Template Name: Program
* 
*/
get_header();
include 'elements/nav-pages-classes.php';
?>

<?php
$grades = get_field('grades');
foreach ($grades as $key => $g) :
?>
    <div class="col-12">
        <div data-bs-toggle="collapse" data-bs-target="#faq-collapse-<?= $key ?>" aria-expanded="false" aria-controls="faq-collapse-<?= $key ?>">
            <?= $g['title'] ?>
        </button>
        <div class="collapse" id="faq-collapse-<?= $key ?>">
            <div class="card card-body">
                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
            </div>
        </div>
    </div>

<?php
endforeach;
?>

<?php
get_footer();
?>
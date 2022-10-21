<?php
get_header();
include 'elements/nav-community.php';
?>

<section class="container-fluid p-b-120">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="ist-caption-2">
                        Our school is fortunate to have a strong Parent Faculty Organization where volunteerism is a hallmark of our community spirit. At IST we do not aim to achieve; we achieve, and we do so by working, learning and acting together as a community.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <div class="row">
        <div class="col-12">
            <img src="<?= get_template_directory_uri() . '/resources/team/pfo-top-img.jpg' ?>" alt="">
        </div>
    </div>
</section>
<section class="container-fluid p-t-60 p-b-60">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="row gx-4">
                <div class="col-lg-6 col-12">
                    <div class="ist-caption-1">
                        <p>
                            The goals of the PFO are to :
                        </p>
                        <ul class="pfo-list">
                            <li>Support the school in providing quality education.</li>
                            <li>Foster partnerships between the home and the school.</li>
                            <li>Build a sens of community</li>
                            <li>Provide a forum for input in matters relating to school policies</li>
                            <li>Raise funds for special school-related purposes</li>
                        </ul>
                        <p class="p-t-30">
                            PFO meetings are held once a month, on Wednesday mornings. <br>
                            All parents are cordially invited to attend these meetings.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="ist-caption-1">
                        <p>
                            The PFO events and activities are planned and managed by a PFO Committee. The 2022-23 school year PFO Committee members and their email are listed below. Please feel free to write to them in case of any questions regarding school life or life in Tianjin.
                        </p>
                        <p class="p-t-30">
                            Please see below for ongoing activities organized by the PFO throughout the year. Please scan the QR code of the activity that you're interested in and join in. Of course you need to be a current IST parent to be able to join in these activities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'elements/key-resources.php';
include 'elements/about-pre-footer.php';
get_footer();
?>
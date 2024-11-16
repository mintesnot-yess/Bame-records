<?php
include base_path("app/views/partials/header.php");
?>
<div class="container">
    <?php include base_path("app/views/partials/aside.php"); ?>
    <main>

        <?php include "pages/partials/header.php"; ?>
        <!-- pages -->
        <?php if (isset($_GET['artists'])): ?>
        <?php include "pages/artists.php"; ?>
        <?php elseif (isset($_GET['events'])): ?>
        <?php include "pages/events.php"; ?>
        <?php elseif (isset($_GET['studio-booking'])): ?>
        <?php include "pages/studio-booking.php"; ?>
        <?php elseif (isset($_GET['musics'])): ?>
        <?php include "pages/music.php"; ?>
        <!-- --------------- -->

        <!-- creating pages -->
        <?php elseif (isset($_GET['add-events'])): ?>
        <?php include "pages/creating-page/events.php"; ?>
        <?php elseif (isset($_GET['add-artist'])): ?>
        <?php include "pages/creating-page/artists.php"; ?>
        <?php elseif (isset($_GET['add-studio-free-time'])): ?>
        <?php include "pages/creating-page/studio-free-time.php"; ?>
        <?php elseif (isset($_GET['add-musics'])): ?>
        <?php include "pages/creating-page/music.php"; ?>

        <!-- ------------- -->


        <?php else: ?>

        <?php include "pages/home.php"; ?>
        <?php endif ?>

    </main>

    <?php if (isset($_GET['msg'])): ?>

    <div class="toast_cont">
        <div class="toast" style="transform: translateX(0%);"> <i class="fa fa-check success_toast"
                aria-hidden="true"></i>
            <?= $_GET['msg'] ?></div>
    </div>

    <?php endif ?>

</div>

<script>
// hestory back
function historyBack() {
    history.back();
}

let toast = document.querySelector(".toast_cont");


setTimeout(function() {
    toast.style.opacity = '0';
}, 3800);
setTimeout(function() {
    toast.remove();
}, 4000);


// toggle navigation bar using jquery
$(document).ready(function() {
    $(".nav-toggle").click(function() {
        $("aside").toggle();
    });
});
</script>
</body>

</html>
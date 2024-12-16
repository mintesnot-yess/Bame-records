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
        <!-- editing pages -->

        <?php elseif (isset($_GET['edit-artist'])): ?>
        <?php include "pages/edit/artists.php"; ?>
        <?php elseif (isset($_GET['edit-events'])): ?>
        <?php include "pages/edit/events.php"; ?>
        <?php elseif (isset($_GET['edit-music'])): ?>
        <?php include "pages/edit/musics.php"; ?>

        <!--  -->

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
let audio = document.getElementById("audio");
let playButton = document.querySelectorAll(".play-audio");
let PlayToHidden = document.querySelectorAll(".play-hidden");
let ArtistName = document.querySelector(".artist");
let MusicTitle = document.querySelector(".title");
let AlbemArt = document.querySelector(".bg-image");
let YoutubeLink = document.querySelector(".youtube-link");
let VolumeCtr = document.querySelector(".volume");
let MusicCurrentIndex = 0;


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




$.get(`musics?json`, function(data) {
    let musics = JSON.parse(data);
    console.table(musics[0].artist);
    ArtistName.textContent = musics[0].artist;
    MusicTitle.textContent = musics[0].title;
    AlbemArt.style.background = `url("assets/music/albem-arts/${musics[0].albem_art}") center/cover`;
    YoutubeLink.href = musics[0].link;

    audio.src = `assets/music/music-src/${musics[0].music}`;

    $(".NextMusicBtn").click(function(e) {
        MusicCurrentIndex = (MusicCurrentIndex + 1) % musics.length;

        ArtistName.textContent = musics[MusicCurrentIndex].artist;
        MusicTitle.textContent = musics[MusicCurrentIndex].title;
        YoutubeLink.href = musics[MusicCurrentIndex].link;
        AlbemArt.style.background =
            `url("assets/music/albem-arts/${musics[MusicCurrentIndex].albem_art}") center/cover`;
        audio.src = `assets/music/music-src/${musics[MusicCurrentIndex].music}`;
        AudioPlayer();
    });

    $(".previousMusicBtn").click(function(e) {
        MusicCurrentIndex = (MusicCurrentIndex - 1) % musics.length;
        YoutubeLink.href = musics[MusicCurrentIndex].link;

        ArtistName.textContent = musics[MusicCurrentIndex].artist;
        MusicTitle.textContent = musics[MusicCurrentIndex].title;
        AlbemArt.style.background =
            `url("assets/music/albem-arts/${musics[MusicCurrentIndex].albem_art}") center/cover`;
        audio.src = `assets/music/music-src/${musics[MusicCurrentIndex].music}`;
        AudioPlayer();
    });

    audio.addEventListener("ended", function() {
        YoutubeLink.style.height = "100%";
        setTimeout(() => {
            YoutubeLink.style.height = "0%";

            MusicCurrentIndex = (MusicCurrentIndex + 1) % musics.length;
            ArtistName.textContent = musics[MusicCurrentIndex].artist;
            MusicTitle.textContent = musics[MusicCurrentIndex].title;
            YoutubeLink.href = musics[MusicCurrentIndex].link;
            AlbemArt.style.background =
                `url("assets/music/albem-arts/${musics[MusicCurrentIndex].albem_art}") center/cover`;
            audio.src = `assets/music/music-src/${musics[MusicCurrentIndex].music}`;
            AudioPlayer();
        }, 10000);
    });
});

function AudioPlayer() {
    if (audio.paused) {
        audio.play();
        VolumeCtr.style.flex = "1";
    } else {
        audio.pause();
        VolumeCtr.style.flex = "0";
    }
}
audio.addEventListener("pause", function() {
    playButton.forEach(item => {
        item.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';
    });
});
audio.addEventListener("play", function() {
    playButton.forEach(item => {
        item.innerHTML = '<i class="fa fa-pause" aria-hidden="true"></i>';
    });
});

function formatTime(time) {
    let minutes = Math.floor(time / 60);
    let seconds = Math.floor(time % 60);
    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;
    return `${minutes}:${seconds}`;
}

audio.addEventListener("timeupdate", function() {
    let duration = document.querySelector("#duration");
    let MusicSlider = document.querySelector("input[type='range']");
    MusicSlider.value = (audio.currentTime / audio.duration) * 100;
    let currentTime = document.querySelector("#current-time");
    let ProgressBar = document.querySelector(".progress-bar");
    ProgressBar.style.width = `${(audio.currentTime / audio.duration) * 100}%`;
    currentTime.textContent = formatTime(audio.currentTime);
    duration.textContent = formatTime(audio.duration);
});



VolumeCtr.addEventListener("click", function() {
    let volume = audio.volume;
    audio.volume = volume === 0 ? 1 : 0;

    if (volume === 0) {
        VolumeCtr.innerHTML = '<i class="fa fa-volume-up" aria-hidden="true"></i>';
    } else {
        VolumeCtr.innerHTML = '<i class="fa fa-volume-off" aria-hidden="true"></i>';
    }
});


function play_up(card) {
    var music_sours = card.getAttribute("data-music_sours");
    var image_sours = card.getAttribute("data-image");
    var artist = card.getAttribute("data-artist");
    var data_youtube_link = card.getAttribute("data-youtube-link");
    var title = card.getAttribute("data-title");

    ArtistName.textContent = artist;
    MusicTitle.textContent = title;
    YoutubeLink.href = data_youtube_link;
    AlbemArt.style.background =
        `url("assets/music/albem-arts/${image_sours}") center/cover`;

    audio.src = `assets/music/music-src/${music_sours}`;

    AudioPlayer();



}
</script>
</body>

</html>
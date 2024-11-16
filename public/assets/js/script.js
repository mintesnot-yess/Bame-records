let navList = document.querySelector(".nav-list");
let audio = document.getElementById("audio");
let playButton = document.querySelectorAll(".play-audio");
let PlayToHidden = document.querySelectorAll(".play-hidden");
let ArtistName = document.querySelector(".artist");
let MusicTitle = document.querySelector(".title");
let AlbemArt = document.querySelector(".bg-image");
let VolumeCtr = document.querySelector(".volume");

function toggleNavList() {
  navList.style.display == "flex" ? (navList.style.display = "none") : (navList.style.display = "flex");
}

let StudioImages = document.querySelectorAll("#studio-images img");
let ImageCurrentIndexBame = 0;
let ImageCurrentIndex = 0;
let MusicCurrentIndex = 1;
//music source list
let musicList = [
  {
    artist: "Negestst",
    title: "ere",
    src: "assets/music/music-src/Negestat - Eree (Official Music Video).mp3",
    alber_art: "assets/music/albem-arts/negestat1.jpg"
  },

  {
    artist: "Fire Ball ",
    title: "Velocity",
    src: "assets/music/music-src/Firebal.mp3",
    alber_art: "assets/music/albem-arts/R.jpeg"
  },

  {
    artist: "Go one",
    title: "1 2 3 Go",
    src: "assets/music/music-src/Go.mp3",
    alber_art: "assets/music/albem-arts/albem1.jpeg"
  }
];

StudioImages[1].style.flex = "1";
StudioImages[1].style.height = "100%";

ArtistName.textContent = musicList[0].artist;
MusicTitle.textContent = musicList[0].title;
AlbemArt.style.background = `url("${musicList[0].alber_art}") center/cover`;
audio.src = musicList[0].src;
var ImageNext = true;

function StudioImageNext() {
  StudioImages[ImageCurrentIndex].style.flex = "0";
  StudioImages[ImageCurrentIndex].style.height = "0";
  ImageCurrentIndex = (ImageCurrentIndex + 1) % StudioImages.length;

  StudioImages[ImageCurrentIndex].style.flex = "1";
  StudioImages[ImageCurrentIndex].style.height = "100%";
}

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
  let MusicSlider = document.querySelector("input[type='range']");
  MusicSlider.value = (audio.currentTime / audio.duration) * 100;
  let currentTime = document.querySelector("#current-time");
  let duration = document.querySelector("#duration");
  let ProgressBar = document.querySelector(".progress-bar");
  ProgressBar.style.width = `${(audio.currentTime / audio.duration) * 100}%`;
  currentTime.textContent = formatTime(audio.currentTime);
  duration.textContent = formatTime(audio.duration);
});

audio.addEventListener("ended", function() {
  nextMusic();
});

function nextMusic() {
  let currentMusic = musicList[MusicCurrentIndex];
  ArtistName.textContent = currentMusic.artist;
  MusicTitle.textContent = currentMusic.title;
  audio.src = currentMusic.src;

  MusicCurrentIndex = (MusicCurrentIndex + 1) % musicList.length;
  AlbemArt.style.background = `url("${currentMusic.alber_art}") center/cover`;
  AudioPlayer();
}

function previousMusic() {
  let currentMusic = musicList[MusicCurrentIndex];
  ArtistName.textContent = currentMusic.artist;
  MusicTitle.textContent = currentMusic.title;
  audio.src = currentMusic.src;
  MusicCurrentIndex = (MusicCurrentIndex - 1) % musicList.length;
  AlbemArt.style.background = `url("${currentMusic.alber_art}") center/cover`;
  AudioPlayer();
}

VolumeCtr.addEventListener("click", function() {
  let volume = audio.volume;
  audio.volume = volume === 0 ? 1 : 0;

  if (volume === 0) {
    VolumeCtr.innerHTML = '<i class="fa fa-volume-up" aria-hidden="true"></i>';
  } else {
    VolumeCtr.innerHTML = '<i class="fa fa-volume-off" aria-hidden="true"></i>';
  }
});

// booking form
$("#studio-booking-form").submit(function(e) {
  e.preventDefault();

  let name = $("#name").val();
  let email = $("#email").val();
  let phone = $("#phone").val();
  let date = $("#date").val();
  let time = $("#time").val();

  $.post(
    "studio-booking",
    {
      booking_submit: "",
      name: name,
      email: email,
      phone: phone,
      date: date,
      time: time
    },

    function(data) {
      // if (data.message === "success") {
      //   $("#booking-form")[0].reset();
      //   $(".bg-msg").html(data.message);
      // }

      if (data == "Booking successful") {
        $(".bg-msg").html(`<p>${data}</p>`);
        $("#studio-booking-form").hide();
        $("#booking-successful").show();
      } else {
        $(".bg-msg").html(`<p class="danger-text">${data}</p>`);
      }
      // show_toest(data, "booking");
    }
  );
});

function notifyMe(title, message, links) {
  if (Notification.permission === "granted") {
    const options = {
      title: title,
      body: message,
      tag: "bame-notification",
      icon: "assets/images/bame-logo.png"
    };
    const notification = new Notification(title, options);
    notification.onclick = () => {
      window.location.href = links;
      notification.close();
    };
  } else {
    Notification.requestPermission().then(function(permission) {
      if (permission === "granted") {
        notifyMe(title, message, links);
      }
    });
  }
}

function showNotification(NotTitle, message) {}

$("#refresh").click(function(e) {
  location.reload();
});
// Refresh the page

// featch booking details
$.get("studio-booking?json", function(data) {
  let bookingDate = JSON.parse(data)[0]["date"];
  let currentDate = new Date();
  let currentDateFormat = `${currentDate.getFullYear()}-${currentDate.getMonth() + 1}-${currentDate.getDate()}`;
  //
  if (bookingDate === currentDateFormat) {
    notifyMe("BAME RECORDS Booking ALERT", `One Day Left | Look at this now`, "http://localhost:8000/#form");
  }
});

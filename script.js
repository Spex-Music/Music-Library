import WaveSurfer from 'https://unpkg.com/wavesurfer.js@7/dist/wavesurfer.esm.js'

function sp3x_make_song_box() {
  const song_container = document.createElement("div");
  song_container.classList.add("song-container");

  const song_image = document.createElement("img");
  song_image.src = "assets/png/1.png";
  song_container.appendChild(song_image);

  const song_container_info = document.createElement("div");
  song_container_info.classList.add("song-container-info");

  const song_name = document.createElement("h2");
  song_name.classList.add("song-name");
  const song_name_text = document.createTextNode("Song Name");
  song_name.appendChild(song_name_text);
  song_container_info.appendChild(song_name);

  const artist_name = document.createElement("h3");
  artist_name.classList.add("artist-name");
  const artist_name_text = document.createTextNode("Artist Name");
  artist_name.appendChild(artist_name_text);
  song_container_info.appendChild(artist_name);

  const song_published = document.createElement("p");
  song_published.classList.add("song-published");
  const song_published_text = document.createTextNode("2023-04-10");
  song_published.appendChild(song_published_text);
  song_container_info.appendChild(song_published);

  const song_container_footer = document.createElement("div");
  song_container_footer.classList.add("song-container-footer");

  const play_button = document.createElement("button");
  play_button.classList.add("play-button");
  const play_button_text = document.createTextNode("Play");
  play_button.appendChild(play_button_text);
  song_container_footer.appendChild(play_button);

  const genre_label = document.createElement("p");
  genre_label.classList.add("genre-label");
  const genre_label_text = document.createTextNode("Genre");
  genre_label.appendChild(genre_label_text);
  song_container_footer.appendChild(genre_label);

  song_container_info.appendChild(song_container_footer);

  song_container.appendChild(song_container_info);

  return song_container;
}
function switchTab(elementToShow) {
  const tabContainers = document.querySelectorAll(".main-container");
  tabContainers.forEach((container) => {
    console.log(elementToShow.id);
    console.log(container.id);
    if (container.id == elementToShow.id) {
      container.style.display = "flex";
    } else {
      container.style.display = "none";
    }
  });
}

function toggleLogin(event) {
  console.log(event);
  const loginSection = document.getElementById("spex-login");
  if (loginSection.style.display === "none") {
    loginSection.style.display = "block";
  } else {
    loginSection.style.display = "none";
  }
}

function sp3x_start(event) {
  console.log("sp3x_start", event.type, Date());
  const selection_output = document.getElementById("selection-output");

  let songs = 0;
  const size = 120;
  for (songs = 0; songs < size; songs++) {
    const song_box = sp3x_make_song_box();
    selection_output.appendChild(song_box);
  }
}
document.addEventListener("DOMContentLoaded", sp3x_start);


// ----------------------    Music Bar   ---------------------- 

const duration = document.querySelector("#duration");
const current = document.querySelector("#current");
const play = document.querySelector("#play");
const pause = document.querySelector("#pause");
const stop = document.querySelector("#stop");
const volumeunmute = document.querySelector("#volumeunmute");
const volumemute = document.querySelector("#volumemute");

const trackPlayBtn = document.querySelector("#track-play-btn");
const musicBarImg = document.querySelector("#music-bar-img");
const musicBar = document.querySelector("#music-bar");
const bannerPlayBtn = document.querySelector("#banner-play-btn");

trackPlayBtn.onclick= function() {
  musicBar.style.bottom = "0%";
  musicBarImg.style.opacity = "100%";
}

bannerPlayBtn.onclick= function() {
  musicBar.style.bottom = "0%";
  musicBarImg.style.opacity = "100%";
}

document.getElementById("controls-right").onmousemove= function() {
  document.getElementById("volume-box").style.bottom = "15px";
}
document.getElementById("volume-box").onmouseleave= function() {
  document.getElementById("volume-box").style.bottom = "-100px";
}
document.getElementById("volume-area").onmouseleave= function() {
  document.getElementById("volume-box").style.bottom = "-100px";
}

const timeCalculator = function (value) {
  const second = Math.floor(value % 60);
  const minute = Math.floor((value / 60) % 60);

  return minute + ":" + ((second < 10) ? "0" + second : second );
};


// ----------------------    Music Wave   ---------------------- 

const wavesurfer = WaveSurfer.create({
  container: "#wave",
  waveColor: "#E5E4E2",
  progressColor: "#818589",
  height: 40,
  scrollParent: false
});

// ----------------------    Load Audio File   ---------------------- 

wavesurfer.load("./Calvin Harris  Desire (ZERØ REMIX) EXTENDED MIX.wav")

// ----------------------    Play, Pause, Stop and Volume a player   ---------------------- 

play.addEventListener("click", function (e) {
  wavesurfer.play();
});
trackPlayBtn.addEventListener("click", function (e) {
  wavesurfer.play();
});
bannerPlayBtn.addEventListener("click", function (e) {
  wavesurfer.play();
});

pause.addEventListener("click", function (e) {
  wavesurfer.pause();
});

stop.addEventListener("click", function (e) {
  wavesurfer.stop();
});

volumeunmute.addEventListener("click", function (e) {
  wavesurfer.setMuted(true);
});

volumemute.addEventListener("click", function (e) {
  wavesurfer.setMuted(false);
});

// ----------------------    Load audio duration on load   ---------------------- 

wavesurfer.on("ready", function (e){
  const content = timeCalculator(wavesurfer.getDuration());
  console.log (content);
  
  duration.textContent = content;

});

// ----------------------    get update current time on play   ---------------------- 

wavesurfer.on("audioprocess", function (e){
  current.textContent=timeCalculator(wavesurfer.getCurrentTime());
  
});

// ----------------------    Change play button to pause on playing   ---------------------- 

wavesurfer.on("play", function (e) {
  play.style.display = 'none';
  pause.style.display = 'flex';
});

// ----------------------    Change pause button to play on playing   ---------------------- 

wavesurfer.on("pause", function (e) {
  play.style.display = 'flex';
  pause.style.display = 'none';
});

// ----------------------    Update current time on seek   ---------------------- 

wavesurfer.on("seek", function (e){
  current.textContent=timeCalculator(wavesurfer.getCurrentTime());
});

// ----------------------    Change volume button   ----------------------

volumeunmute.onclick= function() {
  volumeunmute.style.display = "none";
  volumemute.style.display = "flex";
  output.innerHTML=0;
}

volumemute.onclick= function() {
  volumemute.style.display = "none";
  volumeunmute.style.display = "flex";
  output.innerHTML=x;
}


// ----------------------    Music Bar Start   ----------------------

let x = 10;
var vol = 1;
let output = document.getElementById('output');
let meter = document.getElementById('meter');
let plus = document.getElementById('plus');
let minus = document.getElementById('minus');
output.innerHTML=x;

plus.onclick= function () {
    if (x >= 10){
        return false;
    }
    if (vol >= 1){
        return false;
    }
    if (x => 1){
      volumeunmute.style.display = "flex";
      volumemute.style.display = "none";
      wavesurfer.setMuted(false);
  }
    if (x >= 7){
   meter.style.background = "#f00"
   meter.style.filter = "drop-shadow(0 0 2.5px #f00) drop-shadow(0 0 10px #f00)"
    }
  vol += 0.1;
  wavesurfer.setVolume(vol);
  output.innerHTML= ++x;
  meter.style.width = x*10+'%' ;
}

minus.onclick= function () {
    if (x <= 1){
      volumeunmute.style.display = "none";
      volumemute.style.display = "flex";
      wavesurfer.setMuted(true);
    }
    if (x <= 0){
        return false;
    }
    if (vol <= 0.00){
        return false;
    }
    if (x <= 7){
        meter.style.background = "#0f0"
        meter.style.filter = "drop-shadow(0 0 2.5px #f00) drop-shadow(0 0 10px #0f0)"
         }
  vol -= 0.1;
  wavesurfer.setVolume(vol);
  output.innerHTML= --x;
  meter.style.width = x*10+'%' ;
}

// ----------------------    Music Bar Start   ----------------------

let barDownload = document.querySelector(".bar-download");

barDownload.addEventListener("click", ()=>{
  barDownload.classList.add("active");

  setTimeout(()=>{
    barDownload.classList.remove("active");  // remove active class after 6s
    document.querySelector("i").classList.replace("bx-cloud-download", "bx-check-circle")
    document.querySelector(".bar-down").innerHTML = "Completed";

  },6000) //1s = 1000ms
})

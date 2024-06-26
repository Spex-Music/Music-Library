<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../head.html"; ?>

    <!--  Waveform link-->


</head>

<body>  
    <?php 
      include "../navbar/navbar.php";
      include "../login/login.php";
    ?>
    <main>

<!--              Music Library Start              -->    

<!-- <div id="spex-library" class="main-container">
    <h1 id="latest-release">Latest Releases</h1>
    <section id="banner">

        <div id="banner-content">
            <img id="banner-image" src="assets/png/Cover Art.png">
            <div id="banner-info">
                <img src="assets/png/icons/trending.png" alt="Trending Release">
                <p id="banner-topic">Trending Release</p>
                <h2 id="banner-heading">Song Title</h2>
                <p id="banner-artist">Artist Name</p>
                <div id="banner-buttons">
                    <button>Play</button>
                    <button>Download</button>
                </div>
            </div>
        </div>
    </section>

    <section id="music-filters">
        <input class="music-filter" id="" />
        <select class="music-filter"></select>
        <div class="music-filter-special" id="track-type-container">
            <button class="filter-track-type" id="type-typical">Typical</button>
            <button class="filter-track-type" id="type-instrumental">Instrumental</button>
        </div>
    </section>

    <section id="music-selection">
        <output id="selection-output"></output>
    </section>

</div> -->

    <div id="spex-library" class="main-container">
        <header class="header">
            <h1>Latest Releases</h1>
        </header>

        <section id="banner">
            <div id="banner-content">
                <img id="banner-image" src="Blake Hills - Don't Be Shy (Cover Art).jpg">
                <div id="banner-info">
                    <div class="banner-trending">
                        <i class='bx bx-trending-up'></i>
                        <p class="banner-topic">Trending Release</p>
                    </div>
                    <h2 id="banner-heading">Don't Be Shy</h2>
                    <p id="banner-artist">Blake Hills</p>
                    <div id="banner-buttons">
                        <button id="banner-play-btn">
                            <i class='bx bx-play-circle bx-flashing' ></i>
                            <span>Play</span>
                        </button>
                        <button id="banner-download-btn">
                            <i class='bx bxs-download bx-flashing' ></i>
                            <span>Download</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="music-library">
            <div class="filter-area">
                <div class="music-filter-name">
                    <i class='bx bx-search-alt'></i>
                    <input type="text" placeholder="Search Name"></input>
                </div>

                <div class="music-filter-name">
                    <i class='bx bx-user'></i>
                    <input type="text" placeholder="Search Artist"></input>
                </div>

                <div class="music-filter-genre">
                    <i class='bx bx-purchase-tag bx-rotate-90'></i>
                    <select id="genrelist" name="Genrelist">
                        <option selected disabled></option>
                        <option value="Bass">Bass</option>
                        <option value="Bass House">Bass House</option>
                        <option value="Chill">Chill</option>
                        <option value="Deep House">Deep House</option>
                        <option value="Drum & Bass">Drum & Bass</option>
                        <option value="Drumstep">Drumstep</option>
                        <option value="Dubstep">Dubstep</option>
                        <option value="EDM">EDM</option>
                        <option value="Electro House">Electro House</option>
                        <option value="Electronic">Electronic</option>
                        <option value="Future Bass">Future Bass</option>
                        <option value="Future House">Future House</option>
                        <option value="Glitch Hop">Glitch Hop</option>
                        <option value="Hardstyle">Hardstyle</option>
                        <option value="House">House</option>
                        <option value="Melodic Dubstep">Melodic Dubstep</option>
                        <option value="Phonk">Phonk</option>
                        <option value="Progressive House/Melodic Progressive House">Progressive House/Melodic Progressive House</option>
                        <option value="Tech House">Tech House</option>
                        <option value="Techno">Techno</option>
                        <option value="Trap">Trap</option>
                        <option value="Tropical House">Tropical House</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="music-filter-special">
                    <div class="track-type" id="track-type-container">
                        <input type="checkbox" class="filter-track-type" id="type-typical"></input>
                        <label for="Typical">Typical</label>
                    </div>
                    <div class="track-type" id="track-type-container">
                        <input type="checkbox" class="filter-track-type" id="type-instrumental"></input>
                        <label for="Instrumental">Instrumental</label>
                    </div>
                </div>
            </div>

            <div id="grid-container">
                <div class="slider" id="slider1">
                    <div class="track-block" id="grid1">
                        <a href="" class="details-bar">
                            <div class="upper-area">
                                <div id="track-img" style="background-image: url(/Prod.\ Core\ -\ What\ The\ Phonk\ \(Cover\ Art\).jpg);"></div>
                            </div>
                            <div class="lower-area">
                                <p>What The Phonk</p>
                                <span>Prod. Core</span>
                            </div>
                        </a>
                        <div class="option-bar">
                            <div class="track-options">
                                <div class="track-details">
                                    <p>2 days ago</p>
                                    <span>Progressive House</span>
                                </div>
                                <div class="track-play">
                                    <button id="track-play-btn">
                                        <i class='bx bx-play-circle'></i>
                                        <span>Play</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="track-block" id="grid1">
                        <a href="" class="details-bar">
                            <div class="upper-area">
                                <div id="track-img" style="background-image: url(/Fred\ X\ -\ Struggle\ \(Cover\ Art\).jpg);"></div>
                            </div>
                            <div class="lower-area">
                                <p>What The Phonk</p>
                                <span>Prod. Core</span>
                            </div>
                        </a>
                        <div class="option-bar">
                            <div class="track-options">
                                <div class="track-details">
                                    <p>2 days ago</p>
                                    <span>Progressive House</span>
                                </div>
                                <div class="track-play">
                                    <button id="track-play-btn">
                                        <i class='bx bx-play-circle'></i>
                                        <span>Play</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="track-block" id="grid1">
                        <a href="" class="details-bar">
                            <div class="upper-area">
                                <div id="track-img" style="background-image: url(/AUXIMITY\ \ -\ Paradox\ \(Cover\ Art\).jpg);"></div>
                            </div>
                            <div class="lower-area">
                                <p>What The Phonk</p>
                                <span>Prod. Core</span>
                            </div>
                        </a>
                        <div class="option-bar">
                            <div class="track-options">
                                <div class="track-details">
                                    <p>2 days ago</p>
                                    <span>Progressive House</span>
                                </div>
                                <div class="track-play">
                                    <button id="track-play-btn">
                                        <i class='bx bx-play-circle'></i>
                                        <span>Play</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="track-block" id="grid1">
                        <a href="" class="details-bar">
                            <div class="upper-area">
                                <div id="track-img" style="background-image: url(/Blake\ Hills\ -\ Don\'t\ Be\ Shy\ \(Cover\ Art\).jpg);"></div>
                            </div>
                            <div class="lower-area">
                                <p>What The Phonk</p>
                                <span>Prod. Core</span>
                            </div>
                        </a>
                        <div class="option-bar">
                            <div class="track-options">
                                <div class="track-details">
                                    <p>2 days ago</p>
                                    <span>Progressive House</span>
                                </div>
                                <div class="track-play">
                                    <button id="track-play-btn">
                                        <i class='bx bx-play-circle'></i>
                                        <span>Play</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="track-block" id="grid1">
                        <a href="" class="details-bar">
                            <div class="upper-area">
                                <div id="track-img" style="background-image: url(/In\ My\ Dreams\ -\ Soundwaiv\ Music\ \(Cover\ Art\).jpg);"></div>
                            </div>
                            <div class="lower-area">
                                <p>What The Phonk</p>
                                <span>Prod. Core</span>
                            </div>
                        </a>
                        <div class="option-bar">
                            <div class="track-options">
                                <div class="track-details">
                                    <p>2 days ago</p>
                                    <span>Progressive House</span>
                                </div>
                                <div class="track-play">
                                    <button id="track-play-btn">
                                        <i class='bx bx-play-circle'></i>
                                        <span>Play</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="track-block" id="grid1">
                        <a href="" class="details-bar">
                            <div class="upper-area">
                                <div id="track-img" style="background-image: url(/ixokadel\ -\ \ Rivers\ \(Cover\ Art\).jpg);"></div>
                            </div>
                            <div class="lower-area">
                                <p>What The Phonk</p>
                                <span>Prod. Core</span>
                            </div>
                        </a>
                        <div class="option-bar">
                            <div class="track-options">
                                <div class="track-details">
                                    <p>2 days ago</p>
                                    <span>Progressive House</span>
                                </div>
                                <div class="track-play">
                                    <button id="track-play-btn">
                                        <i class='bx bx-play-circle'></i>
                                        <span>Play</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <footer id="pagination">

            <div class="pag-block">

                <button type="button" class="left-double-arrow pag-box">
                    <img src="assets\png\icons\double_arrow_left.svg">
                </button>
                <button type="button" class="left-single-arrow pag-box">
                    <img src="assets\png\icons\single_arrow_left.svg">
                </button>

                <button type="button" class="number pag-box">
                    <span>1</span>
                </button>
                <button type="button" class="number pag-box">
                    <span>2</span>
                </button>
                <button type="button" class="number pag-box">
                    <span>3</span>
                </button>
                <button type="button" class="number pag-box">
                    <span>4</span>
                </button>
                <button type="button" class="number pag-box">
                    <span>5</span>
                </button>

                <button type="button" class="right-single-arrow pag-box">
                    <img src="assets\png\icons\single_arrow_right.svg">
                </button>
                <button type="button" class="right-double-arrow pag-box">
                    <img src="assets\png\icons\double_arrow_right.svg">
                </button>

            </div>

        </footer>
    </div>
    
 <!--              Music Library End              --> 


     
<!--              Music Bar Start              --> 

        <section class="music-bar" id="music-bar" style="bottom: -20%;">
            <div class="bar">
                <div class="music-bar-img">
                    <img src="AUXIMITY  - Paradox (Cover Art).jpg" id="music-bar-img" style="opacity: 0%;">
                </div>

                <div class="bar-info">
                    <div class="bar-details">
                        <h1>What The Phonk</h1>
                        <h4>Prod. Core</h4>
                    </div>

                    <div class="controls-left">
                        <i class='bx bx-play playbutton-bar' id="play"></i>
                        <i class='bx bx-pause pausebutton-bar' id="pause" style="display: none;"></i>
                        <i class='bx bx-stop stopbutton-bar' id="stop"></i>
                    </div>

                    <div class="bar-time-start bar-time">
                        <span-bar id="current">0:00</span-bar>
                    </div>

                    <div class="wave">
                        <div id="wave"></div>
                    </div>
                    
                    <div class="bar-time-end bar-time">
                        <span-bar id="duration">0:00</span-bar>
                    </div>
                    
                    <div class="controls-right" id="controls-right">
                        <i class='bx bx-volume-full volumeunmute-bar' id="volumeunmute"></i>
                        <i class='bx bx-volume-mute volumemute-bar' id="volumemute" style="display: none;"></i>
                    </div>

                    
                    <div class="volume" id="volume">
                        <div class="volume-area" id="volume-area">
                            <div class="volume-box" id="volume-box" style="bottom: -100px;">
                                <div class="spinner">
                                    <span id="output"></span>
                                    <div class="progress">
                                        <span id="meter"></span>
                                    </div>
                                    <div class="btn minus" id="minus">-</div>
                                    <div class="btn plus" id="plus">+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bar-track-down">
                    <button1 class="bar-download">
                        <div class="bar-down-content">
                            <i class="bx bx-cloud-download"></i>
                            <span class="bar-down">Download</span>
                        </div>
                    </button1>
                </div>
                
            </div>
        </section>


<!--              Music Bar End              --> 

</main>

</body>

</html>

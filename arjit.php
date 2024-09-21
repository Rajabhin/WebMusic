<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <title>Music Website</title>

    <style>
    header .song_side::before {
    background: url('arjit_bg.png');
}
    </style>
</head>

<body>
    <header>
        <div class="menu_side">
            <!-- <h6 id="menu_list_active_button"><i class="bi bi-music-note-list"></i></h6> -->
            <h1>Playlist</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Last Listening</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>
            </div>
            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/1.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                </li>
                <li class="songItem">
                    <span>07</span>
                    <img src="img/2.jpg" alt="">
                    <h5>On My Way <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                </li>
                
            </div>
        </div>


        <div class="song_side">
            <nav>
                <ul>
                    <li>Discover <span></span></li>
                    <li>MY LIBRARY</li>
                    <li>RADIO</li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                    <div class="search_results">
                        <!-- <a href="" class="card">
                            <img src="img/1.jpg" alt="">
                            <div class="content">
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </div>
                        </a> -->
                        
                    </div>
                </div>
                <div class="user">
                    <img src="img/arjit.jpg" alt="">
                </div>
            </nav>
            <div class="content">
                <h1>Arijit Singh</h1>
                <p>Arijit Singh is an Indian playback singer and music composer. <br> The recipient of several accolades including two National Film Awards and <br> seven Filmfare Awards.</p>
                <div class="buttons">
                    <button>PLAY</button>
                    <button>FOLLOW</button>
                </div>
            </div>

            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    
                    
                </div>
            </div>
            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_art_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_art_right"></i>
                    </div>
                </div>
                <div class="item Artists_bx">
                    <li>
                        <a href="arjit.php"><img src="img/arjit.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/jubin Nautiyal.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/guru.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/justin-bieber-lede.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="img/dhvani.jpg" alt=""></a>
                    </li>
                   
                </div>
            </div>
        </div>



        <div class="master_play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/10.jpg" alt="" id="poster_master_play">
            <h5 id="title">
                Duniya
                <div class="subtitle">Luka Chuppi</div>
            </h5>
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next" accesskey="n"></i>
                <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill" ></i></a>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>

    </header>
    <script src="arjit.js"></script>
</body>

</html>
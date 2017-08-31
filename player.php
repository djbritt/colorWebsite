<!-- Begin Small Player -->
    <div id="small-player">
        <!-- Begin Small Player Left -->
        <div id="small-player-left">

        </div>
        <!-- End Small Player Left -->

        <!-- Begin Small Player Album Art -->
        <img id="small-player-album-art" amplitude-song-info="cover" />
        <!-- End Small Player Album Art -->

        <!-- Begin Small Player Middle -->
        <div id="small-player-middle">
            <div id="small-player-middle-top">
                <!-- Begin Controls Container -->
                <div id="small-player-middle-controls">
                    <div class="amplitude-play-pause amplitude-paused" amplitude-main-play-pause="true"></div>
                </div>
                <!-- End Controls Container -->

                <!-- Begin Meta Container -->
                <div id="small-player-middle-meta">
                    <div id="now-playing-title" amplitude-song-info="name"></div>
                    <div class="album-information"><span amplitude-song-info="artist"></span></div>
                </div>
                <!-- End Meta Container -->
            </div>

            <div id="small-player-middle-bottom">
                <div class="amplitude-song-time-visualization" amplitude-single-song-time-visualization="true" id="song-time-visualization"></div>
            </div>
        </div>
        <!-- End Small Player Middle -->

        <!-- Begin Small Player Right -->
        <div id="small-player-right">
            <span id="current-time">
					<span class="amplitude-current-minutes" amplitude-single-current-minutes="true">0</span>:<span class="amplitude-current-seconds" amplitude-single-current-seconds="true">00</span>
            </span>
        </div>
        <div id="volume">
            <input type="range" class="amplitude-volume-slider" value="0" />
        </div>
        <!-- End Small Player Right -->
    </div>
    <!-- End Small Player -->
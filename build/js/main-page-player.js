class MainVideoPlayer {
  
    constructor() {
        this.video = $(".player-container video").first()[0];
        $('.player-control-pp>a').click((e) => this.handlePlayPause.apply(this, [e]));
        $('.player-bottom .seek-widget .fragment').click((e) => this.handleTrackSwitch.apply(this, [e]));
        $(".player-container video").on('timeupdate', (e) => this.progressHandler.apply(this, [e]));
        this.viewPort = this.video.parentNode;
    }

    playbackAction(action) {
        const btn = document.querySelector('.player-control-pp>a');

        if (action === 'play') {
            btn.classList.add("m-state-play");
            btn.classList.remove("m-state-pause");
            this.video.play();
        }
        else {
            btn.classList.add("m-state-pause");
            btn.classList.remove("m-state-play");
            this.video.pause();
        }
    }

    handlePlayPause(e) {
        if (this.video.paused) {
            this.playbackAction('play');
        }
        else {
            this.playbackAction('pause');
        }
    }

    progressHandler() {
        let progress = (this.video.currentTime / this.video.duration * 100);
        if (progress < 10) progress = 10;
        $(".seek-widget > .current-fragment > .progress").css("width", `${progress}%`);
    }

    handleTrackSwitch(e) {
        this.playbackAction('pause');

        const url = e.target.getAttribute('data-url');
        $('.seek-widget > .current-fragment').removeClass('current-fragment');
        $(e.target).addClass('current-fragment');
        $(".seek-widget > .fragment > .progress").css("width", "0%");

        const oldVideo = this.video;
        this.video = $(`video[data-src='${url}']`)[0];
        // this.video.currentTime = 0.1;
        const currentVideoNum = Array.from(this.viewPort.children).indexOf(this.video);

        const viewPortPos = this.viewPort.getBoundingClientRect();
        const videoPos = this.video.getBoundingClientRect();     
        const leftShift = viewPortPos.left - videoPos.left;

        $(this.viewPort).animate({
            left: `${leftShift}`,
        }, 1000, 'swing', () => {
            // this.video.load();
            this.playbackAction('play');
            oldVideo.currentTime = 0;
        });
    }
}


new MainVideoPlayer();

class MainVideoPlayer {
  
    constructor() {
        this.video = $("#js-main-video")[0];
        $('.player-control-pp>a').click((e) => this.handlePlayPause.apply(this, [e]));
        $('.player-bottom .seek-widget .fragment').click((e) => this.handleTrackSwitch.apply(this, [e]));
        $(this.video).on('timeupdate', (e) => this.progressHandler.apply(this, [e]));
    }

    playbackAction(action) {
        const btn = document.querySelector('.player-control-pp>a');
        const video = document.querySelector('#js-main-video');

        if (action === 'play') {
            btn.classList.add("m-state-play");
            btn.classList.remove("m-state-pause");
            video.play();
        }
        else {
            btn.classList.add("m-state-pause");
            btn.classList.remove("m-state-play");
            video.pause();
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
        const progress = (this.video.currentTime / this.video.duration * 100);
        $(".seek-widget > .current-fragment > .progress").css("width", `${progress}%`);
    }

    handleTrackSwitch(e) {
        const url = e.target.getAttribute('data-url');

        $('.seek-widget > .current-fragment').removeClass('current-fragment');
        $(e.target).addClass('current-fragment');
        $(".seek-widget > .fragment > .progress").css("width", "0%");
        

        this.video.setAttribute('src', url);
        this.video.load();
        this.playbackAction('play');
    }
}


new MainVideoPlayer();

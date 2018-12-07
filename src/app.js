// import frameworks
import 'bootstrap';
import Masonry          from 'masonry-layout';
import imagesLoaded     from 'imagesloaded';

// document ready
document.onreadystatechange = function () {

    // and interactive
    if (document.readyState == "interactive") {
        // Initialize the application

        // # Home page
        // Start background video
        if(video_player){
            startVideo();
        }

        // Unused identifier for video blendmodes which we might use in the future
        if (window.getComputedStyle(document.body).mixBlendMode !== undefined){
            var a = document.body;
            a.classList ? a.classList.add('video-effect') : a.className += ' video-effect';
        }

        // Show menu indicator after some time of video playback
        setTimeout(function(){
            $('.menu-indicator').css({
                'visibility': 'visible'
            });
        }, 15000);

        // # Reference page
        // Init Masonry
        var grid = document.querySelector('.grid');
        var gridItem = document.querySelector('.grid-item');
        var overlay = document.querySelector('.card-img-overlay');

        var msnry = new Masonry( '.grid', {
            itemSelector: '.grid-item', // use a separate class for itemSelector, other than .col-
            columnWidth: '.grid-sizer',
            transitionDuration: '10ms'
        });

        // Preload images in Masonry grid
        imagesLoaded( grid ).on( 'progress', function() {
            // layout Masonry after each image loads
            msnry.layout();
            console.log('images loaded');
        });

        // Show project information on moueover
        $('.grid-item').mouseenter(function(){
            $(this).find( $('.grid-item-content .card-img-overlay')).fadeIn();
        });
        $('.grid-item').mouseleave(function(){
            $(this).find( $('.grid-item-content .card-img-overlay')).fadeOut();
        });

        // Init bootstrap popovers
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
    }
}
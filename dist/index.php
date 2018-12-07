<?php
    include "includes/head.php"
?>

<cms:template title='Home page' />

    <cms:editable
        name='bulb_video'
        label='Video File'
        desc='Upload the video here'
        type='file'
    />

    <script>
        var video_list = [
            // "assets/hollebolleboei.mp4",
            "assets/movies/tirpitz.mp4",
            "assets/movies/skodaconfettiauto.mp4"
        ];

        // Video playback function
        var video_index = 0
        var video_player = document.getElementById("video");

        function startVideo(){
            video_player.setAttribute("src", video_list[video_index]);
            video_player.play();
        }

        function onVideoEnded(){
            if(video_index < video_list.length - 1){
                video_index++;
            }
            else{
                video_index = 0;
            }
            video_player.setAttribute("src", video_list[video_index]);
            video_player.play();
        }
    </script>

    <figure>
        <video autoplay muted playsinline id="video" onended="onVideoEnded()">
            Unfortunatly, your browser is ancient and does not support HTML5 video... :(
        </video>
    </figure>

    <div class="content d-flex align-items-center">
        <div class="d-block text-white text-center w-100 text-effect">
            <a href="menu.php" alt="" class="text-white" style="text-decoration: none;">
                <small class="text-muted menu-indicator" style="visibility: hidden;"><span class="ti-arrow-down"></span> Click for menu</small>
                <h1 class="">THE<b class="font-weight-bold">BULB.</b></h1>
                <p class="text-yellow">SHOWCONTROL // LEDVERLICHTING // INTERACTIVES</p>
            </a>
        </div>
    </div>
<?php
    include "includes/footer.php";
?>
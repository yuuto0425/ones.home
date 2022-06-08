<script>
    'use strict';

var playlist = [
    '<?php echo get_template_directory_uri();?>/videos/hero-video01.mp4',
    '<?php echo get_template_directory_uri();?>/videos/hero-video02.mp4',
    '<?php echo get_template_directory_uri();?>/videos/hero-video03.mp4',
]

var video = document.getElementById('video');
video.muted = true;
video.autoplay = true;
// video.style.width = '640';
// video.style.height = '360';
video.controls = false;
video.src = playlist[0];
video.play();
var index = 0;

window.addEventListener('DOMContentLoaded', function(){
const videoElement = document.querySelector("video");
videoElement.muted = true;
videoElement.autoplay = true;
});

video.addEventListener('ended',setInterval(function(){
  index++;
  if (index < playlist.length) {
    video.src = playlist[index];
    video.play();
  }
  else {
    video.src = playlist[0];
    video.play();
    index = 0;
  }
},5000) );

</script>
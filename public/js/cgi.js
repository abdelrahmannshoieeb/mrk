document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const mainVideo = document.getElementById('cgiMainVideo');
    const bgVideo = document.querySelector('.cgi-bg-video');
    
    if (mainVideo && bgVideo) {
        // Sync background video with main video
        mainVideo.addEventListener('play', function() {
            bgVideo.play();
            bgVideo.currentTime = mainVideo.currentTime;
        });
        
        mainVideo.addEventListener('pause', function() {
            bgVideo.pause();
        });
        
        // Handle seeking
        mainVideo.addEventListener('seeked', function() {
            bgVideo.currentTime = mainVideo.currentTime;
        });
        
        // Handle rate change
        mainVideo.addEventListener('ratechange', function() {
            bgVideo.playbackRate = mainVideo.playbackRate;
        });
    }
    
    // Attempt to play videos
    function attemptPlay() {
        mainVideo.play().catch(error => {
            console.log("Video autoplay prevented. User interaction required.");
        });
        
        bgVideo.play().catch(error => {
            // Background video autoplay is less important
        });
    }
    
    // Try to play videos on page load
    attemptPlay();
});
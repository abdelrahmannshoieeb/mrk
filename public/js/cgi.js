document.addEventListener('DOMContentLoaded', function() {
    // Get both videos
    const mainVideo = document.querySelector('.cgi-main-video');
    const bgVideo = document.querySelector('.cgi-bg-video');
    
    // Ensure both videos use the same source and are muted
    if (mainVideo && bgVideo) {
        // Force muted state - extra security to ensure no sound
        mainVideo.muted = true;
        bgVideo.muted = true;
        
        // Prevent users from unmuting via right-click context menu
        mainVideo.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
        
        // Sync the background video with the main video
        mainVideo.addEventListener('play', function() {
            bgVideo.play();
            bgVideo.currentTime = mainVideo.currentTime;
        });
        
        // Handle seeking
        mainVideo.addEventListener('seeked', function() {
            bgVideo.currentTime = mainVideo.currentTime;
        });
        
        // Adjust container height based on video aspect ratio if needed
        mainVideo.addEventListener('loadedmetadata', function() {
            // Optional: Adjust container if needed based on video dimensions
            const videoAspect = mainVideo.videoWidth / mainVideo.videoHeight;
            console.log("Video aspect ratio:", videoAspect);
        });
    }
    
    // Ensure videos autoplay
    function attemptPlay() {
        mainVideo.play().catch(error => {
            console.log("Autoplay prevented. User interaction required.");
        });
        
        bgVideo.play().catch(error => {
            // Background video autoplay is less important
        });
    }
    
    // Try to play videos on page load
    attemptPlay();
    
    // Also try to play on user interaction
    document.addEventListener('click', attemptPlay, { once: true });
});
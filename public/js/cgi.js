document.addEventListener('DOMContentLoaded', function() {
    // Get elements
    const videoContainer = document.getElementById('cgiVideoContainer');
    const mainVideo = document.getElementById('cgiMainVideo');
    const bgVideo = document.querySelector('.cgi-bg-video');
    const audioElement = document.getElementById('cgiAudio');
    const soundPrompt = document.getElementById('cgiSoundPrompt');
    const soundIndicator = document.getElementById('cgiSoundIndicator');
    
    let audioEnabled = false;
    let firstClick = true;
    
    if (videoContainer && mainVideo && bgVideo && audioElement) {
        // Remove any browser-added controls
        mainVideo.controls = false;
        bgVideo.controls = false;
        
        // Prevent right-click menu
        mainVideo.addEventListener('contextmenu', e => e.preventDefault());
        bgVideo.addEventListener('contextmenu', e => e.preventDefault());
        
        // Sync background video with main video
        mainVideo.addEventListener('play', function() {
            bgVideo.play();
            bgVideo.currentTime = mainVideo.currentTime;
            
            // If audio was enabled, play it
            if (audioEnabled) {
                audioElement.currentTime = mainVideo.currentTime;
                audioElement.play();
            }
        });
        
        mainVideo.addEventListener('pause', function() {
            bgVideo.pause();
            
            // If audio was enabled, pause it
            if (audioEnabled) {
                audioElement.pause();
            }
        });
        
        // Handle seeking
        mainVideo.addEventListener('seeked', function() {
            bgVideo.currentTime = mainVideo.currentTime;
            
            // Sync audio with video
            if (audioEnabled) {
                audioElement.currentTime = mainVideo.currentTime;
            }
        });
        
        // Click anywhere to enable sound
        videoContainer.addEventListener('click', function(e) {
            // Don't trigger for clicks on buttons or links
            if (e.target.tagName === 'BUTTON' || e.target.tagName === 'A') {
                return;
            }
            
            if (firstClick) {
                // First click enables sound
                enableSound();
                firstClick = false;
            }
        });
        
        // Function to enable sound
        function enableSound() {
            audioEnabled = true;
            
            // Add class to container
            videoContainer.classList.add('cgi-sound-enabled');
            
            // Show sound indicator
            if (soundIndicator) {
                soundIndicator.classList.add('active');
                
                // Hide indicator after 3 seconds
                setTimeout(() => {
                    soundIndicator.classList.remove('active');
                }, 3000);
            }
            
            // Start playing audio in sync with video
            audioElement.currentTime = mainVideo.currentTime;
            audioElement.play();
            
            // Set initial volume
            audioElement.volume = 0.7; // 70% volume
        }
        
        // Handle video end
        mainVideo.addEventListener('ended', function() {
            if (!mainVideo.loop) {
                audioElement.pause();
            }
        });
        
        // Handle audio end
        audioElement.addEventListener('ended', function() {
            if (mainVideo.loop && audioEnabled) {
                audioElement.currentTime = 0;
                audioElement.play();
            }
        });
    }
    
    // Ensure videos autoplay
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
    
    // Also try to play on user interaction
    document.addEventListener('click', function() {
        if (mainVideo.paused) {
            attemptPlay();
        }
    }, { once: true });
});
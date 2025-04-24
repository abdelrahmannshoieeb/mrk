@extends('layout.master')


@section('content')
<div class="cgi-video-container" id="cgiVideoContainer">
    <!-- Blurred background video -->
    <div class="cgi-video-background">
        <video class="cgi-bg-video" autoplay muted loop playsinline>
            <source src="/images/cgi.mp4" type="video/mp4">
        </video>
    </div>
    
    <!-- Content container -->
    <div class="cgi-content">
        <!-- Main video (muted) -->
        <div class="cgi-video-wrapper">
            <video class="cgi-main-video" style="position: relative; top: 70px;     max-height: 70vh;" id="cgiMainVideo" autoplay muted loop playsinline>
                <source src="/images/cgi.mp4" type="video/mp4">
            </video>
            
         
            
            <!-- Initial sound prompt overlay -->
        </div>
        
        <!-- Additional content can go here -->
        <div class="cgi-product-info" style="position: relative; top: 70px; >
            <h2 class="cgi-product-title">CGI Product Title</h2>
            <p class="cgi-product-description">Detailed description of your CGI product and its features.</p>
            <div class="cgi-product-actions">
                <button class="cgi-btn cgi-btn-primary">Learn More</button>
                <button class="cgi-btn cgi-btn-secondary">View Gallery</button>
            </div>
        </div>
    </div>
    
    <!-- Small sound indicator that appears after enabling sound -->
    <div class="cgi-sound-indicator" id="cgiSoundIndicator">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="cgi-volume-icon">
            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
            <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
            <path d="M19.07 4.93a10 10 0 0 1 0 14.14"></path>
        </svg>
    </div>
</div>
@endsection

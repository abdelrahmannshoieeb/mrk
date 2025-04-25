@extends('layout.master')

@section('content')
<!-- Reset all video control hiding -->
<style>
    video::-webkit-media-controls-enclosure,
    video::-webkit-media-controls,
    video::-webkit-media-controls-panel,
    video::-webkit-media-controls-play-button,
    video::-webkit-media-controls-timeline,
    video::-webkit-media-controls-current-time-display,
    video::-webkit-media-controls-time-remaining-display,
    video::-webkit-media-controls-mute-button,
    video::-webkit-media-controls-volume-slider,
    video::-webkit-media-controls-fullscreen-button {
        display: flex !important;
    }
</style>

<div class="cgi-video-container" id="cgiVideoContainer">
    <!-- Blurred background video -->
    <div class="cgi-video-background">
        <video class="cgi-bg-video" autoplay muted loop playsinline>
            <source src="/images/cgi.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Content container -->
    <div class="cgi-content" style="min-height: 150vh;">
        <!-- Main video WITH controls -->
        <div class="cgi-video-wrapper">
            <video class="cgi-main-video" id="cgiMainVideo" 
                controls muted autoplay loop 
                style="position: relative; top: 70px; max-height: 70vh;">
                <source src="/images/cgi.mp4" type="video/mp4">
            </video>
        </div>

        <!-- Product content -->
        <div class="cgi-product-info" style="position: relative; top: 70px; max-height: 70vh;">
            <h2 class="cgi-product-title">CGI Production</h2>
            <p class="cgi-product-description">We not just create a video, we create a story.</p>
            <div class="cgi-product-actions">
                <button class="cgi-btn cgi-btn-primary" >Learn More </button>
                <button class="cgi-btn cgi-btn-secondary">View Gallery</button>
            </div>
        </div>
    </div>
</div>
@endsection

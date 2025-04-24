@extends('layout.master')


@section('content')

<div class="cgi-video-container">
    <!-- Blurred background video -->
    <div class="cgi-video-background">
        <video class="cgi-bg-video" autoplay muted loop playsinline>
            <source src="/images/cgi.mp4" type="video/mp4">
            <!-- Add additional source formats if needed -->
        </video>
    </div>
    
    <!-- Content container -->
    <div class="cgi-content">
        <!-- Main video that autoplays -->
        <div class="cgi-main-video-wrapper">
            <video class="cgi-main-video" autoplay muted loop playsinline controls>
                <source src="/images/cgi.mp4" type="video/mp4">
                <!-- Add additional source formats if needed -->
            </video>
        </div>
        
        <!-- Additional content can go here -->
        <div class="cgi-product-info">
            <h2 class="cgi-product-title">CGI Product Title</h2>
            <p class="cgi-product-description">Detailed description of your CGI product and its features.</p>
            <div class="cgi-product-actions">
                <button class="cgi-btn cgi-btn-primary">Learn More</button>
                <button class="cgi-btn cgi-btn-secondary">View Gallery</button>
            </div>
        </div>
    </div>
</div>

@endsection
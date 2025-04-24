@extends('layout.master')


@section('content')
<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">

    <section class="relative overflow-hidden">
        <div
            class="relative overflow-hidden pt-28 md:pt-36 lg:pt-[220px] pb-12 sm:pb-28 lg:pb-[120px]">
            <!-- Gradient Background Wrapper -->
            <div
                id="hero-gradient-wrapper"
                class="absolute w-full h-full top-[37%] left-0 -z-10 blur-[35px] md:blur-[60px] sm:scale-50 md:scale-75 lg:scale-90">
                <img
                    src="images/gradient.png"
                    alt="hero-gradient-background"
                    id="hero-gradient"
                    class="absolute left-1/2 top-[1/2] -translate-x-1/2 -translate-y-1/2" />
            </div>
            <div class="container">
                <div class="reveal-me text-center">
                    <h1 class="font-semibold">
                        <span class="font-instrument block font-normal">{{ __('index.welcome') }}</span>
                        {{ __('index.slogan') }}
                    </h1>

                    <!-- Hero Buttons -->
                    <ul class="flex justify-center list-none mt-10 md:mt-14">
                        <!-- Primary CTA Button -->
                        <li class="block md:inline-block w-full text-center md:w-auto">
                            <a
                            style="background-color: #352AA7;"
                                href="https://wa.me/201012620529"
                                class="rv-button rv-button-sm rv-button-primary block md:inline-block"  >
                                <div class="rv-button-top" >
                                    <span> {{ __('index.contact') }}</span>
                                </div>
                                <div class="rv-button-bottom">
                            style="background-color: #352AA7;"

                                    <span class="text-nowrap"> {{ __('index.contact') }}</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <figure class="w-full reveal-me scale-small-img">
            <img
                src="images/hero-banner.png"
                alt="Hero Banner Big Image"
                class="w-full" />
        </figure>
    </section>


    <!--==================================
About Description Section Area
===================================-->
    <section
        class="pt-6 lg:pt-12 pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
        <div class="container">
            <!-- About Description Text -->
            <!-- Section Header -->
            <div class="text-center">
                <div class="rv-badge reveal-me">
                    <span class="rv-badge-text">{{ __('index.Who_We_Are') }}</span>
                </div>
                <h2 class="mt-3 mb-8 text-center text-appear">
                    {{ __('index.Who_We_Are_title') }}
                </h2>
            </div>

            <h3
            class="reveal-text-2 text-2xl text-secondary/90 dark:text-backgroundBody/70 lg:text-3xl xl:text-4xl font-normal lg:leading-[1.8] lg:tracking-[0.2px] rtl:text-right ltr:text-center">
            {{ __('index.Who_We_Are_content') }}
        </h3>
        

            <!-- about Buttons -->
            <ul class="flex justify-center mt-[56px] mx-auto list-none reveal-me">
                <!-- white  Button -->
                <li class="block md:inline-block w-full mx-auto md:w-auto text-center">
                    <a
                        href="https://wa.me/201012620529"
                        class="rv-button rv-button-white block md:inline-block">
                        <div class="rv-button-top">
                            <span>{{ __('index.meet_the_team') }}</span>
                        </div>
                        <div class="rv-button-bottom">
                            <span>{{ __('index.meet_the_team') }}</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>


    <section
        class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden">
        <!-- Clients Logo Marquee -->
        <div class="marquee-container reveal-me">
            <div class="flex items-center justify-between py-2.5 pb-5">
                <div class="flex items-center gap-6 mr-5">
                    <span
                        class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-semibold leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
                        Creative Development
                    </span>
                    <span class="mt-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            fill="none">
                            <path
                                d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
                                class="fill-black dark:fill-backgroundBody" />
                        </svg>
                    </span>
                </div>
                <div class="flex items-center gap-6 mr-5">
                    <span
                        class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-semibold leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
                        Visual Design
                    </span>
                    <span class="mt-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            fill="none">
                            <path
                                d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
                                class="fill-black dark:fill-backgroundBody" />
                        </svg>
                    </span>
                </div>
                <div class="flex items-center gap-6 mr-5">
                    <span
                        class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-semibold leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
                        Branding
                    </span>
                    <span class="mt-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            fill="none">
                            <path
                                d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
                                class="fill-black dark:fill-backgroundBody" />
                        </svg>
                    </span>
                </div>
                <div class="flex items-center gap-6 mr-5">
                    <span
                        class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-semibold leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
                        SEO
                    </span>
                    <span class="mt-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            fill="none">
                            <path
                                d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
                                class="fill-black dark:fill-backgroundBody" />
                        </svg>
                    </span>
                </div>
                <div class="flex items-center gap-6 mr-5">
                    <span
                        class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-semibold leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
                        Marketing
                    </span>
                    <span class="mt-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            fill="none">
                            <path
                                d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
                                class="fill-black dark:fill-backgroundBody" />
                        </svg>
                    </span>
                </div>
                <div class="flex items-center gap-6 mr-5">
                    <span
                        class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-semibold leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
                        Graphics
                    </span>
                    <span class="mt-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            fill="none">
                            <path
                                d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
                                class="fill-black dark:fill-backgroundBody" />
                        </svg>
                    </span>
                </div>
                <div class="flex items-center gap-6 mr-5">
                    <span
                        class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-semibold leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
                        E-Commerces
                    </span>
                    <span class="mt-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            fill="none">
                            <path
                                d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
                                class="fill-black dark:fill-backgroundBody" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>

        <!-- Reverse -->
        <div class="marquee-reverse-container reveal-me border-t dark:border-dark">
            <div class="flex items-center justify-between py-2.5">
                <div class="flex items-center gap-6 mr-5">
                    <span
                        class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-semibold leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
                        {{ __('index.slider_title2') }}
                    </span>
                    <span class="mt-5">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            fill="none">
                            <path
                                d="M20.002 0C20.002 0 19.789 11.2169 24.2871 15.7149C28.785 20.2129 40.002 20 40.002 20C40.002 20 28.785 19.7871 24.2871 24.2851C19.789 28.7831 20.002 40 20.002 40C20.002 40 20.2149 28.7831 15.7168 24.2851C11.2189 19.7871 0.00195312 20 0.00195312 20C0.00195312 20 11.2189 20.2129 15.7168 15.7149C20.2149 11.2169 20.002 0 20.002 0Z"
                                class="fill-black dark:fill-backgroundBody" />
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    </section>


    <section
        class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
        <div class="container">
            <div
                class="flex flex-col md:flex-row gap-y-5 gap-x-10 justify-center lg:justify-start items-start md:items-center mb-10 md:mb-20">
                <div class="flex-1">
                    <h2 class="text-appear">
                         <span class="font-instrument italic">{{ __('index.Our_Services') }}</span>
                    </h2>
                </div>
                <div class="flex-1 max-w-md">
                    <p class="text-appear max-md:text-justify md:text-right">
                        {{ __('index.Our_Services_Desc') }}
                    </p>
                    <ul class="justify-self-end max-md:w-full mt-5 md:mt-10 reveal-me">
                        <li
                            class="block md:inline-block w-full mx-auto md:w-auto text-center">
                            <a
                                href="{{ route('ecom') }}"
                                class="rv-button rv-button-white block md:inline-block">
                                <div class="rv-button-top">
                                    <span>{{ __('index.see_all_services') }}</span>
                                </div>
                                <div class="rv-button-bottom">
                                    <span>{{ __('index.see_all_services') }}</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 justify-items-center items-center md:items-start gap-8 gap-y-12">
                <div class="reveal-me underline-hover-effect group relative">
                    <a href="{{ route('ecom') }}">
                        <figure class="overflow-hidden">
                            <img
                                src="images/blog-img/blog-img-13.png"
                                class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
                                alt="Blog Images" />
                        </figure>
                    </a>
                    <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
                        <p
                            class="text-[13px] leading-6  uppercase font-normal  text-secondary dark:text-backgroundBody">
                            {{ __('index.programming_services') }}
                        </p>
                        <p
                            class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-backgroundBody">
                            
                        </p>
                    </div>
                    <a href="{{ route('ecom') }}">
                        <div class="blog-title">
                            <h3
                                class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                {{ __('index.e-commerce') }}
                            </h3>
                        </div>
                    </a>
                    <div class="border-b dark:border-dark mt-6"></div>

                    <!-- Blog Hover Button -->
                    <a href="{{ route('ecom') }}">
                        <div
                            class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                            <span class="text-secondary">{{ __('index.view') }}</span>
                            <img
                                src="/images/home-5/ArrowUpRight-dark.svg"
                                alt="ArrowUpRight-dark" />
                        </div>
                    </a>
                </div>

                <div class="reveal-me underline-hover-effect group relative">
                    <a href="{{ route('ecom') }}">
                        <figure class="overflow-hidden">
                            <img
                                src="images/blog-img/blog-img-14.png"
                                class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
                                alt="Blog Images" />
                        </figure>
                    </a>
                    <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
                        <p
                            class="text-[13px] leading-6 uppercase font-normal text-secondary dark:text-backgroundBody">
                            {{ __('index.marketing_services') }}
                        </p>
                        <p
                            class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-backgroundBody">
                        
                        </p>
                    </div>
                    <a href="{{ route('ecom') }}">
                        <div class="blog-title">
                            <h3
                                class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                {{ __('index.marketing_services') }}
                            </h3>
                        </div>
                    </a>
                    <div class="border-b dark:border-dark mt-6"></div>
                    <!-- Blog Hover Button -->
                    <a href="{{ route('ecom') }}">
                        <div
                            class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                            <span class="text-secondary">{{ __('index.view') }}</span>
                            <img
                                src="/images/home-5/ArrowUpRight-dark.svg"
                                alt="ArrowUpRight-dark" />
                        </div>
                    </a>
                </div>
                <div class="reveal-me underline-hover-effect group relative">
                    <a href="{{ route('ecom') }}">
                        <figure class="overflow-hidden">
                            <img
                                src="images/blog-img/blog-img-15.png"
                                class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
                                alt="Blog Images" />
                        </figure>
                    </a>
                    <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
                        <p
                            class="text-[13px] leading-6 uppercase font-normal text-secondary dark:text-backgroundBody">
                            {{ __('index.design_services') }}
                        </p>
                        <p
                            class="text-base md:text-xl leading-8  text-secondary dark:text-backgroundBody">
                            
                        </p>
                    </div>
                    <a href="{{ route('ecom') }}">
                        <div class="blog-title">
                            <h3
                                class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                {{ __('index.design_services') }}
                            </h3>
                        </div>
                    </a>
                    <div class="border-b dark:border-dark mt-6"></div>
                    <!-- Blog Hover Button -->
                    <a href="{{ route('ecom') }}">
                        <div
                            class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                            <span class="text-secondary">{{ __('index.view') }}</span>
                            <img
                                src="/images/home-5/ArrowUpRight-dark.svg"
                                alt="ArrowUpRight-dark" />
                        </div>
                    </a>
                </div>
                <div class="reveal-me underline-hover-effect group relative">
                    <a href="{{ route ('ecom') }}">
                        <figure class="overflow-hidden">
                            <img
                                src="images/blog-img/blog-img-16.png"
                                class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
                                alt="Blog Images" />
                        </figure>
                    </a>
                    <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
                        <p
                            class="text-[13px] leading-6  uppercase font-normal text-secondary dark:text-backgroundBody">
                            {{ __('index.branding_services') }}
                        </p>
                        <p
                            class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-backgroundBody">
                            
                        </p>
                    </div>
                    <a href="{{ route ('ecom') }}">
                        <div class="blog-title">
                            <h3
                                class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                {{ __('index.branding_services') }}
                            </h3>
                        </div>
                    </a>
                    <div class="border-b dark:border-dark mt-6"></div>
                    <!-- Blog Hover Button -->
                    <a href="{{ route ('ecom') }}">
                        <div
                            class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                            <span class="text-secondary">{{ __('index.view') }}</span>
                            <img
                                src="/images/home-5/ArrowUpRight-dark.svg"
                                alt="ArrowUpRight-dark" />
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section
        class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px] overflow-hidden">
        <div class="container">
            <!-- Section Header -->
            <div
                class="flex flex-col md:flex-row gap-x-10 gap-y-4 justify-center lg:justify-between items-start mb-16 lg:mb-24">
                <!-- Title Area -->
                <div class="flex-1 md:self-start">
                    <h2 class="text-appear">
                        {{ __('index.section_title') }}
                        <span class="font-instrument italic font-medium"></span>
                    </h2>
                </div>

                <!-- Description -->
                <div class="max-md:w-full flex-1 lg:w-[470px] md:self-end">
                    <p class="text-appear max-w-lg md:text-right md:place-self-end">
                       {{ __('index.section_desc') }}
                    </p>
                    <ul class="justify-self-end max-md:w-full mt-5 md:mt-10 reveal-me">
                        <li
                            class="block md:inline-block w-full mx-auto md:w-auto text-center">
                            <a
                                href="/services.html"
                                class="rv-button rv-button-white block md:inline-block">
                                <div class="rv-button-top">
                                    <span>{{ __('index.see_all_services') }}</span>
                                </div>
                                <div class="rv-button-bottom">
                                    <span>{{ __('index.see_all_services') }}</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Services Container -->
        </div>
        <div
            class="max-w-[1170px] px-5 sm:px-10 lg:px-12 xl:px-0 w-full mx-auto reveal-me">
            <!--  -->
            <a href="{{ route ('ecom') }}" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-t border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">{{ __('index.build_your_brand') }}</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                {{ __('index.build_your_brand_desc') }}
                            </p>
                        </h3>

                        <div
                            class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M5 16H27"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M18 7L27 16L18 25"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="overflow-hidden">
                        <figure
                            class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                            <img
                                src="images/services/photography-services.png"
                                alt="Hover on Photography Services"
                                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                        </figure>
                    </div>
                </div>
            </a>
            <a href="{{ route ('ecom') }}" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-t border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">{{ __('index.location_shots') }}</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                {{ __('index.location_shots_desc') }}
                            </p>
                        </h3>

                        <div
                            class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M5 16H27"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M18 7L27 16L18 25"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="overflow-hidden">
                        <figure
                            class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                            <img
                                src="images/services/photography-services.png"
                                alt="Hover on Photography Services"
                                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                        </figure>
                    </div>
                </div>
            </a>
            <a href="{{ route ('ecom') }}" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-t border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">{{ __('index.product_shots') }}</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                {{ __('index.product_shots_desc') }}
                            </p>
                        </h3>

                        <div
                            class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M5 16H27"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M18 7L27 16L18 25"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="overflow-hidden">
                        <figure
                            class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                            <img
                                src="images/services/photography-services.png"
                                alt="Hover on Photography Services"
                                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                        </figure>
                    </div>
                </div>
            </a>
            <a href="{{ route ('ecom') }}" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-t border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">{{ __('index.seo_optimization') }}</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                {{ __('index.seo_optimization_desc') }}
                            </p>
                        </h3>

                        <div
                            class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M5 16H27"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M18 7L27 16L18 25"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="overflow-hidden">
                        <figure
                            class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                            <img
                                src="images/services/photography-services.png"
                                alt="Hover on Photography Services"
                                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                        </figure>
                    </div>
                </div>
            </a>
            <a href="{{ route ('ecom') }}" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-t border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">{{ __('index.social_media') }}</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                {{ __('index.social_media_desc') }}
                            </p>
                        </h3>

                        <div
                            class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M5 16H27"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M18 7L27 16L18 25"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="overflow-hidden">
                        <figure
                            class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                            <img
                                src="images/services/photography-services.png"
                                alt="Hover on Photography Services"
                                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                        </figure>
                    </div>
                </div>
            </a>
            <a href="{{ route ('ecom') }}" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-t border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">{{ __('index.company_profile') }}</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                {{ __('index.company_profile_desc') }}
                            </p>
                        </h3>

                        <div
                            class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M5 16H27"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M18 7L27 16L18 25"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="overflow-hidden">
                        <figure
                            class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                            <img
                                src="images/services/photography-services.png"
                                alt="Hover on Photography Services"
                                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                        </figure>
                    </div>
                </div>
            </a>
            <a href="{{ route ('ecom') }}" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-t border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">{{ __('index.website_design') }}</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                {{ __('index.website_design_desc') }}
                            </p>
                        </h3>

                        <div
                            class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M5 16H27"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M18 7L27 16L18 25"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="overflow-hidden">
                        <figure
                            class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                            <img
                                src="images/services/photography-services.png"
                                alt="Hover on Photography Services"
                                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                        </figure>
                    </div>
                </div>
            </a>
            <a href="{{ route ('ecom') }}" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-t border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">{{ __('index.managment_system') }}</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                {{ __('index.managment_system_desc') }}
                            </p>
                        </h3>

                        <div
                            class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="32"
                                height="32"
                                viewBox="0 0 32 32"
                                fill="none">
                                <path
                                    d="M5 16H27"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M18 7L27 16L18 25"
                                    class="stroke-black dark:stroke-white"
                                    stroke-width="1.5"
                                    stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="overflow-hidden">
                        <figure
                            class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                            <img
                                src="images/services/photography-services.png"
                                alt="Hover on Photography Services"
                                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                        </figure>
                    </div>
                </div>
            </a>
            
            
        </div>
    </section>



    <section
    class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center">
            <!-- Status Badge -->
            <div class="rv-badge mb-3">
                <span class="rv-badge-text">{{ __('index.open_for_work') }}</span>
            </div>
            <h2 class="mb-7 lg:mb-14 text-center text-appear">
                {!! __('index.bringing_life') !!}
            </h2>
        </div>

        <!-- Process Steps Container -->
        <div class="flex max-md:flex-wrap gap-[30px] justify-center service-item-wrapper">
            <!-- Step 1 - Keyword Research -->
            <div class="flex flex-col justify-center items-center relative reveal-me pt-[100px]">
                <h5 class="mb-5">{{ __('index.keyword_research') }}</h5>
                <p class="text-center">{{ __('index.service_desc') }}</p>
            </div>

            <!-- Step 2 - Link Building -->
            <div class="flex flex-col justify-center items-center relative reveal-me pt-[100px]">
                <h5 class="mb-5">{{ __('index.link_building') }}</h5>
                <p class="text-center">{{ __('index.service_desc') }}</p>
            </div>

            <!-- Step 3 - Ranking -->
            <div class="flex flex-col justify-center items-center relative reveal-me pt-[100px]">
                <h5 class="mb-5">{{ __('index.ranking') }}</h5>
                <p class="text-center">{{ __('index.service_desc') }}</p>
            </div>
        </div>

        <!-- Buttons -->
        <ul class="flex justify-center list-none mt-14">
            <!-- Primary CTA Button -->
            <li class="block md:inline-block w-full text-center md:w-auto">
                <a
                    href="/project-03.html"
                    class="rv-button rv-button-primary block md:inline-block">
                    <div class="rv-button-top">
                        <span style="letter-spacing: 1px">{{ __('index.lets_start_project') ?? 'Let’s Start Your Project' }}</span>
                    </div>
                    <div class="rv-button-bottom">
                        <span class="text-" style="letter-spacing: 0px">{{ __('index.lets_start_project') ?? 'Let’s Start Your Project' }}</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</section>





    <!--=====================================
CTA Section
======================================-->
    <section
        class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-[70px] lg:pb-[120px]">
        <div class="container">
            <!-- CTA Heading -->
            <div class="reveal-me">
                <h2
                style=""
                    class="text-center xl:text-[96px] font-normal xl:leading-[1.1] xl:tracking-[-2.88px]">
                    Let's   Create
                    <div
                        class="cta-slider-container max-sm:block sm:inline-block max-sm:mb-7 translate-y-2 sm:translate-y-[20px]">
                        <div class="cta-inline-slider">
                            <div class="slide">
                                <img src="images/agent/01.jpg" alt="Slide 1" />
                            </div>
                            <div class="slide">
                                <img src="images/agent/02.jpg" alt="Slide 2" />
                            </div>
                            <div class="slide">
                                <img src="images/agent/03.jpg" alt="Slide 3" />
                            </div>
                        </div>
                    </div>
                  
                    <span class="text-center xl:text-[96px] font-normal xl:leading-[1.1] xl:tracking-[-2.88px]">Something Iconic</span>
                </h2>
            </div>

            <!-- Contact Form -->
            <form
            style="display: "
                class="grid grid-cols-1 md:grid-cols-2 gap-[30px] max-w-[800px] mt-20 mx-auto reveal-me">
                <!-- Your Data Field -->
               

                <!-- Submit Button -->

                <a
                    href="https://wa.me/201012620529"
                    class="rv-button rv-button-secondary !w-full col-span-full"
                    type="submit">
                    <div class="rv-button-top !w-full !text-center">
                        <span class="!font-normal"> {{ __('index.send_us') }}</span>
                    </div>
                    <div class="rv-button-bottom !w-full !text-center">
                        <span class="!font-normal"> {{ __('index.send_us') }}</span>
                    </div>
                </a>
            </form>
        </div>
        
    </section>
 
<section class="service-section relative overflow-hidden pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]">
   
  
    <article  class="flex flex-row flex-nowrap w-fit gap-9 pl-[7%] md:pl-[20%] md:pr-10 service-wrapper overflow-x-hidden reveal-me">
      <!-- Testimonial Card 1 -->
      <div class="w-[395px] md:w-[570px]">
        <a href="https://www.facebook.com/share/p/1f6MwLdnb1/" target="_blank">
          <img src="images/thumb1.jpg" alt="">
        </a>
        <div class="pl-16 -mt-3">
        </div>
      </div>
      <div class="w-[395px] md:w-[570px]">
        <a href="https://www.facebook.com/share/p/16ArrmSjpt/" target="_blank">
          <img src="images/thumb2.jpg" alt="">
        </a>
        <div class="pl-16 -mt-3">
        </div>
      </div>
      <div class="w-[395px] md:w-[570px]">
        <a href="https://www.facebook.com/share/p/18jMmj4sa6/" target="_blank">
          <img src="images/thumb3.jpg" alt="">
        </a>
        <div class="pl-16 -mt-3">
        </div>
      </div>
      <div class="w-[395px] md:w-[570px]">
        <a href="https://www.facebook.com/share/p/169YwLdnb1/" target="_blank">
          <img src="images/thumb4.jpg" alt="">
        </a>
        <div class="pl-16 -mt-3">
        </div>
      </div>
      <div class="w-[395px] md:w-[570px]">
        <a href="https://www.facebook.com/share/p/1AGgeQ4W2i/" target="_blank">
          <img src="images/thumb5.jpg" alt="">
        </a>
        <div class="pl-16 -mt-3">
        </div>
      </div>
      <div class="w-[395px] md:w-[570px]">
        <a href="https://www.facebook.com/share/p/1HSYozzpvd/" target="_blank">
          <img src="images/thumb6.jpg" alt="">
        </a>
        <div class="pl-16 -mt-3">
        </div>
      </div>
  
    
    </article>
  </section>
  
</main>
@endsection
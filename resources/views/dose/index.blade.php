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
                    src="images/hero-gradient-background.png"
                    alt="hero-gradient-background"
                    id="hero-gradient"
                    class="absolute left-1/2 top-[1/2] -translate-x-1/2 -translate-y-1/2" />
            </div>
            <div class="container">
                <div class="reveal-me text-center">
                    <h1 class="font-semibold">
                        <span class="font-instrument italic block font-normal">Rivor</span>
                        Creative Design Agency
                    </h1>

                    <!-- Hero Buttons -->
                    <ul class="flex justify-center list-none mt-10 md:mt-14">
                        <!-- Primary CTA Button -->
                        <li class="block md:inline-block w-full text-center md:w-auto">
                            <a
                                href="/contact.html"
                                class="rv-button rv-button-sm rv-button-primary block md:inline-block">
                                <div class="rv-button-top">
                                    <span>Let’s Talk</span>
                                </div>
                                <div class="rv-button-bottom">
                                    <span class="text-nowrap">Let’s Talk</span>
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
                    <span class="rv-badge-text">Who We Are</span>
                </div>
                <h2 class="mt-3 mb-8 text-center text-appear">
                    We Are the Architects of Creative <br class="hidden md:block" />
                    Innovation
                </h2>
            </div>

            <h3
                class="reveal-text-2 text-2xl text-secondary/90 dark:text-backgroundBody/70 text-center lg:text-3xl xl:text-4xl font-normal lg:leading-[1.2] lg:tracking-[0.72px]">
                At Rivor, we believe design goes beyond aesthetics—it’s about crafting
                meaningful connections that inspire, engage, and leave a lasting impact.
                Our approach blends creativity with strategy, ensuring that every design
                element serves a purpose. Whether it’s branding, user experience, or
                digital interfaces, we focus on innovation that resonates with your
                audience.
            </h3>

            <!-- about Buttons -->
            <ul class="flex justify-center mt-[56px] mx-auto list-none reveal-me">
                <!-- white  Button -->
                <li class="block md:inline-block w-full mx-auto md:w-auto text-center">
                    <a
                        href="/team.html"
                        class="rv-button rv-button-white block md:inline-block">
                        <div class="rv-button-top">
                            <span>Meet the Team</span>
                        </div>
                        <div class="rv-button-bottom">
                            <span>Meet the Team</span>
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
            </div>
        </div>

        <!-- Reverse -->
        <div class="marquee-reverse-container reveal-me border-t dark:border-dark">
            <div class="flex items-center justify-between py-2.5">
                <div class="flex items-center gap-6 mr-5">
                    <span
                        class="text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-semibold leading-tight xl:leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px] text-nowrap">
                        Since 1993
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
                        Based in New York
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
                        Award-Winning Agency
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
                        Since 1993
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
                        Based in New York
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
                        Featured <span class="font-instrument italic">work</span>
                    </h2>
                </div>
                <div class="flex-1 max-w-md">
                    <p class="text-appear max-md:text-justify md:text-right">
                        Our user-centered design encourages productivity and boosts revenue.
                    </p>
                    <ul class="justify-self-end max-md:w-full mt-5 md:mt-10 reveal-me">
                        <li
                            class="block md:inline-block w-full mx-auto md:w-auto text-center">
                            <a
                                href="/blog-02.html"
                                class="rv-button rv-button-white block md:inline-block">
                                <div class="rv-button-top">
                                    <span>See More Case Studies</span>
                                </div>
                                <div class="rv-button-bottom">
                                    <span>See More Case Studies</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div
                class="grid grid-cols-1 md:grid-cols-2 justify-items-center items-center md:items-start gap-8 gap-y-12">
                <div class="reveal-me underline-hover-effect group relative">
                    <a href="blog-details.html">
                        <figure class="overflow-hidden">
                            <img
                                src="images/blog-img/blog-img-13.png"
                                class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
                                alt="Blog Images" />
                        </figure>
                    </a>
                    <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
                        <p
                            class="text-[13px] leading-6 tracking-[8px] uppercase font-normal text-secondary dark:text-backgroundBody">
                            Case study
                        </p>
                        <p
                            class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-backgroundBody">
                            2020
                        </p>
                    </div>
                    <a href="blog-details.html">
                        <div class="blog-title">
                            <h3
                                class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                Epicurean Elegance
                            </h3>
                        </div>
                    </a>
                    <div class="border-b dark:border-dark mt-6"></div>

                    <!-- Blog Hover Button -->
                    <a href="blog-details.html">
                        <div
                            class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                            <span class="text-secondary">view</span>
                            <img
                                src="/images/home-5/ArrowUpRight-dark.svg"
                                alt="ArrowUpRight-dark" />
                        </div>
                    </a>
                </div>

                <div class="reveal-me underline-hover-effect group relative">
                    <a href="blog-details.html">
                        <figure class="overflow-hidden">
                            <img
                                src="images/blog-img/blog-img-14.png"
                                class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
                                alt="Blog Images" />
                        </figure>
                    </a>
                    <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
                        <p
                            class="text-[13px] leading-6 tracking-[8px] uppercase font-normal text-secondary dark:text-backgroundBody">
                            Projects
                        </p>
                        <p
                            class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-backgroundBody">
                            2021
                        </p>
                    </div>
                    <a href="blog-details.html">
                        <div class="blog-title">
                            <h3
                                class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                Artistry in Motion
                            </h3>
                        </div>
                    </a>
                    <div class="border-b dark:border-dark mt-6"></div>
                    <!-- Blog Hover Button -->
                    <a href="blog-details.html">
                        <div
                            class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                            <span class="text-secondary">view</span>
                            <img
                                src="/images/home-5/ArrowUpRight-dark.svg"
                                alt="ArrowUpRight-dark" />
                        </div>
                    </a>
                </div>
                <div class="reveal-me underline-hover-effect group relative">
                    <a href="blog-details.html">
                        <figure class="overflow-hidden">
                            <img
                                src="images/blog-img/blog-img-15.png"
                                class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
                                alt="Blog Images" />
                        </figure>
                    </a>
                    <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
                        <p
                            class="text-[13px] leading-6 tracking-[8px] uppercase font-normal text-secondary dark:text-backgroundBody">
                            Case study
                        </p>
                        <p
                            class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-backgroundBody">
                            2020
                        </p>
                    </div>
                    <a href="blog-details.html">
                        <div class="blog-title">
                            <h3
                                class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                Digital Canvas
                            </h3>
                        </div>
                    </a>
                    <div class="border-b dark:border-dark mt-6"></div>
                    <!-- Blog Hover Button -->
                    <a href="blog-details.html">
                        <div
                            class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                            <span class="text-secondary">view</span>
                            <img
                                src="/images/home-5/ArrowUpRight-dark.svg"
                                alt="ArrowUpRight-dark" />
                        </div>
                    </a>
                </div>
                <div class="reveal-me underline-hover-effect group relative">
                    <a href="blog-details.html">
                        <figure class="overflow-hidden">
                            <img
                                src="images/blog-img/blog-img-16.png"
                                class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
                                alt="Blog Images" />
                        </figure>
                    </a>
                    <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
                        <p
                            class="text-[13px] leading-6 tracking-[8px] uppercase font-normal text-secondary dark:text-backgroundBody">
                            Case study
                        </p>
                        <p
                            class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-backgroundBody">
                            2020
                        </p>
                    </div>
                    <a href="blog-details.html">
                        <div class="blog-title">
                            <h3
                                class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                Fashion Forward
                            </h3>
                        </div>
                    </a>
                    <div class="border-b dark:border-dark mt-6"></div>
                    <!-- Blog Hover Button -->
                    <a href="blog-details.html">
                        <div
                            class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                            <span class="text-secondary">view</span>
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
                        Designing Experiences That
                        <span class="font-instrument italic font-medium"> Drive Growth</span>
                    </h2>
                </div>

                <!-- Description -->
                <div class="max-md:w-full flex-1 lg:w-[470px] md:self-end">
                    <p class="text-appear max-w-lg md:text-right md:place-self-end">
                        We offer a full suite of creative solutions tailored to your brand’s
                        success.
                    </p>
                    <ul class="justify-self-end max-md:w-full mt-5 md:mt-10 reveal-me">
                        <li
                            class="block md:inline-block w-full mx-auto md:w-auto text-center">
                            <a
                                href="/services.html"
                                class="rv-button rv-button-white block md:inline-block">
                                <div class="rv-button-top">
                                    <span>See More Case Studies</span>
                                </div>
                                <div class="rv-button-bottom">
                                    <span>See More Case Studies</span>
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
            <a href="services-details.html" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-t border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">Portrait Shoots</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                Delivering a stellar experience for every user.
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
            <!--  -->
            <a href="services-details.html" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-t border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">Location shoots</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                Delivering a stellar experience for every user.
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
                                src="images/services/photography-services-02.png"
                                alt="Hover on Photography Services"
                                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                        </figure>
                    </div>
                </div>
            </a>
            <!--  -->
            <a href="services-details.html" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-t border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">Product Shoots</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                Delivering a stellar experience for every user.
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
                                src="images/services/photography-services-03.png"
                                alt="Hover on Photography Services"
                                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                        </figure>
                    </div>
                </div>
            </a>
            <!--  -->
            <a href="services-details.html" class="block">
                <div
                    class="bg-backgroundBody dark:bg-dark border-y border-x dark:border-dark group relative overflow-hidden">
                    <div
                        class="relative group z-10 cursor-pointer py-10 md:py-[60px] px-5 md:px-10 flex justify-between items-center">
                        <h3
                            class="relative z-10 flex flex-col md:flex-row md:items-center gap-x-32 gap-y-3 text-[25px] md:text-4xl lg:text-[42px] xl:text-5xl font-normal leading-[25.2px] md:leading-[1.2]">
                            <span class="font-medium">VideoGraphy</span>
                            <p
                                class="text-base md:text-xl md:leading-[1.4] md:tracking-[0.4px] mt-2 pr-[2px] max-w-lg">
                                Delivering a stellar experience for every user.
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
                                src="images/services/photography-services-04.png"
                                alt="Hover on Photography Services"
                                class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                        </figure>
                    </div>
                </div>
            </a>
        </div>
    </section>


    <section
        class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
        <div class="container">
            <div
                class="max-w-4xl mx-auto grid max-md:grid-cols-2 md:grid-cols-4 reveal-me border-t border-x [&>*]:border-r max-md:[&>*:nth-child(2)]:border-r-0 max-md:[&>*:nth-child(6)]:border-r-0 [&>*:nth-child(4)]:border-r-0 [&>*:nth-child(8)]:border-r-0 [&>*]:border-b dark:[&>*]:border-dark dark:border-dark">
                <figure class="px-12 py-8">
                    <img
                        src="images/marquee-img/invert.svg"
                        alt="Invert Logo"
                        class="inline dark:hidden" />
                    <img
                        src="images/marquee-img/invert-dark.svg"
                        alt="Invert Logo"
                        class="hidden dark:inline" />
                </figure>
                <figure class="px-12 py-8">
                    <img
                        src="images/marquee-img/greenish.svg"
                        alt="Invert Logo"
                        class="inline dark:hidden" />
                    <img
                        src="images/marquee-img/greenish-dark.svg"
                        alt="Invert Logo"
                        class="hidden dark:inline" />
                </figure>
                <figure class="px-12 py-8">
                    <img
                        src="images/marquee-img/invert.svg"
                        alt="Invert Logo"
                        class="inline dark:hidden" />
                    <img
                        src="images/marquee-img/invert-dark.svg"
                        alt="Invert Logo"
                        class="hidden dark:inline" />
                </figure>
                <figure class="px-12 py-8">
                    <img
                        src="images/marquee-img/greenish.svg"
                        alt="Invert Logo"
                        class="inline dark:hidden" />
                    <img
                        src="images/marquee-img/greenish-dark.svg"
                        alt="Invert Logo"
                        class="hidden dark:inline" />
                </figure>

                <!-- Reverse Marquee -->
                <figure class="px-12 py-8">
                    <img
                        src="images/marquee-img/invert.svg"
                        alt="Invert Logo"
                        class="inline dark:hidden" />
                    <img
                        src="images/marquee-img/invert-dark.svg"
                        alt="Invert Logo"
                        class="hidden dark:inline" />
                </figure>
                <figure class="px-12 py-8">
                    <img
                        src="images/marquee-img/greenish.svg"
                        alt="Invert Logo"
                        class="inline dark:hidden" />
                    <img
                        src="images/marquee-img/greenish-dark.svg"
                        alt="Invert Logo"
                        class="hidden dark:inline" />
                </figure>
                <figure class="px-12 py-8">
                    <img
                        src="images/marquee-img/invert.svg"
                        alt="Invert Logo"
                        class="inline dark:hidden" />
                    <img
                        src="images/marquee-img/invert-dark.svg"
                        alt="Invert Logo"
                        class="hidden dark:inline" />
                </figure>
                <figure class="px-12 py-8">
                    <img
                        src="images/marquee-img/greenish.svg"
                        alt="Invert Logo"
                        class="inline dark:hidden" />
                    <img
                        src="images/marquee-img/greenish-dark.svg"
                        alt="Invert Logo"
                        class="hidden dark:inline" />
                </figure>
            </div>
        </div>
    </section>


    <section
        class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center">
                <!-- Status Badge -->
                <div class="rv-badge mb-3">
                    <span class="rv-badge-text">Open for new work</span>
                </div>
                <h2 class="mb-7 lg:mb-14 text-center text-appear">
                    Bringing ideas to life, <i class="font-instrument">Seamlessly</i>
                </h2>
            </div>

            <!-- Process Steps Container -->
            <div
                class="flex max-md:flex-wrap gap-[30px] justify-center service-item-wrapper">
                <!-- Step 1 - Keyword Research -->
                <div
                    class="flex flex-col justify-center items-center relative reveal-me pt-[100px]">
                    <h2 class="service-item-number"></h2>
                    <h5 class="mb-5">Keyword Research</h5>
                    <p class="text-center">Dive deep into your market, understand your</p>
                </div>

                <!-- Step 2 - Link Building -->
                <div
                    class="flex flex-col justify-center items-center relative reveal-me pt-[100px]">
                    <h2 class="service-item-number"></h2>
                    <h5 class="mb-5">Link Building</h5>
                    <p class="text-center">Dive deep into your market, understand your</p>
                </div>

                <!-- Step 3 - Ranking -->
                <div
                    class="flex flex-col justify-center items-center relative reveal-me pt-[100px]">
                    <h2 class="service-item-number"></h2>
                    <h5 class="mb-5">Ranking</h5>
                    <p class="text-center">Dive deep into your market, understand your</p>
                </div>
            </div>
            <!--  Buttons -->
            <ul class="flex justify-center list-none mt-14">
                <!-- Primary CTA Button -->
                <li class="block md:inline-block w-full text-center md:w-auto">
                    <a
                        href="/project-03.html"
                        class="rv-button rv-button-primary block md:inline-block">
                        <div class="rv-button-top">
                            <span>Let’s Start Your Project</span>
                        </div>
                        <div class="rv-button-bottom">
                            <span class="text-nowrap">Let’s Start Your Project</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>


    <section
        class="service-section relative overflow-hidden pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]">
        <div class="container">
            <!-- Section Header -->
            <div
                class="flex flex-col md:flex-row gap-x-10 gap-y-4 justify-center lg:justify-between items-start mb-16 lg:mb-24">
                <!-- Title Area -->
                <div class="flex-1 md:self-start">
                    <h2 class="text-appear leading-[1.1]">
                        What our clients in
                        <span class="font-instrument italic font-medium"> say</span>
                    </h2>
                </div>

                <!-- Description -->
                <div class="max-md:w-full flex-1 md:self-end">
                    <p class="text-appear max-w-lg md:place-self-end md:text-right">
                        We offer a full suite of creative solutions tailored to your brand’s
                        success.
                    </p>
                    <ul class="justify-self-end max-md:w-full mt-5 md:mt-10 reveal-me">
                        <li
                            class="block md:inline-block w-full mx-auto md:w-auto text-center">
                            <a
                                href="/services.html"
                                class="rv-button rv-button-white block md:inline-block">
                                <div class="rv-button-top">
                                    <span>Read More Testimonials</span>
                                </div>
                                <div class="rv-button-bottom">
                                    <span>Read More Testimonials</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <article
            class="flex flex-row flex-nowrap w-fit gap-9 pl-[7%] md:pl-[20%] md:pr-10 service-wrapper overflow-x-hidden reveal-me">
            <!-- Testimonial Card 1 -->
            <div class="w-[395px] md:w-[570px]">
                <span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="107"
                        height="70"
                        viewBox="0 0 107 70"
                        fill="none">
                        <path
                            d="M93.8875 26.3658C97.8489 27.6974 101.018 30.0943 103.395 33.5564C105.772 36.7523 106.96 40.3476 106.96 44.3424C107.224 48.3372 106.168 52.332 103.791 56.3268C101.678 60.0553 98.2451 63.2512 93.4913 65.9144C85.8324 69.9092 79.0979 70.9745 73.2877 69.1103C67.4775 66.9797 63.3839 63.7838 61.007 59.5227C59.6865 57.3921 58.6301 54.4626 57.8378 50.7341C57.3096 47.0056 57.0455 43.144 57.0455 39.1492C57.3096 34.888 57.8378 30.7601 58.6301 26.7652C59.4224 22.7704 60.6109 19.4414 62.1955 16.7782C63.516 14.914 65.1006 12.9166 66.9493 10.786C68.5339 8.92175 70.3826 7.0575 72.4954 5.19326C74.8723 3.32901 77.5133 1.59792 80.4184 0L94.2836 0.798962C92.4349 2.92953 90.7183 4.92694 89.1337 6.79118C87.8132 8.38911 86.6247 9.85387 85.5683 11.1855C84.5119 12.5171 83.4555 13.7155 82.3991 14.7808C80.5504 16.6451 79.0979 18.5093 78.0415 20.3735C76.9851 21.9715 76.0607 23.7026 75.2684 25.5668C74.7402 27.431 74.7402 29.2953 75.2684 31.1595C78.7017 27.431 82.6632 25.5668 87.1529 25.5668C89.2657 25.5668 91.5106 25.8331 93.8875 26.3658ZM39.2188 28.3632C42.9162 30.4937 45.5572 33.4233 47.1418 37.1518C48.9905 40.6139 49.6507 44.3424 49.1225 48.3372C48.5943 52.332 46.8777 56.0605 43.9726 59.5227C41.3316 62.9849 37.3701 65.6481 32.0881 67.5123C23.901 70.1755 17.1665 70.0424 11.8845 67.1128C6.60249 63.917 3.03715 60.0553 1.18845 55.5279C0.39615 53.131 0 50.0683 0 46.3398C0 42.6113 0.39615 38.7497 1.18845 34.7549C1.98075 30.7601 3.03715 26.8984 4.35765 23.1699C5.67814 19.4414 7.39479 16.3787 9.50759 13.9818C11.0922 12.1176 12.9409 10.3865 15.0537 8.78859C16.9024 7.45698 19.0152 5.99222 21.3921 4.39429C24.0331 2.79637 26.9382 1.3316 30.1074 0L43.9726 3.59533C41.8598 5.45958 39.8791 7.0575 38.0304 8.38911C36.4458 9.72071 34.9932 10.9192 33.6727 11.9844C32.3522 13.0497 31.0317 14.115 29.7112 15.1803C27.8625 16.7782 26.2779 18.3761 24.9574 19.9741C23.6369 21.3057 22.4485 22.9036 21.3921 24.7678C20.3357 26.3658 19.9395 28.0968 20.2036 29.9611C22.3164 28.3632 24.4292 27.431 26.542 27.1647C28.9189 26.6321 31.0317 26.4989 32.8804 26.7652C34.9932 27.0316 37.106 27.5642 39.2188 28.3632Z"
                            fill="url(#paint0_linear_5524_5583)" />
                        <defs>
                            <linearGradient
                                id="paint0_linear_5524_5583"
                                x1="134.547"
                                y1="18.0106"
                                x2="50.9596"
                                y2="-47.7788"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#12D8CC" stop-opacity="0.03" />
                                <stop offset="1" stop-color="#FF6100" stop-opacity="0.7" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <div class="pl-16 -mt-3">
                    <p class="text-lg leading-[1.6] tracking-[0.36px] max-w-[500px] mb-5">
                        "Rivor completely transformed our brand identity. Their creativity and
                        attention to detail exceeded our expectations!"
                    </p>
                    <p
                        class="text-xs text-black dark:text-backgroundBody left-[18px] font-semibold tracking-[0.9px] mb-4">
                        - 03 Feb, 2024
                    </p>
                </div>
                <div class="flex flex-col">
                    <img
                        src="/images/avatar/review-12.png"
                        alt="Leslie Alexander"
                        class="size-16 object-cover" />
                    <div class="mt-2">
                        <h4 class="text-2xl leading-[1.1]">Leslie Alexander</h4>
                        <p class="text-sm leading-[1.6] tracking-wide mt-[1px]">
                            Product Designer
                        </p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 2 -->
            <div class="w-[395px] md:w-[570px]">
                <span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="107"
                        height="70"
                        viewBox="0 0 107 70"
                        fill="none">
                        <path
                            d="M93.8875 26.3658C97.8489 27.6974 101.018 30.0943 103.395 33.5564C105.772 36.7523 106.96 40.3476 106.96 44.3424C107.224 48.3372 106.168 52.332 103.791 56.3268C101.678 60.0553 98.2451 63.2512 93.4913 65.9144C85.8324 69.9092 79.0979 70.9745 73.2877 69.1103C67.4775 66.9797 63.3839 63.7838 61.007 59.5227C59.6865 57.3921 58.6301 54.4626 57.8378 50.7341C57.3096 47.0056 57.0455 43.144 57.0455 39.1492C57.3096 34.888 57.8378 30.7601 58.6301 26.7652C59.4224 22.7704 60.6109 19.4414 62.1955 16.7782C63.516 14.914 65.1006 12.9166 66.9493 10.786C68.5339 8.92175 70.3826 7.0575 72.4954 5.19326C74.8723 3.32901 77.5133 1.59792 80.4184 0L94.2836 0.798962C92.4349 2.92953 90.7183 4.92694 89.1337 6.79118C87.8132 8.38911 86.6247 9.85387 85.5683 11.1855C84.5119 12.5171 83.4555 13.7155 82.3991 14.7808C80.5504 16.6451 79.0979 18.5093 78.0415 20.3735C76.9851 21.9715 76.0607 23.7026 75.2684 25.5668C74.7402 27.431 74.7402 29.2953 75.2684 31.1595C78.7017 27.431 82.6632 25.5668 87.1529 25.5668C89.2657 25.5668 91.5106 25.8331 93.8875 26.3658ZM39.2188 28.3632C42.9162 30.4937 45.5572 33.4233 47.1418 37.1518C48.9905 40.6139 49.6507 44.3424 49.1225 48.3372C48.5943 52.332 46.8777 56.0605 43.9726 59.5227C41.3316 62.9849 37.3701 65.6481 32.0881 67.5123C23.901 70.1755 17.1665 70.0424 11.8845 67.1128C6.60249 63.917 3.03715 60.0553 1.18845 55.5279C0.39615 53.131 0 50.0683 0 46.3398C0 42.6113 0.39615 38.7497 1.18845 34.7549C1.98075 30.7601 3.03715 26.8984 4.35765 23.1699C5.67814 19.4414 7.39479 16.3787 9.50759 13.9818C11.0922 12.1176 12.9409 10.3865 15.0537 8.78859C16.9024 7.45698 19.0152 5.99222 21.3921 4.39429C24.0331 2.79637 26.9382 1.3316 30.1074 0L43.9726 3.59533C41.8598 5.45958 39.8791 7.0575 38.0304 8.38911C36.4458 9.72071 34.9932 10.9192 33.6727 11.9844C32.3522 13.0497 31.0317 14.115 29.7112 15.1803C27.8625 16.7782 26.2779 18.3761 24.9574 19.9741C23.6369 21.3057 22.4485 22.9036 21.3921 24.7678C20.3357 26.3658 19.9395 28.0968 20.2036 29.9611C22.3164 28.3632 24.4292 27.431 26.542 27.1647C28.9189 26.6321 31.0317 26.4989 32.8804 26.7652C34.9932 27.0316 37.106 27.5642 39.2188 28.3632Z"
                            fill="url(#paint0_linear_5524_5583)" />
                        <defs>
                            <linearGradient
                                id="paint0_linear_5524_5583"
                                x1="134.547"
                                y1="18.0106"
                                x2="50.9596"
                                y2="-47.7788"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#12D8CC" stop-opacity="0.03" />
                                <stop offset="1" stop-color="#FF6100" stop-opacity="0.7" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <div class="pl-16 -mt-3">
                    <p class="text-lg leading-[1.6] tracking-[0.36px] max-w-[500px] mb-5">
                        "An amazing experience working with Rivor. The team is professional,
                        efficient, and creative!"
                    </p>
                    <p
                        class="text-xs text-black dark:text-backgroundBody left-[18px] font-semibold tracking-[0.9px] mb-4">
                        - 15 Mar, 2024
                    </p>
                </div>
                <div class="flex flex-col">
                    <img
                        src="/images/avatar/review-12.png"
                        alt="Jane Cooper"
                        class="size-16 object-cover" />
                    <div class="mt-2">
                        <h4 class="text-2xl leading-[1.1]">Jane Cooper</h4>
                        <p class="text-sm leading-[1.6] tracking-wide mt-[1px]">
                            Marketing Specialist
                        </p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 3 -->
            <div class="w-[395px] md:w-[570px]">
                <span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="107"
                        height="70"
                        viewBox="0 0 107 70"
                        fill="none">
                        <path
                            d="M93.8875 26.3658C97.8489 27.6974 101.018 30.0943 103.395 33.5564C105.772 36.7523 106.96 40.3476 106.96 44.3424C107.224 48.3372 106.168 52.332 103.791 56.3268C101.678 60.0553 98.2451 63.2512 93.4913 65.9144C85.8324 69.9092 79.0979 70.9745 73.2877 69.1103C67.4775 66.9797 63.3839 63.7838 61.007 59.5227C59.6865 57.3921 58.6301 54.4626 57.8378 50.7341C57.3096 47.0056 57.0455 43.144 57.0455 39.1492C57.3096 34.888 57.8378 30.7601 58.6301 26.7652C59.4224 22.7704 60.6109 19.4414 62.1955 16.7782C63.516 14.914 65.1006 12.9166 66.9493 10.786C68.5339 8.92175 70.3826 7.0575 72.4954 5.19326C74.8723 3.32901 77.5133 1.59792 80.4184 0L94.2836 0.798962C92.4349 2.92953 90.7183 4.92694 89.1337 6.79118C87.8132 8.38911 86.6247 9.85387 85.5683 11.1855C84.5119 12.5171 83.4555 13.7155 82.3991 14.7808C80.5504 16.6451 79.0979 18.5093 78.0415 20.3735C76.9851 21.9715 76.0607 23.7026 75.2684 25.5668C74.7402 27.431 74.7402 29.2953 75.2684 31.1595C78.7017 27.431 82.6632 25.5668 87.1529 25.5668C89.2657 25.5668 91.5106 25.8331 93.8875 26.3658ZM39.2188 28.3632C42.9162 30.4937 45.5572 33.4233 47.1418 37.1518C48.9905 40.6139 49.6507 44.3424 49.1225 48.3372C48.5943 52.332 46.8777 56.0605 43.9726 59.5227C41.3316 62.9849 37.3701 65.6481 32.0881 67.5123C23.901 70.1755 17.1665 70.0424 11.8845 67.1128C6.60249 63.917 3.03715 60.0553 1.18845 55.5279C0.39615 53.131 0 50.0683 0 46.3398C0 42.6113 0.39615 38.7497 1.18845 34.7549C1.98075 30.7601 3.03715 26.8984 4.35765 23.1699C5.67814 19.4414 7.39479 16.3787 9.50759 13.9818C11.0922 12.1176 12.9409 10.3865 15.0537 8.78859C16.9024 7.45698 19.0152 5.99222 21.3921 4.39429C24.0331 2.79637 26.9382 1.3316 30.1074 0L43.9726 3.59533C41.8598 5.45958 39.8791 7.0575 38.0304 8.38911C36.4458 9.72071 34.9932 10.9192 33.6727 11.9844C32.3522 13.0497 31.0317 14.115 29.7112 15.1803C27.8625 16.7782 26.2779 18.3761 24.9574 19.9741C23.6369 21.3057 22.4485 22.9036 21.3921 24.7678C20.3357 26.3658 19.9395 28.0968 20.2036 29.9611C22.3164 28.3632 24.4292 27.431 26.542 27.1647C28.9189 26.6321 31.0317 26.4989 32.8804 26.7652C34.9932 27.0316 37.106 27.5642 39.2188 28.3632Z"
                            fill="url(#paint0_linear_5524_5583)" />
                        <defs>
                            <linearGradient
                                id="paint0_linear_5524_5583"
                                x1="134.547"
                                y1="18.0106"
                                x2="50.9596"
                                y2="-47.7788"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#12D8CC" stop-opacity="0.03" />
                                <stop offset="1" stop-color="#FF6100" stop-opacity="0.7" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <div class="pl-16 -mt-3">
                    <p class="text-lg leading-[1.6] tracking-[0.36px] max-w-[500px] mb-5">
                        "Rivor provided top-notch service. Their expertise helped us scale our
                        business!"
                    </p>
                    <p
                        class="text-xs text-black dark:text-backgroundBody left-[18px] font-semibold tracking-[0.9px] mb-4">
                        - 28 Apr, 2024
                    </p>
                </div>
                <div class="flex flex-col">
                    <img
                        src="/images/avatar/review-12.png"
                        alt="Robert Fox"
                        class="size-16 object-cover" />
                    <div class="mt-2">
                        <h4 class="text-2xl leading-[1.1]">Robert Fox</h4>
                        <p class="text-sm leading-[1.6] tracking-wide mt-[1px]">
                            Business Owner
                        </p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 4 -->
            <div class="w-[395px] md:w-[570px]">
                <span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="107"
                        height="70"
                        viewBox="0 0 107 70"
                        fill="none">
                        <path
                            d="M93.8875 26.3658C97.8489 27.6974 101.018 30.0943 103.395 33.5564C105.772 36.7523 106.96 40.3476 106.96 44.3424C107.224 48.3372 106.168 52.332 103.791 56.3268C101.678 60.0553 98.2451 63.2512 93.4913 65.9144C85.8324 69.9092 79.0979 70.9745 73.2877 69.1103C67.4775 66.9797 63.3839 63.7838 61.007 59.5227C59.6865 57.3921 58.6301 54.4626 57.8378 50.7341C57.3096 47.0056 57.0455 43.144 57.0455 39.1492C57.3096 34.888 57.8378 30.7601 58.6301 26.7652C59.4224 22.7704 60.6109 19.4414 62.1955 16.7782C63.516 14.914 65.1006 12.9166 66.9493 10.786C68.5339 8.92175 70.3826 7.0575 72.4954 5.19326C74.8723 3.32901 77.5133 1.59792 80.4184 0L94.2836 0.798962C92.4349 2.92953 90.7183 4.92694 89.1337 6.79118C87.8132 8.38911 86.6247 9.85387 85.5683 11.1855C84.5119 12.5171 83.4555 13.7155 82.3991 14.7808C80.5504 16.6451 79.0979 18.5093 78.0415 20.3735C76.9851 21.9715 76.0607 23.7026 75.2684 25.5668C74.7402 27.431 74.7402 29.2953 75.2684 31.1595C78.7017 27.431 82.6632 25.5668 87.1529 25.5668C89.2657 25.5668 91.5106 25.8331 93.8875 26.3658ZM39.2188 28.3632C42.9162 30.4937 45.5572 33.4233 47.1418 37.1518C48.9905 40.6139 49.6507 44.3424 49.1225 48.3372C48.5943 52.332 46.8777 56.0605 43.9726 59.5227C41.3316 62.9849 37.3701 65.6481 32.0881 67.5123C23.901 70.1755 17.1665 70.0424 11.8845 67.1128C6.60249 63.917 3.03715 60.0553 1.18845 55.5279C0.39615 53.131 0 50.0683 0 46.3398C0 42.6113 0.39615 38.7497 1.18845 34.7549C1.98075 30.7601 3.03715 26.8984 4.35765 23.1699C5.67814 19.4414 7.39479 16.3787 9.50759 13.9818C11.0922 12.1176 12.9409 10.3865 15.0537 8.78859C16.9024 7.45698 19.0152 5.99222 21.3921 4.39429C24.0331 2.79637 26.9382 1.3316 30.1074 0L43.9726 3.59533C41.8598 5.45958 39.8791 7.0575 38.0304 8.38911C36.4458 9.72071 34.9932 10.9192 33.6727 11.9844C32.3522 13.0497 31.0317 14.115 29.7112 15.1803C27.8625 16.7782 26.2779 18.3761 24.9574 19.9741C23.6369 21.3057 22.4485 22.9036 21.3921 24.7678C20.3357 26.3658 19.9395 28.0968 20.2036 29.9611C22.3164 28.3632 24.4292 27.431 26.542 27.1647C28.9189 26.6321 31.0317 26.4989 32.8804 26.7652C34.9932 27.0316 37.106 27.5642 39.2188 28.3632Z"
                            fill="url(#paint0_linear_5524_5583)" />
                        <defs>
                            <linearGradient
                                id="paint0_linear_5524_5583"
                                x1="134.547"
                                y1="18.0106"
                                x2="50.9596"
                                y2="-47.7788"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#12D8CC" stop-opacity="0.03" />
                                <stop offset="1" stop-color="#FF6100" stop-opacity="0.7" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <div class="pl-16 -mt-3">
                    <p class="text-lg leading-[1.6] tracking-[0.36px] max-w-[500px] mb-5">
                        "The design and development team at Rivor is phenomenal. I highly
                        recommend them!"
                    </p>
                    <p
                        class="text-xs text-blac dark:text-backgroundBodyk left-[18px] font-semibold tracking-[0.9px] mb-4">
                        - 10 May, 2024
                    </p>
                </div>
                <div class="flex flex-col">
                    <img
                        src="/images/avatar/review-12.png"
                        alt="Emily Davis"
                        class="size-16 object-cover" />
                    <div class="mt-2">
                        <h4 class="text-2xl leading-[1.1]">Emily Davis</h4>
                        <p class="text-sm leading-[1.6] tracking-wide mt-[1px]">
                            UX Designer
                        </p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 5 -->
            <div class="w-[395px] md:w-[570px]">
                <span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="107"
                        height="70"
                        viewBox="0 0 107 70"
                        fill="none">
                        <path
                            d="M93.8875 26.3658C97.8489 27.6974 101.018 30.0943 103.395 33.5564C105.772 36.7523 106.96 40.3476 106.96 44.3424C107.224 48.3372 106.168 52.332 103.791 56.3268C101.678 60.0553 98.2451 63.2512 93.4913 65.9144C85.8324 69.9092 79.0979 70.9745 73.2877 69.1103C67.4775 66.9797 63.3839 63.7838 61.007 59.5227C59.6865 57.3921 58.6301 54.4626 57.8378 50.7341C57.3096 47.0056 57.0455 43.144 57.0455 39.1492C57.3096 34.888 57.8378 30.7601 58.6301 26.7652C59.4224 22.7704 60.6109 19.4414 62.1955 16.7782C63.516 14.914 65.1006 12.9166 66.9493 10.786C68.5339 8.92175 70.3826 7.0575 72.4954 5.19326C74.8723 3.32901 77.5133 1.59792 80.4184 0L94.2836 0.798962C92.4349 2.92953 90.7183 4.92694 89.1337 6.79118C87.8132 8.38911 86.6247 9.85387 85.5683 11.1855C84.5119 12.5171 83.4555 13.7155 82.3991 14.7808C80.5504 16.6451 79.0979 18.5093 78.0415 20.3735C76.9851 21.9715 76.0607 23.7026 75.2684 25.5668C74.7402 27.431 74.7402 29.2953 75.2684 31.1595C78.7017 27.431 82.6632 25.5668 87.1529 25.5668C89.2657 25.5668 91.5106 25.8331 93.8875 26.3658ZM39.2188 28.3632C42.9162 30.4937 45.5572 33.4233 47.1418 37.1518C48.9905 40.6139 49.6507 44.3424 49.1225 48.3372C48.5943 52.332 46.8777 56.0605 43.9726 59.5227C41.3316 62.9849 37.3701 65.6481 32.0881 67.5123C23.901 70.1755 17.1665 70.0424 11.8845 67.1128C6.60249 63.917 3.03715 60.0553 1.18845 55.5279C0.39615 53.131 0 50.0683 0 46.3398C0 42.6113 0.39615 38.7497 1.18845 34.7549C1.98075 30.7601 3.03715 26.8984 4.35765 23.1699C5.67814 19.4414 7.39479 16.3787 9.50759 13.9818C11.0922 12.1176 12.9409 10.3865 15.0537 8.78859C16.9024 7.45698 19.0152 5.99222 21.3921 4.39429C24.0331 2.79637 26.9382 1.3316 30.1074 0L43.9726 3.59533C41.8598 5.45958 39.8791 7.0575 38.0304 8.38911C36.4458 9.72071 34.9932 10.9192 33.6727 11.9844C32.3522 13.0497 31.0317 14.115 29.7112 15.1803C27.8625 16.7782 26.2779 18.3761 24.9574 19.9741C23.6369 21.3057 22.4485 22.9036 21.3921 24.7678C20.3357 26.3658 19.9395 28.0968 20.2036 29.9611C22.3164 28.3632 24.4292 27.431 26.542 27.1647C28.9189 26.6321 31.0317 26.4989 32.8804 26.7652C34.9932 27.0316 37.106 27.5642 39.2188 28.3632Z"
                            fill="url(#paint0_linear_5524_5583)" />
                        <defs>
                            <linearGradient
                                id="paint0_linear_5524_5583"
                                x1="134.547"
                                y1="18.0106"
                                x2="50.9596"
                                y2="-47.7788"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#12D8CC" stop-opacity="0.03" />
                                <stop offset="1" stop-color="#FF6100" stop-opacity="0.7" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <div class="pl-16 -mt-3">
                    <p class="text-lg leading-[1.6] tracking-[0.36px] max-w-[500px] mb-5">
                        "Rivor completely transformed our brand identity. Their creativity and
                        attention to detail exceeded our expectations!"
                    </p>
                    <p
                        class="text-xs text-blac dark:text-backgroundBodyk left-[18px] font-semibold tracking-[0.9px] mb-4">
                        - 03 Feb, 2024
                    </p>
                </div>
                <div class="flex flex-col">
                    <img
                        src="/images/avatar/review-12.png"
                        alt="Leslie Alexander"
                        class="size-16 object-cover" />
                    <div class="mt-2">
                        <h4 class="text-2xl leading-[1.1]">Leslie Alexander</h4>
                        <p class="text-sm leading-[1.6] tracking-wide mt-[1px]">
                            Product Designer
                        </p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 6 -->
            <div class="w-[395px] md:w-[570px]">
                <span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="107"
                        height="70"
                        viewBox="0 0 107 70"
                        fill="none">
                        <path
                            d="M93.8875 26.3658C97.8489 27.6974 101.018 30.0943 103.395 33.5564C105.772 36.7523 106.96 40.3476 106.96 44.3424C107.224 48.3372 106.168 52.332 103.791 56.3268C101.678 60.0553 98.2451 63.2512 93.4913 65.9144C85.8324 69.9092 79.0979 70.9745 73.2877 69.1103C67.4775 66.9797 63.3839 63.7838 61.007 59.5227C59.6865 57.3921 58.6301 54.4626 57.8378 50.7341C57.3096 47.0056 57.0455 43.144 57.0455 39.1492C57.3096 34.888 57.8378 30.7601 58.6301 26.7652C59.4224 22.7704 60.6109 19.4414 62.1955 16.7782C63.516 14.914 65.1006 12.9166 66.9493 10.786C68.5339 8.92175 70.3826 7.0575 72.4954 5.19326C74.8723 3.32901 77.5133 1.59792 80.4184 0L94.2836 0.798962C92.4349 2.92953 90.7183 4.92694 89.1337 6.79118C87.8132 8.38911 86.6247 9.85387 85.5683 11.1855C84.5119 12.5171 83.4555 13.7155 82.3991 14.7808C80.5504 16.6451 79.0979 18.5093 78.0415 20.3735C76.9851 21.9715 76.0607 23.7026 75.2684 25.5668C74.7402 27.431 74.7402 29.2953 75.2684 31.1595C78.7017 27.431 82.6632 25.5668 87.1529 25.5668C89.2657 25.5668 91.5106 25.8331 93.8875 26.3658ZM39.2188 28.3632C42.9162 30.4937 45.5572 33.4233 47.1418 37.1518C48.9905 40.6139 49.6507 44.3424 49.1225 48.3372C48.5943 52.332 46.8777 56.0605 43.9726 59.5227C41.3316 62.9849 37.3701 65.6481 32.0881 67.5123C23.901 70.1755 17.1665 70.0424 11.8845 67.1128C6.60249 63.917 3.03715 60.0553 1.18845 55.5279C0.39615 53.131 0 50.0683 0 46.3398C0 42.6113 0.39615 38.7497 1.18845 34.7549C1.98075 30.7601 3.03715 26.8984 4.35765 23.1699C5.67814 19.4414 7.39479 16.3787 9.50759 13.9818C11.0922 12.1176 12.9409 10.3865 15.0537 8.78859C16.9024 7.45698 19.0152 5.99222 21.3921 4.39429C24.0331 2.79637 26.9382 1.3316 30.1074 0L43.9726 3.59533C41.8598 5.45958 39.8791 7.0575 38.0304 8.38911C36.4458 9.72071 34.9932 10.9192 33.6727 11.9844C32.3522 13.0497 31.0317 14.115 29.7112 15.1803C27.8625 16.7782 26.2779 18.3761 24.9574 19.9741C23.6369 21.3057 22.4485 22.9036 21.3921 24.7678C20.3357 26.3658 19.9395 28.0968 20.2036 29.9611C22.3164 28.3632 24.4292 27.431 26.542 27.1647C28.9189 26.6321 31.0317 26.4989 32.8804 26.7652C34.9932 27.0316 37.106 27.5642 39.2188 28.3632Z"
                            fill="url(#paint0_linear_5524_5583)" />
                        <defs>
                            <linearGradient
                                id="paint0_linear_5524_5583"
                                x1="134.547"
                                y1="18.0106"
                                x2="50.9596"
                                y2="-47.7788"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#12D8CC" stop-opacity="0.03" />
                                <stop offset="1" stop-color="#FF6100" stop-opacity="0.7" />
                            </linearGradient>
                        </defs>
                    </svg>
                </span>
                <div class="pl-16 -mt-3">
                    <p class="text-lg leading-[1.6] tracking-[0.36px] max-w-[500px] mb-5">
                        "An amazing experience working with Rivor. The team is professional,
                        efficient, and creative!"
                    </p>
                    <p
                        class="text-xs text-blac dark:text-backgroundBodyk left-[18px] font-semibold tracking-[0.9px] mb-4">
                        - 15 Mar, 2024
                    </p>
                </div>
                <div class="flex flex-col">
                    <img
                        src="/images/avatar/review-12.png"
                        alt="Jane Cooper"
                        class="size-16 object-cover" />
                    <div class="mt-2">
                        <h4 class="text-2xl leading-[1.1]">Jane Cooper</h4>
                        <p class="text-sm leading-[1.6] tracking-wide mt-[1px]">
                            Marketing Specialist
                        </p>
                    </div>
                </div>
            </div>
        </article>
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
                    class="text-center xl:text-[96px] font-normal xl:leading-[1.1] xl:tracking-[-2.88px]">
                    Let's
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

                    Create
                    <span class="font-instrument sm:mt-10 italic block max-md:inline-block">Something Iconic</span>
                </h2>
            </div>

            <!-- Contact Form -->
            <form
                class="grid grid-cols-1 md:grid-cols-2 gap-[30px] max-w-[800px] mt-20 mx-auto reveal-me">
                <!-- Your Data Field -->
                <div class="md:col-span-full">
                    <label
                        for="name"
                        class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100">
                        Your Data
                    </label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Name*"
                        class="py-4 pl-5 bg-backgroundBody dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3" />
                </div>

                <div class="md:col-span-full">
                    <label
                        class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100">
                        You are interested in
                    </label>

                    <div class="flex flex-wrap gap-6 mt-3">
                        <div class="checkbox-wrapper">
                            <input
                                type="checkbox"
                                id="uiux"
                                name="interest"
                                value="UI/UX Design"
                                class="hidden" />
                            <label for="uiux" class="interest-btn">UI/UX Design</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input
                                type="checkbox"
                                id="webdesign"
                                name="interest"
                                value="Web Design"
                                class="hidden" />
                            <label for="webdesign" class="interest-btn">Web Design</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input
                                type="checkbox"
                                id="webdev"
                                name="interest"
                                value="Web Development"
                                class="hidden" />
                            <label for="webdev" class="interest-btn">Web Development</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input
                                type="checkbox"
                                id="website"
                                name="interest"
                                value="Website Creation"
                                class="hidden" />
                            <label for="website" class="interest-btn">Website Creation</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input
                                type="checkbox"
                                id="animation"
                                name="interest"
                                value="Animation"
                                class="hidden" />
                            <label for="animation" class="interest-btn">Animation</label>
                        </div>
                        <div class="checkbox-wrapper">
                            <input
                                type="checkbox"
                                id="others"
                                name="interest"
                                value="Others"
                                class="hidden" />
                            <label for="others" class="interest-btn">Others</label>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-full">
                    <label
                        class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100">
                        Budget in USD:
                    </label>

                    <div class="flex flex-wrap gap-6 mt-3">
                        <div class="radio-wrapper">
                            <input
                                type="radio"
                                id="budget1"
                                name="budget"
                                value="$2k-4k"
                                class="hidden" />
                            <label for="budget1" class="interest-btn">$2k-4k</label>
                        </div>
                        <div class="radio-wrapper">
                            <input
                                type="radio"
                                id="budget2"
                                name="budget"
                                value="$4k-6k"
                                class="hidden" />
                            <label for="budget2" class="interest-btn">$4k-6k</label>
                        </div>
                        <div class="radio-wrapper">
                            <input
                                type="radio"
                                id="budget3"
                                name="budget"
                                value="$6k-8k"
                                class="hidden" />
                            <label for="budget3" class="interest-btn">$6k-8k</label>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-full">
                    <label
                        for="Message"
                        class="text-2xl leading-[1.2] tracking-[-0.48px] text-[#000000b3] dark:text-dark-100">
                        Project Details
                    </label>
                    <textarea
                        name="Message"
                        placeholder="Tell us about your project goals and timeline"
                        class="py-4 pl-5 min-h-44 bg-backgroundBody dark:bg-dark focus:outline-none focus:border-primary border dark:border-dark w-full text-colorText text-xl leading-[1.4] tracking-[0.4px] mt-3"></textarea>
                </div>

                <!-- Submit Button -->

                <a
                    href="#"
                    class="rv-button rv-button-secondary !w-full col-span-full"
                    type="submit">
                    <div class="rv-button-top !w-full !text-center">
                        <span class="!font-normal"> Submit Message</span>
                    </div>
                    <div class="rv-button-bottom !w-full !text-center">
                        <span class="!font-normal"> Submit Message</span>
                    </div>
                </a>
            </form>
        </div>
    </section>

</main>
@endsection
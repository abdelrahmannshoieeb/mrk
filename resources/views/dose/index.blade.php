@extends('layout.master')


@section('content')
    <main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">

        <section class="pt-32 lg:pt-[140px] xl:pt-[180px] pb-7 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden" style="margin:20px">
            <div class="flex flex-col gap-y-8 xl:flex-row justify-center md:justify-between items-center pl-10 reveal-me">
                <!-- Text Content Container -->
                <div class="container max-sm:!-ml-[5%] lg:!ml-[10%] xl:!ml-[7%]">
                    <!-- Agency Label -->
                    <p
                        class="flex gap-5 items-center max-md:justify-center font-poppins text-sm font-normal leading-6 tracking-[3px] uppercase">
                        SEO Agency
                    </p>

                    <!-- Responsive Headings -->
                    <h1 class="mt-2 sm:mt-6 md:hidden block">
                        We are the brilliants in terms of digital marketing
                    </h1>
                    <h1 class="mt-6 text-5xl font-semibold lg:text-6xl xl:text-7xl hidden md:block">
                        We are the <br />
                        brilliants in terms <br />
                        of digital marketing
                    </h1>
                    <!-- Hero Buttons -->
                    <ul class="flex justify-start list-none mt-14">
                        <!-- Primary CTA Button -->
                        <li class="block md:inline-block w-full text-center md:w-auto">
                            <a href="https://wa.me/201012620529" target="_blank"
                                class="rv-button rv-button-primary block md:inline-block">
                                <div class="rv-button-top">
                                    <span>GET MY FREE PROPOSAL</span>
                                </div>
                                <div class="rv-button-bottom">
                                    <span class="text-nowrap">GET MY FREE PROPOSAL</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Hero Image -->
                <figure>
                    <img src="images/home-5/hero-img.png" alt="Hero Img" />
                </figure>
            </div>
        </section>

        <section
         dir="{{ app()->getLocale() == 'ar' ? 'ltr' : 'rtl' }}"
            class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px] service-section relative overflow-hidden">
            <div class="container">
                <h2>{{ __('index.Our_Services') }}</h2>
            </div>
            <article
                class="mt-16 flex flex-col md:flex-row md:flex-nowrap md:w-fit gap-6 md:pl-[20%] max-md:px-5 md:pr-10 service-wrapper overflow-x-hidden reveal-me">
                <div class="w-[332px] grid content-between max-h-[404px]">
                    <p class="text-secondary dark:text-backgroundBody text-sm leading-[1.1] tracking-[3px] uppercase">
                        {{ __('index.Our_Services') }}
                    </p>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="97" height="96" viewBox="0 0 97 96"
                            fill="none">
                            <path d="M60.5 48L78.5 66M78.5 66L60.5 84M78.5 66H24.5V12"
                                class="stroke-secondary dark:stroke-backgroundBody" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <!-- Card-01 -->
                <div class="border dark:border-dark group p-5 md:p-[30px] md:w-[740px] lg:w-[890px]">
                    <a href="/services-details.html">
                        <div class="flex flex-col md:flex-row gap-y-7 md:gap-x-12 items-start">
                            <!-- Image -->
                            <figure class="max-md:w-full">
                                <img src="/images/home-5/seo-service-1.png" alt="Keyword Research" class="w-full h-auto" />
                            </figure>

                            <!-- Icon and Description -->
                            <div class="flex flex-col justify-between">
                                <!-- Icon Figure -->
                                <figure
                                    class="bg-backgroundBody dark:bg-dark border dark:border-dark group-hover:border-none transition-all group-hover:bg-primary duration-500 p-7 lg:p-8 cursor-pointer relative size-20 overflow-hidden self-end mt-2 mb-[50px] hidden md:block">
                                    <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0 block dark:hidden" />

                                    <img src="images/home-5/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0 dark:block hidden" />

                                    <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute translate-y-16 -translate-x-[47px] transition-all duration-500 group-hover:translate-x-0 group-hover:-translate-y-[3px] opacity-0 group-hover:opacity-100" />
                                </figure>

                                <!-- Description -->
                                <p class="text-base lg:text-lg">
                                    {{ __('index.e-commerce_desc') }}

                                </p>
                            </div>
                        </div>

                        <!-- Title and Number -->
                        <div class="sm:mt-2 flex justify-between items-end">
                            <h4 class="text-[25px] lg:text-[46px] lg:leading-[1.1] lg:tracking-[-1.44px]">
                                {{ __('index.e-commerce') }}
                            </h4>
                            <span
                                class="text-black/10 dark:text-backgroundBody/10 text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px]">
                                01
                            </span>
                        </div>
                    </a>
                </div>
                <!-- Card-02 -->
                <div class="border dark:border-dark group p-5 md:p-[30px] md:w-[740px] lg:w-[890px]">
                    <a href="/services-details.html">
                        <div class="flex flex-col md:flex-row gap-y-7 md:gap-x-12 items-start">
                            <!-- Image -->
                            <figure class="max-md:w-full">
                                <img src="/images/home-5/seo-service-2.png" alt="Keyword Research" class="w-full h-auto" />
                            </figure>

                            <!-- Icon and Description -->
                            <div class="flex flex-col justify-between">
                                <!-- Icon Figure -->
                                <figure
                                    class="bg-backgroundBody dark:bg-dark border dark:border-dark group-hover:border-none transition-all group-hover:bg-primary duration-500 p-7 lg:p-8 cursor-pointer relative size-20 overflow-hidden self-end mt-2 mb-[50px] hidden md:block">
                                    <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0 block dark:hidden" />

                                    <img src="images/home-5/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0 dark:block hidden" />

                                    <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute translate-y-16 -translate-x-[47px] transition-all duration-500 group-hover:translate-x-0 group-hover:-translate-y-[3px] opacity-0 group-hover:opacity-100" />
                                </figure>

                                <!-- Description -->
                                <p class="text-base lg:text-lg">
                                    {{ __('index.marketing_services_desc') }}

                                </p>
                            </div>
                        </div>

                        <!-- Title and Number -->
                        <div class="sm:mt-2 flex justify-between items-end">
                            <h4 class="text-[25px] lg:text-[46px] lg:leading-[1.1] lg:tracking-[-1.44px]">
                                {{ __('index.marketing_services') }}
                                
                            </h4>
                            <span
                                class="text-black/10 dark:text-backgroundBody/10 text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px]">
                                02
                            </span>
                        </div>
                    </a>
                </div>
                <!-- Card-03 -->
                <div class="border dark:border-dark group p-5 md:p-[30px] md:w-[740px] lg:w-[890px]">
                    <a href="/services-details.html">
                        <div class="flex flex-col md:flex-row gap-y-7 md:gap-x-12 items-start">
                            <!-- Image -->
                            <figure class="max-md:w-full">
                                <img src="/images/home-5/seo-service-3.png" alt="Keyword Research" class="w-full h-auto" />
                            </figure>

                            <!-- Icon and Description -->
                            <div class="flex flex-col justify-between">
                                <!-- Icon Figure -->
                                <figure
                                    class="bg-backgroundBody dark:bg-dark border dark:border-dark group-hover:border-none transition-all group-hover:bg-primary duration-500 p-7 lg:p-8 cursor-pointer relative size-20 overflow-hidden self-end mt-2 mb-[50px] hidden md:block">
                                    <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0 block dark:hidden" />

                                    <img src="images/home-5/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0 dark:block hidden" />

                                    <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute translate-y-16 -translate-x-[47px] transition-all duration-500 group-hover:translate-x-0 group-hover:-translate-y-[3px] opacity-0 group-hover:opacity-100" />
                                </figure>

                                <!-- Description -->
                                <p class="text-base lg:text-lg">
                                    {{ __('index.design_services_desc') }}

                                </p>
                            </div>
                        </div>

                        <!-- Title and Number -->
                        <div class="sm:mt-2 flex justify-between items-end">
                            <h4 class="text-[25px] lg:text-[46px] lg:leading-[1.1] lg:tracking-[-1.44px]">
                                {{ __('index.design_services') }}
                            </h4>
                            <span
                                class="text-black/10 dark:text-backgroundBody/10 text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px]">
                                03
                            </span>
                        </div>
                    </a>
                </div>
                <!-- Card-04 -->
                <div class="border dark:border-dark group p-5 md:p-[30px] md:w-[740px] lg:w-[890px]">
                    <a href="/services-details.html">
                        <div class="flex flex-col md:flex-row gap-y-7 md:gap-x-12 items-start">
                            <!-- Image -->
                            <figure class="max-md:w-full">
                                <img src="/images/home-5/seo-service-4.png" alt="Keyword Research"
                                    class="w-full h-auto" />
                            </figure>

                            <!-- Icon and Description -->
                            <div class="flex flex-col justify-between">
                                <!-- Icon Figure -->
                                <figure
                                    class="bg-backgroundBody dark:bg-dark border dark:border-dark group-hover:border-none transition-all group-hover:bg-primary duration-500 p-7 lg:p-8 cursor-pointer relative size-20 overflow-hidden self-end mt-2 mb-[50px] hidden md:block">
                                    <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0 block dark:hidden" />

                                    <img src="images/home-5/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0 dark:block hidden" />

                                    <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute translate-y-16 -translate-x-[47px] transition-all duration-500 group-hover:translate-x-0 group-hover:-translate-y-[3px] opacity-0 group-hover:opacity-100" />
                                </figure>

                                <!-- Description -->
                                <p class="text-base lg:text-lg">
                                    {{ __('index.branding_services_desc') }}

                                </p>
                            </div>
                        </div>

                        <!-- Title and Number -->
                        <div class="sm:mt-2 flex justify-between items-end">
                            <h4 class="text-[25px] lg:text-[46px] lg:leading-[1.1] lg:tracking-[-1.44px]">
                                {{ __('index.branding_services') }}
                            </h4>
                            <span
                                class="text-black/10 dark:text-backgroundBody/10 text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px]">
                                04
                            </span>
                        </div>
                    </a>
                </div>
                <!-- Card-05 -->
                <div class="border dark:border-dark group p-5 md:p-[30px] md:w-[740px] lg:w-[890px]">
                    <a href="/services-details.html">
                        <div class="flex flex-col md:flex-row gap-y-7 md:gap-x-12 items-start">
                            <!-- Image -->
                            <figure class="max-md:w-full">
                                <img src="/images/home-5/seo-service-4.png" alt="Keyword Research"
                                    class="w-full h-auto" />
                            </figure>

                            <!-- Icon and Description -->
                            <div class="flex flex-col justify-between">
                                <!-- Icon Figure -->
                                <figure
                                    class="bg-backgroundBody dark:bg-dark border dark:border-dark group-hover:border-none transition-all group-hover:bg-primary duration-500 p-7 lg:p-8 cursor-pointer relative size-20 overflow-hidden self-end mt-2 mb-[50px] hidden md:block">
                                    <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0 block dark:hidden" />

                                    <img src="images/home-5/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0 dark:block hidden" />

                                    <img src="images/icons/arrow-Icon.svg" alt="Arrow Icon"
                                        class="absolute translate-y-16 -translate-x-[47px] transition-all duration-500 group-hover:translate-x-0 group-hover:-translate-y-[3px] opacity-0 group-hover:opacity-100" />
                                </figure>

                                <!-- Description -->
                                <p class="text-base lg:text-lg">
                                    {{ __('index.photographer_vdeographer_services_desc') }}

                                </p>
                            </div>
                        </div>

                        <!-- Title and Number -->
                        <div class="sm:mt-2 flex justify-between items-end">
                            <h4 class="text-[25px] lg:text-[46px] lg:leading-[1.1] lg:tracking-[-1.44px]">
                                {{ __('index.photographer_vdeographer_services') }}
                            </h4>
                            <span
                                class="text-black/10 dark:text-backgroundBody/10 text-5xl sm:text-[55px] md:text-[67px] lg:text-[84px] xl:text-8xl font-normal leading-[1.1] tracking-[-2px] xl:tracking-[-2.88px]">
                                05
                            </span>
                        </div>
                    </a>
                </div>
            </article>
        </section>



        <section
            class="service-section2 relative overflow-hidden pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]" style="display: none">
           

            <article
                class="flex flex-row flex-nowrap w-fit gap-9 pl-[7%] md:pl-[20%] md:pr-10 service-wrapper overflow-x-hidden reveal-me">
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




        <section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
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
                            <li class="block md:inline-block w-full mx-auto md:w-auto text-center">
                                <a href="{{ route('ecom') }}" class="rv-button rv-button-white block md:inline-block">
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
                                <img src="images/blog-img/blog-img-13.png"
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
                                <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                    {{ __('index.e-commerce') }}
                                </h3>
                            </div>
                        </a>
                        <div class="border-b dark:border-dark mt-6"></div>

                        <!-- Blog Hover Button -->
                        <a href="{{ route('ecom') }}" style="background-color: #352AA7">
                            <div style="background-color: #352AA7"
                                class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                                <span class="text-secondary" style="color: #ffffff">{{ __('index.view') }}</span>

                            </div>
                        </a>
                    </div>

                    <div class="reveal-me underline-hover-effect group relative">
                        <a href="{{ route('ecom') }}">
                            <figure class="overflow-hidden">
                                <img src="images/blog-img/blog-img-14.png"
                                    class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
                                    alt="Blog Images" />
                            </figure>
                        </a>
                        <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
                            <p class="text-[13px] leading-6 uppercase font-normal text-secondary dark:text-backgroundBody">
                                {{ __('index.marketing_services') }}
                            </p>
                            <p
                                class="text-base md:text-xl leading-8 tracking-[0.48px] text-secondary dark:text-backgroundBody">

                            </p>
                        </div>
                        <a href="{{ route('ecom') }}">
                            <div class="blog-title">
                                <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                    {{ __('index.marketing_services') }}
                                </h3>
                            </div>
                        </a>
                        <div class="border-b dark:border-dark mt-6"></div>
                        <!-- Blog Hover Button -->
                        <a href="{{ route('ecom') }}">
                            <div style="background-color: #352AA7"
                                class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                                <span class="text-secondary" style="color: #ffffff">{{ __('index.view') }}</span>

                            </div>
                        </a>
                    </div>
                    <div class="reveal-me underline-hover-effect group relative">
                        <a href="{{ route('ecom') }}">
                            <figure class="overflow-hidden">
                                <img src="images/blog-img/blog-img-15.png"
                                    class="w-full h-full transition-all duration-500 group-hover:scale-125 group-hover:rotate-3"
                                    alt="Blog Images" />
                            </figure>
                        </a>
                        <div class="mt-[24px] mb-2 md:mb-3.5 flex items-center justify-between">
                            <p class="text-[13px] leading-6 uppercase font-normal text-secondary dark:text-backgroundBody">
                                {{ __('index.design_services') }}
                            </p>
                            <p class="text-base md:text-xl leading-8  text-secondary dark:text-backgroundBody">

                            </p>
                        </div>
                        <a href="{{ route('ecom') }}">
                            <div class="blog-title">
                                <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                    {{ __('index.design_services') }}
                                </h3>
                            </div>
                        </a>
                        <div class="border-b dark:border-dark mt-6"></div>
                        <!-- Blog Hover Button -->
                        <a href="{{ route('ecom') }}">
                            <div style="background-color: #352AA7"
                                class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                                <span class="text-secondary" style="color: #ffffff">{{ __('index.view') }}</span>

                            </div>
                        </a>
                    </div>
                    <div class="reveal-me underline-hover-effect group relative">
                        <a href="{{ route('ecom') }}">
                            <figure class="overflow-hidden">
                                <img src="images/blog-img/blog-img-16.png"
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
                        <a href="{{ route('ecom') }}">
                            <div class="blog-title">
                                <h3 class="text[25px] md:text-3xl lg:text-4xl lg:leading-[1.2] lg:tracking-[-0.72px]">
                                    {{ __('index.branding_services') }}
                                </h3>
                            </div>
                        </a>
                        <div class="border-b dark:border-dark mt-6"></div>
                        <!-- Blog Hover Button -->
                        <a href="{{ route('ecom') }}">
                            <div style="background-color: #352AA7"
                                class="uppercase absolute top-1/2 left-1/2 -translate-x-[90%] translate-y-[35%] group-hover:translate-x-[-50%] group-hover:translate-y-[-50%] transition-all duration-500 ease-in-out opacity-0 group-hover:opacity-100 flex justify-center items-center gap-1 bg-primary px-8 py-6 w-[136px] h-[74px] scale-95 group-hover:scale-100">
                                <span class="text-secondary" style="color: #ffffff">{{ __('index.view') }}</span>

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
                            <li class="block md:inline-block w-full mx-auto md:w-auto text-center">
                                <a href="/services.html" class="rv-button rv-button-white block md:inline-block">
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
            <div class="max-w-[1170px] px-5 sm:px-10 lg:px-12 xl:px-0 w-full mx-auto reveal-me">
                <!--  -->
                <a href="{{ route('ecom') }}" class="block">
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

                            <div class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <path d="M5 16H27" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18 7L27 16L18 25" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <div class="overflow-hidden">
                            <figure
                                class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                                <img src="images/services/photography-services.png" alt="Hover on Photography Services"
                                    class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                            </figure>
                        </div>
                    </div>
                </a>
                <a href="{{ route('ecom') }}" class="block">
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

                            <div class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <path d="M5 16H27" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18 7L27 16L18 25" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <div class="overflow-hidden">
                            <figure
                                class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                                <img src="images/services/photography-services.png" alt="Hover on Photography Services"
                                    class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                            </figure>
                        </div>
                    </div>
                </a>
                <a href="{{ route('ecom') }}" class="block">
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

                            <div class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <path d="M5 16H27" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18 7L27 16L18 25" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <div class="overflow-hidden">
                            <figure
                                class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                                <img src="images/services/photography-services.png" alt="Hover on Photography Services"
                                    class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                            </figure>
                        </div>
                    </div>
                </a>
                <a href="{{ route('ecom') }}" class="block">
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

                            <div class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <path d="M5 16H27" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18 7L27 16L18 25" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <div class="overflow-hidden">
                            <figure
                                class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                                <img src="images/services/photography-services.png" alt="Hover on Photography Services"
                                    class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                            </figure>
                        </div>
                    </div>
                </a>
                <a href="{{ route('ecom') }}" class="block">
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

                            <div class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <path d="M5 16H27" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18 7L27 16L18 25" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <div class="overflow-hidden">
                            <figure
                                class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                                <img src="images/services/photography-services.png" alt="Hover on Photography Services"
                                    class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                            </figure>
                        </div>
                    </div>
                </a>
                <a href="{{ route('ecom') }}" class="block">
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

                            <div class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <path d="M5 16H27" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18 7L27 16L18 25" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <div class="overflow-hidden">
                            <figure
                                class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                                <img src="images/services/photography-services.png" alt="Hover on Photography Services"
                                    class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                            </figure>
                        </div>
                    </div>
                </a>
                <a href="{{ route('ecom') }}" class="block">
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

                            <div class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <path d="M5 16H27" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18 7L27 16L18 25" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <div class="overflow-hidden">
                            <figure
                                class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                                <img src="images/services/photography-services.png" alt="Hover on Photography Services"
                                    class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                            </figure>
                        </div>
                    </div>
                </a>
                <a href="{{ route('ecom') }}" class="block">
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

                            <div class="transform transition-transform duration-500 ease-in-out group-hover:rotate-90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <path d="M5 16H27" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M18 7L27 16L18 25" class="stroke-black dark:stroke-white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <div class="overflow-hidden">
                            <figure
                                class="transform transition-all duration-700 ease-in-out opacity-0 h-0 -translate-y-4 group-hover:opacity-100 group-hover:h-[110px] md:group-hover:h-[160px] lg:group-hover:h-[230px] group-hover:translate-y-0">
                                <img src="images/services/photography-services.png" alt="Hover on Photography Services"
                                    class="px-5 md:px-10 pb-5 md:pb-10 pt-4 transition-all duration-700 ease-in-out object-cover" />
                            </figure>
                        </div>
                    </div>
                </a>


            </div>
        </section>



        <section class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]">
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
                        <a href="/project-03.html" class="rv-button rv-button-primary block md:inline-block">
                            <div class="rv-button-top">
                                <span
                                    style="letter-spacing: 1px">{{ __('index.lets_start_project') ?? 'Let’s Start Your Project' }}</span>
                            </div>
                            <div class="rv-button-bottom">
                                <span class="text-"
                                    style="letter-spacing: 0px">{{ __('index.lets_start_project') ?? 'Let’s Start Your Project' }}</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>





        <!--=====================================
        CTA Section
        ======================================-->
        <section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-[70px] lg:pb-[120px]">
            <div class="container">
                <!-- CTA Heading -->
                <div class="reveal-me">
                    <h2 style=""
                        class="text-center xl:text-[96px] font-normal xl:leading-[1.1] xl:tracking-[-2.88px]">
                        Let's Create
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

                        <span
                            class="text-center xl:text-[96px] font-normal xl:leading-[1.1] xl:tracking-[-2.88px]">Something
                            Iconic</span>
                    </h2>
                </div>

                <!-- Contact Form -->
                <form style="display: "
                    class="grid grid-cols-1 md:grid-cols-2 gap-[30px] max-w-[800px] mt-20 mx-auto reveal-me">
                    <!-- Your Data Field -->


                    <!-- Submit Button -->

                    <a href="https://wa.me/201012620529" class="rv-button rv-button-secondary !w-full col-span-full"
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
    </main>
@endsection

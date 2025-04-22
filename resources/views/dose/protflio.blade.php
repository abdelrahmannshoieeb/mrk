@extends('layout.master')


@section('content')
<main class="lg:mb-[600px] relative z-10 bg-backgroundBody dark:bg-dark">
      <!--=====================================
   Page Header Details Section
======================================-->
      <section
        class="pt-32 max-md:pb-20 md:py-44 lg:pt-[200px] relative overflow-hidden"
      >
        <!-- Gradient Background Wrapper -->
        <div
          id="hero-gradient-wrapper"
          class="absolute w-full h-full top-0 left-0 -z-10 blur-[35px] md:blur-[60px] sm:scale-[0.1] bg-blend-multiply md:scale-75"
        >
          <img
            src="images/hero-gradient-background.png"
            alt="hero-gradient-background"
            id="hero-gradient"
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-[45%]"
          />
        </div>

        <!-- Hero Content Container -->
        <div class="container reveal-me">
          <div class="text-center">
            <!-- Badge Component -->
            <div class="rv-badge mb-4 lg:mb-10">
              <span class="rv-badge-text">{{ __('pro.portfolio') }}</span>
            </div>

            <!-- Hero Title -->
            <h1 class="mb-5 lg:mb-8">{{ __('pro.portfolio') }}</h1>

            <!-- Hero Description -->
            <p class="max-md:max-w-[650px]">
              {{ __('pro.portfolio_desc') }}
            </p>
          </div>
        </div>
      </section>

      <section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] relative overflow-hidden pt-0 md:pt-0 lg:pt-0 xl:pt-6">
        <div class="container ">
          <div class="flex flex-wrap justify-center lg:justify-start items-start md:items-center gap-y-3 gap-x-10 mb-16 md:mb-20"  >
            <div class="flex-1">
              <div class="rv-badge reveal-me mb-3 md:mb-4">
                <span class="rv-badge-text">{{ __('pro.portfolio') }}</span>
              </div>

              <h2 class="text-appear-2">
              {{ __('pro.portfolio_desc') }}
              </h2>
            </div>
            <div class="flex-1 max-md:w-full">
              <p
                class="text-appear max-md:text-justify max-w-lg md:place-self-end md:text-right text-appear-2"
              >
               {{ __('pro.portfolio_desc') }}
              </p>

              <ul
                class="justify-self-end max-md:w-full mt-5 md:mt-10 reveal-me"
              >
                <li
                  class="block md:inline-block w-full mx-auto md:w-auto text-center"
                >
                  <a
                    href="https://wa.me/201012620529" target="_blank"
                    class="rv-button rv-button-white block md:inline-block"
                  >
                    <div class="rv-button-top">
                      <span>Get Free Quotes</span>
                    </div>
                    <div class="rv-button-bottom">
                      <span>Get Free Quotes</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div  class="flex flex-wrap justify-center [&>*]:border dark:[&>*]:border-dark xl:px-5 gap-5" >
          <!-- Research Card -->
          <div class="relative group overflow-hidden w-[360px] h-[500px] reveal-me mb-4" >
            <div
              class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700"
            >
              <img src="images/portfolio1.png" alt="">
            </div>

            <div
              class="w-full h-full bg-secondary dark:bg-secondary p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10 border-t border-primary"
            >
              <a href="https://portfoliotemp1.zsoftware.host/" target="_blank">
                <div class="mb-[55px] flex gap-1 items-center justify-between">
                  <h5
                    class="max-sm:text-3xl text-primary dark:text-backgroundBody opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]"
                  >
                    Gridx premium
                  </h5>
                  <span
                    class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="32"
                      height="32"
                      viewBox="0 0 32 32"
                      fill="none"
                    >
                      <path
                        d="M5 16H27"
                        class="stroke-primary dark:stroke-backgroundBody"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M18 7L27 16L18 25"
                        class="stroke-primary dark:stroke-backgroundBody"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                </div>
                <p
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]"
                >
                  
                </p>
                <ul
                  class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]"
                >
                  <li
                    class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                  >
                    {{ __("pro.pf_desc") }}
                  </li>
                  <li
                    class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                  >
                    {{ __("pro.pf_point_1") }}
                  </li>
                  <li
                    class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                  >
                    {{ __("pro.pf_point_2") }}
                  </li>
                  <li
                    class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                  >
                    {{ __("pro.pf_point_3") }}
                  </li>
                  <li
                    class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                  >
                    {{ __("pro.pf_point_4") }}
                  </li>
                  <li
                    class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                  >
                    {{ __("pro.pf_point_5") }}
                  </li>
                  <li
                    class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                  >
                    {{ __("pro.pf_point_6") }}
                  </li>
                  <li
                    class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                  >
                    {{ __("pro.pf_point_7") }}
                  </li>
                </ul>
              </a>
            </div>
          </div>

          <!-- Alchemy Studio Card -->
          <div   class="relative group overflow-hidden w-[360px] h-[500px] reveal-me mb-4" >
            <div
              class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700"
            >
            <img src="images/portfolio2.png" alt="">
            </div>

            <div
              class="w-full h-full bg-secondary dark:bg-secondary p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10 border-t border-primary"
            >
            <a href="http://pentaportiflio.zsoftware.host/" target="_blank">

                <div class="mb-[55px] flex gap-1 items-center justify-between">
                  <h5
                    class="max-sm:text-3xl text-primary dark:text-backgroundBody opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]"
                  >
                   Penta portfolio +20 template
                  </h5>
                  <span
                    class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="32"
                      height="32"
                      viewBox="0 0 32 32"
                      fill="none"
                    >
                      <path
                        d="M5 16H27"
                        class="stroke-primary dark:stroke-backgroundBody"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M18 7L27 16L18 25"
                        class="stroke-primary dark:stroke-backgroundBody"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                </div>
                <p
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]"
                >
                  
                </p>
                <ul
                class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]"
              >
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_desc") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_1") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_2") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_3") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_4") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_5") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_6") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_7") }}
                </li>
              </ul>
              </a>
            </div>
          </div>

          <!-- Rhythms Media Card -->
          <div  class="relative group overflow-hidden w-[360px] h-[500px] reveal-me mb-4">
            <div
              class="w-full h-full flex justify-center items-center absolute translate-y-0 group-hover:-translate-y-full transition-all opacity-100 group-hover:opacity-0 duration-700"
            >
            <img src="images/portfolio3.png" alt="">

            </div>

            <div
              class="w-full h-full bg-secondary dark:bg-secondary p-8 absolute translate-y-full duration-700 transition-all group-hover:translate-y-0 group-hover:inset-0 z-10 border-t border-primary"
            >
            <a href="https://temp3.zsoftware.host/" target="_blank">
              <div class="mb-[55px] flex gap-1 items-center justify-between">
                  <h5
                    class="max-sm:text-3xl text-primary dark:text-backgroundBody opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[240ms]"
                  >
                  Gerlod 10 themes
                  </h5>
                  <span
                    class="transition-all duration-1000 translate-x-20 group-hover:translate-x-0"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="32"
                      height="32"
                      viewBox="0 0 32 32"
                      fill="none"
                    >
                      <path
                        d="M5 16H27"
                        class="stroke-primary dark:stroke-backgroundBody"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                      <path
                        d="M18 7L27 16L18 25"
                        class="stroke-primary dark:stroke-backgroundBody"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      />
                    </svg>
                  </span>
                </div>
                <p
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[340ms]"
                >
                 
                </p>
                <ul
                class="pl-4 mt-6 opacity-0 translate-y-5 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-[800ms] delay-[440ms]"
              >
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_desc") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_1") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_2") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_3") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_4") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_5") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_6") }}
                </li>
                <li
                  class="text-backgroundBody/70 dark:text-backgroundBody/70 list-disc text-base leading-relexed"
                >
                  {{ __("pro.pf_point_7") }}
                </li>
              </ul>
              </a>
            </div>
          </div>

          
          <!-- Sound Studios  Card -->

     
        </div>
        </div>
      </section>

      <!--=====================================
   Workflow Process Section
======================================-->
      <section
        class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]"
      >
        <div class="container">
          <!-- Section Title -->
          <h3
            class="max-md:text-3xl md:text-6xl lg:text[56px] lg:leading-[1.2] lg:tracking-[-1.68px] text-center mb-14 md:mb-20 text-appear"
          >
            {{ __("pro.how_we_do_it") }}
          </h3>

          <!-- Process Timeline Container -->
          <!-- Parent with horizontal connecting lines -->
          <div
            class="relative after:content-[''] after:absolute max-md:after:top-16 md:after:top-[105px] after:bg-[#e5e5e5] dark:after:bg-backgroundBody/10 after:block after:w-full after:h-[1px] after:-z-10 max-lg:before:content-[''] max-lg:before:absolute max-md:bottom-5 max-md:before:bottom-[137px] max-lg:before:bottom-[155px] max-lg:before:bg-[#e5e5e5] dark:max-lg:before:bg-backgroundBody/10 max-lg:before:block max-lg:before:w-full max-lg:before:h-[1px] max-lg:before:-z-10 reveal-me"
          >
            <!-- Process Steps Grid -->
            <div
              class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-[30px] justify-between items-center"
            >
              <!-- Step 1 - Request -->
              <div class="text-center reveal-me">
                <!-- Step Number with Dot -->
                <span
                  class="max-md:text-3xl md:text-[64px] md:leading-[1.2] md:tracking-[-1.92px] relative after:content-[''] after:absolute after:w-5 after:h-5 after:rounded-full after:bg-primary after:left-[50%] after:-translate-x-[50%] after:-bottom-[37px] after:z-50"
                >
                  01
                </span>
                <h3
                  class="max-md:text-3xl md:text-[56PX] md:leading-[1.2] md:tracking-[-1.68px] mt-16 mb-5"
                >
                  {{ __("pro.request") }}
                </h3>
                <p class="text-base leading-[1.4] tracking-[0.32px]">
                  {{ __("pro.request_desc") }}.
                </p>
              </div>

              <!-- Step 2 - Approve -->
              <div class="text-center reveal-me">
                <!-- Step Number with Dot -->
                <span
                  class="max-md:text-3xl md:text-[64px] md:leading-[1.2] md:tracking-[-1.92px] relative after:content-[''] after:absolute after:w-5 after:h-5 after:rounded-full after:bg-primary after:left-[50%] after:-translate-x-[50%] after:-bottom-[37px] after:z-10"
                >
                  02
                </span>
                <h3
                  class="max-md:text-3xl md:text-[56PX] md:leading-[1.2] md:tracking-[-1.68px] mt-16 mb-5"
                >
                  {{ __("pro.approve") }}
                </h3>
                <p class="text-base leading-[1.4] tracking-[0.32px]">
                {{ __("pro.approve_desc") }}.
                </p>
              </div>

              <!-- Step 3 - Develop -->
              <div class="text-center reveal-me">
                <!-- Step Number with Dot -->
                <span
                  class="max-md:text-3xl md:text-[64px] md:leading-[1.2] md:tracking-[-1.92px] relative after:content-[''] after:absolute after:w-5 after:h-5 after:rounded-full after:bg-primary after:left-[50%] after:-translate-x-[50%] after:-bottom-[37px] after:z-10"
                >
                  03
                </span>
                <h3
                  class="max-md:text-3xl md:text-[56PX] md:leading-[1.2] md:tracking-[-1.68px] mt-16 mb-5"
                >
                {{ __("pro.develop") }}
                </h3>
                <p class="text-base leading-[1.4] tracking-[0.32px]">
                  {{ __("pro.develop_desc") }}.
                </p>
              </div>

              <!-- Step 4 - Deliver -->
              <div class="text-center reveal-me">
                <!-- Step Number with Dot -->
                <span
                  class="max-md:text-3xl md:text-[64px] md:leading-[1.2] md:tracking-[-1.92px] relative after:content-[''] after:absolute after:w-5 after:h-5 after:rounded-full after:bg-primary after:left-[50%] after:-translate-x-[50%] after:-bottom-[37px] after:z-10"
                >
                  04
                </span>
                <h3
                  class="max-md:text-3xl md:text-[56PX] md:leading-[1.2] md:tracking-[-1.68px] mt-16 mb-5"
                >
                  {{ __("pro.deliver") }}
                </h3>
                <p class="text-base leading-[1.4] tracking-[0.32px]">
                  {{ __("pro.deliver_desc") }}.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--=====================================
   CTA Section
======================================-->
      <section
        class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-[70px] lg:pb-[140px] relative"
      >
        <div class="container">
          <!-- CTA Heading -->
          <h2
            class="text-center xl:text-[96px] font-normal xl:leading-[1.1] xl:tracking-[-2.88px]"
          >
            Let's Talk!
            <div
              class="cta-slider-container max-sm:block sm:inline-block max-sm:mb-5 translate-y-2 sm:translate-y-[20px] max-sm:mt-2.5"
            >
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
            with us.

            <span
              class="font-instrument sm:mt-10 italic block max-md:inline-block"
              >A virtual coffee?</span
            >
          </h2>

          <!-- CTA Buttons -->
          <ul class="flex justify-center items-center mt-14 list-none">
            <!-- Primary CTA Button -->
            <li
              class="block md:inline-block w-full mx-auto md:w-auto text-center"
            >
              <a
                href="https://wa.me/201012620529" target="_blank"
                class="rv-button rv-button-primary block md:inline-block"
              >
                <div class="rv-button-top">
                  <span>Contact Us</span>
                </div>
                <div class="rv-button-bottom">
                  <span class="text-nowrap">Contact Us</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>

    @endsection
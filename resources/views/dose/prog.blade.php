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
         src="images/gradient.png"
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
          <span class="rv-badge-text">{{ __('ondemand.on_demand_development') }}</span>
        </div>

        <!-- Hero Title -->
        <h1 class="mb-5 lg:mb-8">{{ __('ondemand.on_demand_development') }}</h1>

        <!-- Hero Description -->
        <p class="max-md:max-w-[650px]">
          {{ __('ondemand.title') }}
        </p>
      </div>
    </div>
  </section>

  <!--=====================================
Services Details Section
======================================-->
  <section class="pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
    <div class="max-w-[1440px] mx-auto px-8 md:px-20">
      <div class="flex flex-col gap-8 lg:flex-row justify-start">
        <!-- Sticky Table of Contents -->
        <aside class="min-w-[275px] flex-1">
          <div class="sticky top-28">
            <div class="reveal-me">
              <h3 class="max-md:text-[40px] md:text-[32px]">
                {{ __('ondemand.table_of_contents') }}
              </h3>
              <ul
                class="mt-4 sm:mt-7 md:mt-10 [&>*:not(:last-child)]:mb-2 md:[&>*:not(:last-child)]:mb-5"
              >
                <li>
                  <a
                    href="#service-overview"
                    class="text-xl normal-case font-normal leading-7 tracking-normal dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                  >
                    {{ __('ondemand.service_overview') }}
                  </a>
                </li>
                <li>
                  <a
                    href="#our-service-includes"
                    class="text-xl normal-case font-normal leading-7 tracking-normal dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                  >
                    {{ __('ondemand.our_service_includes') }}
                  </a>
                </li>
                <li>
                  <a
                    href="#why-choose"
                    class="text-xl normal-case font-normal leading-7 tracking-normal dark:text-dark-100 hover:font-medium hover:text-secondary dark:hover:text-backgroundBody transition-all lenis-scroll-to"
                  >
                    {{ __('ondemand.why_choose_us') }}
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </aside>

        <!-- Main Content -->
        <article class="project-details-body">
          <figure class="reveal-me">
            <img
              src="images/services/services-details2-img.png"
              alt="Services Big Img"
            />
          </figure>
          <div class="reveal-me">
            <h3 id="service-overview">{{ __('ondemand.service_overview') }}</h3>
            <p>
            {{ __('ondemand.service_overview_content') }}
            </p>
          </div>
          <div class="reveal-me">
            <h3 id="our-service-includes">{{ __('ondemand.our_service_includes') }}</h3>
            <p>
              {{ __('ondemand.our_service_includes_content') }}
            </p>
          </div>
          <div class="reveal-me">
            <h3 id="why-choose">{{ __('ondemand.why_choose_us') }}</h3>
            <p>
             {{ __('ondemand.why_choose_us_contnet') }}
            </p>
          </div>
        </article>
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
            href="/contact.html"
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

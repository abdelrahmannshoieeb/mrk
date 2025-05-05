<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <title>Marketing dose </title>

    <!--Meta For No Index-->
    <meta name="robots" content="n">

    <html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Stylesheets -->
    <link href="css/main.css" rel="stylesheet" />
    <link href="css/cgi.css" rel="stylesheet" />
    <link href="js/cgi.js" rel="stylesheet" />
    
    <!--Favicon-->
    <link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg" />
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png" />
    <link rel="manifest" href="images/site.webmanifest" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="css/gallery.css" rel="stylesheet" />

    <style>
        .middle_header {
      display: none;
      width: 450px;
    
    }
    
    @media (min-width: 768px) {
      .middle_header {
          display: flex;
          justify-content: space-evenly;
          align-items: center;
          font-weight: bold;
          
      }
    }
    
    .middle_header a {
      text-align: center;
    }
     /* make hover  */
    
     .middle_header a:hover {
      color: #554acb;
    }


    @media (min-width: 1280px){.container{
    max-width: 1130px;
    padding: 100px;
  }
  }

  .whatsapp-btn {
        color: #fff;
        background-color: #25d366;
        border-radius: 50px;
        position: fixed;
        bottom: 40px;
        left: 30px;
        z-index: 99999;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: transform 0.3s ease;
    }

    .whatsapp-btn i {
        font-size: 20px;
        transition: transform 0.3s ease;
    }

    .whatsapp-btn:hover i {
        transform: rotate(30deg) scale(1.2);
    }
    .whatsapp-btn:hover  {
        transform: rotate(30deg) scale(1.2);
    }
    </style>
    @livewireStyles
</head>

<body>

    @include('layout.header')
   
    <div
        class="menu-overflow fixed z-[9999] bg-[rgba(10,10,10,0.95)] bg-opacity-60 backdrop-blur-[25px] w-full h-full pointer-events-none"></div>

    <!-- Cursor Pointer -->
    <div class="pointer"></div>

    <!-- Dark Mode toggle -->



    <div class="toggle-button fixed right-10 bottom-10 z-[1000]">
        <button
            id="theme-toggle"
            type="button"
            class="text-secondary bg-black/90 dark:bg-backgroundBody/90 rounded-[1px] backdrop-blur-xl dark:text-white focus:outline-none focus:ring-0 focus:ring-gray-200 w-[44px] h-[44px] flex justify-center items-center">
            <svg
                data-testid="geist-icon"
                id="theme-toggle-dark-icon"
                class="hidden w-5 h-5"
                fill="#fff"
                stroke-linejoin="round"
                viewBox="0 0 16 16">
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M10.5 0.25V1V1.5H11L11.75 1.5V3H11H10.5V3.5V4.25H9V3.5V3H8.5H7.75V1.5H8.5H9V1V0.25H10.5ZM3.25514 2.75496C2.33413 3.53491 1.75 4.69972 1.75 6C1.75 8.34721 3.65279 10.25 6 10.25C7.30029 10.25 8.4651 9.66587 9.24505 8.74485C9.16377 8.74827 9.08207 8.74999 9 8.74999C5.82436 8.74999 3.25 6.17563 3.25 2.99999C3.25 2.91792 3.25172 2.83623 3.25514 2.75496ZM0.25 6C0.25 3.51072 1.83142 1.39271 4.042 0.592193L5.00256 1.55275C4.83933 2.00347 4.75 2.49047 4.75 2.99999C4.75 5.3472 6.65279 7.24999 9 7.24999C9.50953 7.24999 9.99653 7.16065 10.4473 6.99743L11.4078 7.95798C10.6073 10.1686 8.48929 11.75 6 11.75C2.82436 11.75 0.25 9.17564 0.25 6Z"
                    fill="#fff"
                    transform="translate(2.25, 2.25)"></path>
            </svg>
            <svg
                id="theme-toggle-light-icon"
                class="hidden w-5 h-5"
                fill="#000"
                viewBox="0 0 16 16"
                data-testid="geist-icon"
                stroke-linejoin="round">
                <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M7.75 1V0.25H6.25V1V1.25V2H7.75V1.25V1ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9ZM7 10.5C8.933 10.5 10.5 8.933 10.5 7C10.5 5.067 8.933 3.5 7 3.5C5.067 3.5 3.5 5.067 3.5 7C3.5 8.933 5.067 10.5 7 10.5ZM7.75 12V12.75V13V13.75H6.25V13V12.75V12H7.75ZM12 6.25H12.75H13H13.75V7.75H13H12.75H12V6.25ZM1 6.25H0.25V7.75H1H1.25H2V6.25H1.25H1ZM10.0052 2.93414L10.5355 2.40381L10.7123 2.22703L11.2426 1.6967L12.3033 2.75736L11.773 3.28769L11.5962 3.46447L11.0659 3.9948L10.0052 2.93414ZM2.22703 10.7123L1.6967 11.2426L2.75736 12.3033L3.28769 11.773L3.46447 11.5962L3.9948 11.0659L2.93414 10.0052L2.40381 10.5355L2.22703 10.7123ZM2.93414 3.9948L2.40381 3.46447L2.22703 3.28769L1.6967 2.75736L2.75736 1.6967L3.28769 2.22703L3.46447 2.40381L3.9948 2.93414L2.93414 3.9948ZM10.7123 11.773L11.2426 12.3033L12.3033 11.2426L11.773 10.7123L11.5962 10.5355L11.0659 10.0052L10.0052 11.0659L10.5355 11.5962L10.7123 11.773Z"
                    fill="#000"
                    transform="translate(1.25, 1.25)"></path>
            </svg>
        </button>
    </div>
 
  

   <livewire:actions.lang>


   <div class="toggle-button fixed z-[1000]">
    <a class="btn whatsapp-btn" href="https://wa.me/201012620529">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</div>





    @yield ('content')

    <!--=====================================
   Footer Section
======================================-->
    @include('layout.footer')


    <!---Modal -->
    <div
        aria-hidden="false"
        class="fixed z-[99999999990] hidden inset-0 top-6 items-start justify-center bg-metal-900 bg-dark-200/25"
        onclick="javascript.void(0)"
        id="modal"
        role="dialog">
        <div class="relative w-full p-4 h-auto animate-keep-bounce max-w-xl">
            <div class="relative bg-white dark:bg-dark p-2.5">
                <div class="p-10 max-lg:p-5">
                    <div class="flex items-center justify-between pb-5">
                        <h5 class="text-secondary dark:text-backgroundBody">Search</h5>
                        <button class="text-secondary dark:text-backgroundBody" id="ok-btn">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                x="0px"
                                y="0px"
                                width="30"
                                height="30"
                                viewBox="0 0 50 50">
                                <path
                                    d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"
                                    class="fill-secondary dark:fill-backgroundBody"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="mt-5">
                        <div>
                            <div class="flex">
                                <div class="relative w-full">
                                    <input
                                        class="block w-full focus:outline-none focus:ring-0 text-secondary dark:text-backgroundBody border py-3.5 px-5 dark:border-dark bg-transparent placeholder:text-secondary/50 dark:placeholder:text-backgroundBody/50 outline-none focus:border-primary dark:focus:border-primary duration-300 transition-all"
                                        id="#id-10"
                                        placeholder="Search RIVOR Component"
                                        type="text"
                                        value="" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Mark up for Script Section-->
    <script src="js/lib/imagesloaded.pkgd.min.js"></script>
    <script src="js/lib/gsap.min.js"></script>
    <script src="js/lib/ScrollTrigger.min.js"></script>
    <script src="js/lib/lenis.min.js"></script>
    <script src="js/lib/split-types.min.js"></script>
    <script src="js/lib/matter.min.js"></script>
    <script src="js/career-tabs.js"></script>
    <script src="js/lib/swiper.min.js"></script>
    <script src="js/lib/headroom.min.js"></script>
    <script src="js/lib/vanila-marquee.min.js"></script>
    <script src="js/script.js"></script>
    

    <script> 
        Animations.initHorizontalScroll = function () {
    const e = document.querySelector(".service-wrapper");
    if (e) {
        const isRTL = document.documentElement.getAttribute("dir") === "rtl";

        const scrollDistance = () => {
            const distance = e.scrollWidth - window.innerWidth;
            return isRTL ? distance : -distance;
        };

        const t = gsap.to(e, {
            x: scrollDistance,
            duration: 3,
            ease: "none"
        });

        ScrollTrigger.create({
            trigger: ".service-section",
            start: "top 0%",
            pin: true,
            animation: t,
            scrub: 1,
            invalidateOnRefresh: true
        });
    }
};

    </script>
    
    @livewireScripts

</body>

</html>
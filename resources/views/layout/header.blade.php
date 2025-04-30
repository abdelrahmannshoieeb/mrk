<header id="header" class="w-full fixed z-[9999]">
  <div
    class="w-full fixed h-[155px] top-0 z-[21] pointer-events-none gradient-shadow"
  >
    <div
      class="absolute inset-0 pointer-events-none"
      style="backdrop-filter: blur(0px); -webkit-backdrop-filter: blur(0px)"></div>
    <div
      class="absolute inset-0 pointer-events-none rounded-[inherit]"
      style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 1) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 0) 50%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 0%,
          rgba(255, 255, 255, 1) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 0) 50%
        );
        backdrop-filter: blur(-7px);
        -webkit-backdrop-filter: blur(-7px);
      "
    > </div>
    <div
      class="absolute inset-0 pointer-events-none rounded-[inherit]"
      style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 0) 66.66666666666666%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 16.666666666666664%,
          rgba(255, 255, 255, 1) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 0) 66.66666666666666%
        );
        backdrop-filter: blur(2px);
        -webkit-backdrop-filter: blur(2px);
      "
    ></div>
    <div
      class="absolute inset-0 pointer-events-none rounded-[inherit]"
      style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 0) 83.33333333333333%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 33.33333333333333%,
          rgba(255, 255, 255, 1) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 0) 83.33333333333333%
        );
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
      "
    ></div>
    <div
      class="absolute inset-0 pointer-events-none rounded-[inherit]"
      style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 0) 100%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 50%,
          rgba(255, 255, 255, 1) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 0) 100%
        );
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
      "
    ></div>
    <div
      class="absolute inset-0 pointer-events-none rounded-[inherit]"
      style="
        mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 1) 100%,
          rgba(255, 255, 255, 0) 116.66666666666666%
        );
        -webkit-mask-image: linear-gradient(
          0deg,
          rgba(255, 255, 255, 0) 66.66666666666666%,
          rgba(255, 255, 255, 1) 83.33333333333333%,
          rgba(255, 255, 255, 1) 100%,
          rgba(255, 255, 255, 0) 116.66666666666666%
        );
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
      "
    ></div>
  </div>


  <nav class="z-[1000] w-full fixed px-5 sm:px-8 pt-1 sm:pt-5 nav-top">
    <div class="flex justify-between">
      <a href="{{ route('home') }}">
        <img
        style="height: 58px"
          class="max-h-[68px] w-auto inline-block dark:hidden"
          src="images/mrk-w.png"
          alt="logo"
        />
        <img
        style="height: 58px"

          class="max-h-[68px] w-auto dark:inline-block hidden"
          src="images/mrk-d.png"
          alt="logo"
        />
      </a>
      <div style="">
          <a style="font-size: 20px; margin-top: 20px;" href="{{ route('ecom') }}">{{ __('header.ecomm') }}</a>
          <a style="font-size: 20px; margin-top: 20px;" href="{{ route('packages') }}">{{ __('header.packages') }}</a>
      </div>
      <div class="flex items-center">
        <div
          class="menu-open cursor-pointer relative h-[68px] w-[68px] before:content-[''] before:absolute before:top-[28px] before:left-1/2 before:w-9 before:h-0.5 before:bg-black dark:before:bg-backgroundBody before:-translate-x-1/2 before:transition-all before:duration-300 after:content-[''] after:absolute after:bottom-[28px] after:left-1/2 after:w-9 after:h-0.5 after:bg-black dark:after:bg-backgroundBody after:-translate-x-1/2 after:transition-all after:duration-300 hover:before:top-[25px] hover:after:bottom-[25px]"
        ></div>
      </div>
    </div>
  </nav>

</header>

<nav data-lenis-prevent="true" class="menu fixed right-6 top-0 w-full min-h-screen overflow-y-auto z-[99999] before:content-none md:before:content-[''] before:absolute before:w-[1px] before:h-[calc(100vh-94px)] before:left-[45%] before:top-0 before:bg-backgroundBody before:bg-opacity-10 opacity-0">
<div
    class="menu-close cursor-pointer sticky top-8 left-[89%] sm:left-[90%] md:left-[93%] lg:left-[94.7%] xl:left-[96.5%] 2xl:left-[96%] h-[40px] w-[40px] text-white">
    <svg
        xmlns="http://www.w3.org/2000/svg"
        x="0px"
        y="0px"
        width="30"
        height="30"
        viewBox="0 0 50 50">
        <path
            d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"
            fill="#fff"></path>
    </svg>
</div>
<div
    class="menu-wrapper relative max-w-[300px] sm:max-w-[400px] md:max-w-[600px] lg:max-w-[900px] xl:max-w-[1130px] mx-auto pb-4 flex flex-col gap-8 md:gap-16 md:top-20 z-[99999]">
    <ul class="menu-list">
        <li
            class="menu-list-item menu-list-item-anchor active">
            <a
                href="{{ route('home') }}"
                class="text-white text-[28px] md:text-[42px] xl:text-[56px] leading-[70px] xl:leading-[90px] menu-list-item-text">{{ __('header.home') }}</a>
        </li>
        <li
            class="menu-list-item menu-list-item-anchor w-full ">
            <a
                href="#"
                class="text-white text-[28px] md:text-[42px] xl:text-[56px] leading-[70px] xl:leading-[90px] menu-list-item-text">{{ __('header.programing_stack') }}</a>
            <ul
                class="menu-list-item-dropdown relative md:absolute top-0 w-full md:w-auto h-fit left-0 md:left-[48%]">
                <li>
                    <a
                        href="{{ route('ecom')}}"
                        class="text-white inline-block pb-1 pl-3 menu-list-item-dropdown-list text-base md:text-lg leading-8 md:leading-[50px] ">{{ __('header.ecomm') }}
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route('protflio')}}"
                        class="text-white inline-block pb-1 pl-3 menu-list-item-dropdown-list text-base md:text-lg leading-8 md:leading-[50px] ">{{ __('header.portfolio') }}
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route('prog')}}"
                        class="text-white inline-block pb-1 pl-3 menu-list-item-dropdown-list text-base md:text-lg leading-8 md:leading-[50px] ">{{ __('header.on_demand_programing') }}
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="menu-list-item menu-list-item-anchor w-full ">
            <a
                href="#"
                class="text-white text-[28px] md:text-[42px] xl:text-[56px] leading-[70px] xl:leading-[90px] menu-list-item-text">{{ __('header.mrk_stack') }}</a>
            <ul
                class="menu-list-item-dropdown relative md:absolute top-0 w-full md:w-auto h-fit left-0 md:left-[48%]">
                <li>
                    <a
                        href="{{ route('packages') }}"
                        class="text-white inline-block pb-1 pl-3 menu-list-item-dropdown-list text-base md:text-lg leading-8 md:leading-[50px] ">{{ __('header.packages') }}
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route('graphic') }}"
                        class="text-white inline-block pb-1 pl-3 menu-list-item-dropdown-list text-base md:text-lg leading-8 md:leading-[50px] ">{{ __('header.graphic_factory') }}
                    </a>
                </li>
            </ul>
        </li>
        <li
            class="menu-list-item menu-list-item-anchor w-full ">
            <a
                href="{{ route('cgi') }}"
                class="text-white text-[28px] md:text-[42px] xl:text-[56px] leading-[70px] xl:leading-[90px] menu-list-item-text">{{ __('header.CGI_product_animation') }}</a>
        </li>
        <li
            class="menu-list-item menu-list-item-anchor w-full ">
            <a
                href="{{ route('contact') }}"
                class="text-white text-[28px] md:text-[42px] xl:text-[56px] leading-[70px] xl:leading-[90px] menu-list-item-text">{{ __('header.contact') }}</a>
        </li>
    </ul>
</div>
<div
    class="menu-footer max-lg:hidden lg:block fixed bottom-0 w-full border-t border-white border-opacity-10">
    <div
        class="menu-footer-content max-w-[300px] sm:max-w-[400px] md:max-w-[600px] lg:max-w-[900px] xl:max-w-[1130px] flex justify-between mx-auto py-8 flex-col md:flex-row">
        <div class="flex gap-6">
            <span>
                <a href=" https://www.facebook.com/marketingdoseofficial" target="_blank">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="23"
                        height="23"
                        viewBox="0 0 20 20"
                        fill="none"
                        class="stroke-[#565656] hover:stroke-white duration-200">
                        <path
                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M13.125 6.875H11.875C11.3777 6.875 10.9008 7.07254 10.5492 7.42418C10.1975 7.77581 10 8.25272 10 8.75V17.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M7.5 11.25H12.5"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </span>
            <span style="display: none">
                <a href="https://www.youtube.com/channel/UCAaNCn1kzI1fXD4-fPD157Q">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="stroke-[#565656] hover:stroke-white duration-200"
                        width="23"
                        height="23"
                        viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M12.5 10L8.75 7.5V12.5L12.5 10Z"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M1.875 9.99998C1.875 12.3246 2.11517 13.6886 2.29774 14.3896C2.34654 14.581 2.44026 14.7581 2.57114 14.9061C2.70201 15.0541 2.86627 15.1688 3.0503 15.2407C5.66569 16.2457 10 16.2181 10 16.2181C10 16.2181 14.3343 16.2457 16.9497 15.2407C17.1337 15.1688 17.298 15.0541 17.4288 14.9061C17.5597 14.7581 17.6534 14.581 17.7022 14.3896C17.8848 13.6886 18.125 12.3246 18.125 9.99998C18.125 7.67533 17.8848 6.3114 17.7023 5.6104C17.6535 5.41894 17.5597 5.24188 17.4289 5.09386C17.298 4.94585 17.1337 4.83115 16.9497 4.75927C14.3343 3.75422 10 3.78181 10 3.78181C10 3.78181 5.66574 3.75422 3.05033 4.75926C2.86629 4.83114 2.70203 4.94584 2.57116 5.09385C2.44029 5.24186 2.34656 5.41893 2.29776 5.61038C2.11518 6.31138 1.875 7.67533 1.875 9.99998Z"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </span>
            <span>
                <a href="https://www.instagram.com/marketingdoseofficial?igsh=MTc1ejJhMjZyNWFo">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="stroke-[#565656] hover:stroke-white duration-200"
                        width="23"
                        height="23"
                        viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M10 13.125C11.7259 13.125 13.125 11.7259 13.125 10C13.125 8.27411 11.7259 6.875 10 6.875C8.27411 6.875 6.875 8.27411 6.875 10C6.875 11.7259 8.27411 13.125 10 13.125Z"
                            stroke-miterlimit="10" />
                        <path
                            d="M13.4375 2.8125H6.5625C4.49143 2.8125 2.8125 4.49143 2.8125 6.5625V13.4375C2.8125 15.5086 4.49143 17.1875 6.5625 17.1875H13.4375C15.5086 17.1875 17.1875 15.5086 17.1875 13.4375V6.5625C17.1875 4.49143 15.5086 2.8125 13.4375 2.8125Z"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M14.0625 6.875C14.5803 6.875 15 6.45527 15 5.9375C15 5.41973 14.5803 5 14.0625 5C13.5447 5 13.125 5.41973 13.125 5.9375C13.125 6.45527 13.5447 6.875 14.0625 6.875Z"
                            fill="#565656" />
                    </svg>
                </a>
            </span>
            <span style="display: none">>
                <a href="https://dribbble.com/staticmania/">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="stroke-[#565656] hover:stroke-white duration-200"
                        width="23"
                        height="23"
                        viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M5.55078 16.037C6.66328 14.1939 8.23315 12.6697 10.1082 11.6119C11.9832 10.5542 14.0997 9.99896 16.2524 10C16.6741 10 17.0905 10.0206 17.5017 10.0616"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M14.6894 4.14795C13.5183 5.58738 12.0409 6.74742 10.3647 7.54356C8.68846 8.3397 6.85577 8.75188 5.00011 8.75007C4.20969 8.75045 3.42101 8.67625 2.64453 8.52846"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M6.71484 3.25684C8.59445 4.35971 10.1529 5.93502 11.2355 7.82638C12.3181 9.71775 12.8871 11.8594 12.8861 14.0387C12.8869 15.0598 12.7627 16.0771 12.5165 17.0681"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </span>
            <span style="display: none">>
                <a href="https://www.figma.com/@staticmania">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="stroke-[#565656] hover:stroke-white duration-200"
                        width="23"
                        height="23"
                        viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M12.6562 12.6562C14.1233 12.6562 15.3125 11.467 15.3125 10C15.3125 8.53299 14.1233 7.34375 12.6562 7.34375C11.1892 7.34375 10 8.53299 10 10C10 11.467 11.1892 12.6562 12.6562 12.6562Z"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M10 7.34368V2.03125H7.34375C6.63927 2.03125 5.96364 2.3111 5.4655 2.80925C4.96735 3.30739 4.6875 3.98302 4.6875 4.6875C4.6875 5.39198 4.96735 6.06761 5.4655 6.56575C5.96364 7.0639 6.63927 7.34375 7.34375 7.34375L10 7.34368Z"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M10 12.6562V7.34375H7.34375C6.63927 7.34375 5.96364 7.6236 5.4655 8.12175C4.96735 8.61989 4.6875 9.29552 4.6875 10C4.6875 10.7045 4.96735 11.3801 5.4655 11.8783C5.96364 12.3764 6.63927 12.6562 7.34375 12.6562L10 12.6562Z"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M10 7.34368V2.03125H12.6562C13.3607 2.03125 14.0364 2.3111 14.5345 2.80925C15.0326 3.30739 15.3125 3.98302 15.3125 4.6875C15.3125 5.39198 15.0326 6.06761 14.5345 6.56575C14.0364 7.0639 13.3607 7.34375 12.6562 7.34375L10 7.34368Z"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M10 12.6562V15.3125C10 15.8379 9.84423 16.3515 9.55236 16.7883C9.26049 17.2251 8.84564 17.5656 8.36028 17.7666C7.87491 17.9677 7.34083 18.0203 6.82556 17.9178C6.3103 17.8153 5.837 17.5623 5.46551 17.1908C5.09402 16.8194 4.84104 16.3461 4.73854 15.8308C4.63605 15.3155 4.68865 14.7814 4.88969 14.2961C5.09074 13.8107 5.4312 13.3959 5.86801 13.104C6.30483 12.8121 6.81839 12.6563 7.34375 12.6563L10 12.6562Z"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </span>
            <span style="display: none">>
                <a href="https://discord.gg/fSxDJyvJmr">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="stroke-[#565656] hover:stroke-white duration-200"
                        width="23"
                        height="23"
                        viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M7.5 12.1875C8.01777 12.1875 8.4375 11.7678 8.4375 11.25C8.4375 10.7322 8.01777 10.3125 7.5 10.3125C6.98223 10.3125 6.5625 10.7322 6.5625 11.25C6.5625 11.7678 6.98223 12.1875 7.5 12.1875Z"
                            fill="#565656" />
                        <path
                            d="M12.5 12.1875C13.0178 12.1875 13.4375 11.7678 13.4375 11.25C13.4375 10.7322 13.0178 10.3125 12.5 10.3125C11.9822 10.3125 11.5625 10.7322 11.5625 11.25C11.5625 11.7678 11.9822 12.1875 12.5 12.1875Z"
                            fill="#565656" />
                        <path
                            d="M5.8125 6.24985C7.16746 5.82575 8.58012 5.6149 9.99987 5.62485C11.4196 5.6149 12.8322 5.82575 14.1872 6.24983"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M14.1871 13.75C12.8322 14.1741 11.4195 14.3849 9.99981 14.375C8.58008 14.3849 7.16744 14.1741 5.8125 13.75"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12.1148 14.2255L13.0542 16.1044C13.1168 16.2306 13.2204 16.3319 13.348 16.3916C13.4756 16.4513 13.6196 16.466 13.7567 16.4333C15.6737 15.9646 17.3264 15.1474 18.5301 14.1012C18.622 14.0221 18.6892 13.9182 18.7234 13.802C18.7577 13.6857 18.7576 13.562 18.7232 13.4457L16.069 4.59837C16.0422 4.50915 15.9959 4.42704 15.9334 4.35799C15.8708 4.28894 15.7937 4.2347 15.7076 4.19922C14.9577 3.89221 14.1822 3.65213 13.39 3.48181C13.2391 3.44873 13.0813 3.47261 12.9469 3.54884C12.8125 3.62508 12.711 3.74829 12.662 3.89481L12.0391 5.76353"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M7.88822 14.2255L6.94874 16.1044C6.88614 16.2306 6.78258 16.3319 6.65499 16.3916C6.5274 16.4513 6.38332 16.466 6.2463 16.4333C4.32922 15.9646 2.67656 15.1474 1.47286 14.1012C1.38094 14.0222 1.31381 13.9182 1.27955 13.802C1.24529 13.6857 1.24536 13.562 1.27974 13.4457L3.93395 4.59836C3.96074 4.50915 4.00709 4.42703 4.06961 4.35798C4.13214 4.28894 4.20927 4.2347 4.29539 4.19921C5.04524 3.8922 5.82077 3.65213 6.61293 3.48181C6.76385 3.44873 6.92168 3.47261 7.05607 3.54884C7.19046 3.62508 7.29194 3.74829 7.34099 3.89481L7.9639 5.76353"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M7.5 12.1875C8.01777 12.1875 8.4375 11.7678 8.4375 11.25C8.4375 10.7322 8.01777 10.3125 7.5 10.3125C6.98223 10.3125 6.5625 10.7322 6.5625 11.25C6.5625 11.7678 6.98223 12.1875 7.5 12.1875Z"
                            fill="#565656" />
                        <path
                            d="M12.5 12.1875C13.0178 12.1875 13.4375 11.7678 13.4375 11.25C13.4375 10.7322 13.0178 10.3125 12.5 10.3125C11.9822 10.3125 11.5625 10.7322 11.5625 11.25C11.5625 11.7678 11.9822 12.1875 12.5 12.1875Z"
                            fill="#565656" />
                        <path
                            d="M5.8125 6.24985C7.16746 5.82575 8.58012 5.6149 9.99987 5.62485C11.4196 5.6149 12.8322 5.82575 14.1872 6.24983"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M14.1871 13.75C12.8322 14.1741 11.4195 14.3849 9.99981 14.375C8.58008 14.3849 7.16744 14.1741 5.8125 13.75"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M12.1148 14.2255L13.0542 16.1044C13.1168 16.2306 13.2204 16.3319 13.348 16.3916C13.4756 16.4513 13.6196 16.466 13.7567 16.4333C15.6737 15.9646 17.3264 15.1474 18.5301 14.1012C18.622 14.0221 18.6892 13.9182 18.7234 13.802C18.7577 13.6857 18.7576 13.562 18.7232 13.4457L16.069 4.59837C16.0422 4.50915 15.9959 4.42704 15.9334 4.35799C15.8708 4.28894 15.7937 4.2347 15.7076 4.19922C14.9577 3.89221 14.1822 3.65213 13.39 3.48181C13.2391 3.44873 13.0813 3.47261 12.9469 3.54884C12.8125 3.62508 12.711 3.74829 12.662 3.89481L12.0391 5.76353"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M7.88822 14.2255L6.94874 16.1044C6.88614 16.2306 6.78258 16.3319 6.65499 16.3916C6.5274 16.4513 6.38332 16.466 6.2463 16.4333C4.32922 15.9646 2.67656 15.1474 1.47286 14.1012C1.38094 14.0222 1.31381 13.9182 1.27955 13.802C1.24529 13.6857 1.24536 13.562 1.27974 13.4457L3.93395 4.59836C3.96074 4.50915 4.00709 4.42703 4.06961 4.35798C4.13214 4.28894 4.20927 4.2347 4.29539 4.19921C5.04524 3.8922 5.82077 3.65213 6.61293 3.48181C6.76385 3.44873 6.92168 3.47261 7.05607 3.54884C7.19046 3.62508 7.29194 3.74829 7.34099 3.89481L7.9639 5.76353"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </span>
            <span>
                <a href="https://www.linkedin.com/company/staticmania/" target="_blank">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="stroke-[#565656] hover:stroke-white duration-200"
                        width="23"
                        height="23"
                        viewBox="0 0 20 20"
                        fill="none">
                        <path
                            d="M16.25 3.125H3.75C3.40482 3.125 3.125 3.40482 3.125 3.75V16.25C3.125 16.5952 3.40482 16.875 3.75 16.875H16.25C16.5952 16.875 16.875 16.5952 16.875 16.25V3.75C16.875 3.40482 16.5952 3.125 16.25 3.125Z"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M9.375 8.75V13.75"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M6.875 8.75V13.75"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M9.375 10.9375C9.375 10.3573 9.60547 9.80094 10.0157 9.3907C10.4259 8.98047 10.9823 8.75 11.5625 8.75C12.1427 8.75 12.6991 8.98047 13.1093 9.3907C13.5195 9.80094 13.75 10.3573 13.75 10.9375V13.75"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path
                            d="M6.875 7.1875C7.39277 7.1875 7.8125 6.76777 7.8125 6.25C7.8125 5.73223 7.39277 5.3125 6.875 5.3125C6.35723 5.3125 5.9375 5.73223 5.9375 6.25C5.9375 6.76777 6.35723 7.1875 6.875 7.1875Z"
                            fill="#565656" />
                    </svg>
                </a>
            </span>
        </div>
    </div>
</div>
</nav>
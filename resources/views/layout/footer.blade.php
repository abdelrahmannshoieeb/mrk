<footer
  class="relative lg:fixed lg:-z-10 bg-black bottom-0 w-full pt-20 sm:pt-24 md:pt-36 pb-24 lg:pb-48 overflow-hidden"
>
  <div class="container">
    <!-- Footer Content Grid -->
    <div
      class="flex flex-col sm:flex-row flex-wrap gap-y-10 sm:gap-y-16 justify-center sm:justify-between relative z-10"
    >
      <!-- Reach Us Section -->
      <div class="pr-8 max-lg:basis-full">
        <h5
          class="uppercase font-satoshi text-white mb-4 sm:mb-8 font-bold"
        >
          {{ __('index.reach_us') }}
        </h5>
        <p class="text-white text-sm max-md:font-semibold mb-5">
         {{ __('index.footer_title') }}
        </p>
        <!-- Meeting Scheduler Card -->
        <div
          class="flex p-4 group bg-primary bg-opacity-30 gap-4 justify-between items-center backdrop-blur-2xl max-w-[360px]"
        >
          <img class="h-[55px] w-auto" src="images/penta-w.png" alt="logo" />
          <div>
            <h6 class="text-sm font-satoshi text-white font-bold">
              {{ __('index.Schedule_a_Free_Meeting') }}
            </h6>
          </div>
          <a href="https://wa.me/201012620529">
            <figure
              class="bg-primary w-[55px] h-[55px] cursor-pointer relative overflow-hidden"
            >
              <img
                src="images/icons/arrow-Icon.svg"
                alt="Arrow Icon"
                class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 group-hover:-translate-y-12 group-hover:translate-x-8 transition-all duration-500 opacity-100 group-hover:opacity-0"
              />
              <img
                src="images/icons/arrow-Icon.svg"
                alt="Arrow Icon"
                class="absolute translate-y-12 -translate-x-4 transition-all duration-500 opacity-0 group-hover:opacity-100 group-hover:translate-x-[19px] group-hover:translate-y-5"
              />
            </figure>
          </a>
        </div>
      </div>

      <!-- Resources Links -->
    

      <!-- Company Links -->
   
      <!-- Important Links -->
      <div>
        <h5
          class="uppercase text-sm font-satoshi text-white tracking-[3px] mb-4 sm:mb-8 font-bold"
        >
          Links
        </h5>
        <ul>
          <li class="mb-4">
            <a
              href="{{ route('home') }}"
              class="block text-white transition-colors duration-300 font-semibold hover:text-primary"
              >Home</a
            >
          </li>
          <li class="mb-4">
            <a
              href="{{ route('ecom') }}"
              class="block text-white transition-colors duration-300 font-semibold hover:text-primary"
              >Services</a
            >
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Footer Background Text -->
</footer>
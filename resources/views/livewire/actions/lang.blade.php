









<div class="toggle-button fixed right-0 bottom-10 z-[1000]" style="margin-left: 10px;">
    <button
        wire:click="toggleLocale"
        type="button"
        class="rounded-[1px] backdrop-blur-xl focus:outline-none w-[44px] h-[44px] flex justify-center items-center
        {{ $locale === 'ar' ? 'bg-white/90 text-black' : 'dark:bg-dark/90 text-white' }}">
        
        <span>{{ strtoupper($locale) }}</span>
    </button>
</div>

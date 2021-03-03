<div class="absolute inset-y-0 right-0 flex items-center pr-2  md:hidden ">
    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-light_shades hover:bg-opacity-20 hover:bg-white hover:text-light_shades" aria-controls="mobile-menu" @click="open = !open" aria-expanded="false" x-bind:aria-expanded="open.toString()">
        <span class="sr-only">Open main menu</span>
        <!-- Icon when menu is closed. -->
        <svg x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 block" :class="{ 'hidden': open, 'block': !(open) }" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <!-- Icon when menu is open. -->
        <svg x-state:on="Menu open" x-state:off="Menu closed" class="h-6 w-6 hidden" :class="{ 'block': open, 'hidden': !(open) }" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>
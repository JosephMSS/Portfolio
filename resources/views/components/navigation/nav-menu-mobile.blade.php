<div class="md:hidden" id="mobile-menu" x-show="open" x-on:click.away="open=false" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <x-navigation.nav-link-mobile href="{{ route('home')}}">Home</x-navigation.nav-link-mobile>
            <x-navigation.nav-link-mobile href="{{ route('home')}}">Work</x-navigation.nav-link-mobile>
            <x-navigation.nav-link-mobile href="{{ route('home')}}">Experience</x-navigation.nav-link-mobile>
            <x-navigation.nav-link-mobile href="{{ route('home')}}">About</x-navigation.nav-link-mobile>
        </div>
    </div>
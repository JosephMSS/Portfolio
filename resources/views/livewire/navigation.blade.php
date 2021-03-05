<nav class="bg-main_brand" x-data="{open:false}">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-4">
        <div class="relative flex items-center justify-between h-16">
            <x-navigation.nav-menu />
            <x-navigation.button-mobile-menu />
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <x-navigation.nav-menu-mobile />
 </nav>
<div class="absolute inset-x-0 top-0 z-50" x-data="{ isOpen: false }">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global" >
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Contact</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>
      </div>
      <div class="flex lg:hidden">
        <!-- Button to toggle menu visibility -->
        <button @click="isOpen = !isOpen" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="/" class="text-sm/6 font-semibold {{ request()->is('/') ? 'text-blue-500' : 'text-gray-900' }} hover:text-blue-500 transition hover:rounded-md p-2">Home</a>
        <a href="/about" class="text-sm/6 font-semibold {{ request()->is('about') ? 'text-blue-500' : 'text-gray-900' }} hover:text-blue-500 transition hover:rounded-md p-2">About</a>
        <a href="/posts" class="text-sm/6 font-semibold {{ request()->is('posts') ? 'text-blue-500' : 'text-gray-900' }} hover:text-blue-500 transition hover:rounded-md p-2">Blog</a>
        <a href="/contact" class="text-sm/6 font-semibold {{ request()->is('contact') ? 'text-blue-500' : 'text-gray-900' }} hover:text-blue-500 transition hover:rounded-md p-2">Contact</a>
      </div>        
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="#" class="text-sm/6 font-semibold text-gray-900 hover:text-blue-500 transition hover:rounded-md p-2">Log in <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>
    
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true" x-show="isOpen" @click.away="isOpen = false" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50 bg-black opacity-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Contact</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button @click="isOpen = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
                <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold {{ request()->is('/') ? 'text-blue-500' : 'text-gray-900' }} hover:bg-gray-50">Home</a>
                <a href="/about" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold {{ request()->is('about') ? 'text-blue-500' : 'text-gray-900' }} hover:bg-gray-50">About</a>
                <a href="/posts" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold {{ request()->is('posts') ? 'text-blue-500' : 'text-gray-900' }} hover:bg-gray-50">Blog</a>
                <a href="/contact" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold {{ request()->is('contact') ? 'text-blue-500' : 'text-gray-900' }} hover:bg-gray-50">Contact</a>
            </div>            
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
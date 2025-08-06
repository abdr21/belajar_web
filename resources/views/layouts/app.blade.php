<!doctype html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    @stack('styles')
    <title>{{$title ?? env('APP_NAME')}}</title>
  </head>
  <body class="bg-gray-100 text-black-800 dark:bg-gray-900 dark:text-white">
  <header class="fixed top-0 left-0 w-full z-20 h bg-black/70 text-white shadow-md dark:bg-gray-800 dark:text-gray-100">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-xl font-bold text-sky-700 dark:text-sky-300">{{ __('Al-Qomar Studio') }}</h1>
      <nav class="space-x-4">
        <a href="{{route('home')}}" class="hover:underline dark:hover:text-sky-300">{{ __('Home') }}</a>
        <a href="{{route('about')}}" class="hover:underline dark:hover:text-sky-300">{{ __('About') }}</a>
        <a href="{{route('project.index')}}" class="hover:underline dark:hover:text-sky-300">{{ __('Project') }}</a>
        <a href="{{route('service')}}" class="hover:underline dark:hover:text-sky-300">{{ __('Service') }}</a>
        <a href="{{route('contact')}}" class="hover:underline dark:hover:text-sky-300">{{ __('Contact') }}</a>
      </nav>
      <!-- Dark mode switcher -->
      <button id="darkModeToggle" class="ml-4 px-3 py-1 rounded bg-sky-700 text-white hover:bg-sky-900 dark:bg-sky-300 dark:text-gray-900 dark:hover:bg-amber-500">
        🌙
      </button>
      <!-- Language switcher : indonesian & english-->
      <div class="ml-4">
        <a href="{{ route('lang.switch', ['locale' => 'en']) }}" class="text-sm hover:underline dark:hover:text-sky-300">EN</a>
        <span class="mx-2">|</span>
        <a href="{{ route('lang.switch', ['locale' => 'id']) }}" class="text-sm hover:underline dark:hover:text-sky-300">ID</a>
      </div>
     
    </div>
    
  </header>


      @yield('content')
     
    <div class="container mx-auto">
      @yield('content2')
     
    </div>
    <!-- Footer -->
  <footer class="bg-sky-800 text-white text-center py-4 dark:bg-gray-950 dark:text-gray-300">
    <div class="flex justify-center gap-6 mb-4 text-sm">
    <a href="https://wa.me/6281234567890" target="_blank" class="hover:text-sky-500 dark:hover:text-sky-300"><i class="bi bi-whatsapp "style="font-size:1rem"></i></a>
      
    
    <a href="https://instagram.com/namakopi" target="_blank" class="hover:text-sky-500 dark:hover:text-sky-300"><i class="bi bi-instagram" style="font-size:1rem"></i></a>
    <a href="https://facebook.com/namakopi" target="_blank" class="hover:text-sky-500 dark:hover:text-sky-300"><i class="bi bi-facebook " style="font-size:1rem"></i></a>
  </div>
    <p>&copy; 2025 Cafe Ginasthel. {{ __('All rights reserved.') }}</p>
  </footer>
     
    @vite('resources/js/app.js')
    @stack('scripts')
    <script>
    const toggleBtn = document.getElementById('darkModeToggle');
    const htmlTag = document.documentElement;

    toggleBtn.addEventListener('click', function() {
      htmlTag.classList.toggle('dark');
      // Simpan preferensi ke localStorage
      if(htmlTag.classList.contains('dark')) {
        localStorage.setItem('theme', 'dark');
        toggleBtn.textContent = '☀️';
      } else {
        localStorage.setItem('theme', 'light');
        toggleBtn.textContent = '🌙';
      }
    });

    // Cek preferensi saat halaman dimuat
    if(localStorage.getItem('theme') === 'dark') {
      htmlTag.classList.add('dark');
      toggleBtn.textContent = '☀️';
    } else {
      htmlTag.classList.remove('dark');
      toggleBtn.textContent = '🌙';
    }
    
  </script>
  </body>
    <!--<h1 class="text-3xl font-bold underline">
      Hello world!
    </h1>
  </body>-->
</html>
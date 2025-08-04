<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    @stack('styles')
  </head>
  <body class="bg-gray-100 text-black-800">
  <header class="bg-white shadow h-20 ">
    <div class="container mx-auto px-6 py-16 flex justify-between items-center">
      <h1 class="text-xl font-bold text-amber-700 relative bottom-10">Al-Qomar Studio</h1>
      <nav class="space-x-4">
        <a href="#" class="text-amber-600 hover:underline relative bottom-10">Home</a>
        <a href="#" class="hover:underline relative bottom-10">About</a>
        <a href="#" class="hover:underline relative bottom-10">FAQs</a>
        <a href="#" class="hover:underline relative bottom-10">Support</a>
        <a href="#" class="hover:underline relative bottom-10">Contact</a>
      </nav>
    </div>
  </header>

      @yield('content')
     
    <div class="container mx-auto">
      @yield('content2')
     
    </div>
    <footer class="bg-amber-600 text-black py-10 px-4 sm:px-6 lg:px-8 border-t border-[#333]">
        <div class="max-w-7xl mx-auto">
            
            <div class="grid grid-cols-2 md:grid-cols-5 gap-8 border-b border-[#333] pb-10">
                
                <div>
                    <h3 class="text-white font-bold mb-4 text-sm uppercase tracking-wide">ENVATO MARKET</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Terms</a></li>
                        <li><a href="#" class="hover:text-white">Licenses</a></li>
                        <li><a href="#" class="hover:text-white">Market API</a></li>
                        <li><a href="#" class="hover:text-white">Become an affiliate</a></li>
                        <li><a href="#" class="hover:text-white">Cookies</a></li>
                        <li><a href="#" class="hover:text-white">Cookie Settings</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white font-bold mb-4 text-sm uppercase tracking-wide">HELP</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Help Center</a></li>
                        <li><a href="#" class="hover:text-white">Authors</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white font-bold mb-4 text-sm uppercase tracking-wide">OUR COMMUNITY</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">Community</a></li>
                        <li><a href="#" class="hover:text-white">Blog</a></li>
                        <li><a href="#" class="hover:text-white">Forums</a></li>
                        <li><a href="#" class="hover:text-white">Meetups</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-white font-bold mb-4 text-sm uppercase tracking-wide">MEET ENVATO</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-white">About Envato</a></li>
                        <li><a href="#" class="hover:text-white">Careers</a></li>
                        <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-white">Do not sell or share my personal information</a></li>
                        <li><a href="#" class="hover:text-white">Sitemap</a></li>
                    </ul>
                </div>
                
                <div class="col-span-2 md:col-span-1">
                    <div class="flex items-start justify-end space-x-4 mb-4">
                        <div class="flex-grow text-right">
                            <img src="https://envato-market.s3.amazonaws.com/assets/logos/envato-market-b66a50614ac18080c3558c73491f6305.svg" alt="Envato Market Logo" class="h-8 inline-block mb-2">
                            <div class="text-xl font-bold text-white">77,636,521</div>
                            <div class="text-sm">items sold</div>
                        </div>
                        <div class="text-right">
                            <div class="text-xl font-bold text-white">$1,221,868,600</div>
                            <div class="text-sm">community earnings</div>
                        </div>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Certified_B_Corporation_logo.svg" alt="Certified B Corp" class="h-20">
                    </div>
                </div>
            </div>
            
            <div class="py-8 border-b border-[#333]">
                <ul class="flex flex-wrap gap-4 text-sm justify-start md:justify-start">
                    <li><a href="#" class="hover:text-white font-bold">Envato Elements</a></li>
                    <li><a href="#" class="hover:text-white font-bold">Placeit by Envato</a></li>
                    <li><a href="#" class="hover:text-white font-bold">Envato Tuts+</a></li>
                    <li><a href="#" class="hover:text-white font-bold">All Products</a></li>
                    <li><a href="#" class="hover:text-white font-bold">Sitemap</a></li>
                </ul>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-between pt-8 space-y-4 sm:space-y-0">
                <div class="text-xs text-center sm:text-left">
                    <p>Price is in US dollars and excludes tax and handling fees.</p>
                    <p class="mt-2">&copy; 2025 Envato Pty Ltd. Trademarks and brands are the property of their respective owners.</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M22.258 4.012c-.779.345-1.62.576-2.492.684.89-.535 1.564-1.378 1.887-2.383-.836.498-1.764.858-2.738 1.05-.79-.844-1.91-1.37-3.14-1.37-2.382 0-4.314 1.932-4.314 4.314 0 .338.037.667.108.983-3.585-.18-6.764-1.89-8.892-4.484-.37.638-.582 1.377-.582 2.164 0 1.493.76 2.808 1.916 3.582-.705-.022-1.368-.216-1.944-.536v.054c0 2.088 1.488 3.834 3.468 4.23-.362.098-.745.15-1.14.15-.278 0-.547-.028-.809-.077.542 1.716 2.128 2.96 4.004 2.99-1.478 1.157-3.336 1.848-5.362 1.848-.348 0-.69-.02-1.026-.062 1.91 1.225 4.178 1.938 6.61 1.938 7.93 0 12.268-6.57 12.268-12.268 0-.188-.004-.374-.012-.56.844-.608 1.576-1.362 2.15-2.22z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.505 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.774-1.63 1.579V12h2.77l-.443 2.89h-2.327v6.987A10.015 10.015 0 0022 12z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                            <path d="M16.707 7.293a1 1 0 00-1.414-1.414l-5.586 5.586a1 1 0 000 1.414l5.586 5.586a1 1 0 001.414-1.414L11.414 12l5.293-4.707z"></path>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path>
                            <path d="M16.707 7.293a1 1 0 00-1.414-1.414l-5.586 5.586a1 1 0 000 1.414l5.586 5.586a1 1 0 001.414-1.414L11.414 12l5.293-4.707z"></path>
                        </svg>
                    </a>
                    
                    </div>
                <div class="text-xs text-center sm:text-left">
                    <p>We use cookies to improve your experience on our site. By using our site, you acknowledge that you have read and understood our <a href="#" class="text-white hover:underline">Cookie Policy</a> and <a href="#" class="text-white hover:underline">Privacy Policy</a>.</p>
                </div>
            </div>
        </div>
    </footer>


     
    @vite('resources/js/app.js')
    @stack('scripts')
  </body>
    <!--<h1 class="text-3xl font-bold underline">
      Hello world!
    </h1>
  </body>-->
</html>
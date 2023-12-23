<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

          <!-- Fonts -->
          <link rel="preconnect" href="https://fonts.googleapis.com" />
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
          <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"/>
      
              <!-- Scripts -->
          @vite(['resources/scss/app.scss', 'resources/js/app.js'])
        <script>
              if (
                localStorage.getItem('theme') === 'dark' ||
                (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
              ) {
                document.documentElement.classList.add('dark');
              } else {
                document.documentElement.classList.remove('dark');
              }
        </script>
    </head>
    <body>
        <div id="app">
            @include('layouts.sidebar')
            <!-- Wrapper Starts -->
            <div class="wrapper">
                <!-- Header Starts -->
                @include('layouts.header')
                <!-- Header Ends -->

                <!-- Page Content Starts -->
                <div class="content">
                <!-- Main Content Starts -->
                <main class="container flex-grow p-4 sm:p-6">
                  {{ $slot }}
                  <!-- Search Modal Start -->
                  <div class="modal" id="search-modal">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header px-4 sm:px-6">
                        <div class="group flex items-center">
                            <i
                            data-feather="search"
                            class="text-slate-500 group-focus-within:text-slate-600 dark:text-slate-400 dark:group-focus-within:text-slate-300"
                            ></i>
                            <input
                            type="text"
                            class="w-full border-none bg-transparent text-sm text-slate-700 outline-none placeholder:text-slate-400 focus:ring-0 dark:text-slate-200"
                            placeholder="Search"
                            />
                            <button
                            class="rounded-primary bg-slate-100 px-2 py-1 text-[10px] font-semibold text-slate-600 hover:bg-slate-200 dark:bg-slate-700 dark:text-slate-300 dark:hover:bg-slate-600"
                            data-dismiss="modal"
                            >
                            ESC
                            </button>
                        </div>
                        </div>
                        <div class="modal-body max-h-[600px] px-4 py-6 sm:px-6"></div>
                    </div>
                    </div>
                  </div>
                  <!-- Search Modal Ends -->
                </main>
                <!-- Main Content Ends -->
                </div>
                <!-- Page Content Ends -->
            </div>
            <!-- Wrapper Ends -->
        </div>
        @stack('scripts')
    </body>
</html>

## **Necessary Notes About The Project**

    1. Used welcome.blade.php default nevigation.

    2. When we create AuthController and create login, register route in the web.php file, we will get login, register
       link which comes from welcome.blade.php file.

        welcome.blade.php,

            Bellow code will execute when it gets login, register route in the web.php.

                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

        inside web.php,

            Route::get('login', [AuthController::class, 'index'])->name('login');
            
            Route::get('register', [AuthController::class, 'register_view'])->name('register');
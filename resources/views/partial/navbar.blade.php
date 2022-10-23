<nav class="navbar navbar-light ">
  <div class="container-fluid px-5">
               <a href="/"> <img src="img/logo.png" alt="" width="12%"></a>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0  ">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-light">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-light">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-2 text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-light">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
        </div>
  </nav>
<nav class="bg-primary w-100 py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <p class="text-white mb-0">astodelhi2015@gmail.com</p>
        <div>
            <a class="text-white text-decoration-none" href="#">Contact</a>
            <span class="text-white px-2">|</span>
            @auth
                <a id="navbarDropdown" class="text-white text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @else
                <a class="text-white text-decoration-none" href="/login">Login</a>
            @endauth
            
        </div>
    </div>
</nav>
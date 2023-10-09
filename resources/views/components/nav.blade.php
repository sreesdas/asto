<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/img/asto.png" alt="asto" width="420px">   
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link text-primary @if(Route::getCurrentRoute()->getName() == 'welcome') active @endif" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-primary @if(Route::getCurrentRoute()->getName() == 'constitution') active @endif" href="/asto-constitution">ASTO Constitution</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-primary @if(Route::getCurrentRoute()->getName() == 'cwc') active @endif" href="/cwc">Central Working Committee</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-primary @if(Route::getCurrentRoute()->getName() == 'committee') active @endif" href="/committees">Committees</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-primary" href="#">Gallery</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Navbar -->
    <nav class="navbar navbar-light bg-white shadow-sm px-4">
        @if (Auth::check() && Auth::user()->role == 'admin')
            @yield('check')
        @endif
        @if (Auth::check())
            <div>
                <form method="POST" action="/logout">
                @csrf
                @yield('logout')
                </form>
            </div>
        @else
        @yield('login')
        @endif
    </nav>
@if(Auth::check())
    <script>
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
            history.go(1);
        };
    </script>
@endif

    

    


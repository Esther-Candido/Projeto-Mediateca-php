<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                @guest()
                    <a class="nav-link" href="{{route('landing')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-book-atlas"></i></div>
                        Landing Page
                    </a>
                    <a class="nav-link" href="{{route('login')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-right-to-bracket"></i></div>
                        Login
                    </a>
                @endguest
                @auth()
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button class="nav-link" href="{{route('logout')}}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-right-to-bracket"></i></div>
                            Logout
                        </button>
                    </form>
                @endauth

                @role('admin')
                <div class="sb-sidenav-menu-heading">Administrador</div>
                <a class="nav-link" href="{{route('admin.home')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-book-atlas"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{route('admin.autores.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-book-atlas"></i></div>
                    Autores
                </a>
                @endrole
                @role('cliente')
                <div class="sb-sidenav-menu-heading">Clientes</div>
                <a class="nav-link" href="{{route('cliente.home')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-book-atlas"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{route('cliente.autores.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-book-atlas"></i></div>
                    Autores
                </a>
                @endrole
                @has
            </div>
        </div>
    </nav>
</div>


<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comics.index') }}">
                            Comics
                        </a>
                    </li>
                </ul>
                <div>
                    <a class="btn btn-primary me-3" href="{{route('comics.create')}}">crea un nuovo comics</a>
                </div>
            </div>
        </div>
    </nav>
</header>
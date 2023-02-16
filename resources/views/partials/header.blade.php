
<header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
                <div class="text-info">
                    <h3>Pannello Admin</h3>
                </div>
                
                <div>
                    <ul class="navbar-nav me-auto mb-2 ">
                        <li class="nav-item">
                            <a class="nav-link active text-light" aria-current="page" href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('comics.index') }}">
                                Comics
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <a class="btn btn-success me-3" href="{{route('comics.create')}}">crea un nuovo comics</a>
                </div>
            </div>
        </div>
    </nav>
</header>
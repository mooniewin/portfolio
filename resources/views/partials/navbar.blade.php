<nav class="navbar navbar-expand-lg portfolio-navbar">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            moon.dev
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Mostrar navegación" >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#experiencia') }}">
                        Experiencia
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#sobre-mi') }}">
                        Sobre mí
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#tecnologias') }}">
                        Tecnologías
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/#proyectos') }}">
                        Proyectos
                    </a>
                </li>

            </ul>

            <a href="{{ url('/#contacto') }}" class="btn-portfolio">
                Contacto
            </a>

        </div>

    </div>
</nav>
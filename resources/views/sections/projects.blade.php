{{-- muestra los proyectos destacados mediante un carrusel --}}

<section id="proyectos" class="portfolio-section projects-section">

    <div class="container">

        <div class="section-heading projects-heading">
            <div>
                <span class="section-label"> PROYECTOS </span>
                <h2> Proyectos destacados </h2>
            </div>

            <a href="{{ route('projects.index') }}" class="projects-link">
                Ver todos los proyectos →
            </a>
        </div>

        <div id="projectsCarousel" class="carousel slide" data-bs-ride="false" >
            <div class="carousel-inner">

                {{-- ========= ecoscan ====== --}}
                <div class="carousel-item active">
                    <div class="project-slide">
                        @include('components.project-card', [
                            'image' => 'images/projects/ecoscan/preview.png',
                            'title' => 'ecoScan',
                            'type' => 'Proyecto colaborativo',
                            'description' => 'Plataforma web para gestionar centros de reciclaje, materiales y horarios de recolección.',
                            'technologies' => 'Java · API REST · DAO · DTO ',
                            'role' => 'Backend + Frontend'
                        ])
                        <a href="{{ route('projects.ecoscan') }}" class="project-link">
                            Ver proyecto →
                        </a>
                    </div>
                </div>

                {{-- ========= mcchicken ====== --}}
                <div class="carousel-item">
                    <div class="project-slide">
                        @include('components.project-card', [
                            'image' => 'images/projects/mcchicken/mcchicken.png',
                            'title' => 'McChicken',
                            'type' => 'Proyecto académico',
                            'description' => 'Sistema web para gestionar sucursales y empleados mediante servicios REST.',
                            'technologies' => 'Java · API REST',
                            'role' => null
                        ])
                        <a href="{{ route('projects.mcchicken') }}" class="project-link">
                            Ver proyecto →
                        </a>
                    </div>
                </div>

                {{-- ========= recetitas moon ====== --}}
                <div class="carousel-item">
                    <div class="project-slide">
                        @include('components.project-card', [
                            'image' => 'images/projects/recetitas/inicio.png',
                            'title' => 'Recetitas Moon',
                            'type' => 'Proyecto académico',
                            'description' => 'Aplicación web que consume una API externa para consultar y explorar recetas dinámicamente.',
                            'technologies' => 'HTML · JavaScript · CSS',
                            'role' => null
                        ])
                        <a href="{{ route('projects.recetitas-moon') }}" class="project-link">
                            Ver proyecto →
                        </a>
                    </div>
                </div>

                {{-- ========= bank simulator ====== --}}
                <div class="carousel-item">
                    <div class="project-slide">
                        @include('components.project-card', [
                            'image' => 'images/projects/bank/bank-1.png',
                            'title' => 'Bank Simulator',
                            'type' => 'Proyecto académico',
                            'description' => 'Simulador bancario con operaciones de depósito, retiro e historial de transacciones.',
                            'technologies' => 'HTML · JavaScript · CSS',
                            'role' => null
                        ])
                        <a href="{{ route('projects.bank-simulator') }}" class="project-link">
                            Ver proyecto →
                        </a>
                    </div>
                </div>

            </div>

            {{-- ========= controles del carrusel ====== --}}

            <button class="carousel-control-prev" type="button" data-bs-target="#projectsCarousel" data-bs-slide="prev" >
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">
                    Anterior
                </span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#projectsCarousel" data-bs-slide="next" >
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">
                    Siguiente
                </span>
            </button>

        </div>

    </div>

</section> 
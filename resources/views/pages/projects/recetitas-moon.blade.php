@extends('layouts.app')
@section('content')
<section class="project-detail-section">
    <div class="container">
        {{-- ========= encabezado del proyecto ====== --}}

        <x-project-header label="PROYECTO ACADÉMICO" title="Recetitas Moon" description="
                Aplicación web para explorar recetas de cocina utilizando información obtenida mediante una API externa.
            " />

        {{-- ========= información general ====== --}}
        <div class="project-detail-info">
            <div class="project-detail-item">
                <h2> Rol </h2>
                <div class="project-roles">
                    <x-project-role role="Desarrollo individual" type="frontend" />
                </div>
            </div>

            <div class="project-detail-item">
                <h2> Tipo </h2>
                <p> Proyecto académico </p>
            </div>

            <div class="project-detail-item">
                <h2> Periodo </h2>
                <p> Diciembre 2025 </p>
            </div>
        </div>

        {{-- ========= descripción y funcionalidades ====== --}}
        <div class="row g-4 mt-2 project-info-row">
            <h3 class="project-section-title"> Sobre el proyecto </h3>
            <p class="project-section-description">
                Recetitas Moon es un sitio web funcional que permite explorar
                recetas de cocina de diferentes partes del mundo y consultar
                información detallada de cada una.
            </p>

            <div class="col-md-7">
                <div class="contribution-card project-info-card">
                    <h4> Funcionalidades </h4>
                    <ul>
                        <li>Exploración de recetas de diferentes partes del mundo.</li>
                        <li>Creación de cuenta de usuario.</li>
                        <li>Guardado de recetas favoritas.</li>
                        <li>Consulta de ingredientes, pasos, imágenes y videos.</li>
                        <li>Cierre de sesión manteniendo las recetas guardadas.</li>
                    </ul>
                </div>
            </div>

            {{-- ========= tecnologías ====== --}}
            <div class="col-md-5">
                <div class="contribution-card project-info-card">
                    <h4> Tecnologías </h4>
                    <div class="technology-list">
                        <div class="technology-item">
                            <div class="technology-icon-bootstrap">
                                <i class="bi bi-filetype-html"></i>
                            </div>
                            <span>HTML</span>
                        </div>

                        <div class="technology-item">
                            <div class="technology-icon-bootstrap">
                                <i class="bi bi-filetype-css"></i>
                            </div>
                            <span>CSS</span>
                        </div>

                        <div class="technology-item">
                            <div class="technology-icon-svg">
                                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor">
                                    <path
                                        d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z" />
                                </svg>
                            </div>
                            <span>JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ========= capturas del proyecto ====== --}}
        <div class="row justify-content-center mt-5">
            <div class="col-lg-11">
                <h3 class="project-section-title text-center"> Capturas del proyecto </h3>
                <p class="project-section-description text-center mb-4"> Algunas vistas de la aplicación. </p>

                <div id="recetitasCarousel" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner rounded-4 overflow-hidden">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/projects/recetitas/inicio.png') }}" class="d-block w-100"
                                alt="Vista de Recetitas Moon">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/projects/recetitas/inicio-recetas.png') }}" class="d-block w-100"
                                alt="Vista de Recetitas Moon">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/projects/recetitas/login.png') }}" class="d-block w-100"
                                alt="Vista de Recetitas Moon">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/projects/recetitas/recetas.png') }}" class="d-block w-100"
                                alt="Vista de Recetitas Moon">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/projects/recetitas/receta-detalle.png') }}" class="d-block w-100"
                                alt="Vista de Recetitas Moon">
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/projects/recetitas/recetas-guardadas.png') }}"
                                class="d-block w-100" alt="Vista de Recetitas Moon">
                        </div>

                    </div>

                    {{-- ========= controles del carrusel ====== --}}

                    <button class="carousel-control-prev" type="button" data-bs-target="#recetitasCarousel"
                        data-bs-slide="prev" aria-label="Imagen anterior">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#recetitasCarousel"
                        data-bs-slide="next" aria-label="Imagen siguiente">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                    {{-- ========= indicadores ====== --}}

                    <div class="carousel-indicators">

                        <button type="button" data-bs-target="#recetitasCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Ir a captura 1">
                        </button>

                        <button type="button" data-bs-target="#recetitasCarousel" data-bs-slide-to="1"
                            aria-label="Ir a captura 2">
                        </button>

                        <button type="button" data-bs-target="#recetitasCarousel" data-bs-slide-to="2"
                            aria-label="Ir a captura 3">
                        </button>

                        <button type="button" data-bs-target="#recetitasCarousel" data-bs-slide-to="3"
                            aria-label="Ir a captura 4">
                        </button>

                        <button type="button" data-bs-target="#recetitasCarousel" data-bs-slide-to="4"
                            aria-label="Ir a captura 5">
                        </button>

                        <button type="button" data-bs-target="#recetitasCarousel" data-bs-slide-to="5"
                            aria-label="Ir a captura 6">
                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- ========= demo ====== --}}
        <div class="project-detail-links">
            <a href="https://mooniewin.github.io/Recetitas-Moon/" target="_blank" rel="noopener noreferrer"
                class="project-detail-links btn-portfolio">
                <i class="bi bi-box-arrow-up-right"></i>
                Ver demo
            </a>

            <a href="https://github.com/mooniewin/Recetitas-Moon" target="_blank" rel="noopener noreferrer"
                class="project-detail-links btn-portfolio-outline">
                <i class="bi bi-github"></i>
                Repositorio
            </a>
        </div>
    </div>

</section>

@endsection
@extends('layouts.app')

@section('content')

<section class="project-detail-section">

    <div class="container">

        {{-- ========= encabezado del proyecto ====== --}}

        <x-project-header label="PROYECTO COLABORATIVO" title="ecoScan" description="
                ecoScan es una aplicación web que permite identificar materiales reciclables mediante una imagen y consultar centros de reciclaje disponibles según el material identificado.
            " />


        {{-- ========= información general ====== --}}

        <div class="project-detail-info">

            <div class="project-detail-item">
                <h2> Rol </h2>
                <div class="project-roles">
                    <x-project-role role="Backend" type="backend" />
                    <x-project-role role="Frontend" type="frontend" />
                </div>
            </div>

            <div class="project-detail-item">
                <h2> Tipo </h2>
                <p> Proyecto académico colaborativo </p>
            </div>

            <div class="project-detail-item">
                <h2> Periodo </h2>
                <p>  Enero - Abril 2026 </p>
            </div>
        </div>


        {{-- ========= mi contribución ====== --}}
        <div class="row justify-content-center mb-5">
            <div class="col-lg-9">
                <h3 class="project-section-title"> Mi contribución </h3>
                <p class="project-section-description">
                    Participé principalmente en el desarrollo backend del proyecto,
                    trabajando en la construcción de la API REST y en la implementación de la lógica necesaria para
                    gestionar los principales recursos de la plataforma. También participé en el desarrollo del panel
                    administrativo y algunas interfaces del frontend.
                </p>
                <div class="row g-4 mt-2">
                    {{-- ========= backend ====== --}}
                    <div class="col-md-6">
                        <div class="contribution-card h-100">
                            <h4>Backend</h4>
                            <ul>
                                <li>Desarrollo de endpoints REST.</li>
                                <li>CRUD de materiales y centros de reciclaje.</li>
                                <li>Implementación de DAO y DTO.</li>
                                <li>Sistema de gestión de horarios.</li>
                                <li>Implementación de soft delete.</li>
                                <li>Lógica de validación.</li>
                            </ul>

                            {{-- ========= tecnologías backend ====== --}}
                            <div class="contribution-technologies">
                                <span class="contribution-technologies-label">
                                    Tecnologías
                                </span>

                                <div class="technology-list">
                                    <div class="technology-item">
                                        <div class="technology-icon-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                                                <path
                                                    d="M405.8 376.9C415.6 370.2 429.2 364.4 429.2 364.4C429.2 364.4 390.5 371.4 352 374.6C304.9 378.5 254.3 379.3 228.9 375.9C168.8 367.9 261.9 345.8 261.9 345.8C261.9 345.8 225.8 343.4 181.3 364.8C128.8 390.2 311.3 401.8 405.8 376.9zM320.4 344.8C301.4 302.1 237.3 264.6 320.4 199C424.1 117.2 370.9 64 370.9 64C392.4 148.5 295.3 174.1 260.2 226.6C236.3 262.5 271.9 301 320.4 344.8zM435 168.6C435.1 168.6 259.8 212.4 343.5 308.8C368.2 337.2 337 362.8 337 362.8C337 362.8 399.7 330.4 370.9 289.9C344 252.1 323.4 233.3 435 168.6zM428.9 439.1C428.4 440.1 427.7 440.9 426.9 441.7C555.2 408 508 322.8 446.7 344.4C443.4 345.6 440.5 347.8 438.5 350.7C442.1 349.4 445.8 348.4 449.5 347.7C480.5 341.2 525 389.2 428.9 439.1zM476 501.4C476 501.4 490.5 513.3 460.1 522.6C402.2 540.1 219.3 545.4 168.5 523.3C150.2 515.4 184.5 504.3 195.3 502C206.5 499.6 213 500 213 500C192.7 485.7 81.7 528.1 156.6 540.2C360.8 573.4 529 525.3 476 501.4zM252.5 460C173.8 482 300.4 527.4 400.6 484.5C390.8 480.7 381.4 476.1 372.4 470.7C327.7 479.2 307 479.8 266.4 475.2C232.9 471.4 252.5 460 252.5 460zM432.3 557.2C353.6 572 256.5 570.3 199 560.8C199 560.7 210.8 570.5 271.4 574.4C363.6 580.3 505.2 571.1 508.5 527.5C508.5 527.5 502.1 544 432.3 557.2zM388.7 417C329.5 428.4 295.2 428.1 251.9 423.6C218.4 420.1 240.3 403.9 240.3 403.9C153.5 432.7 288.5 465.3 409.8 429.8C402 427 394.8 422.7 388.7 417z" />
                                            </svg>
                                        </div>
                                        <span>Java</span>
                                    </div>

                                    <div class="technology-item">
                                        <div class="technology-icon-svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                                <path
                                                    d="M116.948 97.807c-6.863-.187-12.104.452-16.585 2.341-1.273.537-3.305.552-3.513 2.147.7.733.809 1.829 1.365 2.731 1.07 1.73 2.876 4.052 4.488 5.268 1.762 1.33 3.577 2.751 5.465 3.902 3.358 2.047 7.107 3.217 10.34 5.268 1.906 1.21 3.799 2.733 5.658 4.097.92.675 1.537 1.724 2.732 2.147v-.194c-.628-.8-.79-1.898-1.366-2.733l-2.537-2.537c-2.48-3.292-5.629-6.184-8.976-8.585-2.669-1.916-8.642-4.504-9.755-7.609l-.195-.195c1.892-.214 4.107-.898 5.854-1.367 2.934-.786 5.556-.583 8.585-1.365l4.097-1.171v-.78c-1.531-1.571-2.623-3.651-4.292-5.073-4.37-3.72-9.138-7.437-14.048-10.537-2.724-1.718-6.089-2.835-8.976-4.292-.971-.491-2.677-.746-3.318-1.562-1.517-1.932-2.342-4.382-3.511-6.633-2.449-4.717-4.854-9.868-7.024-14.831-1.48-3.384-2.447-6.72-4.293-9.756-8.86-14.567-18.396-23.358-33.169-32-3.144-1.838-6.929-2.563-10.929-3.513-2.145-.129-4.292-.26-6.438-.391-1.311-.546-2.673-2.149-3.902-2.927C17.811 4.565 5.257-2.16 1.633 6.682c-2.289 5.581 3.421 11.025 5.462 13.854 1.434 1.982 3.269 4.207 4.293 6.438.674 1.467.79 2.938 1.367 4.489 1.417 3.822 2.652 7.98 4.487 11.511.927 1.788 1.949 3.67 3.122 5.268.718.981 1.951 1.413 2.145 2.927-1.204 1.686-1.273 4.304-1.95 6.44-3.05 9.615-1.899 21.567 2.537 28.683 1.36 2.186 4.567 6.871 8.975 5.073 3.856-1.57 2.995-6.438 4.098-10.732.249-.973.096-1.689.585-2.341v.195l3.513 7.024c2.6 4.187 7.212 8.562 11.122 11.514 2.027 1.531 3.623 4.177 6.244 5.073v-.196h-.195c-.508-.791-1.303-1.119-1.951-1.755-1.527-1.497-3.225-3.358-4.487-5.073-3.556-4.827-6.698-10.11-9.561-15.609-1.368-2.627-2.557-5.523-3.709-8.196-.444-1.03-.438-2.589-1.364-3.122-1.263 1.958-3.122 3.542-4.098 5.854-1.561 3.696-1.762 8.204-2.341 12.878-.342.122-.19.038-.391.194-2.718-.655-3.672-3.452-4.683-5.853-2.554-6.07-3.029-15.842-.781-22.829.582-1.809 3.21-7.501 2.146-9.172-.508-1.666-2.184-2.63-3.121-3.903-1.161-1.574-2.319-3.646-3.124-5.464-2.09-4.731-3.066-10.044-5.267-14.828-1.053-2.287-2.832-4.602-4.293-6.634-1.617-2.253-3.429-3.912-4.683-6.635-.446-.968-1.051-2.518-.391-3.513.21-.671.508-.951 1.171-1.17 1.132-.873 4.284.29 5.462.779 3.129 1.3 5.741 2.538 8.392 4.294 1.271.844 2.559 2.475 4.097 2.927h1.756c2.747.631 5.824.195 8.391.975 4.536 1.378 8.601 3.523 12.292 5.854 11.246 7.102 20.442 17.21 26.732 29.269 1.012 1.942 1.45 3.794 2.341 5.854 1.798 4.153 4.063 8.426 5.852 12.488 1.786 4.052 3.526 8.141 6.05 11.513 1.327 1.772 6.451 2.723 8.781 3.708 1.632.689 4.307 1.409 5.854 2.34 2.953 1.782 5.815 3.903 8.586 5.855 1.383.975 5.64 3.116 5.852 4.879zM29.729 23.466c-1.431-.027-2.443.156-3.513.389v.195h.195c.683 1.402 1.888 2.306 2.731 3.513.65 1.367 1.301 2.732 1.952 4.097l.194-.193c1.209-.853 1.762-2.214 1.755-4.294-.484-.509-.555-1.147-.975-1.755-.556-.811-1.635-1.272-2.339-1.952z" />
                                            </svg>
                                        </div>
                                        <span>MySQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ========= frontend ====== --}}
                    <div class="col-md-6">
                        <div class="contribution-card h-100">
                            <h4>Frontend</h4>
                            <ul>
                                <li>Desarrollo del panel administrativo.</li>
                                <li>Interfaz CRUD para materiales.</li>
                                <li>Interfaz de login responsiva.</li>
                            </ul>

                            {{-- ========= tecnologías frontend ====== --}}
                            <div class="contribution-technologies">
                                <span class="contribution-technologies-label">
                                    Tecnologías
                                </span>

                                <div class="technology-list">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ========= capturas del proyecto ====== --}}
        <div class="row justify-content-center mt-5">
            <div class="col-lg-11">
                <h3 class="project-section-title text-center"> Capturas del proyecto </h3>
                <p class="project-section-description text-center mb-4">
                    Algunas vistas del sistema desarrollado durante el proyecto.
                </p>
                <div id="ecoscanCarousel" class="carousel slide" data-bs-ride="false">
                    <div class="carousel-inner rounded-4 overflow-hidden">
                        {{-- ========= login ====== --}}
                        <div class="carousel-item active">
                            <img src="{{ asset('images/projects/ecoscan/login-ecoscanadmin.png') }}"
                                class="d-block w-100 ecoscan-carousel-image"
                                alt="Pantalla de inicio de sesión de ecoScan">
                            <div class="carousel-caption">
                                <h5>Inicio de sesión</h5>
                            </div>
                        </div>

                        {{-- ========= panel administrativo ====== --}}
                        <div class="carousel-item">
                            <img src="{{ asset('images/projects/ecoscan/dashboard.png') }}"
                                class="d-block w-100 ecoscan-carousel-image" alt="Panel administrativo de ecoScan">
                            <div class="carousel-caption">
                                <h5>Panel administrativo</h5>
                            </div>
                        </div>

                        {{-- ========= materiales ====== --}}
                        <div class="carousel-item">
                            <img src="{{ asset('images/projects/ecoscan/gestion-materiales.png') }}"
                                class="d-block w-100 ecoscan-carousel-image" alt="Gestión de materiales de ecoScan">
                            <div class="carousel-caption">
                                <h5>Gestión de materiales</h5>
                            </div>
                        </div>

                        {{-- ========= crear material ====== --}}
                        <div class="carousel-item">
                            <img src="{{ asset('images/projects/ecoscan/crear-material.png') }}"
                                class="d-block w-100 ecoscan-carousel-image" alt="Formulario de materiales de ecoScan">
                            <div class="carousel-caption">
                                <h5>CRUD de materiales</h5>
                            </div>
                        </div>

                        {{-- ========= escaneo ====== --}}
                        <div class="carousel-item">
                            <img src="{{ asset('images/projects/ecoscan/escaneo-residuo.png') }}"
                                class="d-block w-100 ecoscan-carousel-image"
                                alt="Reconocimiento de residuos en ecoScan">
                            <div class="carousel-caption">
                                <h5>Escaneo de residuos</h5>
                            </div>
                        </div>

                        {{-- ========= resultado ====== --}}
                        <div class="carousel-item">
                            <img src="{{ asset('images/projects/ecoscan/resultado-reconocimiento.png') }}"
                                class="d-block w-100 ecoscan-carousel-image"
                                alt="Resultado del reconocimiento de residuos">
                            <div class="carousel-caption">
                                <h5>Resultado del reconocimiento</h5>
                            </div>
                        </div>

                        {{-- ========= mapa ====== --}}
                        <div class="carousel-item">
                            <img src="{{ asset('images/projects/ecoscan/mapa-recicladoras.png') }}"
                                class="d-block w-100 ecoscan-carousel-image"
                                alt="Mapa de centros de reciclaje de ecoScan">
                            <div class="carousel-caption">
                                <h5>Centros de reciclaje</h5>
                            </div>
                        </div>

                    </div>

                    {{-- ========= controles del carrusel ====== --}}
                    <button class="carousel-control-prev" type="button" data-bs-target="#ecoscanCarousel"
                        data-bs-slide="prev" aria-label="Imagen anterior">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#ecoscanCarousel"
                        data-bs-slide="next" aria-label="Imagen siguiente">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                    {{-- ========= indicadores ====== --}}
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#ecoscanCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Ir a inicio de sesión"></button>
                        <button type="button" data-bs-target="#ecoscanCarousel" data-bs-slide-to="1"
                            aria-label="Ir a panel administrativo"></button>
                        <button type="button" data-bs-target="#ecoscanCarousel" data-bs-slide-to="2"
                            aria-label="Ir a materiales"></button>
                        <button type="button" data-bs-target="#ecoscanCarousel" data-bs-slide-to="3"
                            aria-label="Ir a formulario de materiales"></button>
                        <button type="button" data-bs-target="#ecoscanCarousel" data-bs-slide-to="4"
                            aria-label="Ir a reconocimiento"></button>
                        <button type="button" data-bs-target="#ecoscanCarousel" data-bs-slide-to="5"
                            aria-label="Ir a resultado"> </button>
                        <button type="button" data-bs-target="#ecoscanCarousel" data-bs-slide-to="6"
                            aria-label="Ir a mapa"> </button>
                    </div>
                </div>
            </div>
        </div>


        {{-- ========= repositorios ====== --}}
        <div class="project-detail-links">

            <a href="https://github.com/mooniewin/ecoScan" target="_blank" rel="noopener noreferrer"
                class="project-detail-links btn-portfolio">
                <i class="bi bi-github"></i>
                Backend
            </a>

            <a href="https://github.com/mooniewin/ecoScanAdmin" target="_blank" rel="noopener noreferrer"
                class="project-detail-links btn-portfolio-outline">
                <i class="bi bi-github"></i>
                Frontend
            </a>

        </div>

    </div>

</section>

@endsection
@extends('layouts.app')

@section('content')

    <!-- ========= presentación ====== -->
    <section id="inicio">
        <div class="container">

            <h1> Montserrat Martínez </h1>
            <h2> Desarrolladora backend en formación </h2>

            <p>
                Desarrolladora backend en formación con experiencia
                en desarrollo de aplicaciones web utilizando Laravel,
                Blade, Tailwind CSS y MySQL.
            </p>

            <a href="#proyectos" class="btn btn-primary">
                Ver proyectos
            </a>

            <a href="#sobre-mi" class="btn btn-outline-primary">
                Sobre mí
            </a>

        </div>
    </section>


    <!-- ========= experiencia profesional ====== -->
    <section id="experiencia">
        <div class="container">

            <h2> Experiencia profesional </h2>
            <h3> SaaS para la gestión centralizada de marketplaces </h3>

            <p> Plataforma SaaS para la gestión centralizada de marketplaces.</p>

            <p>
                <strong>Tecnologías:</strong>
                Laravel · PHP · MySQL · APIs · Webhooks
            </p>

            <ul>
                <li>Integraciones con múltiples plataformas</li>
                <li>Procesamiento asíncrono</li>
                <li>Arquitectura basada en servicios</li>
            </ul>

            <a href="{{ url('/experiencia/saas') }}" class="btn btn-primary">
                Ver experiencia
            </a>

        </div>
    </section>


    <!-- ========= sobre mí ====== -->
    <section id="sobre-mi">
        <div class="container">
            <h2> Sobre mí </h2>

            <p>
                Actualmente cuento con un TSU en Desarrollo de Software
                Multiplataforma y me encuentro cursando el 7.º cuatrimestre
                de la Ingeniería en Desarrollo de Software. Tengo experiencia
                en el desarrollo de aplicaciones web y actualmente mi enfoque
                está principalmente en backend.
            </p>

            <p>
                Mi objetivo es continuar desarrollándome hasta alcanzar un
                perfil fullstack. Me interesa crear soluciones funcionales,
                escalables y mantenibles, además de disfrutar el trabajo
                colaborativo y mantener un aprendizaje continuo.
            </p>
        </div>
    </section>


    <!-- ========= stack tecnológico ====== -->
    <section id="tecnologias">
        <div class="container">
            <h2> Stack tecnológico </h2>

            <h3>Backend</h3>
            <p> PHP · Laravel 12 · MVC · REST APIs · Webhooks · Middleware </p>

            <h3>Frontend</h3>
            <p> Blade Templates · Tailwind CSS · Bootstrap · JavaScript </p>

            <h3>Bases de datos</h3>
            <p> MySQL · SQL </p>

            <h3>Herramientas</h3>
            <p> Git · GitHub · Postman · VS Code </p>
        </div>
    </section>


    <!-- ========= proyectos ====== -->
    <section id="proyectos">
        <div class="container">
            <h2> Proyectos </h2>

            <div class="row g-4">
                <div class="col-md-6">
                    <x-project-card
                        image="/images/projects/ecoscan.png"
                        title="ecoScan"
                        type="Proyecto colaborativo"
                        description="Plataforma web para gestionar centros de reciclaje, materiales y horarios de recolección."
                        role="Backend + Frontend"
                        :technologies="['Java', 'API REST', 'JWT', 'GPT-4o mini']"
                        url="/projects/ecoscan.blade.php"
                    />
                </div>

                <div class="col-md-6">
                    <x-project-card
                        image="/images/projects/mcchicken.png"
                        title="McChicken"
                        type="Proyecto académico"
                        description="Sistema web para gestionar sucursales y empleados mediante servicios REST."
                        :technologies="['Java', 'API REST']"
                        url="/projects/mcchicken.blade.php"
                    />
                </div>

                <div class="col-md-6">
                    <x-project-card
                        image="/images/projects/recetitas-moon.png"
                        title="Recetitas Moon"
                        type="Proyecto académico"
                        description="Aplicación web que consume una API externa para consultar y explorar recetas dinámicamente."
                        :technologies="['HTML', 'JavaScript', 'CSS']"
                        url="/projects/recetitas-moon.blade.php"
                    />
                </div>

                <div class="col-md-6">
                    <x-project-card
                        image="/images/projects/bank-simulator.png"
                        title="Bank Simulator"
                        type="Proyecto académico"
                        description="Simulador bancario con operaciones de depósito, retiro e historial de transacciones."
                        :technologies="['HTML', 'JavaScript', 'CSS']"
                        url="/projects/bank-simulator.blade.php"
                    />
                </div>

            </div>

        </div>
    </section>


    <!-- ========= contacto ====== -->
    <section id="contacto">
        <div class="container">

            <h2> Contacto </h2>
            <p> ¿Desarrollamos algo increíble? </p>

            <p>
                <strong>Correo:</strong>
                emmc.0702@gmail.com
            </p>

            <p>
                <strong>WhatsApp:</strong>
                @moonie_win
            </p>

            <a
                href="https://github.com/mooniewin"
                target="_blank"
                rel="noopener noreferrer"
            >
                GitHub
            </a>

            <a
                href="https://www.linkedin.com/in/montserrat-mart%C3%ADnez"
                target="_blank"
                rel="noopener noreferrer"
            >
                LinkedIn
            </a>

        </div>
    </section>

@endsection
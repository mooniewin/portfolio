@extends('layouts.app')
@section('title', 'Experiencia profesional | Plataforma SaaS')
@section('content')

    {{-- ========= encabezado de la experiencia ====== --}}
    <section class="project-detail-section">
        <div class="container">
            <div class="project-detail-header text-center">
                <span class="project-detail-label">
                    Proyecto profesional · Estadías
                </span>

                <h1>
                    Plataforma SaaS para la gestión centralizada de marketplaces
                </h1>

                <p class="project-detail-description mx-auto">
                    Desarrollo desde cero de una plataforma SaaS orientada a
                    centralizar y sincronizar pedidos provenientes de múltiples
                    plataformas comerciales.
                </p>
            </div>
        </div>
    </section>

    {{-- ========= el proyecto ====== --}}
    <section class="project-detail-section">
        <div class="container">
            <div class="row align-items-center g-5">
                {{-- descripción --}}
                <div class="col-lg-5">

                    <span class="project-detail-label">
                        El proyecto
                    </span>

                    <h2>
                        Una plataforma para centralizar la operación
                    </h2>

                    <p>
                        La plataforma fue desarrollada para centralizar la
                        información de pedidos provenientes de diferentes
                        marketplaces en un único sistema.
                    </p>

                    <p>
                        El objetivo fue facilitar la administración de pedidos,
                        productos, clientes y usuarios desde una misma
                        plataforma, reduciendo la dependencia de sistemas
                        independientes.
                    </p>

                    <small class="project-data-notice">
                        <i class="bi bi-info-circle"></i>
                        Los datos mostrados en el sistema son de prueba.
                    </small>
                </div>

                {{-- video del sistema --}}
                <div class="col-lg-7">
                    <div class="project-video">
                        <video class="w-100" autoplay muted loop playsinline controls>
                            <source src="{{ asset('images/experience/preview_dashboard.mp4') }}" type="video/mp4" >
                            Tu navegador no puede reproducir este video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========= participación y tecnologías ====== --}}
    <section class="project-detail-section">
        <div class="container">
            <div class="row g-4">
                {{-- mi participación --}}
                <div class="col-lg-6">
                    <div class="project-info-card h-100">
                        <div class="project-info-card-header">
                            <div class="project-info-icon">
                                <i class="bi bi-person-workspace"></i>
                            </div>

                            <div>
                                <span class="project-detail-label">
                                    Mi participación
                                </span>

                                <h2>
                                    Desarrollo de principio a fin
                                </h2>
                            </div>
                        </div>

                        <p>
                            Fui responsable del desarrollo de la plataforma
                            desde cero, participando en las diferentes etapas
                            del proyecto.
                        </p>

                        <ul class="project-detail-list">
                            <li>
                                <i class="bi bi-check2"></i>
                                Análisis de requerimientos.
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Diseño de arquitectura y base de datos.
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Desarrollo backend y frontend.
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Integración con APIs externas.
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Procesamiento asíncrono y automatización.
                            </li>

                            <li>
                                <i class="bi bi-check2"></i>
                                Pruebas y documentación técnica.
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- tecnologías --}}
                <div class="col-lg-6">
                    <div class="project-info-card h-100">
                        <div class="project-info-card-header">
                            <div class="project-info-icon">
                                <i class="bi bi-code-slash"></i>
                            </div>

                            <div>
                                <span class="project-detail-label">
                                    Tecnologías
                                </span>

                                <h2>
                                    Stack utilizado
                                </h2>
                            </div>
                        </div>

                        <div class="project-tech-grid">
                            <div class="project-tech-item">
                                <i class="bi bi-box"></i>
                                <span>Laravel</span>
                            </div>

                            <div class="project-tech-item">
                                <span class="project-tech-emoji">🐘</span>
                                <span>PHP</span>
                            </div>

                            <div class="project-tech-item">
                                <i class="bi bi-database"></i>
                                <span>MariaDB</span>
                            </div>

                            <div class="project-tech-item">
                                <i class="bi bi-filetype-css"></i>
                                <span>Tailwind CSS</span>
                            </div>

                            <div class="project-tech-item">
                                <i class="bi bi-braces"></i>
                                <span>REST API</span>
                            </div>

                            <div class="project-tech-item">
                                <i class="bi bi-key"></i>
                                <span>OAuth 2.0</span>
                            </div>

                            <div class="project-tech-item">
                                <i class="bi bi-broadcast"></i>
                                <span>Webhooks</span>
                            </div>

                            <div class="project-tech-item">
                                <i class="bi bi-shield-lock"></i>
                                <span>JWT</span>
                            </div>

                            <div class="project-tech-item">
                                <i class="bi bi-hourglass-split"></i>
                                <span>Queues</span>
                            </div>

                            <div class="project-tech-item">
                                <i class="bi bi-clock-history"></i>
                                <span>Cron Jobs</span>
                            </div>

                            <div class="project-tech-item">
                                <i class="bi bi-cloud"></i>
                                <span>cPanel</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========= arquitectura ====== --}}
    <section class="project-detail-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="project-detail-label">
                    Arquitectura
                </span>

                <h2>
                    Una arquitectura pensada para crecer
                </h2>

                <p class="project-detail-description mx-auto">
                    El sistema fue diseñado separando la recepción de eventos,
                    el procesamiento de pedidos y las integraciones con
                    plataformas externas.
                </p>
            </div>

            <div class="row align-items-center g-5">
                {{-- diagrama --}}
                <div class="col-lg-7">
                    <div class="project-diagram">
                        {{-- reemplazar por el diagrama de arquitectura --}}
                        <img
                            src="{{ asset('images/experience/arquitectura.png') }}"
                            alt="Diagrama de arquitectura de la plataforma SaaS"
                            class="img-fluid"
                        >
                    </div>
                </div>

                {{-- explicación --}}
                <div class="col-lg-5">
                    <div class="project-detail-item">
                        <div class="project-feature-icon">
                            <i class="bi bi-diagram-3"></i>
                        </div>

                        <h3>
                            Separación de responsabilidades
                        </h3>

                        <p>
                            La arquitectura separa los componentes encargados
                            de recibir solicitudes, procesar pedidos y
                            comunicarse con las plataformas externas.
                        </p>
                    </div>

                    <div class="project-detail-item mt-4">
                        <div class="project-feature-icon">
                            <i class="bi bi-puzzle"></i>
                        </div>

                        <h3>
                            Integraciones desacopladas
                        </h3>

                        <p>
                            Cada marketplace mantiene su propia implementación,
                            permitiendo incorporar nuevas plataformas sin
                            modificar el núcleo del sistema.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========= funcionalidades ====== --}}
    <section class="project-detail-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="project-detail-label">
                    Funcionalidades
                </span>

                <h2>
                    Principales módulos del sistema
                </h2>
            </div>

            <div class="row g-4">
                {{-- autenticación --}}
                <div class="col-md-6 col-lg-4">
                    <div class="project-feature-card h-100">
                        <div class="project-feature-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>

                        <h3>
                            Autenticación y usuarios
                        </h3>

                        <p>
                            Gestión de usuarios, roles y permisos para
                            controlar el acceso a las funcionalidades de
                            la plataforma.
                        </p>
                    </div>
                </div>

                {{-- pedidos --}}
                <div class="col-md-6 col-lg-4">
                    <div class="project-feature-card h-100">
                        <div class="project-feature-icon">
                            <i class="bi bi-box-seam"></i>
                        </div>

                        <h3>
                            Gestión de pedidos
                        </h3>

                        <p>
                            Centralización de pedidos, detalles, estados e
                            historial de cambios provenientes de los
                            marketplaces.
                        </p>
                    </div>
                </div>

                {{-- dashboard --}}
                <div class="col-md-6 col-lg-4">
                    <div class="project-feature-card h-100">
                        <div class="project-feature-icon">
                            <i class="bi bi-speedometer2"></i>
                        </div>

                        <h3>
                            Dashboard
                        </h3>

                        <p>
                            Visualización de información operativa y métricas
                            relevantes desde una interfaz centralizada.
                        </p>
                    </div>
                </div>

                {{-- integraciones --}}
                <div class="col-md-6 col-lg-4">
                    <div class="project-feature-card h-100">
                        <div class="project-feature-icon">
                            <i class="bi bi-plug"></i>
                        </div>

                        <h3>
                            Integraciones
                        </h3>

                        <p>
                            Comunicación con plataformas externas mediante
                            APIs REST y mecanismos de notificación basados
                            en eventos.
                        </p>
                    </div>
                </div>

                {{-- procesamiento --}}
                <div class="col-md-6 col-lg-4">
                    <div class="project-feature-card h-100">
                        <div class="project-feature-icon">
                            <i class="bi bi-lightning-charge"></i>
                        </div>

                        <h3>
                            Procesamiento asíncrono
                        </h3>

                        <p>
                            Procesamiento de eventos mediante Jobs y colas
                            para desacoplar la recepción de información de
                            su procesamiento.
                        </p>
                    </div>
                </div>

                {{-- automatización --}}
                <div class="col-md-6 col-lg-4">
                    <div class="project-feature-card h-100">
                        <div class="project-feature-icon">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>

                        <h3>
                            Automatización
                        </h3>

                        <p>
                            Ejecución automatizada de procesos mediante
                            Cron Jobs para mantener disponibles las
                            integraciones.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========= integraciones ====== --}}
    <section class="project-detail-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="project-detail-label">
                    Integraciones
                </span>

                <h2>
                    Conexión con marketplaces
                </h2>

                <p class="project-detail-description mx-auto">
                    La plataforma fue preparada para trabajar con diferentes
                    marketplaces mediante mecanismos de autenticación,
                    APIs y webhooks.
                </p>
            </div>

            <div class="row g-4">
                {{-- mercado libre --}}
                <div class="col-lg-6">
                    <div class="integration-card">
                        <div class="integration-card-header">
                            <div class="integration-logo">  🛒 </div>
                            <div>
                                <h3>Mercado Libre</h3>
                                <span> Integración funcional </span>
                            </div>
                        </div>

                        <div class="integration-flow">
                            <div class="integration-flow-item">
                                <i class="bi bi-key"></i>
                                <span>OAuth 2.0</span>
                            </div>

                            <div class="integration-flow-item">
                                <i class="bi bi-braces"></i>
                                <span>REST API</span>
                            </div>

                            <div class="integration-flow-item">
                                <i class="bi bi-broadcast"></i>
                                <span>Webhooks</span>
                            </div>

                            <div class="integration-flow-item">
                                <i class="bi bi-shield-check"></i>
                                <span>Firma</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- tiktok shop --}}
                <div class="col-lg-6">
                    <div class="integration-card">
                        <div class="integration-card-header">
                            <div class="integration-logo"> 🎵 </div>
                            <div>
                                <h3>TikTok Shop</h3>
                                <span> Integración funcional </span>
                            </div>
                        </div>

                        <div class="integration-flow">
                            <div class="integration-flow-item">
                                <i class="bi bi-key"></i>
                                <span>OAuth 2.0</span>
                            </div>

                            <div class="integration-flow-item">
                                <i class="bi bi-braces"></i>
                                <span>REST API</span>
                            </div>

                            <div class="integration-flow-item">
                                <i class="bi bi-broadcast"></i>
                                <span>Webhooks</span>
                            </div>

                            <div class="integration-flow-item">
                                <i class="bi bi-shield-lock"></i>
                                <span>HMAC-SHA256</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- futuras integraciones --}}
            <div class="future-integrations mt-4">
                <div class="future-integrations-icon">
                    <i class="bi bi-plus-circle"></i>
                </div>

                <div>
                    <h3>
                        Arquitectura preparada para nuevas integraciones
                    </h3>

                    <p>
                        También se analizaron las bases técnicas necesarias
                        para futuras integraciones con otras plataformas.
                    </p>

                    <div class="d-flex flex-wrap gap-2">
                        <span class="project-tech-badge"> Amazon </span>
                        <span class="project-tech-badge"> Shein </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========= procesamiento asíncrono ====== --}}
    <section class="project-detail-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <span class="project-detail-label">
                        Procesamiento
                    </span>

                    <h2>
                        Eventos procesados de forma asíncrona
                    </h2>

                    <p>
                        Los eventos recibidos mediante webhooks son validados,
                        registrados y enviados a una cola para posteriormente
                        ser procesados por los servicios correspondientes.
                    </p>

                    <p>
                        Esto permite liberar rápidamente la conexión con el
                        marketplace y realizar el procesamiento sin bloquear
                        la petición HTTP.
                    </p>
                </div>

                <div class="col-lg-7">
                    <div class="project-diagram">
                        {{-- reemplazar por el diagrama del flujo de webhooks --}}
                        <img
                            src="{{ asset('images/experience/procesamiento.png') }}"
                            alt="Diagrama del procesamiento asíncrono de pedidos"
                            class="img-fluid"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========= retos técnicos ====== --}}
    <section class="project-detail-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="project-detail-label"> Desarrollo </span>
                <h2> Algunos retos técnicos </h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="project-feature-card h-100">
                        <div class="project-feature-icon">
                            <i class="bi bi-lightning-charge"></i>
                        </div>

                        <h3>
                            Procesamiento asíncrono
                        </h3>

                        <p>
                            Diseñar un flujo capaz de recibir eventos externos
                            sin bloquear la petición HTTP y procesarlos
                            posteriormente.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="project-feature-card h-100">
                        <div class="project-feature-icon">
                            <i class="bi bi-diagram-3"></i>
                        </div>

                        <h3>
                            Diferencias entre APIs
                        </h3>

                        <p>
                            Cada marketplace cuenta con diferentes mecanismos
                            de autenticación, estructuras de datos y formas
                            de comunicación.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="project-feature-card h-100">
                        <div class="project-feature-icon">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>

                        <h3>
                            Renovación de credenciales
                        </h3>

                        <p>
                            Automatización de la renovación de tokens para
                            mantener disponibles las conexiones con las
                            plataformas externas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========= resultados ====== --}}
    <section class="project-detail-section">
        <div class="container">
            <div class="text-center mb-5">
                <span class="project-detail-label">
                    Resultado
                </span>

                <h2>
                    Una solución desarrollada de principio a fin
                </h2>

                <p class="project-detail-description mx-auto">
                    El proyecto permitió construir una plataforma funcional
                    para centralizar la información de pedidos y establecer
                    una base arquitectónica preparada para futuras
                    integraciones.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-6 col-lg-3">
                    <div class="project-result-card">
                        <div class="project-result-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>

                        <strong>
                            Desde cero
                        </strong>

                        <span>
                            Análisis, diseño, desarrollo y validación.
                        </span>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="project-result-card">
                        <div class="project-result-icon">
                            <i class="bi bi-plug"></i>
                        </div>

                        <strong>
                            2
                        </strong>

                        <span>
                            Integraciones funcionales.
                        </span>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="project-result-card">
                        <div class="project-result-icon">
                            <i class="bi bi-database"></i>
                        </div>

                        <strong>
                            29
                        </strong>

                        <span>
                            Tablas en el modelo de datos.
                        </span>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="project-result-card">
                        <div class="project-result-icon">
                            <i class="bi bi-check2-circle"></i>
                        </div>

                        <strong>
                            9
                        </strong>

                        <span>
                            Módulos principales validados.
                        </span>
                    </div>
                </div>
            </div>

            {{-- cierre visual --}}
            <div class="project-result-summary mt-5">
                <i class="bi bi-check-circle"></i>

                <p>
                    El resultado fue una solución funcional que integra
                    diferentes servicios y establece una base preparada
                    para continuar incorporando marketplaces.
                </p>
            </div>
        </div>
    </section>

    {{-- ========= informe técnico ====== --}}
    <section class="project-detail-section">
        <div class="container">
            <div class="project-report">
                <div class="project-report-icon">
                    <i class="bi bi-file-earmark-text"></i>
                </div>

                <div class="project-report-content">
                    <span class="project-detail-label">
                        Documentación
                    </span>

                    <h2>
                        ¿Quieres conocer más sobre el desarrollo?
                    </h2>

                    <p>
                        Si deseas conocer con mayor detalle el proceso de análisis,
                        diseño, desarrollo, integración y validación de la
                        plataforma, te invito a consultar mi Informe Final de
                        Estadía.
                    </p>

                    <a
                        href="{{ asset('documents/informe-estadia.pdf') }}"
                        class="btn btn-portfolio"
                        download
                    >
                        <i class="bi bi-download"></i>
                        Descargar informe
                    </a>

                </div>

            </div>

        </div>
    </section>

@endsection
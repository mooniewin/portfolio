{{-- muestra un resumen de la experiencia profesional y enlaza a su detalle --}}
<section id="experiencia" class="portfolio-section experience-section">
    <div class="container">
        <div class="section-heading">
            <span class="section-label">
                EXPERIENCIA PROFESIONAL
            </span>

            <h2>
                Desarrollo de soluciones web empresariales
            </h2>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="experience-image">
                    <img src="images/experience/preview.png" alt="Vista previa de la plataforma SaaS">
                </div>
            </div>

            <div class="col-lg-6">
                <span class="experience-type">
                    Proyecto profesional · Estadías
                </span>

                <h3>
                    Plataforma SaaS para la gestión centralizada de marketplaces
                </h3>

                <p class="experience-description">
                    Desarrollé desde cero una solución SaaS empresarial para centralizar y sincronizar pedidos provenientes de múltiples plataformas comerciales.
                </p>

                <div class="experience-technologies">
                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>APIs</span>
                    <span>Webhooks</span>
                </div>

                <ul class="experience-features">
                    <li> Integraciones con múltiples plataformas </li>
                    <li> Procesamiento asíncrono </li>
                    <li> Arquitectura basada en servicios </li>
                </ul>

                <a href="{{ route('experience.saas')}}" class="btn-portfolio" >
                    Ver experiencia
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
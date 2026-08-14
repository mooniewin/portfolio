{{-- muestra el pie de página y enlaces principales --}}

<footer class="portfolio-footer">

    <div class="container">

        <div class="row g-4">

            <div class="col-md-8">

                <a
                    href="{{ url('/') }}"
                    class="footer-brand"
                >
                    moon.dev
                </a>

                <p>
                    Desarrolladora backend en formación.
                </p>

            </div>

            <div class="col-md-4">

                <h3>
                    Sitemap
                </h3>

                <ul class="footer-links">

                    <li>
                        <a href="#inicio">Inicio</a>
                    </li>

                    <li>
                        <a href="#experiencia">Experiencia</a>
                    </li>

                    <li>
                        <a href="#sobre-mi">Sobre mí</a>
                    </li>

                    <li>
                        <a href="#tecnologias">Tecnologías</a>
                    </li>

                    <li>
                        <a href="#proyectos">Proyectos</a>
                    </li>

                    <li>
                        <a href="#contacto">Contacto</a>
                    </li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <span>
                © {{ date('Y') }} Montserrat Martínez.
                Todos los derechos reservados.
            </span>

        </div>

    </div>

</footer>
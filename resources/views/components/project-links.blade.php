<div class="project-detail-links">

    @if($github ?? null)

        <a
            href="{{ $github }}"
            target="_blank"
            rel="noopener noreferrer"
            class="btn btn-primary"
        >
            <i class="bi bi-github"></i>
            GitHub
        </a>

    @endif

    @if($demo ?? null)

        <a
            href="{{ $demo }}"
            target="_blank"
            rel="noopener noreferrer"
            class="btn btn-outline-primary"
        >
            <i class="bi bi-box-arrow-up-right"></i>
            Ver proyecto
        </a>

    @endif

</div>
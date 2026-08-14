{{-- muestra la información resumida de un proyecto --}}

<div class="project-card">

    <div class="project-image">
        <span>
            {{ $title }}
        </span>
    </div>

    <div class="project-content">

        <span class="project-type">
            {{ $type }}
        </span>

        <h3>
            {{ $title }}
        </h3>

        <p>
            {{ $description }}
        </p>

        @if ($role)
            <span class="project-role">
                Rol: {{ $role }}
            </span>
        @endif

        <span class="project-technologies">
            {{ $technologies }}
        </span>

        <a
            href="#"
            class="project-link"
        >
            Ver proyecto →
        </a>

    </div>

</div>
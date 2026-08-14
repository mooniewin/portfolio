<div class="card project-card h-100">

    <img src="{{ $image }}" class="card-img-top" alt="{{ $title }}" >

    <div class="card-body">

        <span class="project-type">
            {{ $type }}
        </span>

        <h3 class="card-title mt-2">
            {{ $title }}
        </h3>

        <p class="card-text">
            {{ $description }}
        </p>

        @if (!empty($role))
            <p class="project-role">
                <strong>Rol:</strong> {{ $role }}
            </p>
        @endif

        <div class="project-technologies">
            @foreach ($technologies as $technology)
                <span class="technology-tag">
                    {{ $technology }}
                </span>
            @endforeach
        </div>

        <a href="{{ $url }}" class="btn btn-primary mt-3">
            Ver proyecto
        </a>

    </div>

</div>
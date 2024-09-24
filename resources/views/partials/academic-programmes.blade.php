<!-- Academic Programs Section -->
<section class="academic-programs container my-5">
    <h2>Academic Programs</h2>
    <div class="row">
        @foreach($programs as $program)
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="program-box p-3">
                    <!-- Program Name -->
                    <h3>{{ $program->program_name }}</h3>
                    <!-- Program Description -->
                    <p>{{ $program->program_description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>

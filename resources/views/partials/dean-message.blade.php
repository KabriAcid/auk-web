
<section class="dean-message">
    <div class="dean-content">
        <div class="dean-image-container">
            <img src="{{ asset('storage/' . $college->dean_image) }}" alt="{{ $college->dean_name }}" class="dean-image">
        </div>
        <div class="dean-text">
            <h2>Dean Welcome Message</h2>
            <p>{{ $college->dean_welcome_message }}</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </div>
</section>

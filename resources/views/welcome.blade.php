<div class="card">
    <img src="{{ asset($post->featured_image) }}" alt="{{ $post->title }}" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">
            <small class="text-muted">
                By: {{ $post->user->name }}
            </small>
        </p>
    </div>
</div>
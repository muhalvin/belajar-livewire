<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a wire:navigate class="navbar-brand" href="{{ route('/') }}">
            {{ config('app.name') }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <x-nav-link :active="request()->routeIs('/')" :href="route('/')">Home</x-nav-link>
                <x-nav-link :active="request()->routeIs('posts.*')" :href="route('posts.index')">Posts</x-nav-link>

            </ul>
        </div>
    </div>
</nav>

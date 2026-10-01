<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="pink">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            Kelompok 5
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarTop">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTop">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <x-nav-item :href="route('home')" :active="request()->routeIs('home')">
                    Home
                </x-nav-item>

                <x-nav-item :href="route('produk.index')" :active="request()->routeIs('produk.*')">
                    Produk
                </x-nav-item>

                <x-nav-item :href="route('about')" :active="request()->routeIs('about')">
                    About
                </x-nav-item>

            </ul>
        </div>
    </div>
</nav>

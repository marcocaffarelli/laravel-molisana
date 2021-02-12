<header>
    <div class="logo">
        <img src="{{ asset('/img/logo.png') }}" alt="">
    </div>
    <nav>
        <a href="{{ route('home') }}" class="{{Route::currentRouteName() === 'home' ? 'active' : '' }}">HOME</a>
        <a href="{{ route('prodotti') }}" class="{{Route::currentRouteName() === 'prodotti' ? 'active' : '' }}">PRODOTTI</a>
        <a href="{{ route('contatti') }}" class="{{Route::currentRouteName() === 'contatti' ? 'active' : '' }}">CONTATTI</a>
    </nav>
</header>
<header>
    <div class="container">
        <a href="/">
            <img src="/img/logo-vnc-full.svg" alt="VCN logo" class="logo">
        </a>
        <nav id="main-nav" aria-label="Nawigacja główna">
            <ul>
                <li><a href="/rozwiazania/">Rozwiązania</a></li>
                <li><a href="/branze/">Branże</a></li>
                <li><a href="/realizacje/">Realizacje</a></li>
                <li><a href="/kontakt/">Kontakt</a></li>
            </ul>
            <a href="/kontakt/" class="cta nav-cta">Umów rozmowę</a>
        </nav>
        <a href="/kontakt/" class="cta desktop-cta">Umów rozmowę</a>
        <button class="nav-toggle" aria-expanded="false" aria-controls="main-nav" aria-label="Otwórz menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
<script>
(function () {
    var btn = document.querySelector('.nav-toggle');
    var nav = document.getElementById('main-nav');
    btn.addEventListener('click', function () {
        var open = nav.classList.toggle('is-open');
        btn.classList.toggle('is-open', open);
        btn.setAttribute('aria-expanded', open);
        btn.setAttribute('aria-label', open ? 'Zamknij menu' : 'Otwórz menu');
    });
    nav.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            nav.classList.remove('is-open');
            btn.classList.remove('is-open');
            btn.setAttribute('aria-expanded', 'false');
            btn.setAttribute('aria-label', 'Otwórz menu');
        });
    });
}());
</script>
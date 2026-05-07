<?php
$title       = 'Branże - VCN porządkuje logistykę, produkcję, parkingi i więcej';
$description = 'VCN projektuje systemy dla logistyki, produkcji, parkingów, inwestycji budowlanych, centrów handlowych, myjni, HoReCa i ochrony. Wybierz swoją branżę.';

require APP_ROOT . '/components/head.php';
require APP_ROOT . '/components/header.php';
?>
<main>

  <section class="branza-hero">
    <div class="container">
      <nav class="breadcrumb" aria-label="Nawigacja okruszkowa">
        <a href="/">Strona główna</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page">Branże</span>
      </nav>
      <p class="branza-hero__sub">Dla kogo pracujemy</p>
      <h1>Wybierz swoją branżę</h1>
      <p>Porządkujemy procesy w obiektach, w których liczy się kontrola wjazdów, dostęp do stref i dokumentacja zdarzeń. Wybierz branżę, aby zobaczyć jak to robimy.</p>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="branze-grid">

        <a href="/branze/logistyka/" class="branza-card">
          <h2>Logistyka</h2>
          <p>Porządkujemy logistykę od wjazdu pojazdu, przez plac i rampy, po dokumentację zdarzeń i obsługę incydentów.</p>
        </a>

        <a href="/branze/produkcja-przemysl/" class="branza-card">
          <h2>Produkcja i przemysł</h2>
          <p>Porządkujemy dostęp, bezpieczeństwo i kontrolę operacyjną w zakładach produkcyjnych.</p>
        </a>

        <a href="/branze/parkingi-i-nieruchomosci/" class="branza-card">
          <h2>Parkingi i nieruchomości</h2>
          <p>Automatyzujemy wjazdy, dostęp i kontrolę zdarzeń w obiektach nieruchomościowych.</p>
        </a>

        <a href="/branze/inwestycje-budowlane/" class="branza-card">
          <h2>Inwestycje budowlane</h2>
          <p>Porządkujemy dostęp, ruch i zdarzenia na placach budowy — od pierwszego etapu po odbiór końcowy.</p>
        </a>

        <a href="/branze/centra-handlowe/" class="branza-card">
          <h2>Centra handlowe</h2>
          <p>Porządkujemy ruch, dostęp i obsługę zdarzeń tak, aby obiekt działał płynnie i bezpiecznie.</p>
        </a>

        <a href="/branze/myjnie-samochodowe/" class="branza-card">
          <h2>Myjnie samochodowe</h2>
          <p>Automatyzujemy wjazd, nadzór i obsługę zdarzeń — koniec sporów z klientami bez dowodów.</p>
        </a>

        <a href="/branze/horeca/" class="branza-card">
          <h2>HoReCa</h2>
          <p>Porządkujemy dostęp, zdarzenia i zaplecze operacyjne w hotelach i obiektach gastronomicznych.</p>
        </a>

        <a href="/branze/ochrona/" class="branza-card">
          <h2>Ochrona</h2>
          <p>Wspieramy firmy ochroniarskie — porządkujemy wjazdy, zdarzenia i dokumentację interwencji.</p>
        </a>

      </div>
    </div>
  </section>

  <section id="cta-final">
    <div class="container">
      <h2>Nie widzisz swojej branży?</h2>
      <p style="color:rgba(255,255,255,0.8);margin-bottom:2rem;">Realizujemy projekty także w innych obszarach. Napisz nam, a powiemy czy możemy pomóc.</p>
      <a href="/kontakt/" class="cta-primary">Porozmawiajmy</a>
    </div>
  </section>

</main>

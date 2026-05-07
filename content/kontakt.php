<?php
$title       = 'Kontakt - VCN | Umów rozmowę o swoim projekcie';
$description = 'Skontaktuj się z VCN. Opisz swój obiekt i problem, a my odpowiemy jak możemy pomóc. Konsultacja bez zobowiązań.';

require APP_ROOT . '/components/head.php';
require APP_ROOT . '/components/header.php';
?>
<main>

  <section class="branza-hero">
    <div class="container">
      <nav class="breadcrumb" aria-label="Nawigacja okruszkowa">
        <a href="/">Strona główna</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page">Kontakt</span>
      </nav>
      <p class="branza-hero__sub">Porozmawiajmy</p>
      <h1>Chcesz uporządkować procesy w swoim obiekcie?</h1>
      <p>Opisz nam swój obiekt i problem operacyjny. Odpowiemy jak możemy pomóc — bez oferty handlowej na start, bez zobowiązań.</p>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="kontakt-layout">

        <div class="kontakt-form">
          <h2>Napisz do nas</h2>
          <form action="#" method="post" novalidate>
            <div class="form-field">
              <label for="imie">Imię i nazwisko</label>
              <input type="text" id="imie" name="imie" autocomplete="name" required>
            </div>
            <div class="form-field">
              <label for="firma">Firma / obiekt</label>
              <input type="text" id="firma" name="firma" autocomplete="organization">
            </div>
            <div class="form-field">
              <label for="email">Adres e-mail</label>
              <input type="email" id="email" name="email" autocomplete="email" required>
            </div>
            <div class="form-field">
              <label for="telefon">Telefon <span class="optional">(opcjonalnie)</span></label>
              <input type="tel" id="telefon" name="telefon" autocomplete="tel">
            </div>
            <div class="form-field">
              <label for="wiadomosc">Opisz swój obiekt i problem</label>
              <textarea id="wiadomosc" name="wiadomosc" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Wyślij wiadomość</button>
            <p class="form-note">Odpowiadamy w ciągu jednego dnia roboczego.</p>
          </form>
        </div>

        <div class="kontakt-info">
          <h2>Dane kontaktowe</h2>
          <p>VCN<br>
          Systemy kontroli dostępu, awizacji i analityki</p>

          <ul class="contact-details">
            <li>
              <strong>E-mail</strong>
              <a href="mailto:biuro@vcn.pl">biuro@vcn.pl</a>
            </li>
            <li>
              <strong>Telefon</strong>
              <a href="tel:+48000000000">+48 000 000 000</a>
            </li>
          </ul>

          <div class="contact-note">
            <h3>Jak wygląda pierwsza rozmowa?</h3>
            <ol>
              <li>Opisujesz nam obiekt i problem operacyjny</li>
              <li>Oceniamy czy i jak możemy pomóc</li>
              <li>Jeśli jest sens — umawiamy audyt i analizę potrzeb</li>
            </ol>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>

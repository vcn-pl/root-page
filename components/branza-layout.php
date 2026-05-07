<?php
/*
 * Partial: branza-layout.php
 * Renderuje pełną stronę branżową na podstawie zmiennych ustawionych przez plik branży.
 *
 * Wymagane zmienne:
 *   $title, $description
 *   $hero_headline, $hero_subheadline
 *   $problems   — array of strings
 *   $process    — array of ['step' => int, 'title' => string, 'points' => string[]]
 *   $systems    — array of strings (grupy funkcjonalne)
 *   $effects    — array of strings
 *   $scenario   — string (mini-scenariusz, bez nazw klientów)
 *   $cta_text   — string
 *   $cta_button — string
 *   $cta_href   — string (link do kontakt)
 *   $branza_label — string (etykieta breadcrumb)
 */

require APP_ROOT . '/components/head.php';
require APP_ROOT . '/components/header.php';
?>
<main class="branza-page">

  <!-- HERO -->
  <section class="branza-hero">
    <div class="container">
      <nav class="breadcrumb" aria-label="Nawigacja okruszkowa">
        <a href="/">Strona główna</a>
        <span aria-hidden="true">›</span>
        <a href="/branze/">Branże</a>
        <span aria-hidden="true">›</span>
        <span aria-current="page"><?= htmlspecialchars($branza_label) ?></span>
      </nav>
      <p class="branza-hero__sub"><?= htmlspecialchars($hero_subheadline) ?></p>
      <h1><?= htmlspecialchars($hero_headline) ?></h1>
      <div class="cta-group">
        <a href="<?= htmlspecialchars($cta_href) ?>" class="cta-primary"><?= htmlspecialchars($cta_button) ?></a>
        <a href="/branze/" class="cta-secondary">Zobacz inne branże</a>
      </div>
    </div>
  </section>

  <!-- PROBLEMY -->
  <section class="branza-problems">
    <div class="container">
      <h2>Gdzie <?= htmlspecialchars($branza_label_gdzie ?? $branza_label) ?> traci czas i kontrolę</h2>
      <ul class="problem-list">
        <?php foreach ($problems as $p): ?>
          <li><?= htmlspecialchars($p) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- PROCES (CORE) -->
  <section class="branza-process">
    <div class="container">
      <h2>Jak VCN to porządkuje</h2>
      <p class="section-intro">Ciąg operacyjny — od pierwszego kroku po pełną dokumentację.</p>
      <ol class="process-steps">
        <?php foreach ($process as $step): ?>
          <li class="process-step">
            <div class="process-step__number"><?= (int)$step['step'] ?></div>
            <div class="process-step__body">
              <h3><?= htmlspecialchars($step['title']) ?></h3>
              <ul>
                <?php foreach ($step['points'] as $pt): ?>
                  <li><?= htmlspecialchars($pt) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </section>

  <!-- SYSTEMY -->
  <section class="branza-systems">
    <div class="container">
      <h2>Systemy, które pracują w tej branży</h2>
      <ul class="systems-list">
        <?php foreach ($systems as $s): ?>
          <li><?= htmlspecialchars($s) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- EFEKTY -->
  <section class="branza-effects">
    <div class="container">
      <h2>Co zyskujesz</h2>
      <ul class="effects-list">
        <?php foreach ($effects as $e): ?>
          <li><?= htmlspecialchars($e) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>

  <!-- MINI SCENARIUSZ -->
  <section class="branza-scenario">
    <div class="container">
      <h2>Przykład zastosowania</h2>
      <p><?= htmlspecialchars($scenario) ?></p>
    </div>
  </section>

  <!-- CTA -->
  <section class="branza-cta" id="cta-final">
    <div class="container">
      <h2><?= htmlspecialchars($cta_text) ?></h2>
      <a href="<?= htmlspecialchars($cta_href) ?>" class="cta-primary"><?= htmlspecialchars($cta_button) ?></a>
    </div>
  </section>

</main>

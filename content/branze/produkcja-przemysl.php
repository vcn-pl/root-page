<?php
$title       = 'Systemy VCN dla produkcji i przemysłu – kontrola dostępu, BHP, dokumentacja zdarzeń';
$description = 'VCN porządkuje dostęp, bezpieczeństwo i kontrolę operacyjną w zakładach produkcyjnych. Ewidencja stref, kontrola trzeźwości, dokumentacja incydentów.';

$branza_label       = 'Produkcja i przemysł';
$branza_label_gdzie = 'produkcja';
$hero_headline      = 'Systemy VCN dla produkcji i przemysłu';
$hero_subheadline   = 'W zakładach produkcyjnych porządkujemy dostęp, bezpieczeństwo i kontrolę operacyjną – tak, aby produkcja działała stabilnie, bez przestojów i niejasnych zdarzeń.';

$problems = [
    'Niekontrolowany dostęp do stref produkcyjnych przez osoby nieuprawnione',
    'Trudności z ustaleniem, kto był na hali w danym momencie',
    'Problemy BHP i formalna odpowiedzialność przy braku jednoznacznej ewidencji',
    'Incydenty bez dokumentacji — słowo przeciw słowu',
    'Ręczne zgłoszenia usterek i awarii bez historii zdarzeń technicznych',
    'Reakcja "po fakcie" zamiast procesowego zarządzania zdarzeniami',
];

$process = [
    [
        'step'   => 1,
        'title'  => 'Dostęp do zakładu i stref',
        'points' => [
            'Kontrola wejść i wyjść do hali, magazynu, serwisu i biura',
            'Podział na strefy z różnymi uprawnieniami dla każdej grupy',
            'Eliminacja nieautoryzowanego ruchu bez angażowania ochrony',
        ],
    ],
    [
        'step'   => 2,
        'title'  => 'Pracownicy i bezpieczeństwo',
        'points' => [
            'Jednoznaczna ewidencja obecności pracowników na zmianie',
            'Kontrola trzeźwości zintegrowana z procesem wejścia',
            'Zgodność z procedurami BHP potwierdzona systemowo',
        ],
    ],
    [
        'step'   => 3,
        'title'  => 'Ruch pojazdów i dostaw',
        'points' => [
            'Kontrola wjazdów na teren zakładu i dostaw materiałów',
            'Porządek przy bramach i placach rozładunkowych',
            'Pełna ewidencja pojazdów z timestampem',
        ],
    ],
    [
        'step'   => 4,
        'title'  => 'Monitorowanie zdarzeń na produkcji',
        'points' => [
            'Rejestracja incydentów z obrazem i kontekstem czasowym',
            'Możliwość odtworzenia sytuacji do audytów i reklamacji',
            'Wsparcie dla działu utrzymania ruchu i BHP',
        ],
    ],
    [
        'step'   => 5,
        'title'  => 'Zgłoszenia, awarie, utrzymanie ruchu',
        'points' => [
            'Rejestracja zgłoszeń technicznych i przypisywanie zadań',
            'Kontrola realizacji i historia awarii',
            'Pełna dokumentacja działań bez ręcznych raportów',
        ],
    ],
];

$systems = [
    'Systemy kontroli dostępu i identyfikacji w strefach',
    'Systemy ewidencji czasu pracy i BHP',
    'Systemy monitoringu i wideoweryfikacji zdarzeń',
    'Narzędzia zgłoszeń i utrzymania ruchu',
    'Integracje z systemami zakładowymi',
];

$effects = [
    'Większa kontrola nad bezpieczeństwem stref produkcyjnych',
    'Mniej incydentów "bez sprawcy" — każde zdarzenie udokumentowane',
    'Szybka i udokumentowana reakcja na awarie',
    'Pełna dokumentacja zdarzeń dla audytów i ubezpieczycieli',
    'Dane do decyzji zamiast domysłów',
    'Mniejsze ryzyka prawne przy wypadkach przy pracy',
];

$scenario   = 'W zakładzie produkcyjnym z wieloma zmianami system pozwala dokładnie ustalić, kto miał dostęp do danej strefy w określonym czasie — bez przeszukiwania papierowych list i bez angażowania kierowników zmian do wyjaśniania spornych sytuacji.';
$cta_text   = 'Chcesz uporządkować procesy i bezpieczeństwo w swoim zakładzie?';
$cta_button = 'Porozmawiajmy o produkcji';
$cta_href   = '/kontakt/';

require APP_ROOT . '/components/branza-layout.php';

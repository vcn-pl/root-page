<?php
$title       = 'Systemy VCN dla logistyki – kontrola wjazdów, awizacja, dokumentacja zdarzeń';
$description = 'VCN porządkuje logistykę od wjazdu pojazdu, przez plac i rampy, po dokumentację zdarzeń. Automatyzacja awizacji, identyfikacja pojazdów, obsługa kierowców.';

$branza_label       = 'Logistyka';
$branza_label_gdzie = 'logistyka';
$hero_headline      = 'Systemy VCN dla logistyki';
$hero_subheadline   = 'Porządkujemy logistykę od wjazdu pojazdu, przez plac i rampy, po dokumentację zdarzeń i obsługę incydentów.';

$problems = [
    'Kolejki na wjazdach i brak automatycznej identyfikacji pojazdów',
    'Ręczna awizacja — mail, telefon, Excel zamiast spójnego procesu',
    'Chaos na placu i rampach, brak przypisania stref',
    'Spory z przewoźnikami i reklamacje bez materiału dowodowego',
    'Brak dokumentacji zdarzeń — incydenty słowo przeciw słowu',
    'Przeciążenie ochrony i biura obsługą wjazdów',
];

$process = [
    [
        'step'   => 1,
        'title'  => 'Planowanie dostaw',
        'points' => [
            'Kiedy pojazd ma się pojawić i gdzie ma być obsłużony',
            'Uprzednia rejestracja kierowcy i awizacja w systemie',
            'Automatyczne powiadomienia dla zainteresowanych stron',
        ],
    ],
    [
        'step'   => 2,
        'title'  => 'Wjazd i ruch pojazdów',
        'points' => [
            'Automatyczna identyfikacja pojazdu bez ręcznej weryfikacji',
            'Pełna ewidencja wjazd/wyjazd z timestampem',
            'Brak kolejek — pojazd wjeżdża bez angażowania ochrony',
        ],
    ],
    [
        'step'   => 3,
        'title'  => 'Obsługa kierowców',
        'points' => [
            'Samodzielne meldowanie bez konieczności czekania w biurze',
            'Wejście kierowcy w zdefiniowany proces operacyjny',
            'Mniej kolejek i chaosu przy bramce i biurze przyjęć',
        ],
    ],
    [
        'step'   => 4,
        'title'  => 'Pracownicy i strefy',
        'points' => [
            'Ewidencja kto jest na obiekcie i gdzie ma dostęp',
            'Kontrola stref — ograniczenie dostępu do wybranych obszarów',
            'Bezpieczeństwo pracy zgodne z procedurami BHP',
        ],
    ],
    [
        'step'   => 5,
        'title'  => 'Weryfikacja zdarzeń',
        'points' => [
            'Dokładny obraz i czas każdego zdarzenia na obiekcie',
            'Materiał dowodowy przy reklamacjach i sporach',
            'Gotowy materiał do audytów i przeglądów operacyjnych',
        ],
    ],
    [
        'step'   => 6,
        'title'  => 'Reakcja i dokumentacja',
        'points' => [
            'Zgłoszenia i zadania przypisane do właściwych osób',
            'Historia decyzji i działań w jednym miejscu',
            'Pełna dokumentacja operacyjna bez ręcznego raportowania',
        ],
    ],
];

$systems = [
    'Systemy awizacji i planowania dostaw',
    'Systemy identyfikacji pojazdów i ruchu na placu',
    'Narzędzia obsługi kierowców i samomeldowania',
    'Systemy kontroli pracowników i stref BHP',
    'Narzędzia wideoweryfikacji zdarzeń',
    'Systemy zarządzania zgłoszeniami i procesami operacyjnymi',
];

$effects = [
    'Mniej przestojów i kolejek na wjazdach',
    'Krótszy czas obsługi dostawy od wjazdu do odjazdu',
    'Mniej reklamacji i szybsze ich rozstrzyganie',
    'Dane zamiast domysłów przy sporach z przewoźnikami',
    'Mniejsze obciążenie ochrony i biura obsługi',
];

$scenario   = 'Centrum logistyczne obsługujące kilkaset pojazdów dziennie wdrożyło system automatycznej identyfikacji i awizacji — ochrona przestała zajmować się ręczną weryfikacją, a każda reklamacja przewoźnika jest rozstrzygana w oparciu o zapis zdarzenia, nie zeznania świadków.';
$cta_text   = 'Chcesz zobaczyć, jak to może wyglądać u Ciebie?';
$cta_button = 'Porozmawiajmy o Twojej logistyce';
$cta_href   = '/kontakt/';

require APP_ROOT . '/components/branza-layout.php';

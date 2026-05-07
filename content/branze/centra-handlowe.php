<?php
$title       = 'Systemy VCN dla centrów handlowych - kontrola ruchu, parkingów i bezpieczeństwa obiektu';
$description = 'VCN porządkuje ruch, dostęp i obsługę zdarzeń w centrach handlowych. Automatyzacja parkingów, zarządzanie użytkownikami, weryfikacja incydentów.';

$branza_label       = 'Centra handlowe';
$branza_label_gdzie = 'centra handlowe';
$hero_headline      = 'Systemy VCN dla centrów handlowych';
$hero_subheadline   = 'Porządkujemy ruch, dostęp i obsługę zdarzeń w centrach handlowych - tak, aby obiekt działał płynnie, bezpiecznie i bez niepotrzebnych sytuacji kryzysowych.';

$problems = [
    'Korki na parkingach w godzinach szczytu i brak sprawnej rotacji pojazdów',
    'Konflikty: klienci vs pracownicy vs dostawcy na wspólnych ciągach',
    'Ręczna obsługa wjazdów i zezwoleń — błędy i koszty',
    'Brak dowodów przy reklamacjach kolizyjnych i incydentach',
    'Trudności w ustaleniu przebiegu zdarzeń w obiekcie',
    'Wysokie koszty ochrony przy nieefektywnym procesie wjazdów',
    'Każdy incydent to potencjalny problem wizerunkowy',
];

$process = [
    [
        'step'   => 1,
        'title'  => 'Ruch i parkowanie klientów',
        'points' => [
            'Płynny wjazd i wyjazd bez biletów i ręcznej obsługi',
            'Automatyczna identyfikacja pojazdów abonamentowych i jednorazowych',
            'Eliminacja kolejek w godzinach szczytu',
        ],
    ],
    [
        'step'   => 2,
        'title'  => 'Różne grupy użytkowników, różne zasady',
        'points' => [
            'Klienci, najemcy, pracownicy, dostawcy i serwis — każda grupa osobno',
            'Różne uprawnienia, godziny i strefy dla każdej kategorii',
            'Brak konfliktów bez potrzeby ręcznego zarządzania',
        ],
    ],
    [
        'step'   => 3,
        'title'  => 'Dostawy i zaplecze obiektu',
        'points' => [
            'Kontrola wjazdów dostaw na zaplecze i do ramp rozładunkowych',
            'Porządek i ewidencja bez angażowania pracowników centrum',
            'Brak nieautoryzowanego ruchu w strefach niedostępnych dla klientów',
        ],
    ],
    [
        'step'   => 4,
        'title'  => 'Zdarzenia, incydenty, reklamacje',
        'points' => [
            'Każda kolizja parkingowa, spór czy uszkodzenie mienia z zapisem',
            'Czas, kontekst i obraz zdarzenia dostępne natychmiast',
            'Szybkie wyjaśnienie bez angażowania kamer archiwum',
        ],
    ],
    [
        'step'   => 5,
        'title'  => 'Obsługa zgłoszeń i interwencji',
        'points' => [
            'Zgłoszenia techniczne i awarie obsługiwane procesowo',
            'Historia interwencji ochrony powiązana ze zdarzeniami',
            'Pełna dokumentacja działań dla zarządu i wynajmujących',
        ],
    ],
];

$systems = [
    'Systemy parkowania i kontroli ruchu pojazdów',
    'Systemy zarządzania dostępem i strefami',
    'Wideoweryfikacja zdarzeń i reklamacji',
    'Narzędzia obsługi zgłoszeń i interwencji',
    'Integracje z infrastrukturą obiektu',
];

$effects = [
    'Lepsze doświadczenie klientów — mniej kolejek i frustracji',
    'Mniej konfliktów i reklamacji między użytkownikami',
    'Szybsza obsługa incydentów z pełnym materiałem dowodowym',
    'Pełna dokumentacja zdarzeń dla ubezpieczycieli i zarządu',
    'Niższe koszty operacyjne dzięki automatyzacji wjazdów',
    'Większa kontrola reputacyjna — każdy incydent rozwiązany systemowo',
];

$scenario   = 'W centrum handlowym system automatycznie rozróżnia ruch klientów, pracowników i dostaw, eliminując kolejki i umożliwiając szybkie wyjaśnianie zdarzeń spornych — zarządca obiektu widzi aktywność w czasie rzeczywistym, a każda reklamacja jest rozstrzygana w oparciu o zapis, nie zeznania świadków.';
$cta_text   = 'Chcesz uporządkować ruch i bezpieczeństwo w swoim centrum handlowym?';
$cta_button = 'Porozmawiajmy o obiekcie';
$cta_href   = '/kontakt/';

require APP_ROOT . '/components/branza-layout.php';

<?php
$title       = 'Systemy VCN dla branży HoReCa - kontrola dostępu, bezpieczeństwo gości, zarządzanie zdarzeniami';
$description = 'VCN porządkuje dostęp, zdarzenia i zaplecze operacyjne w hotelach i obiektach HoReCa. Bezpieczeństwo gości i pełna kontrola dla obsługi bez dodatkowego stresu.';

$branza_label       = 'HoReCa';
$branza_label_gdzie = 'branża HoReCa';
$hero_headline      = 'Systemy VCN dla branży HoReCa';
$hero_subheadline   = 'W hotelach i obiektach HoReCa porządkujemy dostęp, zdarzenia i zaplecze operacyjne - tak, aby goście czuli się bezpiecznie, a obsługa miała pełną kontrolę bez dodatkowego stresu.';

$problems = [
    'Brak kontroli nad dostępem do stref gościnnych i zaplecza',
    'Nieautoryzowany ruch personelu i dostawców w strefach gości',
    'Incydenty i kradzieże bez możliwości jednoznacznego wyjaśnienia',
    'Ręczna obsługa wjazdów i parkingów — koszty i błędy',
    'Brak ewidencji zdarzeń przy reklamacjach gości hotelowych',
    'Trudności z zarządzaniem zgłoszeniami technicznymi i serwisem',
];

$process = [
    [
        'step'   => 1,
        'title'  => 'Wjazd i parkowanie gości',
        'points' => [
            'Automatyczna identyfikacja pojazdów gości hotelowych',
            'Płynny wjazd i wyjazd bez angażowania recepcji',
            'Jasne zasady dla gości, pracowników i dostawców',
        ],
    ],
    [
        'step'   => 2,
        'title'  => 'Kontrola dostępu do stref',
        'points' => [
            'Strefy gości, zaplecze kuchenne, magazyny i serwis — każda osobno',
            'Dostęp pracowników dopasowany do roli i godzin pracy',
            'Eliminacja nieautoryzowanego ruchu w strefach chronionych',
        ],
    ],
    [
        'step'   => 3,
        'title'  => 'Bezpieczeństwo gości i pracowników',
        'points' => [
            'Ewidencja obecności personelu na każdej zmianie',
            'Kontrola dostępu do pokojów i stref VIP',
            'Rejestracja każdego wejścia i wyjścia z kontekstem',
        ],
    ],
    [
        'step'   => 4,
        'title'  => 'Zdarzenia i incydenty',
        'points' => [
            'Każdy incydent z zapisem czasu, obrazu i kontekstu',
            'Szybkie wyjaśnienie reklamacji gości hotelowych',
            'Materiał dowodowy przy sporach i postępowaniach',
        ],
    ],
    [
        'step'   => 5,
        'title'  => 'Obsługa zgłoszeń i utrzymanie obiektu',
        'points' => [
            'Zgłoszenia techniczne i awarie obsługiwane procesowo',
            'Historia interwencji serwisu i reakcji obsługi',
            'Pełna dokumentacja bez ręcznych raportów z dyżurów',
        ],
    ],
];

$systems = [
    'Systemy automatycznych wjazdów i parkowania gości',
    'Systemy kontroli dostępu i stref w obiektach hotelowych',
    'Wideoweryfikacja zdarzeń i incydentów',
    'Narzędzia obsługi zgłoszeń i utrzymania obiektu',
    'Integracje z systemami zarządzania obiektem',
];

$effects = [
    'Wyższe bezpieczeństwo gości bez widocznej ingerencji ochrony',
    'Mniej incydentów bez możliwości wyjaśnienia',
    'Szybsza obsługa reklamacji gości i sporów personalnych',
    'Pełna dokumentacja zdarzeń dla zarządu i ubezpieczycieli',
    'Niższe koszty obsługi przy zachowaniu standardu usług',
    'Profesjonalne zarządzanie obiektem bez chaosu operacyjnego',
];

$scenario   = 'W hotelu system automatycznie kontroluje dostęp do stref gości i zaplecza, rejestruje każde zdarzenie i umożliwia szybkie wyjaśnienie sytuacji spornych — obsługa skupia się na gościach, nie na ręcznym zarządzaniu bramkami i kluczami.';
$cta_text   = 'Chcesz uporządkować bezpieczeństwo i operacje w swoim obiekcie HoReCa?';
$cta_button = 'Porozmawiajmy o obiekcie';
$cta_href   = '/kontakt/';

require APP_ROOT . '/components/branza-layout.php';

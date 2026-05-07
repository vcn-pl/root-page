<?php
$title       = 'Systemy VCN dla parkingów i nieruchomości – automatyczne wjazdy, kontrola dostępu, weryfikacja zdarzeń';
$description = 'VCN automatyzuje wjazdy, dostęp i kontrolę zdarzeń na parkingach oraz w obiektach nieruchomościowych. Bez chaosu, bez ręcznej obsługi, z pełną kontrolą.';

$branza_label       = 'Parkingi i nieruchomości';
$branza_label_gdzie = 'parkingi i nieruchomości';
$hero_headline      = 'Systemy VCN dla parkingów i nieruchomości';
$hero_subheadline   = 'Automatyzujemy wjazdy, dostęp i kontrolę zdarzeń na parkingach oraz w obiektach nieruchomościowych – bez chaosu, bez ręcznej obsługi, z pełną kontrolą.';

$problems = [
    'Ręczna obsługa wjazdów i portierni — stałe koszty i błędy ludzkie',
    'Brak jasnych zasad wjazdu dla różnych grup: goście, najemcy, serwis',
    'Konflikty między użytkownikami parkingu bez możliwości wyjaśnienia',
    'Nieczytelna ewidencja pojazdów i brak historii zdarzeń',
    'Reklamacje bez dowodów — kolizje i spory bez materiału wideo',
    'Trudności w rozliczeniach parkowania i kontroli kosztów',
];

$process = [
    [
        'step'   => 1,
        'title'  => 'Wjazd i identyfikacja pojazdów',
        'points' => [
            'Automatyczne rozpoznanie pojazdów bez biletów i kart',
            'Jasne reguły wjazdu dla każdej grupy użytkowników',
            'Pełna ewidencja wjazd/wyjazd bez udziału portierni',
        ],
    ],
    [
        'step'   => 2,
        'title'  => 'Zarządzanie użytkownikami parkingu',
        'points' => [
            'Najemcy, pracownicy, goście i serwis — każda grupa z innymi zasadami',
            'Różne uprawnienia, godziny i strefy dla każdej kategorii',
            'Brak konfliktów i brak konieczności ręcznego zarządzania listami',
        ],
    ],
    [
        'step'   => 3,
        'title'  => 'Bezobsługowa obsługa obiektu',
        'points' => [
            'Brak stałej portierni — niższe koszty operacyjne',
            'Kiosk samoobsługowy lub pełna automatyzacja wjazdu',
            'Mniej błędów ludzkich i mniej interwencji ochrony',
        ],
    ],
    [
        'step'   => 4,
        'title'  => 'Kontrola dostępu i stref',
        'points' => [
            'Parkingi podziemne, bramy, szlabany, wejścia do budynków',
            'Zaplecza techniczne z ograniczonym dostępem',
            'Logika stref zarządzana centralnie z poziomu systemu',
        ],
    ],
    [
        'step'   => 5,
        'title'  => 'Rejestr zdarzeń i wideoweryfikacja',
        'points' => [
            'Każda kolizja, spór czy reklamacja ma czas, obraz i kontekst',
            'Materiał dowodowy dostępny bez szukania taśm',
            'Szybkie wyjaśnianie incydentów bez angażowania ochrony',
        ],
    ],
    [
        'step'   => 6,
        'title'  => 'Obsługa zgłoszeń i zarządzanie obiektem',
        'points' => [
            'Zgłoszenia techniczne i awarie rejestrowane w systemie',
            'Historia działań i interwencji w jednym miejscu',
            'Skalowalność przy zmianie najemców lub rozbudowie obiektu',
        ],
    ],
];

$systems = [
    'Systemy rozpoznawania pojazdów i automatycznych wjazdów',
    'Systemy zarządzania użytkownikami parkingu',
    'Systemy kontroli dostępu i logiki stref',
    'Wideoweryfikacja zdarzeń i sporów',
    'Narzędzia obsługi zgłoszeń i utrzymania obiektu',
];

$effects = [
    'Niższe koszty obsługi — mniej ludzi przy bramkach i portierni',
    'Jasne zasady parkowania eliminujące konflikty',
    'Mniej sporów i szybsze ich rozstrzyganie dzięki zapisom wideo',
    'Pełna ewidencja zdarzeń dla ubezpieczycieli i zarządu',
    'Skalowalność przy zmianie najemców lub rozbudowie parkingu',
];

$scenario   = 'W biurowcu lub parku nieruchomościowym system automatycznie rozpoznaje pojazdy najemców, gości i serwisu, eliminując potrzebę ręcznej obsługi wjazdów i pozwalając zarządcy obiektu na bieżąco monitorować zajętość i zdarzenia bez wychodzenia z biura.';
$cta_text   = 'Chcesz uporządkować parking i dostęp w swoim obiekcie?';
$cta_button = 'Porozmawiajmy o nieruchomości';
$cta_href   = '/kontakt/';

require APP_ROOT . '/components/branza-layout.php';

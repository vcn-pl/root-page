<?php
$title       = 'Systemy VCN dla myjni samochodowych - automatyczne wjazdy, weryfikacja reklamacji, nadzór operacyjny';
$description = 'VCN automatyzuje wjazd, nadzór i obsługę zdarzeń w myjniach. Eliminacja reklamacji bez dowodów, kontrola dostępu do usługi, łatwe skalowanie sieci myjni.';

$branza_label       = 'Myjnie samochodowe';
$branza_label_gdzie = 'myjnie';
$hero_headline      = 'Systemy VCN dla myjni samochodowych';
$hero_subheadline   = 'Automatyzujemy wjazd, nadzór i obsługę zdarzeń w myjniach samochodowych - tak, aby proces był szybki, bezpieczny i wolny od sporów z klientami.';

$problems = [
    'Kolejki i chaos na wjeździe — brak automatycznej kolejkowania',
    'Brak kontroli nad tym, kto faktycznie korzysta z myjni',
    'Reklamacje "myjnia uszkodziła auto" bez możliwości weryfikacji',
    'Brak dowodów przy sporach z klientami — słowo przeciw słowu',
    'Ręczna obsługa i nadzór generujące koszty personalne',
    'Brak historii zdarzeń utrudniający zarządzanie siecią myjni',
];

$process = [
    [
        'step'   => 1,
        'title'  => 'Wjazd do myjni',
        'points' => [
            'Automatyczna identyfikacja pojazdu przy wjeździe',
            'Brak ręcznej obsługi i konieczności interwencji pracownika',
            'Płynny ruch bez kolejek nawet w godzinach szczytu',
        ],
    ],
    [
        'step'   => 2,
        'title'  => 'Kontrola dostępu do usługi',
        'points' => [
            'Jasne zasady korzystania dla każdej kategorii klientów',
            'Eliminacja nadużyć przy abonamentach i kartach wielorazowych',
            'Porządek na wjeździe bez udziału personelu',
        ],
    ],
    [
        'step'   => 3,
        'title'  => 'Rejestracja przebiegu mycia',
        'points' => [
            'Dokładny moment wjazdu i uruchomienia procesu mycia',
            'Pełna rejestracja przebiegu mycia z obrazem',
            'Kontekst każdego zdarzenia dostępny do wglądu',
        ],
    ],
    [
        'step'   => 4,
        'title'  => 'Weryfikacja reklamacji i zdarzeń',
        'points' => [
            'Możliwość natychmiastowego odtworzenia sytuacji z zapisu',
            'Materiał dowodowy eliminujący spory bez podstawy',
            'Koniec dyskusji "słowo przeciw słowu" przy każdej reklamacji',
        ],
    ],
    [
        'step'   => 5,
        'title'  => 'Obsługa zgłoszeń i incydentów',
        'points' => [
            'Zgłoszenia klientów i awarie urządzeń w jednym systemie',
            'Interwencje serwisu z historią i kontekstem technicznym',
            'Pełna historia zdarzeń dla każdej lokalizacji w sieci',
        ],
    ],
];

$systems = [
    'Systemy automatycznego wjazdu i identyfikacji pojazdu',
    'Wideoweryfikacja przebiegu mycia i zdarzeń',
    'Monitoring i rejestracja zdarzeń operacyjnych',
    'Narzędzia obsługi zgłoszeń i serwisu urządzeń',
    'Rozwiązania dedykowane dla sieci myjni',
];

$effects = [
    'Mniej reklamacji dzięki pełnej rejestracji każdego mycia',
    'Krótszy czas obsługi sporów — zapis zamiast rozmowy',
    'Pełna kontrola operacyjna bez stałego nadzoru personelu',
    'Mniejsze obciążenie obsługi przy rosnącej liczbie klientów',
    'Łatwe skalowanie systemu na kolejne lokalizacje w sieci',
    'Większe zaufanie klientów dzięki transparentności procesu',
];

$scenario   = 'W myjni automatycznej system rejestruje wjazd pojazdu i cały przebieg mycia — przy każdej reklamacji klient i właściciel myjni mają dostęp do dokładnego zapisu zdarzenia, co eliminuje spory i skraca czas obsługi reklamacji z dni do minut.';
$cta_text   = 'Chcesz uporządkować działanie swojej myjni lub całej sieci?';
$cta_button = 'Porozmawiajmy o myjni';
$cta_href   = '/kontakt/';

require APP_ROOT . '/components/branza-layout.php';

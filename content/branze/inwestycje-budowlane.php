<?php
$title       = 'Systemy VCN dla inwestycji budowlanych - kontrola placu budowy, ewidencja pojazdów i BHP';
$description = 'VCN porządkuje dostęp, ruch i zdarzenia na placach budowy - od pierwszego etapu inwestycji po jej zakończenie. Bez ręcznych list, bez chaosu przy zmianie etapów.';

$branza_label       = 'Inwestycje budowlane';
$branza_label_gdzie = 'inwestycje budowlane';
$hero_headline      = 'Systemy VCN dla inwestycji budowlanych';
$hero_subheadline   = 'Porządkujemy dostęp, ruch i zdarzenia na placach budowy - od pierwszego etapu inwestycji po jej zakończenie.';

$problems = [
    'Brak kontroli nad tym, kto jest na budowie w danym momencie',
    'Podwykonawcy wchodzą bez rejestracji i weryfikacji uprawnień',
    'Problemy z BHP i odpowiedzialnością przy incydentach bez ewidencji',
    'Brak ewidencji pojazdów i dostaw — chaos przy bramach',
    'Incydenty, kradzieże i uszkodzenia bez możliwości odtworzenia',
    'Ręczne listy, przepustki i telefony zamiast spójnego procesu',
    'Chaos przy zmianach etapów inwestycji i rotacji ekip',
];

$process = [
    [
        'step'   => 1,
        'title'  => 'Dostęp na teren budowy',
        'points' => [
            'Identyfikacja osób i firm przed wejściem na plac',
            'Ograniczony dostęp dopasowany do aktualnego etapu budowy',
            'Eliminacja wejść "na gębę" bez formalnej rejestracji',
        ],
    ],
    [
        'step'   => 2,
        'title'  => 'Ruch pojazdów i dostaw',
        'points' => [
            'Ewidencja wjazdów i wyjazdów z timestampem',
            'Kontrola dostaw materiałów i pojazdów specjalistycznych',
            'Porządek przy bramach wjazdowych bez angażowania ochrony',
        ],
    ],
    [
        'step'   => 3,
        'title'  => 'Podwykonawcy i pracownicy',
        'points' => [
            'Rozróżnienie: generalny wykonawca, podwykonawcy, serwis, inspekcje',
            'Ewidencja kto pracuje, kiedy i dla kogo na budowie',
            'Uprawnienia dopasowane do roli i strefy robót',
        ],
    ],
    [
        'step'   => 4,
        'title'  => 'Bezpieczeństwo i BHP',
        'points' => [
            'Kontrola trzeźwości przy wejściu na plac',
            'Ograniczenie ryzyk BHP potwierdzone systemowo',
            'Zgodność z procedurami wymagana dokumentacyjnie',
        ],
    ],
    [
        'step'   => 5,
        'title'  => 'Rejestr zdarzeń na budowie',
        'points' => [
            'Każdy incydent, kolizja lub spór ma czas, obraz i kontekst',
            'Kradzieże i uszkodzenia mienia możliwe do weryfikacji',
            'Materiał do audytów i postępowań ubezpieczeniowych',
        ],
    ],
    [
        'step'   => 6,
        'title'  => 'Obsługa zgłoszeń i zmian',
        'points' => [
            'Awarie i zgłoszenia techniczne rejestrowane w systemie',
            'Historia działań i zmian przy każdym etapie inwestycji',
            'Łatwe skalowanie systemu na kolejne fazy budowy',
        ],
    ],
];

$systems = [
    'Systemy kontroli dostępu na teren budowy',
    'Ewidencja pojazdów i dostaw materiałów',
    'Nadzór wizyjny i wideoweryfikacja zdarzeń',
    'Kontrola pracowników i BHP',
    'Narzędzia obsługi zgłoszeń i ekip',
];

$effects = [
    'Pełna kontrola nad tym, kto jest na budowie i kiedy',
    'Jasna odpowiedzialność przy incydentach i szkodach',
    'Mniej ryzyk prawnych i BHP dzięki systemowej ewidencji',
    'Dane zamiast domysłów przy sporach z podwykonawcami',
    'Łatwe skalowanie systemu na kolejne etapy inwestycji',
    'Porządek od pierwszego wbicia szpadla do odbioru końcowego',
];

$scenario   = 'Na wieloetapowej inwestycji budowlanej system pozwala kontrolować dostęp ekip, ruch pojazdów i zdarzenia bez ręcznej ewidencji — przy każdej zmianie etapu uprawnienia aktualizują się automatycznie, a kierownik budowy widzi kto jest na placu w czasie rzeczywistym.';
$cta_text   = 'Chcesz uporządkować dostęp i kontrolę na swojej inwestycji?';
$cta_button = 'Porozmawiajmy o inwestycji';
$cta_href   = '/kontakt/';

require APP_ROOT . '/components/branza-layout.php';

<?php
$title       = 'Systemy VCN dla ochrony obiektów – wsparcie pracy ochrony, dokumentacja interwencji, automatyzacja wjazdów';
$description = 'VCN wspiera firmy ochroniarskie i działy ochrony w obiektach. Automatyczne wjazdy, rejestracja zdarzeń i dokumentacja interwencji bez ręcznych raportów.';

$branza_label       = 'Ochrona';
$branza_label_gdzie = 'ochrona';
$hero_headline      = 'Systemy VCN dla ochrony i nadzoru obiektów';
$hero_subheadline   = 'Wspieramy firmy ochroniarskie i działy ochrony w obiektach, porządkując wjazdy, zdarzenia i dokumentację – tak, aby ochrona pracowała szybciej, spokojniej i z pełną kontrolą.';

$problems = [
    'Ręczna obsługa wjazdów i przepustek — presja i błędy na bramie',
    'Decyzje "na oko" bez jasnych procedur i danych w czasie rzeczywistym',
    'Brak jednoznacznych procedur wjazdowych dla różnych grup',
    'Zdarzenia bez dokumentacji — słowo ochrony przeciw słowu klienta',
    'Spory: "ochrona widziała / ochrona nie widziała" bez zapisu',
    'Trudności w rozliczaniu interwencji z klientem',
    'Wysoka rotacja pracowników ochrony i problem z onboardingiem',
];

$process = [
    [
        'step'   => 1,
        'title'  => 'Wjazdy i kontrola pojazdów',
        'points' => [
            'Automatyczna identyfikacja pojazdów bez ręcznego sprawdzania list',
            'Jasne reguły wjazdu dla każdej grupy użytkowników',
            'Ochrona działa wg systemu, nie według własnej oceny sytuacji',
        ],
    ],
    [
        'step'   => 2,
        'title'  => 'Uprawnienia i dostęp',
        'points' => [
            'Kto może wejść, kiedy i do której strefy — zdefiniowane systemowo',
            'Ochrona nie podejmuje decyzji "na oko" — system wskazuje co zrobić',
            'Brak błędów wynikających z rotacji pracowników ochrony',
        ],
    ],
    [
        'step'   => 3,
        'title'  => 'Zdarzenia i incydenty',
        'points' => [
            'Każde zdarzenie z zapisem czasu, obrazu i kontekstu',
            'Wjazd nieuprawniony, kolizja, spór, naruszenie zasad — wszystko zarejestrowane',
            'Materiał dowodowy dostępny natychmiast po zdarzeniu',
        ],
    ],
    [
        'step'   => 4,
        'title'  => 'Interwencje i zgłoszenia',
        'points' => [
            'Rejestracja każdej interwencji z przypisaniem odpowiedzialnych',
            'Historia działań ochrony powiązana z zapisami zdarzeń',
            'Zgłoszenia do klienta generowane z gotowych danych systemowych',
        ],
    ],
    [
        'step'   => 5,
        'title'  => 'Raportowanie i rozliczenia',
        'points' => [
            'Raporty służbowe tworzone automatycznie na podstawie systemu',
            'Historia interwencji gotowa do przekazania klientowi lub na audyt',
            'Profesjonalna dokumentacja bez ręcznego spisywania raportów',
        ],
    ],
];

$systems = [
    'Systemy automatycznej kontroli wjazdów i przepustek',
    'Systemy nadzoru i wideoweryfikacji zdarzeń',
    'Narzędzia rejestracji i obsługi incydentów',
    'Systemy ewidencji i raportowania pracy ochrony',
    'Integracje z infrastrukturą chronionego obiektu',
];

$effects = [
    'Mniejsze obciążenie pracowników ochrony przy wjazdach',
    'Mniej błędnych decyzji dzięki jasnym procedurom systemowym',
    'Pełna dokumentacja każdego zdarzenia i interwencji',
    'Łatwiejsze rozliczenia usług ochrony z klientem końcowym',
    'Większe zaufanie klientów do świadczonych usług',
    'Profesjonalizacja ochrony bez wzrostu liczby pracowników',
];

$scenario   = 'W obiekcie chronionym system automatycznie identyfikuje pojazdy i rejestruje każde zdarzenie — ochrona nie musi ręcznie sprawdzać list, a przy każdym sporze z klientem lub incydencie dostępny jest pełny zapis umożliwiający wyjaśnienie sytuacji bez angażowania świadków.';
$cta_text   = 'Chcesz wesprzeć pracę ochrony systemowo, zamiast dokładać obowiązków?';
$cta_button = 'Porozmawiajmy o ochronie';
$cta_href   = '/kontakt/';

require APP_ROOT . '/components/branza-layout.php';

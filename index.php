<?php
require __DIR__ . '/bootstrap.php';

$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

$branze = [
    'logistyka'              => APP_ROOT . '/content/branze/logistyka.php',
    'produkcja-przemysl'     => APP_ROOT . '/content/branze/produkcja-przemysl.php',
    'parkingi-i-nieruchomosci' => APP_ROOT . '/content/branze/parkingi-i-nieruchomosci.php',
    'inwestycje-budowlane'   => APP_ROOT . '/content/branze/inwestycje-budowlane.php',
    'centra-handlowe'        => APP_ROOT . '/content/branze/centra-handlowe.php',
    'myjnie-samochodowe'     => APP_ROOT . '/content/branze/myjnie-samochodowe.php',
    'horeca'                 => APP_ROOT . '/content/branze/horeca.php',
    'ochrona'                => APP_ROOT . '/content/branze/ochrona.php',
];

switch ($path) {
    case '':
        require APP_ROOT . '/content/home.php';
        break;

    case 'branze':
        require APP_ROOT . '/content/branze.php';
        break;

    case 'kontakt':
        require APP_ROOT . '/content/kontakt.php';
        break;

    default:
        if (preg_match('#^branze/([a-z0-9-]+)$#', $path, $m) && isset($branze[$m[1]])) {
            require $branze[$m[1]];
        } else {
            http_response_code(404);
            require APP_ROOT . '/content/404.php';
        }
}
require APP_ROOT . '/components/footer.php';
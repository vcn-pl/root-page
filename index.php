<?php
require __DIR__ . '/bootstrap.php';

$title = "VCN - Zintegrowane systemy dla biznesu";
$description = "Systemy VCN dla logistyki, produkcji i nieruchomości.";

$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');


switch ($path) {
    case '':
        require APP_ROOT . '/components/head.php';
        require APP_ROOT . '/components/header.php';
        require APP_ROOT . '/content/home.php';
        break;

    // case 'realizacje':
    //     require APP_ROOT . '/content/realizacje.php';
    //     break;

    // case 'kontakt':
    //     require APP_ROOT . '/content/kontakt.php';
    //     break;

    default:
        http_response_code(404);
        $title = "VCN - 404 Strona nie znaleziona";
        require APP_ROOT . '/components/head.php';
        require APP_ROOT . '/components/header.php';
        require APP_ROOT . '/content/404.php';
}
require APP_ROOT . '/components/footer.php';
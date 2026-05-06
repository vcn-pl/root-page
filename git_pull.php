<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['status' => 'method_not_allowed']);
    exit;
}

function loadEnv(string $file): array {
    if (!is_readable($file)) return [];

    $data = [];
    foreach (file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#')) continue;

        [$k, $v] = array_pad(explode('=', $line, 2), 2, null);
        if ($k !== null && $v !== null) {
            $data[trim($k)] = trim(trim($v), "\"'");
        }
    }
    return $data;
}

$env = loadEnv(__DIR__ . '/.env');

$expected = $env['DEPLOY_SECRET'] ?? '';
$received = $_SERVER['HTTP_X_DEPLOY_SECRET'] ?? '';

if ($expected === '' || !hash_equals($expected, $received)) {
    http_response_code(403);
    echo json_encode(['status' => 'forbidden']);
    exit;
}

$repoPath = '/var/www/html/vcn';
$cmd = sprintf(
    'cd %s && git pull 2>&1',
    escapeshellarg($repoPath)
);

$output = shell_exec($cmd);

echo json_encode([
    'status' => 'ok',
    'output' => trim($output),
]);
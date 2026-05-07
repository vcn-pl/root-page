<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon / App icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/icon/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="/img/icon/favicon.ico">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="theme-color" content="#ffffff">


    <link rel="preload" href="/fonts/Source-Sans-Pro/SourceSansPro-Regular.ttf.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/fonts/font-face.css" as="style" onload="this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/fonts/font-face.css"></noscript>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="preload" href="/img/logo-vnc-full.svg" as="image">
    <link rel="preload" href="/media/intro.mp4" as="video" type="video/mp4" media="(min-width: 769px)">

    <title><?= htmlspecialchars($title ?? 'VCN') ?></title>
    <meta name="description" content="<?= htmlspecialchars($description ?? '') ?>">

    <link rel="canonical" href="https://vcn.pl<?= htmlspecialchars(strtok($_SERVER['REQUEST_URI'] ?? '/', '?')) ?>">

    <meta name="robots" content="index,follow">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pl_PL">
    <meta property="og:site_name" content="VCN">
    <meta property="og:title" content="<?= htmlspecialchars($title ?? 'VCN') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description ?? '') ?>">
    <meta property="og:url" content="https://vcn.pl<?= htmlspecialchars(strtok($_SERVER['REQUEST_URI'] ?? '/', '?')) ?>">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($title ?? 'VCN') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($description ?? '') ?>">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "VCN",
      "url": "https://vcn.pl",
      "description": "Projektujemy i wdrażamy zintegrowane systemy dla logistyki, produkcji i nieruchomości.",
      "areaServed": "PL",
      "serviceType": ["Systemy kontroli dostępu", "Automatyzacja procesów", "Monitoring obiektów"]
    }
    </script>
</head>
<body>

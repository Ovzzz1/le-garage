<?php
/**
 * header.php
 * En-tête du site Automobile
 */

// Si non défini, on configure un tire par défaut
if (!isset($page_title)) {
    $page_title = "Le garage expert Auto - Le Blog Automobile Indépendant";
}
if (!isset($page_description)) {
    $page_description = "Le garage expert Auto, le média automobile indépendant. Essais, guides d'achat, comparatifs d'assurances, tutos mécanique et conseils 100% objectifs.";
}

// ─── Génération de l'URL Canonical forte (Force WWW) ───
$request_uri = strtok($_SERVER['REQUEST_URI'], '?'); // Enlève les paramètres GET variables (utm_source etc)
$canonical_url = "https://www.garageraymond.fr" . $request_uri;
?>
<!-- 94d1712bee9ce12ee9c18f3a83756cbd -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    
    <meta name="linkavista" content="64bd261574018eac57ebd7f225406853aa3fe1c0">

    <!-- Balise Canonical Absolue -->
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

    <!-- Favicon -->
    <link rel="icon" href="/Image/favicon.png" type="image/png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Poppins:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="/style.css">
    <style>
        /* Fallback si hero image 404 : gradient visible */
        .art-hero { background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); }
        .art-hero-bg[data-error="true"] { display: none !important; }
    </style>
</head>

<body>

    <!-- Header & Navigation -->
    <header class="site-header">
        <div class="header-container">
            <a href="/" class="logo-container" style="display:flex; align-items:center;">
                <img src="/Image/logo%20-Le%20garage%20expert%20Auto.png" alt="Logo Le garage expert Auto"
                    style="max-height: 85px; width: auto;" class="site-logo">
            </a>

            <nav class="main-nav">
                <ul>
                    <li><a href="/"
                            class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Accueil</a>
                    </li>
                    <li><a href="/assurance">Assurance & Financement</a></li>
                    <li><a href="/entretien">Entretien</a></li>
                    <li><a href="/electrique">Électrique</a></li>
                    <li><a href="/occasion">Achat & Occasion</a></li>
                    <li><a href="/moto">Moto</a></li>
                    <li><a href="/permis">Permis</a></li>
                    <li><a href="/marques">Marques</a></li>
                </ul>
            </nav>

            <a href="/contact" class="header-cta">Contact</a>
        </div>
    </header>
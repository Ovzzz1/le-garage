<?php
/**
 * index.php
 * Page d'accueil dynamique (Architecture auto)
 * Scanne le dossier Blog/ pour récupérer les vrais articles
 */

$page_title = "Le garage expert Auto - Votre magazine automobile de confiance";
$page_description = "L'entretien, la réparation et la vente de véhicules par des passionnés, pour des passionnés. Découvrez Le garage expert Auto.";

// ─── Configuration des catégories ───
$categories_config = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb'],
    'entretien' => ['name' => 'Entretien', 'color' => '#dc2626'],
    'electrique' => ['name' => 'Électrique', 'color' => '#059669'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed'],
    'moto' => ['name' => 'Moto', 'color' => '#ea580c'],
    'permis' => ['name' => 'Permis', 'color' => '#f59e0b'],
];

// ─── Scan du dossier Blog/ pour récupérer les articles ───
$all_articles = [];
$blog_dir = __DIR__ . '/Blog';

if (is_dir($blog_dir)) {
    $files = glob($blog_dir . '/*.php');
    foreach ($files as $file) {
        // Skip template files (commençant par _)
        if (str_starts_with(basename($file), '_'))
            continue;
        // On réinitialise $article pour chaque fichier
        $article = null;

        // Extraire les métadonnées sans exécuter le fichier complet
        // On lit le contenu du fichier et on cherche le tableau $article
        $content = file_get_contents($file);

        // Extraire le $article array via eval partiel
        // On cherche la section entre $article = [ et ];
        if (preg_match('/\$article\s*=\s*\[(.+?)\];/s', $content, $matches)) {
            // On évalue le tableau
            try {
                eval ('$article = [' . $matches[1] . '];');
            } catch (Throwable $e) {
                continue; // Skip en cas d'erreur
            }
        }

        if ($article && isset($article['title'])) {
            // Construire le slug depuis le nom de fichier
            $slug = pathinfo($file, PATHINFO_FILENAME);
            $article['slug'] = $slug;
            $article['url'] = '/Blog/' . $slug;

            // S'assurer qu'on a une catégorie
            if (!isset($article['category'])) {
                $article['category'] = 'occasion';
            }
            if (!isset($article['category_name']) && isset($categories_config[$article['category']])) {
                $article['category_name'] = $categories_config[$article['category']]['name'];
            }
            if (!isset($article['category_color']) && isset($categories_config[$article['category']])) {
                $article['category_color'] = $categories_config[$article['category']]['color'];
            }

            $all_articles[] = $article;
        }
    }
}

// Trier par date (plus récent en premier) - on parse la date
usort($all_articles, function ($a, $b) {
    $months_fr = [
        'Janvier' => '01',
        'Février' => '02',
        'Mars' => '03',
        'Avril' => '04',
        'Mai' => '05',
        'Juin' => '06',
        'Juillet' => '07',
        'Août' => '08',
        'Septembre' => '09',
        'Octobre' => '10',
        'Novembre' => '11',
        'Décembre' => '12'
    ];

    $parse_date = function ($d) use ($months_fr) {
        if (!isset($d) || empty($d))
            return 0;
        foreach ($months_fr as $name => $num) {
            $d = str_replace($name, $num, $d);
        }
        // Format attendu: "18 03 2026"
        $parts = explode(' ', trim($d));
        if (count($parts) === 3) {
            return strtotime($parts[2] . '-' . $parts[1] . '-' . $parts[0]);
        }
        return 0;
    };

    return $parse_date($b['date'] ?? '') - $parse_date($a['date'] ?? '');
});

// Grouper les articles par catégorie
$articles_by_cat = [];
foreach ($all_articles as $art) {
    $cat = $art['category'] ?? 'occasion';
    if (!isset($articles_by_cat[$cat])) {
        $articles_by_cat[$cat] = [];
    }
    $articles_by_cat[$cat][] = $art;
}

// Inclusion de l'en-tête
include 'header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?q=80&w=2000&auto=format&fit=crop"
        alt="Voiture sportive dans un garage sombre" class="hero-bg">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <span class="hero-badge">Expertise & Passion Automobile</span>
        <h1>Le Magazine qui fait vrombir <span>votre passion</span></h1>
        <p>Retrouvez chaque jour nos essais exclusifs, décryptages du marché des occasions et tutoriels mécaniques
            approfondis pour prendre soin de votre voiture.</p>
        <div class="btn-group">
            <a href="/occasion" class="btn-outline">Guides d'achat Occasion</a>
        </div>
    </div>
</section>

<!-- Quick Features / Services -->
<section class="features-wrapper">
    <div class="features-grid">
        <div class="feature-card">
            <div class="feature-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path
                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                    </path>
                </svg>
            </div>
            <h3>Essais Exclusifs</h3>
            <p>Nos journalistes poussent les derniers modèles dans leurs retranchements sur route et sur circuit.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
            </div>
            <h3>Guides & Checklists</h3>
            <p>Tutoriels d'entretien et fiches fiabilités pointues pour ne pas vous faire arnaquer en occasion.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                    </path>
                </svg>
            </div>
            <h3>Actualité du marché</h3>
            <p>Transition écologique, nouvelles réglementations ZFE et analyses économiques du monde de l'automobile.
            </p>
        </div>
    </div>
</section>

<!-- Expertise Section (E-E-A-T) -->
<section class="expertise-section">
    <div class="expertise-container">
        <div class="expertise-content">
            <h2>L'actualité par l'<br><span>Expertise du cambouis</span></h2>
            <p>Le garage expert Auto, c'est avant tout une histoire de famille. D'un côté, <strong>David (le
                    père)</strong>, mécanicien avec plus de 30 ans d'expérience. De l'autre, <strong>Arnaud (le
                    fils)</strong>, tombé dedans quand il était petit, aujourd'hui essayeur et rédacteur passionné.</p>
            <p>Que vous vouliez connaître les pannes récurrentes du moteur PureTech ou les meilleures SUV hybrides du
                marché, nous décryptons l'auto sous la tôle. Des contenus d'experts concrets, rédigés par Arnaud et
                validés techniquement par son père. Sans langue de bois.</p>

            <div class="expertise-stats">
                <div class="stat-item">
                    <h4>+150</h4>
                    <span>Guides Techniques</span>
                </div>
                <div class="stat-item">
                    <h4>100%</h4>
                    <span>Indépendant</span>
                </div>
            </div>
            <a href="/equipe" class="btn-outline">Découvrir notre histoire</a>
        </div>
        <div class="expertise-img">
            <img src="/Image/both.png" alt="David et Arnaud, père et fils, fondateurs d'Le garage expert Auto">
        </div>
    </div>
</section>

<?php if (!empty($all_articles)): ?>
    <!-- Magazine Blog Layout : Latest Articles -->
    <section class="section">
        <div class="section-header">
            <h2 class="section-title">À la Une <span>Aujourd'hui</span></h2>
        </div>

        <div class="articles-grid">
            <?php
            $first = true;
            foreach ($all_articles as $art):
                $cat_slug = $art['category'] ?? 'occasion';
                $cat_color = $art['category_color'] ?? ($categories_config[$cat_slug]['color'] ?? '#333');
                $cat_name = $art['category_name'] ?? ($categories_config[$cat_slug]['name'] ?? 'Article');
                $art_url = $art['url'] ?? '#';
                $art_image = '/' . ltrim($art['image'] ?? '', '/');
                $art_title = $art['title'] ?? 'Sans titre';
                $art_author = $art['author'] ?? 'Rédaction';
                $art_reading = $art['reading_time'] ?? '5 min';
                $art_date = $art['date'] ?? '';
                ?>
                <?php if ($first): ?>
                    <!-- Featured Article -->
                    <article class="article-featured">
                        <img src="<?php echo htmlspecialchars($art_image); ?>" alt="<?php echo htmlspecialchars($art_title); ?>">
                        <div class="article-featured-content">
                            <span class="article-cat"
                                style="background-color: <?php echo $cat_color; ?>; color: white; border-radius: 4px; padding:2px 8px; font-weight: 600; font-size: 0.8rem; margin-bottom: 15px; display: inline-block;"><?php echo htmlspecialchars($cat_name); ?></span>
                            <h3><a href="<?php echo $art_url; ?>"
                                    style="color:white; text-decoration:none;"><?php echo htmlspecialchars($art_title); ?></a></h3>
                            <div class="article-meta">
                                <span>Par <?php echo htmlspecialchars($art_author); ?></span>
                                <span>&bull;</span>
                                <span>Temps de lecture : <?php echo htmlspecialchars($art_reading); ?></span>
                            </div>
                        </div>
                        <a href="<?php echo $art_url; ?>" style="position: absolute; top:0; left:0; width:100%; height:100%;"></a>
                    </article>
                    <?php $first = false; ?>
                <?php else: ?>
                    <!-- Article Card -->
                    <article class="article-card">
                        <div class="article-card-img">
                            <span class="article-cat"
                                style="background-color: <?php echo $cat_color; ?>;"><?php echo htmlspecialchars($cat_name); ?></span>
                            <img src="<?php echo htmlspecialchars($art_image); ?>"
                                alt="<?php echo htmlspecialchars($art_title); ?>">
                        </div>
                        <div class="article-card-content">
                            <h3><a href="<?php echo $art_url; ?>"><?php echo htmlspecialchars($art_title); ?></a></h3>
                            <p><?php echo htmlspecialchars($art['subtitle'] ?? ''); ?></p>
                            <div class="article-meta"><?php echo htmlspecialchars($art_date); ?></div>
                        </div>
                    </article>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Sections par catégorie (si articles existent dans cette catégorie) -->
    <?php foreach ($categories_config as $cat_slug => $cat_info): ?>
        <?php if (!empty($articles_by_cat[$cat_slug])): ?>
            <section class="section" style="margin-top: 60px;">
                <div class="section-header">
                    <h2 class="section-title" style="color: <?php echo $cat_info['color']; ?>;">Derniers articles
                        <span><?php echo $cat_info['name']; ?></span>
                    </h2>
                    <a href="/<?php echo $cat_slug; ?>" class="view-all"
                        style="color: <?php echo $cat_info['color']; ?>; border-color: <?php echo $cat_info['color']; ?>;">Voir tout
                        <?php echo $cat_info['name']; ?> <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg></a>
                </div>

                <div class="articles-grid">
                    <?php foreach ($articles_by_cat[$cat_slug] as $art):
                        $art_url = $art['url'] ?? '#';
                        $art_image = '/' . ltrim($art['image'] ?? '', '/');
                        $art_title = $art['title'] ?? 'Sans titre';
                        $art_date = $art['date'] ?? '';
                        ?>
                        <article class="article-card">
                            <div class="article-card-img">
                                <span class="article-cat"
                                    style="background-color: <?php echo $cat_info['color']; ?>;"><?php echo $cat_info['name']; ?></span>
                                <img src="<?php echo htmlspecialchars($art_image); ?>"
                                    alt="<?php echo htmlspecialchars($art_title); ?>">
                            </div>
                            <div class="article-card-content">
                                <h3><a href="<?php echo $art_url; ?>"><?php echo htmlspecialchars($art_title); ?></a></h3>
                                <p><?php echo htmlspecialchars($art['subtitle'] ?? ''); ?></p>
                                <div class="article-meta"><?php echo htmlspecialchars($art_date); ?></div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>
    <?php endforeach; ?>

<?php else: ?>
    <!-- Message si aucun article -->
    <section class="section">
        <div class="section-header">
            <h2 class="section-title">À la Une</h2>
        </div>
        <p style="text-align: center; padding: 40px 20px; color: #666;">Les articles arrivent bientôt. Restez connectés !
        </p>
    </section>
<?php endif; ?>

<?php
// Inclusion du pied de page
include 'footer.php';
?>
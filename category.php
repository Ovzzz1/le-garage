<?php
/**
 * category.php
 * Template de page Catégorie (Archive)
 * Scanne le dossier Blog/ pour afficher les vrais articles de la catégorie
 * URLs propres via .htaccess : /assurance, /entretien, etc.
 */

// Définition des catégories avec leurs metas
$categories = [
    'assurance' => [
        'name' => 'Assurance & Financement',
        'slug' => 'assurance',
        'description' => 'Comparatifs d\'assurances auto, guides de financement, leasing vs achat, crédit automobile et astuces pour payer moins cher.',
        'hero_image' => 'https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?q=80&w=1400&auto=format&fit=crop',
        'color' => '#2563eb',
    ],
    'entretien' => [
        'name' => 'Entretien & Réparation',
        'slug' => 'entretien',
        'description' => 'Tutoriels mécaniques, guides de vidange, freinage, pneumatiques et tout ce qu\'il faut savoir pour entretenir votre voiture comme un pro.',
        'hero_image' => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?q=80&w=1400&auto=format&fit=crop',
        'color' => '#dc2626',
    ],
    'electrique' => [
        'name' => 'Électrique & Hybride',
        'slug' => 'electrique',
        'description' => 'Essais de véhicules électriques, comparatifs de bornes de recharge, autonomie réelle et guides pour réussir votre transition écologique.',
        'hero_image' => 'https://images.unsplash.com/photo-1593941707882-a5bba14938c7?q=80&w=1400&auto=format&fit=crop',
        'color' => '#059669',
    ],
    'occasion' => [
        'name' => 'Achat & Occasion',
        'slug' => 'occasion',
        'description' => 'Guides d\'achat, check-lists de contrôle, fiches fiabilité et pièges à éviter pour acheter votre prochaine voiture d\'occasion en toute sérénité.',
        'hero_image' => 'https://images.unsplash.com/photo-1550355291-bbee04a92027?q=80&w=1400&auto=format&fit=crop',
        'color' => '#7c3aed',
    ],
    'moto' => [
        'name' => 'Moto & 2 Roues',
        'slug' => 'moto',
        'description' => 'Essais moto, comparatifs d\'équipements, guides d\'achat scooter et conseils d\'entretien pour les passionnés de deux roues.',
        'hero_image' => 'https://images.unsplash.com/photo-1558981806-ec527fa84c39?q=80&w=1400&auto=format&fit=crop',
        'color' => '#ea580c',
    ],
    'permis' => [
        'name' => 'Permis',
        'slug' => 'permis',
        'description' => 'Réglementation automobile, contester un PV, contrôle technique, ZFE, récupération de points et astuces juridiques pour les automobilistes.',
        'hero_image' => 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?q=80&w=1400&auto=format&fit=crop',
        'color' => '#0891b2',
    ],
];

// Récupérer la catégorie depuis l'URL
$cat_slug = isset($_GET['cat']) ? $_GET['cat'] : 'assurance';
$category = isset($categories[$cat_slug]) ? $categories[$cat_slug] : $categories['assurance'];

// ─── Scan du dossier Blog/ pour récupérer les articles de cette catégorie ───
$cat_articles = [];
$blog_dir = __DIR__ . '/Blog';

if (is_dir($blog_dir)) {
    $files = glob($blog_dir . '/*.php');
    foreach ($files as $file) {
        if (str_starts_with(basename($file), '_'))
            continue;
        $article = null;
        $content = file_get_contents($file);

        if (preg_match('/\$article\s*=\s*\[(.+?)\];/s', $content, $matches)) {
            try {
                eval ('$article = [' . $matches[1] . '];');
            } catch (Throwable $e) {
                continue;
            }
        }

        if ($article && isset($article['title'])) {
            // Seulement les articles de cette catégorie
            $art_cat = $article['category'] ?? '';
            if ($art_cat !== $cat_slug) {
                continue;
            }

            $slug = pathinfo($file, PATHINFO_FILENAME);
            $article['slug'] = $slug;
            $article['url'] = '/Blog/' . $slug;
            $article['image'] = '/' . ltrim($article['image'] ?? '', '/');

            $cat_articles[] = $article;
        }
    }
}

// Trier par date (plus récent en premier)
usort($cat_articles, function ($a, $b) {
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
        $parts = explode(' ', trim($d));
        if (count($parts) === 3) {
            return strtotime($parts[2] . '-' . $parts[1] . '-' . $parts[0]);
        }
        return 0;
    };
    return $parse_date($b['date'] ?? '') - $parse_date($a['date'] ?? '');
});

$page_title = $category['name'] . " - Le garage expert Auto";
$page_description = $category['description'];

include 'header.php';
?>

<!-- Category Hero -->
<section class="cat-hero" style="--cat-color: <?php echo $category['color']; ?>">
    <img src="<?php echo $category['hero_image']; ?>" alt="<?php echo $category['name']; ?>" class="cat-hero-bg">
    <div class="cat-hero-overlay"></div>
    <div class="cat-hero-content">
        <h1><?php echo $category['name']; ?></h1>
        <p><?php echo $category['description']; ?></p>
        <div class="cat-stats">
            <span><?php echo count($cat_articles); ?> article<?php echo count($cat_articles) > 1 ? 's' : ''; ?></span>
            <span class="cat-stats-sep">&bull;</span>
            <span>Mis à jour régulièrement</span>
        </div>
    </div>
</section>

<!-- Category Navigation -->
<nav class="cat-nav">
    <div class="cat-nav-inner">
        <?php foreach ($categories as $slug => $cat): ?>
            <a href="/<?php echo $slug; ?>" class="cat-nav-item <?php echo $slug === $cat_slug ? 'active' : ''; ?>">
                <?php echo $cat['name']; ?>
            </a>
        <?php endforeach; ?>
    </div>
</nav>

<!-- Articles Grid -->
<section class="cat-content">
    <div class="cat-container">

        <?php if (!empty($cat_articles)): ?>

            <?php
            // Séparer le premier article (featured) des autres
            $featured = $cat_articles[0];
            $regular = array_slice($cat_articles, 1);
            ?>

            <!-- Featured Article -->
            <article class="cat-featured">
                <div class="cat-featured-img">
                    <img src="<?php echo htmlspecialchars($featured['image']); ?>"
                        alt="<?php echo htmlspecialchars($featured['title']); ?>">
                </div>
                <div class="cat-featured-body">
                    <span class="cat-badge"
                        style="background-color: <?php echo $category['color']; ?>"><?php echo $category['name']; ?></span>
                    <h2><?php echo htmlspecialchars($featured['title']); ?></h2>
                    <p><?php echo htmlspecialchars($featured['subtitle'] ?? ''); ?></p>
                    <div class="cat-article-meta">
                        <span>Par <?php echo htmlspecialchars($featured['author'] ?? 'Rédaction'); ?></span>
                        <span>&bull;</span>
                        <span>Lecture <?php echo htmlspecialchars($featured['reading_time'] ?? '5 min'); ?></span>
                        <span>&bull;</span>
                        <span><?php echo htmlspecialchars($featured['date'] ?? ''); ?></span>
                    </div>
                    <a href="<?php echo $featured['url']; ?>" class="btn-primary"
                        style="margin-top:20px; background-color: <?php echo $category['color']; ?>; border-color: <?php echo $category['color']; ?>;">Lire
                        l'article →</a>
                </div>
            </article>

            <?php if (!empty($regular)): ?>
                <!-- Regular Articles Grid -->
                <div class="cat-grid">
                    <?php foreach ($regular as $art): ?>
                        <article class="cat-card">
                            <div class="cat-card-img">
                                <img src="<?php echo htmlspecialchars($art['image']); ?>"
                                    alt="<?php echo htmlspecialchars($art['title']); ?>">
                                <span class="cat-badge"
                                    style="background-color: <?php echo $category['color']; ?>"><?php echo $category['name']; ?></span>
                            </div>
                            <div class="cat-card-body">
                                <h3><a href="<?php echo $art['url']; ?>"><?php echo htmlspecialchars($art['title']); ?></a></h3>
                                <p><?php echo htmlspecialchars($art['subtitle'] ?? ''); ?></p>
                                <div class="cat-article-meta">
                                    <span>Par <?php echo htmlspecialchars($art['author'] ?? 'Rédaction'); ?></span>
                                    <span>&bull;</span>
                                    <span>Lecture <?php echo htmlspecialchars($art['reading_time'] ?? '5 min'); ?></span>
                                    <span>&bull;</span>
                                    <span><?php echo htmlspecialchars($art['date'] ?? ''); ?></span>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        <?php else: ?>
            <!-- Aucun article dans cette catégorie -->
            <div style="text-align: center; padding: 80px 20px;">
                <div style="font-size: 4rem; margin-bottom: 20px;">🔧</div>
                <h2 style="font-size: 1.8rem; margin-bottom: 15px; color: <?php echo $category['color']; ?>;">Aucun article
                    pour le moment</h2>
                <p style="color: #666; font-size: 1.1rem; max-width: 500px; margin: 0 auto 30px;">Nos rédacteurs travaillent
                    sur du contenu pour la catégorie <strong><?php echo $category['name']; ?></strong>. Revenez vite !</p>
                <a href="/" class="btn-primary"
                    style="background-color: <?php echo $category['color']; ?>; border-color: <?php echo $category['color']; ?>;">Retour
                    à l'accueil</a>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php include 'footer.php'; ?>
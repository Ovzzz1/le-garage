<?php
/**
 * _article-template.php — Le garage expert Auto (garageraymond.fr)
 * Moteur de rendu commun à tous les articles du blog.
 * NE JAMAIS MODIFIER ce fichier sauf pour faire évoluer le design global.
 *
 * Usage depuis un article :
 *   $article = [ ...données... ];
 *   include __DIR__ . '/_article-template.php';
 */

// ── Config catégories (référentiel unique) ───────────────────────────────────
$categories = [
    'assurance'  => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien'  => ['name' => 'Entretien & Réparation',  'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Électrique & Hybride',    'color' => '#059669', 'slug' => 'electrique'],
    'occasion'   => ['name' => 'Achat & Occasion',        'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto'       => ['name' => 'Moto & 2 Roues',          'color' => '#ea580c', 'slug' => 'moto'],
    'permis'     => ['name' => 'Permis',                  'color' => '#0891b2', 'slug' => 'permis'],
];

$cat            = $categories[$article['category']] ?? $categories['occasion'];
$cat_name       = $cat['name'];
$cat_color      = $cat['color'];
$cat_slug       = $cat['slug'];

// Récupérer le slug du fichier appelant
$backtrace    = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1);
$caller_file  = $backtrace[0]['file'] ?? __FILE__;
$current_slug = pathinfo($caller_file, PATHINFO_FILENAME);

// ── Scan Blog/ pour articles liés ───────────────────────────────────────────
$same_cat_articles  = [];
$all_other_articles = [];
$blog_dir           = __DIR__;

if (is_dir($blog_dir)) {
    foreach (glob($blog_dir . '/*.php') as $file) {
        $file_slug = pathinfo($file, PATHINFO_FILENAME);
        if ($file_slug === $current_slug || str_starts_with($file_slug, '_')) continue;

        $other   = null;
        $content = file_get_contents($file);
        if (preg_match('/\$article\s*=\s*\[(.+?)\];/s', $content, $m)) {
            try { eval('$other = [' . $m[1] . '];'); } catch (Throwable $e) { continue; }
        }
        if ($other && isset($other['title'])) {
            $other['slug']  = $file_slug;
            $other['url']   = '/' . $file_slug;
            $other['image'] = '/' . ltrim($other['image'] ?? '', '/');
            if (($other['category'] ?? '') === $article['category']) $same_cat_articles[] = $other;
            $all_other_articles[] = $other;
        }
    }
}

// ── Variables pour header.php ────────────────────────────────────────────────
$page_title       = $article['title'];
$page_description = $article['subtitle'];
$og_image         = 'https://garageraymond.fr' . $article['image'];
$og_type          = 'article';

include __DIR__ . '/../header.php';
?>

<main>
<article>

<!-- HERO -->
<section class="art-hero">
    <img src="<?php echo htmlspecialchars($article['image']); ?>"
         alt="<?php echo htmlspecialchars($article['title']); ?>"
         class="art-hero-bg" fetchpriority="high" decoding="async"
         width="1200" height="675" onerror="this.style.opacity='0'">
    <div class="art-hero-overlay"></div>

    <div class="art-hero-container">
        <div class="art-hero-content">
            <nav class="art-breadcrumb">
                <a href="/">Accueil</a>
                <span class="art-bc-sep">/</span>
                <a href="/<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></a>
                <span class="art-bc-sep">/</span>
                <span><?php echo htmlspecialchars($article['title']); ?></span>
            </nav>

            <div class="art-hero-tags">
                <?php foreach ($article['tags'] as $tag): ?>
                    <span class="art-tag"><?php echo htmlspecialchars($tag); ?></span>
                <?php endforeach; ?>
            </div>

            <h1><?php echo htmlspecialchars($article['title']); ?></h1>
            <p class="art-hero-sub"><?php echo htmlspecialchars($article['subtitle']); ?></p>

            <div class="art-hero-meta">
                <div class="art-author-pill">
                    <img src="<?php echo htmlspecialchars($article['author_img']); ?>"
                         alt="<?php echo htmlspecialchars($article['author']); ?>"
                         width="40" height="40" decoding="async">
                    <div>
                        <strong>Par <?php echo htmlspecialchars($article['author']); ?></strong>
                        <span><?php echo htmlspecialchars($article['author_role']); ?></span>
                    </div>
                </div>
                <div class="art-meta-infos">
                    <span><?php echo htmlspecialchars($article['date']); ?></span>
                    <span>&bull;</span>
                    <span>Lecture <?php echo htmlspecialchars($article['reading_time']); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BARRE NAV CATÉGORIES -->
<nav class="art-cat-nav">
    <div class="art-cat-nav-inner">
        <?php foreach ($categories as $slug_cat => $c): ?>
            <a href="/<?php echo $slug_cat; ?>"
               class="art-cat-link <?php echo $slug_cat === $article['category'] ? 'active' : ''; ?>"
               style="--link-color: <?php echo $c['color']; ?>">
                <span class="art-cat-dot" style="background-color: <?php echo $c['color']; ?>"></span>
                <?php echo $c['name']; ?>
            </a>
        <?php endforeach; ?>
    </div>
</nav>

<!-- LAYOUT ASYMÉTRIQUE (70/30) -->
<div class="art-layout-wrapper">

    <!-- COLONNE PRINCIPALE -->
    <div class="art-main-col">

        <?php if (!empty($article['tldr'])): ?>
        <div class="art-tldr">
            <div class="art-tldr-title">L'essentiel à retenir (TL;DR)</div>
            <ul>
                <?php foreach ($article['tldr'] as $point): ?>
                <li><?php echo $point; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

        <?php if (!empty($article['toc'])): ?>
        <div class="art-toc">
            <div class="art-toc-title">Dans ce dossier</div>
            <ol>
                <?php foreach ($article['toc'] as $item): ?>
                <li><a href="#<?php echo $item['anchor']; ?>"><?php echo htmlspecialchars($item['label']); ?></a></li>
                <?php endforeach; ?>
            </ol>
        </div>
        <?php endif; ?>

        <div class="art-content">

            <?php echo $article['content']; ?>

            <?php if (!empty($article['faq'])): ?>
            <h2 id="faq">FAQ — Questions fréquentes</h2>
            <div class="faq-list">
                <?php foreach ($article['faq'] as $i => $item): ?>
                <details class="faq-item" id="faq-<?php echo $i + 1; ?>">
                    <summary><?php echo htmlspecialchars($item['q']); ?></summary>
                    <p><?php echo htmlspecialchars($item['a']); ?></p>
                </details>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

        </div><!-- .art-content -->

        <!-- BOX AUTEUR -->
        <div class="art-author-box">
            <img src="<?php echo htmlspecialchars($article['author_img']); ?>"
                 alt="<?php echo htmlspecialchars($article['author']); ?>"
                 class="art-author-avatar" width="80" height="80" loading="lazy" decoding="async">
            <div class="art-author-info">
                <span class="art-author-label">La Parole à L'expert</span>
                <h3><?php echo htmlspecialchars($article['author']); ?></h3>
                <span class="art-author-role"><?php echo htmlspecialchars($article['author_role']); ?></span>
                <p><?php echo htmlspecialchars($article['author_bio']); ?></p>
                <a href="/equipe" class="art-author-link">Découvrir toute la rédaction</a>
            </div>
        </div>

        <?php if (!empty($article['conclusion'])): ?>
        <div class="art-conclusion">
            <h2>Le mot de la fin</h2>
            <p><?php echo htmlspecialchars($article['conclusion']); ?></p>
        </div>
        <?php endif; ?>

        <!-- ARTICLES LIÉS -->
        <section class="art-related">
            <h2 class="art-related-title">Poursuivre la lecture dans <a href="/<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></a></h2>
            <div class="art-related-grid">
                <?php $related_list = !empty($same_cat_articles) ? $same_cat_articles : array_slice($all_other_articles, 0, 3); ?>
                <?php if (!empty($related_list)): ?>
                    <?php foreach (array_slice($related_list, 0, 3) as $rel): ?>
                    <a href="<?php echo htmlspecialchars($rel['url']); ?>" class="art-related-card">
                        <div class="art-related-img">
                            <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                 alt="<?php echo htmlspecialchars($rel['title']); ?>"
                                 loading="lazy" decoding="async" width="400" height="225">
                        </div>
                        <div class="art-related-body">
                            <h3><?php echo htmlspecialchars($rel['title']); ?></h3>
                            <p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p>
                            <span class="art-related-meta">
                                <?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull;
                                <?php echo htmlspecialchars($rel['date'] ?? ''); ?>
                            </span>
                        </div>
                    </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p style="color:#666;padding:20px 0;">D'autres articles arrivent bientôt dans cette catégorie !</p>
                <?php endif; ?>
            </div>
        </section>

    </div><!-- .art-main-col -->

    <!-- SIDEBAR -->
    <aside class="art-sidebar-right">
        <div class="art-sidebar-sticky">
            <?php if (!empty($same_cat_articles)): ?>
            <div class="art-sidebar-block">
                <div class="art-sidebar-block-title">Dans ce dossier</div>
                <?php foreach (array_slice($same_cat_articles, 0, 3) as $sa): ?>
                <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                    <div class="art-side-img">
                        <img src="<?php echo htmlspecialchars($sa['image']); ?>"
                             alt="<?php echo htmlspecialchars($sa['title']); ?>"
                             width="160" height="90" loading="lazy" decoding="async">
                        <span class="art-side-cat-pill" style="background:<?php echo $cat_color; ?>">
                            <?php echo $cat_name; ?>
                        </span>
                    </div>
                    <h4><?php echo htmlspecialchars($sa['title']); ?></h4>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if (!empty($all_other_articles)): ?>
            <div class="art-sidebar-block">
                <div class="art-sidebar-block-title">À la Une</div>
                <?php foreach (array_slice($all_other_articles, 0, 3) as $ra): ?>
                <a href="<?php echo $ra['url']; ?>" class="art-side-card">
                    <div class="art-side-img">
                        <img src="<?php echo htmlspecialchars($ra['image']); ?>"
                             alt="<?php echo htmlspecialchars($ra['title']); ?>"
                             width="160" height="90" loading="lazy" decoding="async">
                    </div>
                    <h4><?php echo htmlspecialchars($ra['title']); ?></h4>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <?php if (empty($same_cat_articles) && empty($all_other_articles)): ?>
            <div class="art-sidebar-block">
                <div class="art-sidebar-block-title">Explorer</div>
                <a href="/<?php echo $cat_slug; ?>" class="btn-primary"
                   style="display:block;text-align:center;background-color:<?php echo $cat_color; ?>;border-color:<?php echo $cat_color; ?>;margin-top:15px;">
                    Voir tous les articles <?php echo $cat_name; ?>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </aside>

</div><!-- .art-layout-wrapper -->
</article>
</main>

<!-- Schema JSON-LD -->
<script type="application/ld+json">
<?php
$schema = [
    "@context" => "https://schema.org",
    "@graph"   => [
        [
            "@type"            => "Article",
            "mainEntityOfPage" => ["@type" => "WebPage", "@id" => "https://garageraymond.fr/" . $current_slug],
            "headline"         => $article['title'],
            "description"      => $article['subtitle'],
            "image"            => ["https://garageraymond.fr" . $article['image']],
            "datePublished"    => ($article['date_iso'] ?? date('Y-m-d')) . "T10:00:00+02:00",
            "dateModified"     => ($article['date_iso'] ?? date('Y-m-d')) . "T10:00:00+02:00",
            "author"           => ["@type" => "Person", "name" => $article['author'], "url" => "https://garageraymond.fr/equipe", "jobTitle" => $article['author_role']],
            "publisher"        => ["@type" => "Organization", "name" => "Le garage expert Auto", "url" => "https://garageraymond.fr", "logo" => ["@type" => "ImageObject", "url" => "https://garageraymond.fr/Image/favicon.png", "width" => "512", "height" => "512"]]
        ],
        [
            "@type"           => "BreadcrumbList",
            "itemListElement" => [
                ["@type" => "ListItem", "position" => 1, "name" => "Accueil", "item" => "https://garageraymond.fr/"],
                ["@type" => "ListItem", "position" => 2, "name" => $cat_name, "item" => "https://garageraymond.fr/" . $cat_slug],
                ["@type" => "ListItem", "position" => 3, "name" => $article['title'], "item" => "https://garageraymond.fr/" . $current_slug]
            ]
        ]
    ]
];
if (!empty($article['faq'])) {
    $schema["@graph"][] = [
        "@type"      => "FAQPage",
        "mainEntity" => array_map(fn($item) => [
            "@type"          => "Question",
            "name"           => $item['q'],
            "acceptedAnswer" => ["@type" => "Answer", "text" => $item['a']]
        ], $article['faq'])
    ];
}
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

<?php
/**
 * slug-de-larticle.php
 * ⚠️ RENOMMER CE FICHIER avec le slug de l'article (ex: comment-choisir-son-assurance-auto.php)
 * ⚠️ NE PAS LAISSER CE FICHIER TEL QUEL — il sera affiché sur le site sinon
 */

$page_title = "Titre SEO de l'article - Le garage expert Auto";
$page_description = "Meta description de l'article (155 caractères max).";

$article = [
    'title' => 'Titre H1 de l\'article',
    'subtitle' => 'Sous-titre court qui résume l\'article.',
    'category' => 'occasion',          // 👈 CHOISIR PARMI : assurance, entretien, electrique, occasion, moto, permis
    'category_name' => 'Achat & Occasion', // 👈 NOM DISPLAY de la catégorie
    'category_color' => '#7c3aed',     // 👈 COULEUR : assurance=#2563eb, entretien=#dc2626, electrique=#059669, occasion=#7c3aed, moto=#ea580c, permis=#0891b2
    'tags' => ['Tag 1', 'Tag 2', 'Tag 3'],
    'image' => '/Image/nom-de-image.webp',  // 👈 Image hero (à uploader dans /Image/)
    'date' => '20 Mars 2026',          // 👈 FORMAT : JJ Mois AAAA
    'author' => 'Arnaud',
    'author_role' => 'Rédacteur & Essayeur passionné',
    'author_img' => '/Image/arnaud.png',
    'author_bio' => 'Tombé dans le cambouis quand il était petit grâce à son père David, Arnaud a transformé sa passion en expertise. Il teste sans concession les derniers modèles et décortique le marché.',
    'reading_time' => '7 min',
];

$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien' => ['name' => 'Entretien & Réparation', 'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Électrique & Hybride', 'color' => '#059669', 'slug' => 'electrique'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c', 'slug' => 'moto'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2', 'slug' => 'permis'],
];

// ─── Scan dynamique du Blog/ pour le linking interne (NE PAS TOUCHER) ───
$current_slug = pathinfo(__FILE__, PATHINFO_FILENAME);
$same_cat_articles = [];
$all_other_articles = [];
$blog_dir = __DIR__;

if (is_dir($blog_dir)) {
    $files = glob($blog_dir . '/*.php');
    foreach ($files as $file) {
        $file_slug = pathinfo($file, PATHINFO_FILENAME);
        if ($file_slug === $current_slug || $file_slug === '_TEMPLATE-ARTICLE')
            continue;

        $other_article = null;
        $content = file_get_contents($file);

        if (preg_match('/\$article\s*=\s*\[(.+?)\];/s', $content, $matches)) {
            try {
                eval ('$other_article = [' . $matches[1] . '];');
            } catch (Throwable $e) {
                continue;
            }
        }

        if ($other_article && isset($other_article['title'])) {
            $other_article['slug'] = $file_slug;
            $other_article['url'] = '/Blog/' . $file_slug;
            $other_article['image'] = '/' . ltrim($other_article['image'] ?? '', '/');

            if (($other_article['category'] ?? '') === $article['category']) {
                $same_cat_articles[] = $other_article;
            }
            $all_other_articles[] = $other_article;
        }
    }
}

include __DIR__ . '/../header.php';
?>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" class="art-hero-bg">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>">
                        <?php echo $article['category_name']; ?>
                    </a>
                    <span class="art-bc-sep">/</span>
                    <span>Article</span>
                </nav>

                <div class="art-hero-tags">
                    <?php foreach ($article['tags'] as $tag): ?>
                        <span class="art-tag">
                            <?php echo $tag; ?>
                        </span>
                    <?php endforeach; ?>
                </div>

                <h1>
                    <?php echo $article['title']; ?>
                </h1>
                <p class="art-hero-sub">
                    <?php echo $article['subtitle']; ?>
                </p>

                <div class="art-hero-meta">
                    <div class="art-author-pill">
                        <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>">
                        <div>
                            <strong>Par
                                <?php echo $article['author']; ?>
                            </strong>
                            <span>
                                <?php echo $article['author_role']; ?>
                            </span>
                        </div>
                    </div>
                    <div class="art-meta-infos">
                        <span>
                            <?php echo $article['date']; ?>
                        </span>
                        <span>&bull;</span>
                        <span>Lecture
                            <?php echo $article['reading_time']; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HORIZONTAL CATEGORY NAV -->
    <nav class="art-cat-nav">
        <div class="art-cat-nav-inner">
            <?php foreach ($categories as $slug_cat => $cat): ?>
                <a href="/<?php echo $slug_cat; ?>"
                    class="art-cat-link <?php echo $slug_cat === $article['category'] ? 'active' : ''; ?>"
                    style="--link-color: <?php echo $cat['color']; ?>">
                    <span class="art-cat-dot" style="background-color: <?php echo $cat['color']; ?>"></span>
                    <?php echo $cat['name']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </nav>

    <!-- ASYMMETRIC LAYOUT (70 / 30) -->
    <div class="art-layout-wrapper">

        <!-- MAIN CONTENT -->
        <div class="art-main-col">

            <!-- TL;DR Dashboard Box -->
            <div class="art-tldr">
                <div class="art-tldr-title">L'essentiel à retenir (TL;DR)</div>
                <ul>
                    <li><strong>Point 1 :</strong> Résumé du point clé numéro 1.</li>
                    <li><strong>Point 2 :</strong> Résumé du point clé numéro 2.</li>
                    <li><strong>Point 3 :</strong> Résumé du point clé numéro 3.</li>
                </ul>
            </div>

            <!-- Table of Contents Magazine -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#section-1">Titre de la section 1</a></li>
                    <li><a href="#section-2">Titre de la section 2</a></li>
                    <li><a href="#section-3">Titre de la section 3</a></li>
                    <li><a href="#conclusion">Ce qu'il faut retenir</a></li>
                </ol>
            </div>

            <!-- ═══════════════════════════════════════════ -->
            <!-- 👇 CONTENU DE L'ARTICLE ICI 👇             -->
            <!-- ═══════════════════════════════════════════ -->
            <div class="art-content">

                <h2 id="section-1">Titre de la section 1</h2>
                <p>Contenu de la section 1...</p>

                <h2 id="section-2">Titre de la section 2</h2>
                <p>Contenu de la section 2...</p>

                <h2 id="section-3">Titre de la section 3</h2>
                <p>Contenu de la section 3...</p>

                <h2 id="conclusion">Ce qu'il faut retenir</h2>
                <p>Conclusion de l'article...</p>

            </div><!-- .art-content -->

            <!-- Premium Author Box (NE PAS TOUCHER) -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"
                    class="art-author-avatar">
                <div class="art-author-info">
                    <span class="art-author-label">La Parole à L'expert</span>
                    <h3>
                        <?php echo $article['author']; ?>
                    </h3>
                    <span class="art-author-role">
                        <?php echo $article['author_role']; ?>
                    </span>
                    <p>
                        <?php echo $article['author_bio']; ?>
                    </p>
                    <a href="/equipe" class="art-author-link">Découvrir toute la rédaction</a>
                </div>
            </div>

            <!-- Conclusion Box -->
            <div class="art-conclusion">
                <h2>Le mot de la fin</h2>
                <p>Phrase de conclusion marquante pour l'article.</p>
            </div>

            <!-- Similar Articles (DYNAMIQUE — NE PAS TOUCHER) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/<?php echo $article['category']; ?>">
                        <?php echo $article['category_name']; ?>
                    </a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach ($same_cat_articles as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                        alt="<?php echo htmlspecialchars($rel['title']); ?>">
                                </div>
                                <div class="art-related-body">
                                    <h3>
                                        <?php echo htmlspecialchars($rel['title']); ?>
                                    </h3>
                                    <p>
                                        <?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?>
                                    </p>
                                    <span class="art-related-meta">
                                        <?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull;
                                        <?php echo htmlspecialchars($rel['date'] ?? ''); ?>
                                    </span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php elseif (!empty($all_other_articles)): ?>
                        <?php foreach (array_slice($all_other_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                        alt="<?php echo htmlspecialchars($rel['title']); ?>">
                                </div>
                                <div class="art-related-body">
                                    <h3>
                                        <?php echo htmlspecialchars($rel['title']); ?>
                                    </h3>
                                    <p>
                                        <?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?>
                                    </p>
                                    <span class="art-related-meta">
                                        <?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull;
                                        <?php echo htmlspecialchars($rel['date'] ?? ''); ?>
                                    </span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p style="color: #666; padding: 20px 0;">D'autres articles arrivent bientôt dans cette catégorie !
                        </p>
                    <?php endif; ?>
                </div>
            </section>

        </div><!-- .art-main-col -->

        <!-- SIDEBAR (DYNAMIQUE — NE PAS TOUCHER) -->
        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">
                <?php if (!empty($same_cat_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Dans ce dossier</div>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $sa): ?>
                            <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($sa['image']); ?>"
                                        alt="<?php echo htmlspecialchars($sa['title']); ?>">
                                    <span class="art-side-cat-pill"
                                        style="background: <?php echo $article['category_color']; ?>">
                                        <?php echo $article['category_name']; ?>
                                    </span>
                                </div>
                                <h4>
                                    <?php echo htmlspecialchars($sa['title']); ?>
                                </h4>
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
                                        alt="<?php echo htmlspecialchars($ra['title']); ?>">
                                </div>
                                <h4>
                                    <?php echo htmlspecialchars($ra['title']); ?>
                                </h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (empty($same_cat_articles) && empty($all_other_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Explorer</div>
                        <a href="/<?php echo $article['category']; ?>" class="btn-primary"
                            style="display:block; text-align:center; background-color: <?php echo $article['category_color']; ?>; border-color: <?php echo $article['category_color']; ?>; margin-top: 15px;">
                            Voir
                            <?php echo $article['category_name']; ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </aside>

    </div><!-- .art-layout-wrapper -->
</article>

<?php include __DIR__ . '/../footer.php'; ?>
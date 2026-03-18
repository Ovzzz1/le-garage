<?php
/**
 * article.php
 * Template Article Individuel (Blog Auto Magazine)
 * Usage : article.php?slug=assurance-jeune-conducteur
 */

// --- Demo Articles Database ---
$articles_db = [
    'assurance-jeune-conducteur' => [
        'title' => 'Assurance jeune conducteur : comment payer moins cher en 2026 ?',
        'subtitle' => 'Guide complet pour réduire sa prime auto dès la première année',
        'category' => 'assurance',
        'tags' => ['Assurance Auto', 'Jeune Conducteur', 'Économie'],
        'image' => 'https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?q=80&w=1400&auto=format&fit=crop',
        'date' => '15 Mars 2026',
        'updated' => '15 Mars 2026',
        'author' => 'Arnaud',
        'author_role' => 'Rédacteur & Essayeur passionné',
        'author_img' => '/Image/arnaud.png',
        'author_bio' => 'Tombé dans le cambouis quand il était petit grâce à son père David, Arnaud a transformé sa passion en expertise. Il teste sans concession les derniers modèles et décortique le marché pour les lecteurs d\'Le garage expert Auto.',
        'reading_time' => '7 min',
        'content' => true,
    ],
];

// Categories data 
$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien' => ['name' => 'Entretien & Réparation', 'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Électrique & Hybride', 'color' => '#059669', 'slug' => 'electrique'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c', 'slug' => 'moto'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2', 'slug' => 'permis'],
];

// Get article
$slug = isset($_GET['slug']) ? $_GET['slug'] : 'assurance-jeune-conducteur';
$article = isset($articles_db[$slug]) ? $articles_db[$slug] : $articles_db['assurance-jeune-conducteur'];
$current_cat = $categories[$article['category']];

// ─── Scan dynamique du Blog/ pour le linking interne ───
$same_cat_articles = [];
$all_other_articles = [];
$blog_dir = __DIR__ . '/Blog';

if (is_dir($blog_dir)) {
    $files = glob($blog_dir . '/*.php');
    foreach ($files as $file) {
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
            $file_slug = pathinfo($file, PATHINFO_FILENAME);
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

$page_title = $article['title'] . ' - Le garage expert Auto';
$page_description = $article['subtitle'];

include 'header.php';
?>

<!-- ARTICLE HERO (ASYMÉTRIQUE) -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" class="art-hero-bg">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>"><?php echo $current_cat['name']; ?></a>
                    <span class="art-bc-sep">/</span>
                    <span>Article</span>
                </nav>

                <div class="art-hero-tags">
                    <?php foreach ($article['tags'] as $tag): ?>
                        <span class="art-tag"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                </div>

                <h1><?php echo $article['title']; ?></h1>
                <p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>

                <div class="art-hero-meta">
                    <div class="art-author-pill">
                        <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>">
                        <div>
                            <strong>Par <?php echo $article['author']; ?></strong>
                            <span><?php echo $article['author_role']; ?></span>
                        </div>
                    </div>
                    <div class="art-meta-infos">
                        <span><?php echo $article['date']; ?></span>
                        <span>&bull;</span>
                        <span>Lecture <?php echo $article['reading_time']; ?></span>
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
                <div class="art-tldr-title">L'essentiel à retenir</div>
                <ul>
                    <li><strong>Surcoût majeur :</strong> Un jeune conducteur paie en moyenne 2 à 3 fois plus cher.</li>
                    <li><strong>Durée de la surprime :</strong> 3 premières années de permis (2 ans si conduite
                        accompagnée).</li>
                    <li><strong>Le choix du véhicule :</strong> Visez 6 CV max (type Clio) pour diviser la prime par 2.
                    </li>
                    <li><strong>Comparaison digitale :</strong> Les assureurs en ligne sont 15 à 30% moins chers.</li>
                </ul>
            </div>

            <!-- Table of Contents Magazine -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#pourquoi">Pourquoi l'assurance coûte si cher ?</a></li>
                    <li><a href="#surprime">La surprime : comment ça marche ?</a></li>
                    <li><a href="#astuces">7 astuces pour payer moins cher</a></li>
                    <li><a href="#comparatif">Comparatif des meilleures offres 2026</a></li>
                    <li><a href="#erreurs">Les erreurs qui font exploser le prix</a></li>
                    <li><a href="#faq">Foire aux questions</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <h2 id="pourquoi">Pourquoi l'assurance jeune conducteur coûte-t-elle si cher ?</h2>
                <p>C'est le premier choc après l'euphorie du permis obtenu : la facture d'assurance auto. Un jeune
                    conducteur paie en moyenne entre <strong>1 200 et 2 500 euros par an</strong> pour une simple
                    formule tous risques.</p>
                <p>La raison est purement statistique. Les 18-25 ans représentent <strong>21% des tués sur la
                        route</strong> alors qu'ils ne constituent que 9% des conducteurs. Le risque de sinistre
                    matériel ou corporel grave est démontré comme supérieur dans les premières années.</p>

                <figure>
                    <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?q=80&w=1000&auto=format&fit=crop"
                        alt="Jeune conducteur au volant">
                    <figcaption>La zone de danger maximum : les 3 premières années</figcaption>
                </figure>

                <h2 id="surprime">La surprime jeune conducteur : le calcul exact</h2>
                <p>Le mécanisme est dégressif : pendant les 3 premières années suivant l'obtention du permis, une
                    majoration légale est appliquée sur votre cotisation :</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Année</th>
                                <th>Surprime (permis classique)</th>
                                <th>Surprime (conduite accompagnée)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Année 1</strong></td>
                                <td>+ 100%</td>
                                <td>+ 50%</td>
                            </tr>
                            <tr>
                                <td><strong>Année 2</strong> (sans sinistre)</td>
                                <td>+ 50%</td>
                                <td>+ 25%</td>
                            </tr>
                            <tr>
                                <td><strong>Année 3</strong> (sans sinistre)</td>
                                <td>+ 25%</td>
                                <td>0% (Fin de la surprime)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="astuces">7 astuces pour payer moins cher</h2>
                <p>Il existe des leviers réels pour réduire drastiquement votre prime dès la première année.</p>

                <h3>Option A : Le boîtier télématique</h3>
                <p>C'est la grande tendance. Des assureurs comme YouDrive fournissent un boîtier OBD qui analyse votre
                    conduite (freinages souples, vitesses respectées). Si vous roulez prudemment, vous pouvez récupérer
                    jusqu'à <strong>40% de votre mise</strong> mensuelle.</p>

                <h3>Option B : Le choix intelligent du modèle</h3>
                <p>L'assureur se fie lourdement à la puissance dynamique et statistique du véhicule. Une <em>Peugeot 208
                        1.2 PureTech 75</em> coûtera environ 40% moins cher à assurer qu'une simple <em>Audi A3 TDI
                        105</em> plus ancienne mais tissée au fer de lance.</p>

                <h2 id="comparatif">Le "Crash-Test" des assureurs 2026</h2>
                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Assureur</th>
                                <th>Prime Annuelle (Clio IV)</th>
                                <th>Le verdict Le garage expert Auto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Direct Assurance</strong></td>
                                <td>680 €</td>
                                <td>Imbattable avec le capteur Drive</td>
                            </tr>
                            <tr>
                                <td><strong>L'Olivier</strong></td>
                                <td>720 €</td>
                                <td>Excellent compromis digital</td>
                            </tr>
                            <tr>
                                <td><strong>Friday</strong></td>
                                <td>750 €</td>
                                <td>Parfait pour les petits rouleurs</td>
                            </tr>
                            <tr>
                                <td><strong>Macif</strong></td>
                                <td>920 €</td>
                                <td>Cher mais solide agence physique</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="erreurs">Alerte Rouge : Les erreurs qui ruinent votre budget</h2>
                <ul class="art-checklist">
                    <li>Chercher à assurer une Volkswagen Golf TDI 140ch en jeune permis.</li>
                    <li>S'abstenir de comparer et signer bêtement avec l'assureur des parents.</li>
                    <li>La fausse déclaration "Trajet Privé" alors qu'elle sert à aller travailler (annulation du
                        contrat en cas de pépin).</li>
                    <li>Oublier de déclarer que l'on a obtenu le permis via la filière AAC.</li>
                </ul>

                <h2 id="faq">FAQ : Les réponses de nos experts</h2>
                <div class="art-faq">
                    <div class="art-faq-item">
                        <h3>À partir de quand le bonus s'applique-t-il vraiment ?</h3>
                        <p>Dès la deuxième année d'assurance sans accident responsable, votre coefficient passe de 1.00
                            à 0.95 (soit -5% sur la prime de référence brute).</p>
                    </div>
                    <div class="art-faq-item">
                        <h3>Le fait de garer la voiture dans un garage fermé fait-il baisser le prix ?</h3>
                        <p>Oui. Une voiture qui dort dans un box sécurisé voit généralement sa prime diminuer de 5 à 10%
                            (selon que la garantie Vol soit souscrite ou non).</p>
                    </div>
                </div>

            </div><!-- .art-content -->

            <!-- Premium Author Box -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"
                    class="art-author-avatar">
                <div class="art-author-info">
                    <span class="art-author-label">La Parole à L'expert</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir toute la rédaction</a>
                </div>
            </div>

            <!-- Heavy Conclusion Box -->
            <div class="art-conclusion">
                <h2>Le mot de la fin</h2>
                <p>Payer au prix fort sa première année d'assurance n'est plus une fatalité absolue en 2026. Entre les
                    boîtiers connectés, l'offre digitale foisonnante et le choix stratégique d'un véhicule modeste, vous
                    avez toutes les cartes en main pour diviser la facture. Soyez prudent et roulez tranquille.</p>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Toujours dans <a
                        href="/<?php echo $article['category']; ?>"><?php echo $current_cat['name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                        alt="<?php echo htmlspecialchars($rel['title']); ?>">
                                </div>
                                <div class="art-related-body">
                                    <h3><?php echo htmlspecialchars($rel['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p>
                                    <span
                                        class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?>
                                        &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span>
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
                                    <h3><?php echo htmlspecialchars($rel['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p>
                                    <span
                                        class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?>
                                        &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span>
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

        <!-- ASYMMETRIC RIGHT SIDEBAR (dynamique) -->
        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">

                <!-- Block: Same Category Articles -->
                <?php if (!empty($same_cat_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Dans ce dossier</div>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $sa): ?>
                            <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($sa['image']); ?>"
                                        alt="<?php echo htmlspecialchars($sa['title']); ?>">
                                    <span class="art-side-cat-pill"
                                        style="background: <?php echo $current_cat['color']; ?>"><?php echo $current_cat['name']; ?></span>
                                </div>
                                <h4><?php echo htmlspecialchars($sa['title']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- Block: Recent Articles -->
                <?php if (!empty($all_other_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">À la Une</div>
                        <?php foreach (array_slice($all_other_articles, 0, 3) as $ra): ?>
                            <a href="<?php echo $ra['url']; ?>" class="art-side-card">
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($ra['image']); ?>"
                                        alt="<?php echo htmlspecialchars($ra['title']); ?>">
                                </div>
                                <h4><?php echo htmlspecialchars($ra['title']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (empty($same_cat_articles) && empty($all_other_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Explorer</div>
                        <a href="/<?php echo $article['category']; ?>" class="btn-primary"
                            style="display:block; text-align:center; background-color: <?php echo $current_cat['color']; ?>; border-color: <?php echo $current_cat['color']; ?>; margin-top: 15px;">
                            Voir tous les articles <?php echo $current_cat['name']; ?>
                        </a>
                    </div>
                <?php endif; ?>

            </div>
        </aside>

    </div><!-- .art-layout-wrapper -->
</article>

<?php include 'footer.php'; ?>
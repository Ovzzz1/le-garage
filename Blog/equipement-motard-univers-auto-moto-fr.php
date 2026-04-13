<?php
// published: 2026-04-13 10:00
/**
 * equipement-motard-univers-auto-moto-fr.php
 */

$page_title       = "Guide complet équipement motard : vêtements, accessoires et sécurité";
$page_description = "Casque, blouson, gants, sacoche de jambe : tout ce qu'il faut savoir pour choisir son équipement moto en toute sécurité. Sélection, normes et conseils d'entretien.";

$article = [
    'title'          => "Guide complet de l'équipement motard : Vêtements, Accessoires et Sécurité",
    'subtitle'       => "Casque ECE 22.06, blouson certifié, sacoche de jambe… On fait le tour complet de l'équipement indispensable pour rouler en sécurité, avec les normes à connaître et les bons réflexes d'entretien.",
    'category'       => 'moto',
    'category_name'  => 'Moto & 2 Roues',
    'category_color' => '#ea580c',
    'tags'           => ['Équipement Moto', 'Sécurité Motard', 'Sacoche de Jambe', 'EPI Moto', 'Road Trip'],
    'image'          => '/Image/equipement-motard-univers-auto-moto-fr1.webp',
    'date'           => '13 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Passionné Moto & Rédacteur',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud roule depuis plus de 20 ans, du scooter urbain à la grosse cylindrée sur circuit. Il teste et sélectionne lui-même chaque équipement recommandé sur le blog — parce qu'un bon conseil, ça se mérite sur le terrain.",
    'reading_time'   => '6 min',
];

$categories = [
    'assurance'  => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien'  => ['name' => 'Entretien & Réparation',  'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Électrique & Hybride',    'color' => '#059669', 'slug' => 'electrique'],
    'occasion'   => ['name' => 'Achat & Occasion',        'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto'       => ['name' => 'Moto & 2 Roues',          'color' => '#ea580c', 'slug' => 'moto'],
    'permis'     => ['name' => 'Permis',                  'color' => '#0891b2', 'slug' => 'permis'],
];

// ─── Scan dynamique du Blog/ pour le linking interne ───
$current_slug       = pathinfo(__FILE__, PATHINFO_FILENAME);
$same_cat_articles  = [];
$all_other_articles = [];
$blog_dir           = __DIR__;

if (is_dir($blog_dir)) {
    $files = glob($blog_dir . '/*.php');
    foreach ($files as $file) {
        $file_slug = pathinfo($file, PATHINFO_FILENAME);
        if ($file_slug === $current_slug) continue;

        $other_article = null;
        $content       = file_get_contents($file);

        if (preg_match('/\$article\s*=\s*\[(.+?)\];/s', $content, $matches)) {
            try {
                eval('$other_article = [' . $matches[1] . '];');
            } catch (Throwable $e) {
                continue;
            }
        }

        if ($other_article && isset($other_article['title'])) {
            $other_article['slug']  = $file_slug;
            $other_article['url']   = '/Blog/' . $file_slug;
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
        <img src="<?php echo $article['image']; ?>"
             alt="Motard équipé sur la route avec blouson et sacoche de jambe"
             class="art-hero-bg"
             width="1200" height="675" decoding="async">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a>
                    <span class="art-bc-sep">/</span>
                    <span>Coup de projecteur</span>
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
                        <img src="<?php echo $article['author_img']; ?>"
                             alt="<?php echo $article['author']; ?>"
                             width="40" height="40">
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
                <div class="art-tldr-title">L'essentiel à retenir (TL;DR)</div>
                <ul>
                    <li><strong>Casque :</strong> Norme ECE 22.06 obligatoire — boucle double-D pour la piste, micrométrique en ville.</li>
                    <li><strong>Blouson & gants :</strong> Certifications niveau 1 ou 2 pour les protections, dorsale indispensable, certification KP pour les gants.</li>
                    <li><strong>Sacoche de jambe :</strong> Alternative ergonomique au sac à dos — choisir selon son profil (urbain, sportif, voyageur).</li>
                    <li><strong>Entretien :</strong> Cuirs 2 fois/an, textiles imperméabilisés tous les 3 mois, chaîne lubrifiée tous les 500-1000 km.</li>
                    <li><strong>Road trip :</strong> Privilégier les sacoches Aventure ou Travel pour une répartition optimale des charges.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#ecosysteme-univers-auto-moto">Univers-Auto-Moto.fr : un hub pour passionnés</a></li>
                    <li><a href="#epi-protections-indispensables">EPI : les protections indispensables</a></li>
                    <li><a href="#sacoche-de-jambe">La sacoche de jambe : praticité et liberté</a></li>
                    <li><a href="#entretien-equipement">Entretien et longévité de l'équipement</a></li>
                    <li><a href="#road-trip-bagagerie">Préparer son deux-roues pour un road trip</a></li>
                    <li><a href="#faq-equipement-motard">FAQ : questions fréquentes</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Choisir son équipement ne se résume pas à une question de style : c'est avant tout une démarche de sécurité et de confort pour chaque trajet. Que vous soyez pilote urbain ou grand voyageur, voici le tour complet de ce qu'il faut savoir — avec les normes, les bons réflexes et une sélection testée sur la route.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="ecosysteme-univers-auto-moto">Univers-Auto-Moto.fr : un hub pour passionnés</h2>

                <img src="/Image/equipement-motard-univers-auto-moto-fr1.webp" alt="Équipement complet du motard prêt pour la route" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p>La plateforme <a href="https://www.univers-auto-moto.fr/boutique/" target="_blank" rel="nofollow noopener">univers-auto-moto.fr</a> constitue un véritable écosystème pour la communauté motarde : actualités techniques, essais de machines, conseils de prévention et boutique accessoires réunis au même endroit. On y trouve notamment une <a href="https://www.univers-auto-moto.fr/actus/" target="_blank" rel="nofollow noopener">rubrique Actus</a> sur les tendances du monde motocycliste, des analyses pointues dans les sections <a href="https://www.univers-auto-moto.fr/motos/" target="_blank" rel="nofollow noopener">Motos</a> et <a href="https://www.univers-auto-moto.fr/autos/" target="_blank" rel="nofollow noopener">Autos</a>, et des dossiers dédiés à la <a href="https://www.univers-auto-moto.fr/securite-routiere/" target="_blank" rel="nofollow noopener">Sécurité Routière</a>.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="epi-protections-indispensables">EPI : les protections indispensables</h2>

                <p>La sécurité du motard repose sur des Équipements de Protection Individuelle rigoureusement sélectionnés. Au-delà de l'obligation légale, il s'agit d'assurer une résistance optimale à l'abrasion et une absorption efficace des chocs en cas de chute.</p>

                <p><strong>Le Casque :</strong> Il doit impérativement répondre à la norme ECE 22.06. Privilégiez une boucle double-D pour la piste ou micrométrique pour l'usage urbain.</p>

                <p><strong>Le Blouson :</strong> Recherchez les certifications de niveau 1 ou 2 pour les protections de coudes et d'épaules, et n'oubliez jamais d'y insérer une dorsale adaptée.</p>

                <p><strong>Les Gants :</strong> La certification KP (Knuckle Protection) est désormais obligatoire pour garantir une protection réelle des articulations de la main.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="sacoche-de-jambe">La sacoche de jambe : praticité et liberté</h2>

                <img src="/Image/equipement-motard-univers-auto-moto-fr2.webp" alt="Sacoche de jambe moto fixée sur la cuisse en situation de conduite" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p>Véritable best-seller, la sacoche de jambe offre une alternative ergonomique au sac à dos : papiers, téléphone, badge de télépéage restent à portée de main sans gêne lors des manœuvres. Grâce à sa double sangle (taille et cuisse), elle reste plaquée au corps et n'entre jamais en contact avec la peinture de la moto.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Profil du motard</th>
                                <th>Besoin principal</th>
                                <th>Modèle recommandé</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Le Roule-Toujours</strong></td>
                                <td>Protection totale contre les intempéries</td>
                                <td><a href="https://www.univers-auto-moto.fr/produit/sacoche-de-jambe-moto-etanche/" target="_blank" rel="nofollow noopener">Sacoche étanche Waterproof</a></td>
                            </tr>
                            <tr>
                                <td><strong>Le Sportif / Roadster</strong></td>
                                <td>Aérodynamisme et rigidité</td>
                                <td><a href="https://www.univers-auto-moto.fr/produit/sacoche-de-jambe-moto-design-carbone/" target="_blank" rel="nofollow noopener">Design Carbone</a></td>
                            </tr>
                            <tr>
                                <td><strong>Le Puriste / Custom</strong></td>
                                <td>Style authentique et matériaux nobles</td>
                                <td><a href="https://www.univers-auto-moto.fr/produit/sacoche-de-jambe-moto-vintage/" target="_blank" rel="nofollow noopener">Vintage Cuir</a></td>
                            </tr>
                            <tr>
                                <td><strong>Le Vélotafeur / Urbain</strong></td>
                                <td>Visibilité et compacité maximale</td>
                                <td><a href="https://www.univers-auto-moto.fr/produit/sacoche-de-jambe-moto-avec-touche-reflechissante/" target="_blank" rel="nofollow noopener">Touche réfléchissante</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="entretien-equipement">Entretien et longévité de l'équipement</h2>

                <img src="/Image/equipement-motard-univers-auto-moto-fr3.webp" alt="Entretien équipement moto cuir et accessoires deux-roues" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p>Un équipement bien entretenu est un équipement qui protège plus longtemps. La pérennité de vos cuirs, de vos textiles et de votre mécanique dépend de soins réguliers et de produits adaptés.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Élément</th>
                                <th>Action requise</th>
                                <th>Fréquence</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Vêtements en cuir</strong></td>
                                <td>Nettoyage savon doux + graissage spécifique</td>
                                <td>2 fois/an (printemps/automne)</td>
                            </tr>
                            <tr>
                                <td><strong>Textiles et sacoches</strong></td>
                                <td>Spray imperméabilisant</td>
                                <td>Tous les 3 mois ou après forte pluie</td>
                            </tr>
                            <tr>
                                <td><strong>Chaîne</strong></td>
                                <td>Dégraissage complet + lubrification</td>
                                <td>Tous les 500 à 1 000 km</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="road-trip-bagagerie">Préparer son deux-roues pour un road trip</h2>

                <p>Le voyage à moto nécessite une organisation rigoureuse de la bagagerie pour ne pas compromettre l'équilibre de la machine. Nos modèles spécifiques permettent de répartir la charge de manière optimale :</p>

                <ul>
                    <li><a href="https://www.univers-auto-moto.fr/produit/sacoche-de-jambe-moto-aventure/" target="_blank" rel="nofollow noopener">Sacoche Aventure</a> : conçue pour résister aux terrains difficiles.</li>
                    <li><a href="https://www.univers-auto-moto.fr/produit/sacoche-de-jambe-moto-travel/" target="_blank" rel="nofollow noopener">Modèle Travel</a> : volume extensible pour les longs trajets.</li>
                    <li><a href="https://www.univers-auto-moto.fr/produit/sacoche-de-jambe-moto-excursion/" target="_blank" rel="nofollow noopener">Sacoche Excursion</a> : l'équilibre parfait entre légèreté et rangement.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-equipement-motard">FAQ : questions fréquentes sur l'équipement du motard</h2>

                <p><strong>Quelles sont les normes obligatoires en France ?</strong> Le port du casque homologué (ECE 22.05 ou 22.06) et de gants certifiés CE est strictement obligatoire. Blouson, pantalon et bottes sont vivement recommandés.</p>

                <p><strong>Comment choisir la taille de sa sacoche de jambe ?</strong> Pour un usage quotidien, un modèle compact de moins de 2 litres suffit. Pour le voyage, les gammes Aventure ou Travel offrent plus de compartiments.</p>

                <p><strong>Une sacoche de jambe peut-elle rayer le réservoir ?</strong> Non. Contrairement aux sacoches de réservoir, elle est fixée sur le motard via une double sangle et n'entre jamais en contact avec la peinture.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">🔧 Le mot du Garage Expert Auto</div>
                    <p style="margin: 0;">Un bon équipement ne se choisit pas au hasard — il se choisit une fois pour longtemps. Investissez dans des certifications reconnues, entretenez régulièrement votre matériel, et ne transigez jamais sur le casque. C'est lui qui fait la différence quand ça compte vraiment.</p>
                </div>

            </div><!-- .art-content -->

            <!-- Premium Author Box -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>"
                     alt="<?php echo $article['author']; ?>"
                     class="art-author-avatar"
                     width="80" height="80">
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
                <p>L'équipement du motard, c'est un investissement dans sa propre sécurité — pas une dépense. Entre les normes qui évoluent, les nouvelles technologies de protection et les accessoires qui simplifient le quotidien, il n'y a jamais eu autant de bonnes raisons de bien s'équiper avant de démarrer.</p>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                         alt="<?php echo htmlspecialchars($rel['title']); ?>"
                                         width="400" height="225" loading="lazy">
                                </div>
                                <div class="art-related-body">
                                    <h3><?php echo htmlspecialchars($rel['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p>
                                    <span class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php elseif (!empty($all_other_articles)): ?>
                        <?php foreach (array_slice($all_other_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                         alt="<?php echo htmlspecialchars($rel['title']); ?>"
                                         width="400" height="225" loading="lazy">
                                </div>
                                <div class="art-related-body">
                                    <h3><?php echo htmlspecialchars($rel['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p>
                                    <span class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p style="color: #666; padding: 20px 0;">D'autres articles arrivent bientôt dans cette catégorie !</p>
                    <?php endif; ?>
                </div>
            </section>

        </div><!-- .art-main-col -->

        <!-- ASYMMETRIC RIGHT SIDEBAR (dynamique) -->
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
                                         width="160" height="90" loading="lazy">
                                    <span class="art-side-cat-pill"
                                          style="background: <?php echo $article['category_color']; ?>"><?php echo $article['category_name']; ?></span>
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
                                         width="160" height="90" loading="lazy">
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
                           style="display:block; text-align:center; background-color: <?php echo $article['category_color']; ?>; border-color: <?php echo $article['category_color']; ?>; margin-top: 15px;">
                            Voir tous les articles <?php echo $article['category_name']; ?>
                        </a>
                    </div>
                <?php endif; ?>

            </div>
        </aside>

    </div><!-- .art-layout-wrapper -->
</article>

<!-- Schema JSON-LD -->
<script type="application/ld+json">
<?php
$schema = [
    "@context" => "https://schema.org",
    "@graph"   => [
        [
            "@type"            => "Article",
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id"   => "https://garageraymond.fr/Blog/" . $current_slug
            ],
            "headline"      => $article['title'],
            "description"   => $article['subtitle'],
            "image"         => ["https://garageraymond.fr" . $article['image']],
            "datePublished" => "2026-04-13T10:00:00+02:00",
            "dateModified"  => "2026-04-13T10:00:00+02:00",
            "author"        => [
                "@type"    => "Person",
                "name"     => $article['author'],
                "url"      => "https://garageraymond.fr/equipe",
                "jobTitle" => $article['author_role']
            ],
            "publisher" => [
                "@type" => "Organization",
                "name"  => "Le garage expert Auto",
                "url"   => "https://garageraymond.fr",
                "logo"  => [
                    "@type"  => "ImageObject",
                    "url"    => "https://garageraymond.fr/Image/favicon.png",
                    "width"  => "512",
                    "height" => "512"
                ]
            ],
            "mentions" => [
                [
                    "@type" => "WebSite",
                    "name"  => "Univers Auto Moto",
                    "url"   => "https://www.univers-auto-moto.fr/"
                ]
            ],
            "keywords" => "équipement motard, sacoche de jambe moto, casque ECE 22.06, EPI moto, entretien équipement moto"
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

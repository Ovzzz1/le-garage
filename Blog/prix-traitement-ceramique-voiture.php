<?php
/**
 * prix-traitement-ceramique-voiture.php
 */

$page_title       = "Prix d'un Traitement Céramique Voiture : Tarif et Devis (2026)";
$page_description = "Combien coûte vraiment un traitement céramique en 2026 ? Prix moyens, importance du polissage, tableau de budgets et sélection des meilleurs centres detailing en France.";

$article = [
    'title'          => "Traitement céramique voiture : tarif, prix moyen et vrai coût selon votre véhicule",
    'subtitle'       => "De 500 € à plus de 1 500 €, le devis d'une protection céramique fait le grand écart. Découvrez ce qui justifie ce prix, le rôle crucial du polissage et notre sélection de centres detailing.",
    'category'       => 'entretien',
    'category_name'  => 'Entretien & Réparation',
    'category_color' => '#dc2626',
    'tags'           => ['Esthétique Auto', 'Detailing', 'Céramique', 'Carrosserie'],
    'image'          => '/Image/traitement-ceramique-prix-voiture.webp',
    'date'           => '30 Mars 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Esthétique & Detailing',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Passionné de detailing et perfectionniste dans l'âme, Arnaud décortique les meilleures techniques de protection carrosserie pour vous éviter les pièges des devis gonflés.",
    'reading_time'   => '8 min',
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
        <img src="<?php echo $article['image']; ?>" alt="Application d'un traitement céramique sur la carrosserie d'une voiture" class="art-hero-bg">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a>
                    <span class="art-bc-sep">/</span>
                    <span>Guides</span>
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
                <div class="art-tldr-title">L'essentiel à retenir (TL;DR)</div>
                <ul>
                    <li><strong>Le prix moyen :</strong> Comptez entre <strong>800 € et 1 500 €</strong> pour un traitement céramique posé par un professionnel en centre detailing.</li>
                    <li><strong>La règle d'or :</strong> Le produit en lui-même n'est qu'une infime partie du travail. <strong>70 % du résultat visuel dépend de la préparation</strong> (polissage et correction des défauts).</li>
                    <li><strong>La durée de vie :</strong> Un vrai traitement 9H tient entre <strong>3 et 5 ans</strong> s'il est bien entretenu (lavage à la main privilégié).</li>
                    <li><strong>L'arbitrage :</strong> Très rentable pour un véhicule neuf, une peinture sombre ou un modèle premium. Inutile si vous continuez à passer à la station rouleaux chaque semaine.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Au sommaire de ce guide</div>
                <ol>
                    <li><a href="#prix-attentes">Prix d'un traitement céramique voiture : à quoi s'attendre ?</a></li>
                    <li><a href="#tableau-prix">Tableau de prix : exemples de budgets selon les cas</a></li>
                    <li><a href="#pro-ou-diy">Traitement céramique professionnel ou à faire soi-même ?</a></li>
                    <li><a href="#ceramique-vs-spray">Traitement céramique vs spray céramique</a></li>
                    <li><a href="#est-ce-rentable">Est-ce que le traitement vaut le prix demandé ?</a></li>
                    <li><a href="#bonnes-adresses">Où faire un traitement céramique dans les grandes villes ?</a></li>
                    <li><a href="#faq">FAQ sur le tarif d'un traitement céramique</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">
                <p>Protéger la peinture de sa voiture avec un traitement céramique est devenu le standard ultime de l'esthétique automobile. Au-delà de la brillance spectaculaire qu'il procure, ce vernis invisible agit comme un bouclier contre les micro-rayures, les fientes d'oiseaux et les UV. Mais face à des devis qui varient parfois du simple au triple, il est difficile de s'y retrouver. Décryptage complet pour comprendre ce que vous payez vraiment.</p>

                <h2 id="prix-attentes">Prix d'un traitement céramique voiture : à quoi s'attendre en 2026 ?</h2>
                <p>Sur le marché du detailing professionnel en 2026, l'application d'une <strong>protection céramique</strong> est facturée <strong>entre 800 € et 1 500 € en moyenne</strong>. Ce tarif inclut généralement un nettoyage en profondeur, une décontamination de la surface, le polissage du vernis et la pose de la céramique. Pour un véhicule sorti d'usine sans aucun défaut de carrosserie, le prix d'appel peut débuter autour de 450 à 600 €.</p>

                <h3>Ce qui fait vraiment varier le tarif</h3>
                <p>L'écart entre deux devis s'explique rarement par la marque du produit utilisé (CarPro, Gtechniq, Fictech...). Le tarif est avant tout dicté par le <strong>temps de main-d'oeuvre</strong>, lui-même influencé par quatre variables :</p>
                <ul>
                    <li><strong>Le gabarit du véhicule :</strong> Une citadine (type Peugeot 208) demandera beaucoup moins de produit et d'heures qu'un grand SUV (type BMW X5) ou qu'un break.</li>
                    <li><strong>L'état initial du vernis :</strong> Un véhicule d'occasion marqué par les rouleaux de lavage nécessite un "cut" lourd pour effacer les micro-rayures, contre un simple lustrage de finition pour un modèle neuf.</li>
                    <li><strong>Le nombre de couches de protection :</strong> Une protection garantie 5 ans réclame souvent une base ("base coat") et une finition ("top coat"), augmentant le temps de pose et de séchage sous lampes infrarouges.</li>
                    <li><strong>Les options :</strong> Protection des jantes, des vitres, des plastiques extérieurs, des cuirs intérieurs, ou pose partielle d'un film PPF sur la face avant — chaque surface supplémentaire fait grimper le devis.</li>
                </ul>

                <h3>Préparation de la carrosserie : pourquoi elle pèse plus lourd que le produit</h3>
                <p>C'est l'information la plus cruciale de ce dossier. Beaucoup pensent qu'ils paient un liquide magique coûteux. En réalité, vous payez l'expertise du préparateur esthétique automobile.</p>
                <blockquote style="border-left: 4px solid #dc2626; padding-left: 15px; background: #fef2f2; margin: 20px 0; font-style: italic;">
                    Le conseil du Garage Expert : un bon traitement céramique, c'est <strong>70 % de préparation (lavage, décontamination, polissage)</strong> et <strong>30 % de produit</strong>. Si un centre propose une pose rapide sans correction de la peinture avant — passez votre chemin. La céramique va simplement figer et enfermer les défauts existants sous une couche de verre.
                </blockquote>
                <p>Avant d'appliquer le traitement, le professionnel procède à un lavage minutieux, un passage à la <em>clay bar</em> (barre d'argile pour retirer les contaminants incrustés dans le vernis), puis un polissage "One step" ou "Multi-step" pour retrouver un vernis parfait et une brillance miroir.</p>

                <h3>Notre estimateur de tarif : calculez un budget selon votre voiture</h3>
                <!-- UX Calculator — intégration à venir -->
                <div id="calculator-ceramique-ux" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 20px; text-align: center; margin: 30px 0;">
                    <h4 style="margin-top: 0;">Simulateur de devis (bientôt disponible)</h4>
                    <p style="color: #64748b; font-size: 0.9em; margin-bottom: 0;">Notre module interactif vous permettra bientôt de sélectionner votre modèle de voiture, l'âge de votre peinture et vos options (jantes, vitres) pour obtenir une estimation tarifaire immédiate.</p>
                </div>

                <h2 id="tableau-prix">Tableau de prix : exemples de budgets selon les cas</h2>
                <p>Pour vous aider à vous projeter, voici une grille estimative des tarifs pratiqués par les bons centres detailing en France :</p>
                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Profil / État du véhicule</th>
                                <th>Travail nécessaire</th>
                                <th>Budget estimatif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Citadine neuve</strong> (sortie de concession)</td>
                                <td>Lavage, décontamination légère, lustrage de finition, céramique 1 couche.</td>
                                <td><strong>500 € – 700 €</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Berline d'occasion</strong> (vernis micro-rayé)</td>
                                <td>Lavage, décontamination, polissage en 2 étapes (correction + finition), céramique 2 couches.</td>
                                <td><strong>900 € – 1 200 €</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Grand SUV premium</strong> (peinture abîmée)</td>
                                <td>Correction lourde du vernis, traitement céramique carrosserie + vitres + jantes.</td>
                                <td><strong>1 300 € – 1 800 € +</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="pro-ou-diy">Traitement céramique professionnel ou à faire soi-même ?</h2>
                <p>Peut-on acheter une fiole de CQuartz ou de Gtechniq à 80 € sur Internet et se lancer seul dans son garage ? Techniquement oui, mais c'est risqué. L'économie financière est réelle, mais le DIY exige un équipement lourd (polisseuse orbitale, pads, dégraissant spécifique, éclairage LED orienté) et surtout un vrai savoir-faire en application.</p>
                <p>Si vous essuyez la céramique trop tard, elle se cristallise et laisse des <em>high spots</em> : des traces sombres et irrégulières sur le vernis. La seule façon de les rattraper consiste à polir à nouveau agressivement la carrosserie, ce qui annule tout le bénéfice.</p>

                <h2 id="ceramique-vs-spray">Traitement céramique vs spray céramique : l'écart se justifie-t-il ?</h2>
                <p>Le marché propose de nombreux "sprays céramique" ou "quick detailers SiO2" vendus entre 20 et 40 €. Ils offrent un excellent effet hydrophobe (l'eau perle sur la carrosserie) et une belle brillance, très facile à appliquer après un lavage. Mais ce ne sont <strong>pas de vrais traitements céramiques</strong>.</p>
                <p>Un spray tient entre 2 et 4 mois. Une véritable protection céramique en fiole — qui nécessite un temps de cure (séchage sans eau ni humidité pendant 12 à 24h) — crée une liaison chimique avec le vernis et offre une protection durable <strong>3 à 5 ans</strong> face aux agressions chimiques, fientes et rayons UV.</p>

                <h2 id="est-ce-rentable">Est-ce que le traitement céramique vaut le prix demandé ?</h2>
                <p>C'est un investissement conséquent, mais redoutablement efficace dans des cas précis :</p>
                <ul>
                    <li><strong>Très rentable si :</strong> vous achetez un véhicule neuf (préserve la valeur de revente), vous avez une peinture noire ou foncée (extrêmement sensible aux micro-rayures), et vous lavez votre voiture à la main ou en station haute pression sans brosse.</li>
                    <li><strong>Inutile si :</strong> vous passez votre véhicule aux rouleaux automatiques toutes les semaines. Les brosses agressives finiront par altérer la couche céramique bien plus vite que prévu et annuler son effet protecteur.</li>
                </ul>

                <h2 id="bonnes-adresses">Où faire un traitement céramique dans les grandes villes ?</h2>
                <p>Pour être certain de confier votre carrosserie à de vrais experts de la préparation, voici quelques adresses réputées sur le territoire :</p>

                <h3>Paris : Maniac Auto Detailing Center (Bois-d'Arcy)</h3>
                <p>Référence connue en France à la fois sur les produits et les prestations atelier. Maniac Auto propose un detailing complet, la correction peinture et la pose de protection céramique. Très recommandé dans les communautés automobiles pour les véhicules premium et les Tesla.</p>

                <h3>Lyon : Éclat Auto Detailing</h3>
                <p>Positionnement haut de gamme avec un travail extrêmement minutieux sur la préparation avant pose. Idéal pour rattraper une peinture très marquée et obtenir un résultat longue durée.</p>

                <h3>Marseille : Magic Polish</h3>
                <p>Spécialiste de la céramique hydrophobe et de la rénovation peinture. Une protection particulièrement adaptée au soleil intense et à l'air salin de la région PACA.</p>

                <h3>Toulouse : Polish Plus</h3>
                <p>Centre esthétique auto toulousain très orienté polissage et correction de peinture. Ils corrigent en profondeur avant de poser le traitement, ce qui garantit un résultat de qualité supérieure.</p>

                <h3>Nice : Nano Carapace Nice</h3>
                <p>Nano Carapace est un réseau et fabricant français reconnu de produits nano-céramiques. Leur centre niçois propose une protection longue durée avec un effet hydrophobe spectaculaire, parfait pour les belles carrosseries de la Côte d'Azur.</p>

            </div><!-- .art-content -->

            <!-- Premium Author Box -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>" class="art-author-avatar">
                <div class="art-author-info">
                    <span class="art-author-label">L'Avis du Préparateur</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir toute la rédaction</a>
                </div>
            </div>

            <!-- Conclusion Box / FAQ -->
            <div class="art-conclusion">
                <h2 id="faq">FAQ sur le tarif d'un traitement céramique voiture</h2>

                <h3>Combien coûte un traitement céramique voiture chez un professionnel ?</h3>
                <p>Le prix moyen varie entre <strong>800 € et 1 500 €</strong> pour un traitement posé en centre detailing. Il peut descendre à 500 € pour une citadine neuve sans défaut, et dépasser 1 800 € pour un véhicule ancien nécessitant une forte correction du vernis.</p>

                <h3>Pourquoi un devis peut-il passer de 500 à 2 000 € ?</h3>
                <p>La différence s'explique à 90 % par le <strong>temps de correction de la peinture</strong>. Si la carrosserie est très rayée ou oxydée, le préparateur peut passer 15 à 20 heures sur le polissage avant de poser la moindre goutte de protection céramique.</p>

                <h3>Combien de temps dure l'effet d'une protection céramique ?</h3>
                <p>Un traitement professionnel 9H dure entre <strong>3 et 5 ans</strong>. Cette durée est optimale si la voiture est entretenue avec des shampoings au pH neutre et sans passage aux rouleaux automatiques.</p>

                <h3>Le PPF est-il plus intéressant qu'un traitement céramique ?</h3>
                <p>Ce sont deux produits différents et complémentaires. Le <strong>PPF (film de protection peinture)</strong> protège physiquement des impacts de gravillons et des rayures profondes, notamment sur la face avant. Le traitement céramique est un vernis chimique qui protège des agressions UV, de la pollution et facilite l'entretien. L'idéal est de combiner les deux : PPF sur la face avant, céramique sur le reste de la carrosserie.</p>

                <h3>Peut-on laver la voiture normalement après la pose ?</h3>
                <p>Il faut impérativement éviter tout lavage pendant les <strong>7 à 10 jours suivant la pose</strong> pour laisser le revêtement durcir à cœur. Ensuite, le lavage devient bien plus facile, mais il faut proscrire définitivement les stations rouleaux au risque d'abîmer et de réduire la durée de vie du traitement.</p>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>">
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
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>">
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
                        <div class="art-sidebar-block-title">Sur le même sujet</div>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $sa): ?>
                            <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($sa['image']); ?>" alt="<?php echo htmlspecialchars($sa['title']); ?>">
                                    <span class="art-side-cat-pill" style="background: <?php echo $article['category_color']; ?>"><?php echo $article['category_name']; ?></span>
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
                                    <img src="<?php echo htmlspecialchars($ra['image']); ?>" alt="<?php echo htmlspecialchars($ra['title']); ?>">
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

<!-- Schema JSON-LD (Article + FAQ) -->
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
            "datePublished" => "2026-03-30T08:00:00+01:00",
            "dateModified"  => "2026-03-30T08:00:00+01:00",
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
            ]
        ],
        [
            "@type"      => "FAQPage",
            "mainEntity" => [
                [
                    "@type"          => "Question",
                    "name"           => "Combien coûte un traitement céramique voiture chez un professionnel ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Le prix moyen d'un traitement céramique posé par un professionnel varie entre 800 € et 1 500 €. Ce tarif peut descendre à 500 € pour une citadine neuve et monter à plus de 1 800 € pour un véhicule nécessitant une forte correction des micro-rayures par polissage."
                    ]
                ],
                [
                    "@type"          => "Question",
                    "name"           => "Pourquoi un devis peut-il passer de 500 à 2 000 € ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "La différence de prix s'explique principalement par la préparation. La correction des défauts et le polissage représentent 70 % du travail d'un detailer. Plus le vernis est abîmé, plus la main-d'oeuvre nécessaire sera longue, ce qui justifie l'essentiel du coût final."
                    ]
                ],
                [
                    "@type"          => "Question",
                    "name"           => "Combien de temps dure l'effet d'une protection céramique ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Une protection céramique 9H appliquée professionnellement dure entre 3 et 5 ans si la voiture est entretenue correctement, notamment en évitant les lavages aux rouleaux automatiques et en utilisant des shampoings au pH neutre."
                    ]
                ],
                [
                    "@type"          => "Question",
                    "name"           => "Le PPF est-il plus intéressant qu'un traitement céramique ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Ce sont deux produits complémentaires. Le PPF (film de protection peinture) protège des impacts et rayures profondes. Le traitement céramique protège des UV, de la pollution et facilite l'entretien. L'idéal est de combiner les deux : PPF sur la face avant, céramique sur le reste de la carrosserie."
                    ]
                ]
            ]
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

<?php
/**
 * moteur-1-6-puretech-fiabilite-avis.php
 */

$page_title = "Fiabilité 1.6 PureTech 180 & 225 : Avis, Problèmes, Courroie ou Chaîne ?";
$page_description = "Le moteur 1.6 PureTech Stellantis (180, 225 et hybride) est-il fiable ? Découvrez notre guide vérité complet : problèmes, courroie ou chaîne, et avis d'expert sur les 3008, 508, 5008.";

$article = [
    'title' => 'Moteur 1.6 PureTech (Stellantis) : Le seul moteur fiable de la gamme ?',
    'subtitle' => 'Face au scandale du 1.2 PureTech, le grand frère 1.6 PureTech 4-cylindres (180, 225 ch et Hybride) fait figure de survivant. Courroie ou chaîne ? Problèmes récurrents ? Voici la vérité.',
    'category' => 'entretien',
    'category_name' => 'Entretien & Réparation',
    'category_color' => '#dc2626',
    'tags' => ['Peugeot', 'Fiabilité Moteur', 'PureTech', 'Guide d\'Achat'],
    'image' => '/Image/moteur-1-6-puretech-fiabilite-2026.webp', // Placeholder to be created
    'date' => '23 Mars 2026',
    'author' => 'Arnaud',
    'author_role' => 'Rédacteur & Essayeur Auto',
    'author_img' => '/Image/arnaud.png',
    'author_bio' => 'Véritable passionné de mécanique, Arnaud décortique les moteurs Stellantis depuis des années. Il analyse les retours fiabilités sans langue de bois pour éviter les pièges en occasion.',
    'reading_time' => '8 min',
];

$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien' => ['name' => 'Entretien & Réparation', 'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Électrique & Hybride', 'color' => '#059669', 'slug' => 'electrique'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c', 'slug' => 'moto'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2', 'slug' => 'permis'],
];

// ─── Scan dynamique du Blog/ pour le linking interne ───
$current_slug = pathinfo(__FILE__, PATHINFO_FILENAME);
$same_cat_articles = [];
$all_other_articles = [];
$blog_dir = __DIR__;

if (is_dir($blog_dir)) {
    $files = glob($blog_dir . '/*.php');
    foreach ($files as $file) {
        $file_slug = pathinfo($file, PATHINFO_FILENAME);
        if ($file_slug === $current_slug) continue; 

        $other_article = null;
        $content = file_get_contents($file);

        if (preg_match('/\$article\s*=\s*\[(.+?)\];/s', $content, $matches)) {
            try {
                eval('$other_article = [' . $matches[1] . '];');
            } catch (Throwable $e) {
                continue;
            }
        }

        if ($other_article && isset($other_article['title'])) {
            $other_article['slug'] = $file_slug;
            $other_article['url'] = '/Blog/' . $file_slug;
            $other_article['image'] = '/' . ltrim($other_article['image'] ?? '', '/');

            // Articles de la même catégorie
            if (($other_article['category'] ?? '') === $article['category']) {
                $same_cat_articles[] = $other_article;
            }

            // Tous les autres articles 
            $all_other_articles[] = $other_article;
        }
    }
}

include __DIR__ . '/../header.php';
?>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>" alt="Couvercle moteur Stellantis 1.6 Puretech" class="art-hero-bg">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a>
                    <span class="art-bc-sep">/</span>
                    <span>Dossier Fiabilité</span>
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
                    <li><strong>Courroie ou Chaîne ?</strong> Le moteur 1.6 PureTech est un moteur 4 cylindres entraîné par une <strong>chaîne de distribution</strong> (et non la fameuse courroie immergée problématique du 1.2).</li>
                    <li><strong>1.6 PureTech 180 fiabilité :</strong> Globalement très fiable, couplé à la boîte automatique EAT8, il équipe avec brio les modèles 3008, 5008 et 508.</li>
                    <li><strong>1.6 PureTech 225 fiabilité :</strong> Ultime version thermique, solide mécaniquement mais quelques cas isolés d'encrassement des soupapes.</li>
                    <li><strong>Hybride (PHEV) :</strong> Le 1.6 sert de base aux hybrides rechargeables Stellantis (225 ch et 180 ch). C’est un choix hautement recommandé en occasion.</li>
                    <li><strong>Le Verdict :</strong> Contrairement à la croyance populaire, <strong>oui, il existe des moteurs PureTech fiables</strong>. La <a href="#liste-moteurs">liste moteur puretech fiable</a> est essentiellement dominée par ce 1.6 litres (nom de code EP6).</li>
                </ul>
            </div>

            <!-- Table of Contents Magazine -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#courroie-chaine">1. Courroie ou chaîne : la rumeur qui tue le 1.6 PureTech</a></li>
                    <li><a href="#fiabilite-180">2. L'avis sur la fiabilité du moteur 1.6 PureTech 180</a></li>
                    <li><a href="#fiabilite-225">3. 1.6 PureTech 225 : avis sur la version musclée</a></li>
                    <li><a href="#hybride-phev">4. Fiabilité des versions 1.6 PureTech Hybrides</a></li>
                    <li><a href="#problemes">5. Les problèmes récurrents : ce qu'il faut surveiller</a></li>
                    <li><a href="#faq">6. FAQ : Quel PureTech est fiable ? (Vos questions)</a></li>
                </ol>
            </div>

            <div class="art-content">
                <p>C'est un véritable vent de panique sur le marché de l'occasion. Dès que l'on prononce le mot "<strong>PureTech</strong>", les acheteurs fuient. La faute incombe au tristement célèbre bloc 3 cylindres (1.2 PureTech) et à sa courroie de distribution qui baigne dans l'huile, provoquant des casses moteurs à répétition (une <a href="https://www.automobile-magazine.fr/fiabilite-rappels/article/47015-stellantis-16-puretech-oui-il-existe-des-moteurs-puretech-fiables-voici-la-liste" target="_blank" rel="nofollow external">affaire massivement documentée par la L'Automobile Magazine et les actions judiciaires</a>). Mais saviez-vous qu'il ne faut absolument pas jeter le bébé avec l'eau du bain ?</p>
                <p>Le modèle le plus souvent cité reste le Peugeot 2008 : si vous en possédez un, notre guide sur <a href="/Blog/probleme-moteur-peugeot-2008">les problèmes du 1.2 PureTech sur le Peugeot 2008</a> détaille les pannes récurrentes et les coûts de réparation à anticiper.</p>
                <p>Sous ce même nom marketing "PureTech" se cache un tout autre moteur, totalement différent techniquement : le <strong>moteur 1.6 PureTech</strong> (ou <em>1 6 puretech</em> pour les intimes). Ce grand frère de 4 cylindres est-il touché par la malédiction de Peugeot-Citroën ? Voici tout ce qu'il faut savoir avant d'acheter une Peugeot 308, 3008, 508 ou 5008 d'occasion.</p>

                <h2 id="courroie-chaine">1. Moteur 1.6 puretech 180 courroie ou chaîne ? La réponse ultime</h2>
                <p>C'est la question qui revient sans cesse sur des forums comme <em>Caradisiac</em> ou <em>Planète Citroën</em>, et la réponse est claire et rassurante : <strong>le moteur 1.6 PureTech est équipé d'une chaîne de distribution métallique, et non d'une courroie de distribution immergée.</strong></p>
                <p>Pour le comprendre, il faut regarder son arbre généalogique. Ce 1 6 puretech est en réalité l'évolution ultime du fameux moteur THP (nom de code EP6), développé originellement avec BMW. Si les premiers 1.6 THP des années 2010 avaient rencontré de lourds dysfonctionnements liés aux tendeurs de chaîne (décalage de la distribution), les ingénieurs de PSA (désormais Stellantis) ont intégralement rectifié le tir lors de son passage à la norme Euro 6 et son renommage en "PureTech" (ou "puretech 1.6"). La chaîne actuelle est robuste et son cycle de vie est conçu pour durer toute la vie du véhicule, sans remplacement périodique.</p>
                
                <!-- PLACEHOLDER IMAGE : Vue de la chaîne d'un 1.6 -->
                <img src="/Image/moteur-1-6-puretech-chaine-distribution.webp" alt="Gros plan sur la chaîne de distribution métallique très fiable du moteur 1.6 Puretech" style="width:100%; border-radius:10px; margin: 20px 0;">

                <h2 id="fiabilite-180">2. Moteur 1.6 PureTech 180 : Fiabilité au rendez-vous ?</h2>
                <p>Le <strong>1.6 puretech 180</strong> est probablement l'un des meilleurs moteurs thermiques modernes jamais construits par le groupe. Remplaçant progressivement les anciennes mécaniques diesels HDi, ce bloc excelle par sa souplesse et son silence. Associé quasi-exclusivement à l'excellente transmission japonaise Aisin (d'où les recherches courantes sur la <em>fiabilité moteur puretech 180 eat8</em>), son bilan est très positif.</p>
                
                <h3>Quels modèles sont équipés du 1.6 PureTech 180 et 225 ? (La liste complète)</h3>
                <p>Contrairement au petit 1.2 qui est partout, le 1.6 a été réservé aux segments supérieurs de Stellantis (souvent associé à l'excellente boîte EAT8). Voici la <strong>liste des moteurs puretech fiables</strong> de 1.6 litres selon les modèles :</p>
                <ul>
                    <li><strong>Peugeot 3008 1.6 puretech 180 fiabilité :</strong> Sur ce SUV familial, le moteur ne force pas. L'agrément est exceptionnel, bien loin des vibrations d'un 3 cylindres.</li>
                    <li><strong>Peugeot 5008 1.6 puretech 180 fiabilité :</strong> Idem pour le 7 places. Il encaisse parfaitement le poids en charge.</li>
                    <li><strong>Peugeot 508 II et DS 7 :</strong> Disponibles en 180 ch et en déclinaison sportive 225 ch. Les routières par excellence.</li>
                    <li><strong>Peugeot 308 II (GT) :</strong> Uniquement en 225 ch, une véritable alternative discrète à l'agressive GTI !</li>
                    <li><strong>Citroën C5 Aircross et C5 X :</strong> Proposés au lancement en 180 ch (pur thermique).</li>
                    <li><strong>DS 4 II et DS 9 :</strong> La grande berline DS 9 débute directement avec la déclinaison 225 ch.</li>
                    <li><strong>Opel Grandland X :</strong> Commercialisé techniquement sous l'appellation discrète <em>1.6 Turbo 181</em> chez la marque au blitz.</li>
                </ul>

                <h2 id="fiabilite-225">3. Fiabilité 1.6 PureTech 225 : Une mécanique poussée dans ses retranchements</h2>
                <p>Le <strong>1.6 puretech 225 fiabilité</strong> est une variante poussée à 225 chevaux de notre fameux bloc de 1.6 litres (EP6FADTX). Grâce à des réglages de turbo spécifiques et à une nouvelle ligne d'échappement, il vient animer les versions les plus dynamiques du groupe.</p>
                <p>L'étude des cas de panne, notamment les sujets remontés sur Reddit (<a href="https://www.reddit.com/r/peugeot/comments/1c6egdx/16_puretech_reliability/?tl=fr" target="_blank" rel="nofollow external">owners of 1.6 puretech 225bhp</a>) montre que cette version reste solide. Cependant, concernant le cas de la <strong>508 1.6 puretech 225 fiabilité</strong> ou même sur la lourde <strong>308 1.6 puretech 225 fiabilité</strong> (en thermique pur ou GT), on constate que sa consommation en carburant monte en flèche, ce qui peut engendrer, avec le système d'injection directe, un très léger risque accru d'encrassement des soupapes au-delà des 80 000 km. Ce n'est pas un défaut de conception mortel, simplement le lot récurrent des moteurs très turbocompressés modernes.</p>

                <!-- PLACEHOLDER IMAGE : Vue d'une 3008 1.6 puretech ou d'un moteur -->
                <img src="/Image/peugeot-508-puretech-225-sport.webp" alt="Superbe Peugeot 508 rouge motorisée par le bluffant 1.6 Puretech 225" style="width:100%; border-radius:10px; margin: 20px 0;">

                <h2 id="hybride-phev">4. Fiabilité des 1.6 PureTech Hybrides (180 et 225 ch)</h2>
                <p>Face aux malus écologiques colossaux, Stellantis a transformé son 4 cylindres en base pour sa technologie Hybride Rechargeable (PHEV). Ainsi, vous retrouvez souvent la <strong>fiabilité des 1.6 puretech hybride 180 ou 225ch</strong> questionnée par de potentiels acheteurs.</p>
                <ul>
                    <li>Le bloc essence lui-même ne pose pas de problème particulier car son architecture reste fondamentalement l'excellent EP6.</li>
                    <li><em>À noter (Confusion avec Renault) :</em> De nombreux internautes font des recherches sur le <strong>"1.6 e-tech 160 fiabilité"</strong>. Ne confondez pas ! Le bloc <em>E-Tech 1.6 160</em> (160 ch) est conçu par Renault (ex. Clio, Arkana). Il possède une boîte de vitesses à crabots ultra-spécifique sans embrayage, totalement différente de la très fiable EAT8 de notre 1.6 PureTech Stellantis !</li>
                </ul>

                <h2 id="problemes">5. 1.6 Puretech 180 problème : Les points à surveiller en occasion</h2>
                <p>Même si nous avons déclaré que le 1.6 PureTech (1.6 thp rebadgé) était l'un des <a href="#faq">moteurs de la liste Stellantis vraiment fiables</a>, aucune mécanique n'est infaillible. Voici les cas de <strong>1.6 puretech 180 problème</strong> et <strong>1.6 puretech 225 problème</strong> les plus sourcés par les garagistes :</p>
                
                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Organe mécanique</th>
                                <th>Symptômes</th>
                                <th>Niveau de gravité sur un 1.6</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Boîtier papillon motorisé (Pré-2019)</strong></td>
                                <td>Allumage du voyant moteur et forte perte de puissance ("mode dégradé"). Défaut récurrent sur les fameux "1.6 puretech 180 problème" des premières générations Euro 6.</td>
                                <td>Moyen. Le constructeur a remplacé la pièce en plastique par un corps en aluminium renforcé massif à partir de 2019 (prise en charge fréquente).</td>
                            </tr>
                            <tr>
                                <td><strong>La Pompe à Eau et Tendeur de chaîne</strong></td>
                                <td>Fuite de liquide de refroidissement, surchauffe, ou cliquetis prononcé côté distribution.</td>
                                <td>Moyen. Reliquat des défauts historiques du "THP", la pompe à eau a été renforcée depuis 2018. Reste une pièce d'observation critique en occasion (100 000 km+).</td>
                            </tr>
                            <tr>
                                <td><strong>Encrassement des Soupapes d'admission</strong></td>
                                <td>Instabilité du ralenti, manque de chevaux (notamment relevé sur l'historique <strong>1.6 puretech 225 problème</strong> pour ceux qui roulent trop doucement).</td>
                                <td>Faible. Typique de l'injection directe. Un nettoyage professionnel (décalaminage) résout ce souci "bénin" et redonne toute sa nervosité au véhicule.</td>
                            </tr>
                        </tbody>
                    </table>
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
                    <a href="/equipe" class="art-author-link">Découvrir toute la rédaction automobile</a>
                </div>
            </div>

            <!-- Conclusion Box -->
            <div class="art-conclusion">
                <h2 id="faq">FAQ : Vos questions concrètes sur la gamme PureTech</h2>
                
                <h3>Quel moteur puretech est fiable ? Existe-t-il une liste des moteurs Stellantis 1.6 Puretech fiables ?</h3>
                <p>Aussi surprenant que cela puisse paraître pour le grand public, oui ! <strong>Le 1.6 PureTech (4 cylindres, 180 ou 225 ch) est tout à fait recommandable en occasion.</strong> En fait, la liste des puretech "fiables" inclut tous les 4 cylindres équipés d'une chaîne, et exclut formellement les premières générations de 3 cylindres (le fameux 1.2 PureTech 110/130 chevaux, avant la modification récente repassant celui-ci en chaîne avec hybridation légère MHEV 136ch).</p>

                <h3>Le moteur 1.6 PureTech est-il équipé d'une courroie ou chaîne ?</h3>
                <p>Contrairement au désastreux 1.2 PureTech 3 cylindres et sa courroie de distribution humide, <strong>le bloc 1.6 PureTech 180 / 225 et modèles hybrides est animé par une chaîne de distribution en acier</strong>. Cette chaîne ne demande aucun remplacement de courroie et ne souffre pas de dissolution dans l'huile.</p>
                
                <h3>La boîte EAT8 avec le PureTech 180 est-elle source de problèmes ?</h3>
                <p>C'est l'exact opposé. La fiabilité du <strong>moteur puretech 180 eat8</strong> est fantastique grâce à ce convertisseur de couple d'origine japonaise (fournisseur Aisin). Il est réputé indestructible si l'on prend le soin de réaliser une longue-vidange (flush complet de la boîte) de prévention autour des 80 000 / 100 000 kilomètres.</p>

                <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:8px; padding:14px 18px; margin:20px 0;">
                    <strong style="font-size:0.8125rem; text-transform:uppercase; letter-spacing:0.05em; color:#6b7280;">À lire aussi</strong>
                    <p style="margin:6px 0 0;"><a href="/Blog/reparation-platine-boite-auto-mercedes">Réparation de platine de boîte automatique Mercedes</a> — quand la boîte auto tombe en panne hors garantie, la réparation de la platine électronique est une alternative économique au remplacement complet.</p>
                </div>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a
                        href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a></h2>
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
                                    <span class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span>
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
                                    <img src="<?php echo htmlspecialchars($sa['image']); ?>"
                                        alt="<?php echo htmlspecialchars($sa['title']); ?>">
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
                                        alt="<?php echo htmlspecialchars($ra['title']); ?>">
                                </div>
                                <h4><?php echo htmlspecialchars($ra['title']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (empty($same_cat_articles) && empty($all_other_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Avertissement</div>
                        <p style="font-size: 0.9em; color:#555; line-height:1.4;">Les données de fiabilité issues des retours clients peuvent varier selon le style de conduite ou l'année de production exacte.</p>
                    </div>
                <?php endif; ?>
            </div>
        </aside>

    </div><!-- .art-layout-wrapper -->
</article>

<!-- Schema JSON-LD (Article + FAQ) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://garageraymond.fr/Blog/moteur-1-6-puretech-fiabilite-avis"
      },
      "headline": "<?php echo addslashes($article['title']); ?>",
      "description": "<?php echo addslashes($article['subtitle']); ?>",
      "image": [
        "https://garageraymond.fr<?php echo $article['image']; ?>"
      ],
      "datePublished": "2026-03-23T08:00:00+01:00",
      "dateModified": "2026-03-23T08:00:00+01:00",
      "author": {
        "@type": "Person",
        "name": "<?php echo $article['author']; ?>",
        "url": "https://garageraymond.fr/equipe",
        "jobTitle": "<?php echo $article['author_role']; ?>"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Le garage expert Auto",
        "url": "https://garageraymond.fr",
        "logo": {
          "@type": "ImageObject",
          "url": "https://garageraymond.fr/Image/favicon.png",
          "width": "512",
          "height": "512"
        }
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Quel moteur puretech est fiable ? Existe-t-il une liste des moteurs Stellantis 1.6 Puretech fiables ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Oui, le 1.6 PureTech de 180 et 225 chevaux est un moteur à 4 cylindres très recommandé en occasion, contrairement à l'ancienne génération du petit 1.2 PureTech tristement célèbre et soumis à des litiges."
          }
        },
        {
          "@type": "Question",
          "name": "Le moteur 1.6 PureTech est-il équipé d'une courroie ou chaîne ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Le moteur 1.6 PureTech est équipé d'une chaîne de distribution métallique sans entretien, lui octroyant une excellente robustesse face au vieillissement."
          }
        },
        {
          "@type": "Question",
          "name": "La boîte EAT8 avec le PureTech 180 est-elle source de problèmes ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Non, la transmission convertisseur de couple EAT8 (Aisin) est réputée quasi indestructible si elle est vidangée occasionnellement."
          }
        }
      ]
    }
  ]
}
</script>

<?php include __DIR__ . '/../footer.php'; ?>

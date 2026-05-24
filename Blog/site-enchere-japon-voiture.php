<?php
// published: 2026-04-18 08:00
/**
 * site-enchere-japon-voiture.php
 */

$page_title       = "Site enchère Japon voiture : le guide complet des plateformes JDM pour importer";
$page_description = "USS, TAA, JAA, brokers, grades japonais, coût d'import… Tout savoir sur les sites d'enchères de voitures au Japon pour importer votre JDM en France en 2026.";

$article = [
    'title'          => 'Site enchère Japon voiture : USS, TAA, brokers et coût d\'import JDM',
    'subtitle'       => "USS, TAA, JAA, brokers accessibles aux particuliers, lecture de la feuille d'enchère et coût réel d'import : tout ce qu'il faut savoir pour acheter une voiture au Japon depuis la France.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Import JDM', 'Enchères Japon', 'Voiture Japonaise', 'Achat Occasion Import', 'USS TAA'],
    'image'          => '/Image/site-enchere-japon-voiture1.webp',
    'date'           => '18 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Spécialiste Achat & Import Occasion',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud suit le marché de l'occasion depuis plus de 20 ans, avec une passion particulière pour les imports japonais et les véhicules hors du commun. Il décortique les plateformes et les procédures pour que vous n'ayez aucune mauvaise surprise.",
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
            $other_article['url']   = '/' . $file_slug;
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
             alt="Salle des ventes aux enchères automobiles USS au Japon avec professionnels et boîtiers électroniques"
             class="art-hero-bg"
             width="1200" height="675" decoding="async">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/occasion"><?php echo $article['category_name']; ?></a>
                    <span class="art-bc-sep">/</span>
                    <span>Guide Pratique</span>
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
                    <li><strong>Accès fermé au public :</strong> USS, TAA, JAA et les grands réseaux physiques sont réservés aux professionnels — un broker (mandataire) est obligatoire pour enchérir en tant que particulier.</li>
                    <li><strong>Lire le grade :</strong> Grade 4 et au-dessus = bon état général. Grade R = réparé après accident, à analyser avec un professionnel.</li>
                    <li><strong>Coût réel :</strong> Prix d'enchère + frais broker + fret + 10% douanes + 20% TVA + homologation. Prévoyez souvent 30 à 50% au-dessus du prix d'enchère.</li>
                    <li><strong>Homologation :</strong> Toute voiture japonaise récente nécessite une RTI (Réception à Titre Isolé) via la DREAL — procédure longue et coûteuse, souvent déléguée à un mandataire.</li>
                    <li><strong>Délai :</strong> Comptez 6 à 8 semaines de transit maritime avant l'arrivée en France.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#fonctionnement-encheres">Comment fonctionnent les enchères automobiles japonaises ?</a></li>
                    <li><a href="#liste-reseaux">Les meilleurs réseaux et sites d'enchères au Japon</a></li>
                    <li><a href="#astuce-telegram">L'astuce Telegram pour les alertes JDM</a></li>
                    <li><a href="#lire-grade">Grade et feuille d'enchère : comment les décoder ?</a></li>
                    <li><a href="#cout-import">Le coût réel de l'import : du prix d'enchère à la carte grise</a></li>
                    <li><a href="#homologation">L'homologation en France (DREAL / UTAC)</a></li>
                    <li><a href="#faq">FAQ : importer un véhicule du Japon</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Le marché intérieur japonais (JDM — Japanese Domestic Market) regorge de pépites : sportives mythiques des années 90, Kei Cars économiques, modèles européens dans des états de conservation exceptionnels. Mais acheter à la source passe obligatoirement par un site d'enchère de voiture au Japon. Face à la barrière de la langue, aux règles d'exportation strictes et à la multitude d'intermédiaires, voici le guide complet pour importer votre véhicule en toute sécurité.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="fonctionnement-encheres">Comment fonctionnent les enchères automobiles japonaises ?</h2>

                <p>Le système de vente aux enchères au Japon est une machine industrielle sans équivalent dans le monde. Des parcs gigantesques comme USS Tokyo, JAA ou ARAI voient transiter des dizaines de milliers de véhicules chaque semaine — <strong>une voiture est vendue toutes les 15 secondes</strong>.</p>

                <p>La règle d'or à comprendre : <strong>ces réseaux physiques sont strictement fermés au grand public</strong>. Seuls les concessionnaires, garages et exportateurs certifiés disposant d'une licence japonaise peuvent entrer dans ces salles et utiliser les boîtiers de vote électroniques. Pour un particulier français, passer par un broker (mandataire) est donc une obligation, pas une option.</p>

                <img src="/Image/site-enchere-japon-voiture1.webp" alt="Salle des ventes USS au Japon avec professionnels aux pupitres électroniques" width="900" height="506" loading="lazy">

                <!-- ══════════════════════════════════ -->
                <h2 id="liste-reseaux">Les meilleurs réseaux et sites d'enchères au Japon</h2>

                <p>Voici les principaux réseaux d'enchères japonais et les brokers qui permettent aux particuliers d'y accéder.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Réseau</th>
                                <th>Spécialité</th>
                                <th>Volume hebdomadaire</th>
                                <th>Accès particulier</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>USS</strong></td>
                                <td>Généraliste, leader absolu</td>
                                <td>+ 60 000 véhicules</td>
                                <td>Via broker uniquement</td>
                            </tr>
                            <tr>
                                <td><strong>TAA (Toyota)</strong></td>
                                <td>Véhicules récents, inspections strictes</td>
                                <td>+ 15 000 véhicules</td>
                                <td>Via broker uniquement</td>
                            </tr>
                            <tr>
                                <td><strong>ARAI</strong></td>
                                <td>Utilitaires, vans, tourisme</td>
                                <td>+ 10 000 véhicules</td>
                                <td>Via broker uniquement</td>
                            </tr>
                            <tr>
                                <td><strong>Be Forward / Jimex</strong></td>
                                <td>Exportateurs internationaux multi-réseaux</td>
                                <td>Tout le réseau japonais</td>
                                <td>Oui, accès direct</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>USS (Used Car System Solutions)</h3>
                <p>Le géant incontesté qui contrôle plus de 30% du marché japonais. Avec des dizaines de milliers de véhicules chaque semaine, vous y trouverez tout : de la petite Kei Car à la supercar de collection. <a href="https://www.ussnet.co.jp/en/" target="_blank" rel="nofollow noopener">Découvrir le réseau USS</a>.</p>

                <h3>JAA (Japan Auto Auctions)</h3>
                <p>Historique et très réputé, particulièrement puissant sur la région de Tokyo. Les véhicules issus de cette zone sont souvent très bien entretenus et peu kilométrés, en raison de l'excellent réseau de transports en commun de la capitale.</p>

                <h3>TAA (Toyota Auto Auction)</h3>
                <p>Géré directement par Toyota, ce réseau est célèbre pour ses standards d'inspection extrêmement stricts. Si vous cherchez un véhicule irréprochable et transparent sur son état, TAA est une valeur sûre. <a href="https://taaweb.jp/" target="_blank" rel="nofollow noopener">Découvrir le réseau TAA</a>.</p>

                <h3>ARAI Auto Auction</h3>
                <p>Très fort sur les véhicules utilitaires, les vans — très prisés en import — et les camions, en plus d'un gros volume de tourisme classique. <a href="https://www.araiaa.jp/" target="_blank" rel="nofollow noopener">Découvrir le réseau ARAI</a>.</p>

                <h3>CAA & HAA (Honda Auto Auction)</h3>
                <p>Des groupes régionaux ou affiliés directement à des constructeurs. Parfaits pour dénicher des modèles spécifiques ou des finitions rares qui ne sortent pas des grandes métropoles.</p>

                <h3>Les brokers pour les particuliers</h3>
                <p>Des géants comme <a href="https://www.beforward.jp/" target="_blank" rel="nofollow noopener">Be Forward</a> ou <a href="https://jimex.co.jp/" target="_blank" rel="nofollow noopener">Jimex</a> proposent des interfaces traduites (en français ou en anglais) où vous pouvez déposer des enchères maximum en proxy bidding. Des mandataires français comme International Cars proposent quant à eux un service clés en main incluant l'enchère, l'import et toute la paperasse française.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="astuce-telegram">L'astuce Telegram pour les alertes JDM</h2>

                <p>L'angle que les puristes utilisent : les <strong>bots Telegram d'enchères japonaises</strong>. Au lieu de rafraîchir manuellement les sites des brokers, les acheteurs malins paramètrent des canaux Telegram connectés à l'API des enchères. Exemple d'alerte : "Nissan Skyline R34, Grade 4, moins de 100 000 km". Dès que le véhicule est scanné sur le parc au Japon, la notification arrive sur votre téléphone — bien avant qu'il n'apparaisse sur les sites publics occidentaux.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="lire-grade">Grade et feuille d'enchère : comment les décoder ?</h2>

                <p>Acheter un véhicule à 10 000 km de distance demande de la réassurance. C'est le rôle de la <em>shuppenhyo</em>, la feuille d'enchère. Les inspecteurs japonais sont réputés pour leur sévérité. Voici comment décoder leur notation :</p>

                <ul>
                    <li><strong>Grade 5 ou 6 :</strong> Véhicule neuf ou proche du neuf.</li>
                    <li><strong>Grade 4.5 :</strong> Excellent état, défauts infimes.</li>
                    <li><strong>Grade 4 :</strong> Bon état général, quelques rayures ou usures d'usage normales.</li>
                    <li><strong>Grade 3.5 :</strong> Usure visible, retouches de peinture à prévoir.</li>
                    <li><strong>Grade R (ou RA) :</strong> Réparé suite à un accident — souvent de bonnes affaires si la réparation est bien faite, mais à analyser avec un professionnel.</li>
                </ul>

                <p>Sur le schéma carrosserie, repérez les lettres : <strong>A</strong> (rayure, de A1 léger à A3 profond), <strong>U</strong> (bosse) et <strong>W</strong> (panneau repeint). Attention aussi aux mentions de rouille ("Rust") : si le véhicule en est atteint, prévoyez un budget pour un <a href="/traitement-anti-corrosion-chassis-voiture">traitement anti-corrosion du châssis</a> dès son arrivée en France.</p>

                <img src="/Image/site-enchere-japon-voiture2.webp" alt="Feuille d'enchère japonaise shuppenhyo avec annotations A1, U2 et grade 4 entouré" width="900" height="506" loading="lazy">

                <!-- ══════════════════════════════════ -->
                <h2 id="cout-import">Le coût réel de l'import : du prix d'enchère à la carte grise</h2>

                <p>Ne vous laissez pas aveugler par le prix affiché sur le site d'enchère. L'importation suit une formule mathématique stricte :</p>

                <ol>
                    <li><strong>Prix FOB (Free On Board) :</strong> Prix d'enchère + frais de l'intermédiaire japonais + transport jusqu'au port d'exportation.</li>
                    <li><strong>Fret maritime :</strong> Coût du bateau (RoRo ou conteneur). FOB + Fret = valeur <strong>CIF (Cost, Insurance, Freight)</strong>.</li>
                    <li><strong>Droits de douane :</strong> 10% appliqués sur la valeur CIF.</li>
                    <li><strong>TVA française :</strong> 20% appliqués sur (valeur CIF + droits de douane).</li>
                    <li><strong>Frais annexes :</strong> Dépotage au port du Havre ou de Fos-sur-Mer, transitaire, et homologation.</li>
                </ol>

                <img src="/Image/site-enchere-japon-voiture3.webp" alt="Nissan Skyline GT-R R34 blanche chargée dans un conteneur maritime sur un port japonais au crépuscule" width="900" height="506" loading="lazy">

                <!-- ══════════════════════════════════ -->
                <h2 id="homologation">L'homologation en France (DREAL / UTAC)</h2>

                <p>Sauf si le véhicule a plus de 30 ans — éligible à la carte grise de collection via la FFVE, ce qui simplifie considérablement les choses — une voiture japonaise récente n'a pas de certificat de conformité européen (COC). Il faut passer par une <strong>RTI (Réception à Titre Isolé)</strong> via la DREAL et des tests à l'UTAC (bruit, pollution, freinage, rétrovision).</p>

                <p>Cette procédure est longue (souvent 6 à 10 mois), coûteuse et administrativement lourde. C'est pourquoi près de 90% des particuliers préfèrent payer un mandataire professionnel français pour gérer cette étape de A à Z.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq">FAQ : importer un véhicule du Japon</h2>

                <p><strong>Peut-on utiliser un site d'enchère japonais pour une moto ?</strong><br>
                Oui. Les réseaux <strong>BDS</strong> et <strong>JBA</strong> sont exclusivement spécialisés dans les deux-roues. Le processus est similaire aux voitures. Une fois la moto arrivée au port français, consultez notre guide pour savoir <a href="/comment-transporter-une-moto-dans-un-fourgon">comment transporter une moto dans un fourgon</a> depuis le port jusqu'à chez vous.</p>

                <p><strong>Peut-on rouler avec un volant à droite (RHD) en France ?</strong><br>
                Oui, c'est parfaitement légal. La conduite à droite demande un petit temps d'adaptation, notamment pour les dépassements et les péages. Attention : les optiques de phares avant devront être modifiées ou changées pour passer le contrôle technique français et ne pas éblouir les conducteurs venant d'en face.</p>

                <p><strong>Combien de temps dure le transport par bateau ?</strong><br>
                Comptez <strong>6 à 8 semaines</strong> de transit maritime entre la sortie du port japonais et l'arrivée en France (Le Havre ou Fos-sur-Mer). Les délais administratifs de douane s'y ajoutent.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Importer depuis le Japon, c'est souvent 30 à 50% de frais supplémentaires au-dessus du prix d'enchère. Mais pour un Grade 4 ou 4.5 sur un modèle introuvable en Europe, le calcul reste souvent gagnant — à condition de ne rien négliger entre le FOB et la DREAL.</p>
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
                <p>Les enchères automobiles japonaises sont parmi les plus fiables et les mieux organisées au monde. Accessible aux particuliers via les brokers, ce marché est une mine d'or pour qui prend le temps de comprendre les grades, de calculer les frais réels et de s'entourer des bons partenaires pour l'homologation. Prenez le temps de bien lire chaque shuppenhyo, et votre prochaine voiture pourrait venir directement d'un parc de Yokohama.</p>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/occasion"><?php echo $article['category_name']; ?></a></h2>
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
                "@id"   => "https://garageraymond.fr/" . $current_slug
            ],
            "headline"      => $article['title'],
            "description"   => $article['subtitle'],
            "image"         => ["https://garageraymond.fr" . $article['image']],
            "datePublished" => "2026-04-18T08:00:00+02:00",
            "dateModified"  => "2026-04-18T08:00:00+02:00",
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
                    "name"  => "USS Net",
                    "url"   => "https://www.ussnet.co.jp/en/"
                ],
                [
                    "@type" => "WebSite",
                    "name"  => "TAA Web",
                    "url"   => "https://taaweb.jp/"
                ],
                [
                    "@type" => "WebSite",
                    "name"  => "Be Forward",
                    "url"   => "https://www.beforward.jp/"
                ]
            ],
            "keywords" => "site enchère Japon voiture, enchères automobiles japonaises, USS, TAA, import JDM, acheter voiture Japon, broker japonais"
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

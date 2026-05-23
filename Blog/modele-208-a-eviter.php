<?php
// published: 2026-05-03 09:00
/**
 * modele-208-a-eviter.php
 */

$page_title       = "Peugeot 208 à éviter : Motorisations et années à fuir absolument (2026)";
$page_description = "1.2 PureTech, 1.5 BlueHDi, hybrides 48V rappelés : le guide expert des Peugeot 208 à éviter en occasion en 2026, avec les versions fiables à cibler.";

$article = [
    'title'          => "Peugeot 208 à éviter : Listing des motorisations et années à fuir (Édition 2026)",
    'subtitle'       => "Au garage, on voit défiler des dizaines de clients persuadés d'avoir fait une bonne affaire. Voici le guide terrain pour ne pas payer un moteur neuf sur une 208 d'occasion.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Peugeot 208', 'Fiabilité', 'Achat Occasion', '<a href="/Blog/moteur-1-6-puretech-fiabilite-avis">PureTech</a>', 'BlueHDi'],
    'image'          => '/Image/modele-208-a-eviter1.webp',
    'date'           => '3 Mai 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Achat & Occasion',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud accompagne acheteurs et vendeurs sur le marché de l'occasion depuis plus de 12 ans. Spécialiste des défauts de conception et des casses moteur récurrentes, il décrypte sans filtre les pièges du marché de l'occasion en France.",
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

<!-- CSS spécifique article : table blacklist motorisations -->
<style>
    .evit-table-wrap { overflow-x: auto; margin: 24px 0; -webkit-overflow-scrolling: touch; }
    .evit-table { width: 100%; border-collapse: collapse; font-size: 0.88rem; min-width: 480px; }
    .evit-table th { background: <?php echo $article['category_color']; ?>; color: #fff; padding: 10px 13px; text-align: left; font-size: 0.81rem; text-transform: uppercase; letter-spacing: 0.04em; }
    .evit-table td { padding: 10px 13px; border-bottom: 1px solid rgba(255,255,255,0.07); vertical-align: middle; }
    .evit-table tr:nth-child(even) td { background: rgba(124,58,237,0.05); }
    .evit-rouge { color: #dc2626; font-weight: 700; }
    .evit-orange { color: #ea580c; font-weight: 700; }
    .evit-vert { color: #059669; font-weight: 700; }
    @media (max-width: 640px) {
        .evit-table, .evit-table thead, .evit-table tbody, .evit-table th, .evit-table td, .evit-table tr { display: block; }
        .evit-table thead { display: none; }
        .evit-table tr { border: 1px solid rgba(255,255,255,0.1); border-radius: 8px; margin-bottom: 12px; padding: 8px 0; }
        .evit-table td { border: none; border-bottom: 1px solid rgba(255,255,255,0.05); padding: 8px 13px; }
        .evit-table td::before { content: attr(data-label); display: block; font-size: 0.72rem; text-transform: uppercase; color: <?php echo $article['category_color']; ?>; font-weight: 700; margin-bottom: 3px; }
        .evit-table td:last-child { border-bottom: none; }
    }
</style>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Peugeot 208 d'occasion sur un pont élévateur, mécanicien inspectant la courroie de distribution"
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
                    <span>Guide Expert</span>
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
                    <li><strong>Danger n°1 :</strong> Le 1.2 PureTech (82, 110, 130 ch) produit entre 2012 et 2018 — la courroie humide est une bombe à retardement.</li>
                    <li><strong>Diesel fragile :</strong> Le 1.5 BlueHDi (2018-2022) cumule une chaîne trop fine (7 mm) et une cristallisation systémique de l'AdBlue.</li>
                    <li><strong>Rappel 2026 :</strong> Les hybrides 48V produits entre 2023 et 2026 sont sous campagne de rappel officiel pour risque de court-circuit (incendie).</li>
                    <li><strong>À privilégier :</strong> Le 1.2 PureTech à chaîne post-2022 ou la e-208 électrique, sans courroie ni AdBlue.</li>
                    <li><strong>Règle d'or :</strong> Inspectez la courroie par le bouchon d'huile et exigez un carnet d'entretien complet avant tout engagement.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#motorisations-a-risque">Pourquoi certaines 208 sont-elles considérées comme "à risque" ?</a></li>
                    <li><a href="#listing-a-eviter">Listing détaillé des modèles Peugeot 208 à éviter absolument</a></li>
                    <li><a href="#versions-fiables">Quelles sont les Peugeot 208 fiables pour un achat serein ?</a></li>
                    <li><a href="#points-de-controle">3 points de contrôle obligatoires avant l'achat</a></li>
                    <li><a href="#recours-finance">Recours et Finance : ce qu'il faut savoir avant de signer</a></li>
                    <li><a href="#faq">FAQ : Les questions que tout acheteur se pose</a></li>
                    <li><a href="#recapitulatif">Récapitulatif des modèles de Peugeot 208 à éviter</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>La Peugeot 208 est la star incontestée du marché de l'occasion, mais c'est aussi l'une des voitures qui remplit le plus nos ateliers. Je vais être très clair : acheter la mauvaise version peut vous coûter un moteur neuf, soit une facture tournant autour des 6 000 euros. Voici le guide terrain pour éviter ce piège financier — des années noires aux dernières alertes de 2026.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="motorisations-a-risque">Pourquoi certaines 208 sont-elles considérées comme "à risque" ?</h2>

                <p>Concrètement, le problème ne vient ni du châssis ni de l'électronique de bord, mais bien des entrailles du véhicule. Le groupe Stellantis a fait des choix techniques hasardeux sur deux de ses moteurs les plus vendus.</p>

                <p>D'une part, on trouve l'essence avec le fameux système de <strong>courroie humide</strong>. La courroie de distribution baigne directement dans l'huile moteur. Avec le temps et le carburant qui se dilue, elle se désagrège. Ses débris viennent boucher la crépine de la pompe à huile. Le résultat est sans appel : une chute de pression fatale et une casse moteur si l'intervention n'est pas immédiate.</p>

                <p>D'autre part, on a le diesel avec des systèmes de dépollution trop fragiles. Le réservoir d'AdBlue a la fâcheuse tendance à se déformer suite à un défaut de mise à l'air, et l'urée cristallise dans le circuit. Ce phénomène oblige à remplacer l'ensemble du système à vos frais.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="listing-a-eviter">Listing détaillé des modèles Peugeot 208 à éviter absolument</h2>

                <h3>1.2 PureTech 82, 110 et 130 ch (2012 — 2018)</h3>
                <p>C'est incontestablement la motorisation à fuir en priorité. Sur ces années de production, la courroie de distribution est une véritable bombe à retardement. Si vous essayez l'une de ces 208 et que le voyant de pression d'huile s'allume, même une fraction de seconde au freinage, passez votre chemin. Le <a href="/Blog/peugeot-2008-modele-a-eviter">Peugeot 2008 à éviter</a> partage exactement ces mêmes blocs défaillants, ce qui explique <strong><u><a href="/Blog/probleme-moteur-peugeot-2008">les mêmes problèmes moteur sur le Peugeot 2008</a></u></strong>.</p>

                <h3>1.5 BlueHDi 100 et 130 ch (2018 — 2022)</h3>
                <p>Ne pensez pas que le diesel vous protégera des avaries sur la Phase 2. Sur ces blocs, le constructeur a installé une chaîne d'arbres à cames de seulement 7 mm, beaucoup trop fine, qui finit par se détendre ou casser. Si un claquement métallique distinct se fait entendre au démarrage à froid, la chaîne est sur le point de céder. À cela s'ajoute le risque omniprésent de défaillance du système AdBlue.</p>

                <img src="/Image/modele-208-a-eviter2.webp"
                     alt="Courroie de distribution humide PureTech désagrégée avec débris visibles dans le carter d'huile"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <h3>1.6 HDi 92 ch (Premières versions Phase 1)</h3>
                <p>Bien qu'il soit globalement plus solide que le 1.5, ce bloc diesel d'avant 2016 souffre d'un défaut bien connu dans nos ateliers : la fuite des joints d'injecteurs. La calamine s'accumule lentement, pollue l'huile, puis finit par détruire le turbo. Une forte odeur de gaz d'échappement en ouvrant le capot est un signal d'alarme immédiat.</p>

                <h3>Les versions Hybrides 48V (Produites entre 2023 et 2026)</h3>
                <p>C'est l'alerte majeure de cette année. Alors qu'on pensait l'hybridation salvatrice, Stellantis a dû lancer un rappel massif en <strong>mars 2026</strong> pour ces modèles spécifiques. Le problème réside dans un risque de court-circuit au niveau de la batterie 48V, ce qui peut déclencher un incendie. Si vous ciblez un modèle récent, exigez la preuve formelle que cette intervention de sécurité a été réalisée.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="versions-fiables">Quelles sont les Peugeot 208 fiables pour un achat serein ?</h2>

                <h3>Le 1.2 VTi 82 ch (sans turbo) : La simplicité urbaine</h3>
                <p>Sur les toutes premières générations, avant l'appellation PureTech, ce petit bloc atmosphérique fait le job. Sans turbo, il compte moins de pièces soumises à de fortes contraintes. Il consomme certes un peu d'huile par nature, mais il reste robuste et parfaitement adapté aux trajets urbains.</p>

                <h3>Le 1.2 PureTech à chaîne (Post-2022) : Le problème enfin résolu</h3>
                <p>La marque a fini par corriger le tir. Sur les exemplaires produits à partir de fin 2022 ou début 2023, la fameuse courroie humide a été remplacée par une chaîne de distribution solide. Le niveau de fiabilité s'en trouve radicalement amélioré.</p>

                <h3>La e-208 électrique : Zéro courroie, zéro AdBlue</h3>
                <p>Si votre budget le permet et que vous pouvez recharger facilement, la e-208 est objectivement la déclinaison la plus sécurisante. Pas de courroie capricieuse, pas d'à-coups de boîte automatique, zéro souci d'injecteur.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="points-de-controle">3 points de contrôle obligatoires avant d'acheter une 208 d'occasion</h2>

                <img src="/Image/modele-208-a-eviter3.webp"
                     alt="Carnet d'entretien Peugeot 208 ouvert avec tampons de concession visible lors d'une inspection avant achat"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <ul>
                    <li><strong>Le test du bouchon d'huile :</strong> Dévissez le bouchon de remplissage d'huile et éclairez l'intérieur avec votre téléphone. Si le dos de la courroie est craquelé, rugueux ou effiloché, partez.</li>
                    <li><strong>L'historique réseau limpide :</strong> Exigez le carnet d'entretien complet. Si la maintenance n'a pas été effectuée dans le réseau Peugeot, le constructeur vous refusera toute aide en cas de pépin. Consultez également notre guide sur le <a href="/Blog/manuel-d-utilisation-peugeot-208-pdf">manuel d'utilisation de la Peugeot 208</a> pour comprendre les intervalles d'entretien.</li>
                    <li><strong>Le diagnostic au tableau de bord :</strong> Mettez le contact avant de démarrer. Si un voyant reste allumé, vérifiez la <a href="/Blog/voyant-tableau-de-bord-peugeot-208">signification des voyants de la 208</a> avant de vous engager.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="recours-finance">Recours et Finance : ce qu'il faut savoir avant de signer</h2>

                <p>En occasion, le risque zéro n'existe pas, même en étant vigilant. Je vous conseille donc de toujours négocier une <a href="/Blog/garantie-3-mois-voiture-occasion">garantie 3 mois voiture occasion</a> au strict minimum, en vérifiant que le bloc moteur est bien couvert par le contrat.</p>

                <p>Sachez que Stellantis a assoupli sa politique : une prise en charge à 100 % des pièces est possible pour les véhicules de moins de 8 ans et 150 000 km, mais uniquement si l'entretien a été scrupuleusement respecté dans le réseau agréé.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq">FAQ : Les questions que tout acheteur se pose</h2>

                <h3>Comment savoir si ma 208 est concernée par un rappel ?</h3>
                <p>Munissez-vous de votre carte grise et relevez le numéro de série (VIN). Allez ensuite sur le portail gouvernemental Rappel Conso pour voir si une intervention est requise, notamment pour la batterie 48V ou l'airbag Takata.</p>

                <h3>Quand changer la courroie de distribution sur une 208 essence ?</h3>
                <p>Face à l'hécatombe des casses moteurs, Peugeot a drastiquement réduit les préconisations. Initialement prévue pour 10 ans ou 175 000 km, elle doit désormais être changée tous les 6 ans ou 100 000 km maximum. Au garage, je conseille un contrôle visuel à chaque vidange.</p>

                <h3>Quelle est la panne la plus fréquente de la Peugeot 208 ?</h3>
                <p>Sans conteste la surconsommation d'huile liée à l'usure de la segmentation et à la courroie qui se désagrège sur le moteur 1.2 PureTech. Côté diesel, c'est le défaut de la jauge et la déformation du réservoir d'AdBlue qui reviennent le plus souvent.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="recapitulatif">Récapitulatif des modèles de Peugeot 208 à éviter</h2>

                <div class="evit-table-wrap">
                    <table class="evit-table">
                        <thead>
                            <tr>
                                <th>Motorisation</th>
                                <th>Années noires</th>
                                <th>Problème majeur</th>
                                <th>Verdict</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Motorisation"><strong>1.2 PureTech (82, 110, 130 ch)</strong></td>
                                <td data-label="Années">2012 - 2018</td>
                                <td data-label="Problème">Courroie humide désagrégée / Crépine bouchée</td>
                                <td data-label="Verdict"><span class="evit-rouge">À fuir absolument</span></td>
                            </tr>
                            <tr>
                                <td data-label="Motorisation"><strong>1.5 BlueHDi (100, 130 ch)</strong></td>
                                <td data-label="Années">2018 - 2022</td>
                                <td data-label="Problème">Chaîne 7 mm / Cristallisation AdBlue</td>
                                <td data-label="Verdict"><span class="evit-orange">À surveiller de très près</span></td>
                            </tr>
                            <tr>
                                <td data-label="Motorisation"><strong>1.6 HDi 92 ch</strong></td>
                                <td data-label="Années">Avant 2016</td>
                                <td data-label="Problème">Fuite joints injecteurs / Casse turbo</td>
                                <td data-label="Verdict"><span class="evit-orange">Prudence (vérifier calamine)</span></td>
                            </tr>
                            <tr>
                                <td data-label="Motorisation"><strong>Hybrides 48V (e-DCS6)</strong></td>
                                <td data-label="Années">2023 - 2026</td>
                                <td data-label="Problème">Risque court-circuit batterie (rappel incendie 2026)</td>
                                <td data-label="Verdict"><span class="evit-orange">Vérifier rappel constructeur</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Sur une Peugeot 208, la motorisation fait toute la différence. Fuyez le PureTech sans carnet d'entretien complet, exigez toujours le contrôle visuel de la courroie, et orientez-vous vers la e-208 ou le PureTech à chaîne post-2022 si votre budget le permet. Le reste, c'est de la chance.</p>
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
                <p>La Peugeot 208 reste une excellente voiture quand on choisit la bonne version. Le piège, c'est de se laisser séduire par un prix attractif sans regarder sous le bouchon d'huile. Trois secondes d'inspection peuvent vous éviter six mille euros de réparation. Prenez le temps de vérifier, ou passez votre chemin.</p>
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
            "datePublished" => "2026-05-03T09:00:00+02:00",
            "dateModified"  => "2026-04-28T09:00:00+02:00",
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
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

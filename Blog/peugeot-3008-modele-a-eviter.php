<?php
// published: 2026-04-29 09:00
/**
 * peugeot-3008-modele-a-eviter.php
 */

$page_title       = "Peugeot 3008 modèle à éviter : Le guide vérité 2026 pour ne pas se ruiner";
$page_description = "1.2 PureTech, 1.6 THP, 1.5 BlueHDi : les versions du Peugeot 3008 à fuir absolument en occasion en 2026. Checklist expert et versions fiables à cibler.";

$article = [
    'title'          => "Peugeot 3008 modèle à éviter : Le guide vérité 2026 pour ne pas se ruiner",
    'subtitle'       => "Derrière le design et l'i-Cockpit se cachent des défaillances de conception capables d'engloutir 7 000 € de réparations. Voici les millésimes à proscrire et les rares versions sur lesquelles miser.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Peugeot 3008', 'Fiabilité', 'Achat Occasion', 'PureTech', 'BlueHDi'],
    'image'          => '/Image/peugeot-3008-modele-a-eviter1.webp',
    'date'           => '29 Avril 2026',
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
            try { eval('$other_article = [' . $matches[1] . '];'); } catch (Throwable $e) { continue; }
        }
        if ($other_article && isset($other_article['title'])) {
            $other_article['slug']  = $file_slug;
            $other_article['url']   = '/Blog/' . $file_slug;
            $other_article['image'] = '/' . ltrim($other_article['image'] ?? '', '/');
            if (($other_article['category'] ?? '') === $article['category']) { $same_cat_articles[] = $other_article; }
            $all_other_articles[] = $other_article;
        }
    }
}

include __DIR__ . '/../header.php';
?>

<!-- CSS spécifique article : table verdict motorisations -->
<style>
    .evit-table-wrap { overflow-x: auto; margin: 24px 0; -webkit-overflow-scrolling: touch; }
    .evit-table { width: 100%; border-collapse: collapse; font-size: 0.88rem; min-width: 520px; }
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
             alt="Peugeot 3008 d'occasion capot ouvert, mécanicien inspectant le moteur PureTech"
             class="art-hero-bg"
             width="1200" height="675" decoding="async">
        <div class="art-hero-overlay"></div>
        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a><span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a><span class="art-bc-sep">/</span>
                    <span>Guide Expert</span>
                </nav>
                <div class="art-hero-tags">
                    <?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?>
                </div>
                <h1><?php echo $article['title']; ?></h1>
                <p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
                <div class="art-hero-meta">
                    <div class="art-author-pill">
                        <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>" width="40" height="40">
                        <div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div>
                    </div>
                    <div class="art-meta-infos">
                        <span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HORIZONTAL CATEGORY NAV -->
    <nav class="art-cat-nav">
        <div class="art-cat-nav-inner">
            <?php foreach ($categories as $slug_cat => $cat): ?>
                <a href="/<?php echo $slug_cat; ?>" class="art-cat-link <?php echo $slug_cat === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $cat['color']; ?>">
                    <span class="art-cat-dot" style="background-color: <?php echo $cat['color']; ?>"></span><?php echo $cat['name']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </nav>

    <!-- ASYMMETRIC LAYOUT (70 / 30) -->
    <div class="art-layout-wrapper">
        <div class="art-main-col">

            <!-- TL;DR -->
            <div class="art-tldr">
                <div class="art-tldr-title">L'essentiel à retenir (TL;DR)</div>
                <ul>
                    <li><strong>Danger essence Phase 1 :</strong> Le 1.6 THP 150/156 ch — tendeur de chaîne chronique, soupapes détruites sans préavis.</li>
                    <li><strong>Danger essence Phase 2 :</strong> Le 1.2 PureTech 130 ch avant juillet 2021 — courroie humide et crépine bouchée.</li>
                    <li><strong>Diesel fragile :</strong> Le 1.5 BlueHDi (2017-2022) — cristallisation AdBlue et chaîne de 7 mm trop fine.</li>
                    <li><strong>Recommandé :</strong> Le 2.0 BlueHDi 150/180 ch pour dépasser 300 000 km, ou le Hybrid 136 ch post-2023 avec chaîne.</li>
                    <li><strong>Vigilance :</strong> Si le voyant d'huile s'allume, arrêtez tout — rouler en mode dégradé transforme 1 500 € en 8 000 €.</li>
                </ul>
            </div>

            <!-- TOC -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#verdict-motorisations">Résumé express : Le verdict sur les motorisations à fuir</a></li>
                    <li><a href="#historique-fragilite">L'historique du mal : Pourquoi certains 3008 sont-ils si fragiles ?</a></li>
                    <li><a href="#phase1-a-bannir">Peugeot 3008 Phase 1 (2009-2016) : Les modèles à bannir</a></li>
                    <li><a href="#phase2-scandale">Peugeot 3008 Phase 2 (2016-2023) : Le scandale PureTech et BlueHDi</a></li>
                    <li><a href="#defaut-moteur">Comment réagir au message "Défaut moteur" ?</a></li>
                    <li><a href="#versions-fiables">Quelles versions acheter pour dormir tranquille ?</a></li>
                    <li><a href="#checklist-expert">Checklist expert : 7 points à vérifier avant de signer</a></li>
                    <li><a href="#faq-3008">FAQ : Vos questions sur la fiabilité du 3008</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Le Peugeot 3008 est une icône des routes françaises, mais c'est aussi un véhicule qui cache des dossiers noirs mécaniques capables de transformer votre investissement en cauchemar financier. En 2026, avec le recul nécessaire, l'achat d'un 3008 d'occasion nécessite une vigilance chirurgicale : l'économie réalisée à l'achat peut vite être engloutie par des réparations dépassant les 7 000 €.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="verdict-motorisations">Résumé express : Le verdict sur les motorisations à fuir</h2>

                <div class="evit-table-wrap">
                    <table class="evit-table">
                        <thead>
                            <tr><th>Moteur</th><th>Années critiques</th><th>Problème majeur</th><th>Verdict</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Moteur"><strong>1.2 PureTech 130</strong></td>
                                <td data-label="Années">2014 - Juillet 2021</td>
                                <td data-label="Problème">Courroie de distribution humide</td>
                                <td data-label="Verdict"><span class="evit-rouge">À FUIR</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.6 THP 156</strong></td>
                                <td data-label="Années">2009 - 2015</td>
                                <td data-label="Problème">Tendeur de chaîne (Moteur Prince)</td>
                                <td data-label="Verdict"><span class="evit-rouge">À ÉVITER</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.5 BlueHDi 130</strong></td>
                                <td data-label="Années">2017 - 2022</td>
                                <td data-label="Problème">Cristallisation AdBlue / Chaîne 7 mm</td>
                                <td data-label="Verdict"><span class="evit-orange">VIGILANCE</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.6 HDi 110/112</strong></td>
                                <td data-label="Années">2009 - 2013</td>
                                <td data-label="Problème">Turbo et fuite injecteurs</td>
                                <td data-label="Verdict"><span class="evit-orange">VIGILANCE</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>2.0 BlueHDi</strong></td>
                                <td data-label="Années">Toutes</td>
                                <td data-label="Problème">Aucun problème majeur connu</td>
                                <td data-label="Verdict"><span class="evit-vert">MEILLEUR CHOIX</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="historique-fragilite">L'historique du mal : Pourquoi certains 3008 sont-ils si fragiles ?</h2>

                <p>Ces problèmes ne sont pas liés à un manque d'entretien des propriétaires, mais bien à des erreurs de conception majeures. On retrouve les mêmes symptômes sur le <a href="/Blog/probleme-moteur-peugeot-2008">problèmes moteur Peugeot 2008</a> ou dans la gamme des <a href="/Blog/moteur-peugeot-a-eviter">moteurs Peugeot à éviter</a> de manière générale.</p>

                <h3>Le péché originel : L'héritage du Moteur Prince</h3>
                <p>Sur la première génération du 3008, le moteur essence 1.6 THP a été développé en collaboration avec BMW. Ce bloc souffre d'une faiblesse chronique au niveau du tendeur de chaîne de distribution. La chaîne se détend avec le temps, provoquant un décalage de la distribution pouvant aller jusqu'à la destruction totale des soupapes.</p>

                <h3>Le désastre de la Courroie Humide</h3>
                <p>Sur la Phase 2, le passage au 1.2 PureTech a introduit la courroie de distribution baignant dans l'huile. Les vapeurs d'essence contaminent l'huile, ce qui finit par dissoudre la gomme de la courroie. Les débris viennent boucher la crépine d'huile, entraînant une chute de pression fatale pour le moteur et le turbo.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="phase1-a-bannir">Peugeot 3008 Phase 1 (2009-2016) : Les modèles à bannir</h2>

                <h3>1.6 THP 150/156 ch : Une bombe à retardement</h3>
                <p>Ce moteur est le plus problématique en essence. Nous déconseillons formellement l'achat de cette motorisation sans preuve que le kit de distribution complet a été remplacé par la version fiabilisée. Le Peugeot 207 souffre exactement du même mal.</p>

                <h3>1.6 HDi 110/112 ch : Le risque de casse turbo</h3>
                <p>Le 1.6 HDi possède un talon d'Achille : ses joints d'injecteurs. S'ils ne sont pas étanches, la calamine pollue l'huile moteur et bouche le circuit de graissage du turbo. Ce défaut est récurrent sur d'autres modèles de la marque, comme le <a href="/Blog/peugeot-partner-tepee-a-eviter">Peugeot Partner Tepee à éviter</a>.</p>

                <img src="/Image/peugeot-3008-modele-a-eviter2.webp"
                     alt="Détail courroie de distribution humide PureTech Peugeot 3008 désagrégée"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <!-- ══════════════════════════════════ -->
                <h2 id="phase2-scandale">Peugeot 3008 Phase 2 (2016-2023) : Le scandale PureTech et BlueHDi</h2>

                <h3>Le 1.2 PureTech 130 : La loterie avant juillet 2021</h3>
                <p>Avant juillet 2021, la courroie n'était pas assez résistante à l'agression chimique du carburant. Si vous achetez une version d'occasion, assurez-vous de bénéficier d'une <a href="/Blog/garantie-3-mois-voiture-occasion">garantie de 3 mois voiture occasion</a> sérieuse, car les premiers symptômes de crépine bouchée peuvent apparaître très vite après une vidange.</p>

                <h3>1.5 BlueHDi et la cristallisation AdBlue</h3>
                <p>Le système AdBlue de Peugeot est capricieux : l'urée cristallise et bloque l'injecteur ou déforme le réservoir. Ce problème est également présent sur le <a href="/Blog/c4-picasso-modele-a-eviter">C4 Picasso modèle à éviter</a>, preuve qu'il s'agit d'un mal profond chez Stellantis.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="defaut-moteur">"Défaut moteur, faites réparer le véhicule" : Comment réagir ?</h2>

                <p>C'est le message que tout propriétaire de 3008 redoute, souvent accompagné d'un <a href="/Blog/voyant-orange-peugeot">voyant orange Peugeot</a>.</p>
                <ul>
                    <li><strong>Si le voyant d'huile s'allume simultanément :</strong> Arrêtez tout. C'est le signe que votre crépine est saturée de débris de courroie.</li>
                    <li><strong>Ne forcez jamais :</strong> Rouler en mode dégradé peut transformer une réparation à 1 500 € (distribution) en un remplacement moteur à 8 000 €.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="versions-fiables">Quelles versions acheter pour dormir tranquille ?</h2>

                <ul>
                    <li><strong>Le 2.0 BlueHDi 150/180 :</strong> Le moteur "roi" pour ce châssis. Sa conception est éprouvée et il permet d'atteindre le <a href="/Blog/peugeot-3008-kilometrage-maximum">kilométrage maximum du 3008</a> sans encombre, dépassant souvent les 300 000 km.</li>
                    <li><strong>Le Hybrid 136 (e-DCS6) post-2023 :</strong> Peugeot a enfin remplacé la courroie par une chaîne de distribution solide. C'est le choix recommandé pour un moteur essence moderne sans risque.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="checklist-expert">Checklist expert : 7 points à vérifier avant de signer</h2>

                <ol>
                    <li><strong>Regardez la courroie :</strong> Dévissez le bouchon de remplissage d'huile. Courroie effilochée ou craquelée = fuyez.</li>
                    <li><strong>Historique des vidanges :</strong> Un PureTech non vidangé tous les 10 000 km est un moteur à risque.</li>
                    <li><strong>Traces de cristaux blancs :</strong> Vérifiez le bouchon du réservoir AdBlue. Des traces blanches = cristallisation en cours.</li>
                    <li><strong>Bruit à froid :</strong> Sifflement = mort du turbo annoncée ; claquement métallique = distribution.</li>
                    <li><strong>État du châssis :</strong> Zone montagneuse ou côtière ? Un <a href="/Blog/traitement-anti-corrosion-chassis-voiture">traitement anti-corrosion châssis</a> est indispensable.</li>
                    <li><strong>Campagnes de rappel :</strong> Vérifiez avec le numéro VIN sur le site Peugeot.</li>
                    <li><strong>Kilométrage :</strong> Méfiez-vous de la mention <a href="/Blog/kilometrage-evolutif">kilométrage évolutif</a> qui peut masquer une utilisation intensive.</li>
                </ol>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-3008">FAQ : Vos questions sur la fiabilité du 3008</h2>

                <h3>Est-ce que le moteur PureTech est enfin fiable en 2026 ?</h3>
                <p>Les versions produites après juillet 2021 avec la courroie renforcée, et surtout les nouveaux blocs à chaîne (Hybrid 136 post-2023), ont largement corrigé le tir. La vigilance reste de mise sur les modèles d'occasion plus anciens.</p>

                <h3>Le 3008 vs Renault Clio : lequel est le plus fiable ?</h3>
                <p>Catégories différentes, mais si l'on compare les moteurs essence, la <a href="/Blog/renault-clio-modele-a-eviter">Renault Clio modèle à éviter</a> possède des blocs (comme le 1.3 TCe) qui ont montré une meilleure résistance que les PureTech première génération.</p>

                <h3>Comment savoir si mon 3008 est concerné par les rappels ?</h3>
                <p>Contactez une concession avec votre carte grise — démarche gratuite et essentielle pour espérer une prise en charge en cas de casse.</p>

                <img src="/Image/peugeot-3008-modele-a-eviter2.webp"
                     alt="Tableau de bord Peugeot 3008 avec voyant moteur et voyant huile allumés simultanément"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Le 2.0 BlueHDi reste la valeur sûre absolue sur le 3008. Si votre budget vous oriente vers un PureTech, n'achetez que si le carnet d'entretien est complet et que vous avez vérifié la courroie de vos propres yeux. Sans ces deux garanties, passez votre chemin.</p>
                </div>

            </div><!-- .art-content -->

            <!-- Premium Author Box -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>" class="art-author-avatar" width="80" height="80">
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
                <p>Le 3008 peut être un excellent achat d'occasion — à condition de ne pas se tromper de motorisation. Fuyez le PureTech avant juillet 2021 et le THP Phase 1 sans distribution révisée. Visez le 2.0 BlueHDi ou le Hybrid 136 post-2023, et exigez toujours un carnet d'entretien complet avant de signer.</p>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img"><img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>" width="400" height="225" loading="lazy"></div>
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
                                <div class="art-related-img"><img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>" width="400" height="225" loading="lazy"></div>
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
                                    <img src="<?php echo htmlspecialchars($sa['image']); ?>" alt="<?php echo htmlspecialchars($sa['title']); ?>" width="160" height="90" loading="lazy">
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
                                <div class="art-side-img"><img src="<?php echo htmlspecialchars($ra['image']); ?>" alt="<?php echo htmlspecialchars($ra['title']); ?>" width="160" height="90" loading="lazy"></div>
                                <h4><?php echo htmlspecialchars($ra['title']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if (empty($same_cat_articles) && empty($all_other_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Explorer</div>
                        <a href="/<?php echo $article['category']; ?>" class="btn-primary" style="display:block;text-align:center;background-color:<?php echo $article['category_color']; ?>;border-color:<?php echo $article['category_color']; ?>;margin-top:15px;">Voir tous les articles <?php echo $article['category_name']; ?></a>
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
    "@graph"   => [[
        "@type"            => "Article",
        "mainEntityOfPage" => ["@type" => "WebPage", "@id" => "https://garageraymond.fr/Blog/" . $current_slug],
        "headline"         => $article['title'],
        "description"      => $article['subtitle'],
        "image"            => ["https://garageraymond.fr" . $article['image']],
        "datePublished"    => "2026-04-29T09:00:00+02:00",
        "dateModified"     => "2026-04-29T09:00:00+02:00",
        "author"           => ["@type" => "Person", "name" => $article['author'], "url" => "https://garageraymond.fr/equipe", "jobTitle" => $article['author_role']],
        "publisher"        => ["@type" => "Organization", "name" => "Le garage expert Auto", "url" => "https://garageraymond.fr", "logo" => ["@type" => "ImageObject", "url" => "https://garageraymond.fr/Image/favicon.png", "width" => "512", "height" => "512"]]
    ]]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

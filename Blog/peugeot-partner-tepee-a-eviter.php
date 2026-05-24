<?php
// published: 2026-04-24 22:00
/**
 * peugeot-partner-tepee-a-eviter.php
 */

$page_title       = "Peugeot Partner Tepee à éviter : Guide des années et modèles à fuir (2026)";
$page_description = "Quels millésimes du Peugeot Partner Tepee éviter en occasion ? Turbo, train arrière, BMP6, toit Zenith : guide expert des pannes récurrentes et checklist d'achat.";

$article = [
    'title'          => "Peugeot Partner Tepee à éviter : Guide complet des années et modèles à fuir (2026)",
    'subtitle'       => "Phase 1 à risque, turbo HDi, train arrière en V, boîte BMP6 : le guide sans filtre pour ne pas transformer votre achat de ludospace en gouffre financier.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Peugeot', 'Partner Tepee', 'Achat Occasion', 'Fiabilité', 'Ludospace'],
    'image'          => '/Image/peugeot-partner-tepee-a-eviter1.webp',
    'date'           => '24 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Achat & Occasion',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud accompagne acheteurs et vendeurs sur le marché de l'occasion depuis plus de 12 ans. Spécialiste des défauts de conception récurrents, il décrypte sans filtre les pièges du marché Peugeot d'occasion.",
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

<!-- CSS spécifique article : tableaux fiabilité -->
<style>
    .tep-table-wrap { overflow-x: auto; margin: 24px 0; }
    .tep-table { width: 100%; border-collapse: collapse; font-size: 0.92rem; }
    .tep-table th { background: #7c3aed; color: #fff; padding: 12px 14px; text-align: left; }
    .tep-table td { padding: 11px 14px; border-bottom: 1px solid #2a2a3e; vertical-align: top; }
    .tep-table tr:nth-child(even) td { background: #1e1e32; }
</style>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Comparatif Peugeot Partner utilitaire blanc et Partner Tepee bleu métallisé, différences version pro et familiale"
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
                    <li><strong>Phase 1 (2008-2012) à fuir :</strong> cumul de problèmes de lubrification diesel et de défauts de châssis — exigez un carnet d'entretien parfait.</li>
                    <li><strong>Turbo HDi :</strong> la crépine d'huile bouchée tue le turbo ; sans rinçage complet du circuit, un turbo neuf casse en moins de 500 km.</li>
                    <li><strong>Train arrière "en V" :</strong> roues inclinées vers l'intérieur = roulements HS, souvent fin de vie de l'essieu complet.</li>
                    <li><strong>Boîte BMP6 :</strong> à fuir absolument — préférez systématiquement la boîte manuelle.</li>
                    <li><strong>Toit Zenith :</strong> vérifiez les joints et l'absence d'auréoles sur le ciel de toit avant de signer.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#partner-vs-tepee">Partner vs Partner Tepee : quelle version viser ?</a></li>
                    <li><a href="#annees-a-eviter">Les années et modèles à éviter</a></li>
                    <li><a href="#pannes-chroniques">Les maladies mécaniques chroniques</a></li>
                    <li><a href="#equipements-problematiques">Équipements spécifiques qui posent problème</a></li>
                    <li><a href="#alternatives">Quelles alternatives choisir ?</a></li>
                    <li><a href="#checklist-achat">Checklist : 7 points de contrôle avant d'acheter</a></li>
                    <li><a href="#faq-tepee">FAQ : fiabilité du Partner Tepee</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Acheter un Peugeot Partner Tepee d'occasion est souvent un choix rationnel pour l'espace, mais cela peut vite virer au cauchemar financier si vous tombez sur le mauvais millésime. Des factures de turbo ou d'essieu arrière dépassant largement la valeur résiduelle du véhicule, j'en ai vu trop. Ce guide vous donne une vision cash : on trie les modèles, on identifie les moteurs à risques et je vous donne mes astuces pour ne pas vous faire avoir.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="partner-vs-tepee">Partner vs Partner Tepee : quelle version viser ?</h2>

                <p>Avant de plonger dans les pannes, clarifions un point que beaucoup d'acheteurs confondent. Le "Partner" tout court est l'utilitaire tôlé destiné aux pros, alors que le "Partner Tepee" est la version ludospace vitrée conçue pour les familles. La différence est majeure : le Tepee subit des contraintes de poids différentes, notamment sur le train arrière à cause du transport fréquent de passagers et de bagages, ce qui impacte directement la longévité des suspensions.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="annees-a-eviter">Les modèles et années du Peugeot Partner Tepee à éviter</h2>

                <p>La règle d'or est simple : plus vous montez en gamme et en technologie sur les premières années (2008-2012), plus les risques augmentent.</p>

                <div class="tep-table-wrap">
                    <table class="tep-table">
                        <thead>
                            <tr>
                                <th>Génération</th>
                                <th>Années critiques</th>
                                <th>Fiabilité globale</th>
                                <th>Risque majeur</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Phase 1</td>
                                <td>2008 – 2012</td>
                                <td>Faible</td>
                                <td>Turbo (HDi) / Train arrière</td>
                            </tr>
                            <tr>
                                <td>Phase 2 (début)</td>
                                <td>2013 – 2015</td>
                                <td>Moyenne</td>
                                <td>Électronique / VTi</td>
                            </tr>
                            <tr>
                                <td>Phase 2 (BlueHDi)</td>
                                <td>2015 – 2018</td>
                                <td>Bonne</td>
                                <td>Réservoir AdBlue uniquement</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>La Phase 1 (2008-2012) : les années de tous les dangers</h3>
                <p>C'est durant cette période que Peugeot a cumulé les soucis de lubrification sur les moteurs Diesel et les problèmes de conception sur le châssis. Si l'entretien n'est pas limpide avec des vidanges très rapprochées (tous les 15 000 km max), passez votre chemin. Consultez aussi notre <a href="/moteur-peugeot-a-eviter">liste des moteurs Peugeot à surveiller</a> pour élargir votre spectre de vigilance.</p>

                <h3>Les modèles Phase 2 (2013-2015) et le piège du réservoir AdBlue</h3>
                <p>L'arrivée des normes Euro 6 a introduit le système BlueHDi. Sur le papier, c'est propre, mais en réalité les premiers réservoirs d'urée souffrent d'une pompe interne qui lâche à cause de la cristallisation du liquide. Peugeot ne détaille généralement pas la pièce : il faut changer tout le réservoir pour environ 1 200 €, une dépense disproportionnée pour un véhicule d'occasion.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="pannes-chroniques">Les maladies mécaniques chroniques du Tepee</h2>

                <p>Ces pannes ne sont pas des cas isolés — ce sont de vrais défauts de conception qui reviennent systématiquement.</p>

                <h3>Rupture du turbo sur le 1.6 HDi : le défaut de lubrification</h3>
                <p>C'est la "panne reine" du bloc 1.6 HDi (75, 90 et 110 ch). Le problème vient d'une crépine d'huile trop fine qui se bouche à cause de la calamine. Résultat : le turbo n'est plus lubrifié, il s'échauffe et casse net. Si vous ne nettoyez pas tout le circuit de lubrification avant de remonter un turbo neuf, celui-ci cassera à nouveau en moins de 500 km.</p>

                <h3>Le train arrière "en V" : le défaut structurel invisible</h3>
                <p>Regardez le Tepee par l'arrière : si les roues semblent inclinées vers l'intérieur (comme sur une Gordini), les roulements de bras de suspension sont HS. L'humidité s'infiltre dans les roulements, la rouille s'installe et l'essieu finit par se bloquer. C'est souvent le remplacement complet du train arrière, avec un <a href="/traitement-anti-corrosion-chassis-voiture">traitement anti-corrosion du châssis</a> en prime.</p>

                <h3>1.2 PureTech et 1.6 VTi : les faiblesses des moteurs essence</h3>
                <p>Le PureTech est le plus problématique à cause de sa courroie de distribution "humide" qui baigne dans l'huile, finit par s'effilocher et bouche la pompe à huile. Le 1.6 VTi 120 est quant à lui un gros consommateur d'huile et de liquide de refroidissement. Ces points sont communs avec les <a href="/moteur-1-6-puretech-fiabilite-avis">défauts de conception des moteurs PureTech</a> que l'on retrouve sur toute la gamme.</p>

                <h3>La boîte robotisée BMP6 / ETG6 : une transmission à fuir</h3>
                <p>Si l'annonce mentionne une boîte automatique, attention — il s'agit souvent de la robotisée BMP6. Non seulement elle est lente et génère des accoups désagréables, mais ses actionneurs d'embrayage sont fragiles. En cas de panne, l'addition dépasse souvent les 2 000 €. Privilégiez absolument une boîte manuelle sur ce modèle.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="equipements-problematiques">Vie à bord : les équipements spécifiques qui posent problème</h2>

                <h3>Toit Zenith et infiltrations d'eau</h3>
                <p>Le toit Zenith (avec rangements au plafond) est magnifique, mais les joints de vitres de toit finissent par fuir. J'ai déjà vu des Tepee avec des moquettes moisies et des ciels de toit tachés à cause de ces infiltrations. Lors de l'achat, vérifiez l'absence d'auréoles sur le tissu du plafond et d'odeur d'humidité.</p>

                <h3>Portes latérales coulissantes bloquées</h3>
                <p>Les galets de guidage s'usent et le câble de commande finit par casser ou sortir de son logement. Si la porte force à l'ouverture ou au verrouillage, c'est le signe que le mécanisme est en fin de vie. Le remplacement du mécanisme complet est une opération longue et coûteuse.</p>

                <h3>Électronique et BSI : les bugs fantômes</h3>
                <p>Le boîtier BSI peut devenir capricieux, entraînant l'apparition d'un <a href="/voyant-orange-peugeot">voyant orange Peugeot</a> au tableau de bord sans panne réelle, ou des dysfonctionnements des essuie-glaces et de la climatisation.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="alternatives">Quelles alternatives choisir ? Comparatif par gamme de prix</h2>

                <div class="tep-table-wrap">
                    <table class="tep-table">
                        <thead>
                            <tr>
                                <th>Profil</th>
                                <th>Modèle recommandé</th>
                                <th>Années</th>
                                <th>Pourquoi ?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Petit budget</strong></td>
                                <td>Partner Tepee 2.0 HDi 90</td>
                                <td>2005 – 2007</td>
                                <td>Le bloc moteur le plus robuste de l'histoire du groupe</td>
                            </tr>
                            <tr>
                                <td><strong>Budget moyen</strong></td>
                                <td>Renault Kangoo II 1.5 dCi</td>
                                <td>Post-2012</td>
                                <td>Moteur dCi fiabilisé et meilleur confort de suspension</td>
                            </tr>
                            <tr>
                                <td><strong>Budget premium</strong></td>
                                <td>Volkswagen Caddy IV</td>
                                <td>Post-2015</td>
                                <td>Finition exemplaire et moteurs TDI très endurants</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="checklist-achat">Checklist : 7 points de contrôle avant d'acheter votre Tepee d'occasion</h2>

                <ul>
                    <li><strong>Test des injecteurs :</strong> passez la main (moteur froid) autour des injecteurs. Une croûte noire ? C'est une fuite de joint d'injecteur imminente.</li>
                    <li><strong>Alignement arrière :</strong> reculez de 10 mètres derrière le véhicule. Les roues doivent être parfaitement droites.</li>
                    <li><strong>Factures de vidange :</strong> sur un Diesel, refusez tout véhicule dont les vidanges ont été faites tous les 30 000 km. C'est l'arrêt de mort du turbo.</li>
                    <li><strong>Infiltrations Zenith :</strong> touchez le ciel de toit autour des vitres supérieures pour détecter toute trace d'humidité.</li>
                    <li><strong>Coulisse des portes :</strong> actionnez les portes latérales plusieurs fois — le mouvement doit être fluide, sans bruit métallique.</li>
                    <li><strong>Bouchon d'huile :</strong> sur PureTech, vérifiez visuellement l'état de la courroie par l'orifice de remplissage.</li>
                    <li><strong>Usage et aménagement :</strong> vérifiez l'état des fixations de sièges, surtout si vous prévoyez d'<a href="/amenager-voiture-pour-dormir">aménager votre ludospace pour dormir</a>.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-tepee">FAQ : vos questions sur la fiabilité du Peugeot Partner Tepee</h2>

                <h3>Quelle est la durée de vie réelle du 1.6 HDi 110 ?</h3>
                <p>Avec un entretien rigoureux et une vidange tous les 10 000 km, il peut atteindre 350 000 km. Sans cela, il dépasse rarement les 150 000 km à cause du turbo.</p>

                <h3>Le Citroën Berlingo est-il plus fiable ?</h3>
                <p>Non — c'est exactement le même véhicule produit dans les mêmes usines avec les mêmes pièces. Seule la face avant et les logos changent.</p>

                <h3>Pourquoi éviter les modèles 7 places ?</h3>
                <p>Ils ne sont pas "mauvais", mais ils ont souvent été surchargés, ce qui achève prématurément le train arrière et les amortisseurs. À vérifier avec une attention triple lors de l'inspection.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Le Partner Tepee peut être un excellent achat occasion — à condition de cibler un BlueHDi post-2015 avec carnet d'entretien complet, boîte manuelle et toit Zenith indemne d'infiltrations. En dehors de ces critères, le moindre compromis peut vous coûter bien plus que la valeur du véhicule.</p>
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
                <p>Le Partner Tepee est un ludospace généreux, mais ses défauts de jeunesse sont bien réels. Phase 1 à éviter, turbo à inspecter, train arrière à regarder par l'arrière et BMP6 à bannir : avec cette checklist en tête, vous transformez un achat risqué en opération maîtrisée.</p>
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
                "@id"   => "https://garageraymond.fr/" . $current_slug
            ],
            "headline"      => $article['title'],
            "description"   => $article['subtitle'],
            "image"         => ["https://garageraymond.fr" . $article['image']],
            "datePublished" => "2026-04-24T22:00:00+02:00",
            "dateModified"  => "2026-04-24T22:00:00+02:00",
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

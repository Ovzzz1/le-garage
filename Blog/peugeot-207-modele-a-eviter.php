<?php
// published: 2026-05-05 09:00
/**
 * peugeot-207-modele-a-eviter.php
 */

$page_title       = "Peugeot 207 modèle à éviter : La blacklist des moteurs et années à fuir en occasion";
$page_description = "1.6 THP, VTi, 1.6 HDi Phase 1 : les versions de la Peugeot 207 à fuir absolument en occasion. Guide expert 2026 avec tableau récapitulatif, checklist et modèles fiables à cibler.";

$article = [
    'title'          => 'Peugeot 207 modèle à éviter : 1.6 THP, VTi et HDi Phase 1 — la blacklist complète en occasion',
    'subtitle'       => "La 207 inonde le marché de l'occasion à des prix attractifs, mais les moteurs Prince co-développés avec BMW et les blocs HDi de première série peuvent transformer une bonne affaire en gouffre financier. Voici la liste noire complète.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Peugeot 207', 'Fiabilité', 'Achat Occasion', 'THP', 'HDi'],
    'image'          => '/Image/peugeot-207-modele-a-eviter1.webp',
    'date'           => '5 Mai 2026',
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
             alt="Peugeot 207 d'occasion capot ouvert en atelier, mécanicien inspectant le moteur THP"
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
                    <li><strong>Danger essence sportif :</strong> Le 1.6 THP (150, 156 et 175 ch) — tendeur de chaîne qui lâche, soupapes qui frappent les pistons, destruction totale du moteur et surconsommation d'huile affolante.</li>
                    <li><strong>Danger essence cœur de gamme :</strong> Les 1.4 VTi et 1.6 VTi — chaîne qui s'allonge, surconsommation d'huile jusqu'à 1L/1 000 km et pompe à eau fragile sur le 1.6.</li>
                    <li><strong>Diesel à fuir :</strong> Le 1.6 HDi 110 ch Phase 1 (2006-2009) — joints d'injecteurs qui fuient, calamine dans l'huile et casse turbo souvent dès 80 000 km.</li>
                    <li><strong>Points électriques :</strong> La direction assistée électrique (grognement = crémaillère à 1 000 €) et le boîtier BSI capricieux à tester impérativement lors de l'essai.</li>
                    <li><strong>Recommandé :</strong> Le 1.4i 75 ch ou 1.4 16v 90 ch en essence (courroie classique), ou le 1.6 HDi 92 ch Phase 2 (post-juillet 2009) dont les défauts ont été corrigés.</li>
                </ul>
            </div>

            <!-- TOC -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#blacklist-207">La blacklist rapide de la Peugeot 207</a></li>
                    <li><a href="#essence-prince">Moteurs essence : Fuyez la famille Prince (THP et VTi)</a></li>
                    <li><a href="#diesel-annees-noires">Moteurs diesel : Les années noires 2006-2009 à contourner</a></li>
                    <li><a href="#points-controle-207">Les 3 points de contrôle obligatoires à l'essai</a></li>
                    <li><a href="#versions-fiables-207">Quelle Peugeot 207 d'occasion acheter les yeux fermés ?</a></li>
                    <li><a href="#faq-207">FAQ : Vos questions fréquentes sur la fiabilité de la 207</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Remplaçante de la mythique 206, la Peugeot 207 a été un immense succès commercial entre 2006 et 2014. Aujourd'hui, elle inonde le marché de l'occasion à des prix très attractifs pour les jeunes permis ou comme second véhicule. Mais derrière son design réussi, la 207 cache des motorisations co-développées avec BMW et des blocs diesels de première génération qui peuvent transformer une bonne affaire en gouffre financier.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="blacklist-207">La blacklist rapide de la Peugeot 207</h2>

                <div class="evit-table-wrap">
                    <table class="evit-table">
                        <thead>
                            <tr><th>Moteur ciblé</th><th>Carburant</th><th>Problème principal</th><th>Verdict</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Moteur"><strong>1.6 THP (150 / 156 ch)</strong></td>
                                <td data-label="Carburant">Essence</td>
                                <td data-label="Problème">Chaîne qui se décale, destruction soupapes</td>
                                <td data-label="Verdict"><span class="evit-rouge">À FUIR</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.4 VTi et 1.6 VTi</strong></td>
                                <td data-label="Carburant">Essence</td>
                                <td data-label="Problème">Surconso huile + pompe à eau fragile</td>
                                <td data-label="Verdict"><span class="evit-rouge">À ÉVITER</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.6 HDi 110 (Phase 1)</strong></td>
                                <td data-label="Carburant">Diesel</td>
                                <td data-label="Problème">Joints injecteurs, casse turbo dès 80 000 km</td>
                                <td data-label="Verdict"><span class="evit-rouge">À FUIR</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.4i 75 ch / 1.4 16v 90 ch</strong></td>
                                <td data-label="Carburant">Essence</td>
                                <td data-label="Problème">Courroie classique, aucun défaut majeur</td>
                                <td data-label="Verdict"><span class="evit-vert">MEILLEUR CHOIX</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.6 HDi 92 ch (Phase 2)</strong></td>
                                <td data-label="Carburant">Diesel</td>
                                <td data-label="Problème">Défauts Phase 1 corrigés</td>
                                <td data-label="Verdict"><span class="evit-vert">RECOMMANDÉ</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="essence-prince">Moteurs essence : Fuyez la famille Prince (THP et VTi)</h2>

                <p>La collaboration entre PSA et BMW a donné naissance à des moteurs essence technologiquement avancés pour l'époque, mais dont la fiabilité s'est révélée catastrophique dès les premières années de mise en circulation. Ces blocs sont documentés en détail dans notre enquête sur les <a href="/Blog/moteur-peugeot-a-eviter">moteurs Peugeot à éviter</a>.</p>

                <h3>Le 1.6 THP (150, 156 et 175 ch) : Le pire choix possible</h3>
                <p>Si vous cherchez une 207 sportive comme la 207 RC ou la Féline, vous tomberez inévitablement sur le 1.6 THP. Ce bloc est un nid à pannes ruineuses. Son défaut principal réside dans le tendeur de chaîne de distribution qui s'use prématurément : la chaîne se détend et se décale, provoquant des claquements métalliques à froid, une perte de puissance instantanée, et très souvent la destruction totale du moteur par contact soupapes-pistons. Ajoutez une pompe haute pression fragile et une consommation d'huile affolante, et vous obtenez un moteur à éviter absolument.</p>

                <h3>Les 1.4 VTi (95 ch) et 1.6 VTi (120 ch) : Des puits d'huile et d'eau</h3>
                <p>Pensés pour le cœur de gamme, les blocs VTi partagent l'architecture du THP sans le turbo. Ils n'échappent pas au défaut de la chaîne de distribution qui s'allonge. Ils souffrent également de deux autres pannes critiques : une surconsommation d'huile majeure pouvant dépasser 1 litre aux 1 000 km due à un défaut de segmentation, et sur le 1.6 VTi notamment, une pompe à eau qui fuit et émet un sifflement régulier. Si elle lâche, c'est la surchauffe immédiate et le joint de culasse.</p>

                <img src="/Image/peugeot-207-modele-a-eviter2.webp"
                     alt="Chaîne de distribution Peugeot 207 THP déposée, tendeur défaillant visible"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <!-- ══════════════════════════════════ -->
                <h2 id="diesel-annees-noires">Moteurs diesel : Les années noires 2006-2009 à contourner</h2>

                <p>La Peugeot 207 s'est vendue par millions en diesel. Si les modèles commercialisés après le restylage de 2010 sont globalement très fiables, la première série produite entre 2006 et 2009 doit vous alerter immédiatement.</p>

                <h3>Le 1.6 HDi 110 ch (Phase 1) : Chronique d'un turbo cassé</h3>
                <p>C'est le mouton noir absolu de la gamme diesel d'occasion. Ce moteur souffre d'un défaut de conception dramatique au niveau des joints d'injecteurs. Avec les kilomètres, ces joints fuient et laissent passer des gaz d'échappement qui se transforment en calamine dans le carter d'huile. Cette boue épaisse bouche le tamis de lubrification du turbocompresseur, qui finit par gripper et casser net, souvent dès 80 000 km. Remplacer le turbo sans nettoyer l'intégralité du circuit d'huile garantit une nouvelle casse quelques centaines de kilomètres plus tard. Le volant moteur bi-masse s'use de manière prématurée sur cette même version.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="points-controle-207">Les 3 points de contrôle obligatoires à l'essai</h2>

                <p>Au-delà de la mécanique pure, la 207 a vieilli et présente des faiblesses périphériques très onéreuses à bien identifier lors de votre visite.</p>

                <ol>
                    <li><strong>La direction assistée électrique :</strong> C'est le talon d'Achille de la 207. Écoutez bien lors de l'essai : un grognement en tournant le volant de butée en butée à l'arrêt, ou un volant qui se fige subitement en roulant, signale une crémaillère complète à changer — facture supérieure à 1 000 €. Un <a href="/Blog/voyant-orange-peugeot">voyant orange Peugeot</a> allumé de manière aléatoire peut également indiquer ce défaut.</li>
                    <li><strong>L'électronique et le boîtier BSI :</strong> La 207 est victime des sautes d'humeur de son Boîtier de Servitude Intelligent. Testez impérativement vitres électriques, clignotants, climatisation et essuie-glaces lors de l'essai. Un voyant orange qui s'allume aléatoirement sans perte de puissance est souvent lié à ce boîtier qui prend l'humidité.</li>
                    <li><strong>Le toit (versions CC et SW) :</strong> Si vous visez le cabriolet 207 CC, actionnez le toit plusieurs fois. Les capteurs tombent en panne et la pompe hydraulique fuit. Pour la version break 207 SW, vérifiez l'étanchéité du toit panoramique en verre et le rideau occultant électrique qui a tendance à dérailler.</li>
                </ol>

                <img src="/Image/peugeot-207-modele-a-eviter3.webp"
                     alt="Tableau de bord Peugeot 207 avec voyant direction assistée et boîtier BSI allumés"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <!-- ══════════════════════════════════ -->
                <h2 id="versions-fiables-207">Quelle Peugeot 207 d'occasion acheter les yeux fermés ?</h2>

                <p>Maintenant que vous savez ce qu'il faut contourner, voici les modèles increvables de la gamme 207 pour faire un achat serein.</p>

                <p>En essence, privilégiez les anciens moteurs équipés d'une courroie de distribution classique, non Prince : le 1.4i 75 ch ou le 1.4 16v 90 ch. Ils consomment un peu plus de carburant, mais ils sont mécaniquement indestructibles et ne présentent aucun des défauts structurels des blocs VTi ou THP.</p>

                <p>En diesel, ciblez absolument un modèle Phase 2 commercialisé après juillet 2009 — reconnaissable à son pare-chocs avant redessiné — équipé du solide 1.6 HDi 92 ch ou du modeste 1.4 HDi 70 ch. Les défauts de jeunesse concernant le turbo et les injecteurs y ont été définitivement corrigés. Si votre budget le permet et que vous souhaitez vous orienter vers la remplaçante directe, consultez notre guide sur la <a href="/Blog/modele-208-a-eviter">Peugeot 208 : les modèles à éviter</a> avant de signer.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">La 207 Phase 2 en 1.6 HDi 92 ch ou en 1.4i est un achat solide. Fuyez le THP sans preuve de distribution révisée, les VTi sans justificatif d'huile régulier, et le HDi 110 ch Phase 1 sans exception. Testez toujours la direction et le BSI lors de l'essai — ce sont souvent les défauts qui plombent la transaction après l'achat.</p>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-207">FAQ : Vos questions fréquentes sur la fiabilité de la 207</h2>

                <h3>Quelle est la meilleure année pour acheter une Peugeot 207 d'occasion ?</h3>
                <p>Il faut fuir les années 2006 à 2009. Visez une Peugeot 207 Phase 2, commercialisée à partir de l'été 2009 et reconnaissable à son pare-chocs avant redessiné avec les antibrouillards déportés. Sur ces modèles, Peugeot a corrigé les problèmes d'assemblage et sécurisé les moteurs HDi.</p>

                <h3>Comment savoir si le moteur de la 207 est un bloc fragile VTi ou un ancien 1.4i robuste ?</h3>
                <p>Le plus sûr est de regarder la carte grise ou la puissance fiscale. L'increvable 1.4i développe 75 chevaux, tandis que le très fragile 1.4 VTi en développe 95. Sous le capot, le VTi est plus imposant et comporte l'inscription VTi sur son cache supérieur.</p>

                <h3>Le filtre à particules (FAP) est-il source de pannes sur la 207 diesel ?</h3>
                <p>Oui, le FAP de la 207 s'encrasse très prématurément si la voiture ne fait que des petits trajets urbains, car il n'atteint jamais la température de régénération. Si vous roulez principalement en ville, choisissez une version essence 1.4i au risque de voir votre FAP colmaté vous forcer à rouler en mode dégradé.</p>

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
                <p>La Peugeot 207 peut être un excellent achat d'occasion à petit budget — à condition de cibler les bons millésimes et les bonnes motorisations. Phase 2 uniquement en diesel, 1.4i ou 1.4 16v en essence, et vérification systématique de la direction assistée et du BSI lors de l'essai. Ces trois règles vous éviteront l'essentiel des mauvaises surprises.</p>
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
        "datePublished"    => "2026-05-05T09:00:00+02:00",
        "dateModified"     => "2026-05-05T09:00:00+02:00",
        "author"           => ["@type" => "Person", "name" => $article['author'], "url" => "https://garageraymond.fr/equipe", "jobTitle" => $article['author_role']],
        "publisher"        => ["@type" => "Organization", "name" => "Le garage expert Auto", "url" => "https://garageraymond.fr", "logo" => ["@type" => "ImageObject", "url" => "https://garageraymond.fr/Image/favicon.png", "width" => "512", "height" => "512"]]
    ]]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

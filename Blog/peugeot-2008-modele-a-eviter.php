<?php
// published: 2026-05-04 09:00
/**
 * peugeot-2008-modele-a-eviter.php
 */

$page_title       = "Peugeot 2008 modèle à éviter : Blacklist 2026 des versions et années à fuir en occasion";
$page_description = "1.2 PureTech, BlueHDi, boîte ETG : les versions du Peugeot 2008 à fuir absolument en occasion. Guide expert avec tableau récapitulatif, checklist avant achat et modèles fiables à cibler.";

$article = [
    'title'          => 'Peugeot 2008 modèle à éviter : <a href="/moteur-1-6-puretech-fiabilite-avis">PureTech</a> courroie, BlueHDi AdBlue, ETG',
    'subtitle'       => "Derrière le look séduisant du 2008 se cachent le scandale de la courroie PureTech, la cristallisation AdBlue et la boîte ETG à saccades. Voici les millésimes à proscrire et les rares versions sur lesquelles miser sans risque.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Peugeot 2008', 'Fiabilité', 'Achat Occasion', 'PureTech', 'BlueHDi'],
    'image'          => '/Image/peugeot-2008-modele-a-eviter1.webp',
    'date'           => '4 Mai 2026',
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
             alt="Peugeot 2008 d'occasion capot ouvert, inspection moteur PureTech avant achat occasion"
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
                    <li><strong>Danger essence :</strong> Le 1.2 PureTech (110 et 130 ch) avant juillet 2021 — courroie humide corrosive, crépine bouchée, moteur cassé et assistance de freinage perdue sans préavis.</li>
                    <li><strong>Danger diesel :</strong> Les 1.6 et 1.5 BlueHDi — cristallisation AdBlue, réservoir déformé, pompe détruite et compte à rebours avant blocage définitif.</li>
                    <li><strong>Transmission à proscrire :</strong> La boîte automatique ETG (ex-BMP) — simple embrayage, saccades en ville, actionneur usé prématurément, à fuir sans exception.</li>
                    <li><strong>Années noires :</strong> Tout modèle Phase 1 (2013-2016) — défauts de jeunesse carrosserie, bugs écran SMEG et amortisseurs avant qui s'usent très vite.</li>
                    <li><strong>Recommandé :</strong> Le 1.6 e-HDi 92/115 ch sans AdBlue (pré-2015), ou le PureTech post-2022 avec courroie modifiée, combiné à une boîte EAT6 ou EAT8 Aisin.</li>
                </ul>
            </div>

            <!-- TOC -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#blacklist-2008">La blacklist du Peugeot 2008</a></li>
                    <li><a href="#annees-noires-2008">Les années noires 2013-2016 : La période à contourner</a></li>
                    <li><a href="#scandale-puretch">Moteurs essence : Le scandale du 1.2 PureTech</a></li>
                    <li><a href="#diesel-adblue">Moteurs diesel : Attention à la facture AdBlue</a></li>
                    <li><a href="#boite-etg">Boîtes de vitesses : Fuyez la boîte automatique ETG</a></li>
                    <li><a href="#bons-choix-2008">Quel Peugeot 2008 d'occasion acheter les yeux fermés ?</a></li>
                    <li><a href="#faq-2008">FAQ : Vos questions fréquentes sur la fiabilité du Peugeot 2008</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Le Peugeot 2008 est l'un des SUV urbains les plus prisés en France. Avec son look séduisant et sa position de conduite surélevée, il inonde le marché de l'occasion. Mais sous son capot se cachent parfois les pires scandales mécaniques de la décennie chez PSA. Que vous visiez la première génération ou la seconde, certaines versions vous conduiront inévitablement chez le garagiste avec des factures à quatre chiffres.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="blacklist-2008">La blacklist du Peugeot 2008</h2>

                <div class="evit-table-wrap">
                    <table class="evit-table">
                        <thead>
                            <tr><th>Moteur / Boîte</th><th>Carburant</th><th>Problème principal</th><th>Verdict</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Moteur"><strong>1.2 PureTech (avant 2021)</strong></td>
                                <td data-label="Carburant">Essence</td>
                                <td data-label="Problème">Courroie humide corrosive, <strong><u><a href="/probleme-moteur-peugeot-2008">casse moteur</a></u></strong></td>
                                <td data-label="Verdict"><span class="evit-rouge">À FUIR ABSOLUMENT</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.6 et 1.5 BlueHDi</strong></td>
                                <td data-label="Carburant">Diesel</td>
                                <td data-label="Problème">Cristallisation AdBlue, réservoir à changer</td>
                                <td data-label="Verdict"><span class="evit-rouge">À ÉVITER</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>Boîte robotisée ETG</strong></td>
                                <td data-label="Carburant">Transmission</td>
                                <td data-label="Problème">Saccades violentes, embrayage usé prématurément</td>
                                <td data-label="Verdict"><span class="evit-rouge">À FUIR</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>Phase 1 (2013-2016)</strong></td>
                                <td data-label="Carburant">Toutes</td>
                                <td data-label="Problème">Défauts jeunesse + bugs écran SMEG</td>
                                <td data-label="Verdict"><span class="evit-orange">VIGILANCE</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.6 e-HDi 92/115 ch (pré-2015)</strong></td>
                                <td data-label="Carburant">Diesel</td>
                                <td data-label="Problème">Sans AdBlue, Stop & Start fiable</td>
                                <td data-label="Verdict"><span class="evit-vert">MEILLEUR CHOIX</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="annees-noires-2008">Les années noires 2013-2016 : La période à contourner</h2>

                <p>Avant même de parler moteur, il faut cibler la bonne année. Les modèles de première génération produits entre 2013 et 2016 (Phase 1) sont les années noires de la gamme. Ces premiers modèles cumulent les défauts de jeunesse : ajustements de carrosserie approximatifs, bruits d'air sur autoroute, usure très rapide des amortisseurs avant, et surtout de gros bugs de l'écran tactile multimédia SMEG qui se fige, s'éteint ou refuse de se connecter. Si votre budget le permet, contournez ces années et visez impérativement la version Phase 2 restylée post-2016.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="scandale-puretch">Moteurs essence : Le scandale du 1.2 PureTech</h2>

                <p>C'est le gros point noir du Peugeot 2008, car ce moteur (110 et 130 ch) équipe la grande majorité des modèles vendus en occasion. Si vous ne faites pas attention à son suivi, la casse moteur est presque garantie.</p>

                <h3>La courroie de distribution immergée</h3>
                <p>Les moteurs 1.2 PureTech possèdent une courroie de distribution dite humide, car elle baigne littéralement dans l'huile moteur. Le problème : l'essence se mélange parfois à l'huile lors de petits trajets urbains, rendant le fluide corrosif. La courroie s'effrite et se désagrège lentement. Les débris viennent boucher la crépine de la pompe à huile. Le résultat est catastrophique en chaîne : le moteur n'est plus lubrifié, le voyant de pression d'huile s'allume, le système de freinage durcit (car l'assistance utilise une pompe à vide lubrifiée par le moteur), et le bloc finit par casser. Ce scénario est décrit en détail dans notre dossier sur les <a href="/moteur-peugeot-a-eviter">moteurs Peugeot à éviter</a>.</p>

                <img src="/Image/peugeot-2008-modele-a-eviter2.webp"
                     alt="Courroie de distribution PureTech Peugeot 2008 effilochée, résidus dans l'huile moteur"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <!-- ══════════════════════════════════ -->
                <h2 id="diesel-adblue">Moteurs diesel : Attention à la facture AdBlue</h2>

                <p>L'achat d'un diesel ne vous met pas à l'abri, surtout si vous ciblez les blocs récents équipés des normes européennes les plus strictes.</p>

                <h3>Les 1.6 et 1.5 BlueHDi : Réservoir et cristallisation</h3>
                <p>À partir de 2015, Peugeot a ajouté le système de dépollution AdBlue sur les moteurs BlueHDi. Le liquide AdBlue a une très forte tendance à cristalliser dans le système, bloquant la pompe, l'injecteur d'AdBlue, et déformant souvent le réservoir en plastique à cause de la surpression. Si les voyants défaut moteur et antipollution s'allument, souvent signalés par un <a href="/voyant-orange-peugeot">voyant orange au tableau de bord</a> accompagné d'un compte à rebours avant blocage définitif, il faudra changer l'intégralité du réservoir AdBlue en concession pour une facture dépassant allègrement les 1 000 €.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="boite-etg">Boîtes de vitesses : Fuyez la boîte automatique ETG</h2>

                <p>Si vous cherchez le confort d'une boîte automatique, faites extrêmement attention à l'appellation sur l'annonce. Il faut éviter absolument la boîte ETG (anciennement BMP). Il s'agit d'une boîte manuelle robotisée à simple embrayage, et non d'une vraie boîte automatique fluide. Elle est d'une lenteur exaspérante, provoque de gros à-coups dans les embouteillages, et l'usure de l'actionneur et de l'embrayage est extrêmement prématurée. Le même défaut structural a rendu célèbre le <a href="/c4-picasso-modele-a-eviter">C4 Picasso modèle à éviter</a> produit à la même époque.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="bons-choix-2008">Quel Peugeot 2008 d'occasion acheter les yeux fermés ?</h2>

                <p>Maintenant que vous connaissez les pièges à éviter, voici les choix sans risque pour acheter un 2008 d'occasion sereinement.</p>

                <p>En diesel, cherchez un modèle 1.6 e-HDi (92 ou 115 ch) produit avant fin 2015. Ce moteur ne possède pas le fragile système AdBlue, il est très coupleux, fiable, et son système Stop & Start est parmi les meilleurs du marché. En transmission automatique, exigez uniquement l'appellation EAT6 ou EAT8 — une vraie boîte à convertisseur de couple de la marque japonaise Aisin, reconnue pour sa grande douceur et son excellente longévité.</p>

                <p>En essence, n'achetez un PureTech que s'il s'agit d'une version post-2022 avec la courroie modifiée, ou si l'ancien propriétaire dispose d'une facture prouvant que le moteur vient d'être changé par Peugeot. Si vous hésitez avec le SUV grand format, découvrez aussi notre guide sur le <a href="/peugeot-3008-modele-a-eviter">Peugeot 3008 à éviter</a> avant de signer.</p>

                <img src="/Image/peugeot-2008-modele-a-eviter3.webp"
                     alt="Réservoir AdBlue Peugeot 2008 déformé avec traces de cristallisation, dépose en atelier"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Le 1.6 e-HDi sans AdBlue reste le choix sans compromis sur le 2008 première génération. Si votre budget vous oriente vers un PureTech, n'achetez que si la courroie a été remplacée récemment avec facture, et si le carnet d'entretien est complet avec des vidanges tous les 10 000 km maximum. Sans ces deux garanties, passez votre chemin.</p>
                </div>

                <!-- ══════════════════════════════════ -->
                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">À lire également</div>
                    <p>Découvrez notre guide détaillé sur <strong><u><a href="/peugeot-3008-kilometrage-maximum">le kilométrage maximum d'un Peugeot 3008</a></u></strong>.</p>
                </div>

                <h2 id="faq-2008">FAQ : Vos questions fréquentes sur la fiabilité du Peugeot 2008</h2>

                <h3>Quelle est la meilleure année pour acheter un Peugeot 2008 I d'occasion ?</h3>
                <p>Il est recommandé de cibler un modèle Phase 2, produit après le grand restylage du printemps 2016. Reconnaissable à sa calandre verticale plus agressive et ses feux arrière assombris, cette version bénéficie d'une qualité de finition revue à la hausse et de bugs électroniques de l'écran multimédia largement corrigés.</p>

                <h3>Le Peugeot e-2008 (100% électrique) est-il un bon choix de fiabilité ?</h3>
                <p>Oui, paradoxalement. Face aux pires problèmes des moteurs thermiques PureTech et BlueHDi, la déclinaison électrique e-2008 de la seconde génération est le modèle le plus fiable de la gamme. Son moteur électrique et sa batterie souffrent de très peu de pannes mécaniques immobilisantes, ce qui en fait un excellent choix si l'autonomie d'environ 300 km vous suffit.</p>

                <h3>Comment vérifier un 1.2 PureTech avant de l'acheter ?</h3>
                <p>Ouvrez le bouchon de remplissage d'huile moteur. À travers ce bouchon, vous pouvez apercevoir la courroie de distribution. Si son dos présente des craquelures, des boursouflures ou si elle s'effiloche, fuyez immédiatement. Exigez également un carnet d'entretien parfait avec des vidanges faites tous les 10 000 km maximum.</p>

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
                <p>Le Peugeot 2008 peut être un excellent achat d'occasion — à condition de cibler le bon millésime et la bonne motorisation. Fuyez le PureTech avant juillet 2021 sans entretien prouvé, les BlueHDi sans facture AdBlue, et la boîte ETG sans exception. Visez la Phase 2, le 1.6 e-HDi ou le PureTech post-2022, et exigez une boîte EAT6 ou EAT8 si vous voulez de l'automatique.</p>
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
        "mainEntityOfPage" => ["@type" => "WebPage", "@id" => "https://garageraymond.fr/" . $current_slug],
        "headline"         => $article['title'],
        "description"      => $article['subtitle'],
        "image"            => ["https://garageraymond.fr" . $article['image']],
        "datePublished"    => "2026-05-04T09:00:00+02:00",
        "dateModified"     => "2026-05-04T09:00:00+02:00",
        "author"           => ["@type" => "Person", "name" => $article['author'], "url" => "https://garageraymond.fr/equipe", "jobTitle" => $article['author_role']],
        "publisher"        => ["@type" => "Organization", "name" => "Le garage expert Auto", "url" => "https://garageraymond.fr", "logo" => ["@type" => "ImageObject", "url" => "https://garageraymond.fr/Image/favicon.png", "width" => "512", "height" => "512"]]
    ]]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

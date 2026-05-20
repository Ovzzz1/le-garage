<?php
// published: 2026-04-30 09:00
/**
 * c4-picasso-modele-a-eviter.php
 */

$page_title       = "Citroën C4 Picasso modèle à éviter : La blacklist 2026 des versions à fuir en occasion";
$page_description = "BMP6, PureTech, 1.6 THP : les versions du Citroën C4 Picasso à éviter absolument en 2026. Guide expert avec tableau récapitulatif, checklist et versions fiables à cibler.";

$article = [
    'title'          => 'Citroën C4 Picasso modèle à éviter : BMP6, <a href="/Blog/moteur-1-6-puretech-fiabilite-avis">PureTech</a> et 1.6 THP',
    'subtitle'       => "Boîte BMP6, courroie PureTech et turbo HDi : le monospace aux chevrons cache des défauts de conception capables d'engloutir plus de 6 000 € de réparations. Voici les versions à proscrire et les rares choix sûrs.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Citroën C4 Picasso', 'Fiabilité', 'Achat Occasion', 'PureTech', 'BMP6'],
    'image'          => '/Image/c4-picasso-modele-a-eviter1.webp',
    'date'           => '30 Avril 2026',
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
             alt="Citroën C4 Picasso d'occasion sur pont élévateur, mécanicien inspectant la transmission BMP6"
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
                    <li><strong>Danger essence :</strong> Le 1.2 PureTech 110/130 ch — courroie humide qui se désagrège et bouche la crépine, casse moteur garantie sans entretien strict.</li>
                    <li><strong>Danger essence Gen 1 :</strong> Le 1.6 THP 156 ch — tendeur de chaîne chronique et surconsommation d'huile atteignant 1L/1 000 km.</li>
                    <li><strong>Diesel à risque :</strong> Le 1.6 HDi 110 ch (2006-2010) — joints d'injecteurs défaillants, calamine et casse turbo systématique.</li>
                    <li><strong>Transmission à proscrire :</strong> La boîte BMP6/ETG6 — saccades, actionneur qui lâche, usure prématurée de l'embrayage, à fuir absolument.</li>
                    <li><strong>Recommandé :</strong> Le 2.0 HDi 150 ch en boîte manuelle ou le BlueHDi avec facture de remplacement réservoir AdBlue + boîte EAT6 Aisin.</li>
                </ul>
            </div>

            <!-- TOC -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#blacklist-c4-picasso">La blacklist complète : tableau des versions à fuir</a></li>
                    <li><a href="#diesel-a-eviter">Les moteurs Diesel à rayer de votre liste</a></li>
                    <li><a href="#essence-a-surveiller">Les moteurs Essence à surveiller de très près</a></li>
                    <li><a href="#boite-bmp6">La transmission à éviter : la boîte robotisée BMP6 et ETG6</a></li>
                    <li><a href="#points-controle">Les 3 points essentiels à vérifier avant l'achat</a></li>
                    <li><a href="#versions-fiables">Quels modèles de C4 Picasso choisir pour un achat serein ?</a></li>
                    <li><a href="#faq-c4-picasso">FAQ : Vos questions sur la fiabilité du C4 Picasso</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Le Citroën C4 Picasso a séduit des milliers de familles avec son habitabilité et son confort hors pair. Mais le marché de l'occasion regorge de pièges : ce monospace aux chevrons a embarqué certaines des motorisations les plus fragiles du groupe PSA, ainsi que des transmissions capricieuses capables de transformer un budget familial en gouffre financier.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="blacklist-c4-picasso">La blacklist complète : tableau des versions à fuir</h2>

                <div class="evit-table-wrap">
                    <table class="evit-table">
                        <thead>
                            <tr><th>Moteur / Boîte</th><th>Carburant</th><th>Problème principal</th><th>Verdict</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Moteur / Boîte"><strong>1.2 PureTech 110/130</strong></td>
                                <td data-label="Carburant">Essence</td>
                                <td data-label="Problème">Courroie humide qui se désagrège</td>
                                <td data-label="Verdict"><span class="evit-rouge">À FUIR</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur / Boîte"><strong>1.6 THP 156 ch</strong></td>
                                <td data-label="Carburant">Essence</td>
                                <td data-label="Problème">Chaîne qui se détend, surconso huile</td>
                                <td data-label="Verdict"><span class="evit-rouge">À FUIR</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur / Boîte"><strong>1.6 HDi 110 (2006-2010)</strong></td>
                                <td data-label="Carburant">Diesel</td>
                                <td data-label="Problème">Fuite injecteurs, casse turbo</td>
                                <td data-label="Verdict"><span class="evit-rouge">À ÉVITER</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur / Boîte"><strong>1.6 e-HDi (avant 2015)</strong></td>
                                <td data-label="Carburant">Diesel</td>
                                <td data-label="Problème">Alterno-démarreur Stop & Start hors de prix</td>
                                <td data-label="Verdict"><span class="evit-orange">VIGILANCE</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur / Boîte"><strong>Boîte BMP6 / ETG6</strong></td>
                                <td data-label="Carburant">Transmission</td>
                                <td data-label="Problème">Saccades, actionneur usé, embrayage mort</td>
                                <td data-label="Verdict"><span class="evit-rouge">À PROSCRIRE</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur / Boîte"><strong>2.0 HDi 150 ch (BVM)</strong></td>
                                <td data-label="Carburant">Diesel</td>
                                <td data-label="Problème">Aucun problème majeur connu</td>
                                <td data-label="Verdict"><span class="evit-vert">MEILLEUR CHOIX</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="diesel-a-eviter">Les moteurs Diesel à rayer de votre liste</h2>

                <p>Très prisé des gros rouleurs, le C4 Picasso diesel réserve parfois de très mauvaises surprises financières. Deux motorisations concentrent l'essentiel des problèmes.</p>

                <h3>Le 1.6 HDi 110 ch : Le pire élève de la génération 1</h3>
                <p>Sur les modèles produits entre 2006 et 2010, ce moteur souffre d'un défaut de conception majeur : les joints d'injecteurs fuient. Cette fuite crée de la calamine qui vient boucher le circuit de lubrification, entraînant la casse inévitable du turbocompresseur. Le volant moteur bi-masse de cette version s'use également de manière prématurée, une double peine pour le portefeuille. C'est le même scénario catastrophe décrit dans notre dossier sur les <a href="/Blog/moteur-peugeot-a-eviter">moteurs à éviter du groupe PSA</a>.</p>

                <h3>Le 1.6 e-HDi : Attention au piège du Stop & Start</h3>
                <p>Souvent recommandé à tort, ce moteur intègre un système micro-hybride (alterno-démarreur) pour le Stop & Start. Ce composant a tendance à lâcher prématurément sur les modèles d'avant 2015. La facture de remplacement dépasse régulièrement les 1 000 €, car la courroie d'accessoires spécifique doit également être remplacée en même temps.</p>

                <img src="/Image/c4-picasso-modele-a-eviter2.webp"
                     alt="Système AdBlue Citroën C4 Picasso avec traces de cristallisation blanche visible"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <h3>Le scandale de l'AdBlue sur les BlueHDi</h3>
                <p>Sur le C4 Picasso II, le 1.6 BlueHDi est mécaniquement très fiable. Il est cependant touché par l'épidémie mondiale du système de dépollution : l'AdBlue cristallise et déforme le réservoir, détruisant la pompe intégrée. N'achetez un modèle BlueHDi que si le vendeur possède la facture de remplacement du réservoir d'AdBlue. Le même défaut sévit sur le <a href="/Blog/peugeot-3008-modele-a-eviter">Peugeot 3008 modèle à éviter</a>, preuve qu'il s'agit d'un mal profond chez Stellantis.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="essence-a-surveiller">Les moteurs Essence à surveiller de très près</h2>

                <p>Si vous roulez peu, l'essence est le choix logique. Mais chez PSA, les moteurs de cette époque sont de véritables champs de mines qu'il convient de connaître avant toute visite.</p>

                <h3>Le 1.2 PureTech : Le scandale de la courroie humide</h3>
                <p>C'est le moteur essence le plus répandu sur le C4 Picasso II. Sa courroie de distribution baigne dans l'huile. Avec le temps et l'action corrosive de l'essence, elle s'effrite. Ses morceaux viennent boucher la crépine de la pompe à huile, causant une perte d'assistance de freinage (pompe à vide) ou la casse complète du moteur. Ce défaut est exactement identique à celui documenté sur le <a href="/Blog/probleme-moteur-peugeot-2008">problèmes moteur Peugeot 2008</a>.</p>

                <h3>Le 1.6 THP 156 ch : Une ruine financière</h3>
                <p>Développé avec BMW, ce moteur cumule deux tares redoutables : la chaîne de distribution se détend, causant des pertes de puissance et des claquements à froid, et la segmentation laisse passer l'huile. Résultat : une consommation d'huile pouvant atteindre 1 litre aux 1 000 km qui finit par encrasser et détruire le moteur. Sans preuve de remplacement du kit distribution fiabilisé, passez votre chemin.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="boite-bmp6">La transmission à éviter : la boîte robotisée BMP6 et ETG6</h2>

                <p>Le C4 Picasso est l'ambassadeur de l'une des pires transmissions du marché : la BMP6 (Boîte Manuelle Pilotée à 6 rapports), rebaptisée ETG6 par la suite. Elle cumule tous les défauts imaginables.</p>

                <p>Des passages de vitesses d'une lenteur exaspérante, de violents à-coups lors des manœuvres ou dans les embouteillages, un embrayage et une butée hydraulique qui s'usent prématurément impliquant des frais colossaux : voilà le quotidien d'un C4 Picasso avec cette boîte. Les mêmes tares ont fait la mauvaise réputation du <a href="/Blog/probleme-moteur-peugeot-2008">problèmes moteur Peugeot 2008</a> produit à la même époque.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="points-controle">Les 3 points essentiels à vérifier avant l'achat</h2>

                <ol>
                    <li><strong>La suspension arrière (finition Exclusive) :</strong> Si vous achetez une version haut de gamme, vérifiez l'assiette du véhicule. Si l'arrière semble affaissé à l'arrêt, les boudins pneumatiques sont poreux et le compresseur est probablement hors service.</li>
                    <li><strong>L'écran tactile et l'électronique (C4 Picasso II) :</strong> Naviguez intensivement dans les menus climatisation et GPS. Les redémarrages intempestifs et les lenteurs du système SMEG sont très fréquents, et la dalle coûte cher à remplacer.</li>
                    <li><strong>Les bruits de trains roulants :</strong> Lors de l'essai, tendez l'oreille sur les dos d'âne. Les coupelles d'amortisseurs et les silentblocs de train avant s'usent très vite sur ce véhicule lourd.</li>
                </ol>

                <img src="/Image/c4-picasso-modele-a-eviter3.webp"
                     alt="Tableau de bord Citroën C4 Picasso avec voyant moteur et message défaut antipollution"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <!-- ══════════════════════════════════ -->
                <h2 id="versions-fiables">Quels modèles de C4 Picasso choisir pour un achat serein ?</h2>

                <p>Il existe des versions très solides pour transporter votre famille sans mauvaise surprise. Le bloc 2.0 HDi 150 ch en boîte manuelle est un véritable roc : puissant, coupleux et sans soucis majeurs de turbo connus. C'est la motorisation reine pour un achat serein sur ce modèle.</p>

                <p>Si vous voulez de l'automatique, ciblez uniquement les modèles équipés de la boîte EAT6 d'origine japonaise Aisin, douce et d'une fiabilité exemplaire. C'est la seule transmission automatique acceptable sur ce monospace.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Le 2.0 HDi reste le seul choix sans compromis sur le C4 Picasso. Si votre budget vous oriente vers un PureTech ou un THP, n'achetez que si le carnet d'entretien est complet avec des vidanges annuelles prouvées, et que vous avez vérifié la courroie de vos propres yeux. La boîte BMP6/ETG6 est un piège absolu : sans EAT6, visez uniquement la boîte manuelle classique.</p>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-c4-picasso">FAQ : Vos questions sur la fiabilité du C4 Picasso</h2>

                <h3>Quelle est la meilleure année pour acheter un C4 Picasso ?</h3>
                <p>Pour la première génération, visez les modèles produits entre fin 2011 et 2013 (les défauts de jeunesse du 1.6 HDi ont été corrigés). Pour la seconde génération, privilégiez les modèles post-2016 avec la boîte automatique EAT6 et un moteur 2.0 HDi.</p>

                <h3>Comment différencier une boîte BMP6/ETG6 d'une vraie boîte automatique EAT6 ?</h3>
                <p>L'appellation commerciale est la clé. Sur les fiches techniques, cherchez expressément la mention EAT6. À l'essai, la boîte EAT6 ne provoque aucune saccade, contrairement à la BMP6/ETG6 qui hoche la tête à chaque changement de rapport en ville.</p>

                <h3>Le problème de courroie du moteur PureTech est-il résolu sur les modèles récents ?</h3>
                <p>PSA a apporté plusieurs modifications à la courroie et aux préconisations d'huile. Cependant, la conception même de la courroie humide reste sujette à caution jusqu'à l'arrivée de la chaîne de distribution fin 2023. Restez extrêmement vigilant sur le suivi d'entretien : une vidange annuelle est obligatoire sur ces blocs.</p>

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
                <p>Le C4 Picasso peut être un excellent achat familial d'occasion — à condition de ne pas se tromper de motorisation ni de boîte. Fuyez le PureTech sans entretien prouvé, le THP sans distribution révisée et la boîte BMP6/ETG6 sans exception. Visez le 2.0 HDi en boîte manuelle ou, si vous tenez à l'automatique, la combinaison BlueHDi + EAT6 avec facture de remplacement réservoir AdBlue.</p>
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
        "datePublished"    => "2026-04-30T09:00:00+02:00",
        "dateModified"     => "2026-04-30T09:00:00+02:00",
        "author"           => ["@type" => "Person", "name" => $article['author'], "url" => "https://garageraymond.fr/equipe", "jobTitle" => $article['author_role']],
        "publisher"        => ["@type" => "Organization", "name" => "Le garage expert Auto", "url" => "https://garageraymond.fr", "logo" => ["@type" => "ImageObject", "url" => "https://garageraymond.fr/Image/favicon.png", "width" => "512", "height" => "512"]]
    ]]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

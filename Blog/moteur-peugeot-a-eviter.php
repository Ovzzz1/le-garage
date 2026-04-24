<?php
// published: 2026-04-24 17:00
/**
 * moteur-peugeot-a-eviter.php
 */

$page_title       = "Moteur Peugeot à éviter : TOP 10 des blocs à fuir en occasion [2026]";
$page_description = "1.2 PureTech, 1.5 BlueHDi, 1.6 THP : classement expert des 10 moteurs Peugeot à éviter en occasion en 2026, avec coûts de réparation et conseils d'achat.";

$article = [
    'title'          => "Moteur Peugeot à éviter : Classement du TOP 10 des modèles à fuir en 2026",
    'subtitle'       => "Courroie humide, chaîne fragile, turbo détruit par manque d'huile : les 10 motorisations Peugeot qui peuvent transformer votre achat occasion en gouffre financier.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Peugeot', 'Fiabilité Moteur', 'Achat Occasion', 'PureTech', 'BlueHDi'],
    'image'          => '/Image/moteur-peugeot-a-eviter1.webp',
    'date'           => '24 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Achat & Occasion',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud accompagne acheteurs et vendeurs sur le marché de l'occasion depuis plus de 12 ans. Spécialiste des défauts de conception et des casses moteur récurrentes, il décrypte sans filtre les pièges du marché Peugeot d'occasion.",
    'reading_time'   => '9 min',
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

<!-- CSS spécifique article : classement moteurs + tableau récap + podium -->
<style>
    /* Cartes moteurs numérotées */
    .pgt-moteur-list { list-style: none; padding: 0; margin: 0; counter-reset: moteur-counter; }
    .pgt-moteur-item { counter-increment: moteur-counter; background: #1e1e32; border: 1px solid #2a2a3e; border-radius: 12px; padding: 22px 22px 22px 80px; margin-bottom: 20px; position: relative; }
    .pgt-moteur-item::before { content: counter(moteur-counter); position: absolute; left: 18px; top: 22px; background: #7c3aed; color: #fff; font-weight: 800; font-size: 1.2rem; width: 42px; height: 42px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
    .pgt-moteur-item.critical::before { background: #dc2626; }
    .pgt-moteur-item.high::before    { background: #ea580c; }
    .pgt-moteur-item.medium::before  { background: #ca8a04; }
    .pgt-moteur-item h2 { margin: 0 0 10px; font-size: 1.05rem; color: #c4b5fd; border: none; padding: 0; }
    .pgt-moteur-item p  { margin: 0 0 10px; font-size: 0.93rem; color: #ccc; line-height: 1.65; }
    .pgt-moteur-item p:last-child { margin-bottom: 0; }
    .pgt-risque { display: inline-block; font-size: 0.78rem; font-weight: 700; padding: 3px 10px; border-radius: 20px; margin-bottom: 10px; }
    .pgt-risque.critical { background: #dc262622; color: #f87171; border: 1px solid #dc262655; }
    .pgt-risque.high     { background: #ea580c22; color: #fb923c; border: 1px solid #ea580c55; }
    .pgt-risque.medium   { background: #ca8a0422; color: #fbbf24; border: 1px solid #ca8a0455; }

    /* Tableau récap */
    .pgt-table-wrap { overflow-x: auto; margin: 28px 0; }
    .pgt-table { width: 100%; border-collapse: collapse; font-size: 0.9rem; }
    .pgt-table th { background: #7c3aed; color: #fff; padding: 12px 14px; text-align: left; white-space: nowrap; }
    .pgt-table td { padding: 11px 14px; border-bottom: 1px solid #2a2a3e; vertical-align: middle; }
    .pgt-table tr:nth-child(even) td { background: #1e1e32; }
    .pgt-table .risk-dot { display: inline-block; width: 10px; height: 10px; border-radius: 50%; margin-right: 6px; vertical-align: middle; }

    /* Podium fiabilité */
    .pgt-podium { display: flex; align-items: flex-end; justify-content: center; gap: 12px; margin: 28px 0; }
    .pgt-podium-step { flex: 1; max-width: 180px; border-radius: 10px 10px 0 0; padding: 18px 14px 14px; text-align: center; }
    .pgt-podium-step .rank { font-size: 1.8rem; font-weight: 800; margin-bottom: 6px; }
    .pgt-podium-step .engine { font-size: 0.95rem; font-weight: 700; color: #fff; }
    .pgt-podium-step .desc   { font-size: 0.8rem; color: rgba(255,255,255,0.75); margin-top: 6px; line-height: 1.4; }
    .pgt-podium-step.gold   { background: linear-gradient(160deg, #92400e, #d97706); min-height: 160px; }
    .pgt-podium-step.silver { background: linear-gradient(160deg, #374151, #6b7280); min-height: 130px; }
    .pgt-podium-step.bronze { background: linear-gradient(160deg, #431407, #9a3412); min-height: 110px; }

    /* Conseils expert */
    .pgt-conseils { list-style: none; padding: 0; margin: 24px 0; }
    .pgt-conseils li { background: #1e1e32; border: 1px solid #2a2a3e; border-radius: 10px; padding: 14px 18px 14px 54px; margin-bottom: 12px; position: relative; font-size: 0.93rem; color: #ccc; line-height: 1.6; }
    .pgt-conseils li::before { content: '\2713'; position: absolute; left: 16px; top: 50%; transform: translateY(-50%); color: #7c3aed; font-weight: 700; font-size: 1.2rem; }
    .pgt-conseils li strong { color: #c4b5fd; }

    .pgt-tip { background: #12122a; border: 1px solid #7c3aed44; border-radius: 8px; padding: 16px 20px; margin: 22px 0; font-size: 0.93rem; color: #ccc; }
    .pgt-tip strong { color: #c4b5fd; }
</style>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Peugeot immobilisée capot ouvert avec fumée, gros plan courroie de distribution craquelée"
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
                    <li><strong>Ennemi public n°1 :</strong> le 1.2 PureTech (82, 110, 130 ch) — courroie humide + crépine bouchée = casse moteur entre 60 000 et 80 000 km.</li>
                    <li><strong>Diesel fragile :</strong> le 1.5 BlueHDi 130 cumule chaîne d'arbres à cames de 7 mm trop fine et cristallisation AdBlue.</li>
                    <li><strong>Fiables :</strong> le 2.0 HDi (toutes puissances) et le 1.2 Hybrid 136 ch post-2024 sont les valeurs sûres de la marque.</li>
                    <li><strong>Règle d'or :</strong> exigez toutes les factures de vidange — sur un PureTech, une vidange sautée est un motif d'exclusion immédiat.</li>
                    <li><strong>Garantie constructeur :</strong> Stellantis a étendu la garantie à 10 ans / 175 000 km sur certains problèmes de courroie, mais uniquement en cas d'entretien réseau.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#top10-moteurs">TOP 10 : les moteurs Peugeot à éviter</a></li>
                    <li><a href="#tableau-recap">Tableau récapitulatif : pannes et coûts</a></li>
                    <li><a href="#podium-fiabilite">Le podium de la fiabilité Peugeot</a></li>
                    <li><a href="#5-conseils-expert">5 conseils pour ne pas se faire piéger en occasion</a></li>
                    <li><a href="#faq-problemes-peugeot">FAQ : vos questions sur les problèmes Peugeot</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Acheter une Peugeot d'occasion en 2026 ne s'improvise plus. Si la marque au lion a produit des moteurs légendaires pour leur robustesse, les quinze dernières années ont été marquées par des erreurs de conception qui peuvent transformer votre investissement en gouffre financier. Des factures de 8 000 € pour un échange standard sur des véhicules de moins de 5 ans — j'en ai vu trop. Voici l'analyse brute, basée sur les retours d'atelier, pour que vous sachiez exactement quel bloc fuir et lequel privilégier.</p>

                <div class="pgt-tip">
                    <strong>Rappel :</strong> une simple <a href="/Blog/garantie-3-mois-voiture-occasion">garantie de 3 mois sur une voiture d'occasion</a> ne vous protégera pas contre les défauts de conception profonds listés ici. Lisez ce guide avant de signer.
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="top10-moteurs">TOP 10 : les moteurs Peugeot à éviter en occasion</h2>

                <ol class="pgt-moteur-list">

                    <li class="pgt-moteur-item critical">
                        <span class="pgt-risque critical">Risque Critique 5/5</span>
                        <h2>1.2 PureTech (82, 110, 130 ch) — Le "Roi" de la casse moteur</h2>
                        <p>C'est de loin le moteur le plus problématique de l'ère moderne chez PSA. Le défaut majeur réside dans sa <strong>courroie de distribution humide</strong>, immergée dans l'huile moteur pour réduire les frottements. La dégradation de la gomme au contact des résidus d'essence provoque l'effilochage de la courroie. Ces débris viennent colmater la crépine de la pompe à huile, entraînant une chute de pression et la destruction du turbo et du bloc par manque de lubrification.</p>
                        <p>Stellantis a imposé une nouvelle norme d'huile (5W30) en 2024 pour limiter le phénomène, mais le risque reste présent. Si vous hésitez avec son grand frère, consultez notre avis sur le <a href="/Blog/moteur-1-6-puretech-fiabilite-avis">moteur 1.6 PureTech</a>.</p>
                    </li>

                    <img src="/Image/moteur-peugeot-a-eviter2.webp"
                         alt="Schéma 3D moteur 1.2 PureTech en coupe montrant la courroie humide et les résidus obstruant la crépine d'huile"
                         style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                    <li class="pgt-moteur-item high">
                        <span class="pgt-risque high">Risque Élevé 4/5</span>
                        <h2>1.5 BlueHDi 130 — La double peine AdBlue et chaîne</h2>
                        <p>Le remplaçant du 1.6 BlueHDi devait être un modèle de sobriété. Il est devenu le cauchemar des gros rouleurs. Deux problèmes coexistent : la <strong>chaîne de liaison des arbres à cames de 7 mm</strong> qui s'allonge et finit par rompre, et la cristallisation de l'urée dans le réservoir AdBlue. Ce dernier point paralyse le véhicule avec un message d'erreur persistant, obligeant souvent au remplacement complet du réservoir SCR.</p>
                        <p>Si un <a href="/Blog/voyant-orange-voiture-dans-un-cercle-peugeot">voyant orange Peugeot</a> s'allume avec une alerte "Défaut moteur", le diagnostic est souvent sans appel sur ce bloc.</p>
                    </li>

                    <img src="/Image/moteur-peugeot-a-eviter3.webp"
                         alt="Comparatif chaîne de distribution 7mm BlueHDi standard vs chaîne renforcée 8mm 2024 sur plan de travail d'atelier"
                         style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                    <li class="pgt-moteur-item high">
                        <span class="pgt-risque high">Risque Élevé 4/5</span>
                        <h2>1.6 THP (150 à 270 ch) — L'héritage BMW mal digéré</h2>
                        <p>Développé en collaboration avec BMW (bloc Prince), ce turbo essence offre des performances de premier plan mais souffre d'une distribution chroniquement fragile. Le tendeur de chaîne hydraulique finit par faiblir, provoquant un décalage de distribution et des ratés d'allumage. Par ailleurs, l'encrassement des soupapes par la calamine est inévitable en usage urbain — l'injection directe ne permet pas de "nettoyer" les conduits d'admission.</p>
                    </li>

                    <img src="/Image/moteur-peugeot-a-eviter4.webp"
                         alt="Côté distribution moteur 1.6 THP ouvert montrant la chaîne allongée et le tendeur hydraulique en extension maximale"
                         style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                    <li class="pgt-moteur-item medium">
                        <span class="pgt-risque medium">Risque Moyen 3/5</span>
                        <h2>1.6 HDi 110 (DV6 TED4) — Le cauchemar du turbo</h2>
                        <p>Le problème n'est pas le moteur en lui-même, mais ses <strong>joints d'injecteurs</strong>. En cas de fuite, la calamine produite se mélange à l'huile moteur et crée une boue corrosive qui bouche le micro-filtre de lubrification du turbocompresseur. Une fuite non détectée à temps, c'est la mort du turbo en moins de 500 km. Remplacement du turbo sans rinçage complet du circuit d'huile = récidive garantie.</p>
                    </li>

                    <li class="pgt-moteur-item high">
                        <span class="pgt-risque high">Risque Élevé 4/5</span>
                        <h2>V6 2.7 & 3.0 HDi — Un luxe au coût d'entretien démesuré</h2>
                        <p>Présents sur les 407 et 607, ces V6 offrent un agrément royal mais cachent des fragilités structurelles. La pompe à huile peut montrer des signes de fatigue prématurée, menant au serrage moteur (coulage de bielle). Le circuit de refroidissement complexe génère des fuites au niveau du boîtier de sortie d'eau pouvant provoquer un joint de culasse avant même que l'aiguille de température ne monte.</p>
                    </li>

                    <li class="pgt-moteur-item medium">
                        <span class="pgt-risque medium">Risque Moyen 3/5</span>
                        <h2>1.6 VTi 120 — Une consommation d'huile hors norme</h2>
                        <p>Version atmosphérique du THP, globalement plus fiable sans turbo. En revanche, il est connu pour sa <strong>consommation d'huile excessive</strong>, liée à l'usure des joints de queues de soupapes. Sans surveillance constante du niveau, les déphaseurs d'arbres à cames et le catalyseur finissent endommagés.</p>
                    </li>

                    <li class="pgt-moteur-item medium">
                        <span class="pgt-risque medium">Risque Moyen 3/5</span>
                        <h2>1.4 HDi 68/70 — Petit moteur, gros risques de fuites</h2>
                        <p>Ce petit diesel a équipé des millions de 206 et 207. Son principal défaut : le faisceau de retour de gasoil, surnommé "l'araignée", qui devient poreux avec le temps. Les prises d'air dans le circuit d'injection rendent les démarrages impossibles. Moins grave qu'une casse moteur, mais panne immobilisante et coûteuse en main-d'œuvre.</p>
                    </li>

                    <li class="pgt-moteur-item medium">
                        <span class="pgt-risque medium">Risque Moyen 3/5</span>
                        <h2>1.2 VTi 82 ch (Atmosphérique) — Même ADN, mêmes risques</h2>
                        <p>Petit frère du PureTech sans turbo : il évite les casses de turbine mais conserve la même technologie de courroie humide avec les risques d'obstruction de crépine. Sa puissance limitée force les conducteurs à solliciter haut le moteur, ce qui use prématurément les roulements de boîte. Un sous-dimensionnement sur un véhicule lourd réduit aussi drastiquement le <a href="/Blog/peugeot-3008-kilométrage-maximum">kilométrage maximum d'un 3008</a>.</p>
                    </li>

                    <li class="pgt-moteur-item medium">
                        <span class="pgt-risque medium">Risque Moyen 3/5</span>
                        <h2>2.2 HDi (1ères versions) — Électronique et FAP capricieux</h2>
                        <p>Très innovant pour son époque avec l'introduction du FAP, mais la gestion électronique de la régénération et le réservoir d'additif (Cérine) tombent fréquemment en panne, entraînant des passages répétés en mode dégradé. Moteur performant mais entretien rigoureux et coûteux indispensable.</p>
                    </li>

                    <li class="pgt-moteur-item medium">
                        <span class="pgt-risque medium">Risque Moyen 3/5</span>
                        <h2>1.4 VTi 95 — La chaîne qui ne tient pas</h2>
                        <p>Partage le système de distribution par chaîne des blocs Prince. Le tendeur de chaîne est le point faible principal : sans remplacement préventif dès l'apparition d'un bruit métallique à froid, la chaîne se décale et endommage les soupapes.</p>
                    </li>

                </ol>

                <!-- ══════════════════════════════════ -->
                <h2 id="tableau-recap">Tableau récapitulatif : motorisations, pannes et coûts</h2>

                <div class="pgt-table-wrap">
                    <table class="pgt-table">
                        <thead>
                            <tr>
                                <th>Motorisation</th>
                                <th>Problème majeur</th>
                                <th>Coût réparation moyen</th>
                                <th>Indice de risque</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1.2 PureTech</strong></td>
                                <td>Courroie humide / Crépine bouchée</td>
                                <td>1 500 € à 8 000 €</td>
                                <td><span class="risk-dot" style="background:#dc2626;"></span>5/5 Critique</td>
                            </tr>
                            <tr>
                                <td><strong>1.5 BlueHDi 130</strong></td>
                                <td>Chaîne 7 mm / Cristallisation AdBlue</td>
                                <td>1 200 € à 4 500 €</td>
                                <td><span class="risk-dot" style="background:#ea580c;"></span>4/5 Élevé</td>
                            </tr>
                            <tr>
                                <td><strong>1.6 THP</strong></td>
                                <td>Distribution / Encrassement soupapes</td>
                                <td>800 € à 3 500 €</td>
                                <td><span class="risk-dot" style="background:#ea580c;"></span>4/5 Élevé</td>
                            </tr>
                            <tr>
                                <td><strong>1.6 HDi 110</strong></td>
                                <td>Joints d'injecteurs / Turbo</td>
                                <td>600 € à 2 000 €</td>
                                <td><span class="risk-dot" style="background:#ca8a04;"></span>3/5 Moyen</td>
                            </tr>
                            <tr>
                                <td><strong>V6 2.7 / 3.0 HDi</strong></td>
                                <td>Pompe à huile / Surchauffe</td>
                                <td>2 000 € à 10 000 €</td>
                                <td><span class="risk-dot" style="background:#ea580c;"></span>4/5 Élevé</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="podium-fiabilite">Le podium de la fiabilité : quelles Peugeot acheter les yeux fermés ?</h2>

                <img src="/Image/moteur-peugeot-a-eviter5.webp"
                     alt="Podium fiabilité Peugeot : 2.0 HDi en or, 1.2 Hybrid 136 en argent, 2.0 BlueHDi 150 en bronze"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <div class="pgt-podium">
                    <div class="pgt-podium-step silver">
                        <div class="rank">2</div>
                        <div class="engine">1.2 Hybrid 136 ch</div>
                        <div class="desc">Courroie humide remplacée par chaîne classique post-2024</div>
                    </div>
                    <div class="pgt-podium-step gold">
                        <div class="rank">1</div>
                        <div class="engine">2.0 HDi</div>
                        <div class="desc">150, 163 ou 180 ch — capable de dépasser 300 000 km sans casse majeure</div>
                    </div>
                    <div class="pgt-podium-step bronze">
                        <div class="rank">3</div>
                        <div class="engine">2.0 BlueHDi 150</div>
                        <div class="desc">Robuste et bien géré thermiquement, bon choix pour gros rouleurs</div>
                    </div>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="5-conseils-expert">5 conseils d'expert pour ne pas se faire piéger en occasion</h2>

                <img src="/Image/moteur-peugeot-a-eviter6.webp"
                     alt="Main de mécanicien dévissant le bouchon de remplissage d'huile pour inspecter l'état de la courroie de distribution Peugeot"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <ul class="pgt-conseils">
                    <li><strong>L'inspection visuelle :</strong> dévissez le bouchon de remplissage d'huile. Si vous voyez la courroie de distribution juste en dessous, vérifiez qu'elle n'est pas craquelée ou effilochée.</li>
                    <li><strong>L'historique des vidanges :</strong> exigez toutes les factures. Sur un PureTech, une vidange sautée ou faite avec la mauvaise huile est un motif d'exclusion immédiat.</li>
                    <li><strong>L'écoute à froid :</strong> démarrez le moteur après un arrêt prolongé. Tout cliquetis métallique ou bruit de chaîne qui frotte doit vous faire fuir.</li>
                    <li><strong>Le test du freinage :</strong> si la pédale de frein est dure lors des premières pressions, la pompe à vide est peut-être déjà polluée par des débris de courroie.</li>
                    <li><strong>Méfiez-vous des faibles kilométrages :</strong> une voiture de 5 ans peu roulée peut être plus encrassée qu'une routière. C'est souvent pour cela qu'une <a href="/Blog/voiture-occasion-10-km-pourquoi">voiture d'occasion avec peu de km</a> se retrouve sur le marché prématurément.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-problemes-peugeot">FAQ : vos questions sur les problèmes Peugeot</h2>

                <h3>Quelle est la durée de vie réelle d'un moteur 1.2 PureTech ?</h3>
                <p>Sans entretien rigoureux et sans changement préventif de courroie, beaucoup de blocs lâchent entre 60 000 et 80 000 km. Avec les correctifs de 2024, on peut espérer dépasser les 150 000 km, mais la vigilance reste de mise.</p>

                <h3>Stellantis prend-il en charge les casses moteur ?</h3>
                <p>Le constructeur a étendu la garantie jusqu'à 10 ans ou 175 000 km pour certains problèmes de courroie. Condition sine qua non : l'entretien doit avoir été réalisé scrupuleusement dans le réseau agréé.</p>

                <h3>Les moteurs Citroën ont-ils les mêmes problèmes ?</h3>
                <p>Oui. Citroën partage les mêmes plateformes et motorisations (PureTech, BlueHDi) que Peugeot au sein du groupe Stellantis. Tous les conseils de ce guide s'appliquent également aux C3, C4 et C5 Aircross.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Le 2.0 HDi reste la valeur sûre absolue chez Peugeot d'occasion. Si votre budget vous oriente vers un PureTech, n'achetez que si le carnet d'entretien est complet et que vous pouvez faire vérifier l'état de la courroie avant la transaction. Sans ces deux garanties, passez votre chemin.</p>
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
                <p>Chez Peugeot, le moteur fait toute la différence entre une bonne affaire et un désastre financier. Fuyez le 1.2 PureTech sans carnet d'entretien complet, méfiez-vous du 1.5 BlueHDi sur longues distances et visez systématiquement le 2.0 HDi si votre budget le permet. Avec ces repères, vous éviterez les pièges que j'ai vu coûter des milliers d'euros à des acheteurs mal informés.</p>
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
            "datePublished" => "2026-04-24T17:00:00+02:00",
            "dateModified"  => "2026-04-24T17:00:00+02:00",
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

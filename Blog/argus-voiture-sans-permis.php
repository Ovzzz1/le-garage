<?php
// published: 2026-04-21 17:00
/**
 * argus-voiture-sans-permis.php
 */

$page_title       = "Argus Voiture Sans Permis : Cote Officielle et Estimation Gratuite [2026]";
$page_description = "Estimez la valeur de votre voiture sans permis en 2026 : cote Argus par marque, règles de décote, impact du kilométrage et comparatif reprise vs particulier.";

$article = [
    'title'          => "Argus Voiture Sans Permis : Cote Officielle et Estimation Gratuite [2026]",
    'subtitle'       => "Tout ce qu'il faut savoir pour estimer, vendre ou acheter une VSP au juste prix : décote par marque, palier kilométrique critique, et impact du contrôle technique.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Voiture Sans Permis', 'Cote Argus', 'VSP Occasion', 'Aixam', 'Ligier'],
    'image'          => '/Image/argus-voiture-sans-permis1.webp',
    'date'           => '21 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Achat & Occasion',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud accompagne acheteurs et vendeurs sur le marché de l'occasion depuis plus de 12 ans. Spécialiste des quadricycles légers, il décrypte les subtilités d'un marché souvent mal compris.",
    'reading_time'   => '7 min',
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

<!-- CSS spécifique article : tableau comparatif reprise vs particulier -->
<style>
    .vsp-table-wrap { overflow-x: auto; margin: 25px 0; }
    .vsp-table { width: 100%; border-collapse: collapse; font-size: 0.95rem; }
    .vsp-table th { background-color: #7c3aed; color: #fff; padding: 12px 14px; text-align: left; }
    .vsp-table td { padding: 11px 14px; border-bottom: 1px solid #2a2a3e; }
    .vsp-table tr:nth-child(even) td { background-color: #1e1e32; }
    .vsp-marque-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 16px; margin: 24px 0; }
    .vsp-marque-card { background: #1e1e32; border: 1px solid #2a2a3e; border-radius: 10px; padding: 18px 20px; border-left: 4px solid #7c3aed; }
    .vsp-marque-card h3 { margin: 0 0 8px; font-size: 1rem; color: #c4b5fd; }
    .vsp-marque-card p { margin: 0; font-size: 0.9rem; color: #aaa; line-height: 1.55; }
    .vsp-tip { background: #12122a; border: 1px solid #7c3aed44; border-radius: 8px; padding: 16px 20px; margin: 22px 0; font-size: 0.93rem; color: #ccc; }
    .vsp-tip strong { color: #c4b5fd; }
</style>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Simulateur de cote sur tablette avec logos Aixam et Ligier, interface d'estimation argus voiture sans permis"
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
                    <li><strong>Aucune cote unique gratuite :</strong> croiser au moins trois sources (La Centrale, outils VSP spécialisés) pour obtenir une fourchette fiable.</li>
                    <li><strong>Palier critique à 30 000 km :</strong> variateur et courroie à prévoir, ce qui entraîne une décote systématique de 10 à 15 %.</li>
                    <li><strong>Contrôle technique vierge :</strong> depuis 2024, son absence punit le vendeur d'une décote immédiate d'environ 1 000 €.</li>
                    <li><strong>Moteur DCI valorisé :</strong> les Lombardini DCI se revendent en moyenne 800 € au-dessus des versions Progress équivalentes.</li>
                    <li><strong>Prix plancher à 10 ans :</strong> une VSP roulante descend rarement sous 2 500 - 3 000 €, quelle que soit la marque.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#obtenir-cote-argus">Comment obtenir la cote Argus d'une VSP gratuitement</a></li>
                    <li><a href="#regle-calcul-decote">La règle de calcul : comment est estimée la valeur de votre VSP</a></li>
                    <li><a href="#top-5-marques">Top 5 des modèles qui décotent le moins</a></li>
                    <li><a href="#vsp-10-ans">Quelle valeur pour une VSP de plus de 10 ans</a></li>
                    <li><a href="#facteurs-vendre-au-dessus">Les 3 facteurs pour vendre au-dessus de l'Argus en 2026</a></li>
                    <li><a href="#reprise-vs-particulier">Reprise concessionnaire vs vente entre particuliers</a></li>
                    <li><a href="#faq-legislation-cote">FAQ : législation et cote VSP</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Estimer la valeur d'une voiture sans permis en 2026 demande une approche bien plus nuancée que pour l'automobile classique. Là où le marché de l'occasion traditionnel suit des courbes de dépréciation prévisibles, celui des quadricycles légers obéit à des facteurs de rareté et à des évolutions législatives récentes. Que vous soyez un parent qui revend le véhicule de son adolescent ou un senior qui cherche le meilleur prix de reprise, voici les clés pour une estimation précise et réaliste.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="obtenir-cote-argus">Comment obtenir la cote Argus d'une voiture sans permis gratuitement ?</h2>

                <p>Contrairement aux idées reçues, il n'existe pas une "Cote Argus" unique et universelle accessible sans frais. Vous pouvez néanmoins obtenir une valeur de marché très fiable en croisant les données des acteurs majeurs du secteur.</p>

                <img src="/Image/argus-voiture-sans-permis1.webp"
                     alt="Simulateur de cote sur tablette avec logos Aixam et Ligier, interface d'estimation argus voiture sans permis"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <p><a href="https://www.lacentrale.fr/" target="_blank" rel="nofollow noopener">La Centrale</a> reste la référence pour observer les prix de transaction entre particuliers. Les outils de cotation spécialisés dans la VSP permettent ensuite d'affiner le résultat en tenant compte des options propres au monde du sans-permis. Il est recommandé de réaliser au moins trois simulations pour définir une fourchette cohérente.</p>

                <div class="vsp-tip">
                    <strong>Bon à savoir :</strong> la valeur "Argus Pro", celle qu'utilisent les concessionnaires pour calculer une reprise, est généralement inférieure de 15 à 20 % à la valeur de marché réelle entre particuliers. Gardez cet écart en tête avant de signer un bon de commande.
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="regle-calcul-decote">La règle de calcul : comment est estimée la valeur de votre VSP ?</h2>

                <p>Pour comprendre comment votre véhicule perd ou gagne de la valeur, il faut se pencher sur la mécanique de la décote. On applique généralement la méthode des "20 4 10", adaptée à la longévité spécifique des moteurs de 400 ou 500 cm³ équipant les quadricycles légers.</p>

                <img src="/Image/argus-voiture-sans-permis2.webp"
                     alt="Tableau de bord digital d'une voiture sans permis affichant 30 000 km, palier critique pour la cote argus"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <h3>À quelle date change la cote Argus ?</h3>
                <p>Les valeurs sont mises à jour mensuellement. Sur le marché de la voiture sans permis, la saisonnalité joue un rôle prépondérant : les mois de juin (fin d'année scolaire) et de septembre voient la demande exploser, ce qui permet souvent de maintenir des prix de vente supérieurs à la cote théorique.</p>

                <h3>L'impact du kilométrage : le palier critique des 30 000 km</h3>
                <p>Si une voiture classique est considérée "jeune" à 30 000 km, une VSP entre à ce stade dans une phase de maintenance lourde. C'est à ce palier que les interventions sur le variateur et la courroie deviennent inévitables. Franchir ce cap entraîne systématiquement une baisse de 10 à 15 % de la valeur estimée sur le marché de l'occasion.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="top-5-marques">Top 5 des modèles qui décotent le moins</h2>

                <p>Toutes les marques ne se valent pas face au temps. La notoriété du constructeur et la disponibilité des pièces de rechange constituent les deux piliers fondamentaux de la valeur résiduelle.</p>

                <img src="/Image/argus-voiture-sans-permis3.webp"
                     alt="Alignement Aixam City, Ligier JS50 Sport et Microcar M.GO dans un showroom, leaders du marché occasion VSP"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <div class="vsp-marque-grid">
                    <div class="vsp-marque-card">
                        <h3>1. Aixam — City, Coupé, Minauto</h3>
                        <p>Leader historique du marché, Aixam bénéficie de la cote la plus ferme. Une City conserve près de 60 % de sa valeur après 3 ans.</p>
                    </div>
                    <div class="vsp-marque-card">
                        <h3>2. Ligier — JS50, JS60</h3>
                        <p>Son design sportif très recherché par la cible jeune soutient la cote. Les versions Sport Ultimate se revendent souvent au-dessus de l'argus.</p>
                    </div>
                    <div class="vsp-marque-card">
                        <h3>3. Microcar — M.GO, Dué</h3>
                        <p>Reconnue pour son aspect pratique, elle offre une décote linéaire : un choix de confiance pour les acheteurs seniors.</p>
                    </div>
                    <div class="vsp-marque-card">
                        <h3>4. Chatenet — CH46</h3>
                        <p>Considérée comme le "premium" de la VSP, elle garde une valeur haute mais s'adresse à un marché de niche plus restreint.</p>
                    </div>
                    <div class="vsp-marque-card">
                        <h3>5. Casalini — M20</h3>
                        <p>Robuste mais revente plus lente, faute d'un réseau de distribution aussi dense que celui d'Aixam.</p>
                    </div>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="vsp-10-ans">Quelle valeur pour une voiture sans permis de plus de 10 ans ?</h2>

                <p>Beaucoup pensent qu'un véhicule de 10 ans n'a plus de valeur. Sur le marché de la VSP, la réalité est tout autre : on parle de "prix plancher" ou "prix de survie". Tant que le véhicule est roulant et sécurisé, sa valeur descend rarement sous les 2 500 à 3 000 €. Investir dans une vieille Microcar ou une Aixam 400 reste donc une stratégie de mobilité à faible coût, car la décote est quasi nulle après la dixième année.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="facteurs-vendre-au-dessus">Les 3 facteurs pour vendre au-dessus de l'Argus en 2026</h2>

                <p>Au-delà de l'année et du modèle, trois critères peuvent faire basculer votre estimation vers le haut.</p>

                <h3>1. Le contrôle technique vierge : le pivot de 2024</h3>
                <p>Depuis l'instauration du contrôle technique obligatoire pour les VSP en 2024, un rapport vierge est devenu le sésame de la transaction. Un véhicule vendu sans CT ou avec des défaillances majeures subit une décote punitive immédiate de l'ordre de 1 000 €.</p>

                <h3>2. La motorisation : DCI vs Progress</h3>
                <img src="/Image/argus-voiture-sans-permis4.webp"
                     alt="Moteur Lombardini DCI propre sous le capot d'une voiture sans permis, motorisation la mieux cotée du marché"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">
                <p>Les moteurs Lombardini DCI sont nettement plus valorisés que les versions Progress ou les anciens blocs Kubota. Plus silencieux, moins gourmands, ils justifient une surcote moyenne de 800 € sur le marché de l'occasion. Vérifiez systématiquement la motorisation avant toute négociation.</p>

                <h3>3. Le virage électrique et l'effet ZFE</h3>
                <p>L'essor de modèles comme la Citroën Ami ou l'Aixam e-City a modifié les attentes du marché. Dans les métropoles soumises aux Zones à Faibles Émissions (ZFE), la cote des VSP diesel d'avant 2015 s'effrite au profit des modèles électriques, dont la valeur résiduelle est aujourd'hui exceptionnelle.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="reprise-vs-particulier">Reprise concessionnaire vs vente entre particuliers</h2>

                <div class="vsp-table-wrap">
                    <table class="vsp-table">
                        <thead>
                            <tr>
                                <th>Critère</th>
                                <th>Reprise concessionnaire</th>
                                <th>Vente entre particuliers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Valeur obtenue</strong></td>
                                <td>Argus Pro moins frais de remise en état</td>
                                <td>Prix de marché (maximum)</td>
                            </tr>
                            <tr>
                                <td><strong>Simplicité</strong></td>
                                <td>Totale — prise en charge administrative complète</td>
                                <td>Gestion des annonces et des visites</td>
                            </tr>
                            <tr>
                                <td><strong>Délai</strong></td>
                                <td>24 heures</td>
                                <td>2 à 4 semaines en moyenne</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-legislation-cote">FAQ : législation et cote VSP</h2>

                <h3>Quel permis pour conduire une voiture sans permis ?</h3>
                <p>Le permis AM (ex-BSR) est requis pour les personnes nées après 1988. Cela n'influe pas directement sur le prix, mais un acheteur dépourvu du permis AM ne pourra pas assurer le véhicule, ce qui peut bloquer une vente.</p>

                <h3>Peut-on obtenir la cote d'une VSP sans carte grise ?</h3>
                <p>Non. Le numéro de châssis et la date précise de première mise en circulation sont indispensables pour identifier la version exacte et les options intégrées qui déterminent la valeur Argus.</p>

                <h3>Quel est l'impact d'une carrosserie rayée sur l'estimation ?</h3>
                <img src="/Image/argus-voiture-sans-permis5.webp"
                     alt="Aile de voiture sans permis en plastique ABS fissurée, point majeur de dépréciation lors d'une expertise argus"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">
                <p>La carrosserie des VSP est en plastique ABS ou composite. Ces matériaux ne se redressent pas comme de la tôle : la moindre fissure impose souvent le remplacement complet de l'élément. L'aspect visuel influe donc bien plus lourdement sur la cote finale que pour une voiture standard.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Sur le marché de la VSP, l'information fait la valeur. Un contrôle technique vierge, un moteur DCI et un kilométrage sous les 30 000 km : réunissez ces trois critères et vous pouvez légitimement afficher un prix au-dessus de l'argus. À l'inverse, vendre sans préparation, c'est laisser de l'argent sur la table.</p>
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
                <p>La cote argus d'une voiture sans permis n'est pas un chiffre figé : c'est le résultat d'un faisceau de critères que vous pouvez anticiper et travailler. Contrôle technique à jour, motorisation DCI, kilométrage maîtrisé et carrosserie irréprochable — chaque point coché rapproche votre prix de vente du haut de la fourchette. Croiser plusieurs sources de cotation reste le meilleur réflexe avant toute transaction, qu'on soit vendeur ou acheteur.</p>
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
            "datePublished" => "2026-04-21T17:00:00+02:00",
            "dateModified"  => "2026-04-21T17:00:00+02:00",
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

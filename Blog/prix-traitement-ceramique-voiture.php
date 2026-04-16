<?php
/**
 * prix-traitement-ceramique-voiture.php
 */

$page_title       = "Prix d'un Traitement Céramique Voiture : Tarif et Devis (2026)";
$page_description = "Combien coûte vraiment un traitement céramique en 2026 ? Prix moyens, importance du polissage, tableau de budgets, simulateur de tarif et sélection des meilleurs centres detailing en France.";

$article = [
    'title'          => "Traitement céramique voiture : tarif, prix moyen et vrai coût selon votre véhicule",
    'subtitle'       => "De 500 € à plus de 1 500 €, le devis d'une protection céramique fait le grand écart. Découvrez ce qui justifie ce prix, le rôle crucial du polissage et notre sélection de centres detailing.",
    'category'       => 'entretien',
    'category_name'  => 'Entretien & Réparation',
    'category_color' => '#dc2626',
    'tags'           => ['Esthétique Auto', 'Detailing', 'Céramique', 'Carrosserie'],
    'image'          => '/Image/traitement-ceramique-prix1.webp',
    'date'           => '30 Mars 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Esthétique & Detailing',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Passionné de detailing et perfectionniste dans l'âme, Arnaud décortique les meilleures techniques de protection carrosserie pour vous éviter les pièges des devis gonflés.",
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

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Application d'un traitement céramique sur la carrosserie d'une voiture"
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
                    <span>Guides</span>
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
                    <li><strong>Le prix moyen :</strong> Comptez entre <strong>800 € et 1 500 €</strong> pour un traitement céramique posé par un professionnel en centre detailing.</li>
                    <li><strong>La règle d'or :</strong> Le produit en lui-même n'est qu'une infime partie du travail. <strong>70 % du résultat visuel dépend de la préparation</strong> (polissage et correction des défauts).</li>
                    <li><strong>La durée de vie :</strong> Un vrai traitement 9H tient entre <strong>3 et 5 ans</strong> s'il est bien entretenu (lavage à la main privilégié).</li>
                    <li><strong>L'arbitrage :</strong> Très rentable pour un véhicule neuf, une peinture sombre ou un modèle premium. Inutile si vous continuez à passer à la station rouleaux chaque semaine.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Au sommaire de ce guide</div>
                <ol>
                    <li><a href="#prix-attentes">Prix d'un traitement céramique voiture : à quoi s'attendre ?</a></li>
                    <li><a href="#estimateur">Estimateur de tarif : calculez votre budget</a></li>
                    <li><a href="#tableau-prix">Tableau de prix : exemples de budgets selon les cas</a></li>
                    <li><a href="#pro-ou-diy">Traitement céramique professionnel ou à faire soi-même ?</a></li>
                    <li><a href="#ceramique-vs-spray">Traitement céramique vs spray céramique</a></li>
                    <li><a href="#est-ce-rentable">Est-ce que le traitement vaut le prix demandé ?</a></li>
                    <li><a href="#bonnes-adresses">Où faire un traitement céramique dans les grandes villes ?</a></li>
                    <li><a href="#faq">FAQ sur le tarif d'un traitement céramique</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">
                <p>Protéger la peinture de sa voiture avec un traitement céramique est devenu le standard ultime de l'esthétique automobile. Au-delà de la brillance spectaculaire qu'il procure, ce vernis invisible agit comme un bouclier contre les micro-rayures, les fientes d'oiseaux et les UV. Mais face à des devis qui varient parfois du simple au triple, il est difficile de s'y retrouver. Décryptage complet pour comprendre ce que vous payez vraiment.</p>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="prix-attentes">Prix d'un traitement céramique voiture : à quoi s'attendre en 2026 ?</h2>
                <p>Sur le marché du detailing professionnel en 2026, l'application d'une <strong>protection céramique</strong> est facturée <strong>entre 800 € et 1 500 € en moyenne</strong>. Ce tarif inclut généralement un nettoyage en profondeur, une décontamination de la surface, le polissage du vernis et la pose de la céramique. Pour un véhicule sorti d'usine sans aucun défaut de carrosserie, le prix d'appel peut débuter autour de 450 à 600 €.</p>

                <h3>Ce qui fait vraiment varier le tarif</h3>
                <p>L'écart entre deux devis s'explique rarement par la marque du produit utilisé (CarPro, Gtechniq, Fictech...). Le tarif est avant tout dicté par le <strong>temps de main-d'œuvre</strong>, lui-même influencé par quatre variables :</p>
                <ul>
                    <li><strong>Le gabarit du véhicule :</strong> Une citadine (type Peugeot 208) demandera beaucoup moins de produit et d'heures qu'un grand SUV (type BMW X5) ou qu'un break.</li>
                    <li><strong>L'état initial du vernis :</strong> Un véhicule d'occasion marqué par les rouleaux de lavage nécessite un "cut" lourd pour effacer les micro-rayures, contre un simple lustrage de finition pour un modèle neuf.</li>
                    <li><strong>Le nombre de couches de protection :</strong> Une protection garantie 5 ans réclame souvent une base ("base coat") et une finition ("top coat"), augmentant le temps de pose et de séchage sous lampes infrarouges.</li>
                    <li><strong>Les options :</strong> Protection des jantes, des vitres, des plastiques extérieurs, des cuirs intérieurs, ou pose partielle d'un film PPF sur la face avant — chaque surface supplémentaire fait grimper le devis.</li>
                </ul>

                <!-- IMAGE DANS LE CONTENU #2 -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/traitement-ceramique-prix2.webp"
                         alt="Préparation carrosserie avant traitement céramique : polissage et correction de peinture"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        La correction de la peinture représente l'essentiel du temps passé et donc du coût total du traitement.
                    </figcaption>
                </figure>

                <h3>Préparation de la carrosserie : pourquoi elle pèse plus lourd que le produit</h3>
                <p>C'est l'information la plus cruciale de ce dossier. Beaucoup pensent qu'ils paient un liquide magique coûteux. En réalité, vous payez l'expertise du préparateur esthétique automobile.</p>
                <blockquote class="art-blockquote">
                    Le conseil du Garage Expert : un bon traitement céramique, c'est <strong>70 % de préparation (lavage, décontamination, polissage)</strong> et <strong>30 % de produit</strong>. Si un centre propose une pose rapide sans correction de la peinture avant — passez votre chemin. La céramique va simplement figer et enfermer les défauts existants sous une couche de verre.
                </blockquote>
                <p>Avant d'appliquer le traitement, le professionnel procède à un lavage minutieux, un passage à la <em>clay bar</em> (barre d'argile pour retirer les contaminants incrustés dans le vernis), puis un polissage "One step" ou "Multi-step" pour retrouver un vernis parfait et une brillance miroir.</p>
                <p>Si vous souhaitez compléter la protection de la carrosserie en surface par une protection en dessous, notre guide sur le <a href="/Blog/traitement-anti-corrosion-chassis-voiture">traitement anti-corrosion du châssis</a> vous présente la méthode en 3 étapes pour protéger la structure de votre véhicule de la rouille.</p>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="estimateur">Notre estimateur de tarif : calculez un budget selon votre voiture</h2>
                <p>Répondez à trois questions pour obtenir une fourchette de prix réaliste avant de demander vos devis. Ce simulateur se base sur les tarifs pratiqués par les centres detailing professionnels en France en 2026.</p>

                <!-- ░░░ CALCULATEUR UX ░░░ -->
                <div class="ceramique-calc" id="ceramique-calc" role="region" aria-label="Estimateur de tarif traitement céramique">

                    <div class="calc-steps">

                        <!-- ÉTAPE 1 : TYPE DE VÉHICULE -->
                        <fieldset class="calc-step active" id="step-1" data-step="1">
                            <legend class="calc-step-legend">
                                <span class="calc-step-num">1</span>
                                Quel est votre type de véhicule ?
                            </legend>
                            <div class="calc-options-grid">
                                <label class="calc-option" for="v-citadine">
                                    <input type="radio" id="v-citadine" name="vehicle" value="citadine" data-min="450" data-max="650">
                                    <span class="calc-option-inner">
                                        <svg viewBox="0 0 48 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M4 18h40M4 18l4-8h24l4 8"/><path d="M12 10l3-6h10l3 6"/><circle cx="13" cy="18" r="4"/><circle cx="35" cy="18" r="4"/></svg>
                                        <strong>Citadine</strong>
                                        <small>Clio, 208, Polo...</small>
                                    </span>
                                </label>
                                <label class="calc-option" for="v-berline">
                                    <input type="radio" id="v-berline" name="vehicle" value="berline" data-min="650" data-max="900">
                                    <span class="calc-option-inner">
                                        <svg viewBox="0 0 52 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 18h48M2 18l4-8h32l4 8"/><path d="M10 10l4-7h20l4 7"/><circle cx="14" cy="18" r="4"/><circle cx="38" cy="18" r="4"/></svg>
                                        <strong>Berline / Break</strong>
                                        <small>Série 3, Passat, Megane...</small>
                                    </span>
                                </label>
                                <label class="calc-option" for="v-suv">
                                    <input type="radio" id="v-suv" name="vehicle" value="suv" data-min="800" data-max="1100">
                                    <span class="calc-option-inner">
                                        <svg viewBox="0 0 54 26" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 20h50M2 20l4-10h34l4 10"/><path d="M8 10l4-8h24l4 8"/><circle cx="15" cy="20" r="4"/><circle cx="39" cy="20" r="4"/></svg>
                                        <strong>SUV / Crossover</strong>
                                        <small>Kadjar, Tiguan, RAV4...</small>
                                    </span>
                                </label>
                                <label class="calc-option" for="v-suv-premium">
                                    <input type="radio" id="v-suv-premium" name="vehicle" value="suv-premium" data-min="1000" data-max="1400">
                                    <span class="calc-option-inner">
                                        <svg viewBox="0 0 58 28" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 22h54M2 22l5-12h36l5 12"/><path d="M9 10l5-8h24l5 8"/><circle cx="16" cy="22" r="4"/><circle cx="42" cy="22" r="4"/></svg>
                                        <strong>Grand SUV / Premium</strong>
                                        <small>X5, Cayenne, Defender...</small>
                                    </span>
                                </label>
                            </div>
                            <button class="calc-next-btn" disabled aria-disabled="true">Étape suivante</button>
                        </fieldset>

                        <!-- ÉTAPE 2 : ÉTAT DE LA PEINTURE -->
                        <fieldset class="calc-step" id="step-2" data-step="2" hidden>
                            <legend class="calc-step-legend">
                                <span class="calc-step-num">2</span>
                                Dans quel état est la peinture de votre voiture ?
                            </legend>
                            <div class="calc-options-list">
                                <label class="calc-option-row" for="p-neuf">
                                    <input type="radio" id="p-neuf" name="paint" value="neuf" data-add-min="0" data-add-max="0">
                                    <span class="calc-option-row-inner">
                                        <span class="calc-dot" style="background:#22c55e"></span>
                                        <span>
                                            <strong>Neuf ou excellent état</strong>
                                            <small>Véhicule récent, sans défaut visible, jamais passé aux rouleaux.</small>
                                        </span>
                                        <span class="calc-option-price">+0 €</span>
                                    </span>
                                </label>
                                <label class="calc-option-row" for="p-bon">
                                    <input type="radio" id="p-bon" name="paint" value="bon" data-add-min="150" data-add-max="250">
                                    <span class="calc-option-row-inner">
                                        <span class="calc-dot" style="background:#84cc16"></span>
                                        <span>
                                            <strong>Bon état général</strong>
                                            <small>Vernis propre, quelques légères traces à la lumière rasante.</small>
                                        </span>
                                        <span class="calc-option-price">+150 à 250 €</span>
                                    </span>
                                </label>
                                <label class="calc-option-row" for="p-micro">
                                    <input type="radio" id="p-micro" name="paint" value="micro" data-add-min="300" data-add-max="500">
                                    <span class="calc-option-row-inner">
                                        <span class="calc-dot" style="background:#f59e0b"></span>
                                        <span>
                                            <strong>Micro-rayures légères</strong>
                                            <small>Traces de toile d'araignée visibles dans le soleil, lavages station rouleaux.</small>
                                        </span>
                                        <span class="calc-option-price">+300 à 500 €</span>
                                    </span>
                                </label>
                                <label class="calc-option-row" for="p-correction">
                                    <input type="radio" id="p-correction" name="paint" value="correction" data-add-min="500" data-add-max="900">
                                    <span class="calc-option-row-inner">
                                        <span class="calc-dot" style="background:#ef4444"></span>
                                        <span>
                                            <strong>Correction nécessaire</strong>
                                            <small>Peinture très marquée, rayures profondes, peinture oxydée ou terne.</small>
                                        </span>
                                        <span class="calc-option-price">+500 à 900 €</span>
                                    </span>
                                </label>
                            </div>
                            <div class="calc-nav">
                                <button class="calc-prev-btn">Retour</button>
                                <button class="calc-next-btn" disabled aria-disabled="true">Étape suivante</button>
                            </div>
                        </fieldset>

                        <!-- ÉTAPE 3 : OPTIONS -->
                        <fieldset class="calc-step" id="step-3" data-step="3" hidden>
                            <legend class="calc-step-legend">
                                <span class="calc-step-num">3</span>
                                Souhaitez-vous des protections supplémentaires ?
                            </legend>
                            <p class="calc-step-hint">Ces options s'ajoutent au traitement carrosserie principal. Plusieurs choix possibles.</p>
                            <div class="calc-options-list">
                                <label class="calc-option-check" for="opt-jantes">
                                    <input type="checkbox" id="opt-jantes" name="options" value="jantes" data-add-min="120" data-add-max="180">
                                    <span class="calc-check-inner">
                                        <span class="calc-check-box" aria-hidden="true"></span>
                                        <span>
                                            <strong>Protection des jantes</strong>
                                            <small>Céramique sur les 4 jantes — facilite l'entretien, résiste aux freins.</small>
                                        </span>
                                        <span class="calc-option-price">+120 à 180 €</span>
                                    </span>
                                </label>
                                <label class="calc-option-check" for="opt-vitres">
                                    <input type="checkbox" id="opt-vitres" name="options" value="vitres" data-add-min="80" data-add-max="130">
                                    <span class="calc-check-inner">
                                        <span class="calc-check-box" aria-hidden="true"></span>
                                        <span>
                                            <strong>Traitement des vitres</strong>
                                            <small>Effet hydrophobe sur le pare-brise et les vitres latérales.</small>
                                        </span>
                                        <span class="calc-option-price">+80 à 130 €</span>
                                    </span>
                                </label>
                                <label class="calc-option-check" for="opt-plastiques">
                                    <input type="checkbox" id="opt-plastiques" name="options" value="plastiques" data-add-min="60" data-add-max="100">
                                    <span class="calc-check-inner">
                                        <span class="calc-check-box" aria-hidden="true"></span>
                                        <span>
                                            <strong>Plastiques extérieurs</strong>
                                            <small>Protection des bas de caisse, protections de carrosserie, rétroviseurs.</small>
                                        </span>
                                        <span class="calc-option-price">+60 à 100 €</span>
                                    </span>
                                </label>
                            </div>
                            <div class="calc-nav">
                                <button class="calc-prev-btn">Retour</button>
                                <button class="calc-compute-btn">Calculer mon estimation</button>
                            </div>
                        </fieldset>

                        <!-- RÉSULTAT -->
                        <div class="calc-result" id="calc-result" hidden aria-live="polite">
                            <div class="calc-result-inner">
                                <p class="calc-result-label">Budget estimé pour votre projet :</p>
                                <div class="calc-result-range">
                                    <span id="calc-min">—</span>
                                    <span class="calc-result-sep">à</span>
                                    <span id="calc-max">—</span>
                                </div>
                                <p class="calc-result-sub">Cette fourchette est indicative et basée sur les tarifs pratiqués en France en 2026. Seul un devis en atelier, après inspection visuelle de votre peinture, permettra de confirmer le prix final.</p>
                                <div class="calc-result-actions">
                                    <button class="calc-reset-btn">Recommencer</button>
                                    <a href="#bonnes-adresses" class="calc-cta-btn">Trouver un centre près de chez moi</a>
                                </div>
                                <div class="calc-result-notice">
                                    <strong>Rappel :</strong> La préparation (polissage &amp; correction) représente 70 % du résultat. Ne choisissez pas un prestataire uniquement sur le prix — inspectez son travail de préparation.
                                </div>
                            </div>
                        </div>

                    </div><!-- .calc-steps -->

                    <!-- PROGRESS BAR -->
                    <div class="calc-progress" aria-hidden="true">
                        <div class="calc-progress-bar" id="calc-progress-bar" style="width: 33%"></div>
                    </div>

                </div><!-- .ceramique-calc -->

                <!-- ═══════════════════════════════════════ -->
                <h2 id="tableau-prix">Tableau de prix : exemples de budgets selon les cas</h2>
                <p>Pour vous aider à vous projeter, voici une grille estimative des tarifs pratiqués par les bons centres detailing en France :</p>
                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Profil / État du véhicule</th>
                                <th>Travail nécessaire</th>
                                <th>Budget estimatif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Citadine neuve</strong> (sortie de concession)</td>
                                <td>Lavage, décontamination légère, lustrage de finition, céramique 1 couche.</td>
                                <td><strong>500 € – 700 €</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Berline d'occasion</strong> (vernis micro-rayé)</td>
                                <td>Lavage, décontamination, polissage en 2 étapes (correction + finition), céramique 2 couches.</td>
                                <td><strong>900 € – 1 200 €</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Grand SUV premium</strong> (peinture abîmée)</td>
                                <td>Correction lourde du vernis, traitement céramique carrosserie + vitres + jantes.</td>
                                <td><strong>1 300 € – 1 800 € +</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="pro-ou-diy">Traitement céramique professionnel ou à faire soi-même ?</h2>
                <p>Peut-on acheter une fiole de CQuartz ou de Gtechniq à 80 € sur Internet et se lancer seul dans son garage ? Techniquement oui, mais c'est risqué. L'économie financière est réelle, mais le DIY exige un équipement lourd (polisseuse orbitale, pads, dégraissant spécifique, éclairage LED orienté) et surtout un vrai savoir-faire en application.</p>
                <p>Si vous essuyez la céramique trop tard, elle se cristallise et laisse des <em>high spots</em> : des traces sombres et irrégulières sur le vernis. La seule façon de les rattraper consiste à polir à nouveau agressivement la carrosserie, ce qui annule tout le bénéfice.</p>

                <!-- IMAGE DANS LE CONTENU #3 -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/traitement-ceramique-prix3.webp"
                         alt="Résultat d'un traitement céramique professionnel : effet hydrophobe sur carrosserie noire"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        L'effet hydrophobe d'un traitement céramique bien appliqué : l'eau perle et roule sans s'incruster dans le vernis.
                    </figcaption>
                </figure>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="ceramique-vs-spray">Traitement céramique vs spray céramique : l'écart se justifie-t-il ?</h2>
                <p>Le marché propose de nombreux "sprays céramique" ou "quick detailers SiO2" vendus entre 20 et 40 €. Ils offrent un excellent effet hydrophobe (l'eau perle sur la carrosserie) et une belle brillance, très facile à appliquer après un lavage. Mais ce ne sont <strong>pas de vrais traitements céramiques</strong>.</p>
                <p>Un spray tient entre 2 et 4 mois. Une véritable protection céramique en fiole — qui nécessite un temps de cure (séchage sans eau ni humidité pendant 12 à 24h) — crée une liaison chimique avec le vernis et offre une protection durable <strong>3 à 5 ans</strong> face aux agressions chimiques, fientes et rayons UV.</p>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="est-ce-rentable">Est-ce que le traitement céramique vaut le prix demandé ?</h2>
                <p>C'est un investissement conséquent, mais redoutablement efficace dans des cas précis :</p>
                <ul>
                    <li><strong>Très rentable si :</strong> vous achetez un véhicule neuf (préserve la valeur de revente), vous avez une peinture noire ou foncée (extrêmement sensible aux micro-rayures), et vous lavez votre voiture à la main ou en station haute pression sans brosse.</li>
                    <li><strong>Inutile si :</strong> vous passez votre véhicule aux rouleaux automatiques toutes les semaines. Les brosses agressives finiront par altérer la couche céramique bien plus vite que prévu et annuler son effet protecteur.</li>
                </ul>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="bonnes-adresses">Où faire un traitement céramique dans les grandes villes ?</h2>
                <p>Pour être certain de confier votre carrosserie à de vrais experts de la préparation, voici notre sélection des centres detailing les mieux notés, un par grande ville française.</p>

                <!-- PARIS -->
                <h3>Paris — Status Car Detailing</h3>
                <div class="detailing-card">
                    <div class="detailing-card-header">
                        <div class="detailing-card-meta">
                            <span class="detailing-rating">4,9 / 5</span>
                            <span class="detailing-badge">Paris 15e</span>
                        </div>
                        <div class="detailing-card-info">
                            <p><strong>Adresse :</strong> 63 Rue Desnouettes, 75015 Paris</p>
                            <p><strong>Tel :</strong> <a href="tel:+33768307118">07 68 30 71 18</a></p>
                            <p><strong>Site :</strong> <a href="http://www.statuscardetailing.com/" target="_blank" rel="noopener noreferrer">statuscardetailing.com</a></p>
                            <p><strong>Horaires :</strong> Lun–Ven 9h–17h</p>
                        </div>
                    </div>
                    <div class="detailing-card-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.5!2d2.2864792!3d48.835547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6765b0ee3c0d9%3A0xdede585a793f1038!2sStatus%20Car%20Detailing!5e0!3m2!1sfr!2sfr!4v1" width="600" height="300" style="border:0; width:100%; border-radius:6px;" allowfullscreen="" loading="lazy" title="Status Car Detailing Paris"></iframe>
                    </div>
                </div>

                <!-- LYON -->
                <h3>Lyon — EMB Detailing</h3>
                <div class="detailing-card">
                    <div class="detailing-card-header">
                        <div class="detailing-card-meta">
                            <span class="detailing-rating">4,9 / 5</span>
                            <span class="detailing-badge">Vaugneray (69)</span>
                        </div>
                        <div class="detailing-card-info">
                            <p><strong>Adresse :</strong> 4 Route du Pont Pinay, 69670 Vaugneray</p>
                            <p><strong>Tel :</strong> <a href="tel:+33616790858">06 16 79 08 58</a></p>
                            <p><strong>Site :</strong> <a href="http://www.embdetailing.com/" target="_blank" rel="noopener noreferrer">embdetailing.com</a></p>
                            <p><strong>Horaires :</strong> Lun–Jeu 8h30–18h, Ven 9h30–18h</p>
                        </div>
                    </div>
                    <div class="detailing-card-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.5!2d4.671997!3d45.732213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4fbf9e9d20099%3A0x9b9997509ab5d243!2sEMB%20DETAILING!5e0!3m2!1sfr!2sfr!4v1" width="600" height="300" style="border:0; width:100%; border-radius:6px;" allowfullscreen="" loading="lazy" title="EMB Detailing Lyon"></iframe>
                    </div>
                </div>

                <!-- MARSEILLE -->
                <h3>Marseille — Magic Polish</h3>
                <div class="detailing-card">
                    <div class="detailing-card-header">
                        <div class="detailing-card-meta">
                            <span class="detailing-rating">5,0 / 5</span>
                            <span class="detailing-badge">Marseille 6e</span>
                        </div>
                        <div class="detailing-card-info">
                            <p><strong>Adresse :</strong> 5 Rue Gustave Ricard, 13006 Marseille</p>
                            <p><strong>Tel :</strong> <a href="tel:+33699901919">06 99 90 19 19</a></p>
                            <p><strong>Horaires :</strong> Lun–Sam 10h–20h</p>
                        </div>
                    </div>
                    <div class="detailing-card-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.5!2d5.3772086!3d43.291161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9b9a4d4411fa3%3A0x3446381658d643ba!2sMagic%20Polish%20Marseille!5e0!3m2!1sfr!2sfr!4v1" width="600" height="300" style="border:0; width:100%; border-radius:6px;" allowfullscreen="" loading="lazy" title="Magic Polish Marseille"></iframe>
                    </div>
                </div>

                <!-- TOULOUSE -->
                <h3>Toulouse — PolishPlus Car Detailing</h3>
                <div class="detailing-card">
                    <div class="detailing-card-header">
                        <div class="detailing-card-meta">
                            <span class="detailing-rating">5,0 / 5</span>
                            <span class="detailing-badge">Toulouse</span>
                        </div>
                        <div class="detailing-card-info">
                            <p><strong>Adresse :</strong> 8 Rue Claude Gonin, 31400 Toulouse</p>
                            <p><strong>Tel :</strong> <a href="tel:+33767457770">07 67 45 77 70</a></p>
                            <p><strong>Site :</strong> <a href="http://www.polishplus.fr/" target="_blank" rel="noopener noreferrer">polishplus.fr</a></p>
                            <p><strong>Horaires :</strong> Lun–Ven 9h–18h, Sam 9h–12h</p>
                        </div>
                    </div>
                    <div class="detailing-card-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.5!2d1.4845225!3d43.571222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aeb5736c0c453f%3A0xed91e6b72ab652e7!2sPolishPlus%20-%20Car%20Detailing%20Toulouse!5e0!3m2!1sfr!2sfr!4v1" width="600" height="300" style="border:0; width:100%; border-radius:6px;" allowfullscreen="" loading="lazy" title="PolishPlus Car Detailing Toulouse"></iframe>
                    </div>
                </div>

                <!-- NICE -->
                <h3>Nice — DetaCars</h3>
                <div class="detailing-card">
                    <div class="detailing-card-header">
                        <div class="detailing-card-meta">
                            <span class="detailing-rating">5,0 / 5</span>
                            <span class="detailing-badge">Nice</span>
                        </div>
                        <div class="detailing-card-info">
                            <p><strong>Adresse :</strong> 287 Promenade des Anglais, 06200 Nice</p>
                            <p><strong>Tel :</strong> <a href="tel:+33970708969">09 70 70 89 69</a></p>
                            <p><strong>Site :</strong> <a href="http://detacars.fr/" target="_blank" rel="noopener noreferrer">detacars.fr</a></p>
                            <p><strong>Horaires :</strong> Mar–Jeu &amp; Sam 10h–19h (fermé Lun &amp; Ven)</p>
                        </div>
                    </div>
                    <div class="detailing-card-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2882.5!2d7.2307778!3d43.659693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12cdd0a7abc4d2f9%3A0xdae0c0e5ee5ef4f7!2s287%20Promenade%20des%20Anglais%2C%2006200%20Nice!5e0!3m2!1sfr!2sfr!4v1" width="600" height="300" style="border:0; width:100%; border-radius:6px;" allowfullscreen="" loading="lazy" title="DetaCars Nice"></iframe>
                    </div>
                </div>

            </div><!-- .art-content -->

            <!-- Premium Author Box -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>" class="art-author-avatar" width="80" height="80">
                <div class="art-author-info">
                    <span class="art-author-label">L'Avis du Préparateur</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir toute la rédaction</a>
                </div>
            </div>

            <!-- FAQ -->
            <div class="art-conclusion">
                <h2 id="faq">FAQ sur le tarif d'un traitement céramique voiture</h2>

                <h3>Combien coûte un traitement céramique voiture chez un professionnel ?</h3>
                <p>Le prix moyen varie entre <strong>800 € et 1 500 €</strong> pour un traitement posé en centre detailing. Il peut descendre à 500 € pour une citadine neuve sans défaut, et dépasser 1 800 € pour un véhicule ancien nécessitant une forte correction du vernis.</p>

                <h3>Pourquoi un devis peut-il passer de 500 à 2 000 € ?</h3>
                <p>La différence s'explique à 90 % par le <strong>temps de correction de la peinture</strong>. Si la carrosserie est très rayée ou oxydée, le préparateur peut passer 15 à 20 heures sur le polissage avant de poser la moindre goutte de protection céramique.</p>

                <h3>Combien de temps dure l'effet d'une protection céramique ?</h3>
                <p>Un traitement professionnel 9H dure entre <strong>3 et 5 ans</strong>. Cette durée est optimale si la voiture est entretenue avec des shampoings au pH neutre et sans passage aux rouleaux automatiques.</p>

                <h3>Le PPF est-il plus intéressant qu'un traitement céramique ?</h3>
                <p>Ce sont deux produits différents et complémentaires. Le <strong>PPF (film de protection peinture)</strong> protège physiquement des impacts de gravillons et des rayures profondes, notamment sur la face avant. Le traitement céramique est un vernis chimique qui protège des agressions UV, de la pollution et facilite l'entretien. L'idéal est de combiner les deux : PPF sur la face avant, céramique sur le reste de la carrosserie.</p>

                <h3>Peut-on laver la voiture normalement après la pose ?</h3>
                <p>Il faut impérativement éviter tout lavage pendant les <strong>7 à 10 jours suivant la pose</strong> pour laisser le revêtement durcir à cœur. Ensuite, le lavage devient bien plus facile, mais il faut proscrire définitivement les stations rouleaux au risque d'abîmer et de réduire la durée de vie du traitement.</p>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>" width="400" height="225" loading="lazy">
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
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>" width="400" height="225" loading="lazy">
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
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($ra['image']); ?>" alt="<?php echo htmlspecialchars($ra['title']); ?>" width="160" height="90" loading="lazy">
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

<!-- ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ -->
<!-- CALCULATEUR CSS + JS (inline, auto-suffisant) -->
<!-- ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ -->
<style>
/* ── Calculateur céramique ── */
.ceramique-calc {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    overflow: hidden;
    margin: 2rem 0;
    font-family: inherit;
}
.calc-steps { padding: 1.5rem; }
.calc-step { border: none; padding: 0; margin: 0; }
.calc-step-legend {
    display: flex;
    align-items: center;
    gap: 0.625rem;
    font-size: 1.0625rem;
    font-weight: 700;
    color: #111827;
    margin-bottom: 1.25rem;
    width: 100%;
}
.calc-step-num {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    background: #dc2626;
    color: #fff;
    border-radius: 50%;
    font-size: 0.875rem;
    font-weight: 700;
    flex-shrink: 0;
}
.calc-step-hint {
    font-size: 0.875rem;
    color: #6b7280;
    margin-bottom: 1rem;
    margin-top: -0.5rem;
}
/* Options véhicule - grille 2×2 */
.calc-options-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.75rem;
    margin-bottom: 1.25rem;
}
@media (max-width: 500px) { .calc-options-grid { grid-template-columns: 1fr 1fr; } }
.calc-option input[type="radio"] { position: absolute; opacity: 0; width: 0; height: 0; }
.calc-option-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.375rem;
    padding: 0.875rem 0.5rem;
    border: 2px solid #e5e7eb;
    border-radius: 10px;
    cursor: pointer;
    background: #fff;
    transition: border-color 180ms, background 180ms, box-shadow 180ms;
    text-align: center;
    user-select: none;
}
.calc-option-inner svg {
    width: 48px;
    height: 28px;
    color: #6b7280;
    transition: color 180ms;
}
.calc-option-inner strong { font-size: 0.875rem; color: #111827; }
.calc-option-inner small  { font-size: 0.75rem;  color: #9ca3af; }
.calc-option input[type="radio"]:checked + .calc-option-inner {
    border-color: #dc2626;
    background: #fef2f2;
    box-shadow: 0 0 0 3px rgba(220,38,38,0.12);
}
.calc-option input[type="radio"]:checked + .calc-option-inner svg { color: #dc2626; }
.calc-option input[type="radio"]:focus-visible + .calc-option-inner {
    outline: 2px solid #dc2626;
    outline-offset: 2px;
}
/* Options peinture - liste -->*/
.calc-options-list { display: flex; flex-direction: column; gap: 0.625rem; margin-bottom: 1.25rem; }
.calc-option-row input[type="radio"] { position: absolute; opacity: 0; width: 0; height: 0; }
.calc-option-row-inner {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1rem;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    cursor: pointer;
    background: #fff;
    transition: border-color 180ms, background 180ms;
}
.calc-option-row-inner span > strong { font-size: 0.9375rem; color: #111827; display: block; }
.calc-option-row-inner span > small  { font-size: 0.8125rem; color: #6b7280; }
.calc-dot { width: 14px; height: 14px; border-radius: 50%; flex-shrink: 0; }
.calc-option-price {
    margin-left: auto;
    white-space: nowrap;
    font-size: 0.8125rem;
    font-weight: 600;
    color: #374151;
    flex-shrink: 0;
}
.calc-option-row input[type="radio"]:checked + .calc-option-row-inner {
    border-color: #dc2626;
    background: #fef2f2;
}
/* Checkboxes options -->*/
.calc-option-check input[type="checkbox"] { position: absolute; opacity: 0; width: 0; height: 0; }
.calc-check-inner {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1rem;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    cursor: pointer;
    background: #fff;
    transition: border-color 180ms, background 180ms;
}
.calc-check-box {
    width: 18px;
    height: 18px;
    border: 2px solid #d1d5db;
    border-radius: 4px;
    flex-shrink: 0;
    background: #fff;
    transition: background 180ms, border-color 180ms;
    position: relative;
}
.calc-option-check input[type="checkbox"]:checked + .calc-check-inner { border-color: #dc2626; background: #fef2f2; }
.calc-option-check input[type="checkbox"]:checked + .calc-check-inner .calc-check-box {
    background: #dc2626;
    border-color: #dc2626;
}
.calc-option-check input[type="checkbox"]:checked + .calc-check-inner .calc-check-box::after {
    content: '';
    position: absolute;
    left: 3px; top: 1px;
    width: 8px; height: 5px;
    border-left: 2px solid #fff;
    border-bottom: 2px solid #fff;
    transform: rotate(-45deg);
}
/* Buttons */
.calc-next-btn, .calc-prev-btn, .calc-compute-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.625rem 1.25rem;
    border-radius: 6px;
    font-size: 0.9375rem;
    font-weight: 600;
    cursor: pointer;
    border: none;
    transition: background 180ms, opacity 180ms, transform 120ms;
}
.calc-next-btn, .calc-compute-btn {
    background: #dc2626;
    color: #fff;
}
.calc-next-btn:hover:not(:disabled), .calc-compute-btn:hover { background: #b91c1c; }
.calc-next-btn:active, .calc-compute-btn:active { transform: scale(0.98); }
.calc-next-btn:disabled { opacity: 0.4; cursor: not-allowed; }
.calc-prev-btn {
    background: #f3f4f6;
    color: #374151;
}
.calc-prev-btn:hover { background: #e5e7eb; }
.calc-nav { display: flex; gap: 0.75rem; align-items: center; margin-top: 0.5rem; }
/* Résultat */
.calc-result { padding: 1.5rem; }
.calc-result-inner {
    background: #fff;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    padding: 1.5rem;
    text-align: center;
}
.calc-result-label { font-size: 0.9375rem; color: #6b7280; margin-bottom: 0.75rem; }
.calc-result-range {
    display: flex;
    align-items: baseline;
    justify-content: center;
    gap: 0.5rem;
    font-size: 2.25rem;
    font-weight: 800;
    color: #dc2626;
    margin-bottom: 1rem;
    font-variant-numeric: tabular-nums;
}
.calc-result-sep { font-size: 1rem; font-weight: 400; color: #9ca3af; }
.calc-result-sub { font-size: 0.875rem; color: #6b7280; margin-bottom: 1.25rem; max-width: 52ch; margin-inline: auto; }
.calc-result-actions { display: flex; gap: 0.75rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.25rem; }
.calc-reset-btn {
    padding: 0.5rem 1rem;
    background: #f3f4f6;
    color: #374151;
    border-radius: 6px;
    font-size: 0.875rem;
    font-weight: 600;
    border: none;
    cursor: pointer;
}
.calc-reset-btn:hover { background: #e5e7eb; }
.calc-cta-btn {
    padding: 0.5rem 1.25rem;
    background: #dc2626;
    color: #fff;
    border-radius: 6px;
    font-size: 0.875rem;
    font-weight: 600;
    text-decoration: none;
    transition: background 180ms;
}
.calc-cta-btn:hover { background: #b91c1c; }
.calc-result-notice {
    background: #fef9c3;
    border: 1px solid #fde68a;
    border-radius: 6px;
    padding: 0.75rem 1rem;
    font-size: 0.8125rem;
    color: #78350f;
    text-align: left;
}
/* Progress bar */
.calc-progress {
    height: 4px;
    background: #e5e7eb;
}
.calc-progress-bar {
    height: 100%;
    background: #dc2626;
    transition: width 300ms ease;
}
/* Detailing cards */
.detailing-card {
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 2rem;
    background: #fff;
}
.detailing-card-header {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    padding: 1.25rem;
    border-bottom: 1px solid #f3f4f6;
    align-items: flex-start;
}
.detailing-card-meta { display: flex; flex-direction: column; gap: 0.5rem; flex-shrink: 0; }
.detailing-rating {
    display: inline-flex;
    align-items: center;
    gap: 0.25rem;
    font-weight: 700;
    font-size: 1rem;
    color: #111827;
}
.detailing-rating::before {
    content: '★';
    color: #f59e0b;
}
.detailing-badge {
    display: inline-block;
    background: #f3f4f6;
    color: #374151;
    font-size: 0.75rem;
    font-weight: 600;
    padding: 0.2rem 0.6rem;
    border-radius: 999px;
    white-space: nowrap;
}
.detailing-card-info { flex: 1; }
.detailing-card-info p { margin-bottom: 0.25rem; font-size: 0.9rem; color: #374151; }
.detailing-card-info a { color: #dc2626; }
.detailing-card-map { line-height: 0; }
.detailing-card-map iframe { display: block; }
/* Blockquote */
.art-blockquote {
    border-left: 4px solid #dc2626;
    padding: 0.875rem 1.25rem;
    background: #fef2f2;
    margin: 1.5rem 0;
    font-style: italic;
    border-radius: 0 6px 6px 0;
    color: #374151;
}
</style>

<script>
(function() {
    const calc = document.getElementById('ceramique-calc');
    if (!calc) return;

    const steps      = calc.querySelectorAll('.calc-step');
    const resultBox  = calc.getElementById ? calc.querySelector('#calc-result') : document.getElementById('calc-result');
    const progressBar = document.getElementById('calc-progress-bar');
    let currentStep  = 1;

    function showStep(n) {
        steps.forEach(s => {
            const isTarget = parseInt(s.dataset.step) === n;
            s.hidden = !isTarget;
            if (isTarget) s.classList.add('active');
            else s.classList.remove('active');
        });
        if (resultBox) resultBox.hidden = true;
        // Progress: step 1 = 33%, step 2 = 66%, step 3 = 100%
        if (progressBar) progressBar.style.width = (n * 33.33) + '%';
        currentStep = n;
    }

    function checkNextBtn(step) {
        const stepEl  = calc.querySelector('[data-step="' + step + '"]');
        const nextBtn = stepEl && stepEl.querySelector('.calc-next-btn');
        if (!nextBtn) return;
        const hasVal  = stepEl.querySelector('input[type="radio"]:checked');
        nextBtn.disabled = !hasVal;
        nextBtn.setAttribute('aria-disabled', hasVal ? 'false' : 'true');
    }

    // Initialise listeners on step 1 radios
    calc.querySelectorAll('input[type="radio"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            const stepEl = radio.closest('.calc-step');
            if (stepEl) checkNextBtn(parseInt(stepEl.dataset.step));
        });
    });

    // Next buttons
    calc.querySelectorAll('.calc-next-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            if (btn.disabled) return;
            showStep(currentStep + 1);
            checkNextBtn(currentStep);
        });
    });

    // Prev buttons
    calc.querySelectorAll('.calc-prev-btn').forEach(function(btn) {
        btn.addEventListener('click', function() {
            showStep(currentStep - 1);
        });
    });

    // Compute
    const computeBtn = calc.querySelector('.calc-compute-btn');
    if (computeBtn) {
        computeBtn.addEventListener('click', function() {
            var vehicle = calc.querySelector('input[name="vehicle"]:checked');
            var paint   = calc.querySelector('input[name="paint"]:checked');
            if (!vehicle || !paint) return;

            var minVal = parseInt(vehicle.dataset.min) + parseInt(paint.dataset.addMin);
            var maxVal = parseInt(vehicle.dataset.max) + parseInt(paint.dataset.addMax);

            calc.querySelectorAll('input[name="options"]:checked').forEach(function(opt) {
                minVal += parseInt(opt.dataset.addMin);
                maxVal += parseInt(opt.dataset.addMax);
            });

            // Show result
            steps.forEach(s => s.hidden = true);
            if (progressBar) progressBar.style.width = '100%';

            var minEl = document.getElementById('calc-min');
            var maxEl = document.getElementById('calc-max');
            if (minEl) minEl.textContent = minVal.toLocaleString('fr-FR') + ' €';
            if (maxEl) maxEl.textContent = maxVal.toLocaleString('fr-FR') + ' €';
            if (resultBox) resultBox.hidden = false;
        });
    }

    // Reset
    var resetBtn = calc.querySelector('.calc-reset-btn');
    if (resetBtn) {
        resetBtn.addEventListener('click', function() {
            calc.querySelectorAll('input[type="radio"]').forEach(function(r) { r.checked = false; });
            calc.querySelectorAll('input[type="checkbox"]').forEach(function(c) { c.checked = false; });
            showStep(1);
            checkNextBtn(1);
        });
    }

    // Init
    showStep(1);
    checkNextBtn(1);
})();
</script>

<!-- Schema JSON-LD (Article + FAQ) -->
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
            "datePublished" => "2026-03-30T08:00:00+01:00",
            "dateModified"  => "2026-03-30T08:00:00+01:00",
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
        ],
        [
            "@type"      => "FAQPage",
            "mainEntity" => [
                [
                    "@type"          => "Question",
                    "name"           => "Combien coûte un traitement céramique voiture chez un professionnel ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Le prix moyen d'un traitement céramique posé par un professionnel varie entre 800 € et 1 500 €. Ce tarif peut descendre à 500 € pour une citadine neuve et monter à plus de 1 800 € pour un véhicule nécessitant une forte correction des micro-rayures par polissage."
                    ]
                ],
                [
                    "@type"          => "Question",
                    "name"           => "Pourquoi un devis peut-il passer de 500 à 2 000 € ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "La différence de prix s'explique principalement par la préparation. La correction des défauts et le polissage représentent 70 % du travail d'un detailer. Plus le vernis est abîmé, plus la main-d'oeuvre nécessaire sera longue, ce qui justifie l'essentiel du coût final."
                    ]
                ],
                [
                    "@type"          => "Question",
                    "name"           => "Combien de temps dure l'effet d'une protection céramique ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Une protection céramique 9H appliquée professionnellement dure entre 3 et 5 ans si la voiture est entretenue correctement, notamment en évitant les lavages aux rouleaux automatiques et en utilisant des shampoings au pH neutre."
                    ]
                ],
                [
                    "@type"          => "Question",
                    "name"           => "Le PPF est-il plus intéressant qu'un traitement céramique ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Ce sont deux produits complémentaires. Le PPF (film de protection peinture) protège des impacts et rayures profondes. Le traitement céramique protège des UV, de la pollution et facilite l'entretien. L'idéal est de combiner les deux : PPF sur la face avant, céramique sur le reste de la carrosserie."
                    ]
                ]
            ]
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

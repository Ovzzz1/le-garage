<?php
/**
 * detecteur-traceur-gps-voiture.php
 */

$page_title       = "Détecteur de Traceur GPS Voiture : Comment Trouver un Mouchard (2026)";
$page_description = "Un traceur GPS espion caché sur votre voiture ? Découvrez les signes d'alerte, où il se cache, comment le détecter étape par étape, et quoi faire si vous en trouvez un. Guide juridique inclus (Article 226-1).";

$article = [
    'title'          => "Traceur GPS caché sur sa voiture : comment le détecter et quoi faire",
    'subtitle'       => "Signes d'alerte, cachettes, méthodes de détection, recours légaux et gestes concrets : le guide complet 2026 pour savoir si un mouchard espion est dissimulé sur votre véhicule.",
    'category'       => 'entretien',
    'category_name'  => 'Entretien & Réparation',
    'category_color' => '#dc2626',
    'tags'           => ['Sécurité Auto', 'GPS', 'Vie Privée', 'Guide Pratique'],
    'image'          => '/Image/traceur-gps-voiture-detecteur1.webp',
    'date'           => '30 Mars 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Diagnostic & Sécurité Auto',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Mécanicien diagnostiqueur avec plus de 15 ans de terrain, Arnaud a déjà retiré plusieurs traceurs GPS lors d'inspections sous caisse. Il partage ici les vraies méthodes de pros pour protéger votre vie privée.",
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

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Petit traceur GPS noir dissimulé par un aimant sous le châssis métallique d'une voiture"
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
                    <li><strong>Le signal n°1 en 2026 :</strong> Une <strong>notification automatique sur votre smartphone</strong> (iOS et Android) vous avertit si un AirTag ou une balise Bluetooth inconnue se déplace avec vous.</li>
                    <li><strong>Deux types à connaître :</strong> Le <strong>traceur actif</strong> (GSM/4G) émet des ondes radio détectables par scanner. Le <strong>traceur passif</strong> n'émet rien — seule l'inspection physique ou un détecteur magnétique peut le trouver.</li>
                    <li><strong>Cachette n°1 :</strong> La <strong>prise OBD-II</strong> sous le volant côté conducteur. Toujours alimentée, invisible en un coup d'œil. Premier endroit à vérifier.</li>
                    <li><strong>C'est un délit :</strong> Poser un traceur sans consentement est puni par l'<strong>Article 226-1 du Code pénal</strong> — jusqu'à 2 ans de prison et 60 000 € d'amende si c'est un conjoint ou ex-partenaire.</li>
                    <li><strong>Le hack de l'expert :</strong> Si vous en trouvez un, ne le touchez pas à mains nues. <strong>Photographiez en place</strong>, mettez des gants, enveloppez-le dans du papier aluminium sans l'éteindre, puis déposez plainte.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Au sommaire de ce guide</div>
                <ol>
                    <li><a href="#signes-alerte">Les signes qui indiquent la présence d'un traceur GPS</a></li>
                    <li><a href="#actif-passif">Traceur actif ou passif : quelle différence pour la détection ?</a></li>
                    <li><a href="#ou-se-cache">Où se cache un traceur GPS sur une voiture ? (Checklist)</a></li>
                    <li><a href="#comment-detecter">Comment détecter un traceur GPS — méthode étape par étape</a></li>
                    <li><a href="#quel-detecteur">Quel détecteur de mouchard GPS utiliser ?</a></li>
                    <li><a href="#illegal-que-faire">C'est illégal ? Que faire si vous en trouvez un ?</a></li>
                    <li><a href="#faq">FAQ — Vos questions sur les traceurs espions</a></li>
                    <li><a href="#inspection-pro">Faire inspecter votre voiture sur pont par un expert</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Un traceur GPS peut peser moins de 30 grammes, se fixer en deux secondes avec un aimant puissant sous votre voiture, et transmettre votre position en temps réel à n'importe qui dans le monde. Avant de vous expliquer comment le détecter, voici la bonne nouvelle : il existe des méthodes fiables pour le trouver, même sans matériel professionnel. Et si vous en trouvez un, vous avez des droits.</p>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="signes-alerte">Les signes qui indiquent la présence d'un traceur GPS caché</h2>

                <p>Avant même de chercher physiquement, certains signaux peuvent mettre la puce à l'oreille. Voici les indices les plus fréquents :</p>

                <ul>
                    <li><strong>Une notification smartphone (signal n°1 en 2026) :</strong> Depuis fin 2023, iOS <em>et</em> Android détectent automatiquement les balises inconnues (AirTag Apple, SmartTag Samsung...) qui se déplacent avec vous. Si l'alerte "Un accessoire inconnu se déplace avec vous" apparaît régulièrement, prenez-la au sérieux.</li>
                    <li><strong>Batterie voiture qui se vide anormalement vite :</strong> Un traceur câblé sur la batterie crée une consommation parasite permanente. Des difficultés de démarrage récurrentes sans raison mécanique connue sont un signal d'alerte.</li>
                    <li><strong>Un proche qui semble toujours connaître vos déplacements :</strong> Un ex-conjoint, un associé ou un membre de la famille qui anticipe systématiquement vos allées et venues. C'est souvent le premier signe de contrôle coercitif.</li>
                    <li><strong>Voiture d'occasion achetée récemment :</strong> Les traceurs laissés par d'anciens propriétaires sont plus fréquents qu'on ne le croit. Vérifiez systématiquement tout véhicule acheté d'occasion.</li>
                    <li><strong>Séparation conflictuelle ou litige en cours :</strong> Divorce, harcèlement, garde d'enfants tendue, conflit professionnel — le risque est statistiquement plus élevé dans ces contextes.</li>
                    <li><strong>Bruit ou vibration inhabituel sous le plancher :</strong> Certains traceurs haut de gamme émettent un léger bip d'initialisation au démarrage ou un léger bourdonnement électronique.</li>
                </ul>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="actif-passif">Traceur GPS actif ou passif : quelle différence pour la détection ?</h2>

                <p>Comprendre la technologie est la première étape pour choisir la bonne méthode de détection. Ces deux types de traceurs ne se trouvent pas de la même façon.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Critère</th>
                                <th>Traceur Actif (GSM/4G)</th>
                                <th>Traceur Passif (Enregistreur)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Fonctionnement</strong></td>
                                <td>Envoie la position en temps réel via réseau GSM/4G</td>
                                <td>Stocke les données GPS en mémoire interne (carte SD)</td>
                            </tr>
                            <tr>
                                <td><strong>Alimentation</strong></td>
                                <td>Câblé sur batterie voiture ou prise OBD — actif en permanence</td>
                                <td>Batterie autonome (5 jours à 7 mois selon le modèle)</td>
                            </tr>
                            <tr>
                                <td><strong>Détectable au scanner RF ?</strong></td>
                                <td><strong>Oui</strong> — émet des ondes GSM/4G détectables</td>
                                <td><strong>Non</strong> — n'émet aucune onde en mode enregistrement</td>
                            </tr>
                            <tr>
                                <td><strong>Détectable au détecteur magnétique ?</strong></td>
                                <td>Oui si fixé par aimant</td>
                                <td><strong>Oui</strong> — l'aimant de fixation est toujours détectable</td>
                            </tr>
                            <tr>
                                <td><strong>Récupération des données</strong></td>
                                <td>À distance depuis n'importe où dans le monde</td>
                                <td>Le poseur doit venir physiquement récupérer le traceur</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <blockquote class="art-blockquote">
                    Le conseil du Garage Expert : si vous avez un doute, ne comptez pas uniquement sur un scanner RF. Un traceur passif ou en veille est totalement silencieux électroniquement. L'inspection physique et le détecteur magnétique sont les seules méthodes universelles.
                </blockquote>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="ou-se-cache">Où se cache un traceur GPS sur une voiture ?</h2>

                <p>Un traceur bien posé se fixe dans un endroit à l'abri des regards, protégé des intempéries, et suffisamment proche d'une masse métallique pour tenir avec l'aimant. Voici les cachettes les plus fréquentes.</p>

                <!-- IMAGE INFOGRAPHIE CACHETTES -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/traceur-gps-voiture-detecteur2.webp"
                         alt="Schéma des cachettes fréquentes d'un traceur GPS sur un véhicule : passages de roues, prise OBD-II, pare-chocs, châssis"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        Les zones surlignées indiquent les emplacements les plus fréquemment utilisés pour dissimuler un traceur GPS ou une balise espion.
                    </figcaption>
                </figure>

                <h3>À l'intérieur de l'habitacle</h3>
                <ul>
                    <li><strong>La prise OBD-II (sous le volant, côté conducteur) :</strong> La cachette n°1. Un traceur OBD se branche en 2 secondes, est alimenté en permanence et reste invisible à première vue.</li>
                    <li><strong>Sous les sièges avant et arrière :</strong> Fixé sous le rail métallique, un traceur sur batterie peut rester là des mois sans être remarqué.</li>
                    <li><strong>Dans le coffre :</strong> Sous le plancher, derrière les parois plastiques latérales ou sous la roue de secours.</li>
                    <li><strong>Derrière la boîte à gants :</strong> Protège totalement des intempéries, nécessite un outil pour démonter mais reste accessible pour quelqu'un qui connaît votre véhicule.</li>
                </ul>

                <h3>À l'extérieur du véhicule</h3>
                <ul>
                    <li><strong>Sous le châssis métallique :</strong> La cachette extérieure la plus utilisée. Un aimant puissant suffit. Cherchez particulièrement sous le berceau arrière et au-dessus du réservoir.</li>
                    <li><strong>Dans les passages de roues (gardes-boue) :</strong> À l'abri derrière le cache plastique, impossible à voir sans pont élévateur ou miroir télescopique.</li>
                    <li><strong>Derrière les pare-chocs avant et arrière :</strong> L'espace entre la calandre et la tôle est complètement invisible depuis l'extérieur.</li>
                    <li><strong>Dans la trappe à carburant ou l'attelage :</strong> Espace creux, sec, souvent magnétique — moins fréquent mais documenté.</li>
                </ul>

                <!-- ░░░ CHECKLIST INTERACTIVE ░░░ -->
                <div class="gps-checklist" id="gps-checklist" role="region" aria-label="Checklist d'inspection pour traceur GPS">
                    <div class="gps-checklist-header">
                        <span class="gps-checklist-icon" aria-hidden="true">🔍</span>
                        <div>
                            <strong>Checklist d'inspection — Cochez les zones vérifiées</strong>
                            <p>Passez chaque zone en revue et cochez au fur et à mesure de votre inspection.</p>
                        </div>
                    </div>
                    <div class="gps-checklist-progress-bar-wrap" aria-hidden="true">
                        <div class="gps-checklist-progress-bar" id="gps-progress-bar" style="width: 0%"></div>
                    </div>
                    <p class="gps-checklist-progress-label" id="gps-progress-label">0 / 9 zones vérifiées</p>
                    <ul class="gps-checklist-list">
                        <li>
                            <label class="gps-check-item" for="check-obd">
                                <input type="checkbox" id="check-obd" class="gps-check-input">
                                <span class="gps-check-box" aria-hidden="true"></span>
                                <span class="gps-check-text"><strong>Prise OBD-II</strong> — sous le volant, côté conducteur (priorité absolue)</span>
                            </label>
                        </li>
                        <li>
                            <label class="gps-check-item" for="check-siege">
                                <input type="checkbox" id="check-siege" class="gps-check-input">
                                <span class="gps-check-box" aria-hidden="true"></span>
                                <span class="gps-check-text"><strong>Sous les sièges</strong> avant et arrière (rails métalliques)</span>
                            </label>
                        </li>
                        <li>
                            <label class="gps-check-item" for="check-coffre">
                                <input type="checkbox" id="check-coffre" class="gps-check-input">
                                <span class="gps-check-box" aria-hidden="true"></span>
                                <span class="gps-check-text"><strong>Dans le coffre</strong> — fond, côtés et sous la roue de secours</span>
                            </label>
                        </li>
                        <li>
                            <label class="gps-check-item" for="check-chassis">
                                <input type="checkbox" id="check-chassis" class="gps-check-input">
                                <span class="gps-check-box" aria-hidden="true"></span>
                                <span class="gps-check-text"><strong>Sous le châssis</strong> — berceau avant, berceau arrière, au-dessus du réservoir (lampe + miroir)</span>
                            </label>
                        </li>
                        <li>
                            <label class="gps-check-item" for="check-roues">
                                <input type="checkbox" id="check-roues" class="gps-check-input">
                                <span class="gps-check-box" aria-hidden="true"></span>
                                <span class="gps-check-text"><strong>Passages de roues</strong> — derrière les gardes-boue plastiques (4 roues)</span>
                            </label>
                        </li>
                        <li>
                            <label class="gps-check-item" for="check-parechocs">
                                <input type="checkbox" id="check-parechocs" class="gps-check-input">
                                <span class="gps-check-box" aria-hidden="true"></span>
                                <span class="gps-check-text"><strong>Derrière les pare-chocs</strong> avant et arrière</span>
                            </label>
                        </li>
                        <li>
                            <label class="gps-check-item" for="check-trappe">
                                <input type="checkbox" id="check-trappe" class="gps-check-input">
                                <span class="gps-check-box" aria-hidden="true"></span>
                                <span class="gps-check-text"><strong>Trappe à carburant</strong> et zone d'attelage (si présent)</span>
                            </label>
                        </li>
                        <li>
                            <label class="gps-check-item" for="check-bluetooth">
                                <input type="checkbox" id="check-bluetooth" class="gps-check-input">
                                <span class="gps-check-box" aria-hidden="true"></span>
                                <span class="gps-check-text"><strong>Scan Bluetooth smartphone</strong> — moteur éteint, clés retirées (app détection AirTag / balise inconnue)</span>
                            </label>
                        </li>
                        <li>
                            <label class="gps-check-item" for="check-interieur">
                                <input type="checkbox" id="check-interieur" class="gps-check-input">
                                <span class="gps-check-box" aria-hidden="true"></span>
                                <span class="gps-check-text"><strong>Boîte à gants et garnitures de porte</strong> — vérification visuelle intérieure complète</span>
                            </label>
                        </li>
                    </ul>
                    <div class="gps-checklist-result" id="gps-checklist-result" style="display:none;" aria-live="polite">
                        <span>✅</span>
                        <strong>Inspection complète.</strong> Rien trouvé mais le doute persiste ? Une inspection sur pont par un professionnel reste la méthode la plus fiable. <a href="#inspection-pro">En savoir plus →</a>
                    </div>
                </div>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="comment-detecter">Comment détecter un traceur GPS sur sa voiture — 4 étapes clés</h2>

                <p>Procédez dans l'ordre. L'inspection visuelle est la plus rapide, le scanner RF est la plus décisive pour les traceurs actifs.</p>

                <ol>
                    <li>
                        <strong>Étape 1 — L'inspection visuelle (lampe torche + miroir télescopique)</strong><br>
                        Commencez par l'habitacle : vérifiez la prise OBD-II, soulevez les tapis de sol, regardez sous les sièges. Pour l'extérieur, utilisez une lampe torche puissante et un miroir télescopique (moins de 10 € en magasin auto). Balayez le dessous du châssis, les passages de roues et les zones derrière les pare-chocs. Cherchez tout objet qui ne correspond pas à l'aspect d'origine de la voiture : boîtier rectangulaire, antenne ou fil raccordé anormalement.
                    </li>
                    <li>
                        <strong>Étape 2 — Le scan Bluetooth / Wi-Fi depuis votre smartphone</strong><br>
                        Moteur et clés retirés (pour réduire les interférences), lancez une recherche Bluetooth. Sur iPhone, l'app native détecte les AirTags. Sur Android, utilisez "Détecteur de trackers" (app officielle Google). Tout identifiant inconnu qui réapparaît systématiquement à proximité de votre véhicule mérite investigation.
                    </li>
                    <li>
                        <strong>Étape 3 — Le scan avec un détecteur de fréquences RF (bug detector)</strong><br>
                        La méthode la plus efficace contre les traceurs actifs. Sensibilité maximale, balayez lentement l'intérieur et l'extérieur du véhicule à 5-10 cm des surfaces. <em>Astuce de mécanicien :</em> faites rouler la voiture quelques minutes avant le scan — certains traceurs n'émettent que lorsque le véhicule est en mouvement pour économiser la batterie.
                    </li>
                    <li>
                        <strong>Étape 4 — Le scan magnétique sous le châssis</strong><br>
                        Indispensable pour les traceurs passifs et ceux en veille. Un détecteur de champ magnétique capte l'aimant de fixation même si le traceur est complètement éteint. Insistez sur les berceaux avant et arrière, et sur la zone au-dessus du réservoir à carburant.
                    </li>
                </ol>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="quel-detecteur">Quel détecteur de mouchard GPS utiliser ?</h2>

                <!-- IMAGE DETECTEUR RF -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/traceur-gps-voiture-detecteur3.webp"
                         alt="Main tenant un détecteur de fréquences RF pour scanner l'habitacle d'une voiture à la recherche d'un traceur espion"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        Le scanner RF doit être tenu à moins de 10 cm des surfaces pour ne pas manquer les signaux émis par les traceurs actifs à faible puissance.
                    </figcaption>
                </figure>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Type d'appareil</th>
                                <th>Ce qu'il détecte</th>
                                <th>Limites</th>
                                <th>Budget indicatif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Détecteur RF (Radio Fréquence)</strong></td>
                                <td>Ondes GSM, 3G, 4G émises par les traceurs actifs en transmission</td>
                                <td>Inefficace si le traceur est en veille ou passif. Faux positifs possibles (téléphones voisins)</td>
                                <td><strong>20 € – 60 €</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Détecteur magnétique (sonde)</strong></td>
                                <td>L'aimant de fixation du traceur, même éteint ou passif</td>
                                <td>Ne détecte que les traceurs fixés par aimant (certains sont vissés ou collés)</td>
                                <td><strong>15 € – 40 €</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Scanner multifonctions (bug detector)</strong></td>
                                <td>RF + Bluetooth + Wi-Fi + infrarouge dans un seul appareil</td>
                                <td>Qualité très variable. Les modèles à moins de 30 € sont peu fiables</td>
                                <td><strong>50 € – 150 €</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Application smartphone</strong></td>
                                <td>Balises Bluetooth (AirTag, SmartTag) via scan natif iOS/Android</td>
                                <td>Ne détecte pas les traceurs GSM/4G. Limité aux protocoles Bluetooth</td>
                                <td><strong>Gratuit</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>Pour un particulier, la combinaison la plus efficace et abordable est : <strong>application smartphone (gratuit) + détecteur RF à 30-50 € + miroir télescopique</strong>. Si ces trois méthodes ne donnent rien mais que le doute subsiste, l'inspection sur pont élévateur par un professionnel reste la seule option vraiment exhaustive.</p>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="illegal-que-faire">C'est illégal ? Que faire si vous trouvez un traceur sur votre voiture</h2>

                <h3>Ce que dit la loi — Article 226-1 du Code pénal</h3>

                <p>En France, installer un traceur GPS sur le véhicule d'une personne sans son consentement constitue une <strong>atteinte à la vie privée</strong>, punie par le Code pénal. Aucune exception : même si la voiture appartient à 50 % à votre conjoint, la géolocalisation sans accord explicite est un délit.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Situation</th>
                                <th>Peine encourrue</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Traceur posé sans consentement (cas général)</td>
                                <td><strong>1 an de prison et 45 000 € d'amende</strong></td>
                            </tr>
                            <tr>
                                <td>Auteur est le conjoint, ex-conjoint ou partenaire de PACS</td>
                                <td><strong>2 ans de prison et 60 000 € d'amende</strong> (circonstance aggravante)</td>
                            </tr>
                            <tr>
                                <td>Assurance auto avec consentement écrit du conducteur</td>
                                <td>Légal (contrats "Pay how you drive")</td>
                            </tr>
                            <tr>
                                <td>Employeur sur véhicule de société avec accord du salarié (CNIL)</td>
                                <td>Légal sous conditions</td>
                            </tr>
                            <tr>
                                <td>Parent sur véhicule d'un enfant mineur</td>
                                <td>Légal sous conditions</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>Texte officiel complet : <a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000049312755" target="_blank" rel="noopener noreferrer nofollow external">Article 226-1 du Code pénal — Legifrance.gouv.fr</a> (version en vigueur 2024, Loi n°2024-247).</p>

                <h3>Les 5 gestes qui sauvent — La checklist du flagrant délit</h3>

                <!-- IMAGE GANTS + PAPIER ALU -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/traceur-gps-voiture-detecteur4.webp"
                         alt="Mains avec gants de protection bleus manipulant un traceur GPS et l'enveloppant dans du papier aluminium pour couper le signal"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        Envelopper le traceur dans du papier aluminium (technique de cage de Faraday) coupe le signal GPS et GSM sans détruire la preuve — le poseur perd la localisation sans savoir que vous l'avez trouvé.
                    </figcaption>
                </figure>

                <ol>
                    <li>
                        <strong>Ne touchez pas à mains nues.</strong> Les empreintes digitales présentes sur le boîtier peuvent identifier le poseur. Enfilez des gants (gants de vaisselle, gants de mécanicien) avant toute manipulation.
                    </li>
                    <li>
                        <strong>Figez la scène — Photographiez avant de toucher.</strong> Photo large pour montrer l'emplacement sur le véhicule, photo macro pour identifier la marque ou le numéro de série. Filmez en énonçant la date à voix haute (les données EXIF du smartphone horodatent la preuve automatiquement).
                    </li>
                    <li>
                        <strong>Le hack de l'expert — La technique Faraday.</strong> Si vous devez retirer le traceur, enveloppez-le sans l'éteindre dans plusieurs couches de <strong>papier aluminium ménager</strong> ou glissez-le dans une pochette anti-ondes. Signal GPS et GSM bloqués — le poseur perd la localisation et croit à une zone blanche. Vous gagnez du temps pour aller déposer plainte en toute discrétion.
                    </li>
                    <li>
                        <strong>Ne confrontez pas la personne.</strong> Elle pourrait effacer les données de son téléphone, nier et compliquer l'enquête. Laissez les forces de l'ordre gérer la confrontation.
                    </li>
                    <li>
                        <strong>Déposez plainte sans attendre.</strong> Rendez-vous au commissariat ou à la gendarmerie. Mentionnez explicitement l'Article 226-1 du Code pénal. Les données de localisation enregistrées sur le traceur peuvent être réquisitionnées par les enquêteurs — c'est une preuve supplémentaire contre l'auteur.
                    </li>
                </ol>

                <p>Guide officiel pour déposer plainte : <a href="https://www.service-public.fr/particuliers/vosdroits/F1435" target="_blank" rel="noopener noreferrer nofollow external">Porter plainte — Service-Public.fr</a>.</p>
                <p>Contexte de violence conjugale ou de harcèlement : <a href="https://arretonslesviolences.gouv.fr/" target="_blank" rel="noopener noreferrer nofollow external">Arrêtons les violences — numéro national 3919 (gratuit, 24h/24)</a>.</p>

            </div><!-- .art-content -->

            <!-- ═══════════ E-E-A-T AUTHOR BOX ═══════════ -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>"
                     alt="<?php echo $article['author']; ?>"
                     class="art-author-avatar"
                     width="80" height="80">
                <div class="art-author-info">
                    <span class="art-author-label">Le Mot du Mécanicien</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir toute la rédaction</a>
                </div>
            </div>

            <!-- ═══════════ FAQ ═══════════ -->
            <div class="art-conclusion">
                <h2 id="faq">FAQ — Vos questions sur les traceurs GPS espions</h2>

                <h3>Comment savoir si ma voiture est géolocalisée de série par le constructeur ?</h3>
                <p>De nombreux véhicules modernes intègrent un module de géolocalisation d'usine (eCall européen obligatoire depuis 2018, services connectés constructeur). Ces dispositifs sont <strong>légaux, documentés dans votre manuel</strong> et accessibles uniquement par le constructeur ou vous. Consultez la section "Connectivité" de votre manuel ou appelez le service client de la marque avec votre numéro VIN pour vérifier. Ce ne sont pas des traceurs espions.</p>

                <h3>Peut-on détecter un AirTag Apple ou une balise Bluetooth dans sa voiture ?</h3>
                <p>Oui, et c'est désormais automatique. Sur iPhone, iOS envoie une notification si un AirTag inconnu se déplace avec vous depuis plus de 8 à 10 heures. Sur Android, Google propose depuis 2023 la même protection via l'app "Détecteur de trackers". Si l'alerte se déclenche régulièrement, lancez la procédure "Trouver l'objet" — l'application vous guidera vers la source sonore du traceur via son buzzer intégré.</p>

                <h3>Un brouilleur GPS est-il légal pour se protéger ?</h3>
                <p>Non. Les brouilleurs GPS (jammers) sont <strong>strictement interdits en France</strong> par l'ANFR. Ils perturbent non seulement votre traceur, mais aussi les GPS de navigation de tous les véhicules alentour et les communications d'urgence. Utilisation, vente et détention sont passibles d'amendes lourdes et de peines d'emprisonnement. Ne pas y avoir recours.</p>

                <h3>Mon assurance peut-elle installer un traceur sur ma voiture sans me prévenir ?</h3>
                <p>Non. Toute géolocalisation dans le cadre d'un contrat d'assurance nécessite votre <strong>consentement écrit préalable</strong>, conformément au RGPD et aux exigences de la CNIL. Ce type de contrat ("Pay how you drive") est clairement identifié dans les conditions générales. Sans clause signée de géolocalisation, votre assureur ne peut pas légalement tracer votre véhicule.</p>

                <h3>Combien coûte un bon détecteur de traceur GPS ?</h3>
                <p>Pour un usage particulier, un détecteur RF fiable se trouve entre <strong>30 et 80 €</strong>. En dessous de 20 €, les faux positifs sont trop nombreux. Les scanners multifonctions (RF + magnétique + Bluetooth) de bonne qualité débutent autour de <strong>70 à 120 €</strong>. L'application smartphone reste gratuite et suffit pour les balises Bluetooth type AirTag.</p>

                <h3>J'ai trouvé un traceur — la personne peut-elle savoir que je l'ai découvert ?</h3>
                <p>Si le traceur est toujours actif et en place, <strong>oui</strong>. C'est pourquoi la <strong>technique Faraday (papier aluminium)</strong> est essentielle : le traceur enveloppé ne peut plus émettre, le poseur pense à une zone sans réseau ou une panne de batterie. Vous gagnez du temps pour aller déposer plainte sans être géolocalisé et sans alerter l'auteur.</p>
            </div>

            <!-- ═══════════ CTA INSPECTION PRO ═══════════ -->
            <div id="inspection-pro" style="background: linear-gradient(135deg, #1f2937 0%, #374151 100%); border-radius: 16px; padding: 2rem; margin: 2.5rem 0; color: white;">
                <h2 style="color: white; margin-top: 0;">Le doute persiste ? Faites inspecter votre véhicule sur pont par un expert</h2>

                <!-- IMAGE PONT ELEVATEUR -->
                <figure style="margin: 1.5rem 0 1.5rem;">
                    <img src="/Image/traceur-gps-voiture-detecteur5.webp"
                         alt="Mécanicien professionnel inspectant le dessous d'une voiture sur un pont élévateur hydraulique dans un garage moderne"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #9ca3af; margin-top: 0.5rem; font-style: italic;">
                        Seul un pont élévateur permet d'inspecter l'intégralité du dessous de caisse — les zones inaccessibles avec un simple miroir au sol ne laissent aucune chance à un traceur de passer inaperçu.
                    </figcaption>
                </figure>

                <p style="color: #d1d5db;">L'inspection au miroir télescopique a ses limites. Certains traceurs sont dissimulés très haut dans les passages de roues, collés sur le dessus du réservoir, cachés derrière les caches plastiques du compartiment moteur ou vissés dans des zones totalement inaccessibles depuis le sol.</p>
                <p style="color: #d1d5db;"><strong style="color:white;">Au Garage Expert Auto</strong>, nous pouvons monter votre véhicule sur pont élévateur pour une inspection complète et sécurisée du châssis avec baladeur professionnel. Notre équipe connaît les emplacements de fixation les plus fréquents et dispose des outils de détection adaptés. <strong style="color:white;">Aucun traceur ne passe inaperçu sur un pont.</strong></p>
                <a href="/contact"
                   style="display: inline-block; background: #dc2626; color: white; font-weight: 600; padding: 0.9rem 2rem; border-radius: 8px; text-decoration: none; margin-top: 0.5rem; transition: background 0.2s;">
                    Prendre rendez-vous pour une inspection →
                </a>
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
                        <div class="art-sidebar-block-title">Sur le même sujet</div>
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
                        <div class="art-sidebar-block-title">Information Légale</div>
                        <p style="font-size: 0.9em; color:#555; line-height:1.5;">Poser un traceur GPS sans consentement est un délit en France (Art. 226-1 Code pénal). En cas de découverte, appelez le 17 ou rendez-vous au commissariat.</p>
                        <a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000049312755"
                           target="_blank" rel="noopener noreferrer nofollow external"
                           style="font-size:0.85em; color:#dc2626;">Consulter l'Article 226-1 →</a>
                    </div>
                <?php endif; ?>

            </div>
        </aside>

    </div><!-- .art-layout-wrapper -->
</article>

<!-- ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ -->
<!-- CHECKLIST INTERACTIVE — CSS + JS (auto-suffisant) -->
<!-- ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░ -->
<style>
/* ── GPS Checklist ── */
.gps-checklist {
    background: #f9fafb;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    padding: 1.5rem;
    margin: 2rem 0;
}
.gps-checklist-header {
    display: flex;
    gap: 1rem;
    align-items: flex-start;
    margin-bottom: 1rem;
}
.gps-checklist-icon { font-size: 1.8rem; flex-shrink: 0; }
.gps-checklist-header strong { font-size: 1rem; color: #111827; display: block; margin-bottom: 0.2rem; }
.gps-checklist-header p { font-size: 0.875rem; color: #6b7280; margin: 0; }
.gps-checklist-progress-bar-wrap {
    background: #e5e7eb;
    border-radius: 9999px;
    height: 8px;
    margin-bottom: 0.4rem;
    overflow: hidden;
}
.gps-checklist-progress-bar {
    background: #dc2626;
    height: 100%;
    border-radius: 9999px;
    transition: width 0.3s ease;
}
.gps-checklist-progress-label {
    font-size: 0.85rem;
    color: #6b7280;
    margin-bottom: 1rem;
}
.gps-checklist-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}
.gps-check-item {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    cursor: pointer;
    padding: 0.65rem 0.9rem;
    border-radius: 8px;
    transition: background 0.2s;
    user-select: none;
}
.gps-check-item:hover { background: #fff; }
.gps-check-input { display: none; }
.gps-check-box {
    width: 22px;
    height: 22px;
    min-width: 22px;
    border: 2px solid #d1d5db;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.2s;
    background: #fff;
    position: relative;
}
.gps-check-input:checked ~ .gps-check-box {
    background: #dc2626;
    border-color: #dc2626;
}
.gps-check-input:checked ~ .gps-check-box::after {
    content: '';
    position: absolute;
    left: 4px; top: 2px;
    width: 9px; height: 5px;
    border-left: 2px solid #fff;
    border-bottom: 2px solid #fff;
    transform: rotate(-45deg);
}
.gps-check-input:checked ~ .gps-check-text {
    color: #9ca3af;
    text-decoration: line-through;
}
.gps-check-text { font-size: 0.9375rem; color: #374151; line-height: 1.4; }
.gps-checklist-result {
    background: #dcfce7;
    border: 1px solid #bbf7d0;
    border-radius: 8px;
    padding: 1rem;
    margin-top: 1rem;
    align-items: center;
    gap: 0.7rem;
    font-size: 0.95rem;
    color: #166534;
}
.gps-checklist-result a { color: #166534; font-weight: 600; }
</style>

<script>
(function () {
    var checkboxes   = document.querySelectorAll('.gps-check-input');
    var progressBar  = document.getElementById('gps-progress-bar');
    var progressLabel = document.getElementById('gps-progress-label');
    var resultBox    = document.getElementById('gps-checklist-result');
    var total        = checkboxes.length;

    if (!total || !progressBar || !progressLabel || !resultBox) return;

    checkboxes.forEach(function (cb) {
        cb.addEventListener('change', function () {
            var checked = document.querySelectorAll('.gps-check-input:checked').length;
            var pct     = Math.round((checked / total) * 100);
            progressBar.style.width   = pct + '%';
            progressLabel.textContent = checked + ' / ' + total + ' zones vérifiées';
            resultBox.style.display   = (checked === total) ? 'flex' : 'none';
        });
    });
}());
</script>

<!-- Schema JSON-LD (Article + FAQPage) -->
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
            "description"   => $page_description,
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
                    "url"    => "https://garageraymond.fr/Image/logo%20-Le%20garage%20expert%20Auto.png",
                    "width"  => "600",
                    "height" => "60"
                ]
            ]
        ],
        [
            "@type"      => "FAQPage",
            "mainEntity" => [
                [
                    "@type"          => "Question",
                    "name"           => "Comment savoir si ma voiture est géolocalisée de série par le constructeur ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Les véhicules modernes intègrent souvent un module eCall (obligatoire en Europe depuis 2018) ou des services connectés constructeur. Ces dispositifs sont légaux et documentés dans le manuel d'utilisation. Consultez la section Connectivité de votre manuel ou appelez le service client de la marque avec votre numéro VIN. Ce ne sont pas des traceurs espions."
                    ]
                ],
                [
                    "@type"          => "Question",
                    "name"           => "Peut-on détecter un AirTag Apple ou une balise Bluetooth cachée dans sa voiture ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Oui. Sur iPhone, iOS envoie automatiquement une notification si un AirTag inconnu se déplace avec vous depuis plus de 8 à 10 heures. Sur Android, l'application Détecteur de trackers (Google, 2023) offre la même protection native et gratuite."
                    ]
                ],
                [
                    "@type"          => "Question",
                    "name"           => "Un brouilleur GPS est-il légal pour se protéger d'un traceur ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Non. Les brouilleurs GPS sont strictement interdits en France par l'ANFR. Ils perturbent les communications d'urgence et les GPS de navigation. Leur utilisation, vente et détention sont passibles d'amendes lourdes et d'emprisonnement."
                    ]
                ],
                [
                    "@type"          => "Question",
                    "name"           => "Que faire si je trouve un traceur GPS sur ma voiture ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Ne touchez pas à mains nues. Photographiez l'emplacement exact. Enveloppez le traceur dans du papier aluminium sans l'éteindre (technique Faraday) pour couper le signal sans détruire la preuve. Rendez-vous au commissariat pour déposer plainte pour atteinte à la vie privée (Article 226-1 du Code pénal)."
                    ]
                ],
                [
                    "@type"          => "Question",
                    "name"           => "Combien coûte un bon détecteur de traceur GPS ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Un détecteur RF fiable coûte entre 30 et 80 euros. Les scanners multifonctions combinant RF, détection magnétique et Bluetooth se trouvent entre 70 et 150 euros. L'application smartphone reste gratuite pour détecter les balises Bluetooth type AirTag."
                    ]
                ],
                [
                    "@type"          => "Question",
                    "name"           => "Mon assurance peut-elle installer un traceur GPS sur ma voiture sans me prévenir ?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text"  => "Non. Toute géolocalisation dans un contrat d'assurance nécessite votre consentement écrit préalable, conformément au RGPD et aux exigences de la CNIL. Ce type de contrat dit Pay how you drive est clairement identifié dans les conditions générales signées."
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


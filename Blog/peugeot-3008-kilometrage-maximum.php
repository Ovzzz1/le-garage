<?php
// published: 2026-04-20 16:00
/**
 * peugeot-3008-kilometrage-maximum.php
 */

$page_title       = "Peugeot 3008 kilométrage maximum : durée de vie réelle selon le moteur (2026)";
$page_description = "Peugeot 3008 kilométrage maximum : 150 000 km pour le PureTech, 400 000 km pour le BlueHDi. Guide moteur par moteur, pannes à anticiper et simulateur garder/vendre.";

$article = [
    'title'          => 'Peugeot 3008 kilométrage maximum : durée de vie réelle PureTech vs BlueHDi',
    'subtitle'       => "150 000 km pour le 1.2 PureTech, 400 000 km pour le 2.0 BlueHDi — la durée de vie d'un Peugeot 3008 dépend entièrement du bloc sous le capot. Guide complet pour acheter, entretenir et revendre au bon moment.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Peugeot 3008', 'Kilométrage Maximum', 'Fiabilité Moteur', 'Achat Occasion SUV', 'BlueHDi PureTech'],
    'image'          => '/Image/peugeot-3008-kilometrage-maximum1.webp',
    'date'           => '20 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Spécialiste Achat & Occasion',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud suit le marché de l'occasion depuis plus de 20 ans. Il connaît toutes les clauses abusives et les tours de passe-passe des vendeurs professionnels — et il vous explique comment vous en prémunir.",
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

<!-- CSS spécifique article : simulateur garder/vendre -->
<style>
    .sim-wrap {
        background: #1a1a2e;
        border: 1px solid #2a2a3e;
        border-radius: 12px;
        padding: 28px 32px;
        margin: 32px 0;
    }
    .sim-wrap h3 {
        margin: 0 0 6px 0;
        color: #e9d5ff;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: .07em;
    }
    .sim-wrap > p {
        margin: 0 0 24px 0;
        color: #aaa;
        font-size: .9rem;
    }
    .sim-km-display {
        display: block;
        text-align: center;
        font-size: 2rem;
        font-weight: 800;
        color: #7c3aed;
        margin-bottom: 12px;
        letter-spacing: -.02em;
    }
    .sim-slider {
        width: 100%;
        height: 8px;
        border-radius: 4px;
        background: #2a2a3e;
        outline: none;
        cursor: pointer;
        -webkit-appearance: none;
        appearance: none;
        margin-bottom: 28px;
    }
    .sim-slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #7c3aed;
        cursor: pointer;
        border: 3px solid #fff;
        box-shadow: 0 2px 8px rgba(124,58,237,.4);
    }
    .sim-slider::-moz-range-thumb {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #7c3aed;
        cursor: pointer;
        border: 3px solid #fff;
    }
    .sim-cards {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        margin-bottom: 14px;
    }
    .sim-card {
        background: #0f0f1a;
        border: 1px solid #2a2a3e;
        border-radius: 8px;
        padding: 16px 18px;
    }
    .sim-card-label {
        font-size: .75rem;
        color: #888;
        text-transform: uppercase;
        letter-spacing: .08em;
        margin-bottom: 6px;
    }
    .sim-card-val {
        font-size: 1.05rem;
        font-weight: 700;
        color: #fff;
    }
    .sim-card-val.high   { color: #4ade80; }
    .sim-card-val.medium { color: #fb923c; }
    .sim-card-val.low    { color: #f87171; }
    .sim-advice {
        background: #0f0f1a;
        border-left: 4px solid #7c3aed;
        border-radius: 0 8px 8px 0;
        padding: 16px 20px;
        color: #ccc;
        font-size: .9rem;
        line-height: 1.6;
    }
    .sim-advice strong { color: #e9d5ff; }
    @media (max-width: 600px) {
        .sim-cards { grid-template-columns: 1fr; }
    }
</style>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Courroie de distribution humide du moteur Peugeot 1.2 PureTech effilochée avec débris d'huile"
             class="art-hero-bg"
             width="1200" height="675" decoding="async">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/occasion"><?php echo $article['category_name']; ?></a>
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
                    <li><strong>Kilométrage maximum selon le moteur :</strong> environ 150 000 km pour le 1.2 PureTech (courroie humide), 200 000 km pour le 1.6 HDi, jusqu'à 400 000 km pour le 2.0 BlueHDi bien suivi.</li>
                    <li><strong>Moteur à fuir :</strong> le 1.5 BlueHDi avant 2023 avec sa chaîne de distribution 7 mm — vérifiez que le kit renforcé 8 mm a été posé.</li>
                    <li><strong>Seuil psychologique :</strong> au-delà de 120 000 km, la décote est brutale sur le marché de l'occasion.</li>
                    <li><strong>Pannes tueuses de budget :</strong> réservoir AdBlue (1 200 €), distribution, FAP saturé — à anticiper entre 120 000 et 180 000 km.</li>
                    <li><strong>Astuce AdBlue :</strong> référence bouchon 98 421 167 80 — le détail qui sauve le réservoir.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#fiabilite-moteur">Fiabilité moteur : quels blocs atteignent les 300 000 km ?</a></li>
                    <li><a href="#modeles-acheter">Quel modèle acheter et lesquels éviter ?</a></li>
                    <li><a href="#timing-revente">Revendre votre 3008 : le timing parfait</a></li>
                    <li><a href="#simulateur">Simulateur : faut-il garder ou vendre ?</a></li>
                    <li><a href="#pannes-150k">Le mur des 150 000 km : les 3 pannes à anticiper</a></li>
                    <li><a href="#acheter-150k">Acheter un 3008 à 150 000 km : folie ou bon plan ?</a></li>
                    <li><a href="#faq">FAQ : durée de vie du Peugeot 3008</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Le Peugeot 3008 est le roi des SUV en occasion — mais c'est aussi un véhicule qui cristallise toutes les angoisses mécaniques. Entre les moteurs réputés indestructibles et ceux qui font la une des forums pour des casses prématurées, il est difficile de s'y retrouver en 2026. La réponse courte : comptez environ 150 000 km pour un 1.2 PureTech sans intervention majeure, contre plus de 350 000 km pour un 2.0 BlueHDi bien suivi. Tout dépend du bloc et de l'historique d'entretien.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="fiabilite-moteur">Fiabilité moteur : quels blocs atteignent réellement les 300 000 km ?</h2>

                <p>Pour savoir si votre 3008 est un marathonien ou un sprinter en fin de course, il faut regarder sa fiche technique. Tous les moteurs ne se valent pas chez Stellantis.</p>

                <ul>
                    <li><strong>Le roi de la route : le 2.0 BlueHDi (150/180ch).</strong> C'est le moteur préféré des taxis et des gros rouleurs. Sa conception est robuste, son turbo dimensionné pour durer, et il encaisse les kilomètres sans broncher. Seul bloc de la gamme capable de viser les 400 000 km si les vidanges sont régulières.</li>
                    <li><strong>L'alternative raisonnable : le 1.6 HDi / BlueHDi.</strong> Excellent compromis capable de franchir les 200 000 km sans encombre, mais avec une surveillance accrue sur le système d'injection et l'encrassement du FAP.</li>
                    <li><strong>L'incertitude essence : le 1.2 PureTech.</strong> La fameuse courroie de distribution baigne dans l'huile (courroie humide), ce qui provoque une dégradation prématurée et bouche la crépine. Si vous possédez ce moteur, vous partagez les mêmes inquiétudes que les propriétaires de <a href="/Blog/probleme-moteur-peugeot-2008">Peugeot 2008</a>. Le kilométrage maximum est souvent limité par ce défaut — lisez l'analyse complète sur la <a href="/Blog/moteur-1-6-puretech-fiabilite-avis">fiabilité du moteur PureTech</a> avant d'acheter.</li>
                </ul>

                <img src="/Image/peugeot-3008-kilometrage-maximum1.webp" alt="Gros plan moteur Peugeot 1.2 PureTech avec courroie de distribution humide effilochée" width="900" height="506" loading="lazy">

                <!-- ══════════════════════════════════ -->
                <h2 id="modeles-acheter">Peugeot 3008 d'occasion : quel modèle acheter et lesquels éviter ?</h2>

                <ul>
                    <li><strong>Alerte : le piège du 1.5 BlueHDi avant 2023.</strong> Ce moteur a souffert d'une chaîne de distribution entre les arbres à cames trop fine (7 mm). Si elle casse, le moteur est détruit. À moins que le vendeur ne prouve le passage au kit de distribution renforcé (8 mm), c'est un achat risqué au-delà de 100 000 km.</li>
                    <li><strong>Le bon plan caché : le 3008 Phase 1 (2009-2016).</strong> Design daté, mais les versions équipées du 2.0 HDi 150ch sont plus rustiques. Si le châssis ne présente pas de <a href="/Blog/symptome-mauvaise-masse-voiture">symptôme de mauvaise masse</a>, c'est une valeur sûre pour viser les 300 000 km.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="timing-revente">Revendre votre Peugeot 3008 : le timing parfait</h2>

                <ul>
                    <li><strong>Le seuil critique des 120 000 km.</strong> C'est la barrière psychologique des acheteurs. À 119 000 km votre voiture se vend encore bien ; à 125 000 km elle subit une décote brutale car les gros entretiens pointent leur nez.</li>
                    <li><strong>Arbitrage réparation vs vente.</strong> Si le réservoir AdBlue lâche ou si la distribution est à refaire, les frais montent à 2 000 €. Sur un véhicule qui en vaut encore 10 000 €, c'est acceptable. En dessous, l'investissement devient discutable.</li>
                    <li><strong>L'effet PureTech.</strong> La méfiance généralisée sur ce moteur essence impacte la valeur à la revente. Il est souvent plus sage de vendre avant l'apparition d'un <a href="/Blog/voyant-orange-peugeot">voyant orange sur le tableau de bord</a>.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="simulateur">Simulateur : faut-il garder ou vendre votre 3008 ?</h2>

                <div class="sim-wrap">
                    <h3>Analyse instantanée selon votre kilométrage</h3>
                    <p>Déplacez le curseur sur le kilométrage actuel de votre véhicule.</p>

                    <span id="sim-km-display" class="sim-km-display">120 000 km</span>
                    <input type="range" min="0" max="300000" value="120000" step="5000"
                           class="sim-slider" id="sim-slider">

                    <div class="sim-cards">
                        <div class="sim-card">
                            <div class="sim-card-label">Valeur de revente</div>
                            <div class="sim-card-val medium" id="sim-revente">Moyenne</div>
                        </div>
                        <div class="sim-card">
                            <div class="sim-card-label">Alertes entretien</div>
                            <div class="sim-card-val medium" id="sim-entretien">Distribution imminente</div>
                        </div>
                    </div>
                    <div class="sim-advice" id="sim-advice">
                        <strong>Conseil Garage Raymond :</strong> Le seuil psychologique des 120 000 km approche. C'est le moment idéal pour une mise en vente avant les gros frais.
                    </div>
                </div>

                <script>
                (function() {
                    var slider  = document.getElementById('sim-slider');
                    var display = document.getElementById('sim-km-display');
                    var revente = document.getElementById('sim-revente');
                    var entretien = document.getElementById('sim-entretien');
                    var advice  = document.getElementById('sim-advice');

                    function update() {
                        var val = parseInt(slider.value);
                        display.textContent = val.toLocaleString('fr-FR') + ' km';

                        revente.className = 'sim-card-val';
                        if (val < 60000) {
                            revente.classList.add('high');
                            revente.textContent  = 'Très forte';
                            entretien.textContent = 'Entretien classique — aucune alerte';
                            advice.innerHTML = '<strong>Conseil Garage Raymond :</strong> Véhicule en pleine possession de ses moyens. Gardez-le et profitez de la fiabilité.';
                        } else if (val < 120000) {
                            revente.classList.add('medium');
                            revente.textContent  = 'Bonne à moyenne';
                            entretien.textContent = 'Surveiller AdBlue et FAP';
                            advice.innerHTML = '<strong>Conseil Garage Raymond :</strong> Bonne fenêtre de revente avant la barrière psychologique des 120 000 km. Si vous roulez peu, gardez-le encore.';
                        } else if (val < 180000) {
                            revente.classList.add('low');
                            revente.textContent  = 'Faible';
                            entretien.textContent = 'Mur de la distribution';
                            advice.innerHTML = '<strong>Conseil Garage Raymond :</strong> Si les gros travaux ne sont pas faits, vendez maintenant. Si vous les faites faire, emmenez-le au bout — la valeur financière ne remonte plus.';
                        } else {
                            revente.classList.add('low');
                            revente.textContent  = 'Valeur plancher';
                            entretien.textContent = 'Surveillance mécanique totale';
                            advice.innerHTML = '<strong>Conseil Garage Raymond :</strong> La valeur financière est basse. Votre rentabilité est désormais dans la longévité — roulez jusqu\'à la fin si le moteur est sain.';
                        }
                    }

                    slider.addEventListener('input', update);
                    update();
                })();
                </script>

                <!-- ══════════════════════════════════ -->
                <h2 id="pannes-150k">Le mur des 150 000 km : les 3 pannes tueuses de budget</h2>

                <ol>
                    <li><strong>Le réservoir AdBlue (environ 1 200 €) :</strong> Un défaut de mise à l'air crée une dépression qui déforme le réservoir. L'astuce : anticipez en remplaçant le bouchon d'origine par le modèle avec valve intégrée — référence <strong>98 421 167 80</strong>.</li>
                    <li><strong>La distribution :</strong> Qu'il s'agisse de la courroie humide qui s'effiloche (PureTech) ou de la chaîne qui se détend (1.5 HDi), c'est le poste de dépense numéro un vers ce kilométrage.</li>
                    <li><strong>Le FAP et l'Eolys :</strong> Usage urbain intensif = filtre à particules saturé. Le remplissage de la poche de cérine devient inévitable vers 150 000 km.</li>
                </ol>

                <img src="/Image/peugeot-3008-kilometrage-maximum2.webp" alt="Réservoir AdBlue de Peugeot 3008 déformé par mise sous vide et bouchon de remplacement avec valve" width="900" height="506" loading="lazy">

                <!-- ══════════════════════════════════ -->
                <h2 id="acheter-150k">Acheter un 3008 à 150 000 km : folie ou bon plan en 2026 ?</h2>

                <p>Une voiture de 150 000 km avec une distribution neuve et un carnet d'entretien limpide est souvent un bien meilleur plan qu'un exemplaire de 80 000 km "à jour" mais sans intervention majeure effectuée.</p>

                <p><strong>La méthode de la lampe de poche.</strong> Ouvrez le bouchon de remplissage d'huile moteur. Avec une lampe, inspectez l'état de la courroie de distribution visible en dessous. Si elle présente des craquelures ou un aspect gonflé, fuyez — ou négociez une remise immédiate de 1 500 €.</p>

                <img src="/Image/peugeot-3008-kilometrage-maximum3.webp" alt="Lampe torche éclairant l'orifice de remplissage d'huile pour inspecter la courroie de distribution Peugeot" width="900" height="506" loading="lazy">

                <p>Sur le 1.5 BlueHDi, un cliquetis métallique à froid (bruit de machine à coudre) est le signe que la chaîne de liaison s'allonge — arrêtez de rouler immédiatement et consultez un mécanicien.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq">FAQ : durée de vie du Peugeot 3008</h2>

                <p><strong>Record de kilométrage : qui a fait le plus ?</strong><br>
                On trouve des 3008 équipés du 2.0 HDi Phase 1 affichant plus de 450 000 km sur les forums de passionnés. Ce bloc est virtuellement indestructible avec un entretien rigoureux.</p>

                <p><strong>Combien de km avec un plein ?</strong><br>
                Un 3008 BlueHDi 130 permet de parcourir environ 900 à 1 000 km sur autoroute. En essence PureTech, l'autonomie descend entre 650 et 750 km.</p>

                <p><strong>Quelle différence de longévité entre Phase 1 et Phase 2 ?</strong><br>
                La Phase 1 mise sur des blocs lourds mais robustes. La Phase 2 est plus technologique, mais ses moteurs récents demandent un entretien chirurgical pour atteindre les mêmes kilométrages.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Ne boudez pas le 2.0 HDi même s'il est Crit'Air 2. Sa fiabilité à long terme compensera largement les péages urbains par rapport à un PureTech qui peut nécessiter un moteur complet à 120 000 km. Et si vous achetez un 1.5 BlueHDi, exigez la preuve écrite du passage au kit distribution 8 mm avant de sortir le chéquier.</p>
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
                <p>Le Peugeot 3008 est un SUV qui peut vous accompagner très longtemps — à condition de choisir le bon moteur. Le 2.0 BlueHDi est votre meilleure assurance longévité. Le 1.2 PureTech peut être une bonne affaire si la distribution a été faite et l'historique est limpide. Et quel que soit le bloc, la lampe de poche dans le bouchon d'huile reste le test le plus rapide pour éviter les mauvaises surprises.</p>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/occasion"><?php echo $article['category_name']; ?></a></h2>
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
            "datePublished" => "2026-04-20T16:00:00+02:00",
            "dateModified"  => "2026-04-20T16:00:00+02:00",
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
            ],
            "keywords" => "Peugeot 3008 kilométrage maximum, durée de vie Peugeot 3008, fiabilité moteur 3008, 3008 occasion à éviter, 1.2 PureTech courroie humide, 2.0 BlueHDi longévité"
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

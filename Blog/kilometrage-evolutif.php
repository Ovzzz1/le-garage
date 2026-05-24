<?php
// published: 2026-04-20 08:00
/**
 * kilometrage-evolutif.php
 */

$page_title       = "Kilométrage évolutif : définition, limites acceptables et pièges à éviter";
$page_description = "Kilométrage évolutif, peu évolutif, non garanti… Comprendre le jargon des annonces occasion, évaluer l'écart acceptable et sécuriser juridiquement votre achat.";

$article = [
    'title'          => "Kilométrage évolutif sur une annonce : définition et pièges à éviter",
    'subtitle'       => "Évolutif, peu évolutif, non garanti… Ces mentions cachent des niveaux de risque très différents. Matrice de tolérance, calculateur d'écart, modèle de négociation et sécurisation juridique : tout ce qu'il faut savoir avant de signer.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Kilométrage Évolutif', 'Achat Occasion', 'Négociation Auto', 'Cerfa Cession', 'Histovec'],
    'image'          => '/Image/kilometrage-evolutif1.webp',
    'date'           => '20 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Spécialiste Achat & Occasion',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud suit le marché de l'occasion depuis plus de 20 ans. Il connaît toutes les clauses abusives et les tours de passe-passe des vendeurs professionnels — et il vous explique comment vous en prémunir.",
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

<!-- CSS spécifique article : lexique cards, calculateur tolérance, copy box, cerfa focus -->
<style>
    /* ── Lexique grid ── */
    .lex-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 14px;
        margin: 24px 0;
    }
    .lex-card {
        background: #1a1a2e;
        border-left: 4px solid #7c3aed;
        border-radius: 8px;
        padding: 18px 20px;
    }
    .lex-card h4 {
        margin: 0 0 8px 0;
        color: #e9d5ff;
        font-size: .95rem;
        text-transform: uppercase;
        letter-spacing: .06em;
    }
    .lex-card p {
        margin: 0;
        color: #aaa;
        font-size: .88rem;
        line-height: 1.55;
    }
    .lex-card.danger {
        border-left-color: #dc2626;
        animation: pulse-danger 2.4s infinite;
    }
    .lex-card.danger h4 { color: #fca5a5; }
    @keyframes pulse-danger {
        0%   { box-shadow: 0 0 0 0 rgba(220,38,38,.35); }
        60%  { box-shadow: 0 0 0 7px rgba(220,38,38,0); }
        100% { box-shadow: 0 0 0 0 rgba(220,38,38,0); }
    }

    /* ── Calculateur tolérance ── */
    .calc-wrap {
        background: #1a1a2e;
        border: 1px solid #2a2a3e;
        border-radius: 10px;
        padding: 26px 28px;
        margin: 28px 0;
    }
    .calc-wrap h3 {
        margin: 0 0 18px 0;
        color: #e9d5ff;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: .07em;
    }
    .calc-inputs {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
        margin-bottom: 16px;
    }
    .calc-group {
        flex: 1;
        min-width: 180px;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }
    .calc-group label {
        font-size: .85rem;
        color: #aaa;
        font-weight: 600;
    }
    .calc-group input {
        padding: 10px 12px;
        background: #0f0f1a;
        border: 1px solid #3a3a4e;
        border-radius: 6px;
        color: #fff;
        font-size: .95rem;
        outline: none;
        transition: border-color .2s;
    }
    .calc-group input:focus { border-color: #7c3aed; }
    .calc-btn {
        background: #7c3aed;
        color: #fff;
        border: none;
        padding: 10px 24px;
        font-weight: 700;
        border-radius: 6px;
        cursor: pointer;
        font-size: .9rem;
        transition: background .2s;
    }
    .calc-btn:hover { background: #6d28d9; }
    .calc-result {
        display: none;
        margin-top: 16px;
        padding: 14px 18px;
        border-radius: 7px;
        font-weight: 600;
        font-size: .93rem;
        line-height: 1.5;
    }
    .calc-result.vert   { background: rgba(22,163,74,.13); border-left: 4px solid #16a34a; color: #d1fae5; }
    .calc-result.orange { background: rgba(234,88,12,.13);  border-left: 4px solid #ea580c; color: #fed7aa; }
    .calc-result.rouge  { background: rgba(220,38,38,.13);  border-left: 4px solid #dc2626; color: #fee2e2; }
    .calc-result.weird  { background: rgba(124,58,237,.13); border-left: 4px solid #7c3aed; color: #ede9fe; }

    /* ── Copy box ── */
    .copy-box {
        background: #1a1a2e;
        border-left: 4px solid #16a34a;
        border-radius: 8px;
        padding: 20px 22px 50px 22px;
        margin: 24px 0;
        position: relative;
        font-style: italic;
        color: #ccc;
        font-size: .93rem;
        line-height: 1.65;
    }
    .copy-box p { margin: 0; }
    .copy-btn {
        position: absolute;
        bottom: 14px;
        right: 16px;
        background: #16a34a;
        color: #fff;
        border: none;
        padding: 7px 16px;
        font-size: .82rem;
        font-weight: 700;
        border-radius: 5px;
        cursor: pointer;
        transition: background .2s;
        letter-spacing: .03em;
    }
    .copy-btn:hover { background: #15803d; }

    /* ── Cerfa focus ── */
    .cerfa-wrap {
        position: relative;
        display: inline-block;
        max-width: 100%;
        margin: 24px auto;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 16px rgba(0,0,0,.35);
    }
    .cerfa-wrap img { display: block; width: 100%; height: auto; }
    .cerfa-highlight {
        position: absolute;
        top: 45%;
        left: 8%;
        width: 32%;
        height: 8%;
        border: 3px solid #7c3aed;
        background: rgba(124,58,237,.22);
        border-radius: 4px;
        pointer-events: none;
        animation: pulse-cerfa 2.2s infinite;
    }
    .cerfa-label {
        position: absolute;
        top: 37%;
        left: 8%;
        background: #7c3aed;
        color: #fff;
        padding: 4px 10px;
        font-size: .78rem;
        font-weight: 700;
        border-radius: 4px;
        letter-spacing: .04em;
    }
    @keyframes pulse-cerfa {
        0%   { box-shadow: 0 0 0 0 rgba(124,58,237,.45); }
        60%  { box-shadow: 0 0 0 8px rgba(124,58,237,0); }
        100% { box-shadow: 0 0 0 0 rgba(124,58,237,0); }
    }
</style>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Annonce automobile avec mention kilométrage évolutif sur smartphone, tableau de bord en arrière-plan"
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
                    <li><strong>Évolutif ≠ Non garanti :</strong> "Évolutif" est normal (usage quotidien), "Non garanti" est une alerte rouge — l'historique kilométrique est manquant ou suspect.</li>
                    <li><strong>Seuil acceptable :</strong> jusqu'à +500 km c'est normal, +500 à 2 000 km justifie une négociation, au-delà de 2 000 km c'est abusif.</li>
                    <li><strong>Histovec :</strong> vérifiez systématiquement que la courbe kilométrique ne stagne pas ou ne redescend pas — signe évident de compteur trafiqué.</li>
                    <li><strong>Le seul chiffre qui compte légalement :</strong> celui inscrit dans la case D.4 du Cerfa 15776 le jour de la signature.</li>
                    <li><strong>Réflexe photo :</strong> photographiez le tableau de bord le jour de l'essai et comparez le jour de la remise des clés.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#lexique">Le lexique des annonces : évolutif, peu évolutif, non garanti</a></li>
                    <li><a href="#matrice">Quelle est la limite acceptable ?</a></li>
                    <li><a href="#negociation">Le compteur a trop tourné : comment négocier ?</a></li>
                    <li><a href="#histovec">Le réflexe Histovec contre la fraude</a></li>
                    <li><a href="#cerfa">Protection juridique : la case D.4 du Cerfa</a></li>
                    <li><a href="#faq">FAQ : bien acheter sa voiture d'occasion</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Lorsque vous parcourez les annonces sur Leboncoin ou La Centrale, la mention "kilométrage évolutif" apparaît très fréquemment. Pour un acheteur, cela signifie que le vendeur continue d'utiliser la voiture jusqu'à la transaction finale. Mais jusqu'à quel point ? Et que se cache-t-il derrière les autres mentions du même type ? Comprendre ces nuances — et savoir les exploiter à votre avantage — peut vous éviter de mauvaises surprises le jour de la remise des clés.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="lexique">Le lexique des annonces : évolutif, peu évolutif, non garanti</h2>

                <p>Le marché de l'occasion possède son propre jargon. Ces termes n'impliquent pas le même niveau de risque pour l'acheteur — et les confondre peut coûter cher.</p>

                <div class="lex-grid">
                    <div class="lex-card">
                        <h4>Évolutif</h4>
                        <p>Sert de véhicule quotidien (trajets domicile-travail). Le vendeur a besoin de sa voiture en attendant de finaliser. Le compteur peut légitimement prendre quelques centaines de kilomètres.</p>
                    </div>
                    <div class="lex-card">
                        <h4>Peu évolutif</h4>
                        <p>Usage très sporadique — courses du week-end, maintien de charge batterie. L'évolution au compteur sera minime entre l'annonce et la remise des clés.</p>
                    </div>
                    <div class="lex-card">
                        <h4>Non évolutif</h4>
                        <p>Dort au garage. Le chiffre affiché sur l'annonce sera strictement identique le jour de votre essai routier. Situation idéale pour comparer en toute sérénité.</p>
                    </div>
                    <div class="lex-card danger">
                        <h4>Alerte — Non garanti</h4>
                        <p>Le vendeur ne peut pas certifier le chiffre affiché au tableau de bord. Risque élevé de compteur trafiqué ou de changement de bloc moteur. À fuir sauf si le prix est très bas et l'expertise contradictoire garantie.</p>
                    </div>
                </div>

                <img src="/Image/kilometrage-evolutif1.webp" alt="Smartphone affichant une annonce auto avec la mention kilométrage évolutif surlignée" width="900" height="506" loading="lazy">

                <!-- ══════════════════════════════════ -->
                <h2 id="matrice">Quelle est la limite acceptable ?</h2>

                <p>La matrice ci-dessous vous permet d'évaluer objectivement si l'utilisation faite par le vendeur reste dans le cadre du raisonnable — ou si elle justifie une renégociation du prix.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Niveau d'alerte</th>
                                <th>Écart constaté</th>
                                <th>Recommandation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Zone verte</strong></td>
                                <td>+ 0 à 500 km</td>
                                <td>Tout à fait normal. Couvre les déplacements habituels durant les 2 à 3 semaines de mise en vente.</td>
                            </tr>
                            <tr>
                                <td><strong>Zone orange</strong></td>
                                <td>+ 500 à 2 000 km</td>
                                <td>Long trajet ou week-end prolongé effectué avec le véhicule. L'usure des consommables a progressé — ouvrez une négociation.</td>
                            </tr>
                            <tr>
                                <td><strong>Zone rouge</strong></td>
                                <td>Au-delà de 2 000 km</td>
                                <td>Usage abusif. Le véhicule photographié dans l'annonce n'est plus exactement celui que vous achetez. Frais d'entretien à court terme à prévoir.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="calc-wrap">
                    <h3>Évaluez l'annonce instantanément</h3>
                    <div class="calc-inputs">
                        <div class="calc-group">
                            <label for="km-annonce">Kilométrage sur l'annonce</label>
                            <input type="number" id="km-annonce" placeholder="Ex : 80 000">
                        </div>
                        <div class="calc-group">
                            <label for="km-reel">Kilométrage réel (tableau de bord)</label>
                            <input type="number" id="km-reel" placeholder="Ex : 81 200">
                        </div>
                    </div>
                    <button class="calc-btn" onclick="calculerTolerance()">Vérifier la tolérance</button>
                    <div class="calc-result" id="calc-result"></div>
                </div>

                <script>
                function calculerTolerance() {
                    var annonce = parseInt(document.getElementById('km-annonce').value);
                    var reel    = parseInt(document.getElementById('km-reel').value);
                    var box     = document.getElementById('calc-result');

                    box.className = 'calc-result';
                    box.style.display = 'block';

                    if (isNaN(annonce) || isNaN(reel) || annonce < 0 || reel < 0) {
                        box.classList.add('weird');
                        box.innerHTML = 'Veuillez entrer deux valeurs numériques valides.';
                        return;
                    }

                    var diff = reel - annonce;

                    if (diff < 0) {
                        box.classList.add('weird');
                        box.innerHTML = 'Le kilométrage réel est inférieur à celui de l\'annonce. Demandez des explications au vendeur — ce cas est anormal.';
                    } else if (diff <= 500) {
                        box.classList.add('vert');
                        box.innerHTML = 'Zone verte — +' + diff + ' km : évolution tout à fait normale. Aucune inquiétude, pas de négociation nécessaire sur ce point.';
                    } else if (diff <= 2000) {
                        box.classList.add('orange');
                        box.innerHTML = 'Zone orange — +' + diff + ' km : évolution élevée. L\'usure a progressé, il est légitime de négocier le prix à la baisse.';
                    } else {
                        box.classList.add('rouge');
                        box.innerHTML = 'Zone rouge — +' + diff + ' km : évolution abusive. Les frais d\'entretien approchent. Exigez une remise significative ou passez votre chemin.';
                    }
                }
                </script>

                <!-- ══════════════════════════════════ -->
                <h2 id="negociation">Le compteur a trop tourné : comment négocier le prix</h2>

                <p>Si vous constatez lors de l'essai que le véhicule a parcouru beaucoup plus de distance que convenu — zone orange ou rouge — il est légitime de demander une révision à la baisse. Ce surplus kilométrique rapproche la prochaine vidange, use la gomme des pneus et précipite l'apparition d'alertes d'entretien, comme un <a href="/voyant-orange-peugeot">voyant qui s'allume</a> sur le tableau de bord. Utilisez cette formulation directe :</p>

                <div class="copy-box">
                    <p id="nego-text">"Bonjour, l'annonce indiquait 80 000 km, mais le véhicule en affiche désormais 82 500. La prochaine révision approche plus vite que prévu et l'usure générale a progressé. Pour compenser cette décote, je vous propose de baisser le prix de 300 euros."</p>
                    <button class="copy-btn" id="btn-copy" onclick="copierTexte()">Copier le texte</button>
                </div>

                <script>
                function copierTexte() {
                    var texte = document.getElementById('nego-text').innerText.replace(/"/g, '');
                    navigator.clipboard.writeText(texte).then(function() {
                        var btn = document.getElementById('btn-copy');
                        btn.innerText = 'Copie !';
                        btn.style.background = '#15803d';
                        setTimeout(function() {
                            btn.innerText = 'Copier le texte';
                            btn.style.background = '#16a34a';
                        }, 2500);
                    });
                }
                </script>

                <!-- ══════════════════════════════════ -->
                <h2 id="histovec">Le réflexe Histovec contre la fraude au compteur</h2>

                <p>Certains vendeurs malhonnêtes abusent de l'excuse du "kilométrage évolutif" pour justifier une incohérence majeure entre l'annonce et la réalité, masquant parfois une fraude au compteur. Le rapport <strong>Histovec</strong> est votre meilleur bouclier. Ce service gratuit du gouvernement permet de croiser le kilométrage actuel avec l'historique officiel des anciens passages au contrôle technique. Si la courbe kilométrique stagne ou redescend mystérieusement d'une année sur l'autre, fuyez : le compteur a été trafiqué.</p>

                <p>Une anomalie d'affichage ponctuelle peut aussi ressembler à un <a href="/symptome-mauvaise-masse-voiture">symptôme de mauvaise masse voiture</a> — erreur de diagnostic fréquente sur des autos ayant stagné en milieu humide. Mais un écart persistant de plusieurs centaines de kilomètres entre deux visites est une fraude, pas un bug électrique.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="cerfa">Protection juridique : la case D.4 du Cerfa</h2>

                <p>La capture d'écran d'une annonce Leboncoin a une valeur juridique très faible une fois la vente conclue. Le seul chiffre qui fait foi en cas de litige pour tromperie ou vice caché, c'est celui inscrit officiellement dans la <strong>case D.4 du certificat de cession (formulaire Cerfa 15776*02)</strong> le jour de la signature.</p>

                <div style="text-align: center;">
                    <div class="cerfa-wrap">
                        <img src="/Image/kilometrage-evolutif1.webp" alt="Cerfa 15776 de cession de véhicule avec case D.4 kilométrage mise en évidence" width="900" height="506" loading="lazy">
                        <div class="cerfa-highlight"></div>
                        <div class="cerfa-label">C'est ici que tout se joue — Case D.4</div>
                    </div>
                </div>

                <p>Prenez toujours le tableau de bord en photo le jour de l'essai, puis comparez ce chiffre avec le kilométrage affiché le jour de la remise des clés. Ne signez jamais le certificat de cession et ne virez pas les fonds si le chiffre inscrit sur le document ne correspond pas exactement à la réalité du compteur.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq">FAQ : bien acheter sa voiture d'occasion</h2>

                <p><strong>Quel est le kilométrage idéal pour acheter une voiture ?</strong><br>
                Le "sweet spot" se situe généralement entre 60 000 et 100 000 km. À ce stade, le véhicule a subi sa plus forte décote (vous faites une bonne affaire) mais sa fiabilité mécanique reste optimale si l'entretien a été rigoureux. La robustesse varie selon les constructeurs — certains modèles atteignent des sommets, comme en témoigne le <a href="/record-kilometrage-pan-european-1300">record de kilométrage de la Pan European 1300</a>.</p>

                <p><strong>Que faire si le kilométrage de l'annonce est très différent de la réalité ?</strong><br>
                Si l'écart dépasse votre seuil de tolérance (au-delà de 2 000 km) sans justification valable, vous êtes en droit d'annuler la transaction sans frais ou d'exiger une remise immédiate. La règle : ne signez jamais le Cerfa si le chiffre inscrit ne correspond pas exactement au compteur.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">La mention "kilométrage évolutif" est normale — c'est "non garanti" qui doit vous faire reposer le stylo. Dans tous les cas, vérifiez Histovec avant l'essai, photographiez le tableau de bord, et ne remplissez la case D.4 du Cerfa qu'avec le chiffre exact du compteur le jour J.</p>
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
                <p>Un kilométrage évolutif n'est pas un piège en soi — c'est une réalité du marché de l'occasion entre particuliers. Le piège, c'est de ne pas savoir où fixer la limite, de négliger Histovec, ou de signer le Cerfa avec le mauvais chiffre. Utilisez le calculateur, photographiez le compteur, et inscrivez toujours le kilométrage réel sur le document de cession. C'est votre seule protection juridique solide.</p>
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
                "@id"   => "https://garageraymond.fr/" . $current_slug
            ],
            "headline"      => $article['title'],
            "description"   => $article['subtitle'],
            "image"         => ["https://garageraymond.fr" . $article['image']],
            "datePublished" => "2026-04-20T08:00:00+02:00",
            "dateModified"  => "2026-04-20T08:00:00+02:00",
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
            "keywords" => "kilométrage évolutif, kilométrage non garanti, acheter voiture occasion, Cerfa 15776 kilométrage, Histovec fraude compteur, négocier prix voiture occasion"
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

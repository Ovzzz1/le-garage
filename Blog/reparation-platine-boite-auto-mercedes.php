<?php
// published: 2026-04-06 15:00
// reparation-platine-boite-auto-mercedes.php

$page_title       = "Platine Boîte Auto Mercedes HS ? Symptômes et Réparation";
$page_description = "Boîte auto Mercedes bloquée ou en mode dégradé ? Identifiez la panne de votre platine (codes OBD) et découvrez comment la réparer à moindre coût.";

$article = [
    'title'          => "Boîte automatique Mercedes en panne ? Comment diagnostiquer et réparer votre platine sans vous ruiner",
    'subtitle'       => "Votre Mercedes donne des accoups, se bloque sur un rapport ou affiche un message d'erreur de transmission ? La cause est souvent électronique. Découvrez comment diagnostiquer cette panne, les codes défauts à vérifier, et pourquoi la réparation de votre pièce d'origine est la solution la plus fiable.",
    'category'       => 'entretien',
    'category_name'  => 'Entretien & Réparation',
    'category_color' => '#dc2626',
    'tags'           => ['Boîte auto', 'Mercedes', 'Platine TCU', 'Code OBD', 'Réparation'],
    'image'          => '/Image/reparation-platine-boite-auto-mercedes1.webp',
    'date'           => '6 Avril 2026',
    'author'         => 'David',
    'author_role'    => 'Mécanicien expert & Fondateur',
    'author_img'     => '/Image/david.png',
    'author_bio'     => "David a passé 30 ans sous des voitures, couché sur des chandelles, à gratter de la rouille et tester des produits. Il connaît chaque pièce du châssis par son nom et ne mâche pas ses mots quand un produit ne vaut rien.",
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

<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Mécanicien réparant la boîte de vitesses automatique d'une Mercedes sur un pont élévateur"
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
                    <span>Guide Technique</span>
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

    <div class="art-layout-wrapper">

        <div class="art-main-col">

            <div class="art-tldr">
                <div class="art-tldr-title">L'essentiel à retenir (TL;DR)</div>
                <ul>
                    <li><strong>Symptômes :</strong> Véhicule bloqué en 1ère/2nde, accoups violents, voyant moteur allumé ou mode dégradé signalé par la lettre "F" au tableau de bord.</li>
                    <li><strong>Diagnostic :</strong> Les codes d'erreurs P0722, P0730 (pour les boîtes 5 vitesses/CVT) ou P0717, P2767 (pour les boîtes 7G-Tronic) confirment la défaillance des capteurs de la platine.</li>
                    <li><strong>La solution :</strong> Faites réparer votre propre platine par un spécialiste plutôt que d'acheter une pièce d'occasion. Cela conserve le codage antivol (SCN Coding) pour un remontage 100 % "Plug & Play" sans passage en concession.</li>
                    <li><strong>Entretien :</strong> Le démontage de la platine impose systématiquement une vidange complète avec remplacement de la crépine et mesure ultra-précise de l'huile ATF.</li>
                </ul>
            </div>

            <div class="art-toc">
                <div class="art-toc-title">Dans ce guide</div>
                <ol>
                    <li><a href="#generation">Qu'est-ce que la platine (TCU) et quelle est votre génération ?</a></li>
                    <li><a href="#diagnostic-outil">Diagnostic Express : évaluez votre panne</a></li>
                    <li><a href="#symptomes">Comment savoir si la platine est défectueuse ?</a></li>
                    <li><a href="#solutions">Les solutions : L'avantage de la réparation "Plug & Play"</a></li>
                    <li><a href="#demontage">Démontage et expédition : Les pièges à éviter (DIY)</a></li>
                    <li><a href="#vidange">Remontage et vidange : L'astuce infaillible du niveau d'huile</a></li>
                    <li><a href="#faq">FAQ : Vos questions fréquentes</a></li>
                </ol>
            </div>

            <div class="art-content">

                <h2 id="generation">Qu'est-ce que la platine de boîte automatique (TCU) et quelle est votre génération ?</h2>
                
                <p>La platine de boîte automatique, souvent appelée TCU (Transmission Control Unit) ou mécatronique, est le véritable cerveau de votre transmission. C'est une carte électronique plongée dans l'huile de la boîte, chargée de lire la vitesse des composants internes pour ordonner le passage des rapports en douceur.</p>
                
                <p>Chez Mercedes, trois générations sont particulièrement touchées par des pannes récurrentes de ce composant :</p>
                <ul>
                    <li><strong>La boîte 5G-Tronic (722.6) :</strong> Très robuste, mais son connecteur a tendance à fuir, endommageant la platine.</li>
                    <li><strong>La boîte CVT (722.8) :</strong> Montée sur les Classe A et B, ses capteurs lâchent fréquemment à cause de la chaleur.</li>
                    <li><strong>La boîte 7G-Tronic (722.9) :</strong> La plus complexe, connue pour des défaillances endémiques de ses capteurs de vitesse de turbine.</li>
                </ul>

                <figure>
                    <img src="/Image/reparation-platine-boite-auto-mercedes2.webp" alt="Comparaison des platines TCU pour boîtes automatiques Mercedes 5G-Tronic et 7G-Tronic.">
                    <figcaption>Vue macro comparative de deux platines électroniques de boîte auto (une 722.6 et une 722.9), avec les capteurs de vitesse bien visibles.</figcaption>
                </figure>


                <div id="diagnostic-outil" class="bva-diag-wrapper">

                    <div class="bva-diag-header">
                        <span class="bva-diag-badge">Outil Diagnostic</span>
                        <h2 class="bva-diag-title">Évaluez votre panne de boîte auto</h2>
                        <p class="bva-diag-subtitle">Répondez à 2 questions pour identifier le problème de votre Mercedes et trouver la solution la plus économique.</p>
                    </div>

                    <div class="bva-steps" id="bva-steps">

                        <div class="bva-step active" data-step="1">
                            <div class="bva-step-num">1 / 2</div>
                            <p class="bva-step-question">Comment se manifeste votre problème ?</p>
                            <div class="bva-options">
                                <button class="bva-opt" data-key="panne" data-val="physique" onclick="diagSelect(this)">
                                    <strong>Symptômes en conduite</strong>
                                    <small>Accoups violents, boîte bloquée en 1ère/2nde, lettre "F" au tableau de bord</small>
                                </button>
                                <button class="bva-opt" data-key="panne" data-val="code" onclick="diagSelect(this)">
                                    <strong>J'ai passé la valise OBD</strong>
                                    <small>J'ai relevé des codes erreurs spécifiques (ex: P0722, P2767...)</small>
                                </button>
                            </div>
                        </div>

                        <div class="bva-step" data-step="2">
                            <div class="bva-step-num">2 / 2</div>
                            <p class="bva-step-question">Quel est le type de votre boîte automatique ?</p>
                            <div class="bva-options">
                                <button class="bva-opt" data-key="boite" data-val="5g_cvt" onclick="diagSelect(this)">
                                    <strong>Boîte 5 Vitesses (722.6) ou CVT (722.8)</strong>
                                    <small>Généralement sur Classe A, B, C, E, ML (avant 2010)</small>
                                </button>
                                <button class="bva-opt" data-key="boite" data-val="7g" onclick="diagSelect(this)">
                                    <strong>Boîte 7G-Tronic (722.9)</strong>
                                    <small>Transmission à 7 rapports plus récente</small>
                                </button>
                                <button class="bva-opt" data-key="boite" data-val="inconnu" onclick="diagSelect(this)">
                                    <strong>Je ne suis pas sûr</strong>
                                    <small>Je n'ai pas cette information</small>
                                </button>
                            </div>
                        </div>

                    </div><div class="bva-result" id="bva-result" style="display:none;">
                        <div class="bva-result-inner">
                            <div class="bva-result-title" id="result-title"></div>
                            <div class="bva-result-verdict" id="result-verdict"></div>
                            <div class="bva-result-products" id="result-products"></div>
                            <div class="bva-result-warning" id="result-warning"></div>
                            <button class="bva-reset" onclick="diagReset()">Refaire le diagnostic</button>
                        </div>
                    </div>

                </div><style>
                .bva-diag-wrapper {
                    background: #111111;
                    border: 1px solid #2a2a2a;
                    border-radius: 12px;
                    padding: 32px;
                    margin: 40px 0;
                    font-family: inherit;
                }
                .bva-diag-header {
                    text-align: center;
                    margin-bottom: 28px;
                }
                .bva-diag-badge {
                    display: inline-block;
                    background: #0056b3; 
                    color: #fff;
                    font-size: 12px;
                    font-weight: 700;
                    letter-spacing: .08em;
                    text-transform: uppercase;
                    padding: 4px 14px;
                    border-radius: 20px;
                    margin-bottom: 14px;
                }
                .bva-diag-title {
                    font-size: 1.45rem;
                    font-weight: 700;
                    color: #ffffff;
                    margin: 0 0 8px;
                    border: none;
                    padding: 0;
                }
                .bva-diag-title::after { display: none; }
                .bva-diag-subtitle {
                    color: #999;
                    font-size: .92rem;
                    line-height: 1.5;
                    margin: 0;
                }
                .bva-step { display: none; }
                .bva-step.active { display: block; }

                .bva-step-num {
                    font-size: .8rem;
                    font-weight: 600;
                    color: #0056b3;
                    text-transform: uppercase;
                    letter-spacing: .1em;
                    margin-bottom: 10px;
                }
                .bva-step-question {
                    font-size: 1.1rem;
                    font-weight: 600;
                    color: #fff;
                    margin: 0 0 18px;
                }
                .bva-options {
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                }
                .bva-opt {
                    display: block;
                    background: #1a1a1a;
                    border: 1.5px solid #2a2a2a;
                    border-radius: 8px;
                    padding: 16px 18px;
                    cursor: pointer;
                    text-align: left;
                    transition: border-color .2s, background .2s;
                    width: 100%;
                }
                .bva-opt:hover {
                    border-color: #0056b3;
                    background: #121926;
                }
                .bva-opt.selected {
                    border-color: #0056b3;
                    background: #121926;
                }
                .bva-opt strong {
                    display: block;
                    color: #fff;
                    font-size: .95rem;
                    margin-bottom: 3px;
                }
                .bva-opt small {
                    color: #888;
                    font-size: .82rem;
                    line-height: 1.4;
                }

                /* Résultat */
                .bva-result {
                    animation: fadeInUp .4s ease;
                }
                @keyframes fadeInUp {
                    from { opacity: 0; transform: translateY(12px); }
                    to   { opacity: 1; transform: translateY(0); }
                }
                .bva-result-inner {
                    background: #1a1a1a;
                    border-radius: 10px;
                    padding: 28px;
                    border: 1.5px solid #2a2a2a;
                }
                .bva-result-title {
                    font-size: 1.15rem;
                    font-weight: 700;
                    color: #fff;
                    margin-bottom: 12px;
                }
                .bva-result-verdict {
                    font-size: .94rem;
                    color: #ccc;
                    line-height: 1.65;
                    margin-bottom: 18px;
                }
                .bva-result-products {
                    background: #111;
                    border-radius: 8px;
                    padding: 16px 18px;
                    margin-bottom: 16px;
                    border: 1px solid #222;
                }
                .bva-result-products strong {
                    display: block;
                    color: #0056b3;
                    font-size: .82rem;
                    text-transform: uppercase;
                    letter-spacing: .08em;
                    margin-bottom: 10px;
                }
                .bva-result-products ul {
                    margin: 0;
                    padding-left: 18px;
                    color: #ddd;
                    font-size: .9rem;
                    line-height: 1.7;
                }
                .bva-result-warning {
                    font-size: .88rem;
                    color: #f87171;
                    line-height: 1.5;
                    padding: 12px 16px;
                    border-radius: 6px;
                    background: rgba(220,38,38,.08);
                    border: 1px solid rgba(220,38,38,.2);
                    margin-bottom: 20px;
                    display: none;
                }
                .bva-result-warning.show { display: block; }
                .bva-reset {
                    background: transparent;
                    border: 1.5px solid #2a2a2a;
                    color: #888;
                    border-radius: 6px;
                    padding: 10px 20px;
                    cursor: pointer;
                    font-size: .86rem;
                    transition: border-color .2s, color .2s;
                }
                .bva-reset:hover {
                    border-color: #555;
                    color: #ccc;
                }
                </style>

                <script>
                var diagAnswers = {};
                var diagCurrentStep = 1;
                var diagTotalSteps = 2;

                function diagSelect(btn) {
                    var key = btn.getAttribute('data-key');
                    var val = btn.getAttribute('data-val');
                    diagAnswers[key] = val;

                    var siblings = btn.parentNode.querySelectorAll('.bva-opt');
                    siblings.forEach(function(s){ s.classList.remove('selected'); });
                    btn.classList.add('selected');

                    setTimeout(function(){
                        if (diagCurrentStep < diagTotalSteps) {
                            document.querySelector('[data-step="' + diagCurrentStep + '"]').classList.remove('active');
                            diagCurrentStep++;
                            document.querySelector('[data-step="' + diagCurrentStep + '"]').classList.add('active');
                        } else {
                            document.getElementById('bva-steps').style.display = 'none';
                            showResult();
                        }
                    }, 350);
                }

                function showResult() {
                    var p = diagAnswers.panne;
                    var b = diagAnswers.boite;

                    var title, verdict, products, warning = '';

                    if (b === '5g_cvt') {
                        title   = 'Panne probable des capteurs de platine (722.6 / 722.8)';
                        verdict = 'Si vous avez des codes erreurs comme P0722 ou P0730, ou si la boîte se met en sécurité, la défaillance des capteurs de vitesse intégrés à la platine est presque certaine. C\'est une panne très classique.';
                        products = '<strong>Action recommandée</strong><ul><li>Ne changez pas la platine par une pièce d\'occasion.</li><li>Démontez votre platine et envoyez-la à un spécialiste en électronique auto.</li><li>Prévoyez un kit de vidange complet (ATF, crépine, joint).</li></ul>';
                    } 
                    else if (b === '7g') {
                        title   = 'Maladie connue : Capteurs Y3/8N de la 7G-Tronic';
                        verdict = 'Les boîtes 7G-Tronic souffrent d\'une maladie endémique sur les capteurs de vitesse de turbine (Y3/8N1 ou Y3/8N2) qui génèrent souvent les codes P0717 ou P2767. La platine électronique mécatronique doit être reconditionnée.';
                        products = '<strong>Action recommandée</strong><ul><li>Privilégiez la réparation de votre pièce d\'origine (remontage Plug & Play).</li><li>Attention : le démontage du bloc hydraulique est délicat sur ce modèle.</li><li>Prévoyez l\'huile ATF spécifique MB et une crépine neuve.</li></ul>';
                    } 
                    else {
                        title   = 'Diagnostic électronique nécessaire';
                        verdict = 'Les symptômes que vous décrivez orientent vers une mise en sécurité de la boîte (mode dégradé). Cependant, sans connaître le modèle de la boîte, une confirmation par valise diagnostique (OBD) est impérative.';
                        products = '<strong>Prochaines étapes</strong><ul><li>Passez un scanner OBD pour relever les codes défauts exacts.</li><li>Si les codes pointent vers des capteurs de vitesse, la platine est en cause.</li><li>La réparation électronique vous coûtera beaucoup moins cher qu\'un remplacement en concession.</li></ul>';
                        warning = 'Ne continuez pas à rouler en mode dégradé, vous risquez d\'endommager la mécanique interne de la transmission.';
                    }

                    document.getElementById('result-title').innerHTML   = title;
                    document.getElementById('result-verdict').innerHTML  = verdict;
                    document.getElementById('result-products').innerHTML = products;

                    var warnEl = document.getElementById('result-warning');
                    if (warning) {
                        warnEl.innerHTML = warning;
                        warnEl.classList.add('show');
                    }

                    document.getElementById('bva-result').style.display = 'block';
                }

                function diagReset() {
                    diagAnswers = {};
                    diagCurrentStep = 1;

                    document.querySelectorAll('.bva-step').forEach(function(s){ s.classList.remove('active'); });
                    document.querySelector('[data-step="1"]').classList.add('active');
                    document.querySelectorAll('.bva-opt').forEach(function(b){ b.classList.remove('selected'); });

                    document.getElementById('bva-steps').style.display = 'block';
                    document.getElementById('bva-result').style.display = 'none';
                    document.getElementById('result-warning').classList.remove('show');
                }
                </script>
                <h2 id="symptomes">Comment savoir si la platine de votre Mercedes est défectueuse ?</h2>

                <h3>Les symptômes physiques en conduite</h3>
                <p>Avant même de brancher un outil de diagnostic, le comportement de votre véhicule est un excellent indicateur. Une platine défectueuse met le système en sécurité pour protéger la mécanique. Vous constaterez généralement :</p>
                <ul>
                    <li>La boîte de vitesses reste bloquée sur un seul rapport (le plus souvent en 1ère ou 2nde).</li>
                    <li>Des accoups violents se font ressentir au passage des vitesses, ou lors de l'engagement de la marche arrière (R) ou de la marche avant (D).</li>
                    <li>Le message d'alerte "Transmission : aller à l'atelier" s'affiche au tableau de bord.</li>
                    <li>La lettre "F" (Fault) clignote ou remplace la position "D" sur l'écran central, indiquant un passage en mode dégradé.</li>
                </ul>

                <h3>Les codes défauts à la valise (OBD) selon votre boîte</h3>
                <p>Si vous disposez d'un lecteur OBD, la lecture des codes d'erreur permet de confirmer le diagnostic à 100 %. Les codes varient selon la génération de votre transmission :</p>
                
                <p><strong>Pour les boîtes 722.6 et CVT 722.8 :</strong></p>
                <ul>
                    <li><strong>P0722 :</strong> Le signal du composant Y3/9b5 (capteur de régime de sortie) n'est pas disponible.</li>
                    <li><strong>P0730 :</strong> Rapport de démultiplication non plausible.</li>
                    <li><strong>P0793 :</strong> Le signal du capteur de régime de l'arbre intermédiaire n'est pas disponible.</li>
                </ul>

                <p><strong>Pour la boîte 7G-Tronic (722.9) :</strong></p>
                <ul>
                    <li><strong>P0717 / P0718 :</strong> Signal du capteur de régime de turbine VGS (Y3/8n1) indisponible ou défectueux.</li>
                    <li><strong>P2767 / P2768 :</strong> Signal du capteur de régime interne VGS (Y3/8n2) indisponible ou défectueux.</li>
                </ul>

                <figure>
                    <img src="/Image/reparation-platine-boite-auto-mercedes3.webp" alt="Code défaut P0722 sur valise diagnostic OBD indiquant une panne de platine Mercedes.">
                    <figcaption>Un écran de scanner de diagnostic automobile (OBD2) affichant clairement le code d'erreur "P0722 - Speed Sensor Signal".</figcaption>
                </figure>


                <h2 id="solutions">Les solutions : Pourquoi la réparation est supérieure au remplacement (L'avantage Plug & Play)</h2>
                
                <p>Face à un diagnostic confirmant la mort de la platine, le premier réflexe est souvent de chercher une pièce d'occasion ou d'en commander une neuve. C'est une erreur qui peut vous coûter cher.</p>
                
                <p>Les platines Mercedes sont liées électroniquement à votre véhicule via un codage antivol strict (SCN Coding ou système Immo FBS4). Si vous installez une platine provenant d'une autre voiture, votre Mercedes refusera tout simplement de démarrer. Vous serez alors obligé de passer en concession pour une reprogrammation très onéreuse, si tant est qu'elle soit acceptée.</p>
                
                <p><strong>La meilleure solution ? Faire réparer votre propre platine par un spécialiste en électronique automobile.</strong><br>
                En rénovant les capteurs de vitesse défectueux de <em>votre</em> pièce d'origine, vous conservez toutes les données de programmation. Le remontage est donc <strong>100 % "Plug & Play"</strong>. Vous réinstallez la platine, vous faites le niveau d'huile, et vous pouvez reprendre la route immédiatement.</p>


                <h2 id="demontage">Démontage et expédition : Les pièges à éviter (Spécial DIY)</h2>
                
                <p>Si vous décidez de réaliser l'opération vous-même (DIY) pour envoyer la pièce en réparation, une extrême prudence est de mise lors du démontage du carter et de la dépose du bloc hydraulique (Valve Body).</p>

                <div class="art-warning-box" style="background:#1a1a1a; border-left: 4px solid #ffc107; padding: 18px 22px; border-radius: 6px; margin: 24px 0;">
                    <strong style="color:#ffc107; display:block; margin-bottom:8px;">Alerte Expert : Attention à la valve manuelle</strong>
                    <span style="color:#e5e5e5;">Lors de l'extraction du bloc, ne tirez jamais en force. La valve manuelle (Manual Valve) est une petite tige mécanique très fragile qui relie le sélecteur de vitesse au bloc. Si vous la tordez ou la cassez, le remplacement du bloc hydraulique complet sera inévitable.</span>
                </div>

                <p>Prenez également le temps d'étiqueter chaque électrovanne (solénoïde) avec un marqueur avant de les retirer pour séparer la platine en plastique noir du lourd bloc en aluminium. Un mauvais ordre de remontage provoquera de graves dysfonctionnements.</p>
                
                <p>Enfin, pour l'expédition par la poste, emballez la platine électronique dans plusieurs couches épaisses de papier bulle et calez-la fermement dans un carton rigide. Les capteurs de vitesse cylindriques qui dépassent de la carte sont extrêmement cassants.</p>

                <figure>
                    <img src="/Image/reparation-platine-boite-auto-mercedes4.webp" alt="Démontage prudent des électrovannes et de la valve manuelle sur un bloc hydraulique Mercedes.">
                    <figcaption>Gros plan sur l'extraction délicate d'une électrovanne (solénoïde) du bloc hydraulique en aluminium.</figcaption>
                </figure>


                <h2 id="vidange">Remontage et vidange : L'astuce infaillible pour le niveau d'huile</h2>
                
                <p>Le changement de la platine implique de vider l'huile de la boîte. Cette intervention doit obligatoirement s'accompagner d'une vidange dans les règles de l'art, incluant la pose d'une crépine (filtre) neuve, d'un joint de carter neuf, et d'une huile fluide de transmission (ATF) respectant strictement les normes Mercedes.</p>
                
                <p><strong>L'astuce de pro pour faire le niveau sans jauge :</strong><br>
                De nombreuses boîtes Mercedes n'ont pas de jauge d'huile accessible depuis le compartiment moteur, ce qui rend le remplissage angoissant. L'astuce consiste à récupérer <em>l'intégralité</em> de l'ancienne huile vidangée dans un grand bac ou pichet gradué au millilitre près. Il vous suffira ensuite de réinjecter la quantité très exacte de fluide ATF neuf que vous avez retirée. Cela garantit une pression hydraulique parfaite dès le premier démarrage.</p>

                <figure>
                    <img src="/Image/reparation-platine-boite-auto-mercedes5.webp" alt="Mesure précise de l'huile de transmission ATF dans un bac gradué pour boîte automatique.">
                    <figcaption>Mesure précise au millilitre du fluide de transmission ATF pour s'assurer d'un remplissage optimal de la boîte de vitesses.</figcaption>
                </figure>

                <h2 id="faq">FAQ : Vos questions fréquentes</h2>

                <div class="art-faq" itemscope itemtype="https://schema.org/FAQPage">

                    <div class="art-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="art-faq-q" itemprop="name">Que faire du bloc hydraulique pendant que la platine est en réparation ?</div>
                        <div class="art-faq-a" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">La réparation postale prend généralement 3 à 5 jours. Profitez de cette immobilisation pour nettoyer intégralement le labyrinthe en aluminium du bloc hydraulique (Valve Body) à l'aide d'un nettoyant frein. Cela permet d'éliminer toutes les boues d'huile et la limaille accumulées qui pourraient bloquer vos électrovannes.</div>
                        </div>
                    </div>

                    <div class="art-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="art-faq-q" itemprop="name">Faut-il envoyer le bloc hydraulique complet au réparateur ?</div>
                        <div class="art-faq-a" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">Non, surtout pas. Seule la partie en plastique noir abritant les circuits électroniques (le TCU) doit être expédiée. Le lourd bloc en aluminium doit rester chez vous à l'abri de la poussière.</div>
                        </div>
                    </div>

                    <div class="art-faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <div class="art-faq-q" itemprop="name">Combien coûte une réparation par rapport à un concessionnaire ?</div>
                        <div class="art-faq-a" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <div itemprop="text">La réparation électronique ciblée par un spécialiste indépendant coûte en moyenne entre 250 € et 400 €. En concession, la procédure impose souvent le remplacement du bloc mécatronique complet, avec des devis oscillant entre 1 500 € et plus de 3 000 €.</div>
                        </div>
                    </div>

                </div>

                <style>
                .art-faq { margin-top: 10px; }
                .art-faq-item {
                    border-bottom: 1px solid #2a2a2a;
                    padding: 0;
                    margin-bottom: 0;
                }
                .art-faq-q {
                    font-weight: 600;
                    color: #111;
                    padding: 18px 0 14px;
                    cursor: default;
                    font-size: .97rem;
                    line-height: 1.45;
                }
                .art-faq-a div {
                    color: #444;
                    font-size: .93rem;
                    line-height: 1.7;
                    padding-bottom: 18px;
                }
                </style>


            </div><div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>"
                     alt="<?php echo $article['author']; ?>"
                     class="art-author-avatar"
                     width="80" height="80">
                <div class="art-author-info">
                    <span class="art-author-label">La Parole à l'Expert</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir toute la rédaction</a>
                </div>
            </div>

            <div class="art-conclusion" style="background-color: #111111; color: #ffffff;">
                <h2 style="color: #ffffff;">Le mot de la fin</h2>
                <p style="color: #ffffff;">Une boîte automatique Mercedes qui se met en sécurité n'est pas forcément synonyme de facture exorbitante. En ciblant la platine électronique et en optant pour la réparation de votre pièce d'origine, vous évitez les reprogrammations coûteuses et résolvez le problème à la racine. Avec les bonnes informations et un peu de minutie, cette opération reste très accessible.</p>
            </div>

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

        </div><aside class="art-sidebar-right">
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

    </div></article>

<script type="application/ld+json">
<?php
$faq_entities = [
    ["@type" => "Question", "name" => "Que faire du bloc hydraulique pendant que la platine est en réparation ?", "acceptedAnswer" => ["@type" => "Answer", "text" => "Profitez de l'immobilisation de la platine pour nettoyer intégralement le labyrinthe en aluminium du bloc hydraulique (Valve Body) au nettoyant frein, afin d'éliminer la limaille."]],
    ["@type" => "Question", "name" => "Faut-il envoyer le bloc hydraulique complet au réparateur ?", "acceptedAnswer" => ["@type" => "Answer", "text" => "Non. Seule la partie en plastique noir abritant les circuits électroniques (la platine TCU) doit être envoyée. Le bloc hydraulique lourd doit rester chez vous."]],
    ["@type" => "Question", "name" => "Combien coûte une réparation par rapport à un concessionnaire ?", "acceptedAnswer" => ["@type" => "Answer", "text" => "Une réparation électronique ciblée coûte entre 250 € et 400 €. En concession, le remplacement complet du bloc oscille généralement entre 1 500 € et plus de 3 000 €."]],
];

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
            "datePublished" => "2026-04-06T15:00:00+02:00",
            "dateModified"  => "2026-04-06T15:00:00+02:00",
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
            "mainEntity" => $faq_entities
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

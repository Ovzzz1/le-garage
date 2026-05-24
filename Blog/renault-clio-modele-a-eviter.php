<?php
// published: 2026-04-29 09:00
/**
 * renault-clio-modele-a-eviter.php
 */

$page_title       = "Renault Clio : Quels modèles et moteurs éviter ? (Guide Fiabilité 2026)";
$page_description = "1.2 TCe, 1.5 dCi avant 2012, boîte EDC : la liste noire des Renault Clio à fuir en occasion, avec les versions fiables à cibler pour un achat serein.";

$article = [
    'title'          => "Renault Clio modèle à éviter : La liste noire et la liste blanche (2026)",
    'subtitle'       => "La Clio reste la voiture préférée des Français, mais certaines motorisations cachent des casses prématurées. Voici la vérité brute sur les modèles à fuir et ceux à acheter les yeux fermés.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Renault Clio', 'Fiabilité', 'Achat Occasion', 'TCe', 'dCi'],
    'image'          => '/Image/renault-clio-modele-a-eviter1.webp',
    'date'           => '29 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Achat & Occasion',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud accompagne acheteurs et vendeurs sur le marché de l'occasion depuis plus de 12 ans. Spécialiste des défauts de conception et des casses moteur récurrentes, il décrypte sans filtre les pièges du marché de l'occasion en France.",
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
            try { eval('$other_article = [' . $matches[1] . '];'); } catch (Throwable $e) { continue; }
        }
        if ($other_article && isset($other_article['title'])) {
            $other_article['slug']  = $file_slug;
            $other_article['url']   = '/' . $file_slug;
            $other_article['image'] = '/' . ltrim($other_article['image'] ?? '', '/');
            if (($other_article['category'] ?? '') === $article['category']) { $same_cat_articles[] = $other_article; }
            $all_other_articles[] = $other_article;
        }
    }
}

include __DIR__ . '/../header.php';
?>

<!-- CSS spécifique article : tables blacklist/whitelist -->
<style>
    .evit-table-wrap { overflow-x: auto; margin: 24px 0; -webkit-overflow-scrolling: touch; }
    .evit-table { width: 100%; border-collapse: collapse; font-size: 0.88rem; min-width: 480px; }
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
             alt="Renault Clio d'occasion sur un pont élévateur, inspection avant achat"
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

    <nav class="art-cat-nav">
        <div class="art-cat-nav-inner">
            <?php foreach ($categories as $slug_cat => $cat): ?>
                <a href="/<?php echo $slug_cat; ?>" class="art-cat-link <?php echo $slug_cat === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $cat['color']; ?>">
                    <span class="art-cat-dot" style="background-color: <?php echo $cat['color']; ?>"></span><?php echo $cat['name']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </nav>

    <div class="art-layout-wrapper">
        <div class="art-main-col">

            <div class="art-tldr">
                <div class="art-tldr-title">L'essentiel à retenir (TL;DR)</div>
                <ul>
                    <li><strong>Danger n°1 :</strong> Le 1.2 TCe 115/120 ch (2012-2016) — casse moteur avant 80 000 km par surconsommation d'huile.</li>
                    <li><strong>Diesel à fuir :</strong> Le 1.5 dCi avant 2012 — pompe Delphi qui libère de la limaille dans tout le circuit d'injection.</li>
                    <li><strong>Boîte EDC :</strong> Méfiez-vous des EDC avant 2015 — surchauffe d'embrayage et bugs électroniques récurrents.</li>
                    <li><strong>À privilégier :</strong> Le 0.9 TCe 90 ch (Clio 4) ou le 1.0 TCe 100 ch (Clio 5) — les deux références de fiabilité.</li>
                    <li><strong>Inspection :</strong> Tirez la jauge d'huile — sèche sur un 1.2 TCe = fuyez immédiatement.</li>
                </ul>
            </div>

            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#origines-problemes">Aux origines des problèmes : Pourquoi certaines Clio sont-elles fragiles ?</a></li>
                    <li><a href="#blacklist-moteurs">La Blacklist : Les moteurs à fuir absolument</a></li>
                    <li><a href="#par-generation">Par génération : Où se cachent les pièges ?</a></li>
                    <li><a href="#whitelist-recommandes">La Whitelist : Les modèles recommandés</a></li>
                    <li><a href="#guide-inspection">Guide d'achat : Comment inspecter une Clio avant signature ?</a></li>
                    <li><a href="#faq-clio">FAQ : Vos questions cash</a></li>
                </ol>
            </div>

            <div class="art-content">

                <p>Acheter une Renault Clio d'occasion, c'est normalement le choix de la sécurité. C'est la voiture préférée des Français, facile à entretenir et à revendre. Pourtant, si vous signez pour le mauvais moteur, ce rêve de pragmatisme peut vite virer au cauchemar financier. Voici la vérité brute sur les modèles à fuir et ceux à acheter les yeux fermés.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="origines-problemes">Aux origines des problèmes : Pourquoi certaines Clio sont-elles fragiles ?</h2>

                <p>Pour comprendre pourquoi Renault a trébuché, il faut remonter aux années 2012-2018. À cette époque, la marque a dû sacrifier la cylindrée sur l'autel de l'écologie : c'est l'ère du "downsizing". La conception de certains nouveaux blocs en aluminium a été précipitée, et les tolérances de fabrication sur les segmentations étaient parfois trop larges — ce qui mène directement à une consommation d'huile excessive. Renault n'est pas le seul à avoir souffert : j'ai également analysé les <a href="/moteur-peugeot-a-eviter">moteurs Peugeot à éviter</a> pour ceux qui hésitent entre les deux constructeurs français.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="blacklist-moteurs">La Blacklist : Les moteurs à fuir absolument</h2>

                <h3>1. Le 1.2 TCe 115/120 ch (2012-2016) : La casse moteur programmée</h3>
                <p>C'est le "grand méchant" de l'histoire (code H5Ft). Son défaut : une mauvaise gestion de la pression d'admission qui aspire l'huile moteur comme une paille. Les soupapes fondent, la chaîne de distribution se détend et le moteur finit par rendre l'âme, souvent avant 80 000 km.</p>

                <h3>2. Le 1.5 dCi ancienne génération (Clio 2 et début Clio 3) : La limaille de fer</h3>
                <p>Avant 2012, la pompe à injection Delphi a la fâcheuse tendance à se désagréger de l'intérieur, envoyant de la limaille de fer dans tout le circuit. Le remplacement complet du circuit d'injection représente une facture qui peut dépasser 2 000 € — autant dire qu'un contrôle technique récent ne suffit pas à détecter ce type de bombe à retardement.</p>

                <h3>3. Le SCe 65 (Clio 5) : Trop faible pour être honnête</h3>
                <p>Sans turbo, ce moteur manque cruellement de couple. Dès que vous engagez une rampe d'autoroute ou chargez la voiture, vous réalisez l'erreur. Il oblige à pousser les rapports à fond, ce qui fait exploser la consommation pour un agrément nul.</p>

                <div class="evit-table-wrap">
                    <table class="evit-table">
                        <thead>
                            <tr><th>Génération</th><th>Motorisation</th><th>Risque Majeur</th><th>Verdict</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Génération">Clio 3 &amp; 4</td>
                                <td data-label="Motorisation"><strong>1.2 TCe (115/120)</strong></td>
                                <td data-label="Risque">Casse moteur (Huile)</td>
                                <td data-label="Verdict"><span class="evit-rouge">À FUIR ABSOLUMENT</span></td>
                            </tr>
                            <tr>
                                <td data-label="Génération">Clio 2 &amp; 3</td>
                                <td data-label="Motorisation"><strong>1.5 dCi (Avant 2012)</strong></td>
                                <td data-label="Risque">Injection (Limaille)</td>
                                <td data-label="Verdict"><span class="evit-orange">DANGER TECHNIQUE</span></td>
                            </tr>
                            <tr>
                                <td data-label="Génération">Clio 4</td>
                                <td data-label="Motorisation"><strong>1.2 16v 75ch</strong></td>
                                <td data-label="Risque">Anémique sur route</td>
                                <td data-label="Verdict"><span class="evit-orange">DÉCONSEILLÉ (sauf ville)</span></td>
                            </tr>
                            <tr>
                                <td data-label="Génération">Clio 5</td>
                                <td data-label="Motorisation"><strong>SCe 65</strong></td>
                                <td data-label="Risque">Sous-performance / Sécurité</td>
                                <td data-label="Verdict"><span class="evit-rouge">À ÉVITER</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="par-generation">Par génération : Où se cachent les pièges ?</h2>

                <h3>Clio 4 : Attention à la finition Life et à la boîte EDC</h3>
                <p>On évite la finition "Life", qui n'a même pas la clim de série. Côté transmission, méfiez-vous de la boîte automatique EDC des débuts (avant 2015) : surchauffes d'embrayage et bugs électroniques récurrents. En cas de doute sur l'état d'une boîte auto, un diagnostic électronique complet est indispensable avant toute signature.</p>

                <h3>Clio 5 : Les défauts de jeunesse de l'E-Tech</h3>
                <p>Évitez les modèles hybrides 2019 et 2020 : ils essuient les plâtres du système Easy Link et de la boîte de vitesses à crabots, très complexe. Si vous hésitez avec sa rivale de chez Sochaux, j'ai aussi rédigé un dossier sur le <a href="/peugeot-3008-modele-a-eviter">modèle Peugeot 3008 à éviter</a>.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="whitelist-recommandes">La Whitelist : Les modèles recommandés pour un achat serein</h2>

                <ul>
                    <li><strong>Le 0.9 TCe 90 ch (Clio 4) :</strong> Le moteur du compromis parfait. Sa conception est simple et robuste — aucun défaut de segmentation connu.</li>
                    <li><strong>Le 1.5 dCi 90/110 ch (Post-2015) :</strong> Une fois les problèmes d'injection résolus, le 1.5 dCi est devenu l'un des meilleurs diesels au monde. Il peut dépasser les 300 000 km.</li>
                    <li><strong>Le 1.0 TCe 90/100 ch (Clio 5) :</strong> Moderne, équipé d'une distribution par chaîne, ce moteur est une réussite totale.</li>
                </ul>

                <p>Lors de l'achat, une <a href="/garantie-3-mois-voiture-occasion">garantie de 3 mois sur une voiture d'occasion</a> est un strict minimum pour couvrir les premiers trajets.</p>

                <div class="evit-table-wrap">
                    <table class="evit-table">
                        <thead>
                            <tr><th>Usage idéal</th><th>Modèle recommandé</th><th>Points forts</th><th>Fiabilité</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Usage"><strong>Petit budget</strong></td>
                                <td data-label="Modèle">Clio 4 — 0.9 TCe 90</td>
                                <td data-label="Points forts">Increvable / Prix</td>
                                <td data-label="Fiabilité"><span class="evit-vert">Excellente</span></td>
                            </tr>
                            <tr>
                                <td data-label="Usage"><strong>Gros rouleur</strong></td>
                                <td data-label="Modèle">Clio 4 — 1.5 dCi 90/110</td>
                                <td data-label="Points forts">Consommation record</td>
                                <td data-label="Fiabilité"><span class="evit-vert">Très bonne</span></td>
                            </tr>
                            <tr>
                                <td data-label="Usage"><strong>Polyvalent</strong></td>
                                <td data-label="Modèle">Clio 5 — 1.0 TCe 100</td>
                                <td data-label="Points forts">Moderne / Chaîne</td>
                                <td data-label="Fiabilité"><span class="evit-vert">Excellente</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <img src="/Image/renault-clio-modele-a-eviter2.webp"
                     alt="Renault Clio 4 phase 2 avec le 0.9 TCe, version recommandée pour l'achat d'occasion"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <!-- ══════════════════════════════════ -->
                <h2 id="guide-inspection">Guide d'achat : Comment inspecter une Clio d'occasion avant signature ?</h2>

                <ul>
                    <li><strong>Le niveau d'huile :</strong> Tirez la jauge. Si elle est sèche sur un 1.2 TCe, fuyez.</li>
                    <li><strong>Le bruit de cliquetis à froid :</strong> Un bruit de chaîne qui bat au démarrage indique un tendeur fatigué.</li>
                    <li><strong>Le piège des "10 km" :</strong> Méfiez-vous d'une <a href="/voiture-occasion-10-km-pourquoi">voiture d'occasion avec seulement 10 km</a> — souvent stockée 2 ans sans tourner, ce qui n'est jamais bon pour les joints.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-clio">FAQ : Vos questions cash</h2>

                <h3>Quelle est la Clio la plus fiable de l'histoire ?</h3>
                <p>La Clio 4 phase 2 (après 2016) avec le moteur 0.9 TCe 90. Tout est éprouvé et le coût d'entretien est dérisoire.</p>

                <h3>Quel kilométrage peut atteindre une Clio ?</h3>
                <p>Bien entretenue, une Clio 4 avec le 0.9 TCe ou le 1.5 dCi post-2015 peut dépasser les 350 000 km. L'essentiel est de respecter scrupuleusement les intervalles de vidange moteur — surtout sur les moteurs turbo.</p>

                <h3>Le moteur 1.2 16v 75 ch est-il vraiment à éviter ?</h3>
                <p>Pas pour sa fiabilité (il est très costaud), mais pour son manque de punch. Bon choix uniquement pour un budget exclusivement urbain.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">La Clio est une excellente voiture si on choisit le bon moteur. Le 0.9 TCe 90 ou le 1.0 TCe 100 sont les références incontestées. Fuyez le 1.2 TCe sans état d'âme et ne vous laissez pas convaincre par un prix attractif sur un modèle dont la jauge est à sec.</p>
                </div>

            </div><!-- .art-content -->

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

            <div class="art-conclusion">
                <h2>Le mot de la fin</h2>
                <p>La Renault Clio reste l'un des meilleurs achats d'occasion du marché, à condition de savoir quelle motorisation cibler. Un 0.9 TCe 90 ou un 1.5 dCi post-2015 bien entretenu vous offrira des années de conduite sans souci. Un 1.2 TCe avec la jauge à sec, c'est une facture moteur assurée dans les mois qui suivent.</p>
            </div>

            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img"><img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>" width="400" height="225" loading="lazy"></div>
                                <div class="art-related-body"><h3><?php echo htmlspecialchars($rel['title']); ?></h3><p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p><span class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span></div>
                            </a>
                        <?php endforeach; ?>
                    <?php elseif (!empty($all_other_articles)): ?>
                        <?php foreach (array_slice($all_other_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img"><img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>" width="400" height="225" loading="lazy"></div>
                                <div class="art-related-body"><h3><?php echo htmlspecialchars($rel['title']); ?></h3><p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p><span class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span></div>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p style="color: #666; padding: 20px 0;">D'autres articles arrivent bientôt dans cette catégorie !</p>
                    <?php endif; ?>
                </div>
            </section>

        </div><!-- .art-main-col -->

        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">
                <?php if (!empty($same_cat_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Dans ce dossier</div>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $sa): ?>
                            <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                                <div class="art-side-img"><img src="<?php echo htmlspecialchars($sa['image']); ?>" alt="<?php echo htmlspecialchars($sa['title']); ?>" width="160" height="90" loading="lazy"><span class="art-side-cat-pill" style="background: <?php echo $article['category_color']; ?>"><?php echo $article['category_name']; ?></span></div>
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
        "datePublished"    => "2026-04-29T09:00:00+02:00",
        "dateModified"     => "2026-04-29T09:00:00+02:00",
        "author"           => ["@type" => "Person", "name" => $article['author'], "url" => "https://garageraymond.fr/equipe", "jobTitle" => $article['author_role']],
        "publisher"        => ["@type" => "Organization", "name" => "Le garage expert Auto", "url" => "https://garageraymond.fr", "logo" => ["@type" => "ImageObject", "url" => "https://garageraymond.fr/Image/favicon.png", "width" => "512", "height" => "512"]]
    ]]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

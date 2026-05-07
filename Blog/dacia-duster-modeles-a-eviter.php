<?php
// published: 2026-05-02 09:00
/**
 * dacia-duster-modeles-a-eviter.php
 */

$page_title       = "Dacia Duster modèle à éviter : Le guide fiabilité 2026 pour un achat d'occasion sans risque";
$page_description = "1.2 TCe, 1.5 dCi Delphi, AdBlue : les versions du Dacia Duster à fuir absolument en occasion en 2026. Tableau noir de la fiabilité, checklist expert et versions fiables à cibler.";

$article = [
    'title'          => "Dacia Duster modèle à éviter : Le guide fiabilité 2026 pour un achat d'occasion sans risque",
    'subtitle'       => "Le 1.2 TCe brûle son huile jusqu'à la casse, le 1.5 dCi première génération libère de la limaille dans tout le circuit d'injection. L'image de robustesse du Duster cache des défauts qui peuvent coûter 8 000 € de réparations.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Dacia Duster', 'Fiabilité', 'Achat Occasion', '1.2 TCe', 'dCi'],
    'image'          => '/Image/dacia-duster-modeles-a-eviter1.webp',
    'date'           => '2 Mai 2026',
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

<!-- CSS spécifique article : table verdict motorisations -->
<style>
    .evit-table-wrap { overflow-x: auto; margin: 24px 0; -webkit-overflow-scrolling: touch; }
    .evit-table { width: 100%; border-collapse: collapse; font-size: 0.88rem; min-width: 560px; }
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
             alt="Dacia Duster d'occasion moteur en révision sur pont élévateur, inspection avant achat"
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
                    <li><strong>Danger essence absolu :</strong> Le 1.2 TCe 125 ch (2012-2018) — défaut de segmentation reconnu, surconsommation d'huile jusqu'à 1L/1 000 km, chaîne de distribution qui casse avant 150 000 km.</li>
                    <li><strong>Danger diesel Gen 1 :</strong> Le 1.5 dCi avant 2014 avec pompe Delphi — libère de la limaille dans tout le circuit d'injection, destruction des injecteurs et du réservoir.</li>
                    <li><strong>Diesel à surveiller :</strong> Le 1.5 Blue dCi (2018-2022) — système AdBlue capricieux, cristallisation et capteur NOx fragile.</li>
                    <li><strong>À éviter pour d'autres raisons :</strong> Le 1.6 16V 105 ch — mou, gourmand, consommation dépassant 10L/100km sans turbo pour déplacer un SUV.</li>
                    <li><strong>Recommandé :</strong> Le 1.3 TCe (co-développé Mercedes) pour l'essence, le 1.5 dCi post-2014 (pompe Continental) pour le diesel, ou l'Eco-G 100 GPL pour le budget.</li>
                </ul>
            </div>

            <!-- TOC -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#tableau-noir-duster">Le tableau noir de la fiabilité Duster (2010-2024)</a></li>
                    <li><a href="#scandale-tce">Le scandale du moteur 1.2 TCe : surconsommation et casse moteur</a></li>
                    <li><a href="#duster-phase1">Dacia Duster Phase 1 (2010-2017) : Les problèmes de pompe à injection</a></li>
                    <li><a href="#duster-phase2">Dacia Duster Phase 2 (2018-2024) : Antipollution et AdBlue</a></li>
                    <li><a href="#versions-fiables">Quelles versions du Duster choisir pour la longévité ?</a></li>
                    <li><a href="#checklist-duster">Checklist expert : 5 points à vérifier sur un Duster d'occasion</a></li>
                    <li><a href="#faq-duster">FAQ : Vos questions sur la fiabilité Dacia</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Le Dacia Duster est le SUV star du marché de l'occasion grâce à son prix imbattable, mais cette image de robustesse cache parfois des problèmes mécaniques lourds. En 2026, avec le recul de plusieurs années d'ateliers, certaines motorisations se distinguent clairement comme des erreurs à ne pas commettre. Acheter un modèle à éviter peut transformer une économie initiale en facture de 8 000 € pour une casse moteur prématurée.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="tableau-noir-duster">Le tableau noir de la fiabilité Duster (2010-2024)</h2>

                <div class="evit-table-wrap">
                    <table class="evit-table">
                        <thead>
                            <tr><th>Moteur</th><th>Années critiques</th><th>Problème majeur</th><th>Gravité</th><th>Verdict</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Moteur"><strong>1.2 TCe 125</strong></td>
                                <td data-label="Années">2012 - 2018</td>
                                <td data-label="Problème">Surconsommation d'huile / Segmentation</td>
                                <td data-label="Gravité"><span class="evit-rouge">Critique</span></td>
                                <td data-label="Verdict"><span class="evit-rouge">À FUIR ABSOLUMENT</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.6 16V 105 ch</strong></td>
                                <td data-label="Années">2010 - 2015</td>
                                <td data-label="Problème">Consommation excessive, manque de couple</td>
                                <td data-label="Gravité"><span class="evit-orange">Modérée</span></td>
                                <td data-label="Verdict"><span class="evit-orange">MAUVAIS CALCUL</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.5 dCi 110 (avant 2014)</strong></td>
                                <td data-label="Années">2010 - 2014</td>
                                <td data-label="Problème">Limaille pompe Delphi dans l'injection</td>
                                <td data-label="Gravité"><span class="evit-rouge">Critique</span></td>
                                <td data-label="Verdict"><span class="evit-rouge">VIGILANCE ROUGE</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.5 Blue dCi</strong></td>
                                <td data-label="Années">2018 - 2022</td>
                                <td data-label="Problème">Cristallisation AdBlue / Capteur NOx</td>
                                <td data-label="Gravité"><span class="evit-orange">Modérée</span></td>
                                <td data-label="Verdict"><span class="evit-orange">VIGILANCE</span></td>
                            </tr>
                            <tr>
                                <td data-label="Moteur"><strong>1.3 TCe / 1.6 SCe</strong></td>
                                <td data-label="Années">Toutes</td>
                                <td data-label="Problème">Excellente endurance globale</td>
                                <td data-label="Gravité"><span class="evit-vert">Fiable</span></td>
                                <td data-label="Verdict"><span class="evit-vert">CHOIX SÉCURITÉ</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="scandale-tce">Le scandale du moteur 1.2 TCe : surconsommation et casse moteur</h2>

                <p>C'est le point noir de l'histoire moderne du groupe Renault. Le moteur 1.2 TCe (code H5F) souffre d'un défaut de conception majeur au niveau de la segmentation. Une surconsommation d'huile moteur s'installe, entraînant une chute de pression qui finit par détendre ou rompre la chaîne de distribution. Si vous voyez une annonce pour un Duster 1.2 TCe à un prix défiant toute concurrence, soyez extrêmement prudent. Cette situation rappelle les déboires documentés dans notre dossier sur les <a href="/Blog/moteur-peugeot-a-eviter">moteurs à éviter du groupe PSA</a> : quand le défaut est structurel, même un entretien rigoureux ne garantit pas la survie du bloc. Le risque de casse sur autoroute est statistiquement inacceptable.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="duster-phase1">Dacia Duster Phase 1 (2010-2017) : Les problèmes de pompe à injection</h2>

                <p>Sur la première génération, le Duster est rustique mais certaines erreurs de jeunesse coûtent très cher. Si le châssis est solide, le système d'injection diesel est son talon d'Achille historique.</p>

                <h3>1.5 dCi avant 2014 : Le spectre de la limaille de fer</h3>
                <p>La pompe à injection haute pression Delphi se désagrège et libère de la limaille de fer dans tout le circuit, détruisant les injecteurs et le réservoir. C'est un souci que l'on retrouve également sur le <a href="/Blog/peugeot-207-modele-a-eviter">Peugeot 207 modèle à éviter</a> avec son 1.6 HDi de même génération. Pour un achat serein, ciblez exclusivement les modèles post-2014 équipés de pompes Continental, bien plus fiables dans la durée.</p>

                <h3>1.6 16V 105 ch : Un moteur essence dépassé</h3>
                <p>Ce n'est pas un moteur qui casse, mais il est mou et gourmand. Sans turbo, il manque de couple pour déplacer le SUV, ce qui fait grimper la consommation au-delà de 10L/100km. Pour un budget similaire et sans besoin du volume de coffre, d'autres options sont mécaniquement plus cohérentes.</p>

                <img src="/Image/dacia-duster-modeles-a-eviter2.webp"
                     alt="Moteur 1.2 TCe Dacia Duster démonté, segmentation et circuit d'huile visibles"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <!-- ══════════════════════════════════ -->
                <h2 id="duster-phase2">Dacia Duster Phase 2 (2018-2024) : Antipollution et AdBlue</h2>

                <p>Le Duster 2 a corrigé beaucoup de tirs, mais l'arrivée des normes Euro 6 a apporté son lot de complexité électronique et de capteurs fragiles qui n'existaient pas sur la génération précédente.</p>

                <h3>L'AdBlue et la cristallisation : Le nouveau mal du diesel</h3>
                <p>Le 1.5 Blue dCi est un excellent moteur, mais son système antipollution est capricieux. L'urée a tendance à cristalliser, bouchant l'injecteur AdBlue ou déformant le réservoir. Si vous achetez ce modèle, exigez une <a href="/Blog/garantie-3-mois-voiture-occasion">garantie de 3 mois voiture occasion</a> couvrant spécifiquement ces éléments, car la facture peut rapidement grimper à 1 200 €.</p>

                <h3>Transmission 4x4 et bruits de boîte de vitesses</h3>
                <p>Sur les versions 4x4, nous notons des bruits de roulements au niveau du pont arrière et de la boîte manuelle 6 rapports. C'est un point de vigilance particulier si le véhicule a fait du tout-terrain intensif ou affiche un kilométrage élevé rapidement acquis. Testez systématiquement la 6e vitesse à 90 km/h pour détecter un sifflement.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="versions-fiables">Quelles versions du Duster choisir pour la longévité ?</h2>

                <p>Certaines versions du Duster sont de véritables exemples de robustesse mécanique. Le 1.3 TCe (130/150 ch), co-développé avec Mercedes, est une réussite totale en termes de fiabilité et de performances. Le 1.6 SCe 115 ch, moteur Nissan atmosphérique sans turbo, est le choix de la simplicité et de l'endurance — il peut dépasser 300 000 km sans soucis majeurs.</p>

                <p>L'Eco-G 100 GPL est le choix le plus malin sur le plan économique : avec sa bi-carburation, il réduit drastiquement le budget carburant tout en restant très fiable mécaniquement. C'est une alternative sérieuse si vous faites beaucoup de kilomètres.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="checklist-duster">Checklist expert : 5 points à vérifier sur un Duster d'occasion</h2>

                <ol>
                    <li><strong>Traces de corrosion :</strong> Inspectez minutieusement le châssis et les berceaux. Un <a href="/Blog/traitement-anti-corrosion-chassis-voiture">traitement anti-corrosion châssis</a> est un plus non négligeable si le SUV provient d'une zone salée ou montagnarde.</li>
                    <li><strong>Niveau d'huile (1.2 TCe) :</strong> Si le niveau est au minimum lors de votre visite, fuyez sans vous retourner. C'est le signe d'une segmentation fatiguée et d'une casse imminente.</li>
                    <li><strong>Bruit de roulement :</strong> Engagez la 6e vitesse à 90 km/h sur route droite et écoutez. Un sifflement régulier signale un roulement de boîte défaillant.</li>
                    <li><strong>Historique Media Nav :</strong> Vérifiez que les mises à jour logicielles ont été effectuées pour éviter les bugs d'écran noir récurrents sur les premières versions.</li>
                    <li><strong>Embrayage :</strong> Sur les dCi, l'embrayage peut fatiguer prématurément si le véhicule a tracté régulièrement ou été utilisé en tout-terrain intensif.</li>
                </ol>

                <img src="/Image/dacia-duster-modeles-a-eviter3.webp"
                     alt="Châssis Dacia Duster en inspection corrosion, berceaux et longerons vérifiés en atelier"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Le 1.5 dCi post-2014 avec pompe Continental reste la valeur sûre absolue sur le Duster, capable de franchir les 350 000 km. Si votre budget vous oriente vers un 1.3 TCe, c'est un excellent choix essence. Fuyez le 1.2 TCe sans aucune exception — le défaut est structurel et aucun entretien ne le corrige.</p>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-duster">FAQ : Vos questions sur la fiabilité Dacia</h2>

                <h3>Quel est le <a href="/Blog/peugeot-3008-kilometrage-maximum">kilométrage maximum</a> d'un Dacia Duster ?</h3>
                <p>Un 1.5 dCi post-2014 peut atteindre 350 000 km avec un entretien rigoureux. Le 1.2 TCe, lui, dépasse rarement les 150 000 km sans casse majeure de la distribution ou du moteur — c'est la limite statistique de ce bloc défaillant.</p>

                <h3>Le Duster 1.2 TCe consomme-t-il vraiment trop d'huile ?</h3>
                <p>Oui, c'est un défaut de conception reconnu par Renault. La consommation peut atteindre 1 litre aux 1 000 km, ce qui est fatal pour la lubrification de la chaîne de distribution. Ajouter de l'huile régulièrement ne résout pas le problème, il retarde simplement la casse.</p>

                <h3>Dacia Duster ou Renault Sandero : lequel est le plus solide ?</h3>
                <p>La base mécanique est identique, mais le Duster est plus lourd. À moteur égal, la Sandero sollicite moins ses trains roulants et sa transmission. Pour les mêmes motorisations, le Duster consomme davantage et use plus rapidement son embrayage du fait de son gabarit supérieur.</p>

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
                <p>Le Dacia Duster peut être un excellent achat d'occasion — à condition de fuir le 1.2 TCe sans exception et d'exiger une pompe Continental sur tout dCi pre-2014. Visez le 1.5 dCi post-2014, le 1.3 TCe ou l'Eco-G GPL, et inspectez systématiquement le châssis pour la corrosion. L'économie à l'achat ne vaut rien si elle se transforme en facture moteur à 8 000 €.</p>
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
        "datePublished"    => "2026-05-02T09:00:00+02:00",
        "dateModified"     => "2026-05-02T09:00:00+02:00",
        "author"           => ["@type" => "Person", "name" => $article['author'], "url" => "https://garageraymond.fr/equipe", "jobTitle" => $article['author_role']],
        "publisher"        => ["@type" => "Organization", "name" => "Le garage expert Auto", "url" => "https://garageraymond.fr", "logo" => ["@type" => "ImageObject", "url" => "https://garageraymond.fr/Image/favicon.png", "width" => "512", "height" => "512"]]
    ]]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

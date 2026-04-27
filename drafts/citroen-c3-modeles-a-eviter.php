<?php
// published: 2026-04-28 10:00
/**
 * citroen-c3-modeles-a-eviter.php
 */

$page_title       = "Citroën C3 modèle à éviter : Les années et motorisations à fuir en occasion (Guide 2026)";
$page_description = "Airbags Takata, PureTech, VTi : les versions de la Citroën C3 à fuir absolument en occasion en 2026. Alerte sécurité, blacklist complète et versions fiables à cibler.";

$article = [
    'title'          => "Citroën C3 modèle à éviter : Les années et motorisations à fuir en occasion (Guide 2026)",
    'subtitle'       => "Entre le scandale des airbags Takata qui immobilisent des centaines de milliers de véhicules et la courroie PureTech qui détruit les moteurs, acheter une C3 sans vérifications préalables est une roulette russe financière.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Citroën C3', 'Fiabilité', 'Achat Occasion', 'PureTech', 'Airbag Takata'],
    'image'          => '/Image/citroen-c3-modeles-a-eviter1.webp',
    'date'           => '28 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Achat & Occasion',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud accompagne acheteurs et vendeurs sur le marché de l'occasion depuis plus de 12 ans. Spécialiste des défauts de conception et des casses moteur récurrentes, il décrypte sans filtre les pièges du marché de l'occasion en France.",
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

<!-- CSS spécifique article : table blacklist motorisations + alerte sécurité -->
<style>
    .evit-table-wrap { overflow-x: auto; margin: 24px 0; -webkit-overflow-scrolling: touch; }
    .evit-table { width: 100%; border-collapse: collapse; font-size: 0.88rem; min-width: 560px; }
    .evit-table th { background: <?php echo $article['category_color']; ?>; color: #fff; padding: 10px 13px; text-align: left; font-size: 0.81rem; text-transform: uppercase; letter-spacing: 0.04em; }
    .evit-table td { padding: 10px 13px; border-bottom: 1px solid rgba(255,255,255,0.07); vertical-align: middle; }
    .evit-table tr:nth-child(even) td { background: rgba(124,58,237,0.05); }
    .evit-rouge { color: #dc2626; font-weight: 700; }
    .evit-orange { color: #ea580c; font-weight: 700; }
    .evit-vert { color: #059669; font-weight: 700; }
    .alerte-securite { background: rgba(220,38,38,0.12); border-left: 4px solid #dc2626; border-radius: 6px; padding: 16px 18px; margin: 22px 0; }
    .alerte-securite strong { color: #dc2626; display: block; margin-bottom: 6px; font-size: 0.95rem; text-transform: uppercase; letter-spacing: 0.03em; }
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
             alt="Citroën C3 d'occasion sur pont élévateur avec capot ouvert, inspection mécanique avant achat"
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
                    <li><strong>Alerte sécurité absolue :</strong> Vérifiez le VIN sur rappelconso.gouv.fr avant tout achat — les C3 de 2008 à 2019 sont concernées par la procédure Stop Drive pour airbags Takata potentiellement mortels.</li>
                    <li><strong>Danger C3 III essence :</strong> Le 1.2 PureTech (2014-2019) — courroie humide qui se désagrège, bouche la crépine et détruit le moteur sans préavis.</li>
                    <li><strong>Danger C3 II essence :</strong> Les 1.4 VTi et 1.6 VTi — surconsommation d'huile jusqu'à 1L/1 000 km, moteur à sec et casse garantie.</li>
                    <li><strong>Transmission à proscrire :</strong> Les boîtes Sensodrive (C3 I) et ETG6 (C3 II) — à-coups, usure prématurée, enfer en ville.</li>
                    <li><strong>Recommandé :</strong> Le 1.4 HDi post-2012 sans FAP complexe, ou le PureTech à chaîne des modèles MHEV 2024 qui corrige enfin le défaut historique.</li>
                </ul>
            </div>

            <!-- TOC -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#alerte-takata">Alerte rouge : Le scandale des airbags Takata (Stop Drive)</a></li>
                    <li><a href="#c3-i-ii-anciens">C3 I et II : Les motorisations anciennes à éviter</a></li>
                    <li><a href="#c3-iii-annees-noires">C3 III (depuis 2016) : Les années noires à fuir absolument</a></li>
                    <li><a href="#tableau-recapitulatif">Tableau récapitulatif : Quelle C3 choisir selon l'année ?</a></li>
                    <li><a href="#transmissions-chassis">Transmissions et châssis : Les autres pièges de la C3</a></li>
                    <li><a href="#bons-achats">Quelles versions de la C3 sont de bons achats ?</a></li>
                    <li><a href="#faq-c3">FAQ : 3 questions avant d'acheter votre C3 d'occasion</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>La Citroën C3 est la citadine incontournable sur le marché de l'occasion, mais c'est aussi l'une de celles qui génère le plus de passages en atelier. Entre les casses moteurs PureTech et le récent scandale des airbags, acheter une C3 sans la vérifier scrupuleusement revient à jouer à la roulette russe financière. Voici la liste noire absolue, génération par génération.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="alerte-takata">Alerte rouge : Le scandale des airbags Takata (Stop Drive)</h2>

                <div class="alerte-securite">
                    <strong>Alerte sécurité — Vérification obligatoire avant achat</strong>
                    Vérifiez impérativement le numéro VIN du véhicule sur rappelconso.gouv.fr avant tout engagement financier. Des centaines de milliers de C3 produites entre 2008 et 2019 sont concernées par une procédure d'immobilisation immédiate.
                </div>

                <p>C'est le critère d'évitement numéro un en 2026, bien avant toute considération mécanique. Depuis juin 2025, Citroën a déclenché une procédure Stop Drive pour des centaines de milliers de C3 produites entre 2008 et 2019. Le danger vient des airbags Takata qui, sous l'effet de la chaleur et de l'humidité, peuvent exploser de manière incontrôlée et projeter des fragments métalliques mortels dans l'habitacle. Un vendeur qui refuse de vous donner le numéro VIN pour vérification essaie simplement de vous céder un véhicule dangereux et légalement invendable.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="c3-i-ii-anciens">C3 I et II : Les motorisations anciennes à éviter</h2>

                <p>Avec un budget plus serré, vous allez naturellement vous tourner vers les deux premières générations. Ces modèles anciens cachent des tares mécaniques bien spécifiques qu'il faut impérativement connaître avant de visiter.</p>

                <h3>1.1i et 1.4i (Essence) : Le syndrome de la "mayonnaise"</h3>
                <p>Ces vieux moteurs essence (les blocs de la famille TU) équipent massivement la C3 I. Leur maladie chronique : le joint de culasse qui lâche autour des 100 000 km. L'étanchéité ne se fait plus, l'huile et le liquide de refroidissement se mélangent. Lors d'une visite, faites le test du vase d'expansion : moteur froid, ouvrez le bocal de liquide de refroidissement. Si vous trouvez une pâte jaunâtre ou brunâtre sous le bouchon, fuyez immédiatement — une surchauffe fatale n'est plus très loin.</p>

                <h3>1.4 HDi et 1.6 HDi 90/92 : Injecteurs et turbo fragiles</h3>
                <p>Les blocs HDi de première génération sont d'excellents rouleurs, mais ils souffrent d'un vice caché au niveau des joints d'injecteurs. Avec les vibrations et le temps, ces joints fuient et laissent échapper de la calamine qui pollue l'huile moteur, ce qui finit par boucher la crépine et provoquer une casse turbo. Si vous entendez un bruit de sifflement régulier capot ouvert, c'est le signe d'une fuite imminente et d'une vanne EGR totalement encrassée.</p>

                <h3>1.4 VTi et 1.6 VTi (C3 II) : Les gouffres à huile</h3>
                <p>Développée en partenariat avec BMW pour équiper la C3 II, la famille des moteurs VTi est une catastrophe en termes de consommation d'huile. À cause d'une segmentation défaillante, ces moteurs avalent jusqu'à 1 litre d'huile tous les 1 000 km. Autrement dit, le voyant de niveau finira par s'allumer en plein trajet, faute d'appoints réguliers. C'est le même défaut documenté sur le <a href="/Blog/peugeot-207-modele-a-eviter">Peugeot 207 modèle à éviter</a> qui partage exactement ces blocs Prince.</p>

                <img src="/Image/citroen-c3-modeles-a-eviter2.webp"
                     alt="Courroie de distribution humide PureTech Citroën C3 désagrégée, résidus visibles dans le carter"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <!-- ══════════════════════════════════ -->
                <h2 id="c3-iii-annees-noires">C3 III (depuis 2016) : Les années noires à fuir absolument</h2>

                <p>Le design moderne de la troisième génération attire, mais c'est sous son capot que se cachent les pires gouffres financiers de la gamme Citroën.</p>

                <h3>Le 1.2 PureTech (2014-2019) : La courroie qui détruit le moteur</h3>
                <p>Évitez comme la peste les modèles 1.2 PureTech (82 et 110 ch) produits entre 2014 et 2019. La courroie de distribution humide baigne dans l'huile et se désagrège au fil des kilomètres. Ses résidus viennent boucher la crépine d'aspiration, provoquant une chute de pression d'huile, l'allumage du voyant rouge, puis la casse moteur. C'est exactement le même scénario catastrophe décrit dans notre dossier sur le <a href="/Blog/peugeot-2008-modele-a-eviter">Peugeot 2008 modèle à éviter</a>. Lors de la visite, dévissez le bouchon d'huile et éclairez l'intérieur avec la lampe de votre smartphone : si la courroie semble craquelée ou effilochée, annulez la vente.</p>

                <h3>1.5 BlueHDi : Réservoir AdBlue et cristallisation</h3>
                <p>Le réservoir d'AdBlue du BlueHDi 100 a tendance à se déformer à cause d'un défaut de mise à l'air. L'urée cristallise dans le circuit et détruit l'injecteur ainsi que la pompe intégrée. Le témoin antipollution s'allume avec un compte à rebours avant blocage, vous obligeant à remplacer l'ensemble du système pour une facture avoisinant souvent les 1 500 €.</p>

                <h3>L'électronique et la tablette tactile capricieuse</h3>
                <p>La C3 III a intégré les commandes de climatisation dans sa tablette tactile centrale. Le problème : cet écran est sujet aux bugs électroniques fréquents — figé, noir, ou redémarrant en boucle. Sans écran fonctionnel, pas de chauffage en hiver, pas de climatisation en été. Une mise à jour en concession ne suffit souvent pas, et le remplacement de la dalle est onéreux.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="tableau-recapitulatif">Tableau récapitulatif : Quelle C3 choisir selon l'année ?</h2>

                <div class="evit-table-wrap">
                    <table class="evit-table">
                        <thead>
                            <tr><th>Génération</th><th>Moteur / Organe</th><th>Période noire</th><th>Panne principale</th><th>Verdict</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Génération">Toutes</td>
                                <td data-label="Moteur">Airbags Takata</td>
                                <td data-label="Période">2008 - 2019</td>
                                <td data-label="Panne">Risque d'explosion (Stop Drive)</td>
                                <td data-label="Verdict"><span class="evit-rouge">INVENDABLE SANS RAPPEL</span></td>
                            </tr>
                            <tr>
                                <td data-label="Génération">C3 I</td>
                                <td data-label="Moteur">1.1i et 1.4i</td>
                                <td data-label="Période">2002 - 2009</td>
                                <td data-label="Panne">Joint de culasse (mayonnaise)</td>
                                <td data-label="Verdict"><span class="evit-rouge">À FUIR</span></td>
                            </tr>
                            <tr>
                                <td data-label="Génération">C3 I et II</td>
                                <td data-label="Moteur">1.4 et 1.6 HDi</td>
                                <td data-label="Période">Avant 2012</td>
                                <td data-label="Panne">Fuite injecteurs et casse turbo</td>
                                <td data-label="Verdict"><span class="evit-orange">PRUDENCE</span></td>
                            </tr>
                            <tr>
                                <td data-label="Génération">C3 II</td>
                                <td data-label="Moteur">1.4 et 1.6 VTi</td>
                                <td data-label="Période">2009 - 2015</td>
                                <td data-label="Panne">Surconsommation d'huile massive</td>
                                <td data-label="Verdict"><span class="evit-rouge">À ÉVITER</span></td>
                            </tr>
                            <tr>
                                <td data-label="Génération">C3 III</td>
                                <td data-label="Moteur">1.2 PureTech</td>
                                <td data-label="Période">2014 - 2019</td>
                                <td data-label="Panne">Désagrégation de la courroie humide</td>
                                <td data-label="Verdict"><span class="evit-rouge">À FUIR ABSOLUMENT</span></td>
                            </tr>
                            <tr>
                                <td data-label="Génération">C3 III</td>
                                <td data-label="Moteur">1.5 BlueHDi</td>
                                <td data-label="Période">2015 - 2021</td>
                                <td data-label="Panne">Cristallisation du système AdBlue</td>
                                <td data-label="Verdict"><span class="evit-orange">À SURVEILLER</span></td>
                            </tr>
                            <tr>
                                <td data-label="Génération">C3 I et II</td>
                                <td data-label="Moteur">Sensodrive / ETG</td>
                                <td data-label="Période">Toutes années</td>
                                <td data-label="Panne">À-coups et usure embrayage</td>
                                <td data-label="Verdict"><span class="evit-rouge">À PROSCRIRE</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="transmissions-chassis">Transmissions et châssis : Les autres pièges de la C3</h2>

                <h3>Les boîtes auto robotisées Sensodrive et ETG</h3>
                <p>Oubliez d'office les boîtes robotisées Sensodrive sur C3 I et ETG6 sur C3 II si vous cherchez une citadine automatique. Ces transmissions sont notoirement lentes, génèrent des à-coups insupportables en ville et souffrent d'une usure très prématurée de l'embrayage et de l'actionneur. Ces mêmes tares ont fait la mauvaise réputation du <a href="/Blog/c4-picasso-modele-a-eviter">C4 Picasso modèle à éviter</a> produit à la même époque.</p>

                <h3>Coupelles d'amortisseurs et train avant bruyant (C3 II)</h3>
                <p>Lors de l'essai routier d'une C3 de deuxième génération, coupez la radio et prenez un dos d'âne. Un fort claquement métallique provenant du train avant signale une usure prématurée des coupelles d'amortisseurs — un défaut d'usine très fréquent qui nécessitera un passage rapide en atelier.</p>

                <img src="/Image/citroen-c3-modeles-a-eviter3.webp"
                     alt="Train avant Citroën C3 inspecté en atelier, coupelles d'amortisseurs usées visibles"
                     style="width:100%;height:auto;border-radius:8px;margin:18px 0;">

                <!-- ══════════════════════════════════ -->
                <h2 id="bons-achats">Quelles versions de la C3 sont de bons achats ?</h2>

                <p>Tout n'est pas à jeter dans le catalogue Citroën. Le moteur 1.4i 75 ch post-2010, sur les fins de série de la C3 II, est devenu très robuste une fois les fragilités de joint de culasse corrigées. Le 1.4 HDi 70 ch post-2012 est idéal pour les rouleurs urbains : fiabilisé, sans le FAP complexe qui s'encrasse sur les versions plus puissantes.</p>

                <p>Si vous voulez du moderne sans risque, le 1.2 PureTech à chaîne des modèles MHEV 2024 règle enfin le défaut de conception historique. Pour tout achat d'occasion, exigez toujours une <a href="/Blog/garantie-3-mois-voiture-occasion">garantie de 3 mois voiture occasion</a> couvrant expressément le bloc moteur et la boîte de vitesses.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Vérifiez le VIN avant tout le reste — c'est non négociable. Ensuite, fuyez le PureTech 2014-2019 et les boîtes robotisées sans exception. La C3 peut être un excellent achat d'occasion à condition de cibler les bons millésimes et les bonnes motorisations. Une bonne affaire sur le prix d'achat peut rapidement se transformer en désastre financier si vous négligez ces vérifications.</p>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-c3">FAQ : 3 questions avant d'acheter votre C3 d'occasion</h2>

                <h3>Comment savoir si ma C3 est concernée par le rappel Takata ?</h3>
                <p>Prenez votre carte grise et relevez le numéro d'identification VIN (17 caractères, à la lettre E). Entrez-le ensuite sur le portail officiel rappelconso.gouv.fr pour vérifier si votre véhicule est soumis à la procédure d'immobilisation immédiate. Cette démarche est gratuite et prend moins de deux minutes.</p>

                <h3>Quand faut-il changer la courroie de distribution sur un PureTech ?</h3>
                <p>Face à l'hécatombe des casses moteurs, le constructeur a drastiquement réduit ses préconisations d'entretien. Initialement prévue à 175 000 km ou 10 ans, la courroie humide doit désormais être remplacée tous les 6 ans ou 100 000 km, voire plus tôt si le test visuel du bouchon d'huile révèle des anomalies.</p>

                <h3>Les Citroën C3 Aircross ont-elles les mêmes problèmes à éviter ?</h3>
                <p>Oui, absolument. Le C3 Aircross repose sur la même plateforme technique et utilise exactement les mêmes motorisations PureTech et BlueHDi. Il est exposé aux mêmes avaries : courroie qui se désagrège et cristallisation du système AdBlue. Toutes les vérifications décrites dans ce guide s'appliquent mot pour mot.</p>

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
                <p>La Citroën C3 peut être une excellente citadine d'occasion — à condition de passer par les cases obligatoires. Vérifiez le VIN en premier, fuyez le PureTech de 2014 à 2019 et les boîtes robotisées sans exception. Ciblez le 1.4 HDi post-2012 ou les versions MHEV 2024, et exigez toujours une garantie couvrant le moteur et la boîte avant de signer.</p>
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
        "datePublished"    => "2026-04-28T10:00:00+02:00",
        "dateModified"     => "2026-04-28T10:00:00+02:00",
        "author"           => ["@type" => "Person", "name" => $article['author'], "url" => "https://garageraymond.fr/equipe", "jobTitle" => $article['author_role']],
        "publisher"        => ["@type" => "Organization", "name" => "Le garage expert Auto", "url" => "https://garageraymond.fr", "logo" => ["@type" => "ImageObject", "url" => "https://garageraymond.fr/Image/favicon.png", "width" => "512", "height" => "512"]]
    ]]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

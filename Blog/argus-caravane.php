<?php
// published: 2026-04-22 08:00
/**
 * argus-caravane.php
 */

$page_title       = "Argus Caravane : Cote Gratuite et Guide de l'Estimation [2026]";
$page_description = "Comment estimer la valeur d'une caravane d'occasion en 2026 : cote par marque, méthode de calcul gratuite, 5 critères d'expertise et meilleur moment pour vendre.";

$article = [
    'title'          => "Argus Caravane : Cote Gratuite et Guide de l'Estimation [2026]",
    'subtitle'       => "Dicaravane, dépréciation linéaire, test d'étanchéité, règle des 85 % : tout ce qu'il faut savoir pour estimer ou négocier le juste prix d'une caravane d'occasion.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Caravane Occasion', 'Cote Argus', 'Hobby', 'Caravelair', 'Véhicule de Loisir'],
    'image'          => '/Image/argus-caravane1.webp',
    'date'           => '22 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Achat & Occasion',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud accompagne acheteurs et vendeurs sur le marché de l'occasion depuis plus de 12 ans. Passionné de véhicules de loisir, il décrypte les subtilités d'un marché où le diable se cache dans les joints d'étanchéité.",
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

<!-- CSS spécifique article : grille marques et tableau expertise -->
<style>
    .cara-marque-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 16px; margin: 24px 0; }
    .cara-marque-card { background: #1e1e32; border: 1px solid #2a2a3e; border-radius: 10px; padding: 18px 20px; border-left: 4px solid #7c3aed; }
    .cara-marque-card h3 { margin: 0 0 8px; font-size: 1rem; color: #c4b5fd; }
    .cara-marque-card p { margin: 0; font-size: 0.9rem; color: #aaa; line-height: 1.55; }
    .cara-expertise-list { list-style: none; padding: 0; margin: 24px 0; counter-reset: expertise-counter; }
    .cara-expertise-list li { counter-increment: expertise-counter; background: #1e1e32; border: 1px solid #2a2a3e; border-radius: 10px; padding: 18px 20px 18px 70px; margin-bottom: 14px; position: relative; }
    .cara-expertise-list li::before { content: counter(expertise-counter); position: absolute; left: 18px; top: 50%; transform: translateY(-50%); background: #7c3aed; color: #fff; font-weight: 700; font-size: 1.1rem; width: 36px; height: 36px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
    .cara-expertise-list li strong { color: #c4b5fd; display: block; margin-bottom: 4px; font-size: 0.98rem; }
    .cara-expertise-list li span { font-size: 0.9rem; color: #aaa; line-height: 1.5; }
    .cara-tip { background: #12122a; border: 1px solid #7c3aed44; border-radius: 8px; padding: 16px 20px; margin: 22px 0; font-size: 0.93rem; color: #ccc; }
    .cara-tip strong { color: #c4b5fd; }
</style>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Showroom de caravanes d'occasion Hobby et Caravelair avec étiquettes de prix, marché argus caravane"
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
                    <li><strong>Pas d'Argus officiel gratuit :</strong> la référence professionnelle s'appelle Dicaravane — les particuliers s'appuient sur les annonces spécialisées.</li>
                    <li><strong>Dépréciation spécifique :</strong> 20 % la première année, puis 5 à 7 % par an — mais une bonne étanchéité peut tout changer.</li>
                    <li><strong>Test d'humidité décisif :</strong> des relevés annuels en règle peuvent valoriser une caravane de 1 500 à 2 000 € au-dessus de la cote.</li>
                    <li><strong>Meilleure période pour vendre :</strong> mars à mai, quand la demande familiale dépasse l'offre.</li>
                    <li><strong>VIN obligatoire :</strong> le 10e caractère du numéro de série révèle l'année réelle de fabrication, pas toujours celle de la carte grise.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#cote-officielle-caravane">Où trouver la cote officielle d'une caravane</a></li>
                    <li><a href="#calculer-cote-gratuitement">Comment calculer la cote de votre caravane gratuitement</a></li>
                    <li><a href="#prix-par-marque">Prix moyens par marque : Hobby, Caravelair, Fendt…</a></li>
                    <li><a href="#5-points-expertise">Les 5 points d'expertise qui font varier le prix</a></li>
                    <li><a href="#meilleur-moment-vendre">Quel est le meilleur moment pour vendre sa caravane</a></li>
                    <li><a href="#faq-cote-caravane">FAQ : vos questions sur la cote et la valeur des caravanes</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Estimer la valeur d'une caravane d'occasion en 2026 s'avère bien plus complexe que pour une voiture classique. Là où une berline perd l'essentiel de sa valeur en cinq ans, une caravane bien entretenue peut conserver une cote étonnamment haute pendant plus d'une décennie. Mais cette stabilité apparente cache des pièges techniques redoutables — problèmes d'étanchéité, conformité des poids de traction — qui peuvent faire varier le prix de plusieurs milliers d'euros d'un modèle à l'autre.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="cote-officielle-caravane">Où trouver la cote officielle d'une caravane ?</h2>

                <img src="/Image/argus-caravane1.webp"
                     alt="Showroom de caravanes d'occasion Hobby et Caravelair avec étiquettes de prix, marché argus caravane"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <p>Il faut dissiper une confusion courante : le groupe L'Argus, référence pour l'automobile, ne traite pas officiellement les caravanes. La "bible" des professionnels du secteur s'appelle <strong>Dicaravane</strong>, une base de données gérée par le magazine <em>Le Monde du Plein Air</em>, qui recense les prix de transaction réels constatés en concessions.</p>

                <p>L'accès à cette cote est généralement payant pour les particuliers. Si vous souhaitez une estimation gratuite, les sites d'annonces spécialisées et les forums de passionnés restent les meilleures options — en gardant à l'esprit que ces prix de "marché" sont souvent supérieurs de 10 à 15 % à la cote officielle des experts.</p>

                <div class="cara-tip">
                    <strong>À retenir :</strong> un professionnel qui vous propose une reprise s'appuiera sur le Dicaravane, et non sur le prix que vous avez vu sur Le Bon Coin. L'écart entre les deux peut dépasser 15 % — anticipez-le dans votre négociation.
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="calculer-cote-gratuitement">Comment calculer la cote de votre caravane gratuitement ?</h2>

                <p>Sans accès au Dicaravane, vous pouvez simuler la valeur de votre véhicule avec la méthode de la dépréciation linéaire. En règle générale, une caravane perd environ 20 % de sa valeur dès la première année, puis 5 à 7 % par an les années suivantes. Ce calcul doit ensuite être ajusté selon la rareté du modèle et l'état de ses équipements de confort.</p>

                <h3>La règle des 10 ans : quel prix pour une caravane de plus de 10 ans ?</h3>
                <p>Le palier des 10 ans n'est pas une fin en soi, mais il marque souvent le moment où l'assurance réévalue la valeur vénale de façon plus drastique. Après cette date, certains composants — joints d'étanchéité, circuit de gaz — nécessitent une surveillance accrue, ce qui impacte naturellement le prix de revente.</p>

                <h3>Comment connaître l'année exacte de sa caravane ?</h3>
                <p>La date de première mise en circulation sur la carte grise ne correspond pas toujours au millésime réel de fabrication. Pour lever le doute, il faut consulter la plaque constructeur rivetée sur le châssis, souvent située près de la flèche.</p>

                <img src="/Image/argus-caravane2.webp"
                     alt="Plaque constructeur rivetée sur châssis Al-Ko montrant le numéro VIN pour identifier l'année de fabrication de la caravane"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <p>En analysant le numéro de série (VIN), le 10e caractère indique l'année de production usine — une information capitale pour ne pas surpayer un modèle resté trop longtemps sur parc avant sa vente initiale.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="prix-par-marque">Prix moyens par marque : Hobby, Caravelair, Fendt…</h2>

                <p>Le marché français est segmenté par la notoriété des constructeurs, laquelle influe directement sur la rapidité de la revente et la tenue de la cote.</p>

                <div class="cara-marque-grid">
                    <div class="cara-marque-card">
                        <h3>Hobby & Fendt</h3>
                        <p>Reines de l'argus caravane. Ces marques allemandes subissent une décote bien moins rapide grâce à leur robustesse et leur réseau de pièces détachées dense.</p>
                    </div>
                    <div class="cara-marque-card">
                        <h3>Caravelair & Sterckeman</h3>
                        <p>Leaders du segment milieu de gamme, elles offrent une cote très stable et une excellente liquidité sur le marché de l'occasion français.</p>
                    </div>
                    <div class="cara-marque-card">
                        <h3>Eriba</h3>
                        <p>Avec ses modèles iconiques, la cote est quasiment déconnectée de l'âge du véhicule. La demande des passionnés est suffisamment forte pour maintenir des prix élevés.</p>
                    </div>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="5-points-expertise">Les 5 points d'expertise qui font varier le prix</h2>

                <p>Au-delà des chiffres bruts de l'argus caravane, ce sont ces cinq critères qui déterminent le prix final lors d'une transaction.</p>

                <ol class="cara-expertise-list">
                    <li>
                        <strong>Le test d'étanchéité</strong>
                        <span>C'est le juge de paix de toute transaction. Une caravane avec des relevés d'humidité annuels en règle se vend 1 500 à 2 000 € au-dessus de la cote. Sans historique, le doute profite toujours à l'acheteur.</span>
                    </li>
                    <li>
                        <strong>L'état des pneus</strong>
                        <span>Au-delà de 6 ans, les pneus sont considérés comme dangereux même s'ils semblent en bon état visuellement. Leur remplacement (comptez 300 à 500 €) doit être systématiquement déduit du prix demandé.</span>
                    </li>
                    <li>
                        <strong>Le mover</strong>
                        <span>Cet accessoire de déplacement autonome est très recherché. En bon état de fonctionnement, il peut ajouter entre 800 et 1 200 € à la valeur de revente.</span>
                    </li>
                    <li>
                        <strong>Le PTAC et la règle des 85 %</strong>
                        <span>Le poids de la caravane chargée ne devrait pas dépasser 85 % du poids à vide du véhicule tracteur. Un PTAC mal calibré par rapport à votre voiture peut rendre la caravane invendable pour vous — vérifiez avant d'acheter.</span>
                    </li>
                    <li>
                        <strong>L'hivernage et les conditions de stockage</strong>
                        <span>Un modèle ayant dormi sous abri conserve une carrosserie et des joints en bien meilleur état. Un véhicule stocké dehors pendant plusieurs années subira une décote visible sur la carrosserie, les joints de baies et les plastiques.</span>
                    </li>
                </ol>

                <img src="/Image/argus-caravane3.webp"
                     alt="Hygromètre à pointes dans l'angle d'une penderie de caravane indiquant un taux d'humidité sain, test d'étanchéité argus caravane"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <img src="/Image/argus-caravane3.webp"
                     alt="Schéma illustrant la règle des 85% entre le poids du tracteur et celui de la caravane pour la sécurité de traction"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <!-- ══════════════════════════════════ -->
                <h2 id="meilleur-moment-vendre">Quel est le meilleur moment pour vendre sa caravane ?</h2>

                <p>Le timing est un levier puissant sur ce marché. Statistiquement, la meilleure fenêtre se situe entre <strong>mars et mai</strong> : les familles planifient leurs vacances d'été, la demande dépasse l'offre et les délais de vente se raccourcissent. À l'inverse, vendre en octobre implique souvent de consentir une remise de 10 % pour trouver preneur avant l'hiver.</p>

                <blockquote class="art-blockquote">
                    Une caravane mise en vente en mars avec un test d'étanchéité récent et un mover fonctionnel peut se vendre en moins d'une semaine. La même caravane en novembre peut attendre deux mois.
                    <cite>— Arnaud, Expert Achat & Occasion</cite>
                </blockquote>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-cote-caravane">FAQ : vos questions sur la cote et la valeur des caravanes</h2>

                <h3>Peut-on obtenir l'argus pour une caravane Gruau ou Fleurette ?</h3>
                <p>Ces marques n'existant plus, la valeur se fixe par comparaison avec des modèles équivalents actuels, en appliquant une décote de sécurité pour tenir compte de la rareté des pièces spécifiques.</p>

                <h3>L'auvent est-il inclus dans la cote argus caravane ?</h3>
                <p>En général, non. La cote estime le véhicule "nu". Un auvent en excellent état peut être valorisé séparément, mais il perd environ 50 % de sa valeur après deux saisons d'utilisation.</p>

                <h3>Quelle est la valeur d'une caravane fixe sur terrain ?</h3>
                <p>Si elle ne peut plus rouler, sa cote argus s'effondre totalement. Sa valeur dépend alors uniquement de son aménagement intérieur et de la qualité de son emplacement — deux critères qui n'ont rien à voir avec le marché de l'occasion classique.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Sur le marché de la caravane occasion, deux documents valent de l'or : un historique de tests d'étanchéité annuels et un carnet d'entretien complet. Réunissez ces deux éléments et vous pouvez légitimement afficher un prix au-dessus de l'argus. Sans eux, attendez-vous à négocier.</p>
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
                <p>L'argus caravane n'est pas un chiffre figé : c'est une fourchette que vous pouvez faire bouger dans votre sens avec les bons arguments. Étanchéité prouvée, mover fonctionnel, pneus récents, stockage sous abri — chaque point documenté rapproche votre prix de vente du haut du marché. Et si vous achetez, ces mêmes critères sont vos leviers de négociation les plus solides.</p>
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
            "datePublished" => "2026-04-22T08:00:00+02:00",
            "dateModified"  => "2026-04-22T08:00:00+02:00",
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

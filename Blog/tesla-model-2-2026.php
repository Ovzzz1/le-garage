<?php
/**
 * tesla-model-2-2026.php
 */

$page_title = "Tesla Model 2 (2026) : Prix, Date de Sortie et Infos - Le garage expert Auto";
$page_description = "Tout savoir sur la future Tesla Model 2 (Model Q) attendue pour 2026. Le point sur son prix à 25 000 €, son design, son autonomie et sa date de sortie officielle.";

$article = [
    'title' => 'Tesla Model 2 : Prix, Date de Sortie, Autonomie... Tout sur la Tesla à 25 000 € en 2026',
    'subtitle' => 'Tesla prépare une véritable révolution avec un nouveau modèle compact abordable. Rumeurs, annonces, design et technologies... Voici ce qui vous attend avec la "Baby Tesla".',
    'category' => 'electrique',          // 👈 CHOISIR PARMI : assurance, entretien, electrique, occasion, moto, permis
    'category_name' => 'Électrique & Hybride', // 👈 NOM DISPLAY de la catégorie
    'category_color' => '#059669',     // 👈 COULEUR : assurance=#2563eb, entretien=#dc2626, electrique=#059669, occasion=#7c3aed, moto=#ea580c, permis=#0891b2
    'tags' => ['Tesla', 'Nouveauté 2026', 'Voiture Électrique'],
    'image' => '/Image/tesla-model-2-hero.webp',  // 👈 Image hero (à uploader dans /Image/)
    'date' => '23 Mars 2026',          // 👈 FORMAT : JJ Mois AAAA
    'author' => 'Arnaud',
    'author_role' => 'Rédacteur & Essayeur passionné',
    'author_img' => '/Image/arnaud.png',
    'author_bio' => 'Tombé dans le cambouis quand il était petit grâce à son père David, Arnaud a transformé sa passion en expertise. Il teste sans concession les derniers modèles et décortique le marché.',
    'reading_time' => '6 min',
];

$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien' => ['name' => 'Entretien & Réparation', 'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Électrique & Hybride', 'color' => '#059669', 'slug' => 'electrique'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c', 'slug' => 'moto'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2', 'slug' => 'permis'],
];

// ─── Scan dynamique du Blog/ pour le linking interne (NE PAS TOUCHER) ───
$current_slug = pathinfo(__FILE__, PATHINFO_FILENAME);
$same_cat_articles = [];
$all_other_articles = [];
$blog_dir = __DIR__;

if (is_dir($blog_dir)) {
    $files = glob($blog_dir . '/*.php');
    foreach ($files as $file) {
        $file_slug = pathinfo($file, PATHINFO_FILENAME);
        if ($file_slug === $current_slug || $file_slug === '_TEMPLATE-ARTICLE')
            continue;

        $other_article = null;
        $content = file_get_contents($file);

        if (preg_match('/\$article\s*=\s*\[(.+?)\];/s', $content, $matches)) {
            try {
                eval ('$other_article = [' . $matches[1] . '];');
            } catch (Throwable $e) {
                continue;
            }
        }

        if ($other_article && isset($other_article['title'])) {
            $other_article['slug'] = $file_slug;
            $other_article['url'] = '/Blog/' . $file_slug;
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
        <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" class="art-hero-bg">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>">
                        <?php echo $article['category_name']; ?>
                    </a>
                    <span class="art-bc-sep">/</span>
                    <span>Article</span>
                </nav>

                <div class="art-hero-tags">
                    <?php foreach ($article['tags'] as $tag): ?>
                        <span class="art-tag">
                            <?php echo $tag; ?>
                        </span>
                    <?php endforeach; ?>
                </div>

                <h1>
                    <?php echo $article['title']; ?>
                </h1>
                <p class="art-hero-sub">
                    <?php echo $article['subtitle']; ?>
                </p>

                <div class="art-hero-meta">
                    <div class="art-author-pill">
                        <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>">
                        <div>
                            <strong>Par
                                <?php echo $article['author']; ?>
                            </strong>
                            <span>
                                <?php echo $article['author_role']; ?>
                            </span>
                        </div>
                    </div>
                    <div class="art-meta-infos">
                        <span>
                            <?php echo $article['date']; ?>
                        </span>
                        <span>&bull;</span>
                        <span>Lecture
                            <?php echo $article['reading_time']; ?>
                        </span>
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
                    <li><strong>Projet transformé :</strong> La fameuse compacte Tesla partage désormais son ADN technique (la plateforme Next-Gen) avec le très attendu <em>Robotaxi</em> (Cybercab).</li>
                    <li><strong>Lancement repoussé :</strong> Une production en série qui ne devrait pas battre son plein avant fin 2026 ou mi-2027 (assemblage visé à Giga Shanghai, puis Gigafactory Berlin).</li>
                    <li><strong>Prix revu par l'inflation :</strong> L'objectif historique des 25 000 $ se frotte au marché actuel ; un tarif de base situé entre 30 000 € et 35 000 € est jugé bien plus réaliste aujourd'hui.</li>
                    <li><strong>Efficience maximale :</strong> Autour de 400 km WLTP garantis grâce à des batteries LFP ultra-robustes (potentiellement issues de la technologie BYD Blade) accouplées aux Superchargeurs V4.</li>
                </ul>
            </div>

            <!-- Table of Contents Magazine -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#nom">1. Model 2, Model Q, Robotaxi... Quel véritable projet ?</a></li>
                    <li><a href="#date-sortie">2. Calendrier : Shanghai, Berlin et livraisons en 2026-2027</a></li>
                    <li><a href="#prix">3. Le vrai prix : oubliez les 25 000 euros !</a></li>
                    <li><a href="#design">4. Habitacle et Design : le minimalisme radical</a></li>
                    <li><a href="#batterie">5. Autonomie (400 km), batteries LFP et Superchargeurs</a></li>
                    <li><a href="#faq">6. FAQ Complète sur la future Model 2</a></li>
                    <li><a href="#conclusion">Ce qu'il faut retenir</a></li>
                </ol>
            </div>

            <!-- ═══════════════════════════════════════════ -->
            <!-- 👇 CONTENU DE L'ARTICLE ICI 👇             -->
            <!-- ═══════════════════════════════════════════ -->
            <div class="art-content">

                <h2 id="nom">1. Model 2, Model Q, Robotaxi... Quel véritable projet ?</h2>
                <p>Depuis les annonces fracassantes du Battery Day en 2020, le nom de cette future citadine grand public fait couler beaucoup d'encre. Surnommée <strong>« Model 2 »</strong> ou <strong>« Model Q »</strong>, elle n'a pourtant jamais été officiellement baptisée ainsi par Elon Musk. Récemment, un vent de panique a même soufflé à travers le monde automobile, des rumeurs alarmantes de l'agence Reuters clamant l'annulation pure et simple du projet dit "low-cost". <br>La réalité industrielle est bien différente : le projet n'est pas mort, il évolue et <strong>fusionne techniquement</strong> avec le développement colossal du futur <em>Robotaxi</em> (ou Cybercab). Ces deux véhicules d'entrée de gamme partageront de fait l'architecture <strong>Next-Gen</strong> de Tesla, conçue de A à Z pour réduire radicalement les besoins en ingénierie et le coût final du châssis. Si l'homme fort de Tesla parie une immense partie de ses billes sur l'intelligence artificielle du système <em>Full Self-Driving (FSD)</em>, une déclinaison grand public et traditionnelle "avec volant" demeure l'unique arme pour s'approprier le segment C européen.</p>
                
                <img src="/Image/tesla-model-2-nom-2026.webp" alt="Rendu 3D spéculatif montrant la parenté entre la Tesla Model 2 et le Robotaxi" style="width:100%; border-radius:10px; margin: 20px 0;">

                <h2 id="date-sortie">2. Calendrier : Shanghai, Berlin et livraisons en 2026-2027</h2>
                <p>Oubliées les promesses un poil trop optimistes d'un lancement tonitruant en 2024. Désormais, le calendrier industriel a glissé pour laisser la firme privilégier ses marges et affiner ses processus. Le développement de la Model 2 arrive sur la fin mais le fameux feu vert de "ramp up" (l'augmentation massive de la production de série) nécessite de la patience.</p>
                <p>Stratégiquement, c'est l'immense chaîne de production de la <strong>Giga Shanghai</strong> qui essuiera les plâtres pour amorcer la construction du modèle de base. Mais s'agissant d'une citadine taillée pour le Vieux Continent, le transfert se fera en urgence vers la puissante <strong>Gigafactory Berlin-Brandenburg</strong>. Une opération cruciale et décisive, car seule la fabrication sur le sol européen permettra d'esquiver la gigantesque massue douanière infligée désormais par l'Europe aux véhicules importés de Chine. Compte tenu du décalage général de l’entreprise, les premières remises de badges en mains propres (livraisons effectives) en France cibleront la <strong>fin d’année 2026, si ce n'est le milieu de l'année 2027</strong> pour les versions standard.</p>

                <h2 id="prix">3. Le vrai prix : oubliez les 25 000 euros !</h2>
                <p>L'inflation persistante post-COVID et le coût implacable des matières premières ont très certainement ébréché le rêve idyllique de la "voiture électrique à prix discount". Pour conserver ses légendaires taux de marge commerciale très au-dessus de la moyenne de l'industrie, Tesla revoit son plan. Beaucoup d'analystes pointus s'accordent aujourd'hui sur un verdict lourd : attendez-vous à un billet d'entrée qui oscillera <strong>entre 30 000 € et 35 000 €</strong> (tarif constructeur standard).</p>
                <p>En coulisses, la marque d'Austin ne reste pas les bras croisés face aux MG ou au groupe Volkswagen. Comment limiter l'explosion des coups et atteindre ce seuil de 30-35 000 euros ?</p>
                <ul>
                    <li><strong>L'"Unboxed Process" :</strong> Une toute nouvelle ingénierie structurelle divisant par deux le coût de montage ! L'auto est construite par gros blocs séparés préalablement castés, signant la fin de la traditionnelle – et très coûteuse – d'assemblage à la chaîne en ligne.</li>
                    <li><strong>Recyclage et matériaux alternatifs :</strong> Le très répandu "cuir vegan" (similicuir de la Model 3) cédera massivement la place à de l'habillage en maillage textile composite, beaucoup plus économe à façonner à très grande échelle et excellent pour le bilan carbone.</li>
                    <li><strong>Le levier fiscal :</strong> Assemblée au sein de notre Union Européenne (Berlin), la Model 2 jouira évidemment de son sésame d’éligibilité au <strong>Bonus Écologique</strong> de l'État. Couplé à de potentiels coups de pouces additionnels (Prime à la Conversion, acompte, leasing social de l'État), son financement réel se rapprochera bien plus de l'illusion monétaire ciblée de 25 000 euros.</li>
                </ul>
                
                <img src="/Image/tesla-usine-unboxed-process.webp" alt="Illustration du principe l'Unboxed Process en usine de montage" style="width:100%; border-radius:10px; margin: 20px 0;">

                <h2 id="design">4. Habitacle et Design : le minimalisme radical</h2>
                <p>Divers clichés de mules de développement volés ces derniers mois sous le soleil brûlant de Californie permettent d'en esquisser le portrait formel. Fini le design brut du Cybertruck ! On lorgne vers un code esthétique façon <strong>"Mini Model Y"</strong> rabaissée et compressée. Elle adoptera le style trapu des "hatchback", c'est-à-dire une berline compacte à hayon court fuyant. En bonus : la carrosserie et le train roulant seront méticuleusement façonnés pour briser les vents latéraux et écraser le <strong>Cχ (Coefficient de traînée aérodynamique)</strong>.</p>
                <p>Montez à bord et préparez vous au grand vide fonctionnel. On connait depuis des années le dépouillement si cher aux écolos texans de chez Tesla, mais la direction promet que l'intérieur sera épuré comme jamais auparavant pour la Model 2 :</p>
                <ul>
                    <li>Aucune commande d'activation au volant pour les commodos traditionnels; exit l'actionneur d'essuie-glaces (tout sera intégré dans le volant pour la sélection clignotante ou de marche).</li>
                    <li>Mort inéluctable du combiné de vision conducteur : seul <strong>un grand écran en lévitation central de 15 pouces</strong> (la pièce maîtresse infoloisir et données moteur) régnera sur cette immense calandre de bord vide.</li>
                </ul>

                <h2 id="batterie">5. Autonomie (400 km), batteries LFP et Superchargeurs</h2>
                <p>Il ne sera absolument pas question, ni aujourd'hui ni demain, d'insérer un gigantesque pack batterie de 80 kWh utilisant une chimie onéreuse NMC (Nickel-Manganèse-Cobalt). On bascule radicalement les technologies pour se vouer intégralement à la <strong>cellule LFP (Lithium-Fer-Phosphate)</strong>. Pourquoi ? Tout simplement car elle résiste infiniment mieux dans le temps, tolère parfaitement les cycles acharnés de décharge et de rechargements à 100% au quotidien de façon répétée et... parce que de sérieux bruits de couloirs attestent d'une fructueuse association d'approvisionnement passée avec le titan industriel asiatique <strong>BYD</strong> pour bénéficier de ses extraordinaires <strong>cellules format "Blade"</strong> très minces.</p>
                <p>Associée à un gabarit amaigri et à ce blindage technologique, la pile d’environ 50/53 kWh de la Model 2 offrira une cible de croisière estimée à environ <strong>400 km d'autonomie (en cycle WLTP)</strong>. L'argument fatal dans une si petite enveloppe ne vient pas de l’autonomie brute, mais de sa récupération fulgurante : s'alignant sur l'architecture universelle naissante des nouveaux portiques ultra-rapides de Tesla, le passage par un <a href="https://www.tesla.com/fr_fr/supercharger" target="_blank" rel="nofollow external">Superchargeur V4</a> sous des puissances acceptées de 170 kW la propulsera à un apport stratosphérique de <strong>200 kilomètres de capacité récupérée en tout juste 15 minutes</strong> !</p>
                
                <h2 id="faq">6. FAQ Complète sur la future Model 2</h2>
                <p><strong>Autopilot FSD inclus ou facturé au prix fort ?</strong><br>
                La panoplie sécuritaire intégrée de base pourvoit au respect du maintien dans les filets de la voie et à la gestion du régulateur par adaptation de distance (Autopilot Standard). Mais l'entreprise reste une entreprise logicielle ; le puissant module FSD de <em>Conduite Entièrement Autonome</em> ou même de l'<em>Autopilot Amélioré</em> exigeront irrémédiablement d'acheter l'option associée, dont le prix dépasse souvent très très allègrement plusieurs milliers d'euros.</p>
                <p><strong>Quelles concurrentes lui barre le passage en Europe ?</strong><br>
                Une nuée de modèles agressifs et aboutis. Elle posera ses roues sur le brûlant Segment C (et supérieur du Segment B). Face à elle, de féroces rivales électriques bien en place et modernisées : la solide <a href="https://www.volkswagen.fr/fr/modeles/id3.html" target="_blank" rel="nofollow external">Volkswagen ID.3</a>, l’efficace et populaire <a href="https://www.renault.fr/vehicules-electriques/megane-e-tech-electrique.html" target="_blank" rel="nofollow external">Renault Megane E-Tech</a>, le retour iconique aux sources des Français avec l'astucieuse <a href="https://www.renault.fr/vehicules-electriques/r5-e-tech-electrique.html" target="_blank" rel="nofollow external">Renault 5 E-Tech</a>, ou l'armada du tigre d'Extrême orient (la très sportive MG4 chinoise).</p>
                <p><strong>Acheter une Model 3 d'occasion ou attendre sagement ce nouveau modèle ?</strong><br>
                Cruel dilemme pour cette cuvée 2026. Attendre une « baby Tesla » neuve implique de s'armer de bravoure et d'espoir pour essuyer l'avalanche des carnets de commandes embouteillés courant 2027. À l’inverse, le marché mature de l'occasion explose d'offres exceptionnelles de Model 3 Standard de 2, 3 ou 4 ans à des prix bradés imbattables (autour des 25K). Si votre espace de garage est grand et vos besoins en volumes sont tangibles... jeter son dévolu sur cette excellente berline thermique bradée via le neuf est sans contestation possible la démarche technologique et financière la plus aboutie en 2026 !</p>

                <h2 id="conclusion">Ce qu'il faut retenir</h2>
                <p>En arrimant fatalement la genèse de ce projet Model 2 directement sur l'incroyable innovation logicielle requise par ses engins autonomes de Robotaxi, Elon Musk fait un fantastique saut dans le vide qui rebat de bout en bout l'intégralité du calendrier prévu. Plus technologique, plus ambitieuse mais un peu moins accessible financièrement (au prix brut sortie d'usine), l'électrique du peuple tant attendue pour le cru 2024 cède sa place à une impressionnante arme de conquête prête à débouler en 2026-2027, ne laissant aucun répit à l'empire automobile mondial.</p>

            </div><!-- .art-content -->

            <!-- Premium Author Box (NE PAS TOUCHER) -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"
                    class="art-author-avatar">
                <div class="art-author-info">
                    <span class="art-author-label">La Parole à L'expert</span>
                    <h3>
                        <?php echo $article['author']; ?>
                    </h3>
                    <span class="art-author-role">
                        <?php echo $article['author_role']; ?>
                    </span>
                    <p>
                        <?php echo $article['author_bio']; ?>
                    </p>
                    <a href="/equipe" class="art-author-link">Découvrir toute la rédaction</a>
                </div>
            </div>

            <!-- Conclusion Box -->
            <div class="art-conclusion">
                <h2>Le mot de la fin</h2>
                <p>La bataille des petites compactes électriques va enfin prendre tout son sens avec l'arrivée très attendue de cette Model 2, bousculant encore une fois les codes établis par les acteurs traditionnels.</p>
            </div>

            <!-- Similar Articles (DYNAMIQUE — NE PAS TOUCHER) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/<?php echo $article['category']; ?>">
                        <?php echo $article['category_name']; ?>
                    </a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                        alt="<?php echo htmlspecialchars($rel['title']); ?>">
                                </div>
                                <div class="art-related-body">
                                    <h3>
                                        <?php echo htmlspecialchars($rel['title']); ?>
                                    </h3>
                                    <p>
                                        <?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?>
                                    </p>
                                    <span class="art-related-meta">
                                        <?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull;
                                        <?php echo htmlspecialchars($rel['date'] ?? ''); ?>
                                    </span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php elseif (!empty($all_other_articles)): ?>
                        <?php foreach (array_slice($all_other_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                        alt="<?php echo htmlspecialchars($rel['title']); ?>">
                                </div>
                                <div class="art-related-body">
                                    <h3>
                                        <?php echo htmlspecialchars($rel['title']); ?>
                                    </h3>
                                    <p>
                                        <?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?>
                                    </p>
                                    <span class="art-related-meta">
                                        <?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull;
                                        <?php echo htmlspecialchars($rel['date'] ?? ''); ?>
                                    </span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p style="color: #666; padding: 20px 0;">D'autres articles arrivent bientôt dans cette catégorie !
                        </p>
                    <?php endif; ?>
                </div>
            </section>

        </div><!-- .art-main-col -->

        <!-- SIDEBAR (DYNAMIQUE — NE PAS TOUCHER) -->
        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">
                <?php if (!empty($same_cat_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Dans ce dossier</div>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $sa): ?>
                            <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($sa['image']); ?>"
                                        alt="<?php echo htmlspecialchars($sa['title']); ?>">
                                    <span class="art-side-cat-pill"
                                        style="background: <?php echo $article['category_color']; ?>">
                                        <?php echo $article['category_name']; ?>
                                    </span>
                                </div>
                                <h4>
                                    <?php echo htmlspecialchars($sa['title']); ?>
                                </h4>
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
                                        alt="<?php echo htmlspecialchars($ra['title']); ?>">
                                </div>
                                <h4>
                                    <?php echo htmlspecialchars($ra['title']); ?>
                                </h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (empty($same_cat_articles) && empty($all_other_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Explorer</div>
                        <a href="/<?php echo $article['category']; ?>" class="btn-primary"
                            style="display:block; text-align:center; background-color: <?php echo $article['category_color']; ?>; border-color: <?php echo $article['category_color']; ?>; margin-top: 15px;">
                            Voir
                            <?php echo $article['category_name']; ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </aside>

    </div><!-- .art-layout-wrapper -->
</article>

<?php include __DIR__ . '/../footer.php'; ?>

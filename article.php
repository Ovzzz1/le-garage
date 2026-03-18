<?php
/**
 * article.php
 * Template Article Individuel (Blog Auto Magazine)
 * Usage : article.php?slug=assurance-jeune-conducteur
 */

// --- Demo Articles Database ---
$articles_db = [
    'assurance-jeune-conducteur' => [
        'title' => 'Assurance jeune conducteur : comment payer moins cher en 2026 ?',
        'subtitle' => 'Guide complet pour reduire sa prime auto des la premiere annee',
        'category' => 'assurance',
        'tags' => ['Assurance Auto', 'Jeune Conducteur', 'Economie'],
        'image' => 'https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?q=80&w=1400&auto=format&fit=crop',
        'date' => '15 Mars 2026',
        'updated' => '15 Mars 2026',
        'author' => 'Arnaud',
        'author_role' => 'Rédacteur & Essayeur passionné',
        'author_img' => '/Image/arnaud.png',
        'author_bio' => 'Tombé dans le cambouis quand il était petit grâce Ã  son père David, Arnaud a transformé sa passion en expertise. Il teste sans concession les derniers modèles et décortique le marché pour les lecteurs d\'Le garage expert Auto.',
        'reading_time' => '7 min',
        'content' => true,
    ],
];

// Categories data 
$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien' => ['name' => 'Entretien & Reparation', 'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Electrique & Hybride', 'color' => '#059669', 'slug' => 'electrique'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c', 'slug' => 'moto'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2', 'slug' => 'permis'],
];

// Same-category articles 
$same_cat_articles = [
    ['title' => 'Leasing (LOA/LLD) ou achat comptant : quel est le meilleur choix ?', 'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=400&auto=format&fit=crop', 'url' => '#', 'cat' => 'Assurance'],
    ['title' => 'Bonus-Malus : comment fonctionne vraiment le coefficient ?', 'image' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=400&auto=format&fit=crop', 'url' => '#', 'cat' => 'Assurance'],
    ['title' => 'Assurance tous risques vs au tiers : le vrai comparatif', 'image' => 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=400&auto=format&fit=crop', 'url' => '#', 'cat' => 'Assurance'],
];

// Recent articles 
$recent_articles = [
    ['title' => 'Quand changer sa courroie de distribution ? Le guide complet', 'image' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?q=80&w=400&auto=format&fit=crop', 'url' => '#', 'cat' => 'Entretien'],
    ['title' => 'Quelle borne de recharge installer a domicile ?', 'image' => 'https://images.unsplash.com/photo-1593941707882-a5bba14938c7?q=80&w=400&auto=format&fit=crop', 'url' => '#', 'cat' => 'Electrique'],
    ['title' => 'Points de controle obligatoires avant achat', 'image' => 'https://images.unsplash.com/photo-1550355291-bbee04a92027?q=80&w=400&auto=format&fit=crop', 'url' => '#', 'cat' => 'Occasion'],
    ['title' => 'Comment contester une amende radar ?', 'image' => 'https://images.unsplash.com/photo-1532939163844-547f958e91b4?q=80&w=400&auto=format&fit=crop', 'url' => '#', 'cat' => 'Permis'],
];

// Similar articles (IL bottom)
$similar_articles = [
    ['title' => 'Leasing (LOA/LLD) ou achat comptant : quel est le meilleur choix ?', 'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=600&auto=format&fit=crop', 'excerpt' => 'On compare les couts reels sur 3, 4 et 5 ans pour vous aider a faire le bon choix.', 'author' => 'Arnaud', 'date' => '10 Mars', 'url' => '#'],
    ['title' => 'Bonus-Malus : comment fonctionne vraiment le coefficient ?', 'image' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=600&auto=format&fit=crop', 'excerpt' => 'On vous explique le calcul, les cas speciaux et les pieges a eviter.', 'author' => 'Arnaud', 'date' => '05 Mars', 'url' => '#'],
    ['title' => 'Assurance tous risques vs au tiers : le vrai comparatif', 'image' => 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=600&auto=format&fit=crop', 'excerpt' => 'Quelle formule choisir selon l\'age de votre voiture ? On a fait les calculs.', 'author' => 'Arnaud', 'date' => '28 Fev', 'url' => '#'],
];

// Get article
$slug = isset($_GET['slug']) ? $_GET['slug'] : 'assurance-jeune-conducteur';
$article = isset($articles_db[$slug]) ? $articles_db[$slug] : $articles_db['assurance-jeune-conducteur'];
$current_cat = $categories[$article['category']];

$page_title = $article['title'] . ' - Le garage expert Auto';
$page_description = $article['subtitle'];

include 'header.php';
?>

<!-- ARTICLE HERO (ASYMETRIQUE) -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" class="art-hero-bg">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>"><?php echo $current_cat['name']; ?></a>
                    <span class="art-bc-sep">/</span>
                    <span>Article</span>
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
                        <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>">
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

    <!-- HORIZONTAL CATEGORY NAV (IL Catégories) -->
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
                <div class="art-tldr-title">L'essentiel a retenir</div>
                <ul>
                    <li><strong>Surcout majeur :</strong> Un jeune conducteur paie en moyenne 2 a 3 fois plus cher.</li>
                    <li><strong>Duree de la surprime :</strong> 3 premieres annees de permis (2 ans si conduite
                        accompagnee).</li>
                    <li><strong>Le choix du vehicule :</strong> Visez 6 CV max (type Clio) pour diviser la prime par 2.
                    </li>
                    <li><strong>Comparaison digitale :</strong> Les assureurs en ligne sont 15 a 30% moins chers.</li>
                </ul>
            </div>

            <!-- Table of Contents Magazine -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#pourquoi">Pourquoi l'assurance coute si cher ?</a></li>
                    <li><a href="#surprime">La surprime : comment ca marche ?</a></li>
                    <li><a href="#astuces">7 astuces pour payer moins cher</a></li>
                    <li><a href="#comparatif">Comparatif des meilleures offres 2026</a></li>
                    <li><a href="#erreurs">Les erreurs qui font exploser le prix</a></li>
                    <li><a href="#faq">Foire aux questions</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <h2 id="pourquoi">Pourquoi l'assurance jeune conducteur coute-t-elle si cher ?</h2>
                <p>C'est le premier choc apres l'euphorie du permis obtenu : la facture d'assurance auto. Un jeune
                    conducteur paie en moyenne entre <strong>1 200 et 2 500 euros par an</strong> pour une simple
                    formule tous risques.</p>
                <p>La raison est purement statistique. Les 18-25 ans representent <strong>21% des tues sur la
                        route</strong> alors qu'ils ne constituent que 9% des conducteurs. Le risque de sinistre
                    materiel ou corporel grave est demontre comme superieur dans les premieres annees.</p>

                <figure>
                    <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?q=80&w=1000&auto=format&fit=crop"
                        alt="Jeune conducteur au volant">
                    <figcaption>La zone de danger maximum : les 3 premieres annees</figcaption>
                </figure>

                <h2 id="surprime">La surprime jeune conducteur : le calcul exact</h2>
                <p>Le mecanisme est degressif : pendant les 3 premieres annees suivant l'obtention du permis, une
                    majoration legale est appliquee sur votre cotisation :</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Annee</th>
                                <th>Surprime (permis classique)</th>
                                <th>Surprime (conduite accompagnee)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Annee 1</strong></td>
                                <td>+ 100%</td>
                                <td>+ 50%</td>
                            </tr>
                            <tr>
                                <td><strong>Annee 2</strong> (sans sinistre)</td>
                                <td>+ 50%</td>
                                <td>+ 25%</td>
                            </tr>
                            <tr>
                                <td><strong>Annee 3</strong> (sans sinistre)</td>
                                <td>+ 25%</td>
                                <td>0% (Fin de la surprime)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="astuces">7 astuces pour payer moins cher</h2>
                <p>Il existe des leviers reels pour reduire drastiquement votre prime des la premiere annee.</p>

                <h3>Option A : Le boitier telematique</h3>
                <p>C'est la grande tendance. Des assureurs comme YouDrive fournissent un boitier OBD qui analyse votre
                    conduite (freinages souples, vitesses respectees). Si vous roulez prudemment, vous pouvez recuperer
                    jusqu'a <strong>40% de votre mise</strong> mensuelle.</p>

                <h3>Option B : Le choix intelligent du modele</h3>
                <p>L'assureur se fie lourdement a la puissance dynamique et statistique du vehicule. Une <em>Peugeot 208
                        1.2 PureTech 75</em> coutera environ 40% moins cher a assurer qu'une simple <em>Audi A3 TDI
                        105</em> plus ancienne mais tissee au fer de lance.</p>

                <h2 id="comparatif">Le "Crash-Test" des assureurs 2026</h2>
                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Troupe</th>
                                <th>Prime Annuelle (Clio IV)</th>
                                <th>Le verdict Le garage expert Auto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Direct Assurance</strong></td>
                                <td>680 â‚¬</td>
                                <td>Imbattable avec le capteur Drive</td>
                            </tr>
                            <tr>
                                <td><strong>L'Olivier</strong></td>
                                <td>720 â‚¬</td>
                                <td>Excellent compromis digital</td>
                            </tr>
                            <tr>
                                <td><strong>Friday</strong></td>
                                <td>750 â‚¬</td>
                                <td>Parfait pour les petits rouleurs</td>
                            </tr>
                            <tr>
                                <td><strong>Macif</strong></td>
                                <td>920 â‚¬</td>
                                <td>Cher mais solide agence physique</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="erreurs">Alerte Rouge : Les erreurs qui ruinent votre budget</h2>
                <ul class="art-checklist">
                    <li>Chercher a assurer une Volkswagen Golf TDI 140ch en jeune permis.</li>
                    <li>S'abstenir de comparer et signer betement avec l'assureur des parents.</li>
                    <li>La fausse declaration "Trajet Prive" alors qu'elle sert a aller travailler (annulation du
                        contrat en cas de pepin).</li>
                    <li>Oublier de declarer que l'on a obtenu le permis via la filiere AAC.</li>
                </ul>

                <h2 id="faq">FAQ : Les reponses de nos experts</h2>
                <div class="art-faq">
                    <div class="art-faq-item">
                        <h3>A partir de quand le bonus s'applique-t-il vraiment ?</h3>
                        <p>Des la deuxieme annee d'assurance sans accident responsable, votre coefficient passe de 1.00
                            a 0.95 (soit -5% sur la prime de reference brute).</p>
                    </div>
                    <div class="art-faq-item">
                        <h3>Le fait de garer la voiture dans un garage ferme fait-il baisser le prix ?</h3>
                        <p>Oui. Une voiture qui dort dans un box securise voit generalement sa prime diminuer de 5 a 10%
                            (selon que la garantie Vol soit souscrite ou non).</p>
                    </div>
                </div>

            </div><!-- .art-content -->

            <!-- Premium Author Box -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"
                    class="art-author-avatar">
                <div class="art-author-info">
                    <span class="art-author-label">La Parole a L'expert</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Decouvrir toute la redaction</a>
                </div>
            </div>

            <!-- Heavy Conclusion Box -->
            <div class="art-conclusion">
                <h2>Le mot de la fin</h2>
                <p>Payer au prix fort sa premiere annee d'assurance n'est plus une fatalite absolue en 2026. Entre les
                    boitiers connectes, l'offre digitale foisonnante et le choix stratetgique d'un vehicule modeste,
                    vous avez toutes les cartes en main pour diviser la facture. Soyez prudent et roulez tranquille.</p>
            </div>

            <!-- Similar Articles Grid -->
            <section class="art-related">
                <h2 class="art-related-title">Toujours dans <a
                        href="/<?php echo $article['category']; ?>"><?php echo $current_cat['name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php foreach ($similar_articles as $rel): ?>
                        <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                            <div class="art-related-img">
                                <img src="<?php echo $rel['image']; ?>" alt="<?php echo $rel['title']; ?>">
                            </div>
                            <div class="art-related-body">
                                <h3><?php echo $rel['title']; ?></h3>
                                <p><?php echo $rel['excerpt']; ?></p>
                                <span class="art-related-meta"><?php echo $rel['author']; ?> &bull;
                                    <?php echo $rel['date']; ?></span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </section>

        </div><!-- .art-main-col -->

        <!-- ASYMMETRIC RIGHT SIDEBAR -->
        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">

                <!-- Block: Same Silo IL -->
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">
                        Dans ce dossier
                    </div>
                    <?php foreach ($same_cat_articles as $sa): ?>
                        <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                            <div class="art-side-img">
                                <img src="<?php echo $sa['image']; ?>" alt="<?php echo $sa['title']; ?>">
                                <span class="art-side-cat-pill"
                                    style="background: <?php echo $current_cat['color']; ?>"><?php echo $sa['cat']; ?></span>
                            </div>
                            <h4><?php echo $sa['title']; ?></h4>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Block: Recent Cross-Silo IL -->
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">
                        A la Une
                    </div>
                    <?php foreach ($recent_articles as $ra): ?>
                        <a href="<?php echo $ra['url']; ?>" class="art-side-card">
                            <div class="art-side-img">
                                <img src="<?php echo $ra['image']; ?>" alt="<?php echo $ra['title']; ?>">
                            </div>
                            <h4><?php echo $ra['title']; ?></h4>
                        </a>
                    <?php endforeach; ?>
                </div>

            </div>
        </aside>

    </div><!-- .art-layout-wrapper -->
</article>

<?php include 'footer.php'; ?>
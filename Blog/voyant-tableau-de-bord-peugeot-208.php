<?php
// published: 2026-04-27 14:00
/**
 * voyant-tableau-de-bord-peugeot-208.php
 */

$page_title       = "Voyants tableau de bord Peugeot 208 : Signification et solutions immédiates";
$page_description = "Voyant rouge, orange ou STOP sur votre Peugeot 208 ? Ce guide décrypte chaque témoin par couleur et motorisation (PureTech, BlueHDi, e-208) avec la marche à suivre.";

$article = [
    'title'          => "Voyants du tableau de bord Peugeot 208 : Signification et solutions immédiates",
    'subtitle'       => "Un symbole inconnu s'est allumé sur votre 208 ? Ce guide ultra-concis identifie le problème en quelques secondes et vous dit quoi faire — essence, diesel, hybride ou e-208.",
    'category'       => 'entretien',
    'category_name'  => 'Entretien & Réparation',
    'category_color' => '#dc2626',
    'tags'           => ['Peugeot 208', 'Voyants Tableau de Bord', 'Diagnostic', 'e-208'],
    'image'          => '/Image/voyant-tableau-de-bord-peugeot-2081.webp',
    'date'           => '27 Avril 2026',
    'author'         => 'David',
    'author_role'    => 'Expert Entretien & Réparation',
    'author_img'     => '/Image/david.png',
    'author_bio'     => "David intervient en atelier depuis plus de 15 ans sur toutes les marques. Expert en diagnostic électronique embarqué, il partage ses retours d'expérience terrain pour aider chaque conducteur à comprendre, entretenir et réparer son véhicule au meilleur coût.",
    'reading_time'   => '5 min',
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

<!-- CSS spécifique article : table voyants + indicateurs couleur -->
<style>
    .voy-rouge { color: #dc2626; font-weight: 700; }
    .voy-orange { color: #ea580c; font-weight: 700; }
    .voy-vert { color: #059669; font-weight: 700; }
    .evit-table-wrap { overflow-x: auto; margin: 24px 0; -webkit-overflow-scrolling: touch; }
    .evit-table { width: 100%; border-collapse: collapse; font-size: 0.88rem; min-width: 480px; }
    .evit-table th { background: <?php echo $article['category_color']; ?>; color: #fff; padding: 10px 13px; text-align: left; font-size: 0.81rem; text-transform: uppercase; letter-spacing: 0.04em; }
    .evit-table td { padding: 10px 13px; border-bottom: 1px solid rgba(255,255,255,0.07); vertical-align: middle; }
    .evit-table tr:nth-child(even) td { background: rgba(220,38,38,0.05); }
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
             alt="Tableau de bord Peugeot 208 avec voyant moteur orange allumé sur l'i-Cockpit"
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
                    <li><strong>Code couleur :</strong> Rouge = arrêt immédiat ; Orange = prise en charge rapide ; Vert/Bleu = fonctionnement normal.</li>
                    <li><strong>Voyant STOP au démarrage :</strong> Un allumage fugace est normal — c'est le check d'initialisation du tableau de bord.</li>
                    <li><strong>PureTech et voyant moteur :</strong> Peut signaler une crépine bouchée par des débris de courroie — ne roulez pas davantage.</li>
                    <li><strong>Batterie rouge en roulant :</strong> L'alternateur ne charge plus. Coupez la clim et la radio, rejoignez un garage sans délai.</li>
                    <li><strong>Sous-gonflage :</strong> Après regonflage, réinitialisez via l'écran (Menu Conduite > Sous-gonflage > Réinitialiser) pour éteindre le voyant.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#code-couleur">La règle d'or : le code couleur des voyants</a></li>
                    <li><a href="#5-voyants-frequents">Les 5 voyants les plus fréquents sur la Peugeot 208</a></li>
                    <li><a href="#cas-specifiques">Cas spécifiques et problèmes fréquents</a></li>
                    <li><a href="#faq-voyants">FAQ : Réponses rapides</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Un symbole inconnu vient de s'allumer sur votre Peugeot 208 ? Pas de panique. L'affichage d'un témoin sur le tableau de bord est le moyen de communication de votre voiture. Ce guide vous aide à identifier le problème instantanément et vous donne la marche à suivre, que vous rouliez en version essence (PureTech), diesel (BlueHDi), hybride ou électrique (e-208).</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="code-couleur">La règle d'or : le code couleur des voyants</h2>

                <p>Avant de chercher l'icône exacte, regardez la couleur. C'est elle qui dicte l'urgence de la situation :</p>
                <ul>
                    <li><strong class="voy-rouge">Rouge (Danger de casse ou de sécurité) :</strong> Arrêt immédiat obligatoire dès que les conditions de sécurité le permettent. Coupez le moteur.</li>
                    <li><strong class="voy-orange">Orange / Jaune (Anomalie ou Avertissement) :</strong> Un système est défaillant ou nécessite votre attention. Vous pouvez rouler prudemment jusqu'à un garage. Consultez notre <a href="/Blog/voyant-orange-peugeot">guide complet du voyant orange Peugeot</a>.</li>
                    <li><strong class="voy-vert">Vert / Bleu (Information) :</strong> Fonctionnement normal d'un système — phares allumés, régulateur activé, "READY" sur e-208.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="5-voyants-frequents">Les 5 voyants les plus fréquents sur la Peugeot 208</h2>

                <div class="evit-table-wrap">
                    <table class="evit-table">
                        <thead>
                            <tr>
                                <th data-label="Voyant">Voyant</th>
                                <th data-label="Signification">Signification</th>
                                <th data-label="Action">Action immédiate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="Voyant"><strong class="voy-rouge">Rouge — STOP (fixe)</strong></td>
                                <td data-label="Signification">Alerte maximale de sécurité (freinage, direction, moteur).</td>
                                <td data-label="Action">Arrêt immédiat. Appelez une dépanneuse.</td>
                            </tr>
                            <tr>
                                <td data-label="Voyant"><strong class="voy-rouge">Rouge — Burette d'huile</strong></td>
                                <td data-label="Signification">Pression d'huile moteur trop faible.</td>
                                <td data-label="Action">Arrêt immédiat. Vérifiez le niveau à froid. Si correct, garage.</td>
                            </tr>
                            <tr>
                                <td data-label="Voyant"><strong class="voy-orange">Orange — Voyant Moteur</strong></td>
                                <td data-label="Signification">Défaut du système antipollution ou injection.</td>
                                <td data-label="Action">Roulez doucement vers un garage. S'il clignote : arrêt immédiat.</td>
                            </tr>
                            <tr>
                                <td data-label="Voyant"><strong class="voy-orange">Orange — SERVICE</strong></td>
                                <td data-label="Signification">Échéance de révision ou anomalie mineure.</td>
                                <td data-label="Action">Consultez l'écran tactile ou planifiez votre vidange.</td>
                            </tr>
                            <tr>
                                <td data-label="Voyant"><strong class="voy-orange">Orange — UREA / AdBlue</strong></td>
                                <td data-label="Signification">Niveau d'AdBlue bas (diesel BlueHDi).</td>
                                <td data-label="Action">Faites l'appoint (minimum 5 L) avant le blocage du démarrage.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="cas-specifiques">Cas spécifiques et problèmes fréquents</h2>

                <h3>1. Le voyant "STOP" s'allume furtivement au démarrage</h3>
                <p>De nombreux propriétaires de 208 signalent un voyant STOP rouge qui s'allume une fraction de seconde au moment de tourner la clé, puis disparaît. C'est normal — il s'agit du check d'initialisation du tableau de bord. S'il ne reste pas allumé, il n'y a aucun problème.</p>

                <h3>2. Le voyant Moteur reste allumé (PureTech)</h3>
                <p>Sur les moteurs essence 1.2 PureTech, un voyant moteur allumé ou clignotant, parfois accompagné du voyant pression d'huile, peut être le symptôme d'une courroie de distribution qui s'effrite et bouche la crépine d'huile. C'est un problème majeur. Découvrez-en plus sur les <a href="/Blog/moteur-peugeot-a-eviter">moteurs Peugeot à éviter</a>.</p>

                <img src="/Image/voyant-tableau-de-bord-peugeot-2082.webp"
                     alt="Gros plan sur le voyant moteur orange allumé sur le combiné d'instrumentation Peugeot 208 PureTech"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <h3>3. Le voyant de Batterie rouge en roulant</h3>
                <p>Il ne signifie pas que votre batterie est morte, mais que votre <strong>alternateur ne recharge plus la batterie</strong>. Si vous continuez de rouler, votre voiture va s'éteindre complètement en quelques kilomètres. Coupez les gros consommateurs (clim, radio) et rejoignez le garage le plus proche.</p>

                <h3>4. Spécificités des Peugeot e-208 et hybrides</h3>
                <p>Sur ces motorisations, le tableau de bord diffère légèrement :</p>
                <ul>
                    <li><strong>Voyant vert "READY" :</strong> Indique que le véhicule est prêt à démarrer — le moteur électrique étant silencieux, ce témoin est indispensable.</li>
                    <li><strong>Voyant orange (tortue) :</strong> Mode puissance réduite. La batterie de traction est presque vide ou en surchauffe.</li>
                    <li><strong>Voyant rouge (prise avec point d'exclamation) :</strong> Défaut du câble de charge ou de la borne. Vérifiez la connexion avant d'appeler l'assistance.</li>
                </ul>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Un voyant orange sur un PureTech ne doit jamais être ignoré plus de 24 heures. Si le voyant moteur s'allume en même temps que le voyant pression d'huile, coupez le moteur immédiatement — chaque kilomètre supplémentaire peut transformer une réparation à 800 € en remplacement moteur à 6 000 €.</p>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-voyants">FAQ : Réponses rapides</h2>

                <div itemscope itemtype="https://schema.org/FAQPage">
                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name">Comment éteindre le voyant Service après une vidange ?</h3>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Coupez le contact. Maintenez enfoncé le bouton de remise à zéro du compteur kilométrique (souvent au bout du commodo d'essuie-glace). Mettez le contact sans démarrer : un compte à rebours de 10 secondes s'affiche. Une fois à zéro, relâchez le bouton et coupez le contact.</p>
                        </div>
                    </div>

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name">Pourquoi le voyant de pneu orange s'affiche-t-il sur ma 208 ?</h3>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">C'est l'alerte de sous-gonflage. Vérifiez la pression des 4 pneus à froid dans une station. Une fois regonflés, réinitialisez le système via l'écran tactile (Menu Conduite > Sous-gonflage > Réinitialiser) pour éteindre le voyant.</p>
                        </div>
                    </div>

                    <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                        <h3 itemprop="name">Où télécharger le manuel complet de la Peugeot 208 ?</h3>
                        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                            <p itemprop="text">Pour consulter l'intégralité des symboles officiels, vous pouvez <a href="/Blog/manuel-d-utilisation-peugeot-208-pdf">télécharger le manuel de la Peugeot 208 en PDF</a> sur notre site, gratuitement.</p>
                        </div>
                    </div>
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
                <p>Un voyant allumé sur votre Peugeot 208 n'est jamais anodin, mais il n'est pas toujours synonyme de catastrophe. La couleur du témoin vous donne la clé : rouge impose l'arrêt immédiat, orange vous laisse le temps d'un diagnostic. En cas de doute persistant, un passage en atelier pour une lecture des codes défauts reste la seule décision vraiment responsable.</p>
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
            "datePublished" => "2026-04-27T14:00:00+02:00",
            "dateModified"  => "2026-04-27T14:00:00+02:00",
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

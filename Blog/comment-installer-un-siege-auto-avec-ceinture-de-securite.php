// published: 2026-04-12 10:00
/**
 * comment-installer-un-siege-auto-avec-ceinture-de-securite.php
 */
$page_title       = "Installer un siège auto avec la ceinture de sécurité : guide complet";
$page_description = "Comment installer un siège auto avec la ceinture de sécurité ? Guide pas-à-pas par groupe, checklist de sécurité et comparatif Isofix vs ceinture.";

$article = [
    'title'          => "Installer un siège auto avec la ceinture : Guide complet pour une sécurité optimale",
    'subtitle'       => "Dos à la route ou face à la route, coque bébé ou rehausseur : la méthode pas-à-pas pour un arrimage irréprochable selon le groupe de votre enfant.",
    'category'       => 'entretien',
    'category_name'  => 'Entretien & Réparation',
    'category_color' => '#dc2626',
    'tags'           => ['Siège Auto', 'Sécurité Enfant', 'Ceinture de Sécurité', 'Installation', 'Guide Pratique'],
    'image'          => '/Image/comment-installer-un-siege-auto-avec-ceinture-de-securite1.webp',
    'date'           => '12 Avril 2026',
    'author'         => 'David',
    'author_role'    => 'Mécanicien & Expert Sécurité Auto',
    'author_img'     => '/Image/david.png',
    'author_bio'     => "David est mécanicien automobile avec 15 ans d'expérience en atelier. Passionné de sécurité routière, il forme régulièrement les parents à l'installation correcte des dispositifs de retenue pour enfants.",
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

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Installation d'un siège auto avec ceinture de sécurité sur banquette arrière"
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
                    <li><strong>Place idéale :</strong> Toujours la banquette arrière ; désactiver l'airbag passager si la coque bébé est à l'avant.</li>
                    <li><strong>Dos à la route :</strong> Obligatoire jusqu'à 15 mois (norme i-Size) ; recommandé jusqu'à 4 ans pour protéger les vertèbres cervicales.</li>
                    <li><strong>Couleur des guides :</strong> Bleu = dos à la route, rouge = face à la route — suivre scrupuleusement le code couleur du fabricant.</li>
                    <li><strong>Test de stabilité :</strong> Le siège ne doit pas bouger de plus de 3 cm latéralement une fois installé et la ceinture tendue au maximum.</li>
                    <li><strong>Manteau d'hiver :</strong> Ne jamais attacher un enfant avec une doudoune — retirer le vêtement, attacher, puis couvrir par-dessus les sangles.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#fondamentaux-placement-reglementation">Les fondamentaux : placement et réglementation</a></li>
                    <li><a href="#coque-bebe-groupe-0-dos-route">Coque bébé (Groupe 0+) : installation dos à la route</a></li>
                    <li><a href="#siege-deuxieme-age-groupe-1">Siège deuxième âge (Groupe 1) : passage de ceinture et tension</a></li>
                    <li><a href="#rehausseur-dossier-groupe-2-3">Rehausseur avec dossier (Groupe 2/3) : sécuriser l'enfant et le siège</a></li>
                    <li><a href="#checklist-securite-points-controle">Checklist de sécurité : les points de contrôle essentiels</a></li>
                    <li><a href="#isofix-ou-ceinture-notre-verdict">Isofix ou ceinture : notre verdict sans appel</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Attacher son enfant en voiture ne laisse aucune place à l'approximation. Si le système Isofix s'est largement démocratisé, l'installation d'un siège auto avec la ceinture de sécurité reste une étape incontournable pour de nombreux parents. Comment garantir un arrimage parfait sur la banquette ? Quelle est la bonne méthode selon le groupe de votre enfant ? Ce guide vous donne toutes les clés pour éviter les erreurs de manipulation qui compromettent la sécurité vitale de votre enfant en cas de collision.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="fondamentaux-placement-reglementation">Les fondamentaux : placement et réglementation</h2>

                <img src="/Image/comment-installer-un-siege-auto-avec-ceinture-de-securite2.webp" alt="Schéma réglementaire de placement du siège auto et désactivation de l'airbag" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p>Avant même de manipuler les sangles, le choix de la place dans l'habitacle est déterminant pour la protection de votre passager.</p>

                <p><strong>La place la plus sûre :</strong> Privilégiez systématiquement la banquette arrière. La place arrière droite (côté trottoir) est idéale pour sortir l'enfant en toute sécurité à l'arrêt. La place centrale est également une excellente option si elle est équipée d'une ceinture trois points, car elle éloigne l'enfant des zones d'impact latéral.</p>

                <p><strong>La règle stricte de l'airbag :</strong> Si vous devez exceptionnellement placer une coque bébé à l'avant, le code de la route exige de désactiver l'airbag passager. Un déclenchement intempestif en cas de choc frontal serait mortel pour le nourrisson.</p>

                <p><strong>Le sens de circulation :</strong> L'orientation dos à la route est obligatoire jusqu'à 15 mois selon la norme i-Size, ou 9 kg avec l'ancienne norme R44/04. Les experts en accidentologie recommandent de maintenir cette position le plus longtemps possible — idéalement jusqu'à 4 ans — car elle s'avère cinq fois plus sûre pour protéger les vertèbres cervicales fragiles de l'enfant.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="coque-bebe-groupe-0-dos-route">Coque bébé (Groupe 0+) : installation dos à la route</h2>

                <p>La coque bébé s'installe exclusivement dos à la route. Voici la procédure en quatre étapes pour un arrimage irréprochable.</p>

                <p><strong>Étape 1 — Positionner la coque sur la banquette :</strong> Placez la coque bébé strictement dos à la route. Assurez-vous que la surface inférieure repose bien à plat contre l'assise du siège de la voiture, sans espace vide.</p>

                <p><strong>Étape 2 — Passer la sangle abdominale dans les guides :</strong> Tirez doucement sur la ceinture de sécurité et faites glisser la partie basse (la sangle abdominale) dans les encoches latérales de la coque. Ces guides-sangles sont universellement signalés par la couleur bleue pour une orientation dos à la route.</p>

                <img src="/Image/comment-installer-un-siege-auto-avec-ceinture-de-securite3.webp" alt="Sangle abdominale dans l'encoche bleue de la coque bébé dos à la route" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p><strong>Étape 3 — Contourner la coque avec la sangle diagonale :</strong> Saisissez la partie haute (la sangle diagonale ou sangle d'épaule) et faites-la passer derrière le dossier du siège bébé. Insérez-la dans le guide de fixation arrière, également marqué en bleu.</p>

                <img src="/Image/comment-installer-un-siege-auto-avec-ceinture-de-securite4.webp" alt="Sangle diagonale contournant le dossier de la coque bébé" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p><strong>Étape 4 — Boucler, tendre au maximum et bloquer l'enrouleur :</strong> Enclenchez l'embout métallique dans la boucle de verrouillage. Tirez fermement sur la sangle diagonale en direction de l'enrouleur pour plaquer violemment la coque contre le dossier de la banquette. L'ensemble doit être parfaitement rigide.</p>

                <blockquote class="art-blockquote">
                    💡 <strong>Conseil Expert :</strong> Dans certaines voitures citadines, la ceinture ne fait pas physiquement le tour de la coque. N'utilisez jamais de prolongateur de ceinture acheté en ligne : ils ne résistent pas aux crash-tests. Si la sangle bloque, testez la place centrale de la banquette arrière ou envisagez une base ceinturée distincte.
                    <cite>— David, mécanicien & expert sécurité auto</cite>
                </blockquote>

                <!-- ══════════════════════════════════ -->
                <h2 id="siege-deuxieme-age-groupe-1">Siège deuxième âge (Groupe 1) : passage de ceinture et tension</h2>

                <p>Le siège Groupe 1 accueille les enfants à partir de 9 kg environ. Son installation par ceinture requiert une attention particulière au cheminement des sangles et au verrouillage de la pince de blocage.</p>

                <p><strong>Étape 1 — Placer le siège dans le bon sens :</strong> Posez le siège auto sur la banquette dans le sens adapté à votre dispositif. Si la conception du modèle le permet, privilégiez le maintien en position dos à la route.</p>

                <p><strong>Étape 2 — Suivre le code couleur dans l'armature :</strong> Faites passer la ceinture de sécurité à travers l'armature en plastique du siège. Suivez scrupuleusement le cheminement indiqué par le fabricant : encoches bleues pour une installation dos à la route, encoches rouges pour un positionnement face à la route.</p>

                <p><strong>Étape 3 — Boucler la ceinture et verrouiller la pince de blocage rouge :</strong> Une fois la boucle verrouillée, glissez la sangle diagonale dans le loquet de retenue (petite pince rouge sur le côté supérieur du siège). L'utilisation de cette pince est indispensable : elle verrouille la tension de la sangle, empêchant le siège de glisser ou de basculer dans les virages serrés.</p>

                <img src="/Image/comment-installer-un-siege-auto-avec-ceinture-de-securite5.webp" alt="Verrouillage de la pince de blocage rouge sur le siège auto Groupe 1" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p><strong>Étape 4 — Faire peser tout son poids sur le siège pour chasser le mou :</strong> Posez un genou dans l'assise du siège enfant et appliquez-y tout votre poids. Simultanément, tirez un grand coup sec sur la ceinture pour éliminer le moindre centimètre de mou avant de refermer définitivement la pince de blocage.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="rehausseur-dossier-groupe-2-3">Rehausseur avec dossier (Groupe 2/3) : sécuriser l'enfant et le siège</h2>

                <img src="/Image/comment-installer-un-siege-auto-avec-ceinture-de-securite6.webp" alt="Enfant bien positionné dans un rehausseur avec passages de ceinture corrects" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p>Le rehausseur avec dossier concerne les enfants à partir de 15 kg. L'enfant y est retenu par la ceinture du véhicule, guidée par les encoches du siège. La posture de l'enfant conditionne directement l'efficacité du dispositif.</p>

                <p><strong>Étape 1 — Asseoir l'enfant au fond du rehausseur :</strong> Installez votre enfant de manière à ce que son dos et son bassin soient plaqués au fond du siège. Une bonne posture est le premier critère d'efficacité d'un rehausseur.</p>

                <p><strong>Étape 2 — Glisser la sangle abdominale sous les accoudoirs :</strong> Tirez la ceinture du véhicule et passez la sangle abdominale bien à plat sous les deux accoudoirs du rehausseur. Elle doit reposer sur le haut des cuisses et le bassin de l'enfant, jamais sur son ventre.</p>

                <p><strong>Étape 3 — Placer la sangle diagonale dans le guide-sangle de l'épaule :</strong> Faites glisser la sangle supérieure dans le guide rouge situé sous la têtière du rehausseur. Ce dispositif garantit que la ceinture repose sur le milieu de la clavicule et ne vient pas cisailler le cou de l'enfant.</p>

                <p><strong>Étape 4 — Ajuster la têtière et tendre la ceinture :</strong> Réglez l'appui-tête à la bonne hauteur (juste au-dessus des épaules de l'enfant), enclenchez la boucle de verrouillage et tirez sur la ceinture pour la tendre convenablement.</p>

                <blockquote class="art-blockquote">
                    ⚠️ <strong>Alerte Sécurité :</strong> Contrairement à un système Isofix, un rehausseur fixé uniquement par la ceinture devient totalement libre lorsque l'enfant n'est plus dedans. Pensez à toujours rattacher le siège vide avec la ceinture. En cas de freinage brutal, un bloc de plastique de cinq kilos se transforme en projectile mortel pour les passagers avant.
                    <cite>— David, mécanicien & expert sécurité auto</cite>
                </blockquote>

                <!-- ══════════════════════════════════ -->
                <h2 id="checklist-securite-points-controle">Checklist de sécurité : les points de contrôle essentiels</h2>

                <p>L'erreur humaine est la première cause de défaillance des dispositifs de retenue. Avant de prendre la route, effectuez systématiquement cet audit visuel et tactile.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Point de contrôle</th>
                                <th>Ce qu'il faut vérifier</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Ceinture vrillée</strong></td>
                                <td>La sangle doit être parfaitement à plat sur toute sa longueur. Une ceinture entortillée perd sa capacité d'absorption cinétique.</td>
                            </tr>
                            <tr>
                                <td><strong>Test du pincement</strong></td>
                                <td>Si vous parvenez à pincer la sangle entre le pouce et l'index, le serrage est insuffisant. La sangle doit être tendue au maximum.<br><img src="/Image/comment-installer-un-siege-auto-avec-ceinture-de-securite7.webp" alt="Le test du pincement pour vérifier la tension de la ceinture" loading="lazy" style="width:100%;height:auto;border-radius:6px;margin-top:0.6rem;"></td>
                            </tr>
                            <tr>
                                <td><strong>Manteau d'hiver</strong></td>
                                <td>Ne jamais attacher l'enfant avec une doudoune épaisse. En cas de choc, le tissu se comprime et libère un espace vide dangereux.<br><img src="/Image/comment-installer-un-siege-auto-avec-ceinture-de-securite8.webp" alt="Danger du manteau d'hiver sous la ceinture de sécurité" loading="lazy" style="width:100%;height:auto;border-radius:6px;margin-top:0.6rem;"></td>
                            </tr>
                            <tr>
                                <td><strong>Cheminement des sangles</strong></td>
                                <td>Sangle basse sur les os du bassin, sangle haute sur l'épaule. Toute sangle sur l'abdomen ou la gorge est un danger de mort.</td>
                            </tr>
                            <tr>
                                <td><strong>Stabilité de la base</strong></td>
                                <td>Empoignez la base près de la boucle et secouez latéralement. Le jeu toléré est inférieur à 3 centimètres.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="isofix-ou-ceinture-notre-verdict">Isofix ou ceinture : notre verdict sans appel</h2>

                <img src="/Image/comment-installer-un-siege-auto-avec-ceinture-de-securite9.webp" alt="Comparatif installation ceinture de sécurité vs système Isofix" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p>S'il est parfaitement exécuté, l'arrimage avec une ceinture de sécurité répond aux normes en vigueur et protège efficacement. Cependant, notre recommandation d'expert est tranchée : si votre véhicule est équipé de points d'ancrage métalliques, choisissez systématiquement un système Isofix.</p>

                <p>La raison est purement pratique. Installer un siège auto sous la pluie, dans la précipitation, ou avec un enfant agité décuple le risque de mauvaise manipulation (ceinture détendue, mauvais guide-sangle utilisé). Le système Isofix annule totalement cette marge d'erreur humaine grâce à sa fixation instantanée et ses voyants de contrôle verts.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">🔧 Le mot du Garage Expert Auto</div>
                    <p style="margin: 0;">Pour la sécurité de votre enfant, l'automatisme et la rigidité de l'Isofix surclassent toujours la complexité de l'installation manuelle par ceinture. Si votre véhicule le permet, ne prenez aucun risque : passez à l'Isofix.</p>
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
                <p>Un siège auto bien installé peut faire la différence entre la vie et la mort en cas de collision. Quelle que soit la méthode choisie — ceinture ou Isofix — le soin apporté à chaque étape est non négociable. Vérifiez l'installation à chaque trajet, ne laissez jamais de mou dans les sangles, et n'hésitez pas à consulter un spécialiste pour un contrôle gratuit dans les Points Relais Bébé ou les maternités équipées.</p>
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
            "datePublished" => "2026-04-12T10:00:00+02:00",
            "dateModified"  => "2026-04-12T10:00:00+02:00",
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

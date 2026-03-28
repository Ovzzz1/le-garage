<?php
/**
 * voyant-orange-peugeot.php
 */

$page_title = "Voyant Orange sur Peugeot : Identifier le Symbole et Savoir Quoi Faire";
$page_description = "Voyant orange allumé sur votre Peugeot ? Bloc moteur, voiture dans un cercle, point d'exclamation... Identifiez votre voyant en 30 secondes et sachez exactement quoi faire.";

$article = [
    'title'          => 'Voyant Orange sur Peugeot : Identifier le Symbole et Savoir Quoi Faire',
    'subtitle'       => 'Bloc moteur, voiture dans un cercle, point d\'exclamation… plusieurs voyants orange coexistent sur le tableau de bord. Voici comment identifier le vôtre et agir correctement.',
    'category'       => 'entretien',
    'category_name'  => 'Entretien & Réparation',
    'category_color' => '#dc2626',
    'tags'           => ['Peugeot', 'Voyants', 'Diagnostic', '208', '2008', '3008'],
    'image'          => '/Image/voyant-orange-peugeot1.webp',
    'date'           => '28 Mars 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Mécanique',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => 'Avec des centaines de diagnostics OBD à son actif, Arnaud décrypte les voyants et pannes des véhicules Stellantis pour vous éviter les mauvaises surprises en atelier.',
    'reading_time'   => '7 min',
];

$categories = [
    'assurance' => ['name' => 'Assurance & Financement',  'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien' => ['name' => 'Entretien & Réparation',   'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Électrique & Hybride',    'color' => '#059669', 'slug' => 'electrique'],
    'occasion'  => ['name' => 'Achat & Occasion',         'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto'      => ['name' => 'Moto & 2 Roues',           'color' => '#ea580c', 'slug' => 'moto'],
    'permis'    => ['name' => 'Permis',                   'color' => '#0891b2', 'slug' => 'permis'],
];

// ─── Scan dynamique du Blog/ pour le linking interne ───
$current_slug      = pathinfo(__FILE__, PATHINFO_FILENAME);
$same_cat_articles = [];
$all_other_articles = [];
$blog_dir          = __DIR__;

if (is_dir($blog_dir)) {
    $files = glob($blog_dir . '/*.php');
    foreach ($files as $file) {
        $file_slug = pathinfo($file, PATHINFO_FILENAME);
        if ($file_slug === $current_slug) continue;

        $other_article = null;
        $content = file_get_contents($file);

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
        <img src="<?php echo $article['image']; ?>" alt="Voyants orange allumés sur le tableau de bord d'une Peugeot" class="art-hero-bg">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a>
                    <span class="art-bc-sep">/</span>
                    <span>Voyants &amp; Diagnostic</span>
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
                <div class="art-tldr-title">Réponse directe (TL;DR)</div>
                <ul>
                    <li><strong>Plusieurs voyants orange</strong> peuvent s'allumer en même temps sur un Peugeot. Ils n'ont pas tous la même signification.</li>
                    <li><strong>Bloc moteur orange (check engine) :</strong> défaut calculateur. Fixe = finissez le trajet, faites diagnostiquer dans la semaine. Clignotant = atelier sous 24h.</li>
                    <li><strong>Voiture dans un cercle + A ou OFF :</strong> Stop &amp; Start. Aucune urgence dans la quasi-totalité des cas.</li>
                    <li><strong>Voiture dans un cercle soulignée :</strong> Freinage Automatique d'Urgence (FAU) désactivé. Vérifiez vos ceintures en premier.</li>
                    <li><strong>Aucun voyant orange n'impose l'arrêt immédiat.</strong> C'est le rouge qui l'impose.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Au sommaire</div>
                <ol>
                    <li><a href="#identification">Les voyants orange Peugeot : ce que chacun signifie</a></li>
                    <li><a href="#voiture-cercle">La voiture dans un cercle : Stop &amp; Start ou FAU ?</a></li>
                    <li><a href="#autres-voyants">Les autres voyants orange à connaître</a></li>
                    <li><a href="#rouler">Peut-on continuer à rouler ?</a></li>
                    <li><a href="#reset">Réinitialiser le voyant service sans outil</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ol>
            </div>

            <div class="art-content">

                <!-- ═══════════════════════════════════════════════
                     SECTION 1 — VOYANT MOTEUR
                ═══════════════════════════════════════════════ -->
                <h2 id="identification">Les voyants orange Peugeot : ce que chacun signifie</h2>

                <h3>Le voyant moteur orange (check engine)</h3>
                <p>C'est le bloc moteur orange, parfois confondu avec d'autres symboles. Il signale un défaut détecté par le calculateur moteur : capteur défaillant, problème d'injection, anomalie d'allumage.</p>
                <p><strong>Fixe :</strong> vous pouvez finir votre trajet. Faites diagnostiquer dans la semaine. Un scanner OBD lira le code défaut en quelques minutes.</p>
                <p><strong>Clignotant :</strong> ratés d'allumage en cours. Réduisez la vitesse, évitez les hauts régimes. Passage en atelier dans les 24h. Continuer à rouler risque d'endommager le catalyseur.</p>

                <blockquote style="border-left: 4px solid #f97316; padding: 14px 18px; background: #fff7ed; margin: 24px 0; border-radius: 0 8px 8px 0;">
                    Ne l'ignorez pas. Fixe ou clignotant, le défaut ne disparaîtra pas seul. Un voyant moteur actif au contrôle technique, c'est une contre-visite assurée.
                </blockquote>

                <!-- IMAGE 1 -->
                <img src="/Image/voyant-orange-peugeot1.webp"
                     alt="Voyant moteur orange (check engine) allumé sur le tableau de bord d'une Peugeot"
                     style="width:100%; border-radius:10px; margin: 24px 0;">

                <!-- ═══════════════════════════════════════════════
                     SECTION 2 — VOITURE DANS UN CERCLE
                ═══════════════════════════════════════════════ -->
                <h2 id="voiture-cercle">La voiture dans un cercle : Stop &amp; Start ou FAU ?</h2>
                <p>Ce symbole existe en plusieurs variantes. Le détail visuel change tout.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Ce que vous voyez</th>
                                <th>Ce que c'est</th>
                                <th>Urgence</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Voiture dans cercle + <strong>A</strong></td>
                                <td>Stop &amp; Start actif (moteur coupé à l'arrêt)</td>
                                <td><span style="color:#16a34a; font-weight:600;">Aucune</span></td>
                            </tr>
                            <tr>
                                <td>Voiture dans cercle + <strong>OFF</strong></td>
                                <td>Stop &amp; Start désactivé (automatique ou manuel)</td>
                                <td><span style="color:#16a34a; font-weight:600;">Aucune</span></td>
                            </tr>
                            <tr>
                                <td>Voiture dans cercle, <strong>soulignée</strong> en dessous</td>
                                <td>FAU désactivé (Freinage Automatique d'Urgence)</td>
                                <td><span style="color:#f97316; font-weight:600;">À vérifier</span></td>
                            </tr>
                            <tr>
                                <td>Voiture dans cercle, <strong>clignotante</strong></td>
                                <td>Défaut actif sur le système</td>
                                <td><span style="color:#dc2626; font-weight:600;">Atelier</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>Le Stop &amp; Start (A ou OFF)</h3>
                <p>Il se désactive seul quand il fait trop froid, trop chaud, ou que la batterie est faible. Il se réactive dès que les conditions redeviennent normales. Dans la quasi-totalité des cas : rien à faire.</p>

                <h3>La voiture soulignée : le FAU désactivé</h3>
                <p>Le système de freinage d'urgence automatique est désactivé. Première chose à vérifier : toutes les ceintures sont-elles bouclées ? C'est la cause numéro un — le système se coupe volontairement si une ceinture n'est pas attachée. Si les ceintures sont bouclées, le capteur de pare-chocs avant est peut-être encrassé (boue, neige). Si le voyant reste après ça, diagnostic en atelier.</p>

                <!-- IMAGE 2 -->
                <img src="/Image/voyant-orange-peugeot2.webp"
                     alt="Voyant voiture dans un cercle avec lettre A — Stop and Start sur Peugeot 2008"
                     style="width:100%; border-radius:10px; margin: 24px 0;">

                <!-- ═══════════════════════════════════════════════
                     SECTION 3 — AUTRES VOYANTS
                ═══════════════════════════════════════════════ -->
                <h2 id="autres-voyants">Les autres voyants orange à connaître</h2>

                <h3>Le point d'exclamation dans un triangle ou un cercle</h3>
                <p><strong>Dans un triangle :</strong> défaut général, souvent lié à un système électronique. Lisez le message affiché à l'écran, il précise généralement de quoi il s'agit.</p>
                <p><strong>Dans un cercle :</strong> pression des pneus insuffisante dans la majorité des cas. Vérifiez les pressions à froid. Le voyant s'éteint après quelques kilomètres une fois les pressions correctes.</p>

                <h3>Le voyant ESP / voiture avec lignes ondulées</h3>
                <p>Il s'allume brièvement quand le système intervient en virage ou sur sol glissant. C'est normal : il fait son travail. S'il reste allumé en permanence hors situation de glissance, le système est désactivé ou défaillant. Vous pouvez rouler, mais sans l'assistance électronique.</p>

                <h3>L'ABS et le frein à main électrique (EPB)</h3>
                <p><strong>ABS allumé :</strong> l'antiblocage est hors service. Le freinage classique fonctionne, mais vous perdez l'assistance en freinage d'urgence. Évitez les freinages brusques, diagnostic dès que possible.</p>
                <p><strong>EPB (P dans un cercle) :</strong> frein de stationnement serré ou défaut du système. Si vous roulez et qu'il s'allume, vérifiez immédiatement que le frein à main est bien relâché.</p>

                <h3>Le voyant antipollution</h3>
                <p>Il signale un défaut sur le système de dépollution : FAP (filtre à particules), catalyseur, vanne EGR, sonde lambda. Sur les BlueHDi diesel, il peut aussi indiquer un niveau d'AdBlue bas. Vous pouvez rouler à court terme, mais évitez les trajets exclusivement urbains à basse vitesse : un FAP encrassé a besoin d'une régénération sur route à vitesse soutenue. Laissez traîner trop longtemps et le FAP se bouche définitivement. Remplacement : entre 800 et 2 000 € selon le modèle.</p>

                <!-- ═══════════════════════════════════════════════
                     SECTION 4 — PEUT-ON ROULER
                ═══════════════════════════════════════════════ -->
                <h2 id="rouler">Peut-on continuer à rouler avec un voyant orange ?</h2>
                <p>La réponse dépend du voyant et de son comportement.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Voyant</th>
                                <th>Peut-on rouler ?</th>
                                <th>Délai max conseillé</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Stop &amp; Start (A / OFF)</td>
                                <td>Oui, sans restriction</td>
                                <td>Pas de limite</td>
                            </tr>
                            <tr>
                                <td>Service (clé à molette)</td>
                                <td>Oui</td>
                                <td>Révision dès que possible</td>
                            </tr>
                            <tr>
                                <td>Moteur fixe</td>
                                <td>Oui</td>
                                <td>Dans la semaine</td>
                            </tr>
                            <tr>
                                <td>Antipollution fixe</td>
                                <td>Oui</td>
                                <td>Quelques jours, pas des semaines</td>
                            </tr>
                            <tr>
                                <td>ABS</td>
                                <td>Oui, prudemment</td>
                                <td>Dans les 48h</td>
                            </tr>
                            <tr>
                                <td>FAU désactivé</td>
                                <td>Oui</td>
                                <td>Dès que possible</td>
                            </tr>
                            <tr>
                                <td>Moteur clignotant</td>
                                <td>Évitez</td>
                                <td>24h max, vitesse réduite</td>
                            </tr>
                            <tr>
                                <td>EPB</td>
                                <td>Vérifiez avant</td>
                                <td>Immédiat</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <blockquote style="border-left: 4px solid #dc2626; padding: 14px 18px; background: #fee2e2; margin: 24px 0; border-radius: 0 8px 8px 0;">
                    <strong>Aucun voyant orange n'impose l'arrêt immédiat.</strong> C'est le rouge qui impose l'arrêt. Si un voyant rouge s'allume en même temps qu'un orange : coupez le moteur et arrêtez-vous.
                </blockquote>

                <!-- ═══════════════════════════════════════════════
                     SECTION 5 — RESET SERVICE
                ═══════════════════════════════════════════════ -->
                <h2 id="reset">Réinitialiser le voyant service sans outil</h2>
                <p>Ce n'est pas une panne. C'est un compteur kilométrique qui vous rappelle qu'une révision est due. Il se réinitialise manuellement, sans valise de diagnostic, en moins de 30 secondes.</p>

                <p><strong>Procédure valable sur 208, 2008, 3008, Partner et la plupart des Peugeot :</strong></p>
                <ol>
                    <li>Coupez complètement le contact</li>
                    <li>Appuyez sur le bouton de remise à zéro du compteur journalier et maintenez-le enfoncé</li>
                    <li>Tout en maintenant, tournez le contact sur ON sans démarrer</li>
                    <li>Un décompte de 10 secondes apparaît avec l'icône service</li>
                    <li>Maintenez jusqu'à 0</li>
                    <li>Coupez le contact, rallumez — le voyant a disparu</li>
                </ol>

                <!-- IMAGE 3 -->
                <img src="/Image/voyant-orange-peugeot3.webp"
                     alt="Réinitialisation du voyant service sur Peugeot — bouton compteur journalier"
                     style="width:100%; border-radius:10px; margin: 24px 0;">

            </div><!-- .art-content -->

            <!-- Premium Author Box -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"
                     class="art-author-avatar">
                <div class="art-author-info">
                    <span class="art-author-label">Expert Diagnostic &amp; Voyants</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir l'équipe complète du Garage</a>
                </div>
            </div>

            <!-- FAQ -->
            <div class="art-conclusion">
                <h2 id="faq">FAQ — Voyants orange sur Peugeot</h2>

                <h3>Que signifie le cercle orange sur le tableau de bord d'une voiture ?</h3>
                <p>Un cercle orange contenant un symbole indique un avertissement non urgent. Le symbole à l'intérieur précise le système concerné : A = Stop &amp; Start, bloc moteur = check engine, voiture soulignée = FAU désactivé. Lisez le message affiché sur l'écran de bord — il est souvent explicite.</p>

                <h3>Que signifie un voyant orange rond avec une voiture dedans sur un Peugeot 2008 ?</h3>
                <p>Sur le 2008, c'est presque toujours le Stop &amp; Start. Orange avec OFF = système désactivé automatiquement (trop froid, trop chaud, batterie faible). Orange avec A = moteur coupé à l'arrêt, système actif. Les deux sont normaux. Si la voiture est soulignée en dessous, c'est le FAU — vérifiez vos ceintures en premier.</p>

                <h3>Que signifie le voyant orange sur une voiture en virage ?</h3>
                <p>La voiture avec des lignes ondulées qui s'allume en virage, c'est l'ESP qui intervient. Normal sur sol glissant ou en virage serré. S'il reste allumé après le virage en conditions normales, le système est peut-être désactivé ou défaillant.</p>

                <h3>Est-ce dangereux de rouler avec le voyant moteur orange allumé ?</h3>
                <p>Fixe : non à court terme, mais ignorez-le et vous risquez d'aggraver le problème. Clignotant : oui. Des ratés d'allumage en cours peuvent endommager le catalyseur rapidement — 24h max à vitesse réduite.</p>

                <h3>Est-ce dangereux de rouler avec le voyant antipollution ?</h3>
                <p>Pas immédiatement. Mais sur des trajets courts à basse vitesse répétés, un FAP peut se boucher définitivement si le problème n'est pas traité. Le remplacement coûte entre 800 et 2 000 € selon le modèle. Faites diagnostiquer dans la semaine.</p>

                <h3>Combien de temps peut-on rouler avec un voyant orange ?</h3>
                <p>Ça dépend du voyant. Stop &amp; Start ou service : indéfiniment pour finir le trajet. Moteur fixe ou antipollution : quelques jours, pas des semaines. Moteur clignotant : 24h max à vitesse réduite.</p>

                <h3>Quel voyant impose l'arrêt immédiat ?</h3>
                <p>Les voyants rouges : pression d'huile, température moteur, voyant STOP. Un voyant orange n'impose jamais l'arrêt immédiat seul. Si un rouge s'allume en même temps qu'un orange, arrêtez-vous sans attendre.</p>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a
                        href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                        alt="<?php echo htmlspecialchars($rel['title']); ?>">
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
                                        alt="<?php echo htmlspecialchars($rel['title']); ?>">
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
                        <div class="art-sidebar-block-title">Sur le même sujet</div>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $sa): ?>
                            <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($sa['image']); ?>"
                                        alt="<?php echo htmlspecialchars($sa['title']); ?>">
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
                                        alt="<?php echo htmlspecialchars($ra['title']); ?>">
                                </div>
                                <h4><?php echo htmlspecialchars($ra['title']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (empty($same_cat_articles) && empty($all_other_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">À retenir</div>
                        <p style="font-size: 0.9em; color:#555; line-height:1.5;">Un voyant orange fixe sans symptôme moteur vous laisse du temps. Un voyant clignotant ou accompagné d'un bruit, non. Aucun orange n'impose l'arrêt immédiat — c'est le rouge.</p>
                    </div>
                <?php endif; ?>
            </div>
        </aside>

    </div><!-- .art-layout-wrapper -->
</article>

<!-- Schema JSON-LD (Article + FAQ) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://garageraymond.fr/Blog/voyant-orange-peugeot"
      },
      "headline": "<?php echo addslashes($article['title']); ?>",
      "description": "<?php echo addslashes($article['subtitle']); ?>",
      "image": [
        "https://garageraymond.fr<?php echo $article['image']; ?>"
      ],
      "datePublished": "2026-03-28T08:00:00+01:00",
      "dateModified": "2026-03-28T08:00:00+01:00",
      "author": {
        "@type": "Person",
        "name": "<?php echo $article['author']; ?>",
        "url": "https://garageraymond.fr/equipe",
        "jobTitle": "<?php echo $article['author_role']; ?>"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Le garage expert Auto",
        "url": "https://garageraymond.fr",
        "logo": {
          "@type": "ImageObject",
          "url": "https://garageraymond.fr/Image/favicon.png",
          "width": "512",
          "height": "512"
        }
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Que signifie le cercle orange sur le tableau de bord d'une voiture ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Un cercle orange contenant un symbole indique un avertissement non urgent. Le symbole précise le système : A = Stop & Start, bloc moteur = check engine, voiture soulignée = FAU désactivé."
          }
        },
        {
          "@type": "Question",
          "name": "Que signifie un voyant orange rond avec une voiture dedans sur un Peugeot 2008 ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Sur le 2008, c'est presque toujours le Stop & Start. Orange avec OFF = système désactivé automatiquement. Orange avec A = moteur coupé à l'arrêt. Les deux sont normaux."
          }
        },
        {
          "@type": "Question",
          "name": "Quel voyant impose l'arrêt immédiat ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Les voyants rouges uniquement : pression d'huile, température moteur, voyant STOP. Un voyant orange n'impose jamais l'arrêt immédiat seul."
          }
        },
        {
          "@type": "Question",
          "name": "Combien de temps peut-on rouler avec un voyant orange ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ça dépend du voyant. Stop & Start ou service : indéfiniment. Moteur fixe ou antipollution : quelques jours. Moteur clignotant : 24h max à vitesse réduite."
          }
        },
        {
          "@type": "Question",
          "name": "Est-ce dangereux de rouler avec le voyant moteur orange allumé ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Fixe : non à court terme. Clignotant : oui, des ratés d'allumage peuvent endommager le catalyseur rapidement. Passage en atelier sous 24h."
          }
        }
      ]
    }
  ]
}
</script>

<?php include __DIR__ . '/../footer.php'; ?>

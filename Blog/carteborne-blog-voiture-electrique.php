<?php
/**
 * carteborne-blog-voiture-electrique.php
 */

$page_title       = "Carteborne.fr : le blog voiture électrique qu'il faut lire en 2026";
$page_description = "Vous cherchez le meilleur blog sur la voiture électrique en France ? Carte Borne (carteborne.fr) publie chaque semaine sur l'auto! ";

$article = [
    'title'          => "Carteborne.fr : le blog voiture électrique à suivre absolument en 2026",
    'subtitle'       => "Entre dossiers sur l'autonomie réelle, décryptages des aides gouvernementales et actu auto qui ne manque pas de piquant, Carte Borne s'est imposé comme l'une des références francophones de l'information sur le véhicule électrique. Notre regard critique.",
    'category'       => 'electrique',
    'category_name'  => 'Électrique & Hybride',
    'category_color' => '#059669',
    'tags'           => ['Carte Borne', 'Blog Voiture Électrique', 'Actu Auto', 'Véhicule Électrique'],
    'image'          => '/Image/carteborne-blog-voiture-electrique.webp',
    'date'           => '31 Mars 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Rédacteur & Essayeur passionné',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Tombé dans le cambouis quand il était petit grâce à son père David, Arnaud a transformé sa passion en expertise. Il teste sans concession les derniers modèles et décortique le marché de l'électrique avec honnêteté.",
    'reading_time'   => '6 min',
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
             alt="Interface du blog Carte Borne (carteborne.fr) dédié à la voiture électrique"
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
                    <span>Coup de projecteur</span>
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
                    <li><strong>Qui :</strong> <strong>Carte Borne</strong> (<a href="https://carteborne.fr/" target="_blank" rel="nofollow noopener">carteborne.fr</a>) est un blog français 100 % dédié à l'actualité de la voiture électrique et du monde automobile.</li>
                    <li><strong>Ligne éditoriale :</strong> Un mix assumé d'actu électrique sérieuse (autonomie, batteries, aides, modèles) et de faits divers automobiles qui font le buzz.</li>
                    <li><strong>Ce qui se démarque :</strong> Des dossiers techniques fouillés sur l'autonomie réelle, les coûts de recharge, les mythes et les modèles à privilégier en hiver.</li>
                    <li><strong>Pour qui :</strong> Idéal pour les propriétaires de VE déjà convaincus ET pour les indécis qui veulent des chiffres concrets avant de franchir le pas.</li>
                    <li><strong>Notre verdict :</strong> Une source de veille sérieuse à ajouter à vos favoris si le véhicule électrique vous intéresse — quel que soit votre niveau de connaissance.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#carte-borne-cest-quoi">Carte Borne : c'est quoi exactement ?</a></li>
                    <li><a href="#ligne-editoriale">Une ligne éditoriale qui assume son identité</a></li>
                    <li><a href="#contenus-forts">Les contenus qui font la force de Carteborne.fr</a></li>
                    <li><a href="#pour-qui">Pour quel lecteur est fait ce blog ?</a></li>
                    <li><a href="#verdict">Notre verdict honnête sur Carte Borne</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Dans l'univers foisonnant des blogs automobiles français, trouver une source qui traite sérieusement de la voiture électrique sans vous noyer dans du jargon constructeur est rare. <strong>Carteborne.fr</strong>, connu sous le nom <strong>Carte Borne</strong>, a pris ce pari et s'y tient avec une régularité éditoriale remarquable. Mais que vaut réellement ce blog au quotidien ? On a épluché leur catalogue pour vous.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="carte-borne-cest-quoi">Carte Borne : c'est quoi exactement ?</h2>

                <p><strong>Carte Borne</strong> est un blog automobile francophone dont l'ADN tourne autour d'une conviction centrale : la voiture électrique est en train de redéfinir nos habitudes de mobilité, et les lecteurs méritent une information claire, régulière et sans langue de bois pour naviguer dans cette transition.</p>

                <p>Accessible à l'adresse <a href="https://carteborne.fr/" target="_blank" rel="nofollow noopener">carteborne.fr</a>, le site publie plusieurs articles par semaine sur des thèmes aussi variés que les tests d'autonomie sur route réelle, les aides gouvernementales aux VE, les nouvelles technologies de batterie ou encore — et c'est une vraie signature éditoriale — des récits de faits divers automobiles qui viennent apporter une touche de légèreté au milieu de dossiers plus techniques.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Caractéristique</th>
                                <th>Détail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Nom du site</strong></td>
                                <td>Carte Borne</td>
                            </tr>
                            <tr>
                                <td><strong>URL</strong></td>
                                <td><a href="https://carteborne.fr/" target="_blank" rel="nofollow noopener">carteborne.fr</a></td>
                            </tr>
                            <tr>
                                <td><strong>Thématique principale</strong></td>
                                <td>Voiture électrique, actualité automobile, faits divers routiers</td>
                            </tr>
                            <tr>
                                <td><strong>Fréquence de publication</strong></td>
                                <td>Plusieurs articles par semaine</td>
                            </tr>
                            <tr>
                                <td><strong>Cible</strong></td>
                                <td>Propriétaires de VE, futurs acheteurs, passionnés d'actu auto</td>
                            </tr>
                            <tr>
                                <td><strong>Langue</strong></td>
                                <td>Français</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="ligne-editoriale">Une ligne éditoriale qui assume pleinement son identité</h2>

                <p>Ce qui frappe en parcourant <strong>Carte Borne</strong>, c'est l'absence de prétention ennuyeuse. Le blog ne prétend pas faire de la presse spécialisée pointue à la Automotive News. Il fait quelque chose de différent et, franchement, de plus efficace pour le grand public : il raconte l'automobile électrique comme une histoire vivante, avec ses actualités techniques ET ses anecdotes humaines.</p>

                <p>D'un côté, vous trouvez des contenus de fond comme leur <a href="https://carteborne.fr/autonomie-reelle-de-25-voitures-electriques-a-31c-le-rigoureux-test-norvegien-jusqua-la-panne/" target="_blank" rel="nofollow noopener">test d'autonomie réelle de 25 voitures électriques par -31°C</a>, un dossier rigoureux qui compare les performances hivernales de modèles allant du Tesla Model Y à la Dacia Spring. De l'autre, des histoires insolites du quotidien routier qui rappellent que la route est aussi un théâtre humain. Ce mélange est assumé et il fonctionne : on revient sur Carte Borne autant pour s'informer que pour être surpris.</p>

                <blockquote class="art-blockquote">
                    Le pari de <strong>Carte Borne</strong> : rendre l'information sur la voiture électrique accessible et engageante pour tous, sans sacrifier la rigueur sur les sujets qui comptent vraiment — autonomie, coûts, aides, technologie.
                </blockquote>

                <!-- ══════════════════════════════════ -->
                <h2 id="contenus-forts">Les contenus qui font la vraie force de Carteborne.fr</h2>

                <p>En passant en revue leur catalogue éditorial, plusieurs catégories de contenus se démarquent clairement comme des points forts du blog <strong>Carte Borne</strong>.</p>

                <h3>Les dossiers autonomie et batterie</h3>
                <p>C'est sans doute la colonne vertébrale de <strong>carteborne.fr</strong>. Le blog excelle dans les comparatifs d'autonomie réelle — pas les chiffres WLTP idéalisés des constructeurs, mais ce que les conducteurs vivent vraiment sur route, par grand froid ou par forte chaleur. Leurs analyses sur la <a href="https://carteborne.fr/000-batteries-de-voitures-electriques-doccasion-analysees-une-endurance-bien-au-dela-des-attentes/" target="_blank" rel="nofollow noopener">durée de vie des batteries de voitures électriques d'occasion</a>, basées sur des milliers de cas analysés, sont particulièrement utiles pour qui envisage l'achat d'un VE de seconde main.</p>

                <h3>L'actualité réglementaire et économique</h3>
                <p>Carte Borne suit de très près tout ce qui touche aux aides à l'achat, au malus au poids, aux évolutions de prix du marché européen et aux décisions politiques qui impactent la mobilité électrique. C'est un bon repère pour ne rien rater des changements qui peuvent directement affecter votre budget d'achat ou de recharge.</p>

                <h3>Les guides pratiques et mythes démystifiés</h3>
                <p>Leur article sur <strong>les 6 grands mythes sur les voitures électriques</strong> ou leurs guides sur la rentabilité d'un VE sont des références claires et pédagogiques. Ces contenus s'adressent directement aux indécis et aux sceptiques — exactement le public qui a besoin d'une information fiable pour trancher.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Type de contenu</th>
                                <th>Points forts</th>
                                <th>À améliorer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Dossiers autonomie / batterie</strong></td>
                                <td>Chiffres réels, sources externes citées, comparatifs multi-modèles</td>
                                <td>Pourrait être mis à jour plus régulièrement sur les nouveaux modèles</td>
                            </tr>
                            <tr>
                                <td><strong>Actu réglementaire & économique</strong></td>
                                <td>Réactif, bien contextualisé, utile pour le consommateur</td>
                                <td>Les titres clickbait peuvent parfois créer de la confusion</td>
                            </tr>
                            <tr>
                                <td><strong>Faits divers auto</strong></td>
                                <td>Ton enlevé, lecture plaisante, bonne audience</td>
                                <td>Peu de lien direct avec le VE — c'est un choix éditorial discutable</td>
                            </tr>
                            <tr>
                                <td><strong>Guides pratiques</strong></td>
                                <td>Accessibles, bien structurés, bon angle pédagogique</td>
                                <td>Manque parfois de données chiffrées spécifiques à la France</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="pour-qui">Pour quel lecteur est fait ce blog ?</h2>

                <p><strong>Carteborne.fr</strong> s'adresse à un spectre large, ce qui est à la fois une force et un risque éditorial. En pratique, trois profils y trouvent leur compte.</p>

                <ul>
                    <li><strong>Le propriétaire de VE curieux :</strong> Il y vient pour rester informé sur les évolutions du marché, les nouvelles aides, les technologies de recharge et les comparatifs de modèles concurrents au sien. Carte Borne lui offre une veille hebdomadaire efficace.</li>
                    <li><strong>Le futur acheteur en phase de réflexion :</strong> Il cherche des réponses concrètes sur l'autonomie réelle, les coûts cachés, la durabilité des batteries. Les dossiers techniques de Carte Borne lui donnent des arguments objectifs pour arbitrer son choix.</li>
                    <li><strong>Le lecteur généraliste passionné d'actu auto :</strong> Il est séduit par le mélange d'actualité sérieuse et d'histoires insolites. Ce profil consomme Carte Borne comme un magazine numérique polyvalent sur l'automobile en général.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="verdict">Notre verdict honnête sur Carte Borne</h2>

                <p>Chez <strong>Le Garage Expert Auto</strong>, on lit beaucoup de blogs automobiles, et on peut dire sans détour que <strong>Carte Borne</strong> fait partie des sources françaises sur le véhicule électrique qui méritent d'être dans vos favoris. La cadence de publication est soutenue, les sujets sont bien choisis et le ton reste accessible sans tomber dans la vulgarisation excessive.</p>

                <p>Ce qu'on apprécie particulièrement : leur honnêteté sur les limites du VE (autonomie en froid extrême, coûts de recharge en hausse, modèles décevants). <strong>Carteborne.fr</strong> ne fait pas de la promotion déguisée pour l'électrique — il informe, et c'est tout ce qu'on lui demande.</p>

                <p>Notre seul bémol, et il est mineur : la cohabitation entre les dossiers VE fouillés et les faits divers automobiles sans lien direct avec l'électrique peut parfois brouiller l'identité du blog pour un lecteur qui arrive pour la première fois. Mais c'est un choix éditorial assumé, et clairement il attire du trafic — les deux angles peuvent coexister.</p>

                <div class="art-tldr" style="border-left-color: #059669; background-color: #111111; color: #ffffff;">
                    <div class="art-tldr-title" style="color: #ffffff;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #ffffff;">Si vous cherchez à vous tenir informé sur la <strong>voiture électrique</strong> en France sans passer des heures à croiser des sources, <strong>Carte Borne</strong> est clairement un raccourci efficace. Visitez <a href="https://carteborne.fr/" target="_blank" rel="nofollow noopener" style="color: #4ade80;">carteborne.fr</a> et ajoutez-le à votre routine de lecture hebdomadaire. Et si vous avez un doute mécanique sur votre VE — batterie, entretien, diagnostic — vous savez où nous trouver.</p>
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
            <div class="art-conclusion" style="background-color: #111111; color: #ffffff;">
                <h2 style="color: #ffffff;">Le mot de la fin</h2>
                <p style="color: #ffffff;">L'information sur la voiture électrique évolue vite — les aides changent, les modèles sortent, les prix bougent. Des blogs comme <strong>Carte Borne</strong> (<a href="https://carteborne.fr/" target="_blank" rel="nofollow noopener" style="color: #4ade80;">carteborne.fr</a>) rendent service en centralisant cette veille pour vous. Combinez-le avec les conseils techniques de votre garage de confiance, et vous avez toutes les clés pour vivre sereinement avec votre véhicule électrique.</p>
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

<!-- Schema JSON-LD (Article) -->
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
            "datePublished" => "2026-03-30T08:00:00+01:00",
            "dateModified"  => "2026-03-30T08:00:00+01:00",
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
            ],
            "mentions" => [
                [
                    "@type" => "WebSite",
                    "name"  => "Carte Borne",
                    "url"   => "https://carteborne.fr/"
                ]
            ]
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

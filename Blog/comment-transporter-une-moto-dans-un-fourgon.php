<?php
// published: 2026-04-15 10:00
/**
 * comment-transporter-une-moto-dans-un-fourgon.php
 */

$page_title       = "Comment transporter une moto dans un fourgon ? (Tuto et astuces)";
$page_description = "Rampe, sangles, calage, cas du scooter et de la moto cross : le guide complet pour charger et arrimer sa moto dans un fourgon sans la faire tomber.";

$article = [
    'title'          => "Comment transporter une moto dans un fourgon ? (Tuto et astuces de motards)",
    'subtitle'       => "Rampe ou sans rampe, roadster ou cross, seul ou à deux : la méthode étape par étape pour charger, caler et sangler sa moto dans un fourgon sans risque de chute ni de rayure.",
    'category'       => 'moto',
    'category_name'  => 'Moto & 2 Roues',
    'category_color' => '#ea580c',
    'tags'           => ['Transport Moto', 'Fourgon', 'Sanglage Moto', 'Chargement', 'Guide Pratique'],
    'image'          => '/Image/comment-transporter-une-moto-dans-un-fourgon1.webp',
    'date'           => '15 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Passionné Moto & Rédacteur',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud roule depuis plus de 20 ans, du scooter urbain à la grosse cylindrée sur circuit. Il teste et sélectionne lui-même chaque équipement recommandé sur le blog — parce qu'un bon conseil, ça se mérite sur le terrain.",
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
             alt="Intérieur d'un fourgon utilitaire avec rampe, sangles et sabot moto prêts pour le chargement"
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
                    <li><strong>Fourgon minimum :</strong> 2,10 m de longueur utile (type L1H1 — Trafic, Expert, Vito).</li>
                    <li><strong>Matériel :</strong> Rampe aluminium + 4 sangles à cliquet + chiffons microfibre. Le sabot bloque-roue est un plus.</li>
                    <li><strong>Chargement :</strong> Toujours à 2 personnes — une au guidon, une qui pousse à l'arrière.</li>
                    <li><strong>Sanglage en compression :</strong> 2 sangles sur le té de fourche inférieur (fourche comprimée au tiers), 2 sangles à l'arrière sur le cadre.</li>
                    <li><strong>Erreur fatale :</strong> Ne jamais transporter la moto sur sa béquille centrale.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#taille-fourgon">Quelle taille de fourgon pour une moto ?</a></li>
                    <li><a href="#materiel-necessaire">Le matériel indispensable</a></li>
                    <li><a href="#monter-moto-fourgon">Comment monter la moto dans le fourgon ?</a></li>
                    <li><a href="#calage-sanglage">Calage et sanglage : les 4 règles d'or</a></li>
                    <li><a href="#cas-particuliers">Cas particuliers : scooter et moto cross</a></li>
                    <li><a href="#alternative-remorque">L'alternative : choisir la bonne remorque</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Transporter sa moto sans remorque génère toujours de l'appréhension. Comment la monter dans le camion sans la faire tomber ? Comment la sangler pour qu'elle reste figée pendant le trajet ? Voici la méthode étape par étape, complétée par les meilleures astuces de motards pour arrimer facilement n'importe quelle machine.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="taille-fourgon">Quelle taille de fourgon pour une moto ?</h2>

                <p>Une moto peut rentrer dans une simple fourgonnette — mais pas n'importe laquelle. Pour la majorité des motos (roadsters, sportives, trails moyens), il vous faut <strong>un volume utile d'au moins 2,10 mètres de longueur</strong> derrière les sièges avant. Un utilitaire L1H1 (type Renault Trafic, Peugeot Expert ou Mercedes Vito) est généralement parfait.</p>

                <p>Attention à la hauteur : si vous possédez un grand trail avec une bulle haute, vérifiez la hauteur de passage des portes arrière — le H1 peut parfois bloquer et nécessiter de démonter la bulle ou les rétroviseurs avant chargement.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="materiel-necessaire">Le matériel indispensable</h2>

                <img src="/Image/comment-transporter-une-moto-dans-un-fourgon1.webp" alt="Intérieur de fourgon avec rampe aluminium pliante, quatre sangles à cliquet bleues et sabot moto noir alignés au sol" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p><strong>La rampe moto :</strong> Oubliez la vieille planche de bois qui risque de céder. Investissez dans une rampe pliante en aluminium — légère, solide et rangeable facilement.</p>

                <p><strong>4 sangles à cliquet :</strong> C'est le minimum absolu. Évitez les montages hasardeux avec une seule longue sangle. Quatre points d'ancrage distincts, c'est la règle.</p>

                <p><strong>Le sabot bloque-roue :</strong> Pas indispensable pour un transport unique, mais un investissement qui offre une stabilité incomparable en bloquant la roue avant dès la montée.</p>

                <p><strong>Les chiffons microfibre :</strong> Glissez-les entre les sangles et le métal ou les carénages. Sans eux, les vibrations du trajet rayent la peinture en quelques kilomètres.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="monter-moto-fourgon">Comment monter la moto dans le fourgon ?</h2>

                <img src="/Image/comment-transporter-une-moto-dans-un-fourgon2.webp" alt="Deux personnes chargeant une moto roadster bleue dans un fourgon via une rampe aluminium, ambiance garage réaliste" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p>Le chargement est le moment le plus critique. Il est impératif d'être au moins deux pour éviter la chute. Placez la rampe de manière stable. Une personne guide la moto au guidon (en s'aidant du point de patinage de l'embrayage si le moteur tourne), pendant que la seconde pousse fermement à l'arrière.</p>

                <p><strong>Sans rampe ? Deux techniques de dépannage :</strong></p>

                <ol>
                    <li><strong>La technique du terrain :</strong> Cherchez un quai de chargement. À défaut, reculez prudemment dans un fossé pour que le seuil de chargement soit à la même hauteur que le sol.</li>
                    <li><strong>La technique des 3 personnes (motos légères) :</strong> Une personne soulève chaque bras de fourche pour poser la roue avant dans le camion, pendant que la troisième pousse à l'arrière. Soulevez avec les jambes, jamais avec le dos.</li>
                </ol>

                <!-- ══════════════════════════════════ -->
                <h2 id="calage-sanglage">Calage et sanglage : les 4 règles d'or</h2>

                <img src="/Image/comment-transporter-une-moto-dans-un-fourgon3.webp" alt="Gros plan sur une sangle à cliquet bleue fixée au té de fourche inférieur d'une moto dans un fourgon, suspension légèrement comprimée" loading="lazy" style="width:100%;height:auto;border-radius:8px;margin-bottom:1.2rem;">

                <p><strong>1. L'erreur fatale de la béquille centrale :</strong> Ne transportez jamais votre moto posée sur sa béquille centrale. Sur un nid-de-poule, la force exercée peut briser les paliers ou poinçonner le plancher du fourgon. La béquille latérale sert uniquement à poser la moto le temps d'installer la première sangle — ensuite, on la replie.</p>

                <p><strong>2. Le positionnement en diagonale :</strong> Sans sabot moto, calez fermement la roue avant en butée dans l'angle avant-gauche ou avant-droit de la cloison de cabine. Cela empêche la roue de tourner pendant le trajet.</p>

                <p><strong>3. Le sanglage en compression :</strong> La moto doit tenir debout uniquement par la tension de ses propres suspensions. À l'avant, accrochez 2 sangles sur le té de fourche inférieur et tirez fort pour comprimer la fourche d'environ un tiers de sa course. À l'arrière, placez 2 sangles sur la boucle arrière du cadre ou les platines repose-pieds.</p>

                <p><strong>4. Les chiffons anti-rayures :</strong> Placez toujours un chiffon épais en microfibre entre chaque sangle et le métal ou les carénages — sans exception.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="cas-particuliers">Cas particuliers : scooter et moto cross</h2>

                <p><strong>Sangler un scooter :</strong> Les scooters sont recouverts de carénages plastiques fragiles. Ne sanglez jamais par-dessus le tablier ou la selle. Passez vos sangles avant autour de la base de la fourche, près de la roue. À l'arrière, utilisez les poignées passager en métal renforcé, ou passez sous les plastiques pour trouver le cadre.</p>

                <p><strong>Transporter une moto cross :</strong> Les motos d'enduro et de cross ont des suspensions à très grand débattement. Si vous les comprimez trop fort, vous risquez de faire exploser les joints spi de fourche. La solution : achetez un cale-fourche (pièce en plastique à glisser entre le pneu avant et le garde-boue) avant de serrer vos sangles.</p>

                <blockquote class="art-blockquote">
                    Sur les motos cross, j'ai vu des joints spi exploser après un simple transport mal sangé. Le cale-fourche coûte 10 € — un joint spi et la remise en état, c'est une autre histoire.
                    <cite>— Arnaud, Passionné Moto & Rédacteur</cite>
                </blockquote>

                <!-- ══════════════════════════════════ -->
                <h2 id="alternative-remorque">L'alternative : choisir la bonne remorque moto</h2>

                <p>Si votre deux-roues est très lourd ou que vous êtes seul pour la manipulation, le chargement dans un fourgon devient complexe et risqué. Le transport sur remorque s'impose alors.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Type de remorque</th>
                                <th>Pour qui ?</th>
                                <th>Avantage principal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Porte-moto classique (à rails)</strong></td>
                                <td>Budget serré, usage ponctuel</td>
                                <td>Solution la plus économique et répandue</td>
                            </tr>
                            <tr>
                                <td><strong>Remorque abaissable</strong></td>
                                <td>Motos lourdes (+250 kg), manipulation seul</td>
                                <td>Plateau au ras du sol — zéro risque de chute</td>
                            </tr>
                            <tr>
                                <td><strong>Remorque fourgon (fermée)</strong></td>
                                <td>Protection intempéries, longs trajets</td>
                                <td>Machine protégée des regards et de la pluie</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>Attention pour la remorque fourgon : son volume important peut nécessiter de vérifier le PTAC de votre attelage ou de détenir un permis spécifique (B96).</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">🔧 Le mot du Garage Expert Auto</div>
                    <p style="margin: 0;">Un bon transport de moto, c'est 80 % de préparation et 20 % d'exécution. Le bon fourgon, le bon matériel, les bons points d'ancrage — et votre machine arrive sans une égratignure. Ne bâclez jamais le sanglage pour gagner 5 minutes.</p>
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
                <p>Transporter sa moto dans un fourgon, c'est une compétence qui s'apprend une fois et qui sert toute une vie de motard — déménagements, circuits, pannes en bord de route. Avec le bon matériel et ces règles de sanglage, vous pouvez le faire seul ou à deux, en toute sécurité, sans abîmer ni votre moto ni le fourgon.</p>
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
            "datePublished" => "2026-04-15T10:00:00+02:00",
            "dateModified"  => "2026-04-15T10:00:00+02:00",
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

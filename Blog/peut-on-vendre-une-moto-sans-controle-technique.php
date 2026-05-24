<?php
// published: 2026-04-17 10:00
/**
 * peut-on-vendre-une-moto-sans-controle-technique.php
 */

$page_title       = "Peut-on vendre une moto sans contrôle technique en 2026 ? Le guide légal complet";
$page_description = "CT2RM obligatoire, exceptions, risques juridiques et sanctions : tout ce qu'il faut savoir pour vendre une moto sans contrôle technique légalement en 2026.";

$article = [
    'title'          => 'Peut-on vendre une moto sans contrôle technique en 2026 ?',
    'subtitle'       => "CT2RM obligatoire, dispenses officielles, vente en l'état, risques juridiques… Ce guide complet démonte les idées reçues et vous dit exactement ce que vous pouvez faire légalement avant de céder votre deux-roues.",
    'category'       => 'moto',
    'category_name'  => 'Moto & 2 Roues',
    'category_color' => '#ea580c',
    'tags'           => ['Contrôle Technique Moto', 'CT2RM', 'Vente Moto Occasion', 'Cession Véhicule', 'Réglementation 2026'],
    'image'          => '/Image/peut-on-vendre-une-moto-sans-controle-technique1.webp',
    'date'           => '17 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Passionné Moto & Grand Tourisme',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud roule depuis plus de 20 ans et a une obsession : les machines capables d'avaler des kilomètres sans sourciller. Il décortique les GT et les roadsters avec le même appétit que leurs moteurs.",
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

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Transaction de moto entre particuliers avec dossier de cession et rapport CT2RM"
             class="art-hero-bg"
             width="1200" height="675" decoding="async">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/moto"><?php echo $article['category_name']; ?></a>
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
                    <li><strong>Règle générale 2026 :</strong> Non, vous ne pouvez pas vendre une moto de plus de 5 ans à un particulier sans fournir un rapport CT2RM datant de moins de 6 mois.</li>
                    <li><strong>3 exceptions légales :</strong> Moto de moins de 5 ans, vente à un professionnel, ou catégories spécifiques (enduro/trial avec licence FFM, collection avant 1960).</li>
                    <li><strong>Contre-visite autorisée :</strong> Un PV défavorable reste valable pour vendre, à condition qu'il date de moins de 2 mois.</li>
                    <li><strong>« Vendu en l'état » = piège :</strong> Cette mention n'a aucune valeur légale d'exonération, l'ANTS bloque le transfert et l'acheteur peut exiger l'annulation de la vente.</li>
                    <li><strong>Risques réels :</strong> Amende 4e classe (135 €), nullité de la vente, et poursuites pour vice caché en cas d'accident.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#regle-2026">Peut-on légalement vendre sans CT à un particulier ?</a></li>
                    <li><a href="#3-dispenses">Les 3 dispenses officielles</a></li>
                    <li><a href="#moto-a-retaper">Achat d'une moto à retaper : comment gérer le CT ?</a></li>
                    <li><a href="#vente-en-etat">Vendre en l'état ou pour pièces : le naufrage juridique</a></li>
                    <li><a href="#risques-sanctions">Risques réels et sanctions</a></li>
                    <li><a href="#faq">FAQ : tout savoir sur le CT moto lors d'une cession</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>La mise en place du contrôle technique des deux-roues motorisés (CT2RM) a radicalement transformé le marché de l'occasion. Si vous souhaitez vous séparer de votre machine aujourd'hui, la question est inévitable : peut-on vendre une moto sans contrôle technique ? Entre les mythes de la vente "pour pièces", les craintes de blocage administratif et les réelles obligations 2026, voici ce que vous devez savoir avant de signer quoi que ce soit.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="regle-2026">Peut-on légalement vendre sans CT à un particulier en 2026 ?</h2>

                <p><strong>La réponse est non</strong> pour la quasi-totalité des ventes entre particuliers. Si votre moto a plus de 5 ans, vous avez l'obligation légale de fournir à l'acheteur un rapport de contrôle technique datant de moins de 6 mois au moment de la signature du certificat de cession (Cerfa 15776).</p>

                <blockquote class="art-blockquote">
                    « On voit trop souvent au garage des vendeurs arriver avec le Cerfa déjà signé, pensant que l'acheteur s'occupera du contrôle après coup. C'est une erreur majeure : administrativement, l'ANTS bloque désormais le transfert de carte grise si le numéro d'agrément du centre de contrôle n'est pas renseigné dans le dossier numérique. »
                    <cite>— Expert Garage Raymond</cite>
                </blockquote>

                <p>Selon les directives officielles rappelées par le portail <a href="https://www.justice.fr/fiche/on-vendre-vehicule-occasion-controle-technique" target="_blank" rel="nofollow noopener">Justice.fr</a>, la remise du procès-verbal de contrôle est une condition absolue de validité de la vente pour tout véhicule d'occasion circulant sur la voie publique.</p>

                <img src="/Image/peut-on-vendre-une-moto-sans-controle-technique1.webp" alt="Transaction de moto entre particuliers avec Cerfa 15776 et rapport CT2RM officiel 2026" width="900" height="506" loading="lazy">

                <!-- ══════════════════════════════════ -->
                <h2 id="3-dispenses">Les 3 dispenses officielles pour une vente en toute conformité</h2>

                <p>Le législateur a prévu quelques exceptions précises. Voici les trois seuls cas où vous pouvez céder votre deux-roues sans passer par un centre agréé.</p>

                <h3>La règle des 5 ans : les motos récentes exemptées</h3>
                <p>Si votre moto a été immatriculée pour la première fois il y a moins de 5 ans (date de première mise en circulation faisant foi sur le certificat d'immatriculation), vous êtes totalement dispensé. C'est un argument de vente fort sur le marché de la seconde main récente.</p>

                <h3>Vendre à un professionnel : la solution zéro contrainte</h3>
                <p>C'est la véritable bulle de sécurité pour les vendeurs pressés ou embarrassés. Si vous cédez votre machine à un concessionnaire, un garage ou un repreneur professionnel, le contrôle technique n'est pas obligatoire. C'est souvent la seule option légale pour se débarrasser d'une moto non roulante ou dont vous ne souhaitez pas financer la remise en état.</p>

                <h3>Catégories spécifiques : enduro, trial et collection</h3>
                <ul>
                    <li><strong>Enduro et Trial :</strong> Ces motos tout-terrain sont exemptées, mais uniquement si le vendeur est titulaire d'une licence sportive FFM en cours de validité.</li>
                    <li><strong>Motos de Collection :</strong> Les véhicules dont la mise en circulation est antérieure à 1960 sont dispensés de CT. Pour les autres motos en carte grise collection, la périodicité est de 5 ans au lieu de 3.</li>
                </ul>

                <p>Si vous changez de monture après votre vente, c'est aussi le bon moment pour vérifier votre <a href="/Blog/equipement-motard-univers-auto-moto-fr">équipement motard</a> avant de repartir sur la route.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="moto-a-retaper">Achat d'une moto à retaper : comment gérer le contrôle technique ?</h2>

                <p>Que faire si vous achetez un "projet", une moto incomplète, sortie de grange ou dans son jus, qui ne peut pas passer l'examen ni même démarrer ?</p>

                <p>Autrefois, il suffisait de barrer la carte grise avec la mention "véhicule non roulant". Cette mention a été supprimée et n'a plus aucune valeur légale. Aujourd'hui, un acheteur qui reprend une moto à restaurer ne pourra pas mettre la carte grise à son nom tant qu'il n'aura pas passé un CT. Durant toute la période de restauration, le vendeur reste officiellement le titulaire du véhicule dans le fichier de l'ANTS.</p>

                <p>Si vous achetez une moto à retaper sans CT, assurez-vous d'avoir une solution logistique pour la rapatrier sans rouler. Notre guide sur <a href="/Blog/comment-transporter-une-moto-dans-un-fourgon">comment transporter une moto dans un fourgon</a> vous explique comment faire ça en sécurité.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="vente-en-etat">Vendre en l'état ou pour pièces : attention au naufrage juridique</h2>

                <p>Beaucoup pensent encore pouvoir contourner la loi avec un simple stylo. C'est une erreur qui peut coûter très cher.</p>

                <p><strong>L'histoire de Marc :</strong> Marc a voulu vendre sa vieille Honda Transalp à un voisin pour 800 €, sans s'embêter avec le CT. Il a ajouté la mention manuscrite « Vendu en l'état » sur la carte grise. Trois mois plus tard, le voisin, bloqué par l'ANTS et incapable d'obtenir sa carte grise, a exigé l'annulation de la vente. Marc a été contraint juridiquement de rembourser l'intégralité de la somme et de récupérer sa moto, partiellement démontée entre-temps.</p>

                <blockquote class="art-blockquote">
                    « Le transfert de propriété d'un véhicule soumis à contrôle technique est subordonné à la remise du procès-verbal de ce contrôle. »
                    <cite>— Article R323-22 du Code de la Route</cite>
                </blockquote>

                <p>Retenez-le : la mention « en l'état » ou « pour pièces » n'a aucune valeur d'exonération lors d'une vente entre particuliers pour un véhicule immatriculé.</p>

                <img src="/Image/peut-on-vendre-une-moto-sans-controle-technique2.webp" alt="Portail ANTS affichant un blocage de transfert pour contrôle technique manquant" width="900" height="506" loading="lazy">

                <!-- ══════════════════════════════════ -->
                <h2 id="risques-sanctions">Quels sont les risques réels et les sanctions ?</h2>

                <p>Ignorer les obligations 2026 vous expose à deux niveaux de risques :</p>

                <ul>
                    <li><strong>Sanctions administratives :</strong> En cas de contrôle des forces de l'ordre, rouler avec un défaut de CT constitue une contravention de 4e classe, assortie d'une amende forfaitaire de 135 €.</li>
                    <li><strong>Risques civils et financiers :</strong> L'acheteur dispose d'un levier juridique puissant pour demander la nullité de la vente pour non-respect d'une obligation d'ordre public. Si un accident survient à cause d'une défaillance critique qui aurait dû être signalée par le CT, le vendeur s'expose à des poursuites pour vice caché.</li>
                </ul>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq">FAQ : tout savoir sur le CT moto lors d'une cession</h2>

                <p><strong>Faut-il un CT pour vendre un scooter 50cc ?</strong><br>
                Oui. Depuis la réforme CT2RM, les cyclomoteurs de catégorie L1e sont également concernés selon leur année de première mise en circulation. Si vous visez ce type de cylindrée urbaine, consultez notre avis sur les <a href="/Blog/scooter-peugeot-50cc-avis-2026">scooters Peugeot 50cc en 2026</a>.</p>

                <p><strong>Peut-on vendre une moto avec une contre-visite ?</strong><br>
                Oui, absolument. C'est une nuance cruciale méconnue du grand public : vous pouvez légalement vendre une moto même si elle a échoué à l'examen, à condition que le procès-verbal mentionne la contre-visite et date de <strong>moins de 2 mois</strong>. Cela permet à l'acheteur d'enregistrer la cession à son nom sur l'ANTS, tout en acceptant la responsabilité d'effectuer les réparations requises.</p>

                <img src="/Image/peut-on-vendre-une-moto-sans-controle-technique3.webp" alt="Procès-verbal CT moto avec tampon contre-visite et date de validité de 2 mois visible" width="900" height="506" loading="lazy">

                <p><strong>Comment tester sa machine avant le contrôle ?</strong><br>
                Avant d'engager des frais dans un centre agréé, une vérification maison de l'éclairage, des pneus et du freinage s'impose. Si votre moto n'a pas tourné depuis l'hiver, commencez par <a href="/Blog/comment-tester-une-batterie-de-moto">tester la batterie</a>, ça évite une contre-visite agaçante pour un simple défaut d'allumage.</p>

                <p><strong>Est-il possible de se décharger via une attestation écrite ?</strong><br>
                Non. Une décharge signée sur papier libre où l'acheteur renonce à tout recours n'a aucune solidité juridique. Devant l'administration ou un tribunal, ce document est réputé nul, on ne peut pas déroger par contrat privé à une loi de sécurité routière.</p>

                <p>Ressources officielles : <a href="https://www.service-public.fr/particuliers/vosdroits/F1707" target="_blank" rel="nofollow noopener">Service-Public.fr, Vendre son véhicule</a> &bull; <a href="https://ants.gouv.fr/" target="_blank" rel="nofollow noopener">Portail ANTS</a></p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">🏍️ Le mot du Garage Expert Auto</div>
                    <p style="margin: 0;">En 2026, tenter de vendre une moto sans CT à un particulier, c'est prendre le risque de récupérer votre machine démontée et de rembourser l'acheteur. Le CT2RM coûte en moyenne 60 à 80 €, bien moins qu'un litige. Anticipez, et la vente se passe sereinement.</p>
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
                <p>Le CT2RM a changé les règles du jeu définitivement. En 2026, vendre une moto sans contrôle technique entre particuliers n'est pas une option, c'est une infraction avec des conséquences réelles, financières et juridiques. Les trois dispenses existent, elles sont précises : utilisez-les si elles s'appliquent à votre situation. Dans tous les autres cas, le passage au centre agréé est le seul chemin qui protège à la fois le vendeur et l'acheteur.</p>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/moto"><?php echo $article['category_name']; ?></a></h2>
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
            "datePublished" => "2026-04-17T10:00:00+02:00",
            "dateModified"  => "2026-04-17T10:00:00+02:00",
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
                    "name"  => "Service-Public.fr",
                    "url"   => "https://www.service-public.fr/particuliers/vosdroits/F1707"
                ],
                [
                    "@type" => "WebSite",
                    "name"  => "Portail ANTS",
                    "url"   => "https://ants.gouv.fr/"
                ]
            ],
            "keywords" => "peut-on vendre une moto sans contrôle technique, CT2RM, vente moto occasion 2026, contrôle technique moto obligatoire, dispense CT moto"
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

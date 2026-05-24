<?php
// published: 2026-04-23 08:00
/**
 * comment-changer-d-auto-ecole.php
 */

$page_title       = "Comment changer d'auto-école : démarches, dossier et pièges à éviter";
$page_description = "Changer d'auto-école est un droit garanti et gratuit. Découvrez la procédure complète : récupérer votre dossier, éviter de perdre vos heures et gérer le cas CPF.";

$article = [
    'title'          => "Comment changer d'auto-école : démarches, dossier et pièges à éviter",
    'subtitle'       => "C'est un droit garanti par la loi et c'est gratuit. Voici la procédure complète pour récupérer votre dossier, ne pas perdre vos heures et vous réinscrire sans erreur.",
    'category'       => 'permis',
    'category_name'  => 'Permis',
    'category_color' => '#0891b2',
    'tags'           => ['Permis de Conduire', 'Auto-école', 'NEPH', 'Formation Conduite', 'CPF'],
    'image'          => '/Image/comment-changer-d-auto-ecole-1.webp',
    'date'           => '23 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Permis & Réglementation',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud suit de près les évolutions réglementaires liées au permis de conduire. Il accompagne les candidats dans la compréhension des démarches administratives, souvent plus complexes qu'elles n'y paraissent.",
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

<!-- CSS spécifique article : étapes numérotées et cards cas particuliers -->
<style>
    .ae-etapes { list-style: none; padding: 0; margin: 24px 0; counter-reset: etape-counter; }
    .ae-etapes > li { counter-increment: etape-counter; background: #1e1e32; border: 1px solid #2a2a3e; border-radius: 10px; padding: 20px 20px 20px 72px; margin-bottom: 16px; position: relative; }
    .ae-etapes > li::before { content: counter(etape-counter); position: absolute; left: 18px; top: 20px; background: #0891b2; color: #fff; font-weight: 700; font-size: 1.1rem; width: 38px; height: 38px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
    .ae-etapes > li h3 { margin: 0 0 10px; color: #67e8f9; font-size: 1rem; }
    .ae-etapes > li p { margin: 0 0 10px; font-size: 0.93rem; color: #ccc; line-height: 1.6; }
    .ae-etapes > li p:last-child { margin-bottom: 0; }
    .ae-etapes > li ul { padding-left: 18px; margin: 8px 0 0; }
    .ae-etapes > li ul li { font-size: 0.9rem; color: #aaa; margin-bottom: 5px; line-height: 1.5; }

    .ae-cas-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; margin: 24px 0; }
    .ae-cas-card { background: #1e1e32; border: 1px solid #2a2a3e; border-radius: 10px; padding: 18px 20px; border-top: 3px solid #0891b2; }
    .ae-cas-card h3 { margin: 0 0 10px; font-size: 0.97rem; color: #67e8f9; }
    .ae-cas-card p { margin: 0; font-size: 0.89rem; color: #aaa; line-height: 1.55; }

    .ae-modele { background: #12122a; border-left: 4px solid #0891b2; border-radius: 0 8px 8px 0; padding: 18px 20px; margin: 22px 0; font-size: 0.9rem; color: #ccc; line-height: 1.7; font-style: italic; }

    .ae-alerte { background: #12122a; border: 1px solid #ef444444; border-radius: 8px; padding: 16px 20px; margin: 22px 0; font-size: 0.93rem; color: #ccc; }
    .ae-alerte strong { color: #f87171; }

    .ae-tip { background: #12122a; border: 1px solid #0891b244; border-radius: 8px; padding: 16px 20px; margin: 22px 0; font-size: 0.93rem; color: #ccc; }
    .ae-tip strong { color: #67e8f9; }

    .ae-escalade { list-style: none; padding: 0; margin: 18px 0; counter-reset: esc-counter; }
    .ae-escalade li { counter-increment: esc-counter; padding: 10px 14px 10px 44px; position: relative; border-bottom: 1px solid #2a2a3e; font-size: 0.93rem; color: #e2e8f0; }
    .ae-escalade li::before { content: counter(esc-counter); position: absolute; left: 12px; top: 50%; transform: translateY(-50%); background: #374151; color: #67e8f9; font-weight: 700; font-size: 0.85rem; width: 24px; height: 24px; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
</style>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Dossier CERFA 02 et livret d'apprentissage de conduite pour changer d'auto-école"
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
                    <li><strong>Droit absolu :</strong> vous pouvez quitter votre auto-école à n'importe quel moment, sans justification et sans frais de dossier (loi Hamon 2014).</li>
                    <li><strong>Danger financier réel :</strong> les heures payées et non consommées ne sont généralement pas remboursées — épuisez-les avant de partir.</li>
                    <li><strong>Ordre impératif :</strong> trouvez votre nouvelle auto-école en premier, puis récupérez votre dossier.</li>
                    <li><strong>CPF non transférable :</strong> le financement CPF ne suit pas d'une école à l'autre.</li>
                    <li><strong>Code acquis :</strong> votre réussite au code reste valable 5 ans, rattachée à votre numéro NEPH.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#droit-changer">Peut-on changer d'auto-école en cours de formation ?</a></li>
                    <li><a href="#avant-de-partir">Avant de partir : lisez votre contrat</a></li>
                    <li><a href="#3-etapes">Les 3 étapes pour changer sans erreur</a></li>
                    <li><a href="#refus-dossier">Que faire si l'auto-école refuse de rendre le dossier ?</a></li>
                    <li><a href="#cas-particuliers">Cas particuliers : échec, code seul, CPF</a></li>
                    <li><a href="#faq-changement">FAQ — Changer d'auto-école</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Moniteur avec qui le courant ne passe pas, délais interminables pour obtenir une place d'examen, déménagement qui rend les trajets impossibles — les raisons de changer d'auto-école sont nombreuses. La bonne nouvelle : c'est un <strong>droit garanti par la loi</strong>, et dans la grande majorité des cas, c'est entièrement gratuit. Mais avant de claquer la porte, quelques étapes sont à respecter pour ne perdre ni votre argent, ni vos acquis.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="droit-changer">Peut-on changer d'auto-école en cours de formation ?</h2>

                <p>Oui, sans restriction. Tout candidat au permis de conduire peut quitter son auto-école à n'importe quel moment — après le code, après quelques heures de conduite, ou même juste avant l'examen pratique. Vous n'avez aucune justification à fournir. Deux textes encadrent ce droit :</p>

                <ul>
                    <li>La <strong>loi Hamon de 2014</strong> a supprimé les frais de restitution de dossier. Avant 2014, les auto-écoles pouvaient facturer ce transfert plusieurs dizaines ou centaines d'euros — ce n'est plus légal.</li>
                    <li>L'<strong>article L213-2 du Code de la route</strong> est sans ambiguïté : la restitution du dossier au candidat qui en fait la demande ne donne lieu à aucun frais.</li>
                </ul>

                <div class="ae-alerte">
                    <strong>À savoir :</strong> toute auto-école qui tente de vous facturer la récupération de votre dossier commet une infraction passible d'une amende pouvant atteindre 1 500 €. Gardez cette information en tête si une résistance apparaît.
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="avant-de-partir">Avant de partir : lisez votre contrat</h2>

                <p>Changer d'auto-école est gratuit sur le plan administratif. Mais le vrai danger financier, ce sont les <strong>heures de conduite payées et non consommées</strong>. Si vous avez souscrit un forfait de 20 heures et n'en avez fait que 10, les 10 heures restantes ne seront probablement pas remboursées — sauf clause spécifique pour motif légitime (déménagement, maladie, mutation professionnelle).</p>

                <p>Avant de prendre votre décision, vérifiez deux points dans votre contrat : les conditions de rupture (clause d'engagement, frais de résiliation éventuels) et les conditions de remboursement des heures. Si votre contrat ne prévoit aucun remboursement, consommez au maximum vos heures restantes <em>avant</em> de demander votre dossier.</p>

                <div class="ae-tip">
                    <strong>Stratégie terrain :</strong> si vous savez que vous allez partir, ne dites rien à votre auto-école le temps d'épuiser vos heures et de signer ailleurs. Rien ne vous oblige à prévenir avant.
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="3-etapes">Les 3 étapes pour changer sans erreur</h2>

                <ol class="ae-etapes">
                    <li>
                        <h3>Trouvez votre nouvelle auto-école avant de partir</h3>
                        <p>C'est l'ordre que beaucoup oublient. Ne quittez pas votre école actuelle sans avoir signé ailleurs. Certaines écoles sont réticentes à accepter des élèves en cours de formation — en trouvant la nouvelle en premier, vous évitez de vous retrouver sans structure.</p>
                        <p>Critères à comparer avant de signer un nouveau contrat :</p>
                        <ul>
                            <li>Taux de réussite aux examens (demandez les chiffres réels, pas ceux affichés en vitrine)</li>
                            <li>Délais d'attente pour les places d'examen</li>
                            <li>Disponibilité des créneaux selon votre emploi du temps</li>
                            <li>Contrat type 2020 — format standardisé qui permet de comparer à conditions égales</li>
                        </ul>
                        <p>Votre nouvelle école vous fera passer un <strong>bilan de compétences obligatoire</strong> (environ 1 heure de conduite) avant de signer. Signez le contrat après ce bilan, pas avant.</p>
                    </li>
                    <li>
                        <h3>Récupérez votre dossier complet</h3>
                        <p>Votre dossier comprend trois documents indispensables : le <strong>CERFA 02</strong> (formulaire orange avec photo contenant votre numéro NEPH), le <strong>livret d'apprentissage</strong> (papier ou dématérialisé), et la <strong>fiche de suivi</strong> avec les appréciations de votre moniteur. Si vous n'avez pas encore finalisé ces démarches, consultez d'abord <strong><u><a href="/Blog/quel-papier-faut-il-pour-s-inscrire-a-l-auto-ecole">les papiers nécessaires pour s'inscrire à l'auto-école</a></u></strong>.</p>
                        <p>Adressez une lettre recommandée avec accusé de réception au directeur de votre auto-école. Ce format écrit vous protège en cas de litige :</p>

                        <div class="ae-modele">
                            Madame/Monsieur le Directeur,<br><br>
                            Je vous informe par la présente de ma décision de résilier mon contrat de formation n°[XX] et sollicite la restitution de l'intégralité de mon dossier d'inscription au permis de conduire (CERFA 02, livret d'apprentissage, fiche de suivi). Conformément à l'article L213-2 du Code de la route, cette restitution ne peut donner lieu à aucun frais. Je vous remercie de bien vouloir me transmettre ces documents dans les meilleurs délais.<br><br>
                            Veuillez agréer, Madame/Monsieur, l'expression de mes salutations distinguées.
                        </div>

                        <p>Si votre auto-école appartient à un réseau national (ECF, CER…) et que vous souhaitez simplement changer d'antenne, le transfert interne est généralement simplifié — renseignez-vous directement auprès du réseau.</p>
                    </li>
                    <li>
                        <h3>Transmettez votre dossier et inscrivez-vous</h3>
                        <p>Une fois vos documents en main, remettez-les à votre nouvelle auto-école. Elle se charge du transfert administratif auprès des services compétents — vous n'avez pas à retourner en préfecture dans la plupart des cas. Exception : si votre ancienne école a fermé (faillite), c'est le portail ANTS qui vous délivrera un duplicata.</p>
                    </li>
                </ol>

                <!-- ══════════════════════════════════ -->
                <h2 id="refus-dossier">Que faire si l'auto-école refuse de rendre le dossier ?</h2>

                <p>C'est rare mais ça arrive. Une auto-école peut légalement bloquer la restitution si vous avez des sommes dues non réglées (heures prises et non payées). Dans ce cas, réglez d'abord le solde. Si vous êtes à jour et que le blocage persiste, voici l'escalade à suivre :</p>

                <ol class="ae-escalade">
                    <li>Lettre de mise en demeure en recommandé, avec délai de réponse exigé de 8 jours</li>
                    <li>Contact de la préfecture (service permis de conduire) — rôle de médiation</li>
                    <li>Saisine de la DGCCRF ou d'un tribunal d'instance si aucune solution n'émerge</li>
                </ol>

                <!-- ══════════════════════════════════ -->
                <h2 id="cas-particuliers">Cas particuliers : échec, code seul, CPF</h2>

                <div class="ae-cas-grid">
                    <div class="ae-cas-card">
                        <h3>Après un échec à l'examen pratique</h3>
                        <p>Possible et souvent bénéfique. Un nouveau moniteur apporte un regard différent sur vos difficultés. Procédure identique : récupérez votre dossier, passez le bilan. Comptez quelques heures de rattrapage avant la nouvelle présentation.</p>
                    </div>
                    <div class="ae-cas-card">
                        <h3>Après avoir obtenu le code seulement</h3>
                        <p>Aucun problème. Votre code est acquis et rattaché à votre numéro NEPH — il reste valable 5 ans. Vous pouvez vous inscrire en conduite dans n'importe quelle autre école sans repasser la théorie.</p>
                    </div>
                    <div class="ae-cas-card">
                        <h3>Avec un financement CPF</h3>
                        <p>Point critique : le financement CPF n'est pas transférable d'une auto-école à une autre. Si vous avez mobilisé votre CPF chez votre école actuelle, vous ne pourrez pas utiliser les mêmes fonds chez un concurrent. Renseignez-vous sur les alternatives avant de signer.</p>
                    </div>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-changement">FAQ — Changer d'auto-école</h2>

                <h3>Combien de temps faut-il pour récupérer son dossier ?</h3>
                <p>La loi ne fixe pas de délai précis. En pratique, comptez 5 à 15 jours ouvrables après votre demande recommandée. Si l'école tarde, relancez par écrit en rappelant l'article L213-2.</p>

                <h3>Peut-on changer d'auto-école en ligne depuis l'ANTS ?</h3>
                <p>Le portail ANTS permet à votre nouvelle auto-école d'effectuer le transfert de dossier en ligne, sans déplacement en préfecture. C'est votre nouvelle école qui initie la démarche côté ANTS une fois que vous êtes inscrit chez elle.</p>

                <h3>Mon ancienne auto-école peut-elle garder mon livret d'apprentissage ?</h3>
                <p>Non. Le livret d'apprentissage vous appartient. L'auto-école est dans l'obligation de vous le restituer sur simple demande, qu'il soit sous format papier ou dématérialisé.</p>

                <h3>Peut-on changer en conduite accompagnée (AAC) ?</h3>
                <p>Oui. Le dossier AAC suit les mêmes règles de transfert. Vérifiez cependant que votre accompagnateur soit bien à jour de sa formation initiale, exigée par la nouvelle auto-école.</p>

                <h3>Est-ce qu'un changement rallonge forcément la durée de formation ?</h3>
                <p>Pas forcément, mais souvent un peu. Le bilan de compétences peut révéler des lacunes non encore travaillées. Comptez 1 à 5 heures supplémentaires en moyenne — variable selon les candidats et les méthodes des deux écoles.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Changer d'auto-école est souvent la bonne décision — mais une mauvaise exécution peut vous coûter plusieurs centaines d'euros en heures perdues. Épuisez vos heures, signez ailleurs en premier, et récupérez votre dossier par recommandé. Dans cet ordre.</p>
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
                <p>Changer d'auto-école est un droit, pas un parcours du combattant — à condition de respecter l'ordre des étapes. Trouvez votre nouvelle école, épuisez vos heures, récupérez votre dossier par recommandé. En suivant cette séquence, vous protégez à la fois votre argent et vos acquis de formation.</p>
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
            "datePublished" => "2026-04-23T08:00:00+02:00",
            "dateModified"  => "2026-04-23T08:00:00+02:00",
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

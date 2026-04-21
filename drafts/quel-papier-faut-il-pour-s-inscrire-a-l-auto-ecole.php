<?php
// published: 2026-04-22 18:00
/**
 * quel-papier-faut-il-pour-s-inscrire-a-l-auto-ecole.php
 */

$page_title       = "Quel papier faut-il pour s'inscrire à l'auto-école ? Liste Officielle 2026";
$page_description = "Documents obligatoires pour l'inscription en auto-école en 2026 : CNI, ASSR2, JDC, domicile tiers. Simulateur de checklist personnalisée selon votre profil.";

$article = [
    'title'          => "Quel papier faut-il pour s'inscrire à l'auto-école ? (Checklist Officielle 2026)",
    'subtitle'       => "NEPH, code e-photo, ASSR2, JDC : tous les documents obligatoires selon votre âge et votre situation, avec un simulateur de dossier personnalisé.",
    'category'       => 'permis',
    'category_name'  => 'Permis',
    'category_color' => '#0891b2',
    'tags'           => ['Permis de Conduire', 'Auto-école', 'NEPH', 'ASSR2', 'Dossier Inscription'],
    'image'          => '/Image/quel-papier-faut-il-pour-s-inscrire-a-l-auto-ecole1.webp',
    'date'           => '22 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Permis & Réglementation',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud suit de près les évolutions réglementaires liées au permis de conduire. Il accompagne les candidats dans la compréhension des démarches administratives, souvent plus complexes qu'elles n'y paraissent.",
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

<!-- CSS spécifique article : simulateur checklist dossier auto-école -->
<style>
    /* Tableau socle commun */
    .ae-table-wrap { overflow-x: auto; margin: 24px 0; }
    .ae-table { width: 100%; border-collapse: collapse; font-size: 0.95rem; }
    .ae-table th { background-color: #0891b2; color: #fff; padding: 12px 14px; text-align: left; }
    .ae-table td { padding: 11px 14px; border-bottom: 1px solid #2a2a3e; vertical-align: top; }
    .ae-table tr:nth-child(even) td { background-color: #1e1e32; }

    /* Simulateur */
    #ae-doc-tool { background: #1e1e32; border: 2px solid #0891b2; border-radius: 14px; padding: 28px; margin: 32px 0; }
    #ae-doc-tool h3 { margin-top: 0; color: #67e8f9; font-size: 1.1rem; }
    #ae-doc-tool p { color: #aaa; font-size: 0.93rem; margin-bottom: 20px; }
    .ae-tool-step { margin-bottom: 20px; }
    .ae-tool-step label { display: block; font-weight: 600; color: #e2e8f0; margin-bottom: 8px; font-size: 0.95rem; }
    .ae-tool-step select { width: 100%; max-width: 420px; padding: 11px 14px; background: #12122a; color: #e2e8f0; border: 1px solid #2a2a3e; border-radius: 8px; font-size: 0.95rem; }
    .ae-tool-btn { display: inline-block; background: #0891b2; color: #fff; border: none; padding: 14px 28px; font-size: 1rem; font-weight: 700; border-radius: 8px; cursor: pointer; margin-top: 6px; transition: background 0.2s; }
    .ae-tool-btn:hover { background: #0e7490; }
    #ae-results { display: none; margin-top: 26px; border-top: 2px dashed #2a2a3e; padding-top: 22px; }
    #ae-results h4 { color: #67e8f9; margin-top: 0; font-size: 1rem; }
    .ae-check-list { list-style: none; padding: 0; margin: 0 0 16px; }
    .ae-check-list li { padding: 10px 14px 10px 44px; position: relative; border-bottom: 1px solid #2a2a3e; font-size: 0.93rem; color: #e2e8f0; }
    .ae-check-list li::before { content: '\2713'; position: absolute; left: 14px; color: #0891b2; font-weight: 700; font-size: 1.1rem; }
    .ae-print-btn { background: #2a2a3e; color: #aaa; border: none; padding: 9px 18px; font-size: 0.85rem; border-radius: 6px; cursor: pointer; }
    .ae-print-btn:hover { background: #374151; color: #e2e8f0; }

    /* Profil cards */
    .ae-profil-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; margin: 24px 0; }
    .ae-profil-card { background: #1e1e32; border: 1px solid #2a2a3e; border-radius: 10px; padding: 18px 20px; border-top: 3px solid #0891b2; }
    .ae-profil-card h3 { margin: 0 0 10px; font-size: 0.97rem; color: #67e8f9; }
    .ae-profil-card ul { margin: 0; padding-left: 18px; }
    .ae-profil-card ul li { font-size: 0.88rem; color: #aaa; margin-bottom: 5px; line-height: 1.5; }

    .ae-tip { background: #12122a; border: 1px solid #0891b244; border-radius: 8px; padding: 16px 20px; margin: 22px 0; font-size: 0.93rem; color: #ccc; }
    .ae-tip strong { color: #67e8f9; }
</style>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Dossier documents administratifs pour inscription auto-école, liste papiers permis de conduire 2026"
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
                    <li><strong>3 documents universels :</strong> pièce d'identité valide, justificatif de domicile de moins de 6 mois, code e-photo agréé ANTS.</li>
                    <li><strong>Avant 25 ans :</strong> le certificat JDC est obligatoire ; l'ASSR2 l'est avant 21 ans.</li>
                    <li><strong>Hébergé chez un tiers :</strong> attestation signée + copie identité + justificatif de domicile au nom de l'hébergeant.</li>
                    <li><strong>Délai NEPH :</strong> comptez 15 à 21 jours après dépôt pour recevoir votre numéro d'enregistrement.</li>
                    <li><strong>Candidat libre :</strong> les pièces sont identiques — c'est vous qui gérez le dépôt sur l'ANTS.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#simulateur-dossier">Simulateur : votre liste de documents sur-mesure</a></li>
                    <li><a href="#socle-commun">Le socle commun : les documents pour toute inscription</a></li>
                    <li><a href="#focus-par-profil">Focus par profil : recensement, JDC et ASSR2</a></li>
                    <li><a href="#situations-particulieres">Situations particulières : hébergement et candidat libre</a></li>
                    <li><a href="#budget-aides">Budget : frais de dossier et aides au financement</a></li>
                    <li><a href="#faq-dossier-auto-ecole">FAQ : vos questions sur le dossier d'inscription</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>S'inscrire à l'auto-école marque le début de votre autonomie, mais la réussite de votre dossier dépend de la qualité des pièces justificatives fournies. En 2026, la procédure est dématérialisée via l'<strong>ANTS</strong> (Agence Nationale des Titres Sécurisés). Pour obtenir votre numéro <strong>NEPH</strong> sans perdre de temps, les fichiers numériques doivent être lisibles et strictement conformes aux exigences.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="simulateur-dossier">Simulateur : votre liste de documents sur-mesure</h2>

                <p>Votre profil détermine exactement quels papiers fournir pour s'inscrire à l'auto-école. Remplissez les trois champs ci-dessous pour obtenir votre checklist personnalisée en quelques secondes.</p>

                <div id="ae-doc-tool">
                    <h3>Simulateur de dossier — Checklist personnalisée</h3>
                    <p>Identifiez uniquement les documents nécessaires à votre situation actuelle.</p>

                    <div class="ae-tool-step">
                        <label for="ae-age">1. Quel est votre âge ?</label>
                        <select id="ae-age">
                            <option value="mineur">Moins de 17 ans (Conduite accompagnée)</option>
                            <option value="jeune" selected>Entre 17 et 25 ans</option>
                            <option value="adulte">Plus de 25 ans</option>
                        </select>
                    </div>

                    <div class="ae-tool-step">
                        <label for="ae-housing">2. Quel est votre mode d'hébergement ?</label>
                        <select id="ae-housing">
                            <option value="perso">J'ai un justificatif à mon nom</option>
                            <option value="tiers">Je suis hébergé chez un tiers</option>
                        </select>
                    </div>

                    <div class="ae-tool-step">
                        <label for="ae-neph">3. Est-ce votre première inscription au permis ?</label>
                        <select id="ae-neph">
                            <option value="non">Oui, c'est ma première fois</option>
                            <option value="oui">Non, j'ai déjà eu un dossier (même ancien)</option>
                        </select>
                    </div>

                    <button class="ae-tool-btn" onclick="aeGenerateList()">Générer ma checklist</button>

                    <div id="ae-results">
                        <h4>Documents à fournir pour votre dossier :</h4>
                        <ul class="ae-check-list" id="ae-list-container"></ul>
                        <button class="ae-print-btn" onclick="window.print()">Imprimer ma liste</button>
                    </div>
                </div>

                <script>
                function aeGenerateList() {
                    var age     = document.getElementById('ae-age').value;
                    var housing = document.getElementById('ae-housing').value;
                    var neph    = document.getElementById('ae-neph').value;
                    var container  = document.getElementById('ae-list-container');
                    var resultsDiv = document.getElementById('ae-results');

                    var docs = [
                        "Pièce d'identité (CNI ou Passeport) en cours de validité",
                        "Code e-photo numérique (obtenu en cabine agréée ANTS)"
                    ];

                    if (housing === 'perso') {
                        docs.push("Justificatif de domicile de moins de 6 mois à votre nom");
                    } else {
                        docs.push("Justificatif de domicile de l'hébergeant (moins de 6 mois)");
                        docs.push("Pièce d'identité de l'hébergeant");
                        docs.push("Attestation d'hébergement datée et signée");
                    }

                    if (age === 'mineur') {
                        docs.push("Attestation de recensement");
                        docs.push("ASSR 2");
                        docs.push("Pièce d'identité du parent signataire");
                    } else if (age === 'jeune') {
                        docs.push("Certificat de participation à la JDC");
                        docs.push("ASSR 2 (obligatoire si vous avez moins de 21 ans)");
                    }

                    if (neph === 'oui') {
                        docs.push("Votre ancien numéro NEPH (pour réactivation du dossier)");
                    }

                    container.innerHTML = '';
                    docs.forEach(function(doc) {
                        var li = document.createElement('li');
                        li.textContent = doc;
                        container.appendChild(li);
                    });

                    resultsDiv.style.display = 'block';
                    resultsDiv.scrollIntoView({ behavior: 'smooth' });
                }
                </script>

                <!-- ══════════════════════════════════ -->
                <h2 id="socle-commun">Le socle commun : les documents pour toute inscription</h2>

                <p>Quelle que soit votre situation, trois pièces sont systématiquement exigées par l'administration. Elles constituent votre identité numérique auprès de l'ANTS.</p>

                <img src="/Image/quel-papier-faut-il-pour-s-inscrire-a-l-auto-ecole1.webp"
                     alt="Dossier documents administratifs pour inscription auto-école, liste papiers permis de conduire 2026"
                     style="width: 100%; height: auto; border-radius: 8px; margin: 18px 0;">

                <div class="ae-table-wrap">
                    <table class="ae-table">
                        <thead>
                            <tr>
                                <th>Pièce justificative</th>
                                <th>Format recommandé</th>
                                <th>Condition de validité</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Justificatif d'identité</strong></td>
                                <td>Scan recto/verso haute définition</td>
                                <td>CNI, Passeport ou Titre de séjour en cours de validité</td>
                            </tr>
                            <tr>
                                <td><strong>Justificatif de domicile</strong></td>
                                <td>PDF original téléchargé depuis votre compte</td>
                                <td>Émis il y a moins de 6 mois</td>
                            </tr>
                            <tr>
                                <td><strong>Code e-photo</strong></td>
                                <td>Code à 22 caractères à saisir sur l'ANTS</td>
                                <td>Photo et signature numérisées agréées ANTS</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="ae-tip">
                    <strong>Bon à savoir :</strong> si vous possédez une Identité Numérique FranceConnect+, certaines auto-écoles permettent en 2026 une récupération automatique de vos données, ce qui peut accélérer la validation du dossier d'environ une semaine.
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="focus-par-profil">Focus par profil : recensement, JDC et ASSR2</h2>

                <p>En fonction de votre âge et de votre parcours civil, des documents spécifiques s'ajoutent au socle commun.</p>

                <div class="ae-profil-grid">
                    <div class="ae-profil-card">
                        <h3>15-16 ans — Conduite accompagnée</h3>
                        <ul>
                            <li>Attestation de recensement</li>
                            <li>ASSR 2</li>
                            <li>Pièce d'identité du parent signataire</li>
                        </ul>
                    </div>
                    <div class="ae-profil-card">
                        <h3>17-25 ans — Permis B classique</h3>
                        <ul>
                            <li>Certificat de participation à la JDC</li>
                            <li>ASSR 2 (obligatoire avant 21 ans)</li>
                        </ul>
                    </div>
                    <div class="ae-profil-card">
                        <h3>Plus de 25 ans</h3>
                        <ul>
                            <li>Aucun document militaire ni ASSR requis</li>
                            <li>Socle commun uniquement</li>
                        </ul>
                    </div>
                </div>

                <h3>L'ASSR2 : obligatoire avant 21 ans</h3>
                <p>L'Attestation Scolaire de Sécurité Routière niveau 2 reste une pièce centrale pour les jeunes conducteurs. Si vous l'avez égarée, un duplicata peut être demandé à votre collège d'origine. Passé un certain cursus, une attestation sur l'honneur peut être acceptée — renseignez-vous directement auprès de votre auto-école.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="situations-particulieres">Situations particulières : hébergement et candidat libre</h2>

                <p>Si vous ne disposez pas de facture d'énergie ou de téléphone à votre nom, la procédure de "justificatif de domicile tiers" s'applique. Vous devrez alors fournir les trois éléments suivants :</p>

                <ul>
                    <li>Une attestation d'hébergement datée et signée par votre hôte.</li>
                    <li>La copie de la pièce d'identité de l'hébergeant.</li>
                    <li>Un justificatif de domicile à son nom, datant de moins de 6 mois.</li>
                </ul>

                <p>Pour ceux qui choisissent de s'inscrire en <strong>candidat libre</strong> — via La Poste ou des plateformes en ligne — les pièces à fournir sont strictement identiques à celles d'une auto-école traditionnelle. La seule différence : c'est vous qui pilotez le dépôt des documents sur l'ANTS, sans intermédiaire.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="budget-aides">Budget : frais de dossier et aides au financement</h2>

                <p>L'inscription administrative peut ouvrir des droits financiers selon votre situation. Fournir votre contrat d'apprentissage permet de débloquer l'<strong>aide de 500 € pour les apprentis</strong>. Le dispositif "Permis à 1 € par jour" nécessite quant à lui l'accord préalable de votre banque, avant la validation finale du dossier en auto-école.</p>

                <blockquote class="art-blockquote">
                    Ne déposez jamais votre dossier sans avoir vérifié votre éligibilité aux aides — le montage financier doit être bouclé avant la première leçon, pas après.
                    <cite>— Arnaud, Expert Permis & Réglementation</cite>
                </blockquote>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq-dossier-auto-ecole">FAQ : vos questions sur le dossier d'inscription</h2>

                <h3>Puis-je m'inscrire avec un justificatif de domicile de mes parents ?</h3>
                <p>Oui, à condition de joindre une attestation d'hébergement signée par l'un d'eux, accompagnée de sa pièce d'identité et d'un justificatif de domicile à son nom de moins de 6 mois.</p>

                <h3>Quel est le délai de validation par l'ANTS ?</h3>
                <p>En moyenne, comptez 15 à 21 jours après le dépôt pour que votre dossier soit validé et que votre numéro NEPH soit généré. Tout document illisible ou non conforme remet le délai à zéro.</p>

                <h3>L'ASSR 1 est-elle acceptée pour le permis B ?</h3>
                <p>Non. C'est l'ASSR 2, obtenue en classe de 3e, qui est exigée pour le permis B. L'ASSR 1 ne concerne que le permis AM (BSR).</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">Un dossier incomplet, c'est plusieurs semaines perdues avant de commencer les leçons. Prenez 20 minutes pour rassembler chaque pièce dans le bon format avant de vous rendre en auto-école — vous éviterez l'aller-retour administratif qui touche un candidat sur trois.</p>
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
                <p>Savoir exactement quel papier faut-il pour s'inscrire à l'auto-école vous fait gagner du temps réel. Les trois documents du socle commun sont non-négociables ; les pièces complémentaires dépendent uniquement de votre âge et de votre situation de logement. Utilisez le simulateur ci-dessus, constituez votre dossier en une seule fois et déposez-le sans stress sur l'ANTS.</p>
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
            "datePublished" => "2026-04-22T18:00:00+02:00",
            "dateModified"  => "2026-04-22T18:00:00+02:00",
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

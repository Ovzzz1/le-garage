<?php
/**
 * alpine.php — Page Marque : Alpine
 */

$page_title = "Alpine : Histoire, A110, Dieppe et Renaissance de la Marque Française";
$page_description = "Tout savoir sur Alpine : de Jean Rédélé et l'A110 Berlinette à la renaissance de Dieppe, en passant par la F1 et l'avenir 100% électrique du constructeur français.";

$article = [
    'title' => 'Alpine : La Berlinette, Dieppe et la Renaissance Française',
    'subtitle' => 'Née dans un garage normand en 1955, disparue en 1995, ressuscitée en 2017 : l\'histoire d\'Alpine est l\'un des plus beaux comebacks de l\'industrie automobile mondiale.',
    'category' => 'occasion',
    'category_name' => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags' => ['Alpine', 'A110', 'Renault', 'France', 'Sportive'],
    'image' => '',
    'date' => '24 Mars 2026',
    'author' => 'Arnaud',
    'author_role' => 'Journaliste Auto',
    'author_img' => '/Image/arnaud.png',
    'author_bio' => 'Arnaud a visité l\'usine Alpine de Dieppe à trois reprises. Il est convaincu que cette petite marque française est le plus beau secret automobile de l\'Hexagone.',
    'reading_time' => '10 min',
];

$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien' => ['name' => 'Entretien & Réparation', 'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Électrique & Hybride', 'color' => '#059669', 'slug' => 'electrique'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c', 'slug' => 'moto'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2', 'slug' => 'permis'],
];

include __DIR__ . '/../header.php';
?>

<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>" alt="Alpine A110 bleue sur route de montagne" class="art-hero-bg" onerror="this.setAttribute('data-error','true')" onerror="this.setAttribute('data-error','true')">
        <div class="art-hero-overlay"></div>
        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/marques">Annuaire des Marques</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/marques/a">Marques en A</a>
                    <span class="art-bc-sep">/</span>
                    <span>Alpine</span>
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

    <div class="art-layout-wrapper">
        <div class="art-main-col">

            <div class="art-tldr">
                <div class="art-tldr-title">🇫🇷 Alpine en un coup d'œil</div>
                <ul>
                    <li><strong>Fondation :</strong> 1955 par Jean Rédélé, concessionnaire Renault à Dieppe (Seine-Maritime).</li>
                    <li><strong>Philosophie :</strong> Légèreté extrême + moteur central arrière = plaisir de conduite absolu. Chaque gramme compte.</li>
                    <li><strong>Le chef-d'œuvre :</strong> L'A110 Berlinette (1962-1977) — victoire au Rallye de Monte-Carlo 1973, titre mondial des constructeurs en rallye.</li>
                    <li><strong>Le come-back :</strong> En 2017, Renault relance Alpine avec une nouvelle A110 assemblée à la main à l'usine historique de Dieppe.</li>
                    <li><strong>Avenir :</strong> L'A390, un "fastback" électrique de 600 CV basé sur la plateforme AmpR Medium, arrive fin 2025.</li>
                </ul>
            </div>

            <div class="art-toc">
                <div class="art-toc-title">Au sommaire</div>
                <ol>
                    <li><a href="#jean-redele">1. Jean Rédélé : Le concessionnaire normand devenu légende</a></li>
                    <li><a href="#berlinette">2. L'A110 Berlinette : La voiture qui a battu Lancia</a></li>
                    <li><a href="#disparition">3. La longue traversée du désert (1995-2017)</a></li>
                    <li><a href="#renaissance">4. La nouvelle A110 : Chef-d'œuvre de Dieppe</a></li>
                    <li><a href="#f1">5. Alpine en Formule 1 : L'écurie française</a></li>
                    <li><a href="#electrique">6. L'avenir électrique : A290, A390 et au-delà</a></li>
                </ol>
            </div>

            <div class="art-content">

                <h2 id="jean-redele">1. Jean Rédélé : Le concessionnaire normand devenu légende</h2>
                <p>L'histoire d'<strong>Alpine</strong> est avant tout celle d'un homme : <strong>Jean Rédélé</strong>. Né en 1922, fils d'un garagiste de Dieppe, il reprend très jeune la concession Renault familiale. Mais Rédélé n'est pas un simple vendeur de voitures : c'est un pilote compétiteur acharné. En 1952 et 1953, il participe aux <strong>Mille Miglia</strong> en Italie au volant d'une modeste Renault 4CV qu'il a lui-même préparée... et remporte sa catégorie à deux reprises !</p>
                <p>Convaincu que les petites Renault de série peuvent devenir de formidables machines de course avec les bonnes modifications (allègement radical, carrosserie aérodynamique en fibre de verre), il fonde la <em>Société des Automobiles Alpine</em> en 1955. Le nom ? Un hommage aux cols alpins qu'il affectionnait tant lors de ses rallyes.</p>

                <h2 id="berlinette">2. L'A110 Berlinette : La Française qui a battu Lancia</h2>
                <p>En 1962, Alpine présente la voiture qui va tout changer : l'<strong>A110 Berlinette</strong>. Dotée d'un châssis tubulaire en acier, d'une carrosserie en fibre de verre ultra-légère (le poids total ne dépasse pas les 620 kg !) et d'un moteur Renault monté en position centrale arrière, cette petite bombe bleue va terroriser les spéciales de rallye pendant plus d'une décennie.</p>
                <p>Le sommet arrive en <strong>1973</strong> : Alpine remporte le tout premier <strong>Championnat du Monde des Rallyes</strong> grâce aux victoires de Jean-Claude Andruet (Monte-Carlo) et de Jean-Pierre Nicolas (Portugal, Tour de Corse). C'est un exploit colossal pour un petit constructeur normand face aux gigantesques Lancia, Ford et Fiat.</p>

                <h3>Les modèles historiques clés</h3>
                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Modèle Alpine</th>
                                <th>Période</th>
                                <th>Poids</th>
                                <th>Exploit / Particularité</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>A106</strong></td>
                                <td>1955-1961</td>
                                <td>~540 kg</td>
                                <td>Le tout premier modèle. Base Renault 4CV, carrosserie Michelotti en polyester.</td>
                            </tr>
                            <tr>
                                <td><strong>A110 Berlinette</strong></td>
                                <td>1962-1977</td>
                                <td>~620 kg</td>
                                <td>Titre mondial des rallyes 1973. Le chef-d'œuvre absolu de la marque. Plus de 7 500 exemplaires produits.</td>
                            </tr>
                            <tr>
                                <td><strong>A310</strong></td>
                                <td>1971-1984</td>
                                <td>~980 kg</td>
                                <td>Evolution GT confortable avec le V6 PRV 2.7L. L'Alpine de la route, mais plus lourde.</td>
                            </tr>
                            <tr>
                                <td><strong>A610 (GTA)</strong></td>
                                <td>1991-1995</td>
                                <td>~1 100 kg</td>
                                <td>Turbo V6 PRV de 250 CV. Dernière Alpine thermique avant la longue pause. Cote en hausse.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h2 id="disparition">3. La longue traversée du désert (1995-2017)</h2>
                <p>En 1995, la production de l'A610 s'arrête. Renault conserve la marque mais ne produit plus rien sous le nom Alpine pendant <strong>22 ans</strong>. L'usine de Dieppe survit en assemblant des Renault Sport spéciales (Clio V6, Spider). Le rêve d'une nouvelle Alpine semble mort.</p>
                <p>Mais en 2012, Carlos Ghosn (alors PDG de Renault-Nissan) annonce le retour d'Alpine. Après un concept-car en 2016 (l'Alpine Vision), la production de la nouvelle <strong>A110</strong> débute en décembre 2017 dans l'usine historique de Dieppe. La renaissance est en marche.</p>

                <h2 id="renaissance">4. La nouvelle A110 : Le chef-d'œuvre venu de Dieppe</h2>
                <p>La nouvelle <strong>Alpine A110</strong> (2017-2024) est une véritable déclaration d'amour à la légèreté. Avec un châssis tout aluminium de seulement <strong>1 103 kg</strong> (version Pure), un moteur 1.8 turbo 4 cylindres Renault de 252 à 300 CV monté en position centrale arrière, et une boîte à double embrayage à 7 rapports, elle offre un plaisir de conduite que même Porsche reconnaît comme exceptionnel.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Version A110</th>
                                <th>Puissance</th>
                                <th>0-100 km/h</th>
                                <th>Cote occasion 2026</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>A110 Pure</strong></td>
                                <td>252 CV</td>
                                <td>4.5 s</td>
                                <td>42 000 € à 52 000 €</td>
                            </tr>
                            <tr>
                                <td><strong>A110 Légende</strong></td>
                                <td>252 CV</td>
                                <td>4.5 s</td>
                                <td>46 000 € à 56 000 €</td>
                            </tr>
                            <tr>
                                <td><strong>A110 S</strong></td>
                                <td>300 CV</td>
                                <td>4.2 s</td>
                                <td>52 000 € à 68 000 €</td>
                            </tr>
                            <tr>
                                <td><strong>A110 R</strong></td>
                                <td>300 CV (1 004 kg !)</td>
                                <td>3.9 s</td>
                                <td>80 000 € à 110 000 €</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p><em>Pages modèles à consulter (bientôt disponibles) :</em></p>
                <ul>
                    <li>Alpine A110 : Fiche, avis et guide d'achat <span style="color:#999;font-size:0.85em;">(bientôt)</span></li>
                    <li>Alpine A290 : La citadine électrique sportive <span style="color:#999;font-size:0.85em;">(bientôt)</span></li>
                    <li>Alpine A390 : Le fastback de 600 CV <span style="color:#999;font-size:0.85em;">(bientôt)</span></li>
                </ul>

                <h2 id="f1">5. Alpine en Formule 1 : L'écurie tricolore</h2>
                <p>Depuis 2021, Renault a rebaptisé son écurie de Formule 1 en <strong>Alpine F1 Team</strong>, basée à Enstone (Angleterre) et Viry-Châtillon (France). Fernando Alonso, Pierre Gasly et Esteban Ocon ont porté les couleurs bleu-blanc-rouge en Grand Prix. En 2025, l'écurie traverse une restructuration majeure avec l'arrivée du motoriste Mercedes, marquant la fin de la production des moteurs Renault en F1.</p>

                <h2 id="electrique">6. L'avenir 100% électrique</h2>
                <p>Sous la direction de <strong>Philippe Krief</strong> (ex-Ferrari), Alpine se transforme en une véritable marque sportive électrique mondiale. Trois modèles sont programmés :</p>
                <ul>
                    <li><strong>Alpine A290 (2024) :</strong> Une citadine sportive électrique basée sur la Renault 5, avec 220 CV et un châssis affûté. L'entrée de gamme du monde Alpine.</li>
                    <li><strong>Alpine A390 (2025) :</strong> Un fastback (SUV coupé) de plus de 600 CV sur la plateforme AmpR Medium, destiné à rivaliser avec le Porsche Macan EV.</li>
                    <li><strong>Successeur de l'A110 :</strong> Un coupé sport électrique prévu autour de 2026-2027, potentiellement développé avec Lotus (plateforme partagée).</li>
                </ul>
                <p>L'usine de Dieppe a malheureusement fermé ses portes fin 2024 après l'arrêt de la production de l'A110 thermique. Un crève-cœur pour les 300 ouvriers normands, mais Alpine promet de nouveaux sites d'assemblage pour ses futurs modèles électriques.</p>

            </div>

            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>" class="art-author-avatar">
                <div class="art-author-info">
                    <span class="art-author-label">Le Berlinettophile</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir l'équipe</a>
                </div>
            </div>

            <div class="art-conclusion">
                <h2 id="faq">FAQ Alpine</h2>
                <h3>Alpine appartient-elle à Renault ?</h3>
                <p>Oui. Alpine est une filiale à 100% du <strong>Groupe Renault</strong> depuis 1973. Depuis 2021, Alpine est aussi le nom de l'écurie de Formule 1 du groupe.</p>
                <h3>Où sont fabriquées les Alpine ?</h3>
                <p>La nouvelle A110 était assemblée à la main à l'usine historique de <strong>Dieppe</strong> (Seine-Maritime, Normandie). Les futurs modèles électriques seront produits sur d'autres sites Renault en France (Douai, Maubeuge).</p>
                <h3>L'Alpine A110 est-elle fiable ?</h3>
                <p>Oui. Le moteur 1.8L turbo est le même que la Mégane RS (moteur M5P), reconnu pour sa robustesse. La boîte Getrag DCT est fiable si le logiciel est à jour. Seul bémol : la faible garde au sol rend les bas de caisse vulnérables.</p>
            </div>

        </div>

        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Autres marques en A</div>
                    <ul style="list-style:none; padding:0;">
                        <li style="padding:6px 0;"><a href="/marques/abarth" style="color:#7c3aed;">→ Abarth</a></li>
                        <li style="padding:6px 0;"><a href="/marques/alfa-romeo" style="color:#7c3aed;">→ Alfa Romeo</a></li>
                        <li style="padding:6px 0;"><a href="/marques/aston-martin" style="color:#7c3aed;">→ Aston Martin</a></li>
                        <li style="padding:6px 0;"><a href="/marques/audi" style="color:#7c3aed;">→ Audi</a></li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</article>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.garageraymond.fr/marques/alpine" },
  "headline": <?php echo json_encode($article['title'] ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,
  "description": <?php echo json_encode($page_description ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,
  "image": ["https://www.garageraymond.fr<?php echo $article['image']; ?>"],
  "datePublished": "2026-03-24T08:00:00+01:00",
  "author": { "@type": "Person", "name": "<?php echo $article['author']; ?>", "url": "https://www.garageraymond.fr/equipe" },
  "publisher": { "@type": "Organization", "name": "Le garage expert Auto", "url": "https://www.garageraymond.fr" }
}
</script>

<?php include __DIR__ . '/../footer.php'; ?>

<?php
/**
 * abarth.php — Page Marque : Abarth
 */

$page_title = "Abarth : Histoire, Modèles et Fiabilité du Scorpion Italien";
$page_description = "Tout savoir sur Abarth : l'histoire de Carlo Abarth, les mythiques 595 et 695, la fiabilité du moteur 1.4 T-Jet, et l'avenir 100% électrique de la marque au scorpion.";

$brand = [
    'name' => 'Abarth',
    'slug' => 'abarth',
    'logo' => '/Image/marques/abarth-logo.png',
    'country' => 'Italie',
    'founded' => '1949',
    'founder' => 'Carlo Abarth',
    'hq' => 'Turin, Italie',
    'parent' => 'Stellantis (Fiat)',
    'status' => 'Active (transition électrique)',
];

$article = [
    'title' => 'Abarth : L\'Histoire du Scorpion qui Pique (Guide Complet)',
    'subtitle' => 'Fondée en 1949 par un génie austro-italien, Abarth transforme les petites Fiat en bombes de poche depuis 75 ans. Voici le dossier complet sur la marque au scorpion.',
    'category' => 'occasion',
    'category_name' => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags' => ['Abarth', 'Fiat', 'Sportive', 'Italie'],
    'image' => '/Image/marques/abarth-hero.webp',
    'date' => '24 Mars 2026',
    'author' => 'Arnaud',
    'author_role' => 'Passionné Auto',
    'author_img' => '/Image/arnaud.png',
    'author_bio' => 'Arnaud voue un culte aux petites sportives italiennes nerveuses. Il a passé des heures sur circuit à bord d\'une 695 Biposto pour vous livrer un avis sans filtre.',
    'reading_time' => '9 min',
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
        <img src="<?php echo $article['image']; ?>" alt="Abarth 595 rouge vif sur circuit" class="art-hero-bg" onerror="this.setAttribute('data-error','true')" onerror="this.setAttribute('data-error','true')">
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
                    <span>Abarth</span>
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

            <!-- Fiche d'identité rapide -->
            <div class="art-tldr">
                <div class="art-tldr-title">🦂 Fiche d'identité : Abarth</div>
                <ul>
                    <li><strong>Pays d'origine :</strong> <?php echo $brand['country']; ?> (fondée à Turin en <?php echo $brand['founded']; ?>)</li>
                    <li><strong>Fondateur :</strong> <?php echo $brand['founder']; ?> (né Karl Abarth à Vienne, Autriche)</li>
                    <li><strong>Maison-mère :</strong> <?php echo $brand['parent']; ?> — intégrée à Fiat depuis 1971</li>
                    <li><strong>Spécialité :</strong> Préparation sportive de citadines Fiat (500, Punto, 124 Spider)</li>
                    <li><strong>Statut actuel :</strong> <?php echo $brand['status']; ?> — la nouvelle Abarth 500e électrique remplace la 595 thermique</li>
                </ul>
            </div>

            <div class="art-toc">
                <div class="art-toc-title">Au sommaire</div>
                <ol>
                    <li><a href="#histoire">1. Carlo Abarth : Du pilote moto viennois au dieu de Turin</a></li>
                    <li><a href="#palmares">2. Le palmarès sportif : 10 000 records du monde</a></li>
                    <li><a href="#modeles">3. Les modèles Abarth cultes (de la 750 à la 695)</a></li>
                    <li><a href="#fiabilite">4. Fiabilité et entretien du moteur 1.4 T-Jet</a></li>
                    <li><a href="#electrique">5. L'Abarth 500e : Le futur 100% électrique</a></li>
                    <li><a href="#acheter">6. Acheter une Abarth d'occasion : Le guide</a></li>
                </ol>
            </div>

            <div class="art-content">

                <h2 id="histoire">1. Carlo Abarth : Du pilote moto viennois au dieu de Turin</h2>
                <p>L'Histoire d'<strong>Abarth</strong> est indissociable de celle de son fondateur, <strong>Carlo Abarth</strong> (né Karl Abarth le 15 novembre 1908 à Vienne, en Autriche). Champion de moto side-car dans les années 1930, il émigre à Merano (Italie) lorsque le Haut-Adige est rattaché à l'Italie, et en adopte la nationalité. Après la guerre, il se lance dans la compétition automobile en devenant directeur d'écurie pour Cisitalia.</p>
                <p>Le 31 mars 1949, il fonde à Turin la société <em>Abarth & C.</em> avec sa femme Annelise et l'ancien pilote Guido Scagliarini. Le logo ? Un <strong>scorpion</strong>, son signe astrologique. La philosophie ? Prendre des voitures de grande série (principalement des Fiat) et les transformer en véritables armes de course légères et surpuissantes pour leur cylindrée. C'est le concept de la "Giant Killer" (la tueuse de géantes) qui va propulser la marque dans la légende.</p>

                <h2 id="palmares">2. Le palmarès sportif : 10 000 records du monde</h2>
                <p>Le chiffre est hallucinant mais authentique : Abarth a décroché plus de <strong>10 000 records du monde et plus de 7 300 victoires en compétition</strong>. Comment une si petite structure a-t-elle pu réaliser cet exploit ? En dominant les catégories de cylindrée inférieure (500cc, 700cc, 850cc, 1000cc), là où les grosses écuries ne se battaient pas. Carlo Abarth a transformé chaque course en une démonstration de supériorité technique absolue dans sa catégorie.</p>
                <p>Parmi les exploits les plus célèbres : la domination totale des 500 km du Nürburgring en catégories Tourisme, les victoires de classe aux 24 Heures du Mans, et la conquête insolente de records de vitesse à Monza avec de minuscules monoplaces.</p>

                <h2 id="modeles">3. Les modèles Abarth cultes (et ceux à venir)</h2>
                <p>C'est ici que le scorpion prend tout son sens. Chaque époque a son Abarth signature :</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Modèle Abarth</th>
                                <th>Période</th>
                                <th>Motorisation</th>
                                <th>Ce qui le rend culte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Abarth 750 Zagato</strong></td>
                                <td>1956-1961</td>
                                <td>4 cyl. 747cc (~47 CV)</td>
                                <td>Le premier chef-d'œuvre. Carrosserie Zagato "double bulle", un bijou de course à collectionner.</td>
                            </tr>
                            <tr>
                                <td><strong>Abarth 595</strong> (originale)</td>
                                <td>1963-1971</td>
                                <td>2 cyl. 593cc (27→32 CV)</td>
                                <td>La Fiat 500 transformée en fusée de poche. Celle qui a créé le mythe du scorpion dans les rues italiennes.</td>
                            </tr>
                            <tr>
                                <td><strong>Abarth 124 Rally</strong></td>
                                <td>2016-2019</td>
                                <td>1.8L Turbo (300 CV)</td>
                                <td>Homologation rallye du Spider Fiat 124. Un véritable petit monstre léger propulsion.</td>
                            </tr>
                            <tr>
                                <td><strong>Abarth 595/695 Competizione</strong></td>
                                <td>2008-2024</td>
                                <td>1.4 T-Jet (145→180 CV)</td>
                                <td>La star moderne. La 695 Biposto de 190 CV est le sommet absolu de la petite sportive urbaine.</td>
                            </tr>
                            <tr>
                                <td><strong>Abarth 500e</strong> (Turismo/Scorpionissima)</td>
                                <td>2023+</td>
                                <td>Électrique 155 CV (42 kWh)</td>
                                <td>Premier scorpion 100% électrique. Haut-parleur externe "Sound Generator" pour recréer le son du flat-four !</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p><em>Pages modèles à consulter (bientôt disponibles) :</em></p>
                <ul>
                    <li>Abarth 595 Competizione : Fiche & Avis complet <span style="color:#999;font-size:0.85em;">(bientôt)</span></li>
                    <li>Abarth 695 Biposto : Le sommet du scorpion <span style="color:#999;font-size:0.85em;">(bientôt)</span></li>
                    <li>Abarth 500e : L'électrique qui gronde <span style="color:#999;font-size:0.85em;">(bientôt)</span></li>
                </ul>

                <h2 id="fiabilite">4. Fiabilité et entretien du moteur 1.4 T-Jet</h2>
                <p>C'est LA question que se pose chaque acheteur potentiel d'une <strong>Abarth 595 d'occasion</strong>. Le moteur <strong>1.4 MultiAir Turbo (T-Jet)</strong> est globalement un bloc solide, hérité du groupe Fiat-Chrysler. Mais il a ses particularités :</p>
                <ul>
                    <li><strong>Le système MultiAir :</strong> Ce système de contrôle électro-hydraulique des soupapes est brillant en termes de performances, mais peut devenir capricieux passé les 80 000 km si l'huile n'a pas été changée religieusement (tous les 15 000 km maximum avec une 5W40 de qualité).</li>
                    <li><strong>L'embrayage :</strong> C'est la pièce d'usure N°1 sur une Abarth. Les propriétaires qui "claquent" leur embrayage en ville peuvent le tuer en 30 000 km. Budget : environ 800€ à 1 200€ de remplacement.</li>
                    <li><strong>Le turbo :</strong> Le Garrett ou IHI équipant la 595 est robuste, mais attention à la cokéfaction (ne coupez jamais le moteur immédiatement après une conduite sportive — laissez tourner au ralenti 30 secondes).</li>
                    <li><strong>Consommation d'huile :</strong> Une consommation de 0.5L/1000km est considérée comme "normale" par Fiat sur ce bloc turbocompressé, ce qui surprend souvent les néophytes.</li>
                </ul>

                <h2 id="electrique">5. L'Abarth 500e : Le futur 100% électrique du scorpion</h2>
                <p>La grande révolution de 2023. Stellantis a décidé d'arrêter la production de la mythique 595 thermique pour ne proposer plus qu'un scorpion électrique : la <strong>Abarth 500e</strong>. Sur le papier, c'est audacieux : 155 chevaux instantanés, un 0 à 100 km/h en 7 secondes (plus rapide que l'ancienne 595 !), et surtout un "Sound Generator" externe breveté qui reproduit un grondement artificiel inspiré du moteur thermique.</p>
                <p>Mais le poids (1 405 kg contre 1 110 kg pour la 595 thermique) et l'autonomie limitée à ~250 km WLTP divisent les puristes. Reste que la plateforme e-CMP de Stellantis est éprouvée, et la fiabilité électrique devrait être supérieure à celle du T-Jet vieillissant.</p>

                <h2 id="acheter">6. Acheter une Abarth d'occasion : Le guide de survie</h2>
                <p>L'Abarth 595 est devenue une star du marché de l'occasion sportive. Voici les fourchettes de prix constatées en 2026 :</p>
                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Version</th>
                                <th>Année</th>
                                <th>Prix moyen occasion</th>
                                <th>Points de vigilance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>595 (145 CV)</td>
                                <td>2016-2020</td>
                                <td>12 000 € à 16 000 €</td>
                                <td>Vérifier embrayage + historique entretien huile</td>
                            </tr>
                            <tr>
                                <td>595 Competizione (165-180 CV)</td>
                                <td>2017-2023</td>
                                <td>16 000 € à 22 000 €</td>
                                <td>Échappement Record Monza à inspecter (corrosion)</td>
                            </tr>
                            <tr>
                                <td>695 Biposto / 70° Anniversario</td>
                                <td>2015-2022</td>
                                <td>22 000 € à 35 000 €</td>
                                <td>Séries limitées = cote en hausse. Vérifier authenticité !</td>
                            </tr>
                            <tr>
                                <td>500e Scorpionissima (155 CV)</td>
                                <td>2023+</td>
                                <td>28 000 € à 38 000 €</td>
                                <td>État de la batterie (cycle de charge), garantie Stellantis</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>" class="art-author-avatar">
                <div class="art-author-info">
                    <span class="art-author-label">L'Expert Scorpion</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir l'équipe</a>
                </div>
            </div>

            <div class="art-conclusion">
                <h2 id="faq">FAQ Abarth</h2>
                <h3>Abarth, c'est une marque ou un préparateur ?</h3>
                <p>Les deux ! Fondée en 1949 comme préparateur indépendant, Abarth a été rachetée par Fiat en 1971. Depuis, c'est la <strong>division sportive officielle de Fiat</strong> (comme AMG pour Mercedes ou M pour BMW), mais elle conserve son identité de marque propre avec son réseau de concessionnaires.</p>
                <h3>La 595 est-elle fiable ?</h3>
                <p>Oui, globalement. Le moteur 1.4 T-Jet est robuste si l'entretien est respecté (vidanges courtes, huile 5W40). L'embrayage est la pièce d'usure principale. Comptez un budget entretien annuel d'environ 600€ à 900€ hors pneus.</p>
            </div>

        </div>

        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Autres marques en A</div>
                    <ul style="list-style:none; padding:0;">
                        <li style="padding:6px 0;"><a href="/marques/alfa-romeo" style="color:#7c3aed;">→ Alfa Romeo</a></li>
                        <li style="padding:6px 0;"><a href="/marques/alpine" style="color:#7c3aed;">→ Alpine</a></li>
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
  "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.garageraymond.fr/marques/abarth" },
  "headline": "<?php echo addslashes($article['title']); ?>",
  "description": "<?php echo addslashes($page_description); ?>",
  "image": ["https://www.garageraymond.fr<?php echo $article['image']; ?>"],
  "datePublished": "2026-03-24T08:00:00+01:00",
  "author": { "@type": "Person", "name": "<?php echo $article['author']; ?>", "url": "https://www.garageraymond.fr/equipe" },
  "publisher": { "@type": "Organization", "name": "Le garage expert Auto", "url": "https://www.garageraymond.fr" }
}
</script>

<?php include __DIR__ . '/../footer.php'; ?>

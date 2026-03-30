<?php
/**
 * aston-martin.php — Page Marque : Aston Martin
 */

$page_title = "Aston Martin : Histoire, DB5 à Valhalla, Modèles et Guide Complet";
$page_description = "L'histoire d'Aston Martin, de Lionel Martin au mythe James Bond. DB5, Vantage, DBS, Valkyrie : tous les modèles décryptés. Fiabilité, cotes et avenir de la marque.";

$article = [
    'title' => 'Aston Martin : Du Mythe James Bond à la Valkyrie (Dossier Expert)',
    'subtitle' => 'Voitures les plus élégantes du monde, héritières du gentleman-driver britannique. Plongée dans plus d\'un siècle de grâce, de puissance et de V12 rugissants.',
    'category' => 'occasion',
    'category_name' => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags' => ['Aston Martin', 'DB5', 'James Bond', 'Luxe', 'V12'],
    'image' => '/Image/marques/aston-martin-hero.webp',
    'date' => '24 Mars 2026',
    'author' => 'Arnaud',
    'author_role' => 'Expert Automobile',
    'author_img' => '/Image/arnaud.png',
    'author_bio' => 'Arnaud considère Aston Martin comme le pinacle de l\'élégance automobile. Il a pu essayer la DB11 sur les routes du Pays de Galles et en garde un souvenir impérissable.',
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
        <img src="<?php echo $article['image']; ?>" alt="Aston Martin DB11 grise sur route de campagne anglaise" class="art-hero-bg" onerror="this.setAttribute('data-error','true')" onerror="this.setAttribute('data-error','true')">
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
                    <span>Aston Martin</span>
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
                <div class="art-tldr-title">🇬🇧 Aston Martin en bref</div>
                <ul>
                    <li><strong>Fondation :</strong> 1913 par Lionel Martin et Robert Bamford, à Londres.</li>
                    <li><strong>Nom :</strong> « Aston » vient de la course de côte d'Aston Clinton (Buckinghamshire) où Lionel Martin triomphait.</li>
                    <li><strong>Siège actuel :</strong> Gaydon, Warwickshire (Angleterre). Deuxième usine de SUV à St Athan (Pays de Galles).</li>
                    <li><strong>Propriétaire :</strong> Lawrence Stroll (milliardaire canadien) + consortium depuis 2020. Partenariat technique avec Mercedes-AMG.</li>
                    <li><strong>James Bond :</strong> Aston Martin est la voiture officielle de 007 depuis <em>Goldfinger</em> (1964). La DB5 est la voiture de cinéma la plus célèbre au monde.</li>
                </ul>
            </div>

            <div class="art-content">

                <h2 id="histoire">1. De Lionel Martin à Lawrence Stroll : Un siècle de hauts et de bas</h2>
                <p><strong>Aston Martin</strong> est née en 1913 dans un petit atelier londonien fondé par <strong>Lionel Martin</strong> et <strong>Robert Bamford</strong>. Passionnés de course automobile, ils baptisent leur entreprise en combinant le nom de la célèbre côte d'Aston Clinton (où Martin courait avec succès) et son propre patronyme.</p>
                <p>L'histoire financière d'Aston Martin est l'une des plus tumultueuses de l'industrie : la marque a frôlé la faillite pas moins de <strong>7 fois</strong> en un siècle. Elle a été sauvée successivement par David Brown (ère des "DB" légendaires, 1947-1972), par Ford (1987-2007, qui en a fait un joyau de son Premier Automotive Group), puis par un consortium d'investisseurs koweïtiens, avant d'être finalement reprise par le milliardaire canadien <strong>Lawrence Stroll</strong> en 2020.</p>

                <h2 id="bond">2. James Bond et la DB5 : Le partenariat le plus célèbre du cinéma</h2>
                <p>En 1964, le réalisateur Guy Hamilton cherche une voiture pour le troisième film de James Bond, <em>Goldfinger</em>. Ian Fleming, l'auteur des romans, avait choisi une Bentley Mark IV dans ses livres, mais la production opte pour un choix plus moderne et glamour : une <strong>Aston Martin DB5</strong> gris argenté.</p>
                <p>Équipée de gadgets fantasques (mitrailleuses, siège éjectable, plaque d'immatriculation pivotante, écran radar), la DB5 devient instantanément l'icône absolue du cinéma automobile. Depuis lors, Aston Martin est apparue dans <strong>plus de 15 films Bond</strong>, consolidant un partenariat marketing que les experts estiment à des milliards de dollars de valeur médiatique cumulée.</p>

                <h2 id="modeles">3. Les modèles Aston Martin à travers les âges</h2>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Modèle</th>
                                <th>Époque</th>
                                <th>Motorisation</th>
                                <th>Statut & Cote</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>DB5</strong></td>
                                <td>1963-1965</td>
                                <td>6 cyl. en ligne 4.0L (282 CV)</td>
                                <td>Voiture de James Bond. Cote : 500 000 € à 1 500 000 € selon état et provenance.</td>
                            </tr>
                            <tr>
                                <td><strong>V8 Vantage (1977)</strong></td>
                                <td>1977-1989</td>
                                <td>V8 5.3L (390 CV)</td>
                                <td>Surnommée "la Ferrari britannique". La plus puissante Aston de son époque.</td>
                            </tr>
                            <tr>
                                <td><strong>DB7</strong></td>
                                <td>1994-2004</td>
                                <td>6 cyl. 3.2L SC / V12 6.0L</td>
                                <td>La voiture qui a sauvé la marque sous l'ère Ford. La plus vendue de l'histoire (7 000+ ex.).</td>
                            </tr>
                            <tr>
                                <td><strong>DB9</strong></td>
                                <td>2004-2016</td>
                                <td>V12 5.9L (450→540 CV)</td>
                                <td>La GT par excellence. Châssis aluminium collé VH, la base de l'Aston moderne.</td>
                            </tr>
                            <tr>
                                <td><strong>Vantage (actuelle)</strong></td>
                                <td>2018+</td>
                                <td>V8 4.0L bi-turbo AMG (535 CV)</td>
                                <td>Le coupé sport d'entrée de gamme. Moteur Mercedes-AMG. Prix neuf : ~160 000 €.</td>
                            </tr>
                            <tr>
                                <td><strong>DB12</strong></td>
                                <td>2023+</td>
                                <td>V8 4.0L bi-turbo (680 CV)</td>
                                <td>La remplaçante de la DB11. "Super Tourer" au lieu de Grand Tourer.</td>
                            </tr>
                            <tr>
                                <td><strong>DBX707</strong></td>
                                <td>2022+</td>
                                <td>V8 4.0L bi-turbo (707 CV)</td>
                                <td>Le SUV le plus puissant du monde lors de son lancement. ~230 000 €.</td>
                            </tr>
                            <tr>
                                <td><strong>Valkyrie</strong></td>
                                <td>2022+</td>
                                <td>V12 6.5L atmo Cosworth + hybride (1 160 CV)</td>
                                <td>Hypercar conçue avec Red Bull Racing (Adrian Newey). 150 exemplaires. ~3 000 000 €.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p><em>Pages modèles à consulter (bientôt disponibles) :</em></p>
                <ul>
                    <li>Aston Martin Vantage : Fiche et guide d'achat <span style="color:#999;font-size:0.85em;">(bientôt)</span></li>
                    <li>Aston Martin DB12 : Le Super Tourer <span style="color:#999;font-size:0.85em;">(bientôt)</span></li>
                    <li>Aston Martin DBX707 : Le SUV de 707 CV <span style="color:#999;font-size:0.85em;">(bientôt)</span></li>
                </ul>

                <h2 id="fiabilite">4. Fiabilité : Le prix de l'exclusivité britannique</h2>
                <p>Soyons honnêtes : posséder une Aston Martin n'est pas pour les frileux du portefeuille. Les modèles pré-2018 (tout-V12 maison) souffrent de coûts d'entretien astronomiques :</p>
                <ul>
                    <li><strong>Moteur V12 5.9L :</strong> Fiable mécaniquement, mais la vidange seule coûte autour de 800€ (12 litres d'huile spécifique). L'embrayage et le volant bi-masse peuvent atteindre 6 000€ de remplacement.</li>
                    <li><strong>Électronique :</strong> Les modèles 2005-2015 utilisaient des composants Volvo/Ford vieillissants. Les pannes d'écran, de commodos et de pompes à carburant sont monnaie courante.</li>
                    <li><strong>L'ère Mercedes-AMG (2018+) :</strong> L'arrivée du V8 4.0 bi-turbo Mercedes a considérablement amélioré la fiabilité. Ce moteur M177 est un bloc éprouvé et les coûts d'entretien ont baissé significativement.</li>
                </ul>

                <h2 id="f1">5. Aston Martin en Formule 1</h2>
                <p>Depuis 2021, <strong>Lawrence Stroll</strong> a rebaptisé l'écurie Racing Point en <strong>Aston Martin F1 Team</strong>. Avec le recrutement du quadruple champion du monde <strong>Sebastian Vettel</strong> (2021-2022) puis du double champion <strong>Fernando Alonso</strong> (2023+), et la construction d'une nouvelle usine ultramoderne à Silverstone, l'ambition est claire : viser le titre mondial d'ici 2026, en profitant du nouveau règlement moteur.</p>
                <p>Le designer de génie <strong>Adrian Newey</strong> (ex-Red Bull Racing) a rejoint l'écurie en 2025, rendant l'objectif crédible pour la première fois.</p>

                <h2 id="avenir">6. L'avenir : Electrification et la vision de Stroll</h2>
                <p>Aston Martin a annoncé que son premier modèle 100% électrique arrivera en <strong>2026</strong>, basé sur une plateforme développée en partenariat avec <strong>Lucid Motors</strong> (le constructeur de la Lucid Air). Le premier EV Aston Martin promet plus de 700 km d'autonomie et une puissance de plus de 800 CV. La marque prévoit d'électrifier toute sa gamme d'ici 2030, tout en conservant le V12 atmosphérique le plus longtemps possible via des carburants synthétiques.</p>

            </div>

            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>" class="art-author-avatar">
                <div class="art-author-info">
                    <span class="art-author-label">Le Gentleman Driver</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir l'équipe</a>
                </div>
            </div>

            <div class="art-conclusion">
                <h2 id="faq">FAQ Aston Martin</h2>
                <h3>Combien coûte une Aston Martin neuve ?</h3>
                <p>Le modèle d'entrée de gamme, la <strong>Vantage</strong>, démarre à environ 160 000 € en 2026. Le sommet de gamme, la <strong>Valkyrie</strong>, dépasse les 3 millions d'euros.</p>
                <h3>Les Aston Martin utilisent-elles des moteurs Mercedes ?</h3>
                <p>Oui, depuis 2018. Le V8 4.0L bi-turbo (code M177) de Mercedes-AMG équipe la Vantage, la DB12 et le DBX. Les V12 restent développés en interne par Aston Martin à Cologne (Allemagne).</p>
            </div>
        </div>

        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Autres marques en A</div>
                    <ul style="list-style:none; padding:0;">
                        <li style="padding:6px 0;"><a href="/marques/abarth" style="color:#7c3aed;">→ Abarth</a></li>
                        <li style="padding:6px 0;"><a href="/marques/alfa-romeo" style="color:#7c3aed;">→ Alfa Romeo</a></li>
                        <li style="padding:6px 0;"><a href="/marques/alpine" style="color:#7c3aed;">→ Alpine</a></li>
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
  "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.garageraymond.fr/marques/aston-martin" },
  "headline": <?php echo json_encode($article['title'] ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,
  "description": <?php echo json_encode($page_description ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,
  "image": ["https://www.garageraymond.fr<?php echo $article['image']; ?>"],
  "datePublished": "2026-03-24T08:00:00+01:00",
  "author": { "@type": "Person", "name": "<?php echo $article['author']; ?>", "url": "https://www.garageraymond.fr/equipe" },
  "publisher": { "@type": "Organization", "name": "Le garage expert Auto", "url": "https://www.garageraymond.fr" }
}
</script>

<?php include __DIR__ . '/../footer.php'; ?>

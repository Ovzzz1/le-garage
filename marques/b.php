<?php
/**
 * marques/b.php — Page Index N3 : Toutes les Marques en B
 * URL : /marques/b
 */
$page_title = "Marques Automobiles en B : Liste Complète de BMW à Bugatti";
$page_description = "Découvrez toutes les marques automobiles commençant par B : BMW, Bugatti, Bentley, Buick, BYD, Brabus. Histoire, modèles, prix et classification détaillée.";

$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb'],
    'entretien' => ['name' => 'Entretien & Réparation', 'color' => '#dc2626'],
    'electrique' => ['name' => 'Électrique & Hybride', 'color' => '#059669'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2'],
];

// Toutes les marques en B avec métadonnées
$marques_b = [
    ['name' => 'BMW',       'pays' => '🇩🇪', 'pays_nom' => 'Allemagne', 'annee' => 1916, 'statut' => 'Actif',    'type' => 'Premium & Sportif',    'desc' => 'Bayerische Motoren Werke. Le summum du plaisir de conduire avec l\'hélice bavaroise et la division M.'],
    ['name' => 'Bugatti',   'pays' => '🇫🇷', 'pays_nom' => 'France',    'annee' => 1909, 'statut' => 'Actif',    'type' => 'Hypercars',            'desc' => 'L\'excellence automobile née à Molsheim. Chiron, Veyron, Tourbillon et la quête des records de vitesse.'],
    ['name' => 'Bentley',   'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1919, 'statut' => 'Actif',    'type' => 'Luxe & Grand Tourisme','desc' => 'Le luxe britannique allié aux performances. Continental GT et Flying Spur, vainqueur historique au Mans.'],
    ['name' => 'Buick',     'pays' => '🇺🇸', 'pays_nom' => 'USA',       'annee' => 1899, 'statut' => 'Actif',    'type' => 'Premium américain',    'desc' => 'Pilier fondateur de General Motors. Aujourd\'hui très populaire en Chine avec une gamme de SUV cossus.'],
    ['name' => 'BYD',       'pays' => '🇨🇳', 'pays_nom' => 'Chine',     'annee' => 1995, 'statut' => 'Actif',    'type' => 'Généraliste Électrique','desc' => 'Build Your Dreams. Le géant de Shenzhen, n°1 mondial des véhicules électrifiés et pionnier des batteries LFP.'],
    ['name' => 'Brabus',    'pays' => '🇩🇪', 'pays_nom' => 'Allemagne', 'annee' => 1977, 'statut' => 'Actif',    'type' => 'Préparateur Extrême',  'desc' => 'Le sorcier de Bottrop. Spécialiste des Mercedes AMG survitaminées, Classe G 900 Rocket et finitions très haut de gamme.'],
    ['name' => 'BAC',       'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 2009, 'statut' => 'Actif',    'type' => 'Sportives Piste',      'desc' => 'Briggs Automotive Company. Créateur de la Mono, une monoplace ultra-légère homologuée pour la route.'],
    ['name' => 'Bertone',   'pays' => '🇮🇹', 'pays_nom' => 'Italie',    'annee' => 1912, 'statut' => 'Renaissance','type' => 'Carrossier mythique', 'desc' => 'Studio de design légendaire, auteur de chefs-d\'œuvre comme la Lamborghini Miura et la Countach.'],
    ['name' => 'Bizzarrini','pays' => '🇮🇹', 'pays_nom' => 'Italie',    'annee' => 1964, 'statut' => 'Renaissance','type' => 'Sportives radicales',  'desc' => 'Créée par Giotto Bizzarrini, ex-ingénieur de la Ferrari 250 GTO. La 5300 GT Strada est son chef-d\'œuvre.'],
    ['name' => 'Borgward',  'pays' => '🇩🇪', 'pays_nom' => 'Allemagne', 'annee' => 1919, 'statut' => 'Disparu',  'type' => 'Généraliste',          'desc' => 'Constructeur historique de Brême. L\'Isabella fut son grand succès. Disparu en 1961 malgré une tentative de retour.'],
    ['name' => 'Bristol',   'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1945, 'statut' => 'Disparu',  'type' => 'Luxe confidentiel',    'desc' => 'L\'excentricité britannique absolue, assemblage artisanal et V8 américains. Liquidation en 2020.'],
    ['name' => 'Bitter',    'pays' => '🇩🇪', 'pays_nom' => 'Allemagne', 'annee' => 1971, 'statut' => 'Confidentiel','type' => 'Grand Tourisme',       'desc' => 'Artisan allemand créant de luxueux coupés et cabriolets sur des bases mécaniques Opel (CD, SC).'],
    ['name' => 'Bowler',    'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1985, 'statut' => 'Racheté JLR','type' => 'Tout-terrain extrême', 'desc' => 'Préparateur de Land Rover pour le rallye-raid et le Dakar. Intégré à Jaguar Land Rover.'],
    ['name' => 'Brabham',   'pays' => '🇦🇺', 'pays_nom' => 'Australie', 'annee' => 1960, 'statut' => 'Actif',    'type' => 'Supercars Piste',      'desc' => 'Héritage direct de la légende de F1 Sir Jack Brabham. Actuellement producteur de la BT62.'],
    ['name' => 'BSA',       'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1861, 'statut' => 'Disparu',  'type' => 'Motos & Voiturettes',  'desc' => 'Birmingham Small Arms Company. Principalement motos, mais a produit d\'intéressantes voiturettes 3 roues.']
];

// Tri alphabétique
usort($marques_b, fn($a, $b) => strcmp($a['name'], $b['name']));

include __DIR__ . '/../header.php';
?>

<article>
    <!-- HERO -->
    <section class="art-hero" style="min-height:300px;">
        <div style="position:absolute;inset:0;background:linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #2563eb 100%);"></div>
        <div class="art-hero-overlay" style="opacity:0.2;"></div>
        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/marques">Annuaire des Marques</a>
                    <span class="art-bc-sep">/</span>
                    <span>Marques en B</span>
                </nav>
                <h1 style="font-size:clamp(1.6rem, 4vw, 2.5rem);">L'Univers des Marques Automobiles en B</h1>
                <p class="art-hero-sub">15 constructeurs automobiles de BMW à Bugatti. Des hypercars françaises, au luxe britannique, en passant par la rigueur allemande et la révolution électrique chinoise.</p>
            </div>
        </div>
    </section>

    <!-- NAV CATÉGORIES -->
    <nav class="art-cat-nav">
        <div class="art-cat-nav-inner">
            <?php foreach ($categories as $slug_cat => $cat): ?>
            <a href="/<?php echo $slug_cat; ?>" class="art-cat-link" style="--link-color: <?php echo $cat['color']; ?>">
                <span class="art-cat-dot" style="background-color: <?php echo $cat['color']; ?>"></span>
                <?php echo $cat['name']; ?>
            </a>
            <?php endforeach; ?>
        </div>
    </nav>

    <div class="art-layout-wrapper">
        <div class="art-main-col">

            <!-- STATS RAPIDES -->
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(100px, 1fr)); gap:12px; margin-bottom:28px;">
                <div style="background:#f8f9fa; border-radius:12px; padding:16px; text-align:center;">
                    <div style="font-size:2rem; font-weight:800; color:#2563eb;">15</div>
                    <div style="font-size:0.75rem; color:#666;">Marques Récensées</div>
                </div>
                <div style="background:#f8f9fa; border-radius:12px; padding:16px; text-align:center;">
                    <div style="font-size:2rem; font-weight:800; color:#2563eb;">7</div>
                    <div style="font-size:0.75rem; color:#666;">Marques Anglaises</div>
                </div>
                <div style="background:#f8f9fa; border-radius:12px; padding:16px; text-align:center;">
                    <div style="font-size:2rem; font-weight:800; color:#2563eb;">1861</div>
                    <div style="font-size:0.75rem; color:#666;">Fondation BSA</div>
                </div>
                <div style="background:#f8f9fa; border-radius:12px; padding:16px; text-align:center;">
                    <div style="font-size:2rem; font-weight:800; color:#2563eb;">3</div>
                    <div style="font-size:0.75rem; color:#666;">Hyper-Créateurs</div>
                </div>
            </div>

            <!-- LISTE DES MARQUES -->
            <div class="art-content">
                <h2>Les 15 marques automobiles commençant par B</h2>
                <p>Contrairement à notre liste A, voici un répertoire pur de référence des marques en B. L'objectif est de vous fournir une encyclopédie rapide de l'histoire automobile liée à cette lettre, sans nécessiter de navigation complexe.</p>

                <div style="display:flex; flex-direction:column; gap:12px; margin-top:20px;">
                    <?php foreach ($marques_b as $m): ?>
                    <div style="display:flex; align-items:flex-start; gap:16px; background:#fff; border:1px solid #e9ecef; border-radius:14px; padding:18px 20px; box-shadow:0 1px 3px rgba(0,0,0,0.04); transition:all 0.25s;" onmouseover="this.style.borderColor='#2563eb'; this.style.boxShadow='0 6px 20px rgba(37,99,235,0.12)';" onmouseout="this.style.borderColor='#e9ecef'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.04)';">
                        <!-- Drapeau pays -->
                        <div style="font-size:1.8rem; line-height:1; flex-shrink:0; margin-top:2px;"><?php echo $m['pays']; ?></div>
                        <!-- Contenu -->
                        <div style="flex:1; min-width:0;">
                            <div style="display:flex; align-items:center; gap:10px; flex-wrap:wrap; margin-bottom:4px;">
                                <span style="font-weight:700; font-size:1.1rem; color:#1a1a2e;"><?php echo $m['name']; ?></span>
                                <span style="font-size:0.7rem; font-weight:600; padding:2px 8px; border-radius:20px; background:<?php
                                    echo match($m['statut']) {
                                        'Actif' => '#dcfce7; color:#166534',
                                        'Disparu' => '#f3f4f6; color:#6b7280',
                                        'Renaissance' => '#dbeafe; color:#1e40af',
                                        'Racheté JLR' => '#fef3c7; color:#92400e',
                                        'Confidentiel' => '#f3e8ff; color:#6b21a8',
                                        default => '#f3f4f6; color:#6b7280',
                                    };
                                ?>;"><?php echo $m['statut']; ?></span>
                                <span style="font-size:0.75rem; color:#999;"><?php echo $m['annee']; ?> • <?php echo $m['pays_nom']; ?></span>
                            </div>
                            <div style="font-size:0.8rem; color:#2563eb; font-weight:600; margin-bottom:4px;"><?php echo $m['type']; ?></div>
                            <p style="font-size:0.88rem; color:#555; margin:0; line-height:1.5;"><?php echo $m['desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- SECTION ENRICHISSEMENT SÉMANTIQUE -->
            <div class="art-content" style="margin-top:48px; border-top:1px solid #e9ecef; padding-top:36px;">
                <h2>Analyse et Classification des Marques en B</h2>
                <p>La lettre B abrite des monstres sacrés de l'industrie. D'une part, nous avons les piliers historiques du luxe et du premium mondial (<strong>BMW, Bentley, Bugatti</strong>), et d'autre part, des artisans britanniques (<strong>BAC, Bowler, Bristol</strong>) dont la survie dépend des niches du marché.</p>

                <h3 style="margin-top:24px;">Classification par Pays d'Origine</h3>
                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:16px; margin-bottom:24px;">
                    <div style="background:#f8f9fa; border-radius:8px; padding:16px; border-left:4px solid #dc2626;">
                        <strong style="display:block; margin-bottom:8px;">🇬🇧 Royaume-Uni (7)</strong>
                        <span style="font-size:0.9rem; color:#555;">Bentley, BAC, Bristol, Bowler, Brabham, BSA. (Le paradis de l'artisanat automobile).</span>
                    </div>
                    <div style="background:#f8f9fa; border-radius:8px; padding:16px; border-left:4px solid #fcd34d;">
                        <strong style="display:block; margin-bottom:8px;">🇩🇪 Allemagne (4)</strong>
                        <span style="font-size:0.9rem; color:#555;">BMW, Brabus, Borgward, Bitter. (La rigueur technique et sportive).</span>
                    </div>
                    <div style="background:#f8f9fa; border-radius:8px; padding:16px; border-left:4px solid #2563eb;">
                        <strong style="display:block; margin-bottom:8px;">🇮🇹 Italie (2)</strong>
                        <span style="font-size:0.9rem; color:#555;">Bertone, Bizzarrini. (Le design et la passion de l'âge d'or).</span>
                    </div>
                    <div style="background:#f8f9fa; border-radius:8px; padding:16px; border-left:4px solid #10b981;">
                        <strong style="display:block; margin-bottom:8px;">Autre Monde (3)</strong>
                        <span style="font-size:0.9rem; color:#555;">Bugatti (France), Buick (USA), BYD (Chine).</span>
                    </div>
                </div>

                <h3 style="margin-top:32px;">Le Grand Écart Tarifaire : Prix Moyen Neuf & Modèles Phares</h3>
                <p>Pour mieux comprendre le positionnement sur le marché actuel ou historique, voici une grille d'évaluation des tarifs d'entrée (estimés en euros) pour ces blasons illustres, accompagnée de leur modèle iconique.</p>
                
                <div class="art-table-wrap">
                    <table class="art-table" style="width:100%; border-collapse:collapse; margin-top:16px;">
                        <thead style="background:#f1f5f9;">
                            <tr>
                                <th style="padding:12px; text-align:left; border-bottom:2px solid #cbd5e1;">Constructeur</th>
                                <th style="padding:12px; text-align:left; border-bottom:2px solid #cbd5e1;">Top Modèle Iconique</th>
                                <th style="padding:12px; text-align:left; border-bottom:2px solid #cbd5e1;">Segment Précis</th>
                                <th style="padding:12px; text-align:right; border-bottom:2px solid #cbd5e1;">Prix Moyen Estimé</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom:1px solid #e2e8f0;">
                                <td style="padding:12px;"><strong>Bugatti</strong></td>
                                <td style="padding:12px; color:#475569;">Chiron / Tourbillon</td>
                                <td style="padding:12px; color:#475569;"><span style="background:#fef08a; padding:2px 6px; border-radius:4px; font-size:0.8em; color:#854d0e;">Hypercar</span></td>
                                <td style="padding:12px; text-align:right; font-weight:600; color:#dc2626;">3 500 000 € +</td>
                            </tr>
                            <tr style="border-bottom:1px solid #e2e8f0;">
                                <td style="padding:12px;"><strong>Brabham</strong></td>
                                <td style="padding:12px; color:#475569;">BT62</td>
                                <td style="padding:12px; color:#475569;"><span style="background:#fef08a; padding:2px 6px; border-radius:4px; font-size:0.8em; color:#854d0e;">Hypercar Piste</span></td>
                                <td style="padding:12px; text-align:right; font-weight:600; color:#dc2626;">1 200 000 €</td>
                            </tr>
                            <tr style="border-bottom:1px solid #e2e8f0;">
                                <td style="padding:12px;"><strong>Brabus</strong></td>
                                <td style="padding:12px; color:#475569;">G 900 Rocket Edition</td>
                                <td style="padding:12px; color:#475569;"><span style="background:#fed7aa; padding:2px 6px; border-radius:4px; font-size:0.8em; color:#c2410c;">Tuning Ultra-Luxe</span></td>
                                <td style="padding:12px; text-align:right; font-weight:600;">500 000 €</td>
                            </tr>
                            <tr style="border-bottom:1px solid #e2e8f0;">
                                <td style="padding:12px;"><strong>Bentley</strong></td>
                                <td style="padding:12px; color:#475569;">Continental GT Speed</td>
                                <td style="padding:12px; color:#475569;"><span style="background:#e0e7ff; padding:2px 6px; border-radius:4px; font-size:0.8em; color:#4338ca;">Luxe / GT</span></td>
                                <td style="padding:12px; text-align:right; font-weight:600;">250 000 €</td>
                            </tr>
                            <tr style="border-bottom:1px solid #e2e8f0;">
                                <td style="padding:12px;"><strong>BAC</strong></td>
                                <td style="padding:12px; color:#475569;">Mono R</td>
                                <td style="padding:12px; color:#475569;"><span style="background:#e2e8f0; padding:2px 6px; border-radius:4px; font-size:0.8em; color:#334155;">Track Toy</span></td>
                                <td style="padding:12px; text-align:right; font-weight:600;">200 000 €</td>
                            </tr>
                            <tr style="border-bottom:1px solid #e2e8f0;">
                                <td style="padding:12px;"><strong>BMW</strong></td>
                                <td style="padding:12px; color:#475569;">M3 / Série 3</td>
                                <td style="padding:12px; color:#475569;"><span style="background:#d1fae5; padding:2px 6px; border-radius:4px; font-size:0.8em; color:#047857;">Premium Sport</span></td>
                                <td style="padding:12px; text-align:right; font-weight:600;">55 000 €</td>
                            </tr>
                            <tr style="border-bottom:1px solid #e2e8f0;">
                                <td style="padding:12px;"><strong>Buick</strong></td>
                                <td style="padding:12px; color:#475569;">Enclave</td>
                                <td style="padding:12px; color:#475569;"><span style="background:#d1fae5; padding:2px 6px; border-radius:4px; font-size:0.8em; color:#047857;">Premium Access</span></td>
                                <td style="padding:12px; text-align:right; font-weight:600;">40 000 €</td>
                            </tr>
                            <tr>
                                <td style="padding:12px;"><strong>BYD</strong></td>
                                <td style="padding:12px; color:#475569;">Seal / Atto 3</td>
                                <td style="padding:12px; color:#475569;"><span style="background:#ccfbf1; padding:2px 6px; border-radius:4px; font-size:0.8em; color:#0f766e;">Généraliste EV</span></td>
                                <td style="padding:12px; text-align:right; font-weight:600; color:#16a34a;">35 000 €</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 style="margin-top:32px;">Le choc des cultures automobiles</h3>
                <p>La lettre B illustre parfaitement les bouleversements de l'industrie. D'un côté, <strong>BYD</strong> (Build Your Dreams), marque chinoise ultra-moderne qui bouscule l'hégémonie de Tesla en vendant des millions de véhicules électriques abordables. De l'autre, <strong>Bugatti</strong> et <strong>Bentley</strong>, ancrées dans la tradition du très grand luxe européen du début du 20ème siècle, où l'artisanat et les motorisations thermiques d'exception (W16, W12) ont longtemps régné en maîtres.</p>
                <p>Sans oublier <strong>BMW</strong>, qui tente le grand écart entre la passion du moteur thermique six cylindres en ligne avec ses modèles M, et la transition vers l'électrique massif avec sa gamme i.</p>
            </div>

            <!-- NAVIGATION LETTRES -->
            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:36px; padding:20px 24px; background:#f8f9fa; border-radius:12px;">
                <a href="/marques/a" style="color:#2563eb; font-weight:600; text-decoration:none;">← Marques en A</a>
                <a href="/marques" style="color:#2563eb; font-weight:600; text-decoration:none;">↑ Retour à l'annuaire</a>
                <span style="color:#adb5bd;">Marques en C → (bientôt)</span>
            </div>

        </div>

        <!-- SIDEBAR -->
        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Navigation A-Z</div>
                    <div style="display:flex; flex-wrap:wrap; gap:4px;">
                        <a href="/marques/a" style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:6px; background:#e9ecef; color:#495057; font-weight:600; font-size:0.85rem; text-decoration:none;">A</a>
                        <a href="/marques/b" style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:6px; background:#2563eb; color:#fff; font-weight:700; font-size:0.85rem; text-decoration:none;">B</a>
                        <?php foreach (range('C', 'Z') as $l): ?>
                        <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:6px; background:#e9ecef; color:#adb5bd; font-weight:600; font-size:0.85rem;"><?php echo $l; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Top 5 marques en B</div>
                    <ul style="list-style:none; padding:0;">
                        <li style="padding:6px 0;"><span style="color:#2563eb; font-weight:600;">🇩🇪 BMW</span></li>
                        <li style="padding:6px 0;"><span style="color:#2563eb; font-weight:600;">🇫🇷 Bugatti</span></li>
                        <li style="padding:6px 0;"><span style="color:#2563eb; font-weight:600;">🇬🇧 Bentley</span></li>
                        <li style="padding:6px 0;"><span style="color:#2563eb; font-weight:600;">🇨🇳 BYD</span></li>
                        <li style="padding:6px 0;"><span style="color:#2563eb; font-weight:600;">🇺🇸 Buick</span></li>
                    </ul>
                </div>
                <div class="art-sidebar-block" style="background:#eff6ff; border:1px solid #bfdbfe;">
                    <div class="art-sidebar-block-title" style="color:#1e3a8a;">Le Saviez-vous ?</div>
                    <p style="font-size:0.85rem; color:#1e40af; margin:0;">
                        Le nom <strong>BMW</strong> (Bayerische Motoren Werke) a été fondé en 1916. Le logo circulaire bleu et blanc ne représente pas une hélice en mouvement, comme on le croit souvent, mais reprend en réalité les couleurs inversées du drapeau de la Bavière !
                    </p>
                </div>
            </div>
        </aside>
    </div>
</article>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.garageraymond.fr/marques/b" },
  "name": "Marques Automobiles en B",
  "description": <?php echo json_encode($page_description ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,
  "numberOfItems": 15,
  "publisher": { "@type": "Organization", "name": "Le garage expert Auto", "url": "https://www.garageraymond.fr" }
}
</script>

<?php include __DIR__ . '/../footer.php'; ?>

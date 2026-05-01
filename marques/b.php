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

                <h3 style="margin-top:32px; color:#1e3a8a; font-size:1.4rem;">Le Grand Annuaire Interactif des Marques en B</h3>
                <p>Utilisez les filtres ci-dessous pour trier les constructeurs par pays d'origine ou par statut d'activité actuel. Vous retrouverez également une estimation du ticket d'entrée neuf (lorsqu'applicable) et leur positionnement exact sur le marché automobile mondial.</p>
                
                <!-- BARRE DE FILTRES -->
                <div style="margin-bottom:16px; display:flex; gap:12px; flex-wrap:wrap; background:#f8fafc; padding:16px; border-radius:8px; border:1px solid #e2e8f0;">
                    <div style="display:flex; align-items:center; gap:8px;">
                        <span style="font-weight:600; color:#334155; font-size:0.9rem;">Filtrer par :</span>
                        <select id="filter-pays" style="padding:8px 12px; border-radius:6px; border:1px solid #cbd5e1; background:#fff; color:#334155; outline:none; font-size:0.9rem; cursor:pointer;">
                            <option value="all">🌍 Tous les pays</option>
                            <option value="Allemagne">🇩🇪 Allemagne</option>
                            <option value="Angleterre">🇬🇧 Royaume-Uni</option>
                            <option value="France">🇫🇷 France</option>
                            <option value="Italie">🇮🇹 Italie</option>
                            <option value="USA">🇺🇸 USA</option>
                            <option value="Chine">🇨🇳 Chine</option>
                            <option value="Australie">🇦🇺 Australie</option>
                        </select>
                    </div>
                    <div style="display:flex; align-items:center; gap:8px;">
                        <select id="filter-statut" style="padding:8px 12px; border-radius:6px; border:1px solid #cbd5e1; background:#fff; color:#334155; outline:none; font-size:0.9rem; cursor:pointer;">
                            <option value="all">🔄 Tous les statuts</option>
                            <option value="Actif">✅ Actif</option>
                            <option value="Renaissance">🔥 Renaissance</option>
                            <option value="Disparu">✝️ Disparu</option>
                            <option value="Confidentiel">👻 Confidentiel / Racheté</option>
                        </select>
                    </div>
                </div>

                <!-- TABLEAU INTERACTIF -->
                <div class="art-table-wrap" style="border:1px solid #e2e8f0; border-radius:8px; overflow:hidden;">
                    <table class="art-table" style="width:100%; border-collapse:collapse; margin:0; font-size:0.9rem;">
                        <thead style="background:#f1f5f9;">
                            <tr>
                                <th style="padding:12px 14px; text-align:left; border-bottom:2px solid #cbd5e1; border-right:1px solid #e2e8f0; color:#1e293b; font-weight:700;">Constructeur</th>
                                <th style="padding:12px 14px; text-align:left; border-bottom:2px solid #cbd5e1; border-right:1px solid #e2e8f0; color:#1e293b; font-weight:700;">Pays</th>
                                <th style="padding:12px 14px; text-align:left; border-bottom:2px solid #cbd5e1; border-right:1px solid #e2e8f0; color:#1e293b; font-weight:700;">Segment / Facteur</th>
                                <th style="padding:12px 14px; text-align:center; border-bottom:2px solid #cbd5e1; border-right:1px solid #e2e8f0; color:#1e293b; font-weight:700;">Statut</th>
                                <th style="padding:12px 14px; text-align:right; border-bottom:2px solid #cbd5e1; color:#1e293b; font-weight:700;">Prix d'entrée neuf</th>
                            </tr>
                        </thead>
                        <tbody id="brand-table-body">
                            <tr class="art-brand-row" data-pays="France" data-statut="Actif" style="border-bottom:1px solid #e2e8f0; background:#fff;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>Bugatti</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇫🇷 France</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#fef08a; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#854d0e;">Hypercar Ultime</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#16a34a; font-weight:600;">Actif</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700; color:#dc2626;">3 500 000 € +</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Australie" data-statut="Actif" style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>Brabham</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇦🇺 Australie</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#fef08a; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#854d0e;">Hypercar Piste</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#16a34a; font-weight:600;">Actif</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700; color:#dc2626;">1 200 000 €</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Italie" data-statut="Renaissance" style="border-bottom:1px solid #e2e8f0; background:#fff;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>Bizzarrini</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇮🇹 Italie</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#fed7aa; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#c2410c;">Sportive Radicale</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#2563eb; font-weight:600;">Renaissance</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700;">1 500 000 €</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Allemagne" data-statut="Actif" style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>Brabus</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇩🇪 Allemagne</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#fed7aa; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#c2410c;">Tuning Ultra-Luxe</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#16a34a; font-weight:600;">Actif</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700;">500 000 €</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Angleterre" data-statut="Actif" style="border-bottom:1px solid #e2e8f0; background:#fff;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>Bentley</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇬🇧 Royaume-Uni</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#e0e7ff; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#4338ca;">Luxe / GT</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#16a34a; font-weight:600;">Actif</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700;">250 000 €</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Angleterre" data-statut="Actif" style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>BAC</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇬🇧 Royaume-Uni</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#e2e8f0; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#334155;">Track Toy Extrême</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#16a34a; font-weight:600;">Actif</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700;">200 000 €</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Angleterre" data-statut="Confidentiel" style="border-bottom:1px solid #e2e8f0; background:#fff;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>Bowler</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇬🇧 Royaume-Uni</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#fef3c7; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#92400e;">Off-Road Racing</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#9333ea; font-weight:600;">Racheté (JLR)</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700;">150 000 €</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Allemagne" data-statut="Confidentiel" style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>Bitter</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇩🇪 Allemagne</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#e0e7ff; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#4338ca;">Grand Tourisme Artisan</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#9333ea; font-weight:600;">Confidentiel</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700;">100 000 €</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Allemagne" data-statut="Actif" style="border-bottom:1px solid #e2e8f0; background:#fff;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>BMW</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇩🇪 Allemagne</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#d1fae5; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#047857;">Premium Sportif</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#16a34a; font-weight:600;">Actif</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700;">45 000 €</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="USA" data-statut="Actif" style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>Buick</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇺🇸 USA</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#d1fae5; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#047857;">Premium Access</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#16a34a; font-weight:600;">Actif</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700;">40 000 €</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Chine" data-statut="Actif" style="border-bottom:1px solid #e2e8f0; background:#fff;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>BYD</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇨🇳 Chine</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#ccfbf1; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#0f766e;">Généraliste EV</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#16a34a; font-weight:600;">Actif</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700; color:#16a34a;">30 000 €</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Italie" data-statut="Renaissance" style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>Bertone</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇮🇹 Italie</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#f3e8ff; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#6b21a8;">Design & Carrosserie</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#2563eb; font-weight:600;">Renaissance</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700; color:#94a3b8;">Sur mesure</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Angleterre" data-statut="Disparu" style="border-bottom:1px solid #e2e8f0; background:#fff;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>Bristol</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇬🇧 Royaume-Uni</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#f1f5f9; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#475569;">Luxe Confidentiel</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#ef4444; font-weight:600;">Disparu (2020)</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700; color:#94a3b8;">N/A (Occasion)</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Allemagne" data-statut="Disparu" style="border-bottom:1px solid #e2e8f0; background:#f8fafc;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>Borgward</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇩🇪 Allemagne</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#f1f5f9; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#475569;">Généraliste Populaire</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#ef4444; font-weight:600;">Disparu (1961)</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700; color:#94a3b8;">N/A (Collection)</td>
                            </tr>
                            <tr class="art-brand-row" data-pays="Angleterre" data-statut="Disparu" style="background:#fff;">
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><strong>BSA</strong></td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;">🇬🇧 Royaume-Uni</td>
                                <td style="padding:10px 14px; border-right:1px solid #e2e8f0;"><span style="background:#f1f5f9; padding:3px 8px; border-radius:4px; font-size:0.75rem; font-weight:600; color:#475569;">Motos & Cyclecars</span></td>
                                <td style="padding:10px 14px; text-align:center; border-right:1px solid #e2e8f0; color:#ef4444; font-weight:600;">Disparu (1973)</td>
                                <td style="padding:10px 14px; text-align:right; font-weight:700; color:#94a3b8;">N/A (Collection)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const filterPays = document.getElementById('filter-pays');
                    const filterStatut = document.getElementById('filter-statut');
                    const rows = document.querySelectorAll('.art-brand-row');

                    function filterTable() {
                        const pays = filterPays.value;
                        const statut = filterStatut.value;
                        
                        rows.forEach(row => {
                            const rowPays = row.getAttribute('data-pays');
                            const rowStatut = row.getAttribute('data-statut');
                            
                            let matchPays = (pays === 'all' || rowPays === pays);
                            let matchStatut = (statut === 'all' || rowStatut === statut || (statut === 'Confidentiel' && rowStatut === 'Confidentiel'));
                            
                            if (matchPays && matchStatut) {
                                row.style.display = '';
                            } else {
                                row.style.display = 'none';
                            }
                        });
                    }

                    filterPays.addEventListener('change', filterTable);
                    filterStatut.addEventListener('change', filterTable);
                });
                </script>

                <!-- TOP 3 MODÈLES PAR MARQUE -->
                <div style="margin-top:56px; border-top:2px dashed #cbd5e1; padding-top:40px;">
                    <h2 style="margin-bottom:24px;">Les meilleurs modèles pour chaque marque de voiture en B</h2>
                    <p style="margin-bottom:32px;">L'histoire d'un constructeur s'écrit par ses succès d'ingénierie ou de design. Voici pour chaque marque abordée le top 3 des modèles les plus iconiques, qu'ils soient des best-sellers modernes ou des chefs-d'œuvre historiques inestimables.</p>

                    <div style="display:flex; flex-direction:column; gap:36px;">
                        
                        <div>
                            <h3 style="color:#2563eb; font-size:1.3rem; border-left:4px solid #2563eb; padding-left:12px;">BMW</h3>
                            <p style="color:#475569;">Le constructeur bavarois s'est toujours distingué par son "plaisir de conduire", ses blocs 6 cylindres en ligne et la sportivité absolue de sa division Motorsport.</p>
                            <ul style="list-style:none; padding-left:0;">
                                <li style="margin-bottom:8px;"><strong>#1 BMW Série 3 (et M3)</strong> : La référence incontestée des berlines sportives et le plus grand succès commercial de la marque.</li>
                                <li style="margin-bottom:8px;"><strong>#2 BMW Série 5 (et M5)</strong> : Le parfait compromis pour ceux qui cherchent l'espace d'une grande routière allié à la brutalité d'un V8 bi-turbo.</li>
                                <li><strong>#3 BMW X5</strong> : Un des tous premiers et plus influents SUV de luxe, ayant redéfini le marché dans les années 2000.</li>
                            </ul>
                        </div>

                        <div>
                            <h3 style="color:#2563eb; font-size:1.3rem; border-left:4px solid #2563eb; padding-left:12px;">Bugatti</h3>
                            <p style="color:#475569;">Fierté alsacienne et chef de file incontesté de la démesure mécanique depuis l'ère VW. Chaque Bugatti repousse les limites de la physique et de la vitesse maximale.</p>
                            <ul style="list-style:none; padding-left:0;">
                                <li style="margin-bottom:8px;"><strong>#1 Bugatti Veyron 16.4</strong> : La première hypercar de série de l'ère moderne à avoir brisé la barrière symbolique des 400 km/h (1001 chevaux).</li>
                                <li style="margin-bottom:8px;"><strong>#2 Bugatti Chiron</strong> : L'aboutissement du monumental moteur W16 quadriturbo avec 1500 à 1600 chevaux selon les finitions.</li>
                                <li><strong>#3 Bugatti Tourbillon</strong> : La toute nouvelle ère de la marque, combinant un V16 atmosphérique à un système hybride pour plus de 1800 chevaux.</li>
                            </ul>
                        </div>

                        <div>
                            <h3 style="color:#2563eb; font-size:1.3rem; border-left:4px solid #2563eb; padding-left:12px;">Bentley</h3>
                            <p style="color:#475569;">La marque de Crewe, concurrente éternelle de Rolls-Royce, met un point d'honneur à allier le bois et le cuir les plus nobles à des performances stupéfiantes, notamment grâce à son fameux W12 (aujourd'hui V8 hybride).</p>
                            <ul style="list-style:none; padding-left:0;">
                                <li style="margin-bottom:8px;"><strong>#1 Bentley Continental GT</strong> : Le grand tourisme redéfini. Un coupé magistral capable d'avaler les kilomètres à plus de 300 km/h dans un silence absolu.</li>
                                <li style="margin-bottom:8px;"><strong>#2 Bentley Bentayga</strong> : L'initiateur du segment des SUV ultra-luxe, combinant capacités de franchissement et confort royal.</li>
                                <li><strong>#3 Bentley Flying Spur</strong> : La limousine de prestige qui offre des sensations de conduite étonnamment dynamiques pour son poids.</li>
                            </ul>
                        </div>

                        <div>
                            <h3 style="color:#2563eb; font-size:1.3rem; border-left:4px solid #2563eb; padding-left:12px;">BYD (Build Your Dreams)</h3>
                            <p style="color:#475569;">Le géant chinois est passé en moins de 20 ans d'un simple fabricant de batteries au statut de leader mondial des ventes de véhicules électrifiés, menaçant directement la suprématie de Tesla.</p>
                            <ul style="list-style:none; padding-left:0;">
                                <li style="margin-bottom:8px;"><strong>#1 BYD Seal</strong> : La berline aérodynamique conçue directement comme une riposte haut de gamme et performante à la Tesla Model 3.</li>
                                <li style="margin-bottom:8px;"><strong>#2 BYD Atto 3</strong> : Le SUV compact électrique populaire qui a permis à BYD de percer massivement sur le marché européen.</li>
                                <li><strong>#3 BYD Dolphin</strong> : Une citadine intelligente et abordable, actrice majeure de la démocratisation de l'électrique.</li>
                            </ul>
                        </div>

                        <div>
                            <h3 style="color:#2563eb; font-size:1.3rem; border-left:4px solid #2563eb; padding-left:12px;">Buick</h3>
                            <p style="color:#475569;">Une marque historique du groupe GM (General Motors). Si elle a perdu de son panache sportif aux US, elle survit magnifiquement bien en Chine où elle est perçue comme un véritable symbole de réussite premium.</p>
                            <ul style="list-style:none; padding-left:0;">
                                <li style="margin-bottom:8px;"><strong>#1 Buick Enclave</strong> : Le SUV familial statutaire, roi des grands espaces nord-américains.</li>
                                <li style="margin-bottom:8px;"><strong>#2 Buick Envista</strong> : Le tout nouveau crossover urbain et stylisé ciblant une clientèle plus jeune.</li>
                                <li><strong>#3 Buick Riviera (Historique)</strong> : L'un des coupés de luxe les plus emblématiques des années 60 et 70 (le fameux design "Boat tail").</li>
                            </ul>
                        </div>

                        <div>
                            <h3 style="color:#2563eb; font-size:1.3rem; border-left:4px solid #2563eb; padding-left:12px;">Brabus</h3>
                            <p style="color:#475569;">Plus qu'un préparateur, Brabus est reconnu comme un constructeur à part entière par le gouvernement allemand. Leur credo : prendre une Mercedes AMG, la peindre en noir, et doubler la puissance avec une sellerie outrancière.</p>
                            <ul style="list-style:none; padding-left:0;">
                                <li style="margin-bottom:8px;"><strong>#1 Brabus 900 Rocket Edition</strong> : Basé sur le Mercedes Classe G, il propulse cette armoire à glace avec ses 900 chevaux et son couple camionesque.</li>
                                <li style="margin-bottom:8px;"><strong>#2 Brabus 800 (AMG GT)</strong> : L'AMG GT 4 portes transformée en missile sol-sol avec une agressivité carbone assumée.</li>
                                <li><strong>#3 Brabus XLP</strong> : Un Classe G coupé, rallongé et transformé en pick-up d'exploration extrême.</li>
                            </ul>
                        </div>

                        <div>
                            <h3 style="color:#2563eb; font-size:1.3rem; border-left:4px solid #2563eb; padding-left:12px;">BAC (Briggs Automotive Company)</h3>
                            <p style="color:#475569;">L'excentricité britannique à l'état pur. BAC ne produit qu'une seule voiture, mais quelle voiture : une monoplace ultra-légère sans pare-brise ni portières, légale sur route ouverte.</p>
                            <ul style="list-style:none; padding-left:0;">
                                <li style="margin-bottom:8px;"><strong>#1 BAC Mono</strong> : Le modèle original qui a révolutionné le concept des "Track Toys".</li>
                                <li style="margin-bottom:8px;"><strong>#2 BAC Mono R</strong> : Une version poussée à l'extrême, utilisant des panneaux infusés au graphène pour passer sous la barre des 560 kilos.</li>
                                <li><strong>#3 BAC Mono F</strong> : La dernière itération embarquant un moteur turbocompressé pour encore plus de brutalité à la remise des gaz.</li>
                            </ul>
                        </div>

                        <div>
                            <h3 style="color:#2563eb; font-size:1.3rem; border-left:4px solid #2563eb; padding-left:12px;">Bertone</h3>
                            <p style="color:#475569;">Le studio Bertone, c'est l'essence même du design italien sous la houlette de Marcello Gandini. Après la faillite, la marque tente de renaître en tant que constructeur de ses propres supercars.</p>
                            <ul style="list-style:none; padding-left:0;">
                                <li style="margin-bottom:8px;"><strong>#1 Lamborghini Miura (Chef-d'œuvre design)</strong> : Bien qu'elle soit une Lamborghini, elle a été dessinée par Bertone. C'est la première véritable supercar de l'histoire.</li>
                                <li style="margin-bottom:8px;"><strong>#2 Lancia Stratos Zero (Concept)</strong> : Le concept-car "Wedge design" (en forme de coin) le plus fou des années 70, mesurant à peine 84 cm de haut.</li>
                                <li><strong>#3 Bertone GB110</strong> : Le tout premier modèle présenté par la marque "ressuscitée" en 2022, une hypercar développant 1100 chevaux.</li>
                            </ul>
                        </div>

                        <div>
                            <h3 style="color:#2563eb; font-size:1.3rem; border-left:4px solid #2563eb; padding-left:12px;">Bizzarrini</h3>
                            <p style="color:#475569;">Giotto Bizzarrini, l'ingénieur à l'origine de la mythique Ferrari 250 GTO et du moteur V12 Lamborghini, a fondé sa propre marque pour concurrencer le Commendatore Enzo Ferrari.</p>
                            <ul style="list-style:none; padding-left:0;">
                                <li style="margin-bottom:8px;"><strong>#1 5300 GT Strada</strong> : Le chef-d'œuvre. Une carrosserie italienne sculpturale abritant un fiable et puissant gros V8 Chevrolet.</li>
                                <li style="margin-bottom:8px;"><strong>#2 P538</strong> : Une rarissime barquette de course des années 60, construite à seulement quelques unités.</li>
                                <li><strong>#3 5300 GT Revival Corsa</strong> : Le modèle de la renaissance, reconstruit à l'identique (continuation car) pour des collectionneurs fortunés.</li>
                            </ul>
                        </div>

                        <div>
                            <h3 style="color:#2563eb; font-size:1.3rem; border-left:4px solid #2563eb; padding-left:12px;">Brabham</h3>
                            <p style="color:#475569;">Marque de légende en F1 (fondée par Sir Jack Brabham). Récemment relancée en Australie par son fils David, elle fabrique aujourd'hui des pistardes radicales.</p>
                            <ul style="list-style:none; padding-left:0;">
                                <li style="margin-bottom:8px;"><strong>#1 Brabham BT62</strong> : Une supercar de 700 ch pour 972 kg, capable de générer 1200 kg d'appui aérodynamique. Strictement réservée au circuit.</li>
                                <li style="margin-bottom:8px;"><strong>#2 Brabham BT62R</strong> : La version "R" pour Road. Elle est dotée d'une suspension réglable permettant de l'homologuer sur la route, au prix d'un confort spartiate.</li>
                                <li><strong>#3 Brabham BT19 (Historique)</strong> : La Formule 1 avec laquelle Jack Brabham remporta le championnat de 1966.</li>
                            </ul>
                        </div>

                        <div>
                            <h3 style="color:#2563eb; font-size:1.3rem; border-left:4px solid #2563eb; padding-left:12px;">Borgward / Bristol / Bitter / Bowler / BSA</h3>
                            <p style="color:#475569;">Ces autres marques méritent une mention honorable pour leurs apports singuliers à l'histoire automobile :</p>
                            <ul style="list-style:none; padding-left:0;">
                                <li style="margin-bottom:8px;"><strong>#1 Borgward Isabella (Borgward)</strong> : Le best-seller allemand des années 50, réputé pour son élégance, avant la faillite tragique de la marque.</li>
                                <li style="margin-bottom:8px;"><strong>#2 Bristol Fighter (Bristol)</strong> : L'excentrique sportive anglaise à portes papillon équipée d'un V10 de Dodge Viper.</li>
                                <li style="margin-bottom:8px;"><strong>#3 Bitter CD (Bitter)</strong> : Le somptueux coupé GT allemand au look italien, conçu sur un châssis d'Opel Diplomat V8.</li>
                                <li style="margin-bottom:8px;"><strong>#4 Bowler Wildcat (Bowler)</strong> : Le véhicule de rallye-raid par excellence, monstre rugissant basé sur un Defender.</li>
                                <li><strong>#5 BSA Scout (BSA)</strong> : Une des rares petites sportives des années 30 à adopter la traction avant, un exploit technique pour l'époque.</li>
                            </ul>
                        </div>

                    </div>
                </div>
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

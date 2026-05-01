<?php
/**
 * marques/c.php — Page Index N3 : Toutes les Marques en C
 * URL : /marques/c
 */
$page_title = "Marques Automobiles en C : Liste Complète et Classement (Citroën, Chevrolet, Cadillac...)";
$page_description = "Toutes les marques automobiles commençant par C : Citroën, Chevrolet, Cadillac, Chrysler, Cupra et 15 autres. Tableau interactif filtrable par prix, pays et segment.";

$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb'],
    'mecanique' => ['name' => 'Mécanique & Entretien', 'color' => '#16a34a'],
    'electrique' => ['name' => 'Voitures Électriques', 'color' => '#8b5cf6'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#d97706'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2'],
];

// Toutes les marques en C avec métadonnées enrichies
$marques_c = [
    // ─── ACTIVES MAINSTREAM / PREMIUM ───────────────────────────────────────
    ['name'=>'Citroën',       'pays'=>'🇫🇷','pays_nom'=>'France',     'annee'=>1919,'statut'=>'Actif','segment'=>'generaliste','prix_range'=>'entree', 'prix_label'=>'dès 15 000 €',  'type'=>'Généraliste Populaire',    'desc'=>'La marque aux chevrons. Pionnière de l\'innovation (Traction, DS, suspension hydropneumatique). Aujourd\'hui axe de mobilité accessible de Stellantis.'],
    ['name'=>'Chevrolet',     'pays'=>'🇺🇸','pays_nom'=>'USA',        'annee'=>1911,'statut'=>'Actif','segment'=>'generaliste','prix_range'=>'entree', 'prix_label'=>'dès 20 000 €',  'type'=>'Généraliste / Sportif',    'desc'=>'Le grand volume de General Motors. Connu pour le pick-up Silverado, la Camaro et l\'iconique Corvette (véritable supercar américaine à moteur central).'],
    ['name'=>'Chrysler',      'pays'=>'🇺🇸','pays_nom'=>'USA',        'annee'=>1925,'statut'=>'Actif','segment'=>'premium',    'prix_range'=>'premium','prix_label'=>'dès 40 000 €',  'type'=>'Premium Américain',        'desc'=>'Une des "Big Three" historiques. Inventeur du monospace moderne. Sa gamme s\'est réduite, mais la Pacifica reste reine. Intégrée à Stellantis.'],
    ['name'=>'Cadillac',      'pays'=>'🇺🇸','pays_nom'=>'USA',        'annee'=>1902,'statut'=>'Actif','segment'=>'luxe',       'prix_range'=>'premium','prix_label'=>'dès 50 000 €',  'type'=>'Luxe & Prestige',          'desc'=>'Le summum du luxe américain par GM. Célèbre pour le monumental Escalade, ses berlines surpuissantes (Série V Blackwing) et son virage électrique (Lyriq).'],
    ['name'=>'Cupra',         'pays'=>'🇪🇸','pays_nom'=>'Espagne',    'annee'=>2018,'statut'=>'Actif','segment'=>'premium',    'prix_range'=>'premium','prix_label'=>'dès 35 000 €',  'type'=>'Premium Sportif',          'desc'=>'Ancienne division sport de Seat devenue marque à part entière. Design agressif cuivré, modèles musclés et électrifiés (Formentor, Born, Tavascan).'],
    ['name'=>'Chery',         'pays'=>'🇨🇳','pays_nom'=>'Chine',      'annee'=>1997,'statut'=>'Actif','segment'=>'generaliste','prix_range'=>'entree', 'prix_label'=>'dès 18 000 €',  'type'=>'Généraliste Export',       'desc'=>'Grand exportateur chinois, arrivé en force en Europe avec ses sous-marques (Omoda, Jaecoo, Exeed). Une stratégie d\'expansion internationale très agressive.'],
    ['name'=>'Changan',       'pays'=>'🇨🇳','pays_nom'=>'Chine',      'annee'=>1862,'statut'=>'Actif','segment'=>'generaliste','prix_range'=>'entree', 'prix_label'=>'dès 15 000 €',  'type'=>'Généraliste Historique',   'desc'=>'L\'un des 4 grands d\'État en Chine (origines remontant à l\'industrie militaire en 1862). Très forte croissance sur les électriques avec sa filiale Deepal.'],

    // ─── ARTISANS & HYPERCARS ───────────────────────────────────────────────
    ['name'=>'Caterham',      'pays'=>'🇬🇧','pays_nom'=>'Angleterre', 'annee'=>1973,'statut'=>'Actif','segment'=>'artisan',    'prix_range'=>'premium','prix_label'=>'dès 40 000 €',  'type'=>'Sportive Piste & Route',   'desc'=>'Héritier direct de la Lotus Seven. "Light is Right". La Caterham Seven offre l\'une des expériences de pilotage les plus brutes et pures du marché.'],
    ['name'=>'Czinger',       'pays'=>'🇺🇸','pays_nom'=>'USA',        'annee'=>2019,'statut'=>'Actif','segment'=>'hypercar',   'prix_range'=>'hypercar','prix_label'=>'dès 2 000 000 €','type'=>'Hypercar Imprimée 3D',    'desc'=>'Constructeur ultra-moderne utilisant l\'IA et l\'impression 3D métallique. La 21C, avec son V8 hybride de 1 250 ch, pulvérise les records sur circuit.'],
    ['name'=>'Campagna',      'pays'=>'🇨🇦','pays_nom'=>'Canada',     'annee'=>1988,'statut'=>'Actif','segment'=>'artisan',    'prix_range'=>'premium','prix_label'=>'~60 000 €',     'type'=>'Tricycle Sport (T-Rex)',   'desc'=>'Québécois célèbre pour le T-Rex, hybride entre moto et monoplace. Moteurs Kawasaki ou BMW pour des sensations extrêmes au ras du sol.'],
    
    // ─── PRÉPARATEURS ───────────────────────────────────────────────────────
    ['name'=>'Cosworth',      'pays'=>'🇬🇧','pays_nom'=>'Angleterre', 'annee'=>1958,'statut'=>'Actif','segment'=>'preparateur','prix_range'=>'nc',     'prix_label'=>'Moteurs',       'type'=>'Motoriste Légendaire',     'desc'=>'Motoriste culte (Ford Sierra RS, F1 DFV). Conçoit le V12 stratosphérique des Aston Martin Valkyrie et GMA T.50, capable de prendre plus de 11 000 tr/min.'],
    ['name'=>'Callaway',      'pays'=>'🇺🇸','pays_nom'=>'USA',        'annee'=>1977,'statut'=>'Actif','segment'=>'preparateur','prix_range'=>'luxe',   'prix_label'=>'Sur mesure',    'type'=>'Préparateur Corvette',     'desc'=>'Spécialiste de la suralimentation pour GM. Célèbre pour le projet Sledgehammer, une Corvette de 1988 ayant atteint la vitesse folle de 410 km/h.'],
    ['name'=>'Carlsson',      'pays'=>'🇩🇪','pays_nom'=>'Allemagne', 'annee'=>1989,'statut'=>'Disparu','segment'=>'preparateur','prix_range'=>'nc',     'prix_label'=>'Sur mesure',    'type'=>'Tuning Mercedes',          'desc'=>'Jadis grand préparateur de Mercedes-Benz, grand rival de Brabus et Lorinser. Racheté par des capitaux coréens puis disparu.'],

    // ─── MICROCARS / VSP ────────────────────────────────────────────────────
    ['name'=>'Chatenet',      'pays'=>'🇫🇷','pays_nom'=>'France',     'annee'=>1984,'statut'=>'Actif','segment'=>'generaliste','prix_range'=>'entree', 'prix_label'=>'dès 14 000 €',  'type'=>'Voiture Sans Permis (VSP)','desc'=>'Spécialiste français des quadricycles à moteur haut de gamme. Design soigné (CH46) offrant un côté "premium" à la voiture sans permis.'],
    ['name'=>'Casalini',      'pays'=>'🇮🇹','pays_nom'=>'Italie',     'annee'=>1939,'statut'=>'Actif','segment'=>'generaliste','prix_range'=>'entree', 'prix_label'=>'dès 16 000 €',  'type'=>'Voiture Sans Permis (VSP)','desc'=>'Le plus ancien constructeur de VSP encore en activité. Se distingue par l\'utilisation de carrosseries renforcées en fibre de verre (Casalini 550).'],

    // ─── HISTORIQUES / COLLECTION ───────────────────────────────────────────
    ['name'=>'Cizeta',        'pays'=>'🇮🇹','pays_nom'=>'Italie',     'annee'=>1988,'statut'=>'Disparu','segment'=>'historique','prix_range'=>'nc',    'prix_label'=>'Collection',    'type'=>'Hypercar Historique',      'desc'=>'Cizeta-Moroder V16T. Dessinée par Gandini, propulsée par un V16 transversal de 6.0L. L\'incarnation absolue des excès des années 80. (Seulement ~12 produites).'],
    ['name'=>'Cord',          'pays'=>'🇺🇸','pays_nom'=>'USA',        'annee'=>1929,'statut'=>'Disparu','segment'=>'historique','prix_range'=>'nc',    'prix_label'=>'Collection',    'type'=>'Luxe Avant-Gardiste',      'desc'=>'Légende américaine des années 30. La L-29 fut la première traction avant US, et la sublime 810/812 instaura le style intemporel avec ses phares escamotables.'],
    ['name'=>'Checker',       'pays'=>'🇺🇸','pays_nom'=>'USA',        'annee'=>1922,'statut'=>'Disparu','segment'=>'historique','prix_range'=>'nc',    'prix_label'=>'Collection',    'type'=>'Taxis Iconiques',          'desc'=>'L\'emblème de New York. Constructeur du fameux Checker Marathon, le taxi jaune ultra-robuste et spacieux utilisé des années 60 aux années 90.'],
    ['name'=>'Chaparral',     'pays'=>'🇺🇸','pays_nom'=>'USA',        'annee'=>1962,'statut'=>'Disparu','segment'=>'historique','prix_range'=>'nc',    'prix_label'=>'Collection',    'type'=>'Racing & Aéro',            'desc'=>'Les magiciens de l\'aérodynamique en sport proto (Can-Am). Jim Hall y a expérimenté les énormes ailerons mobiles et les ventilateurs à effet de sol (2J).'],
    ['name'=>'Cisitalia',     'pays'=>'🇮🇹','pays_nom'=>'Italie',     'annee'=>1946,'statut'=>'Disparu','segment'=>'historique','prix_range'=>'nc',    'prix_label'=>'Collection',    'type'=>'Sportives Classiques',     'desc'=>'Compagnia Industriale Sportiva Italia. La 202 GT (1946), sublimée par Pininfarina, est reconnue comme la première GT moderne. Exposée au MoMA.'],
    ['name'=>'Cunningham',    'pays'=>'🇺🇸','pays_nom'=>'USA',        'annee'=>1951,'statut'=>'Disparu','segment'=>'historique','prix_range'=>'nc',    'prix_label'=>'Collection',    'type'=>'Sport & Course',           'desc'=>'Briggs Cunningham créa ses propres bolides équipés de V8 Chrysler pour vaincre Ferrari et Jaguar aux 24h du Mans sous les couleurs américaines.'],
];

// Tri alphabétique
usort($marques_c, fn($a, $b) => strcmp($a['name'], $b['name']));

$nb_marques = count($marques_c);
$nb_actives = count(array_filter($marques_c, fn($m) => $m['statut'] === 'Actif'));
$nb_pays = count(array_unique(array_column($marques_c, 'pays_nom')));

include __DIR__ . '/../header.php';
?>



<article>
    <!-- HERO -->
    <section class="art-hero" style="min-height:280px;">
        <div style="position:absolute;inset:0;background:linear-gradient(135deg, #1e3a8a 0%, #1d4ed8 50%, #2563eb 100%);"></div>
        <div class="art-hero-overlay" style="opacity:0.15;"></div>
        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/marques">Marques</a>
                    <span class="art-bc-sep">/</span>
                    <span>Marques en C</span>
                </nav>
                <h1 style="font-size:clamp(1.6rem, 4vw, 2.4rem);">L'Univers des Marques Automobiles en C</h1>
                <p class="art-hero-sub"><?php echo $nb_marques; ?> constructeurs de Citroën à Chevrolet — des géants généralistes à l'hypercar Czinger imprimée en 3D, en passant par les artisans anglais et les taxis new-yorkais.</p>
            </div>
        </div>
    </section>

    <!-- WRAPPER -->
    <div class="art-layout-wrapper">
        
        <!-- MAIN COLUMN -->
        <div class="art-main-col">

            <!-- STATS RAPIDES -->
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(110px, 1fr)); gap:12px; margin-bottom:32px;">
                <div style="background:#f8f9fa; border-radius:12px; padding:16px; text-align:center;">
                    <div style="font-size:2rem; font-weight:800; color:#2563eb;"><?php echo $nb_marques; ?></div>
                    <div style="font-size:0.72rem; color:#666; line-height:1.3;">Marques<br>Recensées</div>
                </div>
                <div style="background:#f8f9fa; border-radius:12px; padding:16px; text-align:center;">
                    <div style="font-size:2rem; font-weight:800; color:#16a34a;"><?php echo $nb_actives; ?></div>
                    <div style="font-size:0.72rem; color:#666; line-height:1.3;">Marques<br>Actives</div>
                </div>
                <div style="background:#f8f9fa; border-radius:12px; padding:16px; text-align:center;">
                    <div style="font-size:2rem; font-weight:800; color:#7c3aed;"><?php echo $nb_pays; ?></div>
                    <div style="font-size:0.72rem; color:#666; line-height:1.3;">Pays<br>d'origine</div>
                </div>
                <div style="background:#f8f9fa; border-radius:12px; padding:16px; text-align:center;">
                    <div style="font-size:2rem; font-weight:800; color:#dc2626;">1862</div>
                    <div style="font-size:0.72rem; color:#666; line-height:1.3;">Fondation<br>Changan</div>
                </div>
            </div>

            <!-- LISTE DES MARQUES (cards) -->
            <div class="art-content">
                <h2>Les <?php echo $nb_marques; ?> marques automobiles commençant par C</h2>
                <p>La lettre C abrite des piliers industriels mondiaux (Chevrolet, Citroën) mais aussi l'une des diversités les plus folles : du micro-véhicule sans permis (Casalini) aux hypercars d'avant-garde (Czinger), en passant par l'excellence sportive anglaise (Caterham, Cosworth).</p>

                <div style="display:flex; flex-direction:column; gap:10px; margin-top:20px;">
                    <?php foreach ($marques_c as $m): ?>
                    <div style="display:flex; align-items:flex-start; gap:14px; background:#fff; border:1px solid #e9ecef; border-radius:12px; padding:16px 18px; box-shadow:0 1px 3px rgba(0,0,0,0.04); transition:border-color .2s, box-shadow .2s;"
                         onmouseover="this.style.borderColor='#2563eb';this.style.boxShadow='0 4px 16px rgba(37,99,235,0.1)';"
                         onmouseout="this.style.borderColor='#e9ecef';this.style.boxShadow='0 1px 3px rgba(0,0,0,0.04)';">
                        <div style="font-size:1.7rem; line-height:1; flex-shrink:0; margin-top:2px;"><?php echo $m['pays']; ?></div>
                        <div style="flex:1; min-width:0;">
                            <div style="display:flex; align-items:center; gap:8px; flex-wrap:wrap; margin-bottom:3px;">
                                <span style="font-weight:700; font-size:1.05rem; color:#1a1a2e;"><?php echo $m['name']; ?></span>
                                <span style="font-size:0.68rem; font-weight:600; padding:2px 7px; border-radius:20px; background:<?php
                                    echo match($m['statut']) {
                                        'Actif'        => '#dcfce7; color:#166534',
                                        'Disparu'      => '#f1f5f9; color:#64748b',
                                        'Renaissance'  => '#dbeafe; color:#1e40af',
                                        'Racheté'      => '#fef3c7; color:#92400e',
                                        'Confidentiel' => '#f3e8ff; color:#6b21a8',
                                        default        => '#f1f5f9; color:#64748b',
                                    };
                                ?>;"><?php echo $m['statut']; ?></span>
                                <span style="font-size:0.72rem; color:#94a3b8;"><?php echo $m['annee']; ?> · <?php echo $m['pays_nom']; ?></span>
                            </div>
                            <div style="font-size:0.75rem; color:#2563eb; font-weight:600; margin-bottom:3px;"><?php echo $m['type']; ?> — <?php echo $m['prix_label']; ?></div>
                            <p style="font-size:0.86rem; color:#555; margin:0; line-height:1.5;"><?php echo $m['desc']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- TABLEAU FILTRABLE INTERACTIF -->
            <div class="art-content" style="margin-top:48px; border-top:1px solid #e9ecef; padding-top:36px;">
                <h2>Tableau comparatif interactif — Filtrer les marques en C</h2>
                <p>Utilisez les filtres ci-dessous pour affiner votre recherche selon le pays d'origine, le statut, la gamme de prix ou le segment automobile. Cliquez sur un en-tête de colonne pour trier le tableau.</p>

                <!-- BARRE DE FILTRES -->
                <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:18px 20px; margin-bottom:16px;">

                    <!-- Recherche rapide -->
                    <div style="margin-bottom:14px;">
                        <input id="c-search" type="text" placeholder="🔍 Rechercher une marque..." autocomplete="off"
                               style="width:100%; box-sizing:border-box; padding:10px 14px; border-radius:7px; border:1.5px solid #cbd5e1; font-size:0.9rem; color:#334155; outline:none; transition:border-color .15s;"
                               onfocus="this.style.borderColor='#2563eb';" onblur="this.style.borderColor='#cbd5e1';">
                    </div>

                    <!-- Gamme de prix (pills) -->
                    <div style="margin-bottom:14px;">
                        <div style="font-size:0.78rem; font-weight:700; color:#64748b; text-transform:uppercase; letter-spacing:.04em; margin-bottom:7px;">Gamme de prix</div>
                        <div style="display:flex; flex-wrap:wrap; gap:6px;" id="prix-pills">
                            <button class="c-pill active" data-prix="all"          style="padding:5px 12px; border-radius:20px; border:1.5px solid #2563eb; background:#2563eb; color:#fff; font-size:0.8rem; font-weight:600; cursor:pointer;">Toutes gammes</button>
                            <button class="c-pill"         data-prix="entree"      style="padding:5px 12px; border-radius:20px; border:1.5px solid #e2e8f0; background:#fff; color:#475569; font-size:0.8rem; font-weight:600; cursor:pointer;">🟢 &lt; 30 000 €</button>
                            <button class="c-pill"         data-prix="premium"     style="padding:5px 12px; border-radius:20px; border:1.5px solid #e2e8f0; background:#fff; color:#475569; font-size:0.8rem; font-weight:600; cursor:pointer;">🔵 30k – 100k €</button>
                            <button class="c-pill"         data-prix="luxe"        style="padding:5px 12px; border-radius:20px; border:1.5px solid #e2e8f0; background:#fff; color:#475569; font-size:0.8rem; font-weight:600; cursor:pointer;">🟣 100k – 500k €</button>
                            <button class="c-pill"         data-prix="hypercar"    style="padding:5px 12px; border-radius:20px; border:1.5px solid #e2e8f0; background:#fff; color:#475569; font-size:0.8rem; font-weight:600; cursor:pointer;">🔴 &gt; 500k €</button>
                            <button class="c-pill"         data-prix="nc"          style="padding:5px 12px; border-radius:20px; border:1.5px solid #e2e8f0; background:#fff; color:#475569; font-size:0.8rem; font-weight:600; cursor:pointer;">⚫ Collection / N.D.</button>
                        </div>
                    </div>

                    <!-- Ligne pays + statut -->
                    <div style="display:flex; gap:12px; flex-wrap:wrap; align-items:center;">
                        <div style="display:flex; align-items:center; gap:8px; flex:1; min-width:160px;">
                            <label style="font-size:0.8rem; font-weight:700; color:#64748b; white-space:nowrap;">Pays :</label>
                            <select id="c-filter-pays" style="flex:1; padding:7px 10px; border-radius:6px; border:1.5px solid #cbd5e1; background:#fff; color:#334155; font-size:0.85rem; cursor:pointer;">
                                <option value="all">🌍 Tous</option>
                                <option value="France">🇫🇷 France</option>
                                <option value="USA">🇺🇸 USA</option>
                                <option value="Angleterre">🇬🇧 Royaume-Uni</option>
                                <option value="Italie">🇮🇹 Italie</option>
                                <option value="Espagne">🇪🇸 Espagne</option>
                                <option value="Chine">🇨🇳 Chine</option>
                                <option value="Canada">🇨🇦 Canada</option>
                            </select>
                        </div>
                        <div style="display:flex; align-items:center; gap:8px; flex:1; min-width:160px;">
                            <label style="font-size:0.8rem; font-weight:700; color:#64748b; white-space:nowrap;">Statut :</label>
                            <select id="c-filter-statut" style="flex:1; padding:7px 10px; border-radius:6px; border:1.5px solid #cbd5e1; background:#fff; color:#334155; font-size:0.85rem; cursor:pointer;">
                                <option value="all">🔄 Tous</option>
                                <option value="Actif">✅ Actif</option>
                                <option value="Disparu">✝️ Disparu</option>
                            </select>
                        </div>
                        <button id="c-reset" style="padding:7px 14px; border-radius:6px; border:1.5px solid #e2e8f0; background:#fff; color:#64748b; font-size:0.82rem; font-weight:600; cursor:pointer;">↺ Réinitialiser</button>
                    </div>
                </div>

                <!-- Compteur de résultats -->
                <div style="font-size:0.82rem; color:#64748b; margin-bottom:8px; min-height:20px;" id="c-count"></div>

                <!-- TABLEAU -->
                <div style="border:1px solid #e2e8f0; border-radius:8px; overflow:hidden; overflow-x:auto;">
                    <table style="width:100%; border-collapse:collapse; font-size:0.875rem; min-width:620px;">
                        <thead style="background:#f1f5f9; position:sticky; top:0; z-index:1;">
                            <tr>
                                <th class="b-th" data-col="name"    style="padding:11px 14px; text-align:left; border-bottom:2px solid #cbd5e1; border-right:1px solid #e2e8f0; color:#1e293b; font-weight:700; cursor:pointer; user-select:none; white-space:nowrap;">Constructeur <span class="sort-icon">↕</span></th>
                                <th class="b-th" data-col="pays_nom" style="padding:11px 14px; text-align:left; border-bottom:2px solid #cbd5e1; border-right:1px solid #e2e8f0; color:#1e293b; font-weight:700; cursor:pointer; user-select:none; white-space:nowrap;">Pays <span class="sort-icon">↕</span></th>
                                <th class="b-th" data-col="annee"   style="padding:11px 14px; text-align:center; border-bottom:2px solid #cbd5e1; border-right:1px solid #e2e8f0; color:#1e293b; font-weight:700; cursor:pointer; user-select:none; white-space:nowrap;">Fondation <span class="sort-icon">↕</span></th>
                                <th style="padding:11px 14px; text-align:left; border-bottom:2px solid #cbd5e1; border-right:1px solid #e2e8f0; color:#1e293b; font-weight:700; white-space:nowrap;">Segment</th>
                                <th class="b-th" data-col="statut"  style="padding:11px 14px; text-align:center; border-bottom:2px solid #cbd5e1; border-right:1px solid #e2e8f0; color:#1e293b; font-weight:700; cursor:pointer; user-select:none; white-space:nowrap;">Statut <span class="sort-icon">↕</span></th>
                                <th style="padding:11px 14px; text-align:right; border-bottom:2px solid #cbd5e1; color:#1e293b; font-weight:700; white-space:nowrap;">Prix d'entrée</th>
                            </tr>
                        </thead>
                        <tbody id="c-table-body">
                        <?php
                        $prix_colors = [
                            'entree'   => ['bg'=>'#dcfce7','color'=>'#166534'],
                            'premium'  => ['bg'=>'#dbeafe','color'=>'#1e40af'],
                            'luxe'     => ['bg'=>'#ede9fe','color'=>'#5b21b6'],
                            'hypercar' => ['bg'=>'#fee2e2','color'=>'#991b1b'],
                            'nc'       => ['bg'=>'#f1f5f9','color'=>'#64748b'],
                        ];
                        $statut_styles = [
                            'Actif'        => 'color:#16a34a; font-weight:700;',
                            'Disparu'      => 'color:#ef4444; font-weight:600;',
                        ];
                        $segment_labels = [
                            'generaliste' => 'Généraliste',
                            'premium'     => 'Premium & Sportif',
                            'luxe'        => 'Luxe & GT',
                            'hypercar'    => 'Hypercar',
                            'artisan'     => 'Artisan / Piste',
                            'preparateur' => 'Préparateur / Moteur',
                            'historique'  => 'Historique / Collection',
                        ];
                        foreach ($marques_c as $i => $m):
                            $pr = $prix_colors[$m['prix_range']] ?? $prix_colors['nc'];
                            $bg = $i % 2 === 0 ? '#fff' : '#f8fafc';
                        ?>
                        <tr class="c-row"
                            data-name="<?php echo strtolower($m['name']); ?>"
                            data-pays="<?php echo $m['pays_nom']; ?>"
                            data-statut="<?php echo $m['statut']; ?>"
                            data-prix="<?php echo $m['prix_range']; ?>"
                            data-annee="<?php echo $m['annee']; ?>"
                            style="border-bottom:1px solid #e2e8f0; background:<?php echo $bg; ?>; transition:background .15s;"
                            onmouseover="this.style.background='#eff6ff';"
                            onmouseout="this.style.background='<?php echo $bg; ?>';">
                            <td style="padding:9px 14px; border-right:1px solid #e2e8f0; font-weight:700; white-space:nowrap;"><?php echo $m['name']; ?></td>
                            <td style="padding:9px 14px; border-right:1px solid #e2e8f0; white-space:nowrap;"><?php echo $m['pays']; ?> <?php echo $m['pays_nom']; ?></td>
                            <td style="padding:9px 14px; border-right:1px solid #e2e8f0; text-align:center; color:#64748b;"><?php echo $m['annee']; ?></td>
                            <td style="padding:9px 14px; border-right:1px solid #e2e8f0;">
                                <span style="font-size:0.72rem; font-weight:600; white-space:nowrap;"><?php echo $segment_labels[$m['segment']] ?? $m['segment']; ?></span>
                            </td>
                            <td style="padding:9px 14px; border-right:1px solid #e2e8f0; text-align:center; <?php echo $statut_styles[$m['statut']] ?? ''; ?> font-size:0.82rem; white-space:nowrap;"><?php echo $m['statut']; ?></td>
                            <td style="padding:9px 14px; text-align:right;">
                                <span style="font-size:0.75rem; font-weight:700; padding:3px 8px; border-radius:4px; background:<?php echo $pr['bg']; ?>; color:<?php echo $pr['color']; ?>; white-space:nowrap;"><?php echo $m['prix_label']; ?></span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <!-- JS Filtrage + Tri -->
                <script>
                (function() {
                    var search  = document.getElementById('c-search');
                    var selPays = document.getElementById('c-filter-pays');
                    var selStat = document.getElementById('c-filter-statut');
                    var pills   = document.querySelectorAll('.c-pill');
                    var rows    = document.querySelectorAll('.c-row');
                    var count   = document.getElementById('c-count');
                    var ths     = document.querySelectorAll('.b-th');
                    var activePrix = 'all';
                    var sortCol = null, sortDir = 1;

                    function filterRows() {
                        var q  = search.value.toLowerCase().trim();
                        var p  = selPays.value;
                        var s  = selStat.value;
                        var vis = 0;
                        rows.forEach(function(r) {
                            var show = (!q || r.dataset.name.includes(q))
                                && (p === 'all' || r.dataset.pays === p)
                                && (s === 'all' || r.dataset.statut === s)
                                && (activePrix === 'all' || r.dataset.prix === activePrix);
                            r.style.display = show ? '' : 'none';
                            if (show) vis++;
                        });
                        count.textContent = vis + ' marque' + (vis > 1 ? 's' : '') + ' trouvée' + (vis > 1 ? 's' : '');
                    }

                    function sortTable(col) {
                        if (sortCol === col) { sortDir *= -1; } else { sortCol = col; sortDir = 1; }
                        ths.forEach(function(th) {
                            var ic = th.querySelector('.sort-icon');
                            if (ic) ic.textContent = (th.dataset.col === col) ? (sortDir === 1 ? '↑' : '↓') : '↕';
                        });
                        var tbody = document.getElementById('c-table-body');
                        var arr = Array.from(tbody.querySelectorAll('tr'));
                        arr.sort(function(a, b) {
                            var va = a.dataset[col] || '';
                            var vb = b.dataset[col] || '';
                            if (!isNaN(va) && !isNaN(vb)) return sortDir * (Number(va) - Number(vb));
                            return sortDir * va.localeCompare(vb, 'fr');
                        });
                        arr.forEach(function(r) { tbody.appendChild(r); });
                        // restripe
                        var vis = arr.filter(function(r) { return r.style.display !== 'none'; });
                        vis.forEach(function(r, i) {
                            var base = i % 2 === 0 ? '#fff' : '#f8fafc';
                            r.style.background = base;
                            r.onmouseout = function() { this.style.background = base; };
                        });
                    }

                    pills.forEach(function(btn) {
                        btn.addEventListener('click', function() {
                            pills.forEach(function(b) {
                                b.style.background = '#fff';
                                b.style.borderColor = '#e2e8f0';
                                b.style.color = '#475569';
                                b.classList.remove('active');
                            });
                            this.style.background = '#2563eb';
                            this.style.borderColor = '#2563eb';
                            this.style.color = '#fff';
                            this.classList.add('active');
                            activePrix = this.dataset.prix;
                            filterRows();
                        });
                    });

                    ths.forEach(function(th) {
                        th.addEventListener('click', function() { sortTable(this.dataset.col); });
                    });

                    search.addEventListener('input', filterRows);
                    selPays.addEventListener('change', filterRows);
                    selStat.addEventListener('change', filterRows);

                    document.getElementById('c-reset').addEventListener('click', function() {
                        search.value = '';
                        selPays.value = 'all';
                        selStat.value = 'all';
                        activePrix = 'all';
                        pills.forEach(function(b) {
                            b.style.background = '#fff';
                            b.style.borderColor = '#e2e8f0';
                            b.style.color = '#475569';
                            b.classList.remove('active');
                        });
                        document.querySelector('[data-prix="all"]').style.background = '#2563eb';
                        document.querySelector('[data-prix="all"]').style.borderColor = '#2563eb';
                        document.querySelector('[data-prix="all"]').style.color = '#fff';
                        sortCol = null; sortDir = 1;
                        ths.forEach(function(th) {
                            var ic = th.querySelector('.sort-icon');
                            if (ic) ic.textContent = '↕';
                        });
                        filterRows();
                    });

                    filterRows();
                })();
                </script>
            </div><!-- fin tableau -->

            <!-- TOP MODÈLES PAR MARQUE -->
            <div class="art-content" style="margin-top:48px; border-top:2px dashed #cbd5e1; padding-top:40px;">
                <h2>Les meilleurs modèles pour chaque marque automobile en C</h2>
                <p>Chaque constructeur s'écrit par ses succès iconiques. Voici, marque par marque, le top 3 des modèles les plus marquants de la lettre C.</p>

                <div style="display:flex; flex-direction:column; gap:40px; margin-top:32px;">

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Citroën</h3>
                        <p style="color:#475569; margin-bottom:10px;">L'ingéniosité française à l'état pur. Pionnière dans la traction avant, la suspension hydropneumatique et le design avant-gardiste. Aujourd'hui, Citroën se réinvente avec des concepts urbains novateurs.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Citroën DS (1955)</strong> — La "Déesse". Un chef-d'œuvre technologique et stylistique (design Flaminio Bertoni) qui avait 20 ans d'avance sur son temps.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Citroën 2CV (1948)</strong> — Le parapluie sur 4 roues. La voiture populaire ultime, robuste et géniale, vendue à plus de 5 millions d'exemplaires.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Citroën Ami (2020)</strong> — La révolution urbaine moderne. Un quadricycle 100% électrique, asymétrique et accessible sans permis, qui cartonne en ville.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Chevrolet</h3>
                        <p style="color:#475569; margin-bottom:10px;">La force de frappe de General Motors. Capable de vendre des millions de pick-ups indestructibles, tout en produisant l'une des sportives les plus pointues et respectées de la planète auto.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Chevrolet Corvette (C8)</strong> — La révolution. Avec son moteur central arrière, elle vient défier les supercars italiennes pour une fraction de leur prix (V8 atmo de près de 500 ch).</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Chevrolet Camaro</strong> — Le pony car éternel rival de la Mustang. Sa version ZL1 1LE est un monstre de circuit conçu pour détruire les chronos.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Chevrolet Silverado</strong> — Le best-seller américain (après le Ford F-150). Le pick-up "Heavy Duty" de Chevy est l'outil de travail par excellence aux États-Unis.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Cadillac</h3>
                        <p style="color:#475569; margin-bottom:10px;">Le pinacle du luxe selon Détroit. Après une longue période creuse, Cadillac a brillamment opéré sa mue, alliant limousines présidentielles, SUV massifs et berlines aux performances démoniaques.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Cadillac Escalade</strong> — L'immense SUV de luxe prisé des célébrités. Sa dernière version V-Series embarque un V8 compressé de 682 ch.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Cadillac CT5-V Blackwing</strong> — L'une des dernières berlines V8 compressées à boîte manuelle. Une puriste de 668 ch conçue pour avaler la BMW M5.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Cadillac Eldorado (1959)</strong> — L'apothéose du design américain. L'icône aux ailerons arrière gigantesques et aux feux "obus", pur produit de l'ère spatiale.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Cupra</h3>
                        <p style="color:#475569; margin-bottom:10px;">L'étoile montante du groupe Volkswagen. Emancipée de Seat, Cupra marie un design latin acéré, des touches cuivrées distinctives et des châssis parfaitement mis au point pour le plaisir de conduite.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Cupra Formentor</strong> — Le premier modèle 100% Cupra (sans équivalent Seat). Ce CUV musclé est le best-seller absolu de la jeune marque. Sa version VZ5 intègre le 5 cylindres d'Audi !</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Cupra Born</strong> — La compacte 100% électrique (cousine de l'ID.3) mais avec un châssis affûté, une suspension abaissée et un mode e-Boost de 231 ch.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Cupra Tavascan</strong> — Le grand SUV coupé électrique à venir, doté d'un design extrêmement agressif visant à bouleverser son segment.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Caterham</h3>
                        <p style="color:#475569; margin-bottom:10px;">En 1973, Caterham a acheté les droits de la légendaire Lotus Seven. Depuis, la marque anglaise perpétue et perfectionne ce châssis tubulaire ultra-léger pour les puristes de la conduite.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Caterham Seven 170</strong> — La plus légère : 440 kg pour 84 ch (moteur 3 cyl. Suzuki). La définition même de la devise de Colin Chapman "Light is Right".</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Caterham Seven 485</strong> — L'arme absolue homologuée route en Europe, avec un moteur 2.0L Ford hurlant à 8 500 tr/min pour 228 chevaux et à peine plus de 500 kg.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Caterham 620R</strong> — L'extrême limite. 310 chevaux pour 545 kg. Une boîte séquentielle, des pneus slicks, et un 0-100 balayé en 2,8 secondes. Âmes sensibles s'abstenir.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Chrysler</h3>
                        <p style="color:#475569; margin-bottom:10px;">Jadis empire américain tentaculaire, Chrysler se concentre aujourd'hui sur l'essentiel : les minivans et les grandes berlines classiques. La marque fait désormais partie de la galaxie Stellantis.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Chrysler Pacifica</strong> — Le roi du minivan familial (descendant du Voyager). Hyper luxueux, disponible en hybride rechargeable, c'est le modèle de survie de la marque actuelle.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Chrysler 300 / 300C</strong> — La berline au look de "muscle car en costume", populaire pour sa face avant mafieuse et ses déclinaisons V8 Hemi. Récemment retirée du catalogue.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Chrysler PT Cruiser</strong> — Son design rétro clivant a marqué les années 2000. D'abord plébiscité, il est aujourd'hui une icône de la pop culture automobile atypique.</li>
                        </ul>
                    </div>

                    <!-- Marques Chinoises groupées -->
                    <div style="background:#f0fdf4; border:1px solid #bbf7d0; border-radius:12px; padding:20px 24px;">
                        <h3 style="color:#14532d; font-size:1.15rem; border-left:4px solid #16a34a; padding-left:12px; margin-bottom:8px;">Chery & Changan — L'offensive Chinoise en C</h3>
                        <p style="color:#166534; font-size:0.88rem; margin-bottom:14px;">Ces deux mastodontes industriels s'étendent bien au-delà de la Chine grâce à une stratégie d'exportation agressive et de multiples sous-marques ciblées.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:8px; font-size:0.88rem; color:#374151;">
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Chery Omoda 5</strong> — Le SUV crossover futuriste qui mène l'invasion de Chery en Europe (sous la marque "Omoda"). Prix canon, design fort et moteur essence ou électrique.</li>
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Chery Tiggo 8</strong> — Le grand SUV 7 places, best-seller historique de Chery sur les marchés d'exportation (Amérique latine, Moyen-Orient, Russie).</li>
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Changan Deepal SL03</strong> — Berline électrique et hybride, symbole du virage technologique de Changan avec des designs spectaculaires (portes sans encadrement, écrans géants).</li>
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Changan CS75 Plus</strong> — Un des SUV compacts les plus vendus de Chine, alliant design sportif et excellent rapport qualité/prix.</li>
                        </ul>
                    </div>

                    <!-- Hypercars & Artisans groupés -->
                    <div style="background:#fff7ed; border:1px solid #fed7aa; border-radius:12px; padding:20px 24px;">
                        <h3 style="color:#9a3412; font-size:1.15rem; border-left:4px solid #ea580c; padding-left:12px; margin-bottom:8px;">Czinger & Cizeta — Les Hypercars de l'extrême</h3>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:8px; font-size:0.88rem; color:#374151;">
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Czinger 21C (USA)</strong> — Développée par IA et imprimée en 3D. 1 250 ch, cockpit biplace en tandem (comme un avion de chasse), elle explose les records de Laguna Seca.</li>
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Cizeta V16T (Italie, Disparu)</strong> — Années 80. Un monstre large de 2 mètres, animé par un incroyable moteur V16 transversal (formé de deux V8 de Lamborghini Urraco accouplés).</li>
                        </ul>
                    </div>

                </div>
            </div><!-- fin top modèles -->

            <!-- NAVIGATION LETTRES -->
            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:36px; padding:18px 22px; background:#f8f9fa; border-radius:12px;">
                <a href="/marques/b" style="color:#2563eb; font-weight:600; text-decoration:none;">← Marques en B</a>
                <a href="/marques" style="color:#2563eb; font-weight:600; text-decoration:none;">↑ Retour à l'annuaire</a>
                <span style="color:#adb5bd; font-size:0.9rem;">Marques en D → (bientôt)</span>
            </div>

        </div>

        <!-- SIDEBAR DROITE -->
        <aside class="art-sidebar-right">
            <div style="position:sticky; top:24px; display:flex; flex-direction:column; gap:24px;">
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Navigation A-Z</div>
                    <div style="display:flex; flex-wrap:wrap; gap:4px;">
                        <a href="/marques/a" style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:6px; background:#e9ecef; color:#495057; font-weight:600; font-size:0.85rem; text-decoration:none;">A</a>
                        <a href="/marques/b" style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:6px; background:#e9ecef; color:#495057; font-weight:600; font-size:0.85rem; text-decoration:none;">B</a>
                        <a href="/marques/c" style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:6px; background:#2563eb; color:#fff; font-weight:700; font-size:0.85rem; text-decoration:none;">C</a>
                        <?php foreach (range('D', 'Z') as $l): ?>
                        <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:6px; background:#e9ecef; color:#adb5bd; font-weight:600; font-size:0.85rem;"><?php echo $l; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Top marques en C</div>
                    <ul style="list-style:none; padding:0; margin:0;">
                        <li style="padding:5px 0; font-size:0.88rem;"><span style="color:#2563eb; font-weight:600;">🇫🇷 Citroën</span> — Généraliste</li>
                        <li style="padding:5px 0; font-size:0.88rem;"><span style="color:#2563eb; font-weight:600;">🇺🇸 Chevrolet</span> — Volume & Sport</li>
                        <li style="padding:5px 0; font-size:0.88rem;"><span style="color:#2563eb; font-weight:600;">🇺🇸 Cadillac</span> — Luxe Américain</li>
                        <li style="padding:5px 0; font-size:0.88rem;"><span style="color:#2563eb; font-weight:600;">🇪🇸 Cupra</span> — Premium Sport</li>
                        <li style="padding:5px 0; font-size:0.88rem;"><span style="color:#2563eb; font-weight:600;">🇬🇧 Caterham</span> — Track Toys</li>
                    </ul>
                </div>

                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Répartition par prix</div>
                    <?php
                    $prix_counts = array_count_values(array_column($marques_c, 'prix_range'));
                    $prix_labels = ['entree'=>'< 30 000 €','premium'=>'30k – 100k €','luxe'=>'100k – 500k €','hypercar'=>'> 500k €','nc'=>'Collection / Moteurs'];
                    $prix_col    = ['entree'=>'#16a34a','premium'=>'#2563eb','luxe'=>'#7c3aed','hypercar'=>'#dc2626','nc'=>'#94a3b8'];
                    foreach ($prix_labels as $key => $label):
                        $n = $prix_counts[$key] ?? 0;
                        if (!$n) continue;
                    ?>
                    <div style="display:flex; align-items:center; justify-content:space-between; padding:4px 0; font-size:0.82rem;">
                        <span style="color:<?php echo $prix_col[$key]; ?>; font-weight:600;"><?php echo $label; ?></span>
                        <span style="background:#f1f5f9; padding:1px 7px; border-radius:10px; font-weight:700; color:#334155;"><?php echo $n; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="art-sidebar-block" style="background:#eff6ff; border:1px solid #bfdbfe;">
                    <div class="art-sidebar-block-title">Le Saviez-vous ?</div>
                    <p style="font-size:0.83rem; color:#1e40af; margin:0; line-height:1.5;">
                        Le logo <strong>Chevrolet</strong> (le "bowtie" ou nœud papillon) a été introduit par William C. Durant en 1913. La légende raconte qu'il aurait été inspiré par le motif du papier peint d'un hôtel parisien où il séjournait !
                    </p>
                </div>

                <div class="art-sidebar-block" style="background:#fef9c3; border:1px solid #fde047;">
                    <div class="art-sidebar-block-title">Chiffre clé</div>
                    <p style="font-size:0.83rem; color:#854d0e; margin:0; line-height:1.5;">
                        La <strong>Caterham Seven</strong> la plus légère (la 170) pèse <strong>440 kg</strong>. C'est presque la moitié du poids de la batterie d'un SUV électrique moderne !
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
  "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.garageraymond.fr/marques/c" },
  "name": "Marques Automobiles en C",
  "description": <?php echo json_encode($page_description ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,
  "numberOfItems": <?php echo $nb_marques; ?>,
  "publisher": { "@type": "Organization", "name": "Le garage expert Auto", "url": "https://www.garageraymond.fr" }
}
</script>

<?php include __DIR__ . '/../footer.php'; ?>

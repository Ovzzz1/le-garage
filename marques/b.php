<?php
/**
 * marques/b.php — Page Index N3 : Toutes les Marques en B
 * URL : /marques/b
 */
$page_title = "Marques Automobiles en B : Liste Complète et Classement (BMW, Bugatti, Bentley...)";
$page_description = "Toutes les marques automobiles commençant par B : BMW, Bugatti, Bentley, BYD, Buick, Brabus et 20 autres. Tableau interactif filtrable par prix, pays et segment.";

$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb'],
    'entretien' => ['name' => 'Entretien & Réparation', 'color' => '#dc2626'],
    'electrique' => ['name' => 'Électrique & Hybride', 'color' => '#059669'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2'],
];

// Toutes les marques en B avec métadonnées enrichies
$marques_b = [
    // ─── ACTIVES MAINSTREAM / PREMIUM ───────────────────────────────────────
    ['name'=>'BMW',           'pays'=>'🇩🇪','pays_nom'=>'Allemagne', 'annee'=>1916,'statut'=>'Actif','segment'=>'premium','prix_range'=>'premium',  'prix_label'=>'dès 45 000 €',   'type'=>'Premium & Sportif',        'desc'=>'Bayerische Motoren Werke. Le summum du plaisir de conduire : Série 3, M3, i4, XM. La division M redéfinit la performance à chaque génération.'],
    ['name'=>'Buick',         'pays'=>'🇺🇸','pays_nom'=>'USA',        'annee'=>1899,'statut'=>'Actif','segment'=>'premium','prix_range'=>'premium',  'prix_label'=>'dès 40 000 €',   'type'=>'Premium américain',        'desc'=>'Pilier fondateur de General Motors. Symbole de réussite en Chine. La gamme actuelle mise tout sur les SUV cossus (Enclave, Envision).'],
    ['name'=>'BYD',           'pays'=>'🇨🇳','pays_nom'=>'Chine',      'annee'=>1995,'statut'=>'Actif','segment'=>'electrique','prix_range'=>'entree','prix_label'=>'dès 25 000 €',   'type'=>'Généraliste Électrique',   'desc'=>'Build Your Dreams. Le géant de Shenzhen, n°1 mondial des véhicules électrifiés. Batteries LFP, plateforme e-Platform 3.0, Seal, Atto 3, Dolphin.'],
    ['name'=>'BAIC',          'pays'=>'🇨🇳','pays_nom'=>'Chine',      'annee'=>1958,'statut'=>'Actif','segment'=>'generaliste','prix_range'=>'entree','prix_label'=>'dès 15 000 €',  'type'=>'Généraliste / Partenariat','desc'=>'Beijing Automotive Industry Corporation. Partenaire de Mercedes-Benz en Chine et fabricant de gammes accessibles BJEV et BEIJING.'],
    ['name'=>'Baojun',        'pays'=>'🇨🇳','pays_nom'=>'Chine',      'annee'=>2010,'statut'=>'Actif','segment'=>'generaliste','prix_range'=>'entree','prix_label'=>'dès 10 000 €',  'type'=>'Généraliste Urbain',       'desc'=>'Joint-venture GM-SAIC ciblant les classes moyennes chinoises. La Baojun E100 fut l\'une des premières mini-citadines électriques chinoises.'],
    ['name'=>'Bestune',       'pays'=>'🇨🇳','pays_nom'=>'Chine',      'annee'=>2006,'statut'=>'Actif','segment'=>'premium','prix_range'=>'entree',   'prix_label'=>'dès 20 000 €',   'type'=>'Premium Chinois (FAW)',    'desc'=>'Marque premium du groupe FAW (First Automotive Works). Gamme de berlines et SUV rivalisant avec les marques européennes dans les catégories intermédiaires.'],
    ['name'=>'Brilliance',    'pays'=>'🇨🇳','pays_nom'=>'Chine',      'annee'=>1992,'statut'=>'Actif','segment'=>'generaliste','prix_range'=>'entree','prix_label'=>'dès 18 000 €',  'type'=>'Généraliste / Partenariat','desc'=>'Brilliance Automotive est surtout connu pour son partenariat de production avec BMW en Chine. Vend également ses propres modèles sous la marque Zhonghua.'],

    // ─── LUXE & GRAND TOURISME ───────────────────────────────────────────────
    ['name'=>'Bentley',       'pays'=>'🇬🇧','pays_nom'=>'Angleterre', 'annee'=>1919,'statut'=>'Actif','segment'=>'luxe','prix_range'=>'luxe',         'prix_label'=>'dès 250 000 €',  'type'=>'Luxe & Grand Tourisme',   'desc'=>'Le luxe britannique allié aux performances. Continental GT, Flying Spur, Bentayga. Vainqueur historique du Mans. Filiale du groupe Volkswagen.'],
    ['name'=>'Bitter',        'pays'=>'🇩🇪','pays_nom'=>'Allemagne', 'annee'=>1971,'statut'=>'Confidentiel','segment'=>'artisan','prix_range'=>'luxe', 'prix_label'=>'~100 000 €',    'type'=>'Grand Tourisme Artisan',  'desc'=>'Artisan allemand créant de luxueux coupés et cabriolets sur bases mécaniques Opel. Les modèles CD et SC sont de véritables objets de collection.'],
    ['name'=>'Bufori',        'pays'=>'🇲🇾','pays_nom'=>'Malaisie',   'annee'=>1986,'statut'=>'Actif','segment'=>'artisan','prix_range'=>'luxe',       'prix_label'=>'~200 000 €',    'type'=>'Artisan Exotique',        'desc'=>'Constructeur artisanal malaisien fondé par la famille Khouri. Ses véhicules rétro-futuristes (Geneva, La Joya) sont entièrement faits à la main.'],
    ['name'=>'Bowler',        'pays'=>'🇬🇧','pays_nom'=>'Angleterre', 'annee'=>1985,'statut'=>'Racheté JLR','segment'=>'offroad','prix_range'=>'luxe', 'prix_label'=>'~150 000 €',    'type'=>'Tout-terrain Racing',     'desc'=>'Préparateur de Land Rover pour le rallye-raid et le Dakar. Racheté par Jaguar Land Rover, les Bowler Bulldog et Defender Challenge sont ses fleurons actuels.'],

    // ─── HYPERCARS & SUPERCARS ───────────────────────────────────────────────
    ['name'=>'Bugatti',       'pays'=>'🇫🇷','pays_nom'=>'France',     'annee'=>1909,'statut'=>'Actif','segment'=>'hypercar','prix_range'=>'hypercar',  'prix_label'=>'dès 3 500 000 €','type'=>'Hypercars Ultime',        'desc'=>'L\'excellence née à Molsheim. Veyron, Chiron, Tourbillon. Chaque modèle repousse les limites de la vitesse maximale avec son légendaire moteur W16 quadriturbo.'],
    ['name'=>'Brabham',       'pays'=>'🇦🇺','pays_nom'=>'Australie',  'annee'=>1960,'statut'=>'Actif','segment'=>'hypercar','prix_range'=>'hypercar',  'prix_label'=>'~1 200 000 €',   'type'=>'Supercar Piste',          'desc'=>'Héritage de la légende F1 Sir Jack Brabham, relancée par son fils David. La BT62 génère 1 200 kg d\'appui aérodynamique pour 700 ch sur 972 kg.'],
    ['name'=>'Bizzarrini',    'pays'=>'🇮🇹','pays_nom'=>'Italie',     'annee'=>1964,'statut'=>'Renaissance','segment'=>'hypercar','prix_range'=>'hypercar','prix_label'=>'~1 500 000 €', 'type'=>'Sportive Radicale',      'desc'=>'Créée par l\'ingénieur de la Ferrari 250 GTO. La 5300 GT Strada est son chef-d\'œuvre. La marque ressuscite aujourd\'hui avec une nouvelle supercar électrique.'],
    ['name'=>'BAC',           'pays'=>'🇬🇧','pays_nom'=>'Angleterre', 'annee'=>2009,'statut'=>'Actif','segment'=>'artisan','prix_range'=>'luxe',       'prix_label'=>'~200 000 €',    'type'=>'Track Toy Ultime',        'desc'=>'Briggs Automotive Company. La Mono, monoplace ultra-légère homologuée pour la route. Carrosserie en graphène, 560 kg sur la balance pour ~340 chevaux.'],

    // ─── PRÉPARATEURS ───────────────────────────────────────────────────────
    ['name'=>'Brabus',        'pays'=>'🇩🇪','pays_nom'=>'Allemagne', 'annee'=>1977,'statut'=>'Actif','segment'=>'preparateur','prix_range'=>'luxe',    'prix_label'=>'dès 300 000 €',  'type'=>'Préparateur Ultra-Luxe',  'desc'=>'Reconnu constructeur officiel par le gouvernement allemand. Spécialiste des Mercedes survitaminées : Classe G 900 Rocket, 800 AMG GT et finitions cuir dément.'],

    // ─── ÉLECTRIQUES / TECH ─────────────────────────────────────────────────
    ['name'=>'Bollinger Motors','pays'=>'🇺🇸','pays_nom'=>'USA',      'annee'=>2015,'statut'=>'Incertain','segment'=>'electrique','prix_range'=>'luxe','prix_label'=>'~120 000 €',    'type'=>'EV Off-Road',             'desc'=>'Startup américaine du Michigan voulant réinventer le pickup électrique carré. Le B2 Truck et le B1 SUV ont suscité l\'engouement mais la production reste hypothétique.'],
    ['name'=>'Byton',          'pays'=>'🇨🇳','pays_nom'=>'Chine',     'annee'=>2016,'statut'=>'Disparu','segment'=>'electrique','prix_range'=>'nc',      'prix_label'=>'Non commercialisé','type'=>'EV Premium (Défunt)',     'desc'=>'Startup sino-américaine prometteuse du pôle d\'innovation de Nanjing. Le M-Byte avec son écran 48 pouces avait tout pour révolutionner le segment. Liquidée en 2022.'],
    ['name'=>'Bolloré',        'pays'=>'🇫🇷','pays_nom'=>'France',    'annee'=>2010,'statut'=>'Disparu','segment'=>'electrique','prix_range'=>'nc',       'prix_label'=>'Autopartage',      'type'=>'Pionnier EV Urbain',      'desc'=>'Le groupe Bolloré (Vincent Bolloré) a créé la BlueCar, citadine 100% électrique déployée dans l\'Autolib\' parisien entre 2011 et 2018. Un précurseur jamais industrialisé.'],

    // ─── CARROSSIERS / DESIGN ───────────────────────────────────────────────
    ['name'=>'Bertone',        'pays'=>'🇮🇹','pays_nom'=>'Italie',    'annee'=>1912,'statut'=>'Renaissance','segment'=>'artisan','prix_range'=>'nc',    'prix_label'=>'Sur mesure',      'type'=>'Studio Design Légendaire','desc'=>'Auteur des plus grandes carrosseries du XXe siècle : Miura, Countach, Stratos Zero. Le studio ressuscite avec la GB110, hypercar de 1 100 ch.'],

    // ─── HISTORIQUES / COLLECTION ───────────────────────────────────────────
    ['name'=>'Borgward',       'pays'=>'🇩🇪','pays_nom'=>'Allemagne', 'annee'=>1919,'statut'=>'Disparu','segment'=>'historique','prix_range'=>'nc',      'prix_label'=>'Collection',      'type'=>'Généraliste Historique',  'desc'=>'Constructeur majeur de Brême des années 50. L\'Isabella Combi est son best-seller. Faillite en 1961, tentative de relaunch chinois avortée dans les années 2010.'],
    ['name'=>'Bristol',        'pays'=>'🇬🇧','pays_nom'=>'Angleterre', 'annee'=>1945,'statut'=>'Disparu','segment'=>'historique','prix_range'=>'nc',      'prix_label'=>'Collection',      'type'=>'Luxe Confidentiel',       'desc'=>'L\'excentricité britannique absolue : assemblage artisanal, moteurs V8 américains Chrysler, jamais de pub. Le Fighter à portes papillon. Liquidation en 2020.'],
    ['name'=>'Bricklin',       'pays'=>'🇨🇦','pays_nom'=>'Canada',    'annee'=>1974,'statut'=>'Disparu','segment'=>'historique','prix_range'=>'nc',       'prix_label'=>'Collection',      'type'=>'Sportive Historique',     'desc'=>'La SV-1 de Malcolm Bricklin, unique modèle à portes papillon (gull-wing), financée par le gouvernement du Nouveau-Brunswick. Seulement 2 900 exemplaires avant la faillite.'],
    ['name'=>'Bond Cars',      'pays'=>'🇬🇧','pays_nom'=>'Angleterre', 'annee'=>1949,'statut'=>'Disparu','segment'=>'historique','prix_range'=>'nc',      'prix_label'=>'Collection',      'type'=>'Micro-cars / 3 roues',    'desc'=>'Preston, Lancashire. Pionnier britannique des micro-voitures et tricycles. Le Bug 875 (1970), orange et futuriste, reste son modèle le plus iconique.'],
    ['name'=>'BSA',            'pays'=>'🇬🇧','pays_nom'=>'Angleterre', 'annee'=>1861,'statut'=>'Disparu','segment'=>'historique','prix_range'=>'nc',      'prix_label'=>'Collection',      'type'=>'Motos & Voiturettes',     'desc'=>'Birmingham Small Arms Company. Géant de l\'armement reconverti dans les motos et voiturettes. La BSA Scout des années 30 a osé la traction avant sur une petite sportive.'],
];

// Tri alphabétique
usort($marques_b, fn($a, $b) => strcmp($a['name'], $b['name']));
$nb_marques = count($marques_b);
$nb_actives = count(array_filter($marques_b, fn($m) => $m['statut'] === 'Actif'));
$nb_pays = count(array_unique(array_column($marques_b, 'pays_nom')));

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
                    <a href="/marques">Annuaire des Marques</a>
                    <span class="art-bc-sep">/</span>
                    <span>Marques en B</span>
                </nav>
                <h1 style="font-size:clamp(1.6rem, 4vw, 2.4rem);">L'Univers des Marques Automobiles en B</h1>
                <p class="art-hero-sub"><?php echo $nb_marques; ?> constructeurs de BMW à Bugatti — des hypercars à 3,5 millions d'euros aux pionniers électriques chinois, en passant par les artisans britanniques et les légendes disparues.</p>
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
                    <div style="font-size:2rem; font-weight:800; color:#dc2626;">1861</div>
                    <div style="font-size:0.72rem; color:#666; line-height:1.3;">Fondation<br>BSA</div>
                </div>
            </div>

            <!-- LISTE DES MARQUES (cards) -->
            <div class="art-content">
                <h2>Les <?php echo $nb_marques; ?> marques automobiles commençant par B</h2>
                <p>De l'hypercar française à 3,5 millions d'euros aux start-up électriques chinoises ou aux artisans malaisiens — la lettre B est l'une des plus riches de l'alphabet automobile. Voici le répertoire complet.</p>

                <div style="display:flex; flex-direction:column; gap:10px; margin-top:20px;">
                    <?php foreach ($marques_b as $m): ?>
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
                                        'Racheté JLR'  => '#fef3c7; color:#92400e',
                                        'Confidentiel' => '#f3e8ff; color:#6b21a8',
                                        'Incertain'    => '#fef9c3; color:#854d0e',
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
                <h2>Tableau comparatif interactif — Filtrer les marques en B</h2>
                <p>Utilisez les filtres ci-dessous pour affiner votre recherche selon le pays d'origine, le statut, la gamme de prix ou le segment automobile. Cliquez sur un en-tête de colonne pour trier le tableau.</p>

                <!-- BARRE DE FILTRES -->
                <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:10px; padding:18px 20px; margin-bottom:16px;">

                    <!-- Recherche rapide -->
                    <div style="margin-bottom:14px;">
                        <input id="b-search" type="text" placeholder="🔍 Rechercher une marque..." autocomplete="off"
                               style="width:100%; box-sizing:border-box; padding:10px 14px; border-radius:7px; border:1.5px solid #cbd5e1; font-size:0.9rem; color:#334155; outline:none; transition:border-color .15s;"
                               onfocus="this.style.borderColor='#2563eb';" onblur="this.style.borderColor='#cbd5e1';">
                    </div>

                    <!-- Gamme de prix (pills) -->
                    <div style="margin-bottom:14px;">
                        <div style="font-size:0.78rem; font-weight:700; color:#64748b; text-transform:uppercase; letter-spacing:.04em; margin-bottom:7px;">Gamme de prix</div>
                        <div style="display:flex; flex-wrap:wrap; gap:6px;" id="prix-pills">
                            <button class="b-pill active" data-prix="all"          style="padding:5px 12px; border-radius:20px; border:1.5px solid #2563eb; background:#2563eb; color:#fff; font-size:0.8rem; font-weight:600; cursor:pointer;">Toutes gammes</button>
                            <button class="b-pill"         data-prix="entree"      style="padding:5px 12px; border-radius:20px; border:1.5px solid #e2e8f0; background:#fff; color:#475569; font-size:0.8rem; font-weight:600; cursor:pointer;">🟢 &lt; 30 000 €</button>
                            <button class="b-pill"         data-prix="premium"     style="padding:5px 12px; border-radius:20px; border:1.5px solid #e2e8f0; background:#fff; color:#475569; font-size:0.8rem; font-weight:600; cursor:pointer;">🔵 30k – 100k €</button>
                            <button class="b-pill"         data-prix="luxe"        style="padding:5px 12px; border-radius:20px; border:1.5px solid #e2e8f0; background:#fff; color:#475569; font-size:0.8rem; font-weight:600; cursor:pointer;">🟣 100k – 500k €</button>
                            <button class="b-pill"         data-prix="hypercar"    style="padding:5px 12px; border-radius:20px; border:1.5px solid #e2e8f0; background:#fff; color:#475569; font-size:0.8rem; font-weight:600; cursor:pointer;">🔴 &gt; 500k €</button>
                            <button class="b-pill"         data-prix="nc"          style="padding:5px 12px; border-radius:20px; border:1.5px solid #e2e8f0; background:#fff; color:#475569; font-size:0.8rem; font-weight:600; cursor:pointer;">⚫ Collection / N.D.</button>
                        </div>
                    </div>

                    <!-- Ligne pays + statut -->
                    <div style="display:flex; gap:12px; flex-wrap:wrap; align-items:center;">
                        <div style="display:flex; align-items:center; gap:8px; flex:1; min-width:160px;">
                            <label style="font-size:0.8rem; font-weight:700; color:#64748b; white-space:nowrap;">Pays :</label>
                            <select id="b-filter-pays" style="flex:1; padding:7px 10px; border-radius:6px; border:1.5px solid #cbd5e1; background:#fff; color:#334155; font-size:0.85rem; cursor:pointer;">
                                <option value="all">🌍 Tous</option>
                                <option value="Allemagne">🇩🇪 Allemagne</option>
                                <option value="Angleterre">🇬🇧 Royaume-Uni</option>
                                <option value="France">🇫🇷 France</option>
                                <option value="Italie">🇮🇹 Italie</option>
                                <option value="USA">🇺🇸 USA</option>
                                <option value="Chine">🇨🇳 Chine</option>
                                <option value="Australie">🇦🇺 Australie</option>
                                <option value="Canada">🇨🇦 Canada</option>
                                <option value="Malaisie">🇲🇾 Malaisie</option>
                            </select>
                        </div>
                        <div style="display:flex; align-items:center; gap:8px; flex:1; min-width:160px;">
                            <label style="font-size:0.8rem; font-weight:700; color:#64748b; white-space:nowrap;">Statut :</label>
                            <select id="b-filter-statut" style="flex:1; padding:7px 10px; border-radius:6px; border:1.5px solid #cbd5e1; background:#fff; color:#334155; font-size:0.85rem; cursor:pointer;">
                                <option value="all">🔄 Tous</option>
                                <option value="Actif">✅ Actif</option>
                                <option value="Renaissance">🔥 Renaissance</option>
                                <option value="Disparu">✝️ Disparu</option>
                                <option value="Confidentiel">👻 Confidentiel</option>
                                <option value="Incertain">⚠️ Incertain</option>
                            </select>
                        </div>
                        <button id="b-reset" style="padding:7px 14px; border-radius:6px; border:1.5px solid #e2e8f0; background:#fff; color:#64748b; font-size:0.82rem; font-weight:600; cursor:pointer;">↺ Réinitialiser</button>
                    </div>
                </div>

                <!-- Compteur de résultats -->
                <div style="font-size:0.82rem; color:#64748b; margin-bottom:8px; min-height:20px;" id="b-count"></div>

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
                        <tbody id="b-table-body">
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
                            'Renaissance'  => 'color:#2563eb; font-weight:700;',
                            'Racheté JLR'  => 'color:#d97706; font-weight:600;',
                            'Confidentiel' => 'color:#9333ea; font-weight:600;',
                            'Incertain'    => 'color:#ca8a04; font-weight:600;',
                        ];
                        $segment_labels = [
                            'generaliste' => 'Généraliste',
                            'premium'     => 'Premium & Sportif',
                            'luxe'        => 'Luxe & GT',
                            'hypercar'    => 'Hypercar',
                            'electrique'  => 'Électrique',
                            'artisan'     => 'Artisan / Exotique',
                            'preparateur' => 'Préparateur',
                            'offroad'     => 'Tout-terrain / Racing',
                            'historique'  => 'Historique / Collection',
                        ];
                        foreach ($marques_b as $i => $m):
                            $pr = $prix_colors[$m['prix_range']] ?? $prix_colors['nc'];
                            $bg = $i % 2 === 0 ? '#fff' : '#f8fafc';
                        ?>
                        <tr class="b-row"
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
                    var search  = document.getElementById('b-search');
                    var selPays = document.getElementById('b-filter-pays');
                    var selStat = document.getElementById('b-filter-statut');
                    var pills   = document.querySelectorAll('.b-pill');
                    var rows    = document.querySelectorAll('.b-row');
                    var count   = document.getElementById('b-count');
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
                        var tbody = document.getElementById('b-table-body');
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

                    document.getElementById('b-reset').addEventListener('click', function() {
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
                <h2>Les meilleurs modèles pour chaque marque automobile en B</h2>
                <p>Chaque constructeur s'écrit par ses succès iconiques. Voici, marque par marque, le top 3 des modèles les plus marquants — best-sellers actuels, chefs-d'œuvre historiques ou ruptures technologiques.</p>

                <div style="display:flex; flex-direction:column; gap:40px; margin-top:32px;">

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">BMW</h3>
                        <p style="color:#475569; margin-bottom:10px;">Le constructeur bavarois construit sa réputation sur la rigueur de ses 6-cylindres en ligne, le plaisir de conduite et la violence contenue de sa division M. Avec l'électrique (i4, iX), BMW réussit le virage sans abandonner sa philosophie.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 BMW Série 3 / M3</strong> — La berline sportive de référence absolue. La M3 CSL 2023 à 543 ch est le sommet d'une lignée qui dure depuis 1975.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 BMW Série 5 / M5</strong> — Le compromis parfait entre grande routière confortable et missile V8 bi-turbo. La M5 2024 hybride annonce une nouvelle ère.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 BMW X5</strong> — L'un des pionniers du SUV de luxe (1999). Toujours leader de son segment, aujourd'hui disponible en version M Competition de 625 ch.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Bugatti</h3>
                        <p style="color:#475569; margin-bottom:10px;">Fierté alsacienne. Depuis le rachat par VW, chaque Bugatti est une démonstration de puissance mécanique ultime. La marque détient plusieurs records de vitesse maximale et chaque modèle est fabriqué en séries de moins de 500 exemplaires.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Bugatti Veyron 16.4</strong> — 1 001 ch, 407 km/h. En 2005, la première hypercar de série à briser la barre symbolique des 400 km/h avec son W16 8,0 L quadriturbo.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Bugatti Chiron Super Sport 300+</strong> — 1 600 ch, 490,48 km/h. Le record du monde de vitesse pour une voiture de production en 2019.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Bugatti Tourbillon</strong> — La nouvelle génération (2024) : V16 atmosphérique 8,3 L + hybride = 1 800 ch. Le W16 tire sa révérence pour le roi des atmosphériques.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Bentley</h3>
                        <p style="color:#475569; margin-bottom:10px;">La marque de Crewe, rivale éternelle de Rolls-Royce, marie boiseries précieuses, cuirs pleine fleur et W12 dévastateur (aujourd'hui remplacé par un V8 hybride). Elle a lancé le segment des SUV ultra-luxe avec le Bentayga en 2015.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Bentley Continental GT</strong> — Le grand tourisme redéfini. Capable de dévorer 1 000 km en silence à 300 km/h dans un intérieur mieux habillé qu'un salon privé.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Bentley Bentayga</strong> — Premier SUV à avoir franchi le million d'euros en version Speed. L'Everest en V8 ou hybride rechargeable selon les besoins.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Bentley Flying Spur</strong> — La limousine aux allures de berline sportive. Étonnamment dynamique pour 2,4 tonnes de luxe absolu.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">BYD (Build Your Dreams)</h3>
                        <p style="color:#475569; margin-bottom:10px;">Passé en 20 ans de fabricant de batteries pour téléphones au leader mondial du véhicule électrifié. BYD a vendu plus de véhicules que Tesla en 2023 et débarque agressivement en Europe avec une gamme complète et compétitive.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 BYD Seal</strong> — La berline aérodynamique (Cd 0,219) pensée pour rivaliser avec la Tesla Model 3 : 523 ch en bimotor, 0-100 en 3,8 s.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 BYD Atto 3</strong> — Le SUV compact qui a ouvert les marchés européens et australien à BYD. 420 km d'autonomie pour un prix compétitif.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 BYD Han</strong> — La grande berline premium de la marque, best-seller en Chine, qui incarne les ambitions haut de gamme de BYD avec ses 715 km d'autonomie.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Buick</h3>
                        <p style="color:#475569; margin-bottom:10px;">Fondateur de General Motors et fleuron de la classe moyenne américaine. Aujourd'hui, la marque survit surtout grâce à la Chine où elle est perçue comme un symbole de réussite, avec des volumes que les USA n'arrivent plus à égaler.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Buick Enclave</strong> — Le SUV familial 3 rangées, roi des parkings nord-américains. Spacieux, confortable, et suffisamment premium pour justifier son badge.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Buick Riviera (1963–1999)</strong> — L'un des plus beaux coupés de luxe américains. Le "Boat Tail" de 1971 reste une icône de style que les collectionneurs s'arrachent.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Buick Envision</strong> — Le SUV compact intermédiaire de la gamme. Très populaire en Chine, il incarne le repositionnement de Buick vers une clientèle urbaine.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Brabus</h3>
                        <p style="color:#475569; margin-bottom:10px;">Reconnu officiellement comme constructeur automobile en Allemagne. Le mantra de Brabus : prendre une Mercedes AMG, la peindre en noir (souvent), doubler la puissance et recouvrir l'intérieur de cuir Alcantara brodé d'or. Et facturer en conséquence.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Brabus 900 Rocket Edition</strong> — Un Mercedes Classe G à 900 ch. Cette armoire à glace de 2,5 tonnes abat le 0-100 en moins de 4 secondes avec un bruit d'apocalypse.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Brabus 800 (AMG GT 4 portes)</strong> — 800 ch, 0-100 en 3,0 s. Une Classe S déguisée en missile sol-sol avec une agressivité carbone assumée de bout en bout.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Brabus XLP "Superblack"</strong> — La transformation la plus folle : un Classe G coupé, la partie arrière enlevée et remplacée par une benne de pick-up d'expédition grand luxe.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">BAC (Briggs Automotive Company)</h3>
                        <p style="color:#475569; margin-bottom:10px;">Liverpool, 2009. Les frères Briggs inventent la voiture de piste légale sur route : une monoplace sans pare-brise ni toit, avec un arceau de sécurité et un moteur turbo de moto. La Mono est homologuée en tant que "voiture à une place".</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 BAC Mono</strong> — Le modèle originel. 270 ch, 570 kg, ratio puissance/poids de 475 ch/tonne. Sur circuit, elle humilie des supercars deux fois plus chères.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 BAC Mono R</strong> — La version radicalisée avec panneaux en graphène pur. Sous les 560 kg pour une rigidité accrue, réservée aux puristes absolus.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 BAC Mono F</strong> — La dernière génération avec moteur turbocompressé, plus puissante et plus accessible que la R. La BAC "entrée de gamme" si l'on peut dire.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Bertone</h3>
                        <p style="color:#475569; margin-bottom:10px;">Le studio de carrosserie de Gruppo Bertone, c'est l'œil de Marcello Gandini mis au service des plus grands constructeurs. Après la faillite en 2014, la marque ressuscite en constructeur avec la GB110, une hypercar à 1 100 ch.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Lamborghini Miura (1966, design Bertone)</strong> — Considérée comme la première vraie supercar de l'histoire. Bertone a dessiné la carrosserie. Gandini avait 25 ans.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Lancia Stratos Zero (Concept, 1970)</strong> — 84 cm de hauteur, design en coin pur. Le concept-car qui a influencé toute la décennie 70 en matière de design automobile.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Bertone GB110 (2022)</strong> — La renaissance : première voiture construite et commercialisée sous le nom Bertone. 1 100 ch, hommage au chiffre 110 ans d'histoire du studio.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Bizzarrini</h3>
                        <p style="color:#475569; margin-bottom:10px;">Giotto Bizzarrini était l'ingénieur en chef derrière la Ferrari 250 GTO et le moteur V12 Lamborghini. Renvoyé par Ferrari lors du "Palazzo revolt" de 1961, il fonda sa propre marque pour montrer ce dont il était capable.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Bizzarrini 5300 GT Strada</strong> — Une carrosserie italienne sculpturale par Giugiaro sur un bloc V8 Chevrolet fiable. Aérodynamique éprouvée en compétition, 310 ch pour 1 050 kg.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Bizzarrini P538</strong> — La barquette de course des années 60, construite à seulement 3 exemplaires. Un objet rarissime de collection venant d'un ingénieur de génie.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Bizzarrini 5300 GT Revival (2023)</strong> — La résurrection moderne. Une "continuation car" reconstruite à l'identique avec les matériaux et méthodes d'aujourd'hui pour 24 heureux propriétaires.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Brabham</h3>
                        <p style="color:#475569; margin-bottom:10px;">La marque porte le nom de Sir Jack Brabham, triple champion du monde de F1 et seul pilote à avoir gagné le titre avec une voiture portant son propre nom (1966). Son fils David l'a ressuscitée à Adelaide en 2017.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Brabham BT62</strong> — 700 ch, 972 kg, 1 200 kg d'appui aérodynamique. Une formule 1 street-legal : on ne monte pas simplement dedans, on l'enfile.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Brabham BT62R</strong> — La version route de la BT62. Suspension adaptée, silencieux, homologuée. Le record d'appui reste, le confort spartiate aussi.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Brabham BT19 (1966, F1)</strong> — La Formule 1 avec laquelle Jack Brabham remporta son 3e titre de champion du monde, premier et seul pilote à le faire sur sa propre voiture.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 style="color:#1e3a8a; font-size:1.25rem; border-left:4px solid #2563eb; padding-left:12px; margin-bottom:8px;">Bowler</h3>
                        <p style="color:#475569; margin-bottom:10px;">Drew Bowler voulait une voiture de rallye-raid basée sur Land Rover mais plus fiable et plus rapide que les préparations maison. Il en fit une entreprise. Racheté par Jaguar Land Rover, Bowler organise désormais ses propres championnats off-road.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:7px;">
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #2563eb;"><strong>#1 Bowler Wildcat</strong> — La star du Dakar et du Rallye des Phaétons. Moteur 4,6 L Rover V8, tubulaire, cage intégrale, tout pour avaler le désert en musique.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #64748b;"><strong>#2 Bowler EXR S</strong> — Le modèle homologué route dérivé de la Rangerover. 550 ch, suspension long débattement, carrosserie carbone. Pour les samedis shopping et les dimanches Dakar.</li>
                            <li style="padding:10px 14px; background:#f8fafc; border-radius:8px; border-left:3px solid #94a3b8;"><strong>#3 Bowler Defender Challenge</strong> — La compétition one-make lancée depuis le rachat par JLR. Tous les concurrents pilotent le même Defender 110 préparé pour des épreuves hors route équitables.</li>
                        </ul>
                    </div>

                    <!-- Marques historiques groupées -->
                    <div style="background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px; padding:20px 24px;">
                        <h3 style="color:#475569; font-size:1.15rem; border-left:4px solid #94a3b8; padding-left:12px; margin-bottom:8px;">Borgward, Bristol, BSA, Bond, Bricklin — Les légendes disparues</h3>
                        <p style="color:#64748b; font-size:0.88rem; margin-bottom:14px;">Ces marques ont contribué à l'histoire automobile sans toujours recevoir la reconnaissance qu'elles méritaient. Elles appartiennent désormais au domaine du collection et de la nostalgie.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:8px; font-size:0.88rem;">
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Borgward Isabella (1954–1961)</strong> — L'élégante berline allemande qui rivalisait avec Mercedes avant la faillite suspecte orchestrée selon certains par ses concurrents.</li>
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Bristol Fighter (2004)</strong> — V10 de Dodge Viper, carrosserie maison, portes papillon et zéro marketing. Tout Bristol : une berline confidentielle à 310 km/h pour initiés seulement.</li>
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>BSA Scout (1935)</strong> — Rarissime petite sportive à traction avant d'un fabricant de motos. Un exploit technique qui préfigure les architectures modernes.</li>
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Bond Bug (1970)</strong> — Micro-tricycle orange à cockpit basculant. Avec sa ligne futuriste dessinée par Tom Karen (Ogle Design), il reste l'un des objets automobiles les plus étranges et attachants du XXe siècle.</li>
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Bricklin SV-1 (1974–1975)</strong> — La tentative canadienne de créer une voiture de sport sécurisée financée avec argent public. Portes papillon, carrosserie en plastique, et 2 900 exemplaires avant la faillite inévitable.</li>
                        </ul>
                    </div>

                    <!-- Marques chinoises groupées -->
                    <div style="background:#f0fdf4; border:1px solid #bbf7d0; border-radius:12px; padding:20px 24px;">
                        <h3 style="color:#14532d; font-size:1.15rem; border-left:4px solid #16a34a; padding-left:12px; margin-bottom:8px;">BAIC, Baojun, Bestune, Brilliance — L'industrie chinoise en B</h3>
                        <p style="color:#166534; font-size:0.88rem; margin-bottom:14px;">Ces quatre marques représentent la puissance industrielle chinoise : volumes colossaux, technologies en progression rapide, et ambitions internationales croissantes.</p>
                        <ul style="list-style:none; padding-left:0; margin:0; display:flex; flex-direction:column; gap:8px; font-size:0.88rem; color:#374151;">
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>BAIC BJ40</strong> — Le SUV iconique du groupe BAIC, inspiré du Jeep Wrangler, qui rencontre un succès inattendu au Moyen-Orient et en Afrique.</li>
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Baojun E100</strong> — La micro-citadine électrique 2 places à 8 000 €. Symbole de l'électrification de masse en Chine rurale et périurbaine.</li>
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Bestune B70</strong> — La grande berline FAW premium qui veut jouer dans la cour des Peugeot et Toyota en Chine, avec finitions soignées et prix compétitifs.</li>
                            <li style="padding:9px 12px; background:#fff; border-radius:7px;"><strong>Brilliance V7</strong> — Le SUV qui a permis à Brilliance de se démarquer de son image d'assembleur BMW pour construire une identité propre sur le marché domestique.</li>
                        </ul>
                    </div>

                </div>
            </div><!-- fin top modèles -->

            <!-- NAVIGATION LETTRES -->
            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:36px; padding:18px 22px; background:#f8f9fa; border-radius:12px;">
                <a href="/marques/a" style="color:#2563eb; font-weight:600; text-decoration:none;">← Marques en A</a>
                <a href="/marques" style="color:#2563eb; font-weight:600; text-decoration:none;">↑ Retour à l'annuaire</a>
                <span style="color:#adb5bd; font-size:0.9rem;">Marques en C → (bientôt)</span>
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
                    <div class="art-sidebar-block-title">Top marques en B</div>
                    <ul style="list-style:none; padding:0; margin:0;">
                        <li style="padding:5px 0; font-size:0.88rem;"><span style="color:#2563eb; font-weight:600;">🇩🇪 BMW</span> — Premium</li>
                        <li style="padding:5px 0; font-size:0.88rem;"><span style="color:#2563eb; font-weight:600;">🇫🇷 Bugatti</span> — Hypercar</li>
                        <li style="padding:5px 0; font-size:0.88rem;"><span style="color:#2563eb; font-weight:600;">🇬🇧 Bentley</span> — Luxe</li>
                        <li style="padding:5px 0; font-size:0.88rem;"><span style="color:#2563eb; font-weight:600;">🇨🇳 BYD</span> — Électrique</li>
                        <li style="padding:5px 0; font-size:0.88rem;"><span style="color:#2563eb; font-weight:600;">🇺🇸 Buick</span> — Premium US</li>
                    </ul>
                </div>

                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Répartition par prix</div>
                    <?php
                    $prix_counts = array_count_values(array_column($marques_b, 'prix_range'));
                    $prix_labels = ['entree'=>'< 30 000 €','premium'=>'30k – 100k €','luxe'=>'100k – 500k €','hypercar'=>'> 500k €','nc'=>'Collection / N.D.'];
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
                    <div class="art-sidebar-block-title" style="color:#1e3a8a;">Le Saviez-vous ?</div>
                    <p style="font-size:0.83rem; color:#1e40af; margin:0; line-height:1.5;">
                        Le logo circulaire bleu et blanc de <strong>BMW</strong> ne représente pas une hélice d'avion en mouvement (légende urbaine). Il reprend simplement les couleurs inversées du drapeau de Bavière. La publicité aéronautique des années 30 a entretenu le mythe.
                    </p>
                </div>

                <div class="art-sidebar-block" style="background:#fef9c3; border:1px solid #fde047;">
                    <div class="art-sidebar-block-title" style="color:#713f12;">Chiffre clé</div>
                    <p style="font-size:0.83rem; color:#854d0e; margin:0; line-height:1.5;">
                        En 2023, <strong>BYD</strong> a vendu plus de 3 millions de véhicules électrifiés, dépassant Tesla sur ce critère. L'entreprise fabrique aussi bien ses batteries que ses semi-conducteurs — une intégration verticale unique dans l'industrie.
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
  "numberOfItems": <?php echo $nb_marques; ?>,
  "publisher": { "@type": "Organization", "name": "Le garage expert Auto", "url": "https://www.garageraymond.fr" }
}
</script>

<?php include __DIR__ . '/../footer.php'; ?>

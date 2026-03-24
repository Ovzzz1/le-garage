<?php
/**
 * marques/a.php — Page Index N3 : Toutes les Marques en A
 * URL : /marques/a
 */
$page_title = "Marques Automobiles en A : Liste Complète de Abarth à Autobianchi";
$page_description = "Toutes les marques automobiles commençant par A : Abarth, AC Cars, Acura, Alfa Romeo, Alpine, Aston Martin, Audi et 17 autres. Histoire, modèles et guides d'achat.";

$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb'],
    'entretien' => ['name' => 'Entretien & Réparation', 'color' => '#dc2626'],
    'electrique' => ['name' => 'Électrique & Hybride', 'color' => '#059669'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2'],
];

// Toutes les marques en A avec métadonnées
$marques_a = [
    ['slug' => 'abarth',        'name' => 'Abarth',           'pays' => '🇮🇹', 'pays_nom' => 'Italie',    'annee' => 1949, 'statut' => 'Actif',    'type' => 'Sportives compactes',       'desc' => 'Le Scorpion de Turin. Préparateur devenu marque, mythique pour ses 595 et 695 survitaminées.'],
    ['slug' => 'ac-cars',       'name' => 'AC Cars',          'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1901, 'statut' => 'Actif',    'type' => 'Sportives artisanales',     'desc' => 'Le plus ancien constructeur britannique. Créateur de l\'iconique Cobra avec Carroll Shelby.'],
    ['slug' => 'acura',         'name' => 'Acura',            'pays' => '🇯🇵', 'pays_nom' => 'Japon',     'annee' => 1986, 'statut' => 'Actif',    'type' => 'Premium (Honda)',           'desc' => 'Division premium de Honda. NSX, MDX, Integra Type S. Marque nord-américaine uniquement.'],
    ['slug' => 'adler',         'name' => 'Adler',            'pays' => '🇩🇪', 'pays_nom' => 'Allemagne', 'annee' => 1900, 'statut' => 'Disparu',  'type' => 'Généraliste historique',    'desc' => 'Le constructeur de Francfort, des Trumpf aux machines à écrire. Disparu en 1957.'],
    ['slug' => 'aiways',        'name' => 'Aiways',           'pays' => '🇨🇳', 'pays_nom' => 'Chine',     'annee' => 2017, 'statut' => 'Difficultés','type' => 'SUV Électriques',         'desc' => 'Startup chinoise EV. U5 et U6 vendus en Europe. En restructuration depuis fin 2023.'],
    ['slug' => 'aixam',         'name' => 'Aixam',            'pays' => '🇫🇷', 'pays_nom' => 'France',    'annee' => 1983, 'statut' => 'Actif',    'type' => 'Voitures sans permis',     'desc' => 'N°1 européen des VSP. Fabrique en Savoie plus de 15 000 voiturettes par an.'],
    ['slug' => 'alfa-romeo',    'name' => 'Alfa Romeo',       'pays' => '🇮🇹', 'pays_nom' => 'Italie',    'annee' => 1910, 'statut' => 'Actif',    'type' => 'Sportives & Premium',      'desc' => 'Le cœur sportif de l\'Italie. Du Quadrifoglio à la F1, 114 ans de passion et de Biscione.'],
    ['slug' => 'allard',        'name' => 'Allard',           'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1946, 'statut' => 'Renaissance','type' => 'Sportives V8',           'desc' => 'Le précurseur de la Cobra : châssis anglais + V8 américains. Vainqueur du Monte-Carlo 1952.'],
    ['slug' => 'alpina',        'name' => 'Alpina',           'pays' => '🇩🇪', 'pays_nom' => 'Allemagne', 'annee' => 1965, 'statut' => 'Racheté BMW','type' => 'Grand Tourisme BMW',     'desc' => 'L\'alternative raffinée aux BMW M. Buchloe, Bavière. Racheté par BMW en 2022.'],
    ['slug' => 'alpine',        'name' => 'Alpine',           'pays' => '🇫🇷', 'pays_nom' => 'France',    'annee' => 1955, 'statut' => 'Actif',    'type' => 'Sportives françaises',     'desc' => 'Jean Rédélé, l\'A110 et Dieppe. La renaissance de la sportive française par excellence.'],
    ['slug' => 'alvis',         'name' => 'Alvis',            'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1919, 'statut' => 'Renaissance','type' => 'Luxe historique',        'desc' => 'Le joyau de Coventry. Première traction avant de série (1928). Reconvertie dans le militaire.'],
    ['slug' => 'amc',           'name' => 'AMC',              'pays' => '🇺🇸', 'pays_nom' => 'USA',       'annee' => 1954, 'statut' => 'Disparu',  'type' => 'Généraliste américain',    'desc' => 'American Motors Corporation. Javelin, Gremlin, Pacer... et surtout l\'acquisition de Jeep.'],
    ['slug' => 'apollo',        'name' => 'Apollo Automobil', 'pays' => '🇩🇪', 'pays_nom' => 'Allemagne', 'annee' => 2004, 'statut' => 'Actif',    'type' => 'Hypercars',                'desc' => 'Ex-Gumpert. L\'Intensa Emozione : V12 atmosphérique de 780 CV, 10 exemplaires.'],
    ['slug' => 'ares',          'name' => 'Ares Design',      'pays' => '🇮🇹', 'pays_nom' => 'Italie',    'annee' => 2014, 'statut' => 'Actif',    'type' => 'Carrossier sur mesure',    'desc' => 'Le dernier grand carrossier italien. Restomods et créations originales depuis Modène.'],
    ['slug' => 'ariel',         'name' => 'Ariel',            'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1999, 'statut' => 'Actif',    'type' => 'Sportives nues ultra-légères','desc' => 'L\'Atom : 550 kg, 320 CV, pas de carrosserie. Plus rapide que des Ferrari.'],
    ['slug' => 'arrinera',      'name' => 'Arrinera',         'pays' => '🇵🇱', 'pays_nom' => 'Pologne',   'annee' => 2008, 'statut' => 'Pré-prod','type' => 'Supercar',                  'desc' => 'La Hussarya, première supercar polonaise. V8 GM de 650 CV. En développement.'],
    ['slug' => 'ascari',        'name' => 'Ascari Cars',      'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1995, 'statut' => 'Confidentiel','type' => 'Supercars & Circuit',  'desc' => 'Klaas Zwart et son circuit privé en Andalousie. KZ1, A10 : supercars à moteur BMW.'],
    ['slug' => 'aspark',        'name' => 'Aspark',           'pays' => '🇯🇵', 'pays_nom' => 'Japon',     'annee' => 2014, 'statut' => 'Actif',    'type' => 'Hypercar électrique',      'desc' => 'L\'Owl : 2 012 CV, 0-100 km/h en 1.69 seconde. Record du monde. 50 exemplaires.'],
    ['slug' => 'aston-martin',  'name' => 'Aston Martin',     'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1913, 'statut' => 'Actif',    'type' => 'Grand Tourisme luxe',     'desc' => 'La voiture de James Bond. DB5, Vantage, Valkyrie. L\'élégance britannique incarnée.'],
    ['slug' => 'auburn',        'name' => 'Auburn',           'pays' => '🇺🇸', 'pays_nom' => 'USA',       'annee' => 1900, 'statut' => 'Disparu',  'type' => 'Luxe Art Déco',            'desc' => 'L\'étoile filante de l\'Indiana. Speedster Boattail Art Déco. Disparue en 1937.'],
    ['slug' => 'audi',          'name' => 'Audi',             'pays' => '🇩🇪', 'pays_nom' => 'Allemagne', 'annee' => 1909, 'statut' => 'Actif',    'type' => 'Premium & Sportif',       'desc' => 'Vorsprung durch Technik. Quattro, RS, e-tron. 4 anneaux, 13 victoires au Mans.'],
    ['slug' => 'austin',        'name' => 'Austin',           'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1905, 'statut' => 'Disparu',  'type' => 'Généraliste populaire',   'desc' => 'Herbert Austin, la Seven et la Mini. Le constructeur qui a motorisé la Grande-Bretagne.'],
    ['slug' => 'austin-healey', 'name' => 'Austin-Healey',    'pays' => '🇬🇧', 'pays_nom' => 'Angleterre','annee' => 1952, 'statut' => 'Disparu',  'type' => 'Roadsters sportifs',      'desc' => 'Big Healey 3000, Sprite Frogeye. Les plus beaux roadsters d\'Angleterre.'],
    ['slug' => 'autobianchi',   'name' => 'Autobianchi',      'pays' => '🇮🇹', 'pays_nom' => 'Italie',    'annee' => 1955, 'statut' => 'Disparu',  'type' => 'Laboratoire Fiat',        'desc' => 'La Primula a inventé le layout moderne. L\'A112 Abarth : première hot hatch de l\'histoire.'],
];

include __DIR__ . '/../header.php';
?>

<article>
    <!-- HERO -->
    <section class="art-hero" style="min-height:300px;">
        <div style="position:absolute;inset:0;background:linear-gradient(135deg, #4c1d95 0%, #6d28d9 50%, #7c3aed 100%);"></div>
        <div class="art-hero-overlay" style="opacity:0.2;"></div>
        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/marques">Annuaire des Marques</a>
                    <span class="art-bc-sep">/</span>
                    <span>Marques en A</span>
                </nav>
                <h1 style="font-size:clamp(1.6rem, 4vw, 2.5rem);">Toutes les Marques Automobiles en A</h1>
                <p class="art-hero-sub">24 constructeurs automobiles de Abarth à Autobianchi : sportives italiennes, pionniers britanniques, géants allemands et bien plus. Explorez-les tous.</p>
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
                    <div style="font-size:2rem; font-weight:800; color:#7c3aed;">24</div>
                    <div style="font-size:0.75rem; color:#666;">Marques</div>
                </div>
                <div style="background:#f8f9fa; border-radius:12px; padding:16px; text-align:center;">
                    <div style="font-size:2rem; font-weight:800; color:#7c3aed;">8</div>
                    <div style="font-size:0.75rem; color:#666;">Pays</div>
                </div>
                <div style="background:#f8f9fa; border-radius:12px; padding:16px; text-align:center;">
                    <div style="font-size:2rem; font-weight:800; color:#7c3aed;">1900</div>
                    <div style="font-size:0.75rem; color:#666;">La plus ancienne</div>
                </div>
                <div style="background:#f8f9fa; border-radius:12px; padding:16px; text-align:center;">
                    <div style="font-size:2rem; font-weight:800; color:#7c3aed;">2017</div>
                    <div style="font-size:0.75rem; color:#666;">La plus récente</div>
                </div>
            </div>

            <!-- LISTE DES MARQUES -->
            <div class="art-content">
                <h2>Les 24 marques automobiles commençant par A</h2>

                <div style="display:flex; flex-direction:column; gap:12px; margin-top:20px;">
                    <?php foreach ($marques_a as $m): ?>
                    <a href="/marques/<?php echo $m['slug']; ?>" style="display:flex; align-items:flex-start; gap:16px; background:#fff; border:1px solid #e9ecef; border-radius:14px; padding:18px 20px; text-decoration:none; transition:all 0.25s; box-shadow:0 1px 3px rgba(0,0,0,0.04);" onmouseover="this.style.borderColor='#7c3aed'; this.style.boxShadow='0 6px 20px rgba(124,58,237,0.12)'; this.style.transform='translateY(-2px)'" onmouseout="this.style.borderColor='#e9ecef'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.04)'; this.style.transform='translateY(0)'">
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
                                        'Racheté BMW' => '#fef3c7; color:#92400e',
                                        'Difficultés' => '#fee2e2; color:#991b1b',
                                        'Pré-prod' => '#fef3c7; color:#92400e',
                                        'Confidentiel' => '#f3e8ff; color:#6b21a8',
                                        default => '#f3f4f6; color:#6b7280',
                                    };
                                ?>;"><?php echo $m['statut']; ?></span>
                                <span style="font-size:0.75rem; color:#999;"><?php echo $m['annee']; ?> • <?php echo $m['pays_nom']; ?></span>
                            </div>
                            <div style="font-size:0.8rem; color:#7c3aed; font-weight:600; margin-bottom:4px;"><?php echo $m['type']; ?></div>
                            <p style="font-size:0.88rem; color:#555; margin:0; line-height:1.5;"><?php echo $m['desc']; ?></p>
                        </div>
                        <!-- Flèche -->
                        <div style="flex-shrink:0; color:#7c3aed; font-size:1.2rem; margin-top:8px;">→</div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- TABLEAU RÉCAP SEO -->
            <div style="margin-top:36px;">
                <h2 style="font-size:1.2rem; margin-bottom:16px;">Tableau récapitulatif des marques en A</h2>
                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr><th>Marque</th><th>Pays</th><th>Fondation</th><th>Statut</th><th>Spécialité</th></tr>
                        </thead>
                        <tbody>
                            <?php foreach ($marques_a as $m): ?>
                            <tr>
                                <td><strong><a href="/marques/<?php echo $m['slug']; ?>" style="color:#7c3aed;"><?php echo $m['name']; ?></a></strong></td>
                                <td><?php echo $m['pays']; ?> <?php echo $m['pays_nom']; ?></td>
                                <td><?php echo $m['annee']; ?></td>
                                <td><?php echo $m['statut']; ?></td>
                                <td><?php echo $m['type']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- NAVIGATION LETTRES -->
            <div style="display:flex; justify-content:space-between; align-items:center; margin-top:36px; padding:20px 24px; background:#f8f9fa; border-radius:12px;">
                <span style="color:#adb5bd;">← Pas de lettre précédente</span>
                <a href="/marques" style="color:#7c3aed; font-weight:600; text-decoration:none;">↑ Retour à l'annuaire</a>
                <span style="color:#adb5bd;">Marques en B → (bientôt)</span>
            </div>

        </div>

        <!-- SIDEBAR -->
        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Navigation A-Z</div>
                    <div style="display:flex; flex-wrap:wrap; gap:4px;">
                        <a href="/marques/a" style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:6px; background:#7c3aed; color:#fff; font-weight:700; font-size:0.85rem; text-decoration:none;">A</a>
                        <?php foreach (range('B', 'Z') as $l): ?>
                        <span style="display:inline-flex; align-items:center; justify-content:center; width:32px; height:32px; border-radius:6px; background:#e9ecef; color:#adb5bd; font-weight:600; font-size:0.85rem;"><?php echo $l; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Top 5 marques en A</div>
                    <ul style="list-style:none; padding:0;">
                        <li style="padding:6px 0;"><a href="/marques/audi" style="color:#7c3aed; font-weight:600;">🇩🇪 Audi</a></li>
                        <li style="padding:6px 0;"><a href="/marques/alfa-romeo" style="color:#7c3aed; font-weight:600;">🇮🇹 Alfa Romeo</a></li>
                        <li style="padding:6px 0;"><a href="/marques/aston-martin" style="color:#7c3aed; font-weight:600;">🇬🇧 Aston Martin</a></li>
                        <li style="padding:6px 0;"><a href="/marques/alpine" style="color:#7c3aed; font-weight:600;">🇫🇷 Alpine</a></li>
                        <li style="padding:6px 0;"><a href="/marques/abarth" style="color:#7c3aed; font-weight:600;">🇮🇹 Abarth</a></li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</article>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.garageraymond.fr/marques/a" },
  "name": "Marques Automobiles en A",
  "description": "<?php echo addslashes($page_description); ?>",
  "numberOfItems": 24,
  "publisher": { "@type": "Organization", "name": "Le garage expert Auto", "url": "https://www.garageraymond.fr" }
}
</script>

<?php include __DIR__ . '/../footer.php'; ?>

<?php
/**
 * marques.php — Page Pilier N2 : Annuaire des Marques Automobiles (A-Z)
 * URL : /marques
 */
$page_title = "Annuaire des Marques Automobiles de A à Z | Le Garage Expert Auto";
$page_description = "Retrouvez toutes les marques automobiles classées de A à Z. Histoire, modèles, fiabilité et guide d'achat pour chaque constructeur : Audi, BMW, Citroën, Ferrari...";

$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb'],
    'entretien' => ['name' => 'Entretien & Réparation', 'color' => '#dc2626'],
    'electrique' => ['name' => 'Électrique & Hybride', 'color' => '#059669'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2'],
];

// Données des lettres avec nombre de marques disponibles
$lettres = [
    'A' => ['count' => 24, 'preview' => 'Abarth, Alfa Romeo, Alpine, Aston Martin, Audi...', 'active' => true],
    'B' => ['count' => 0, 'preview' => 'Bentley, BMW, Bugatti, BYD...', 'active' => false],
    'C' => ['count' => 0, 'preview' => 'Cadillac, Chevrolet, Citroën, Cupra...', 'active' => false],
    'D' => ['count' => 0, 'preview' => 'Dacia, Daihatsu, DS, Dodge...', 'active' => false],
    'E' => ['count' => 0, 'preview' => 'Ferrari (voir F), smart (voir S)...', 'active' => false],
    'F' => ['count' => 0, 'preview' => 'Ferrari, Fiat, Ford, Fisker...', 'active' => false],
    'G' => ['count' => 0, 'preview' => 'Genesis, GMC, Gordon Murray...', 'active' => false],
    'H' => ['count' => 0, 'preview' => 'Honda, Hyundai, Hummer...', 'active' => false],
    'I' => ['count' => 0, 'preview' => 'Infiniti, Isuzu, Iso Rivolta...', 'active' => false],
    'J' => ['count' => 0, 'preview' => 'Jaguar, Jeep, Jensen...', 'active' => false],
    'K' => ['count' => 0, 'preview' => 'Kia, Koenigsegg, KTM...', 'active' => false],
    'L' => ['count' => 0, 'preview' => 'Lamborghini, Land Rover, Lexus, Lotus...', 'active' => false],
    'M' => ['count' => 0, 'preview' => 'Maserati, Mazda, McLaren, Mercedes, MG...', 'active' => false],
    'N' => ['count' => 0, 'preview' => 'Nio, Nissan, Noble...', 'active' => false],
    'O' => ['count' => 0, 'preview' => 'Opel, Ora...', 'active' => false],
    'P' => ['count' => 0, 'preview' => 'Pagani, Peugeot, Porsche, Polestar...', 'active' => false],
    'Q' => ['count' => 0, 'preview' => 'Qoros...', 'active' => false],
    'R' => ['count' => 0, 'preview' => 'Renault, Rimac, Rolls-Royce, Rover...', 'active' => false],
    'S' => ['count' => 0, 'preview' => 'Seat, Škoda, smart, Subaru, Suzuki...', 'active' => false],
    'T' => ['count' => 0, 'preview' => 'Tesla, Toyota, Triumph, TVR...', 'active' => false],
    'U' => ['count' => 0, 'preview' => 'À venir...', 'active' => false],
    'V' => ['count' => 0, 'preview' => 'Volkswagen, Volvo, Venturi...', 'active' => false],
    'W' => ['count' => 0, 'preview' => 'Wiesmann, Wartburg...', 'active' => false],
    'X' => ['count' => 0, 'preview' => 'Xpeng...', 'active' => false],
    'Y' => ['count' => 0, 'preview' => 'À venir...', 'active' => false],
    'Z' => ['count' => 0, 'preview' => 'Zagato, Zenvo, Zotye...', 'active' => false],
];

// Marques phares (skip-links directs depuis cette page)
$marques_phares = [
    ['slug' => 'audi', 'name' => 'Audi', 'desc' => 'Quattro, RS, e-tron'],
    ['slug' => 'alfa-romeo', 'name' => 'Alfa Romeo', 'desc' => 'Quadrifoglio, F1'],
    ['slug' => 'alpine', 'name' => 'Alpine', 'desc' => 'A110, Sport français'],
    ['slug' => 'aston-martin', 'name' => 'Aston Martin', 'desc' => 'DB, James Bond'],
    ['slug' => 'abarth', 'name' => 'Abarth', 'desc' => 'Scorpion, 595'],
    ['slug' => 'aixam', 'name' => 'Aixam', 'desc' => 'N°1 des VSP'],
];

include __DIR__ . '/header.php';
?>

<article>
    <!-- HERO -->
    <section class="art-hero" style="min-height:340px;">
        <div style="position:absolute;inset:0;background:linear-gradient(135deg, #0f0c29 0%, #302b63 50%, #24243e 100%);"></div>
        <div class="art-hero-overlay" style="opacity:0.3;"></div>
        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <span>Annuaire des Marques</span>
                </nav>
                <h1 style="font-size:clamp(1.8rem, 4vw, 2.8rem);">🚗 Annuaire des Marques Automobiles de A à Z</h1>
                <p class="art-hero-sub">L'encyclopédie complète de toutes les marques automobiles : histoire, modèles, fiabilité et guides d'achat. De Abarth à Zenvo, explorez l'univers automobile mondial.</p>
            </div>
        </div>
    </section>

    <!-- NAVIGATION CATÉGORIES -->
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

            <!-- BARRE DE NAVIGATION RAPIDE A-Z -->
            <div style="background:#f8f9fa; border-radius:16px; padding:20px 24px; margin-bottom:32px; text-align:center;">
                <div style="font-weight:700; font-size:0.9rem; color:#666; margin-bottom:12px; text-transform:uppercase; letter-spacing:1px;">Navigation rapide</div>
                <div style="display:flex; flex-wrap:wrap; gap:6px; justify-content:center;">
                    <?php foreach ($lettres as $lettre => $data): ?>
                    <?php if ($data['active']): ?>
                        <a href="/marques/<?php echo strtolower($lettre); ?>" style="display:inline-flex; align-items:center; justify-content:center; width:42px; height:42px; border-radius:10px; background:linear-gradient(135deg, #7c3aed, #6d28d9); color:#fff; font-weight:800; font-size:1.1rem; text-decoration:none; transition:transform 0.2s; box-shadow:0 2px 8px rgba(124,58,237,0.25);" onmouseover="this.style.transform='scale(1.15)'" onmouseout="this.style.transform='scale(1)'"><?php echo $lettre; ?></a>
                    <?php else: ?>
                        <span style="display:inline-flex; align-items:center; justify-content:center; width:42px; height:42px; border-radius:10px; background:#e9ecef; color:#adb5bd; font-weight:700; font-size:1.1rem; cursor:default;"><?php echo $lettre; ?></span>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <p style="font-size:0.8rem; color:#999; margin-top:12px;">Les lettres en violet sont déjà disponibles. Les autres arrivent bientôt !</p>
            </div>

            <!-- MARQUES PHARES (SKIP LINKS) -->
            <div style="margin-bottom:36px;">
                <h2 style="font-size:1.3rem; margin-bottom:16px;">⭐ Marques phares</h2>
                <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(160px, 1fr)); gap:12px;">
                    <?php foreach ($marques_phares as $mp): ?>
                    <a href="/marques/<?php echo $mp['slug']; ?>" style="display:block; background:#fff; border:1px solid #e9ecef; border-radius:12px; padding:16px; text-decoration:none; text-align:center; transition:all 0.2s; box-shadow:0 1px 3px rgba(0,0,0,0.04);" onmouseover="this.style.borderColor='#7c3aed'; this.style.boxShadow='0 4px 16px rgba(124,58,237,0.15)'; this.style.transform='translateY(-2px)'" onmouseout="this.style.borderColor='#e9ecef'; this.style.boxShadow='0 1px 3px rgba(0,0,0,0.04)'; this.style.transform='translateY(0)'">
                        <div style="font-weight:700; font-size:1.05rem; color:#1a1a2e;"><?php echo $mp['name']; ?></div>
                        <div style="font-size:0.8rem; color:#888; margin-top:4px;"><?php echo $mp['desc']; ?></div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- GRILLE DES LETTRES A-Z -->
            <div class="art-content">
                <h2>Toutes les marques par lettre</h2>
                <p>Cliquez sur une lettre pour accéder à la liste complète des marques automobiles commençant par cette lettre, avec pour chacune : histoire, modèles, fiabilité et guide d'achat.</p>

                <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(280px, 1fr)); gap:16px; margin-top:24px;">
                    <?php foreach ($lettres as $lettre => $data): ?>
                    <div style="border:1px solid <?php echo $data['active'] ? '#d8b4fe' : '#e9ecef'; ?>; border-radius:12px; padding:20px; background:<?php echo $data['active'] ? 'linear-gradient(135deg, #faf5ff, #f5f3ff)' : '#fafafa'; ?>; transition:all 0.2s; <?php echo $data['active'] ? 'cursor:pointer;' : 'opacity:0.6;'; ?>" <?php if ($data['active']): ?>onclick="window.location='/marques/<?php echo strtolower($lettre); ?>'" onmouseover="this.style.boxShadow='0 4px 16px rgba(124,58,237,0.15)'; this.style.transform='translateY(-2px)'" onmouseout="this.style.boxShadow='none'; this.style.transform='translateY(0)'"<?php endif; ?>>
                        <div style="display:flex; align-items:center; gap:12px; margin-bottom:8px;">
                            <span style="display:inline-flex; align-items:center; justify-content:center; width:44px; height:44px; border-radius:10px; background:<?php echo $data['active'] ? 'linear-gradient(135deg, #7c3aed, #6d28d9)' : '#dee2e6'; ?>; color:#fff; font-weight:800; font-size:1.3rem;"><?php echo $lettre; ?></span>
                            <div>
                                <div style="font-weight:700; color:#1a1a2e;">Marques en <?php echo $lettre; ?></div>
                                <?php if ($data['count'] > 0): ?>
                                <span style="font-size:0.8rem; color:#7c3aed; font-weight:600;"><?php echo $data['count']; ?> marques →</span>
                                <?php else: ?>
                                <span style="font-size:0.8rem; color:#adb5bd;">Bientôt disponible</span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <p style="font-size:0.85rem; color:#666; margin:0; line-height:1.4;"><?php echo $data['preview']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- STATS -->
            <div style="background:linear-gradient(135deg, #1a1a2e, #16213e); color:#fff; border-radius:16px; padding:32px; margin-top:36px; text-align:center;">
                <h2 style="color:#fff; font-size:1.4rem; margin-bottom:20px;">📊 L'annuaire en chiffres</h2>
                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(120px, 1fr)); gap:20px;">
                    <div>
                        <div style="font-size:2.2rem; font-weight:800; color:#a78bfa;">24</div>
                        <div style="font-size:0.85rem; opacity:0.8;">Marques en ligne</div>
                    </div>
                    <div>
                        <div style="font-size:2.2rem; font-weight:800; color:#a78bfa;">1/26</div>
                        <div style="font-size:0.85rem; opacity:0.8;">Lettres complétées</div>
                    </div>
                    <div>
                        <div style="font-size:2.2rem; font-weight:800; color:#a78bfa;">300+</div>
                        <div style="font-size:0.85rem; opacity:0.8;">Marques prévues au total</div>
                    </div>
                    <div>
                        <div style="font-size:2.2rem; font-weight:800; color:#a78bfa;">∞</div>
                        <div style="font-size:0.85rem; opacity:0.8;">Passion automobile</div>
                    </div>
                </div>
            </div>

            <!-- FAQ SEO -->
            <div class="art-conclusion" style="margin-top:36px;">
                <h2>FAQ — Annuaire des Marques Automobiles</h2>
                <h3>Combien de marques automobiles existent dans le monde ?</h3>
                <p>Il existe plus de <strong>300 marques automobiles actives</strong> dans le monde en 2026, sans compter les marques historiques disparues. Notre annuaire vise à documenter aussi bien les géants (Toyota, Volkswagen) que les constructeurs artisanaux (Ariel, Pagani) et les marques historiques (Auburn, Allard).</p>

                <h3>Quelle est la plus ancienne marque automobile encore en activité ?</h3>
                <p><strong>Mercedes-Benz</strong> (1886, via la Benz Patent-Motorwagen) est considérée comme la plus ancienne, mais <strong>Peugeot</strong> (1882 pour les vélos, 1889 pour les voitures) revendique aussi ce titre. En Grande-Bretagne, <strong>Vauxhall</strong> (1903) et <strong>AC Cars</strong> (1901) sont parmi les plus anciennes.</p>

                <h3>Quelles sont les marques automobiles françaises ?</h3>
                <p>Les principales marques françaises actives en 2026 sont : <strong>Renault, Peugeot, Citroën, DS, Alpine</strong> (groupe Renault), et <strong>Bugatti</strong> (historiquement française, aujourd'hui sous Rimac/VW). En VSP : <strong>Aixam</strong> et <strong>Ligier</strong>.</p>
            </div>

        </div>

        <!-- SIDEBAR -->
        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Accès rapide</div>
                    <ul style="list-style:none; padding:0;">
                        <li style="padding:8px 0;"><a href="/marques/a" style="color:#7c3aed; font-weight:600;">📁 Marques en A (24)</a></li>
                        <li style="padding:8px 0; color:#adb5bd;">📁 Marques en B (bientôt)</li>
                        <li style="padding:8px 0; color:#adb5bd;">📁 Marques en C (bientôt)</li>
                    </ul>
                </div>
                <div class="art-sidebar-block">
                    <div class="art-sidebar-block-title">Les plus consultées</div>
                    <ul style="list-style:none; padding:0;">
                        <li style="padding:6px 0;"><a href="/marques/audi" style="color:#7c3aed;">→ Audi</a></li>
                        <li style="padding:6px 0;"><a href="/marques/alfa-romeo" style="color:#7c3aed;">→ Alfa Romeo</a></li>
                        <li style="padding:6px 0;"><a href="/marques/aston-martin" style="color:#7c3aed;">→ Aston Martin</a></li>
                        <li style="padding:6px 0;"><a href="/marques/alpine" style="color:#7c3aed;">→ Alpine</a></li>
                        <li style="padding:6px 0;"><a href="/marques/abarth" style="color:#7c3aed;">→ Abarth</a></li>
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
  "mainEntityOfPage": { "@type": "WebPage", "@id": "https://www.garageraymond.fr/marques" },
  "name": "Annuaire des Marques Automobiles de A à Z",
  "description": "<?php echo addslashes($page_description); ?>",
  "publisher": { "@type": "Organization", "name": "Le garage expert Auto", "url": "https://www.garageraymond.fr" }
}
</script>

<?php include __DIR__ . '/footer.php'; ?>

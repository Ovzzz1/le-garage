<?php
$page_title = "AC Cars : Histoire de la Cobra, Modèles et Héritage Britannique";
$page_description = "AC Cars, le plus ancien constructeur automobile britannique encore en activité. De l'Ace à la mythique Cobra 427, découvrez l'histoire de cette marque légendaire.";
$article = [
    'title' => 'AC Cars : La Cobra et l\'Héritage du Plus Ancien Constructeur Britannique',
    'subtitle' => 'Fondée en 1901, AC Cars a donné naissance à l\'une des voitures les plus iconiques de l\'histoire : la Cobra. Retour sur 120 ans d\'artisanat automobile.',
    'category' => 'occasion', 'category_name' => 'Achat & Occasion', 'category_color' => '#7c3aed',
    'tags' => ['AC Cars', 'Cobra', 'Shelby', 'Britannique'],
    'image' => '/Image/marques/ac-cars-hero.webp', 'date' => '24 Mars 2026',
    'author' => 'Arnaud', 'author_role' => 'Historien Auto', 'author_img' => '/Image/arnaud.png',
    'author_bio' => 'Arnaud est fasciné par les constructeurs artisanaux britanniques qui ont forgé la légende automobile mondiale.', 'reading_time' => '6 min',
];
$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb'],
    'entretien' => ['name' => 'Entretien & Réparation', 'color' => '#dc2626'],
    'electrique' => ['name' => 'Électrique & Hybride', 'color' => '#059669'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2'],
];
include __DIR__ . '/../header.php';
?>
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>" alt="AC Cobra 427 bleue" class="art-hero-bg">
        <div class="art-hero-overlay"></div>
        <div class="art-hero-container"><div class="art-hero-content">
            <nav class="art-breadcrumb"><a href="/">Accueil</a><span class="art-bc-sep">/</span><a href="/marques">Annuaire des Marques</a><span class="art-bc-sep">/</span><a href="/marques/a">Marques en A</a><span class="art-bc-sep">/</span><span>AC Cars</span></nav>
            <div class="art-hero-tags"><?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?></div>
            <h1><?php echo $article['title']; ?></h1>
            <p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
            <div class="art-hero-meta"><div class="art-author-pill"><img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"><div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div></div><div class="art-meta-infos"><span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span></div></div>
        </div></div>
    </section>
    <nav class="art-cat-nav"><div class="art-cat-nav-inner"><?php foreach ($categories as $slug_cat => $cat): ?><a href="/<?php echo $slug_cat; ?>" class="art-cat-link <?php echo $slug_cat === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $cat['color']; ?>"><span class="art-cat-dot" style="background-color: <?php echo $cat['color']; ?>"></span><?php echo $cat['name']; ?></a><?php endforeach; ?></div></nav>
    <div class="art-layout-wrapper"><div class="art-main-col">

        <div class="art-tldr">
            <div class="art-tldr-title">🇬🇧 AC Cars en bref</div>
            <ul>
                <li><strong>Fondation :</strong> 1901 par John Weller et John Portwine à Londres — originellement "Autocarriers Ltd".</li>
                <li><strong>Record :</strong> Plus ancien constructeur automobile britannique encore en activité (124 ans en 2025).</li>
                <li><strong>Chef-d'œuvre :</strong> L'AC Cobra (1962), née de la rencontre entre Carroll Shelby et l'AC Ace.</li>
                <li><strong>Statut actuel :</strong> Production artisanale au compte-gouttes. La Cobra est toujours produite en version modernisée.</li>
            </ul>
        </div>

        <div class="art-content">
            <h2 id="histoire">1. Des Autocarriers à la légende Cobra</h2>
            <p>L'histoire d'<strong>AC Cars</strong> commence en 1901 lorsque <strong>John Weller</strong> fonde "Autocarriers Ltd" à Londres pour produire des triporteurs de livraison motorisés. Oui, vous avez bien lu : le constructeur de l'une des sportives les plus brutales de l'histoire a débuté par des véhicules utilitaires à trois roues !</p>
            <p>Dans les années 1950, AC produit l'<strong>AC Ace</strong>, un élégant roadster à châssis tubulaire et carrosserie aluminium. C'est cette voiture qui va changer le destin de la marque lorsqu'un certain pilote texan frappe à la porte...</p>

            <h2 id="cobra">2. Carroll Shelby et la naissance de la Cobra</h2>
            <p>En 1961, le pilote américain <strong>Carroll Shelby</strong>, contraint d'arrêter la course pour raisons de santé, a une idée de génie : prendre le châssis léger de l'AC Ace britannique et y greffer un monstrueux <strong>V8 Ford</strong> américain. L'AC Cobra naît en 1962.</p>
            <p>Le résultat est dévastateur : la <strong>Cobra 427</strong> (7 litres, plus de 400 CV) pèse à peine 1 040 kg. Le rapport poids/puissance est absurde pour l'époque. La Cobra devient un cauchemar pour Ferrari en compétition, remportant le <strong>Championnat du Monde GT FIA en 1965</strong> — le seul titre mondial jamais remporté par un constructeur américain.</p>

            <div class="art-table-wrap">
                <table class="art-table">
                    <thead><tr><th>Modèle AC</th><th>Période</th><th>Moteur</th><th>Particularité</th></tr></thead>
                    <tbody>
                        <tr><td><strong>AC Ace</strong></td><td>1953-1963</td><td>6 cyl. Bristol 2.0L</td><td>Le roadster père de la Cobra. Carrosserie aluminium artisanale.</td></tr>
                        <tr><td><strong>AC Cobra 289</strong></td><td>1962-1965</td><td>Ford V8 4.7L (~270 CV)</td><td>La première Cobra. Légère et agile.</td></tr>
                        <tr><td><strong>AC Cobra 427</strong></td><td>1965-1967</td><td>Ford V8 7.0L (~425 CV)</td><td>La version ultime. Châssis renforcé, trains roulants élargis. L'icône absolue.</td></tr>
                        <tr><td><strong>AC Cobra MkIV / Superblower</strong></td><td>1990s-2020s</td><td>Ford V8 5.0L Superchargé</td><td>Versions modernes produites en très petite série par AC Heritage.</td></tr>
                        <tr><td><strong>AC Cobra GT Electric</strong></td><td>2024+</td><td>Électrique (~300 CV)</td><td>La Cobra zéro émission. Fidèle au design original avec châssis carbone.</td></tr>
                    </tbody>
                </table>
            </div>

            <h2 id="cote">3. Cote et collection : Un investissement en or</h2>
            <p>Une AC Cobra 427 originale est l'une des voitures les plus chères du monde aux enchères. En 2024, un exemplaire est parti à <strong>plus de 5 millions de dollars</strong> chez Bonhams. Les répliques de qualité (Superformance, Backdraft) se négocient entre 40 000€ et 120 000€, prouvant que le mythe Cobra reste accessible (relativement).</p>
            <p>AC Cars continue aujourd'hui de produire des versions modernes au compte-gouttes depuis sa base de Donington Park (Angleterre), incluant désormais une version <strong>100% électrique</strong> fidèle au design original.</p>
        </div>

        <div class="art-conclusion">
            <h2 id="faq">FAQ AC Cars</h2>
            <h3>AC Cars existe-t-elle encore ?</h3>
            <p>Oui ! AC Cars est toujours en activité en 2026, basée à Donington Park. Elle produit des Cobra modernisées en très petite série, y compris une version électrique.</p>
            <h3>Quelle est la différence entre AC Cobra et Shelby Cobra ?</h3>
            <p>C'est la même voiture : le châssis et la carrosserie sont fabriqués par <strong>AC Cars</strong> en Angleterre, tandis que le moteur V8 Ford et la préparation étaient réalisés par <strong>Shelby American</strong> aux États-Unis. Les deux noms sont utilisés de manière interchangeable.</p>
        </div>

        <aside class="art-sidebar-right"><div class="art-sidebar-sticky"><div class="art-sidebar-block"><div class="art-sidebar-block-title">Autres marques en A</div><ul style="list-style:none;padding:0;"><li style="padding:6px 0;"><a href="/marques/abarth" style="color:#7c3aed;">→ Abarth</a></li><li style="padding:6px 0;"><a href="/marques/alfa-romeo" style="color:#7c3aed;">→ Alfa Romeo</a></li><li style="padding:6px 0;"><a href="/marques/aston-martin" style="color:#7c3aed;">→ Aston Martin</a></li><li style="padding:6px 0;"><a href="/marques/audi" style="color:#7c3aed;">→ Audi</a></li></ul></div></div></aside>
    </div></div>
</article>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://www.garageraymond.fr/marques/ac-cars"},"headline":"<?php echo addslashes($article['title']); ?>","description":"<?php echo addslashes($page_description); ?>","datePublished":"2026-03-24T08:00:00+01:00","author":{"@type":"Person","name":"<?php echo $article['author']; ?>"},"publisher":{"@type":"Organization","name":"Le garage expert Auto","url":"https://www.garageraymond.fr"}}</script>
<?php include __DIR__ . '/../footer.php'; ?>

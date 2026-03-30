<?php
$page_title = "Alvis : Le Constructeur Britannique de Luxe et d'Innovation (1919-1967)";
$page_description = "Alvis, constructeur anglais pionnier de la traction avant et des moteurs aluminium. De Coventry au patrimoine automobile britannique, découvrez cette marque disparue.";
$article = ['title' => 'Alvis : Le Joyau Discret de Coventry (Guide Complet)', 'subtitle' => 'Première traction avant au monde en production, moteurs aluminium précurseurs : Alvis était à l\'avant-garde. Pourquoi cette marque géniale a-t-elle disparu ?', 'category' => 'occasion', 'category_name' => 'Achat & Occasion', 'category_color' => '#7c3aed', 'tags' => ['Alvis', 'Coventry', 'Britannique', 'Collection'], 'image' => '/Image/marques/alvis-hero.webp', 'date' => '24 Mars 2026', 'author' => 'Arnaud', 'author_role' => 'Historien Auto', 'author_img' => '/Image/arnaud.png', 'author_bio' => 'Arnaud a un faible pour les constructeurs de Coventry qui ont marqué l\'histoire sans la reconnaissance qu\'ils méritaient.', 'reading_time' => '5 min'];
$categories = ['assurance'=>['name'=>'Assurance & Financement','color'=>'#2563eb'],'entretien'=>['name'=>'Entretien & Réparation','color'=>'#dc2626'],'electrique'=>['name'=>'Électrique & Hybride','color'=>'#059669'],'occasion'=>['name'=>'Achat & Occasion','color'=>'#7c3aed'],'moto'=>['name'=>'Moto & 2 Roues','color'=>'#ea580c'],'permis'=>['name'=>'Permis','color'=>'#0891b2']];
include __DIR__ . '/../header.php';
?>
<article>
    <section class="art-hero"><img src="<?php echo $article['image']; ?>" alt="Alvis Speed 25 vintage" class="art-hero-bg" onerror="this.setAttribute('data-error','true')" onerror="this.setAttribute('data-error','true')"><div class="art-hero-overlay"></div><div class="art-hero-container"><div class="art-hero-content">
        <nav class="art-breadcrumb"><a href="/">Accueil</a><span class="art-bc-sep">/</span><a href="/marques">Annuaire des Marques</a><span class="art-bc-sep">/</span><a href="/marques/a">Marques en A</a><span class="art-bc-sep">/</span><span>Alvis</span></nav>
        <div class="art-hero-tags"><?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?></div>
        <h1><?php echo $article['title']; ?></h1><p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
        <div class="art-hero-meta"><div class="art-author-pill"><img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"><div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div></div><div class="art-meta-infos"><span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span></div></div>
    </div></div></section>
    <nav class="art-cat-nav"><div class="art-cat-nav-inner"><?php foreach ($categories as $sc => $c): ?><a href="/<?php echo $sc; ?>" class="art-cat-link <?php echo $sc === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $c['color']; ?>"><span class="art-cat-dot" style="background-color: <?php echo $c['color']; ?>"></span><?php echo $c['name']; ?></a><?php endforeach; ?></div></nav>
    <div class="art-layout-wrapper"><div class="art-main-col">
        <div class="art-content">
            <h2>1. Coventry, berceau de l'automobile britannique</h2>
            <p><strong>Alvis Car and Engineering Company</strong> est fondée en 1919 à Coventry par T.G. John. Le nom "Alvis" est purement inventé — il ne signifie rien, mais sa sonorité courte et percutante était idéale pour un logo. Dès ses débuts, Alvis se distingue par son approche technique avant-gardiste.</p>
            <p>En 1928, Alvis lance la <strong>FWD (Front Wheel Drive)</strong>, la première voiture de série à <strong>traction avant</strong> de l'histoire (avant Citroën !). Malheureusement, le modèle est un échec commercial — les clients ne font pas confiance à cette technologie révolutionnaire — et Alvis revient à la propulsion classique.</p>

            <h2>2. L'âge d'or : Les Speed 20 et Speed 25</h2>
            <p>Les années 1930 sont l'apogée d'Alvis. Les modèles <strong>Speed 20</strong> et <strong>Speed 25</strong>, équipés de 6 cylindres en ligne de 2.5L à 3.5L, sont des grand-tourisme de luxe rivalisant avec Bentley et Lagonda. Leurs carrosseries sont souvent réalisées par les meilleurs carrossiers anglais (Vanden Plas, Cross & Ellis, Charlesworth) sur commande individuelle.</p>

            <h2>3. L'après-guerre et la reconversion militaire</h2>
            <p>Après 1945, Alvis reprend la production automobile avec les élégantes <strong>TA14</strong>, <strong>TC21 Grey Lady</strong> et les magnifiques <strong>TD21/TE21/TF21</strong> habillées par le carrossier suisse Graber. Mais la production reste confidentielle (quelques centaines par an), et la marque se tourne de plus en plus vers le <strong>matériel militaire</strong> : les blindés Alvis (Saracen, Saladin, Stalwart, Scorpion) équipent les armées britanniques et du Commonwealth.</p>
            <p>En 1965, Rover rachète Alvis. La dernière voiture Alvis (une TF21) sort en 1967. Depuis, le nom Alvis a été repris par <strong>Alvis Car Company</strong>, qui produit des "continuation" de modèles historiques à Kenilworth (Warwickshire), assemblées à la main en petite série.</p>
        </div>
    </div>
    <aside class="art-sidebar-right"><div class="art-sidebar-sticky"><div class="art-sidebar-block"><div class="art-sidebar-block-title">Marques en A</div><ul style="list-style:none;padding:0;"><li style="padding:6px 0;"><a href="/marques/aston-martin" style="color:#7c3aed;">→ Aston Martin</a></li><li style="padding:6px 0;"><a href="/marques/allard" style="color:#7c3aed;">→ Allard</a></li></ul></div></div></aside>
    </div>
</article>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://www.garageraymond.fr/marques/alvis"},"headline": <?php echo json_encode($article['title'] ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"description": <?php echo json_encode($page_description ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"datePublished":"2026-03-24T08:00:00+01:00","author":{"@type":"Person","name":"<?php echo $article['author']; ?>"},"publisher":{"@type":"Organization","name":"Le garage expert Auto","url":"https://www.garageraymond.fr"}}</script>
<?php include __DIR__ . '/../footer.php'; ?>

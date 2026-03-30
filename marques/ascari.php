<?php
$page_title = "Ascari Cars : L'Hypercar Espagnole Méconnue (KZ1 & A10)";
$page_description = "Ascari Cars, constructeur de supercars fondé en hommage au pilote F1 Alberto Ascari. KZ1, A10 et le circuit privé de Ronda : découvrez cette marque confidentielle.";
$article = ['title' => 'Ascari Cars : Supercars & Circuit Privé en Andalousie', 'subtitle' => 'Un milliardaire néerlandais, un hommage à un champion F1 italien, un circuit secret en Andalousie : Ascari Cars est l\'une des histoires les plus insolites de l\'automobile.', 'category' => 'occasion', 'category_name' => 'Achat & Occasion', 'category_color' => '#7c3aed', 'tags' => ['Ascari', 'Supercar', 'Espagne', 'Circuit'], 'image' => '/Image/marques/ascari-hero.webp', 'date' => '24 Mars 2026', 'author' => 'Arnaud', 'author_role' => 'Expert Supercars', 'author_img' => '/Image/arnaud.png', 'author_bio' => 'Arnaud rêve de rouler sur le circuit privé d\'Ascari à Ronda, l\'un des secrets les mieux gardés du monde automobile.', 'reading_time' => '4 min'];
$categories = ['assurance'=>['name'=>'Assurance & Financement','color'=>'#2563eb'],'entretien'=>['name'=>'Entretien & Réparation','color'=>'#dc2626'],'electrique'=>['name'=>'Électrique & Hybride','color'=>'#059669'],'occasion'=>['name'=>'Achat & Occasion','color'=>'#7c3aed'],'moto'=>['name'=>'Moto & 2 Roues','color'=>'#ea580c'],'permis'=>['name'=>'Permis','color'=>'#0891b2']];
include __DIR__ . '/../header.php';
?>
<article>
    <section class="art-hero"><img src="<?php echo $article['image']; ?>" alt="Ascari A10 rouge sur circuit" class="art-hero-bg" onerror="this.setAttribute('data-error','true')" onerror="this.setAttribute('data-error','true')"><div class="art-hero-overlay"></div><div class="art-hero-container"><div class="art-hero-content">
        <nav class="art-breadcrumb"><a href="/">Accueil</a><span class="art-bc-sep">/</span><a href="/marques">Annuaire des Marques</a><span class="art-bc-sep">/</span><a href="/marques/a">Marques en A</a><span class="art-bc-sep">/</span><span>Ascari Cars</span></nav>
        <div class="art-hero-tags"><?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?></div>
        <h1><?php echo $article['title']; ?></h1><p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
        <div class="art-hero-meta"><div class="art-author-pill"><img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"><div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div></div><div class="art-meta-infos"><span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span></div></div>
    </div></div></section>
    <nav class="art-cat-nav"><div class="art-cat-nav-inner"><?php foreach ($categories as $sc => $c): ?><a href="/<?php echo $sc; ?>" class="art-cat-link <?php echo $sc === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $c['color']; ?>"><span class="art-cat-dot" style="background-color: <?php echo $c['color']; ?>"></span><?php echo $c['name']; ?></a><?php endforeach; ?></div></nav>
    <div class="art-layout-wrapper"><div class="art-main-col">
        <div class="art-content">
            <h2>1. Klaas Zwart : Le milliardaire qui rend hommage à Alberto Ascari</h2>
            <p><strong>Ascari Cars</strong> est fondée en 1995 par <strong>Klaas Zwart</strong>, un milliardaire néerlandais passionné de sport automobile. Il nomme sa marque en hommage à <strong>Alberto Ascari</strong>, double champion du monde de Formule 1 en 1952-1953 et l'un des plus grands pilotes italiens de l'histoire. Zwart installe son usine de production à Banbury (Angleterre), mais possède aussi un <strong>circuit automobile privé</strong> de 5,4 km construit à ses frais près de <strong>Ronda</strong>, en Andalousie (Espagne), baptisé "Ascari Race Resort".</p>

            <h2>2. Les modèles : De la KZ1 à la A10</h2>
            <p>Ascari n'a produit que deux modèles, chacun en très petite série :</p>
            <div class="art-table-wrap"><table class="art-table">
                <thead><tr><th>Modèle</th><th>Moteur</th><th>Puissance</th><th>Poids</th><th>Production</th></tr></thead>
                <tbody>
                    <tr><td><strong>KZ1</strong></td><td>BMW V8 4.4L (E39 M5)</td><td>500 CV</td><td>1 280 kg</td><td>~50 exemplaires</td></tr>
                    <tr><td><strong>A10</strong></td><td>BMW V8 5.0L (S85 M5/M6)</td><td>625 CV</td><td>1 280 kg</td><td>~50 exemplaires (annoncés)</td></tr>
                </tbody>
            </table></div>
            <p>La <strong>A10</strong>, dévoilée en 2006, intègre un V8 BMW de 625 CV dans un châssis carbone ultra-rigide. Le 0-100 km/h est annoncé en 2.8 secondes, rivalisant avec les Ferrari Enzo et Porsche Carrera GT de l'époque. Mais la production en série ne s'est jamais véritablement concrétisée à cause du caractère confidentiel du projet et de la crise de 2008.</p>

            <h2>3. Le circuit Ascari Race Resort</h2>
            <p>L'héritage le plus tangible de Klaas Zwart est peut-être son <strong>circuit privé andalou</strong> : 5,4 km de piste sinueuse tracée dans les collines autour de Ronda, avec des dénivelés spectaculaires et des vues sur la Sierra de las Nieves. Le resort est accessible uniquement sur invitation ou via des stages de pilotage exclusifs. C'est l'un des circuits privés les plus impressionnants au monde.</p>
        </div>
    </div>
    <aside class="art-sidebar-right"><div class="art-sidebar-sticky"><div class="art-sidebar-block"><div class="art-sidebar-block-title">Marques en A</div><ul style="list-style:none;padding:0;"><li style="padding:6px 0;"><a href="/marques/ariel" style="color:#7c3aed;">→ Ariel</a></li><li style="padding:6px 0;"><a href="/marques/aspark" style="color:#7c3aed;">→ Aspark</a></li></ul></div></div></aside>
    </div>
</article>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://www.garageraymond.fr/marques/ascari"},"headline": <?php echo json_encode($article['title'] ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"description": <?php echo json_encode($page_description ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"datePublished":"2026-03-24T08:00:00+01:00","author":{"@type":"Person","name":"<?php echo $article['author']; ?>"},"publisher":{"@type":"Organization","name":"Le garage expert Auto","url":"https://www.garageraymond.fr"}}</script>
<?php include __DIR__ . '/../footer.php'; ?>

<?php
$page_title = "Auburn : Le Constructeur de Luxe Américain de l'Âge d'Or (1900-1937)";
$page_description = "Auburn Automobile Company, la marque de luxe américaine de l'Indiana. L'Auburn Speedster, Errett Lobban Cord et l'âge d'or du design Art Déco automobile.";
$article = ['title' => 'Auburn : L\'Étoile Filante du Luxe Américain des Années 1930', 'subtitle' => 'Avant de s\'éteindre en 1937, Auburn a produit certaines des plus belles voitures Art Déco de l\'histoire. Son Speedster Boattail reste l\'une des créations les plus désirées des collectionneurs.', 'category' => 'occasion', 'category_name' => 'Achat & Occasion', 'category_color' => '#7c3aed', 'tags' => ['Auburn', 'Art Déco', 'USA', 'Collection'], 'image' => '/Image/marques/auburn-hero.webp', 'date' => '24 Mars 2026', 'author' => 'Arnaud', 'author_role' => 'Historien Auto', 'author_img' => '/Image/arnaud.png', 'author_bio' => 'Arnaud considère l\'Auburn 851 Speedster comme l\'une des 10 plus belles voitures jamais dessinées.', 'reading_time' => '5 min'];
$categories = ['assurance'=>['name'=>'Assurance & Financement','color'=>'#2563eb'],'entretien'=>['name'=>'Entretien & Réparation','color'=>'#dc2626'],'electrique'=>['name'=>'Électrique & Hybride','color'=>'#059669'],'occasion'=>['name'=>'Achat & Occasion','color'=>'#7c3aed'],'moto'=>['name'=>'Moto & 2 Roues','color'=>'#ea580c'],'permis'=>['name'=>'Permis','color'=>'#0891b2']];
include __DIR__ . '/../header.php';
?>
<article>
    <section class="art-hero"><img src="<?php echo $article['image']; ?>" alt="Auburn 851 Speedster Boattail" class="art-hero-bg" onerror="this.setAttribute('data-error','true')" onerror="this.setAttribute('data-error','true')"><div class="art-hero-overlay"></div><div class="art-hero-container"><div class="art-hero-content">
        <nav class="art-breadcrumb"><a href="/">Accueil</a><span class="art-bc-sep">/</span><a href="/marques">Annuaire des Marques</a><span class="art-bc-sep">/</span><a href="/marques/a">Marques en A</a><span class="art-bc-sep">/</span><span>Auburn</span></nav>
        <div class="art-hero-tags"><?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?></div>
        <h1><?php echo $article['title']; ?></h1><p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
        <div class="art-hero-meta"><div class="art-author-pill"><img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"><div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div></div><div class="art-meta-infos"><span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span></div></div>
    </div></div></section>
    <nav class="art-cat-nav"><div class="art-cat-nav-inner"><?php foreach ($categories as $sc => $c): ?><a href="/<?php echo $sc; ?>" class="art-cat-link <?php echo $sc === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $c['color']; ?>"><span class="art-cat-dot" style="background-color: <?php echo $c['color']; ?>"></span><?php echo $c['name']; ?></a><?php endforeach; ?></div></nav>
    <div class="art-layout-wrapper"><div class="art-main-col">
        <div class="art-content">
            <h2>1. D'Auburn, Indiana au sommet du luxe américain</h2>
            <p>L'<strong>Auburn Automobile Company</strong> est fondée en 1900 dans la petite ville d'<strong>Auburn, Indiana</strong> par les frères Frank et Morris Eckhart. Pendant ses premières décennies, la marque produit des voitures honnêtes mais sans éclat. Tout change en 1924 lorsqu'un jeune entrepreneur flamboyant de 30 ans prend les commandes : <strong>Errett Lobban Cord</strong>.</p>
            <p>Cord est un génie du marketing et de la finance. Il transforme Auburn en une marque de <strong>luxe accessible</strong>, positionnée entre Buick et Cadillac. Il crée un empire automobile qui englobe également la marque <strong>Cord</strong> (traction avant révolutionnaire) et <strong>Duesenberg</strong> (la Rolls-Royce américaine). Ces trois marques forment le groupe <strong>Auburn-Cord-Duesenberg (ACD)</strong>, l'apogée du glamour automobile américain des années 1930.</p>

            <h2>2. L'Auburn 851 Speedster Boattail : Le chef-d'œuvre Art Déco</h2>
            <p>En 1935, le designer <strong>Gordon Buehrig</strong> crée l'<strong>Auburn 851 Speedster Boattail</strong>, une voiture qui est unanimement considérée comme l'un des plus beaux designs automobiles de tous les temps. Son arrière en forme de coque de bateau inversée ("boattail"), ses ailes fluides et ses lignes Art Déco en font un objet d'art qui roule. Sous le capot, un <strong>8 cylindres en ligne Lycoming de 150 CV</strong> avec compresseur Schwitzer-Cummins permet d'atteindre les 160 km/h — faramineux pour l'époque.</p>
            <p>Chaque Speedster était livré avec un <strong>certificat signé garantissant qu'elle avait dépassé les 100 mph</strong> (161 km/h) sur le circuit de Bonneville. Une promesse marketing d'une audace folle.</p>

            <h2>3. La chute et l'héritage</h2>
            <p>La Grande Dépression et les difficultés financières de l'empire Cord mènent à la <strong>fermeture d'Auburn en 1937</strong>. L'usine d'Auburn, Indiana, est aujourd'hui le siège du magnifique <strong>Auburn Cord Duesenberg Automobile Museum</strong>, classé monument historique national.</p>
            <p>Les Auburn originales sont très recherchées en collection : une 851 Speedster Boattail se négocie entre <strong>200 000$ et 500 000$</strong> aux enchères, tandis que les répliques (notamment celles de Glenn Pray dans les années 1960-80) sont accessibles autour de 30 000$.</p>
        </div>
    </div>
    <aside class="art-sidebar-right"><div class="art-sidebar-sticky"><div class="art-sidebar-block"><div class="art-sidebar-block-title">Marques en A</div><ul style="list-style:none;padding:0;"><li style="padding:6px 0;"><a href="/marques/amc" style="color:#7c3aed;">→ AMC</a></li><li style="padding:6px 0;"><a href="/marques/austin" style="color:#7c3aed;">→ Austin</a></li></ul></div></div></aside>
    </div>
</article>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://www.garageraymond.fr/marques/auburn"},"headline": <?php echo json_encode($article['title'] ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"description": <?php echo json_encode($page_description ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"datePublished":"2026-03-24T08:00:00+01:00","author":{"@type":"Person","name":"<?php echo $article['author']; ?>"},"publisher":{"@type":"Organization","name":"Le garage expert Auto","url":"https://www.garageraymond.fr"}}</script>
<?php include __DIR__ . '/../footer.php'; ?>

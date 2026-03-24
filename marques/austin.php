<?php
$page_title = "Austin : L'Histoire du Géant Britannique (Seven, Mini, BMC)";
$page_description = "Austin Motor Company, le plus grand constructeur automobile britannique du XXe siècle. De l'Austin Seven à la Mini, en passant par BMC et British Leyland.";
$article = ['title' => 'Austin : Le Constructeur qui a Motorisé la Grande-Bretagne', 'subtitle' => 'Herbert Austin a mis l\'Angleterre sur roues avec l\'Austin Seven en 1922, puis l\'a réinventée avec la Mini en 1959. L\'histoire du plus grand constructeur britannique jamais créé.', 'category' => 'occasion', 'category_name' => 'Achat & Occasion', 'category_color' => '#7c3aed', 'tags' => ['Austin', 'Mini', 'Seven', 'Britannique'], 'image' => '/Image/marques/austin-hero.webp', 'date' => '24 Mars 2026', 'author' => 'Arnaud', 'author_role' => 'Historien Auto', 'author_img' => '/Image/arnaud.png', 'author_bio' => 'Arnaud voit en Austin le Ford britannique : un géant populaire qui a démocratisé l\'automobile sur une île entière.', 'reading_time' => '7 min'];
$categories = ['assurance'=>['name'=>'Assurance & Financement','color'=>'#2563eb'],'entretien'=>['name'=>'Entretien & Réparation','color'=>'#dc2626'],'electrique'=>['name'=>'Électrique & Hybride','color'=>'#059669'],'occasion'=>['name'=>'Achat & Occasion','color'=>'#7c3aed'],'moto'=>['name'=>'Moto & 2 Roues','color'=>'#ea580c'],'permis'=>['name'=>'Permis','color'=>'#0891b2']];
include __DIR__ . '/../header.php';
?>
<article>
    <section class="art-hero"><img src="<?php echo $article['image']; ?>" alt="Austin Seven classique" class="art-hero-bg"><div class="art-hero-overlay"></div><div class="art-hero-container"><div class="art-hero-content">
        <nav class="art-breadcrumb"><a href="/">Accueil</a><span class="art-bc-sep">/</span><a href="/marques">Annuaire des Marques</a><span class="art-bc-sep">/</span><a href="/marques/a">Marques en A</a><span class="art-bc-sep">/</span><span>Austin</span></nav>
        <div class="art-hero-tags"><?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?></div>
        <h1><?php echo $article['title']; ?></h1><p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
        <div class="art-hero-meta"><div class="art-author-pill"><img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"><div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div></div><div class="art-meta-infos"><span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span></div></div>
    </div></div></section>
    <nav class="art-cat-nav"><div class="art-cat-nav-inner"><?php foreach ($categories as $sc => $c): ?><a href="/<?php echo $sc; ?>" class="art-cat-link <?php echo $sc === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $c['color']; ?>"><span class="art-cat-dot" style="background-color: <?php echo $c['color']; ?>"></span><?php echo $c['name']; ?></a><?php endforeach; ?></div></nav>
    <div class="art-layout-wrapper"><div class="art-main-col">
        <div class="art-content">
            <h2>1. Herbert Austin : Le Ford anglais</h2>
            <p><strong>Sir Herbert Austin</strong> (1866-1941) fonde l'<strong>Austin Motor Company</strong> en 1905 à <strong>Longbridge</strong>, dans la banlieue de Birmingham. L'usine de Longbridge deviendra le plus grand site de production automobile de Grande-Bretagne, employant jusqu'à 40 000 personnes à son apogée. Austin est le constructeur qui va <strong>démocratiser l'automobile en Angleterre</strong>, exactement comme Ford l'a fait aux États-Unis.</p>

            <h2>2. L'Austin Seven : La voiture du peuple britannique</h2>
            <p>En 1922, Herbert Austin lance l'<strong>Austin Seven</strong> ("Baby Austin"), une minuscule voiture à moteur 4 cylindres 747cc de 10 CV, capable de transporter 4 passagers à 50 mph. Vendue à partir de <strong>£165</strong> (l'équivalent de 2-3 mois de salaire d'un ouvrier), elle rend l'automobile accessible à la classe moyenne britannique pour la première fois. Plus de <strong>290 000 exemplaires</strong> sont produits entre 1922 et 1939.</p>
            <p>L'Austin Seven est si populaire qu'elle est construite sous licence dans le monde entier : en France par Rosengart, au Japon par Nissan (Datsun), en Allemagne par BMW (la Dixi est une Seven sous licence, c'est la première voiture BMW !), et aux États-Unis par American Austin.</p>

            <h2>3. La fusion BMC et la naissance de la Mini</h2>
            <p>En 1952, Austin fusionne avec son rival historique Morris pour former la <strong>British Motor Corporation (BMC)</strong>, le plus grand groupe automobile britannique. C'est au sein de BMC que l'ingénieur <strong>Alec Issigonis</strong> conçoit la <strong>Mini</strong> (1959), vendue sous les deux badges Austin et Morris. La Mini révolutionne l'automobile mondiale avec sa <strong>traction avant et son moteur transversal</strong>, un layout repris par 90% des voitures actuelles.</p>

            <div class="art-table-wrap"><table class="art-table">
                <thead><tr><th>Modèle Austin</th><th>Période</th><th>Importance historique</th></tr></thead>
                <tbody>
                    <tr><td><strong>Austin Seven</strong></td><td>1922-1939</td><td>La Ford T britannique. A démocratisé l'automobile en Grande-Bretagne.</td></tr>
                    <tr><td><strong>Austin 10 Cambridge</strong></td><td>1932-1947</td><td>La berline familiale de la classe moyenne. ~290 000 exemplaires.</td></tr>
                    <tr><td><strong>Austin A30/A35</strong></td><td>1951-1968</td><td>La petite voiture populaire d'après-guerre. Simple, fiable, adorable.</td></tr>
                    <tr><td><strong>Austin Mini</strong></td><td>1959-2000</td><td>La voiture qui a réinventé le packaging automobile mondial. Plus de 5.3 millions d'unités.</td></tr>
                    <tr><td><strong>Austin 1100/1300</strong></td><td>1962-1974</td><td>La voiture la plus vendue en Grande-Bretagne pendant 8 années consécutives.</td></tr>
                    <tr><td><strong>Austin-Morris Maxi</strong></td><td>1969-1981</td><td>La première voiture britannique à hayon 5 portes.</td></tr>
                    <tr><td><strong>Austin Metro</strong></td><td>1980-1998</td><td>La "British Car to beat the world" de British Leyland. Succès modéré.</td></tr>
                </tbody>
            </table></div>

            <h2>4. Le déclin : British Leyland et la fin</h2>
            <p>En 1968, BMC fusionne avec Leyland Motor Corporation pour former <strong>British Leyland (BL)</strong>. C'est le début de la fin : grèves massives, qualité en chute libre, modèles vieillissants. Le gouvernement britannique nationalise BL en 1975. La marque Austin survit sous les noms Austin-Rover puis Rover Group, avant de disparaître définitivement en 1987. L'usine de Longbridge continue sous BMW (production de la Mini moderne) puis sous le groupe MG (MG Motor, aujourd'hui chinois SAIC).</p>
        </div>
    </div>
    <aside class="art-sidebar-right"><div class="art-sidebar-sticky"><div class="art-sidebar-block"><div class="art-sidebar-block-title">Marques en A</div><ul style="list-style:none;padding:0;"><li style="padding:6px 0;"><a href="/marques/austin-healey" style="color:#7c3aed;">→ Austin-Healey</a></li><li style="padding:6px 0;"><a href="/marques/aston-martin" style="color:#7c3aed;">→ Aston Martin</a></li></ul></div></div></aside>
    </div>
</article>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://www.garageraymond.fr/marques/austin"},"headline":"<?php echo addslashes($article['title']); ?>","description":"<?php echo addslashes($page_description); ?>","datePublished":"2026-03-24T08:00:00+01:00","author":{"@type":"Person","name":"<?php echo $article['author']; ?>"},"publisher":{"@type":"Organization","name":"Le garage expert Auto","url":"https://www.garageraymond.fr"}}</script>
<?php include __DIR__ . '/../footer.php'; ?>

<?php
$page_title = "Arrinera : La Première Supercar Polonaise (Hussarya)";
$page_description = "Arrinera Automotive, le constructeur polonais de la Hussarya. Histoire de la première supercar made in Poland et son homologation GT3.";
$article = ['title' => 'Arrinera Hussarya : La Première Supercar de Pologne', 'subtitle' => 'La Pologne n\'est pas connue pour ses supercars. Arrinera veut changer cela avec la Hussarya, un coupé V8 de 650 CV baptisé en hommage aux Hussards ailés.', 'category' => 'occasion', 'category_name' => 'Achat & Occasion', 'category_color' => '#7c3aed', 'tags' => ['Arrinera', 'Pologne', 'Supercar', 'Hussarya'], 'image' => '/Image/marques/arrinera-hero.webp', 'date' => '24 Mars 2026', 'author' => 'Arnaud', 'author_role' => 'Expert Supercars', 'author_img' => '/Image/arnaud.png', 'author_bio' => 'Arnaud suit de près les projets de supercars émergeant de pays inattendus.', 'reading_time' => '4 min'];
$categories = ['assurance'=>['name'=>'Assurance & Financement','color'=>'#2563eb'],'entretien'=>['name'=>'Entretien & Réparation','color'=>'#dc2626'],'electrique'=>['name'=>'Électrique & Hybride','color'=>'#059669'],'occasion'=>['name'=>'Achat & Occasion','color'=>'#7c3aed'],'moto'=>['name'=>'Moto & 2 Roues','color'=>'#ea580c'],'permis'=>['name'=>'Permis','color'=>'#0891b2']];
include __DIR__ . '/../header.php';
?>
<article>
    <section class="art-hero"><img src="<?php echo $article['image']; ?>" alt="Arrinera Hussarya GT" class="art-hero-bg"><div class="art-hero-overlay"></div><div class="art-hero-container"><div class="art-hero-content">
        <nav class="art-breadcrumb"><a href="/">Accueil</a><span class="art-bc-sep">/</span><a href="/marques">Annuaire des Marques</a><span class="art-bc-sep">/</span><a href="/marques/a">Marques en A</a><span class="art-bc-sep">/</span><span>Arrinera</span></nav>
        <div class="art-hero-tags"><?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?></div>
        <h1><?php echo $article['title']; ?></h1><p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
        <div class="art-hero-meta"><div class="art-author-pill"><img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"><div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div></div><div class="art-meta-infos"><span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span></div></div>
    </div></div></section>
    <nav class="art-cat-nav"><div class="art-cat-nav-inner"><?php foreach ($categories as $sc => $c): ?><a href="/<?php echo $sc; ?>" class="art-cat-link <?php echo $sc === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $c['color']; ?>"><span class="art-cat-dot" style="background-color: <?php echo $c['color']; ?>"></span><?php echo $c['name']; ?></a><?php endforeach; ?></div></nav>
    <div class="art-layout-wrapper"><div class="art-main-col">
        <div class="art-content">
            <h2>1. Le rêve polonais d'une supercar nationale</h2>
            <p><strong>Arrinera Automotive S.A.</strong> est fondée en 2008 à Varsovie par <strong>Łukasz Tomkiewicz</strong> avec une ambition folle : créer la <strong>première supercar polonaise</strong> de l'histoire. Le nom "Hussarya" rend hommage aux <strong>Hussards ailés</strong> (Husaria), la cavalerie lourde d'élite du Royaume de Pologne-Lituanie, réputée invincible aux XVIe-XVIIe siècles.</p>

            <h2>2. La Hussarya : V8 GM de 650 CV</h2>
            <p>La <strong>Hussarya</strong> embarque un <strong>V8 GM 6.2L LS9 compressé</strong> (le même que la Corvette ZR1) développant <strong>650 CV</strong>, logé dans un châssis tubulaire en acier et habillé d'une carrosserie en fibre de carbone. Le poids annoncé de 1 300 kg permettrait un 0-100 km/h en 3.2 secondes et une vitesse de pointe de 340 km/h.</p>
            <p>La version <strong>Hussarya GT</strong> est la déclinaison compétition, homologuée GT3 par la FIA pour courir dans les championnats d'endurance européens. C'est par la course qu'Arrinera espère asseoir sa crédibilité avant de lancer une version route.</p>

            <h2>3. Un projet encore en développement</h2>
            <p>En 2026, la Hussarya n'a pas encore atteint la production en série. Le projet a connu des difficultés de financement et des retards de développement typiques des startups automobiles. Cependant, les prototypes fonctionnels existent et ont été présentés dans plusieurs salons internationaux. Si Arrinera parvient à financer sa production, elle pourrait rejoindre le club très fermé des constructeurs de supercars d'Europe de l'Est.</p>
        </div>
    </div>
    <aside class="art-sidebar-right"><div class="art-sidebar-sticky"><div class="art-sidebar-block"><div class="art-sidebar-block-title">Marques en A</div><ul style="list-style:none;padding:0;"><li style="padding:6px 0;"><a href="/marques/ariel" style="color:#7c3aed;">→ Ariel</a></li><li style="padding:6px 0;"><a href="/marques/apollo" style="color:#7c3aed;">→ Apollo</a></li></ul></div></div></aside>
    </div>
</article>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://www.garageraymond.fr/marques/arrinera"},"headline":"<?php echo addslashes($article['title']); ?>","description":"<?php echo addslashes($page_description); ?>","datePublished":"2026-03-24T08:00:00+01:00","author":{"@type":"Person","name":"<?php echo $article['author']; ?>"},"publisher":{"@type":"Organization","name":"Le garage expert Auto","url":"https://www.garageraymond.fr"}}</script>
<?php include __DIR__ . '/../footer.php'; ?>

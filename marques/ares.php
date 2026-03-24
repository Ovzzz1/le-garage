<?php
$page_title = "Ares Design : Le Carrossier Moderne de Modène (Hypercars sur Mesure)";
$page_description = "Ares Design, le carrossier-constructeur de Modène fondé par Dany Bahar. Panther, S1 Project et restomod sur base Corvette : l'artisan du sur-mesure automobile.";
$article = ['title' => 'Ares Design : Le Dernier Grand Carrossier Italien', 'subtitle' => 'Fondé à Modène par un ancien PDG de Lotus, Ares ressuscite l\'art de la carrosserie sur mesure au XXIe siècle. Des hypercars uniques aux restomods de rêve.', 'category' => 'occasion', 'category_name' => 'Achat & Occasion', 'category_color' => '#7c3aed', 'tags' => ['Ares', 'Modène', 'Carrossier', 'Sur Mesure'], 'image' => '/Image/marques/ares-hero.webp', 'date' => '24 Mars 2026', 'author' => 'Arnaud', 'author_role' => 'Expert Supercars', 'author_img' => '/Image/arnaud.png', 'author_bio' => 'Arnaud est fasciné par les carrossiers qui maintiennent vivante la tradition italienne de la "bella macchina" sur mesure.', 'reading_time' => '4 min'];
$categories = ['assurance'=>['name'=>'Assurance & Financement','color'=>'#2563eb'],'entretien'=>['name'=>'Entretien & Réparation','color'=>'#dc2626'],'electrique'=>['name'=>'Électrique & Hybride','color'=>'#059669'],'occasion'=>['name'=>'Achat & Occasion','color'=>'#7c3aed'],'moto'=>['name'=>'Moto & 2 Roues','color'=>'#ea580c'],'permis'=>['name'=>'Permis','color'=>'#0891b2']];
include __DIR__ . '/../header.php';
?>
<article>
    <section class="art-hero"><img src="<?php echo $article['image']; ?>" alt="Ares S1 Project bleu" class="art-hero-bg" onerror="this.setAttribute('data-error','true')" onerror="this.setAttribute('data-error','true')"><div class="art-hero-overlay"></div><div class="art-hero-container"><div class="art-hero-content">
        <nav class="art-breadcrumb"><a href="/">Accueil</a><span class="art-bc-sep">/</span><a href="/marques">Annuaire des Marques</a><span class="art-bc-sep">/</span><a href="/marques/a">Marques en A</a><span class="art-bc-sep">/</span><span>Ares</span></nav>
        <div class="art-hero-tags"><?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?></div>
        <h1><?php echo $article['title']; ?></h1><p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
        <div class="art-hero-meta"><div class="art-author-pill"><img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"><div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div></div><div class="art-meta-infos"><span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span></div></div>
    </div></div></section>
    <nav class="art-cat-nav"><div class="art-cat-nav-inner"><?php foreach ($categories as $sc => $c): ?><a href="/<?php echo $sc; ?>" class="art-cat-link <?php echo $sc === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $c['color']; ?>"><span class="art-cat-dot" style="background-color: <?php echo $c['color']; ?>"></span><?php echo $c['name']; ?></a><?php endforeach; ?></div></nav>
    <div class="art-layout-wrapper"><div class="art-main-col">
        <div class="art-content">
            <h2>1. Dany Bahar et la renaissance du carrossier italien</h2>
            <p><strong>Ares Design</strong> est fondée en 2014 à <strong>Modène</strong> (la capitale mondiale de la supercar, abritant aussi Ferrari, Maserati, Pagani et Lamborghini) par <strong>Dany Bahar</strong>, ancien PDG de Lotus Cars. Son concept : faire revivre la grande tradition des carrossiers italiens (Pininfarina, Bertone, Zagato) en proposant des voitures <strong>entièrement sur mesure</strong>, construites à l'unité ou en très petite série.</p>

            <h2>2. Deux activités : Restomods et créations originales</h2>
            <p>Ares opère sur deux axes :</p>
            <ul>
                <li><strong>Les Restomods :</strong> Ares prend des voitures existantes (Corvette C8, Ferrari 412, Bentley Continental) et les transforme radicalement avec de nouvelles carrosseries en aluminium ou carbone, réalisées à la main dans leur atelier de Modène. Le résultat : des pièces uniques de plus de 500 000€.</li>
                <li><strong>Les créations originales :</strong> L'<strong>Ares S1 Project</strong>, une supercar à moteur central V8 bi-turbo de 715 CV sur châssis carbone, et la <strong>Panther ProgettoUno</strong>, un coupé GT radical (V10 Lamborghini), sont des créations 100% Ares.</li>
            </ul>

            <div class="art-table-wrap"><table class="art-table">
                <thead><tr><th>Création Ares</th><th>Base technique</th><th>Moteur</th><th>Prix estimé</th></tr></thead>
                <tbody>
                    <tr><td><strong>S1 Project</strong></td><td>Châssis propre carbone</td><td>V8 bi-turbo 715 CV</td><td>~500 000 €</td></tr>
                    <tr><td><strong>Panther ProgettoUno</strong></td><td>Lamborghini Huracán</td><td>V10 5.2L 650 CV</td><td>~650 000 €</td></tr>
                    <tr><td><strong>S Project (coupé Corvette)</strong></td><td>Corvette C8</td><td>V8 6.2L LT2</td><td>~250 000 €</td></tr>
                    <tr><td><strong>Wami Lalique Spyder</strong></td><td>Porsche 911 (992)</td><td>Flat-6 3.0L Turbo</td><td>Sur demande</td></tr>
                </tbody>
            </table></div>
        </div>
    </div>
    <aside class="art-sidebar-right"><div class="art-sidebar-sticky"><div class="art-sidebar-block"><div class="art-sidebar-block-title">Marques en A</div><ul style="list-style:none;padding:0;"><li style="padding:6px 0;"><a href="/marques/apollo" style="color:#7c3aed;">→ Apollo</a></li><li style="padding:6px 0;"><a href="/marques/aspark" style="color:#7c3aed;">→ Aspark</a></li></ul></div></div></aside>
    </div>
</article>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://www.garageraymond.fr/marques/ares"},"headline":"<?php echo addslashes($article['title']); ?>","description":"<?php echo addslashes($page_description); ?>","datePublished":"2026-03-24T08:00:00+01:00","author":{"@type":"Person","name":"<?php echo $article['author']; ?>"},"publisher":{"@type":"Organization","name":"Le garage expert Auto","url":"https://www.garageraymond.fr"}}</script>
<?php include __DIR__ . '/../footer.php'; ?>

<?php
$page_title = "Apollo Automobil : L'Hypercar Allemande Intensa Emozione";
$page_description = "Apollo Automobil, constructeur allemand d'hypercars. De la Gumpert Apollo à l'Intensa Emozione V12, histoire d'une marque confidentielle à la quête de la perfection.";
$article = ['title' => 'Apollo Automobil : L\'Hypercar Allemande que Peu Connaissent', 'subtitle' => 'Née des cendres de Gumpert, Apollo Automobil crée des hypercars V12 atmosphériques d\'une brutalité rare. Découverte d\'un constructeur hors norme.', 'category' => 'occasion', 'category_name' => 'Achat & Occasion', 'category_color' => '#7c3aed', 'tags' => ['Apollo', 'Hypercar', 'Allemagne', 'V12'], 'image' => '', 'date' => '24 Mars 2026', 'author' => 'Arnaud', 'author_role' => 'Expert Supercars', 'author_img' => '/Image/arnaud.png', 'author_bio' => 'Arnaud traque les constructeurs d\'hypercars ultra-confidentiels et considère l\'IE comme l\'une des créations les plus pures de ce siècle.', 'reading_time' => '5 min'];
$categories = ['assurance'=>['name'=>'Assurance & Financement','color'=>'#2563eb'],'entretien'=>['name'=>'Entretien & Réparation','color'=>'#dc2626'],'electrique'=>['name'=>'Électrique & Hybride','color'=>'#059669'],'occasion'=>['name'=>'Achat & Occasion','color'=>'#7c3aed'],'moto'=>['name'=>'Moto & 2 Roues','color'=>'#ea580c'],'permis'=>['name'=>'Permis','color'=>'#0891b2']];
include __DIR__ . '/../header.php';
?>
<article>
    <section class="art-hero"><img src="<?php echo $article['image']; ?>" alt="Apollo Intensa Emozione noire sur circuit" class="art-hero-bg" onerror="this.setAttribute('data-error','true')" onerror="this.setAttribute('data-error','true')"><div class="art-hero-overlay"></div><div class="art-hero-container"><div class="art-hero-content">
        <nav class="art-breadcrumb"><a href="/">Accueil</a><span class="art-bc-sep">/</span><a href="/marques">Annuaire des Marques</a><span class="art-bc-sep">/</span><a href="/marques/a">Marques en A</a><span class="art-bc-sep">/</span><span>Apollo</span></nav>
        <div class="art-hero-tags"><?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?></div>
        <h1><?php echo $article['title']; ?></h1><p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
        <div class="art-hero-meta"><div class="art-author-pill"><img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"><div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div></div><div class="art-meta-infos"><span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span></div></div>
    </div></div></section>
    <nav class="art-cat-nav"><div class="art-cat-nav-inner"><?php foreach ($categories as $sc => $c): ?><a href="/<?php echo $sc; ?>" class="art-cat-link <?php echo $sc === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $c['color']; ?>"><span class="art-cat-dot" style="background-color: <?php echo $c['color']; ?>"></span><?php echo $c['name']; ?></a><?php endforeach; ?></div></nav>
    <div class="art-layout-wrapper"><div class="art-main-col">
        <div class="art-content">
            <h2>1. De Gumpert à Apollo : Renaissance par le design</h2>
            <p>Apollo Automobil est née des cendres de <strong>Gumpert Sportwagenmanufaktur</strong>, fondée en 2004 par <strong>Roland Gumpert</strong> (ex-directeur d'Audi Sport). La Gumpert Apollo, une supercar à moteur V8 bi-turbo Audi de 650 CV, avait fait sensation en établissant un temps record au Nürburgring. Mais la crise financière de 2008 a conduit Gumpert à la faillite en 2013.</p>
            <p>En 2016, des investisseurs de Hong Kong rachètent les actifs et rebaptisent la marque <strong>Apollo Automobil</strong>, basée à Denkendorf (Bavière). La philosophie change radicalement : exit le V8 turbo Audi, place à un <strong>V12 atmosphérique Ferrari</strong> de 6.3 litres et à un design émotionnel signé par le studio de design basé à Nuremberg.</p>

            <h2>2. L'Intensa Emozione : Un V12 atmosphérique en 2024</h2>
            <p>La star d'Apollo est l'<strong>Intensa Emozione (IE)</strong>, dévoilée en 2017. Dans un monde où les hypercars sont toutes turbocompressées ou hybrides, l'IE fait un choix radical : un <strong>V12 6.3L atmosphérique</strong> (dérivé du Ferrari F12) développant <strong>780 CV à 8 500 tr/min</strong>, avec un châssis monocoque intégralement en fibre de carbone pesant seulement <strong>1 250 kg</strong>.</p>
            <p>Limitée à <strong>10 exemplaires</strong> au prix d'environ <strong>2.7 millions d'euros</strong>, l'IE est conçue comme une voiture de piste pure : pas d'homologation route, pas de compromis de confort. C'est un prototype de LMP déguisé en voiture de route... sans la route.</p>

            <div class="art-table-wrap"><table class="art-table">
                <thead><tr><th>Modèle</th><th>Moteur</th><th>Puissance</th><th>Poids</th><th>Production</th></tr></thead>
                <tbody>
                    <tr><td><strong>Gumpert Apollo (originale)</strong></td><td>V8 4.2L bi-turbo Audi</td><td>650 CV</td><td>1 200 kg</td><td>~86 exemplaires</td></tr>
                    <tr><td><strong>Apollo Intensa Emozione</strong></td><td>V12 6.3L atmo</td><td>780 CV</td><td>1 250 kg</td><td>10 exemplaires</td></tr>
                    <tr><td><strong>Apollo Project EVO</strong></td><td>V12 hybride</td><td>~800+ CV</td><td>TBA</td><td>Annoncé (en développement)</td></tr>
                </tbody>
            </table></div>
        </div>
    </div>
    <aside class="art-sidebar-right"><div class="art-sidebar-sticky"><div class="art-sidebar-block"><div class="art-sidebar-block-title">Marques en A</div><ul style="list-style:none;padding:0;"><li style="padding:6px 0;"><a href="/marques/aston-martin" style="color:#7c3aed;">→ Aston Martin</a></li><li style="padding:6px 0;"><a href="/marques/ariel" style="color:#7c3aed;">→ Ariel</a></li></ul></div></div></aside>
    </div>
</article>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://www.garageraymond.fr/marques/apollo"},"headline": <?php echo json_encode($article['title'] ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"description": <?php echo json_encode($page_description ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"datePublished":"2026-03-24T08:00:00+01:00","author":{"@type":"Person","name":"<?php echo $article['author']; ?>"},"publisher":{"@type":"Organization","name":"Le garage expert Auto","url":"https://www.garageraymond.fr"}}</script>
<?php include __DIR__ . '/../footer.php'; ?>

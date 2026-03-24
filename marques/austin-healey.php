<?php
$page_title = "Austin-Healey : L'Histoire des Roadsters Légendaires (100, 3000, Sprite)";
$page_description = "Austin-Healey, la marque de roadsters sportifs britanniques. Big Healey 3000, Sprite Frogeye et l'âge d'or du roadster anglais : le guide complet.";
$article = ['title' => 'Austin-Healey : Les Plus Beaux Roadsters d\'Angleterre', 'subtitle' => 'Donald Healey et l\'alliance avec BMC ont créé des roadsters qui incarnent l\'essence même du plaisir automobile britannique. Du "Frogeye" Sprite au Big Healey 3000.', 'category' => 'occasion', 'category_name' => 'Achat & Occasion', 'category_color' => '#7c3aed', 'tags' => ['Austin-Healey', '3000', 'Sprite', 'Roadster'], 'image' => '/Image/marques/austin-healey-hero.webp', 'date' => '24 Mars 2026', 'author' => 'Arnaud', 'author_role' => 'Expert Classiques', 'author_img' => '/Image/arnaud.png', 'author_bio' => 'Arnaud a roulé en Austin-Healey 3000 Mk3 sur les routes du Lake District. Un souvenir indélébile de vent dans les cheveux et de ronronnement de 6 cylindres.', 'reading_time' => '6 min'];
$categories = ['assurance'=>['name'=>'Assurance & Financement','color'=>'#2563eb'],'entretien'=>['name'=>'Entretien & Réparation','color'=>'#dc2626'],'electrique'=>['name'=>'Électrique & Hybride','color'=>'#059669'],'occasion'=>['name'=>'Achat & Occasion','color'=>'#7c3aed'],'moto'=>['name'=>'Moto & 2 Roues','color'=>'#ea580c'],'permis'=>['name'=>'Permis','color'=>'#0891b2']];
include __DIR__ . '/../header.php';
?>
<article>
    <section class="art-hero"><img src="<?php echo $article['image']; ?>" alt="Austin-Healey 3000 rouge décapoté" class="art-hero-bg" onerror="this.setAttribute('data-error','true')" onerror="this.setAttribute('data-error','true')"><div class="art-hero-overlay"></div><div class="art-hero-container"><div class="art-hero-content">
        <nav class="art-breadcrumb"><a href="/">Accueil</a><span class="art-bc-sep">/</span><a href="/marques">Annuaire des Marques</a><span class="art-bc-sep">/</span><a href="/marques/a">Marques en A</a><span class="art-bc-sep">/</span><span>Austin-Healey</span></nav>
        <div class="art-hero-tags"><?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?></div>
        <h1><?php echo $article['title']; ?></h1><p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
        <div class="art-hero-meta"><div class="art-author-pill"><img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"><div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div></div><div class="art-meta-infos"><span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span></div></div>
    </div></div></section>
    <nav class="art-cat-nav"><div class="art-cat-nav-inner"><?php foreach ($categories as $sc => $c): ?><a href="/<?php echo $sc; ?>" class="art-cat-link <?php echo $sc === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $c['color']; ?>"><span class="art-cat-dot" style="background-color: <?php echo $c['color']; ?>"></span><?php echo $c['name']; ?></a><?php endforeach; ?></div></nav>
    <div class="art-layout-wrapper"><div class="art-main-col">
        <div class="art-content">
            <h2>1. Donald Healey et le coup de génie de 1952</h2>
            <p><strong>Donald Mitchell Healey</strong> (1898-1988) est un ingénieur, pilote rallyman et constructeur anglais de Perranporth, Cornouailles. En 1945, il fonde sa propre marque (Donald Healey Motor Company) et produit des voitures sportives artisanales à Warwick. Mais le tournant arrive en 1952 au <strong>Salon de l'Automobile de Londres (Earls Court)</strong>.</p>
            <p>Healey y présente le prototype du <strong>"Healey Hundred"</strong>, un roadster sportif élégant propulsé par un 4 cylindres Austin de 2.6L. Le président de BMC, <strong>Leonard Lord</strong>, tombe sous le charme et propose à Healey un accord historique : BMC fabriquera la voiture dans ses usines de Longbridge, et elle sera vendue sous le nom <strong>"Austin-Healey"</strong>. C'est un gagnant-gagnant génial : Healey apporte le design et la crédibilité sportive, BMC apporte les composants, les usines et le réseau de concessionnaires mondial.</p>

            <h2>2. Les modèles légendaires</h2>
            <div class="art-table-wrap"><table class="art-table">
                <thead><tr><th>Modèle</th><th>Période</th><th>Moteur</th><th>Cote occasion 2026</th></tr></thead>
                <tbody>
                    <tr><td><strong>100 (BN1/BN2)</strong></td><td>1953-1956</td><td>4 cyl. 2.6L Austin (90 CV)</td><td>40 000€ à 80 000€</td></tr>
                    <tr><td><strong>100/6 (BN4/BN6)</strong></td><td>1956-1959</td><td>6 cyl. BMC 2.6L (117 CV)</td><td>35 000€ à 70 000€</td></tr>
                    <tr><td><strong>3000 Mk1-3 "Big Healey"</strong></td><td>1959-1967</td><td>6 cyl. BMC 3.0L (132→150 CV)</td><td>50 000€ à 120 000€</td></tr>
                    <tr><td><strong>Sprite Mk1 "Frogeye"</strong></td><td>1958-1961</td><td>4 cyl. BMC 948cc (43 CV)</td><td>25 000€ à 45 000€</td></tr>
                    <tr><td><strong>Sprite Mk2-4</strong></td><td>1961-1971</td><td>4 cyl. 1098-1275cc</td><td>12 000€ à 25 000€</td></tr>
                </tbody>
            </table></div>

            <h2>3. Le "Big Healey" 3000 : Le roi des roadsters</h2>
            <p>L'<strong>Austin-Healey 3000</strong> (surnommé "Big Healey" pour le distinguer du petit Sprite) est la quintessence du roadster britannique des années 1960. Son 6 cylindres en ligne de 3 litres produit un grondement rauque et aristocratique, le châssis est ferme mais plein de sensations, et l'habitacle en cuir Connolly sent le luxe discret. En compétition, le 3000 remporte le <strong>Rallye des Alpes</strong>, le <strong>Liège-Rome-Liège</strong> et brille aux 12 Heures de Sebring.</p>
            <p>Le 3000 MkIII Phase 2 (BJ8), produit de 1964 à 1967, est le plus recherché des collectionneurs, combinant puissance maximale (150 CV), confort amélioré et un tableau de bord en noyer magnifique.</p>

            <h2>4. Le Sprite "Frogeye" : L'enfant joyeux</h2>
            <p>Le <strong>Sprite Mk1</strong> (1958-1961), surnommé "Frogeye" ("yeux de grenouille") à cause de ses phares montés sur le capot, est l'entrée de gamme absolue de la sportive anglaise. Avec ses 43 CV et ses 580 kg, il ne décoiffe pas les cheveux, mais il offre un <strong>plaisir de conduite pur</strong> dans un format poche à un prix accessible. C'est l'ancêtre spirituel de la Mazda MX-5.</p>

            <h2>5. La fin : 1967</h2>
            <p>En 1967, les nouvelles réglementations américaines sur les émissions et la sécurité rendent le Big Healey non conforme. BMC (devenu British Leyland) décide de ne pas investir dans une mise aux normes et arrête la production. La marque Austin-Healey disparaît officiellement, remplacée dans la gamme par le MGB. Donald Healey continuera à travailler comme consultant pour Jensen Motors.</p>
        </div>
    </div>
    <aside class="art-sidebar-right"><div class="art-sidebar-sticky"><div class="art-sidebar-block"><div class="art-sidebar-block-title">Marques en A</div><ul style="list-style:none;padding:0;"><li style="padding:6px 0;"><a href="/marques/austin" style="color:#7c3aed;">→ Austin</a></li><li style="padding:6px 0;"><a href="/marques/aston-martin" style="color:#7c3aed;">→ Aston Martin</a></li></ul></div></div></aside>
    </div>
</article>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://www.garageraymond.fr/marques/austin-healey"},"headline":"<?php echo addslashes($article['title']); ?>","description":"<?php echo addslashes($page_description); ?>","datePublished":"2026-03-24T08:00:00+01:00","author":{"@type":"Person","name":"<?php echo $article['author']; ?>"},"publisher":{"@type":"Organization","name":"Le garage expert Auto","url":"https://www.garageraymond.fr"}}</script>
<?php include __DIR__ . '/../footer.php'; ?>

<?php
$page_title = "Aixam : Le Leader Français de la Voiture Sans Permis (VSP)";
$page_description = "Aixam, N°1 européen des voitures sans permis. Histoire de la marque savoyarde, gamme Coupé/Crossover/e-Aixam électrique, prix et homologation AM.";
$article = ['title' => 'Aixam : Tout Savoir sur le N°1 de la Voiture Sans Permis', 'subtitle' => 'De la Savoie aux rues de toute l\'Europe, Aixam domine le marché des VSP depuis 40 ans. Gamme, prix, motorisations diesel et électrique : le guide complet.', 'category' => 'occasion', 'category_name' => 'Achat & Occasion', 'category_color' => '#7c3aed', 'tags' => ['Aixam', 'VSP', 'Sans Permis', 'France'], 'image' => '/Image/marques/aixam-hero.webp', 'date' => '24 Mars 2026', 'author' => 'Arnaud', 'author_role' => 'Expert Mobilité', 'author_img' => '/Image/arnaud.png', 'author_bio' => 'Arnaud a testé les dernières Aixam électriques et est convaincu que les VSP ont un rôle majeur à jouer dans la mobilité urbaine de demain.', 'reading_time' => '7 min'];
$categories = ['assurance'=>['name'=>'Assurance & Financement','color'=>'#2563eb'],'entretien'=>['name'=>'Entretien & Réparation','color'=>'#dc2626'],'electrique'=>['name'=>'Électrique & Hybride','color'=>'#059669'],'occasion'=>['name'=>'Achat & Occasion','color'=>'#7c3aed'],'moto'=>['name'=>'Moto & 2 Roues','color'=>'#ea580c'],'permis'=>['name'=>'Permis','color'=>'#0891b2']];
include __DIR__ . '/../header.php';
?>
<article>
    <section class="art-hero"><img src="<?php echo $article['image']; ?>" alt="Aixam Coupé GTI rouge en ville" class="art-hero-bg" onerror="this.setAttribute('data-error','true')" onerror="this.setAttribute('data-error','true')"><div class="art-hero-overlay"></div><div class="art-hero-container"><div class="art-hero-content">
        <nav class="art-breadcrumb"><a href="/">Accueil</a><span class="art-bc-sep">/</span><a href="/marques">Annuaire des Marques</a><span class="art-bc-sep">/</span><a href="/marques/a">Marques en A</a><span class="art-bc-sep">/</span><span>Aixam</span></nav>
        <div class="art-hero-tags"><?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?></div>
        <h1><?php echo $article['title']; ?></h1><p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
        <div class="art-hero-meta"><div class="art-author-pill"><img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"><div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div></div><div class="art-meta-infos"><span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span></div></div>
    </div></div></section>
    <nav class="art-cat-nav"><div class="art-cat-nav-inner"><?php foreach ($categories as $sc => $c): ?><a href="/<?php echo $sc; ?>" class="art-cat-link <?php echo $sc === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $c['color']; ?>"><span class="art-cat-dot" style="background-color: <?php echo $c['color']; ?>"></span><?php echo $c['name']; ?></a><?php endforeach; ?></div></nav>
    <div class="art-layout-wrapper"><div class="art-main-col">

        <div class="art-tldr"><div class="art-tldr-title">🏔️ Aixam en bref</div><ul>
            <li><strong>Fondation :</strong> 1983 à Aix-les-Bains (Savoie, France).</li>
            <li><strong>Statut :</strong> N°1 européen des voitures sans permis (VSP). Plus de 50% de parts de marché en France.</li>
            <li><strong>Usine :</strong> Production 100% française à Aix-les-Bains. Plus de 15 000 véhicules/an.</li>
            <li><strong>Marques du groupe :</strong> Aixam, Mega (utilitaires VSP), e-Aixam (électrique).</li>
            <li><strong>Conduite :</strong> Accessible dès 14 ans avec le permis AM (ex-BSR) ou sans permis pour les personnes nées avant 1988.</li>
        </ul></div>

        <div class="art-content">
            <h2 id="histoire">1. De la Savoie à la conquête européenne</h2>
            <p><strong>Aixam</strong> est née en 1983 de la fusion de deux constructeurs de micro-voitures : Arola et Alma. Installée à <strong>Aix-les-Bains</strong>, dans les Alpes françaises, la société s'est imposée en une décennie comme le leader incontesté du segment des <strong>voitures sans permis (VSP)</strong> — ou "voiturettes" comme les surnomment (parfois avec condescendance) les automobilistes classiques.</p>
            <p>Pourtant, Aixam n'a rien d'un jouet : l'entreprise emploie plus de <strong>500 salariés</strong>, produit plus de 15 000 véhicules par an sur son site savoyard, et exporte dans toute l'Europe (Italie, Espagne, Belgique, Pays-Bas...).</p>

            <h2 id="reglementation">2. Qui peut conduire une Aixam ? La réglementation VSP</h2>
            <p>En France, une voiture sans permis est un <strong>quadricycle léger à moteur</strong> homologué catégorie L6e :</p>
            <ul>
                <li><strong>Vitesse maximale :</strong> 45 km/h</li>
                <li><strong>Puissance maximale :</strong> 6 kW (environ 8 CV)</li>
                <li><strong>Poids à vide :</strong> Maximum 425 kg (hors batteries pour les électriques)</li>
                <li><strong>Âge minimum :</strong> 14 ans avec le <strong>permis AM</strong> (anciennement BSR). Les personnes nées avant le 1er janvier 1988 n'ont besoin d'aucun permis.</li>
                <li><strong>Cylindrée diesel :</strong> Maximum 500 cm³</li>
            </ul>

            <h2 id="gamme">3. La gamme Aixam 2026</h2>
            <div class="art-table-wrap"><table class="art-table">
                <thead><tr><th>Modèle Aixam</th><th>Type</th><th>Motorisation</th><th>Prix neuf indicatif</th></tr></thead>
                <tbody>
                    <tr><td><strong>City</strong></td><td>Citadine VSP 2 places</td><td>Diesel Kubota 400cc (6 kW)</td><td>~10 000 €</td></tr>
                    <tr><td><strong>Coupé Premium / GTI</strong></td><td>VSP coupé sportif</td><td>Diesel Kubota 400cc (6 kW)</td><td>~14 000 € à 16 000 €</td></tr>
                    <tr><td><strong>Crossover</strong></td><td>VSP surélevé style SUV</td><td>Diesel Kubota 400cc</td><td>~15 000 € à 17 000 €</td></tr>
                    <tr><td><strong>Minauto</strong></td><td>VSP entrée de gamme</td><td>Diesel 400cc</td><td>~9 000 €</td></tr>
                    <tr><td><strong>e-City / e-Coupé / e-Crossover</strong></td><td>VSP 100% électrique</td><td>Moteur électrique 6 kW (batterie lithium ~10 kWh)</td><td>~15 000 € à 20 000 €</td></tr>
                    <tr><td><strong>Mega (utilitaire)</strong></td><td>Utilitaire VSP</td><td>Diesel 400cc</td><td>~13 000 €</td></tr>
                </tbody>
            </table></div>

            <h2 id="fiabilite">4. Fiabilité et entretien</h2>
            <p>Les Aixam sont équipées de moteurs <strong>Kubota</strong> (constructeur japonais de moteurs industriels), réputés pour leur fiabilité quasi-indestructible. Un entretien basique (vidange tous les 5 000 km, courroie tous les 20 000 km) suffit à dépasser les 100 000 km sans souci majeur. L'unique point noir : la <strong>boîte variateur CVT</strong>, qui peut montrer des signes de faiblesse autour des 50 000 km sur les modèles fortement sollicités en ville.</p>
            <p>Les versions <strong>e-Aixam électriques</strong> éliminent même ce problème, n'ayant ni embrayage, ni boîte de vitesses, ni courroie. L'autonomie réelle tourne autour de 75 km, largement suffisante pour un usage péri-urbain quotidien.</p>

            <h2 id="occasion">5. Acheter une Aixam d'occasion</h2>
            <p>Le marché de l'occasion VSP est dynamique en France. Comptez environ <strong>5 000€ à 8 000€</strong> pour un modèle diesel de 3-5 ans, et <strong>9 000€ à 14 000€</strong> pour une version électrique récente. Points de vigilance : état du variateur, historique d'entretien Kubota, état de la carrosserie (souvent en ABS thermoformé, non réparable comme de la tôle).</p>
        </div>

        <div class="art-conclusion"><h2>FAQ Aixam</h2>
            <h3>Peut-on rouler sur autoroute avec une Aixam ?</h3>
            <p><strong>Non, strictement interdit.</strong> Les voies rapides et autoroutes sont interdites aux véhicules limités à 45 km/h. Les Aixam sont homologuées uniquement pour les routes départementales et communales.</p>
            <h3>Faut-il une assurance pour une VSP ?</h3>
            <p>Oui, obligatoirement. L'assurance au tiers minimum est requise, comme pour tout véhicule motorisé circulant sur la voie publique. Comptez entre 300€ et 700€/an.</p>
        </div>
    </div>
    <aside class="art-sidebar-right"><div class="art-sidebar-sticky"><div class="art-sidebar-block"><div class="art-sidebar-block-title">Aussi dans la catégorie</div><ul style="list-style:none;padding:0;"><li style="padding:6px 0;"><a href="/marques/abarth" style="color:#7c3aed;">→ Abarth</a></li><li style="padding:6px 0;"><a href="/marques/alpine" style="color:#7c3aed;">→ Alpine</a></li><li style="padding:6px 0;"><a href="/marques/audi" style="color:#7c3aed;">→ Audi</a></li></ul></div></div></aside>
    </div>
</article>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://www.garageraymond.fr/marques/aixam"},"headline": <?php echo json_encode($article['title'] ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"description": <?php echo json_encode($page_description ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"datePublished":"2026-03-24T08:00:00+01:00","author":{"@type":"Person","name":"<?php echo $article['author']; ?>"},"publisher":{"@type":"Organization","name":"Le garage expert Auto","url":"https://www.garageraymond.fr"}}</script>
<?php include __DIR__ . '/../footer.php'; ?>

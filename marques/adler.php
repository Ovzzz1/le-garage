<?php
$page_title = "Adler : Histoire du Constructeur Automobile Allemand Disparu";
$page_description = "Adler, constructeur automobile allemand de Francfort (1900-1957). Des voitures populaires aux moteurs d'avion, histoire d'une marque oubliée du paysage allemand.";
$article = ['title' => 'Adler : Le Constructeur de Francfort Oublié par l\'Histoire', 'subtitle' => 'Avant BMW et Mercedes, Adler était l\'un des plus grands constructeurs de voitures et de motos d\'Allemagne. Retour sur une marque disparue en 1957.', 'category' => 'occasion', 'category_name' => 'Achat & Occasion', 'category_color' => '#7c3aed', 'tags' => ['Adler', 'Allemagne', 'Historique', 'Disparu'], 'image' => '/Image/marques/adler-hero.webp', 'date' => '24 Mars 2026', 'author' => 'Arnaud', 'author_role' => 'Historien Auto', 'author_img' => '/Image/arnaud.png', 'author_bio' => 'Arnaud se passionne pour les marques disparues qui ont marqué l\'histoire automobile mais que le grand public a oubliées.', 'reading_time' => '5 min'];
$categories = ['assurance'=>['name'=>'Assurance & Financement','color'=>'#2563eb'],'entretien'=>['name'=>'Entretien & Réparation','color'=>'#dc2626'],'electrique'=>['name'=>'Électrique & Hybride','color'=>'#059669'],'occasion'=>['name'=>'Achat & Occasion','color'=>'#7c3aed'],'moto'=>['name'=>'Moto & 2 Roues','color'=>'#ea580c'],'permis'=>['name'=>'Permis','color'=>'#0891b2']];
include __DIR__ . '/../header.php';
?>
<article>
    <section class="art-hero"><img src="<?php echo $article['image']; ?>" alt="Adler Trumpf Junior vintage" class="art-hero-bg" onerror="this.setAttribute('data-error','true')" onerror="this.setAttribute('data-error','true')"><div class="art-hero-overlay"></div><div class="art-hero-container"><div class="art-hero-content">
        <nav class="art-breadcrumb"><a href="/">Accueil</a><span class="art-bc-sep">/</span><a href="/marques">Annuaire des Marques</a><span class="art-bc-sep">/</span><a href="/marques/a">Marques en A</a><span class="art-bc-sep">/</span><span>Adler</span></nav>
        <div class="art-hero-tags"><?php foreach ($article['tags'] as $tag): ?><span class="art-tag"><?php echo $tag; ?></span><?php endforeach; ?></div>
        <h1><?php echo $article['title']; ?></h1><p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>
        <div class="art-hero-meta"><div class="art-author-pill"><img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"><div><strong>Par <?php echo $article['author']; ?></strong><span><?php echo $article['author_role']; ?></span></div></div><div class="art-meta-infos"><span><?php echo $article['date']; ?></span><span>&bull;</span><span>Lecture <?php echo $article['reading_time']; ?></span></div></div>
    </div></div></section>
    <nav class="art-cat-nav"><div class="art-cat-nav-inner"><?php foreach ($categories as $sc => $c): ?><a href="/<?php echo $sc; ?>" class="art-cat-link <?php echo $sc === $article['category'] ? 'active' : ''; ?>" style="--link-color: <?php echo $c['color']; ?>"><span class="art-cat-dot" style="background-color: <?php echo $c['color']; ?>"></span><?php echo $c['name']; ?></a><?php endforeach; ?></div></nav>
    <div class="art-layout-wrapper"><div class="art-main-col">
        <div class="art-tldr"><div class="art-tldr-title">🦅 Adler en bref</div><ul>
            <li><strong>Nom :</strong> "Adler" signifie "Aigle" en allemand.</li>
            <li><strong>Fondation :</strong> 1880 à Francfort-sur-le-Main par Heinrich Kleyer (d'abord pour des vélos et machines à écrire).</li>
            <li><strong>Production automobile :</strong> De 1900 à 1939 (interrompue par la guerre).</li>
            <li><strong>Disparition :</strong> 1957 — reconvertie en fabricant de machines à écrire et de calculatrices (rachetée ensuite par Grundig puis Olivetti).</li>
        </ul></div>
        <div class="art-content">
            <h2>1. L'Aigle de Francfort : Des vélos aux automobiles</h2>
            <p><strong>Heinrich Kleyer</strong> fonde Adler en 1880 à Francfort pour produire des bicyclettes, puis des machines à écrire (la célèbre Adler-Schreibmaschine). En 1900, il se lance dans l'automobile. Les premières Adler sont des voitures de tourisme fiables et accessibles, positionnées sous les Mercedes et les Horch de l'époque (l'équivalent d'une Peugeot face à une Bentley).</p>
            <p>Dans les années 1930, Adler connaît son âge d'or avec la <strong>Trumpf</strong> et la <strong>Trumpf Junior</strong>, des voitures à traction avant innovantes (une nouveauté technique à l'époque) qui se vendent par dizaines de milliers. La Trumpf Junior remporte même sa catégorie aux <strong>24 Heures du Mans 1937</strong>.</p>

            <h2>2. La fin et la reconversion</h2>
            <p>Pendant la Seconde Guerre mondiale, les usines Adler de Francfort sont lourdement bombardées. Après-guerre, la société choisit de ne pas reprendre la production automobile (trop coûteuse à relancer) et se concentre sur les machines à écrire et les motos. La dernière moto Adler est produite en 1957. La marque est ensuite absorbée par le groupe Grundig, puis par Olivetti. Le nom Adler disparaît définitivement de l'industrie.</p>
            <p>Aujourd'hui, les Adler Trumpf sont recherchées par les collectionneurs d'automobiles d'avant-guerre. Comptez environ <strong>15 000€ à 40 000€</strong> pour un exemplaire restauré, ce qui en fait l'une des voiturse de collection classiques les plus abordables de cette époque.</p>
        </div>
    </div>
    <aside class="art-sidebar-right"><div class="art-sidebar-sticky"><div class="art-sidebar-block"><div class="art-sidebar-block-title">Marques en A</div><ul style="list-style:none;padding:0;"><li style="padding:6px 0;"><a href="/marques/audi" style="color:#7c3aed;">→ Audi</a></li><li style="padding:6px 0;"><a href="/marques/aston-martin" style="color:#7c3aed;">→ Aston Martin</a></li></ul></div></div></aside>
    </div>
</article>
<script type="application/ld+json">{"@context":"https://schema.org","@type":"Article","mainEntityOfPage":{"@type":"WebPage","@id":"https://www.garageraymond.fr/marques/adler"},"headline": <?php echo json_encode($article['title'] ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"description": <?php echo json_encode($page_description ?? '', JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>,"datePublished":"2026-03-24T08:00:00+01:00","author":{"@type":"Person","name":"<?php echo $article['author']; ?>"},"publisher":{"@type":"Organization","name":"Le garage expert Auto","url":"https://www.garageraymond.fr"}}</script>
<?php include __DIR__ . '/../footer.php'; ?>

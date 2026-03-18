<?php
/**
 * category.php
 * Template de page Catégorie (Archive)
 * Usage : category.php?cat=assurance
 */

// Définition des catégories avec leurs metas
$categories = [
    'assurance' => [
        'name' => 'Assurance & Financement',
        'slug' => 'assurance',
        'description' => 'Comparatifs d\'assurances auto, guides de financement, leasing vs achat, crédit automobile et astuces pour payer moins cher.',
        'hero_image' => 'https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?q=80&w=1400&auto=format&fit=crop',
        'color' => '#2563eb',
        'articles' => [
            [
                'title' => 'Assurance jeune conducteur : comment payer moins cher en 2026 ?',
                'excerpt' => 'Le permis en poche, la facture est salée. On décortique les vraies astuces pour baisser sa prime auto dès la première année.',
                'image' => 'https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?q=80&w=800&auto=format&fit=crop',
                'date' => '15 Mars 2026',
                'author' => 'Romain',
                'reading_time' => '7 min',
                'featured' => true
            ],
            [
                'title' => 'Leasing (LOA/LLD) ou achat comptant : quel est le meilleur choix ?',
                'excerpt' => 'On compare les coûts réels sur 3, 4 et 5 ans pour vous aider Ã  faire le bon choix selon votre profil.',
                'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=800&auto=format&fit=crop',
                'date' => '10 Mars 2026',
                'author' => 'David',
                'reading_time' => '9 min',
                'featured' => false
            ],
            [
                'title' => 'Bonus-Malus : comment fonctionne vraiment le coefficient ?',
                'excerpt' => 'Le système de bonus-malus reste obscur pour beaucoup. On vous explique le calcul, les cas spéciaux et les pièges Ã  éviter.',
                'image' => 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=800&auto=format&fit=crop',
                'date' => '05 Mars 2026',
                'author' => 'Romain',
                'reading_time' => '6 min',
                'featured' => false
            ],
            [
                'title' => 'Assurance tous risques vs au tiers : le vrai comparatif',
                'excerpt' => 'Quelle formule choisir selon l\'âge de votre voiture ? On a fait les calculs pour 5 profils types.',
                'image' => 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=800&auto=format&fit=crop',
                'date' => '28 Février 2026',
                'author' => 'Romain',
                'reading_time' => '8 min',
                'featured' => false
            ],
        ]
    ],
    'entretien' => [
        'name' => 'Entretien & Réparation',
        'slug' => 'entretien',
        'description' => 'Tutoriels mécaniques, guides de vidange, freinage, pneumatiques et tout ce qu\'il faut savoir pour entretenir votre voiture comme un pro.',
        'hero_image' => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?q=80&w=1400&auto=format&fit=crop',
        'color' => '#dc2626',
        'articles' => [
            [
                'title' => 'Quand changer sa courroie de distribution ? Le guide complet',
                'excerpt' => 'La courroie de distribution est une pièce critique. On vous explique les intervalles, les symptômes et les coûts réels.',
                'image' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?q=80&w=800&auto=format&fit=crop',
                'date' => '14 Mars 2026',
                'author' => 'David',
                'reading_time' => '8 min',
                'featured' => true
            ],
            [
                'title' => '5 signes qu\'il est temps de faire votre vidange',
                'excerpt' => 'Ne vous fiez pas uniquement au kilométrage. Voici les signes concrets d\'une huile qui ne protège plus votre moteur.',
                'image' => 'https://images.unsplash.com/photo-1635830932824-deeb3de9c2da?q=80&w=800&auto=format&fit=crop',
                'date' => '12 Mars 2026',
                'author' => 'David',
                'reading_time' => '5 min',
                'featured' => false
            ],
            [
                'title' => 'Plaquettes de frein : les changer soi-même ou passer au garage ?',
                'excerpt' => 'On compare le coût DIY vs garage et on vous donne notre avis honnête selon votre niveau de compétence.',
                'image' => 'https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?q=80&w=800&auto=format&fit=crop',
                'date' => '08 Mars 2026',
                'author' => 'David',
                'reading_time' => '6 min',
                'featured' => false
            ],
            [
                'title' => 'Pneus 4 saisons : vraiment efficaces ou compromis marketing ?',
                'excerpt' => 'On analyse les performances réelles des Michelin CrossClimate et Goodyear Vector face Ã  de vrais pneus été/hiver.',
                'image' => 'https://images.unsplash.com/photo-1643194511598-ea819dc745e6?q=80&w=800&auto=format&fit=crop',
                'date' => '01 Mars 2026',
                'author' => 'David',
                'reading_time' => '7 min',
                'featured' => false
            ],
        ]
    ],
    'electrique' => [
        'name' => 'Électrique & Hybride',
        'slug' => 'electrique',
        'description' => 'Essais de véhicules électriques, comparatifs de bornes de recharge, autonomie réelle et guides pour réussir votre transition écologique.',
        'hero_image' => 'https://images.unsplash.com/photo-1593941707882-a5bba14938c7?q=80&w=1400&auto=format&fit=crop',
        'color' => '#059669',
        'articles' => [
            [
                'title' => 'Quelle borne de recharge installer Ã  domicile ? Le guide 2026',
                'excerpt' => 'Wallbox, prise renforcée ou borne 22kW ? On compare les solutions, les prix et les aides disponibles.',
                'image' => 'https://images.unsplash.com/photo-1593941707882-a5bba14938c7?q=80&w=800&auto=format&fit=crop',
                'date' => '13 Mars 2026',
                'author' => 'Romain',
                'reading_time' => '10 min',
                'featured' => true
            ],
            [
                'title' => 'Les pièges de l\'hybride rechargeable que personne ne vous dit',
                'excerpt' => 'Consommation réelle, batterie vide, malus... L\'hybride rechargeable n\'est pas toujours le bon choix.',
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=800&auto=format&fit=crop',
                'date' => '09 Mars 2026',
                'author' => 'Romain',
                'reading_time' => '8 min',
                'featured' => false
            ],
            [
                'title' => 'Autonomie réelle vs annoncée : on a testé 10 modèles électriques',
                'excerpt' => 'Les constructeurs mentent-ils ? On a roulé en conditions réelles pour vérifier. Les résultats sont surprenants.',
                'image' => 'https://images.unsplash.com/photo-1560958089-b8a1929cea89?q=80&w=800&auto=format&fit=crop',
                'date' => '03 Mars 2026',
                'author' => 'Romain',
                'reading_time' => '12 min',
                'featured' => false
            ],
        ]
    ],
    'occasion' => [
        'name' => 'Achat & Occasion',
        'slug' => 'occasion',
        'description' => 'Guides d\'achat, check-lists de contrôle, fiches fiabilité et pièges Ã  éviter pour acheter votre prochaine voiture d\'occasion en toute sérénité.',
        'hero_image' => 'https://images.unsplash.com/photo-1550355291-bbee04a92027?q=80&w=1400&auto=format&fit=crop',
        'color' => '#7c3aed',
        'articles' => [
            [
                'title' => 'Les 10 points de contrôle obligatoires avant d\'acheter une occasion',
                'excerpt' => 'Notre check-list complète de pro pour déjouer les arnaques et vices cachés lors de l\'achat de votre prochain véhicule.',
                'image' => 'https://images.unsplash.com/photo-1550355291-bbee04a92027?q=80&w=800&auto=format&fit=crop',
                'date' => '11 Mars 2026',
                'author' => 'David',
                'reading_time' => '9 min',
                'featured' => true
            ],
            [
                'title' => 'Top 5 des SUV les plus fiables Ã  moins de 15 000â‚¬',
                'excerpt' => 'On a épluché les données de fiabilité pour vous dénicher les SUV d\'occasion les plus sûrs du marché.',
                'image' => 'https://images.unsplash.com/photo-1519641471654-76ce0107ad1b?q=80&w=800&auto=format&fit=crop',
                'date' => '06 Mars 2026',
                'author' => 'David',
                'reading_time' => '8 min',
                'featured' => false
            ],
            [
                'title' => 'Mandataire auto : une bonne affaire ou un piège ?',
                'excerpt' => 'On passe au crible le fonctionnement des mandataires, les remises réelles et les risques cachés.',
                'image' => 'https://images.unsplash.com/photo-1549924231-f129b911e442?q=80&w=800&auto=format&fit=crop',
                'date' => '27 Février 2026',
                'author' => 'David',
                'reading_time' => '7 min',
                'featured' => false
            ],
        ]
    ],
    'moto' => [
        'name' => 'Moto & 2 Roues',
        'slug' => 'moto',
        'description' => 'Essais moto, comparatifs d\'équipements, guides d\'achat scooter et conseils d\'entretien pour les passionnés de deux roues.',
        'hero_image' => 'https://images.unsplash.com/photo-1558981806-ec527fa84c39?q=80&w=1400&auto=format&fit=crop',
        'color' => '#ea580c',
        'articles' => [
            [
                'title' => 'Quel scooter 125cc choisir en 2026 ? Le comparatif ultime',
                'excerpt' => 'Honda PCX, Yamaha NMAX, Vespa Primavera... On les a tous essayés pour vous aider Ã  choisir.',
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85f82e?q=80&w=800&auto=format&fit=crop',
                'date' => '12 Mars 2026',
                'author' => 'David',
                'reading_time' => '10 min',
                'featured' => true
            ],
            [
                'title' => 'Casque intégral : les 5 meilleurs rapports qualité-prix',
                'excerpt' => 'De 100â‚¬ Ã  500â‚¬, on a testé et classé les casques les plus populaires du marché.',
                'image' => 'https://images.unsplash.com/photo-1568772585407-9361f9bf3a87?q=80&w=800&auto=format&fit=crop',
                'date' => '04 Mars 2026',
                'author' => 'David',
                'reading_time' => '7 min',
                'featured' => false
            ],
        ]
    ],
    'permis' => [
        'name' => 'Permis',
        'slug' => 'permis',
        'description' => 'Réglementation automobile, contester un PV, contrôle technique, ZFE, récupération de points et astuces juridiques pour les automobilistes.',
        'hero_image' => 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?q=80&w=1400&auto=format&fit=crop',
        'color' => '#0891b2',
        'articles' => [
            [
                'title' => 'Comment contester une amende radar efficacement ?',
                'excerpt' => 'Les démarches précises, les délais, les motifs recevables et les pièges Ã  éviter pour contester un PV.',
                'image' => 'https://images.unsplash.com/photo-1532939163844-547f958e91b4?q=80&w=800&auto=format&fit=crop',
                'date' => '10 Mars 2026',
                'author' => 'Romain',
                'reading_time' => '8 min',
                'featured' => true
            ],
            [
                'title' => 'ZFE 2026 : quelles villes, quelles voitures interdites ?',
                'excerpt' => 'La carte complète des Zones Ã  Faibles Émissions et les véhicules concernés par les restrictions.',
                'image' => 'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?q=80&w=800&auto=format&fit=crop',
                'date' => '02 Mars 2026',
                'author' => 'Romain',
                'reading_time' => '6 min',
                'featured' => false
            ],
            [
                'title' => 'Contrôle technique 2026 : ce qui change et comment le préparer',
                'excerpt' => 'Les nouveaux points de contrôle, les défaillances critiques et nos conseils pour passer du premier coup.',
                'image' => 'https://images.unsplash.com/photo-1487754180451-c456f719a1fc?q=80&w=800&auto=format&fit=crop',
                'date' => '25 Février 2026',
                'author' => 'Romain',
                'reading_time' => '7 min',
                'featured' => false
            ],
        ]
    ],
];

// Récupérer la catégorie depuis l'URL
$cat_slug = isset($_GET['cat']) ? $_GET['cat'] : 'assurance';
$category = isset($categories[$cat_slug]) ? $categories[$cat_slug] : $categories['assurance'];

$page_title = $category['name'] . " - Le garage expert Auto";
$page_description = $category['description'];

include 'header.php';
?>

<!-- Category Hero -->
<section class="cat-hero" style="--cat-color: <?php echo $category['color']; ?>">
    <img src="<?php echo $category['hero_image']; ?>" alt="<?php echo $category['name']; ?>" class="cat-hero-bg">
    <div class="cat-hero-overlay"></div>
    <div class="cat-hero-content">
        <h1><?php echo $category['name']; ?></h1>
        <p><?php echo $category['description']; ?></p>
        <div class="cat-stats">
            <span><?php echo count($category['articles']); ?> articles</span>
            <span class="cat-stats-sep">&bull;</span>
            <span>Mis Ã  jour régulièrement</span>
        </div>
    </div>
</section>

<!-- Category Navigation -->
<nav class="cat-nav">
    <div class="cat-nav-inner">
        <?php foreach ($categories as $slug => $cat): ?>
            <a href="/<?php echo $slug; ?>" class="cat-nav-item <?php echo $slug === $cat_slug ? 'active' : ''; ?>">
                <?php echo $cat['name']; ?>
            </a>
        <?php endforeach; ?>
    </div>
</nav>

<!-- Articles Grid -->
<section class="cat-content">
    <div class="cat-container">

        <?php
        $featured = null;
        $regular = [];
        foreach ($category['articles'] as $article) {
            if ($article['featured'] && !$featured) {
                $featured = $article;
            } else {
                $regular[] = $article;
            }
        }
        ?>

        <?php if ($featured): ?>
            <!-- Featured Article -->
            <article class="cat-featured">
                <div class="cat-featured-img">
                    <img src="<?php echo $featured['image']; ?>" alt="<?php echo $featured['title']; ?>">
                </div>
                <div class="cat-featured-body">
                    <span class="cat-badge"
                        style="background-color: <?php echo $category['color']; ?>"><?php echo $category['name']; ?></span>
                    <h2><?php echo $featured['title']; ?></h2>
                    <p><?php echo $featured['excerpt']; ?></p>
                    <div class="cat-article-meta">
                        <span>Par <?php echo $featured['author']; ?></span>
                        <span>"¢</span>
                        <span>Lecture <?php echo $featured['reading_time']; ?></span>
                        <span>"¢</span>
                        <span><?php echo $featured['date']; ?></span>
                    </div>
                    <a href="#" class="btn-primary"
                        style="margin-top:20px; background-color: <?php echo $category['color']; ?>; border-color: <?php echo $category['color']; ?>;">Lire
                        l'article â†’</a>
                </div>
            </article>
        <?php endif; ?>

        <!-- Regular Articles Grid -->
        <div class="cat-grid">
            <?php foreach ($regular as $article): ?>
                <article class="cat-card">
                    <div class="cat-card-img">
                        <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
                        <span class="cat-badge"
                            style="background-color: <?php echo $category['color']; ?>"><?php echo $category['name']; ?></span>
                    </div>
                    <div class="cat-card-body">
                        <h3><a href="#"><?php echo $article['title']; ?></a></h3>
                        <p><?php echo $article['excerpt']; ?></p>
                        <div class="cat-article-meta">
                            <span>Par <?php echo $article['author']; ?></span>
                            <span>"¢</span>
                            <span>Lecture <?php echo $article['reading_time']; ?></span>
                            <span>"¢</span>
                            <span><?php echo $article['date']; ?></span>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
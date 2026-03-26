<?php
/**
 * pifauto-com-liste-voiture.php
 */

$page_title = "Pifauto.com : Liste des voitures de A à Z (Index complet & Dictionnaire)";
$page_description = "Découvrez l'impressionnante base de données de Pifauto.com ! Une liste complète de modèles de voitures triée par ordre alphabétique. Idéal pour votre culture auto ou le jeu du Petit Bac.";

$article = [
    'title' => 'Pifauto.com Liste Voiture : L\'index ultime des modèles de A à Z',
    'subtitle' => 'Que vous cherchiez un modèle en "Q" pour briller au Scrabble, ou soyez simplement en quête d\'inspiration automobile, l\'index Pifauto est une mine d\'or insoupçonnée. Découverte.',
    'category' => 'occasion',
    'category_name' => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags' => ['Culture Auto', 'Pifauto', 'Dictionnaire', 'Petit Bac'],
    'image' => '/Image/pifauto-liste-voiture-dictionnaire.webp', // Placeholder
    'date' => '24 Mars 2026',
    'author' => 'Arnaud',
    'author_role' => 'Explorateur Auto',
    'author_img' => '/Image/arnaud.png',
    'author_bio' => 'Toujours curieux des ressources atypiques du web automobile, Arnaud arpente les bases de données et webmagazines pour vous dénicher les pépites cachées du net.',
    'reading_time' => '7 min',
];

$categories = [
    'assurance' => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien' => ['name' => 'Entretien & Réparation', 'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Électrique & Hybride', 'color' => '#059669', 'slug' => 'electrique'],
    'occasion' => ['name' => 'Achat & Occasion', 'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto' => ['name' => 'Moto & 2 Roues', 'color' => '#ea580c', 'slug' => 'moto'],
    'permis' => ['name' => 'Permis', 'color' => '#0891b2', 'slug' => 'permis'],
];

// ─── Scan dynamique du Blog/ pour le linking interne ───
$current_slug = pathinfo(__FILE__, PATHINFO_FILENAME);
$same_cat_articles = [];
$all_other_articles = [];
$blog_dir = __DIR__;

if (is_dir($blog_dir)) {
    $files = glob($blog_dir . '/*.php');
    foreach ($files as $file) {
        $file_slug = pathinfo($file, PATHINFO_FILENAME);
        if ($file_slug === $current_slug) continue; 

        $other_article = null;
        $content = file_get_contents($file);

        if (preg_match('/\$article\s*=\s*\[(.+?)\];/s', $content, $matches)) {
            try {
                eval('$other_article = [' . $matches[1] . '];');
            } catch (Throwable $e) {
                continue;
            }
        }

        if ($other_article && isset($other_article['title'])) {
            $other_article['slug'] = $file_slug;
            $other_article['url'] = '/Blog/' . $file_slug;
            $other_article['image'] = '/' . ltrim($other_article['image'] ?? '', '/');

            if (($other_article['category'] ?? '') === $article['category']) {
                $same_cat_articles[] = $other_article;
            }
            $all_other_articles[] = $other_article;
        }
    }
}

include __DIR__ . '/../header.php';
?>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>" alt="Recherche Pifauto.com liste voiture classée par lettre" class="art-hero-bg">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a>
                    <span class="art-bc-sep">/</span>
                    <span>Culture Auto</span>
                </nav>

                <div class="art-hero-tags">
                    <?php foreach ($article['tags'] as $tag): ?>
                        <span class="art-tag"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                </div>

                <h1><?php echo $article['title']; ?></h1>
                <p class="art-hero-sub"><?php echo $article['subtitle']; ?></p>

                <div class="art-hero-meta">
                    <div class="art-author-pill">
                        <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>">
                        <div>
                            <strong>Par <?php echo $article['author']; ?></strong>
                            <span><?php echo $article['author_role']; ?></span>
                        </div>
                    </div>
                    <div class="art-meta-infos">
                        <span><?php echo $article['date']; ?></span>
                        <span>&bull;</span>
                        <span>Lecture <?php echo $article['reading_time']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HORIZONTAL CATEGORY NAV -->
    <nav class="art-cat-nav">
        <div class="art-cat-nav-inner">
            <?php foreach ($categories as $slug_cat => $cat): ?>
                <a href="/<?php echo $slug_cat; ?>"
                    class="art-cat-link <?php echo $slug_cat === $article['category'] ? 'active' : ''; ?>"
                    style="--link-color: <?php echo $cat['color']; ?>">
                    <span class="art-cat-dot" style="background-color: <?php echo $cat['color']; ?>"></span>
                    <?php echo $cat['name']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </nav>

    <!-- ASYMMETRIC LAYOUT (70 / 30) -->
    <div class="art-layout-wrapper">

        <!-- MAIN CONTENT -->
        <div class="art-main-col">

            <!-- TL;DR Dashboard Box -->
            <div class="art-tldr">
                <div class="art-tldr-title">En Bref : Ce qu'il faut savoir (TL;DR)</div>
                <ul>
                    <li><strong>Qu'est-ce que c'est ?</strong> Le site internet <em>Pifauto.com</em> est un webmagazine automobile proposant des bases de données de véhicules, indexées par l'initiale de leur nom.</li>
                    <li><strong>Pourquoi chercher ça ?</strong> Trouver un "modèle de voiture en Q" ou "en E" est le cauchemar absolu des joueurs du "Petit Bac" ou du Scrabble. Cet index est la triche officielle.</li>
                    <li><strong>Données complètes :</strong> Des centaines de modèles y sont répertoriés en associant leur marque constructeur, le segment de marché, et la fourchette de chevaux (CV).</li>
                    <li><strong>Marques et sous-marques :</strong> L'index prend en compte tout l'éco-système : des best-sellers de chez Renault ou Peugeot aux raretés comme W Motors ou Lada.</li>
                </ul>
            </div>

            <div class="art-content">
                <p>Internet recèle de ressources inattendues. Et pour les vrais férus de bagnoles ou simplement les passionnés de mots, la fameuse recherche de type "<strong>pifauto.com liste voiture</strong>" est un classique incontournable. Ce webmagazine spécialisé s'est fait une spécialité : regrouper et trier alphanumériquement tous les modèles de véhicules jamais produits, et non les marques, de la lettre A jusqu'au Z.</p>
                <p>Besoin de gagner votre partie de jeu de société en famille ? Envie d'élargir votre horizon mécanique ? Découvrons ensemble l'étendue des listes d'automobiles triées par lettres sur ce portail atypique.</p>

                <h2 id="quest-ce-que">1. Pifauto.com, l'allié du Scrabble et du "Petit Bac"</h2>
                <p>Trouver une <em>marque</em> de voiture en "F" (Ferrari, Ford, Fiat) n'est pas bien compliqué. Mais trouver le nom exact d'un <em>modèle</em> commençant par un "N" ou un "Q", sans posséder une encyclopédie sur les bras, est une toute autre affaire. La grande force de Pifauto.com est de créer des répertoires alphabétiques sous l'appellation <strong>"Liste des models (sic) de voiture qui commencent par X"</strong>.</p>
                <p>Pour vous ouvrir la voie (sans faire le dictionnaire complet), nous avons extrait et organisé ici une sélection percutante de leur base de données concernant 5 lettres très spécifiques. Jetez un œil aux tableaux ci-dessous.</p>

                <h2 id="lettre-l">2. Modèle de voiture commençant par la lettre L</h2>
                <p>La lettre L conjugue à la perfection le très grand luxe, les hypercars inaccessibles et la robustesse du marché milieu de gamme. C'est l'une des lettres les plus riches des <strong>listes pifauto.com</strong>.</p>
                
                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Modèle de Voiture (L)</th>
                                <th>Marque Constructeur</th>
                                <th>Puissance indicative (Chevaux)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Laguna</strong></td>
                                <td>Renault</td>
                                <td>110 à 205 CV</td>
                            </tr>
                            <tr>
                                <td><strong>LaFerrari</strong></td>
                                <td>Ferrari</td>
                                <td>963 CV (Hypercar Hybride V12)</td>
                            </tr>
                            <tr>
                                <td><strong>Logan</strong></td>
                                <td>Dacia</td>
                                <td>75 à 105 CV</td>
                            </tr>
                            <tr>
                                <td><strong>Lancer (Evolution)</strong></td>
                                <td>Mitsubishi</td>
                                <td>291 CV (Rallye légendaire)</td>
                            </tr>
                            <tr>
                                <td><strong>Levante</strong></td>
                                <td>Maserati</td>
                                <td>350 à 580 CV (SUV de luxe)</td>
                            </tr>
                            <tr>
                                <td><strong>Lucid Air</strong></td>
                                <td>Lucid Motors</td>
                                <td>1080 CV (Électrique Premium)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p><em>Ressource externe :</em> <a href="https://www.pifauto.com/14604-model-de-voiture-en-l/" target="_blank" rel="nofollow external">Voir la base complète en "L" sur pifauto.com</a></p>

                <h2 id="lettre-q">3. Modèle de voiture commençant par la lettre Q</h2>
                <p>Une des lettres les plus difficiles ("Q" vaut 8 points au Scrabble). Outre quelques Japonaises, c'est finalement le blason d'Audi et ses immenses SUV familiaux qui tiennent la dragée haute dans cette catégorie.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Modèle de Voiture (Q)</th>
                                <th>Marque Constructeur</th>
                                <th>Particularité & Puissance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Qashqai</strong></td>
                                <td>Nissan</td>
                                <td>Jusqu'à 160 CV (Le pionnier des Crossovers)</td>
                            </tr>
                            <tr>
                                <td><strong>Q2, Q3, Q5, Q7, Q8</strong></td>
                                <td>Audi</td>
                                <td>De 150 CV (Q2) à plus de 245 CV (Sportback)</td>
                            </tr>
                            <tr>
                                <td><strong>Quattroporte</strong></td>
                                <td>Maserati</td>
                                <td>+350 CV (Berline très haut de gamme)</td>
                            </tr>
                            <tr>
                                <td><strong>Q4 e-tron</strong></td>
                                <td>Audi</td>
                                <td>204 CV (SUV 100% électrique)</td>
                            </tr>
                            <tr>
                                <td><strong>QX50 / Q60</strong></td>
                                <td>Infiniti</td>
                                <td>268 à 400 CV (La filiale premium de Nissan)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p><em>Ressource externe :</em> <a href="https://www.pifauto.com/14614-model-de-voiture-en-q/" target="_blank" rel="nofollow external">Explorer la série Q sur pifauto.com</a></p>

                <h2 id="lettre-s">4. Modèle de voiture commençant par la lettre S</h2>
                <p>La lettre S brille par sa sportivité, mais se caractérise par des entrées majeures pour le grand public. Les <strong>listes de voitures pifauto</strong> s'étoffent ici énormément.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Modèle de Voiture (S)</th>
                                <th>Marque Constructeur</th>
                                <th>Type de Véhicule</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Supra</strong></td>
                                <td>Toyota</td>
                                <td>Coupé sportif mythique (258-340 CV)</td>
                            </tr>
                            <tr>
                                <td><strong>Spider</strong></td>
                                <td>Alfa Romeo</td>
                                <td>Cabriolet iconique (160-240 CV)</td>
                            </tr>
                            <tr>
                                <td><strong>Scirocco</strong></td>
                                <td>Volkswagen</td>
                                <td>Coupé compact puissant (125-280 CV)</td>
                            </tr>
                            <tr>
                                <td><strong>Senna</strong></td>
                                <td>McLaren</td>
                                <td>Hypercar radicale de circuit (800 CV)</td>
                            </tr>
                            <tr>
                                <td><strong>Scenic</strong></td>
                                <td>Renault</td>
                                <td>Le roi déchu des Monospaces compacts</td>
                            </tr>
                            <tr>
                                <td><strong>Stelvio</strong></td>
                                <td>Alfa Romeo</td>
                                <td>Le SUV sportif transalpin (200-510 CV)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p><em>Ressource externe :</em> <a href="https://www.pifauto.com/14619-model-de-voiture-en-s/" target="_blank" rel="nofollow external">Consulter le dictionnaire en "S" sur pifauto.com</a></p>

                <h2 id="lettre-n">5. Modèle de voiture commençant par la lettre N</h2>
                <p>Enfouis dans la lettre N se dressent les colossaux titans américains, mais également les stars de la fiabilité asiatique. C'est le carrefour idéal entre baroudeurs et citadines nipponnes.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Modèle de Voiture (N)</th>
                                <th>Marque Constructeur</th>
                                <th>Commentaire (Puissance / Segment)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>NSX</strong></td>
                                <td>Honda / Acura</td>
                                <td>573 CV (La supercar hybride tueuse de Ferrari)</td>
                            </tr>
                            <tr>
                                <td><strong>Navigator</strong></td>
                                <td>Lincoln</td>
                                <td>450 CV (L'immense SUV de luxe américain)</td>
                            </tr>
                            <tr>
                                <td><strong>Navara</strong></td>
                                <td>Nissan</td>
                                <td>163 à 190 CV (Le solide pick-up pour professionnels)</td>
                            </tr>
                            <tr>
                                <td><strong>Niro</strong></td>
                                <td>Kia</td>
                                <td>139 à 204 CV (Crossover économe)</td>
                            </tr>
                            <tr>
                                <td><strong>Niva</strong></td>
                                <td>Lada</td>
                                <td>83 CV (Petit 4x4 rustique légendaire des pays de l'Est)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p><em>Ressource externe :</em> <a href="https://www.pifauto.com/14608-model-de-voiture-en-n/" target="_blank" rel="nofollow external">Le répertoire en "N" sur pifauto.com</a></p>

                <h2 id="lettre-e">6. Modèle de voiture commençant par la lettre E</h2>
                <p>Quoi de mieux pour finir notre compilation que la lettre de "l'Électrique" et des noms britanniques iconiques ?</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Modèle de Voiture (E)</th>
                                <th>Marque Constructeur</th>
                                <th>Type de Véhicule</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Enzo</strong></td>
                                <td>Ferrari</td>
                                <td>660 CV (Série spéciale V12 de Maranello)</td>
                            </tr>
                            <tr>
                                <td><strong>Exige / Evora / Esprit</strong></td>
                                <td>Lotus</td>
                                <td>Sportives extrêmes "Light is Right" du piltote Chapman</td>
                            </tr>
                            <tr>
                                <td><strong>E-Pace</strong></td>
                                <td>Jaguar</td>
                                <td>Le SUV compact britannique luxueux</td>
                            </tr>
                            <tr>
                                <td><strong>Elantra</strong></td>
                                <td>Hyundai</td>
                                <td>Berline tricorps polyvalente (US, Asie)</td>
                            </tr>
                            <tr>
                                <td><strong>Escort</strong></td>
                                <td>Ford</td>
                                <td>La berline compacte mythique des années 90 (Cosworth)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p><em>Ressource externe :</em> <a href="https://www.pifauto.com/14590-model-de-voiture-en-e/" target="_blank" rel="nofollow external">Retrouvez les modèles en "E" sur pifauto.com</a></p>

            </div><!-- .art-content -->

            <!-- Premium Author Box -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>"
                     class="art-author-avatar">
                <div class="art-author-info">
                    <span class="art-author-label">Culture Automobile</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir l'équipe éditoriale du site</a>
                </div>
            </div>

            <!-- FAQ Box pour le JSON-LD -->
            <div class="art-conclusion" style="margin-top:20px;">
                <h2 id="faq">Foire aux questions sur les Index Automobiles</h2>
                
                <h3>À quoi sert une liste complète de véhicules de A à Z ?</h3>
                <p>Au-delà de l'objectif encyclopédique de conserver tout l'historique de la production mondiale, ce type de liste (comme pifauto.com) aide les joueurs invétérés du baccalauréat (petit bac), du scrabble, ou des jeux de lettres spécifiques aux soirées entre amis.</p>

                <h3>Est-ce que tous les modèles sont présents dans les listes Pifauto ?</h3>
                <p>Généralement, les index alphabétiques se concentrent sur les modèles grand public et les supercars connues (Dacia, Renault, Audi). Les petits constructeurs ou les modèles exclusifs de marchés niches (JDM au Japon) peuvent parfois y manquer, mais le registre englobe 95% des automobiles conventionnelles.</p>
            </div>

            <!-- Similar Articles Grid -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a
                        href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                        alt="<?php echo htmlspecialchars($rel['title']); ?>">
                                </div>
                                <div class="art-related-body">
                                    <h3><?php echo htmlspecialchars($rel['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p>
                                    <span class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php elseif (!empty($all_other_articles)): ?>
                        <?php foreach (array_slice($all_other_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                        alt="<?php echo htmlspecialchars($rel['title']); ?>">
                                </div>
                                <div class="art-related-body">
                                    <h3><?php echo htmlspecialchars($rel['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p>
                                    <span class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p style="color: #666; padding: 20px 0;">D'autres articles arrivent bientôt !</p>
                    <?php endif; ?>
                </div>
            </section>

        </div><!-- .art-main-col -->

        <!-- ASYMMETRIC RIGHT SIDEBAR -->
        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">
                <?php if (!empty($same_cat_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Sur le même sujet</div>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $sa): ?>
                            <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($sa['image']); ?>"
                                        alt="<?php echo htmlspecialchars($sa['title']); ?>">
                                    <span class="art-side-cat-pill"
                                        style="background: <?php echo $article['category_color']; ?>"><?php echo $article['category_name']; ?></span>
                                </div>
                                <h4><?php echo htmlspecialchars($sa['title']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($all_other_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">À la Une</div>
                        <?php foreach (array_slice($all_other_articles, 0, 3) as $ra): ?>
                            <a href="<?php echo $ra['url']; ?>" class="art-side-card">
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($ra['image']); ?>"
                                        alt="<?php echo htmlspecialchars($ra['title']); ?>">
                                </div>
                                <h4><?php echo htmlspecialchars($ra['title']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </aside>

    </div><!-- .art-layout-wrapper -->
</article>

<!-- Schema JSON-LD (Article + FAQ) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://garageraymond.fr/Blog/pifauto-com-liste-voiture"
      },
      "headline": <?php echo json_encode($article['title']); ?>,
      "description": <?php echo json_encode($article['subtitle']); ?>,
      "image": [
        "https://garageraymond.fr<?php echo $article['image']; ?>"
      ],
      "datePublished": "2026-03-24T08:00:00+01:00",
      "dateModified": "2026-03-24T08:00:00+01:00",
      "author": {
        "@type": "Person",
        "name": <?php echo json_encode($article['author']); ?>,
        "url": "https://garageraymond.fr/equipe",
        "jobTitle": <?php echo json_encode($article['author_role']); ?>
      },
      "publisher": {
        "@type": "Organization",
        "name": "Le garage expert Auto",
        "url": "https://garageraymond.fr",
        "logo": {
          "@type": "ImageObject",
          "url": "https://garageraymond.fr/Image/favicon.png",
          "width": "512",
          "height": "512"
        }
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "À quoi sert la liste complète de véhicules de A à Z pifauto.com ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ce type de base de données est extrêmement populaire pour valider des réponses lors de parties de jeux de vocabulaire comme le Petit Bac ou le Scrabble, mais c'est aussi un vrai monument encyclopédique de culture auto."
          }
        },
        {
          "@type": "Question",
          "name": "Est-ce que tous les modèles sont présents dans les listes Pifauto ?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "L'index référence la grande majorité de la production (Audi, Renault, Ford, Lexus...), mais peut parfois rater quelques séries très limitées ou exclusives."
          }
        }
      ]
    }
  ]
}
</script>

<?php include __DIR__ . '/../footer.php'; ?>

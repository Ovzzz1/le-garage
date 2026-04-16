<?php
/**
 * amenager-voiture-pour-dormir.php
 */

$page_title       = "Aménager sa Voiture pour Dormir : Guide Complet (2026)";
$page_description = "Comment transformer votre voiture en couchage confortable ? Matelas, isolation, rangements, ventilation : tout ce qu'il faut savoir pour dormir en voiture sans se réveiller cassé.";

$article = [
    'title'          => "Aménager sa voiture pour dormir : le guide complet pour un couchage confortable",
    'subtitle'       => "Du choix du matelas à l'organisation des rangements, en passant par l'isolation thermique et la ventilation : voici comment transformer n'importe quelle voiture en bivouac discret et confortable.",
    'category'       => 'entretien',
    'category_name'  => 'Entretien & Réparation',
    'category_color' => '#dc2626',
    'tags'           => ['Van Life', 'Road Trip', 'Camping', 'Bivouac'],
    'image'          => '/Image/amenager-voiture-pour-dormir1.webp',
    'date'           => '30 Mars 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Esthétique & Detailing',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Passionné de detailing et perfectionniste dans l'âme, Arnaud décortique les meilleures techniques de protection carrosserie pour vous éviter les pièges des devis gonflés.",
    'reading_time'   => '9 min',
];

$categories = [
    'assurance'  => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien'  => ['name' => 'Entretien & Réparation',  'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Électrique & Hybride',    'color' => '#059669', 'slug' => 'electrique'],
    'occasion'   => ['name' => 'Achat & Occasion',        'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto'       => ['name' => 'Moto & 2 Roues',          'color' => '#f59e0b', 'slug' => 'moto'],
    'permis'     => ['name' => 'Permis',                  'color' => '#0891b2', 'slug' => 'permis'],
];

// ─── Scan dynamique du Blog/ pour le linking interne ───
$current_slug       = pathinfo(__FILE__, PATHINFO_FILENAME);
$same_cat_articles  = [];
$all_other_articles = [];
$blog_dir           = __DIR__;

if (is_dir($blog_dir)) {
    $files = glob($blog_dir . '/*.php');
    foreach ($files as $file) {
        $file_slug = pathinfo($file, PATHINFO_FILENAME);
        if ($file_slug === $current_slug) continue;

        $other_article = null;
        $content       = file_get_contents($file);

        if (preg_match('/\$article\s*=\s*\[(.+?)\];/s', $content, $matches)) {
            try {
                eval('$other_article = [' . $matches[1] . '];');
            } catch (Throwable $e) {
                continue;
            }
        }

        if ($other_article && isset($other_article['title'])) {
            $other_article['slug']  = $file_slug;
            $other_article['url']   = '/Blog/' . $file_slug;
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
        <img src="<?php echo $article['image']; ?>"
             alt="Peugeot 3008 gris foncé dans un garage, coffre grand ouvert révélant l'intérieur vide avec les sièges arrière rabattus"
             class="art-hero-bg"
             width="1200" height="675" decoding="async">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a>
                    <span class="art-bc-sep">/</span>
                    <span>Guides</span>
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
                        <img src="<?php echo $article['author_img']; ?>"
                             alt="<?php echo $article['author']; ?>"
                             width="40" height="40">
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
                <div class="art-tldr-title">L'essentiel à retenir (TL;DR)</div>
                <ul>
                    <li><strong>La longueur d'abord :</strong> Mesurez l'espace disponible banquette rabattue avant tout achat. Il vous faut au minimum <strong>185 cm</strong> pour dormir allongé sans contorsion.</li>
                    <li><strong>Le matelas, c'est 80 % du confort :</strong> Un matelas en mousse haute densité découpé sur mesure change radicalement la qualité du sommeil. Oubliez le gonflable.</li>
                    <li><strong>La chaleur tue le sommeil :</strong> Sans ventilation ni isolation, une voiture devient un four en été et un congélateur en hiver. Prévoyez les deux avant de partir.</li>
                    <li><strong>La discrétion, ça se prépare :</strong> Des rideaux occultants ou une chaussette de vitre évitent les coups de lampe de poche et la condensation — deux problèmes à régler en même temps.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Au sommaire de ce guide</div>
                <ol>
                    <li><a href="#mesurer-espace">Étape 1 — Mesurer et valider l'espace disponible</a></li>
                    <li><a href="#choisir-matelas">Étape 2 — Choisir et installer le bon matelas</a></li>
                    <li><a href="#logistique">Étape 3 — Organiser l'eau et la cuisine</a></li>
                    <li><a href="#lit-finalise">Étape 4 — Finaliser le couchage et l'isolation</a></li>
                    <li><a href="#ventilation">Étape 5 — Ventilation, moustiquaires et discrétion</a></li>
                    <li><a href="#tableau-comparatif">Tableau comparatif des solutions</a></li>
                    <li><a href="#ninja">Bivouac discret : le mode "ninja"</a></li>
                    <li><a href="#kit-bivouac">Le kit bivouac essentiel</a></li>
                    <li><a href="#faq">FAQ : dormir en voiture</a></li>
                </ol>
            </div>

            <!-- Premium Author Box — TOP -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>" class="art-author-avatar" width="80" height="80">
                <div class="art-author-info">
                    <span class="art-author-label">L'Avis du Préparateur</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir toute la rédaction</a>
                </div>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Dormir dans sa voiture n'est plus réservé aux étudiants fauchés ou aux festivals de musique. C'est devenu une vraie pratique de voyage — économique, flexible, et souvent bien plus agréable qu'un camping bondé quand c'est bien préparé. La nuance, c'est ce "bien préparé". Sans les bons réglages, vous passerez une nuit désastreuse. Avec, vous vous réveillerez face à un paysage que vous avez choisi, café à la main depuis le hayon. Voici comment y arriver, étape par étape.</p>

                <!-- IMAGE #1 — La voiture vide prête à être aménagée -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/amenager-voiture-pour-dormir1.webp"
                         alt="Peugeot 3008 gris foncé dans un garage lumineux, coffre grand ouvert avec les sièges arrière complètement rabattus — la toile vierge de l'aménagement"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        Le point de départ : un coffre vide, des sièges rabattus et des possibilités infinies. Ici, un Peugeot 3008 — l'un des meilleurs gabarits pour dormir en SUV.
                    </figcaption>
                </figure>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="mesurer-espace">Étape 1 — Mesurer et valider l'espace disponible</h2>
                <p>Tout commence par une mesure honnête. Rabattez les sièges arrière complètement, posez un mètre ruban sur le sol du coffre et mesurez jusqu'à la banquette avant. Si vous obtenez moins de 175 cm, vous allez devoir dormir en diagonale ou décaler légèrement les sièges avant. En dessous de 165 cm, reconsidérez sérieusement votre approche — certaines voitures ne sont simplement pas compatibles avec un couchage confortable sans travaux.</p>

                <!-- IMAGE #2 — Le test du mètre ruban -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/amenager-voiture-pour-dormir2.webp"
                         alt="Vue intérieure du coffre d'un Peugeot 3008 avec les sièges complètement rabattus et un mètre ruban jaune étiré sur le plancher sombre — test de longueur disponible"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        Le test incontournable avant tout achat : mètre ruban étiré du fond du coffre jusqu'aux sièges avant, sièges arrière à plat.
                    </figcaption>
                </figure>

                <h3>Les gabarits qui fonctionnent bien sans aménagement lourd</h3>
                <p>Les breaks, les SUV et les monospaces sont vos meilleurs alliés. Un Citroën C5 Aircross, un Skoda Octavia Combi ou un Dacia Jogger offrent souvent 180 à 195 cm une fois les sièges rabattus. Les berlines compactes (Golf, 308) sont limites mais faisables pour les gabarits inférieurs à 180 cm. Les citadines pures (Twingo, 108) sont généralement incompatibles sauf pour les enfants.</p>

                <h3>Le problème de la marche entre le coffre et la banquette</h3>
                <p>Presque toutes les voitures ont une "marche" — une différence de niveau entre le plancher du coffre et le fond de la banquette rabattue. Elle va de 2 cm (quasi imperceptible) à 12 cm (douloureux sur les reins en quelques heures). C'est elle que vous devez combler en premier. Une planche en contreplaqué découpée à la forme de l'espace, posée sur la zone basse, suffit souvent à créer un plancher plat parfaitement utilisable.</p>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="choisir-matelas">Étape 2 — Choisir et installer le bon matelas</h2>
                <p>C'est LE choix qui détermine 80 % de la qualité de votre sommeil. Il existe trois familles de solutions, avec des différences importantes en termes de confort, de prix et d'encombrement. Mais avant même de commander quoi que ce soit, découpez un gabarit en carton épais à la forme exacte de votre espace — c'est la seule façon de ne pas se tromper de dimensions.</p>

                <!-- IMAGE #3 — Installation du matelas -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/amenager-voiture-pour-dormir3.webp"
                         alt="Deux personnes dans la trentaine en train d'installer un matelas en mousse plié dans le coffre d'un Peugeot 3008, lumière chaleureuse de fin d'après-midi dans un garage"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        La mise en place du matelas : à deux, c'est bien plus simple. Comptez 20 minutes pour la première installation, 5 minutes ensuite.
                    </figcaption>
                </figure>

                <h3>Mousse haute densité découpée sur mesure — notre choix</h3>
                <p>C'est la solution plébiscitée par tous ceux qui font du couchage en voiture régulièrement. Vous commandez une plaque de mousse haute densité (40 kg/m³ minimum) de 8 à 10 cm d'épaisseur, et vous la découpez exactement à la forme de votre espace avec un cutter à lame longue ou un couteau électrique. Le résultat : aucune bosse, aucun point de pression, un matelas qui ne bouge pas et se range facilement dressé contre le bord du coffre le matin.</p>

                <blockquote class="art-blockquote">
                    Le conseil d'Arnaud : commandez votre mousse avec 2 cm de marge de chaque côté, puis affinez à la découpe. Une mousse trop petite laisse des espaces désagréables sur les côtés. Trop grande, elle bombe au centre. Visez le millimètre près sur la largeur — c'est elle qui dicte le confort réel.
                </blockquote>

                <h3>Matelas gonflables spécial coffre de voiture</h3>
                <p>Des modèles comme le Hikenture ou le Therm-a-Rest Mondoking sont spécialement conçus pour s'adapter à la forme d'un coffre de SUV ou de break. Ils se rangent dans un sac compressible et se gonflent en quelques minutes via une valve intégrée. C'est une bonne option pour un usage occasionnel (2 à 3 nuits par mois), mais ils se dégonflent légèrement sur la nuit et nécessitent une regonfle matinale rapide.</p>

                <h3>Le surmatelas pliant (solution intermédiaire)</h3>
                <p>Si vous souhaitez conserver l'usage quotidien de votre voiture sans modifier quoi que ce soit en permanence, un surmatelas pliant de 5 cm en mousse alvéolaire (type Karimat épais) posé directement sur la banquette rabattue est la solution la plus flexible. Il se roule, se range dans le coffre en 30 secondes et coûte moins de 80 €.</p>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="logistique">Étape 3 — Organiser l'eau et la cuisine</h2>
                <p>L'autonomie alimentaire est ce qui distingue un bivouac agréable d'une expérience frustrante. L'objectif : avoir accès à de l'eau propre, pouvoir préparer un café ou un repas chaud, et gérer les déchets proprement — le tout dans l'espace d'une boîte à chaussures géante.</p>

                <!-- IMAGE #4 — Organisation eau et cuisine -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/amenager-voiture-pour-dormir4.webp"
                         alt="Gros plan dans un coffre de voiture : deux caisses en plastique transparent remplies de nourriture de road trip, un bidon d'eau de 10 litres avec robinet, et un petit réchaud à gaz portable — organisation soignée"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        Le coin cuisine complet : deux caisses alimentaires transparentes + bidon 10L + réchaud à gaz. Tout tient dans 40 × 30 cm.
                    </figcaption>
                </figure>

                <h3>Le système de caisses transparentes empilables</h3>
                <p>Des caisses Ikea Samla ou Sunware en plastique transparent permettent de voir immédiatement ce qu'elles contiennent sans tout sortir. Organisez-les par usage : une pour la cuisine (réchaud, couverts, épices), une pour les aliments secs du lendemain, une pour l'électronique et les câbles. Elles s'empilent sous ou à côté du matelas selon la configuration de votre véhicule et résistent à l'humidité — contrairement aux sacs tissu.</p>

                <h3>L'eau : le point critique souvent négligé</h3>
                <p>Prévoyez au minimum 5 litres d'eau par personne et par nuit, dans un bidon rigide avec robinet intégré (type Campingaz ou Reliance). Évitez les bouteilles en plastique souple : elles prennent de la place, se renversent et s'écrasent. Un bidon de 10 litres posé dans le coin du coffre, accessible depuis le hayon, vous permettra de vous laver les mains, de rincer la vaisselle et de préparer vos boissons sans avoir à aller chercher de l'eau à 23h.</p>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="lit-finalise">Étape 4 — Finaliser le couchage et l'isolation</h2>
                <p>Un bon matelas ne suffit pas. La qualité du sommeil dépend aussi du sous-matelas (isolation du froid qui remonte du sol) et de la literie choisie. En voiture, on cible le même confort qu'à la maison — pas un camping spartiate.</p>

                <!-- IMAGE #5 — Le lit finalisé -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/amenager-voiture-pour-dormir5.webp"
                         alt="Setup de couchage douillet dans le coffre d'un SUV : matelas en mousse recouvert d'une épaisse couette blanche et deux oreillers à mémoire de forme — vue depuis le hayon ouvert, atmosphère chaleureuse"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        Le résultat final : un vrai lit avec couette épaisse et oreillers. On est loin de l'image du "dodo en voiture" façon étudiant.
                    </figcaption>
                </figure>

                <h3>Le sous-matelas : l'isolation du sol souvent oubliée</h3>
                <p>Le plancher métallique d'un coffre est un excellent conducteur thermique. En hiver, il vous prélèvera de la chaleur toute la nuit si vous ne mettez rien en dessous du matelas. Une feuille de Thinsulate (isolation réfléchissante fine) ou simplement une couverture de survie repliée entre le plancher et le matelas fait une différence mesurable — jusqu'à 4°C relevés dans nos tests.</p>

                <h3>Couette ou sac de couchage ?</h3>
                <p>Pour les températures supérieures à 5°C, une couette légère (200g/m²) compressée dans un sac fourre-tout offre bien plus de confort qu'un sac de couchage — vous pouvez vous retourner librement, aérer facilement et la laver en machine. En dessous de 5°C, passez au sac de couchage avec indice de confort adapté (−5°C pour les nuits hivernales françaises), et ajoutez une couverture polaire par-dessus si besoin.</p>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="ventilation">Étape 5 — Ventilation, moustiquaires et discrétion</h2>
                <p>Vous respirez environ 250 ml d'eau par heure pendant le sommeil. Dans un espace fermé comme un coffre de voiture, cette humidité se dépose sur les vitres froides et génère de la condensation. Au-delà du désagrément, l'humidité répétée finit par créer des moisissures sur les joints et les revêtements. La solution est simple mais indispensable : assurer un flux d'air minimal constant — et se protéger des insectes en été.</p>

                <!-- IMAGE #6 — La moustiquaire -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/amenager-voiture-pour-dormir6.webp"
                         alt="Gros plan extérieur sur la vitre arrière d'une voiture recouverte d'une chaussette en maille noire anti-moustiques, la vitre légèrement abaissée de 3 centimètres en dessous — astuce bivouac voiture"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        La chaussette moustiquaire sur vitre entrouverte : ventilation + protection insectes + discrétion, en un seul accessoire.
                    </figcaption>
                </figure>

                <h3>La chaussette moustiquaire : l'astuce qui change tout</h3>
                <p>Cousues dans une maille fine noire, les chaussettes moustiquaires s'enfilent de l'extérieur sur une vitre entrouverte de 2 à 3 cm. Elles laissent passer l'air, bloquent les insectes, absorbent une partie de la condensation et sont pratiquement invisibles de l'extérieur. Disponibles sur Etsy ou chez des artisans van life pour 15 à 30 € la paire, elles sont custom-fit pour votre modèle de voiture.</p>

                <h3>Le pare-soleil réfléchissant : isolation + occultation</h3>
                <p>Pour les vitres avant (pare-brise, lunette arrière), les pare-soleil en matériau réfléchissant type Reflectix sont imbattables en termes de rapport qualité/prix. Achetez un rouleau de 60 cm de large, découpez à la forme exacte de chaque vitre en utilisant du papier kraft comme gabarit, et fixez avec des velcros autocollants. Gain thermique immédiat — jusqu'à 8°C d'écart en conditions estivales — et occultation totale pour dormir sans être réveillé à 6h du matin par le soleil.</p>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="tableau-comparatif">Tableau comparatif des solutions de couchage</h2>
                <p>Pour vous aider à choisir la solution la mieux adaptée à votre usage (week-end ponctuel, voyages réguliers ou itinérance longue durée), voici un récapitulatif honnête des options disponibles :</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Solution</th>
                                <th>Confort</th>
                                <th>Praticité quotidienne</th>
                                <th>Budget</th>
                                <th>Pour qui ?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background: #fef2f2;">
                                <td><strong>Mousse HD sur mesure</strong></td>
                                <td>⭐⭐⭐⭐⭐</td>
                                <td>⭐⭐⭐ (se range debout)</td>
                                <td>60 – 120 €</td>
                                <td>Voyageurs réguliers <span style="background:#dc2626;color:#fff;font-size:0.7rem;padding:2px 6px;border-radius:3px;margin-left:4px;">Notre choix</span></td>
                            </tr>
                            <tr>
                                <td><strong>Matelas gonflable spécial</strong></td>
                                <td>⭐⭐⭐⭐</td>
                                <td>⭐⭐⭐⭐ (compact)</td>
                                <td>80 – 200 €</td>
                                <td>Usages ponctuels (< 3 nuits/mois)</td>
                            </tr>
                            <tr>
                                <td><strong>Surmatelas pliant mousse</strong></td>
                                <td>⭐⭐⭐</td>
                                <td>⭐⭐⭐⭐⭐ (30 sec)</td>
                                <td>40 – 80 €</td>
                                <td>Week-ends improvisés</td>
                            </tr>
                            <tr>
                                <td><strong>Matelas voiture universel</strong></td>
                                <td>⭐⭐</td>
                                <td>⭐⭐⭐⭐</td>
                                <td>30 – 60 €</td>
                                <td>Dépannage uniquement</td>
                            </tr>
                            <tr>
                                <td><strong>Tente de toit (rooftop tent)</strong></td>
                                <td>⭐⭐⭐⭐⭐</td>
                                <td>⭐⭐ (montage 10 min)</td>
                                <td>800 – 2 500 €</td>
                                <td>Aventuriers 4×4 longue durée</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="ninja">Bivouac discret : le mode "ninja"</h2>
                <p>Choisir où se garer est autant une question de bon sens que de légalité. En ville, optez pour des parkings relais calmes ou des zones résidentielles larges. En nature, un chemin forestier discret ou une aire de repos isolée font l'affaire. La règle d'or : ne jamais être le seul véhicule présent, et ne laisser aucune trace de votre passage le matin.</p>

                <!-- IMAGE #7 — Le côté ninja en nature -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/amenager-voiture-pour-dormir7.webp"
                         alt="Peugeot 3008 garé sur un chemin de terre entouré d'arbres en Ardèche au crépuscule — la voiture semble banale de l'extérieur mais une faible lueur orangée chaleureuse est visible à travers les vitres teintées arrière"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        Mode ninja activé en Ardèche : rien ne distingue cette voiture d'un randonneur qui s'est garé. Sauf cette petite lueur orange à l'intérieur.
                    </figcaption>
                </figure>

                <h3>Les erreurs qui vous font repérer</h3>
                <p>Trois comportements trahissent immanquablement un dormeur en voiture : la lumière visible de l'extérieur (utilisez une lampe frontale rouge plutôt que blanche), les vitres entièrement embuées le matin (d'où l'importance de la ventilation), et les mouvements à l'intérieur avant l'aube. Pour la lumière, une LED rouge ou une lampe de camping avec diffuseur chaud consomme moins et reste invisible à 20 mètres.</p>
                <p>Avant de vous installer pour la nuit dans une zone isolée, effectuez un rapide tour de votre véhicule : savoir comment <a href="/Blog/detecteur-traceur-gps-voiture">détecter un traceur GPS caché dans votre voiture</a> peut s'avérer utile, notamment si vous prêtez souvent votre véhicule ou rentrez d'un long voyage.</p>

                <!-- ═══════════════════════════════════════ -->
                <h2 id="kit-bivouac">Le kit bivouac essentiel à emporter</h2>
                <p>Au-delà de l'aménagement du couchage lui-même, certains accessoires font toute la différence entre une nuit mémorable et une nuit difficile. Sur les routes forestières ou de campagne empruntées souvent de nuit pour rejoindre un spot isolé, un <a href="/Blog/meilleur-ultrason-anti-gibier-voiture">sifflet ultrason anti-gibier</a> mérite une place dans votre kit — la faune sauvage est un risque réel au crépuscule et à l'aube. Voici la liste non exhaustive des éléments qu'Arnaud ne quitte plus depuis trois ans de van life :</p>

                <!-- CHECKLIST INTERACTIVE -->
                <div class="bivouac-checklist" id="bivouac-checklist" role="region" aria-label="Kit bivouac essentiel">
                    <div class="checklist-header">
                        <span class="checklist-title">&#10003; Kit bivouac — cochez au fil du chargement</span>
                        <span class="checklist-progress" id="checklist-score">0 / 12</span>
                    </div>
                    <div class="checklist-cols">
                        <div class="checklist-group">
                            <div class="checklist-group-title">Couchage</div>
                            <label class="checklist-item"><input type="checkbox"> <span>Matelas / surmatelas</span></label>
                            <label class="checklist-item"><input type="checkbox"> <span>Sac de couchage adapté à la saison</span></label>
                            <label class="checklist-item"><input type="checkbox"> <span>Oreiller gonflable ou compressible</span></label>
                            <label class="checklist-item"><input type="checkbox"> <span>Rideaux occultants / chaussettes de vitre</span></label>
                        </div>
                        <div class="checklist-group">
                            <div class="checklist-group-title">Cuisine & eau</div>
                            <label class="checklist-item"><input type="checkbox"> <span>Réchaud à gaz + cartouche</span></label>
                            <label class="checklist-item"><input type="checkbox"> <span>Bidon d'eau 5–10 L</span></label>
                            <label class="checklist-item"><input type="checkbox"> <span>Popote + couverts</span></label>
                            <label class="checklist-item"><input type="checkbox"> <span>Sac poubelle réutilisable</span></label>
                        </div>
                        <div class="checklist-group">
                            <div class="checklist-group-title">Confort & sécurité</div>
                            <label class="checklist-item"><input type="checkbox"> <span>Lampe frontale rouge</span></label>
                            <label class="checklist-item"><input type="checkbox"> <span>Batterie externe 20 000 mAh</span></label>
                            <label class="checklist-item"><input type="checkbox"> <span>Câble 12V / USB pour ventilateur</span></label>
                            <label class="checklist-item"><input type="checkbox"> <span>Trousse de secours</span></label>
                        </div>
                    </div>
                    <div class="checklist-bar-wrap">
                        <div class="checklist-bar" id="checklist-bar" style="width:0%"></div>
                    </div>
                </div>

                <!-- IMAGE #8 — Le réveil face au paysage -->
                <figure style="margin: 2rem 0;">
                    <img src="/Image/amenager-voiture-pour-dormir8.webp"
                         alt="Vue subjective au réveil depuis l'intérieur d'un coffre de voiture : hayon grand ouvert sur une rivière et des falaises rocheuses dans la brume matinale, au premier plan une cafetière italienne sur un réchaud de camping posé sur le pare-chocs"
                         width="800" height="450"
                         loading="lazy" decoding="async"
                         style="width:100%; border-radius: 8px; display:block;">
                    <figcaption style="font-size: 0.875rem; color: #6b7280; margin-top: 0.5rem; font-style: italic;">
                        La récompense. Un café, une rivière, des falaises. C'est ça, dormir en voiture bien préparé.
                    </figcaption>
                </figure>

            </div><!-- .art-content -->

            <!-- Premium Author Box — BOTTOM -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>" class="art-author-avatar" width="80" height="80">
                <div class="art-author-info">
                    <span class="art-author-label">L'Avis du Préparateur</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir toute la rédaction</a>
                </div>
            </div>

            <!-- FAQ -->
            <div class="art-conclusion">
                <h2 id="faq">FAQ : dormir en voiture</h2>

                <h3>Est-ce légal de dormir dans sa voiture en France ?</h3>
                <p>Dormir dans sa voiture est <strong>légal en France</strong> sur la voie publique, dans les parkings ouverts au public et sur les aires d'autoroute. En revanche, bivouaquer dans une forêt domaniale ou un parc national peut être soumis à des réglementations locales. En ville, optez pour des parkings relais ou des zones résidentielles calmes — évitez simplement les zones réglementées et les interdictions de stationnement nocturne spécifiques.</p>

                <h3>Comment éviter la buée et la condensation dans la nuit ?</h3>
                <p>La condensation est inévitable si l'habitacle est hermétiquement fermé, car vous expirez de l'humidité toute la nuit. La solution est d'<strong>assurer une micro-ventilation permanente</strong> via deux vitres légèrement entrebâillées (avec chaussettes moustiquaires en été). En complément, un déshumidificateur à cristaux de sel posé dans le coffre absorbe l'excès d'humidité résiduelle.</p>

                <h3>Peut-on laisser le moteur tourner pour se chauffer la nuit ?</h3>
                <p><strong>Non — c'est dangereux.</strong> Laisser le moteur tourner les vitres fermées génère un risque d'intoxication au monoxyde de carbone même en plein air, car les gaz d'échappement peuvent s'accumuler sous le véhicule et remonter dans l'habitacle. Pour les nuits froides, utilisez plutôt un sac de couchage adapté à la température (indice de confort −5°C pour les nuits hivernales européennes), des chaussettes thermiques et une couverture de survie sous le matelas.</p>

                <h3>Combien de temps faut-il pour monter un aménagement simple ?</h3>
                <p>Un aménagement de base — matelas découpé + rideaux occultants + organisation des rangements — se réalise en <strong>une demi-journée</strong> pour un budget de 100 à 200 €. La découpe du matelas en mousse est l'étape la plus longue (1h30 avec les gabarits). Prévoyez une nuit test en bas de chez vous avant votre premier vrai voyage.</p>

                <h3>Quelle voiture est la mieux adaptée pour dormir dedans ?</h3>
                <p>Les meilleures options sont les <strong>breaks longs</strong> (Skoda Octavia Combi, Peugeot 308 SW, Volkswagen Passat SW) et les <strong>SUV intermédiaires</strong> (Dacia Duster, Peugeot 3008, Renault Kadjar) qui offrent 185 à 200 cm à plat. Les monospaces type Citroën C4 Spacetourer restent la référence absolue pour deux personnes. Les berlines compactes sont possibles jusqu'à 175 cm de taille mais demandent une planche de rattrapage de niveau.</p>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>" width="400" height="225" loading="lazy">
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
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>" width="400" height="225" loading="lazy">
                                </div>
                                <div class="art-related-body">
                                    <h3><?php echo htmlspecialchars($rel['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p>
                                    <span class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Rédaction'); ?> &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p style="color: #666; padding: 20px 0;">D'autres articles arrivent bientôt dans cette catégorie !</p>
                    <?php endif; ?>
                </div>
            </section>

        </div><!-- .art-main-col -->

        <!-- ASYMMETRIC RIGHT SIDEBAR (dynamique) -->
        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">

                <?php if (!empty($same_cat_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Sur le même sujet</div>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $sa): ?>
                            <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($sa['image']); ?>" alt="<?php echo htmlspecialchars($sa['title']); ?>" width="160" height="90" loading="lazy">
                                    <span class="art-side-cat-pill" style="background: <?php echo $article['category_color']; ?>"><?php echo $article['category_name']; ?></span>
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
                                    <img src="<?php echo htmlspecialchars($ra['image']); ?>" alt="<?php echo htmlspecialchars($ra['title']); ?>" width="160" height="90" loading="lazy">
                                </div>
                                <h4><?php echo htmlspecialchars($ra['title']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (empty($same_cat_articles) && empty($all_other_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Explorer</div>
                        <a href="/<?php echo $article['category']; ?>" class="btn-primary"
                            style="display:block; text-align:center; background-color: <?php echo $article['category_color']; ?>; border-color: <?php echo $article['category_color']; ?>; margin-top: 15px;">
                            Voir tous les articles <?php echo $article['category_name']; ?>
                        </a>
                    </div>
                <?php endif; ?>

            </div>
        </aside>

    </div><!-- .art-layout-wrapper -->
</article>

<!-- ░░░ CHECKLIST CSS + JS ░░░ -->
<style>
.bivouac-checklist { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; margin: 2rem 0; font-family: inherit; }
.checklist-header { display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.25rem; background: #fef2f2; border-bottom: 1px solid #fecaca; }
.checklist-title { font-weight: 700; font-size: 0.9375rem; color: #991b1b; }
.checklist-progress { font-size: 0.875rem; font-weight: 700; color: #dc2626; font-variant-numeric: tabular-nums; }
.checklist-cols { display: grid; grid-template-columns: repeat(3, 1fr); gap: 0; }
@media (max-width: 640px) { .checklist-cols { grid-template-columns: 1fr; } }
.checklist-group { padding: 1rem 1.25rem; border-right: 1px solid #e2e8f0; }
.checklist-group:last-child { border-right: none; }
.checklist-group-title { font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; color: #9ca3af; margin-bottom: 0.625rem; }
.checklist-item { display: flex; align-items: flex-start; gap: 0.5rem; padding: 0.375rem 0; cursor: pointer; font-size: 0.875rem; color: #374151; }
.checklist-item input[type="checkbox"] { width: 16px; height: 16px; flex-shrink: 0; margin-top: 1px; accent-color: #dc2626; cursor: pointer; }
.checklist-item.checked span { text-decoration: line-through; color: #9ca3af; }
.checklist-bar-wrap { height: 4px; background: #e5e7eb; }
.checklist-bar { height: 100%; background: #dc2626; transition: width 300ms ease; border-radius: 0 2px 2px 0; }
.art-blockquote { border-left: 4px solid #dc2626; padding: 0.875rem 1.25rem; background: #fef2f2; margin: 1.5rem 0; font-style: italic; border-radius: 0 6px 6px 0; color: #374151; }
</style>

<script>
(function() {
    var cl = document.getElementById('bivouac-checklist');
    if (!cl) return;
    var checkboxes = cl.querySelectorAll('input[type="checkbox"]');
    var bar   = document.getElementById('checklist-bar');
    var score = document.getElementById('checklist-score');
    var total = checkboxes.length;
    checkboxes.forEach(function(cb) {
        cb.addEventListener('change', function() {
            var checked = cl.querySelectorAll('input[type="checkbox"]:checked').length;
            if (score) score.textContent = checked + ' / ' + total;
            if (bar)   bar.style.width   = Math.round((checked / total) * 100) + '%';
            var label = cb.closest('.checklist-item');
            if (label) { cb.checked ? label.classList.add('checked') : label.classList.remove('checked'); }
        });
    });
})();
</script>

<!-- Schema JSON-LD (Article + FAQ) -->
<script type="application/ld+json">
<?php
$schema = [
    "@context" => "https://schema.org",
    "@graph"   => [
        [
            "@type"            => "Article",
            "mainEntityOfPage" => ["@type" => "WebPage", "@id" => "https://garageraymond.fr/Blog/" . $current_slug],
            "headline"         => $article['title'],
            "description"      => $article['subtitle'],
            "image"            => ["https://garageraymond.fr" . $article['image']],
            "datePublished"    => "2026-03-30T08:00:00+01:00",
            "dateModified"     => "2026-03-30T08:00:00+01:00",
            "author"           => ["@type" => "Person", "name" => $article['author'], "url" => "https://garageraymond.fr/equipe", "jobTitle" => $article['author_role']],
            "publisher"        => ["@type" => "Organization", "name" => "Le garage expert Auto", "url" => "https://garageraymond.fr", "logo" => ["@type" => "ImageObject", "url" => "https://garageraymond.fr/Image/favicon.png", "width" => "512", "height" => "512"]]
        ],
        [
            "@type"      => "FAQPage",
            "mainEntity" => [
                ["@type" => "Question", "name" => "Est-ce légal de dormir dans sa voiture en France ?", "acceptedAnswer" => ["@type" => "Answer", "text" => "Dormir dans sa voiture est légal en France sur la voie publique, dans les parkings ouverts et sur les aires d'autoroute. Certaines zones (forêts domaniales, parcs nationaux) peuvent être soumises à des réglementations locales."]],
                ["@type" => "Question", "name" => "Comment éviter la condensation quand on dort en voiture ?", "acceptedAnswer" => ["@type" => "Answer", "text" => "Assurez une micro-ventilation permanente en entrebâillant légèrement deux vitres opposées de 1 à 2 cm, idéalement avec des chaussettes moustiquaires. Ajoutez un déshumidificateur à cristaux de sel dans le coffre."]],
                ["@type" => "Question", "name" => "Quel est le meilleur matelas pour dormir en voiture ?", "acceptedAnswer" => ["@type" => "Answer", "text" => "Le matelas en mousse haute densité (40 kg/m³ minimum) découpé sur mesure à la forme exacte de votre coffre est la meilleure solution en termes de confort et de rapport qualité/prix (60-120 €)."]],
                ["@type" => "Question", "name" => "Quelle voiture est la plus adaptée pour dormir à l'intérieur ?", "acceptedAnswer" => ["@type" => "Answer", "text" => "Les breaks longs (Skoda Octavia Combi, Peugeot 308 SW) et les SUV intermédiaires (Dacia Duster, Peugeot 3008) offrent généralement 185 à 200 cm à plat, suffisants pour dormir confortablement."]],
                ["@type" => "Question", "name" => "Peut-on laisser le moteur tourner pour se chauffer en dormant ?", "acceptedAnswer" => ["@type" => "Answer", "text" => "Non, c'est dangereux. Laisser le moteur tourner vitres fermées génère un risque d'intoxication au monoxyde de carbone. Préférez un sac de couchage adapté et une couverture de survie sous le matelas."]]
            ]
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

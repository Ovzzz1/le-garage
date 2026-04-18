<?php
// published: 2026-04-18 16:00
/**
 * garantie-3-mois-voiture-occasion.php
 */

$page_title       = "Garantie 3 mois voiture occasion : ce que le garage ne vous dit pas (Loi 2026)";
$page_description = "La garantie 3 mois voiture occasion est un écran de fumée. La loi vous protège 24 mois. Comparatif, droits, recours et guide pratique pour ne pas se faire avoir.";

$article = [
    'title'          => "Garantie 3 mois voiture occasion : ce que le garage ne vous dit pas",
    'subtitle'       => "La garantie commerciale de 3 mois n'est qu'un écran de fumée. En 2026, la loi vous protège bien au-delà — 24 mois, charge de la preuve inversée, zéro frais. Voici tout ce que votre vendeur a omis de préciser.",
    'category'       => 'occasion',
    'category_name'  => 'Achat & Occasion',
    'category_color' => '#7c3aed',
    'tags'           => ['Garantie Occasion', 'Droits Acheteur', 'Garantie Légale', 'Voiture Occasion', 'Loi Consommation'],
    'image'          => '/Image/garantie-3-mois-voiture-occasion1.webp',
    'date'           => '18 Avril 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Spécialiste Achat & Occasion',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Arnaud suit le marché de l'occasion depuis plus de 20 ans. Il connaît toutes les clauses abusives et les tours de passe-passe des vendeurs professionnels — et il vous explique comment vous en prémunir.",
    'reading_time'   => '7 min',
];

$categories = [
    'assurance'  => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien'  => ['name' => 'Entretien & Réparation',  'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Électrique & Hybride',    'color' => '#059669', 'slug' => 'electrique'],
    'occasion'   => ['name' => 'Achat & Occasion',        'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto'       => ['name' => 'Moto & 2 Roues',          'color' => '#ea580c', 'slug' => 'moto'],
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

<!-- CSS spécifique article : détecteur de droits interactif -->
<style>
    .detecteur-droits {
        background: #1a1a2e;
        border: 1px solid #7c3aed;
        border-radius: 12px;
        padding: 28px 32px;
        margin: 32px 0;
    }
    .detecteur-droits h3 {
        color: #7c3aed;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: .08em;
        margin: 0 0 20px 0;
    }
    .detecteur-question {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        padding: 14px 0;
        border-bottom: 1px solid #2a2a3e;
        flex-wrap: wrap;
    }
    .detecteur-question:last-of-type {
        border-bottom: none;
    }
    .detecteur-question p {
        margin: 0;
        color: #ccc;
        font-size: .95rem;
        flex: 1;
    }
    .detecteur-btns {
        display: flex;
        gap: 8px;
        flex-shrink: 0;
    }
    .detecteur-btn {
        padding: 7px 20px;
        border-radius: 6px;
        border: 1px solid #444;
        background: transparent;
        color: #aaa;
        font-size: .9rem;
        cursor: pointer;
        transition: all .2s;
    }
    .detecteur-btn.oui.active  { background: #16a34a; border-color: #16a34a; color: #fff; }
    .detecteur-btn.non.active  { background: #dc2626; border-color: #dc2626; color: #fff; }
    .detecteur-btn:hover       { border-color: #7c3aed; color: #fff; }
    .detecteur-resultat {
        display: none;
        margin-top: 22px;
        padding: 16px 20px;
        border-radius: 8px;
        font-size: .95rem;
        line-height: 1.6;
    }
    .detecteur-resultat.couvert {
        background: rgba(22,163,74,.12);
        border-left: 4px solid #16a34a;
        color: #d1fae5;
    }
    .detecteur-resultat.non-couvert {
        background: rgba(220,38,38,.12);
        border-left: 4px solid #dc2626;
        color: #fee2e2;
    }
    .detecteur-resultat.attente {
        background: rgba(124,58,237,.1);
        border-left: 4px solid #7c3aed;
        color: #ede9fe;
    }
</style>

<!-- ARTICLE HERO -->
<article>
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>"
             alt="Comparatif garantie 3 mois commerciale et garantie légale 24 mois voiture occasion"
             class="art-hero-bg"
             width="1200" height="675" decoding="async">
        <div class="art-hero-overlay"></div>

        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/occasion"><?php echo $article['category_name']; ?></a>
                    <span class="art-bc-sep">/</span>
                    <span>Guide Pratique</span>
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
                    <li><strong>La garantie 3 mois n'est pas obligatoire :</strong> C'est une garantie commerciale facultative — un geste du vendeur, rien de plus.</li>
                    <li><strong>La vraie protection : 24 mois :</strong> La garantie légale de conformité vous couvre 2 ans, quoi que dise votre contrat.</li>
                    <li><strong>Charge de la preuve inversée :</strong> Panne dans les 12 premiers mois ? C'est au garage de prouver qu'il n'est pas responsable, pas à vous.</li>
                    <li><strong>Zéro frais de diagnostic :</strong> Le garage ne peut pas vous facturer la recherche de panne avant d'activer la garantie légale (Art. L217-11).</li>
                    <li><strong>Clause km nulle :</strong> "3 mois ou 5 000 km" annule la garantie commerciale, jamais la garantie légale.</li>
                </ul>
            </div>

            <!-- Table of Contents -->
            <div class="art-toc">
                <div class="art-toc-title">Dans ce dossier</div>
                <ol>
                    <li><a href="#detecteur">Suis-je couvert ? Le détecteur de droits</a></li>
                    <li><a href="#garantie-obligatoire">La garantie 3 mois est-elle obligatoire ?</a></li>
                    <li><a href="#comparatif">Garantie légale vs garantie commerciale</a></li>
                    <li><a href="#mbp">Moteur, Boîte, Pont : ce qui est vraiment couvert</a></li>
                    <li><a href="#clause-km">Clause "3 mois ou 5 000 km" : comment l'interpréter</a></li>
                    <li><a href="#guide-panne">Guide pratique en cas de panne</a></li>
                    <li><a href="#recours">Refus de prise en charge : vos recours</a></li>
                    <li><a href="#faq">FAQ garantie automobile occasion</a></li>
                </ol>
            </div>

            <!-- Article Content -->
            <div class="art-content">

                <p>Vous venez d'acheter un véhicule d'occasion chez un professionnel et le vendeur a fièrement tamponné "Garantie 3 mois Moteur-Boîte-Pont" sur votre facture. Cela semble rassurant. Pourtant, en cas de panne, de nombreux acheteurs se retrouvent démunis face à un garage qui refuse toute prise en charge. La réalité : cette garantie de 3 mois n'est qu'un écran de fumée. En 2026, la loi vous protège bien au-delà.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="detecteur">Suis-je couvert ? Le détecteur de droits</h2>

                <div class="detecteur-droits">
                    <h3>Détecteur de droits — Répondez en 2 clics</h3>

                    <div class="detecteur-question" id="dq1">
                        <p>Avez-vous acheté votre voiture à un <strong>vendeur professionnel</strong> (garage, concessionnaire) ?</p>
                        <div class="detecteur-btns">
                            <button class="detecteur-btn oui" data-q="1" data-v="oui">Oui</button>
                            <button class="detecteur-btn non" data-q="1" data-v="non">Non</button>
                        </div>
                    </div>

                    <div class="detecteur-question" id="dq2">
                        <p>La panne est-elle survenue <strong>moins de 12 mois</strong> après la date d'achat ?</p>
                        <div class="detecteur-btns">
                            <button class="detecteur-btn oui" data-q="2" data-v="oui">Oui</button>
                            <button class="detecteur-btn non" data-q="2" data-v="non">Non</button>
                        </div>
                    </div>

                    <div class="detecteur-resultat attente" id="detect-attente">
                        Répondez aux deux questions pour connaître votre situation.
                    </div>
                    <div class="detecteur-resultat couvert" id="detect-couvert">
                        Vous êtes couvert par la garantie légale de conformité. Le défaut est présumé exister depuis avant la vente — c'est au garage de prouver le contraire. Aucun frais de diagnostic ne peut vous être réclamé. Lisez la suite pour savoir exactement comment faire valoir ce droit.
                    </div>
                    <div class="detecteur-resultat non-couvert" id="detect-non-couvert">
                        La garantie légale de conformité ne s'applique pas dans votre situation. Selon votre cas, la garantie contre les vices cachés (Art. 1641 du Code Civil) peut prendre le relais — mais la charge de la preuve vous revient. Consultez un expert automobile indépendant avant toute démarche.
                    </div>
                </div>

                <script>
                (function() {
                    var answers = { 1: null, 2: null };

                    function update() {
                        var a = document.querySelectorAll('.detecteur-btn');
                        a.forEach(function(btn) { btn.classList.remove('active'); });
                        Object.keys(answers).forEach(function(q) {
                            if (answers[q]) {
                                var active = document.querySelector('.detecteur-btn[data-q="' + q + '"][data-v="' + answers[q] + '"]');
                                if (active) active.classList.add('active');
                            }
                        });

                        var attente  = document.getElementById('detect-attente');
                        var couvert  = document.getElementById('detect-couvert');
                        var nonCouvert = document.getElementById('detect-non-couvert');

                        attente.style.display    = 'none';
                        couvert.style.display    = 'none';
                        nonCouvert.style.display = 'none';

                        if (!answers[1] || !answers[2]) {
                            attente.style.display = 'block';
                        } else if (answers[1] === 'oui' && answers[2] === 'oui') {
                            couvert.style.display = 'block';
                        } else {
                            nonCouvert.style.display = 'block';
                        }
                    }

                    document.querySelectorAll('.detecteur-btn').forEach(function(btn) {
                        btn.addEventListener('click', function() {
                            answers[this.dataset.q] = this.dataset.v;
                            update();
                        });
                    });

                    update();
                })();
                </script>

                <!-- ══════════════════════════════════ -->
                <h2 id="garantie-obligatoire">La garantie 3 mois est-elle obligatoire ?</h2>

                <p>C'est l'une des idées reçues les plus tenaces de l'automobile. Juridiquement, <strong>la garantie obligatoire de 3 mois n'existe pas</strong>.</p>

                <p>Ce que l'on appelle la "garantie 3 mois" est en réalité une <strong>garantie commerciale</strong> — un geste facultatif proposé par le vendeur ou souscrit auprès d'un organisme tiers. Elle sert de produit d'appel pour rassurer l'acheteur au moment de signer. Mais l'absence de garantie commerciale ne dispense pas le garage de ses obligations légales. Vous pouvez consulter la fiche de <a href="https://www.service-public.fr/particuliers/vosdroits/F11094" target="_blank" rel="nofollow noopener">Service-Public.fr sur les garanties applicables lors d'un achat à un professionnel</a> pour en avoir le détail complet.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="comparatif">Garantie légale vs garantie commerciale : le comparatif</h2>

                <p>Le véritable bouclier de l'automobiliste n'est pas le contrat de 3 mois, mais la <strong>Garantie Légale de Conformité</strong>. Le point fondamental : depuis 2022, si une panne survient dans les <strong>12 premiers mois</strong> suivant l'achat d'un véhicule d'occasion, la loi considère que le défaut existait déjà avant la vente. C'est donc au garage de prouver le contraire — et non l'inverse.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Caractéristique</th>
                                <th>Garantie commerciale "garage"</th>
                                <th>Garantie légale de conformité</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Durée</strong></td>
                                <td>Généralement 3 à 6 mois</td>
                                <td>24 mois obligatoires</td>
                            </tr>
                            <tr>
                                <td><strong>Périmètre</strong></td>
                                <td>Limité (souvent Moteur, Boîte, Pont)</td>
                                <td>Tout défaut de conformité existant à l'achat</td>
                            </tr>
                            <tr>
                                <td><strong>Charge de la preuve</strong></td>
                                <td>À l'acheteur selon le contrat</td>
                                <td>Au vendeur (12 premiers mois)</td>
                            </tr>
                            <tr>
                                <td><strong>Coût pour l'acheteur</strong></td>
                                <td>Souvent incluse / parfois payante</td>
                                <td>Totalement gratuite</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <img src="/Image/garantie-3-mois-voiture-occasion1.webp" alt="Infographie comparative garantie commerciale 3 mois et garantie légale 24 mois avec zone de présomption de défaut" width="900" height="506" loading="lazy">

                <p>Pour faire valoir ce droit, appuyez-vous directement sur les textes : l'<a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000044142624" target="_blank" rel="nofollow noopener">Article L217-3 du Code de la consommation</a> fixe la durée à 2 ans, et l'<a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000044142628" target="_blank" rel="nofollow noopener">Article L217-7</a> confirme la présomption de 12 mois pour l'occasion.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="mbp">Moteur, Boîte, Pont : ce qui est vraiment couvert</h2>

                <p>Lorsque la garantie commerciale de 3 mois s'applique, elle est souvent restreinte à la mention <strong>MBP (Moteur, Boîte, Pont)</strong>.</p>

                <ul>
                    <li><strong>Généralement inclus :</strong> L'embiellage, les pistons, le vilebrequin, les pignons de la boîte de vitesses, le différentiel. Des éléments qui, en cas de casse comme une <a href="/Blog/reparation-platine-boite-auto-mercedes">réparation de platine sur une boîte auto Mercedes</a>, coûtent extrêmement cher.</li>
                    <li><strong>Systématiquement exclus :</strong> Tout ce qui est considéré comme "pièce d'usure" — pneumatiques, plaquettes, disques, amortisseurs.</li>
                </ul>

                <img src="/Image/garantie-3-mois-voiture-occasion2.webp" alt="Schéma châssis voiture avec moteur, boîte et pont colorés en bleu et pièces d'usure exclues en gris" width="900" height="506" loading="lazy">

                <p>Même sur des motorisations réputées sensibles — comme pour évaluer la <a href="/Blog/moteur-1-6-puretech-fiabilite-avis">fiabilité du moteur 1.6 Puretech</a> — le garage tentera souvent d'invoquer la vétusté. Utilisez <a href="https://histovec.interieur.gouv.fr/histovec/accueil" target="_blank" rel="nofollow noopener">Histovec</a> pour vérifier le passé du véhicule avant toute démarche.</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="clause-km">Clause "3 mois ou 5 000 km" : comment l'interpréter</h2>

                <p>Cette formulation signifie que la garantie commerciale s'arrête dès que l'une des deux limites est franchie. Si vous parcourez 5 001 kilomètres en un mois, votre garantie commerciale est annulée. Mais l'expiration de cette clause annule uniquement l'offre contractuelle du garage — elle n'annule en rien vos droits à la garantie légale de conformité (24 mois).</p>

                <!-- ══════════════════════════════════ -->
                <h2 id="guide-panne">Guide pratique : comment faire marcher la garantie en cas de panne</h2>

                <p>Si un <a href="/Blog/voyant-orange-peugeot">voyant orange s'allume</a> ou qu'une panne survient, suivez ces étapes dans l'ordre :</p>

                <ol>
                    <li><strong>Stoppez le véhicule :</strong> Ne continuez pas à rouler pour ne pas aggraver le dommage.</li>
                    <li><strong>Ne faites rien réparer par un tiers :</strong> Le démontage par un autre garage rend l'expertise contradictoire impossible.</li>
                    <li><strong>Notifiez le vendeur par écrit :</strong> E-mail ou lettre recommandée avec AR, en détaillant les symptômes et la date d'apparition.</li>
                    <li><strong>Mise en demeure si refus :</strong> Utilisez le <a href="https://www.inc-conso.fr/content/vous-achetez-un-vehicule-doccasion-un-professionnel-et-il-tombe-en-panne-vous-invoquez-la" target="_blank" rel="nofollow noopener">modèle de lettre de mise en demeure de l'INC</a> si le garage refuse d'activer la garantie.</li>
                </ol>

                <!-- ══════════════════════════════════ -->
                <h2 id="recours">Refus de prise en charge : vos recours</h2>

                <p>Si le vendeur invoque une "usure normale" pour une panne précoce — comme un <a href="/Blog/probleme-moteur-peugeot-2008">problème moteur sur un Peugeot 2008</a> — vous disposez de plusieurs leviers :</p>

                <ul>
                    <li><strong>Expert automobile indépendant :</strong> Son rapport établit la nature et l'antériorité du défaut, et retourne la charge de la preuve en votre faveur.</li>
                    <li><strong>SignalConso (DGCCRF) :</strong> Signalez le professionnel sur <a href="https://signal.conso.gouv.fr/" target="_blank" rel="nofollow noopener">signal.conso.gouv.fr</a> — cela crée une trace officielle et peut déclencher un contrôle.</li>
                    <li><strong>Tribunal de proximité :</strong> En dernier recours, pour les litiges inférieurs à 10 000 €.</li>
                </ul>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr>
                                <th>Source officielle</th>
                                <th>Utilité</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="https://www.service-public.fr/particuliers/vosdroits/F11094" target="_blank" rel="nofollow noopener">Service-Public.fr</a></td>
                                <td>Vulgarisation de vos droits</td>
                            </tr>
                            <tr>
                                <td><a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000044142624" target="_blank" rel="nofollow noopener">Légifrance — Art. L217-3</a></td>
                                <td>Texte de loi, durée 24 mois</td>
                            </tr>
                            <tr>
                                <td><a href="https://www.inc-conso.fr/content/vous-achetez-un-vehicule-doccasion-un-professionnel-et-il-tombe-en-panne-vous-invoquez-la" target="_blank" rel="nofollow noopener">INC — Modèle de lettre</a></td>
                                <td>Mise en demeure prête à envoyer</td>
                            </tr>
                            <tr>
                                <td><a href="https://signal.conso.gouv.fr/" target="_blank" rel="nofollow noopener">SignalConso</a></td>
                                <td>Signalement DGCCRF</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ══════════════════════════════════ -->
                <h2 id="faq">FAQ : tout savoir sur la garantie automobile occasion</h2>

                <p><strong>Achat à un particulier : ai-je droit à la garantie de 3 mois ?</strong><br>
                Non. Entre particuliers, seule s'applique la garantie contre les vices cachés (<a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006441924" target="_blank" rel="nofollow noopener">Article 1641 du Code Civil</a>). La charge de la preuve vous appartient entièrement.</p>

                <p><strong>Faire l'entretien moi-même annule-t-il la garantie ?</strong><br>
                Non, tant que vous respectez les préconisations constructeur et conservez les factures des pièces utilisées. Le garage ne peut pas refuser la garantie légale sur ce seul motif.</p>

                <div class="art-tldr" style="border-left-color: <?php echo $article['category_color']; ?>;">
                    <div class="art-tldr-title" style="color: <?php echo $article['category_color']; ?>;">Le mot du Garage Expert Auto</div>
                    <p style="margin: 0; color: #fff;">La garantie 3 mois, c'est le minimum que le garage vous accorde. La garantie légale de conformité, c'est ce que la loi vous impose de lui réclamer. Ne confondez jamais les deux — et notifiez toujours par écrit, dès le premier symptôme.</p>
                </div>

            </div><!-- .art-content -->

            <!-- Premium Author Box -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>"
                     alt="<?php echo $article['author']; ?>"
                     class="art-author-avatar"
                     width="80" height="80">
                <div class="art-author-info">
                    <span class="art-author-label">La Parole à L'expert</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Découvrir toute la rédaction</a>
                </div>
            </div>

            <!-- Heavy Conclusion Box -->
            <div class="art-conclusion">
                <h2>Le mot de la fin</h2>
                <p>La garantie commerciale de 3 mois est un outil marketing, pas une protection juridique. En 2026, vous disposez de 24 mois de garantie légale de conformité — gratuite, obligatoire, et avec la charge de la preuve qui repose sur le vendeur pendant les 12 premiers mois. Connaître ce droit, c'est déjà gagner la moitié du rapport de force face à un garage de mauvaise foi.</p>
            </div>

            <!-- Similar Articles Grid (dynamique) -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/occasion"><?php echo $article['category_name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img">
                                    <img src="<?php echo htmlspecialchars($rel['image']); ?>"
                                         alt="<?php echo htmlspecialchars($rel['title']); ?>"
                                         width="400" height="225" loading="lazy">
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
                                         alt="<?php echo htmlspecialchars($rel['title']); ?>"
                                         width="400" height="225" loading="lazy">
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
                        <div class="art-sidebar-block-title">Dans ce dossier</div>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $sa): ?>
                            <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($sa['image']); ?>"
                                         alt="<?php echo htmlspecialchars($sa['title']); ?>"
                                         width="160" height="90" loading="lazy">
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
                                         alt="<?php echo htmlspecialchars($ra['title']); ?>"
                                         width="160" height="90" loading="lazy">
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

<!-- Schema JSON-LD -->
<script type="application/ld+json">
<?php
$schema = [
    "@context" => "https://schema.org",
    "@graph"   => [
        [
            "@type"            => "Article",
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id"   => "https://garageraymond.fr/Blog/" . $current_slug
            ],
            "headline"      => $article['title'],
            "description"   => $article['subtitle'],
            "image"         => ["https://garageraymond.fr" . $article['image']],
            "datePublished" => "2026-04-18T16:00:00+02:00",
            "dateModified"  => "2026-04-18T16:00:00+02:00",
            "author"        => [
                "@type"    => "Person",
                "name"     => $article['author'],
                "url"      => "https://garageraymond.fr/equipe",
                "jobTitle" => $article['author_role']
            ],
            "publisher" => [
                "@type" => "Organization",
                "name"  => "Le garage expert Auto",
                "url"   => "https://garageraymond.fr",
                "logo"  => [
                    "@type"  => "ImageObject",
                    "url"    => "https://garageraymond.fr/Image/favicon.png",
                    "width"  => "512",
                    "height" => "512"
                ]
            ],
            "mentions" => [
                [
                    "@type" => "WebSite",
                    "name"  => "Service-Public.fr",
                    "url"   => "https://www.service-public.fr/particuliers/vosdroits/F11094"
                ],
                [
                    "@type" => "WebSite",
                    "name"  => "Légifrance",
                    "url"   => "https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000044142624"
                ],
                [
                    "@type" => "WebSite",
                    "name"  => "SignalConso DGCCRF",
                    "url"   => "https://signal.conso.gouv.fr/"
                ]
            ],
            "keywords" => "garantie 3 mois voiture occasion, garantie légale de conformité, garantie commerciale auto, droits acheteur occasion, garantie moteur boîte pont"
        ]
    ]
];
echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
?>
</script>

<?php include __DIR__ . '/../footer.php'; ?>

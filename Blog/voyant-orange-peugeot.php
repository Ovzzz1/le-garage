<?php
/**
 * voyant-orange-peugeot.php
 */

$page_title = "Voyant Orange sur Peugeot : Identifier le Symbole et Savoir Quoi Faire";
$page_description = "Voyant orange allume sur votre Peugeot ? Bloc moteur, voiture dans un cercle, point d'exclamation... Identifiez votre voyant en 30 secondes et sachez quoi faire.";

$article = [
    'title'          => 'Voyant Orange sur Peugeot : Identifier le Symbole et Savoir Quoi Faire',
    'subtitle'       => "Bloc moteur, voiture dans un cercle, point d'exclamation... plusieurs voyants orange coexistent sur le tableau de bord. Identifiez le votre en 30 secondes.",
    'category'       => 'entretien',
    'category_name'  => 'Entretien & Reparation',
    'category_color' => '#dc2626',
    'tags'           => ['Peugeot', 'Voyants', 'Diagnostic', '208', '2008', '3008'],
    'image'          => '/Image/voyant-orange-peugeot1.webp',
    'date'           => '28 Mars 2026',
    'author'         => 'Arnaud',
    'author_role'    => 'Expert Mecanique',
    'author_img'     => '/Image/arnaud.png',
    'author_bio'     => "Avec des centaines de diagnostics OBD a son actif, Arnaud decrypte les voyants et pannes des vehicules Stellantis pour vous eviter les mauvaises surprises en atelier.",
    'reading_time'   => '7 min',
];

$categories = [
    'assurance'  => ['name' => 'Assurance & Financement', 'color' => '#2563eb', 'slug' => 'assurance'],
    'entretien'  => ['name' => 'Entretien & Reparation',  'color' => '#dc2626', 'slug' => 'entretien'],
    'electrique' => ['name' => 'Electrique & Hybride',    'color' => '#059669', 'slug' => 'electrique'],
    'occasion'   => ['name' => 'Achat & Occasion',        'color' => '#7c3aed', 'slug' => 'occasion'],
    'moto'       => ['name' => 'Moto & 2 Roues',          'color' => '#ea580c', 'slug' => 'moto'],
    'permis'     => ['name' => 'Permis',                  'color' => '#0891b2', 'slug' => 'permis'],
];

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
        $content = file_get_contents($file);
        if (preg_match('/\$article\s*=\s*\[(.+?)\];/s', $content, $matches)) {
            try { eval('$other_article = [' . $matches[1] . '];'); } catch (Throwable $e) { continue; }
        }
        if ($other_article && isset($other_article['title'])) {
            $other_article['slug']  = $file_slug;
            $other_article['url']   = '/Blog/' . $file_slug;
            $other_article['image'] = '/' . ltrim($other_article['image'] ?? '', '/');
            if (($other_article['category'] ?? '') === $article['category']) $same_cat_articles[] = $other_article;
            $all_other_articles[] = $other_article;
        }
    }
}

include __DIR__ . '/../header.php';
?>

<style>
/* ═══════════════════ OUTIL DIAGNOSTIC — prefixe .vd- ═══════════════════ */
.vd-tool {
    background:#fff; border:1.5px solid #e5e7eb; border-radius:16px;
    overflow:hidden; margin:32px 0; box-shadow:0 2px 16px rgba(0,0,0,.06);
}
.vd-tool-header {
    background:#111827; padding:20px 24px;
    display:flex; align-items:center; gap:14px;
}
.vd-tool-header-icon {
    width:36px; height:36px; background:#f97316; border-radius:8px;
    display:flex; align-items:center; justify-content:center; flex-shrink:0;
}
.vd-tool-header-text strong { display:block; color:#fff; font-size:.95rem; font-weight:700; }
.vd-tool-header-text span   { color:rgba(255,255,255,.5); font-size:.78rem; }
.vd-tool-body { padding:28px 24px; }

.vd-steps { display:flex; margin-bottom:28px; border-radius:8px; overflow:hidden; border:1px solid #e5e7eb; }
.vd-step {
    flex:1; padding:9px 12px; text-align:center; font-size:.75rem; font-weight:600;
    color:#9ca3af; background:#f9fafb; border-right:1px solid #e5e7eb;
    transition:background .2s, color .2s; letter-spacing:.02em; text-transform:uppercase;
}
.vd-step:last-child { border-right:none; }
.vd-step.active { background:#f97316; color:#fff; }
.vd-step.done   { background:#fff7ed; color:#f97316; }

.vd-question { font-size:1rem; font-weight:700; color:#111827; margin-bottom:18px; }
.vd-sub      { font-size:.82rem; color:#6b7280; margin-top:-12px; margin-bottom:18px; }
.vd-panel    { display:none; }
.vd-panel.active { display:block; }

.vd-icon-grid {
    display:grid; grid-template-columns:repeat(4,1fr); gap:10px;
}
@media(max-width:580px){ .vd-icon-grid{ grid-template-columns:repeat(2,1fr); } }

.vd-icon-btn {
    border:1.5px solid #e5e7eb; border-radius:12px; padding:14px 10px 12px;
    background:#fff; cursor:pointer; text-align:center;
    transition:border-color .15s, background .15s, transform .1s;
    display:flex; flex-direction:column; align-items:center; gap:8px;
}
.vd-icon-btn:hover  { border-color:#f97316; background:#fff7ed; transform:translateY(-1px); }
.vd-icon-btn.selected { border-color:#f97316; background:#fff7ed; box-shadow:0 0 0 3px rgba(249,115,22,.15); }
.vd-icon-btn svg    { display:block; margin:0 auto; }
.vd-icon-label      { font-size:.72rem; font-weight:600; color:#374151; line-height:1.3; text-align:center; }

.vd-behavior-btns { display:flex; gap:12px; flex-wrap:wrap; }
.vd-behavior-btn {
    flex:1; min-width:140px; border:1.5px solid #e5e7eb; border-radius:10px;
    padding:16px 14px; background:#fff; cursor:pointer; text-align:left;
    transition:border-color .15s, background .15s;
    display:flex; align-items:center; gap:12px;
}
.vd-behavior-btn:hover { border-color:#f97316; background:#fff7ed; }
.vd-behavior-dot { width:12px; height:12px; border-radius:50%; flex-shrink:0; }
.vd-behavior-btn strong { display:block; font-size:.88rem; color:#111827; }
.vd-behavior-btn span   { font-size:.75rem; color:#6b7280; }

.vd-result-card {
    border-radius:12px; padding:22px 24px; border:1.5px solid transparent;
}
.vd-result-card.urgency-none   { background:#f0fdf4; border-color:#86efac; }
.vd-result-card.urgency-check  { background:#fff7ed; border-color:#fdba74; }
.vd-result-card.urgency-soon   { background:#fff7ed; border-color:#f97316; }
.vd-result-card.urgency-urgent { background:#fef2f2; border-color:#fca5a5; }

.vd-result-top { display:flex; align-items:flex-start; justify-content:space-between; gap:12px; margin-bottom:14px; }
.vd-result-name { font-size:1rem; font-weight:700; color:#111827; }
.vd-urgency-badge {
    padding:4px 10px; border-radius:20px; font-size:.7rem; font-weight:700;
    white-space:nowrap; letter-spacing:.04em; text-transform:uppercase; flex-shrink:0;
}
.urgency-none   .vd-urgency-badge { background:#16a34a; color:#fff; }
.urgency-check  .vd-urgency-badge { background:#f97316; color:#fff; }
.urgency-soon   .vd-urgency-badge { background:#ea580c; color:#fff; }
.urgency-urgent .vd-urgency-badge { background:#dc2626; color:#fff; }

.vd-result-what { font-size:.88rem; color:#374151; margin-bottom:14px; line-height:1.6; }
.vd-result-action-title { font-size:.72rem; font-weight:700; text-transform:uppercase; letter-spacing:.07em; color:#6b7280; margin-bottom:8px; }
.vd-result-actions { display:flex; flex-direction:column; gap:6px; margin-bottom:16px; }
.vd-result-action { display:flex; align-items:flex-start; gap:8px; font-size:.85rem; color:#111827; }
.vd-result-action::before { content:''; width:6px; height:6px; border-radius:50%; background:#f97316; flex-shrink:0; margin-top:6px; }
.vd-result-link {
    display:inline-flex; align-items:center; gap:6px;
    font-size:.82rem; font-weight:600; color:#f97316; text-decoration:none; margin-top:4px;
}
.vd-result-link:hover { text-decoration:underline; }

.vd-reset-btn {
    margin-top:20px; background:none; border:1px solid #e5e7eb; border-radius:8px;
    padding:9px 16px; font-size:.8rem; color:#6b7280; cursor:pointer;
    display:flex; align-items:center; gap:6px; transition:border-color .15s, color .15s;
}
.vd-reset-btn:hover { border-color:#9ca3af; color:#374151; }
@keyframes vd-blink { 0%,100%{opacity:1} 50%{opacity:.2} }
</style>

<article>

    <!-- HERO -->
    <section class="art-hero">
        <img src="<?php echo $article['image']; ?>" alt="Voyants orange sur tableau de bord Peugeot" class="art-hero-bg">
        <div class="art-hero-overlay"></div>
        <div class="art-hero-container">
            <div class="art-hero-content">
                <nav class="art-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="art-bc-sep">/</span>
                    <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a>
                    <span class="art-bc-sep">/</span>
                    <span>Voyants &amp; Diagnostic</span>
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

    <!-- CATEGORY NAV -->
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

    <!-- LAYOUT 70/30 -->
    <div class="art-layout-wrapper">
        <div class="art-main-col">

            <!-- TL;DR -->
            <div class="art-tldr">
                <div class="art-tldr-title">Reponse directe (TL;DR)</div>
                <ul>
                    <li><strong>Plusieurs voyants orange</strong> peuvent s'allumer en meme temps sur un Peugeot. Ils n'ont pas tous la meme signification.</li>
                    <li><strong>Bloc moteur orange :</strong> fixe = finissez le trajet, diagnostiquez dans la semaine. Clignotant = atelier sous 24h.</li>
                    <li><strong>Voiture dans un cercle + A ou OFF :</strong> Stop &amp; Start. Aucune urgence.</li>
                    <li><strong>Voiture dans un cercle soulignee :</strong> FAU desactive. Verifiez vos ceintures en premier.</li>
                    <li><strong>Aucun voyant orange n'impose l'arret immediat.</strong> C'est le rouge.</li>
                </ul>
            </div>

            <!-- ═══════════════════════════════════════════════
                 OUTIL DE DIAGNOSTIC INTERACTIF
            ═══════════════════════════════════════════════ -->
            <div class="vd-tool" id="vd-tool">

                <div class="vd-tool-header">
                    <div class="vd-tool-header-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
                        </svg>
                    </div>
                    <div class="vd-tool-header-text">
                        <strong>Quel est votre voyant ? Obtenez le diagnostic</strong>
                        <span>Repondez en 2 clics &middot; Resultat immediat</span>
                    </div>
                </div>

                <div class="vd-tool-body">

                    <!-- STEPS -->
                    <div class="vd-steps">
                        <div class="vd-step active" id="vd-step-1">1. Symbole</div>
                        <div class="vd-step" id="vd-step-2">2. Comportement</div>
                        <div class="vd-step" id="vd-step-3">3. Diagnostic</div>
                    </div>

                    <!-- PANEL 1 — selection symbole -->
                    <div class="vd-panel active" id="vd-panel-1">
                        <p class="vd-question">Quel symbole voyez-vous sur votre tableau de bord ?</p>
                        <p class="vd-sub">Cliquez sur le pictogramme qui ressemble le plus a votre voyant</p>

                        <div class="vd-icon-grid">

                            <button class="vd-icon-btn" data-voyant="moteur" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <rect x="6" y="16" width="32" height="14" rx="2" stroke="#f97316" stroke-width="2"/>
                                    <rect x="10" y="19" width="8" height="8" rx="1" fill="#f97316" opacity=".25"/>
                                    <line x1="18" y1="23" x2="26" y2="23" stroke="#f97316" stroke-width="2"/>
                                    <line x1="26" y1="19" x2="26" y2="27" stroke="#f97316" stroke-width="2"/>
                                    <line x1="6" y1="20" x2="2" y2="20" stroke="#f97316" stroke-width="2"/>
                                    <line x1="6" y1="26" x2="2" y2="26" stroke="#f97316" stroke-width="2"/>
                                    <line x1="38" y1="20" x2="42" y2="18" stroke="#f97316" stroke-width="2"/>
                                    <line x1="38" y1="26" x2="42" y2="28" stroke="#f97316" stroke-width="2"/>
                                </svg>
                                <span class="vd-icon-label">Bloc moteur<br>(check engine)</span>
                            </button>

                            <button class="vd-icon-btn" data-voyant="stop-start-actif" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <circle cx="22" cy="22" r="17" stroke="#f97316" stroke-width="2"/>
                                    <text x="22" y="28" text-anchor="middle" font-size="15" font-weight="700" fill="#f97316" font-family="sans-serif">A</text>
                                </svg>
                                <span class="vd-icon-label">Voiture cercle<br>+ lettre A</span>
                            </button>

                            <button class="vd-icon-btn" data-voyant="stop-start-off" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <circle cx="22" cy="22" r="17" stroke="#f97316" stroke-width="2"/>
                                    <text x="22" y="27" text-anchor="middle" font-size="9" font-weight="700" fill="#f97316" font-family="sans-serif">OFF</text>
                                </svg>
                                <span class="vd-icon-label">Voiture cercle<br>+ OFF</span>
                            </button>

                            <button class="vd-icon-btn" data-voyant="fau" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <circle cx="22" cy="19" r="13" stroke="#f97316" stroke-width="2"/>
                                    <rect x="15" y="15" width="14" height="8" rx="1.5" stroke="#f97316" stroke-width="1.5"/>
                                    <rect x="17" y="12" width="10" height="5" rx="1" stroke="#f97316" stroke-width="1.5"/>
                                    <circle cx="17.5" cy="23" r="2" fill="#f97316"/>
                                    <circle cx="26.5" cy="23" r="2" fill="#f97316"/>
                                    <line x1="12" y1="36" x2="32" y2="36" stroke="#f97316" stroke-width="2.5" stroke-linecap="round"/>
                                </svg>
                                <span class="vd-icon-label">Voiture cercle<br>soulignee (FAU)</span>
                            </button>

                            <button class="vd-icon-btn" data-voyant="triangle-exclamation" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <path d="M22 7L40 37H4L22 7Z" stroke="#f97316" stroke-width="2" stroke-linejoin="round"/>
                                    <line x1="22" y1="19" x2="22" y2="28" stroke="#f97316" stroke-width="2.5" stroke-linecap="round"/>
                                    <circle cx="22" cy="32.5" r="1.8" fill="#f97316"/>
                                </svg>
                                <span class="vd-icon-label">! dans un<br>triangle</span>
                            </button>

                            <button class="vd-icon-btn" data-voyant="pression-pneus" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <circle cx="22" cy="22" r="17" stroke="#f97316" stroke-width="2"/>
                                    <line x1="22" y1="13" x2="22" y2="25" stroke="#f97316" stroke-width="2.5" stroke-linecap="round"/>
                                    <circle cx="22" cy="30" r="1.8" fill="#f97316"/>
                                </svg>
                                <span class="vd-icon-label">! dans un<br>cercle (pneus)</span>
                            </button>

                            <button class="vd-icon-btn" data-voyant="esp" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <rect x="9" y="17" width="20" height="10" rx="2" stroke="#f97316" stroke-width="1.8"/>
                                    <rect x="12" y="12" width="12" height="7" rx="1" stroke="#f97316" stroke-width="1.8"/>
                                    <circle cx="13" cy="27" r="2.5" fill="#f97316"/>
                                    <circle cx="25" cy="27" r="2.5" fill="#f97316"/>
                                    <path d="M33 19 Q35 16 37 19 Q39 22 41 19" stroke="#f97316" stroke-width="1.8" fill="none" stroke-linecap="round"/>
                                    <path d="M33 25 Q35 22 37 25 Q39 28 41 25" stroke="#f97316" stroke-width="1.8" fill="none" stroke-linecap="round"/>
                                </svg>
                                <span class="vd-icon-label">Voiture + lignes<br>ondulees (ESP)</span>
                            </button>

                            <button class="vd-icon-btn" data-voyant="abs" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <circle cx="22" cy="22" r="17" stroke="#f97316" stroke-width="2"/>
                                    <text x="22" y="27" text-anchor="middle" font-size="11" font-weight="700" fill="#f97316" font-family="sans-serif">ABS</text>
                                </svg>
                                <span class="vd-icon-label">ABS<br>dans cercle</span>
                            </button>

                            <button class="vd-icon-btn" data-voyant="service" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <path d="M30 9a9 9 0 0 1 2 14l-12 12a4.5 4.5 0 0 1-6.4-6.4L25 17A9 9 0 0 1 30 9z" stroke="#f97316" stroke-width="2" stroke-linejoin="round"/>
                                    <circle cx="14.5" cy="30.5" r="2.5" fill="#f97316"/>
                                </svg>
                                <span class="vd-icon-label">Cle a molette<br>(service)</span>
                            </button>

                            <button class="vd-icon-btn" data-voyant="epb" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <circle cx="22" cy="22" r="17" stroke="#f97316" stroke-width="2"/>
                                    <text x="21" y="28" text-anchor="middle" font-size="16" font-weight="700" fill="#f97316" font-family="sans-serif">P</text>
                                    <circle cx="32" cy="13" r="4" stroke="#f97316" stroke-width="1.5"/>
                                    <line x1="32" y1="10" x2="32" y2="16" stroke="#f97316" stroke-width="1.5"/>
                                </svg>
                                <span class="vd-icon-label">P dans cercle<br>(frein main)</span>
                            </button>

                            <button class="vd-icon-btn" data-voyant="antipollution" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <path d="M7 30 Q15 24 22 20 Q29 16 37 18" stroke="#f97316" stroke-width="2" stroke-linecap="round"/>
                                    <path d="M35 14 Q37 10 35 8" stroke="#f97316" stroke-width="1.8" stroke-linecap="round"/>
                                    <path d="M39 16 Q41 12 39 10" stroke="#f97316" stroke-width="1.8" stroke-linecap="round"/>
                                    <path d="M9 33 Q13 26 20 28 Q13 35 9 33Z" fill="#f97316" opacity=".45"/>
                                </svg>
                                <span class="vd-icon-label">Antipollution<br>(FAP / AdBlue)</span>
                            </button>

                            <button class="vd-icon-btn" data-voyant="batterie" onclick="vdSelect(this)">
                                <svg width="44" height="44" viewBox="0 0 44 44" fill="none">
                                    <rect x="5" y="14" width="31" height="16" rx="2" stroke="#f97316" stroke-width="2"/>
                                    <rect x="36" y="18" width="4" height="8" rx="1" fill="#f97316"/>
                                    <line x1="15" y1="22" x2="19" y2="16" stroke="#f97316" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="19" y1="16" x2="19" y2="22" stroke="#f97316" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="19" y1="22" x2="23" y2="22" stroke="#f97316" stroke-width="2" stroke-linecap="round"/>
                                    <line x1="23" y1="22" x2="23" y2="28" stroke="#f97316" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                <span class="vd-icon-label">Batterie</span>
                            </button>

                        </div>
                    </div><!-- #vd-panel-1 -->

                    <!-- PANEL 2 — comportement -->
                    <div class="vd-panel" id="vd-panel-2">
                        <p class="vd-question" id="vd-q2">Comment se comporte le voyant ?</p>
                        <div class="vd-behavior-btns">
                            <button class="vd-behavior-btn" onclick="vdBehavior('fixe')">
                                <div class="vd-behavior-dot" style="background:#f97316;"></div>
                                <div>
                                    <strong>Fixe</strong>
                                    <span>Allume en continu, ne clignote pas</span>
                                </div>
                            </button>
                            <button class="vd-behavior-btn" onclick="vdBehavior('clignotant')">
                                <div class="vd-behavior-dot" style="background:#dc2626; animation:vd-blink 1s infinite;"></div>
                                <div>
                                    <strong>Clignotant</strong>
                                    <span>S'allume et s'eteint rapidement</span>
                                </div>
                            </button>
                        </div>
                    </div><!-- #vd-panel-2 -->

                    <!-- PANEL 3 — resultat -->
                    <div class="vd-panel" id="vd-panel-3">
                        <div id="vd-result-output"></div>
                        <button class="vd-reset-btn" onclick="vdReset()">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-4"/></svg>
                            Recommencer le diagnostic
                        </button>
                    </div><!-- #vd-panel-3 -->

                </div><!-- .vd-tool-body -->
            </div><!-- .vd-tool -->

            <!-- TOC -->
            <div class="art-toc">
                <div class="art-toc-title">Au sommaire</div>
                <ol>
                    <li><a href="#identification">Les voyants orange Peugeot : ce que chacun signifie</a></li>
                    <li><a href="#voiture-cercle">La voiture dans un cercle : Stop &amp; Start ou FAU ?</a></li>
                    <li><a href="#autres-voyants">Les autres voyants orange a connaitre</a></li>
                    <li><a href="#rouler">Peut-on continuer a rouler ?</a></li>
                    <li><a href="#reset">Reinitialiser le voyant service sans outil</a></li>
                    <li><a href="#faq">FAQ</a></li>
                </ol>
            </div>

            <div class="art-content">

                <h2 id="identification">Les voyants orange Peugeot : ce que chacun signifie</h2>

                <h3>Le voyant moteur orange (check engine)</h3>
                <p>C'est le bloc moteur orange, parfois confondu avec d'autres symboles. Il signale un defaut detecte par le calculateur moteur : capteur defaillant, probleme d'injection, anomalie d'allumage.</p>
                <p><strong>Fixe :</strong> vous pouvez finir votre trajet. Faites diagnostiquer dans la semaine. Un scanner OBD lira le code defaut en quelques minutes.</p>
                <p><strong>Clignotant :</strong> rates d'allumage en cours. Reduisez la vitesse, evitez les hauts regimes. Passage en atelier dans les 24h. Continuer a rouler risque d'endommager le catalyseur.</p>

                <blockquote style="border-left:4px solid #f97316; padding:14px 18px; background:#fff7ed; margin:24px 0; border-radius:0 8px 8px 0;">
                    Ne l'ignorez pas. Fixe ou clignotant, le defaut ne disparaitra pas seul. Un voyant moteur actif au controle technique, c'est une contre-visite assuree.
                </blockquote>

                <img src="/Image/voyant-orange-peugeot1.webp"
                     alt="Voyant moteur orange (check engine) et Stop and Start allumes sur une Peugeot"
                     style="width:100%; border-radius:10px; margin:24px 0;">

                <h2 id="voiture-cercle">La voiture dans un cercle : Stop &amp; Start ou FAU ?</h2>
                <p>Ce symbole existe en plusieurs variantes. Le detail visuel change tout.</p>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr><th>Ce que vous voyez</th><th>Ce que c'est</th><th>Urgence</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Voiture dans cercle + <strong>A</strong></td>
                                <td>Stop &amp; Start actif (moteur coupe a l'arret)</td>
                                <td><span style="color:#16a34a; font-weight:600;">Aucune</span></td>
                            </tr>
                            <tr>
                                <td>Voiture dans cercle + <strong>OFF</strong></td>
                                <td>Stop &amp; Start desactive (auto ou manuel)</td>
                                <td><span style="color:#16a34a; font-weight:600;">Aucune</span></td>
                            </tr>
                            <tr>
                                <td>Voiture dans cercle, <strong>soulignee</strong></td>
                                <td>FAU desactive (Freinage Automatique d'Urgence)</td>
                                <td><span style="color:#f97316; font-weight:600;">A verifier</span></td>
                            </tr>
                            <tr>
                                <td>Voiture dans cercle, <strong>clignotante</strong></td>
                                <td>Defaut actif sur le systeme</td>
                                <td><span style="color:#dc2626; font-weight:600;">Atelier</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>Le Stop &amp; Start (A ou OFF)</h3>
                <p>Il se desactive seul quand il fait trop froid, trop chaud, ou que la batterie est faible. Il se reactive des que les conditions redeviennent normales. Dans la quasi-totalite des cas : rien a faire.</p>

                <h3>La voiture soulignee : le FAU desactive</h3>
                <p>Le systeme de freinage d'urgence automatique est desactive. Premiere chose a verifier : toutes les ceintures sont-elles bouclees ? C'est la cause numero un. Si oui, le capteur de pare-chocs avant est peut-etre encrase (boue, neige). Si le voyant reste apres ca, diagnostic en atelier.</p>

                <img src="/Image/voyant-orange-peugeot2.webp"
                     alt="Voyant voiture dans un cercle avec lettre A sur Peugeot 2008 Stop and Start"
                     style="width:100%; border-radius:10px; margin:24px 0;">

                <h2 id="autres-voyants">Les autres voyants orange a connaitre</h2>

                <h3>Le point d'exclamation dans un triangle ou un cercle</h3>
                <p><strong>Dans un triangle :</strong> defaut general, souvent lie a un systeme electronique. Lisez le message affiche a l'ecran.</p>
                <p><strong>Dans un cercle :</strong> pression des pneus insuffisante dans la majorite des cas. Verifiez les pressions a froid. Le voyant s'eteint apres quelques kilometres une fois les pressions correctes.</p>

                <h3>Le voyant ESP / voiture avec lignes ondulees</h3>
                <p>Il s'allume brievement quand le systeme intervient en virage ou sur sol glissant. C'est normal : il fait son travail. S'il reste allume en permanence hors situation de glissance, le systeme est desactive ou defaillant.</p>

                <h3>L'ABS et le frein a main electrique (EPB)</h3>
                <p><strong>ABS allume :</strong> l'antiblocage est hors service. Le freinage classique fonctionne, mais vous perdez l'assistance en freinage d'urgence. Diagnostic des que possible.</p>
                <p><strong>EPB (P dans un cercle) :</strong> frein de stationnement serre ou defaut. Si vous roulez et qu'il s'allume, verifiez immediatement que le frein a main est bien relache.</p>

                <h3>Le voyant antipollution</h3>
                <p>Il signale un defaut sur le systeme de depollution : FAP, catalyseur, vanne EGR, sonde lambda. Sur les BlueHDi diesel, il peut aussi indiquer un niveau d'AdBlue bas. Evitez les trajets exclusivement urbains a basse vitesse : un FAP encrase a besoin d'une regeneration sur route. Remplacement : entre 800 et 2 000 euros selon le modele.</p>

                <h2 id="rouler">Peut-on continuer a rouler avec un voyant orange ?</h2>

                <div class="art-table-wrap">
                    <table class="art-table">
                        <thead>
                            <tr><th>Voyant</th><th>Peut-on rouler ?</th><th>Delai max conseille</th></tr>
                        </thead>
                        <tbody>
                            <tr><td>Stop &amp; Start (A / OFF)</td><td>Oui, sans restriction</td><td>Pas de limite</td></tr>
                            <tr><td>Service (cle)</td><td>Oui</td><td>Revision des que possible</td></tr>
                            <tr><td>Moteur fixe</td><td>Oui</td><td>Dans la semaine</td></tr>
                            <tr><td>Antipollution fixe</td><td>Oui</td><td>Quelques jours, pas des semaines</td></tr>
                            <tr><td>ABS</td><td>Oui, prudemment</td><td>Dans les 48h</td></tr>
                            <tr><td>FAU desactive</td><td>Oui</td><td>Des que possible</td></tr>
                            <tr><td>Moteur clignotant</td><td>Evitez</td><td>24h max, vitesse reduite</td></tr>
                            <tr><td>EPB</td><td>Verifiez avant</td><td>Immediat</td></tr>
                        </tbody>
                    </table>
                </div>

                <blockquote style="border-left:4px solid #dc2626; padding:14px 18px; background:#fee2e2; margin:24px 0; border-radius:0 8px 8px 0;">
                    <strong>Aucun voyant orange n'impose l'arret immediat.</strong> C'est le rouge qui impose l'arret. Si un voyant rouge s'allume en meme temps qu'un orange : coupez le moteur et arretez-vous.
                </blockquote>

                <h2 id="reset">Reinitialiser le voyant service sans outil</h2>
                <p>Ce n'est pas une panne. C'est un compteur kilometrique qui vous rappelle qu'une revision est due. Il se reinitialise manuellement, sans valise de diagnostic, en moins de 30 secondes.</p>
                <p><strong>Procedure valable sur 208, 2008, 3008, Partner et la plupart des Peugeot :</strong></p>
                <ol>
                    <li>Coupez completement le contact</li>
                    <li>Appuyez sur le bouton de remise a zero du compteur journalier et maintenez-le enfonce</li>
                    <li>Tout en maintenant, tournez le contact sur ON sans demarrer</li>
                    <li>Un decompte de 10 secondes apparait avec l'icone service</li>
                    <li>Maintenez jusqu'a 0</li>
                    <li>Coupez le contact, rallumez — le voyant a disparu</li>
                </ol>

                <img src="/Image/voyant-orange-peugeot3.webp"
                     alt="Reinitialisation du voyant service sur Peugeot — bouton compteur journalier"
                     style="width:100%; border-radius:10px; margin:24px 0;">

            </div><!-- .art-content -->

            <!-- Author Box -->
            <div class="art-author-box">
                <img src="<?php echo $article['author_img']; ?>" alt="<?php echo $article['author']; ?>" class="art-author-avatar">
                <div class="art-author-info">
                    <span class="art-author-label">Expert Diagnostic &amp; Voyants</span>
                    <h3><?php echo $article['author']; ?></h3>
                    <span class="art-author-role"><?php echo $article['author_role']; ?></span>
                    <p><?php echo $article['author_bio']; ?></p>
                    <a href="/equipe" class="art-author-link">Decouvrir l'equipe complete du Garage</a>
                </div>
            </div>

            <!-- FAQ -->
            <div class="art-conclusion">
                <h2 id="faq">FAQ — Voyants orange sur Peugeot</h2>
                <h3>Que signifie le cercle orange sur le tableau de bord d'une voiture ?</h3>
                <p>Un cercle orange contenant un symbole indique un avertissement non urgent. Le symbole a l'interieur precise le systeme concerne : A = Stop &amp; Start, bloc moteur = check engine, voiture soulignee = FAU desactive.</p>
                <h3>Que signifie un voyant orange rond avec une voiture dedans sur un Peugeot 2008 ?</h3>
                <p>Sur le 2008, c'est presque toujours le Stop &amp; Start. Orange avec OFF = systeme desactive automatiquement. Orange avec A = moteur coupe a l'arret. Les deux sont normaux. Si la voiture est soulignee, verifiez vos ceintures en premier.</p>
                <h3>Que signifie le voyant orange sur une voiture en virage ?</h3>
                <p>La voiture avec des lignes ondulees qui s'allume en virage, c'est l'ESP qui intervient. Normal sur sol glissant ou en virage serre. S'il reste allume apres le virage en conditions normales, le systeme est peut-etre defaillant.</p>
                <h3>Est-ce dangereux de rouler avec le voyant moteur orange allume ?</h3>
                <p>Fixe : non a court terme. Clignotant : oui — des rates d'allumage peuvent endommager le catalyseur rapidement. 24h max a vitesse reduite.</p>
                <h3>Est-ce dangereux de rouler avec le voyant antipollution ?</h3>
                <p>Pas immediatement. Mais un FAP qui se bouche definitvement coute entre 800 et 2 000 euros. Faites diagnostiquer dans la semaine.</p>
                <h3>Combien de temps peut-on rouler avec un voyant orange ?</h3>
                <p>Stop &amp; Start ou service : indefiniment pour finir le trajet. Moteur fixe ou antipollution : quelques jours. Moteur clignotant : 24h max a vitesse reduite.</p>
                <h3>Quel voyant impose l'arret immediat ?</h3>
                <p>Les voyants rouges uniquement : pression d'huile, temperature moteur, voyant STOP. Un voyant orange n'impose jamais l'arret immediat seul.</p>
            </div>

            <!-- Related -->
            <section class="art-related">
                <h2 class="art-related-title">Poursuivre la lecture dans <a href="/<?php echo $article['category']; ?>"><?php echo $article['category_name']; ?></a></h2>
                <div class="art-related-grid">
                    <?php if (!empty($same_cat_articles)): ?>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img"><img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>"></div>
                                <div class="art-related-body">
                                    <h3><?php echo htmlspecialchars($rel['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p>
                                    <span class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Redaction'); ?> &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php elseif (!empty($all_other_articles)): ?>
                        <?php foreach (array_slice($all_other_articles, 0, 3) as $rel): ?>
                            <a href="<?php echo $rel['url']; ?>" class="art-related-card">
                                <div class="art-related-img"><img src="<?php echo htmlspecialchars($rel['image']); ?>" alt="<?php echo htmlspecialchars($rel['title']); ?>"></div>
                                <div class="art-related-body">
                                    <h3><?php echo htmlspecialchars($rel['title']); ?></h3>
                                    <p><?php echo htmlspecialchars($rel['subtitle'] ?? ''); ?></p>
                                    <span class="art-related-meta"><?php echo htmlspecialchars($rel['author'] ?? 'Redaction'); ?> &bull; <?php echo htmlspecialchars($rel['date'] ?? ''); ?></span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p style="color:#666; padding:20px 0;">D'autres articles arrivent bientot dans cette categorie !</p>
                    <?php endif; ?>
                </div>
            </section>

        </div><!-- .art-main-col -->

        <!-- SIDEBAR -->
        <aside class="art-sidebar-right">
            <div class="art-sidebar-sticky">
                <?php if (!empty($same_cat_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">Sur le meme sujet</div>
                        <?php foreach (array_slice($same_cat_articles, 0, 3) as $sa): ?>
                            <a href="<?php echo $sa['url']; ?>" class="art-side-card">
                                <div class="art-side-img">
                                    <img src="<?php echo htmlspecialchars($sa['image']); ?>" alt="<?php echo htmlspecialchars($sa['title']); ?>">
                                    <span class="art-side-cat-pill" style="background:<?php echo $article['category_color']; ?>"><?php echo $article['category_name']; ?></span>
                                </div>
                                <h4><?php echo htmlspecialchars($sa['title']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if (!empty($all_other_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">A la Une</div>
                        <?php foreach (array_slice($all_other_articles, 0, 3) as $ra): ?>
                            <a href="<?php echo $ra['url']; ?>" class="art-side-card">
                                <div class="art-side-img"><img src="<?php echo htmlspecialchars($ra['image']); ?>" alt="<?php echo htmlspecialchars($ra['title']); ?>"></div>
                                <h4><?php echo htmlspecialchars($ra['title']); ?></h4>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <?php if (empty($same_cat_articles) && empty($all_other_articles)): ?>
                    <div class="art-sidebar-block">
                        <div class="art-sidebar-block-title">A retenir</div>
                        <p style="font-size:.9em; color:#555; line-height:1.5;">Un voyant orange fixe sans symptome moteur vous laisse du temps. Un voyant clignotant, non. Aucun orange n'impose l'arret immediat.</p>
                    </div>
                <?php endif; ?>
            </div>
        </aside>

    </div><!-- .art-layout-wrapper -->
</article>

<!-- JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Article",
      "mainEntityOfPage": { "@type": "WebPage", "@id": "https://garageraymond.fr/Blog/voyant-orange-peugeot" },
      "headline": "<?php echo addslashes($article['title']); ?>",
      "description": "<?php echo addslashes($article['subtitle']); ?>",
      "image": ["https://garageraymond.fr<?php echo $article['image']; ?>"],
      "datePublished": "2026-03-28T08:00:00+01:00",
      "dateModified": "2026-03-28T08:00:00+01:00",
      "author": { "@type": "Person", "name": "<?php echo $article['author']; ?>", "url": "https://garageraymond.fr/equipe", "jobTitle": "<?php echo $article['author_role']; ?>" },
      "publisher": { "@type": "Organization", "name": "Le garage expert Auto", "url": "https://garageraymond.fr", "logo": { "@type": "ImageObject", "url": "https://garageraymond.fr/Image/favicon.png" } }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        { "@type": "Question", "name": "Que signifie le cercle orange sur le tableau de bord d'une voiture ?", "acceptedAnswer": { "@type": "Answer", "text": "Un cercle orange indique un avertissement non urgent. A = Stop & Start, bloc moteur = check engine, voiture soulignee = FAU desactive." } },
        { "@type": "Question", "name": "Quel voyant impose l'arret immediat ?", "acceptedAnswer": { "@type": "Answer", "text": "Les voyants rouges uniquement : pression d'huile, temperature moteur, voyant STOP. Un voyant orange n'impose jamais l'arret immediat seul." } },
        { "@type": "Question", "name": "Combien de temps peut-on rouler avec un voyant orange ?", "acceptedAnswer": { "@type": "Answer", "text": "Stop & Start ou service : indefiniment. Moteur fixe ou antipollution : quelques jours. Moteur clignotant : 24h max a vitesse reduite." } }
      ]
    }
  ]
}
</script>

<!-- ═══════════════════════════════════════════════
     JS OUTIL DIAGNOSTIC — logique de branchement
═══════════════════════════════════════════════ -->
<script>
const VD = {
    moteur: {
        behavior: true,
        q2: 'Comment se comporte le voyant moteur ?',
        fixe: {
            name: 'Voyant moteur — Defaut calculateur (fixe)',
            urgency: 'soon', label: 'A traiter cette semaine',
            what: "Le calculateur moteur a detecte une anomalie : capteur defaillant, probleme d'injection ou d'allumage. Le moteur fonctionne mais un defaut est enregistre.",
            actions: ["Vous pouvez finir votre trajet normalement", "Faites lire le code defaut OBD dans la semaine", "Ne passez pas le controle technique avec ce voyant — contre-visite assuree"],
            anchor: '#identification'
        },
        clignotant: {
            name: "Voyant moteur — Rates d'allumage (clignotant)",
            urgency: 'urgent', label: 'Urgent — 24h max',
            what: "Des rates d'allumage sont en cours. Le catalyseur recoit des gaz non brules et peut etre endommage irremediblement si vous continuez a rouler.",
            actions: ["Reduisez immediatement votre vitesse", "Evitez les hauts regimes et les accelerations", "Passage en atelier dans les 24h maximum"],
            anchor: '#identification'
        }
    },
    'stop-start-actif': {
        behavior: false,
        result: {
            name: 'Stop & Start — Systeme actif',
            urgency: 'none', label: 'Aucune urgence',
            what: "Le voyant indique que le Stop & Start fonctionne normalement. Le moteur vient de se couper automatiquement a l'arret. Il redemarrera des que vous relacherez la pedale de frein.",
            actions: ["Rien a faire — c'est le fonctionnement normal", "Pour desactiver temporairement : appuyez sur le bouton dedie au tableau de bord"],
            anchor: '#voiture-cercle'
        }
    },
    'stop-start-off': {
        behavior: false,
        result: {
            name: 'Stop & Start — Desactive',
            urgency: 'none', label: 'Aucune urgence',
            what: "Le Stop & Start s'est desactive automatiquement ou manuellement. Causes automatiques : temperature moteur trop basse ou haute, batterie insuffisamment chargee, climatisation intensive.",
            actions: ["Rien a faire — il se reactive seul", "Si le systeme ne se reactive jamais, faites verifier la batterie 12V"],
            anchor: '#voiture-cercle'
        }
    },
    fau: {
        behavior: false,
        result: {
            name: "FAU desactive — Freinage Automatique d'Urgence",
            urgency: 'check', label: 'A verifier maintenant',
            what: "Le systeme de freinage d'urgence automatique est desactive. La cause n°1 : une ceinture de securite non bouclee. Le systeme se coupe volontairement dans ce cas.",
            actions: ["Verifiez que toutes les ceintures sont bouclees (conducteur ET passagers)", "Si les ceintures sont bouclees : verifiez que le capteur de pare-chocs avant n'est pas obstrue (boue, neige)", "Si le voyant reste : diagnostic en atelier pour lecture du code defaut"],
            anchor: '#voiture-cercle'
        }
    },
    'triangle-exclamation': {
        behavior: false,
        result: {
            name: "Defaut general — Point d'exclamation dans un triangle",
            urgency: 'check', label: 'A identifier rapidement',
            what: "Ce voyant signale un defaut general. Il est presque toujours accompagne d'un message sur l'ecran de bord qui precise de quoi il s'agit.",
            actions: ["Lisez le message affiche sur l'ecran — il est generalement explicite", "Si aucun message n'est visible, faites lire les codes defauts en atelier", "Vous pouvez continuer a rouler si le moteur fonctionne normalement"],
            anchor: '#autres-voyants'
        }
    },
    'pression-pneus': {
        behavior: false,
        result: {
            name: 'Pression des pneus insuffisante',
            urgency: 'check', label: 'A verifier des que possible',
            what: "Un ou plusieurs pneus sont en sous-gonflage. La pression a froid est inferieure aux preconisations constructeur.",
            actions: ["Arretez-vous a la prochaine station service", "Verifiez et corrigez les pressions a froid (valeurs sur l'autocollant encadrement porte conducteur)", "Le voyant s'eteint automatiquement apres quelques kilometres une fois les pressions correctes"],
            anchor: '#autres-voyants'
        }
    },
    esp: {
        behavior: true,
        q2: "L'ESP s'allume-t-il brievement ou reste-t-il fixe ?",
        fixe: {
            name: 'ESP desactive ou defaillant',
            urgency: 'soon', label: 'Dans la semaine',
            what: "L'ESP (controle de trajectoire) est desactive en permanence ou defaillant. Vous pouvez rouler, mais sans l'assistance electronique qui corrige les pertes d'adherence.",
            actions: ["Verifiez que vous n'avez pas appuye sur le bouton ESP par inadvertance", "Adaptez votre conduite — pas d'appuis brusques en virage", "Faites diagnostiquer dans la semaine"],
            anchor: '#autres-voyants'
        },
        clignotant: {
            name: 'ESP en action — Fonctionnement normal',
            urgency: 'none', label: 'Aucune urgence',
            what: "Le voyant qui clignote brievement en virage indique que l'ESP intervient activement. C'est exactement son role.",
            actions: ["Rien a faire — le systeme fonctionne correctement", "Adaptez votre vitesse aux conditions de la route"],
            anchor: '#autres-voyants'
        }
    },
    abs: {
        behavior: false,
        result: {
            name: 'ABS desactive',
            urgency: 'soon', label: 'Dans les 48h',
            what: "L'antiblocage des roues (ABS) est hors service. Le freinage classique fonctionne toujours, mais vous n'avez plus la protection contre le blocage des roues.",
            actions: ["Vous pouvez rouler prudemment", "Gardez plus de distance de securite — evitez les freinages brusques", "Faites diagnostiquer dans les 48h (cause frequente : capteur de vitesse de roue)"],
            anchor: '#autres-voyants'
        }
    },
    service: {
        behavior: false,
        result: {
            name: 'Rappel de revision — Voyant service',
            urgency: 'none', label: 'Pas urgent',
            what: "Ce n'est pas une panne. C'est un compteur kilometrique qui vous rappelle qu'une revision est due. Le moteur fonctionne parfaitement.",
            actions: ["Vous pouvez rouler sans restriction", "Planifiez une revision chez votre garagiste", "Vous pouvez reinitialiser le voyant manuellement sans outil en moins de 30 secondes — voir procedure dans l'article"],
            anchor: '#reset'
        }
    },
    epb: {
        behavior: false,
        result: {
            name: 'Frein a main electrique (EPB)',
            urgency: 'urgent', label: 'Verifiez immediatement',
            what: "Le frein electrique de stationnement est serre ou presente un defaut. Rouler avec le frein serre endommage les disques et plaquettes arriere.",
            actions: ["Verifiez immediatement que le frein a main est bien relache", "Si le frein est relache et que le voyant reste : defaut du systeme EPB", "Diagnostic en atelier requis"],
            anchor: '#autres-voyants'
        }
    },
    antipollution: {
        behavior: true,
        q2: 'Ce voyant antipollution est-il fixe ou clignotant ?',
        fixe: {
            name: 'Voyant antipollution — Defaut systeme (fixe)',
            urgency: 'soon', label: 'Dans la semaine',
            what: "Un defaut est detecte sur le systeme de depollution : FAP, catalyseur, vanne EGR ou sonde lambda. Sur les BlueHDi diesel, verifiez le niveau d'AdBlue en premier.",
            actions: ["Vous pouvez rouler a court terme", "Evitez les trajets exclusivement urbains courts : le FAP a besoin de regenerer sur route", "Faites diagnostiquer dans la semaine — un FAP bouche coute entre 800 et 2 000 euros"],
            anchor: '#autres-voyants'
        },
        clignotant: {
            name: 'Voyant antipollution — Defaut actif (clignotant)',
            urgency: 'urgent', label: 'Urgent — 48h max',
            what: "Le defaut antipollution est actif et s'aggrave. Rouler trop longtemps dans cet etat peut bloquer le FAP definitvement.",
            actions: ["Faites un trajet de 20-30 min sur route ou autoroute a regime soutenu pour tenter une regeneration du FAP", "Passez en atelier dans les 48h si le voyant reste allume apres ce trajet"],
            anchor: '#autres-voyants'
        }
    },
    batterie: {
        behavior: false,
        result: {
            name: 'Voyant batterie — Alternateur ou batterie defaillant',
            urgency: 'urgent', label: 'A traiter rapidement',
            what: "L'alternateur ne charge plus correctement la batterie. Le vehicule fonctionne sur la charge restante — vous avez un temps limite avant que la voiture ne s'arrete.",
            actions: ["Coupez tous les consommateurs non essentiels : clim, radio, chauffage electrique", "Rejoignez un garage ou un endroit sur le plus vite possible", "Ne coupez pas le moteur — il pourrait ne pas redemarrer"],
            anchor: '#rouler'
        }
    }
};

let vdCurrent = null;

function vdSelect(btn) {
    document.querySelectorAll('.vd-icon-btn').forEach(b => b.classList.remove('selected'));
    btn.classList.add('selected');
    vdCurrent = btn.dataset.voyant;
    const v = VD[vdCurrent];
    if (!v) return;
    if (v.behavior) {
        document.getElementById('vd-q2').textContent = v.q2 || 'Comment se comporte le voyant ?';
        vdGo(2);
    } else {
        vdRender(v.result);
        vdGo(3);
    }
}

function vdBehavior(b) {
    const v = VD[vdCurrent];
    if (!v) return;
    vdRender(v[b]);
    vdGo(3);
}

function vdRender(r) {
    const cls = { none:'urgency-none', check:'urgency-check', soon:'urgency-soon', urgent:'urgency-urgent' }[r.urgency] || 'urgency-check';
    const acts = r.actions.map(a => `<div class="vd-result-action">${a}</div>`).join('');
    document.getElementById('vd-result-output').innerHTML = `
        <div class="vd-result-card ${cls}">
            <div class="vd-result-top">
                <div class="vd-result-name">${r.name}</div>
                <div class="vd-urgency-badge">${r.label}</div>
            </div>
            <p class="vd-result-what">${r.what}</p>
            <div class="vd-result-action-title">Quoi faire</div>
            <div class="vd-result-actions">${acts}</div>
            <a href="${r.anchor}" class="vd-result-link">
                Lire l'explication complete dans l'article
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
            </a>
        </div>`;
}

function vdGo(n) {
    document.querySelectorAll('.vd-panel').forEach(p => p.classList.remove('active'));
    document.getElementById('vd-panel-' + n).classList.add('active');
    for (let i = 1; i <= 3; i++) {
        const s = document.getElementById('vd-step-' + i);
        s.classList.remove('active', 'done');
        if (i < n) s.classList.add('done');
        if (i === n) s.classList.add('active');
    }
    if (window.innerWidth < 900) {
        document.getElementById('vd-tool').scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

function vdReset() {
    vdCurrent = null;
    document.querySelectorAll('.vd-icon-btn').forEach(b => b.classList.remove('selected'));
    document.getElementById('vd-result-output').innerHTML = '';
    vdGo(1);
}
</script>

<?php include __DIR__ . '/../footer.php'; ?>

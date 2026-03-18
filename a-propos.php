<?php
/**
 * a-propos.php
 * Page À Propos
 */

$page_title = "À Propos - Le garage expert Auto | Le Blog Auto Indépendant";
$page_description = "Découvrez Le garage expert Auto : le blog automobile indépendant créé par des passionnés de mécanique. Essais, guides d'achat, tutos et conseils 100% objectifs.";

include 'header.php';
?>

<!-- Page Header -->
<section class="page-hero">
    <div class="page-hero-content">
        <span class="hero-badge">Notre Histoire</span>
        <h1>À Propos <span>d'Le garage expert Auto</span></h1>
        <p>Deux passionnés, un blog, une mission : décrypter l'automobile sans filtre.</p>
    </div>
</section>

<!-- About Content -->
<section class="about-content">
    <div class="about-container">

        <div class="about-intro">
            <div class="about-text">
                <h2>Un blog né <span>du cambouis</span></h2>
                <p>Le garage expert Auto n'est pas un énième blog auto créé par des marketeurs. C'est avant tout une
                    histoire de famille, celle d'un père et de son fils qui ont passé leurs week-ends les mains dans le
                    cambouis Ã  démonter des moteurs, et leurs soirées Ã  dévorer les essais des magazines spécialisés.
                </p>
                <p>Fondé par <strong>David (le père mécanicien)</strong> et <strong>Arnaud (le fils essayeur)</strong>,
                    Le garage expert Auto est né d'un constat simple : il manquait un média automobile véritablement
                    <strong>indépendant</strong>. Un endroit oÃ¹ les conseils d'achat ne sont pas dictés par les
                    constructeurs, oÃ¹ les avis mécaniques viennent de vrais techniciens, et oÃ¹ chaque article est
                    écrit avec la rigueur d'un passionné qui veut aider d'autres passionnés.
                </p>
            </div>
            <div class="about-image">
                <img src="/Image/both.png" alt="David et Arnaud - Le garage expert Auto">
            </div>
        </div>

        <div class="about-values">
            <h2>Nos <span>Engagements</span></h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">01</div>
                    <h3>100% Indépendant</h3>
                    <p>Aucune affiliation Ã  un constructeur, garage ou assureur. Nos avis ne s'achètent pas. On dit ce
                        qu'on pense, point.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">02</div>
                    <h3>Expertise Terrain</h3>
                    <p>Nos rédacteurs ont une vraie expérience de la mécanique. Pas de reprise de fiches constructeur :
                        on teste, on démonte, on explique.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">03</div>
                    <h3>Rigueur Éditoriale</h3>
                    <p>Chaque article est sourcé, relu et vérifié. On préfère publier moins mais publier mieux. La
                        qualité avant la quantité.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">04</div>
                    <h3>Transparence Totale</h3>
                    <p>Si un article contient un lien commercial, c'est indiqué clairement. Notre modèle économique est
                        simple et honnête.</p>
                </div>
            </div>
        </div>

        <div class="about-mission">
            <h2>Notre <span>Mission</span></h2>
            <div class="mission-content">
                <p>Que vous soyez à la recherche de votre première voiture d'occasion, que vous hésitiez entre une
                    hybride et une électrique, ou que vous vouliez simplement comprendre pourquoi votre voyant moteur
                    s'allume, nous sommes là pour vous guider.</p>
                <p>Notre ambition : devenir <strong>la référence francophone</strong> en matière de conseils automobiles
                    indépendants. Un magazine en ligne où chaque lecteur repart avec une information fiable et
                    actionnable.</p>
                <a href="/equipe" class="btn-primary" style="margin-top:20px;">Découvrir l'équipe →</a>
            </div>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
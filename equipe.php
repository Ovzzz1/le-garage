<?php
/**
 * equipe.php
 * Page Équipe
 */

$page_title = "L'Équipe - Le garage expert Auto | Histoire de L'Atelier D'Arnaud Et David";
$page_description = "Rencontrez David (le père) et Arnaud (le fils), les deux passionnés d'automobile derrière Le garage expert Auto. Expertise mécanique, essais et conseils indépendants.";

include 'header.php';
?>

<!-- Page Header -->
<section class="page-hero">
    <div class="page-hero-content">
        <span class="hero-badge">Les Visages du Blog</span>
        <h1>Notre <span>Équipe</span></h1>
        <p>Une histoire de famille. Un père avec 30 ans d'expérience dans le garage, et un fils avec une plume et une
            passion dévorante pour l'automobile.</p>
    </div>
</section>

<!-- Team Members -->
<section class="team-section">
    <div class="team-container">

        <!-- David (Le Père) -->
        <div class="team-member">
            <div class="member-photo">
                <img src="/Image/david.png" alt="Photo de David - Cofondateur Le garage expert Auto">
            </div>
            <div class="member-info">
                <span class="member-role">Co-fondateur & Expert Mécanique (Le Père)</span>
                <h2>David</h2>
                <p class="member-tagline">Â« Une voiture, ça s'écoute avant de se conduire. Â»</p>
                <p>Ancien mécanicien de profession avec plus de 30 ans passés les mains dans les moteurs, David a tout
                    vu, des carburateurs capricieux aux premières hybrides. S'il n'écrit pas les articles lui-même, il
                    est la caution technique absolue du site.</p>
                <p>Il relit, corrige, et guide Arnaud dans tous les dossiers orientés fiabilité, achat d'occasion et
                    entretien. Aucune affirmation technique n'est publiée sans avoir reçu l'approbation du "chef de
                    garage".</p>
                <div class="member-expertise">
                    <span class="expertise-tag">Mécanique Pure</span>
                    <span class="expertise-tag">Fiabilité Moteur</span>
                    <span class="expertise-tag">Conseil Atelier</span>
                    <span class="expertise-tag">Diagnostic</span>
                </div>
            </div>
        </div>

        <!-- Arnaud -->
        <div class="team-member team-member-reverse">
            <div class="member-photo">
                <img src="/Image/arnaud.png" alt="Photo d'Arnaud - Cofondateur Le garage expert Auto">
            </div>
            <div class="member-info">
                <span class="member-role">Essayeur, Rédacteur & Passionné (Le Fils)</span>
                <h2>Arnaud</h2>
                <p class="member-tagline">Â« Entre deux mondes : celui des soupapes de mon père, et celui des batteries
                    de mon époque. Â»</p>
                <p>Tombé dans le cambouis quand il était petit, Arnaud est la plume et l'essayeur du duo. Il a
                    transformé l'héritage automobile de son père en une véritable expertise journalistique.</p>
                <p>C'est lui qui prend le volant, arpente les concessions, décortique les offres de financement, la
                    législation (ZFE, malus) et rédige 100% des articles du blog Le garage expert Auto. Son but : rendre
                    l'automobile accessible, transparente et moins coûteuse pour tous.</p>
                <div class="member-expertise">
                    <span class="expertise-tag">Essais</span>
                    <span class="expertise-tag">Assurance & Financement</span>
                    <span class="expertise-tag">Marché Neuf</span>
                    <span class="expertise-tag">Législation (ZFE)</span>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA Rejoindre -->
<section class="team-cta">
    <div class="team-cta-content">
        <h2>Envie de rejoindre <span>la rédaction</span> ?</h2>
        <p>On est toujours Ã  la recherche de plumes passionnées par l'automobile. Si vous avez une expertise mécanique,
            une passion pour les essais ou un œil aiguisé sur le marché, contactez-nous !</p>
        <a href="mailto:contact@autoexpert.fr" class="btn-primary">Contactez-nous â†’</a>
    </div>
</section>

<?php include 'footer.php'; ?>
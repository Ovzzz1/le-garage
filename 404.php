<?php
/**
 * 404.php
 * Page d'Erreur 404
 */
header("HTTP/1.0 404 Not Found");

$page_title = "Oulah, Sortie de route l'amigos ! ! Erreur 404";
$page_description = "La page que vous cherchez n'existe plus ou a été déplacée.";

include 'header.php';
?>

<section class="page-hero" style="min-height: 50vh; display:flex; align-items:center; justify-content:center; text-align:center;">
    <div class="page-hero-content" style="max-width: 600px; margin: 0 auto;">
        <span class="hero-badge" style="background:#dc2626; color:white;">Erreur 404</span>
        <h1 style="color:var(--color-primary); font-size:5rem; margin-bottom:10px;">404</h1>
        <h2 style="font-size:2.5rem; margin-bottom: 20px;">Sortie de route !</h2>
        <p style="margin-bottom: 40px; font-size:1.2rem; color:#4b5563;">Le moteur a calé... La page que vous cherchez n'existe plus ou l'URL est incorrecte.</p>
        <a href="./" class="btn-primary" style="display:inline-flex; align-items:center; justify-content:center;">Retour au garage (Accueil)</a>
    </div>
</section>

<?php include 'footer.php'; ?>


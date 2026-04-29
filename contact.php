<?php
/**
 * contact.php
 * Page Contact
 */

$page_title = "Contact - Le garage expert Auto | Le Blog Auto Indépendant";
$page_description = "Contactez l'équipe d'Le garage expert Auto. Une question, une suggestion ou une demande de partenariat ? Écrivez-nous via notre formulaire.";

include 'header.php';
?>

<!-- Page Header -->
<section class="page-hero">
    <div class="page-hero-content">
        <span class="hero-badge">Nous écrire</span>
        <h1>Contactez <span>l'équipe</span></h1>
        <p>Une question pour David ou Arnaud ? Une suggestion d'essai ? Écrivez-nous.</p>
    </div>
</section>

<!-- Contact Content -->
<section class="about-content" style="padding: 60px 0;">
    <div class="about-container" style="max-width: 800px; margin: 0 auto; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);">
        
        <div style="text-align: center; margin-bottom: 40px;">
            <p style="font-size: 1.1rem; color: #4b5563; line-height: 1.7;">Vous pouvez également nous joindre directement par e-mail Ã  l'adresse : <br><a href="mailto:marinepernault@protonmail.com" style="color: var(--color-primary); font-weight: 600;">marinepernault@protonmail.com</a></p>
        </div>

        <form action="#" method="POST" class="contact-form" style="display: flex; flex-direction: column; gap: 20px;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <label for="name" style="font-weight: 600; font-size: 0.95rem;">Nom complet</label>
                    <input type="text" id="name" name="name" required style="padding: 12px; border: 1px solid #e5e7eb; border-radius: 6px; font-family: inherit;">
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <label for="email" style="font-weight: 600; font-size: 0.95rem;">Adresse e-mail</label>
                    <input type="email" id="email" name="email" required style="padding: 12px; border: 1px solid #e5e7eb; border-radius: 6px; font-family: inherit;">
                </div>
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label for="subject" style="font-weight: 600; font-size: 0.95rem;">Sujet de votre message</label>
                <select id="subject" name="subject" style="padding: 12px; border: 1px solid #e5e7eb; border-radius: 6px; font-family: inherit; background-color: white;">
                    <option value="question">Question mécanique ou technique</option>
                    <option value="suggestion">Suggestion d'article ou d'essai</option>
                    <option value="partenariat">Demande de partenariat / publicitaire</option>
                    <option value="autre">Autre demande</option>
                </select>
            </div>

            <div style="display: flex; flex-direction: column; gap: 8px;">
                <label for="message" style="font-weight: 600; font-size: 0.95rem;">Votre message</label>
                <textarea id="message" name="message" rows="6" required style="padding: 12px; border: 1px solid #e5e7eb; border-radius: 6px; font-family: inherit; resize: vertical;"></textarea>
            </div>

            <button type="submit" class="btn-primary" style="align-self: flex-start; margin-top: 10px; border: none; cursor: pointer; display: inline-flex; justify-content: center; align-items: center;">Envoyer le message</button>
        </form>

    </div>
</section>

<?php include 'footer.php'; ?>


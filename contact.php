<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Vite & Gourmand</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="site-header">
        <div class="container header-container">
            <a href="index.php" class="logo">Vite & Gourmand</a>
            <nav class="nav">
                <a href="index.php">Accueil</a>
                <a href="menus.php">Nos Menus</a>
                <a href="contact.php" class="active">Contact</a>
                <a href="connexion.php" class="btn-connexion">Connexion</a>
            </nav>
        </div>
    </header>

    <main class="container" style="max-width: 600px; margin: 40px auto; padding: 20px;">
        <h1 style="text-align: center; margin-bottom: 20px; color: #222;">Contactez-nous</h1>
        <p style="text-align: center; color: #666; margin-bottom: 30px;">
            Une question ou une demande spécifique ? Julie et José vous répondent sous 24h.
        </p>

        <form class="filter-bar" style="display: flex; flex-direction: column; gap: 20px; background: #fff; border: 1px solid #eee; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.03);">
            <div class="filter-group" style="display: flex; flex-direction: column; gap: 5px;">
                <label style="font-weight: 600; color: #555;">Objet de votre message :</label>
                <input type="text" placeholder="Ex: Demande de devis baptême" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div class="filter-group" style="display: flex; flex-direction: column; gap: 5px;">
                <label style="font-weight: 600; color: #555;">Votre adresse e-mail :</label>
                <input type="email" placeholder="Ex: nom@exemple.com" required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div class="filter-group" style="display: flex; flex-direction: column; gap: 5px;">
                <label style="font-weight: 600; color: #555;">Votre message :</label>
                <textarea rows="5" placeholder="Précisez la date, le lieu de l'événement et le nombre d'invités..." required style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-family: inherit; resize: vertical;"></textarea>
            </div>

            <button type="submit" class="btn-filter" style="width: 100%; padding: 12px; font-weight: bold; cursor: pointer;">Envoyer mon message</button>
        </form>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2026 Vite & Gourmand. Tous droits réservés.</p>
        </div>
    </footer>

</body>
</html>
